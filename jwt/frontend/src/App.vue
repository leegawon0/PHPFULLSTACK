<template>
  <div v-if="unauth" class="store">
    <label for="id">아이디 </label>
    <input type="text" id="id" v-model="id">
    <br><br>
    <label for="pw">비밀번호 </label>
    <input type="password" id="pw" v-model="pw">
    <br><br>
    <button @click="login()">로그인</button>
  </div>
  <div v-if="auth">
    <p>로그인 상태입니다.</p>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'App',
  data() {
    return {
      token: '',
      unauth: true,
      auth: false,
    }
  },
  methods: {
    login() {
      let data = {
        "id": this.id,
        "pw": this.pw,
      }
      axios.post('http://localhost:8000/api/login', data)
      .then(res => {
        console.log(res.data);
        this.token = res.data.token;
        this.unauth = false;
        this.auth = true;
      })
    },
  },
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
