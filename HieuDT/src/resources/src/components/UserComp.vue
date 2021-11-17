<template lang="">
   <table class="table table-striped ">
  <thead  >
    <tr>
      <th scope="col">Created</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users" :key="user.id">
        <td>{{user.created_at}}</td>
      <td>{{user.email}}</td>
      <td>{{user.name}}</td>
      
    </tr>
   
  </tbody>
</table>
</template>
<script>
import { onMounted, ref } from "vue";
import RepositoryFactory from "../repositories/RepositoryFactory.js";

const UserRepository = RepositoryFactory.get("users");
export default {
  setup() {
    const users = ref([]);
   
    async function fetchUsers (){
        const res = await UserRepository.get()
        users.value = res.data;
    }
    onMounted(() => {
         fetchUsers();
    })
   

    return {
      users
      
    };
  },
};
</script>
<style lang="">
</style>