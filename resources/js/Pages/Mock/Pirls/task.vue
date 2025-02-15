<!-- src/components/Timer.vue -->
<template>
    <div class="text-center pl-5 h-full">
      <div class="bg-orange-400 h-full">
        <div class="text-lg h-16 p-5">
          <div class=" bg-yellow-200">
            <div>數位閱讀學習平台</div>
            <div class="text-4xl">任務</div>
          </div>
        </div>
        <div class="p-5 h-full">
            <div class="h-full bg-white">
              <div>Your task is here...</div>
              <div>{{ question.question}}</div>
            </div>
          </div>

      </div>
    </div>

</template>

  <script>

  export default {
    props:['question'],
    data() {
      return {
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