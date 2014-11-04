<?php     
  If(!isset($_REQUEST['text_login']))
      {
         //exit();
	  }
   else
   {
    $name=$_REQUEST['login'];
    setcookie("name",$name,time()+3600);
   // header('Location"http://bd.ru');
 }
?>