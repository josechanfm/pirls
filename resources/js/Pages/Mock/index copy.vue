<template>
  <div class="test-container">
    <a-card title="PIRLS Mock Test: Reading Comprehension" style="max-width: 800px;">
      <a-typography>
        <a-typography-paragraph>
          In a small town, there was a beautiful garden filled with colorful flowers. Every spring, the townspeople would gather for a festival to celebrate the blooming of the flowers. 
          Children would play games, and families would enjoy picnics under the trees. The garden was cared for by an elderly woman named Mrs. Thompson, who loved each flower as if it were her own child. 
          She would often tell stories about the flowers and how to take care of them.
        </a-typography-paragraph>
        <a-typography-paragraph>
          One day, a new family moved to the town, and their daughter, Lily, was very curious about the garden. She asked Mrs. Thompson if she could help take care of the flowers. 
          Mrs. Thompson smiled and said, "Of course! Flowers bring joy to everyone, and it's wonderful to share that joy."
        </a-typography-paragraph>
      </a-typography>

      <a-divider />

      <a-form @submit.prevent="handleSubmit">
        <div v-for="(question, index) in questions" :key="index" class="question-container">
          <p class="question-text">Q{{ index + 1 }}: {{ question.text }}</p>
          <a-radio-group v-model="answers[index]" :direction="'vertical'">
            <a-radio v-for="(option, optionIndex) in question.options" :key="optionIndex" :value="option.value" :style="verticleStyle">
              {{ option.label }}
            </a-radio>
          </a-radio-group>
          <p>&nbsp;</p>
        </div>
        <a-form-item>
          <a-button type="primary" html-type="submit" class="submit-button">Submit Answers</a-button>
        </a-form-item>
      </a-form>

      <div v-if="submitted" style="margin-top: 20px;">
        <h3>Your Answers:</h3>
        <div v-for="(answer, index) in answers" :key="index">
          <p>Question {{ index + 1 }}: {{ answer }}</p>
        </div>
      </div>
    </a-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      questions: [
        {
          text: "What did Lily want to do in the garden?",
          options: [
            { value: 'a', label: 'She wanted to play games with her friends.' },
            { value: 'b', label: 'She wanted to help take care of the flowers.' },
            { value: 'c', label: 'She wanted to organize a festival.' },
            { value: 'd', label: 'She wanted to pick flowers to take home.' },
          ],
        },
        {
          text: "What is the main theme of the story?",
          options: [
            { value: 'a', label: 'The importance of friendship.' },
            { value: 'b', label: 'Caring for nature.' },
            { value: 'c', label: 'Celebrating festivals.' },
            { value: 'd', label: 'Learning from elders.' },
          ],
        },
      ],
      answers: [],
      submitted: false,
      verticleStyle: {
        display: 'flex',
        minHeight: '25px',
        lineHeight: '20px',
        marginLeft: '0',
      },
    };
  },
  methods: {
    handleSubmit() {
      this.submitted = true;
      console.log('Submitted answers:', this.answers);
      // Here you can handle form submission, like sending data to your server
    },
  },
};
</script>

<style scoped>
.test-container {
  background-color: #f0f2f5;
  padding: 20px;
  min-height: 100vh;
}

.question-container {
  margin-bottom: 20px;
}

.question-text {
  font-weight: bold;
  color: #333;
}

.submit-button {
  width: 100%;
  background-color: #1890ff;
  color: white;
}

.submit-button:hover {
  background-color: #40a9ff;
  color: white;
}

.a-radio:hover {
  background-color: #e6f7ff;
}
</style>