<template >
  {{ errors }}
  <FormInputComp
    label="Blog title"
    :messages="errors.title" 
    v-model="blog.title"
  />
  <FormInputComp
    label="Blog content"
    :form-type="false"
    :messages="errors.content"
    v-model="blog.content"
  />
  <button
  type="button"
  class="btn btn-primary"
  @click.prevent="createBlog"
  >Submit</button>
</template>

<script>
import { mapGetters } from "vuex";
import FormInputComp from "@/components/FormInputComp";
export default {
  components: {
    FormInputComp,
  },
  data() {
    return {
      blog: {},
    };
  },
  computed: {
    ...mapGetters("error", ["errors"]),
  },

  methods: {
    async createBlog() {
      try {
        const { data } = this.$axios({
          url: "/api/blogs",
          method: "post",
          data: this.blog,
        });
      } catch (error) {
        const { response } = error;
        console.log(error);
      }
    },
  },
};
</script>
