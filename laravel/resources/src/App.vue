<template>
  <div id="app">
    <center> <h1> NGUYỄN VIỆT TÙNG </h1> </center>
    <!-- <Calculator msg="Calculator" /> -->
    <AddForm msg="Add form" /> 
  </div>
</template>
 
<script>
// import Calculator from './components/Calculator.vue'
import AddForm from './components/AddForm.vue'

export default {
  name: 'App',
  components: {
    //Calculator,
    AddForm
  }
}
</script>

