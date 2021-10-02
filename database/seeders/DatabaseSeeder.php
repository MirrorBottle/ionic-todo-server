<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            [
                'lesson' => 'PTI',
                'title' => 'PTI 2',
                'description' => '-',
                'form_link' => null,
                'deadline' => Carbon::now()->toDateTimeString()
            ]
        ]);
    }
}
