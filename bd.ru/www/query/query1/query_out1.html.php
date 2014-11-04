
<head>

	<title>Query1</title>

</head>

<body>
			<h2 align=center> Поставки заготовок </h2>
             <table border=1 width=100%>
			 <tbody>
                <tr>
				 <td align=center>Id</td>
                 <td align=center>Наименование заготовки</td>
                 <td align=center>Количество</td>
				 <?php foreach($details as $details):?>
				 <tr>
				       <td align = center ><?php echo $details['id'];?></td>
				       <td align = center ><?php echo $details['name'];?></td>
					   <td align = center> <?php echo $details['count'];?><td>
					   </tr>
					   <?php endforeach; ?>
					  
					  
			 </tbody>
                </table>
				 <br><br><br>
					   <a href="../../query.html">Назад</a>	
</body>
</html>