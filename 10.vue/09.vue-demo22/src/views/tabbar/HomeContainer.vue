<template>
  <mt-swipe :auto="4000">
    <mt-swipe-item>1</mt-swipe-item>
    <mt-swipe-item>2</mt-swipe-item>
    <mt-swipe-item>3</mt-swipe-item>
  </mt-swipe>
</template>

<script>
    export default {
        name: "HomeContainer",
        data(){
            return{}
        },
        created(){
            this.getSwipeImg()
        },
        methods:{
            getSwipeImg(){

                this.$http.get("http://www.escook.cn:3000/api/getnewslist").then(result=>{

                    console.log(1)
                    console.log(result)
                })

            }
        }
    }
</script>

<style scoped>
  .mint-swipe{
    height: 300px;
  }
</style>
