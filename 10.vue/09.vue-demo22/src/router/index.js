import Vue from 'vue'
import Router from 'vue-router'
import HomeContainer from "../views/tabbar/HomeContainer";
import MemberContainer from "../views/tabbar/MemberContainer";
import SearchContainer from "../views/tabbar/SearchContainer";
import ShopcarContainer from "../views/tabbar/ShopcarContainer";


Vue.use(Router)

export default new Router({
  routes: [
    {
      path:'/home',
      component:HomeContainer
    },
    {
      path:'/member',
      component:MemberContainer
    },
    {
      path:'/search',
      component:SearchContainer
    },
    {
      path:'/shopcar',
      component:ShopcarContainer
    }
  ]
  ,
  linkActiveClass:'mui-active'

})
