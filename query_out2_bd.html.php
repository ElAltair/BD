<?php 
		   
		       include'connect_bd.php'; 
			   try{
			   $sql='select S_Name,S_Adress,S_contract_id,S_contract_date from supplier S join nakladnaya N
on S.S_id=N.S_id where N_id=
(select N_id from naklad_stroka
where N_str_pov_price = (select min(N_str_pov_price) from naklad_stroka))';
               $result=$pdo->query($sql);
			   }
			   catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
			   while($row=$result->fetch())
			   {
				  $name[]=$row['S_Name'];
				  $adress[]=$row['S_Adress'];
				  $contract[]=$row['S_contract_id'];
				  $date[]=$row['S_contact_date'];
			   }
					include 'query_out2.html.php';			   

?>