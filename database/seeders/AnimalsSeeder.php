<?php

namespace Database\Seeders;

use App\Models\animal_image;
use App\Models\Animals;
use App\Models\image;
use Illuminate\Database\Seeder;

class AnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Colibri
        $animal = Animals::create([
            'name' => 'Colibri',
            'description' => 'Colibri (también llamado Tumineja en el campo colombiano) es un género de aves apodiformes pertenecientes a la subfamilia de los troquilinos (Trochilinae). El género agrupa a cinco especies con una distribución principalmente neotropical.',
            'type' => 'Aves',
        ]);
        $image = image::create([
            'image' => 'colibries-2.jpg1637546708.jpg',
        ]);
        animal_image::create([
            'image_id' => $image->id,
            'animals_id' => $animal->id,
        ]);
        $image = image::create([
            'image' => 'pajaro-azul-e1563758291533.jpg1637546708.jpg',
        ]);
        animal_image::create([
            'image_id' => $image->id,
            'animals_id' => $animal->id,
        ]);
        //Elefante
        $animal = Animals::create([
            'name' => 'Elefante',
            'description' => 'Los elefantes o elefántidos (Elephantidae) son una familia de mamíferos placentarios del orden Proboscidea. Antiguamente se clasificaban, junto con otros mamíferos de piel gruesa, en el orden, ahora inválido, de los paquidermos (Pachydermata). Existen hoy en día tres especies y diversas subespecies. Entre los géneros extintos de esta familia destacan los mamuts.',
            'type' => 'Mamífero',
        ]);
        $image = image::create([
            'image' => '7ozyekgso2_Medium_WW2122503.jpg1638135316.jpg',
        ]);
        animal_image::create([
            'image_id' => $image->id,
            'animals_id' => $animal->id,
        ]);
        $image = image::create([
            'image' => '2928.600x450.jpg1638135316.jpg',
        ]);
        animal_image::create([
            'image_id' => $image->id,
            'animals_id' => $animal->id,
        ]);

    }
}
