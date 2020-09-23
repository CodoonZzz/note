<template>
  <div id="app" class="container">
    <router-link to='/Home'>
      <button class="btn btn-default">跳转到Home</button>
    </router-link>
    <router-link to="/User">
      <button class="btn btn-default">跳转到User</button>
    </router-link>
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
