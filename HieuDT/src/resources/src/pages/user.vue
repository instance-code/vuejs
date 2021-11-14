<template >
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-1">#</th>
          <th class="col">First</th>
          <th class="col">Last</th>
          <th class="col-1">
            <button type="button" class="btn btn-primary" @click.prevent="add">
              ADD
            </button>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="param in params" :key="param.id">
          <th class="row-1">{{ param.position }}</th>
          <td>{{ param.firstName }}</td>
          <td>{{ param.lastName }}</td>
          <td class="row-1">
            <button
              type="button"
              class="btn btn-danger"
              @click.prevent="deleteFromParams(param.position)"
            >
              Delete
            </button>
          </td>
        </tr>

        <tr v-for="n in arrayAdd" :key="n.position">
          <th class="row-1">{{ n.position }}</th>
          <th><input type="text" v-model="n.firstName" /></th>
          <th><input type="text" v-model="n.lastName" /></th>
          <th class="row-1">
            <button
              type="button"
              class="btn btn-danger"
              @click.prevent="deleteU(positionCurrent + n)"
            >
              DELETE
            </button>
          </th>
        </tr>
      </tbody>
      <button type="button" class="btn btn-success" @click.prevent="save">
        Save
      </button>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      //data display
      params: [
        //   {
        //       position:1,
        //       firstName:'Do',
        //       lastName:"Hieu"
        //   }
      ],

      numberOfAdd: 0,
      positionCurrent: 0,
      //data form add
      arrayAdd: [],
    };
  },
  methods: {
    add() {
      this.numberOfAdd++;
      this.arrayAdd.push({
        position: this.numberOfAdd + this.positionCurrent,
        firstName: "",
        lastName: "",
      });
    },
    //delete item in data form add
    deleteU(position) {
      this.numberOfAdd--;
      const removeIndex = this.arrayAdd
        .map(function (item) {
          return item.position;
        })
        .indexOf(position);
      this.arrayAdd.splice(removeIndex, 1);
    },
    // delete item data display
    deleteFromParams(position) {
      if (confirm("Chắc chưa?")) {
        const removeIndex = this.params
          .map(function (item) {
            return item.position;
          })
          .indexOf(position);
        this.params.splice(removeIndex, 1);
      }
    },
    save() {
      for (var i = 0; i < this.arrayAdd.length; i++) {
        if (
          this.arrayAdd[i] != {} &&
          (this.arrayAdd[i].firstName != "" || this.arrayAdd[i].lastName != "")
        ) {
          //check data
          this.params.push(this.arrayAdd[i]);
          this.positionCurrent=this.arrayAdd[i].position;
        } else {
          this.deleteU(this.arrayAdd[i]);
        }
      }
      this.arrayAdd = [];
      this.numberOfAdd = 0;
    },
  },
};
</script>
<style lang="css" scoped>
input {
  width: 100%;
  height: 100%;
}
input:focus {
  outline: none;
}
</style>