<?php
try{
	 $pdo=new PDO('mysql:host=localhost;dbname=storage','root','');
}
catch(PDOException $e)
{
$output='Невозможно подключиться к серверу БД!';
$e->getMessage();	
}
?>