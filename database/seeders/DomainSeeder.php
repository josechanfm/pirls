<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Domain;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Domain::create([
            "area"=>"LOCAL_CULTURE",
            "name"=>"澳門本土文化",
            "content"=>"歡迎你加入我們一起學習,讓我們一起學習澳門文化遺產。"
        ]);
    }
}
