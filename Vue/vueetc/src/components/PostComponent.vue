<template lang="">
    <div>
        <h1>PostComponent.vue</h1>
        <p>{{ propsTest }}</p>
    </div>
</template>
<script>
import { ref, toRefs } from 'vue';

export default {
    name: 'PostComponent',
    props: {
        propsTest: Number,
        // test: Number,
        
    },
    setup(props) {
        let data = ref([]);
        let { propsTest } = toRefs(props);

        console.log(propsTest.value);

        // onmounted(() => {
        //     // 처리
        // })
        // onBeforeMount(() => {
        //     // 처리
        // })

        return { data };
    }

}
</script>
<style lang="">
    
</style>