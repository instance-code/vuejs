<template>
  <div>
    <router-link to="/calculator">Máy tính</router-link><br>
    <router-link to="/add">AddName</router-link><br>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App',

}
</script>


<style scoped>

</style>
