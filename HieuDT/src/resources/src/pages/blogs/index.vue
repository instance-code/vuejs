<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <router-link :to="{ name: 'CreateBlog' }" class="btn btn-primary"
          >Create</router-link
        >
        <button class="btn btn-danger" @click.prevent="deleteAll">
          Delete
        </button>

        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th>
                  <input
                    id="checkall"
                    type="checkbox"
                    @click="checkAll"
                    v-model="isSelectedAll"
                  />
                </th>
                <th>title</th>
                <th>content</th>
                <th>created</th>
                <th>create by</th>
              </tr>
            </thead>
            <tbody>
              <keep-alive>
                <tr v-for="blog in blogs" :key="blog.id">
                  <td>
                    <input
                      class="checkbox"
                      type="checkbox"
                      name="ids"
                      v-model="userIds"
                      :value="blog.id"
                    />
                  </td>
                  <td>{{ blog.title }}</td>
                  <td>{{ blog.content }}</td>
                  <td>{{ blog.created_by }}</td>
                  <td>
                    <router-link class="btn btn-primary btn-sm" 
                    :to="{name:'DetailBlog', params:{id:blog.id}}"
                    >Edit</router-link>
                    <button
                      class="btn btn-danger btn-sm"
                      @click.prevent="destroy(blog.id)"
                    >
                      Delete
                    </button>
                  </td>
                </tr>
              </keep-alive>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      blogs: [],
      isSelectedAll: false,
      userIds: [],
    };
  },
  async created() {
    await this.getBlogs();
  },
  watch: {},
  methods: {
    async getBlogs() {
      try {
        const { data } = await this.$axios({
          url: "/api/blogs",
          method: "GET",
          params: {},
        });
        this.blogs = data;
      } catch (error) {
        console.log(error.response);
      }
    },
    checkAll() {
      this.userIds = [];
      if (!this.isSelectedAll) {
        for (let i = 0; i < this.blogs.length; i++) {
          this.userIds.push(this.blogs[i].id);
        }
      }
    },
    async deleteAll() {
      try {
        const { data } = await this.$axios({
          url: "/api/blogs/deleteByChecked",
          method: "DELETE",
          data: this.userIds,
        });
        if (data) {
          this.getBlogs();
        }
      } catch (error) {
        console.log(error);
      }
    },
    async destroy(id) {
      try {
        const { data } = await this.$axios({
          url: "/api/blogs",
          method: "DELETE",
          data: {
            id: id
          },
        });
        if (data) {
          this.getBlogs();
        }
      } catch (error) {
        console.log(error);
      }
    },
  
  },
};
</script>
