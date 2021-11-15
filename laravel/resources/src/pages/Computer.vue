<template>
  <div class="container">
    <h1>Calculator</h1>
    <Calculator />
  </div>
</template>

<script>
import Calculator from "@/components/Calculator.vue";

export default {
  components: { Calculator },
  name: "Computer",
};
</script>

<style scoped>
h1 {
    text-align: center;
}
</style>