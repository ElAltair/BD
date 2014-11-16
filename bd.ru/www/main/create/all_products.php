<?php
include"../../include/connect_bd.php";
try{
$sql="select * from Provision";
$result=$pdo->query($sql);
}
catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
while($row=$result->fetch())			   
{
 $provision[]=array('id'=>$row['P_id'],
				  'name'=>$row['P_Name'],
				  'material'=>$row['P_Material'],
				  'weight'=>$row['P_Weight'],
				  'price'=>$row['P_price']);
}
?>