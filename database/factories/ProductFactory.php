<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Provider\Base;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      
        'name'=> $faker->name,
        'color'=>$faker->randomElement($array = array('Black','White','Red','Green','Blue','Purple')),
        'size'=>$faker->randomElement($array = array ('S','M','L','XL')) ,
        'type'=>$faker->randomElement($array = array('Sport', 'Casual','Beachwear','Shoes', 'Bags', 'Coat','Dress')),
        'price'=>$faker->numberBetween($min = 1, $max = 1000),
        'image' => $faker->image('public/storage/img', 640,480,null,false),
        'brand' =>$faker->randomElement($arrat = array('Polo','Calvin', 'Denim','Diesel', 'Tommy','Nike','Addidas')),
        'category'=>$faker->randomElement($array = array('Male', 'Female','Children')),
        'onSale' =>$faker->randomElement($array = array(0,1)),
         'created_at'=>now(),
         'updated_at'=> now(), 
         

    ];
});
