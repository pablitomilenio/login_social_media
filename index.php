<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
$config_file_path = 'https://www.free-okr.com/login_social_media/config.php';
 
require_once( "https://www.free-okr.com/login_social_media/Auth.php" );
 
$hybridauth = new Hybrid_Auth( $config_file_path );

?>