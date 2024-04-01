<?php

namespace Database\Seeders;

use App\Models\TypeUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        TypeUser::create(['nombreTipo' => 'Admin']);
        TypeUser::create(['nombreTipo' => 'Cliente']);
        TypeUser::create(['nombreTipo' => 'Tecnico']);

        // Crear usuarios y asignarles el tipo correspondiente
        \App\Models\User::factory(1)->create([
            'type_users_id' => 1, // Admin
        ]);
        \App\Models\User::factory(10)->create([
            'type_users_id' => 2, // Cliente
        ]);
        \App\Models\User::factory(3)->create([
            'type_users_id' => 3, // Técnico
        ]);

        // Crear un usuario de prueba
        \App\Models\User::factory()->create([
            'name' => 'Erick',
            'email' => 'eround@hotmail.com',
            'edad' => '30',
            'type_users_id' => 1, // Admin
            'password' => bcrypt('12345678')
        ]);
    }
}
