<template>
  <div class="mb-3">
    <label class="form-label">{{ label }}</label>
    <input
      v-if="formType"
      type="text"
      class="form-control"
      @input="handleValue"
      v-model="data"
    />
    <textarea
      v-else
      type="text"
      class="form-control"
      @input="handleValue"
      v-model="data"
    ></textarea>
    <div class="form-text text-danger" v-for="m in messages" :key="m">
      {{ m }}
    </div>
  </div>
</template>

<script>
// String, Number, Object | Array, Boolean
export default {
  props: {
    label: {
      type: String,
      default: "",
    },
    formType: {
      type: Boolean, // true => input | false => textarea
      default: true,
    },
    messages: {
      type: Array,
      default: "",
    },
    data: {
      type: String,
      default: "",
    },
  },

  emits: ["update:modelValue"],

  methods: {
    handleValue(event) {
      this.$emit("update:modelValue", event.target.value);
    },
  },
};
</script>
