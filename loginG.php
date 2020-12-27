<?php
  // init hybridauth
  $hybridauth = new Hybrid_Auth( $config );
 
  // try to authenticate with twitter
  $adapter = $hybridauth->authenticate( "Google" );
 
  // return Hybrid_User_Profile object intance
  $user_profile = $adapter->getUserProfile();
 
  echo "Hi there! " . $user_profile->displayName;