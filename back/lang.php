<?php

if ($_GET['lang'] == 'ja-jp'){
  $lang = 'ja-jp';
  return;
} else if ($_GET['lang'] == 'en-us'){
  $lang = 'en-us';
  return;
} else if ($_GET['lang'] != ''){
  header('Location: /404.php');
  exit();
}

$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$languages = array_reverse($languages);
$lang = '';
foreach ($languages as $language) {
    if (preg_match('/^ja/i', $language)) {
        $lang = 'ja-jp';
    } elseif (preg_match('/^en/i', $language)) {
        $lang = 'en-us';
    }
}

if ($lang == '') {
    $lang = 'en-us';
}
?>
