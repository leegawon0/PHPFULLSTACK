<template>
    <div>
        <h1>List</h1>
        <div class="post" v-for="item in $store.state.ListData" :key="item">
            <div class="post-content">
                <p>{{ item.content }}</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'List',
}
</script>
<style>
    
</style>