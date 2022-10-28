<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $food = [
            
            'name' => "",
            'carbs' => "",
            'protein' => "",
            'fat' => "",
            'calories' => "",
            'is_active' => "",
        ];
        Food::create($food);
    }
}