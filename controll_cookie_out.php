<?php
  if(!isset($_COOKIE['name']))
  {
     include 'index.php';
  }
	 else
	 {
		 setcookie("name","");
	   include 'index.php';
	 }
?>