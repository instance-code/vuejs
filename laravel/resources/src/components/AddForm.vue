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
                    <th scope="col"><button type="button" class="btn btn-primary" @click="AddNew">Add</button></th>
                </tr>
            </thead>
            <tbody v-for="param in params" :key="param.id">    
                <tr>
                    <td >{{ param.id }}</td>
                    <td>
                        <div class="employee-form" >
                            <input type="text" class="form-control mb-2" placeholder="Nhập họ" v-model="param.last"> 
                        </div>
                    </td>
                    <td>
                        <div class="employee-form" >
                            <input type="text" class="form-control mb-2" placeholder="Nhập tên" v-model="param.first"> 
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" @click="Delete(item)">Remove</button>
                    </td> 
                </tr>
            </tbody>
        </table> 
        <button type="button" class="btn btn-primary" @click="Save">Save</button>

        <pre>{{ $data }}</pre>
        
</template>

<script>
export default {
    data() {
        return {
            params: [{ id: 1, last: "", first: "" }],
        };
    },
    methods: {
        AddNew: function () {
            this.params.push({
                id: this.params.length + 1,
                first: "",
                last: "",
            });
        },
        Delete: function (item) {
            let index = this.params.indexOf(item);
            this.params.splice(index, 1);
        },
        Save(){
            console.log(JSON.stringify(this.params));
        }
    },
};
</script>

