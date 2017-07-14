<?php
require_once(__DIR__.'/config.php');
$conf = new Config();
require_once($conf->ROOT_DIR.'/lang.php');
?>
<!DOCTYPE html>
<html>
<?php require($conf->ROOT_DIR.'/head.php'); ?>
<body>
<?php require($conf->ROOT_DIR.'/fb.php'); ?>

<div class="container">
<?php require($conf->ROOT_DIR.'/components/header.php'); ?>

    <div id="bg_img" class="">
        <div class="top-inner-wrapper"> <img src="/asset/img/mainvisual_message_<?php echo $lang ?>.png"> </div>
    </div>

    <div class="ui container">
      <div class="ui very padded vertical segment">
        <h1 class="">Projects List</h1>
        <div class="ui two column stackable strethced grid link">

<?php
  foreach(array_diff(scandir($conf->ROOT_DIR.'/data/projects'), array('..', '.')) as $project_id) {
    require($conf->ROOT_DIR.'/components/project_card.php');
  }
?>

        </div>
      </div>
      <div class="ui very padded vertical segment">
        <h1 class="">Recent Reports</h1>
        <div class="ui very relaxed items">


        </div>
      </div>
      <div class="ui very padded vertical segment" style="font-size: 1.1em">
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/Michelf/Markdown.inc.php');
use Michelf\Markdown;

$text = file_get_contents($conf->ROOT_DIR.'/data/about/about_'.$lang.'.md');
$html = Markdown::defaultTransform($text);
print $html
?>
      </div>
    </div>
<?php require($conf->ROOT_DIR.'/components/footer.php'); ?>
</div>
</body>
</html>

<!-- Localized -->
