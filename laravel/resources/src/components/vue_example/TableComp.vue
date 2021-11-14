<template>
<div class="test row">
    <h1>BẢNG USER</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Họ</th>
            <th>Tên</th>
            <th><button @click="addItem" class="btn btn-primary">Add</button></th>
        </tr>
        <tr :key="item.id" v-for="item, index in items">
            <td>{{ index + 1 }}</td>
            <td><input type="text" v-model="item.surname" placeholder="Nhập tên họ"  /></td>
            <td><input type="text" v-model="item.name" placeholder="Nhập tên"  /></td>
            <td><button @click="removeItem(item.id)" class="btn btn-danger">Remove</button></td>
        </tr>
    </table>
    <button @click="save" class="btn btn-save">Save</button>
</div>
</template>

<script>

export default {
    name: 'TableComp',
    data() {
        return {
            items: [],
            index: 1
        }
    },
    methods: {
        addItem() {
            this.items.push({
                id: this.index++,
                name: '',
                surname: '',
            })
        },
        removeItem(id) {
            this.items = this.items.filter(el => el.id !== id)
        },
        save() {
            console.log(this.items);
        }
    }
}
</script>

<style>
    h1 {
        text-align: center;
    }
    table, th, td {
        margin: 0 auto;
        border:1px solid black;
    }
    th, td {
        width: 200px;
        height: 30px;
        padding: 5px;
        font-size: 20px;
    }
    input {
        height: 30px;
        width: 190px;
    }
    .btn {
        border-radius: 10px;
    }
    .btn:hover {
        background-color: rgb(131, 131, 107);
    }
    .btn-primary {
        background-color: blue;
        color: white;
        width: 100%;
        height: 30px;
    }
    .btn-danger {
        background-color: red;
        color: white;
        width: 100%;
        height: 30px;
    }
    .btn-save {
        margin-top: 20px;
        margin-left: 220px;
        background-color: blue;
        color: white;
        width: 100px;
        height: 30px;
    }
</style>