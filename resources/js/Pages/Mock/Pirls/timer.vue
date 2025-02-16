<!-- src/components/Timer.vue -->
<template>
    <div class="bg-amber-500 m-2 h-16 flex items-center justify-center">
        <div class="text-center">
            <div>Time</div>
            <div>{{ formattedTime }}</div>
        </div>
    </div>
    <div class="text-center">
        <div v-for="i in topic.question_count">
            <a-button class="w-12">{{ i }}</a-button>
        </div>
    </div>

</template>

  <script>

  export default {
    props:['topic'],
    data() {
      return {
        time: 0,
        interval: null,
      };
    },
    computed: {
      formattedTime() {
        const hours = String(Math.floor(this.time / 3600)).padStart(2, '0');
        const minutes = String(Math.floor((this.time % 3600) / 60)).padStart(2, '0');
        const seconds = String(this.time % 60).padStart(2, '0');
        return `${hours}:${minutes}:${seconds}`;
      },
    },
    mounted() {
      this.startTimer();
    },
    beforeDestroy() {
      clearInterval(this.interval);
    },
    methods: {
      startTimer() {
        this.interval = setInterval(() => {
          this.time++;
        }, 1000);
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here */
  </style>