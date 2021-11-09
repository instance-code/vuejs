<template >
  <div class="calc">
    <div class="row">
      <div class="col screen">
        <input v-model="res" v-if="!number" />
        <input v-model="number" v-else />
      </div>
    </div>
    <div class="row operator">
      <div
        class="col col-operator"
        v-for="label in labels"
        :key="label.id"
        @click.prevent="press(label)"
      >
        {{ label }}
      </div>
    </div>
  </div>
</template>
<script>
import { ref } from "vue";
export default {
  setup() {
    const res = ref(0);
    var number = ref(0);

    const labels = ref([
      "7",
      "8",
      "9",
      "*",
      "4",
      "5",
      "6",
      "-",
      "1",
      "2",
      "3",
      "+",
      "AC",
      "0",
      ".",
      "=",
    ]);
    const preOperation = ref();

    const operators = ["+", "-", "=", "*", "/"];
    function press(label) {
      var isNumber = true;

      for (var i = 0; i < operators.length; i++) {
        if (operators[i] == label) {
          isNumber = false;
        }
      }
      if (label == "AC") {
        this.number = 0;
        this.res = 0;
      } else if (isNumber) {
        this.number = this.number ? this.number + label : label;
      } else {
        //operator
        if (label == "=") {
          if (this.preOperation == "+") {
            this.res = parseInt(this.res) + parseInt(this.number);
          } else if (this.preOperation == "-") {
            this.res = parseInt(this.res) - parseInt(this.number);
          } else if (this.preOperation == "*") {
            this.res = parseInt(this.res) * parseInt(this.number);
          } else if (this.preOperation == "/") {
            this.res = parseInt(this.res) / parseInt(this.number);
          }

          this.number = this.res;
        } else {
          this.res = this.number;
          this.number = 0;
          this.preOperation = label;
        }
      }
    }

    return {
      res,
      labels,
      number,
      press,
      operators,
    };
  },
};
</script>
<style  scoped>
.calc {
  background-color: beige;
  width: 290px;
  border: 1px solid black;
}
.screen {
  height: 60px;
}
.screen input {
  width: 100%;
  height: 100%;
  border: none;
  text-align: right;
  background-color: black;
  color: white;
  size: 11px;
}
.row .col.col-operator {
  height: 40px;
  min-width: 63px;
  text-align: center;
}

.col-operator:hover {
  cursor: pointer;
  color: burlywood;
}
</style>