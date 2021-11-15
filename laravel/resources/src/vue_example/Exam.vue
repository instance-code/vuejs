<template>
    <div class="exam">
        <div>
            <table border="1px solid" width="400px" height="10px" class="table">
                <tr>
                    <th>#</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th> 
                        <button @click="toggleSomething">Add</button>
                    </th>
                </tr>
                
             
                <tr v-for="item in rowData" :key="item.id">
                    <td>{{item.id}}</td>
                    <td> <input placeholder="Nhập tên họ" v-model="item.firstName"></td>
                    <td> <input placeholder="Nhập tên" v-model="item.lastName"></td>
                    <td>
                        <button @click="deleteRow(item.id)">Remove</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button v-if="this.rowData.length > 0" @click="saveData">
                            Save
                        </button>
                    </td>
                </tr>
            </table>
            
        </div>
        
    </div>
</template>

<script>
export default {
    data(){
        return {
            showText: false,
            rowData:[],
            id: '',
        }
    },
    methods: {
        toggleSomething(){
            this.showText = true;
            
            this.rowData.push({
                id: this.rowData.length,
                firstName:'',
                lastName:''
            });
        },
        deleteRow(idArr){
            const theLength = this.rowData.length;
            this.id = idArr;
            this.rowData.length > 1 ? this.rowData.splice(this.id,1) : '';
            
            if(theLength > this.rowData.length){
                for(let i=0; i<this.rowData.length-1; i++){
                  this.rowData[i+1].id = this.rowData[i].id + 1;
                }
            }else if (this.rowData.length == 1){ 
                this.rowData = [];
            }else {
                alert(1)
            }
            console.log(this.rowData);
        },
        saveData(){
            console.log(this.rowData);
        }
        
    }
}
</script>

<style scoped>
.table {
    margin: 50px auto;
}
</style>