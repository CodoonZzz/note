// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
// 这里导入router文件夹中的index.js 这里只需要写router文件夹即可 会自动匹配

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  // 然后在这里注册
  router,
  components: { App },
  template: '<App/>'
})
