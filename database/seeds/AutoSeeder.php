<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Auto;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10 ; $i++) {
        $auto = new Auto();

        $auto->model = $faker->randomElement(['Model X', 'Kuga', 'Q7', 'Serie 2', 'Classe E']);
        $auto->brand = $faker->randomElement(['Tesla', 'Ford', 'Audi', 'BMW', 'Mercedes']);
        $auto->doors = $faker->numberBetween(3, 5);

        $auto->save();
      }
    }
}
