<template>
  <div id="app">
    <!-- 这里做三个球 让父组件指定他的颜色 并且运动-->
    <!-- 需要父组件来控制背景颜色就需要父组件传值给子组件
    这里传给子组件一个bgcolor的属性 值为颜色 可以使用data传数据 那么久就需要使用: -->
    
    <!-- 运动：依旧是父组件给子组件传值 需要传入开始位置与结束位置 -->
    <!-- 这里需要字符串为数字 所以加： -->
    <ScrollBall bgcolor="red" :start="20" :end="200" :speed="2" ></ScrollBall>
    <ScrollBall bgcolor="yellow" :start="40" :end="600" :speed="4" ></ScrollBall>
    <ScrollBall bgcolor="green" :start="0" :end="1000" :speed="3" ></ScrollBall>
  </div>
</template> 

<script>
import ScrollBall from './components/ScrollBall'
export default {
  name: 'App',
  components:{
    ScrollBall,
  },
  data () {
    return {

    }
  }
}
</script>

<style>
/* #app{
  background-attachment: fixed;
} */
</style>
