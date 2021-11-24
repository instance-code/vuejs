<template>
  <div class="d-flex">
    <router-link to="/blogs" class="btn">Blog</router-link>
    <router-link to="/blogs/create" class="btn">Create</router-link>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">

          <router-view :key="$route.fullPath" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
	return {
	}
  },

  methods: {
	clickTask(task) {
	  this.activeTask = task;
	}
  }
}
</script>

