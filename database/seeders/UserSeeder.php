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
        User::insert([
            [
                'email' => 'akmalrahman@gmail.com',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Akmal Rahman',  
            ],
            [
                'email' => 'diaspersada@gmail.com',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Dias Persada',  
            ],
            [
                'email' => 'dudijun@gmail.com',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Dudi Junaedi',  
            ],
            [
                'email' => 'winartititin@gmail.com',
                'password' => bcrypt('qwertyuiop'),
                'name' => 'Titin Winarti',  
            ],
        ]);
    }
}
