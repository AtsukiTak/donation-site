<?php
$project_info_json_str = file_get_contents($conf->ROOT_DIR.'/data/projects/'.$project_id.'/info_'.$lang.'.json');
$project_info = json_decode($project_info_json_str);
?>

<script src="./asset/js/bit-coin-api.js"></script>
<script src="./asset/js/jquery-qrcode.min.js"></script>
<script>
  $(document).ready(function(){
    $('.ui.accordion').accordion();
  });
</script>

    <div class="ui vertical segment">
      <div class="ui fluid raised card">
        <div class="ui stackable stretched grid" style="margin: 0">
          <div class="twelve wide column" style="padding: 0px">
            <div class="ui fluid image">
              <img src="./data/projects/<?php echo $project_id ?>/thumbnail.jpg">
            </div>
          </div>
          <div class="four wide column" style="margin: 0">
            <div class="ui items">
              <div class="item">
                <div class="content">
                  <div class="ui tiny header"><i class="bitcoin icon"></i>Be Donated</div>
                  <div class="ui active centered mini inline loader description" id="btcLoader"></div>
                  <div class="vertical right aligned segment">
                    <p id="btc" class="ui large header" style="background-color:#ffdf8285; color:#ff6931"></p>
                    <p id="bch" class="ui large header" style="background-color:#90ee9024; color:#529900"></p>
                    <p id="jpy" class=""></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="content">
                  <div class="ui tiny header"><i class="yen icon"></i>Goal</div>
                  <div class="vertical right aligned segment">
                    <p class=""><?php echo $project_info->goal_amount; ?></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="content">
                  <div class="ui tiny header"><i class="users icon"></i>Supporters</div>
                  <div class="ui active centered mini inline loader description" id="txApperancesLoader"></div>
                  <p id="txApperances" class="ui right floated"></p>
                </div>
              </div>
              <div class="item">
                <div class="content">
                  <div class="ui tiny header"><i class="wait icon"></i>Finish Date</div>
                  <div class="vertical right aligned segment">
                    <p class=""><?php echo $project_info->finish_date; ?></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="content" style="width: inherit">
                  <div class="ui small header"><i class="heart icon"></i>Donate</div>
                  <div class="ui styled accordion" style="margin-left:10%; margin-top:10px; width:90%;">
                    <div class="<?php if ($project_info->bch_address == "") { echo "active"; } ?> title" style="background-color: #ffdf8285; color: orangered">with Bitcoin</div>
                    <div class="<?php if ($project_info->bch_address == "") { echo "active"; } ?> content" style="background-color: #ffdf8285; color: orangered">
                      <div id="qrcode-btc" style="margin: 0px auto; width: 100px; height: 100px"></div>
                      <div class="ui mini input" id="btc-address" data-btc-address="<?php echo $project_info->btc_address; ?>" style="width: 100%">
                        <input value="<?php echo $project_info->btc_address; ?>" readonly onclick="this.setSelectionRange(0, 9999);">
                      </div>
                      <div>
                        <button class="indiesquare-button">IndieSquare Walletで寄付</button>
                        <button class="indiesquare-button-web">IndieSquare Walletで寄付</button>
                      </div>
                    </div>
                    <?php if ($project_info->bch_address != "") { ?>
                    <div class="active title" style="background-color: #90ee9024; color: #529900">with BitcoinCash</div>
                    <div class="active content" style="background-color: #90ee9024; color: #529900">
                      <div id="qrcode-bch" style="margin: 0px auto; width: 100px; height: 100px"></div>
                      <div class="ui mini input" id="bch-address" data-bch-address="<?php echo $project_info->bch_address; ?>" style="width: 100%">
                        <input value="<?php echo $project_info->bch_address; ?>" readonly onclick="this.setSelectionRange(0, 9999);">
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="extra">
          <h2 class="ui center aligned teal header"><?php echo $project_info->title ?></h2>
          <div class="item">
            <div class="ui tiny left floated image">
              <object>
                <a href='./curator.php?id=<?php echo $project_info->curator_id.'&lang='.$lang; ?>'>
                  <img src="./data/curators/<?php echo $project_info->curator_id; ?>/thumbnail.jpg" alt="キュレーター"/>
                </a>
              </object>
            </div>
            <div class="ui small header">
              <object>
                <a href='./curator.php?id=<?php echo $project_info->curator_id.'&lang='.$lang; ?>'>
                  <?php echo $project_info->curator_name; ?>
                </a>
              </object>
            </div>
            <div class="description" style="color: black"><?php echo $project_info->curator_comment ?></div>
          </div>
        </div>
        <div class="extra" style="display: flex">
<?php require($conf->ROOT_DIR.'/components/social/twitter.php'); ?>
<?php require($conf->ROOT_DIR.'/components/social/facebook.php'); ?>
<?php require($conf->ROOT_DIR.'/components/social/google.php'); ?>
        </div>
      </div>
    </div>

<script>
// BTC QR code
var btc_address = $("#btc-address").attr("data-btc-address");
$("#qrcode-btc").qrcode({
render: 'div',
  text: btc_address,
  size: 100
});

// BCH QR code
var bch_address = $("#bch-address").attr("data-bch-address");
$("#qrcode-bch").qrcode({
render: 'div',
  text: bch_address,
  size: 100
});

</script>
