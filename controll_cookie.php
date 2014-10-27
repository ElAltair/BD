<?php
if(!isset($_COOKIE['name']))
{
	if(!isset($_REQUEST['login']))
	{
	include 'login_form.html.php';
	}
	else
	{
	$name=$_REQUEST['login'];
	setcookie("name",$name,time()+3600);
	include 'login_out.html.php';
	}
}
	else
	include 'login_out.html.php';
	
    
?>