<template lang="">
  {{ errors }}
  <FormInputComp
    label="Blog title"
    :messages="errors.title" 
    v-model="blog.title"
    :data="blog.title"
  />
  <FormInputComp
    label="Blog content"
    :form-type="false"
    :messages="errors.content"
    v-model="blog.content"
    :data="blog.content"
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
      FormInputComp
    },
    data() {
      return {
        blog:{},
      }
    },
    computed: {
      ...mapGetters("error", [
        "errors"
      ])
    },
    created() {
        var id=this.$route.params.id
        this.fetchData(id)
    },
    

    methods: {
        async fetchData(id){
            try {
                const {data}= await this.$axios.get(
                    `/api/blogs/${id}`     
                );
                this.blog=data;
                console.log(data);
            } catch (error) {
                console.log(error)
            }
        },
      async createBlog() {
        try {
          const { data } = await this.$axios({
          url: "/api/blogs",
          method: "post",
          data: this.blog
          })
        } catch(error) {
          const { response } = error;
          console.log(error)
        }
      }
    }
  }

</script>
