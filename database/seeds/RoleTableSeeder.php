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
            'codigo' => 'admin-root',
            'label' => 'Administrador Root',
            'rank' => 0
        ]);

        \App\Models\Role::create([
            'codigo' => 'admin',
            'label' => 'Administrador',
            'rank' => 1
        ]);

        \App\Models\Role::create([
            'codigo' => 'user',
            'label' => 'Usuário',
            'rank' => 2
        ]);

        \App\Models\Role::create([
            'codigo' => 'user-unconfirmed',
            'label' => 'Usuário sem confirmação',
            'rank' => 3
        ]);

    }
}
