<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:end-0 p-6 text-end z-10">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>

                <Link v-if="canRegister" :href="route('register')" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link>
            </template>
        </div>

        <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-5">
    <h1 class="text-4xl font-bold mb-8">Mock Exam Platform</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-2xl font-semibold mb-2">PIRLS</h2>
        <p class="text-gray-700">
          PIRLS（國際閱讀素養研究）是一項旨在評估小學四年級學生閱讀理解能力的國際性研究。它不僅評估學生的閱讀技能，還分析學生的背景和學習環境對閱讀表現的影響。
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-2xl font-semibold mb-2">TIMSS</h2>
        <p class="text-gray-700">
          TIMSS（國際數學與科學研究）針對四年級和八年級學生的數學和科學學習進行評估。該研究提供各國學生的學習成果數據，幫助教育機構改進教學方法。
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-2xl font-semibold mb-2">PISA</h2>
        <p class="text-gray-700">
          PISA（國際學生評估項目）針對15歲學生的國際評估，重點在於數學、科學和閱讀理解。它旨在評估學生在真實生活中應用知識和技能的能力，並提供各國教育系統的比較數據。
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
        <h2 class="text-2xl font-semibold mb-2">OTHER</h2>
        <p class="text-gray-700">
          其他標準化考試包括各種針對不同年級和學科的測試，旨在評估學生的學術能力和學習成就。這些考試有助於了解學生在不同領域的表現，並提供改進教育的依據。
        </p>
      </div>
    </div>
  </div>
  
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
