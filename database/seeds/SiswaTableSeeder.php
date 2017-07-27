<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a = [
        ['nama'=>'windi', 'jk'=>'perempuan', 'tanggal_lahir'=>'2000-07-29', 'alamat'=>'kp.cilebak'],
        ['nama'=>'sulis', 'jk'=>'perempuan', 'tanggal_lahir'=>'2000-11-28', 'alamat'=>'jln.animah'],
        ['nama'=>'lindiyani', 'jk'=>'perempuan', 'tanggal_lahir'=>'2000-11-09', 'alamat'=>'kp.cilebak'],
        ['nama'=>'resha', 'jk'=>'perempuan', 'tanggal_lahir'=>'2000-07-31', 'alamat'=>'kp.sekeandur'],
        ['nama'=>'nadiyah', 'jk'=>'perempuan', 'tanggal_lahir'=>'2000-12-05', 'alamat'=>'jln.sayuran'],
        ];
        DB::table('siswa')->insert($a);
    }
}
