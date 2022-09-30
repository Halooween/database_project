<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('coaches')->insert([
            "name"  =>    "saroja gurung",
            "age" =>    "23",
            "gender"  =>  "female",
            "email" =>    "saroja@gmail.com",
            "address" =>    "kamalpokhari, kathmandu",
            "club" => "ktmClub",
            "bio" => "a coach",
            "height" => "5.7"
        ]);
       
    }
}
