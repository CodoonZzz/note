// 这个JS文件将是项目的js入口文件
import $ from 'jquery'
// import *** from ***是es6导入模块的方式
// 但是这个这样导入浏览器并不会解析 所以我们要使用webpack来帮我们
// 将这个js处理后新创建一个js文件
// 指令：webpack 当前js文件位置 处理后的js文件位置
// 但是不知道是依赖没装好还是怎么 这个指令一直没有实现 如果以后可以学习到 那么这里将作出说明
// 这个是解决了问题的帖子可参考-->
// https://www.cnblogs.com/wanghuoya/p/9286431.html-->
// 这里根据步骤装好依赖后使用 npm run build来打包 这个打包指令可以修改
// 在package.json中修改 build可以修改为自己设置的
// 打包后 导入打包好的js文件即可
// 如果我们在这里修改了代码 那么就需要重新打包
// 但是打包指令太长 每次输入npm run build就显得繁琐
// 可以在根目录下创建一个webpack.config.js的配置文件
// 详细转到webpack.config.js中查看
$(function () {
    $('li:odd').css({background:'red'})
    $('li:even').css({background: 'green'})
})