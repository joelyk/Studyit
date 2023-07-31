<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'title' => $this->faker->sentence,
//'picture' => $this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true),
            'picture' => $this->faker->image('public/storage/images', 400, 300, null, false), // Génère une URL vers une image aléatoire dans le dossier 'public/storage/images'
           //  'picture' => $this->faker->image('storage/images', 400, 300, null, false), // Utilisez 'storage/images' au lieu de 'public/storage/images'
             'content' => $this->faker->paragraph,
             'created_at' => now()

        ];
    }
}
