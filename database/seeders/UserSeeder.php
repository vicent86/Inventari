<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        $admin->assignRole('admin');

        $gerente = User::create([
            'name' => 'gerente',
            'email' => 'gerente@hotmail.com',
            'password' => Hash::make('gerente1234'),
        ]);

        $gerente->assignRole('gerente');

    }
}
