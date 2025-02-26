<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                歡迎使用您的 PIRLS 模擬測試系統！
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                國際閱讀素養進展研究（PIRLS）是一項大規模研究，旨在監測和比較參與國家/地區四年級學生的閱讀理解成績。它提供資訊來追蹤閱讀表現的不同面向隨時間的變化。此外，PIRLS
                還收集背景信息，讓參與的國家/地區能夠檢查學生的學習成果與家庭、學校和課堂環境之間的關係。教育學院電子技術研究中心（FED）獲澳門特別行政區教育局指定為該中心在澳門的執行機構。 ETARC 將與學校合作監督
                PIRLS 2026 評估的管理、處理和評分。此外，ETARC將依照澳門特別行政區教育及福利局的指導和監督，負責在澳門報告和傳播PIRLS 2026的研究結果。
            </p>
        </div>

        <div class="flex flex-col items-center min-h-screen bg-gray-100 p-5">
            <h1 class="text-4xl font-bold mb-8">Mock Exam Platform</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="/member/mock/pirls"
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <div>
                        <h2 class="text-lg font-semibold">PIRLS</h2>
                        <p class="text-gray-700">評估小學四年級學生閱讀理解能力。</p>
                    </div>
                </a>
                <a href="#timss"
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <div>
                        <h2 class="text-lg font-semibold">TIMSS</h2>
                        <p class="text-gray-700">針對四年級和八年級學生的數學和科學評估。</p>
                    </div>
                </a>
                <a href="#pisa"
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <div>
                        <h2 class="text-lg font-semibold">PISA</h2>
                        <p class="text-gray-700">針對15歲學生的國際評估。</p>
                    </div>
                </a>
                <a href="#other"
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-purple-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <div>
                        <h2 class="text-lg font-semibold">OTHER</h2>
                        <p class="text-gray-700">各種標準化考試，評估學生的學術能力。</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</template>
