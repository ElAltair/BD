<?php

try{
$sql='insert into nakladnaya set N_Date=:ndate,E_id=:eid,S_id=:sid';
$sup=$pdo->prepare($sql);
$sup->bindValue(':ndate',date('Y-m-d'));
$sup->bindValue(':eid',5);
$sup->bindValue(':sid',$_SESSION['supplier']);
$sup->execute();

}
catch(PDOException $e)
{
	$output="Ошибка добавления в базу данных";
	$e->getMessage();
}
exit();
?>