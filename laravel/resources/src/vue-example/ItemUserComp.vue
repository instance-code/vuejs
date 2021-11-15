<template>
  <tr>
    <td>{{ indexInArray + 1 }}</td>
    <td>{{ userData.firstName }}</td>
    <td>{{ userData.lastName }}</td>
    <td><button class="btn btn-remove" @click="removeUser">Remove</button></td>
  </tr>
  <!-- <div style="text-align: center">
    <input type="text" :value="indexInArray + 1" disabled />
    <input type="text" :value="userData.firstName" disabled />
    <input type="text" :value="userData.lastName" disabled />
    <button class="btn btn-remove" @click="removeUser">Remove</button>
  </div> -->
</template>

<script>
export default {
  props: {
    userData: Object,
    indexInArray: Number,
  },
  methods: {
    removeUser() {
      this.$emit("removeUser", this.indexInArray);
    },
  },
};
</script>

<style>
input {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin: 8px 4px;
}
input:focus {
  outline: none;
}
</style>