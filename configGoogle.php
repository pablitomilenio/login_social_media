<?php
require_once 'vendor/autoload.php';
 
$config = [
    'callback' => 'YOUR_DOMAIN_URL/index.php',
    'keys'     => [
                    'id' => '36830912787-68ohb2u51ilj4pogla2kpilli4vip10n.apps.googleusercontent.com',
                    'secret' => 'b5EPiXGZGFRhsHtKO3CTpMWJ'
                ],
    'scope'    => 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
 
$adapter = new Hybridauth\Provider\Google( $config );