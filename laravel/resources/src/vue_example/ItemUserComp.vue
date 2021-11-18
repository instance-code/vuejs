<template>
  <tr>
    <td>{{ indexInArray + 1 }}</td>
    <td>{{ userData.firstName }}</td>
    <td>{{ userData.lastName }}</td>
    <td><button class="btn btn-remove" @click="removeUser">Remove</button></td>
  </tr>
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