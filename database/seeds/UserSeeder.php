<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)
            ->create([
                "email" => "test@example.com",
            ]);
    }
}
