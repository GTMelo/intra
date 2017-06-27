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
            'name' => 'Publicação de Artigo',
            'slug' => 'can-publish-artigo',
            'description' => 'Pode publicar artigos'
        ]);

        \App\Models\Permission::create([
            'name' => 'Publicação de Artigos Global',
            'slug' => 'can-publish-artigo-global',
            'description' => 'Pode publicar artigos em qualquer unidade registrada'
        ]);
    }
}
