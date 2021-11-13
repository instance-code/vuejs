<template>
  <div id="app">
    <Calculator />
    <TodoApp />

  </div>
</template>

<script>
import Calculator from './components/Calculator.vue'
import TodoApp from './components/TodoApp.vue'

export default {
  name: 'app',
  components: {
    Calculator,
    TodoApp,

  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
