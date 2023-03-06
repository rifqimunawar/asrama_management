<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home')->insert([
            'judul' => 'ini judul kedua',
            'deskripsi' => 'anjay mabar cok ',
            'img' => 'asrama5.jpeg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('home')->insert([
            'judul' => 'ini judul yang ketiga',
            'deskripsi' => 'anjay mabar cok ',
            'img' => 'asrama2.jpeg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('home')->insert([
            'judul' => 'ini judul yang ke empat',
            'deskripsi' => 'anjay mabar cok ',
            'img' => 'asrama0.jpeg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}