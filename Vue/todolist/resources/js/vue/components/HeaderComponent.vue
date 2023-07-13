<template>
    <div class="container mt-5 mb-5">
        <div @click="$store.dispatch('getMainList')">
            <h1>Todo List</h1>
        </div>
        <div class="mt-5">
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="할 일을 입력하세요." id="text">
                <button class="col-2 btn btn-primary" @click="$store.dispatch('writeContent')">등록</button>
            </form>
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