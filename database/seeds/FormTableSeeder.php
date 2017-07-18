<?php

use App\Models\Form;
use Illuminate\Database\Seeder;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Form::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $files = [
            'example-stuff',
        ];

        foreach ($files as $file) {

            $content = File::get(resource_path() . '/assets/forms/' . $file . '.json');
            $content = preg_replace('/\r|\n/', '', $content);
            $content = preg_replace('/\s\s+/', '', $content);

            Form::create([
                'slug' => $file,
                'json' => $content,
            ]);
        }

    }
}
