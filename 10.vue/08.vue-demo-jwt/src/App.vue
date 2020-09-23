<template>
  <div id="app">
    <router-link to="/home">主页</router-link>
    <router-link to="/login">登录</router-link>
    <router-link to="/profile">个人中心</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
</style>
