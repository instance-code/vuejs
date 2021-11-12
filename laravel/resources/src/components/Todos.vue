<template>
  <div class="container">
    <div class="row item-pro">
      <div class="col border col-item text-center">#</div>
      <div class="col border col-item text-center">Tên</div>
      <div class="col border col-item text-center">Họ</div>
      <div class="col col-item">
        <button
          @click.prevent="addR"
          class="btn btn-primary"
          type="button"
          v-on:click="show = true"
        >
          ADD
        </button>
      </div>
    </div>
    <div v-if="show">
      <div class="row item-pro" v-for="(user, index) in users" :key="index">
        <div class="col border col-item text-center">{{ index + 1 }}</div>
        <div class="col border col-item text-center">
          <input
            v-model="user.lastName"
            type="text"
            class="form-control"
            placeholder="Nhập Tên"
            aria-label="Username"
            aria-describedby="addon-wrapping"
          />
        </div>
        <div class="col border col-item text-center">
          <input
            v-model="user.firstName"
            type="text"
            class="form-control"
            placeholder="Nhập Tên"
            aria-label="Username"
            aria-describedby="addon-wrapping"
          />
        </div>
        <div class="col">
          <button
            @click.prevent="remove"
            class="btn btn-danger"
            type="button"
          >
            Remove
          </button>
        </div>
      </div>
    </div>

    <button
      @click.prevent="save"
      class="btn btn-outline-secondary"
      type="button"
    >
      Save
    </button>
  </div>
</template>

<script>
export default {
  name: "Todos",
  data() {
    return {
      show: false,
      users: [
      
      ],
    };
  },
  computed: {
    disable() {
      return this.users.length === 1 ? 1 : 0;
    },
  },
  methods: {
    addR() {
      this.users.push({
        present: this.users.length + 1,
        lastName: "",
        firstName: "",
      });
    },
    remove(index) {
      this.users.splice(index, 1);
    },
    save() {
      console.log(this.users);
    },
  },
};
</script>

<style scoped>
.item-pro {
  margin-top: 20px;
}
</style>
