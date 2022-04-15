<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'akmalrahman@gmail.com',
            'password' => bcrypt('qwertyuiop'),
            'name' => 'Akmal Rahman',
        ])->assignRole('student');

        User::create([
            'email' => 'diaspersada@gmail.com',
            'password' => bcrypt('qwertyuiop'),
            'name' => 'Dias Persada',
        ])->assignRole('student');
        
        User::create([
            'email' => 'dudijun@gmail.com',
            'password' => bcrypt('qwertyuiop'),
            'name' => 'Dudi Junaedi',
        ])->assignRole('admin');
        
        User::create([
            'email' => 'winartititin@gmail.com',
            'password' => bcrypt('qwertyuiop'),
            'name' => 'Titin Winarti',  
        ])->assignRole('teacher');
    }
}
