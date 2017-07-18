<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UsersTableSeeder::class);
        $this->call(CargoTableSeeder::class);
        $this->call(EscolaridadeTableSeeder::class);
        $this->call(ObjetoTipoTableSeeder::class);
        $this->call(ArtigoTipoTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UnidadeTableSeeder::class);
        $this->call(ArtigoTableSeeder::class);
        $this->call(ArtigoContentTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(EmailTableSeeder::class);
        $this->call(ObjetoTableSeeder::class);
        $this->call(CarrosselItemTableSeeder::class);
        $this->call(UsuarioRHTableSeeder::class);
        $this->call(TelefoneTableSeeder::class);
        $this->call(FormTableSeeder::class);
    }
}
