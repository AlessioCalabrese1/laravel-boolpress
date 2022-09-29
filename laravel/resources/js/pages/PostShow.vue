<template>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <PostCard :post="post" :showButtonActive="showButtonActive"/>
        </div>
    </div>
  </div>
</template>

<script>
import PostCard from '../components/PostCard.vue';
import axios from 'axios';
export default {
    components: { PostCard },
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
                console.log(response.data.results);
                this.post = response.data.results;
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