<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nim' => "2109106001",
                "name" => "Herni Suhartati"
            ],
            [
                "nim" => "2109106018",
                "name" => "Alfi Nor Ihsan"
            ],
            [
                "nim" => "2109106024",
                "name" => "Ananta Yusra Putra Akmal"
            ],
            [
                "nim" => "2109106025",
                "name" => "Rismayanti"
            ],
            [
                "nim" => "2109106026",
                "name" => "Bayu Setiawan"
            ],
            [
                "nim" => "2109106051",
                "name" => "Reihan Al Sya'ban"
            ],
            [
                "nim" => "2109106052",
                "name" => "Muhammad Firdaus"
            ],
        ];
        DB::table('users')->insert($users);
    }
}
