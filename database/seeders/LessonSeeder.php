<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::insert([
            [ 
                'name' => 'Matematika', 
                'slug' => 'matematika',
                'user_id' => rand(1,4),
                'status' => 'finished'
            ],
            [ 
                'name' => 'Bahasa Indonesia', 
                'slug' => 'bahasa-indonesia',
                'user_id' => rand(1,4),
                'status' => 'not' 
            ],
            [ 
                'name' => 'Bahasa Inggris', 
                'slug' => 'bahasa-inggris',
                'user_id' => rand(1,4),
                'status' => 'pending' 
            ],
            [ 
                'name' => 'Ilmu Pengetahuan Alam', 
                'slug' => 'ilmu-pengetahuan-alam',
                'user_id' => rand(1,4),
                'status' => 'finished' 
            ],
            [ 
                'name' => 'Kimia',
                'slug' => 'kimia', 
                'user_id' => rand(1,4),
                'status' => 'pending' 
            ],
            [ 
                'name' => 'Fisika', 
                'slug' => 'fisika',
                'user_id' => rand(1,4),
                'status' => 'not' 
            ],
            [ 
                'name' => 'Pendidikan Agama Islam', 
                'slug' => 'pendidikan-agama-islam',
                'user_id' => rand(1,4),
                'status' => 'finished' 
            ],
            [ 
                'name' => 'Pendidikan Kewarganegaraan', 
                'slug' => 'pendidikan-kewarganegaraan',
                'user_id' => rand(1,4),
                'status' => 'pending' 
            ],
            [ 
                'name' => 'Ilmu Pengetahuan Sosial', 
                'slug' => 'ilmu=pengetahuan-sosial',
                'user_id' => rand(1,4),
                'status' => 'finished' 
            ],
        ]);
    }
}
