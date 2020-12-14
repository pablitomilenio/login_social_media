<?php
    $config = array(
      "base_url" => "http://www.free-okr.com/login_social_media/",
      "providers" => array (
        "Facebook" => array (
          "enabled" => true,
          "keys"    => array ( "id" => "775635976720300", "secret" => "ba2a4f02524d1183609a9da289f31f73" ),
          "scope"   => ['email', 'user_about_me', 'user_birthday', 'user_hometown'], // optional
          "photo_size" => 200, // optional
    )));
 
    require_once( "/path/to/hybridauth/Hybrid/Auth.php" );
 
    $hybridauth = new Hybrid_Auth( $config );
 
    $adapter = $hybridauth->authenticate( "Facebook" );
 
    $user_profile = $adapter->getUserProfile();