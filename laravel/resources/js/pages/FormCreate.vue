<template>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post">
                <input type="text" name="img" placeholder="Inserisci il link di un immagine!" v-model="img">

                <input type="text" name="title" placeholder="Inserisci un titolo!" v-model="title">

                <input type="text" name="content" placeholder="Inserisci del contenuto!" v-model="content">

                <input type="text" name="category" placeholder="Scegli una categoria" v-model="category">
                <router-link @click="createNewPost()" :to="{name: 'post.show', params: {id: '1'}}"  class="btn btn-primary">Crea</router-link>
            </form>
        </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
    data: function(){
        return{
            img: 'https://www.focus.it/images/2021/01/26/cani-madre-e-cucciolo_1020x680.jpg',
            title: 'Cani belli',
            content: 'asdasdasdasdasd',
            category: 1
        }
    },
    method: {
        createNewPost(){
            axios.post(`http://127.0.0.1:8000/api/posts/store?img=${this.img}title=${this.title}content=${this.content}category=${this.category}`)
            .then((response) => {
                console.log(response);
            }).catch((error) =>{
                console.warn(error);
            })
        },
    }
}
</script>

<style>

</style>