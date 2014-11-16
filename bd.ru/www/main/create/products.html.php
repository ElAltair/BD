<html>
<head>
<title>Создание накладной</title>
</head>
<body>
<h2 align=center> Выберите товар </h2>
<form action=" " method="get">
<label for="provision">Введите id товара</label>
<input required id="provision" name="provision" ><br>
<label for="count">Введите количество товара</label>
<input required id="count" name="provision_count" ><br>
<input type=submit name="choose_prod">
</form>
<table border=1 width=100%>
<tbody>
                <tr>
				 <td align=center>Id</td>
                 <td align=center>Наименование товара</td>
				 <td align=center>Материал</td>
				 <td align=center>Вес</td>
				 <td align=center>Цена</td>
 <?php foreach($provision as $p_row):?>
 
				 <tr>
				       <td align = center ><?php echo $p_row['id'];?></td>
				       <td align = center ><?php echo $p_row['name'];?></td>
					   <td align = center> <?php echo $p_row['material'];?></td>
					   <td align = center> <?php echo $p_row['weight'];?></td>
					   <td align = center> <?php echo $p_row['price'];?></td>
					   </tr>
					   <?php endforeach; ?>
</tbody>
</table>

<br><br>
<form action=" " metho="get">
<input type="submit" id="button" name="product_end" value="Создать накладную">
</form>
<hr>
<h2>Выбранный товар</h2>
<table border=1 width=30%>
<tbody>
<tr>
<td align=center> Id </td>
<td align=center> Наименование товара </td>
<td align=center> Количество </td>
<?php foreach($Provision_chosen as $c_row):?>
 <tr>
				       <td align = center ><?php echo $p_row['id'];?></td>
				       <td align = center ><?php echo $provision[$p_row['id']]['name'];?></td>
					   <td align = center> <?php echo $p_row['count'];?></td>
					   </tr>
					   <?php endforeach; ?>
                       
                       </tbody>
                       </table>
</body>
</html>
