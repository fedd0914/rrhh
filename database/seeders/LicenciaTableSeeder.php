<?php

namespace Database\Seeders;

use App\Models\Licencia;
use Illuminate\Database\Seeder;

class LicenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //        $user->givePermissionTo('User');

        Licencia::create([
            'concept'      => 'Licencia Ordinaria Anual (Art. 7)
            2022
            ',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Permiso P/Examen
            (Art. 36)
            ',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Lic. Por Nac. Agente Varón
            (Art. 54)
            ',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Licencia Anual Invierno (Art.9)
            2023
            ',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Lic. P/ Fallecimiento.
            (Art. 50 inc. 1)
            ',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Matrimonio Hijo
            Agente
            (Art. 50 inc. 7)
            ',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Natalicio
            (Art. 50 inc. 8)
            ',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Matrimonio
            (Art. 30)
            ',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Donación de Sangre
            (Art. 50 inc. 3º)
            ',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Razones Particulares
            Art. 50 inc. 4
            ',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Artículo 52',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Siniestros  o hechos de extrema gravedad
            Art. 50 inc. 2
            ',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Por Citación Legal
            Art. 50 inc. 10
            ',
            'days' => 21,
            'is_active'     => true,
        ]);
    }
}
