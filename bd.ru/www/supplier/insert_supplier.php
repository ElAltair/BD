<?php
//session_start();

if(!isset($_POST['insert_sup']))
{
include'insert_form.html.php';
exit();
}
try{
$sql='insert into supplier set S_id=:sid,S_Name=:sname,S_Adress=:sadress,S_contract_id=:scon,S_contract_date=:scon_d';
$sup=$pdo->prepare($sql);
$sup->bindValue(':sid',$_POST['id']);
$sup->bindValue(':sname',$_POST['name']);
$sup->bindValue(':sadress',$_POST['adress']);
$sup->bindValue(':scon',$_POST['contract']);
$sup->bindValue(':scon_d',$_POST['date']);
$sup->execute();
}
catch(PDOException $e)
{
	$output="Ошибка добавления в базу данных";
	$e->getMessage();
}
include "../main_page.html.php";
?>