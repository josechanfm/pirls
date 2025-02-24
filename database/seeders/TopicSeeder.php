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
            ["active"=>"1","category"=>"link","url"=>"https://www.library.gov.mo/zh-hant/branch-libraries/central-library/Central-library","name"=>"澳門公共圖書館-分館網絡","content"=>""],
            ["active"=>"1","category"=>"link","url"=>"https://www.library.gov.mo/zh-hant/service-guide/reader-guide/loan-service","name"=>"澳門公共圖書館-讀者指南","content"=>""],
            ["active"=>"1","category"=>"link","url"=>"https://healthylife.ias.gov.mo/about/genetic","name"=>"健康生活教育","content"=>"澳門的健康生活教育課程由澳門特區政府社會工作局預防藥物濫用處負責推行，自2000年9月起投入運作，每年服務約二萬名學生。現時設有三個課室，課室的設置除了紐西蘭生活教育的設備外，更加設了具備先進技術的多媒體設備以配合本地化課程的發展。除課程外，每年亦配合預防藥物濫用處舉辦社區宣傳推廣活動，倡導兒童及青少年選擇過健康生活。"],
            ["active"=>"1","category"=>"link","url"=>"https://macaufamilylife.com/","name"=>"澳門家庭教育資訊","content"=>""],
            ["active"=>"1","category"=>"link","url"=>"https://www.dsedj.gov.mo/cdl/cdlIndex.php?c=centerPresentation.html","name"=>"語言推廣中心","content"=>""],
            
        ];
        $domain=Domain::where('area','education')->first();
        $domain->topics()->createMany($data);

        $data=[
            ["active"=>"1","category"=>"link","url"=>"https://www.wh.mo/cn/content/site/","name"=>"澳門歷史城區","content"=>"澳門歷史城區是一片以澳門舊城區為核心的歷史街區，其間以相鄰的廣場和街道連接而成，包括22座建築及8個廣場前地。"],
            ["active"=>"1","category"=>"link","url"=>"https://www.culturalheritage.mo/list/9","name"=>"文物建築","content"=>""],
            ["active"=>"1","category"=>"link","url"=>"http://culturalheritage.mo/detail/101789","name"=>"非物質文化遺產","content"=>"“非物質文化遺產”是指被社群、群體及在特定情況下被個人視為文化遺產組成部分的各種實踐、觀念表述、表現形式、知識、技能以及相關的工具、物件、手工藝品及文化空間；有關文化遺產世代相傳，被社群、群體因應周圍環境、與自然的互動及其歷史不斷地再創造，為社群、群體及個人孕育認同感和持續感。"],            
            ["active"=>"1","category"=>"link","url"=>"https://www.culturalheritage.mo/detail/101766","name"=>"澳門的考古工作","content"=>"現代的考古學是根據古代人類通過各種活動遺留下來的實物，以研究人類古代社會的歷史的一門科學。從古人類製造的石器、陶器、瓷器、飾物、工具等遺物、與人類活動相關的動物骨骼、炭、植物花粉等生態遺留，到各式各樣與人類行為活動相關的痕跡（遺跡），都是考古學所研究的對象。"],
            ["active"=>"1","category"=>"link","url"=>"https://www.gcs.gov.mo/news/list/zh-hant/feature/?4","name"=>"專題特寫","content"=>""],
            ["active"=>"1","category"=>"link","url"=>"https://www.gcs.gov.mo/news/detail/zh-hant/N24KA8BS0n?topic=%E6%96%BD%E6%94%BF%E7%89%B9%E5%AF%AB","name"=>"專題新聞","content"=>""],
            
            
            

            ["active"=>"0","category"=>"link","url"=>"https://www.enjoymacao.mo","name"=>"澳門活動網 享澳門","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://www.macaucci.gov.mo","name"=>"澳門文創網","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://www.icm.gov.mo/CJMM","name"=>"澳門青年音樂比賽","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://www.icm.gov.mo/academics/cn/mastersList","name"=>"文化大師系列講座","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://www.prdculture.org.cn","name"=>"粵港澳文化資訊網","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://www.icm.gov.mo/mcrecipes/","name"=>"澳門土生菜食譜全球徵集","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://vr.icm.gov.mo/?lang=cn","name"=>"線上虛擬參觀","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://www.cpcultural.gov.mo/","name"=>"文化遺產委員會 ","content"=>""],
            ["active"=>"0","category"=>"link","url"=>"https://www.ccdc.gov.mo/" ,"name"=>"文化發展諮詢委員會","content"=>""],
        ];
        $domain=Domain::where('area','LOCAL_CULTURE')->first();
        $domain->topics()->createMany($data);

        $data=[
            ["category"=>"link","url"=>"https://nature.iam.gov.mo/c/tree/story","name"=>"一樹一故事","content"=>""],
        ];
        $domain=Domain::where('area','nature')->first();
        $domain->topics()->createMany($data);

    }
}
