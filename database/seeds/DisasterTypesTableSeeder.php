<?php

use Illuminate\Database\Seeder;

class DisasterTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('disaster_types')->delete();
        
        \DB::table('disaster_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'danger_id' => 1,
                'code' => '1100',
                'name' => 'SISMOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'danger_id' => 1,
                'code' => '1200',
            'name' => 'TSUNAMI (MAREMOTO)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'danger_id' => 1,
                'code' => '1300',
                'name' => 'ERUPCIONES VOLCÁNICAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'danger_id' => 2,
                'code' => '2100',
                'name' => 'HUAYCOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'danger_id' => 2,
                'code' => '2200',
                'name' => 'DERRUMBES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'danger_id' => 2,
                'code' => '2210',
                'name' => 'DERRUMBES DE VIVIENDAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'danger_id' => 2,
                'code' => '2220',
                'name' => 'DERRUMBES DE CERROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'danger_id' => 2,
                'code' => '2230',
                'name' => 'DERRUMBES DE ESTRUCTURAS EN GENERAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'danger_id' => 2,
                'code' => '2300',
                'name' => 'REPTACIÓN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'danger_id' => 2,
                'code' => '2400',
                'name' => 'DESLIZAMIENTOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'danger_id' => 2,
                'code' => '2500',
                'name' => 'ALUVIONES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'danger_id' => 2,
                'code' => '2600',
                'name' => 'ALUDES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'danger_id' => 2,
                'code' => '2700',
                'name' => 'DEGLACIACIÓN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'danger_id' => 2,
                'code' => '2800',
                'name' => 'OTROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'danger_id' => 3,
                'code' => '3100',
                'name' => 'INUNDACIONES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'danger_id' => 3,
                'code' => '3110',
                'name' => 'INUNDACIONES POR DESBORDE DE RIOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'danger_id' => 3,
                'code' => '3120',
                'name' => 'INUNDACIONES POR DESBORDE DE LAGOS O LAGUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'danger_id' => 3,
                'code' => '3130',
                'name' => 'INUNDACIONES POR DESBORDE DE CANALES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'danger_id' => 3,
                'code' => '3140',
                'name' => 'INUNDACIONES POR DESBORDE EN LA RUPTURA DE DIQUES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'danger_id' => 3,
                'code' => '3200',
                'name' => 'LLUVIAS INTENSAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'danger_id' => 3,
                'code' => '3300',
                'name' => 'VIENTOS FUERTES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'danger_id' => 3,
                'code' => '3400',
                'name' => 'SEQUÍAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'danger_id' => 3,
                'code' => '3500',
                'name' => 'HELADAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'danger_id' => 3,
                'code' => '3600',
                'name' => 'GRANIZADAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'danger_id' => 3,
                'code' => '3700',
                'name' => 'NEVADAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'danger_id' => 3,
                'code' => '3800',
                'name' => 'FRIAJE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'danger_id' => 3,
                'code' => '3900',
            'name' => 'MARETAZOS (MAREJADAS)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'danger_id' => 3,
                'code' => '3A00',
                'name' => 'TEMPESTADES ELÉCTRICAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'danger_id' => 3,
                'code' => '3B00',
                'name' => 'DESERTIFICACIÓN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'danger_id' => 3,
                'code' => '3C00',
                'name' => 'EMBALSES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'danger_id' => 3,
                'code' => '3D00',
            'name' => 'TEMPORALES (VIENTOS CON LLUVIAS)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'danger_id' => 3,
                'code' => '3E00',
                'name' => 'DÉFICIT HÍDRICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'danger_id' => 3,
                'code' => '3F00',
                'name' => 'OTROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'danger_id' => 4,
                'code' => '4100',
                'name' => 'EPIDEMIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'danger_id' => 4,
                'code' => '4200',
                'name' => 'EPIZOTÍAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'danger_id' => 4,
                'code' => '4300',
                'name' => 'PLAGAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'danger_id' => 4,
                'code' => '4400',
                'name' => 'VARAZONES DE PECES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'danger_id' => 4,
                'code' => '4500',
                'name' => 'HAMBRUNAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'danger_id' => 4,
                'code' => '4600',
                'name' => 'OTROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'danger_id' => 5,
                'code' => '5100',
                'name' => 'INCENDIOS URBANOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'danger_id' => 5,
                'code' => '5200',
                'name' => 'INCENDIOS INDUSTRIALES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'danger_id' => 5,
                'code' => '5300',
                'name' => 'INCENDIOS FORESTALES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'danger_id' => 5,
                'code' => '5400',
                'name' => 'CONTAMINACIÓN AMBIENTAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'danger_id' => 5,
                'code' => '5410',
                'name' => 'CONTAMINACIÓN AMBIENTAL ATMOSFÉRICA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'danger_id' => 5,
                'code' => '5420',
                'name' => 'CONTAMINACIÓN AMBIENTAL DE AGUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'danger_id' => 5,
                'code' => '5430',
                'name' => 'CONTAMINACIÓN AMBIENTAL DE SUELOS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'danger_id' => 5,
                'code' => '5440',
                'name' => 'CONTAMINACIÓN AMBIENTAL RADIOACTIVA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'danger_id' => 5,
                'code' => '5500',
                'name' => 'ACCIDENTES DE TRANSPORTE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'danger_id' => 5,
                'code' => '5510',
                'name' => 'ACCIDENTES DE TRANSPORTE MEDIO TERRESTRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'danger_id' => 5,
                'code' => '5520',
                'name' => 'ACCIDENTES DE TRANSPORTE MEDIO AÉREO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'danger_id' => 5,
                'code' => '5530',
                'name' => 'ACCIDENTES DE TRANSPORTE MEDIO ACUÁTICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'danger_id' => 5,
                'code' => '5531',
                'name' => 'ACCIDENTES DE TRANSPORTE MEDIO ACUÁTICO MARÍTIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'danger_id' => 5,
                'code' => '5532',
                'name' => 'ACCIDENTES DE TRANSPORTE MEDIO ACUÁTICO FLUVIAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'danger_id' => 5,
                'code' => '5533',
                'name' => 'ACCIDENTES DE TRANSPORTE MEDIO ACUÁTICO LACUSTRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'danger_id' => 5,
                'code' => '5600',
            'name' => 'DERRAME DE SUSTANCIAS NOCIVAS Y PONTENCIALMENTE PELIGROSAS (DSNPP)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'danger_id' => 5,
                'code' => '5610',
            'name' => 'DERRAME DE SUSTANCIAS NOCIVAS Y PONTENCIALMENTE PELIGROSAS (DSNPP) GAS NATURAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'danger_id' => 5,
                'code' => '5620',
            'name' => 'DERRAME DE SUSTANCIAS NOCIVAS Y PONTENCIALMENTE PELIGROSAS (DSNPP) MERCURIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'danger_id' => 5,
                'code' => '5630',
            'name' => 'DERRAME DE SUSTANCIAS NOCIVAS Y PONTENCIALMENTE PELIGROSAS (DSNPP) HIDROCARBUROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'danger_id' => 5,
                'code' => '5640',
            'name' => 'DERRAME DE SUSTANCIAS NOCIVAS Y PONTENCIALMENTE PELIGROSAS (DSNPP) MATERIAL RADIOACTIVO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'danger_id' => 5,
                'code' => '5700',
                'name' => 'DEFORESTACIÓN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'danger_id' => 5,
                'code' => '5800',
                'name' => 'EXPLOSIONES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'danger_id' => 5,
                'code' => '5900',
                'name' => 'SABOTAJES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'danger_id' => 5,
                'code' => '5A00',
            'name' => 'VANDALISMO (SAQUEOS)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'danger_id' => 5,
                'code' => '5B00',
                'name' => 'ACCIONES DE GUERRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'danger_id' => 5,
                'code' => '5C00',
                'name' => 'OTROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}