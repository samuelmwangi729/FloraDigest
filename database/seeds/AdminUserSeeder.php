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
            'level'=>'Administrator'
        ]);
    }
}
