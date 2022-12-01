<?php
session_start();
$otp=$_POST['otp'];
if($otp==$_SESSION['OTP']){
    echo "done";
}else{
    echo "failed";
}