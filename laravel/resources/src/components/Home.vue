<template>
    <!-- data-start -->
    <div class="row">
        <div class="col-sm-11 shadow-sm p-3 mb-5 bg-body rounded">
            <div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input
                                    class="form-check-input mt-0"
                                    type="checkbox"
                                    value=""
                                    id="checkAll"
                                    aria-label="Checkbox for following text input"
                                />
                            </th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="todo in todos" v-bind:key="todo.id">
                            <th scope="row">
                                <input
                                    class="form-check-input mt-0"
                                    type="checkbox"
                                    value=""
                                    aria-label="Checkbox for following text input"
                                />
                            </th>
                            <td>
                                <button
                                    type="button"
                                    class="btn"
                                    @click="showdialog = !showdialog"
                                >
                                    {{ todo.name }}
                                </button>
                            </td>
                            <td>{{ todo.address.suite }}</td>
                            <td>{{ todo.id }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button class="btn btn-outline-secondary" type="button">
                Thêm vào giỏ hàng
            </button>
            <BaseDialog :active.sync="showdialog">
                <div class="media row">
                    <!-- <img
                    class="col-4"
                    src="../uploads/vd1.jpg"
                    alt="Chưa có ảnh ở đây"
                /> -->
                    <!-- <img :src="require(`@/uploads/vd1.jpg`)" /> -->
                    <img class="col-4" :src="src" />
                    <div class="media-body col-8">
                        <h5 class="mt-0">Firt checkbox</h5>
                        <p>giới thiệu sản phâm</p>
                    </div>
                </div>
                <button
                    style="margin-top: 20px"
                    type="button"
                    class="btn btn-outline-secondary"
                    @click="showdialog = !showdialog"
                >
                    Thêm vào giỏ hàng
                </button>
                <button
                    style="margin-left: 500px; margin-top: 20px"
                    type="button"
                    class="btn btn-outline-secondary"
                    @click="showdialog = !showdialog"
                >
                    Close
                </button>
            </BaseDialog>
            <!-- DataTales Example -->
        </div>
    </div>
    <!-- data-end -->
</template>

<script>
import BaseDialog from "./BaseDialog.vue";
import { ref } from "vue";
import axios from "axios";
export default {
    name: "Home",
    components: { BaseDialog },
    setup() {
        const todos = ref([]);
        const getAllTodos = async () => {
            try {
                const res = await axios.get(
                    "https://jsonplaceholder.typicode.com/users?_limit=6"
                );
                //console.log(res.data);
                todos.value = res.data;
            } catch (erros) {
                console.log(Error);
            }
        };
        getAllTodos();
        return {
            todos,
        };
    },
    methods: {
        show() {
            this.test = !this.test;
        },
        showOne() {
            this.testOne = !this.testOne;
        },
    },
    data() {
        return {
            testOne: false,
            test: false,
            showdialog: false,
            src: "https://scontent.fhan5-7.fna.fbcdn.net/v/t39.30808-6/254585727_1527134727671649_3948945287828354205_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=y1Zmu1wTyvUAX993Tbk&tn=pyy6lqr-q47UJUh9&_nc_ht=scontent.fhan5-7.fna&oh=6e4faaa19393c7cd88c1af5e8c23e1db&oe=61AE3F52",
        };
    },
};
</script>
