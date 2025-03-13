<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    public function run()
    {
        //insert data ke tabel pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Jl. Raya No. 1',
            'nomor_tlp' => '08123456789',
            'ttl' => '1990-01-01',
            'foto' => 'default.jpg',
        ]);
    }
}
