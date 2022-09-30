<template>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <LoaderComponent v-if="loading"/>
            <PostCard :post="post" :showButtonActive="showButtonActive" v-if="!loading"/>
        </div>
    </div>
  </div>
</template>

<script>
import PostCard from '../components/PostCard.vue';
import axios from 'axios';
import LoaderComponent from '../components/LoaderComponent.vue';
export default {
    components: { PostCard, LoaderComponent },
    data: function(){
        return{
            post: {},
            showButtonActive: false,
            loading: true
        }
    },
    methods: {
        getSinglePost(){
            axios.get(`http://127.0.0.1:8000/api/posts/${this.$route.params.id}`)
            .then((response) => {
                // console.log(response.data.results);
                this.post = response.data.results;
                this.loading = false;
            }).catch((error) => {
                console.warn(error)
            });
        }
    },
    created(){
        this.getSinglePost();
    }
}
</script>

<style>

</style>