<?php 
		       include'../connect_bd.php'; 
			   try{
			   $detail=$_GET['text_detail'];
			   $sql="select S_Name,S_Adress,S_contract_id,S_contract_date from supplier S join nakladnaya N where S.S_id=N.S_id
and N_id = (select  N_id from count_supplier where count_n = (select max(count_n) from count_supplier))";
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
				  'contr_date'=>$row['S_contract_date']);
			   }
					
					include 'query_out3.html.php';	   

?>