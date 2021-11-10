<template>
  <div>
    <table width="450">
      <tr>
        <td colspan="4" class="display" id="screen">{{ current || "0" }}</td>
      </tr>
      <tr>
        <td><button @click="clear" class="btn" value="AC">AC</button></td>
        <td><button class="btn" value="+/-">+/-</button></td>
        <td><button @click="percent" class="btn" value="%">%</button></td>
        <td><button @click="divide" class="btn" value="/">/</button></td>
      </tr>
      <tr>
        <td><button @click="append('7')" class="btn">7</button></td>
        <td><button @click="append('8')" class="btn">8</button></td>
        <td><button @click="append('9')" class="btn">9</button></td>
        <td><button @click="times" class="btn operator">*</button></td>
      </tr>
      <tr>
        <td><button @click="append('4')" class="btn">4</button></td>
        <td><button @click="append('5')" class="btn">5</button></td>
        <td><button @click="append('6')" class="btn">6</button></td>
        <td><button @click="minus" class="btn operator">-</button></td>
      </tr>
      <tr>
        <td><button @click="append('1')" class="btn">1</button></td>
        <td><button @click="append('2')" class="btn">2</button></td>
        <td><button @click="append('3')" class="btn">3</button></td>
        <td><button @click="add" class="btn operator">+</button></td>
      </tr>
      <tr>
        <td colspan="2"><button @click="append('0')" class="btn">0</button></td>
        <td><button @click="dot" class="btn">.</button></td>
        <td><button @click="equal" class="btn operator">=</button></td>
      </tr>
    </table>
  </div>
</template>

<script>
export default {
  name: "Calculator",

  data() {
    return {
      previous: null,
      current: "",
      operator: null,
      operatorClicked: false,
    };
  },
  methods: {
    clear() {
      this.current = "";
    },
    percent() {
      this.current = `${parseFloat(this.current) / 100}`;
    },
    append(number) {
      if(this.operatorClicked){
        this.current ='';
        this.operatorClicked = false;
      }
      this.current = `${this.current}${number}`;
    },
    dot() {
      if (this.current.indexOf(".") === 1) {
        this.append(".");
      }
    },
    setPrevious() {
      this.previous = this.current;
      this.operatorClicked = true;
    },
    divide() {
      this.operator = (a, b) => a / b;
      this.setPrevious();
    },
    times() {
      this.operator = (a, b) => a * b;
      this.setPrevious();
    },
    minus() {
      this.operator = (a, b) => a - b;
      this.setPrevious();
    },
    add() {
      this.operator = (a, b) => a + b;
      this.setPrevious();
    },
    equal() {
      this.current =`${this.operator(
        parseFloat(this.current),
        parseFloat(this.previous)
      )}`;
      this.previous= null;
    },
  },
};
</script>

<style scoped>
#screen {
  line-height: 55px;
  font-size: 30pt;
  font-weight: bold;
  text-align: right;
  border: 1px black solid;
}
button {
  width: 100%;
  height: 60px;
  font-size: 30pt;
  font-weight: bold;
}
table {
  border: 2px black solid;
}
</style>
