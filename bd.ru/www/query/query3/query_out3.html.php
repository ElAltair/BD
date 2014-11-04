
<head>

	<title>Query2</title>

</head>

<body>
			<h2 align=center> Поставки заготовок </h2>
             <table border=1 width=100%>
			 <tbody>
                <tr>
				 <td align=center>Id</td>
                 <td align=center>Наименование поставщика</td>
				 <td align=center>Адресс</td>
				 <td align=center>Id контракта</td>
				 <td align=center>Дата заключения контракта</td>
				 <?php foreach($supplier as $sup):?>
				 <tr>
				       <td align = center ><?php echo $sup['id'];?></td>
				       <td align = center ><?php echo $sup['name'];?></td>
					   <td align = center> <?php echo $sup['adress'];?></td>
					   <td align = center> <?php echo $sup['contract'];?></td>
					   <td align = center> <?php echo $sup['contr_date'];?></td>
					   </tr>
					   <?php endforeach; ?>
					  
					  
			 </tbody>
                </table>
				 <br><br><br>
					   <a href="../../query.html">Назад</a>	
</body>
</html>