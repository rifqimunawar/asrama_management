<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team')->insert([
            'nama' => 'prof obi',
            'posisi' => 'lt 1',
            'hp' => '8456123',
            'kampus' => 'uninus',
            'domisili' => 'bandung',
            'pembayaran'=>'500.000',
            'img' => 'asrama0.jpeg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('team')->insert([
            'nama' => 'habib',
            'posisi' => 'habibullah',
            'hp' => '8456123',
            'kampus' => 'uninus',
            'domisili' => 'bandung',
            'img' => 'asrama10.jpeg',
            'pembayaran'=>'500.000',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
