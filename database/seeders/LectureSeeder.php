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
            ],
            [
                'name' => 'Sistem Digital',
                'sheet_id' => '548366620',
            ],
            [
                'name' => 'Matematika Diskrit',
                'sheet_id' => '1040178581',
            ],
            [
                'name' => 'PKN',
                'sheet_id' => '424897383',
            ],
            [
                'name' => 'Jaringan Komputer',
                'sheet_id' => '1413432110',
            ],
            [
                'name' => 'Sistem Operasi',
                'sheet_id' => '1747832787',
            ],
            [
                'name' => 'Metode Numerik',
                'sheet_id' => '1298767435',
            ],
            [
                'name' => 'B. Indo',
                'sheet_id' => '808680808',
            ],
        ]);
    }
}
