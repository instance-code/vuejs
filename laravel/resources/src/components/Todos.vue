<template>
    <div class="container-fluid">
        <div class="row item-pro">
            <div class="col-sm-2" style="height: 100%">
                <Sidebar />
            </div>
            <!--bt search -->
            <div class="col-sm-10">
                <div class="row">
                    <Header />
                </div>
                <!-- data-start -->
                <div class="row">
                    <div class="col-sm-11 shadow-sm p-3 mb-5 bg-body rounded">
                        <router-view />
                        <!-- DataTales Example -->
                    </div>
                </div>
                <!-- data-end -->
            </div>
        </div>

        <p></p>
    </div>
</template>

<script>
import Sidebar from "./Sidebar.vue";
import Header from "./Header.vue";
import About from "./About.vue";
import FindData from "./FindData.vue";
import { ref } from "vue";
import axios from "axios";

export default {
    name: "Todos",
    components: { Sidebar, Header, FindData, About },
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

<style scoped>
.item-pro {
    margin-top: 20px;
}
.nav-item {
    display: inline-block;
    position: relative;
}
li {
    list-style-type: none;
}
</style>
