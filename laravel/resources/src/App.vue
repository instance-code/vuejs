<template>
  <div class="container">
    <h1>Test</h1>
    <table class="table table-bordered" id="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Họ</th>
          <th>Tên</th>
          <th>
            <button @click.prevent="addRow" class="btn btn-primary">Add</button>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(user, index) in users" :key="index">
          <td>{{ index + 1 }}</td>
          <td>
            <input
              type="text"
              class="form-control"
              v-model="user.firstName"
              placeholder="Nhập tên họ"
            />
          </td>
          <td>
            <input
              type="text"
              class="form-control"
              v-model="user.lastName"
              placeholder="Nhập tên"
            />
          </td>
          <td>
            <button
              @click.prevent="remove(index)"
              :disabled="disable"
              class="btn btn-danger"
            >
              Remove
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary pull-left" @click.prevent="save">
          Save
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: [
        {
          position: 1,
          firstName: "",
          lastName: "",
        },
      ],
    };
  },

  computed: {
    disable() {
      return this.users.length === 1 ? 1 : 0;
    },
  },

  methods: {
    addRow() {
      this.users.push({
        position: this.users.length + 1,
        firstName: "",
        lastName: "",
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
