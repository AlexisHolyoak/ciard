<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 1,
                'nombre' => 'CHACHAPOYAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 1,
                'nombre' => 'ASUNCION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 1,
                'nombre' => 'BALSAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 1,
                'nombre' => 'CHETO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 1,
                'nombre' => 'CHILIQUIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 1,
                'nombre' => 'CHUQUIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 1,
                'nombre' => 'GRANADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 1,
                'nombre' => 'HUANCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 1,
                'nombre' => 'LA JALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 1,
                'nombre' => 'LEIMEBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 1,
                'nombre' => 'LEVANTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 1,
                'nombre' => 'MAGDALENA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 1,
                'nombre' => 'MARISCAL CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 1,
                'nombre' => 'MOLINOPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 1,
                'nombre' => 'MONTEVIDEO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 1,
                'nombre' => 'OLLEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 1,
                'nombre' => 'QUINJALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 1,
                'nombre' => 'SAN FRANCISCO DE DAGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 1,
                'nombre' => 'SAN ISIDRO DE MAINO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 1,
                'nombre' => 'SOLOCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 1,
                'nombre' => 'SONCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 2,
                'nombre' => 'BAGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 2,
                'nombre' => 'ARAMANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 2,
                'nombre' => 'COPALLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 2,
                'nombre' => 'EL PARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => 2,
                'nombre' => 'IMAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => 2,
                'nombre' => 'LA PECA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => 3,
                'nombre' => 'JUMBILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => 3,
                'nombre' => 'CHISQUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => 3,
                'nombre' => 'CHURUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => 3,
                'nombre' => 'COROSHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => 3,
                'nombre' => 'CUISPES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => 3,
                'nombre' => 'FLORIDA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => 3,
                'nombre' => 'JAZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'province_id' => 3,
                'nombre' => 'RECTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'province_id' => 3,
                'nombre' => 'SAN CARLOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'province_id' => 3,
                'nombre' => 'SHIPASBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'province_id' => 3,
                'nombre' => 'VALERA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'province_id' => 3,
                'nombre' => 'YAMBRASBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'province_id' => 4,
                'nombre' => 'NIEVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'province_id' => 4,
                'nombre' => 'EL CENEPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'province_id' => 4,
                'nombre' => 'RIO SANTIAGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'province_id' => 5,
                'nombre' => 'LAMUD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'province_id' => 5,
                'nombre' => 'CAMPORREDONDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'province_id' => 5,
                'nombre' => 'COCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'province_id' => 5,
                'nombre' => 'COLCAMAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'province_id' => 5,
                'nombre' => 'CONILA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'province_id' => 5,
                'nombre' => 'INGUILPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'province_id' => 5,
                'nombre' => 'LONGUITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'province_id' => 5,
                'nombre' => 'LONYA CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'province_id' => 5,
                'nombre' => 'LUYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'province_id' => 5,
                'nombre' => 'LUYA VIEJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'province_id' => 5,
                'nombre' => 'MARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'province_id' => 5,
                'nombre' => 'OCALLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'province_id' => 5,
                'nombre' => 'OCUMAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'province_id' => 5,
                'nombre' => 'PISUQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'province_id' => 5,
                'nombre' => 'PROVIDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'province_id' => 5,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'province_id' => 5,
                'nombre' => 'SAN FRANCISCO DEL YESO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'province_id' => 5,
                'nombre' => 'SAN JERONIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'province_id' => 5,
                'nombre' => 'SAN JUAN DE LOPECANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'province_id' => 5,
                'nombre' => 'SANTA CATALINA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'province_id' => 5,
                'nombre' => 'SANTO TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'province_id' => 5,
                'nombre' => 'TINGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'province_id' => 5,
                'nombre' => 'TRITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'province_id' => 6,
                'nombre' => 'SAN NICOLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'province_id' => 6,
                'nombre' => 'CHIRIMOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'province_id' => 6,
                'nombre' => 'COCHAMAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'province_id' => 6,
                'nombre' => 'HUAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'province_id' => 6,
                'nombre' => 'LIMABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'province_id' => 6,
                'nombre' => 'LONGAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'province_id' => 6,
                'nombre' => 'MARISCAL BENAVIDES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'province_id' => 6,
                'nombre' => 'MILPUC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'province_id' => 6,
                'nombre' => 'OMIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'province_id' => 6,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'province_id' => 6,
                'nombre' => 'TOTORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'province_id' => 6,
                'nombre' => 'VISTA ALEGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'province_id' => 7,
                'nombre' => 'BAGUA GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'province_id' => 7,
                'nombre' => 'CAJARURO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'province_id' => 7,
                'nombre' => 'CUMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'province_id' => 7,
                'nombre' => 'EL MILAGRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'province_id' => 7,
                'nombre' => 'JAMALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'province_id' => 7,
                'nombre' => 'LONYA GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'province_id' => 7,
                'nombre' => 'YAMON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'province_id' => 8,
                'nombre' => 'HUARAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'province_id' => 8,
                'nombre' => 'COCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'province_id' => 8,
                'nombre' => 'COLCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'province_id' => 8,
                'nombre' => 'HUANCHAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'province_id' => 8,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'province_id' => 8,
                'nombre' => 'JANGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'province_id' => 8,
                'nombre' => 'LA LIBERTAD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'province_id' => 8,
                'nombre' => 'OLLEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'province_id' => 8,
                'nombre' => 'PAMPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'province_id' => 8,
                'nombre' => 'PARIACOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'province_id' => 8,
                'nombre' => 'PIRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'province_id' => 8,
                'nombre' => 'TARICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'province_id' => 9,
                'nombre' => 'AIJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'province_id' => 9,
                'nombre' => 'CORIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'province_id' => 9,
                'nombre' => 'HUACLLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'province_id' => 9,
                'nombre' => 'LA MERCED',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'province_id' => 9,
                'nombre' => 'SUCCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'province_id' => 10,
                'nombre' => 'LLAMELLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'province_id' => 10,
                'nombre' => 'ACZO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'province_id' => 10,
                'nombre' => 'CHACCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'province_id' => 10,
                'nombre' => 'CHINGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'province_id' => 10,
                'nombre' => 'MIRGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'province_id' => 10,
                'nombre' => 'SAN JUAN DE RONTOY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'province_id' => 11,
                'nombre' => 'CHACAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'province_id' => 11,
                'nombre' => 'ACOCHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'province_id' => 12,
                'nombre' => 'CHIQUIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'province_id' => 12,
                'nombre' => 'ABELARDO PARDO LEZAMETA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'province_id' => 12,
                'nombre' => 'ANTONIO RAYMONDI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'province_id' => 12,
                'nombre' => 'AQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'province_id' => 12,
                'nombre' => 'CAJACAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'province_id' => 12,
                'nombre' => 'CANIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'province_id' => 12,
                'nombre' => 'COLQUIOC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'province_id' => 12,
                'nombre' => 'HUALLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'province_id' => 12,
                'nombre' => 'HUASTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'province_id' => 12,
                'nombre' => 'HUAYLLACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'province_id' => 12,
                'nombre' => 'LA PRIMAVERA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'province_id' => 12,
                'nombre' => 'MANGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'province_id' => 12,
                'nombre' => 'PACLLON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'province_id' => 12,
                'nombre' => 'SAN MIGUEL DE CORPANQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'province_id' => 12,
                'nombre' => 'TICLLOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'province_id' => 13,
                'nombre' => 'CARHUAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'province_id' => 13,
                'nombre' => 'ACOPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'province_id' => 13,
                'nombre' => 'AMASHCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'province_id' => 13,
                'nombre' => 'ANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'province_id' => 13,
                'nombre' => 'ATAQUERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'province_id' => 13,
                'nombre' => 'MARCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'province_id' => 13,
                'nombre' => 'PARIAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'province_id' => 13,
                'nombre' => 'SAN MIGUEL DE ACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'province_id' => 13,
                'nombre' => 'SHILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'province_id' => 13,
                'nombre' => 'TINCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'province_id' => 13,
                'nombre' => 'YUNGAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'province_id' => 14,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'province_id' => 14,
                'nombre' => 'SAN NICOLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'province_id' => 14,
                'nombre' => 'YAUYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'province_id' => 15,
                'nombre' => 'CASMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'province_id' => 15,
                'nombre' => 'BUENA VISTA ALTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'province_id' => 15,
                'nombre' => 'COMANDANTE NOEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'province_id' => 15,
                'nombre' => 'YAUTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'province_id' => 16,
                'nombre' => 'CORONGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'province_id' => 16,
                'nombre' => 'ACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'province_id' => 16,
                'nombre' => 'BAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'province_id' => 16,
                'nombre' => 'CUSCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'province_id' => 16,
                'nombre' => 'LA PAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'province_id' => 16,
                'nombre' => 'YANAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'province_id' => 16,
                'nombre' => 'YUPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'province_id' => 17,
                'nombre' => 'HUARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'province_id' => 17,
                'nombre' => 'ANRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'province_id' => 17,
                'nombre' => 'CAJAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'province_id' => 17,
                'nombre' => 'CHAVIN DE HUANTAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'province_id' => 17,
                'nombre' => 'HUACACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'province_id' => 17,
                'nombre' => 'HUACCHIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'province_id' => 17,
                'nombre' => 'HUACHIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'province_id' => 17,
                'nombre' => 'HUANTAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'province_id' => 17,
                'nombre' => 'MASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'province_id' => 17,
                'nombre' => 'PAUCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'province_id' => 17,
                'nombre' => 'PONTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'province_id' => 17,
                'nombre' => 'RAHUAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'province_id' => 17,
                'nombre' => 'RAPAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'province_id' => 17,
                'nombre' => 'SAN MARCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'province_id' => 17,
                'nombre' => 'SAN PEDRO DE CHANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'province_id' => 17,
                'nombre' => 'UCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'province_id' => 18,
                'nombre' => 'HUARMEY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'province_id' => 18,
                'nombre' => 'COCHAPETI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'province_id' => 18,
                'nombre' => 'CULEBRAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'province_id' => 18,
                'nombre' => 'HUAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'province_id' => 18,
                'nombre' => 'MALVAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'province_id' => 19,
                'nombre' => 'CARAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'province_id' => 19,
                'nombre' => 'HUALLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'province_id' => 19,
                'nombre' => 'HUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'province_id' => 19,
                'nombre' => 'HUAYLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'province_id' => 19,
                'nombre' => 'MATO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'province_id' => 19,
                'nombre' => 'PAMPAROMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'province_id' => 19,
                'nombre' => 'PUEBLO LIBRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'province_id' => 19,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'province_id' => 19,
                'nombre' => 'SANTO TORIBIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'province_id' => 19,
                'nombre' => 'YURACMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'province_id' => 20,
                'nombre' => 'PISCOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'province_id' => 20,
                'nombre' => 'CASCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'province_id' => 20,
                'nombre' => 'ELEAZAR GUZMAN BARRON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'province_id' => 20,
                'nombre' => 'FIDEL OLIVAS ESCUDERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'province_id' => 20,
                'nombre' => 'LLAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'province_id' => 20,
                'nombre' => 'LLUMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'province_id' => 20,
                'nombre' => 'LUCMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'province_id' => 20,
                'nombre' => 'MUSGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'province_id' => 21,
                'nombre' => 'OCROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'province_id' => 21,
                'nombre' => 'ACAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'province_id' => 21,
                'nombre' => 'CAJAMARQUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'province_id' => 21,
                'nombre' => 'CARHUAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'province_id' => 21,
                'nombre' => 'COCHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'province_id' => 21,
                'nombre' => 'CONGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'province_id' => 21,
                'nombre' => 'LLIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'province_id' => 21,
                'nombre' => 'SAN CRISTOBAL DE RAJAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'province_id' => 21,
                'nombre' => 'SAN PEDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'province_id' => 21,
                'nombre' => 'SANTIAGO DE CHILCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'province_id' => 22,
                'nombre' => 'CABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'province_id' => 22,
                'nombre' => 'BOLOGNESI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'province_id' => 22,
                'nombre' => 'CONCHUCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'province_id' => 22,
                'nombre' => 'HUACASCHUQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'province_id' => 22,
                'nombre' => 'HUANDOVAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'province_id' => 22,
                'nombre' => 'LACABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'province_id' => 22,
                'nombre' => 'LLAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'province_id' => 22,
                'nombre' => 'PALLASCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'province_id' => 22,
                'nombre' => 'PAMPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'province_id' => 22,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'province_id' => 22,
                'nombre' => 'TAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'province_id' => 23,
                'nombre' => 'POMABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'province_id' => 23,
                'nombre' => 'HUAYLLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'province_id' => 23,
                'nombre' => 'PAROBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'province_id' => 23,
                'nombre' => 'QUINUABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'province_id' => 24,
                'nombre' => 'RECUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'province_id' => 24,
                'nombre' => 'CATAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'province_id' => 24,
                'nombre' => 'COTAPARACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'province_id' => 24,
                'nombre' => 'HUAYLLAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'province_id' => 24,
                'nombre' => 'LLACLLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'province_id' => 24,
                'nombre' => 'MARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'province_id' => 24,
                'nombre' => 'PAMPAS CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'province_id' => 24,
                'nombre' => 'PARARIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'province_id' => 24,
                'nombre' => 'TAPACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'province_id' => 24,
                'nombre' => 'TICAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'province_id' => 25,
                'nombre' => 'CHIMBOTE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'province_id' => 25,
                'nombre' => 'CACERES DEL PERU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'province_id' => 25,
                'nombre' => 'COISHCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'province_id' => 25,
                'nombre' => 'MACATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'province_id' => 25,
                'nombre' => 'MORO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'province_id' => 25,
                'nombre' => 'NEPEÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'province_id' => 25,
                'nombre' => 'SAMANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'province_id' => 25,
                'nombre' => 'SANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'province_id' => 25,
                'nombre' => 'NUEVO CHIMBOTE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'province_id' => 26,
                'nombre' => 'SIHUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'province_id' => 26,
                'nombre' => 'ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'province_id' => 26,
                'nombre' => 'ALFONSO UGARTE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'province_id' => 26,
                'nombre' => 'CASHAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'province_id' => 26,
                'nombre' => 'CHINGALPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'province_id' => 26,
                'nombre' => 'HUAYLLABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'province_id' => 26,
                'nombre' => 'QUICHES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'province_id' => 26,
                'nombre' => 'RAGASH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'province_id' => 26,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'province_id' => 26,
                'nombre' => 'SICSIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'province_id' => 27,
                'nombre' => 'YUNGAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'province_id' => 27,
                'nombre' => 'CASCAPARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'province_id' => 27,
                'nombre' => 'MANCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'province_id' => 27,
                'nombre' => 'MATACOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'province_id' => 27,
                'nombre' => 'QUILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'province_id' => 27,
                'nombre' => 'RANRAHIRCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'province_id' => 27,
                'nombre' => 'SHUPLUY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'province_id' => 27,
                'nombre' => 'YANAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'province_id' => 28,
                'nombre' => 'ABANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'province_id' => 28,
                'nombre' => 'CHACOCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'province_id' => 28,
                'nombre' => 'CIRCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'province_id' => 28,
                'nombre' => 'CURAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'province_id' => 28,
                'nombre' => 'HUANIPACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'province_id' => 28,
                'nombre' => 'LAMBRAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'province_id' => 28,
                'nombre' => 'PICHIRHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'province_id' => 28,
                'nombre' => 'SAN PEDRO DE CACHORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'province_id' => 28,
                'nombre' => 'TAMBURCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'province_id' => 29,
                'nombre' => 'ANDAHUAYLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'province_id' => 29,
                'nombre' => 'ANDARAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'province_id' => 29,
                'nombre' => 'CHIARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'province_id' => 29,
                'nombre' => 'HUANCARAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'province_id' => 29,
                'nombre' => 'HUANCARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'province_id' => 29,
                'nombre' => 'HUAYANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'province_id' => 29,
                'nombre' => 'KISHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'province_id' => 29,
                'nombre' => 'PACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'province_id' => 29,
                'nombre' => 'PACUCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'province_id' => 29,
                'nombre' => 'PAMPACHIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'province_id' => 29,
                'nombre' => 'POMACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'province_id' => 29,
                'nombre' => 'SAN ANTONIO DE CACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'province_id' => 29,
                'nombre' => 'SAN JERONIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'province_id' => 29,
                'nombre' => 'SAN MIGUEL DE CHACCRAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'province_id' => 29,
                'nombre' => 'SANTA MARIA DE CHICMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'province_id' => 29,
                'nombre' => 'TALAVERA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'province_id' => 29,
                'nombre' => 'TUMAY HUARACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'province_id' => 29,
                'nombre' => 'TURPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'province_id' => 29,
                'nombre' => 'KAQUIABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'province_id' => 30,
                'nombre' => 'ANTABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'province_id' => 30,
                'nombre' => 'EL ORO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'province_id' => 30,
                'nombre' => 'HUAQUIRCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'province_id' => 30,
                'nombre' => 'JUAN ESPINOZA MEDRANO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'province_id' => 30,
                'nombre' => 'OROPESA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'province_id' => 30,
                'nombre' => 'PACHACONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'province_id' => 30,
                'nombre' => 'SABAINO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'province_id' => 31,
                'nombre' => 'CHALHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'province_id' => 31,
                'nombre' => 'CAPAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'province_id' => 31,
                'nombre' => 'CARAYBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'province_id' => 31,
                'nombre' => 'CHAPIMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'province_id' => 31,
                'nombre' => 'COLCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'province_id' => 31,
                'nombre' => 'COTARUSE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'province_id' => 31,
                'nombre' => 'HUAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'province_id' => 31,
                'nombre' => 'JUSTO APU SAHUARAURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'province_id' => 31,
                'nombre' => 'LUCRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'province_id' => 31,
                'nombre' => 'POCOHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'province_id' => 31,
                'nombre' => 'SAN JUAN DE CHACÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'province_id' => 31,
                'nombre' => 'SAÑAYCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'province_id' => 31,
                'nombre' => 'SORAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'province_id' => 31,
                'nombre' => 'TAPAIRIHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'province_id' => 31,
                'nombre' => 'TINTAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'province_id' => 31,
                'nombre' => 'TORAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'province_id' => 31,
                'nombre' => 'YANACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'province_id' => 32,
                'nombre' => 'TAMBOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'province_id' => 32,
                'nombre' => 'COTABAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'province_id' => 32,
                'nombre' => 'COYLLURQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'province_id' => 32,
                'nombre' => 'HAQUIRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'province_id' => 32,
                'nombre' => 'MARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'province_id' => 32,
                'nombre' => 'CHALLHUAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'province_id' => 33,
                'nombre' => 'CHINCHEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'province_id' => 33,
                'nombre' => 'ANCO_HUALLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'province_id' => 33,
                'nombre' => 'COCHARCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'province_id' => 33,
                'nombre' => 'HUACCANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'province_id' => 33,
                'nombre' => 'OCOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'province_id' => 33,
                'nombre' => 'ONGOY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'province_id' => 33,
                'nombre' => 'URANMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'province_id' => 33,
                'nombre' => 'RANRACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'province_id' => 34,
                'nombre' => 'CHUQUIBAMBILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'province_id' => 34,
                'nombre' => 'CURPAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'province_id' => 34,
                'nombre' => 'GAMARRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'province_id' => 34,
                'nombre' => 'HUAYLLATI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'province_id' => 34,
                'nombre' => 'MAMARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'province_id' => 34,
                'nombre' => 'MICAELA BASTIDAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'province_id' => 34,
                'nombre' => 'PATAYPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'province_id' => 34,
                'nombre' => 'PROGRESO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'province_id' => 34,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'province_id' => 34,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'province_id' => 34,
                'nombre' => 'TURPAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'province_id' => 34,
                'nombre' => 'VILCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'province_id' => 34,
                'nombre' => 'VIRUNDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'province_id' => 34,
                'nombre' => 'CURASCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'province_id' => 35,
                'nombre' => 'AREQUIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'province_id' => 35,
                'nombre' => 'ALTO SELVA ALEGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'province_id' => 35,
                'nombre' => 'CAYMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'province_id' => 35,
                'nombre' => 'CERRO COLORADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'province_id' => 35,
                'nombre' => 'CHARACATO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'province_id' => 35,
                'nombre' => 'CHIGUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'province_id' => 35,
                'nombre' => 'JACOBO HUNTER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'province_id' => 35,
                'nombre' => 'LA JOYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'province_id' => 35,
                'nombre' => 'MARIANO MELGAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'province_id' => 35,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'province_id' => 35,
                'nombre' => 'MOLLEBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'province_id' => 35,
                'nombre' => 'PAUCARPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'province_id' => 35,
                'nombre' => 'POCSI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'province_id' => 35,
                'nombre' => 'POLOBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'province_id' => 35,
                'nombre' => 'QUEQUEÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'province_id' => 35,
                'nombre' => 'SABANDIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'province_id' => 35,
                'nombre' => 'SACHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'province_id' => 35,
                'nombre' => 'SAN JUAN DE SIGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'province_id' => 35,
                'nombre' => 'SAN JUAN DE TARUCANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'province_id' => 35,
                'nombre' => 'SANTA ISABEL DE SIGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'province_id' => 35,
                'nombre' => 'SANTA RITA DE SIGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'province_id' => 35,
                'nombre' => 'SOCABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'province_id' => 35,
                'nombre' => 'TIABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'province_id' => 35,
                'nombre' => 'UCHUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'province_id' => 35,
                'nombre' => 'VITOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'province_id' => 35,
                'nombre' => 'YANAHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'province_id' => 35,
                'nombre' => 'YARABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'province_id' => 35,
                'nombre' => 'YURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'province_id' => 35,
                'nombre' => 'JOSE LUIS BUSTAMANTE Y RIVERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'province_id' => 36,
                'nombre' => 'CAMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'province_id' => 36,
                'nombre' => 'JOSE MARIA QUIMPER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'province_id' => 36,
                'nombre' => 'MARIANO NICOLAS VALCARCEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'province_id' => 36,
                'nombre' => 'MARISCAL CACERES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'province_id' => 36,
                'nombre' => 'NICOLAS DE PIEROLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'province_id' => 36,
                'nombre' => 'OCOÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'province_id' => 36,
                'nombre' => 'QUILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'province_id' => 36,
                'nombre' => 'SAMUEL PASTOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'province_id' => 37,
                'nombre' => 'CARAVELI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'province_id' => 37,
                'nombre' => 'ACARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'province_id' => 37,
                'nombre' => 'ATICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'province_id' => 37,
                'nombre' => 'ATIQUIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'province_id' => 37,
                'nombre' => 'BELLA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'province_id' => 37,
                'nombre' => 'CAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'province_id' => 37,
                'nombre' => 'CHALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'province_id' => 37,
                'nombre' => 'CHAPARRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'province_id' => 37,
                'nombre' => 'HUANUHUANU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'province_id' => 37,
                'nombre' => 'JAQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'province_id' => 37,
                'nombre' => 'LOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'province_id' => 37,
                'nombre' => 'QUICACHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'province_id' => 37,
                'nombre' => 'YAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'province_id' => 38,
                'nombre' => 'APLAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'province_id' => 38,
                'nombre' => 'ANDAGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'province_id' => 38,
                'nombre' => 'AYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'province_id' => 38,
                'nombre' => 'CHACHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'province_id' => 38,
                'nombre' => 'CHILCAYMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'province_id' => 38,
                'nombre' => 'CHOCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'province_id' => 38,
                'nombre' => 'HUANCARQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'province_id' => 38,
                'nombre' => 'MACHAGUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'province_id' => 38,
                'nombre' => 'ORCOPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'province_id' => 38,
                'nombre' => 'PAMPACOLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'province_id' => 38,
                'nombre' => 'TIPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'province_id' => 38,
                'nombre' => 'UÑON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'province_id' => 38,
                'nombre' => 'URACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'province_id' => 38,
                'nombre' => 'VIRACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'province_id' => 39,
                'nombre' => 'CHIVAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'province_id' => 39,
                'nombre' => 'ACHOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'province_id' => 39,
                'nombre' => 'CABANACONDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'province_id' => 39,
                'nombre' => 'CALLALLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'province_id' => 39,
                'nombre' => 'CAYLLOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'province_id' => 39,
                'nombre' => 'COPORAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'province_id' => 39,
                'nombre' => 'HUAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'province_id' => 39,
                'nombre' => 'HUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'province_id' => 39,
                'nombre' => 'ICHUPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'province_id' => 39,
                'nombre' => 'LARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'province_id' => 39,
                'nombre' => 'LLUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'province_id' => 39,
                'nombre' => 'MACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'province_id' => 39,
                'nombre' => 'MADRIGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'province_id' => 39,
                'nombre' => 'SAN ANTONIO DE CHUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'province_id' => 39,
                'nombre' => 'SIBAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'province_id' => 39,
                'nombre' => 'TAPAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'province_id' => 39,
                'nombre' => 'TISCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'province_id' => 39,
                'nombre' => 'TUTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'province_id' => 39,
                'nombre' => 'YANQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'province_id' => 39,
                'nombre' => 'MAJES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'province_id' => 40,
                'nombre' => 'CHUQUIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'province_id' => 40,
                'nombre' => 'ANDARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'province_id' => 40,
                'nombre' => 'CAYARANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'province_id' => 40,
                'nombre' => 'CHICHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'province_id' => 40,
                'nombre' => 'IRAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'province_id' => 40,
                'nombre' => 'RIO GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'province_id' => 40,
                'nombre' => 'SALAMANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'province_id' => 40,
                'nombre' => 'YANAQUIHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'province_id' => 41,
                'nombre' => 'MOLLENDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'province_id' => 41,
                'nombre' => 'COCACHACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'province_id' => 41,
                'nombre' => 'DEAN VALDIVIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'province_id' => 41,
                'nombre' => 'ISLAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'province_id' => 41,
                'nombre' => 'MEJIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'province_id' => 41,
                'nombre' => 'PUNTA DE BOMBON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'province_id' => 42,
                'nombre' => 'COTAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'province_id' => 42,
                'nombre' => 'ALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'province_id' => 42,
                'nombre' => 'CHARCANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'province_id' => 42,
                'nombre' => 'HUAYNACOTAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'province_id' => 42,
                'nombre' => 'PAMPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'province_id' => 42,
                'nombre' => 'PUYCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'province_id' => 42,
                'nombre' => 'QUECHUALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'province_id' => 42,
                'nombre' => 'SAYLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'province_id' => 42,
                'nombre' => 'TAURIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'province_id' => 42,
                'nombre' => 'TOMEPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'province_id' => 42,
                'nombre' => 'TORO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'province_id' => 43,
                'nombre' => 'AYACUCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'province_id' => 43,
                'nombre' => 'ACOCRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'province_id' => 43,
                'nombre' => 'ACOS VINCHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'province_id' => 43,
                'nombre' => 'CARMEN ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'province_id' => 43,
                'nombre' => 'CHIARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'province_id' => 43,
                'nombre' => 'OCROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'province_id' => 43,
                'nombre' => 'PACAYCASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'province_id' => 43,
                'nombre' => 'QUINUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'province_id' => 43,
                'nombre' => 'SAN JOSE DE TICLLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'province_id' => 43,
                'nombre' => 'SAN JUAN BAUTISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'province_id' => 43,
                'nombre' => 'SANTIAGO DE PISCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'province_id' => 43,
                'nombre' => 'SOCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'province_id' => 43,
                'nombre' => 'TAMBILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'province_id' => 43,
                'nombre' => 'VINCHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'province_id' => 43,
                'nombre' => 'JESUS NAZARENO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'province_id' => 44,
                'nombre' => 'CANGALLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'province_id' => 44,
                'nombre' => 'CHUSCHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'province_id' => 44,
                'nombre' => 'LOS MOROCHUCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'province_id' => 44,
                'nombre' => 'MARIA PARADO DE BELLIDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'province_id' => 44,
                'nombre' => 'PARAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'province_id' => 44,
                'nombre' => 'TOTOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'province_id' => 45,
                'nombre' => 'SANCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'province_id' => 45,
                'nombre' => 'CARAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'province_id' => 45,
                'nombre' => 'SACSAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'province_id' => 45,
                'nombre' => 'SANTIAGO DE LUCANAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'province_id' => 46,
                'nombre' => 'HUANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'province_id' => 46,
                'nombre' => 'AYAHUANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'province_id' => 46,
                'nombre' => 'HUAMANGUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'province_id' => 46,
                'nombre' => 'IGUAIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'province_id' => 46,
                'nombre' => 'LURICOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'province_id' => 46,
                'nombre' => 'SANTILLANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'province_id' => 46,
                'nombre' => 'SIVIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'province_id' => 46,
                'nombre' => 'LLOCHEGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'province_id' => 47,
                'nombre' => 'SAN MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'province_id' => 47,
                'nombre' => 'ANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'province_id' => 47,
                'nombre' => 'AYNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'province_id' => 47,
                'nombre' => 'CHILCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'province_id' => 47,
                'nombre' => 'CHUNGUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'province_id' => 47,
                'nombre' => 'LUIS CARRANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'province_id' => 47,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'province_id' => 47,
                'nombre' => 'TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'province_id' => 48,
                'nombre' => 'PUQUIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'province_id' => 48,
                'nombre' => 'AUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'province_id' => 48,
                'nombre' => 'CABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'province_id' => 48,
                'nombre' => 'CARMEN SALCEDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'province_id' => 48,
                'nombre' => 'CHAVIÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'province_id' => 48,
                'nombre' => 'CHIPAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'province_id' => 48,
                'nombre' => 'HUAC-HUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'province_id' => 48,
                'nombre' => 'LARAMATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'province_id' => 48,
                'nombre' => 'LEONCIO PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'province_id' => 48,
                'nombre' => 'LLAUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'province_id' => 48,
                'nombre' => 'LUCANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'province_id' => 48,
                'nombre' => 'OCAÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'province_id' => 48,
                'nombre' => 'OTOCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'province_id' => 48,
                'nombre' => 'SAISA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'province_id' => 48,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'province_id' => 48,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'province_id' => 48,
                'nombre' => 'SAN PEDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'province_id' => 48,
                'nombre' => 'SAN PEDRO DE PALCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'province_id' => 48,
                'nombre' => 'SANCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'province_id' => 48,
                'nombre' => 'SANTA ANA DE HUAYCAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 501,
                'province_id' => 48,
                'nombre' => 'SANTA LUCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'province_id' => 49,
                'nombre' => 'CORACORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'province_id' => 49,
                'nombre' => 'CHUMPI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'province_id' => 49,
                'nombre' => 'CORONEL CASTAÑEDA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'province_id' => 49,
                'nombre' => 'PACAPAUSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'province_id' => 49,
                'nombre' => 'PULLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'province_id' => 49,
                'nombre' => 'PUYUSCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'province_id' => 49,
                'nombre' => 'SAN FRANCISCO DE RAVACAYCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'province_id' => 49,
                'nombre' => 'UPAHUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'province_id' => 50,
                'nombre' => 'PAUSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'province_id' => 50,
                'nombre' => 'COLTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'province_id' => 50,
                'nombre' => 'CORCULLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'province_id' => 50,
                'nombre' => 'LAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'province_id' => 50,
                'nombre' => 'MARCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'province_id' => 50,
                'nombre' => 'OYOLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'province_id' => 50,
                'nombre' => 'PARARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'province_id' => 50,
                'nombre' => 'SAN JAVIER DE ALPABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'province_id' => 50,
                'nombre' => 'SAN JOSE DE USHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'province_id' => 50,
                'nombre' => 'SARA SARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'province_id' => 51,
                'nombre' => 'QUEROBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'province_id' => 51,
                'nombre' => 'BELEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'province_id' => 51,
                'nombre' => 'CHALCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'province_id' => 51,
                'nombre' => 'CHILCAYOC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'province_id' => 51,
                'nombre' => 'HUACAÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'province_id' => 51,
                'nombre' => 'MORCOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'province_id' => 51,
                'nombre' => 'PAICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'province_id' => 51,
                'nombre' => 'SAN PEDRO DE LARCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'province_id' => 51,
                'nombre' => 'SAN SALVADOR DE QUIJE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'province_id' => 51,
                'nombre' => 'SANTIAGO DE PAUCARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'province_id' => 51,
                'nombre' => 'SORAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'province_id' => 52,
                'nombre' => 'HUANCAPI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'province_id' => 52,
                'nombre' => 'ALCAMENCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'province_id' => 52,
                'nombre' => 'APONGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'province_id' => 52,
                'nombre' => 'ASQUIPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'province_id' => 52,
                'nombre' => 'CANARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'province_id' => 52,
                'nombre' => 'CAYARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'province_id' => 52,
                'nombre' => 'COLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'province_id' => 52,
                'nombre' => 'HUAMANQUIQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'province_id' => 52,
                'nombre' => 'HUANCARAYLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'province_id' => 52,
                'nombre' => 'HUAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'province_id' => 52,
                'nombre' => 'SARHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'province_id' => 52,
                'nombre' => 'VILCANCHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'province_id' => 53,
                'nombre' => 'VILCAS HUAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'province_id' => 53,
                'nombre' => 'ACCOMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'province_id' => 53,
                'nombre' => 'CARHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'province_id' => 53,
                'nombre' => 'CONCEPCION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'province_id' => 53,
                'nombre' => 'HUAMBALPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'province_id' => 53,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'province_id' => 53,
                'nombre' => 'SAURAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'province_id' => 53,
                'nombre' => 'VISCHONGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'province_id' => 54,
                'nombre' => 'CAJAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'province_id' => 54,
                'nombre' => 'ASUNCION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'province_id' => 54,
                'nombre' => 'CHETILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'province_id' => 54,
                'nombre' => 'COSPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'province_id' => 54,
                'nombre' => 'ENCAÑADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'province_id' => 54,
                'nombre' => 'JESUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'province_id' => 54,
                'nombre' => 'LLACANORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'province_id' => 54,
                'nombre' => 'LOS BAÑOS DEL INCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'province_id' => 54,
                'nombre' => 'MAGDALENA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'province_id' => 54,
                'nombre' => 'MATARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'province_id' => 54,
                'nombre' => 'NAMORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'province_id' => 54,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'province_id' => 55,
                'nombre' => 'CAJABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'province_id' => 55,
                'nombre' => 'CACHACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'province_id' => 55,
                'nombre' => 'CONDEBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'province_id' => 55,
                'nombre' => 'SITACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'province_id' => 56,
                'nombre' => 'CELENDIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'province_id' => 56,
                'nombre' => 'CHUMUCH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'province_id' => 56,
                'nombre' => 'CORTEGANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'province_id' => 56,
                'nombre' => 'HUASMIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'province_id' => 56,
                'nombre' => 'JORGE CHAVEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'province_id' => 56,
                'nombre' => 'JOSE GALVEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'province_id' => 56,
                'nombre' => 'MIGUEL IGLESIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'province_id' => 56,
                'nombre' => 'OXAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'province_id' => 56,
                'nombre' => 'SOROCHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'province_id' => 56,
                'nombre' => 'SUCRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'province_id' => 56,
                'nombre' => 'UTCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'province_id' => 56,
                'nombre' => 'LA LIBERTAD DE PALLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'province_id' => 57,
                'nombre' => 'CHOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'province_id' => 57,
                'nombre' => 'ANGUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'province_id' => 57,
                'nombre' => 'CHADIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'province_id' => 57,
                'nombre' => 'CHIGUIRIP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'province_id' => 57,
                'nombre' => 'CHIMBAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'province_id' => 57,
                'nombre' => 'CHOROPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'province_id' => 57,
                'nombre' => 'COCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'province_id' => 57,
                'nombre' => 'CONCHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'province_id' => 57,
                'nombre' => 'HUAMBOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'province_id' => 57,
                'nombre' => 'LAJAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'province_id' => 57,
                'nombre' => 'LLAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'province_id' => 57,
                'nombre' => 'MIRACOSTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'province_id' => 57,
                'nombre' => 'PACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'province_id' => 57,
                'nombre' => 'PION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'province_id' => 57,
                'nombre' => 'QUEROCOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'province_id' => 57,
                'nombre' => 'SAN JUAN DE LICUPIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'province_id' => 57,
                'nombre' => 'TACABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'province_id' => 57,
                'nombre' => 'TOCMOCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'province_id' => 57,
                'nombre' => 'CHALAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'province_id' => 58,
                'nombre' => 'CONTUMAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'province_id' => 58,
                'nombre' => 'CHILETE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'province_id' => 58,
                'nombre' => 'CUPISNIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'province_id' => 58,
                'nombre' => 'GUZMANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'province_id' => 58,
                'nombre' => 'SAN BENITO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'province_id' => 58,
                'nombre' => 'SANTA CRUZ DE TOLED',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'province_id' => 58,
                'nombre' => 'TANTARICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'province_id' => 58,
                'nombre' => 'YONAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'province_id' => 59,
                'nombre' => 'CUTERVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'province_id' => 59,
                'nombre' => 'CALLAYUC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'province_id' => 59,
                'nombre' => 'CHOROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'province_id' => 59,
                'nombre' => 'CUJILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'province_id' => 59,
                'nombre' => 'LA RAMADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'province_id' => 59,
                'nombre' => 'PIMPINGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'province_id' => 59,
                'nombre' => 'QUEROCOTILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'province_id' => 59,
                'nombre' => 'SAN ANDRES DE CUTERVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'province_id' => 59,
                'nombre' => 'SAN JUAN DE CUTERVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'province_id' => 59,
                'nombre' => 'SAN LUIS DE LUCMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'province_id' => 59,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'province_id' => 59,
                'nombre' => 'SANTO DOMINGO DE LA CAPILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'province_id' => 59,
                'nombre' => 'SANTO TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'province_id' => 59,
                'nombre' => 'SOCOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'province_id' => 59,
                'nombre' => 'TORIBIO CASANOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'province_id' => 60,
                'nombre' => 'BAMBAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'province_id' => 60,
                'nombre' => 'CHUGUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'province_id' => 60,
                'nombre' => 'HUALGAYOC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'province_id' => 61,
                'nombre' => 'JAEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'province_id' => 61,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'province_id' => 61,
                'nombre' => 'CHONTALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'province_id' => 61,
                'nombre' => 'COLASAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'province_id' => 61,
                'nombre' => 'HUABAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'province_id' => 61,
                'nombre' => 'LAS PIRIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'province_id' => 61,
                'nombre' => 'POMAHUACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'province_id' => 61,
                'nombre' => 'PUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'province_id' => 61,
                'nombre' => 'SALLIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'province_id' => 61,
                'nombre' => 'SAN FELIPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'province_id' => 61,
                'nombre' => 'SAN JOSE DEL ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'province_id' => 61,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'province_id' => 62,
                'nombre' => 'SAN IGNACIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'province_id' => 62,
                'nombre' => 'CHIRINOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'province_id' => 62,
                'nombre' => 'HUARANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'province_id' => 62,
                'nombre' => 'LA COIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'province_id' => 62,
                'nombre' => 'NAMBALLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'province_id' => 62,
                'nombre' => 'SAN JOSE DE LOURDES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'province_id' => 62,
                'nombre' => 'TABACONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'province_id' => 63,
                'nombre' => 'PEDRO GALVEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'province_id' => 63,
                'nombre' => 'CHANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'province_id' => 63,
                'nombre' => 'EDUARDO VILLANUEVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'province_id' => 63,
                'nombre' => 'GREGORIO PITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'province_id' => 63,
                'nombre' => 'ICHOCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'province_id' => 63,
                'nombre' => 'JOSE MANUEL QUIROZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'province_id' => 63,
                'nombre' => 'JOSE SABOGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'province_id' => 64,
                'nombre' => 'SAN MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'province_id' => 64,
                'nombre' => 'BOLIVAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'province_id' => 64,
                'nombre' => 'CALQUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'province_id' => 64,
                'nombre' => 'CATILLUC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'province_id' => 64,
                'nombre' => 'EL PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'province_id' => 64,
                'nombre' => 'LA FLORIDA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'province_id' => 64,
                'nombre' => 'LLAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'province_id' => 64,
                'nombre' => 'NANCHOC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'province_id' => 64,
                'nombre' => 'NIEPOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'province_id' => 64,
                'nombre' => 'SAN GREGORIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'province_id' => 64,
                'nombre' => 'SAN SILVESTRE DE COCHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'province_id' => 64,
                'nombre' => 'TONGOD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'province_id' => 64,
                'nombre' => 'UNION AGUA BLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'province_id' => 65,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'province_id' => 65,
                'nombre' => 'SAN BERNARDINO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'province_id' => 65,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'province_id' => 65,
                'nombre' => 'TUMBADEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'province_id' => 66,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'province_id' => 66,
                'nombre' => 'ANDABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'province_id' => 66,
                'nombre' => 'CATACHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'province_id' => 66,
                'nombre' => 'CHANCAYBAÑOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'province_id' => 66,
                'nombre' => 'LA ESPERANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'province_id' => 66,
                'nombre' => 'NINABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'province_id' => 66,
                'nombre' => 'PULAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'province_id' => 66,
                'nombre' => 'SAUCEPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'province_id' => 66,
                'nombre' => 'SEXI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'province_id' => 66,
                'nombre' => 'UTICYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'province_id' => 66,
                'nombre' => 'YAUYUCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'province_id' => 67,
                'nombre' => 'CALLAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'province_id' => 67,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'province_id' => 67,
                'nombre' => 'CARMEN DE LA LEGUA Y REYNOSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'province_id' => 67,
                'nombre' => 'LA PERLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'province_id' => 67,
                'nombre' => 'LA PUNTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'province_id' => 67,
                'nombre' => 'VENTANILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'province_id' => 67,
                'nombre' => 'MI PERÚ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'province_id' => 68,
                'nombre' => 'CUSCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'province_id' => 68,
                'nombre' => 'CCORCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'province_id' => 68,
                'nombre' => 'POROY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'province_id' => 68,
                'nombre' => 'SAN JERONIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'province_id' => 68,
                'nombre' => 'SAN SEBASTIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'province_id' => 68,
                'nombre' => 'SANTIAGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'province_id' => 68,
                'nombre' => 'SAYLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'province_id' => 68,
                'nombre' => 'WANCHAQ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'province_id' => 69,
                'nombre' => 'ACOMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'province_id' => 69,
                'nombre' => 'ACOPIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'province_id' => 69,
                'nombre' => 'ACOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'province_id' => 69,
                'nombre' => 'MOSOC LLACTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'province_id' => 69,
                'nombre' => 'POMACANCHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'province_id' => 69,
                'nombre' => 'RONDOCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'province_id' => 69,
                'nombre' => 'SANGARARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'province_id' => 70,
                'nombre' => 'ANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'province_id' => 70,
                'nombre' => 'ANCAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'province_id' => 70,
                'nombre' => 'CACHIMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'province_id' => 70,
                'nombre' => 'CHINCHAYPUJIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'province_id' => 70,
                'nombre' => 'HUAROCONDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'province_id' => 70,
                'nombre' => 'LIMATAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'province_id' => 70,
                'nombre' => 'MOLLEPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'province_id' => 70,
                'nombre' => 'PUCYURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'province_id' => 70,
                'nombre' => 'ZURITE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'province_id' => 71,
                'nombre' => 'CALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'province_id' => 71,
                'nombre' => 'COYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'province_id' => 71,
                'nombre' => 'LAMAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'province_id' => 71,
                'nombre' => 'LARES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'province_id' => 71,
                'nombre' => 'PISAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'province_id' => 71,
                'nombre' => 'SAN SALVADOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'province_id' => 71,
                'nombre' => 'TARAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'province_id' => 71,
                'nombre' => 'YANATILE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'province_id' => 72,
                'nombre' => 'YANAOCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'province_id' => 72,
                'nombre' => 'CHECCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'province_id' => 72,
                'nombre' => 'KUNTURKANKI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'province_id' => 72,
                'nombre' => 'LANGUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'province_id' => 72,
                'nombre' => 'LAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'province_id' => 72,
                'nombre' => 'PAMPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'province_id' => 72,
                'nombre' => 'QUEHUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'province_id' => 72,
                'nombre' => 'TUPAC AMARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'province_id' => 73,
                'nombre' => 'SICUANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'province_id' => 73,
                'nombre' => 'CHECACUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'province_id' => 73,
                'nombre' => 'COMBAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'province_id' => 73,
                'nombre' => 'MARANGANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'province_id' => 73,
                'nombre' => 'PITUMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'province_id' => 73,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'province_id' => 73,
                'nombre' => 'SAN PEDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'province_id' => 73,
                'nombre' => 'TINTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'province_id' => 74,
                'nombre' => 'SANTO TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'province_id' => 74,
                'nombre' => 'CAPACMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'province_id' => 74,
                'nombre' => 'CHAMACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'province_id' => 74,
                'nombre' => 'COLQUEMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'province_id' => 74,
                'nombre' => 'LIVITACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'province_id' => 74,
                'nombre' => 'LLUSCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'province_id' => 74,
                'nombre' => 'QUIÑOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'province_id' => 74,
                'nombre' => 'VELILLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'province_id' => 75,
                'nombre' => 'ESPINAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'province_id' => 75,
                'nombre' => 'CONDOROMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'province_id' => 75,
                'nombre' => 'COPORAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'province_id' => 75,
                'nombre' => 'OCORURO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'province_id' => 75,
                'nombre' => 'PALLPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'province_id' => 75,
                'nombre' => 'PICHIGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'province_id' => 75,
                'nombre' => 'SUYCKUTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'province_id' => 75,
                'nombre' => 'ALTO PICHIGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'province_id' => 76,
                'nombre' => 'SANTA ANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'province_id' => 76,
                'nombre' => 'ECHARATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'province_id' => 76,
                'nombre' => 'HUAYOPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'province_id' => 76,
                'nombre' => 'MARANURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'province_id' => 76,
                'nombre' => 'OCOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'province_id' => 76,
                'nombre' => 'QUELLOUNO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'province_id' => 76,
                'nombre' => 'KIMBIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'province_id' => 76,
                'nombre' => 'SANTA TERESA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'province_id' => 76,
                'nombre' => 'VILCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'province_id' => 76,
                'nombre' => 'PICHARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'province_id' => 77,
                'nombre' => 'PARURO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'province_id' => 77,
                'nombre' => 'ACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'province_id' => 77,
                'nombre' => 'CCAPI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'province_id' => 77,
                'nombre' => 'COLCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'province_id' => 77,
                'nombre' => 'HUANOQUITE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'province_id' => 77,
                'nombre' => 'OMACHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'province_id' => 77,
                'nombre' => 'PACCARITAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'province_id' => 77,
                'nombre' => 'PILLPINTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'province_id' => 77,
                'nombre' => 'YAURISQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'province_id' => 78,
                'nombre' => 'PAUCARTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'province_id' => 78,
                'nombre' => 'CAICAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'province_id' => 78,
                'nombre' => 'CHALLABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'province_id' => 78,
                'nombre' => 'COLQUEPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'province_id' => 78,
                'nombre' => 'HUANCARANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'province_id' => 78,
                'nombre' => 'KOSÑIPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'province_id' => 79,
                'nombre' => 'URCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'province_id' => 79,
                'nombre' => 'ANDAHUAYLILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'province_id' => 79,
                'nombre' => 'CAMANTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'province_id' => 79,
                'nombre' => 'CCARHUAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'province_id' => 79,
                'nombre' => 'CCATCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'province_id' => 79,
                'nombre' => 'CUSIPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'province_id' => 79,
                'nombre' => 'HUARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'province_id' => 79,
                'nombre' => 'LUCRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'province_id' => 79,
                'nombre' => 'MARCAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'province_id' => 79,
                'nombre' => 'OCONGATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'province_id' => 79,
                'nombre' => 'OROPESA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'province_id' => 79,
                'nombre' => 'QUIQUIJANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'province_id' => 80,
                'nombre' => 'URUBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'province_id' => 80,
                'nombre' => 'CHINCHERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'province_id' => 80,
                'nombre' => 'HUAYLLABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'province_id' => 80,
                'nombre' => 'MACHUPICCHU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'province_id' => 80,
                'nombre' => 'MARAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'province_id' => 80,
                'nombre' => 'OLLANTAYTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'province_id' => 80,
                'nombre' => 'YUCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'province_id' => 81,
                'nombre' => 'HUANCAVELICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'province_id' => 81,
                'nombre' => 'ACOBAMBILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'province_id' => 81,
                'nombre' => 'ACORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'province_id' => 81,
                'nombre' => 'CONAYCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'province_id' => 81,
                'nombre' => 'CUENCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'province_id' => 81,
                'nombre' => 'HUACHOCOLPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'province_id' => 81,
                'nombre' => 'HUAYLLAHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'province_id' => 81,
                'nombre' => 'IZCUCHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'province_id' => 81,
                'nombre' => 'LARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'province_id' => 81,
                'nombre' => 'MANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'province_id' => 81,
                'nombre' => 'MARISCAL CACERES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'province_id' => 81,
                'nombre' => 'MOYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'province_id' => 81,
                'nombre' => 'NUEVO OCCORO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'province_id' => 81,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'province_id' => 81,
                'nombre' => 'PILCHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'province_id' => 81,
                'nombre' => 'VILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'province_id' => 81,
                'nombre' => 'YAULI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'province_id' => 81,
                'nombre' => 'ASCENSION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'province_id' => 81,
                'nombre' => 'HUANDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'province_id' => 82,
                'nombre' => 'ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'province_id' => 82,
                'nombre' => 'ANDABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'province_id' => 82,
                'nombre' => 'ANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'province_id' => 82,
                'nombre' => 'CAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'province_id' => 82,
                'nombre' => 'MARCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'province_id' => 82,
                'nombre' => 'PAUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'province_id' => 82,
                'nombre' => 'POMACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'province_id' => 82,
                'nombre' => 'ROSARIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'province_id' => 83,
                'nombre' => 'LIRCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'province_id' => 83,
                'nombre' => 'ANCHONGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'province_id' => 83,
                'nombre' => 'CALLANMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'province_id' => 83,
                'nombre' => 'CCOCHACCASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'province_id' => 83,
                'nombre' => 'CHINCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'province_id' => 83,
                'nombre' => 'CONGALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'province_id' => 83,
                'nombre' => 'HUANCA-HUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'province_id' => 83,
                'nombre' => 'HUAYLLAY GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'province_id' => 83,
                'nombre' => 'JULCAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'province_id' => 83,
                'nombre' => 'SAN ANTONIO DE ANTAPARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'province_id' => 83,
                'nombre' => 'SANTO TOMAS DE PATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'province_id' => 83,
                'nombre' => 'SECCLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'province_id' => 84,
                'nombre' => 'CASTROVIRREYNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'province_id' => 84,
                'nombre' => 'ARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'province_id' => 84,
                'nombre' => 'AURAHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'province_id' => 84,
                'nombre' => 'CAPILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'province_id' => 84,
                'nombre' => 'CHUPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'province_id' => 84,
                'nombre' => 'COCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'province_id' => 84,
                'nombre' => 'HUACHOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'province_id' => 84,
                'nombre' => 'HUAMATAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'province_id' => 84,
                'nombre' => 'MOLLEPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'province_id' => 84,
                'nombre' => 'SAN JUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'province_id' => 84,
                'nombre' => 'SANTA ANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'province_id' => 84,
                'nombre' => 'TANTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'province_id' => 84,
                'nombre' => 'TICRAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'province_id' => 85,
                'nombre' => 'CHURCAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'province_id' => 85,
                'nombre' => 'ANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'province_id' => 85,
                'nombre' => 'CHINCHIHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'province_id' => 85,
                'nombre' => 'EL CARMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'province_id' => 85,
                'nombre' => 'LA MERCED',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'province_id' => 85,
                'nombre' => 'LOCROJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'province_id' => 85,
                'nombre' => 'PAUCARBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'province_id' => 85,
                'nombre' => 'SAN MIGUEL DE MAYOCC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'province_id' => 85,
                'nombre' => 'SAN PEDRO DE CORIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'province_id' => 85,
                'nombre' => 'PACHAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'province_id' => 86,
                'nombre' => 'HUAYTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'province_id' => 86,
                'nombre' => 'AYAVI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'province_id' => 86,
                'nombre' => 'CORDOVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'province_id' => 86,
                'nombre' => 'HUAYACUNDO ARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'province_id' => 86,
                'nombre' => 'LARAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'province_id' => 86,
                'nombre' => 'OCOYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'province_id' => 86,
                'nombre' => 'PILPICHACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'province_id' => 86,
                'nombre' => 'QUERCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'province_id' => 86,
                'nombre' => 'QUITO-ARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'province_id' => 86,
                'nombre' => 'SAN ANTONIO DE CUSICANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'province_id' => 86,
                'nombre' => 'SAN FRANCISCO DE SANGAYAICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'province_id' => 86,
                'nombre' => 'SAN ISIDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'province_id' => 86,
                'nombre' => 'SANTIAGO DE CHOCORVOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'province_id' => 86,
                'nombre' => 'SANTIAGO DE QUIRAHUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'province_id' => 86,
                'nombre' => 'SANTO DOMINGO DE CAPILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'province_id' => 86,
                'nombre' => 'TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'province_id' => 87,
                'nombre' => 'PAMPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'province_id' => 87,
                'nombre' => 'ACOSTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'province_id' => 87,
                'nombre' => 'ACRAQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'province_id' => 87,
                'nombre' => 'AHUAYCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'province_id' => 87,
                'nombre' => 'COLCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'province_id' => 87,
                'nombre' => 'DANIEL HERNANDEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'province_id' => 87,
                'nombre' => 'HUACHOCOLPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'province_id' => 87,
                'nombre' => 'HUARIBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'province_id' => 87,
                'nombre' => 'ÑAHUIMPUQUIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'province_id' => 87,
                'nombre' => 'PAZOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'province_id' => 87,
                'nombre' => 'QUISHUAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'province_id' => 87,
                'nombre' => 'SALCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'province_id' => 87,
                'nombre' => 'SALCAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'province_id' => 87,
                'nombre' => 'SAN MARCOS DE ROCCHAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'province_id' => 87,
                'nombre' => 'SURCUBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'province_id' => 87,
                'nombre' => 'TINTAY PUNCU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'province_id' => 88,
                'nombre' => 'HUANUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'province_id' => 88,
                'nombre' => 'AMARILIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'province_id' => 88,
                'nombre' => 'CHINCHAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'province_id' => 88,
                'nombre' => 'CHURUBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'province_id' => 88,
                'nombre' => 'MARGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'province_id' => 88,
                'nombre' => 'QUISQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'province_id' => 88,
                'nombre' => 'SAN FRANCISCO DE CAYRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'province_id' => 88,
                'nombre' => 'SAN PEDRO DE CHAULAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'province_id' => 88,
                'nombre' => 'SANTA MARIA DEL VALLE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'province_id' => 88,
                'nombre' => 'YARUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'province_id' => 88,
                'nombre' => 'PILLCO MARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'province_id' => 89,
                'nombre' => 'AMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'province_id' => 89,
                'nombre' => 'CAYNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'province_id' => 89,
                'nombre' => 'COLPAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'province_id' => 89,
                'nombre' => 'CONCHAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'province_id' => 89,
                'nombre' => 'HUACAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'province_id' => 89,
                'nombre' => 'SAN FRANCISCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'province_id' => 89,
                'nombre' => 'SAN RAFAEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'province_id' => 89,
                'nombre' => 'TOMAY KICHWA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'province_id' => 90,
                'nombre' => 'LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'province_id' => 90,
                'nombre' => 'CHUQUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'province_id' => 90,
                'nombre' => 'MARIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'province_id' => 90,
                'nombre' => 'PACHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'province_id' => 90,
                'nombre' => 'QUIVILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'province_id' => 90,
                'nombre' => 'RIPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'province_id' => 90,
                'nombre' => 'SHUNQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'province_id' => 90,
                'nombre' => 'SILLAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'province_id' => 90,
                'nombre' => 'YANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'province_id' => 91,
                'nombre' => 'HUACAYBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'province_id' => 91,
                'nombre' => 'CANCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'province_id' => 91,
                'nombre' => 'COCHABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'province_id' => 91,
                'nombre' => 'PINRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'province_id' => 92,
                'nombre' => 'LLATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'province_id' => 92,
                'nombre' => 'ARANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'province_id' => 92,
                'nombre' => 'CHAVIN DE PARIARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'province_id' => 92,
                'nombre' => 'JACAS GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'province_id' => 92,
                'nombre' => 'JIRCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'province_id' => 92,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'province_id' => 92,
                'nombre' => 'MONZON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'province_id' => 92,
                'nombre' => 'PUNCHAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'province_id' => 92,
                'nombre' => 'PUÑOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'province_id' => 92,
                'nombre' => 'SINGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'province_id' => 92,
                'nombre' => 'TANTAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'province_id' => 93,
                'nombre' => 'RUPA-RUPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'province_id' => 93,
                'nombre' => 'DANIEL ALOMIAS ROBLES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'province_id' => 93,
                'nombre' => 'HERMILIO VALDIZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'province_id' => 93,
                'nombre' => 'JOSE CRESPO Y CASTILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'province_id' => 93,
                'nombre' => 'LUYANDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'province_id' => 93,
                'nombre' => 'MARIANO DAMASO BERAUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'province_id' => 94,
                'nombre' => 'HUACRACHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'province_id' => 94,
                'nombre' => 'CHOLON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'province_id' => 94,
                'nombre' => 'SAN BUENAVENTURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'province_id' => 95,
                'nombre' => 'PANAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'province_id' => 95,
                'nombre' => 'CHAGLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'province_id' => 95,
                'nombre' => 'MOLINO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'province_id' => 95,
                'nombre' => 'UMARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'province_id' => 96,
                'nombre' => 'PUERTO INCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'province_id' => 96,
                'nombre' => 'CODO DEL POZUZO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'province_id' => 96,
                'nombre' => 'HONORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'province_id' => 96,
                'nombre' => 'TOURNAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'province_id' => 96,
                'nombre' => 'YUYAPICHIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'province_id' => 97,
                'nombre' => 'JESUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'province_id' => 97,
                'nombre' => 'BAÑOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'province_id' => 97,
                'nombre' => 'JIVIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'province_id' => 97,
                'nombre' => 'QUEROPALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'province_id' => 97,
                'nombre' => 'RONDOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'province_id' => 97,
                'nombre' => 'SAN FRANCISCO DE ASIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'province_id' => 97,
                'nombre' => 'SAN MIGUEL DE CAURI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'province_id' => 98,
                'nombre' => 'CHAVINILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'province_id' => 98,
                'nombre' => 'CAHUAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'province_id' => 98,
                'nombre' => 'CHACABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'province_id' => 98,
                'nombre' => 'APARICIO POMARES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'province_id' => 98,
                'nombre' => 'JACAS CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'province_id' => 98,
                'nombre' => 'OBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'province_id' => 98,
                'nombre' => 'PAMPAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'province_id' => 98,
                'nombre' => 'CHORAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'province_id' => 99,
                'nombre' => 'ICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'province_id' => 99,
                'nombre' => 'LA TINGUIÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'province_id' => 99,
                'nombre' => 'LOS AQUIJES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'province_id' => 99,
                'nombre' => 'OCUCAJE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'province_id' => 99,
                'nombre' => 'PACHACUTEC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'province_id' => 99,
                'nombre' => 'PARCONA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'province_id' => 99,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'province_id' => 99,
                'nombre' => 'SALAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'province_id' => 99,
                'nombre' => 'SAN JOSE DE LOS MOLINOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'province_id' => 99,
                'nombre' => 'SAN JUAN BAUTISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'province_id' => 99,
                'nombre' => 'SANTIAGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'province_id' => 99,
                'nombre' => 'SUBTANJALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'province_id' => 99,
                'nombre' => 'TATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'province_id' => 99,
                'nombre' => 'YAUCA DEL ROSARIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'province_id' => 100,
                'nombre' => 'CHINCHA ALTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'province_id' => 100,
                'nombre' => 'ALTO LARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'province_id' => 100,
                'nombre' => 'CHAVIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'province_id' => 100,
                'nombre' => 'CHINCHA BAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'province_id' => 100,
                'nombre' => 'EL CARMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'province_id' => 100,
                'nombre' => 'GROCIO PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'province_id' => 100,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'province_id' => 100,
                'nombre' => 'SAN JUAN DE YANAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'province_id' => 100,
                'nombre' => 'SAN PEDRO DE HUACARPANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'province_id' => 100,
                'nombre' => 'SUNAMPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'province_id' => 100,
                'nombre' => 'TAMBO DE MORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'province_id' => 101,
                'nombre' => 'NAZCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'province_id' => 101,
                'nombre' => 'CHANGUILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'province_id' => 101,
                'nombre' => 'EL INGENIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'province_id' => 101,
                'nombre' => 'MARCONA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'province_id' => 101,
                'nombre' => 'VISTA ALEGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'province_id' => 102,
                'nombre' => 'PALPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'province_id' => 102,
                'nombre' => 'LLIPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'province_id' => 102,
                'nombre' => 'RIO GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'province_id' => 102,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'province_id' => 102,
                'nombre' => 'TIBILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'province_id' => 103,
                'nombre' => 'PISCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'province_id' => 103,
                'nombre' => 'HUANCANO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'province_id' => 103,
                'nombre' => 'HUMAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'province_id' => 103,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'province_id' => 103,
                'nombre' => 'PARACAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'province_id' => 103,
                'nombre' => 'SAN ANDRES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'province_id' => 103,
                'nombre' => 'SAN CLEMENTE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'province_id' => 103,
                'nombre' => 'TUPAC AMARU INCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'province_id' => 104,
                'nombre' => 'HUANCAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'province_id' => 104,
                'nombre' => 'CARHUACALLANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'province_id' => 104,
                'nombre' => 'CHACAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'province_id' => 104,
                'nombre' => 'CHICCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'province_id' => 104,
                'nombre' => 'CHILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'province_id' => 104,
                'nombre' => 'CHONGOS ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'province_id' => 104,
                'nombre' => 'CHUPURO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'province_id' => 104,
                'nombre' => 'COLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'province_id' => 104,
                'nombre' => 'CULLHUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'province_id' => 104,
                'nombre' => 'EL TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'province_id' => 104,
                'nombre' => 'HUACRAPUQUIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'province_id' => 104,
                'nombre' => 'HUALHUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'province_id' => 104,
                'nombre' => 'HUANCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'province_id' => 104,
                'nombre' => 'HUASICANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'province_id' => 104,
                'nombre' => 'HUAYUCACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'province_id' => 104,
                'nombre' => 'INGENIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'province_id' => 104,
                'nombre' => 'PARIAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'province_id' => 104,
                'nombre' => 'PILCOMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'province_id' => 104,
                'nombre' => 'PUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'province_id' => 104,
                'nombre' => 'QUICHUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'province_id' => 104,
                'nombre' => 'QUILCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'province_id' => 104,
                'nombre' => 'SAN AGUSTIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'province_id' => 104,
                'nombre' => 'SAN JERONIMO DE TUNAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'province_id' => 104,
                'nombre' => 'SAÑO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'province_id' => 104,
                'nombre' => 'SAPALLANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'province_id' => 104,
                'nombre' => 'SICAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'province_id' => 104,
                'nombre' => 'SANTO DOMINGO DE ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'province_id' => 104,
                'nombre' => 'VIQUES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'province_id' => 105,
                'nombre' => 'CONCEPCION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'province_id' => 105,
                'nombre' => 'ACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'province_id' => 105,
                'nombre' => 'ANDAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'province_id' => 105,
                'nombre' => 'CHAMBARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'province_id' => 105,
                'nombre' => 'COCHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'province_id' => 105,
                'nombre' => 'COMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'province_id' => 105,
                'nombre' => 'HEROINAS TOLEDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'province_id' => 105,
                'nombre' => 'MANZANARES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'province_id' => 105,
                'nombre' => 'MARISCAL CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'province_id' => 105,
                'nombre' => 'MATAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'province_id' => 105,
                'nombre' => 'MITO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'province_id' => 105,
                'nombre' => 'NUEVE DE JULIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'province_id' => 105,
                'nombre' => 'ORCOTUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'province_id' => 105,
                'nombre' => 'SAN JOSE DE QUERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'province_id' => 105,
                'nombre' => 'SANTA ROSA DE OCOPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'province_id' => 106,
                'nombre' => 'CHANCHAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'province_id' => 106,
                'nombre' => 'PERENE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'province_id' => 106,
                'nombre' => 'PICHANAQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'province_id' => 106,
                'nombre' => 'SAN LUIS DE SHUARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'province_id' => 106,
                'nombre' => 'SAN RAMON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'province_id' => 106,
                'nombre' => 'VITOC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'province_id' => 107,
                'nombre' => 'JAUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'province_id' => 107,
                'nombre' => 'ACOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'province_id' => 107,
                'nombre' => 'APATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'province_id' => 107,
                'nombre' => 'ATAURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'province_id' => 107,
                'nombre' => 'CANCHAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'province_id' => 107,
                'nombre' => 'CURICACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'province_id' => 107,
                'nombre' => 'EL MANTARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'province_id' => 107,
                'nombre' => 'HUAMALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'province_id' => 107,
                'nombre' => 'HUARIPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'province_id' => 107,
                'nombre' => 'HUERTAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'province_id' => 107,
                'nombre' => 'JANJAILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'province_id' => 107,
                'nombre' => 'JULCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'province_id' => 107,
                'nombre' => 'LEONOR ORDOÑEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'province_id' => 107,
                'nombre' => 'LLOCLLAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'province_id' => 107,
                'nombre' => 'MARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'province_id' => 107,
                'nombre' => 'MASMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'province_id' => 107,
                'nombre' => 'MASMA CHICCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'province_id' => 107,
                'nombre' => 'MOLINOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'province_id' => 107,
                'nombre' => 'MONOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'province_id' => 107,
                'nombre' => 'MUQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'province_id' => 107,
                'nombre' => 'MUQUIYAUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'province_id' => 107,
                'nombre' => 'PACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'province_id' => 107,
                'nombre' => 'PACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'province_id' => 107,
                'nombre' => 'PANCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'province_id' => 107,
                'nombre' => 'PARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'province_id' => 107,
                'nombre' => 'POMACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'province_id' => 107,
                'nombre' => 'RICRAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'province_id' => 107,
                'nombre' => 'SAN LORENZO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'province_id' => 107,
                'nombre' => 'SAN PEDRO DE CHUNAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'province_id' => 107,
                'nombre' => 'SAUSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'province_id' => 107,
                'nombre' => 'SINCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'province_id' => 107,
                'nombre' => 'TUNAN MARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'province_id' => 107,
                'nombre' => 'YAULI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'province_id' => 107,
                'nombre' => 'YAUYOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'province_id' => 108,
                'nombre' => 'JUNIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'province_id' => 108,
                'nombre' => 'CARHUAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'province_id' => 108,
                'nombre' => 'ONDORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'province_id' => 108,
                'nombre' => 'ULCUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'province_id' => 109,
                'nombre' => 'SATIPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'province_id' => 109,
                'nombre' => 'COVIRIALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'province_id' => 109,
                'nombre' => 'LLAYLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'province_id' => 109,
                'nombre' => 'MAZAMARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'province_id' => 109,
                'nombre' => 'PAMPA HERMOSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'province_id' => 109,
                'nombre' => 'PANGOA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'province_id' => 109,
                'nombre' => 'RIO NEGRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'province_id' => 109,
                'nombre' => 'RIO TAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'province_id' => 110,
                'nombre' => 'TARMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'province_id' => 110,
                'nombre' => 'ACOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'province_id' => 110,
                'nombre' => 'HUARICOLCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'province_id' => 110,
                'nombre' => 'HUASAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'province_id' => 110,
                'nombre' => 'LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'province_id' => 110,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'province_id' => 110,
                'nombre' => 'PALCAMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'province_id' => 110,
                'nombre' => 'SAN PEDRO DE CAJAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'province_id' => 110,
                'nombre' => 'TAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'province_id' => 111,
                'nombre' => 'LA OROYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'province_id' => 111,
                'nombre' => 'CHACAPALPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'province_id' => 111,
                'nombre' => 'HUAY-HUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'province_id' => 111,
                'nombre' => 'MARCAPOMACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'province_id' => 111,
                'nombre' => 'MOROCOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'province_id' => 111,
                'nombre' => 'PACCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'province_id' => 111,
                'nombre' => 'SANTA BARBARA DE CARHUACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'province_id' => 111,
                'nombre' => 'SANTA ROSA DE SACCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'province_id' => 111,
                'nombre' => 'SUITUCANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'province_id' => 111,
                'nombre' => 'YAULI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'province_id' => 112,
                'nombre' => 'CHUPACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'province_id' => 112,
                'nombre' => 'AHUAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'province_id' => 112,
                'nombre' => 'CHONGOS BAJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'province_id' => 112,
                'nombre' => 'HUACHAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'province_id' => 112,
                'nombre' => 'HUAMANCACA CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'province_id' => 112,
                'nombre' => 'SAN JUAN DE YSCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'province_id' => 112,
                'nombre' => 'SAN JUAN DE JARPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'province_id' => 112,
                'nombre' => 'TRES DE DICIEMBRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'province_id' => 112,
                'nombre' => 'YANACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'province_id' => 113,
                'nombre' => 'TRUJILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'province_id' => 113,
                'nombre' => 'EL PORVENIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'province_id' => 113,
                'nombre' => 'FLORENCIA DE MORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'province_id' => 113,
                'nombre' => 'HUANCHACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'province_id' => 113,
                'nombre' => 'LA ESPERANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'province_id' => 113,
                'nombre' => 'LAREDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'province_id' => 113,
                'nombre' => 'MOCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'province_id' => 113,
                'nombre' => 'POROTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'province_id' => 113,
                'nombre' => 'SALAVERRY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'province_id' => 113,
                'nombre' => 'SIMBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'province_id' => 113,
                'nombre' => 'VICTOR LARCO HERRERA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'province_id' => 114,
                'nombre' => 'ASCOPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'province_id' => 114,
                'nombre' => 'CHICAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'province_id' => 114,
                'nombre' => 'CHOCOPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'province_id' => 114,
                'nombre' => 'MAGDALENA DE CAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'province_id' => 114,
                'nombre' => 'PAIJAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'province_id' => 114,
                'nombre' => 'RAZURI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'province_id' => 114,
                'nombre' => 'SANTIAGO DE CAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'province_id' => 114,
                'nombre' => 'CASA GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'province_id' => 115,
                'nombre' => 'BOLIVAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'province_id' => 115,
                'nombre' => 'BAMBAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'province_id' => 115,
                'nombre' => 'CONDORMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'province_id' => 115,
                'nombre' => 'LONGOTEA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'province_id' => 115,
                'nombre' => 'UCHUMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'province_id' => 115,
                'nombre' => 'UCUNCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'province_id' => 116,
                'nombre' => 'CHEPEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'province_id' => 116,
                'nombre' => 'PACANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'province_id' => 116,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'province_id' => 117,
                'nombre' => 'JULCAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'province_id' => 117,
                'nombre' => 'CALAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'province_id' => 117,
                'nombre' => 'CARABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'province_id' => 117,
                'nombre' => 'HUASO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'province_id' => 118,
                'nombre' => 'OTUZCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'province_id' => 118,
                'nombre' => 'AGALLPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'province_id' => 118,
                'nombre' => 'CHARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'province_id' => 118,
                'nombre' => 'HUARANCHAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'province_id' => 118,
                'nombre' => 'LA CUESTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'province_id' => 118,
                'nombre' => 'MACHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'province_id' => 118,
                'nombre' => 'PARANDAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'province_id' => 118,
                'nombre' => 'SALPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'province_id' => 118,
                'nombre' => 'SINSICAP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'province_id' => 118,
                'nombre' => 'USQUIL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'province_id' => 119,
                'nombre' => 'SAN PEDRO DE LLOC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'province_id' => 119,
                'nombre' => 'GUADALUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'province_id' => 119,
                'nombre' => 'JEQUETEPEQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'province_id' => 119,
                'nombre' => 'PACASMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'province_id' => 119,
                'nombre' => 'SAN JOSE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'province_id' => 120,
                'nombre' => 'TAYABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'province_id' => 120,
                'nombre' => 'BULDIBUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'province_id' => 120,
                'nombre' => 'CHILLIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'province_id' => 120,
                'nombre' => 'HUANCASPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'province_id' => 120,
                'nombre' => 'HUAYLILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'province_id' => 120,
                'nombre' => 'HUAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'province_id' => 120,
                'nombre' => 'ONGON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'province_id' => 120,
                'nombre' => 'PARCOY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'province_id' => 120,
                'nombre' => 'PATAZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'province_id' => 120,
                'nombre' => 'PIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'province_id' => 120,
                'nombre' => 'SANTIAGO DE CHALLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'province_id' => 120,
                'nombre' => 'TAURIJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'province_id' => 120,
                'nombre' => 'URPAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'province_id' => 121,
                'nombre' => 'HUAMACHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'province_id' => 121,
                'nombre' => 'CHUGAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'province_id' => 121,
                'nombre' => 'COCHORCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'province_id' => 121,
                'nombre' => 'CURGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'province_id' => 121,
                'nombre' => 'MARCABAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'province_id' => 121,
                'nombre' => 'SANAGORAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'province_id' => 121,
                'nombre' => 'SARIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'province_id' => 121,
                'nombre' => 'SARTIMBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'province_id' => 122,
                'nombre' => 'SANTIAGO DE CHUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'province_id' => 122,
                'nombre' => 'ANGASMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'province_id' => 122,
                'nombre' => 'CACHICADAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'province_id' => 122,
                'nombre' => 'MOLLEBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'province_id' => 122,
                'nombre' => 'MOLLEPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'province_id' => 122,
                'nombre' => 'QUIRUVILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'province_id' => 122,
                'nombre' => 'SANTA CRUZ DE CHUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'province_id' => 122,
                'nombre' => 'SITABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'province_id' => 123,
                'nombre' => 'CASCAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'province_id' => 123,
                'nombre' => 'LUCMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'province_id' => 123,
                'nombre' => 'COMPIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'province_id' => 123,
                'nombre' => 'SAYAPULLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'province_id' => 124,
                'nombre' => 'VIRU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'province_id' => 124,
                'nombre' => 'CHAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'province_id' => 124,
                'nombre' => 'GUADALUPITO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'province_id' => 125,
                'nombre' => 'CHICLAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'province_id' => 125,
                'nombre' => 'CHONGOYAPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'province_id' => 125,
                'nombre' => 'ETEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'province_id' => 125,
                'nombre' => 'ETEN PUERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'province_id' => 125,
                'nombre' => 'JOSE LEONARDO ORTIZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'province_id' => 125,
                'nombre' => 'LA VICTORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'province_id' => 125,
                'nombre' => 'LAGUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'province_id' => 125,
                'nombre' => 'MONSEFU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'province_id' => 125,
                'nombre' => 'NUEVA ARICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'province_id' => 125,
                'nombre' => 'OYOTUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'province_id' => 125,
                'nombre' => 'PICSI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'province_id' => 125,
                'nombre' => 'PIMENTEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'province_id' => 125,
                'nombre' => 'REQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'province_id' => 125,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'province_id' => 125,
                'nombre' => 'SAÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'province_id' => 125,
                'nombre' => 'CAYALTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'province_id' => 125,
                'nombre' => 'PATAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'province_id' => 125,
                'nombre' => 'POMALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'province_id' => 125,
                'nombre' => 'PUCALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'province_id' => 125,
                'nombre' => 'TUMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'province_id' => 126,
                'nombre' => 'FERREÑAFE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'province_id' => 126,
                'nombre' => 'CAÑARIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'province_id' => 126,
                'nombre' => 'INCAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'province_id' => 126,
                'nombre' => 'MANUEL ANTONIO MESONES MURO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'province_id' => 126,
                'nombre' => 'PITIPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'province_id' => 126,
                'nombre' => 'PUEBLO NUEVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'province_id' => 127,
                'nombre' => 'LAMBAYEQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'province_id' => 127,
                'nombre' => 'CHOCHOPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'province_id' => 127,
                'nombre' => 'ILLIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'province_id' => 127,
                'nombre' => 'JAYANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'province_id' => 127,
                'nombre' => 'MOCHUMI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'province_id' => 127,
                'nombre' => 'MORROPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'province_id' => 127,
                'nombre' => 'MOTUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'province_id' => 127,
                'nombre' => 'OLMOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'province_id' => 127,
                'nombre' => 'PACORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'province_id' => 127,
                'nombre' => 'SALAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'province_id' => 127,
                'nombre' => 'SAN JOSE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'province_id' => 127,
                'nombre' => 'TUCUME',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'province_id' => 128,
                'nombre' => 'LIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'province_id' => 128,
                'nombre' => 'ANCON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'province_id' => 128,
                'nombre' => 'ATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'province_id' => 128,
                'nombre' => 'BARRANCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'province_id' => 128,
                'nombre' => 'BREÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'province_id' => 128,
                'nombre' => 'CARABAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'province_id' => 128,
                'nombre' => 'CHACLACAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'province_id' => 128,
                'nombre' => 'CHORRILLOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'province_id' => 128,
                'nombre' => 'CIENEGUILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'province_id' => 128,
                'nombre' => 'COMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'province_id' => 128,
                'nombre' => 'EL AGUSTINO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'province_id' => 128,
                'nombre' => 'INDEPENDENCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'province_id' => 128,
                'nombre' => 'JESUS MARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'province_id' => 128,
                'nombre' => 'LA MOLINA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'province_id' => 128,
                'nombre' => 'LA VICTORIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'province_id' => 128,
                'nombre' => 'LINCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'province_id' => 128,
                'nombre' => 'LOS OLIVOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'province_id' => 128,
                'nombre' => 'LURIGANCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'province_id' => 128,
                'nombre' => 'LURIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'province_id' => 128,
                'nombre' => 'MAGDALENA DEL MAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'province_id' => 128,
                'nombre' => 'PUEBLO LIBRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'province_id' => 128,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'province_id' => 128,
                'nombre' => 'PACHACAMAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'province_id' => 128,
                'nombre' => 'PUCUSANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'province_id' => 128,
                'nombre' => 'PUENTE PIEDRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'province_id' => 128,
                'nombre' => 'PUNTA HERMOSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'province_id' => 128,
                'nombre' => 'PUNTA NEGRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'province_id' => 128,
                'nombre' => 'RIMAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'province_id' => 128,
                'nombre' => 'SAN BARTOLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'province_id' => 128,
                'nombre' => 'SAN BORJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'province_id' => 128,
                'nombre' => 'SAN ISIDRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'province_id' => 128,
                'nombre' => 'SAN JUAN DE LURIGANCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'province_id' => 128,
                'nombre' => 'SAN JUAN DE MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'province_id' => 128,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'province_id' => 128,
                'nombre' => 'SAN MARTIN DE PORRES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'province_id' => 128,
                'nombre' => 'SAN MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'province_id' => 128,
                'nombre' => 'SANTA ANITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'province_id' => 128,
                'nombre' => 'SANTA MARIA DEL MAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'province_id' => 128,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'province_id' => 128,
                'nombre' => 'SANTIAGO DE SURCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'province_id' => 128,
                'nombre' => 'SURQUILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'province_id' => 128,
                'nombre' => 'VILLA EL SALVADOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'province_id' => 128,
                'nombre' => 'VILLA MARIA DEL TRIUNFO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'province_id' => 129,
                'nombre' => 'BARRANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'province_id' => 129,
                'nombre' => 'PARAMONGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'province_id' => 129,
                'nombre' => 'PATIVILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'province_id' => 129,
                'nombre' => 'SUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'province_id' => 129,
                'nombre' => 'SUPE PUERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'province_id' => 130,
                'nombre' => 'CAJATAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'province_id' => 130,
                'nombre' => 'COPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'province_id' => 130,
                'nombre' => 'GORGOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'province_id' => 130,
                'nombre' => 'HUANCAPON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'province_id' => 130,
                'nombre' => 'MANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'province_id' => 131,
                'nombre' => 'CANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'province_id' => 131,
                'nombre' => 'ARAHUAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'province_id' => 131,
                'nombre' => 'HUAMANTANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'province_id' => 131,
                'nombre' => 'HUAROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'province_id' => 131,
                'nombre' => 'LACHAQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'province_id' => 131,
                'nombre' => 'SAN BUENAVENTURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'province_id' => 131,
                'nombre' => 'SANTA ROSA DE QUIVES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'province_id' => 132,
                'nombre' => 'SAN VICENTE DE CAÑETE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'province_id' => 132,
                'nombre' => 'ASIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'province_id' => 132,
                'nombre' => 'CALANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'province_id' => 132,
                'nombre' => 'CERRO AZUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'province_id' => 132,
                'nombre' => 'CHILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'province_id' => 132,
                'nombre' => 'COAYLLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'province_id' => 132,
                'nombre' => 'IMPERIAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'province_id' => 132,
                'nombre' => 'LUNAHUANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'province_id' => 132,
                'nombre' => 'MALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'province_id' => 132,
                'nombre' => 'NUEVO IMPERIAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'province_id' => 132,
                'nombre' => 'PACARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'province_id' => 132,
                'nombre' => 'QUILMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'province_id' => 132,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'province_id' => 132,
                'nombre' => 'SAN LUIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'province_id' => 132,
                'nombre' => 'SANTA CRUZ DE FLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'province_id' => 132,
                'nombre' => 'ZUÑIGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'province_id' => 133,
                'nombre' => 'HUARAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'province_id' => 133,
                'nombre' => 'ATAVILLOS ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'province_id' => 133,
                'nombre' => 'ATAVILLOS BAJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'province_id' => 133,
                'nombre' => 'AUCALLAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'province_id' => 133,
                'nombre' => 'CHANCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'province_id' => 133,
                'nombre' => 'IHUARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'province_id' => 133,
                'nombre' => 'LAMPIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'province_id' => 133,
                'nombre' => 'PACARAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'province_id' => 133,
                'nombre' => 'SAN MIGUEL DE ACOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'province_id' => 133,
                'nombre' => 'SANTA CRUZ DE ANDAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'province_id' => 133,
                'nombre' => 'SUMBILCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'province_id' => 133,
                'nombre' => 'VEINTISIETE DE NOVIEMBRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'province_id' => 134,
                'nombre' => 'MATUCANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'province_id' => 134,
                'nombre' => 'ANTIOQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'province_id' => 134,
                'nombre' => 'CALLAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'province_id' => 134,
                'nombre' => 'CARAMPOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'province_id' => 134,
                'nombre' => 'CHICLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'province_id' => 134,
                'nombre' => 'CUENCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'province_id' => 134,
                'nombre' => 'HUACHUPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'province_id' => 134,
                'nombre' => 'HUANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'province_id' => 134,
                'nombre' => 'HUAROCHIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'province_id' => 134,
                'nombre' => 'LAHUAYTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'province_id' => 134,
                'nombre' => 'LANGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'province_id' => 134,
                'nombre' => 'LARAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'province_id' => 134,
                'nombre' => 'MARIATANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'province_id' => 134,
                'nombre' => 'RICARDO PALMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'province_id' => 134,
                'nombre' => 'SAN ANDRES DE TUPICOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'province_id' => 134,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'province_id' => 134,
                'nombre' => 'SAN BARTOLOME',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'province_id' => 134,
                'nombre' => 'SAN DAMIAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'province_id' => 134,
                'nombre' => 'SAN JUAN DE IRIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'province_id' => 134,
                'nombre' => 'SAN JUAN DE TANTARANCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'province_id' => 134,
                'nombre' => 'SAN LORENZO DE QUINTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'province_id' => 134,
                'nombre' => 'SAN MATEO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'province_id' => 134,
                'nombre' => 'SAN MATEO DE OTAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'province_id' => 134,
                'nombre' => 'SAN PEDRO DE CASTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'province_id' => 134,
                'nombre' => 'SAN PEDRO DE HUANCAYRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'province_id' => 134,
                'nombre' => 'SANGALLAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'province_id' => 134,
                'nombre' => 'SANTA CRUZ DE COCACHACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'province_id' => 134,
                'nombre' => 'SANTA EULALIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'province_id' => 134,
                'nombre' => 'SANTIAGO DE ANCHUCAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'province_id' => 134,
                'nombre' => 'SANTIAGO DE TUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'province_id' => 134,
                'nombre' => 'SANTO DOMINGO DE LOS OLLEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'province_id' => 134,
                'nombre' => 'SURCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'province_id' => 135,
                'nombre' => 'HUACHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'province_id' => 135,
                'nombre' => 'AMBAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'province_id' => 135,
                'nombre' => 'CALETA DE CARQUIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'province_id' => 135,
                'nombre' => 'CHECRAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'province_id' => 135,
                'nombre' => 'HUALMAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'province_id' => 135,
                'nombre' => 'HUAURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'province_id' => 135,
                'nombre' => 'LEONCIO PRADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'province_id' => 135,
                'nombre' => 'PACCHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'province_id' => 135,
                'nombre' => 'SANTA LEONOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'province_id' => 135,
                'nombre' => 'SANTA MARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'province_id' => 135,
                'nombre' => 'SAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'province_id' => 135,
                'nombre' => 'VEGUETA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'province_id' => 136,
                'nombre' => 'OYON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'province_id' => 136,
                'nombre' => 'ANDAJES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'province_id' => 136,
                'nombre' => 'CAUJUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'province_id' => 136,
                'nombre' => 'COCHAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'province_id' => 136,
                'nombre' => 'NAVAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'province_id' => 136,
                'nombre' => 'PACHANGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'province_id' => 137,
                'nombre' => 'YAUYOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'province_id' => 137,
                'nombre' => 'ALIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'province_id' => 137,
                'nombre' => 'AYAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'province_id' => 137,
                'nombre' => 'AYAVIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'province_id' => 137,
                'nombre' => 'AZANGARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'province_id' => 137,
                'nombre' => 'CACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'province_id' => 137,
                'nombre' => 'CARANIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'province_id' => 137,
                'nombre' => 'CATAHUASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'province_id' => 137,
                'nombre' => 'CHOCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'province_id' => 137,
                'nombre' => 'COCHAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'province_id' => 137,
                'nombre' => 'COLONIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'province_id' => 137,
                'nombre' => 'HONGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'province_id' => 137,
                'nombre' => 'HUAMPARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'province_id' => 137,
                'nombre' => 'HUANCAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'province_id' => 137,
                'nombre' => 'HUANGASCAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'province_id' => 137,
                'nombre' => 'HUANTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'province_id' => 137,
                'nombre' => 'HUAÑEC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'province_id' => 137,
                'nombre' => 'LARAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'province_id' => 137,
                'nombre' => 'LINCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'province_id' => 137,
                'nombre' => 'MADEAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'province_id' => 137,
                'nombre' => 'MIRAFLORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'province_id' => 137,
                'nombre' => 'OMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'province_id' => 137,
                'nombre' => 'PUTINZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'province_id' => 137,
                'nombre' => 'QUINCHES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'province_id' => 137,
                'nombre' => 'QUINOCAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'province_id' => 137,
                'nombre' => 'SAN JOAQUIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'province_id' => 137,
                'nombre' => 'SAN PEDRO DE PILAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'province_id' => 137,
                'nombre' => 'TANTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'province_id' => 137,
                'nombre' => 'TAURIPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'province_id' => 137,
                'nombre' => 'TOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'province_id' => 137,
                'nombre' => 'TUPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'province_id' => 137,
                'nombre' => 'VIÑAC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'province_id' => 137,
                'nombre' => 'VITIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'province_id' => 138,
                'nombre' => 'IQUITOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'province_id' => 138,
                'nombre' => 'ALTO NANAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'province_id' => 138,
                'nombre' => 'FERNANDO LORES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'province_id' => 138,
                'nombre' => 'INDIANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'province_id' => 138,
                'nombre' => 'LAS AMAZONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'province_id' => 138,
                'nombre' => 'MAZAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'province_id' => 138,
                'nombre' => 'NAPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'province_id' => 138,
                'nombre' => 'PUNCHANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'province_id' => 138,
                'nombre' => 'PUTUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'province_id' => 138,
                'nombre' => 'TORRES CAUSANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'province_id' => 138,
                'nombre' => 'BELEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'province_id' => 138,
                'nombre' => 'SAN JUAN BAUTISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'province_id' => 138,
                'nombre' => 'TENIENTE MANUEL CLAVERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'province_id' => 139,
                'nombre' => 'YURIMAGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'province_id' => 139,
                'nombre' => 'BALSAPUERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'province_id' => 139,
                'nombre' => 'JEBEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'province_id' => 139,
                'nombre' => 'LAGUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'province_id' => 139,
                'nombre' => 'SANTA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'province_id' => 139,
                'nombre' => 'TENIENTE CESAR LOPEZ ROJAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'province_id' => 140,
                'nombre' => 'NAUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'province_id' => 140,
                'nombre' => 'PARINARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'province_id' => 140,
                'nombre' => 'TIGRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'province_id' => 140,
                'nombre' => 'TROMPETEROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'province_id' => 140,
                'nombre' => 'URARINAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'province_id' => 141,
                'nombre' => 'RAMON CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'province_id' => 141,
                'nombre' => 'PEBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'province_id' => 141,
                'nombre' => 'YAVARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'province_id' => 141,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'province_id' => 142,
                'nombre' => 'REQUENA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'province_id' => 142,
                'nombre' => 'ALTO TAPICHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'province_id' => 142,
                'nombre' => 'CAPELO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'province_id' => 142,
                'nombre' => 'EMILIO SAN MARTIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'province_id' => 142,
                'nombre' => 'MAQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'province_id' => 142,
                'nombre' => 'PUINAHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'province_id' => 142,
                'nombre' => 'SAQUENA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'province_id' => 142,
                'nombre' => 'SOPLIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'province_id' => 142,
                'nombre' => 'TAPICHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'province_id' => 142,
                'nombre' => 'JENARO HERRERA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'province_id' => 142,
                'nombre' => 'YAQUERANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'province_id' => 143,
                'nombre' => 'CONTAMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'province_id' => 143,
                'nombre' => 'INAHUAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'province_id' => 143,
                'nombre' => 'PADRE MARQUEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'province_id' => 143,
                'nombre' => 'PAMPA HERMOSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'province_id' => 143,
                'nombre' => 'SARAYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'province_id' => 143,
                'nombre' => 'VARGAS GUERRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'province_id' => 144,
                'nombre' => 'BARRANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'province_id' => 144,
                'nombre' => 'CAHUAPANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'province_id' => 144,
                'nombre' => 'MANSERICHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'province_id' => 144,
                'nombre' => 'MORONA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'province_id' => 144,
                'nombre' => 'PASTAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'province_id' => 144,
                'nombre' => 'ANDOAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'province_id' => 145,
                'nombre' => 'TAMBOPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'province_id' => 145,
                'nombre' => 'INAMBARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'province_id' => 145,
                'nombre' => 'LAS PIEDRAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'province_id' => 145,
                'nombre' => 'LABERINTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'province_id' => 146,
                'nombre' => 'MANU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'province_id' => 146,
                'nombre' => 'FITZCARRALD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'province_id' => 146,
                'nombre' => 'MADRE DE DIOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'province_id' => 146,
                'nombre' => 'HUEPETUHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'province_id' => 147,
                'nombre' => 'IÑAPARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'province_id' => 147,
                'nombre' => 'IBERIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'province_id' => 147,
                'nombre' => 'TAHUAMANU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'province_id' => 148,
                'nombre' => 'MOQUEGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'province_id' => 148,
                'nombre' => 'CARUMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'province_id' => 148,
                'nombre' => 'CUCHUMBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'province_id' => 148,
                'nombre' => 'SAMEGUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'province_id' => 148,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'province_id' => 148,
                'nombre' => 'TORATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'province_id' => 149,
                'nombre' => 'OMATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'province_id' => 149,
                'nombre' => 'CHOJATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'province_id' => 149,
                'nombre' => 'COALAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'province_id' => 149,
                'nombre' => 'ICHUÑA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'province_id' => 149,
                'nombre' => 'LA CAPILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'province_id' => 149,
                'nombre' => 'LLOQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'province_id' => 149,
                'nombre' => 'MATALAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'province_id' => 149,
                'nombre' => 'PUQUINA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'province_id' => 149,
                'nombre' => 'QUINISTAQUILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'province_id' => 149,
                'nombre' => 'UBINAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'province_id' => 149,
                'nombre' => 'YUNGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'province_id' => 150,
                'nombre' => 'ILO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'province_id' => 150,
                'nombre' => 'EL ALGARROBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'province_id' => 150,
                'nombre' => 'PACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'province_id' => 151,
                'nombre' => 'CHAUPIMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'province_id' => 151,
                'nombre' => 'HUACHON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'province_id' => 151,
                'nombre' => 'HUARIACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'province_id' => 151,
                'nombre' => 'HUAYLLAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'province_id' => 151,
                'nombre' => 'NINACACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'province_id' => 151,
                'nombre' => 'PALLANCHACRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'province_id' => 151,
                'nombre' => 'PAUCARTAMBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'province_id' => 151,
                'nombre' => 'SAN FRANCISCO DE ASIS DE YARUSYACAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'province_id' => 151,
                'nombre' => 'SIMON BOLIVAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'province_id' => 151,
                'nombre' => 'TICLACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'province_id' => 151,
                'nombre' => 'TINYAHUARCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'province_id' => 151,
                'nombre' => 'VICCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'province_id' => 151,
                'nombre' => 'YANACANCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'province_id' => 152,
                'nombre' => 'YANAHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'province_id' => 152,
                'nombre' => 'CHACAYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'province_id' => 152,
                'nombre' => 'GOYLLARISQUIZGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'province_id' => 152,
                'nombre' => 'PAUCAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'province_id' => 152,
                'nombre' => 'SAN PEDRO DE PILLAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'province_id' => 152,
                'nombre' => 'SANTA ANA DE TUSI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'province_id' => 152,
                'nombre' => 'TAPUC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'province_id' => 152,
                'nombre' => 'VILCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'province_id' => 153,
                'nombre' => 'OXAPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'province_id' => 153,
                'nombre' => 'CHONTABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'province_id' => 153,
                'nombre' => 'HUANCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'province_id' => 153,
                'nombre' => 'PALCAZU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'province_id' => 153,
                'nombre' => 'POZUZO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'province_id' => 153,
                'nombre' => 'PUERTO BERMUDEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'province_id' => 153,
                'nombre' => 'VILLA RICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'province_id' => 154,
                'nombre' => 'PIURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'province_id' => 154,
                'nombre' => 'CASTILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'province_id' => 154,
                'nombre' => 'CATACAOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'province_id' => 154,
                'nombre' => 'CURA MORI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'province_id' => 154,
                'nombre' => 'EL TALLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'province_id' => 154,
                'nombre' => 'LA ARENA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'province_id' => 154,
                'nombre' => 'LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'province_id' => 154,
                'nombre' => 'LAS LOMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'province_id' => 154,
                'nombre' => 'TAMBO GRANDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'province_id' => 155,
                'nombre' => 'AYABACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'province_id' => 155,
                'nombre' => 'FRIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'province_id' => 155,
                'nombre' => 'JILILI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'province_id' => 155,
                'nombre' => 'LAGUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'province_id' => 155,
                'nombre' => 'MONTERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'province_id' => 155,
                'nombre' => 'PACAIPAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'province_id' => 155,
                'nombre' => 'PAIMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'province_id' => 155,
                'nombre' => 'SAPILLICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'province_id' => 155,
                'nombre' => 'SICCHEZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'province_id' => 155,
                'nombre' => 'SUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'province_id' => 156,
                'nombre' => 'HUANCABAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'province_id' => 156,
                'nombre' => 'CANCHAQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'province_id' => 156,
                'nombre' => 'EL CARMEN DE LA FRONTERA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'province_id' => 156,
                'nombre' => 'HUARMACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'province_id' => 156,
                'nombre' => 'LALAQUIZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'province_id' => 156,
                'nombre' => 'SAN MIGUEL DE EL FAIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'province_id' => 156,
                'nombre' => 'SONDOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'province_id' => 156,
                'nombre' => 'SONDORILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'province_id' => 157,
                'nombre' => 'CHULUCANAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'province_id' => 157,
                'nombre' => 'BUENOS AIRES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'province_id' => 157,
                'nombre' => 'CHALACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'province_id' => 157,
                'nombre' => 'LA MATANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'province_id' => 157,
                'nombre' => 'MORROPON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'province_id' => 157,
                'nombre' => 'SALITRAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'province_id' => 157,
                'nombre' => 'SAN JUAN DE BIGOTE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'province_id' => 157,
                'nombre' => 'SANTA CATALINA DE MOSSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'province_id' => 157,
                'nombre' => 'SANTO DOMINGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'province_id' => 157,
                'nombre' => 'YAMANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'province_id' => 158,
                'nombre' => 'PAITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'province_id' => 158,
                'nombre' => 'AMOTAPE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'province_id' => 158,
                'nombre' => 'ARENAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'province_id' => 158,
                'nombre' => 'COLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'province_id' => 158,
                'nombre' => 'LA HUACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'province_id' => 158,
                'nombre' => 'TAMARINDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'province_id' => 158,
                'nombre' => 'VICHAYAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'province_id' => 159,
                'nombre' => 'SULLANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'province_id' => 159,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'province_id' => 159,
                'nombre' => 'IGNACIO ESCUDERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'province_id' => 159,
                'nombre' => 'LANCONES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'province_id' => 159,
                'nombre' => 'MARCAVELICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'province_id' => 159,
                'nombre' => 'MIGUEL CHECA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'province_id' => 159,
                'nombre' => 'QUERECOTILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'province_id' => 159,
                'nombre' => 'SALITRAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'province_id' => 160,
                'nombre' => 'PARIÑAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'province_id' => 160,
                'nombre' => 'EL ALTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'province_id' => 160,
                'nombre' => 'LA BREA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'province_id' => 160,
                'nombre' => 'LOBITOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'province_id' => 160,
                'nombre' => 'LOS ORGANOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'province_id' => 160,
                'nombre' => 'MANCORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'province_id' => 161,
                'nombre' => 'SECHURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'province_id' => 161,
                'nombre' => 'BELLAVISTA DE LA UNION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'province_id' => 161,
                'nombre' => 'BERNAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'province_id' => 161,
                'nombre' => 'CRISTO NOS VALGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'province_id' => 161,
                'nombre' => 'VICE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'province_id' => 161,
                'nombre' => 'RINCONADA LLICUAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'province_id' => 162,
                'nombre' => 'PUNO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'province_id' => 162,
                'nombre' => 'ACORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'province_id' => 162,
                'nombre' => 'AMANTANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'province_id' => 162,
                'nombre' => 'ATUNCOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'province_id' => 162,
                'nombre' => 'CAPACHICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'province_id' => 162,
                'nombre' => 'CHUCUITO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'province_id' => 162,
                'nombre' => 'COATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'province_id' => 162,
                'nombre' => 'HUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'province_id' => 162,
                'nombre' => 'MAÑAZO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'province_id' => 162,
                'nombre' => 'PAUCARCOLLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'province_id' => 162,
                'nombre' => 'PICHACANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'province_id' => 162,
                'nombre' => 'PLATERIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'province_id' => 162,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'province_id' => 162,
                'nombre' => 'TIQUILLACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'province_id' => 162,
                'nombre' => 'VILQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'province_id' => 163,
                'nombre' => 'AZANGARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'province_id' => 163,
                'nombre' => 'ACHAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'province_id' => 163,
                'nombre' => 'ARAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'province_id' => 163,
                'nombre' => 'ASILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'province_id' => 163,
                'nombre' => 'CAMINACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'province_id' => 163,
                'nombre' => 'CHUPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'province_id' => 163,
                'nombre' => 'JOSE DOMINGO CHOQUEHUANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'province_id' => 163,
                'nombre' => 'MUÑANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'province_id' => 163,
                'nombre' => 'POTONI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'province_id' => 163,
                'nombre' => 'SAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'province_id' => 163,
                'nombre' => 'SAN ANTON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'province_id' => 163,
                'nombre' => 'SAN JOSE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'province_id' => 163,
                'nombre' => 'SAN JUAN DE SALINAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'province_id' => 163,
                'nombre' => 'SANTIAGO DE PUPUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'province_id' => 163,
                'nombre' => 'TIRAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'province_id' => 164,
                'nombre' => 'MACUSANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'province_id' => 164,
                'nombre' => 'AJOYANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'province_id' => 164,
                'nombre' => 'AYAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'province_id' => 164,
                'nombre' => 'COASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'province_id' => 164,
                'nombre' => 'CORANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'province_id' => 164,
                'nombre' => 'CRUCERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'province_id' => 164,
                'nombre' => 'ITUATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'province_id' => 164,
                'nombre' => 'OLLACHEA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'province_id' => 164,
                'nombre' => 'SAN GABAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'province_id' => 164,
                'nombre' => 'USICAYOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'province_id' => 165,
                'nombre' => 'JULI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'province_id' => 165,
                'nombre' => 'DESAGUADERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'province_id' => 165,
                'nombre' => 'HUACULLANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'province_id' => 165,
                'nombre' => 'KELLUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'province_id' => 165,
                'nombre' => 'PISACOMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'province_id' => 165,
                'nombre' => 'POMATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'province_id' => 165,
                'nombre' => 'ZEPITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'province_id' => 166,
                'nombre' => 'ILAVE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'province_id' => 166,
                'nombre' => 'CAPAZO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'province_id' => 166,
                'nombre' => 'PILCUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'province_id' => 166,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'province_id' => 166,
                'nombre' => 'CONDURIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'province_id' => 167,
                'nombre' => 'HUANCANE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'province_id' => 167,
                'nombre' => 'COJATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'province_id' => 167,
                'nombre' => 'HUATASANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'province_id' => 167,
                'nombre' => 'INCHUPALLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'province_id' => 167,
                'nombre' => 'PUSI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'province_id' => 167,
                'nombre' => 'ROSASPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'province_id' => 167,
                'nombre' => 'TARACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'province_id' => 167,
                'nombre' => 'VILQUE CHICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'province_id' => 168,
                'nombre' => 'LAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'province_id' => 168,
                'nombre' => 'CABANILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'province_id' => 168,
                'nombre' => 'CALAPUJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'province_id' => 168,
                'nombre' => 'NICASIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'province_id' => 168,
                'nombre' => 'OCUVIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'province_id' => 168,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'province_id' => 168,
                'nombre' => 'PARATIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'province_id' => 168,
                'nombre' => 'PUCARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'province_id' => 168,
                'nombre' => 'SANTA LUCIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'province_id' => 168,
                'nombre' => 'VILAVILA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'province_id' => 169,
                'nombre' => 'AYAVIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'province_id' => 169,
                'nombre' => 'ANTAUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'province_id' => 169,
                'nombre' => 'CUPI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'province_id' => 169,
                'nombre' => 'LLALLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'province_id' => 169,
                'nombre' => 'MACARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'province_id' => 169,
                'nombre' => 'NUÑOA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'province_id' => 169,
                'nombre' => 'ORURILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'province_id' => 169,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'province_id' => 169,
                'nombre' => 'UMACHIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'province_id' => 170,
                'nombre' => 'MOHO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'province_id' => 170,
                'nombre' => 'CONIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'province_id' => 170,
                'nombre' => 'HUAYRAPATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'province_id' => 170,
                'nombre' => 'TILALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'province_id' => 171,
                'nombre' => 'PUTINA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'province_id' => 171,
                'nombre' => 'ANANEA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'province_id' => 171,
                'nombre' => 'PEDRO VILCA APAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'province_id' => 171,
                'nombre' => 'QUILCAPUNCU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'province_id' => 171,
                'nombre' => 'SINA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'province_id' => 172,
                'nombre' => 'JULIACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'province_id' => 172,
                'nombre' => 'CABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'province_id' => 172,
                'nombre' => 'CABANILLAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'province_id' => 172,
                'nombre' => 'CARACOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'province_id' => 173,
                'nombre' => 'SANDIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'province_id' => 173,
                'nombre' => 'CUYOCUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'province_id' => 173,
                'nombre' => 'LIMBANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'province_id' => 173,
                'nombre' => 'PATAMBUCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'province_id' => 173,
                'nombre' => 'PHARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'province_id' => 173,
                'nombre' => 'QUIACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'province_id' => 173,
                'nombre' => 'SAN JUAN DEL ORO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'province_id' => 173,
                'nombre' => 'YANAHUAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'province_id' => 173,
                'nombre' => 'ALTO INAMBARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'province_id' => 173,
                'nombre' => 'SAN PEDRO DE PUTINA PUNCO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'province_id' => 174,
                'nombre' => 'YUNGUYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'province_id' => 174,
                'nombre' => 'ANAPIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'province_id' => 174,
                'nombre' => 'COPANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'province_id' => 174,
                'nombre' => 'CUTURAPI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'province_id' => 174,
                'nombre' => 'OLLARAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'province_id' => 174,
                'nombre' => 'TINICACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'province_id' => 174,
                'nombre' => 'UNICACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'province_id' => 175,
                'nombre' => 'MOYOBAMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'province_id' => 175,
                'nombre' => 'CALZADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'province_id' => 175,
                'nombre' => 'HABANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'province_id' => 175,
                'nombre' => 'JEPELACIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'province_id' => 175,
                'nombre' => 'SORITOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'province_id' => 175,
                'nombre' => 'YANTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'province_id' => 176,
                'nombre' => 'BELLAVISTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'province_id' => 176,
                'nombre' => 'ALTO BIAVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'province_id' => 176,
                'nombre' => 'BAJO BIAVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'province_id' => 176,
                'nombre' => 'HUALLAGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'province_id' => 176,
                'nombre' => 'SAN PABLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'province_id' => 176,
                'nombre' => 'SAN RAFAEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'province_id' => 177,
                'nombre' => 'SAN JOSE DE SISA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'province_id' => 177,
                'nombre' => 'AGUA BLANCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'province_id' => 177,
                'nombre' => 'SAN MARTIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'province_id' => 177,
                'nombre' => 'SANTA ROSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'province_id' => 177,
                'nombre' => 'SHATOJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'province_id' => 178,
                'nombre' => 'SAPOSOA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'province_id' => 178,
                'nombre' => 'ALTO SAPOSOA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'province_id' => 178,
                'nombre' => 'EL ESLABON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'province_id' => 178,
                'nombre' => 'PISCOYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'province_id' => 178,
                'nombre' => 'SACANCHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'province_id' => 178,
                'nombre' => 'TINGO DE SAPOSOA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'province_id' => 179,
                'nombre' => 'LAMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'province_id' => 179,
                'nombre' => 'ALONSO DE ALVARADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'province_id' => 179,
                'nombre' => 'BARRANQUITA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'province_id' => 179,
                'nombre' => 'CAYNARACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'province_id' => 179,
                'nombre' => 'CUÑUMBUQUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'province_id' => 179,
                'nombre' => 'PINTO RECODO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'province_id' => 179,
                'nombre' => 'RUMISAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'province_id' => 179,
                'nombre' => 'SAN ROQUE DE CUMBAZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'province_id' => 179,
                'nombre' => 'SHANAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'province_id' => 179,
                'nombre' => 'TABALOSOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'province_id' => 179,
                'nombre' => 'ZAPATERO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'province_id' => 180,
                'nombre' => 'JUANJUI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'province_id' => 180,
                'nombre' => 'CAMPANILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'province_id' => 180,
                'nombre' => 'HUICUNGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'province_id' => 180,
                'nombre' => 'PACHIZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'province_id' => 180,
                'nombre' => 'PAJARILLO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'province_id' => 181,
                'nombre' => 'PICOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'province_id' => 181,
                'nombre' => 'BUENOS AIRES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'province_id' => 181,
                'nombre' => 'CASPISAPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'province_id' => 181,
                'nombre' => 'PILLUANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'province_id' => 181,
                'nombre' => 'PUCACACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'province_id' => 181,
                'nombre' => 'SAN CRISTOBAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'province_id' => 181,
                'nombre' => 'SAN HILARION',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'province_id' => 181,
                'nombre' => 'SHAMBOYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'province_id' => 181,
                'nombre' => 'TINGO DE PONASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'province_id' => 181,
                'nombre' => 'TRES UNIDOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'province_id' => 182,
                'nombre' => 'RIOJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'province_id' => 182,
                'nombre' => 'AWAJUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'province_id' => 182,
                'nombre' => 'ELIAS SOPLIN VARGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'province_id' => 182,
                'nombre' => 'NUEVA CAJAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'province_id' => 182,
                'nombre' => 'PARDO MIGUEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'province_id' => 182,
                'nombre' => 'POSIC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'province_id' => 182,
                'nombre' => 'SAN FERNANDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'province_id' => 182,
                'nombre' => 'YORONGOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'province_id' => 182,
                'nombre' => 'YURACYACU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'province_id' => 183,
                'nombre' => 'TARAPOTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'province_id' => 183,
                'nombre' => 'ALBERTO LEVEAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'province_id' => 183,
                'nombre' => 'CACATACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'province_id' => 183,
                'nombre' => 'CHAZUTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'province_id' => 183,
                'nombre' => 'CHIPURANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'province_id' => 183,
                'nombre' => 'EL PORVENIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'province_id' => 183,
                'nombre' => 'HUIMBAYOC',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'province_id' => 183,
                'nombre' => 'JUAN GUERRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'province_id' => 183,
                'nombre' => 'LA BANDA DE SHILCAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'province_id' => 183,
                'nombre' => 'MORALES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'province_id' => 183,
                'nombre' => 'PAPAPLAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'province_id' => 183,
                'nombre' => 'SAN ANTONIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'province_id' => 183,
                'nombre' => 'SAUCE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'province_id' => 183,
                'nombre' => 'SHAPAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'province_id' => 184,
                'nombre' => 'TOCACHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'province_id' => 184,
                'nombre' => 'NUEVO PROGRESO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'province_id' => 184,
                'nombre' => 'POLVORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'province_id' => 184,
                'nombre' => 'SHUNTE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'province_id' => 184,
                'nombre' => 'UCHIZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'province_id' => 185,
                'nombre' => 'TACNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'province_id' => 185,
                'nombre' => 'ALTO DE LA ALIANZA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'province_id' => 185,
                'nombre' => 'CALANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'province_id' => 185,
                'nombre' => 'CIUDAD NUEVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'province_id' => 185,
                'nombre' => 'INCLAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'province_id' => 185,
                'nombre' => 'PACHIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'province_id' => 185,
                'nombre' => 'PALCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'province_id' => 185,
                'nombre' => 'POCOLLAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'province_id' => 185,
                'nombre' => 'SAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'province_id' => 185,
                'nombre' => 'CORONEL GREGORIO ALBARRACIN LANCHIPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'province_id' => 186,
                'nombre' => 'CANDARAVE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'province_id' => 186,
                'nombre' => 'CAIRANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'province_id' => 186,
                'nombre' => 'CAMILACA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'province_id' => 186,
                'nombre' => 'CURIBAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'province_id' => 186,
                'nombre' => 'HUANUARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'province_id' => 186,
                'nombre' => 'QUILAHUANI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'province_id' => 187,
                'nombre' => 'LOCUMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'province_id' => 187,
                'nombre' => 'ILABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'province_id' => 187,
                'nombre' => 'ITE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'province_id' => 188,
                'nombre' => 'TARATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'province_id' => 188,
                'nombre' => 'HEROES ALBARRACIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'province_id' => 188,
                'nombre' => 'ESTIQUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'province_id' => 188,
                'nombre' => 'ESTIQUE-PAMPA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'province_id' => 188,
                'nombre' => 'SITAJARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'province_id' => 188,
                'nombre' => 'SUSAPAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'province_id' => 188,
                'nombre' => 'TARUCACHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'province_id' => 188,
                'nombre' => 'TICACO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'province_id' => 189,
                'nombre' => 'TUMBES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'province_id' => 189,
                'nombre' => 'CORRALES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'province_id' => 189,
                'nombre' => 'LA CRUZ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'province_id' => 189,
                'nombre' => 'PAMPAS DE HOSPITAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'province_id' => 189,
                'nombre' => 'SAN JACINTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'province_id' => 189,
                'nombre' => 'SAN JUAN DE LA VIRGEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'province_id' => 190,
                'nombre' => 'ZORRITOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'province_id' => 190,
                'nombre' => 'CASITAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'province_id' => 190,
                'nombre' => 'CANOAS DE PUNTA SAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'province_id' => 191,
                'nombre' => 'ZARUMILLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'province_id' => 191,
                'nombre' => 'AGUAS VERDES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'province_id' => 191,
                'nombre' => 'MATAPALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'province_id' => 191,
                'nombre' => 'PAPAYAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'province_id' => 192,
                'nombre' => 'CALLERIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'province_id' => 192,
                'nombre' => 'CAMPOVERDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'province_id' => 192,
                'nombre' => 'IPARIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'province_id' => 192,
                'nombre' => 'MASISEA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'province_id' => 192,
                'nombre' => 'YARINACOCHA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'province_id' => 192,
                'nombre' => 'NUEVA REQUENA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'province_id' => 192,
                'nombre' => 'MANANTAY',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'province_id' => 193,
                'nombre' => 'RAYMONDI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'province_id' => 193,
                'nombre' => 'SEPAHUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'province_id' => 193,
                'nombre' => 'TAHUANIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1831,
                'province_id' => 193,
                'nombre' => 'YURUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1832,
                'province_id' => 194,
                'nombre' => 'PADRE ABAD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1833,
                'province_id' => 194,
                'nombre' => 'IRAZOLA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1834,
                'province_id' => 194,
                'nombre' => 'CURIMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1835,
                'province_id' => 195,
                'nombre' => 'PURUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}