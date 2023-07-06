<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->

  <div v-for="(item, i) in products" :key="i">
    <h4>{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
  </div>

  <!-- <div>
    <h4>{{ product1 }}</h4>
    <p>{{ price1 }}원</p>
  </div>
  <div>
    <h4 :style="styleR">{{ product2 }}</h4>
    <p>{{ price2 }}원</p>
  </div> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

export default { 
  name: 'App',
  data() {
    return { // 데이터 바인딩
      products: [
        {name: '티셔츠', price: '3,800'},
        {name: '바지', price: '5,000'},
        {name: '점퍼', price: '10,000'},
      ],
      product1: '양말',
      product2: '바지',
      price1: '3,800',
      price2: '5,000',
      styleR: 'color:red',
    }
  },
  // components: {
  //   HelloWorld
  // }
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
