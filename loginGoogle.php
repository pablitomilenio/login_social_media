<body>
Hello Google
<?php

$user_profile = $adapter->getUserProfile();
 
echo "Hi there! " . $user_profile->displayName;


require_once 'configGoogle.php';
 
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    print_r($userProfile);
    echo '<a href="logout.php">Logout</a>';
}
catch( Exception $e ){
    echo $e->getMessage() ;
}



?>
</body>