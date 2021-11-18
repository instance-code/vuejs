<template>
  <tr>
    <td>{{ index + 1 }}</td>
    <td>
      <input
        v-model="params[index].firstName"
        type="text"
        placeholder="Nhập họ"
      />
    </td>
    <td>
      <input
        v-model="params[index].lastName"
        type="text"
        placeholder="Nhập tên"
      />
    </td>
    <td>
      <button class="btn btn-danger" v-on:click="removeTr(index)">
        Remove
      </button>
    </td>
  </tr>
</template>

<script>
export default {
  name: "FormInput",
  data() {
    return {};
  },
  props: {
    index: {
      type: Number,
    },
    params: {
      type: Array,
    },
  },
  methods: {
    removeTr(index) {
      this.$emit("removeTr", index);
    },
  },
};
</script>

<style>
</style>