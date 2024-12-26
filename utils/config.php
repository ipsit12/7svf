<?php

define("BASE_URL", "https://7svf.com/");
define("API_STATUS", "LIVE"); //LIVE OR UAT
define("MERCHANTIDLIVE", "M22XBDZM5ZSZC");
define("MERCHANTIDUAT", " ");  //Sandbox testing
define("SALTKEYLIVE", "cfd24572-320b-4463-a4d0-637b0eefea17");
define("SALTKEYUAT", " ");
define("SALTINDEX", "1");
define("REDIRECTURL", "paymentstatus.php");
define("SUCCESSURL", "success.php");
define("FAILUREURL", "failure.php");
define("UATURLPAY", "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay");
define("LIVEURLPAY", "https://api.phonepe.com/apis/hermes/pg/v1/pay");
define("STATUSCHECKURL", "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/");
define("LIVESTATUSCHECKURL", "https://api.phonepe.com/apis/hermes/pg/v1/status/");
?>