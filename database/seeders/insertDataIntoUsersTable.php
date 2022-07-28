<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class insertDataIntoUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'Zeeshan Ali',
                'email'=>'zeeshanali@gmail.com',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=> 'Mohammad Samir',
                'email'=>'samir1@gmail.com',
                'password'=>bcrypt('123456')
            ]
            ];
            User::insert($users);
    }
}
