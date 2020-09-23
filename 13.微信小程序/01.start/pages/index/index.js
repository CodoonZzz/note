//index.js
//获取应用实例
const app = getApp()

Page({
  data: {
    disabled:false,
    loading:false
  },
  change(e){
    switch(e.currentTarget.id){
      case "buttonOne":
        this.setData({
          disabled: !this.data.disabled
        })
        break;
      case "buttonTwo":
        this.setData({
          loading: !this.data.loading
        })
        break;
    }
  }
})
