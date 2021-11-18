<template>
    <div class="bai2">  
        <div class="container">
            <h2 class="text-center mt-5"> todo list</h2>
             <div class="d-flex">    
            <input v-model="task" type="text" class="form-control">
            <button @click="submitTask" class="btn btn-primary rounded-0">Add</button>
        </div>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th scope="col">Task</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">#</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(task,index) in tasks" :key="index">
                    <td>{{task.name}}</td>
                    <td width="120px" @click="changeStatus(index)" class="pointer">{{task.status}}</td>
                    <td>    
                        <div @click="editTask(index)" class="text-center">
                            <span><i class="fas fa-pencil-alt"></i></span>
                        </div>
                    </td>
                    <td>    
                        <div @click="taskDelete(index)" class="text-center">
                            <span><i class="fas fa-trash"></i></span>
                        </div>
                    </td>

                </tr>
            </tbody>
            </table>
        </div>
    </div>
</template>

<script>
  export default {
      name:"bai2",
      props:
      {
          msg:String,
      },   
    data()
    {
        return{
            task:"hello world",
            editTasked:null,
            avaiStatus:['to-do','in-progress','finished'],
            tasks:[
                {
                    name:"Hom nay la thu tu",
                    status:"to-do",
                }
            ]
        }
    },
    methods:{
        submitTask()
        {
            if(this.task.length===0) 
                return;

            if(this.editTasked === null)
            {
                this.tasks.push
                 ({
                    name:this.task,
                    status:"to-do",
                });
              }
                else
                {
                    this.tasks[this.editTasked].name=this.task;
                    this.editTasked==null;
                }  
            this.task='';
        },
        taskDelete(index)
        {
            this.tasks.splice(index,1);
        },
        editTask(index)
        {
            this.task=this.tasks[index].name;
            this.editTasked=index;
        },
        changeStatus(index)
        {
            let newIndex=this.avaiStatus.indexOf(this.tasks[index].status);
            if(++newIndex > 2)
            newIndex=0;
            this.tasks[index].status=this.avaiStatus[newIndex];
        }
    }
  } 
</script>

<style scoped>
    .pointer{
        cursor: pointer;
    }
</style>
