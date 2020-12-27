<body>
Hello Google
<hr>
<?php

//$user_profile = $adapter->getUserProfile();

//print_r($userProfile);

//echo "Hi there! " . $user_profile->displayName;
?>

<br><br>
2
<hr>

<?php



require_once 'configGoogle.php';
 
try {
    echo "authenticating";
    $adapter->authenticate( "Google" );
    $userProfile = $adapter->getUserProfile();
    echo "fetched profile";
    print_r($userProfile);
    echo '<a href="logout.php">Logout</a>';
}
catch( Exception $e ){
    echo $e->getMessage() ;
}



?>
</body>