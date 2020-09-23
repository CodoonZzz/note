// 这里可以有独自的state、mutation、action、getter、
// 这里做演示就直接写在一个js文件内了
export default {
  namespaced:true,
  state:{
    userName:'sll'
  },
  getters:{
    getUserName(state){
      return state.userName + "999"
    }
  },
  mutations:{
    info(state,nUserName){
      state.userName = nUserName
    }
  },
  actions:{
    infos({commit},nUserName){
      setTimeout(()=>{
        commit('info',nUserName)
      },2000);
      setTimeout(()=>{
        commit('info','sll')
      },3000);
    }
  }
}
