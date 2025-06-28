<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show()
    {
        return view('pages.profile');
    }

    public function updatePhoto(Request $request)
    {
        $user = Pengguna::find(Auth::id());

        $validatedData = $request->validate([
            'photo' => ['required', 'image', 'max:2048'], // max 2MB
        ]);

        // Delete old photo if exists
        if ($user->photo) {
            Storage::disk('public')->delete($user->photo);
        }

        // Store new photo
        $path = $request->file('photo')->store('profile-photos', 'public');
        $user->photo = $path;
        $user->save();

        return redirect()->back()->with('success', 'Foto profil berhasil diperbarui!');
    }

    public function deletePhoto()
    {
        $user = Pengguna::find(Auth::id());

        if ($user->photo) {
            Storage::disk('public')->delete($user->photo);
            $user->photo = null;
            $user->save();
            return redirect()->back()->with('success', 'Foto profil berhasil dihapus!');
        }

        return redirect()->back()->with('error', 'Tidak ada foto profil untuk dihapus.');
    }

    public function update(Request $request)
    {
        $user = Pengguna::find(Auth::id());

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('pengguna')->ignore($user->id)],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'photo' => ['nullable', 'image', 'max:2048'], // max 2MB
        ]);

        $user->nama = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->no_hp = $validatedData['phone'];

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }

            // Store new photo
            $path = $request->file('photo')->store('profile-photos', 'public');
            $user->photo = $path;
        }

        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}
