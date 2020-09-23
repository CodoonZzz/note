
import axios from "axios";

class AjaxRequest {
  constructor() {
    // 检查是否为生产环境
    this.baseURL = process.env.NODE_ENV === "production"?"/":"http://localhost:3000";
    this.timeout = 3000;// 超时
  }
  merge(options) {
    // 合并返回：
    return {...options,baseURL:this.baseURL,timeout:this.timeout};
  }
  // 拦截器：
  setInterceptor(instance) {
    instance.interceptors.request.use((config)=>{
      config.headers.Authorization = "abc";
      return config;
    });
    instance.interceptors.response.use((res)=>{
      return res.data;
    });
  }
  request(options) {
    let instance = axios.create();
    let config = this.merge(options);
    this.setInterceptor(instance);
    return instance(config); // 返回一个promise
  }
}

export default new AjaxRequest
