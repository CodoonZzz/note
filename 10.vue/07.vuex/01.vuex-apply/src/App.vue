<template>
  <div id="app">
    <!--    {{$store.getters.getName}}-->
    <!--    {{$store.getters.getUserName}}-->
    <br>
    {{name}}
    {{userName}}
    {{getName}}
    {{getUserName}}
    <button type="button" @click="change1">mutation点我</button>
    <button type="button" @click="change2">action点我</button>
  </div>
</template>

<script>
    import {mapState,mapGetters,mapMutations,mapActions} from 'vuex'
    import user from "./store/modules/user";

    export default {
        name: 'App',
        // 引入map这个模块后 我们需要在全局的计算属性中使用
        // 使用对象展开运算符...
        computed: {
            ...mapState(['name']),
            ...mapState('user', ['userName']),
            ...mapGetters(['getName']),
            ...mapGetters('user', ['getUserName'])
        },
        methods:{
            ...mapMutations('user', ['info']),
            ...mapActions('user', ['infos']),
            change1(){
                // this.$store.commit('user/info','SLL')
                this['info']('SLL')
            },
            change2(){
                // this.$store.dispatch('user/infos','SLL')
                this['infos']('SLL')
            }
        }

    }
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
