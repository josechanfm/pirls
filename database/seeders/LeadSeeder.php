<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Lead;
use App\Models\Guide;
use App\Models\Question;


class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $topic=Topic::where('name','澳門文化遺產')->first();
        $guide=Guide::create([
            'title'=>'文物點',
            'url'=>'https://www.wh.mo/cn/site/detail/1',
            'content'=>'你選擇了澳門文化遺產。',
        ]);
        $topic->leads()->create([
            'sequence'=>'1',
            'type'=>strtoupper(class_basename($guide)),
            'leadable_type'=>get_class($guide),
            'leadable_id'=>$guide->id
        ]);
        $question=Question::create([
            'type'=>'TEXTAREA',
            'title'=>'題目',
            'content'=>'請寫出三個文物點。',
            'answer_a'=>'Answer a'
        ]);
        $topic->leads()->create([
            'sequence'=>'2',
            'type'=>strtoupper(class_basename($question)),
            'leadable_type'=>get_class($question),
            'leadable_id'=>$question->id
        ]);
        $question=Question::create([
            'type'=>'SINGLE',
            'title'=>'題目',
            'content'=>'媽閣廟最後一次重修擴建後，奠定今天的模樣。是在那一年?',
            'options' => [
                ["value" => "a", "label" => "1851年"],
                ["value" => "b", "label" => "1875年"],
                ["value" => "c", "label" => "1828年"],
                ["value" => "d", "label" => "1888年"]
            ],
        ]);
        $topic->leads()->create([
            'sequence'=>'3',
            'type'=>strtoupper(class_basename($question)),
            'leadable_type'=>get_class($question),
            'leadable_id'=>$question->id
        ]);
        // $topic->leads()->save($guide);
        // $topic->leads()->save($question);
    }
}
