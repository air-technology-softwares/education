<?php
session_start();
$uname=$_POST['name'];
$pass=$_POST['pass'];
if($username=='unpossible' && $password=='pog')
{
$_SESSION['logged_in']='1';
include('meet.html');
}
else
{
echo "get out from here";
}
?>