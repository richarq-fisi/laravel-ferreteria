<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
                'name' 			=> 'Bicicleta 1',
                'slug' 			=> 'bicicleta-1',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/m/bm2015-drako-20-grafito-2020-01.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bicicleta 2',
                'slug' 			=> 'bicicleta-2',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 255.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/a/ba2951_merak_1_29_negro-blanco_2020_01_1.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bicicleta 3',
                'slug' 			=> 'bicicleta-3',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 300.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/m/bm2416-luna-24-rosado-2020-01.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bicicleta 4',
                'slug' 			=> 'bicicleta-4',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 475.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/a/ba2963-orion-5-29-celeste-2020-01.png',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Bicicleta 5',
                'slug' 			=> 'bicicleta-5',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 280.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/m/y/my20_remote_ctrl_1_1.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Bicicleta 6',
                'slug' 			=> 'bicicleta-6',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/e/b/eb2751-parsec-grafito-2020-01_1.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Bicicleta 7',
                'slug' 			=> 'bicicleta-7',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/m/y/my20_process_153_dl_29_1_1.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bicicleta 8',
                'slug' 			=> 'bicicleta-8',
                'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.000,
                'image' 		=> 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/k/o/kona153a_1_1.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],

        );
        Product::insert($data);
    }
}
