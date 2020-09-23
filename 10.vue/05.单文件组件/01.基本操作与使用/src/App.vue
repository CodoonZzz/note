<template>
  <div id="app">
    <hello-world></hello-world>
    <test>
      <com>

      </com>
    </test>
  </div>
</template>

<script>
  // 这就是vue项目一般的格式 使用脚手架就可以建立整个项目
  // 建立项目的方法1：
  //   ### 安装 `npm`
  //       `npm` 全称为 `Node Package Manager`，是一个基于`Node.js`的包管理器
  //       也是整个`Node.js`社区最流行、支持的第三方模块最多的包管理器。
  //       npm -v

  //   ### 由于网络原因 安装 `cnpm`
  // npm install -g cnpm --registry=https://registry.npm.taobao.org

  //   ### 安装 `vue-cli` 这就是vue的一个脚手架可以帮助我们建立一个项目架构
  // cnpm install -g @vue/cli
  //
  //   ### 安装 `webpack`
  //       `webpack` 是  `JavaScript` 打包器(module bundler)
  // cnpm install -g webpack

  //  ###输入指令 vue ui就可以在页面上建立项目 建立完成后这里默认是npm run serve运行项目


  // 方法二：此处省略安装npm cnpm
  // cnpm install vue-cli -g 全局安装脚手架
  // cnpm install webpack -g 全局安装webpack
  // 这个时候就可以创建项目了
  // vue init webpack 项目名字<项目名字不能用中文>
  // 里面路由后面都选no 严格模式单元测试等 都不需要

  // 这里 我们就开始书写vue

  // 项目结构说明：
  // node_modules 第三方包存储目录
  // public 静态资源 已经被托管 可以直接在url/后加入文件名访问
  // src 源代码
  //    - assets 资源目录 存放静态资源
  //    - components 存储其他组件目录
  //    - App.js 根组件
  //    - main.js 入口文件
  // .gitgnore git忽略文件
  // babel.config.js 不重要

  // vue单文件组件只有template script style
  // template就写模板 script里面不再实例一个vue对象 直接使用export default{name:'app'} 这里的名字就写文件名
  // 子组件在components中创建 要在这里使用 需要导入 使用es6写法

  import HelloWorld from "./components/HelloWorld.vue";
  import test from './components/test.vue'
  import com from './components/com.vue'

  // 导入之后在需要在components中注册

  export default {
    name: 'App',
    components: {HelloWorld,test,com}
  }
</script>

<!--这里需要说明 style可以加上scoped属性 这样style就是这个组件私有的 其他组件是不能使用的 不加该属性则是全局的-->
<style scoped>
  #app{
    margin: 0 auto;
    text-align: center;
  }
</style>
