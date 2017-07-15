$(document).ready(function(){
  // Initiailize
  var indiesquare = new IndieSquare({
    'apikey': 'abcdefghijk1234567890',
    // 'use-server': true,
    // 'port': 8080
  });

  var dest_btc_addr = jQuery("#bc-address").data("bc-address");

  //WEBの判別
  if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
    //スマホの場合
    $(".indiesquare-button").show();
    $(".indiesquare-button-web").hide();
  } else {
    //WEBの場合
  }

  $(".indiesquare-button-web").click(function(){
    window.location = "https://wallet.indiesquare.me";
  });

  $(".indiesquare-button").click(function(){
    indiesquare.transition({'screen': 'send', 'token': 'BTC', 'destination': dest_btc_addr},
      function(url, urlScheme, error){
        if( error ){
          return;
        }
      });
  });

});
