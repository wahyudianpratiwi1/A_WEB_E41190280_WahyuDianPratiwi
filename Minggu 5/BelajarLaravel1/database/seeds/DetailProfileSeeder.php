<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'nama'=>'Wahyu Dian Pratiwi',
            'alamat'=>'Probolinggo',
            'jenis kelamin'=>'Perempuan',
            'prodi'=>'Teknik Informatika'
        ]);
    }
}
