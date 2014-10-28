<?php 
		   
		       include'connect_bd.php'; 
			   try{
			   $sql='select  N_id from count_supplier where count_n = (select max(count_n) from count_supplier)';
               $result=$pdo->prepare($sql);
			   $result->execute(array($_REQUEST['date1'],$_REQUEST['date2']));
			    }
			   catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
			   while($row=$result->fetch())
			   {
				  $name=$row['N_id'];
			   }
					
					include 'query_out3.html.php';			   

?>