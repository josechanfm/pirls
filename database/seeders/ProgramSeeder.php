<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculty=Faculty::where('code','FAS')->first();
        //博士學位課程
        $data=[
            ["code"=>"","name_zh"=>"計算機應用技術博士學位課程（適用於2023/2024學年入學或以後）","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"計算機應用技術博士學位課程（適用於2022/2023學年入學或以前）","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"人工智能藥物發現博士學位課程","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"教育技術與創新博士學位課程","name_en"=>"","name_pt"=>""],
        ];
        $faculty->degrees()->where('code','PHD')->first()->programs()->createMany($data);
        // //碩士學位課程
        $data=[
            ["code"=>"","name_zh"=>"大數據與物聯網碩士學位課程（適用於2023/2024學年入學或以後）","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"大數據與物聯網碩士學位課程（適用於2022/2023學年入學或以前）","name_en"=>"","name_pt"=>""],
        ];
        $faculty->degrees()->where('code','MST')->first()->programs()->createMany($data);
        // //學士學位課程
        $data=[
            ["code"=>"","name_zh"=>"電腦學理學士學位課程（適用於2023/2024學年入學或以後）","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"電腦學學士學位課程（適用於2022/2023學年入學或以前）","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"人工智能理學士學位課程","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"中國與葡語系國家經貿關係學士學位課程（適用於2023/2024學年入學或以後）","name_en"=>"","name_pt"=>""],
            ["code"=>"","name_zh"=>"中國與葡語系國家經貿關係學士學位課程（適用於2022/2023學年入學或以前）","name_en"=>"","name_pt"=>""],
        ];
        $faculty->degrees()->where('code','BCH')->first()->programs()->createMany($data);
        // //合辦課程
        $data=[
            ["code"=>"","name_zh"=>"科英布拉大學 - 資訊科技博士學位課程","name_en"=>"","name_pt"=>""],
        ];
        $faculty->degrees()->where('code','COO')->first()->programs()->createMany($data);
    }
}
