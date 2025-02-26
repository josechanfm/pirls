<!-- src/components/Timer.vue -->
<template>
  <div>
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
    </a-card>
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