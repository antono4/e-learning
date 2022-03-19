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
            [ 'name' => 'Matematika' ],
            [ 'name' => 'Bahasa Indonesia' ],
            [ 'name' => 'Bahasa Inggris' ],
            [ 'name' => 'Ilmu Pengetahuan Alam' ],
            [ 'name' => 'Kimia' ],
            [ 'name' => 'Fisika' ],
            [ 'name' => 'Pendidikan Agama Islam' ],
            [ 'name' => 'Pendidikan Kewarganegaraan' ],
            [ 'name' => 'Ilmu Pengetahuan Sosial' ],
        ]);
    }
}
