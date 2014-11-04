<?php 
		       include'../connect_bd.php'; 
			   try{
			   $detail=$_GET['text_detail'];
			   $sql="select S.S_id,S_Name,S_Adress,S_contract_id,S_contract_date from supplier S join nakladnaya N
on S.S_id=N.S_id where N_id=
(select N_id from naklad_stroka
where  P_id='$detail' and N_str_pov_price = (select min(N_str_pov_price) from naklad_stroka ))";
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
					
					include 'query_out2.html.php';	   

?>