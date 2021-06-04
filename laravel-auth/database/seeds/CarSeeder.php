<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\Brand;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Car::class, 50) -> make() -> each(function($car) {
            $brand = Brand::inRandomOrder() -> first();
            $car -> brand() -> associate($brand);
            $car -> save();
        });
    }
}
