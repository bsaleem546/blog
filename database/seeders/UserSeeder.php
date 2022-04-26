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
        for ($i = 0; $i < 20; $i++){
            User::create([
                'name' => 'ABC '.$i,
                'email' => 'ABC'.$i.'@email.com',
                'password' => bcrypt('user1234')
            ]);
        }
    }
}
