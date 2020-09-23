import Vue from 'vue'
import Router from 'vue-router'
import routes from './routes'

Vue.use(Router)

// 由于路由配置可能会很多
// 我们在这里把路由设置规则数组在另一个文件routers.js中编写并导出
// 在这里导入即可
export default new Router({
  routes, 
})
