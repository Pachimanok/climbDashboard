<?php

namespace Database\Factories;

use App\Models\profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class cursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dias = $this->faker->randomElement(['Lun y Jue','Mar y Vie','Lun, Mie y Vie',]);
        $horas = $this->faker->randomElement(['18 a 21hs','15 a 19hs','21 a 23hs',]);
        $horario = $dias . ' de '.$horas;
        $descripcion1 = '<p>'.$this->faker->text(1000) .'</p>';
        $descripcion2 = '<p>'.$this->faker->text(1000) .'</p>';
        $descripcion3 = '<p>'.$this->faker->text(1000) .'</p>';

        
        return [
            
            'titulo' =>  $this->faker->unique->sentence(),
            'tipo' => $this->faker->randomElement(['curso','carrera']),
            'descripcion_corta' => $this->faker->text(300),
            'q_clases' =>$this->faker->numberBetween(1, 20),
            'horario' => $horario,
            'inicioCursado' => $this->faker->randomElement(['2022-02-15','2022-03-18','2022-04-01']),
            'descripcion' =>  $descripcion1 .  $descripcion2 .  $descripcion3,
            'precio' => $this->faker->numerify('####.##'),
            'aplica_descuento' => $this->faker->randomElement(['si','no']),
            'descuento'=> $this->faker->numerify('0.##'),
            'profesor_id' => profesor::all()->random()->id
        ];
    }
}
