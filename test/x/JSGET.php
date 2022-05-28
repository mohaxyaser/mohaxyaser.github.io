<?php
error_reporting(0);
$myObj->SiteUrl = "https://www.kindpng.com/picc/m/200-2006734_safe-clipart-transparent-not-safe-clipart-png-png.png";
$myObj->JASEM = "2SAiF";
$myObj->Update = "5";
$myObj->Close = "NO";
$myObj->status = "success";
$myObj->message = "العب على قدك";
$myObj->expiry_date = "2029-12-23 20:49:26";
$myJSON = json_encode($myObj);
echo  $myJSON;
?>