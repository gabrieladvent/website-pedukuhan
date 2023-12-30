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
        Schema::create('login', function (Blueprint $table) {
            $table->id();
            $table->string('kode_user');
            $table->timestamps();

            // Mendefinisikan kolom kode_user sebagai foreign key
            $table->foreign('kode_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // Jika ingin menggunakan penghapusan berantai (cascade deletion)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login');
    }
};
