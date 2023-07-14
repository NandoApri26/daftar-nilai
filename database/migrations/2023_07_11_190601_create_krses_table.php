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
        Schema::create('krses', function (Blueprint $table) {
            $table->id();
            $table->integer('sks');
            $table->string('tahun_ajaran');
            $table->foreignId('dosen_id')->constrained('dosens')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kulias')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('semester_id')->constrained('semesters')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krses');
    }
};
