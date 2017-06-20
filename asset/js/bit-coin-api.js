jQuery(function () {

  // BitCoin情報取得
  function getBitCoinInfo() {
    var bcaddress = jQuery("#bc-address").data("bc-address");
    jQuery.ajax({
      url: 'https://blockexplorer.com/api/addr/' + bcaddress,
      dataType: 'json',
      type: 'GET',
      success: function (data) {
        // balance設定
        $("#btc").text((Math.round((data.totalReceived * 1000) * 100) / 100) + "mBTC");
        $("#btcLoader").removeClass("active");

        // トランザクション履歴設定
        $("#txApperances").text(data.txApperances + "回");
        $("#txApperancesLoader").removeClass("active");

        var totalReceived = data.totalReceived;

        // JPY計算設定
        jQuery.ajax({
          url: "https://bitflyer.jp/api/echo/price",
          dataType: "json",
          type: 'GET',
          success: function (data) {
            var price = data.mid;
            $("#jpy").text("(約" + Math.ceil(totalReceived * price).toLocaleString() + "円)");
          },
          error: function (data) {
            console.error(data);
          }
        });
      },
      error: function (data) {
        console.error(data);
      }
    });
  }

  // 実行
  getBitCoinInfo();
});
