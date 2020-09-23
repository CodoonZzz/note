// 导入实例
import axios from '../libs/ajaxRequest'

// 导出一个函数
// 接口：
export const getUser = ()=>{
  return axios.request({
    url:'/user',
    method:'get'
  })
}
