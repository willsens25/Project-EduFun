<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // --- KATEGORI INTERACTIVE MULTIMEDIA (ID: 1) ---
        Post::create([
            'category_id' => 1,
            'writer_id' => 1, // Raka
            'title' => 'Human and Computer Interaction',
            'slug' => 'human-and-computer-interaction',
            'image' => 'HCI.jpg',
            'excerpt' => 'Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan...',
            'body' => '<p>Human-Computer Interaction (HCI) adalah studi tentang bagaimana manusia berinteraksi dengan komputer dan sistem komputasi.</p>
            <p>Secara lebih luas, HCI adalah bidang studi multidisiplin yang berfokus pada desain, evaluasi, dan implementasi sistem komputasi interaktif yang digunakan oleh manusia, serta mempelajari fenomena utama yang melingkupinya.</p>',
            'published_at' => now()
        ]);

        Post::create([
            'category_id' => 1,
            'writer_id' => 1,
            'title' => 'User Experience',
            'slug' => 'user-experience',
            'image' => 'UX.jpg',
            'excerpt' => 'User Experience (UX) adalah apa yang dirasakan pengguna saat berinteraksi dengan produk...',
            'body' => '<p>User Experience (UX) adalah apa yang dirasakan pengguna saat berinteraksi dengan produk, sistem, atau layanan. Ini adalah istilah yang sangat luas yang mencakup keseluruhan perjalanan dan persepsi seseorang mulai dari emosi, keyakinan, preferensi, persepsi, hingga respons fisik dan psikologis yang terjadi sebelum, selama, dan setelah penggunaan.</p>',
            'published_at' => now()->subDay() // Sehari sebelumnya
        ]);

        Post::create([
            'category_id' => 1,
            'writer_id' => 1,
            'title' => 'User Experience for Digital Immersive Technology',
            'slug' => 'ux-for-digital-immersive-technology',
            'image' => 'Immersive-UX.jpg',
            'excerpt' => 'Membahas UX khusus untuk teknologi AR/VR dan immersive...',
            'body' => '<p>Membahas UX khusus untuk teknologi AR/VR dan immersive membawa kita ke level yang jauh lebih kompleks daripada UX tradisional untuk web atau aplikasi mobile. Ini adalah bidang yang sering disebut sebagai "Spatial UX" (UX Spasial) atau "Immersive Design". Jika UX tradisional berfokus pada interaksi di layar 2D (datar), UX Immersive berfokus pada bagaimana pengguna "ada" (exist), bergerak (move), dan berinteraksi (interact) di dalam sebuah lingkungan 3D yang mengelilingi mereka.</p>',
            'published_at' => now()->subDays(2)
        ]);

        // --- KATEGORI SOFTWARE ENGINEERING (ID: 2) ---
        Post::create([
            'category_id' => 2,
            'writer_id' => 2, // Sabrina
            'title' => 'Pattern Software Design',
            'slug' => 'pattern-software-design',
            'image' => 'PSD.jpg',
            'excerpt' => 'Design Pattern adalah solusi umum yang dapat digunakan kembali untuk masalah yang sering terjadi...',
            'body' => '<p>Design Pattern adalah solusi umum yang dapat digunakan kembali untuk masalah yang sering terjadi dalam konteks desain software (perangkat lunak). Ini bukan kode jadi yang bisa langsung Anda salin-tempel. Anggaplah ini sebagai cetak biru (blueprint) atau resep yang telah teruji. Resep: Sebuah resep kue memberi tahu Anda bahan-bahannya, langkah-langkahnya (kocok telur, lipat adonan), dan pendekatannya untuk memecahkan masalah ("bagaimana membuat kue yang mengembang"). Design Pattern: Sebuah design pattern memberi tahu Anda komponen-komponennya (kelas, antarmuka), hubungannya, dan pendekatannya untuk memecahkan masalah ("bagaimana cara membuat objek yang hanya boleh ada satu di seluruh sistem").
            Anda (sang developer) yang harus mengimplementasikan resep tersebut menggunakan "dapur" dan "bahan" spesifik Anda (yaitu, bahasa pemrograman pilihan Anda, seperti Java, Python, C#, atau PHP).</p>',
            'published_at' => now()
        ]);

        Post::create([
            'category_id' => 2,
            'writer_id' => 2,
            'title' => 'Agile Software Development',
            'slug' => 'agile-software-development',
            'image' => 'ASD.jpg',
            'excerpt' => 'Agile adalah metodologi pengembangan perangkat lunak yang iteratif...',
            'body' => '<p>Agile adalah metodologi pengembangan perangkat lunak yang iteratif dan inkremental, di mana kebutuhan dan solusi dievaluasi secara kolaboratif dan adaptif. Secara sederhana, Agile adalah filosofi atau mindset untuk mengelola proyek yang mengutamakan fleksibilitas dan kecepatan di atas perencanaan yang kaku.</p>',
            'published_at' => now()->subDay()
        ]);
    }
}
