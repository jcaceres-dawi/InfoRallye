<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagesSeeder extends Seeder
{
    public function run(): void
    {
        $stages = [
            [
                'rally_id' => 1,
                'name' => 'Rambla del Cañar',
                'surface' => 'Grava',
                'length_km' => 15.2,
                'start_point_lat' => 37.7921,
                'start_point_lng' => -1.7773,
                'end_point_lat' => 37.7768,
                'end_point_lng' => -1.7490,
                'route' => json_encode([
                    ['lat' => 37.7905, 'lng' => -1.7740],
                    ['lat' => 37.7850, 'lng' => -1.7690],
                    ['lat' => 37.7810, 'lng' => -1.7625],
                    ['lat' => 37.7785, 'lng' => -1.7565],
                    ['lat' => 37.7778, 'lng' => -1.7520],
                ]),
            ],
            [
                'rally_id' => 1,
                'name' => 'La Tova - Zarzilla',
                'surface' => 'Grava',
                'length_km' => 17.4,
                'start_point_lat' => 37.8120,
                'start_point_lng' => -1.9250,
                'end_point_lat' => 37.8402,
                'end_point_lng' => -1.8958,
                'route' => json_encode([
                    ['lat' => 37.8160, 'lng' => -1.9205],
                    ['lat' => 37.8210, 'lng' => -1.9120],
                    ['lat' => 37.8275, 'lng' => -1.9055],
                    ['lat' => 37.8330, 'lng' => -1.9000],
                    ['lat' => 37.8375, 'lng' => -1.8970],
                ]),
            ],
            [
                'rally_id' => 1,
                'name' => 'Campo López',
                'surface' => 'Grava',
                'length_km' => 13.6,
                'start_point_lat' => 37.6710,
                'start_point_lng' => -1.7922,
                'end_point_lat' => 37.6920,
                'end_point_lng' => -1.7561,
                'route' => json_encode([
                    ['lat' => 37.6745, 'lng' => -1.7850],
                    ['lat' => 37.6780, 'lng' => -1.7760],
                    ['lat' => 37.6830, 'lng' => -1.7675],
                    ['lat' => 37.6885, 'lng' => -1.7600],
                ]),
            ],
            [
                'rally_id' => 2,
                'name' => 'Las Ermitas - Trassierra',
                'surface' => 'Asfalto',
                'length_km' => 16.8,
                'start_point_lat' => 37.8840,
                'start_point_lng' => -4.8190,
                'end_point_lat' => 37.8975,
                'end_point_lng' => -4.8825,
                'route' => json_encode([
                    ['lat' => 37.8855, 'lng' => -4.8240],
                    ['lat' => 37.8880, 'lng' => -4.8325],
                    ['lat' => 37.8905, 'lng' => -4.8430],
                    ['lat' => 37.8932, 'lng' => -4.8550],
                    ['lat' => 37.8950, 'lng' => -4.8705],
                ]),
            ],
            [
                'rally_id' => 2,
                'name' => 'El Brillante - Cerro Muriano',
                'surface' => 'Mixto',
                'length_km' => 14.3,
                'start_point_lat' => 37.9042,
                'start_point_lng' => -4.7941,
                'end_point_lat' => 37.9481,
                'end_point_lng' => -4.8147,
                'route' => json_encode([
                    ['lat' => 37.9080, 'lng' => -4.7985],
                    ['lat' => 37.9202, 'lng' => -4.8043],
                    ['lat' => 37.9301, 'lng' => -4.8099],
                    ['lat' => 37.9400, 'lng' => -4.8120],
                ]),
            ],
            [
                'rally_id' => 2,
                'name' => 'Villaviciosa - Trasierra',
                'surface' => 'Grava',
                'length_km' => 20.1,
                'start_point_lat' => 37.9540,
                'start_point_lng' => -5.0300,
                'end_point_lat' => 37.9044,
                'end_point_lng' => -4.9202,
                'route' => json_encode([
                    ['lat' => 37.9480, 'lng' => -5.0150],
                    ['lat' => 37.9335, 'lng' => -4.9900],
                    ['lat' => 37.9250, 'lng' => -4.9600],
                    ['lat' => 37.9120, 'lng' => -4.9350],
                ]),
            ],
            [
                'rally_id' => 3,
                'name' => 'A Peroxa - Luintra',
                'surface' => 'Asfalto',
                'length_km' => 17.6,
                'start_point_lat' => 42.4444,
                'start_point_lng' => -7.7562,
                'end_point_lat' => 42.4312,
                'end_point_lng' => -7.6791,
                'route' => json_encode([
                    ['lat' => 42.4430, 'lng' => -7.7480],
                    ['lat' => 42.4400, 'lng' => -7.7350],
                    ['lat' => 42.4375, 'lng' => -7.7200],
                    ['lat' => 42.4350, 'lng' => -7.7000],
                ]),
            ],
            [
                'rally_id' => 3,
                'name' => 'San Pedro de Rocas - Esgos',
                'surface' => 'Grava',
                'length_km' => 12.9,
                'start_point_lat' => 42.3955,
                'start_point_lng' => -7.6550,
                'end_point_lat' => 42.4125,
                'end_point_lng' => -7.6102,
                'route' => json_encode([
                    ['lat' => 42.3980, 'lng' => -7.6480],
                    ['lat' => 42.4030, 'lng' => -7.6350],
                    ['lat' => 42.4075, 'lng' => -7.6220],
                ]),
            ],
            [
                'rally_id' => 3,
                'name' => 'Castro Caldelas - Parada de Sil',
                'surface' => 'Mixto',
                'length_km' => 19.3,
                'start_point_lat' => 42.3701,
                'start_point_lng' => -7.4160,
                'end_point_lat' => 42.3777,
                'end_point_lng' => -7.5488,
                'route' => json_encode([
                    ['lat' => 42.3720, 'lng' => -7.4300],
                    ['lat' => 42.3755, 'lng' => -7.4600],
                    ['lat' => 42.3765, 'lng' => -7.4900],
                    ['lat' => 42.3772, 'lng' => -7.5200],
                ]),
            ],
            [
                'rally_id' => 4,
                'name' => 'Oia - Mougás',
                'surface' => 'Mixto',
                'length_km' => 14.8,
                'start_point_lat' => 42.0600,
                'start_point_lng' => -8.8970,
                'end_point_lat' => 42.1385,
                'end_point_lng' => -8.8662,
                'route' => json_encode([
                    ['lat' => 42.0700, 'lng' => -8.8900],
                    ['lat' => 42.0900, 'lng' => -8.8800],
                    ['lat' => 42.1150, 'lng' => -8.8720],
                ]),
            ],
            [
                'rally_id' => 4,
                'name' => 'Baiona - Baredo',
                'surface' => 'Asfalto',
                'length_km' => 11.2,
                'start_point_lat' => 42.1168,
                'start_point_lng' => -8.8474,
                'end_point_lat' => 42.1244,
                'end_point_lng' => -8.8400,
                'route' => json_encode([
                    ['lat' => 42.1180, 'lng' => -8.8450],
                    ['lat' => 42.1210, 'lng' => -8.8420],
                ]),
            ],
            [
                'rally_id' => 4,
                'name' => 'Tomiño - Tebra',
                'surface' => 'Grava',
                'length_km' => 17.0,
                'start_point_lat' => 42.0520,
                'start_point_lng' => -8.7280,
                'end_point_lat' => 42.0940,
                'end_point_lng' => -8.7172,
                'route' => json_encode([
                    ['lat' => 42.0600, 'lng' => -8.7250],
                    ['lat' => 42.0700, 'lng' => -8.7220],
                    ['lat' => 42.0800, 'lng' => -8.7200],
                ]),
            ],
            [
                'rally_id' => 5,
                'name' => 'La Manjoya - El Escamplero',
                'surface' => 'Asfalto',
                'length_km' => 12.5,
                'start_point_lat' => 43.3501,
                'start_point_lng' => -5.8503,
                'end_point_lat' => 43.3744,
                'end_point_lng' => -5.9166,
                'route' => json_encode([
                    ['lat' => 43.3550, 'lng' => -5.8600],
                    ['lat' => 43.3600, 'lng' => -5.8800],
                    ['lat' => 43.3680, 'lng' => -5.9000],
                ]),
            ],
            [
                'rally_id' => 5,
                'name' => 'Trubia - Sograndio',
                'surface' => 'Mixto',
                'length_km' => 15.9,
                'start_point_lat' => 43.3520,
                'start_point_lng' => -6.0090,
                'end_point_lat' => 43.3842,
                'end_point_lng' => -5.9731,
                'route' => json_encode([
                    ['lat' => 43.3580, 'lng' => -6.0000],
                    ['lat' => 43.3660, 'lng' => -5.9900],
                    ['lat' => 43.3740, 'lng' => -5.9800],
                ]),
            ],
            [
                'rally_id' => 5,
                'name' => 'Las Caldas - Latores',
                'surface' => 'Asfalto',
                'length_km' => 10.6,
                'start_point_lat' => 43.3371,
                'start_point_lng' => -5.9180,
                'end_point_lat' => 43.3539,
                'end_point_lng' => -5.8630,
                'route' => json_encode([
                    ['lat' => 43.3400, 'lng' => -5.9050],
                    ['lat' => 43.3450, 'lng' => -5.8900],
                    ['lat' => 43.3500, 'lng' => -5.8750],
                ]),
            ],
            [
                'rally_id' => 6,
                'name' => 'Nueva - Pría',
                'surface' => 'Mixto',
                'length_km' => 13.7,
                'start_point_lat' => 43.4286,
                'start_point_lng' => -4.9832,
                'end_point_lat' => 43.4281,
                'end_point_lng' => -4.9234,
                'route' => json_encode([
                    ['lat' => 43.4290, 'lng' => -4.9750],
                    ['lat' => 43.4295, 'lng' => -4.9600],
                    ['lat' => 43.4289, 'lng' => -4.9440],
                ]),
            ],
            [
                'rally_id' => 6,
                'name' => 'El Mazucu - Rales',
                'surface' => 'Asfalto',
                'length_km' => 16.1,
                'start_point_lat' => 43.3715,
                'start_point_lng' => -4.8843,
                'end_point_lat' => 43.3952,
                'end_point_lng' => -4.9440,
                'route' => json_encode([
                    ['lat' => 43.3740, 'lng' => -4.8950],
                    ['lat' => 43.3820, 'lng' => -4.9100],
                    ['lat' => 43.3900, 'lng' => -4.9300],
                ]),
            ],
            [
                'rally_id' => 6,
                'name' => 'Posada - Parres',
                'surface' => 'Grava',
                'length_km' => 11.3,
                'start_point_lat' => 43.4002,
                'start_point_lng' => -4.7884,
                'end_point_lat' => 43.4193,
                'end_point_lng' => -4.8212,
                'route' => json_encode([
                    ['lat' => 43.4040, 'lng' => -4.7950],
                    ['lat' => 43.4080, 'lng' => -4.8050],
                    ['lat' => 43.4140, 'lng' => -4.8140],
                ]),
            ],
            [
                'rally_id' => 7,
                'name' => 'Mont-Roig - Colldejou',
                'surface' => 'Asfalto',
                'length_km' => 14.2,
                'start_point_lat' => 41.0400,
                'start_point_lng' => 0.9780,
                'end_point_lat' => 41.0800,
                'end_point_lng' => 0.9120,
                'route' => json_encode([
                    ['lat' => 41.0450, 'lng' => 0.9680],
                    ['lat' => 41.0600, 'lng' => 0.9500],
                    ['lat' => 41.0700, 'lng' => 0.9300],
                ]),
            ],
            [
                'rally_id' => 7,
                'name' => 'Riudecanyes - Duesaigües',
                'surface' => 'Mixto',
                'length_km' => 16.9,
                'start_point_lat' => 41.1200,
                'start_point_lng' => 0.9820,
                'end_point_lat' => 41.1400,
                'end_point_lng' => 0.9260,
                'route' => json_encode([
                    ['lat' => 41.1250, 'lng' => 0.9650],
                    ['lat' => 41.1300, 'lng' => 0.9450],
                    ['lat' => 41.1360, 'lng' => 0.9300],
                ]),
            ],
            [
                'rally_id' => 7,
                'name' => 'La Mussara - Vilaplana',
                'surface' => 'Grava',
                'length_km' => 12.7,
                'start_point_lat' => 41.2600,
                'start_point_lng' => 1.0000,
                'end_point_lat' => 41.2800,
                'end_point_lng' => 0.9600,
                'route' => json_encode([
                    ['lat' => 41.2650, 'lng' => 0.9900],
                    ['lat' => 41.2700, 'lng' => 0.9750],
                    ['lat' => 41.2750, 'lng' => 0.9650],
                ]),
            ],

            // Rallye de La Nucía - Trofeo Costa Blanca
            [
                'rally_id' => 8,
                'name' => 'Guadalest - Benifato',
                'surface' => 'Asfalto',
                'length_km' => 10.6,
                'start_point_lat' => 38.6760,
                'start_point_lng' => -0.2020,
                'end_point_lat' => 38.7000,
                'end_point_lng' => -0.1770,
                'route' => json_encode([
                    ['lat' => 38.6820, 'lng' => -0.1950],
                    ['lat' => 38.6900, 'lng' => -0.1850],
                    ['lat' => 38.6950, 'lng' => -0.1800],
                ]),
            ],
            [
                'rally_id' => 8,
                'name' => 'Callosa - Tárbena',
                'surface' => 'Mixto',
                'length_km' => 14.1,
                'start_point_lat' => 38.6480,
                'start_point_lng' => -0.1090,
                'end_point_lat' => 38.6730,
                'end_point_lng' => -0.0800,
                'route' => json_encode([
                    ['lat' => 38.6550, 'lng' => -0.1000],
                    ['lat' => 38.6620, 'lng' => -0.0900],
                    ['lat' => 38.6680, 'lng' => -0.0850],
                ]),
            ],
            [
                'rally_id' => 8,
                'name' => 'Bolulla - Castell de Castells',
                'surface' => 'Grava',
                'length_km' => 17.3,
                'start_point_lat' => 38.6880,
                'start_point_lng' => -0.1500,
                'end_point_lat' => 38.7100,
                'end_point_lng' => -0.1100,
                'route' => json_encode([
                    ['lat' => 38.6950, 'lng' => -0.1400],
                    ['lat' => 38.7000, 'lng' => -0.1300],
                    ['lat' => 38.7050, 'lng' => -0.1200],
                ]),
            ],
            [
                'rally_id' => 9,
                'name' => 'Tramo Coll de Merolla',
                'start_point_lat' => 42.15582,
                'start_point_lng' => 2.15523,
                'end_point_lat' => 42.12471,
                'end_point_lng' => 2.17789,
                'length_km' => 14.2,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 42.15260, 'lng' => 2.15940],
                    ['lat' => 42.14730, 'lng' => 2.16280],
                    ['lat' => 42.14000, 'lng' => 2.16750],
                    ['lat' => 42.13380, 'lng' => 2.17100],
                    ['lat' => 42.12860, 'lng' => 2.17420],
                ])
            ],

            [
                'rally_id' => 9,
                'name' => 'Tramo Sant Julià de Cerdanyola',
                'start_point_lat' => 42.22943,
                'start_point_lng' => 1.85162,
                'end_point_lat' => 42.20391,
                'end_point_lng' => 1.88324,
                'length_km' => 17.1,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 42.22610, 'lng' => 1.85600],
                    ['lat' => 42.21940, 'lng' => 1.86080],
                    ['lat' => 42.21200, 'lng' => 1.86690],
                    ['lat' => 42.20820, 'lng' => 1.87200],
                    ['lat' => 42.20520, 'lng' => 1.87840],
                ])
            ],

            [
                'rally_id' => 9,
                'name' => 'Tramo Serra de Montgrony',
                'start_point_lat' => 42.27792,
                'start_point_lng' => 2.09240,
                'end_point_lat' => 42.24866,
                'end_point_lng' => 2.06785,
                'length_km' => 16.3,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 42.27340, 'lng' => 2.08950],
                    ['lat' => 42.26690, 'lng' => 2.08410],
                    ['lat' => 42.26000, 'lng' => 2.07870],
                    ['lat' => 42.25410, 'lng' => 2.07300],
                    ['lat' => 42.25090, 'lng' => 2.06950],
                ])
            ],
            [
                'rally_id' => 10,
                'name' => 'Tramo Arico Alto',
                'start_point_lat' => 28.16890,
                'start_point_lng' => -16.52460,
                'end_point_lat' => 28.15020,
                'end_point_lng' => -16.50380,
                'length_km' => 12.6,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 28.16680, 'lng' => -16.52100],
                    ['lat' => 28.16290, 'lng' => -16.51670],
                    ['lat' => 28.15900, 'lng' => -16.51140],
                    ['lat' => 28.15620, 'lng' => -16.50780],
                ])
            ],

            [
                'rally_id' => 10,
                'name' => 'Tramo Guía de Isora',
                'start_point_lat' => 28.21660,
                'start_point_lng' => -16.78340,
                'end_point_lat' => 28.19010,
                'end_point_lng' => -16.75590,
                'length_km' => 15.9,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 28.21240, 'lng' => -16.77810],
                    ['lat' => 28.20760, 'lng' => -16.77200],
                    ['lat' => 28.20230, 'lng' => -16.76630],
                    ['lat' => 28.19680, 'lng' => -16.76060],
                ])
            ],

            [
                'rally_id' => 10,
                'name' => 'Tramo Vilaflor Nocturno',
                'start_point_lat' => 28.14720,
                'start_point_lng' => -16.63730,
                'end_point_lat' => 28.12040,
                'end_point_lng' => -16.62010,
                'length_km' => 13.8,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 28.14450, 'lng' => -16.63420],
                    ['lat' => 28.13910, 'lng' => -16.63000],
                    ['lat' => 28.13480, 'lng' => -16.62640],
                    ['lat' => 28.12990, 'lng' => -16.62310],
                ])
            ],
            [
                'rally_id' => 11,
                'name' => 'Tramo San Mateo',
                'start_point_lat' => 43.53210,
                'start_point_lng' => -8.14290,
                'end_point_lat' => 43.54740,
                'end_point_lng' => -8.11650,
                'length_km' => 10.7,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 43.53400, 'lng' => -8.13980],
                    ['lat' => 43.53760, 'lng' => -8.13340],
                    ['lat' => 43.54110, 'lng' => -8.12790],
                    ['lat' => 43.54430, 'lng' => -8.12250],
                ])
            ],

            [
                'rally_id' => 11,
                'name' => 'Tramo O Val',
                'start_point_lat' => 43.50390,
                'start_point_lng' => -8.16320,
                'end_point_lat' => 43.52610,
                'end_point_lng' => -8.14070,
                'length_km' => 12.3,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 43.50620, 'lng' => -8.16010],
                    ['lat' => 43.51150, 'lng' => -8.15400],
                    ['lat' => 43.51730, 'lng' => -8.14860],
                    ['lat' => 43.52200, 'lng' => -8.14400],
                ])
            ],

            [
                'rally_id' => 11,
                'name' => 'Tramo Pedroso',
                'start_point_lat' => 43.48900,
                'start_point_lng' => -8.20150,
                'end_point_lat' => 43.47160,
                'end_point_lng' => -8.18090,
                'length_km' => 14.1,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 43.48560, 'lng' => -8.19720],
                    ['lat' => 43.48020, 'lng' => -8.19240],
                    ['lat' => 43.47600, 'lng' => -8.18780],
                    ['lat' => 43.47300, 'lng' => -8.18350],
                ])
            ],
            [
                'rally_id' => 12,
                'name' => 'Tramo El Castellar',
                'start_point_lat' => 40.42100,
                'start_point_lng' => -0.98450,
                'end_point_lat' => 40.44750,
                'end_point_lng' => -0.94520,
                'length_km' => 13.8,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 40.42360, 'lng' => -0.98120],
                    ['lat' => 40.42820, 'lng' => -0.97500],
                    ['lat' => 40.43590, 'lng' => -0.96710],
                    ['lat' => 40.44280, 'lng' => -0.95500],
                ])
            ],

            [
                'rally_id' => 12,
                'name' => 'Tramo Cedrillas',
                'start_point_lat' => 40.42940,
                'start_point_lng' => -0.87630,
                'end_point_lat' => 40.45920,
                'end_point_lng' => -0.84270,
                'length_km' => 15.5,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 40.43400, 'lng' => -0.87040],
                    ['lat' => 40.44110, 'lng' => -0.86150],
                    ['lat' => 40.44890, 'lng' => -0.85200],
                    ['lat' => 40.45470, 'lng' => -0.84630],
                ])
            ],

            [
                'rally_id' => 12,
                'name' => 'Tramo Valdelinares',
                'start_point_lat' => 40.35830,
                'start_point_lng' => -0.72040,
                'end_point_lat' => 40.38510,
                'end_point_lng' => -0.69590,
                'length_km' => 11.2,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 40.36100, 'lng' => -0.71700],
                    ['lat' => 40.36720, 'lng' => -0.71060],
                    ['lat' => 40.37290, 'lng' => -0.70510],
                    ['lat' => 40.37930, 'lng' => -0.69980],
                ])
            ],
            [
                'rally_id' => 13,
                'name' => 'Tramo Sierra de Gádor',
                'start_point_lat' => 36.89670,
                'start_point_lng' => -2.66230,
                'end_point_lat' => 36.92690,
                'end_point_lng' => -2.61780,
                'length_km' => 16.1,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 36.90040, 'lng' => -2.65400],
                    ['lat' => 36.90830, 'lng' => -2.64100],
                    ['lat' => 36.91520, 'lng' => -2.63020],
                    ['lat' => 36.92150, 'lng' => -2.62200],
                ])
            ],

            [
                'rally_id' => 13,
                'name' => 'Tramo Níjar - Campohermoso',
                'start_point_lat' => 36.96530,
                'start_point_lng' => -2.20850,
                'end_point_lat' => 36.98800,
                'end_point_lng' => -2.17010,
                'length_km' => 13.7,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 36.96880, 'lng' => -2.20270],
                    ['lat' => 36.97370, 'lng' => -2.19250],
                    ['lat' => 36.97990, 'lng' => -2.18260],
                    ['lat' => 36.98430, 'lng' => -2.17480],
                ])
            ],

            [
                'rally_id' => 13,
                'name' => 'Tramo Sorbas - Uleila',
                'start_point_lat' => 37.09840,
                'start_point_lng' => -2.12460,
                'end_point_lat' => 37.12170,
                'end_point_lng' => -2.07990,
                'length_km' => 14.9,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 37.10310, 'lng' => -2.11680],
                    ['lat' => 37.10890, 'lng' => -2.10590],
                    ['lat' => 37.11460, 'lng' => -2.09430],
                    ['lat' => 37.11880, 'lng' => -2.08520],
                ])
            ],
            [
                'rally_id' => 14,
                'name' => 'Tramo Serra Calderona',
                'start_point_lat' => 39.67540,
                'start_point_lng' => -0.41050,
                'end_point_lat' => 39.70290,
                'end_point_lng' => -0.37380,
                'length_km' => 15.2,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 39.67930, 'lng' => -0.40300],
                    ['lat' => 39.68470, 'lng' => -0.39390],
                    ['lat' => 39.69120, 'lng' => -0.38520],
                    ['lat' => 39.69650, 'lng' => -0.37920],
                ])
            ],

            [
                'rally_id' => 14,
                'name' => 'Tramo Chiva - Requena',
                'start_point_lat' => 39.47300,
                'start_point_lng' => -0.71980,
                'end_point_lat' => 39.50260,
                'end_point_lng' => -0.67750,
                'length_km' => 17.3,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 39.47690, 'lng' => -0.71190],
                    ['lat' => 39.48310, 'lng' => -0.70110],
                    ['lat' => 39.49060, 'lng' => -0.69140],
                    ['lat' => 39.49680, 'lng' => -0.68330],
                ])
            ],
            [
                'rally_id' => 14,
                'name' => 'Tramo Llíria - Marines',
                'start_point_lat' => 39.64870,
                'start_point_lng' => -0.58640,
                'end_point_lat' => 39.67590,
                'end_point_lng' => -0.54120,
                'length_km' => 13.8,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 39.65320, 'lng' => -0.57890],
                    ['lat' => 39.66010, 'lng' => -0.56670],
                    ['lat' => 39.66680, 'lng' => -0.55480],
                    ['lat' => 39.67140, 'lng' => -0.54650],
                ])
            ],
            [
                'rally_id' => 15,
                'name' => 'Tramo Sierra de Dos Torres',
                'start_point_lat' => 38.49510,
                'start_point_lng' => -4.88700,
                'end_point_lat' => 38.51830,
                'end_point_lng' => -4.83240,
                'length_km' => 16.7,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 38.49920, 'lng' => -4.87590],
                    ['lat' => 38.50680, 'lng' => -4.86100],
                    ['lat' => 38.51190, 'lng' => -4.84970],
                    ['lat' => 38.51540, 'lng' => -4.83810],
                ])
            ],

            [
                'rally_id' => 15,
                'name' => 'Tramo Camino de Alcaracejos',
                'start_point_lat' => 38.40050,
                'start_point_lng' => -4.93060,
                'end_point_lat' => 38.43380,
                'end_point_lng' => -4.88950,
                'length_km' => 14.2,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 38.40710, 'lng' => -4.92210],
                    ['lat' => 38.41560, 'lng' => -4.91230],
                    ['lat' => 38.42340, 'lng' => -4.90310],
                    ['lat' => 38.42870, 'lng' => -4.89640],
                ])
            ],

            [
                'rally_id' => 15,
                'name' => 'Tramo Pozoblanco Sur',
                'start_point_lat' => 38.35040,
                'start_point_lng' => -4.85030,
                'end_point_lat' => 38.37490,
                'end_point_lng' => -4.79760,
                'length_km' => 18.5,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 38.35610, 'lng' => -4.83920],
                    ['lat' => 38.36240, 'lng' => -4.82710],
                    ['lat' => 38.36890, 'lng' => -4.81400],
                    ['lat' => 38.37260, 'lng' => -4.80410],
                ])
            ],
            [
                'rally_id' => 16,
                'name' => 'Tramo Valle del Torío',
                'start_point_lat' => 42.75650,
                'start_point_lng' => -5.55010,
                'end_point_lat' => 42.78690,
                'end_point_lng' => -5.50540,
                'length_km' => 17.8,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 42.76020, 'lng' => -5.54060],
                    ['lat' => 42.76780, 'lng' => -5.52680],
                    ['lat' => 42.77510, 'lng' => -5.51610],
                    ['lat' => 42.78110, 'lng' => -5.50800],
                ])
            ],

            [
                'rally_id' => 16,
                'name' => 'Tramo Montes de León',
                'start_point_lat' => 42.60040,
                'start_point_lng' => -6.00350,
                'end_point_lat' => 42.63490,
                'end_point_lng' => -5.95060,
                'length_km' => 19.3,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 42.60730, 'lng' => -5.99340],
                    ['lat' => 42.61680, 'lng' => -5.97980],
                    ['lat' => 42.62510, 'lng' => -5.96890],
                    ['lat' => 42.63080, 'lng' => -5.95720],
                ])
            ],

            [
                'rally_id' => 16,
                'name' => 'Tramo Vega de Infanzones',
                'start_point_lat' => 42.48710,
                'start_point_lng' => -5.60320,
                'end_point_lat' => 42.51050,
                'end_point_lng' => -5.54670,
                'length_km' => 15.1,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 42.49190, 'lng' => -5.59360],
                    ['lat' => 42.49770, 'lng' => -5.57890],
                    ['lat' => 42.50320, 'lng' => -5.56440],
                    ['lat' => 42.50790, 'lng' => -5.55310],
                ])
            ],
            [
                'rally_id' => 17,
                'name' => 'Tramo Timanfaya',
                'start_point_lat' => 28.99870,
                'start_point_lng' => -13.76820,
                'end_point_lat' => 29.02480,
                'end_point_lng' => -13.71390,
                'length_km' => 16.4,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 29.00400, 'lng' => -13.75540],
                    ['lat' => 29.01160, 'lng' => -13.74150],
                    ['lat' => 29.01790, 'lng' => -13.72860],
                    ['lat' => 29.02180, 'lng' => -13.71800],
                ])
            ],

            [
                'rally_id' => 17,
                'name' => 'Tramo El Golfo',
                'start_point_lat' => 28.94730,
                'start_point_lng' => -13.81890,
                'end_point_lat' => 28.97540,
                'end_point_lng' => -13.78010,
                'length_km' => 13.9,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 28.95320, 'lng' => -13.80670],
                    ['lat' => 28.96140, 'lng' => -13.79800],
                    ['lat' => 28.96790, 'lng' => -13.79010],
                    ['lat' => 28.97180, 'lng' => -13.78430],
                ])
            ],

            [
                'rally_id' => 17,
                'name' => 'Tramo La Santa - Soo',
                'start_point_lat' => 29.07560,
                'start_point_lng' => -13.82410,
                'end_point_lat' => 29.09630,
                'end_point_lng' => -13.77680,
                'length_km' => 14.8,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 29.08170, 'lng' => -13.81290],
                    ['lat' => 29.08790, 'lng' => -13.80020],
                    ['lat' => 29.09260, 'lng' => -13.78810],
                    ['lat' => 29.09480, 'lng' => -13.78160],
                ])
            ],
            [
                'rally_id' => 18,
                'name' => 'Tramo Sierra de Huétor',
                'start_point_lat' => 37.30110,
                'start_point_lng' => -3.52700,
                'end_point_lat' => 37.32780,
                'end_point_lng' => -3.47430,
                'length_km' => 15.6,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 37.30750, 'lng' => -3.51700],
                    ['lat' => 37.31400, 'lng' => -3.50580],
                    ['lat' => 37.32060, 'lng' => -3.49120],
                    ['lat' => 37.32500, 'lng' => -3.48100],
                ])
            ],

            [
                'rally_id' => 18,
                'name' => 'Tramo Dehesas de Guadix',
                'start_point_lat' => 37.31820,
                'start_point_lng' => -3.10850,
                'end_point_lat' => 37.28840,
                'end_point_lng' => -3.16560,
                'length_km' => 17.1,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 37.31170, 'lng' => -3.12300],
                    ['lat' => 37.30150, 'lng' => -3.13870],
                    ['lat' => 37.29530, 'lng' => -3.15220],
                    ['lat' => 37.29160, 'lng' => -3.16000],
                ])
            ],

            [
                'rally_id' => 18,
                'name' => 'Tramo Los Cahorros',
                'start_point_lat' => 37.12640,
                'start_point_lng' => -3.53890,
                'end_point_lat' => 37.10190,
                'end_point_lng' => -3.49810,
                'length_km' => 13.7,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 37.12010, 'lng' => -3.52810],
                    ['lat' => 37.11340, 'lng' => -3.51900],
                    ['lat' => 37.10870, 'lng' => -3.51040],
                    ['lat' => 37.10460, 'lng' => -3.50320],
                ])
            ],
            [
                'rally_id' => 19,
                'name' => 'Tramo Cerro de la Hoz',
                'start_point_lat' => 40.51430,
                'start_point_lng' => -3.28850,
                'end_point_lat' => 40.53310,
                'end_point_lng' => -3.23670,
                'length_km' => 18.2,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 40.52050, 'lng' => -3.27450],
                    ['lat' => 40.52800, 'lng' => -3.25900],
                    ['lat' => 40.53060, 'lng' => -3.24730],
                    ['lat' => 40.53540, 'lng' => -3.23800],
                ])
            ],

            [
                'rally_id' => 19,
                'name' => 'Tramo Villanueva de la Torre',
                'start_point_lat' => 40.46110,
                'start_point_lng' => -3.15790,
                'end_point_lat' => 40.47580,
                'end_point_lng' => -3.13930,
                'length_km' => 16.4,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 40.46340, 'lng' => -3.14890],
                    ['lat' => 40.46900, 'lng' => -3.14120],
                    ['lat' => 40.47260, 'lng' => -3.13150],
                    ['lat' => 40.47640, 'lng' => -3.12160],
                ])
            ],

            [
                'rally_id' => 19,
                'name' => 'Tramo El Encinar',
                'start_point_lat' => 40.40280,
                'start_point_lng' => -3.35240,
                'end_point_lat' => 40.42450,
                'end_point_lng' => -3.32210,
                'length_km' => 14.9,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 40.41050, 'lng' => -3.33810],
                    ['lat' => 40.41680, 'lng' => -3.32350],
                    ['lat' => 40.42010, 'lng' => -3.31400],
                    ['lat' => 40.42370, 'lng' => -3.30800],
                ])
            ],
            [
                'rally_id' => 20,
                'name' => 'Tramo La Morera',
                'start_point_lat' => 38.70510,
                'start_point_lng' => -6.36840,
                'end_point_lat' => 38.72640,
                'end_point_lng' => -6.34450,
                'length_km' => 21.3,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 38.71000, 'lng' => -6.35910],
                    ['lat' => 38.71750, 'lng' => -6.35100],
                    ['lat' => 38.72030, 'lng' => -6.34500],
                    ['lat' => 38.72380, 'lng' => -6.33890],
                ])
            ],

            [
                'rally_id' => 20,
                'name' => 'Tramo Valle de los Molinos',
                'start_point_lat' => 38.79020,
                'start_point_lng' => -6.29900,
                'end_point_lat' => 38.80450,
                'end_point_lng' => -6.27270,
                'length_km' => 18.7,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 38.79410, 'lng' => -6.28550],
                    ['lat' => 38.79940, 'lng' => -6.27800],
                    ['lat' => 38.80300, 'lng' => -6.26750],
                    ['lat' => 38.80600, 'lng' => -6.26080],
                ])
            ],

            [
                'rally_id' => 20,
                'name' => 'Tramo El Guijo',
                'start_point_lat' => 38.72040,
                'start_point_lng' => -6.48500,
                'end_point_lat' => 38.74050,
                'end_point_lng' => -6.46120,
                'length_km' => 19.2,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 38.72500, 'lng' => -6.47650],
                    ['lat' => 38.73080, 'lng' => -6.46830],
                    ['lat' => 38.73550, 'lng' => -6.46080],
                    ['lat' => 38.74000, 'lng' => -6.45300],
                ])
            ],
            [
                'rally_id' => 21,
                'name' => 'Tramo El Cabezo',
                'start_point_lat' => 37.64580,
                'start_point_lng' => -1.67530,
                'end_point_lat' => 37.66550,
                'end_point_lng' => -1.65000,
                'length_km' => 22.4,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 37.64830, 'lng' => -1.66790],
                    ['lat' => 37.65510, 'lng' => -1.66070],
                    ['lat' => 37.66080, 'lng' => -1.65490],
                    ['lat' => 37.66390, 'lng' => -1.64980],
                ])
            ],

            [
                'rally_id' => 21,
                'name' => 'Tramo El Llano de las Ovejas',
                'start_point_lat' => 37.72600,
                'start_point_lng' => -1.71790,
                'end_point_lat' => 37.74560,
                'end_point_lng' => -1.70030,
                'length_km' => 19.5,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 37.73010, 'lng' => -1.71120],
                    ['lat' => 37.73520, 'lng' => -1.70550],
                    ['lat' => 37.74150, 'lng' => -1.69680],
                    ['lat' => 37.74600, 'lng' => -1.69000],
                ])
            ],

            [
                'rally_id' => 21,
                'name' => 'Tramo El Alto de la Hoya',
                'start_point_lat' => 37.67850,
                'start_point_lng' => -1.74950,
                'end_point_lat' => 37.69340,
                'end_point_lng' => -1.73020,
                'length_km' => 20.1,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 37.68350, 'lng' => -1.74120],
                    ['lat' => 37.68800, 'lng' => -1.73560],
                    ['lat' => 37.69080, 'lng' => -1.72890],
                    ['lat' => 37.69320, 'lng' => -1.72300],
                ])
            ],
            [
                'rally_id' => 22,
                'name' => 'Tramo La Hoz',
                'start_point_lat' => 41.60600,
                'start_point_lng' => -0.74860,
                'end_point_lat' => 41.62550,
                'end_point_lng' => -0.72010,
                'length_km' => 25.3,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 41.61000, 'lng' => -0.74080],
                    ['lat' => 41.61580, 'lng' => -0.73520],
                    ['lat' => 41.62050, 'lng' => -0.73090],
                    ['lat' => 41.62500, 'lng' => -0.72540],
                ])
            ],

            [
                'rally_id' => 22,
                'name' => 'Tramo El Sabinar',
                'start_point_lat' => 41.57720,
                'start_point_lng' => -0.75150,
                'end_point_lat' => 41.58500,
                'end_point_lng' => -0.74000,
                'length_km' => 18.7,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 41.58000, 'lng' => -0.74800],
                    ['lat' => 41.58220, 'lng' => -0.74450],
                    ['lat' => 41.58400, 'lng' => -0.74200],
                    ['lat' => 41.58500, 'lng' => -0.74000],
                ])
            ],

            [
                'rally_id' => 22,
                'name' => 'Tramo Las Torcas',
                'start_point_lat' => 41.62750,
                'start_point_lng' => -0.68480,
                'end_point_lat' => 41.63800,
                'end_point_lng' => -0.67000,
                'length_km' => 20.2,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 41.63000, 'lng' => -0.68000],
                    ['lat' => 41.63350, 'lng' => -0.67540],
                    ['lat' => 41.63600, 'lng' => -0.67130],
                    ['lat' => 41.63800, 'lng' => -0.67000],
                ])
            ],
            [
                'rally_id' => 23,
                'name' => 'Tramo La Meca',
                'start_point_lat' => 41.65240,
                'start_point_lng' => -0.89230,
                'end_point_lat' => 41.66550,
                'end_point_lng' => -0.87820,
                'length_km' => 22.5,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 41.65400, 'lng' => -0.88850],
                    ['lat' => 41.65850, 'lng' => -0.88300],
                    ['lat' => 41.66100, 'lng' => -0.88000],
                    ['lat' => 41.66350, 'lng' => -0.87700],
                ])
            ],

            [
                'rally_id' => 23,
                'name' => 'Tramo El Pedregal',
                'start_point_lat' => 41.63800,
                'start_point_lng' => -0.87400,
                'end_point_lat' => 41.64800,
                'end_point_lng' => -0.86500,
                'length_km' => 19.8,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 41.64000, 'lng' => -0.87000],
                    ['lat' => 41.64300, 'lng' => -0.86700],
                    ['lat' => 41.64650, 'lng' => -0.86400],
                    ['lat' => 41.64800, 'lng' => -0.86300],
                ])
            ],

            [
                'rally_id' => 23,
                'name' => 'Tramo Los Llanos',
                'start_point_lat' => 41.67550,
                'start_point_lng' => -0.84840,
                'end_point_lat' => 41.68800,
                'end_point_lng' => -0.83000,
                'length_km' => 24.3,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 41.67800, 'lng' => -0.84500],
                    ['lat' => 41.68150, 'lng' => -0.84000],
                    ['lat' => 41.68500, 'lng' => -0.83500],
                    ['lat' => 41.68800, 'lng' => -0.83000],
                ])
            ],
            [
                'rally_id' => 24,
                'name' => 'Tramo La Rambla',
                'start_point_lat' => 40.08100,
                'start_point_lng' => -2.06000,
                'end_point_lat' => 40.09400,
                'end_point_lng' => -2.05000,
                'length_km' => 18.2,
                'surface' => 'Grava',
                'route' => json_encode([
                    ['lat' => 40.08350, 'lng' => -2.05800],
                    ['lat' => 40.08600, 'lng' => -2.05550],
                    ['lat' => 40.08900, 'lng' => -2.05300],
                    ['lat' => 40.09200, 'lng' => -2.05100],
                ])
            ],
            [
                'rally_id' => 24,
                'name' => 'Tramo El Barranco',
                'start_point_lat' => 40.11000,
                'start_point_lng' => -2.03800,
                'end_point_lat' => 40.12000,
                'end_point_lng' => -2.02800,
                'length_km' => 16.5,
                'surface' => 'Mixto',
                'route' => json_encode([
                    ['lat' => 40.11200, 'lng' => -2.03600],
                    ['lat' => 40.11500, 'lng' => -2.03200],
                    ['lat' => 40.11800, 'lng' => -2.03000],
                    ['lat' => 40.12000, 'lng' => -2.02800],
                ])
            ],
            [
                'rally_id' => 24,
                'name' => 'Tramo Las Canteras',
                'start_point_lat' => 40.13500,
                'start_point_lng' => -2.02750,
                'end_point_lat' => 40.14500,
                'end_point_lng' => -2.01500,
                'length_km' => 20.0,
                'surface' => 'Asfalto',
                'route' => json_encode([
                    ['lat' => 40.13700, 'lng' => -2.02400],
                    ['lat' => 40.14000, 'lng' => -2.02000],
                    ['lat' => 40.14200, 'lng' => -2.01700],
                    ['lat' => 40.14500, 'lng' => -2.01500],
                ])
            ],

        ];



        foreach ($stages as $stage) {
            Stage::create($stage);
        }
    }
}
