<?php
session_start();
include"/include/connect_bd.php";
if(isset($_GET['logout']))
unset($_SESSION['user']);

if(!isset($_SESSION['user']))
{
	
			if(!isset($_POST['login']))
			{
			include "log_in.html.php";
			exit();
			}
			else
	        { 
				  try{
				  $sql="select * from users";
				  $result=$pdo->query($sql);
					  }
					catch(PDOException $e)
								   {
									   $output='Невозможно извлечь данные'.$e->getMessage();
									   exit();
								   }
					while($row=$result->fetch())			   
					{
					 $users[]=array('login'=>$row['Login'],
									  'password'=>$row['Password']);
					}
			foreach($users as $u)
		   {
				if($u['login']==$_POST['name'])
				   if($u['password']==$_POST['password'])
				   {
					  $_SESSION['user']=$u['login'];
					  include "main_page.html.php";
					  exit();
				   }
			}
	       }
include"log_in.html.php";
exit();
}
include"main_page.html.php";

?>