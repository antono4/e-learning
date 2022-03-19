<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::insert([
            [
                'username' => 'akmalrahman',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Akmal Rahman', 
                'photo' => 'user.jpg', 
                'lesson_id' => rand(1,9), 
            ],
            [
                'username' => 'diaspersada',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Dias Persada', 
                'photo' => 'user.jpg', 
                'lesson_id' => rand(1,9), 
            ],
            [
                'username' => 'dudijun',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Dudi Junaedi', 
                'photo' => 'user.jpg', 
                'lesson_id' => rand(1,9), 
            ],
            [
                'username' => 'winartititin',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Titin Winarti', 
                'photo' => 'user.jpg', 
                'lesson_id' => rand(1,9), 
            ],
        ]);
    }
}
