<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => Str::random(30),
            'description' => Str::random(1000),
            'published_at' => new \DateTime,
            // 'pagenumber' => smallint::random(100),
            // 'chapitre' => varchar::random(100),
        ]);

    }
}
