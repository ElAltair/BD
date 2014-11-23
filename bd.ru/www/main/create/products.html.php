<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Создание накладной</title>
</head>
<body>
<h2 align=center> Выберите товар </h2>
<form action=" " method="get">
<label for="provision">Введите id товара</label>
<input required id="provision" name="provision" ><br><br>
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
<form action=" ?get_choose_sup" metho=get>
<input type=submit name=back_supplier value= Назад >
</form>
<br><br>



<hr>
<h2>Выбранный товар</h2>
<table border=1 width=40%>
<tbody>
<tr>
<td align=center> Id </td>
<td align=center> Наименование товара </td>
<td align=center> Количество </td>
</tr>
						
                    <form action=" " metho = get >   
					 <?php
					// print_r($products);
					// echo "<br>";
					 if(is_array($products))
					 {
					    foreach ($products as $pr=>$value)
						  {  
							echo "<tr><td align=center>".$pr."</td>";
							echo "<td align = center>".$provision[$pr-1]['name']."</td>";
							echo "<td align=center>".$value."</td>";
							echo "<td align=center><input type=submit name=d".$pr." value= Удалить ></td>";
                            echo "<td align=center><input type=submit name=e".$pr." value=Редактировать></td></tr>";
					     }
					 }
							?>
                      </form>
                       </tr>
                  
                       
                       
                       </tbody>
                       </table>
                      






<br><br>
<div align=right>
<form action = " " method = "get">
<input type="submit" id="button" name="product_end" value="Создать накладную">
</form>
</div>
</body>
</html>
