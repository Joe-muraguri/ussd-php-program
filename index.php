<?php
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];



if ($text == " ") {
    $response = "CON What do you want to check \n";
    $response .= "1.My Dairy Account No.\n";
    $response .= "2. My Phone Number \n";
} else if($text == "1"){
    $response = "CON Choose account information to view \n";
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance \n";
}else if($text == "2"){
    $response = "END Your phone Number is".$phoneNumber;
}else if($text == "1*1"){
    $accountNumber = "ACC001";
    $response = "END Your account Number is ".$accountNumber;
}else if($text == "1*2"){
    $balance = "KSH 10,000";
    $response = "END Your balance is".$balance;
}
header('Content-type;text/plain');
echo $response;
