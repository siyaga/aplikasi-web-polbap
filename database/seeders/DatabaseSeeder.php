<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Adi Riyanto',
            'username' =>'adiriyanto',
            'email' => 'Lifeforme@gmail.com',
            'password'=> bcrypt('123456')

        ]);
    }
}
