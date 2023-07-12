<template>
  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li v-if="$store.state.tabflg != 0" @click="$store.commit('changeTabflg', 0), $store.commit('clearState')" class="header-button header-button-left">취소</li>
      <li>
        <img @click="$store.dispatch('getMainList')" class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li v-if="$store.state.tabflg == 1" @click="$store.commit('changeTabflg', 2)" class="header-button header-button-right">다음</li>
      <li v-if="$store.state.tabflg == 2" @click="$store.dispatch('writeContent')" class="header-button header-button-right">작성</li>
    </ul>
  </div>

  <!-- 컨텐츠 -->
  <ContainerComponent/>

  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
    </div>
  </div>
</template>

<script>
import ContainerComponent from './components/ContainerComponent.vue'


export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList');
  },
  components: {
    ContainerComponent,
  },
  methods: {
    updateImg(e) {
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImg', file[0]);
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changeTabflg', 1);
    }
  },
}
</script>

<style>
@import url('./assets/css/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
