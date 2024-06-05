<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
            'image' => 'foto1.jpg',
            'title' => 'pemograman web',
            'penerbit' => 'Rendi Fadillah',
            'description' => 'Buku untuk belajar HTML, CSS, JS dan PHP',
            'price' => 1500000,
            'stock' => '20',
            ],
            [
                'image' => 'foto2.jpg',
                'title' => 'pemograman web',
                'penerbit' => 'wawwa Fadillah',
                'description' => 'Buku untuk android',
                'price' => 100000,
                'stock' => '30',
            ],
    ]);
    }
}
