<?php 
		   
		       include'connect_bd.php'; 
			   try{
			  /* $sql='select S_Name from supplier S join nakladnaya N
on S.S_id=N.S_id where N_id=
(select N_id from naklad_stroka
where  N_str_pov_price = (select min(N_str_pov_price) from naklad_stroka ))and P_id=?';
              
            /*   $result=$pdo->prepare('select S_Name,S_Adress,S_contract_id,S_contract_date from supplier S join nakladnaya N
on S.S_id=N.S_id where N_id=
(select N_id from naklad_stroka
where  N_str_pov_price = (select min(N_str_pov_price) from naklad_stroka )) and  P_id = ?');
			  */
			  echo $_REQUEST['text_detail'];
			  $sql='select S_Name,S_Adress,S_contract_id,S_contract_date from supplier where S_id=?';
			   $result=$pdo->prepare("$sql");
			   if($result->execute(array($_REQUEST['text_detail'])))
			   { 
			      echo 'Ok';
			   }
			   else
			   echo 'Не выполнил';
			   //echo $result;
			   }
			   catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
			       $row=$result->fetch();
			  
				  $name=$row['S_Name'];
				  $adress=$row['S_Adress'];
				  $contract=$row['S_contract_id'];
				  $date=$row['S_contract_date'];
			   
					
					include 'query_out2.html.php';			   

?>