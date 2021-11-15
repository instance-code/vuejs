<template>
  <div class="content">
    <div class="calculator">
      <div class="display">{{ current || 0 }}</div>
      <div class="btn" @click="clear">C</div>
      <div class="btn" @click="sign">+/-</div>
      <div class="btn" @click="percent">%</div>
      <div class="btn operator" @click="divide">÷</div>
      <div class="btn" @click="append(7)">7</div>
      <div class="btn" @click="append(8)">8</div>
      <div class="btn" @click="append(9)">9</div>
      <div class="btn operator" @click="times">x</div>
      <div class="btn" @click="append(4)">4</div>
      <div class="btn" @click="append(5)">5</div>
      <div class="btn" @click="append(6)">6</div>
      <div class="btn operator minus" @click="minus">-</div>
      <div class="btn" @click="append(1)">1</div>
      <div class="btn" @click="append(2)">2</div>
      <div class="btn" @click="append(3)">3</div>
      <div class="btn operator" @click="add">+</div>
      <div class="btn zero" @click="append(0)">0</div>
      <div class="btn" @click="dot">.</div>
      <div class="btn equal" @click="result">=</div>
    </div>
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
      newCalculator: true,
    };
  },
  methods: {
    clear() {
      this.current = "";
      this.previous = null;
      this.operator = null;
      this.operatorClicked = false;
      this.newCalculator = true;
    },
    sign() {
      this.current =
        this.current.charAt(0) === "-"
          ? this.current.slice(1)
          : `-${this.current}`;
    },
    percent() {
      this.current = `${parseFloat(this.current) / 100}`;
    },
    append(number) {
      if (this.newCalculator) {
        if (this.operatorClicked) {
          this.current = "";
          this.operatorClicked = false;
        }
        this.current = `${this.current}${number}`;
      }
    },
    dot() {
      if (this.current.indexOf(".") === -1) {
        this.append(".");
      }
    },
    setPrevious() {
      this.previous = this.current;
      this.operatorClicked = true;
      this.newCalculator = true;
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
    result() {
      this.current = `${this.operator(
        parseFloat(this.previous),
        parseFloat(this.current)
      )}`;
      this.previous = this.current;
      this.newCalculator = false;
    },
  },
};
</script>

<style scoped>
.calculator {
  gap: 8px;
  position: fixed;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  margin: 0 auto;
  width: 30%;
  font-size: 40px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: minmax(100px, auto);
}

.display {
  grid-column: 1 / 5;
  background-color: #333;
  color: white;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 25px;
}

.zero {
  grid-column: 1 / 3;
}

.btn {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: #f2f2f2;
  border: 2px solid #333;
  border-radius: 100%;
  color: black;
}

.btn:hover {
  background-color: turquoise;
}

.btn:active {
  background-color: red;
}

.operator {
  background-color: orange;
  color: white;
}

.minus {
  font-size: 50px;
}

.equal {
  font-weight: 1000;
  background-color: violet;
}
</style>