<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'role_id' => 1,
            'gender_id' => 1,
            'first_name' => 'Ahmad',
            'last_name' => 'Alvaro',
            'email' => 'zemar.alvaro@gmail.com',
            'display_picture_link' => 'ProfilePictures/PFP_Nez.png',
            'password' => bcrypt('Alvaro12345')
        ]);
        Account::create([
            'role_id' => 2,
            'gender_id' => 1,
            'first_name' => 'Admin',
            'last_name' => 'istrator',
            'email' => 'admin@gmail.com',
            'display_picture_link' => 'ProfilePictures/PFP_Nez.png',
            'password' => bcrypt('123456')
        ]);
    }
}
