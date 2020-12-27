<?php

$config_file_path = 'https://www.free-okr.com/login_social_media/config.php';
 
require_once( "/path/to/hybridauth/Hybrid/Auth.php" );
 
$hybridauth = new Hybrid_Auth( $config_file_path );

?>