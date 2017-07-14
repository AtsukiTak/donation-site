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
<?php require($conf->ROOT_DIR.'/components/header.php'); ?>

        <div class="ui container">
            <div class="ui very padded text segment">

<?php
require_once($conf->ROOT_DIR.'/vendor/Michelf/Markdown.inc.php');
use Michelf\Markdown;

$text = file_get_contents($conf->ROOT_DIR.'/data/terms/terms_'.$lang.'.md');
$html = Markdown::defaultTransform($text);
print $html
?>

          </div>
        </div>
<?php require($conf->ROOT_DIR.'/components/footer.php'); ?>
    </body>
</html>

<!-- Localized -->
