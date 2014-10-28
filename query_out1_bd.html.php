<?php 
		   
		       include'connect_bd.php'; 
			   try{
			   $sql='select P_name,count(N_str_id) as detail_count from provision P left join naklad_stroka N
on P.P_id=N.P_id
group by(P_name)';
               $result=$pdo->query($sql);
			    }
			   catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
			   while($row=$result->fetch())
			   {
				  $detail[]=$row['P_name'];
				  $count[]=$row['detail_count'];
			   }
					echo $row_count;
					include 'query_out1.html.php';			   

?>