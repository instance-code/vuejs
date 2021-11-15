<template>
  <div class="col-sm-6">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Họ</th>
          <th>Tên</th>
          <th>
            <button class="btn btn-primary" v-on:click="addTr">Add</button>
          </th>
        </tr>
      </thead>
      <tbody>
        <input-comp
          v-for="(item, index) in params.length"
          :key="index"
          v-bind:index="index"
          v-bind:params="params"
          v-on:removeTr="removeTr" />
      </tbody>
    </table>
    <button class="btn btn-primary" v-on:click="saveData">Save</button>
  </div>
</template>

<script>
import InputComp from "./components/InputComp.vue";
export default {
  name: "app",
  data() {
    return {
      params: [],
    };
  },
  components: {
    InputComp,
  },
  methods: {
    addTr() {
      this.params.push({
        position: this.params.length + 1,
        firstName: "",
        lastName: ""
      });
    },
    removeTr(index) {
      this.params.splice(index, 1);
    },
    saveData() {
      console.log(this.params);
    },
  },
};
</script>

<style>
body {
  font-size: 20px;
}
</style>
