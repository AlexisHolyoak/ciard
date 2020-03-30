<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'department_id' => 1,
                'nombre' => 'CHACHAPOYAS',
            ),
            1 => 
            array (
                'id' => 2,
                'department_id' => 1,
                'nombre' => 'BAGUA',
            ),
            2 => 
            array (
                'id' => 3,
                'department_id' => 1,
                'nombre' => 'BONGARA',
            ),
            3 => 
            array (
                'id' => 4,
                'department_id' => 1,
                'nombre' => 'CONDORCANQUI',
            ),
            4 => 
            array (
                'id' => 5,
                'department_id' => 1,
                'nombre' => 'LUYA',
            ),
            5 => 
            array (
                'id' => 6,
                'department_id' => 1,
                'nombre' => 'RODRIGUEZ DE MENDOZA',
            ),
            6 => 
            array (
                'id' => 7,
                'department_id' => 1,
                'nombre' => 'UTCUBAMBA',
            ),
            7 => 
            array (
                'id' => 8,
                'department_id' => 2,
                'nombre' => 'HUARAZ',
            ),
            8 => 
            array (
                'id' => 9,
                'department_id' => 2,
                'nombre' => 'AIJA',
            ),
            9 => 
            array (
                'id' => 10,
                'department_id' => 2,
                'nombre' => 'ANTONIO RAYMONDI',
            ),
            10 => 
            array (
                'id' => 11,
                'department_id' => 2,
                'nombre' => 'ASUNCION',
            ),
            11 => 
            array (
                'id' => 12,
                'department_id' => 2,
                'nombre' => 'BOLOGNESI',
            ),
            12 => 
            array (
                'id' => 13,
                'department_id' => 2,
                'nombre' => 'CARHUAZ',
            ),
            13 => 
            array (
                'id' => 14,
                'department_id' => 2,
                'nombre' => 'CARLOS FERMIN FITZCA',
            ),
            14 => 
            array (
                'id' => 15,
                'department_id' => 2,
                'nombre' => 'CASMA',
            ),
            15 => 
            array (
                'id' => 16,
                'department_id' => 2,
                'nombre' => 'CORONGO',
            ),
            16 => 
            array (
                'id' => 17,
                'department_id' => 2,
                'nombre' => 'HUARI',
            ),
            17 => 
            array (
                'id' => 18,
                'department_id' => 2,
                'nombre' => 'HUARMEY',
            ),
            18 => 
            array (
                'id' => 19,
                'department_id' => 2,
                'nombre' => 'HUAYLAS',
            ),
            19 => 
            array (
                'id' => 20,
                'department_id' => 2,
                'nombre' => 'MARISCAL LUZURIAGA',
            ),
            20 => 
            array (
                'id' => 21,
                'department_id' => 2,
                'nombre' => 'OCROS',
            ),
            21 => 
            array (
                'id' => 22,
                'department_id' => 2,
                'nombre' => 'PALLASCA',
            ),
            22 => 
            array (
                'id' => 23,
                'department_id' => 2,
                'nombre' => 'POMABAMBA',
            ),
            23 => 
            array (
                'id' => 24,
                'department_id' => 2,
                'nombre' => 'RECUAY',
            ),
            24 => 
            array (
                'id' => 25,
                'department_id' => 2,
                'nombre' => 'SANTA',
            ),
            25 => 
            array (
                'id' => 26,
                'department_id' => 2,
                'nombre' => 'SIHUAS',
            ),
            26 => 
            array (
                'id' => 27,
                'department_id' => 2,
                'nombre' => 'YUNGAY',
            ),
            27 => 
            array (
                'id' => 28,
                'department_id' => 3,
                'nombre' => 'ABANCAY',
            ),
            28 => 
            array (
                'id' => 29,
                'department_id' => 3,
                'nombre' => 'ANDAHUAYLAS',
            ),
            29 => 
            array (
                'id' => 30,
                'department_id' => 3,
                'nombre' => 'ANTABAMBA',
            ),
            30 => 
            array (
                'id' => 31,
                'department_id' => 3,
                'nombre' => 'AYMARAES',
            ),
            31 => 
            array (
                'id' => 32,
                'department_id' => 3,
                'nombre' => 'COTABAMBAS',
            ),
            32 => 
            array (
                'id' => 33,
                'department_id' => 3,
                'nombre' => 'CHINCHEROS',
            ),
            33 => 
            array (
                'id' => 34,
                'department_id' => 3,
                'nombre' => 'GRAU',
            ),
            34 => 
            array (
                'id' => 35,
                'department_id' => 4,
                'nombre' => 'AREQUIPA',
            ),
            35 => 
            array (
                'id' => 36,
                'department_id' => 4,
                'nombre' => 'CAMANA',
            ),
            36 => 
            array (
                'id' => 37,
                'department_id' => 4,
                'nombre' => 'CARAVELI',
            ),
            37 => 
            array (
                'id' => 38,
                'department_id' => 4,
                'nombre' => 'CASTILLA',
            ),
            38 => 
            array (
                'id' => 39,
                'department_id' => 4,
                'nombre' => 'CAYLLOMA',
            ),
            39 => 
            array (
                'id' => 40,
                'department_id' => 4,
                'nombre' => 'CONDESUYOS',
            ),
            40 => 
            array (
                'id' => 41,
                'department_id' => 4,
                'nombre' => 'ISLAY',
            ),
            41 => 
            array (
                'id' => 42,
                'department_id' => 4,
                'nombre' => 'LA UNION',
            ),
            42 => 
            array (
                'id' => 43,
                'department_id' => 5,
                'nombre' => 'HUAMANGA',
            ),
            43 => 
            array (
                'id' => 44,
                'department_id' => 5,
                'nombre' => 'CANGALLO',
            ),
            44 => 
            array (
                'id' => 45,
                'department_id' => 5,
                'nombre' => 'HUANCA SANCOS',
            ),
            45 => 
            array (
                'id' => 46,
                'department_id' => 5,
                'nombre' => 'HUANTA',
            ),
            46 => 
            array (
                'id' => 47,
                'department_id' => 5,
                'nombre' => 'LA MAR',
            ),
            47 => 
            array (
                'id' => 48,
                'department_id' => 5,
                'nombre' => 'LUCANAS',
            ),
            48 => 
            array (
                'id' => 49,
                'department_id' => 5,
                'nombre' => 'PARINACOCHAS',
            ),
            49 => 
            array (
                'id' => 50,
                'department_id' => 5,
                'nombre' => 'PAUCAR DEL SARA SARA',
            ),
            50 => 
            array (
                'id' => 51,
                'department_id' => 5,
                'nombre' => 'SUCRE',
            ),
            51 => 
            array (
                'id' => 52,
                'department_id' => 5,
                'nombre' => 'VICTOR FAJARDO',
            ),
            52 => 
            array (
                'id' => 53,
                'department_id' => 5,
                'nombre' => 'VILCAS HUAMAN',
            ),
            53 => 
            array (
                'id' => 54,
                'department_id' => 6,
                'nombre' => 'CAJAMARCA',
            ),
            54 => 
            array (
                'id' => 55,
                'department_id' => 6,
                'nombre' => 'CAJABAMBA',
            ),
            55 => 
            array (
                'id' => 56,
                'department_id' => 6,
                'nombre' => 'CELENDIN',
            ),
            56 => 
            array (
                'id' => 57,
                'department_id' => 6,
                'nombre' => 'CHOTA',
            ),
            57 => 
            array (
                'id' => 58,
                'department_id' => 6,
                'nombre' => 'CONTUMAZA',
            ),
            58 => 
            array (
                'id' => 59,
                'department_id' => 6,
                'nombre' => 'CUTERVO',
            ),
            59 => 
            array (
                'id' => 60,
                'department_id' => 6,
                'nombre' => 'HUALGAYOC',
            ),
            60 => 
            array (
                'id' => 61,
                'department_id' => 6,
                'nombre' => 'JAEN',
            ),
            61 => 
            array (
                'id' => 62,
                'department_id' => 6,
                'nombre' => 'SAN IGNACIO',
            ),
            62 => 
            array (
                'id' => 63,
                'department_id' => 6,
                'nombre' => 'SAN MARCOS',
            ),
            63 => 
            array (
                'id' => 64,
                'department_id' => 6,
                'nombre' => 'SAN MIGUEL',
            ),
            64 => 
            array (
                'id' => 65,
                'department_id' => 6,
                'nombre' => 'SAN PABLO',
            ),
            65 => 
            array (
                'id' => 66,
                'department_id' => 6,
                'nombre' => 'SANTA CRUZ',
            ),
            66 => 
            array (
                'id' => 67,
                'department_id' => 7,
                'nombre' => 'CALLAO',
            ),
            67 => 
            array (
                'id' => 68,
                'department_id' => 8,
                'nombre' => 'CUSCO',
            ),
            68 => 
            array (
                'id' => 69,
                'department_id' => 8,
                'nombre' => 'ACOMAYO',
            ),
            69 => 
            array (
                'id' => 70,
                'department_id' => 8,
                'nombre' => 'ANTA',
            ),
            70 => 
            array (
                'id' => 71,
                'department_id' => 8,
                'nombre' => 'CALCA',
            ),
            71 => 
            array (
                'id' => 72,
                'department_id' => 8,
                'nombre' => 'CANAS',
            ),
            72 => 
            array (
                'id' => 73,
                'department_id' => 8,
                'nombre' => 'CANCHIS',
            ),
            73 => 
            array (
                'id' => 74,
                'department_id' => 8,
                'nombre' => 'CHUMBIVILCAS',
            ),
            74 => 
            array (
                'id' => 75,
                'department_id' => 8,
                'nombre' => 'ESPINAR',
            ),
            75 => 
            array (
                'id' => 76,
                'department_id' => 8,
                'nombre' => 'LA CONVENCION',
            ),
            76 => 
            array (
                'id' => 77,
                'department_id' => 8,
                'nombre' => 'PARURO',
            ),
            77 => 
            array (
                'id' => 78,
                'department_id' => 8,
                'nombre' => 'PAUCARTAMBO',
            ),
            78 => 
            array (
                'id' => 79,
                'department_id' => 8,
                'nombre' => 'QUISPICANCHI',
            ),
            79 => 
            array (
                'id' => 80,
                'department_id' => 8,
                'nombre' => 'URUBAMBA',
            ),
            80 => 
            array (
                'id' => 81,
                'department_id' => 9,
                'nombre' => 'HUANCAVELICA',
            ),
            81 => 
            array (
                'id' => 82,
                'department_id' => 9,
                'nombre' => 'ACOBAMBA',
            ),
            82 => 
            array (
                'id' => 83,
                'department_id' => 9,
                'nombre' => 'ANGARAES',
            ),
            83 => 
            array (
                'id' => 84,
                'department_id' => 9,
                'nombre' => 'CASTROVIRREYNA',
            ),
            84 => 
            array (
                'id' => 85,
                'department_id' => 9,
                'nombre' => 'CHURCAMPA',
            ),
            85 => 
            array (
                'id' => 86,
                'department_id' => 9,
                'nombre' => 'HUAYTARA',
            ),
            86 => 
            array (
                'id' => 87,
                'department_id' => 9,
                'nombre' => 'TAYACAJA',
            ),
            87 => 
            array (
                'id' => 88,
                'department_id' => 10,
                'nombre' => 'HUANUCO',
            ),
            88 => 
            array (
                'id' => 89,
                'department_id' => 10,
                'nombre' => 'AMBO',
            ),
            89 => 
            array (
                'id' => 90,
                'department_id' => 10,
                'nombre' => 'DOS DE MAYO',
            ),
            90 => 
            array (
                'id' => 91,
                'department_id' => 10,
                'nombre' => 'HUACAYBAMBA',
            ),
            91 => 
            array (
                'id' => 92,
                'department_id' => 10,
                'nombre' => 'HUAMALIES',
            ),
            92 => 
            array (
                'id' => 93,
                'department_id' => 10,
                'nombre' => 'LEONCIO PRADO',
            ),
            93 => 
            array (
                'id' => 94,
                'department_id' => 10,
                'nombre' => 'MARAÑON',
            ),
            94 => 
            array (
                'id' => 95,
                'department_id' => 10,
                'nombre' => 'PACHITEA',
            ),
            95 => 
            array (
                'id' => 96,
                'department_id' => 10,
                'nombre' => 'PUERTO INCA',
            ),
            96 => 
            array (
                'id' => 97,
                'department_id' => 10,
                'nombre' => 'LAURICOCHA',
            ),
            97 => 
            array (
                'id' => 98,
                'department_id' => 10,
                'nombre' => 'YAROWILCA',
            ),
            98 => 
            array (
                'id' => 99,
                'department_id' => 11,
                'nombre' => 'ICA',
            ),
            99 => 
            array (
                'id' => 100,
                'department_id' => 11,
                'nombre' => 'CHINCHA',
            ),
            100 => 
            array (
                'id' => 101,
                'department_id' => 11,
                'nombre' => 'NAZCA',
            ),
            101 => 
            array (
                'id' => 102,
                'department_id' => 11,
                'nombre' => 'PALPA',
            ),
            102 => 
            array (
                'id' => 103,
                'department_id' => 11,
                'nombre' => 'PISCO',
            ),
            103 => 
            array (
                'id' => 104,
                'department_id' => 12,
                'nombre' => 'HUANCAYO',
            ),
            104 => 
            array (
                'id' => 105,
                'department_id' => 12,
                'nombre' => 'CONCEPCION',
            ),
            105 => 
            array (
                'id' => 106,
                'department_id' => 12,
                'nombre' => 'CHANCHAMAYO',
            ),
            106 => 
            array (
                'id' => 107,
                'department_id' => 12,
                'nombre' => 'JAUJA',
            ),
            107 => 
            array (
                'id' => 108,
                'department_id' => 12,
                'nombre' => 'JUNIN',
            ),
            108 => 
            array (
                'id' => 109,
                'department_id' => 12,
                'nombre' => 'SATIPO',
            ),
            109 => 
            array (
                'id' => 110,
                'department_id' => 12,
                'nombre' => 'TARMA',
            ),
            110 => 
            array (
                'id' => 111,
                'department_id' => 12,
                'nombre' => 'YAULI',
            ),
            111 => 
            array (
                'id' => 112,
                'department_id' => 12,
                'nombre' => 'CHUPACA',
            ),
            112 => 
            array (
                'id' => 113,
                'department_id' => 13,
                'nombre' => 'TRUJILLO',
            ),
            113 => 
            array (
                'id' => 114,
                'department_id' => 13,
                'nombre' => 'ASCOPE',
            ),
            114 => 
            array (
                'id' => 115,
                'department_id' => 13,
                'nombre' => 'BOLIVAR',
            ),
            115 => 
            array (
                'id' => 116,
                'department_id' => 13,
                'nombre' => 'CHEPEN',
            ),
            116 => 
            array (
                'id' => 117,
                'department_id' => 13,
                'nombre' => 'JULCAN',
            ),
            117 => 
            array (
                'id' => 118,
                'department_id' => 13,
                'nombre' => 'OTUZCO',
            ),
            118 => 
            array (
                'id' => 119,
                'department_id' => 13,
                'nombre' => 'PACASMAYO',
            ),
            119 => 
            array (
                'id' => 120,
                'department_id' => 13,
                'nombre' => 'PATAZ',
            ),
            120 => 
            array (
                'id' => 121,
                'department_id' => 13,
                'nombre' => 'SANCHEZ CARRION',
            ),
            121 => 
            array (
                'id' => 122,
                'department_id' => 13,
                'nombre' => 'SANTIAGO DE CHUCO',
            ),
            122 => 
            array (
                'id' => 123,
                'department_id' => 13,
                'nombre' => 'GRAN CHIMU',
            ),
            123 => 
            array (
                'id' => 124,
                'department_id' => 13,
                'nombre' => 'VIRU',
            ),
            124 => 
            array (
                'id' => 125,
                'department_id' => 14,
                'nombre' => 'CHICLAYO',
            ),
            125 => 
            array (
                'id' => 126,
                'department_id' => 14,
                'nombre' => 'FERREÑAFE',
            ),
            126 => 
            array (
                'id' => 127,
                'department_id' => 14,
                'nombre' => 'LAMBAYEQUE',
            ),
            127 => 
            array (
                'id' => 128,
                'department_id' => 15,
                'nombre' => 'LIMA',
            ),
            128 => 
            array (
                'id' => 129,
                'department_id' => 15,
                'nombre' => 'BARRANCA',
            ),
            129 => 
            array (
                'id' => 130,
                'department_id' => 15,
                'nombre' => 'CAJATAMBO',
            ),
            130 => 
            array (
                'id' => 131,
                'department_id' => 15,
                'nombre' => 'CANTA',
            ),
            131 => 
            array (
                'id' => 132,
                'department_id' => 15,
                'nombre' => 'CAÑETE',
            ),
            132 => 
            array (
                'id' => 133,
                'department_id' => 15,
                'nombre' => 'HUARAL',
            ),
            133 => 
            array (
                'id' => 134,
                'department_id' => 15,
                'nombre' => 'HUAROCHIRI',
            ),
            134 => 
            array (
                'id' => 135,
                'department_id' => 15,
                'nombre' => 'HUAURA',
            ),
            135 => 
            array (
                'id' => 136,
                'department_id' => 15,
                'nombre' => 'OYON',
            ),
            136 => 
            array (
                'id' => 137,
                'department_id' => 15,
                'nombre' => 'YAUYOS',
            ),
            137 => 
            array (
                'id' => 138,
                'department_id' => 16,
                'nombre' => 'MAYNAS',
            ),
            138 => 
            array (
                'id' => 139,
                'department_id' => 16,
                'nombre' => 'ALTO AMAZONAS',
            ),
            139 => 
            array (
                'id' => 140,
                'department_id' => 16,
                'nombre' => 'LORETO',
            ),
            140 => 
            array (
                'id' => 141,
                'department_id' => 16,
                'nombre' => 'MARISCAL RAMON CASTILLA',
            ),
            141 => 
            array (
                'id' => 142,
                'department_id' => 16,
                'nombre' => 'REQUENA',
            ),
            142 => 
            array (
                'id' => 143,
                'department_id' => 16,
                'nombre' => 'UCAYALI',
            ),
            143 => 
            array (
                'id' => 144,
                'department_id' => 16,
                'nombre' => 'DATEM DEL MARAÑON',
            ),
            144 => 
            array (
                'id' => 145,
                'department_id' => 17,
                'nombre' => 'TAMBOPATA',
            ),
            145 => 
            array (
                'id' => 146,
                'department_id' => 17,
                'nombre' => 'MANU',
            ),
            146 => 
            array (
                'id' => 147,
                'department_id' => 17,
                'nombre' => 'TAHUAMANU',
            ),
            147 => 
            array (
                'id' => 148,
                'department_id' => 18,
                'nombre' => 'MARISCAL NIETO',
            ),
            148 => 
            array (
                'id' => 149,
                'department_id' => 18,
                'nombre' => 'GENERAL SANCHEZ CERRO',
            ),
            149 => 
            array (
                'id' => 150,
                'department_id' => 18,
                'nombre' => 'ILO',
            ),
            150 => 
            array (
                'id' => 151,
                'department_id' => 19,
                'nombre' => 'PASCO',
            ),
            151 => 
            array (
                'id' => 152,
                'department_id' => 19,
                'nombre' => 'DANIEL ALCIDES CARRION',
            ),
            152 => 
            array (
                'id' => 153,
                'department_id' => 19,
                'nombre' => 'OXAPAMPA',
            ),
            153 => 
            array (
                'id' => 154,
                'department_id' => 20,
                'nombre' => 'PIURA',
            ),
            154 => 
            array (
                'id' => 155,
                'department_id' => 20,
                'nombre' => 'AYABACA',
            ),
            155 => 
            array (
                'id' => 156,
                'department_id' => 20,
                'nombre' => 'HUANCABAMBA',
            ),
            156 => 
            array (
                'id' => 157,
                'department_id' => 20,
                'nombre' => 'MORROPON',
            ),
            157 => 
            array (
                'id' => 158,
                'department_id' => 20,
                'nombre' => 'PAITA',
            ),
            158 => 
            array (
                'id' => 159,
                'department_id' => 20,
                'nombre' => 'SULLANA',
            ),
            159 => 
            array (
                'id' => 160,
                'department_id' => 20,
                'nombre' => 'TALARA',
            ),
            160 => 
            array (
                'id' => 161,
                'department_id' => 20,
                'nombre' => 'SECHURA',
            ),
            161 => 
            array (
                'id' => 162,
                'department_id' => 21,
                'nombre' => 'PUNO',
            ),
            162 => 
            array (
                'id' => 163,
                'department_id' => 21,
                'nombre' => 'AZANGARO',
            ),
            163 => 
            array (
                'id' => 164,
                'department_id' => 21,
                'nombre' => 'CARABAYA',
            ),
            164 => 
            array (
                'id' => 165,
                'department_id' => 21,
                'nombre' => 'CHUCUITO',
            ),
            165 => 
            array (
                'id' => 166,
                'department_id' => 21,
                'nombre' => 'EL COLLAO',
            ),
            166 => 
            array (
                'id' => 167,
                'department_id' => 21,
                'nombre' => 'HUANCANE',
            ),
            167 => 
            array (
                'id' => 168,
                'department_id' => 21,
                'nombre' => 'LAMPA',
            ),
            168 => 
            array (
                'id' => 169,
                'department_id' => 21,
                'nombre' => 'MELGAR',
            ),
            169 => 
            array (
                'id' => 170,
                'department_id' => 21,
                'nombre' => 'MOHO',
            ),
            170 => 
            array (
                'id' => 171,
                'department_id' => 21,
                'nombre' => 'SAN ANTONIO DE PUTIN',
            ),
            171 => 
            array (
                'id' => 172,
                'department_id' => 21,
                'nombre' => 'SAN ROMAN',
            ),
            172 => 
            array (
                'id' => 173,
                'department_id' => 21,
                'nombre' => 'SANDIA',
            ),
            173 => 
            array (
                'id' => 174,
                'department_id' => 21,
                'nombre' => 'YUNGUYO',
            ),
            174 => 
            array (
                'id' => 175,
                'department_id' => 22,
                'nombre' => 'MOYOBAMBA',
            ),
            175 => 
            array (
                'id' => 176,
                'department_id' => 22,
                'nombre' => 'BELLAVISTA',
            ),
            176 => 
            array (
                'id' => 177,
                'department_id' => 22,
                'nombre' => 'EL DORADO',
            ),
            177 => 
            array (
                'id' => 178,
                'department_id' => 22,
                'nombre' => 'HUALLAGA',
            ),
            178 => 
            array (
                'id' => 179,
                'department_id' => 22,
                'nombre' => 'LAMAS',
            ),
            179 => 
            array (
                'id' => 180,
                'department_id' => 22,
                'nombre' => 'MARISCAL CACERES',
            ),
            180 => 
            array (
                'id' => 181,
                'department_id' => 22,
                'nombre' => 'PICOTA',
            ),
            181 => 
            array (
                'id' => 182,
                'department_id' => 22,
                'nombre' => 'RIOJA',
            ),
            182 => 
            array (
                'id' => 183,
                'department_id' => 22,
                'nombre' => 'SAN MARTIN',
            ),
            183 => 
            array (
                'id' => 184,
                'department_id' => 22,
                'nombre' => 'TOCACHE',
            ),
            184 => 
            array (
                'id' => 185,
                'department_id' => 23,
                'nombre' => 'TACNA',
            ),
            185 => 
            array (
                'id' => 186,
                'department_id' => 23,
                'nombre' => 'CANDARAVE',
            ),
            186 => 
            array (
                'id' => 187,
                'department_id' => 23,
                'nombre' => 'JORGE BASADRE',
            ),
            187 => 
            array (
                'id' => 188,
                'department_id' => 23,
                'nombre' => 'TARATA',
            ),
            188 => 
            array (
                'id' => 189,
                'department_id' => 24,
                'nombre' => 'TUMBES',
            ),
            189 => 
            array (
                'id' => 190,
                'department_id' => 24,
                'nombre' => 'CONTRALMIRANTE VILLA',
            ),
            190 => 
            array (
                'id' => 191,
                'department_id' => 24,
                'nombre' => 'ZARUMILLA',
            ),
            191 => 
            array (
                'id' => 192,
                'department_id' => 25,
                'nombre' => 'CORONEL PORTILLO',
            ),
            192 => 
            array (
                'id' => 193,
                'department_id' => 25,
                'nombre' => 'ATALAYA',
            ),
            193 => 
            array (
                'id' => 194,
                'department_id' => 25,
                'nombre' => 'PADRE ABAD',
            ),
            194 => 
            array (
                'id' => 195,
                'department_id' => 25,
                'nombre' => 'PURUS',
            ),
        ));
        
        
    }
}