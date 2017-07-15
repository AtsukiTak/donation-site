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
    indiesquare.transition({'screen': 'send', 'token': 'BTC', 'destination': '1JynF1GgD279DBZxQBubJXz4NuHcTy65k3', 'amount': 0.1},
      function(url, urlScheme, error){
        if( error ){
          return;
        }
      });
  });

});
