import Vue from 'vue'
import Router from 'vue-router'
// 首先引入两个模块 第一个是vue模块 第二个就是路由模块
import HelloWorld from '@/components/HelloWorld'

Vue.use(Router)
// 第二步use 这里为我们注册好了 router-link与router-view组件

// 第三步生成路由实例
export default new Router({
  // mode:"hash", 这里设置下路由模式
  // 默认是hash 还有一种是es5中的history.pushStare()
  // hash兼容性非常好 而另一种有兼容问题 一般就使用hash
  // 所以我们可以设置路由模式 也可以不设置路由模式
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    }
  ]
})
