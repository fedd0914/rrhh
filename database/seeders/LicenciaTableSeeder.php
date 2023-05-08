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
            'concept'      => 'Vacaciones',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Vacaciones1',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Vacaciones2',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Vacaciones3',
            'days' => 21,
            'is_active'     => true,
        ]);

        Licencia::create([
            'concept'      => 'Vacaciones4',
            'days' => 21,
            'is_active'     => true,
        ]);
        Licencia::create([
            'concept'      => 'Vacaciones5',
            'days' => 21,
            'is_active'     => true,
        ]);
    }
}
