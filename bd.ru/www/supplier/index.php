<?php
session_start();
include"../include/connect_bd.php";



if(isset($_GET['back_main_page']))
{
include "../main_page.html.php";
exit();
}

if(isset($_GET['new_sup']))
{
include"insert_supplier.php";
exit();
}


if(isset($_GET['Delete']))
{
   $_SESSION['delete_id']=$_POST['id'];
   include "confirm_form.html.php";
   exit();
   
 }
 
 if(isset($_GET['yes']))
  {
   
   $delete=$_SESSION['delete_id'];
   $sql= 'update supplier set S_deleted=1 WHERE S_id=:sid';
   $s = $pdo->prepare($sql);
   $s->bindValue(':sid', $delete);
   $s->execute();
   unset($_SESSION['delete_id']);
  
  }

 include "all_suppliers.php"; 
include "supplier.html.php";

?>