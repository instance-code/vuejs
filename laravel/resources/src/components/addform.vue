<template>
    <div class="hello">
        <h1>{{ msg }}</h1>
    </div>
    	<table class="table table-bordered" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ</th>
                    <th scope="col">Tên</th>
                    <th scope="col"><button type="button" class="btn btn-primary" @click="addNewSection">Add</button></th>
                </tr>
            </thead>
            <tbody v-for="(section, index) in sections" v-bind:key="index">    
                <tr>
                    <td >{{ index +1}}</td>
                    <td>
                        <div class="employee-form" >
                            <input type="text" class="form-control mb-2" placeholder="Nhập tên họ" v-model="section.firstName">
                        </div>
                    </td>
                    <td>
                        <div class="employee-form" >
                            <input type="text" class="form-control mb-2" placeholder="Nhập tên" v-model="section.lastName">
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" @click="Xoa(index)">Delete</button>
                    </td> 
                </tr>
            </tbody>
        </table> 
        <button type="button" class="btn btn-primary" @click="get()">Save</button>
       
        
</template>

<script>
export default {
    props:{
        msg: String
    },
    data(){
      return{   
          sections: [],
          index: 1
      }
    },
    methods:{
        addNewSection () {
                        this.sections.push({
                        })
                    },
       
        Xoa(index){
            this.sections.splice(index,1)
        },
        get(){
            console.log("Param="+JSON.stringify(this.sections))
        }

    }
}
</script>

