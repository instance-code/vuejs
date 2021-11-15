<template>
  <tr>
    <td>{{ indexInArray + 1 }}</td>
    <td>
      <input
        type="text"
        placeholder="first name"
        v-model="userFormData.firstName"
      />
    </td>
    <td>
      <input
        type="text"
        placeholder="last name"
        v-model="userFormData.lastName"
      />
    </td>
    <td>
      <button class="btn btn-remove" @click="removeUserForm">Remove</button>
    </td>
  </tr>
  <!-- <div>
    <input type="text" placeholder="pos" :value="this.indexInArray + 1" disabled>
    <input type="text" placeholder="first name" v-model="userFormData.firstName">
    <input type="text" placeholder="last name" v-model="userFormData.lastName">
    <button class="btn btn-remove" @click="removeUserForm">Remove</button>
  </div> -->
</template>

<script>
export default {
  name: 'FormAddComp',
  data() {
    return {
      userFormData: {
        firstName: "",
        lastName: "",
      },
    };
  },
  props: {
    indexInArray: Number,
  },
  methods: {
    removeUserForm() {
      this.$emit("removeUserForm", this.indexInArray);
    },
  },
  watch: {
    userFormData: {
      handler(newUserFormData) {
        this.$emit("changeFormData", this.indexInArray, newUserFormData);
      },
      deep: true,
    },
  },
};
</script>

<style>
input {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin: 12px 4px;
}
input:focus {
  outline: none;
}
</style>