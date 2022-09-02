<template>
    <div>
        <div class="row row-cols-3">
            <div class="card" style="width: 18rem">
                <img class="card-img-top" src="" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Pagination from "./Pagination.vue";
export default {
    data() {
        return {
            posts: [],
            paginationData: {},
        };
    },
    methods: {
        fetchPosts(newPage = 1) {
            axios.get("/api/posts?page=" + newPage).then((resp) => {
                this.posts = resp.data.data;
                this.paginationData = resp.data;
            });
        },
        getImageSrc(post) {
            if (!post.cover_img) {
                return "/images/image-placeholder.jpeg";
            }
            return post.cover_img;
        },
        onChangePage(newPage) {
            this.fetchPosts(newPage);
        },
    },
    mounted() {
        this.fetchPosts();
    },
    components: { Pagination },
};
</script>