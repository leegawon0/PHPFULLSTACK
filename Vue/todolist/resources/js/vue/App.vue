<template>
    <div class="container text-center">
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
    @import url('../../css/bootstrap.css');
    @font-face {
        font-family: 'Dovemayo_wild';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2302@1.0/Dovemayo_wild.woff2') format('woff2');
        font-weight: normal;
        font-style: normal;
    }
    * {
        font-family: 'Dovemayo_wild';
        font-size: 1.1rem;
    }
    .container {
        max-width: 500px;
    }
    h1 {
        font-size: 4rem;
    }
</style>