<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert([
            'judul' => 'aksi mahasisa menuntut bbm turun berakhir ricuh',
            'img' => 'galeri_-1678442071.jpeg',
            'body' => 'senat teknik runtuh ini adalah pesan mengenai asrama kami cmiww',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
