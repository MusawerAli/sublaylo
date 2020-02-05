<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  'Musawer',
            'email' =>  'pakjalihouse@gmail.com',
            'password'  =>  Hash::make('admin123'),
            'contact'   =>  '+923336513516',
            'remember_token'    =>  str_random(10)
        ]);
    }
}
