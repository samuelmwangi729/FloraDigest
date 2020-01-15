<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'Site Admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('P!@#four5sam'),
            'admin'=>'1',
            'status'=>'1',
            'level'=>'Administrator'
        ]);
        App\User::create([
            'name'=>'user User',
            'email'=>'samuelmwasngi729@gmail.com',
            'password'=> bcrypt('P!@#four5sam'),
            'admin'=>'0',
            'status'=>'0',
            'level'=>'User'
        ]);
        App\User::create([
            'name'=>'Bloger bloger',
            'email'=>'bloger@bloger.com',
            'password'=> bcrypt('P!@#four5sam'),
            'admin'=>'0',
            'status'=>'0',
            'level'=>'Blogger'
        ]);
        App\User::create([
            'name'=>'Buyer buyer',
            'email'=>'admins@admin.com',
            'password'=> bcrypt('P!@#four5sam'),
            'admin'=>'0',
            'status'=>'0',
            'level'=>'Buyer'
        ]);
    }
}
