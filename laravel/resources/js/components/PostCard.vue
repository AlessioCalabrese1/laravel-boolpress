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
    }
}
</script>

<style>

</style>