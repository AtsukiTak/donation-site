<?php
require_once(__DIR__.'/config.php');
$conf = new Config();
require_once($conf->ROOT_DIR.'/lang.php');

$project_id = htmlspecialchars($_GET["id"]);
if ($project_id == '' || file_exists($conf->ROOT_DIR.'/data/projects/'.$project_id) == FALSE) {
  header('Location: /404.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
<?php require($conf->ROOT_DIR.'/head.php'); ?>
<body>

<?php require($conf->ROOT_DIR.'/fb.php'); ?>

<?php require($conf->ROOT_DIR.'/components/header.php'); ?>

    <div class="ui container">

<?php require($conf->ROOT_DIR.'/components/project_big_card.php'); ?>

            <div class="ui top attached pointing two item hover link green menu">
                <div class="active item" data-tab="project_info"><h3>Project</h3></div>
                <div class="item" data-tab="reports"><h3>Reports</h3></div>
            </div>

            <!-- Contents BGN --> 
            <div class="ui bottom attached active tab segment" data-tab="project_info" id="contents_container">
<?php
require_once("./vendor/Michelf/Markdown.inc.php");
use Michelf\Markdown;

$text = file_get_contents($conf->ROOT_DIR.'/data/projects/'.$project_id.'/contents_'.$lang.'.md');
$html = Markdown::defaultTransform($text);
print $html
?>
            </div>
            <!-- Contents END --> 

            <!-- Reports BGN --> 
            <div class="ui bottom attached tab segment" data-tab="reports">
<?php
  foreach(array_diff(scandir($conf->ROOT_DIR.'/data/projects/'.$project_id.'/reports'), array('..', '.')) as $report_id) {
    require($conf->ROOT_DIR.'/components/report_card.php');
  }
?>
            </div>
            <!-- Reports END --> 


    </div>
  <?php require($conf->ROOT_DIR.'/components/footer.php'); ?>

<script>
$('.menu .item').tab();
</script>

</body>
</html>
<!-- Localized -->
