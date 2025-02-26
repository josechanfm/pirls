<!-- src/components/Timer.vue -->
<template>
    <div class="text-center h-full w-full">
      <div class="bg-orange-400 h-full">
        <div class="text-lg h-16 p-5">
          <div class=" bg-yellow-200">
            <div>數位閱讀學習平台</div>
            <div class="text-4xl">任務</div>
          </div>
        </div>
        <div class="p-5 h-full">
            <div class="h-full bg-white">
              <template v-for="(lead, i) in leads">
                <div :class="((leads.length - 1) === i) ? '' : 'disabled'" class="flex items-start p-4 border-b">
                  <!-- Avatar Image -->
                  <div class="flex-shrink-0 mr-4">
                    <img v-if="lead.type=='GUIDE'" src="/images/avatar_teacher.png" alt="Avatar" class="w-12 h-12 rounded-full" />
                    <img v-else src="/images/avatar_student.png" alt="Avatar" class="w-12 h-12 rounded-full" />
                  </div>
                  <!-- Content -->
                  <div class="flex-grow">
                    <div class="">
                      {{ lead.leadable.content }}
                      <template v-if="lead.leadable.url">
                        <a @click="leadTo(lead)" class="text-blue-500 hover:underline">Let's go</a>
                      </template>
                      <div v-if="lead.leadable.type=='TEXTAREA'">
                          <a-textarea lead.leadable.answer_a/>
                          <a-button @click="studentResponse(lead)">遞交</a-button>
                      </div>
                      <div v-else-if="lead.leadable.type=='SINGLE'">
                        <a-radio-group v-model:value="lead.leadable.answer_a" :options="lead.leadable.options"/>
                          <a-button @click="studentResponse(lead)">遞交</a-button>
                      </div>
                    </div>
                  </div>
                </div>
              </template>
            </div>
          </div> 
      </div>
    </div>
</template>

  <script>
import { countdownProps } from 'ant-design-vue/es/statistic/Countdown';
import { UserOutlined } from '@ant-design/icons-vue';

  export default {
    components:{
      UserOutlined
    },
    props:['leads'],
    data() {
      return {
      };
    },
    computed: {
    },
    mounted() {
    },
    methods: {
      leadTo(lead){
        this.$emit('leadTo',lead);
      },
      studentResponse(lead){
        this.leadTo(lead)
      }

    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here */
  .disabled{
    pointer-events: none; /* Prevent any interactions */
    color: gray; /* Change text color to gray */
    opacity: 0.5; /* Make text appear lighter */
  }
  </style>