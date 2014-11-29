<?php

try{
$sql="select * from Supplier where S_deleted=0";
$result=$pdo->query($sql);
}
catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
while($row=$result->fetch())			   
{
 $supplier[]=array('id'=>$row['S_id'],
				  'name'=>$row['S_Name'],
				  'adress'=>$row['S_Adress'],
				  'contract'=>$row['S_contract_id'],
				  'date'=>$row['S_contract_date'],
				  'deleted'=>$row['S_deleted']);
}
?>