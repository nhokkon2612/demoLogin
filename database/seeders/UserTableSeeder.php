<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email='dangnhap@gmail.com';
        $user->name='dangnhap';
        $user->password= Hash::make('123456');
        $user->save();

        $user = new User();
        $user->email='namlong@gmail.com';
        $user->name='namlong';
        $user->password= Hash::make('123456');
        $user->save();
        $user = new User();
        $user->email='hackfb@gmail.com';
        $user->name='hackfb';
        $user->password= Hash::make('123456');
        $user->save();
    }

}
