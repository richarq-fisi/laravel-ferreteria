<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Bicicletas de Ruta',
                'slug' => 'bicicletas-de-ruta',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
                'color' => '#440022'
            ],
            [
                'name' => 'Bicicletas Híbridas',
                'slug' => 'bicicletas-hibridas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
                'color' => '#445500'
            ],
            [
                'name' => 'Bicicletas Urbanas',
                'slug' => 'bicicletas-urbanas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
                'color' => '#445502'
            ],
            [
                'name' => 'Bicicletas plegables',
                'slug' => 'bicicletas-plegables',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
                'color' => '#445503'
            ]
        );
        Category::insert($data);
    }
}
