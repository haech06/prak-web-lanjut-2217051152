<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultasList = [
            ['nama_fakultas' => 'Fakultas Teknik'],
            ['nama_fakultas' => 'Fakultas Ekonomi'],
            ['nama_fakultas' => 'Fakultas Ilmu Sosial dan Ilmu Politik'],
            ['nama_fakultas' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam'],
            
            // Tambahkan data fakultas lainnya
        ];

        foreach ($fakultasList as $fakultas) {
            Fakultas::create($fakultas);
        }
    }
}

