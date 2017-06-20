<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/lang.php');
?>

<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'] .'/head.php'); ?>
<body>
<?php require($_SERVER['DOCUMENT_ROOT'] .'/fb.php'); ?>

<div class="container">
<?php require($_SERVER['DOCUMENT_ROOT'] .'/components/header.php'); ?>

    <div id="bg_img" class="">
        <div class="top-inner-wrapper"> <img src="/asset/img/mainvisual_message_<?php echo $lang ?>.png"> </div>
    </div>

    <div class="ui container">
      <div class="ui very padded vertical segment">
        <h1 class="">Projects List</h1>
        <div class="ui two column stackable strethced grid link">

<?php
  foreach(array_diff(scandir($_SERVER['DOCUMENT_ROOT'].'/data/projects'), array('..', '.')) as $project_id) {
    require($_SERVER['DOCUMENT_ROOT'] .'/components/project_card.php');
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

$text = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/about/about_'.$lang.'.md');
$html = Markdown::defaultTransform($text);
print $html
?>
      </div>
    </div>
<?php require($_SERVER['DOCUMENT_ROOT'] .'/components/footer.php'); ?>
</div>
</body>
</html>

<!-- Localized -->
