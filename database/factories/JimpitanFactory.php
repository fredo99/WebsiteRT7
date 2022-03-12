<?php

namespace Database\Factories;

use App\Models\Jimpitan;
use Illuminate\Database\Eloquent\Factories\Factory;

class JimpitanFactory extends Factory
{
    public function definition()
    {
        return [
        'tanggal' => $this->faker->date('Y-m-d','now'),
        'penyetor' => $this->faker->name(),
        'tidaksetor' => $this->faker->name(),
        'jumlahsetoran' => $this->faker->numberBetween(15000, 21000)
        ];
    }
}
