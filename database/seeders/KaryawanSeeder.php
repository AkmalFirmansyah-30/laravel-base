<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'nama' => 'Test User',
            'alamat' => 'jalan testing 123',
        ]);

        Karyawan::create([
            'nama' => 'Test User ke 2',
            'alamat' => 'jalan testing 123 ke 2',
        ]);
    }
}