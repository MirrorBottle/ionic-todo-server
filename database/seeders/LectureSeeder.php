<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
            [
                'name' => 'Alpro Lanjut',
                'sheet_id' => '1943073652',
                'day' => 1
            ],
            [
                'name' => 'Sistem Digital',
                'sheet_id' => '548366620',
                'day' => 2
            ],
            [
                'name' => 'Matematika Diskrit',
                'sheet_id' => '1040178581',
                'day' => 2
            ],
            [
                'name' => 'Jaringan Komputer',
                'sheet_id' => '1413432110',
                'day' => 3
            ],
            [
                'name' => 'Sistem Operasi',
                'sheet_id' => '1747832787',
                'day' => 3
            ],
            [
                'name' => 'Metode Numerik',
                'sheet_id' => '1298767435',
                'day' => 4
            ],
            [
                'name' => 'B. Indo',
                'sheet_id' => '808680808',
                'day' => 5
            ],
            [
                'name' => 'PKN',
                'sheet_id' => '424897383',
                'day' => 5
            ],
        ]);
    }
}
