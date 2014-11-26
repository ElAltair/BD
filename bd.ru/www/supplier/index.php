<?php
session_start();
include "all_suppliers.php";

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


if(isset($_POST['delete']))
{

   $sql= 'DELETE FROM supplier WHERE S_id=:said';
   $s = $pdo->prepare($sql);
   $s->bindValue(':said', $_POST['id']);
   $s->execute();
}

include "supplier.html.php";
?>