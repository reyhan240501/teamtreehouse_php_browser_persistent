<?php
$password="paSsword";

$encrypt_password=password_hash($password,PASSWORD_BCRYPT);

// echo $encrypt_password;

if(password_verify('paSswor',$encrypt_password))
{
    echo "You have access to this page";
}else
{
    echo "You dont have access to this page";
}