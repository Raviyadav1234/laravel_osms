<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tbl_submitrequest')->insert([
            'request_info' => Str::random(10),
            'request_desc' => Str::random(10),
            'requester_name' => Str::random(10),
            'requester_add1' => Str::random(10),
            'requester_add2' => Str::random(10),
            'requester_city' => Str::random(10),
            'requester_state' => Str::random(10),
            'requester_pin' => Str::random(10),
            'requester_email' => Str::random(10).'@gmail.com',
            'requester_mobile' => Str::random(10),
            'request_date' => Str::random(10),
            
        ]);
    }
}
