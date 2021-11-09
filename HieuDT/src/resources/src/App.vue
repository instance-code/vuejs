<template >
    <div id="app">
        <Header></Header>
        <transition>
        <router-view class="mx-5" ></router-view>
        </transition>
    </div>
</template>
<script>
import Header from './components/Header.vue'
export default {
    components:{Header},
   
}
</script>
<style lang="">
    
</style>