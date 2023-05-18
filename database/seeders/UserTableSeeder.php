<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Installer;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //        $user->givePermissionTo('User');

        $user = User::create([
            'name'      => 'Daniel Bogarin',
            'anio_ingreso' => 2000,
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin@admin.com'),
            'current_team_id'    => 1
        ]);

        $user = User::create([
            'name'      => 'Federico Barraza',
            'anio_ingreso' => 2001,
            'email'     => 'fede@admin.com',
            'password'  => Hash::make('fede@admin.com'),
            'current_team_id'    => 1
        ]);

        Team::create([
            'user_id'      => $user->id,
            'name' => 'Admin Group',
            'personal_team' => 1,

        ]);
    }
}
