<template>
    <div class="dashboard">
      <div class="theCal">
        <Cal></Cal>
      </div>

      <div>
        <Exam></Exam>
      </div>
    </div>
</template>

<script>
  import Cal from './vue_example/Cal.vue'
  import Exam from './vue_example/Exam.vue'
  export default {
    components: {
      Cal,
      Exam,
    }
  }
</script>

<style scoped>

</style>