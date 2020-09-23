// 首先需要导入vue与vuex
import Vue from 'vue'
import Vuex from 'vuex'
// 再导入这4个js
import actions from './actions'
import getters from './getters'
import state from './state'
import mutations from './mutations'

// 这里导入子模块store的js文件
import user from './modules/user'
// use使用
Vue.use(Vuex)
// 导出4个模块
export default new Vuex.Store({
  actions,
  getters,
  state,
  mutations,
  // 子模块数据注册使用modules对象
  modules:{
    user
  }
})
