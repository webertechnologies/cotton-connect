<?php
session_start();
$mobile=$_POST['mobile'];
$otp=rand(111111,999999);
$_SESSION['OTP']=$otp;
$api="****************";
$url="https://2factor.in/API/V1/".$api."//SMS/".$mobile."/".$otp;
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result, true);
if($result['Status']=='Success'){
    echo "Sent";
}else{
    echo "failed";
}