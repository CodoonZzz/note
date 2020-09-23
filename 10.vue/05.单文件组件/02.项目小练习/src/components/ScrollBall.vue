<template>
    <!-- 子组件接收到父组件传来的属性名 就在script中注册并校验
    而后在这里使用style属性控制background的值
    在style前使用冒号，不仅仅是因为bgcorlor是一个表达式
    原生行内样式并不支持对象写法 但vue可以 所以必须在style前使用冒号 -->
    <!-- <div class="ball" :style={background:bgcolor}> -->
    <!-- 而我们说过 如果一个数据依赖于另一个数据 那么最好使用计算属性 -->
    <div class="ball" :style='style' :id='ballId'>
        <!-- 运动：首先我们需要给每一个div加入一个唯一标示可以获取
        我们可以使用ref 但是在这里设置固定ref 那么每一个组件ref就会重叠
        所以我们使用固定名+uid 前面使用过 uid对没个组件都是唯一的 -->
        <!-- 这里可以使用id 也可以使用ref 我们先使用id 使用计算属性-->
    </div>
</template>

<script>
export default {

    props:{
        bgcolor:{
            type:String,
            default:"white"
        },
        start:{
            type:Number,
            default:0
        },
        end:{
            type:Number,
            default:200
        },
        speed:{
            type:Number,
            default:1
        }
    },
    computed: {
        style(){
            return {background:this.bgcolor}
        },
        ballId(){
            return "ball"+this._uid
        }
    },
    mounted () {
        // 首先获取当前元素
        var oBall = document.getElementById(this.ballId)
        var left = this.start
        var run = setInterval(()=>{
            if(left>this.end){
                clearInterval(run)
            }
            left+=this.speed
            oBall.style.transform = `translate(${left}px)`
        },10)
    }

}
</script>

<style scoped>
    .ball{
        width: 100px;
        height: 100px;
        border: 1px solid black;
        border-radius: 50%;
    }
</style>