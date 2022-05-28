<?php

error_reporting(0);
$myObj->status = "success";
$myObj->message = "العب على قدك";
$myObj->expiry_date = "2029-12-23 20:49:26";
$myJSON = json_encode($myObj);
echo  $myJSON;

?>

