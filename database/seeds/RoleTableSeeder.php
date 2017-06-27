<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \App\Models\Role::create([
            'name' => 'Owner Admin',
            'slug' => 'admin-owner',
            'description' => 'Admin principal do sistema'
        ]);

        \App\Models\Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Admistrador do Sistema'
        ]);

        \App\Models\Role::create([
            'name' => 'Usuário',
            'slug' => 'user',
            'description' => 'Usuário básico'
        ]);

        \App\Models\Role::create([
            'name' => 'Usuário Não Confirmado',
            'slug' => 'user-guest',
            'description' => 'Usuário ainda não confirmado'
        ]);




    }
}
