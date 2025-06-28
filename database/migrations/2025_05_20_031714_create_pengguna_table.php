<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id(); // otomatis sebagai primary key, auto increment
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password'); // password di-hash saat menyimpan data, bukan di schema
            $table->string('no_hp')->nullable(); // ubah ke string, karena nomor HP bisa mengandung 0 di awal
            $table->decimal('saldo', 15, 2)->nullable(); // untuk nilai uang, gunakan decimal
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
