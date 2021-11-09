<template lang="">
    <div>
        <h1>
            hello world
        </h1>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data() {
        return {
            posts:[]
        }
    },
    created() {
        this.fetchData();
    },
    methods: {
       async fetchData(){
          const res= await axios.get(`http://localhost:81/api/posts`);
          this.data=res.data
        }
    },

}
</script>
<style lang="">
    
</style>