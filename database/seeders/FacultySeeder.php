<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ["code"=>"FAS","name_zh"=>"應用科學學院","name_en"=>"Faculty of Applied Sciences","name_pt"=>""],
            ["code"=>"FHSS1","name_zh"=>"健康科學及體育學院","name_en"=>"Faculty of Health Sciences and Sports","name_pt"=>""],
            ["code"=>"FLT","name_zh"=>"語言及翻譯學院","name_en"=>"Faculty of Languages and Translation","name_pt"=>""],
            ["code"=>"FAD","name_zh"=>"藝術及設計學院","name_en"=>"Faculty of Art and Design","name_pt"=>""],
            ["code"=>"FHSS2","name_zh"=>"人文及社會科學學院","name_en"=>"Faculty of Humanities and Social Sciences","name_pt"=>""],
            ["code"=>"FB","name_zh"=>"管理科學學院","name_en"=>"Faculty of Business","name_pt"=>""],
        ];
        foreach($data as $d){
            Faculty::create($d);
        }
    }
}
