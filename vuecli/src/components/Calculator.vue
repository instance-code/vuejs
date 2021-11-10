<template>
   <div class="container">
        <div class="col-sm-3">
          <div id="result">
              <p>{{ result }}</p>
            </div>
          <table class="table table-bordered">            
            <tbody>
              <tr>
                <td>CE</td>
                <td>C</td>
                <td v-on:click="clearDisplay">Del</td>
                <td v-on:click="handleOperator('/')">/</td>
              </tr>
              <tr>
                <td v-on:click="appendSymbol('7')">7</td>
                <td v-on:click="appendSymbol('8')">8</td>
                <td v-on:click="appendSymbol('9')">9</td>
                <td v-on:click="handleOperator('x')">x</td>
              </tr>
              <tr>
                <td v-on:click="appendSymbol('4')">4</td>
                <td v-on:click="appendSymbol('5')">5</td>
                <td v-on:click="appendSymbol('6')">6</td>
                <td v-on:click="handleOperator('-')">-</td>
              </tr>
               <tr>
                <td v-on:click="appendSymbol('1')">1</td>
                <td v-on:click="appendSymbol('2')">2</td>
                <td v-on:click="appendSymbol('3')">3</td>
                <td v-on:click="handleOperator('+')">+</td>
              </tr>
              <tr>
                <td v-on:click="changeSign()">+/-</td>
                <td v-on:click="appendSymbol('0')">0</td>
                <td v-on:click="convertDecimal()">.</td>
                <td v-on:click="handleOperator('=')">=</td>  
              </tr>
            </tbody>
          </table>
        </div>
      </div>
</template>

<script>
export default {
  name: "calculator",
  data () {
    return {
      current: '',
      previous: null,
      operator: null,
      result: '',
      clickedOperator: false
    }
  },
  methods: {
    clearDisplay () {
      this.current = ''
      this.previous = null
      this.operator = null
      this.result = ''
      this.clickedOperator = false
    },
    appendSymbol (number) {
      if (this.clickedOperator) {
        this.clickedOperator = false
        this.current = number
        this.result = number
      } else {
        this.current = this.current === '0' ? number : `${this.current}${number}`
        this.result = this.current
      }
    },
    handleOperator (newOperator) {
      const numberValue = parseFloat(this.current)
      this.result = newOperator
      if (this.operator && this.clickedOperator) {
        this.operator = newOperator
      }
      if (this.previous == null) {
        this.previous = numberValue
      } else if (this.operator) {
        const result = this.calculate(this.previous, numberValue, this.operator)
        this.clearDisplay()
        this.current = result
        this.result = result
      }
      this.clickedOperator = true
      this.operator = newOperator      
    },
    calculate (first, second, operator) {
      switch (operator) {
        case '+':
          return first + second
        case '-':
          return first - second
        case 'x':
          return first * second
        case '/':
          return first / second
        default:
          return second
      }
    },
    convertDecimal () {
      if (this.clickedOperator) {
        this.current += '.'
        this.clickedOperator = false
      }
      if (this.current.indexOf('.') === -1) {
        if (!this.current) {
          this.current += '0.'
        }
        else {
          this.current += '.'
        }
      }
      this.result = this.current
    },
    changeSign () {
      this.current = this.current.charAt(0) === '-' ? this.current.slice(1) : `-${this.current}`
      this.result = this.current
    },
  }
  
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
#result {
  height:30px;
  border: 1px solid #D8D8D8;
}
#result p {
  text-align: right;
  font-size: 18px;
}
tbody tr td {
  width: 25%;
}
tbody tr td:hover {
  background-color: black;
  color: white;
}
</style>
