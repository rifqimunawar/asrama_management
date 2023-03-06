<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about')->insert([
            'thumnail' => 'asrama3.jpeg',
            'link' => 'https://www.youtube.com/watch?v=fP13OxgNPpg&ab_channel=D.A.PAudio ',
            'deskripsiabout' => 'ini adalah deskripsi mengenai asrama kami cmiww',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
