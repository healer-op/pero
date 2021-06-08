<?php
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
header("location:$previous");
if (isset($_POST['main-color']) && isset($_POST['secondary-color']) && isset($_POST['third-color']) && isset($_POST['background-color']) && isset($_POST['box-color']) && isset($_POST['sidebar-color']) && isset($_POST['icons-color']) && isset($_POST['logo']) && isset($_POST['login-background-color'])) {
    $data = "
<?php
    \$main_color = '" . $_POST['main-color'] . "';
    \$secondary_color = '" . $_POST['secondary-color'] . "';
    \$third_color = '" . $_POST['third-color'] . "';

    \$logo = '" . $_POST['logo'] . "';

    \$background_color = '" . $_POST['background-color'] . "';
    \$box_color = '" . $_POST['box-color'] . "';
    \$sidebar_color = '" . $_POST['sidebar-color'] . "';
    \$icons_color = '" . $_POST['icons-color'] . "';
    \$login_background_color = '" . $_POST['login-background-color'] . "';
?>
    ";
    $filename = ($_SERVER['DOCUMENT_ROOT'].'/themes/pure-ui-dark/custom_config.php');
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("Can't create file");
    }
    $ret = file_put_contents($filename, $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>