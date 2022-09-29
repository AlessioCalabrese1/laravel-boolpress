<template>
  <div>
    <HeaderComponent />
    <router-view></router-view>
  </div>
</template>
    
<script>
import HomeComponent from "../pages/HomeComponent.vue";
import HeaderComponent from "../components/HeaderComponent.vue";
export default {
    name: 'App',
    components: { HomeComponent, HeaderComponent }
    
}
</script>

<style>

</style>