<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath'=>'https://blog.richmond.edu/heroes/files/2016/04/635890934224265787884431994_new-harry-potter-story-halloween.png',
        	'title' => 'Harry Potter',
        	'description'=>'Super Cool.And totally woth it',
        	'price' => 10
        	]);
    		$product->save();
    		   $product = new \App\Product([
        	'imagePath'=>'https://blog.richmond.edu/heroes/files/2016/04/635890934224265787884431994_new-harry-potter-story-halloween.png',
        	'title' => 'Harry Potter',
        	'description'=>'Super Cool.And totally woth it',
        	'price' => 20
        	]);
    		$product->save();
    		   $product = new \App\Product([
        	'imagePath'=>'https://blog.richmond.edu/heroes/files/2016/04/635890934224265787884431994_new-harry-potter-story-halloween.png',
        	'title' => 'Harry Potter',
        	'description'=>'Super Cool.And totally woth it',
        	'price' => 30
        	]);
    		$product->save();
    		   $product = new \App\Product([
        	'imagePath'=>'https://blog.richmond.edu/heroes/files/2016/04/635890934224265787884431994_new-harry-potter-story-halloween.png',
        	'title' => 'Harry Potter',
        	'description'=>'Super Cool.And totally woth it',
        	'price' => 40
        	]);
    		$product->save();
    		   $product = new \App\Product([
        	'imagePath'=>'https://blog.richmond.edu/heroes/files/2016/04/635890934224265787884431994_new-harry-potter-story-halloween.png',
        	'title' => 'Harry Potter',
        	'description'=>'Super Cool.And totally woth it',
        	'price' => 10
        	]);
    		$product->save();
    		   $product = new \App\Product([
        	'imagePath'=>'https://blog.richmond.edu/heroes/files/2016/04/635890934224265787884431994_new-harry-potter-story-halloween.png',
        	'title' => 'Harry Potter',
        	'description'=>'Super Cool.And totally woth it',
        	'price' => 10
        	]);
    		$product->save();
    }
}
