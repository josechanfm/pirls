<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Domain;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ["category"=>"link","url"=>"https://www.wh.mo/cn/content/site/","name"=>"澳門文化遺產"],
            ["category"=>"link","url"=>"https://www.wh.mo","name"=>"澳門世界遺產"],
            ["category"=>"link","url"=>"https://www.enjoymacao.mo","name"=>"澳門活動網 享澳門"],
            ["category"=>"link","url"=>"https://www.macaucci.gov.mo","name"=>"澳門文創網"],
            ["category"=>"link","url"=>"https://www.icm.gov.mo/CJMM","name"=>"澳門青年音樂比賽"],
            ["category"=>"link","url"=>"https://www.icm.gov.mo/academics/cn/mastersList","name"=>"文化大師系列講座"],
            ["category"=>"link","url"=>"https://www.prdculture.org.cn","name"=>"粵港澳文化資訊網"],
            ["category"=>"link","url"=>"https://www.icm.gov.mo/mcrecipes/","name"=>"澳門土生菜食譜全球徵集"],
            ["category"=>"link","url"=>"https://vr.icm.gov.mo/?lang=cn","name"=>"線上虛擬參觀"],
            ["category"=>"link","url"=>"https://www.cpcultural.gov.mo/","name"=>"文化遺產委員會 "],
            ["category"=>"link","url"=>"https://www.ccdc.gov.mo/" ,"name"=>"文化發展諮詢委員會"],
        ];
        $domain=Domain::where('area','LOCAL_CULTURE')->first();
        $domain->topics()->createMany($data);
    }
}
