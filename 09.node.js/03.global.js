// 在一般使用console其实是global模块里的东西
// 完全写出来是global.console 我们一般使用的是console.log
// 所以 global.console.log() === console.log()
// 这里列举一些global中其他的方法
var obj = {a:3,b:4}
// 标准输出：
console.log(obj)

// 详细查看对象内容：
console.dir(obj)

// 输出信息
console.info(123)

// 警告输出
console.warn("警告")

// 错误输出
console.error("错误")
// 警告与错误在浏览器的控制台会被渲染上不同样式的文字

// 计时：
console.time("ok") // 计时开始
for (var i=0;i<9999999;i++){

}
console.timeEnd("ok") // 计时结束

// 判断输出
console.assert(2===12,"表达式不成立")
// assert在输出的时候会先判断第一个参数中的表达式
// 如果不成立 则会输出第二个参数的信息 如果成立 则什么都不输出

// 举例：
function fn(a,b) {
    return a+b
}
console.assert(fn(3,4)===8,"error")