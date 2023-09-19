<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'phone' => substr($this->faker->phoneNumber, 0, 15),
            'email' => $this->faker->unique()->safeEmail(),
            'date_de_naissance' => $this->faker->dateTimeBetween('-100 years', '-16 years')->format('Y-m-d'),
            'ville_id' => Ville::inRandomOrder()->first()->id
        ];
    }
}
