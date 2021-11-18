<template>
  <div id="add">
    <button class="btn btn-add" @click="addUserForm">Add</button> |
    <button class="btn btn-save" @click="saveUser">Save</button>

    <h2>Forms({{ formData.length }})</h2>

    <table>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Active</th>
        </tr>
        <FormAddComp
          v-for="i in formData.length"
          :key="'form' + i"
          :indexInArray="i - 1"
          @changeFormData="changeFormData"
          @removeUserForm="removeUserForm"
        />
    </table>

    <h2>Results({{ usersData.length }})</h2>
    <table>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Active</th>

        </tr>
        <ItemUserComp
          v-for="i in usersData.length"
          :key="'item' + i"
          :indexInArray="i - 1"
          :userData="usersData[i - 1]"
          @removeUser="removeUser"
        />
    </table>
  </div>
</template>

<script>
import FormAddComp from "@/vue_example/FormAddComp.vue";
import ItemUserComp from "@/vue_example/ItemUserComp.vue";
export default {
  name: "App",
  components: {
    FormAddComp,
    ItemUserComp,
  },
  data() {
    return {
      usersData: [{ firstName: "Martin", lastName: "Garrix" }],
      formData: [],
    };
  },
  methods: {
    addUserForm() {
      this.formData.push({ firstName: "", lastName: "" });
    },
    removeUserForm(indexInArray) {
      this.formData.splice(indexInArray, 1);
    },
    removeUser(indexInArray) {
      this.usersData.splice(indexInArray, 1);
    },
    changeFormData(pos, newUserFormData) {
      this.formData[pos] = newUserFormData;
    },
    saveUser() {
      this.formData = this.formData.filter((user) => {
        return user.firstName && user.lastName;
      });
      this.usersData = this.usersData.concat(this.formData);
      this.formData = [];
      console.log(this.usersData);
    },
  },
};
</script>

<style>
#add {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
img {
  width: 100px;
}
.done {
  text-decoration: line-through;
}
.btn {
  padding: 8px 16px;
  font-weight: bold;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.btn-add {
  background-color: #3333ff;
}
.btn-save {
  background-color: #05ca05;
}
.btn-remove {
  background-color: #ff3333;
}
table, td, th {
  margin-left: 25%;
  margin-top: 30px;
  margin-bottom: 30px;
  border: 1px solid black;
}
table {
  border-collapse: collapse;
  width: 50%;
}
</style>