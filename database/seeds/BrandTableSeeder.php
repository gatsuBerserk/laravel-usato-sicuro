<?php

use Illuminate\Database\Seeder; 
use Faker\Generator as Faker; 
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 12 ; $i++) { 
            $newBrand = new Brand();
            
            $newBrand->brand_name=$faker->unique()->randomElement(['renault','citroen','ford','maserati','hummer', "fiat", "piaggio", "volvo", "mercedes", "bmw", "ferrari", "lamborghini"]);
            $newBrand->nationality=$faker->country(); 
            $newBrand->save();
        }
    }
       
}
