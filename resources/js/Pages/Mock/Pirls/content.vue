<!-- src/components/Timer.vue -->
<template>
    <div class="text-center px-5 h-full bg-orange-400">
      <div class="h-16 bg-orange-200 flex items-center justify-center">
        ePirls中文樣題 - 台灣原住民文化
      </div>
      <div class="mt-5 bg-white">
        <div class="p-5">
          <a-tabs v-model:activeKey="activeKey">
            <a-tab-pane key="1" tab="數位閱讀學習平台">
              <Question :question="question"/>
            </a-tab-pane>
            <a-tab-pane key="3" tab="題庫">
              <div class="relative">
                <div class="absolute left-[-10px] w-full h-[1000px]" style="z-index:100"></div>
                  <embed type="text/html" src="https://www.wh.mo/cn/site/detail/2" class="h-[1000px] w-full">
              </div>
            </a-tab-pane>
          </a-tabs>
        </div>
      </div>
    </div>

</template>

<script>
import Question from './question.vue'; // Adjust the path to the current directory

  export default {
    components: {
      Question
    },
    props:['question'],
    data() {
      return {
        activeKey:"1"
      };
    },
    computed: {
    },
    mounted() {
    },
    methods: {
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here */
  </style>