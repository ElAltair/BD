<?php
  if(!isset($_COOKIE['name']))
  {
     include 'index.html';
  }
	 else
	 {
		 setcookie("name","");
	   include 'index.html';
	 }
?>