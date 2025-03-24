<?php

namespace Database\Seeders;

use App\Models\Rally;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RalliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rallies = [
            [
                'name' => 'Rallye Tierras Altas de Lorca',
                'location' => 'Lorca, Murcia',
                'website' => 'https://www.rallyetierrasaltasdelorca.com/',
                'start_date' => '2025-03-21',
                'end_date' => '2025-03-22',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye Sierra Morena',
                'location' => 'Córdoba, Andalucía',
                'website' => 'https://www.rallysierramorena.com/',
                'start_date' => '2025-04-04',
                'end_date' => '2025-04-06',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye de Ourense Recalvi',
                'location' => 'Ourense, Galicia',
                'website' => 'https://www.rallyeourense.es/',
                'start_date' => '2025-06-13',
                'end_date' => '2025-06-14',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye Recalvi Rías Baixas',
                'location' => 'Vigo, Galicia',
                'website' => 'https://www.rallyeriasbaixas.com/57/',
                'start_date' => '2025-07-11',
                'end_date' => '2025-07-12',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye Blendio Princesa de Asturias Ciudad de Oviedo',
                'location' => 'Oviedo, Asturias',
                'website' => 'https://www.rallyprincesa.com/',
                'start_date' => '2025-09-12',
                'end_date' => '2025-09-13',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye Villa de Llanes',
                'location' => 'Llanes, Asturias',
                'website' => 'https://app.rallyellanes.com/',
                'start_date' => '2025-09-26',
                'end_date' => '2025-09-27',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye RACC Catalunya - Costa Daurada',
                'location' => 'Tarragona, Cataluña',
                'website' => 'https://www.rallyracc.com/2024/es/',
                'start_date' => '2025-10-24',
                'end_date' => '2025-10-25',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye de La Nucía - Trofeo Costa Blanca',
                'location' => 'La Nucía, Comunidad Valenciana',
                'website' => 'https://www.rallyelanucia.com/',
                'start_date' => '2025-11-07',
                'end_date' => '2025-11-08',
                'category_id' => 1,
            ],
            [
                'name' => 'Rallye La LLana - Ripollès',
                'location' => 'Sabadell, Cataluña',
                'website' => 'https://rallyelallana.com/',
                'start_date' => '2025-03-28',
                'end_date' => '2025-03-29',
                'category_id' => 2,
            ],
            [
                'name' => 'Rallye Interanacional Villa de Adeje',
                'location' => 'Adeje, Canarias',
                'website' => 'https://rallyevilladeadeje.com/',
                'start_date' => '2025-05-02',
                'end_date' => '2025-05-03',
                'category_id' => 2,
            ],
            [
                'name' => 'Rallye Cidade de Narón',
                'location' => 'Narón, Galicia',
                'website' => 'https://rallyenaron.org/',
                'start_date' => '2025-05-23',
                'end_date' => '2025-05-24',
                'category_id' => 2,
            ],
            [
                'name' => 'Rallye Mudéjar - Rallye de Teruel',
                'location' => 'Teruel, Aragón',
                'website' => 'https://rallyteruel.com/rallye/',
                'start_date' => '2025-06-28',
                'end_date' => '2025-06-27',
                'category_id' => 2,
            ],
            [
                'name' => 'Rallye Costa de Almería',
                'location' => 'Almería, Andalucía',
                'website' => 'https://www.rallyecostadealmeria.com/',
                'start_date' => '2025-10-31',
                'end_date' => '2025-11-01',
                'category_id' => 2,
            ],
            [
                'name' => 'Rallye Ciudad de Valencia',
                'location' => 'Valencia, Comunidad Valenciana',
                'website' => 'https://www.rallyeciudadvalencia.com/',
                'start_date' => '2025-11-28',
                'end_date' => '2025-11-29',
                'category_id' => 2,
            ],
            [
                'name' => 'Rallye Ciudad de Pozoblanco',
                'location' => 'Pozoblanco, Andalucía',
                'website' => 'https://escuderiasierramorena.es/',
                'start_date' => '2025-05-02',
                'end_date' => '2025-05-03',
                'category_id' => 3,
            ],
            [
                'name' => 'Rallye Reino de León',
                'location' => 'León, Castilla y León',
                'website' => 'https://www.rallyereinodeleon.com/',
                'start_date' => '2025-06-06',
                'end_date' => '2025-06-07',
                'category_id' => 3,
            ],
            [
                'name' => 'Rallye de Tierra Isla de los Volcanes',
                'location' => 'Lanzarote, Canarias',
                'website' => 'https://www.rallyeisladelosvolcanes.com/',
                'start_date' => '2025-08-08',
                'end_date' => '2025-08-09',
                'category_id' => 3,
            ],
            [
                'name' => 'Rallye Tierra de Granada',
                'location' => 'Granada, Andalucía',
                'website' => 'https://www.rallyeciudaddegranada.es/',
                'start_date' => '2025-10-10',
                'end_date' => '2025-10-11',
                'category_id' => 3,
            ],
            [
                'name' => 'Rallye TT Guadalajara',
                'location' => 'Guadalajara, Castilla-La Mancha',
                'website' => 'https://automovilclubalcarreno.es/',
                'start_date' => '2025-03-14',
                'end_date' => '2025-03-15',
                'category_id' => 4,
            ],
            [
                'name' => 'Baja TT Dehesa de Extremadura',
                'location' => 'Badajoz, Extremadura',
                'website' => 'https://bajattextremadura.com/',
                'start_date' => '2025-05-02',
                'end_date' => '2025-05-04',
                'category_id' => 4,
            ],
            [
                'name' => 'Baja Lorca Ciudad del Sol',
                'location' => 'Lorca, Murcia',
                'website' => 'https://www.automovilclubdelorca.es/',
                'start_date' => '2025-05-30',
                'end_date' => '2025-05-31',
                'category_id' => 4,
            ],
            [
                'name' => 'Baja España Aragón',
                'location' => 'Teruel, Aragón',
                'website' => 'https://www.bajaaragon.com/',
                'start_date' => '2025-07-25',
                'end_date' => '2025-07-27',
                'category_id' => 4,
            ],
            [
                'name' => 'Cierzo Rallye Ejército de Tierra',
                'location' => 'Zaragoza, Aragón',
                'website' => 'https://cierzorally.com/',
                'start_date' => '2025-09-05',
                'end_date' => '2025-09-06',
                'category_id' => 4,
            ],
            [
                'name' => 'Rallye TT Cuenca',
                'location' => 'Cuenca, Castilla-La Mancha',
                'website' => 'https://cuencamotor4x4.com/',
                'start_date' => '2025-10-03',
                'end_date' => '2025-10-04',
                'category_id' => 4,
            ]
        ];

        foreach ($rallies as $rally) {
            Rally::create($rally);
        }
    }
}
