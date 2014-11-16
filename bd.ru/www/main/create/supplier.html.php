<html>
<head>
<title>Создание накладной</title>
</head>
<body>
<h2 align=center> Выберите поставщика </h2>
<form action=" " method="get">
<label for="s">Введите id поставщика</label><br>
<input required id="s" name="supplier" >
<input type=submit name="choose_sup">
</form>
<table border=1 width=100%>
<tbody>
                <tr>
				 <td align=center>Id</td>
                 <td align=center>Наименование поставщика</td>
				 <td align=center>Адресс</td>
				 <td align=center>Id контракта</td>
				 <td align=center>Дата заключения контракта</td>
 <?php foreach($supplier as $s_row):?>
				 <tr>
				       <td align = center ><?php echo $s_row['id'];?></td>
				       <td align = center ><?php echo $s_row['name'];?></td>
					   <td align = center> <?php echo $s_row['adress'];?></td>
					   <td align = center> <?php echo $s_row['contract'];?></td>
					   <td align = center> <?php echo $s_row['date'];?></td>
					   </tr>
					   <?php endforeach; ?>
</tbody>
</table>
<br><br>
<form action=" " metho="get">
<input type="submit" id="button" name="new_sup" value="Создать нового поставщика">
</form>

</body>
</html>
