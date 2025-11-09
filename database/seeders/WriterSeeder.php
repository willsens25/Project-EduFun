<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        Writer::create([
            'name' => 'Raka Putra Wicaksono',
            'slug' => 'raka-putra-wicaksono',
            'specialty' => 'Spesialis Interactive Multimedia',
            'image' => 'raka.png'
        ]);

        Writer::create([
            'name' => 'Sabrina (Software Eng)', // Contoh nama dari Figure 1
            'slug' => 'sabrina',
            'specialty' => 'Spesialis Software Engineering',
            'image' => 'sabrina.jpg'
        ]);

        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'slug' => 'bia-mecca-annisa',
            'specialty' => 'Spesialis Data Science',
            'image' => 'bia.jpg'
        ]);
    }
}
