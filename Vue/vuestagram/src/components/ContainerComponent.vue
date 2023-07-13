<template>
    <!-- 리스트 -->
    <div v-if="$store.state.tabflg == 0">
        <PostComponent
        />
        <button v-if="$store.state.moreflg" @click="$store.dispatch('getMoreList')">더보기</button>
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabflg == 1">
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}">
        </div>
        <div class="filter-box">
            <div class="filter" :class="item" v-for="item in filterList" :key="item" @click="$store.commit('changeFilter', item)" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}">
                <span>{{ item }}</span>
            </div>
        </div>
    </div>

    <!-- 글 작성 -->
    <div v-if="$store.state.tabflg == 2">
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <div>
            <textarea class="write-box" name="content" id="content" placeholder="내용을 입력하세요."></textarea>
        </div>
    </div>
</template>

<script>
import PostComponent from './PostComponent.vue'

export default {
	name: 'ContainerComponent',
    data() {
        return {
            message: '',
            filterList: [ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },
    components: {
        PostComponent,
    }
}
</script>

<style>
	
</style>