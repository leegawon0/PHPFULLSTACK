<template>
    <div>
        <h1>App.vue</h1>
        <HeaderComponent></HeaderComponent>
        <ListComponent></ListComponent>
    </div>
</template>
<script>
import HeaderComponent from './components/HeaderComponent.vue'
import ListComponent from './components/ListComponent.vue'

export default {
    name: 'App',
    created() {
    this.$store.dispatch('getMainList');
    },
    components: {
        HeaderComponent,
        ListComponent,
    },
}
</script>
<style>
    
</style>