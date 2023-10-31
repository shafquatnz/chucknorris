<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facts')->insert([
            'fact' => 'Time waits for no man. Unless that man is Chuck Norris.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('facts')->insert([
            'fact' => 'If you spell Chuck Norris in Scrabble, you win. Forever.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Chuck Norris has a mug of nails instead of coffee in the morning.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'If Chuck Norris were to travel to an alternate dimension in which there was another Chuck Norris and they both fought, they would both win.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'The dinosaurs looked at Chuck Norris the wrong way once. You know what happened to them.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Chuck Norris once roundhouse kicked someone so hard that his foot broke the speed of light.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Since 1940, the year Chuck Norris was born, roundhouse kick related deaths have increased 13,000 percent.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Chuck Norris does not own a stove, oven or microwave, because revenge is a dish best served cold.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Chuck Norris does not sleep. He waits.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'The chief export of Chuck Norris is pain.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Chuck Norris can dribble a bowling ball.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Chuck Norris drinks napalm to fight his heartburn.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('facts')->insert([
            'fact' => 'Chuck Norris does not use spell check. If he happens to misspell a word, Oxford will change the spelling.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
    }
}
