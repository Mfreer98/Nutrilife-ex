<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =[
            'name' => 'SuperUser',
            'email' =>'admin@nutrilife.com',
            'password' =>bcrypt('globales'),
            'role_id' => '1'
        ];
       User::create($admin);
    }
}
