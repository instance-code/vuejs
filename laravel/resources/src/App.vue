<template>
    <div id="app">
        <Todos />
        <router-link :to="{ name: 'login' }">login</router-link>
        <hr />
        <router-link :to="{ name: 'signup' }">Signup</router-link>
    </div>
</template>

<script>
import Todos from "./components/Todos";

export default {
    name: "App",
    components: { Todos },
    data() {
        return {
            show: true,
        };
    },
};
</script>

<style></style>
