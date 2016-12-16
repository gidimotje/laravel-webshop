<?php

use Illuminate\Database\Seeder;

class ProductTablSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'https://html5box.com/html5lightbox/images/lakeandballoon.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - vet gaaf enzo echt doen.',
        	'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://html5box.com/html5lightbox/images/lakeandballoon.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - vet gaaf enzo echt doen.',
        	'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://html5box.com/html5lightbox/images/lakeandballoon.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - vet gaaf enzo echt doen.',
        	'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://html5box.com/html5lightbox/images/lakeandballoon.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - vet gaaf enzo echt doen.',
        	'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://html5box.com/html5lightbox/images/lakeandballoon.jpg',
        	'title' => 'Harry Potter',
        	'description' => 'Super cool - vet gaaf enzo echt doen.',
        	'price' => 10
        ]);
        $product->save();
    }
}
