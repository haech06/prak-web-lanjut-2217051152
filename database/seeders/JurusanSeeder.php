<?php 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::insert([
            ['nama_jurusan' => 'Ilmu Komputer', 'fakultas_id' => 4],
            ['nama_jurusan' => 'Sistem Informasi', 'fakultas_id' => 1],
            ['nama_jurusan' => 'Teknik Sipil', 'fakultas_id' => 2],
            ['nama_jurusan' => 'Teknik Elektro', 'fakultas_id' => 2],
            s
        ]);
    }
}
