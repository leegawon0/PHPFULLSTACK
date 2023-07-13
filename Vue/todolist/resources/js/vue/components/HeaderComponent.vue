<template>
    <div>
        <h1>Header</h1>
        <div>
            <input type="text" id="text">
            <button @click="$store.dispatch('writeContent')">등록</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Header',
}
</script>
<style>
    
</style>