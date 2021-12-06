<template>
    <div
        class="d-flex flex-column flex-shrink-0 p-3 bg-light"
        style="width: 280px"
    >
        <a
            href="/"
            class="
                d-flex
                align-items-center
                mb-3 mb-md-0
                me-md-auto
                link-dark
                text-decoration-none
            "
        >
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr />
        <!-- LIST-Start -->
        <ul class="nav nav-pills flex-column mb-auto">
            <div @click="show">
                <li class="nav-item" style="width: 100%">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        List
                    </a>
                </li>
            </div>
            <div v-if="test">
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2" />
                        </svg>
                        List 1
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table" />
                        </svg>
                        List 2
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid" />
                        </svg>
                        List 3
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle" />
                        </svg>
                        List 4
                    </a>
                </li>
            </div>
        </ul>
        <!-- LIST-end -->
        <!-- Item-start -->
        <div style="margin-top: 30px">
            <ul class="nav nav-pills flex-column mb-auto">
                <div @click="showOne">
                    <li class="nav-item" style="width: 100%">
                        <a href="#" class="nav-link active" aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            Item
                        </a>
                    </li>
                </div>
                <div v-if="testOne">
                    <li>
                        <router-link class="link nav-link link-dark" to="/home">
                            <p class="item-menu">Home</p>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            class="link nav-link link-dark"
                            to="/about"
                        >
                            <p class="item-menu">about</p>
                        </router-link>
                    </li>
                    <li>
                        <router-link
                            class="link nav-link link-dark"
                            to="/contact"
                        >
                            <p class="item-menu">contact</p>
                        </router-link>
                    </li>
                </div>
            </ul>
        </div>

        <!-- Item-end -->
        <hr />
    </div>
</template>

<script>
export default {
    name: "sidebar",
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
        };
    },
};
</script>

<style></style>
