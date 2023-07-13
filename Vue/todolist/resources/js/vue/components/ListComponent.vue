<template>
    <div class="container text-center">
        <div class="post" v-for="item in $store.state.listData" :key="item">
            <div class="post-content">
                <p>
                    <div v-if="item.completed == false" class="form-check">
                        <input @click="$store.dispatch('completeContent', item.id)" class="col-1 form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="col-9 form-check-label">{{ item.content }}</label>
                        <button class="ms-4 col-2 btn btn-danger" @click="$store.dispatch('deleteContent', item.id)">삭제</button>
                    </div>
                    <div v-if="item.completed == true" class="form-check">
                        <input @click="$store.dispatch('cancelContent', item.id)" class="col-1 form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                        <label class="col-9 form-check-label cancel">{{ item.content }}</label>
                        <button class="ms-4 col-2 btn btn-danger" @click="$store.dispatch('deleteContent', item.id)">삭제</button>
                    </div>
                </p>
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
    .cancel {
        text-decoration: line-through;
        color: rgb(199, 199, 199);
    }
</style>