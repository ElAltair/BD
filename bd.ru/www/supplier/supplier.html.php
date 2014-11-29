<html>
<head>
<title>Создание накладной</title>
</head>
<body>
<h2 align=center> Список поставщиков </h2>
<table border=1 width=90% align=center>
<tbody>
                <tr>
				 <td align=center>Id</td>
                 <td align=center>Наименование поставщика</td>
				 <td align=center>Адресс</td>
				 <td align=center>Id контракта</td>
				 <td align=center>Дата заключения контракта</td>
                 <td align=center colspan="2"> Редактирование </td>
 <?php
     if(is_array($supplier))
{	 
     	   foreach($supplier as $s_row):?>
				 <tr>
				       <td align = center ><?php echo $s_row['id'];?></td>
				       <td align = center ><?php echo $s_row['name'];?></td>
					   <td align = center> <?php echo $s_row['adress'];?></td>
					   <td align = center> <?php echo $s_row['contract'];?></td>
					   <td align = center> <?php echo $s_row['date'];?></td>
                       <td align=center>
                       <br>
                       <form action="?Delete" method=post>
                         <input type=hidden name="id" value=<?php echo $s_row['id']?> >
                       <input type=submit value=Удалить>
                     
                       </form>
                       </td>
                       <td align=center>
                       <br>
                       <form action="?Edit" method=post>
                       <input type=submit name=edit value=Редактировать>
                       <input type=hidden name="id" value=<?php echo $s_row['id']?> >
                       </form>
                       
                       </td>
                       
					   </tr>
					   <?php endforeach;
				}
 ?>
					 
</tbody>
</table>
<br><br>
<div align=left>
<form action=" " method="get">
<input type="submit" id="button" name="back_main_page" value="Назад">
</form>
</div>
<div align=right>
<form action=" " method="get">
<input type="submit" id="button" name="new_sup" value="Добавить нового поставщика">
</form>
</div>
</body>
</html>
