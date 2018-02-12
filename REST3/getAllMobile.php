<?php
require_once("Mobile.php");

$result = new Mobile();
$getAllMobile = $result->getAllMobile();
print_r($getAllMobile);
print_r('<br>---------------------------------<br>');
print_r(json_encode($getAllMobile));

?>