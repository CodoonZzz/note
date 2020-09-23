// 这里将是配置webpack的文件

// 这个js文件通过node语法向外暴露一个配置对象
const path = require('path')
module.exports = {
    entry: path.join(__dirname, './src/index.js'),
    // 入口 指定被打包的文件名与位置 __dirname表示当前目录 后边是具体的文件 
    // 使用join字符串拼接， 因为入口文件位置与下面的出口文件位置都必须是绝对路径
    output: {
        path:path.join(__dirname,'./dist'), //出口 指定打包后的位置
        filename:'main.js' //指定打包后的文件名
    }
}
// 在之前的说明中 本来打包指令应该是 webpack 入口文件位置 出口文件位置
// 但是在使用过程中却出现为问题只能使用npm run build
// 但是在这里可以不用管webpack的指令 在这里修改后 我们可以使用更简单的指令
// 现在在设置后 我们只需要输入webpack即可打包