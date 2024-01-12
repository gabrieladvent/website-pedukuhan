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
        Schema::create('posting', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('kode_user')->nullable();
            $table->string('headline');
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->unsignedBigInteger('id_sub')->nullable();
            $table->text('body');
            $table->string('foto_satu')->nullable();
            $table->string('foto_dua')->nullable();
            $table->string('foto_tiga')->nullable();
            $table->string('foto_empat')->nullable();
            $table->string('foto_lima')->nullable();
            $table->timestamps();
        
            $table->foreign('kode_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        
            $table->foreign('id_kategori')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade');

            $table->foreign('id_sub')
                ->references('id')
                ->on('item_sub')
                ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posting');
    }
};
