<template>
    <div>
        <table style="width: 100%">
            <tr>
                <th>#</th>
                <th>Họ</th>
                <th>Tên</th>
                <th><button @click="addParam" class="btn btn-primary">Add</button></th>
            </tr>
            <tr :key="param.id" v-for="(param, position) in params">
                <td>{{ position + 1 }}</td>
                <td><input type="text" v-model="param.firstName" placeholder="Nhập tên họ" /></td>
                <td><input type="text" v-model="param.lastName" placeholder="Nhập tên" /></td>
                <td>
                    <button @click="removeParam(param.id)" class="btn btn-danger">
                            Remove
                          </button>
                </td>
            </tr>
        </table>
    
        <button @click="save" class="btn btn-primary">Save</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            params: [],
            position: 1,
        };
    },
    methods: {
        addParam() {
            this.params.push({
                id: this.position++,
                firstName: "",
                lastName: "",
            });
        },
        removeParam(id) {
            this.params = this.params.filter((index) => index.id !== id);
        },
        save() {
            console.log(this.params);
        },
    },
};
</script>

<style>
table,
th,
td {
    text-align: center;
    border: 1px solid black;
    border-collapse: collapse;
}

input {
    border: 1px solid;
    border-radius: 5px;
    padding: 5px;
    width: 98%;
}

button {
    /* border-spacing: 30px; */
    float: left;
    margin-top: 10px;
}
</style>