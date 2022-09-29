<template>
    <div>
        <div class="card text-center">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <img :src="post.img" alt="">
                <h5 class="card-title"> {{ post.title }} </h5>
                <p class="card-text">{{ post.content  }}</p>
                <router-link :to="'/postShow/' + post.id" class="btn btn-primary" v-if="showButtonActive">Show</router-link>
            </div>
            <div class="card-footer text-muted">
                {{ post.date }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        post: {
            type: Object,
            required: true,
        },
        showButtonActive:{
            type: Boolean,
            required: true,
        }
    }
}
</script>

<style>

</style>