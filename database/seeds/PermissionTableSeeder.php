<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Permission::create([
            'codigo' => 'test-permission-root',
            'label' => 'Teste de permissão que só o root admin tem acesso'
        ]);

        \App\Models\Permission::create([
            'codigo' => 'test-permission-userAndAbove',
            'label' => 'Teste de permissão que todos menos o usuário não confirmado tem acesso'
        ]);
    }
}
