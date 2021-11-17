<template >
  <div id="app">
    <Header></Header>
    <transition >
      <keep-alive>
        <router-view class="mx-5"></router-view>
      </keep-alive>
    </transition>

   
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