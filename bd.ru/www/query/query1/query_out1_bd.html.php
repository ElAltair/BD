<?php 
		       include'../connect_bd.php'; 
			   try{
			   $sql="select P.P_id,P_name,count(N_str_id) as count from provision P left join naklad_stroka N
on P.P_id=N.P_id
group by(P_name)";
               $result=$pdo->query($sql);
			    }
			   catch(PDOException $e)
			   {
				   $output='Невозможно извлечь данные'.$e->getMessage();
				   exit();
			   }
			   while($row=$result->fetch())
			   {
				  $details[]=array('id'=>$row['P_id'],
				  'name'=>$row['P_name'],
				  'count'=>$row['count']);
				  
			   }
					
					include 'query_out1.html.php';	   

?>