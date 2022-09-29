<template>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <PostCard v-for="post in posts" :key="post.id" :post="post"/>
            </div>
        </div>
    </section>
</template>

<script>
import PostCard from '../components/PostCard.vue';
import axios from 'axios';
export default {
    components: { PostCard },

    data: function(){
        return{
            posts: [],
            currentPage: 1,
            lastPage: null,
            loading: true
        }
    },
    methods: {
        getPosts(postPage = 1){
            axios.get(`http://127.0.0.1:8000/api/posts?page=${postPage}`)
            .then((response) => {
                console.log(response.data.results.data);
                this.posts = response.data.results.data;
                this.loading = false;
            }).catch((error) => {
                console.error(error);
            })
        }
    },

    created(){
        this.getPosts();
    }
}
</script>

<style>

</style>
