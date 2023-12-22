<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cons_lists')->delete();
        $cons_lists =[
            
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>1,
              "AC_NAME"=>"Sujanpur",
              "AC_TYPE"=>1,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>2,
              "AC_NAME"=>"Bhoa (SC)",
              "AC_TYPE"=>2,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>3,
              "AC_NAME"=>"Pathankot",
              "AC_TYPE"=>1,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>4,
              "AC_NAME"=>"Gurdaspur",
              "AC_TYPE"=>1,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>5,
              "AC_NAME"=>"Dina Nagar (SC)",
              "AC_TYPE"=>2,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>6,
              "AC_NAME"=>"Qadian",
              "AC_TYPE"=>1,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>7,
              "AC_NAME"=>"Batala",
              "AC_TYPE"=>1,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>9,
              "AC_NAME"=>"Fatehgarh Churian",
              "AC_TYPE"=>1,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>10,
              "AC_NAME"=>"Dera Baba Nanak",
              "AC_TYPE"=>1,
              "PC_NO"=>1
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>11,
              "AC_NAME"=>"Ajnala",
              "AC_TYPE"=>1,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>12,
              "AC_NAME"=>"Raja Sansi",
              "AC_TYPE"=>1,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>13,
              "AC_NAME"=>"Majitha",
              "AC_TYPE"=>1,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>15,
              "AC_NAME"=>"Amritsar North",
              "AC_TYPE"=>1,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>16,
              "AC_NAME"=>"Amritsar West",
              "AC_TYPE"=>2,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>17,
              "AC_NAME"=>"Amritsar Central",
              "AC_TYPE"=>1,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>18,
              "AC_NAME"=>"Amritsar East",
              "AC_TYPE"=>1,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>19,
              "AC_NAME"=>"Amritsar South",
              "AC_TYPE"=>1,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>20,
              "AC_NAME"=>"Attari",
              "AC_TYPE"=>2,
              "PC_NO"=>2
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>14,
              "AC_NAME"=>"Jandiala",
              "AC_TYPE"=>2,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>3,
              "AC_NO"=>21,
              "AC_NAME"=>"Tarn Taran",
              "AC_TYPE"=>1,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>3,
              "AC_NO"=>22,
              "AC_NAME"=>"Khem Karan",
              "AC_TYPE"=>1,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>3,
              "AC_NO"=>23,
              "AC_NAME"=>"Patti",
              "AC_TYPE"=>1,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>3,
              "AC_NO"=>24,
              "AC_NAME"=>"Khadoor Sahib",
              "AC_TYPE"=>1,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>2,
              "AC_NO"=>25,
              "AC_NAME"=>"Baba Bakala",
              "AC_TYPE"=>2,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>4,
              "AC_NO"=>27,
              "AC_NAME"=>"Kapurthala",
              "AC_TYPE"=>1,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>4,
              "AC_NO"=>28,
              "AC_NAME"=>"Sultanpur Lodhi",
              "AC_TYPE"=>1,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>75,
              "AC_NAME"=>"Zira",
              "AC_TYPE"=>1,
              "PC_NO"=>3
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>30,
              "AC_NAME"=>"Phillaur",
              "AC_TYPE"=>2,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>31,
              "AC_NAME"=>"Nakodar",
              "AC_TYPE"=>1,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>32,
              "AC_NAME"=>"Shahkot",
              "AC_TYPE"=>1,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>33,
              "AC_NAME"=>"Kartarpur",
              "AC_TYPE"=>2,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>34,
              "AC_NAME"=>"Jalandhar West",
              "AC_TYPE"=>2,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>35,
              "AC_NAME"=>"Jalandhar Central",
              "AC_TYPE"=>1,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>36,
              "AC_NAME"=>"Jalandhar North",
              "AC_TYPE"=>1,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>37,
              "AC_NAME"=>"Jalandhar Cantt.",
              "AC_TYPE"=>1,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>5,
              "AC_NO"=>38,
              "AC_NAME"=>"Adampur",
              "AC_TYPE"=>2,
              "PC_NO"=>4
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>1,
              "AC_NO"=>8,
              "AC_NAME"=>"Sri Hargobindpur (SC)",
              "AC_TYPE"=>2,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>4,
              "AC_NO"=>26,
              "AC_NAME"=>"Bholath",
              "AC_TYPE"=>1,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>4,
              "AC_NO"=>29,
              "AC_NAME"=>"Phagwara",
              "AC_TYPE"=>2,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>6,
              "AC_NO"=>39,
              "AC_NAME"=>"Mukerian",
              "AC_TYPE"=>1,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>6,
              "AC_NO"=>40,
              "AC_NAME"=>"Dasuya",
              "AC_TYPE"=>1,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>6,
              "AC_NO"=>41,
              "AC_NAME"=>"Urmar",
              "AC_TYPE"=>1,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>6,
              "AC_NO"=>42,
              "AC_NAME"=>"Sham Chaurasi",
              "AC_TYPE"=>2,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>6,
              "AC_NO"=>43,
              "AC_NAME"=>"Hoshiarpur",
              "AC_TYPE"=>1,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>6,
              "AC_NO"=>44,
              "AC_NAME"=>"Chabbewal",
              "AC_TYPE"=>2,
              "PC_NO"=>5
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>6,
              "AC_NO"=>45,
              "AC_NAME"=>"Garhshankar",
              "AC_TYPE"=>1,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>7,
              "AC_NO"=>46,
              "AC_NAME"=>"Banga",
              "AC_TYPE"=>2,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>7,
              "AC_NO"=>47,
              "AC_NAME"=>"Nawan Shahr",
              "AC_TYPE"=>1,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>7,
              "AC_NO"=>48,
              "AC_NAME"=>"Balachaur",
              "AC_TYPE"=>1,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>8,
              "AC_NO"=>49,
              "AC_NAME"=>"Anandpur Sahib",
              "AC_TYPE"=>1,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>8,
              "AC_NO"=>50,
              "AC_NAME"=>"Rupnagar",
              "AC_TYPE"=>1,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>8,
              "AC_NO"=>51,
              "AC_NAME"=>"Chamkaur Sahib",
              "AC_TYPE"=>2,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>9,
              "AC_NO"=>52,
              "AC_NAME"=>"Kharar",
              "AC_TYPE"=>1,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>9,
              "AC_NO"=>53,
              "AC_NAME"=>"S.A.S. Nagar",
              "AC_TYPE"=>1,
              "PC_NO"=>6
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>60,
              "AC_NAME"=>"Ludhiana East",
              "AC_TYPE"=>1,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>61,
              "AC_NAME"=>"Ludhiana South",
              "AC_TYPE"=>1,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>62,
              "AC_NAME"=>"Atam Nagar",
              "AC_TYPE"=>1,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>63,
              "AC_NAME"=>"Ludhiana Central",
              "AC_TYPE"=>1,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>64,
              "AC_NAME"=>"Ludhiana West",
              "AC_TYPE"=>1,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>65,
              "AC_NAME"=>"Ludhiana North",
              "AC_TYPE"=>1,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>66,
              "AC_NAME"=>"Gill",
              "AC_TYPE"=>2,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>68,
              "AC_NAME"=>"Dakha",
              "AC_TYPE"=>1,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>70,
              "AC_NAME"=>"Jagraon",
              "AC_TYPE"=>2,
              "PC_NO"=>7
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>10,
              "AC_NO"=>54,
              "AC_NAME"=>"Bassi Pathana",
              "AC_TYPE"=>2,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>10,
              "AC_NO"=>55,
              "AC_NAME"=>"Fatehgarh Sahib",
              "AC_TYPE"=>1,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>10,
              "AC_NO"=>56,
              "AC_NAME"=>"Amloh",
              "AC_TYPE"=>1,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>57,
              "AC_NAME"=>"Khanna",
              "AC_TYPE"=>1,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>58,
              "AC_NAME"=>"Samrala",
              "AC_TYPE"=>1,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>59,
              "AC_NAME"=>"Sahnewal",
              "AC_TYPE"=>1,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>67,
              "AC_NAME"=>"Payal",
              "AC_TYPE"=>2,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>11,
              "AC_NO"=>69,
              "AC_NAME"=>"Raikot",
              "AC_TYPE"=>2,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>18,
              "AC_NO"=>106,
              "AC_NAME"=>"Amargarh",
              "AC_TYPE"=>1,
              "PC_NO"=>8
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>12,
              "AC_NO"=>71,
              "AC_NAME"=>"Nihal Singh Wala",
              "AC_TYPE"=>2,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>12,
              "AC_NO"=>72,
              "AC_NAME"=>"Bhagha Purana",
              "AC_TYPE"=>1,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>12,
              "AC_NO"=>73,
              "AC_NAME"=>"Moga",
              "AC_TYPE"=>1,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>12,
              "AC_NO"=>74,
              "AC_NAME"=>"Dharamkot",
              "AC_TYPE"=>1,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>14,
              "AC_NO"=>84,
              "AC_NAME"=>"Gidderbaha",
              "AC_TYPE"=>1,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>15,
              "AC_NO"=>87,
              "AC_NAME"=>"Faridkot",
              "AC_TYPE"=>1,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>15,
              "AC_NO"=>88,
              "AC_NAME"=>"Kotkapura",
              "AC_TYPE"=>1,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>15,
              "AC_NO"=>89,
              "AC_NAME"=>"Jaitu",
              "AC_TYPE"=>2,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>16,
              "AC_NO"=>90,
              "AC_NAME"=>"Rampura Phul",
              "AC_TYPE"=>1,
              "PC_NO"=>9
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>76,
              "AC_NAME"=>"Firozpur City",
              "AC_TYPE"=>1,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>77,
              "AC_NAME"=>"Firozpur Rural",
              "AC_TYPE"=>2,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>78,
              "AC_NAME"=>"Guru Har Sahai",
              "AC_TYPE"=>1,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>79,
              "AC_NAME"=>"Jalalabad",
              "AC_TYPE"=>1,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>80,
              "AC_NAME"=>"Fazilka",
              "AC_TYPE"=>1,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>81,
              "AC_NAME"=>"Abohar",
              "AC_TYPE"=>1,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>13,
              "AC_NO"=>82,
              "AC_NAME"=>"Balluana",
              "AC_TYPE"=>2,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>14,
              "AC_NO"=>85,
              "AC_NAME"=>"Malout",
              "AC_TYPE"=>2,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>14,
              "AC_NO"=>86,
              "AC_NAME"=>"Muktsar",
              "AC_TYPE"=>1,
              "PC_NO"=>10
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>14,
              "AC_NO"=>83,
              "AC_NAME"=>"Lambi",
              "AC_TYPE"=>1,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>16,
              "AC_NO"=>91,
              "AC_NAME"=>"Bhucho Mandi",
              "AC_TYPE"=>2,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>16,
              "AC_NO"=>92,
              "AC_NAME"=>"Bathinda Urban",
              "AC_TYPE"=>1,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>16,
              "AC_NO"=>93,
              "AC_NAME"=>"Bathinda Rural",
              "AC_TYPE"=>2,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>16,
              "AC_NO"=>94,
              "AC_NAME"=>"Talwandi Sabo",
              "AC_TYPE"=>1,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>16,
              "AC_NO"=>95,
              "AC_NAME"=>"Maur",
              "AC_TYPE"=>1,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>17,
              "AC_NO"=>96,
              "AC_NAME"=>"Mansa",
              "AC_TYPE"=>1,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>17,
              "AC_NO"=>97,
              "AC_NAME"=>"Sardulgarh",
              "AC_TYPE"=>1,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>17,
              "AC_NO"=>98,
              "AC_NAME"=>"Budhlada",
              "AC_TYPE"=>2,
              "PC_NO"=>11
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>18,
              "AC_NO"=>99,
              "AC_NAME"=>"Lehra",
              "AC_TYPE"=>1,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>18,
              "AC_NO"=>100,
              "AC_NAME"=>"Dirba",
              "AC_TYPE"=>2,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>18,
              "AC_NO"=>101,
              "AC_NAME"=>"Sunam",
              "AC_TYPE"=>1,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>19,
              "AC_NO"=>102,
              "AC_NAME"=>"Bhadaur",
              "AC_TYPE"=>2,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>19,
              "AC_NO"=>103,
              "AC_NAME"=>"Barnala",
              "AC_TYPE"=>1,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>19,
              "AC_NO"=>104,
              "AC_NAME"=>"Mehal Kalan",
              "AC_TYPE"=>2,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>18,
              "AC_NO"=>105,
              "AC_NAME"=>"Malerkotla",
              "AC_TYPE"=>1,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>18,
              "AC_NO"=>107,
              "AC_NAME"=>"Dhuri",
              "AC_TYPE"=>1,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>18,
              "AC_NO"=>108,
              "AC_NAME"=>"Sangrur",
              "AC_TYPE"=>1,
              "PC_NO"=>12
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>109,
              "AC_NAME"=>"Nabha",
              "AC_TYPE"=>2,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>110,
              "AC_NAME"=>"Patiala Rural",
              "AC_TYPE"=>1,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>111,
              "AC_NAME"=>"Rajpura",
              "AC_TYPE"=>1,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>9,
              "AC_NO"=>112,
              "AC_NAME"=>"Dera Bassi",
              "AC_TYPE"=>1,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>113,
              "AC_NAME"=>"Ghanaur",
              "AC_TYPE"=>1,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>114,
              "AC_NAME"=>"Sanour",
              "AC_TYPE"=>1,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>115,
              "AC_NAME"=>"Patiala",
              "AC_TYPE"=>1,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>116,
              "AC_NAME"=>"Samana",
              "AC_TYPE"=>1,
              "PC_NO"=>13
            ],
            [
              "ST_CODE"=>"S19",
              
              "distCode"=>20,
              "AC_NO"=>117,
              "AC_NAME"=>"Shutrana",
              "AC_TYPE"=>2,
              "PC_NO"=>13
            ]
          
   ];
   DB::table('cons_lists')->insert($cons_lists);
    }
}
