<template>
  <div class="mb-3">
    <label class="form-label">Blog title</label>
    <input type="text" class="form-control" v-model="params.title">
    <div class="form-text text-danger"></div>
  </div>

  <div class="mb-3">
    <label class="form-label">Blog Content</label>
    <textarea v-model="params.content" class="form-control"></textarea>
  </div>
  <button
    type="button"
    class="btn btn-primary"
    @click.prevent="createBlog"
  >Submit</button>
</template>

<script>
  export default {
    data() {
      return {
        params: {
          title: "",
          content: "",
          user_id: 1,
        }
      }
    },

    methods: {
      async createBlog() {
        try {
          const { data } = this.$axios({
            url: "/api/blogs/create",
            method: "post",
            data: this.params
          })
        } catch(error) {
          const { response } = error;

          console.log(response.status)
        }
      }
    }
  }

</script>
