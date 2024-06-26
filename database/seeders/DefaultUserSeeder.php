<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Javed Ur Rehman', 
            'email' => 'javed@allphptricks.com',
            'password' => Hash::make('javed1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Syed Ahsan Kamal', 
            'email' => 'ahsan@allphptricks.com',
            'password' => Hash::make('ahsan1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Abdul Muqeet', 
            'email' => 'muqeet@allphptricks.com',
            'password' => Hash::make('muqeet1234')
        ]);
        $productManager->assignRole('Product Manager');

        // Creating Application User
        $user = User::create([
            'name' => 'Naghman Ali', 
            'email' => 'naghman@allphptricks.com',
            'password' => Hash::make('naghman1234')
        ]);
        $user->assignRole('User');
    }
}