let express = require('express')
let app = express()
let bodyParser = require('body-parser')

app.use((req,res,next)=>{
  // 跨域请求头部：
  // 指定端口访问：
  // res.header('Access-Control-Allow-Origin', 'http://localhost:8080');
  res.header('Access-Control-Allow-Origin', '*');
  // 允许头部带来信息
  res.header("Access-Control-Allow-Headers", "Content-Type,Content-Length, Authorization, Accept,X-Requested-With");
  // 这里是指定请求方式 可以设置get post
  res.header('Access-Control-Allow-Methods', '*');
  if(req.method.toLocaleLowerCase === 'options'){
    return res.end()
  }
  next()
})

app.use(bodyParser.json())

app.get('/user',(req,res) => {
  res.json({
    name: 'sxy'
  })
})

app.listen(3000)
