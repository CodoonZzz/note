/*
				我们规定函数所传参数与CSS选择器一致
				#id      通过id获取元素节点
				.class   通过class获取元素节点
				tagname  通过标签名获取元素节点
				name=xxx 通过name获取元素节点  
			*/
function $(vArg) {
	//首先对所传参数进行区分
	switch (vArg[0]) {
		case "#":
			return document.getElementById(vArg.substring(1))
			break;
		case ".":
			//由于classname在IE的兼容问题,我们直接安保01中封装的函数也拿来使用
			return elementsByClassName(document, vArg.substring(1))
			break;
		default:
			//剩下两种情况要对前五个字符进行判断
			var str = vArg.substring(0, 5)
			if (str == "name=") {
				return document.getElementsByName(vArg.substring(5))
			} else {
				return document.getElementsByTagName(vArg)
			}
			break;
	}
}

function elementsByClassName(node, classStr) {
	var oNode = node.getElementsByTagName('*')
	var arr = []
	for (var i = 0; i < oNode.length; i++) {
		if (oNode[i].className == classStr) {
			arr.push(oNode[i])
		}
	}
	return arr
}
function removeSpaceNodes(node){
	//首先获取到传入参数的所有子节点
	var oNode = node.childNodes
	//遍历整个子节点
	//要倒着遍历 因为正遍历删除节点后 下个节点就会代替这个位置 而遍历会接着下一个节点去查找 所以会跳过该节点
	for (var i=oNode.length-1;i>=0;i--) {
		// 如果发现有nodetype为文本和节点文本为空白,则删除这个节点
		if(oNode[i].nodeType==3&&/^\s+$/.test(oNode[i].nodeValue)){
			node.removeChild(oNode[i])
		}
	}
}
function createElementWithText(tagName,text) {
	var oNode = document.createElement(tagName);
	var oText = document.createTextNode(text)
	oNode.appendChild(oText)
	return oNode
}
function inserAfter(newNode,oldNode) {
	//先获取他的父节点
	var oldNodeParentNode = oldNode.parentNode;
	//再判断下需要插入在的那个节点是不是最后一个节点
	if (oldNodeParentNode.lastChild==oldNode) {
		oldNodeParentNode.appendChild(newNode)
	} else {
		oldNodeParentNode.insertBefore(newNode,oldNode.nextSibling)
	}
}