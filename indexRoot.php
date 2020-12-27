<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?>

<body>
Free-OKR 

Objectives and Key Results

<a href=/login_social_media/loginLinkedIn.php><img src="signin-button-linkedin.png"></a>
<br><br>
<a href=/login_social_media/loginGoogle.php><img src="signin-button-google.png" width="220px"></a>
</body>