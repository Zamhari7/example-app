<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa;
        $mhs1->nbi = "1461800001";
        $mhs1->nama_mhs = "Ade Prasetyo";
        $mhs1->save();

        $mhs2 = new Mahasiswa;
        $mhs2->nbi = "1461800002";
        $mhs2->nama_mhs = "Arif Nur";
        $mhs2->save();
    }
}
