var indexCountrys = new Array();
indexCountrys[0] = new Array("Asia", "en", "Qatar;https://www.yutong.qa");
indexCountrys[1] = new Array("Africa", "en,fr", "");
indexCountrys[2] = new Array("Europe", "en,fr,es", "France;https://www.yutong.fr");
indexCountrys[3] = new Array("North America", "en", "Mexico;https://www.yutong.mx");
indexCountrys[4] = new Array("South America", "es", "");
indexCountrys[5] = new Array("Oceania", "en", "Australia;https://www.yutong.com.au");

function gotoUrl(continent, country) {
    for (i = 0; i < indexCountrys.length; i++) {
        var indexCountry = indexCountrys[i];
        if (indexCountry[0] == continent) { //大洲匹配
            var indexCountryDetailArr = indexCountry[2].split(";"); //国家站列表
            var indexCountryLanguageArr = indexCountry[1].split(";"); //语言列表
            if (indexCountryDetailArr.length > 0) { //有国家站
                var countryPatch = false; //国家站是否匹配
                if (indexCountryDetailArr[0].indexOf(country) > -1) {
                    var countrys = indexCountryDetailArr[0].split(";");
                    var websites = indexCountryDetailArr[1].split(";");
                    for (j = 0; j < countrys.length; j++) {
                        if (countrys[j] == country) {
                            countryPatch = true;
                            window.location.href = websites[j];
                            break;
                        }
                    }
                }
                if (!countryPatch) { //未找到匹配的国家，按照对应语言进行跳转
                    var userLanguage = navigator.language;
                    for (k = 0; k < indexCountryLanguageArr.length; k++) {
                        if (userLanguage.indexOf(indexCountryLanguageArr[k]) > -1) {
                            countryPatch = true;
                            window.location.href = 'https://' + indexCountryLanguageArr[k] + 'yutong.com';;
                            break;
                        }
                    }
                }
            }
            break;
        }
    }
    window.location.href = 'https://en.yutong.com';
}

acceptCookie = sessionStorage.getItem('acceptCookie');
if (window.location.href.indexOf('www.yutong.com') > -1) {
    if (acceptCookie && acceptCookie == 'true') {
        var url = '/prod-api/getIpInfo.thtml';
        $.ajax({
            type: "get",
            url: url,
            async: false, //async:false, false 非异步
            timeout: 30000, //超时时间：30秒
            dataType: 'json',
            success: function(data) {
                if (data.done) {
                    if (data.country != 'Local') { //局域网							
                        var country = data.country;
                        var continent = data.continent;
                        gotoUrl(continent, country);
                    } else {

                    }
                } else {

                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('textStatus：' + textStatus);
            }
        });
    } else {
        window.location.href = 'https://en.yutong.com';
    }
}