<?php
if ($lang == "ja-jp"){
  $sponsor = "スポンサー";
  $company = "運営会社";
  $terms = "利用規約";
  $privacy = "プライバシーポリシー";
} else {
  $sponsor = "Sponsors";
  $company = "Company";
  $terms = "Terms";
  $privacy = "Privacy";
}
?>

<div class="ui divider"></div>
<div class="ui very padded vertical segment">
  <h2 style="text-align:center"><?php echo $sponsor ?></h2>
  <div class="ui stackable centered grid">

      <a class="two wide column" style="max-width:30vw" href="http://www.debit.co.jp/">
        <img class="ui middle aligned fluid image" src="./asset/img/suponsor_logo/debit.gif">
      </a>

      <a class="two wide column" style="max-width:30vw" href="http://www.kids-tokei.com/index.html">
        <img class="ui middle aligned fluid image" style="position:absolute; top:35%; right:0;" src="./asset/img/suponsor_logo/global_logo.png">
      </a>

      <a class="two wide column" style="max-width:30vw" href="http://okwave.jp/">
        <img class="ui middle aligned fluid image" src="./asset/img/suponsor_logo/okwave.png">
      </a>

      <a class="two wide column" style="max-width:30vw" href="https://satoricoin.jp/">
        <img class="ui middle aligned fluid image" src="./asset/img/suponsor_logo/raimu.png">
      </a>

      <a class="two wide column" style="max-width:30vw" href="https://wallet.indiesquare.me/">
        <img class="ui middle aligned fluid image" style="position:absolute; top:30%; right:0;" src="./asset/img/suponsor_logo/indiesquare.png">
      </a>

      <a class="two wide column" style="max-width:30vw" href="https://breadwallet.com/">
        <img class="ui middle aligned fluid image" style="position:absolute; top:20%; right:0;" src="./asset/img/suponsor_logo/bread.png">
      </a>

  </div>
</div>
<div class="ui very padded vertical segment">
  <div class="ui stackable centered grid">
    <div class="six wide column"> 
      <!-- <p>Copyright © 2017<a href="/ja/chain">kizuna</a> All Rights Reserved.</p> -->
      <p>Copyright © 2017 kizuna All Rights Reserved.</p>
    </div>
    <div class="three wide column"> 
      <a href="http://gracone.co.jp/profile/"><?php echo $company ?></a>
    </div>
    <div class="three wide column"> 
      <a href="./terms.php?lang=<?php echo $lang ?>"><?php echo $terms ?></a>
    </div>
    <div class="three wide column"> 
      <a href="./privacy.php?lang=<?php echo $lang ?>"><?php echo $privacy ?></a>
    </div>
    </div>
  </div>
</div>
