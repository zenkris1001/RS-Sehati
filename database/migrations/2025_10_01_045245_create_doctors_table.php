<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
   Schema::create('doctors', function (Blueprint $table) {
    $table->id();
    $table->string('foto'); // simpan path foto
    $table->string('nama');
    $table->text('spesialis'); // bisa panjang untuk filter
    $table->timestamps();
});
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
