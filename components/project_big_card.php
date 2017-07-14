<?php
$project_info_json_str = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/projects/'.$project_id.'/info_'.$lang.'.json');
$project_info = json_decode($project_info_json_str);
?>

<script src="/asset/js/bit-coin-api.js"></script>
<script src="/asset/js/jquery-qrcode.min.js"></script>

    <div class="ui vertical segment">
      <div class="ui fluid raised card">
        <div class="ui stackable stretched grid" style="margin: 0">
          <div class="twelve wide column" style="padding: 0px">
            <div class="ui fluid image">
              <img src="/data/projects/<?php echo $project_id ?>/thumbnail.jpg">
            </div>
          </div>
          <div class="four wide column" style="margin: 0">
            <div class="ui items">
              <div class="item">
                <div class="content">
                  <div class="ui tiny header"><i class="bitcoin icon"></i>Be Donated</div>
                  <div class="ui active centered mini inline loader description" id="btcLoader"></div>
                  <div class="vertical right aligned segment">
                    <p id="btc" class="ui large header"></p>
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
                  <div id="qrcode" style="margin: 0px auto; width: 100px; height: 100px"></div>
                  <div class="ui mini input" id="bc-address" data-bc-address="<?php echo $project_info->btc_address; ?>" style="width: inherit">
                  <input value="<?php echo $project_info->btc_address; ?>" readonly onclick="this.setSelectionRange(0, 9999);">
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="content">
                  <button class="indiesquare-button" style="display:none;border:none;width:100%;padding:10px;text-align:center;background:#E54353;color:#fff;border-radius:50px;">IndieSquare Walletで寄付</button>
                  <button class="indiesquare-button2" style="border:none;width:100%;padding:10px;text-align:center;background:#E54353;color:#fff;border-radius:50px;">IndieSquare walletを持っていない場合はこちら</button>
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
                <a href='curator.php?id=<?php echo $project_info->curator_id.'&lang='.$lang; ?>'>
                  <img src="/data/curators/<?php echo $project_info->curator_id; ?>/thumbnail.jpg" alt="キュレーター"/>
                </a>
              </object>
            </div>
            <div class="ui small header">
              <object>
                <a href='curator.php?id=<?php echo $project_info->curator_id.'&lang='.$lang; ?>'>
                  <?php echo $project_info->curator_name; ?>
                </a>
              </object>
            </div>
            <div class="description" style="color: black"><?php echo $project_info->curator_comment ?></div>
          </div>
        </div>
        <div class="extra" style="display: flex">
<?php require($_SERVER['DOCUMENT_ROOT']. '/components/social/twitter.php'); ?>
<?php require($_SERVER['DOCUMENT_ROOT']. '/components/social/facebook.php'); ?>
<?php require($_SERVER['DOCUMENT_ROOT']. '/components/social/google.php'); ?>
        </div>
      </div>
    </div>

<script>
// QR code
var address = $("#bc-address").attr("data-bc-address");
$("#qrcode").qrcode({
render: 'div',
  text: address,
  size: 100
});
</script>
