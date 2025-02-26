<!-- src/components/Timer.vue -->
<template>
    <div class="px-5 h-full bg-orange-400">
      <div class="h-16 text-center bg-orange-200">
        ePirls中文樣題 - 澳門文化專題
      </div>
      <div class="mt-5 bg-white">
        <div class="p-5">
          <a-tabs v-model:activeKey="activeKey" type="card">
            <a-tab-pane key="default" tab="數位閱讀學習平台">
              <div v-for="topic in domain.topics">
                <p>
                  <a @click="selectTopic(topic)">{{ topic.url }}</a><br/>
                  {{ topic.name }}<br/>
                  {{ topic.content }}
                </p>
              </div>
            </a-tab-pane>
              <a-tab-pane v-for="(tabPage, tpId) in tabPages" :key="tpId" :tab="tabPage.title">
                <div class="relative">
                  <div class="absolute left-[-10px] w-full h-[1000px]" style="z-index:100"></div>
                    <embed type="text/html" :src="tabPage.url" class="h-[1000px] w-full">
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
    props:['domain','tabPages'],
    data() {
      return {
        activeKey:'default',
      };
    },
    computed: {
    },
    mounted() {
    },
    watch: {
      tabPages: {
            immediate: true, // Ensure it runs on initial render
            handler(newTabPages) {
                // Set activeKey to the last tab if there are tabPages
                if (newTabPages && newTabPages.length > 0) {
                    this.activeKey = newTabPages.length-1; // Set to the last tab index
                }
              console.log(newTabPages, this.activeKey)
            },
            deep:true
        },
    },
    methods: {
      selectTopic(topic){
        this.$emit('currentTopic', topic); // Emit the value to the parent

      },
      
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here */
  </style>