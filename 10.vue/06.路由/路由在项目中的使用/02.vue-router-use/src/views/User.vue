<template>
  <div>
    <router-link to="/User/list">
      <button type="button" class="btn btn-default">用户列表</button>
    </router-link>
    <router-link to="/User/add">
      <button type="button" class="btn btn-default">用户添加</button>
    </router-link>
    <router-view></router-view>
  </div>
</template>
