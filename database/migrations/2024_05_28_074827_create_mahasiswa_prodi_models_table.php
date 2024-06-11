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
        Schema::create('mahasiswa_prodi', function (Blueprint $table) {
            $table->bigInteger('nim')->nullable();
            $table->bigInteger('id_prodi')->unsigned();
            $table->timestamps();

            $table->foreign('nim')
            ->references('nim')->on('mahasiswa')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_prodi')
            ->references('id')->on('prodi')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_prodi');
    }
};
