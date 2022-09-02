<template>
    <div>
        <Navbar></Navbar>
        <h1>Boolpress<br> {{ message }}</h1>
        <PostList></PostList>
    </div>
</template>


<script>
import Navbar from './frontend/components/Navbar.vue';
import PostList from './frontend/components/PostList.vue';
export default {
    components: { Navbar, PostList },
    data() {
        return {
            message: "Hello world vue",
        };
    },
};
</script>