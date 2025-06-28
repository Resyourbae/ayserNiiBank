<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    private function formatAmount($amount)
    {
        return number_format((float)$amount, 2, '.', '');
    }

    public function topUp(Request $request)
    {
        try {
            $validated = $request->validate([
                'amount' => ['required', 'numeric', 'min:10000', 'max:100000000']
            ]);

            $result = null;
            DB::transaction(function () use ($validated, &$result) {
                $user = Auth::user();
                if (!$user) {
                    throw new \Exception('User not authenticated');
                }

                // Lock user row to prevent race conditions
                $user = Pengguna::where('id', $user->id)->lockForUpdate()->first();

                $currentBalance = (float)$user->saldo;
                $topUpAmount = (float)$validated['amount'];
                $newBalance = $currentBalance + $topUpAmount;

                $user->saldo = $this->formatAmount($newBalance);
                $user->save();

                $result = $user;
            });

            if (!$result) {
                throw new \Exception('Terjadi kesalahan saat memproses top up');
            }

            return response()->json([
                'success' => true,
                'message' => 'Top up berhasil',
                'new_balance' => $result->saldo
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->errors()['amount'][0] ?? 'Jumlah top up tidak valid'
            ], 422);
        } catch (\Exception $e) {
            Log::error('Top up error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat top up'
            ], 500);
        }
    }

    public function withdraw(Request $request)
    {
        try {
            $validated = $request->validate([
                'amount' => ['required', 'numeric', 'min:50000', 'max:100000000']
            ]);

            $result = null;
            DB::transaction(function () use ($validated, &$result) {
                $user = Auth::user();
                if (!$user) {
                    throw new \Exception('User not authenticated');
                }

                // Lock user row to prevent race conditions
                $user = Pengguna::where('id', $user->id)->lockForUpdate()->first();

                $currentBalance = (float)$user->saldo;
                $withdrawAmount = (float)$validated['amount'];

                if ($currentBalance < $withdrawAmount) {
                    throw new \Exception('Saldo tidak mencukupi');
                }

                $newBalance = $currentBalance - $withdrawAmount;
                $user->saldo = $this->formatAmount($newBalance);
                $user->save();

                $result = $user;
            });

            if (!$result) {
                throw new \Exception('Terjadi kesalahan saat memproses penarikan');
            }

            return response()->json([
                'success' => true,
                'message' => 'Penarikan berhasil',
                'new_balance' => $result->saldo
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->errors()['amount'][0] ?? 'Jumlah penarikan tidak valid'
            ], 422);
        } catch (\Exception $e) {
            Log::error('Withdrawal error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => $e->getMessage() ?: 'Terjadi kesalahan saat penarikan'
            ], 500);
        }
    }

    public function transfer(Request $request)
    {
        try {
            $validated = $request->validate([
                'amount' => ['required', 'numeric', 'min:10000', 'max:100000000'],
                'phone' => ['required', 'exists:pengguna,no_hp']
            ]);

            $result = null;
            DB::transaction(function () use ($validated, &$result) {
                $sender = Auth::user();
                if (!$sender) {
                    throw new \Exception('User not authenticated');
                }

                // Lock both users to prevent race conditions
                $senderId = $sender->id;
                $recipient = Pengguna::where('no_hp', $validated['phone'])->first();

                if (!$recipient) {
                    throw new \Exception('Penerima tidak ditemukan');
                }

                $recipientId = $recipient->id;

                if ($senderId === $recipientId) {
                    throw new \Exception('Tidak dapat transfer ke nomor telepon sendiri');
                }

                // Lock in order of ID to prevent deadlock
                if ($senderId < $recipientId) {
                    $sender = Pengguna::where('id', $senderId)->lockForUpdate()->first();
                    $recipient = Pengguna::where('id', $recipientId)->lockForUpdate()->first();
                } else {
                    $recipient = Pengguna::where('id', $recipientId)->lockForUpdate()->first();
                    $sender = Pengguna::where('id', $senderId)->lockForUpdate()->first();
                }

                if (!$recipient) {
                    throw new \Exception('Penerima tidak ditemukan');
                }

                $senderBalance = (float)$sender->saldo;
                $transferAmount = (float)$validated['amount'];

                if ($senderBalance < $transferAmount) {
                    throw new \Exception('Saldo tidak mencukupi');
                }

                $recipientBalance = (float)$recipient->saldo;

                $sender->saldo = $this->formatAmount($senderBalance - $transferAmount);
                $recipient->saldo = $this->formatAmount($recipientBalance + $transferAmount);

                $sender->save();
                $recipient->save();

                $result = $sender;
            });

            if (!$result) {
                throw new \Exception('Terjadi kesalahan saat memproses transfer');
            }

            return response()->json([
                'success' => true,
                'message' => 'Transfer berhasil',
                'new_balance' => $result->saldo
            ]);
        } catch (ValidationException $e) {
            $errorMessage = 'Data transfer tidak valid';
            if (isset($e->errors()['amount'])) {
                $errorMessage = $e->errors()['amount'][0];
            } elseif (isset($e->errors()['phone'])) {
                $errorMessage = $e->errors()['phone'][0];
            }

            return response()->json([
                'success' => false,
                'message' => $errorMessage
            ], 422);
        } catch (\Exception $e) {
            Log::error('Transfer error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => $e->getMessage() ?: 'Terjadi kesalahan saat transfer'
            ], 500);
        }
    }
}
