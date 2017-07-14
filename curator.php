<?php
require_once(__DIR__.'/config.php');
$conf = new Config();
$curator_id = htmlspecialchars($_GET['id']);
if ($curator_id == '' || file_exists($conf->ROOT_DIR.'/data/curators/'.$curator_id) == FALSE) {
  header('Location: 404.php');
  exit();
}

require_once($conf->ROOT_DIR.'/lang.php');

$curator_info_json_str = file_get_contents($conf->ROOT_DIR.'/data/curators/'.$curator_id.'/info_'.$lang.'.json');
if ($curator_info_json_str == FALSE) { return FALSE; }
$curator_info = json_decode($curator_info_json_str);
?>


<!DOCTYPE html>
<html>
<?php require($conf->ROOT_DIR.'/head.php'); ?>
<body>
<?php require($conf->ROOT_DIR.'/fb.php'); ?>
<?php require($conf->ROOT_DIR.'/components/header.php'); ?>

<div class="ui container">
  <div class="ui very padded vertical segment">
    <div class="ui padded raised segment">
      <div class="ui two column stackable relaxed grid">
        <div class="six wide column">
          <div class="ui fluid image">
            <img src="<?php echo './data/curators/'.$curator_id.'/thumbnail.jpg'; ?>" alt="">
          </div>
        </div>
        <div class="ten wide column">
          <div class="ui large header"><?php echo $curator_info->name?></div>
          <div class="ui divider"></div>
          <div class="ui items">
            <?php echo $curator_info->overview ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ui very padded vertical segment">
    <h1>Curated Projects</h1>
    <div class="ui two column stackable grid link">
<?php
foreach( $curator_info->curated_project_ids as $project_id) {
  require($conf->ROOT_DIR.'/components/project_card.php');
}
?>
    </div>
  </div>
</div>

<?php require($conf->ROOT_DIR.'/components/footer.php'); ?>

</body>
</html>

<!-- Localized -->
