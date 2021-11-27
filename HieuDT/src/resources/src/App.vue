<template >
  <div id="app">
    <Header></Header>
    
        <router-view></router-view>
      

   
  </div>
</template>c
<script>
import Header from "./components/HeaderComp.vue";
export default {
  components: { Header },
};
</script>
<style lang="">
</style>