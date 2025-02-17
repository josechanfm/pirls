<template>
  <div class="w-full h-[100vh]" >
    <div class="flex h-full">
      <div class="w-[100px] bg-orange-200">
        <Timer :topic="topic" />
      </div>
      <div class="flex-1 h-full">
        <Content :domain="domain" :tabPages="tabPages" @currentTopic="setCurrentTopic"/>
      </div>
      <div class="w-[300px] pl-5">
        <Task :leads="taskLeads" @leadTo="changeLeadTo"/>
      </div>
    </div>
  </div>
</template>

<script>
import Timer from './timer.vue'; // Adjust the path to the current directory
import Content from './content.vue'; // Adjust the path to the current directory
import Task from './task.vue'; // Adjust the path to the current directory

export default {
  props: ['domain'],
  components: {
    Timer, Content, Task
  },
  data() {
    return {
      tabPages:[
        // {title:'歷史文化',url:'http://icm.org.mo'}
      ],
      taskLeads:[{
          type:'GUIDE',
          leadable: {
            content:'asdfasdfasdf',
            url:null
          }
      }],
      question:null,
      topic:{
        question_count:10,
        leads:[]
      },
      questions: [
        { id: 1, question: 'Question 1', answers: ['ans 1', 'ans 2'] }
      ]
    };
  },
  mounted() {
    this.taskLeads=[{
      type:'GUIDE',
      leadable: {
        content:this.domain.content,
        url:null
      }
    }];
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
    },
    setCurrentTopic(topic){      
      this.topic=topic
      this.tabPages=[{title:topic.name, url:topic.url}]
      this.taskLeads[1]=topic.leads[0]
    },
    changeLeadTo(lead){
      if(lead && lead.type=="GUIDE" && lead.leadable.url){
        this.tabPages.push({title:lead.leadable.title, url:lead.leadable.url});
        const leadIndex = this.topic.leads.findIndex(l => l.id==lead.id)
        this.taskLeads.push(this.topic.leads[leadIndex+1])
      }
      if(lead && lead.type=="QUESTION"){
        const leadIndex = this.topic.leads.findIndex(l => l.id==lead.id)
        this.taskLeads.push(this.topic.leads[leadIndex+1])
      }
    }
  },
};
</script>

<style>
body {
  margin: 0px !important;
}
</style>