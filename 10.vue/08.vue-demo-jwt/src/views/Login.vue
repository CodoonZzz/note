<template>
  <div>
    <i-input :value.sync="value" placeholder="请输入..." style="width: 300px"></i-input>
    <i-button type="primary">登录</i-button>
  </div>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                value: ""
            }
        }
    }
</script>

<style scoped>

</style>
