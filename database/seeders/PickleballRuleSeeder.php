<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\PickleballRule;

class PickleballRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonFile = database_path('seeders/pickleball_rules.json');
        $json=File::get($jsonFile);
        $data=json_decode($json, true);
        //dd($data[0]);
        
        foreach($data as $d){
            $d['correct']=$d['options'][0];
            $d['options']= '["' . implode('","', $d['options']) . '"]';
            PickleballRule::create($d);
        }
        //PickleballRule::createMany($data);

    }
}
