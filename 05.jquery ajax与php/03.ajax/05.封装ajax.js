function ajax(type,url,param,callback) {
    var xhr
    if (window.XMLHttpRequest){
        xhr = new XMLHttpRequest()
    }else {
        xhr = new ActiveXObject('Microsoft')
    }

    if (type=='get'){
        var content = null
        url+=('?'+param)
    }else if (type=='post'){
        var content = param
    }
    xhr.open(type,url,true)
    if (type=='post'){
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
    }
    xhr.send(content)


    xhr.onreadystatechange = function () {
        if (xhr.readyState===4){
            if (xhr.status===200){
                var data = xhr.responseText
                callback(data)
            }
        }
    }
}