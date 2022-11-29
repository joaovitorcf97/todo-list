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
        User::factory()->create([
            'first_name' => 'João Vitor',
            'last_name' => 'Costa',
            'email' => 'joaovitorcfdev@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(5)
            ->count(5)
            ->create();
    }
}
