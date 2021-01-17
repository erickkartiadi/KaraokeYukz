<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 15; $i++) {
            DB::table('songs')->insert([
                'title' => Str::random(10),
                'artist_name' => $faker->name(),
                'album_name' => Str::random(12),
                'release_date' => $faker->date('Y-m-d', 'now'),
                'lyric' => $faker->paragraph(3, true)
            ]);
        }
    }
}
