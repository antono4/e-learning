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
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Bahasa Indonesia', 
                'slug' => 'bahasa-indonesia',
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Bahasa Inggris', 
                'slug' => 'bahasa-inggris',
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Ilmu Pengetahuan Alam', 
                'slug' => 'ilmu-pengetahuan-alam',
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Kimia',
                'slug' => 'kimia', 
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Fisika', 
                'slug' => 'fisika',
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Pendidikan Agama Islam', 
                'slug' => 'pendidikan-agama-islam',
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Pendidikan Kewarganegaraan', 
                'slug' => 'pendidikan-kewarganegaraan',
                'user_id' => rand(1,4) 
            ],
            [ 
                'name' => 'Ilmu Pengetahuan Sosial', 
                'slug' => 'ilmu=pengetahuan-sosial',
                'user_id' => rand(1,4) 
            ],
        ]);
    }
}
