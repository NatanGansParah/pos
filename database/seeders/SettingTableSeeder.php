<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'NatanPoint',
            'alamat' => 'Perum Mega Permai 1 No.41',
            'telepon' => '085713199721',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/logo-20240213171121.png',
            'path_kartu_member' => '/img/member.png',
        ]);
    }
}
