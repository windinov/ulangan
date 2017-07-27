<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        ['title'=>'Tips Cepat Nikah', 'content'=>'Lorem Ipsum'],
        ['title'=>'Tips Berlulur', 'content'=>'Lorem Ipsum'],
        ['title'=>'Tips Memasak', 'content'=>'Lorem Ipsum'],
        ];
        DB::table('Posts')->insert($a);
    }
}
