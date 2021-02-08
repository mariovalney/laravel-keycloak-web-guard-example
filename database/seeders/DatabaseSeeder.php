<?php

namespace Database\Seeders;

use DB;
use Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examples')->insert([ 'title' => Str::random(10) ]);
        DB::table('examples')->insert([ 'title' => Str::random(10) ]);
        DB::table('examples')->insert([ 'title' => Str::random(10) ]);
        DB::table('examples')->insert([ 'title' => Str::random(10) ]);
    }
}
