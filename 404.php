<?php
require_once(__DIR__.'/config.php');
$conf = new Config();
?>
<!DOCTYPE html>
<html>
  <?php require($conf->ROOT_DIR.'/head.php'); ?>

  <body>
  <?php require($conf->ROOT_DIR.'/fb.php'); ?>
  <?php require($conf->ROOT_DIR.'/components/header.php'); ?>
    <div class="container">
        <div id="bg_error_img" class="clearfix">
          <div class="top-inner-wrapper">
            <img src="/asset/img/404error_illust.png">
          </div>
        </div>
    </div>
  <?php require($conf->ROOT_DIR.'/components/footer.php'); ?>
  </body>
</html>

<!-- Localized -->
