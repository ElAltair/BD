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



<hr>
<h2>Выбранный товар</h2>
<table border=1 width=40%>
<tbody>
<tr>
<td align=center> Id </td>
<td align=center> Наименование товара </td>
<td align=center> Количество </td>
</tr>
						
                       <tr>
					   <td align = center><?php echo $_GET['provision']?></td>
					   <td align=center><?php echo $provision[$_GET['provision']-1]['name']?></td>
                       <td align=center ><?php echo $_GET['provision_count']?></td>
                       <td align=center><input type="submit" name="delete"value="Удалить"></td>
                       <td align=center><input type="submit" name="edit" value="Редактировать"></td>
                       </tr>
                      <?php 
					    $a=1;
					      while(isset($_GET[$i]))
						  {							  
						   $i="h".$a;
							$j="hc".$a;    
							  echo "<input type=hidden name=".$i." value=".$_GET[$i]."><br>";
                              echo "<input type=hidden name=".$j." value=".$_GET[$j].">";
                              $a+=1;
						  }
					?>
                       
                       
                       <input type="hidden" name="supplier" value="<?php echo $_GET['supplier']?>">	
                       </tbody>
                       </table>
                      


</form>

<?php print_r($_GET); ?>

<br><br>
<div align=right>
<form action = " " method = "get">
<input type="submit" id="button" name="product_end" value="Создать накладную">
</form>
</div>
</body>
</html>
