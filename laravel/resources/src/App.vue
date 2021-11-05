<template>
  <ul>
    <li v-for="task in tasks">
      <a href="#"  @click.prevent="clickTask(task)">{{ task.name }}</a>
    </li>
  </ul>
  <div v-if="!Object.keys(activeTask).length">
    Không có giá trị nào được chọn!
  </div>
  <div v-else class="d-flex justify-between">
    <span>{{ activeTask.name }}</span>
    <span>{{ activeTask.status ? "Hoàn Thành" : "Chưa hoàn thành" }}</span>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tasks: [
        { id: 1, name: "Laravel", status: false },
        { id: 2, name: "Vuejs", status: true },
        { id: 3, name: "Bootstrap", status: false },
      ],
      activeTask: {}
    }
  },

  methods: {
    clickTask(task) {
      this.activeTask = task;
    }
  }
}
</script>

