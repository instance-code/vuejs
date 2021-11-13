<template>
  <div class="container" style="max-width: 600px">
    <!-- Input -->
   

    <!-- Task table -->
    <table class="table table-bordered mt-5">
      <thead>
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col">Họ</th>
          <th scope="col" class="text-center">Tên</th>
          <th scope="col" style="">
            <button class="btn btn-warning rounded-0" @click="submitTask">
              Add
            </button>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(task, index) in tasks" :key="index">
          <td>
            <span>
              {{ index+1  }}
            </span>
          </td>
          <td>
            <span class="pointer noselect">
              <input
                type="text"

                placeholder="Nhập họ"
                class="w-100 form-control"
                v-model="task.firstName"
              />
            </span>
          </td>

          <td class="text-center">
            <input
              type="text"
              placeholder="Nhập tên"
              class="w-100 form-control"
                v-model="task.lastName"

              />
          </td>
          <td class="text-center">
            <div @click="deleteTask(index)">
              <button class="btn-danger">remove</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
              <button class="btn-danger" @click="save">save</button>
 
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },

  data() {
    return {
      task: "",
      firstName: "",
      lastName: "",
      postision: 1,

      tasks: [],
       
       
      
    };
  },

  methods: {
   
   

  
    /**
     * Deletes task by index
     */
    deleteTask(index) {
      this.tasks.splice(index, 1);
    },
   save(){
     console.log(this.tasks);
    },
    
    
    submitTask() {

      /* We need to update the task */
        /* We need to add new task */
        this.tasks.push({
          // firstName: this.tasks.firstName,
          // lastName: this.tasks.lastName,
        });

    },
  
  },
};
</script>

<style scoped>
.pointer {
  cursor: pointer;
}
.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none; /* Safari */
  -khtml-user-select: none; /* Konqueror HTML */
  -moz-user-select: none; /* Old versions of Firefox */
  -ms-user-select: none; /* Internet Explorer/Edge */
  user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}
.line-through {
  text-decoration: line-through;
}
</style>
