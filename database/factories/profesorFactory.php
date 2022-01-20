<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class profesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name1 = $this->faker->unique->firstName;
        $name2 = $this->faker->unique->lastName;
        $name  = $name1 .' '.$name2;
        $descripcion1 = '<p>'.$this->faker->text(1000).'</p>';
        $descripcion2 = '<p>'.$this->faker->text(1000).'</p>';


        return [
        
        'nombre' => $name,
        'introduccion' => $this->faker->text(500),
        'descripcion' => $descripcion1 . $descripcion2,
        'linkedin' => 'https://www.linkedin.com/in/pabloriopelliza/',
        'trabajos' => $this->faker->sentence(),
        'estudios' => $this->faker->sentence()
        ];
    }
}
