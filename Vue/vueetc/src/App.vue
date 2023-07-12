<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <h1>{{ data.name }}</h1>
  <button @click="data.name = '김김김'">버튼</button>
  <br><br>
  <h1>{{ data2.name }}</h1>
  <button @click="data2.name = 'data2'">버튼</button>
  <!-- <h1>{{ test }}</h1>
  <button @click="test = '이이이'">버튼2</button> -->
  <!-- <router-link to="/">홈으로</router-link>
  <router-link to="/post">post</router-link> -->
  <!-- <router-view :test="222"> -->
  <!-- </router-view> -->
  <PostComponent :propsTest="1"></PostComponent>
</template>

<script>
import PostComponent from './components/PostComponent.vue';
import { ref, reactive } from 'vue';

export default {
  name: 'App',
  setup() {
    let data = ref({
      name: '홍길동',
      age: 20,
    }); // setup() 에서 데이터바인딩을 사용하려면 ref 안에 선언해야 함
    let data2 = reactive({
      name: '신짱구',
      age: 5,
    });
    let test = 'bbb';
    return { test, data, data2 };
  }, 
  components: {
    PostComponent,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
