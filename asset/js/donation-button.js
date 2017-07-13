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
 //スマホの場合
 $(".indiesquare-button").hide();
} else {
 //WEBの場合
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
