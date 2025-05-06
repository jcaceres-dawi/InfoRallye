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
                'route' => json_encode([
                    ['lat' => 37.7921, 'lng' => -1.7773], // start point
                    ['lat' => 37.7905, 'lng' => -1.7740],
                    ['lat' => 37.7850, 'lng' => -1.7690],
                    ['lat' => 37.7810, 'lng' => -1.7625],
                    ['lat' => 37.7785, 'lng' => -1.7565],
                    ['lat' => 37.7768, 'lng' => -1.7490], // end point
                ]),
            ],
            [
                'rally_id' => 1,
                'name' => 'La Tova - Zarzilla',
                'surface' => 'Grava',
                'length_km' => 17.4,
                'route' => json_encode([
                    ['lat' => 37.8120, 'lng' => -1.9250], // start point
                    ['lat' => 37.8160, 'lng' => -1.9205],
                    ['lat' => 37.8210, 'lng' => -1.9120],
                    ['lat' => 37.8275, 'lng' => -1.9055],
                    ['lat' => 37.8330, 'lng' => -1.9000],
                    ['lat' => 37.8402, 'lng' => -1.8958], // end point
                ]),
            ],
            [
                'rally_id' => 1,
                'name' => 'Campo López',
                'surface' => 'Grava',
                'length_km' => 13.6,
                'route' => json_encode([
                    ['lat' => 37.6710, 'lng' => -1.7922], // start point
                    ['lat' => 37.6745, 'lng' => -1.7850],
                    ['lat' => 37.6780, 'lng' => -1.7760],
                    ['lat' => 37.6830, 'lng' => -1.7675],
                    ['lat' => 37.6920, 'lng' => -1.7561], // end point
                ]),
            ],
            [
                'rally_id' => 2,
                'name' => 'Las Ermitas - Trassierra',
                'surface' => 'Asfalto',
                'length_km' => 16.8,
                'route' => json_encode([
                    ['lat' => 37.8840, 'lng' => -4.8190], // start point
                    ['lat' => 37.8855, 'lng' => -4.8240],
                    ['lat' => 37.8880, 'lng' => -4.8325],
                    ['lat' => 37.8905, 'lng' => -4.8430],
                    ['lat' => 37.8932, 'lng' => -4.8550],
                    ['lat' => 37.8975, 'lng' => -4.8825], // end point
                ]),
            ],
            [
                'rally_id' => 2,
                'name' => 'El Brillante - Cerro Muriano',
                'surface' => 'Mixto',
                'length_km' => 14.3,
                'route' => json_encode([
                    ['lat' => 37.9042, 'lng' => -4.7941], // start point
                    ['lat' => 37.9080, 'lng' => -4.7985],
                    ['lat' => 37.9202, 'lng' => -4.8043],
                    ['lat' => 37.9301, 'lng' => -4.8099],
                    ['lat' => 37.9481, 'lng' => -4.8147], // end point
                ]),
            ],
            [
                'rally_id' => 2,
                'name' => 'Villaviciosa - Trasierra',
                'surface' => 'Grava',
                'length_km' => 20.1,
                'route' => json_encode([
                    ['lat' => 37.9540, 'lng' => -5.0300], // start point
                    ['lat' => 37.9480, 'lng' => -5.0150],
                    ['lat' => 37.9335, 'lng' => -4.9900],
                    ['lat' => 37.9250, 'lng' => -4.9600],
                    ['lat' => 37.9044, 'lng' => -4.9202], // end point
                ]),
            ],
            [
                'rally_id' => 3,
                'name' => 'A Peroxa - Luintra',
                'surface' => 'Asfalto',
                'length_km' => 17.6,
                'route' => json_encode([
                    ['lat' => 42.4444, 'lng' => -7.7562], // start point
                    ['lat' => 42.4430, 'lng' => -7.7480],
                    ['lat' => 42.4400, 'lng' => -7.7350],
                    ['lat' => 42.4375, 'lng' => -7.7200],
                    ['lat' => 42.4312, 'lng' => -7.6791], // end point
                ]),
            ],
            [
                'rally_id' => 3,
                'name' => 'San Pedro de Rocas - Esgos',
                'surface' => 'Grava',
                'length_km' => 12.9,
                'route' => json_encode([
                    ['lat' => 42.3955, 'lng' => -7.6550], // start point
                    ['lat' => 42.3980, 'lng' => -7.6480],
                    ['lat' => 42.4030, 'lng' => -7.6350],
                    ['lat' => 42.4075, 'lng' => -7.6220],
                    ['lat' => 42.4125, 'lng' => -7.6102], // end point
                ]),
            ],
            [
                'rally_id' => 3,
                'name' => 'Castro Caldelas - Parada de Sil',
                'surface' => 'Mixto',
                'length_km' => 19.3,
                'route' => json_encode([
                    ['lat' => 42.3701, 'lng' => -7.4160], // start point
                    ['lat' => 42.3720, 'lng' => -7.4300],
                    ['lat' => 42.3755, 'lng' => -7.4600],
                    ['lat' => 42.3765, 'lng' => -7.4900],
                    ['lat' => 42.3777, 'lng' => -7.5488], // end point
                ]),
            ],
            [
                'rally_id' => 4,
                'name' => 'Oia - Mougás',
                'surface' => 'Mixto',
                'length_km' => 14.8,
                'route' => json_encode([
                    ['lat' => 42.0600, 'lng' => -8.8970], // start point
                    ['lat' => 42.0700, 'lng' => -8.8900],
                    ['lat' => 42.0900, 'lng' => -8.8800],
                    ['lat' => 42.1150, 'lng' => -8.8720],
                    ['lat' => 42.1385, 'lng' => -8.8662], // end point
                ]),
            ],
            [
                'rally_id' => 4,
                'name' => 'Baiona - Baredo',
                'surface' => 'Asfalto',
                'length_km' => 11.2,
                'route' => json_encode([
                    ['lat' => 42.1168, 'lng' => -8.8474], // start point
                    ['lat' => 42.1180, 'lng' => -8.8450],
                    ['lat' => 42.1210, 'lng' => -8.8420],
                    ['lat' => 42.1244, 'lng' => -8.8400], // end point
                ]),
            ],
            [
                'rally_id' => 4,
                'name' => 'Tomiño - Tebra',
                'surface' => 'Grava',
                'length_km' => 17.0,
                'route' => json_encode([
                    ['lat' => 42.0520, 'lng' => -8.7280], // start point
                    ['lat' => 42.0600, 'lng' => -8.7250],
                    ['lat' => 42.0700, 'lng' => -8.7220],
                    ['lat' => 42.0800, 'lng' => -8.7200],
                    ['lat' => 42.0940, 'lng' => -8.7172], // end point
                ]),
            ],
            [
                'rally_id' => 5,
                'name' => 'La Manjoya - El Escamplero',
                'surface' => 'Asfalto',
                'length_km' => 12.5,
                'route' => json_encode([
                    ['lat' => 43.3501, 'lng' => -5.8503], // start point
                    ['lat' => 43.3550, 'lng' => -5.8600],
                    ['lat' => 43.3600, 'lng' => -5.8800],
                    ['lat' => 43.3680, 'lng' => -5.9000],
                    ['lat' => 43.3744, 'lng' => -5.9166], // end point
                ]),
            ],
            [
                'rally_id' => 5,
                'name' => 'Trubia - Sograndio',
                'surface' => 'Mixto',
                'length_km' => 15.9,
                'route' => json_encode([
                    ['lat' => 43.3520, 'lng' => -6.0090], // start point
                    ['lat' => 43.3580, 'lng' => -6.0000],
                    ['lat' => 43.3660, 'lng' => -5.9900],
                    ['lat' => 43.3740, 'lng' => -5.9800],
                    ['lat' => 43.3842, 'lng' => -5.9731], // end point
                ]),
            ],
            [
                'rally_id' => 5,
                'name' => 'Las Caldas - Latores',
                'surface' => 'Asfalto',
                'length_km' => 10.6,
                'route' => json_encode([
                    ['lat' => 43.3371, 'lng' => -5.9180], // start point
                    ['lat' => 43.3400, 'lng' => -5.9050],
                    ['lat' => 43.3450, 'lng' => -5.8900],
                    ['lat' => 43.3500, 'lng' => -5.8750],
                    ['lat' => 43.3539, 'lng' => -5.8630], // end point
                ]),
            ],
            [
                'rally_id' => 6,
                'name' => 'Nueva - Pría',
                'surface' => 'Mixto',
                'length_km' => 13.7,
                'route' => json_encode([
                    ['lat' => 43.4286, 'lng' => -4.9832], // start point
                    ['lat' => 43.4290, 'lng' => -4.9750],
                    ['lat' => 43.4295, 'lng' => -4.9600],
                    ['lat' => 43.4289, 'lng' => -4.9440],
                    ['lat' => 43.4281, 'lng' => -4.9234], // end point
                ]),
            ],
            [
                'rally_id' => 6,
                'name' => 'El Mazucu - Rales',
                'surface' => 'Asfalto',
                'length_km' => 16.1,
                'route' => json_encode([
                    ['lat' => 43.3715, 'lng' => -4.8843], // start point
                    ['lat' => 43.3740, 'lng' => -4.8950],
                    ['lat' => 43.3820, 'lng' => -4.9100],
                    ['lat' => 43.3900, 'lng' => -4.9300],
                    ['lat' => 43.3952, 'lng' => -4.9440], // end point
                ]),
            ],
            [
                'rally_id' => 6,
                'name' => 'Posada - Parres',
                'surface' => 'Grava',
                'length_km' => 11.3,
                'route' => json_encode([
                    ['lat' => 43.4002, 'lng' => -4.7884], // start point
                    ['lat' => 43.4040, 'lng' => -4.7950],
                    ['lat' => 43.4080, 'lng' => -4.8050],
                    ['lat' => 43.4140, 'lng' => -4.8140],
                    ['lat' => 43.4193, 'lng' => -4.8212], // end point
                ]),
            ],
            [
                'rally_id' => 7,
                'name' => 'Mont-Roig - Colldejou',
                'surface' => 'Asfalto',
                'length_km' => 14.2,
                'route' => json_encode([
                    ['lat' => 41.0400, 'lng' => 0.9780], // start point
                    ['lat' => 41.0450, 'lng' => 0.9680],
                    ['lat' => 41.0600, 'lng' => 0.9500],
                    ['lat' => 41.0700, 'lng' => 0.9300],
                    ['lat' => 41.0800, 'lng' => 0.9120], // end point
                ]),
            ],
            [
                'rally_id' => 7,
                'name' => 'Riudecanyes - Duesaigües',
                'surface' => 'Mixto',
                'length_km' => 16.9,
                'route' => json_encode([
                    ['lat' => 41.1200, 'lng' => 0.9820], // start point
                    ['lat' => 41.1250, 'lng' => 0.9650],
                    ['lat' => 41.1300, 'lng' => 0.9450],
                    ['lat' => 41.1360, 'lng' => 0.9300],
                    ['lat' => 41.1400, 'lng' => 0.9260], // end point
                ]),
            ],
            [
                'rally_id' => 7,
                'name' => 'La Mussara - Vilaplana',
                'surface' => 'Grava',
                'length_km' => 12.7,
                'route' => json_encode([
                    ['lat' => 41.2600, 'lng' => 1.0000], // start point
                    ['lat' => 41.2650, 'lng' => 0.9900],
                    ['lat' => 41.2700, 'lng' => 0.9750],
                    ['lat' => 41.2750, 'lng' => 0.9650],
                    ['lat' => 41.2800, 'lng' => 0.9600], // end point
                ]),
            ],
            [
                'rally_id' => 8,
                'name' => 'Guadalest - Benifato',
                'surface' => 'Asfalto',
                'length_km' => 10.6,
                'route' => json_encode([
                    ['lat' => 38.6760, 'lng' => -0.2020], // start point
                    ['lat' => 38.6820, 'lng' => -0.1950],
                    ['lat' => 38.6900, 'lng' => -0.1850],
                    ['lat' => 38.6950, 'lng' => -0.1800],
                    ['lat' => 38.7000, 'lng' => -0.1770], // end point
                ]),
            ],
            [
                'rally_id' => 8,
                'name' => 'Callosa - Tárbena',
                'surface' => 'Mixto',
                'length_km' => 14.1,
                'route' => json_encode([
                    ['lat' => 38.6480, 'lng' => -0.1090], // start point
                    ['lat' => 38.6550, 'lng' => -0.1000],
                    ['lat' => 38.6620, 'lng' => -0.0900],
                    ['lat' => 38.6680, 'lng' => -0.0850],
                    ['lat' => 38.6730, 'lng' => -0.0800], // end point
                ]),
            ],
            [
                'rally_id' => 8,
                'name' => 'Bolulla - Castell de Castells',
                'surface' => 'Grava',
                'length_km' => 17.3,
                'route' => json_encode([
                    ['lat' => 38.6880, 'lng' => -0.1500], // start point
                    ['lat' => 38.6950, 'lng' => -0.1400],
                    ['lat' => 38.7000, 'lng' => -0.1300],
                    ['lat' => 38.7050, 'lng' => -0.1200],
                    ['lat' => 38.7100, 'lng' => -0.1100], // end point
                ]),
            ],
            [
                'rally_id' => 9,
                'name' => 'Tramo Coll de Merolla',
                'surface' => 'Grava',
                'length_km' => 14.2,
                'route' => json_encode([
                    ['lat' => 42.15582, 'lng' => 2.15523], // start point
                    ['lat' => 42.15260, 'lng' => 2.15940],
                    ['lat' => 42.14730, 'lng' => 2.16280],
                    ['lat' => 42.14000, 'lng' => 2.16750],
                    ['lat' => 42.13380, 'lng' => 2.17100],
                    ['lat' => 42.12860, 'lng' => 2.17420],
                    ['lat' => 42.12471, 'lng' => 2.17789], // end point
                ]),
            ],
            [
                'rally_id' => 9,
                'name' => 'Tramo Sant Julià de Cerdanyola',
                'surface' => 'Mixto',
                'length_km' => 17.1,
                'route' => json_encode([
                    ['lat' => 42.22943, 'lng' => 1.85162], // start point
                    ['lat' => 42.22610, 'lng' => 1.85600],
                    ['lat' => 42.21940, 'lng' => 1.86080],
                    ['lat' => 42.21200, 'lng' => 1.86690],
                    ['lat' => 42.20820, 'lng' => 1.87200],
                    ['lat' => 42.20520, 'lng' => 1.87840],
                    ['lat' => 42.20391, 'lng' => 1.88324], // end point
                ]),
            ],
            [
                'rally_id' => 9,
                'name' => 'Tramo Serra de Montgrony',
                'surface' => 'Asfalto',
                'length_km' => 16.3,
                'route' => json_encode([
                    ['lat' => 42.27792, 'lng' => 2.09240], // start point
                    ['lat' => 42.27340, 'lng' => 2.08950],
                    ['lat' => 42.26690, 'lng' => 2.08410],
                    ['lat' => 42.26000, 'lng' => 2.07870],
                    ['lat' => 42.25410, 'lng' => 2.07300],
                    ['lat' => 42.25090, 'lng' => 2.06950],
                    ['lat' => 42.24866, 'lng' => 2.06785], // end point
                ]),
            ],
            [
                'rally_id' => 10,
                'name' => 'Tramo Arico Alto',
                'surface' => 'Asfalto',
                'length_km' => 12.6,
                'route' => json_encode([
                    ['lat' => 28.16890, 'lng' => -16.52460], // start point
                    ['lat' => 28.16680, 'lng' => -16.52100],
                    ['lat' => 28.16290, 'lng' => -16.51670],
                    ['lat' => 28.15900, 'lng' => -16.51140],
                    ['lat' => 28.15620, 'lng' => -16.50780],
                    ['lat' => 28.15020, 'lng' => -16.50380], // end point
                ]),
            ],
            [
                'rally_id' => 10,
                'name' => 'Tramo Guía de Isora',
                'surface' => 'Grava',
                'length_km' => 15.9,
                'route' => json_encode([
                    ['lat' => 28.21660, 'lng' => -16.78340], // start point
                    ['lat' => 28.21240, 'lng' => -16.77810],
                    ['lat' => 28.20760, 'lng' => -16.77200],
                    ['lat' => 28.20230, 'lng' => -16.76630],
                    ['lat' => 28.19680, 'lng' => -16.76060],
                    ['lat' => 28.19010, 'lng' => -16.75590], // end point
                ]),
            ],
            [
                'rally_id' => 10,
                'name' => 'Tramo Vilaflor Nocturno',
                'surface' => 'Mixto',
                'length_km' => 13.8,
                'route' => json_encode([
                    ['lat' => 28.14720, 'lng' => -16.63730], // start point
                    ['lat' => 28.14450, 'lng' => -16.63420],
                    ['lat' => 28.13910, 'lng' => -16.63000],
                    ['lat' => 28.13480, 'lng' => -16.62640],
                    ['lat' => 28.12990, 'lng' => -16.62310],
                    ['lat' => 28.12040, 'lng' => -16.62010], // end point
                ]),
            ],




            [
                'rally_id' => 11,
                'name' => 'Tramo San Mateo',
                'surface' => 'Asfalto',
                'length_km' => 10.7,
                'route' => json_encode([
                    ['lat' => 43.53210, 'lng' => -8.14290], // start point
                    ['lat' => 43.53400, 'lng' => -8.13980],
                    ['lat' => 43.53760, 'lng' => -8.13340],
                    ['lat' => 43.54110, 'lng' => -8.12790],
                    ['lat' => 43.54430, 'lng' => -8.12250],
                    ['lat' => 43.54740, 'lng' => -8.11650], // end point
                ]),
            ],
            [
                'rally_id' => 11,
                'name' => 'Tramo O Val',
                'surface' => 'Mixto',
                'length_km' => 12.3,
                'route' => json_encode([
                    ['lat' => 43.50390, 'lng' => -8.16320], // start point
                    ['lat' => 43.50620, 'lng' => -8.16010],
                    ['lat' => 43.51150, 'lng' => -8.15400],
                    ['lat' => 43.51730, 'lng' => -8.14860],
                    ['lat' => 43.52200, 'lng' => -8.14400],
                    ['lat' => 43.52610, 'lng' => -8.14070], // end point
                ]),
            ],
            [
                'rally_id' => 11,
                'name' => 'Tramo Pedroso',
                'surface' => 'Grava',
                'length_km' => 14.1,
                'route' => json_encode([
                    ['lat' => 43.48900, 'lng' => -8.20150], // start point
                    ['lat' => 43.48560, 'lng' => -8.19720],
                    ['lat' => 43.48020, 'lng' => -8.19240],
                    ['lat' => 43.47600, 'lng' => -8.18780],
                    ['lat' => 43.47300, 'lng' => -8.18350],
                    ['lat' => 43.47160, 'lng' => -8.18090], // end point
                ]),
            ],
            [
                'rally_id' => 12,
                'name' => 'Tramo El Castellar',
                'surface' => 'Grava',
                'length_km' => 13.8,
                'route' => json_encode([
                    ['lat' => 40.42100, 'lng' => -0.98450], // start point
                    ['lat' => 40.42360, 'lng' => -0.98120],
                    ['lat' => 40.42820, 'lng' => -0.97500],
                    ['lat' => 40.43590, 'lng' => -0.96710],
                    ['lat' => 40.44280, 'lng' => -0.95500],
                    ['lat' => 40.44750, 'lng' => -0.94520], // end point
                ]),
            ],
            [
                'rally_id' => 12,
                'name' => 'Tramo Cedrillas',
                'surface' => 'Mixto',
                'length_km' => 15.5,
                'route' => json_encode([
                    ['lat' => 40.42940, 'lng' => -0.87630], // start point
                    ['lat' => 40.43400, 'lng' => -0.87040],
                    ['lat' => 40.44110, 'lng' => -0.86150],
                    ['lat' => 40.44890, 'lng' => -0.85200],
                    ['lat' => 40.45470, 'lng' => -0.84630],
                    ['lat' => 40.45920, 'lng' => -0.84270], // end point
                ]),
            ],
            [
                'rally_id' => 12,
                'name' => 'Tramo Valdelinares',
                'surface' => 'Asfalto',
                'length_km' => 11.2,
                'route' => json_encode([
                    ['lat' => 40.35830, 'lng' => -0.72040], // start point
                    ['lat' => 40.36100, 'lng' => -0.71700],
                    ['lat' => 40.36720, 'lng' => -0.71060],
                    ['lat' => 40.37290, 'lng' => -0.70510],
                    ['lat' => 40.37930, 'lng' => -0.69980],
                    ['lat' => 40.38510, 'lng' => -0.69590], // end point
                ]),
            ],
            [
                'rally_id' => 13,
                'name' => 'Tramo Sierra de Gádor',
                'surface' => 'Grava',
                'length_km' => 16.1,
                'route' => json_encode([
                    ['lat' => 36.89670, 'lng' => -2.66230], // start point
                    ['lat' => 36.90040, 'lng' => -2.65400],
                    ['lat' => 36.90830, 'lng' => -2.64100],
                    ['lat' => 36.91520, 'lng' => -2.63020],
                    ['lat' => 36.92150, 'lng' => -2.62200],
                    ['lat' => 36.92690, 'lng' => -2.61780], // end point
                ]),
            ],
            [
                'rally_id' => 13,
                'name' => 'Tramo Níjar - Campohermoso',
                'surface' => 'Mixto',
                'length_km' => 13.7,
                'route' => json_encode([
                    ['lat' => 36.96530, 'lng' => -2.20850], // start point
                    ['lat' => 36.96880, 'lng' => -2.20270],
                    ['lat' => 36.97370, 'lng' => -2.19250],
                    ['lat' => 36.97990, 'lng' => -2.18260],
                    ['lat' => 36.98430, 'lng' => -2.17480],
                    ['lat' => 36.98800, 'lng' => -2.17010], // end point
                ]),
            ],
            [
                'rally_id' => 13,
                'name' => 'Tramo Sorbas - Uleila',
                'surface' => 'Asfalto',
                'length_km' => 14.9,
                'route' => json_encode([
                    ['lat' => 37.09840, 'lng' => -2.12460], // start point
                    ['lat' => 37.10310, 'lng' => -2.11680],
                    ['lat' => 37.10890, 'lng' => -2.10590],
                    ['lat' => 37.11460, 'lng' => -2.09430],
                    ['lat' => 37.11880, 'lng' => -2.08520],
                    ['lat' => 37.12170, 'lng' => -2.07990], // end point
                ]),
            ],
            [
                'rally_id' => 14,
                'name' => 'Tramo Serra Calderona',
                'surface' => 'Asfalto',
                'length_km' => 15.2,
                'route' => json_encode([
                    ['lat' => 39.67540, 'lng' => -0.41050], // start point
                    ['lat' => 39.67930, 'lng' => -0.40300],
                    ['lat' => 39.68470, 'lng' => -0.39390],
                    ['lat' => 39.69120, 'lng' => -0.38520],
                    ['lat' => 39.69650, 'lng' => -0.37920],
                    ['lat' => 39.70290, 'lng' => -0.37380], // end point
                ]),
            ],
            [
                'rally_id' => 14,
                'name' => 'Tramo Chiva - Requena',
                'surface' => 'Grava',
                'length_km' => 17.3,
                'route' => json_encode([
                    ['lat' => 39.47300, 'lng' => -0.71980], // start point
                    ['lat' => 39.47690, 'lng' => -0.71190],
                    ['lat' => 39.48310, 'lng' => -0.70110],
                    ['lat' => 39.49060, 'lng' => -0.69140],
                    ['lat' => 39.49680, 'lng' => -0.68330],
                    ['lat' => 39.50260, 'lng' => -0.67750], // end point
                ]),
            ],
            [
                'rally_id' => 14,
                'name' => 'Tramo Llíria - Marines',
                'surface' => 'Mixto',
                'length_km' => 13.8,
                'route' => json_encode([
                    ['lat' => 39.64870, 'lng' => -0.58640], // start point
                    ['lat' => 39.65320, 'lng' => -0.57890],
                    ['lat' => 39.66010, 'lng' => -0.56670],
                    ['lat' => 39.66680, 'lng' => -0.55480],
                    ['lat' => 39.67140, 'lng' => -0.54650],
                    ['lat' => 39.67590, 'lng' => -0.54120], // end point
                ]),
            ],
            [
                'rally_id' => 15,
                'name' => 'Tramo Sierra de Dos Torres',
                'surface' => 'Grava',
                'length_km' => 16.7,
                'route' => json_encode([
                    ['lat' => 38.49510, 'lng' => -4.88700], // start point
                    ['lat' => 38.49920, 'lng' => -4.87590],
                    ['lat' => 38.50680, 'lng' => -4.86100],
                    ['lat' => 38.51190, 'lng' => -4.84970],
                    ['lat' => 38.51540, 'lng' => -4.83810],
                    ['lat' => 38.51830, 'lng' => -4.83240], // end point
                ]),
            ],
            [
                'rally_id' => 15,
                'name' => 'Tramo Camino de Alcaracejos',
                'surface' => 'Mixto',
                'length_km' => 14.2,
                'route' => json_encode([
                    ['lat' => 38.40050, 'lng' => -4.93060], // start point
                    ['lat' => 38.40710, 'lng' => -4.92210],
                    ['lat' => 38.41560, 'lng' => -4.91230],
                    ['lat' => 38.42340, 'lng' => -4.90310],
                    ['lat' => 38.42870, 'lng' => -4.89640],
                    ['lat' => 38.43380, 'lng' => -4.88950], // end point
                ]),
            ],
            [
                'rally_id' => 15,
                'name' => 'Tramo Pozoblanco Sur',
                'surface' => 'Asfalto',
                'length_km' => 18.5,
                'route' => json_encode([
                    ['lat' => 38.35040, 'lng' => -4.85030], // start point
                    ['lat' => 38.35610, 'lng' => -4.83920],
                    ['lat' => 38.36240, 'lng' => -4.82710],
                    ['lat' => 38.36890, 'lng' => -4.81400],
                    ['lat' => 38.37260, 'lng' => -4.80410],
                    ['lat' => 38.37490, 'lng' => -4.79760], // end point
                ]),
            ],
            [
                'rally_id' => 16,
                'name' => 'Tramo Valle del Torío',
                'surface' => 'Mixto',
                'length_km' => 17.8,
                'route' => json_encode([
                    ['lat' => 42.75650, 'lng' => -5.55010], // start point
                    ['lat' => 42.76020, 'lng' => -5.54060],
                    ['lat' => 42.76780, 'lng' => -5.52680],
                    ['lat' => 42.77510, 'lng' => -5.51610],
                    ['lat' => 42.78110, 'lng' => -5.50800],
                    ['lat' => 42.78690, 'lng' => -5.50540], // end point
                ]),
            ],
            [
                'rally_id' => 16,
                'name' => 'Tramo Montes de León',
                'surface' => 'Grava',
                'length_km' => 19.3,
                'route' => json_encode([
                    ['lat' => 42.60040, 'lng' => -6.00350], // start point
                    ['lat' => 42.60730, 'lng' => -5.99340],
                    ['lat' => 42.61680, 'lng' => -5.97980],
                    ['lat' => 42.62510, 'lng' => -5.96890],
                    ['lat' => 42.63080, 'lng' => -5.95720],
                    ['lat' => 42.63490, 'lng' => -5.95060], // end point
                ]),
            ],
            [
                'rally_id' => 16,
                'name' => 'Tramo Vega de Infanzones',
                'surface' => 'Asfalto',
                'length_km' => 15.1,
                'route' => json_encode([
                    ['lat' => 42.48710, 'lng' => -5.60320], // start point
                    ['lat' => 42.49190, 'lng' => -5.59360],
                    ['lat' => 42.49770, 'lng' => -5.57890],
                    ['lat' => 42.50320, 'lng' => -5.56440],
                    ['lat' => 42.50790, 'lng' => -5.55310],
                    ['lat' => 42.51050, 'lng' => -5.54670], // end point
                ]),
            ],
            [
                'rally_id' => 17,
                'name' => 'Tramo Timanfaya',
                'surface' => 'Grava',
                'length_km' => 16.4,
                'route' => json_encode([
                    ['lat' => 28.99870, 'lng' => -13.76820], // start point
                    ['lat' => 29.00400, 'lng' => -13.75540],
                    ['lat' => 29.01160, 'lng' => -13.74150],
                    ['lat' => 29.01790, 'lng' => -13.72860],
                    ['lat' => 29.02180, 'lng' => -13.71800],
                    ['lat' => 29.02480, 'lng' => -13.71390], // end point
                ]),
            ],
            [
                'rally_id' => 17,
                'name' => 'Tramo El Golfo',
                'surface' => 'Grava',
                'length_km' => 13.9,
                'route' => json_encode([
                    ['lat' => 28.94730, 'lng' => -13.81890], // start point
                    ['lat' => 28.95320, 'lng' => -13.80670],
                    ['lat' => 28.96140, 'lng' => -13.79800],
                    ['lat' => 28.96790, 'lng' => -13.79010],
                    ['lat' => 28.97180, 'lng' => -13.78430],
                    ['lat' => 28.97540, 'lng' => -13.78010], // end point
                ]),
            ],
            [
                'rally_id' => 17,
                'name' => 'Tramo La Santa - Soo',
                'surface' => 'Grava',
                'length_km' => 14.8,
                'route' => json_encode([
                    ['lat' => 29.07560, 'lng' => -13.82410], // start point
                    ['lat' => 29.08170, 'lng' => -13.81290],
                    ['lat' => 29.08790, 'lng' => -13.80020],
                    ['lat' => 29.09260, 'lng' => -13.78810],
                    ['lat' => 29.09480, 'lng' => -13.78160],
                    ['lat' => 29.09630, 'lng' => -13.77680], // end point
                ]),
            ],
            [
                'rally_id' => 18,
                'name' => 'Tramo Sierra de Huétor',
                'surface' => 'Mixto',
                'length_km' => 15.6,
                'route' => json_encode([
                    ['lat' => 37.30110, 'lng' => -3.52700], // start point
                    ['lat' => 37.30750, 'lng' => -3.51700],
                    ['lat' => 37.31400, 'lng' => -3.50580],
                    ['lat' => 37.32060, 'lng' => -3.49120],
                    ['lat' => 37.32500, 'lng' => -3.48100],
                    ['lat' => 37.32780, 'lng' => -3.47430], // end point
                ]),
            ],
            [
                'rally_id' => 18,
                'name' => 'Tramo Dehesas de Guadix',
                'surface' => 'Mixto',
                'length_km' => 17.1,
                'route' => json_encode([
                    ['lat' => 37.31820, 'lng' => -3.10850], // start point
                    ['lat' => 37.31170, 'lng' => -3.12300],
                    ['lat' => 37.30150, 'lng' => -3.13870],
                    ['lat' => 37.29530, 'lng' => -3.15220],
                    ['lat' => 37.29160, 'lng' => -3.16000],
                    ['lat' => 37.28840, 'lng' => -3.16560], // end point
                ]),
            ],
            [
                'rally_id' => 18,
                'name' => 'Tramo Los Cahorros',
                'surface' => 'Mixto',
                'length_km' => 13.7,
                'route' => json_encode([
                    ['lat' => 37.12640, 'lng' => -3.53890], // start point
                    ['lat' => 37.12010, 'lng' => -3.52810],
                    ['lat' => 37.11340, 'lng' => -3.51900],
                    ['lat' => 37.10870, 'lng' => -3.51040],
                    ['lat' => 37.10460, 'lng' => -3.50320],
                    ['lat' => 37.10190, 'lng' => -3.49810], // end point
                ]),
            ],
            [
                'rally_id' => 19,
                'name' => 'Tramo Cerro de la Hoz',
                'surface' => 'Mixto',
                'length_km' => 18.2,
                'route' => json_encode([
                    ['lat' => 40.51430, 'lng' => -3.28850], // start point
                    ['lat' => 40.52050, 'lng' => -3.27450],
                    ['lat' => 40.52800, 'lng' => -3.25900],
                    ['lat' => 40.53060, 'lng' => -3.24730],
                    ['lat' => 40.53540, 'lng' => -3.23800],
                    ['lat' => 40.53310, 'lng' => -3.23670], // end point
                ]),
            ],
            [
                'rally_id' => 19,
                'name' => 'Tramo Villanueva de la Torre',
                'surface' => 'Mixto',
                'length_km' => 16.4,
                'route' => json_encode([
                    ['lat' => 40.46110, 'lng' => -3.15790], // start point
                    ['lat' => 40.46340, 'lng' => -3.14890],
                    ['lat' => 40.46900, 'lng' => -3.14120],
                    ['lat' => 40.47260, 'lng' => -3.13150],
                    ['lat' => 40.47580, 'lng' => -3.13930], // end point
                ]),
            ],
            [
                'rally_id' => 19,
                'name' => 'Tramo El Encinar',
                'surface' => 'Mixto',
                'length_km' => 14.9,
                'route' => json_encode([
                    ['lat' => 40.40280, 'lng' => -3.35240], // start point
                    ['lat' => 40.41050, 'lng' => -3.33810],
                    ['lat' => 40.41680, 'lng' => -3.32350],
                    ['lat' => 40.42010, 'lng' => -3.31400],
                    ['lat' => 40.42370, 'lng' => -3.30800],
                    ['lat' => 40.42450, 'lng' => -3.32210], // end point
                ]),
            ],
            [
                'rally_id' => 20,
                'name' => 'Tramo La Morera',
                'surface' => 'Mixto',
                'length_km' => 21.3,
                'route' => json_encode([
                    ['lat' => 38.70510, 'lng' => -6.36840], // start point
                    ['lat' => 38.71000, 'lng' => -6.35910],
                    ['lat' => 38.71750, 'lng' => -6.35100],
                    ['lat' => 38.72030, 'lng' => -6.34500],
                    ['lat' => 38.72380, 'lng' => -6.33890],
                    ['lat' => 38.72640, 'lng' => -6.34450], // end point
                ]),
            ],
            [
                'rally_id' => 20,
                'name' => 'Tramo Valle de los Molinos',
                'surface' => 'Grava',
                'length_km' => 18.7,
                'route' => json_encode([
                    ['lat' => 38.79020, 'lng' => -6.29900], // start point
                    ['lat' => 38.79410, 'lng' => -6.28550],
                    ['lat' => 38.79940, 'lng' => -6.27800],
                    ['lat' => 38.80300, 'lng' => -6.26750],
                    ['lat' => 38.80450, 'lng' => -6.27270], // end point
                ]),
            ],
            [
                'rally_id' => 20,
                'name' => 'Tramo El Guijo',
                'surface' => 'Grava',
                'length_km' => 19.2,
                'route' => json_encode([
                    ['lat' => 38.72040, 'lng' => -6.48500], // start point
                    ['lat' => 38.72500, 'lng' => -6.47650],
                    ['lat' => 38.73080, 'lng' => -6.46830],
                    ['lat' => 38.73550, 'lng' => -6.46080],
                    ['lat' => 38.74000, 'lng' => -6.46120],
                    ['lat' => 38.74050, 'lng' => -6.46120], // end point
                ]),
            ],
            [
                'rally_id' => 21,
                'name' => 'Tramo El Cabezo',
                'surface' => 'Mixto',
                'length_km' => 22.4,
                'route' => json_encode([
                    ['lat' => 37.64580, 'lng' => -1.67530], // start point
                    ['lat' => 37.64830, 'lng' => -1.66790],
                    ['lat' => 37.65510, 'lng' => -1.66070],
                    ['lat' => 37.66080, 'lng' => -1.65490],
                    ['lat' => 37.66390, 'lng' => -1.64980],
                    ['lat' => 37.66550, 'lng' => -1.65000], // end point
                ]),
            ],
            [
                'rally_id' => 21,
                'name' => 'Tramo El Llano de las Ovejas',
                'surface' => 'Grava',
                'length_km' => 19.5,
                'route' => json_encode([
                    ['lat' => 37.72600, 'lng' => -1.71790], // start point
                    ['lat' => 37.73010, 'lng' => -1.71120],
                    ['lat' => 37.73520, 'lng' => -1.70550],
                    ['lat' => 37.74150, 'lng' => -1.69680],
                    ['lat' => 37.74560, 'lng' => -1.70030], // end point
                ]),
            ],
            [
                'rally_id' => 21,
                'name' => 'Tramo El Alto de la Hoya',
                'surface' => 'Asfalto',
                'length_km' => 20.1,
                'route' => json_encode([
                    ['lat' => 37.67850, 'lng' => -1.74950], // start point
                    ['lat' => 37.68350, 'lng' => -1.74120],
                    ['lat' => 37.68800, 'lng' => -1.73560],
                    ['lat' => 37.69080, 'lng' => -1.72890],
                    ['lat' => 37.69320, 'lng' => -1.72300],
                    ['lat' => 37.69340, 'lng' => -1.73020], // end point
                ]),
            ],
            [
                'rally_id' => 22,
                'name' => 'Tramo La Hoz',
                'surface' => 'Grava',
                'length_km' => 25.3,
                'route' => json_encode([
                    ['lat' => 41.60600, 'lng' => -0.74860], // start point
                    ['lat' => 41.61000, 'lng' => -0.74080],
                    ['lat' => 41.61580, 'lng' => -0.73520],
                    ['lat' => 41.62050, 'lng' => -0.73090],
                    ['lat' => 41.62500, 'lng' => -0.72540],
                    ['lat' => 41.62550, 'lng' => -0.72010], // end point
                ]),
            ],
            [
                'rally_id' => 22,
                'name' => 'Tramo El Sabinar',
                'surface' => 'Mixto',
                'length_km' => 18.7,
                'route' => json_encode([
                    ['lat' => 41.57720, 'lng' => -0.75150], // start point
                    ['lat' => 41.58000, 'lng' => -0.74800],
                    ['lat' => 41.58220, 'lng' => -0.74450],
                    ['lat' => 41.58400, 'lng' => -0.74200],
                    ['lat' => 41.58500, 'lng' => -0.74000], // end point
                ]),
            ],
            [
                'rally_id' => 22,
                'name' => 'Tramo Las Torcas',
                'surface' => 'Asfalto',
                'length_km' => 20.2,
                'route' => json_encode([
                    ['lat' => 41.62750, 'lng' => -0.68480], // start point
                    ['lat' => 41.63000, 'lng' => -0.68000],
                    ['lat' => 41.63350, 'lng' => -0.67540],
                    ['lat' => 41.63600, 'lng' => -0.67130],
                    ['lat' => 41.63800, 'lng' => -0.67000], // end point
                ]),
            ],
            [
                'rally_id' => 23,
                'name' => 'Tramo La Meca',
                'surface' => 'Grava',
                'length_km' => 22.5,
                'route' => json_encode([
                    ['lat' => 41.65240, 'lng' => -0.89230], // start point
                    ['lat' => 41.65400, 'lng' => -0.88850],
                    ['lat' => 41.65850, 'lng' => -0.88300],
                    ['lat' => 41.66100, 'lng' => -0.88000],
                    ['lat' => 41.66350, 'lng' => -0.87700],
                    ['lat' => 41.66550, 'lng' => -0.87820], // end point
                ]),
            ],
            [
                'rally_id' => 23,
                'name' => 'Tramo El Pedregal',
                'surface' => 'Mixto',
                'length_km' => 19.8,
                'route' => json_encode([
                    ['lat' => 41.63800, 'lng' => -0.87400], // start point
                    ['lat' => 41.64000, 'lng' => -0.87000],
                    ['lat' => 41.64300, 'lng' => -0.86700],
                    ['lat' => 41.64650, 'lng' => -0.86400],
                    ['lat' => 41.64800, 'lng' => -0.86300],
                    ['lat' => 41.64800, 'lng' => -0.86500], // end point
                ]),
            ],
            [
                'rally_id' => 23,
                'name' => 'Tramo Los Llanos',
                'surface' => 'Asfalto',
                'length_km' => 24.3,
                'route' => json_encode([
                    ['lat' => 41.67550, 'lng' => -0.84840], // start point
                    ['lat' => 41.67800, 'lng' => -0.84500],
                    ['lat' => 41.68150, 'lng' => -0.84000],
                    ['lat' => 41.68500, 'lng' => -0.83500],
                    ['lat' => 41.68800, 'lng' => -0.83000], // end point
                ]),
            ],
            [
                'rally_id' => 24,
                'name' => 'Tramo La Rambla',
                'surface' => 'Grava',
                'length_km' => 18.2,
                'route' => json_encode([
                    ['lat' => 40.08100, 'lng' => -2.06000], // start point
                    ['lat' => 40.08350, 'lng' => -2.05800],
                    ['lat' => 40.08600, 'lng' => -2.05550],
                    ['lat' => 40.08900, 'lng' => -2.05300],
                    ['lat' => 40.09200, 'lng' => -2.05100],
                    ['lat' => 40.09400, 'lng' => -2.05000], // end point
                ]),
            ],
            [
                'rally_id' => 24,
                'name' => 'Tramo El Barranco',
                'surface' => 'Mixto',
                'length_km' => 16.5,
                'route' => json_encode([
                    ['lat' => 40.11000, 'lng' => -2.03800], // start point
                    ['lat' => 40.11200, 'lng' => -2.03600],
                    ['lat' => 40.11500, 'lng' => -2.03200],
                    ['lat' => 40.11800, 'lng' => -2.03000],
                    ['lat' => 40.12000, 'lng' => -2.02800], // end point
                ]),
            ],
            [
                'rally_id' => 24,
                'name' => 'Tramo Las Canteras',
                'surface' => 'Asfalto',
                'length_km' => 20.0,
                'route' => json_encode([
                    ['lat' => 40.13500, 'lng' => -2.02750], // start point
                    ['lat' => 40.13700, 'lng' => -2.02400],
                    ['lat' => 40.14000, 'lng' => -2.02000],
                    ['lat' => 40.14200, 'lng' => -2.01700],
                    ['lat' => 40.14500, 'lng' => -2.01500], // end point
                ]),
            ],
        ];

        foreach ($stages as $stage) {
            Stage::create($stage);
        }
    }
}
