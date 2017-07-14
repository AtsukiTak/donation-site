<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kizuna</title>
<link href="/favicon.ico" type="image/x-icon" rel="icon"/>
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
<link rel="stylesheet" href="/asset/semantic/semantic.min.css"/>
<link rel="stylesheet" href="/asset/css/base.css"/>
<link rel="stylesheet" href="/asset/css/top.css"/>
<script src="/asset/js/jquery-3.1.1.min.js"></script>
<script src="/asset/semantic/semantic.min.js"></script>
<meta name="google-site-verification" content="s6EP4Yy0sRztR2i_B14Drr7aD1j3T_WhQKQp7HdtdaQ" />
<meta name="msvalidate.01" content="17B8AD371655CFF3112ABB4253B88E61" />

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-91335565-1', 'auto', {'allowLinker': true});
ga('require', 'displayfeatures');
ga('require', 'linkid', 'linkid.js');
ga('require', 'linker');
ga('linker:autoLink', ['kizuna.world','gracone.co.jp', 'www.gracone.co.jp'] );
ga('send', 'pageview');
</script>

<script src="https://apis.google.com/js/platform.js" async defer>
{
parsetags: 'explicit'
}
</script>

<script src="https://cdn.indiesquare.me/v1/indiesquare.min.js"></script>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/master/qrcode.min.js"></script>
<script>
$(document).ready(function(){
// Initiailize
var indiesquare = new IndieSquare({
    'apikey': 'abcdefghijk1234567890',
    // 'use-server': true,
    // 'port': 8080
});

// Get balance on source address.
indiesquare.getBalances({'source': '1JynF1GgD279DBZxQBubJXz4NuHcTy65k3'}, function(data, error){
    if( error ){
        console.error(error);
        return;
    }
    console.log('Get balance on source address.');
    console.dir(data);
});

//WEBの判別
if(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1){
  $(".indiesquare-button").hide();
} else {
  $(".indiesquare-button").hide();
}

$(".indiesquare-button").click(function(){
//alert("ok");
indiesquare.transition({'screen': 'send', 'token': 'BTC', 'destination': '1JynF1GgD279DBZxQBubJXz4NuHcTy65k3', 'amount': 0.1}, function(url, urlScheme, error){
    if( error ){
        console.error(error);
        return;
    }
console.log(url);
    new QRCode(document.getElementById('qrcode'), {
        text: url,
        width: 128, height: 128,
        correctLevel : QRCode.CorrectLevel.L
    });
});
});

});
</script>
</head>
