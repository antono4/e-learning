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
            [ 'name' => 'Matematika', 'user_id' => rand(1,4) ],
            [ 'name' => 'Bahasa Indonesia', 'user_id' => rand(1,4) ],
            [ 'name' => 'Bahasa Inggris', 'user_id' => rand(1,4) ],
            [ 'name' => 'Ilmu Pengetahuan Alam', 'user_id' => rand(1,4) ],
            [ 'name' => 'Kimia', 'user_id' => rand(1,4) ],
            [ 'name' => 'Fisika', 'user_id' => rand(1,4) ],
            [ 'name' => 'Pendidikan Agama Islam', 'user_id' => rand(1,4) ],
            [ 'name' => 'Pendidikan Kewarganegaraan', 'user_id' => rand(1,4) ],
            [ 'name' => 'Ilmu Pengetahuan Sosial', 'user_id' => rand(1,4) ],
        ]);
    }
}
