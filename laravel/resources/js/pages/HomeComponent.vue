<template>
    <section class="container">
        <LoaderComponent v-if="loading"/>
        <div class="row" v-if="!loading">
            <div class="col-12">
                <PostCard v-for="post in posts" :key="post.id" :post="post" :showButtonActive="showButtonActive"/>
            </div>
        </div>
    </section>
</template>

<script>
import PostCard from '../components/PostCard.vue';
import axios from 'axios';
import LoaderComponent from '../components/LoaderComponent.vue';
export default {
    components: { PostCard, LoaderComponent },

    data: function(){
        return{
            posts: [],
            currentPage: 1,
            lastPage: null,
            loading: true,
            showButtonActive: true
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
