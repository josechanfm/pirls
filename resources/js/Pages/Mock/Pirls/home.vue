<template>
  <div >
    <template v-for="domain in domains">
      <div>
        <div><inertia-link :href="route('mock.pirls.index',domain)">{{ domain.name }}</inertia-link></div>
        <div>{{ domain.content }}</div>
      </div>
    </template>
  </div>
</template>

<script>

export default {
  props: ['domains'],
  components: {
  },
  data() {
    return {
    };
  },
  mounted() {
  },
  methods: {
  },
};
</script>

<style>
body {
}
</style>