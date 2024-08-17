<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Sekolah;
use App\Models\Mapel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guru::factory(2)->create();


        Siswa::factory(10)->create();


        Mapel::create([
            'nama' => 'Matematika'
        ]);

        
        Mapel::create([
            'nama' => 'Matematika Tingkat Lanjut'
        ]);
        Sekolah::create([
            'nama' => 'SMAN 8 Banjarmasin'
        ]);


        Kelas::create([
            'nama'=>'XI 9', 
            'slug'=>'XI9_SMAN8BJM_MTKTL_2024', 
            'banyakSiswa'=>24, 
            'guru_id'=>1,
            'mapel_id'=>2,
            'sekolah_id' => 1
        ]);
        Kelas::create([
            'nama'=>'XI 9', 
            'slug'=>'XI9_SMAN8BJM_MTK_2024', 
            'banyakSiswa'=>24, 
            'guru_id'=>2,
            'mapel_id'=>1,
            'sekolah_id' => 1
        ]);
        Kelas::create([
            'nama'=>'XI 10', 
            'slug'=>'XI10_SMAN8BJM_MTKTL_2024', 
            'banyakSiswa'=>32, 
            'guru_id'=>1,
            'mapel_id'=>2,
            'sekolah_id' => 1
        ]);
    }
}
