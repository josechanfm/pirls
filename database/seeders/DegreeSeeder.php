<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;
use App\Models\Degree;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Faculty of Applied Sciences
        $data=[
            ["code"=>"PDR","name_zh"=>"博士後學位課程","name_en"=>"","name_pt"=>""],
            ["code"=>"PHD","name_zh"=>"博士學位課程","name_en"=>"","name_pt"=>""],
            ["code"=>"MST","name_zh"=>"碩士學位課程","name_en"=>"","name_pt"=>""],
            ["code"=>"BCH","name_zh"=>"學士學位課程","name_en"=>"","name_pt"=>""],
            ["code"=>"COO","name_zh"=>"合辦課程","name_en"=>"","name_pt"=>""],
        ];
        $faculty=Faculty::where('code','FAS')->first();
        $faculty->degrees()->createMany($data);
    }
}
