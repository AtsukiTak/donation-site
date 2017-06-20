<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/lang.php');
?>


<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/head.php'); ?> 
    <body>
<?php require($_SERVER['DOCUMENT_ROOT'].'/fb.php'); ?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/components/header.php'); ?>

        <div class="ui container">
            <div class="ui very padded text segment">

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/Michelf/Markdown.inc.php');
use Michelf\Markdown;

$text = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/terms/terms_'.$lang.'.md');
$html = Markdown::defaultTransform($text);
print $html
?>

          </div>
        </div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/components/footer.php'); ?>
    </body>
</html>

<!-- Localized -->
