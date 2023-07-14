<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramStudi::create([
            'program_studi' => 'Sistem Komputer',
            'fakultas_id' => 1
        ]);
        ProgramStudi::create([
            'program_studi' => 'Sistem Informasi',
            'fakultas_id' => 1
        ]);
        ProgramStudi::create([
            'program_studi' => 'Teknik Informatika',
            'fakultas_id' => 1
        ]);
    }
}
