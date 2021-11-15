<template>
  <div class="container">
    <h1>Tạo Bảng</h1>
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
        <button
          class="btn btn-primary"
          :disabled="saveBtn"
          @click.prevent="save"
        >
          Save
        </button>
      </div>
    </div>
    <teleport to="body">
      <error-alert v-if="inputIsInvalid">
        <h2>Input Is Invalid</h2>
        <p>Please Enter Data</p>
        <button @click="closeAlert">Close</button>
      </error-alert>
    </teleport>
  </div>
</template>

<script>
import ErrorAlert from "./components/ErrorAlert.vue";

export default {
  components: {
    ErrorAlert,
  },
  data() {
    return {
      users: [
        {
          position: 1,
          firstName: "",
          lastName: "",
        },
      ],
      inputIsInvalid: false,
    };
  },

  watch: {
    inputIsInvalid() {
      setTimeout(() => {
        this.inputIsInvalid = false;
      }, 5000);
    },
  },

  computed: {
    disable() {
      return this.users.length === 1 ? 1 : 0;
    },
    saveBtn() {
      return this.users.length === 1 &&
        (this.users["0"].firstName === "" || this.users["0"].lastName === "")
        ? 1
        : 0;
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
      for (let i = 0; i < this.users.length; i++) {
        if (this.users[i].firstName === "" || this.users[i].lastName === "") {
          return (this.inputIsInvalid = true);
        }
      }
      console.log(JSON.parse(JSON.stringify(this.users)));
    },

    closeAlert() {
      this.inputIsInvalid = false;
    },
  },
};
</script>
