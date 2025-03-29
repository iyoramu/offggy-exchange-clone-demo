/**
*调用方法

	var _visitor = new Visitor();

	alert(_visitor['idvisitor']);
	alert(_visitor['idsite']);
	alert(_visitor['comfromUrl']);
	alert(_visitor['comfromLinkId']);
	alert(_visitor['currentUrl']);
	alert(_visitor['currentLinkId']);
*/




var domain = "/piwik";

var domain_order_url = "/thtml";
/**
 *访客信息
 *
 */
function Visitor() {
    var visitor2 = new Visitor2();
    visitor2.initVisitor();
    this.idvisitor = visitor2.idvisitor; //访客id
    this.idsite = visitor2.idsite; //网站id
    //this.comfromUrl = visitor2.comfromUrl;//来源url
    //this.comfromLinkId = visitor2.comfromLinkId;//来源活动ID
    this.currentUrl = visitor2.currentUrl; //当前url
    //this.currentLinkId = visitor2.currentLinkId;//当前活动记录ID
}

function Visitor2() {
    this.idvisitor = null; //访客id
    this.idsite = null; //网站id
    //this.comfromUrl = null;//来源url
    //this.comfromLinkId = null;//来源活动ID
    this.currentUrl = null; //当前url
    //this.currentLinkId = null;//当前活动记录ID

    this.initVisitor();
}

Visitor2.prototype.initVisitor = function() {
    this.idsite = getIdsite(); //网站id
    this.idvisitor = getIdvisitor(this.idsite);
    this.currentUrl = getCurrentUrl(); //当前url

    //var inquiryInfo = getInquiryInfo(this.idvisitor, this.idsite, getCurrentUrl());

    //this.comfromUrl = '-1';//inquiryInfo['comfromUrl'];//来源url
    //this.comfromLinkId = '-1';//inquiryInfo['comfromLinkId'];//来源活动ID
    this.currentUrl = getCurrentUrl(); //inquiryInfo['submitUrl'];//当前url
    //this.currentLinkId = '-1';//inquiryInfo['currentLinkId'];//当前活动记录ID
}




/**
 *获取访客id
 */
function getIdvisitor(idsite) {
    var cookie_name = "_pk_id." + idsite + "."; //为大致参数名，后面还有一个随机哈希值
    var cookie_info = getVisitorCookie(cookie_name);
    return cookie_info.split(".")[0];
}


/**
 *获取网站id
 */
function getIdsite() {
    for (var i = 0; i < arr_.length; i++) {
        if (arr_[i] == 'setSiteId') {
            return arr_[i + 1];
        }
    }
    return null;
}



/**
 *获取当前url
 */
function getCurrentUrl() {
    return window.location.href;
}

/**
 *获取询盘信息
 *
 */
function getInquiryInfo(idvisitor, idsite, currentUrl) {
    var url = domain + "/v1/matomoLogVisit/get_inquiry_info.thtml"; //接口

    var inquiry_info = ""; //来源url

    var param = {
        "idvisitor": idvisitor,
        "idsite": idsite,
        "currentUrl": currentUrl
    }
    $.ajax({
        type: "POST",
        //contentType: "application/json", 默认值: "application/x-www-form-urlencoded"。发送信息至服务器时内容编码类型。
        url: url,
        async: false, //async:false, false 非异步
        data: param,
        timeout: 30000, //超时时间：30秒
        dataType: 'json',
        success: function(data) {
            if ("0" == data.code) { //
                inquiry_info = data.data;
            }
        }, //end of success
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log('textStatus：' + textStatus); //js 日志
            //TODO: 处理status， http status code，超时 408

        }
    });

    return inquiry_info;
}

/**
 *获取cookie中的访客id信息
 *like_param_name cookie中访客id的大致参数名，因为格式固定为："_pk_id." + this.getIdsite() + "." + 哈希值，哈希值随机，所以无法得知具体参数名
 */
function getVisitorCookie(like_param_name) {
    if (document.cookie.length > 0) {
        var cookie_str = document.cookie;
        c_start = cookie_str.indexOf(like_param_name);
        if (c_start != -1) {
            var array = cookie_str.split(like_param_name);
            var c_start_end = array[1].indexOf("=");
            c_start = c_start + like_param_name.length + c_start_end + 1;
            c_end = document.cookie.indexOf(";", c_start)
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end))
        }
    }
    return ""
}

/**
 *js获取cookie
 */
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=")
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1
            c_end = document.cookie.indexOf(";", c_start)
            if (c_end == -1) c_end = document.cookie.length
            return unescape(document.cookie.substring(c_start, c_end))
        }
    }
    return ""
}