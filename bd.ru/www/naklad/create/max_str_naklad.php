<?php
include"../../include/connect_bd.php";

try{
$sql="select max(N_str_id) as number from naklad_stroka";
$result=$pdo->query($sql);
}
catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
$row=$result->fetch();
$number=$row['number'];
?>