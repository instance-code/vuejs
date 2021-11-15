<template>
    <div v-for="param in params" :key="param.id">
        <span>{{ param.id }}</span>
        <input v-model="param.first" placeholder="Nhập tên họ" />
        <input v-model="param.last" placeholder="Nhập tên" />
        <button v-on:click="deleteItemParam(item)">Remove</button>
    </div>
    <button @click="SaveParam">Save</button>
    <pre>{{ $data }}</pre>
    <button @click="AddParam">Add</button>
</template>

<script>
export default {
    data() {
        return {
            params: [{ id: 1, first: "", last: "" }],
        };
    },
    methods: {
        AddParam: function () {
            this.params.push({
                id: this.params.length + 1,
                first: "",
                last: "",
            });
        },
        deleteItemParam: function (item) {
            let index = this.params.indexOf(item);
            this.params.splice(index, 1);
        },
        SaveParam(){
            console.log(this.params);
        }
    },
};
</script>
