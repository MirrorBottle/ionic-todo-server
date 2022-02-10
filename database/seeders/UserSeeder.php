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
                "nim" => "2109106001",
                "name" => "Herni Suhartati",
            ],
            [
                "nim" => "2109106002",
                "name" => "Alif Maulana Setyawan",
            ],
            [
                "nim" => "2109106003",
                "name" => "Bayu Abdurrosyid",
            ],
            [
                "nim" => "2109106004",
                "name" => "Aziizah Oki Shofrina",
            ],
            [
                "nim" => "2109106005",
                "name" => "Dimas Abdi Yudha",
            ],
            [
                "nim" => "2109106006",
                "name" => "Kania Putri Ananda",
            ],
            [
                "nim" => "2109106007",
                "name" => "Aliya Irfani",
            ],
            [
                "nim" => "2109106008",
                "name" => "Chintia Liu Wintin",
            ],
            [
                "nim" => "2109106009",
                "name" => "Rezky Nur Sya'ban",
            ],
            [
                "nim" => "2109106010",
                "name" => "Muhammad Fikri",
            ],
            [
                "nim" => "2109106011",
                "name" => "Ilham Ramadhan",
            ],
            [
                "nim" => "2109106012",
                "name" => "Nurmedina Maulidiah",
            ],
            [
                "nim" => "2109106013",
                "name" => "Bramantyo Ardi Harimurti Wibisono",
            ],
            [
                "nim" => "2109106015",
                "name" => "Andi Nur Fadilah",
            ],
            [
                "nim" => "2109106016",
                "name" => "Muhammad Rahman",
            ],
            [
                "nim" => "2109106017",
                "name" => "Fitra Noviarji",
            ],
            [
                "nim" => "2109106018",
                "name" => "Alfi Nor Ihsan",
            ],
            [
                "nim" => "2109106019",
                "name" => "Dimas Arya Nugraha",
            ],
            [
                "nim" => "2109106020",
                "name" => "Wulan Mulya Septiana",
            ],
            [
                "nim" => "2109106021",
                "name" => "Adlina Safa Sephia Putri",
            ],
            [
                "nim" => "2109106022",
                "name" => "Al Fiana Nur Priyanti",
            ],
            [
                "nim" => "2109106023",
                "name" => "Shafira Octafia",
            ],
            [
                "nim" => "2109106024",
                "name" => "Ananta Yusra Putra Akmal",
            ],
            [
                "nim" => "2109106025",
                "name" => "Rismayanti",
            ],
            [
                "nim" => "2109106026",
                "name" => "Bayu Setiawan",
            ],
            [
                "nim" => "2109106027",
                "name" => "Rifaldi Auliya",
            ],
            [
                "nim" => "2109106028",
                "name" => "Muhammad Nandaarjuna Fadhillah",
            ],
            [
                "nim" => "2109106029",
                "name" => "Maezar Abdillah",
            ],
            [
                "nim" => "2109106030",
                "name" => "Agditha Evalyn Lolongan",
            ],
        
            [
                "nim" => "2109106031",
                "name" => "Kevin Yaneld Cendhana",
            ],
            [
                "nim" => "2109106032",
                "name" => "Muhammad Novan Saputra",
            ],
            [
                "nim" => "2109106033",
                "name" => "Panji Massaid Ibrahim",
            ],
            [
                "nim" => "2109106034",
                "name" => "Muhammad Naufal Ihsan Maulidin",
            ],
            [
                "nim" => "2109106035",
                "name" => "Ardi Setyiawan",
            ],
            [
                "nim" => "2109106036",
                "name" => "Ekleccia Reydianto",
            ],
            [
                "nim" => "2109106037",
                "name" => "Agustina Dwi Maharani",
            ],
            [
                "nim" => "2109106038",
                "name" => "Diky Dwicandra",
            ],
            [
                "nim" => "2109106039",
                "name" => "Ibnu Yafi Arya Wardana",
            ],
            [
                "nim" => "2109106040",
                "name" => "Natalie Fuad",
            ],
            [
                "nim" => "2109106041",
                "name" => "Novia Indah Ramadhani",
            ],
            [
                "nim" => "2109106042",
                "name" => "Tito Darmawan",
            ],
            [
                "nim" => "2109106043",
                "name" => "Hadie Pratama Tulili",
            ],
            [
                "nim" => "2109106044",
                "name" => "Riski Agung Romadhon",
            ],
            [
                "nim" => "2109106045",
                "name" => "Muh Hafiz",
            ],
            [
                "nim" => "2109106046",
                "name" => "Mohammad Heidar Sadhana",
            ],
            [
                "nim" => "2109106047",
                "name" => "Muhammad Irsyadul Asyrof Haryono",
            ],
            [
                "nim" => "2109106048",
                "name" => "Muhammad Arvin Saskoro",
            ],
            [
                "nim" => "2109106049",
                "name" => "Felix Christopher Afrian",
            ],
            [
                "nim" => "2109106050",
                "name" => "Sherina Laraswati",
            ],
            [
                "nim" => "2109106051",
                "name" => "Reihan Al Sya'ban",
            ],
            [
                "nim" => "2109106052",
                "name" => "Muhammad Firdaus",
            ],
            [
                "nim" => "2109106053",
                "name" => "Rafi Izdihaar",
            ],
            [
                "nim" => "2109106054",
                "name" => "Ayu Lestari Gunawan",
            ],
            [
                "nim" => "2109106055",
                "name" => "Wanda Nurhaliza",
            ],
        ];
        DB::table('users')->insert($users);
    }
}
