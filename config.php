// hybridauth-2.x.x/hybridauth/config.php
return
   array(
      // "base_url" the url that point to HybridAuth Endpoint (where index.php and config.php are found)
      "base_url" => "https://www.free-okr.com/login_social_media/",
 
      "providers" => array (
         // google
            "Google" => array ( // 'id' is your google client id
               "enabled" => true
               "keys" => array ( "id" => "36830912787-68ohb2u51ilj4pogla2kpilli4vip10n.apps.googleusercontent.com", "secret" => "b5EPiXGZGFRhsHtKO3CTpMWJ" ),
            ),
 
         // facebook
            "Facebook" => array ( // 'id' is your facebook application id
               "enabled" => true,
               "keys" => array ( "id" => "775635976720300", "secret" => "ba2a4f02524d1183609a9da289f31f73" ),
               "scope" => "email, user_about_me, user_birthday, user_hometown" // optional
            ),
 
         // twitter
            "Twitter" => array ( // 'key' is your twitter application consumer key
               "enabled" => true,
               "keys" => array ( "key" => "", "secret" => "" )
            ),
 
         // and so on ...
      ),
 
      "debug_mode" => false ,
 
      // to enable logging, set 'debug_mode' to true, then provide here a path of a writable file
      "debug_file" => "",
    );