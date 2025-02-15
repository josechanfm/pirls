<template>
  <div class="container">
    <div class="flex">
      <div class="flex-none w-[100px] bg-orange-200">
        <Timer :questions="questions" />
      </div>
      <div class="flex-grow">
        <Content :question="questions[0]"/>
      </div>
    <div class="flex-none w-[300px]">
      <Task :question="questions[0]"/>
    </div>
  </div>
  </div>
</template>

<script>
import Timer from './timer.vue'; // Adjust the path to the current directory
import Content from './content.vue'; // Adjust the path to the current directory
import Task from './task.vue'; // Adjust the path to the current directory

export default {
  components: {
    Timer, Content, Task
  },
  data() {
    return {
      questions:[
        {id:1, question: 'Question 1', answers:['ans 1','ans 2']}
      ]
    };
  },
  mounted(){
    this.generateQuestions()
  },
  methods: {
    generateQuestions() {
      for (let i = 1; i <= 20; i++) {
        this.questions.push({
          id: i,
          question: `Question ${i}`,
          answers: [`ans ${i}-1`, `ans ${i}-2`],
        });
      }
    }
  },
};
</script>

<style>
body{
  margin: 0px!important;
}
</style>