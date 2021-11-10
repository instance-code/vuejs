<template>
  <div
    class="
      min-w-screen min-h-screen
      bg-gray-100
      flex
      items-center
      justify-center
      px-5
      py-5
    "
  >
    <div
      class="
        w-full
        mx-auto
        rounded-xl
        bg-gray-100
        shadow-xl
        text-gray-800
        relative
        overflow-hidden
      "
      style="max-width: 300px"
    >
      <div
        class="
          w-full
          h-40
          bg-gradient-to-b
          from-gray-800
          to-gray-700
          flex flex-col
          items-end
          text-right
        "
      >
        <div class="w-full py-2 px-6 text-6xl text-white font-thin">
          {{ operatorName }}
        </div>
        <div class="w-full py-2 px-6 text-6xl text-white font-thin">
          {{ result }}
        </div>
      </div>
      <div class="w-full bg-gradient-to-b from-indigo-400 to-indigo-500">
        <div class="flex w-full">
          <div class="w-1/4 border-r border-b border-indigo-400">
            <button
              @click="clearNumber"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-opacity-50 text-xl
                font-light
              "
            >
              C
            </button>
          </div>
          <div class="w-1/4 border-r border-b border-indigo-400">
            <button
              @click="addNegativePositive"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-opacity-50 text-xl
                font-light
              "
            >
              +/-
            </button>
          </div>
          <div class="w-1/4 border-r border-b border-indigo-400">
            <button
              @click="calcPercentage"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-opacity-50 text-xl
                font-light
              "
            >
              %
            </button>
          </div>
          <div class="w-1/4 border-r border-b border-indigo-400">
            <button
              @click="divide"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                bg-indigo-700 bg-opacity-10
                hover:bg-opacity-20
                text-white text-2xl
                font-light
              "
            >
              ÷
            </button>
          </div>
        </div>
        <div class="flex w-full">
          <div
            v-for="number in [7, 8, 9]"
            :key="number"
            class="w-1/4 border-r border-b border-indigo-400"
          >
            <button
              @click.prevent="addNumber(number)"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              {{ number }}
            </button>
          </div>
          <div class="w-1/4 border-r border-b border-indigo-400">
            <button
              @click="multiply"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                bg-indigo-700 bg-opacity-10
                hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              ⨉
            </button>
          </div>
        </div>
        <div class="flex w-full">
          <div
            v-for="number in [4, 5, 6]"
            :key="number"
            class="w-1/4 border-r border-b border-indigo-400"
          >
            <button
              @click.prevent="addNumber(number)"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              {{ number }}
            </button>
          </div>

          <div class="w-1/4 border-r border-b border-indigo-400">
            <button
              @click="minus"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                bg-indigo-700 bg-opacity-10
                hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              -
            </button>
          </div>
        </div>
        <div class="flex w-full">
          <div
            v-for="number in [1, 2, 3]"
            :key="number"
            class="w-1/4 border-r border-b border-indigo-400"
          >
            <button
              @click="addNumber(number)"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              {{ number }}
            </button>
          </div>
          <div class="w-1/4 border-r border-b border-indigo-400">
            <button
              @click="sum"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                bg-indigo-700 bg-opacity-10
                hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              +
            </button>
          </div>
        </div>
        <div class="flex w-full">
          <div class="w-1/4 border-r border-indigo-400">
            <button
              @click="addNumber(0)"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              0
            </button>
          </div>
          <div class="w-1/4 border-r border-indigo-400">
            <button
              @click="addDot"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                hover:bg-indigo-700 hover:bg-opacity-20
                text-white text-xl
                font-light
              "
            >
              .
            </button>
          </div>
          <div class="w-2/4 border-r border-indigo-400">
            <button
              @click="equal"
              class="
                w-full
                h-16
                outline-none
                focus:outline-none
                bg-indigo-700 bg-opacity-30
                hover:bg-opacity-40
                text-white text-xl
                font-light
              "
            >
              =
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      result: "",
      previousNumber: null,
      operation: false,
      operator: null,
      operatorName: "",
    };
  },

  methods: {
    clearNumber() {
      this.result = "";
    },
    addNumber(number) {
      if (this.operation) {
        this.result = "";
        this.operation = false;
      }

      this.result = this.result + number;
      console.log(this.result);
    },
    addNegativePositive() {
      if (this.result.charAt(0) === "-") {
        this.result = this.result.slice(1);
      } else {
        this.result = "-" + this.result;
      }
    },
    calcPercentage() {
      this.result = parseFloat(this.result) / 100; // Convert String -> Float
    },
    addDot() {
      if (this.result.indexOf(".") === -1) {
        this.result = this.result + "."; // `${this.result}.`
      }
    },
    getPreviousNumber() {
      this.previousNumber = this.result;
      this.operation = true;
    },
    sum() {
      this.operator = (a, b) => {
        return parseFloat(a) + parseFloat(b);
      };
      this.getPreviousNumber();
      this.operatorName = "+";
    },

    minus() {
      this.operator = (a, b) => {
        return parseFloat(a) - parseFloat(b);
      };
      this.getPreviousNumber();
      this.operatorName = "-";
    },

    multiply() {
      this.operator = (a, b) => {
        return parseFloat(a) * parseFloat(b);
      };
      this.getPreviousNumber();
      this.operatorName = "⨉";
    },

    divide() {
      this.operator = (a, b) => {
        return parseFloat(a) / parseFloat(b);
      };
      this.getPreviousNumber();
      this.operatorName = "÷";
    },

    equal() {
      if (this.previousNumber) {
        console.log(this.operator);
        this.result = this.operator(this.previousNumber, this.result);
        this.operatorName = "";
        this.operator = true;
        this.previousNumber = null;
      }
    },
  },
};
</script>

