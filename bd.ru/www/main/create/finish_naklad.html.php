<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Создание накладной</title>
</head>
<body>
<h2 align=center> Результат накладной </h2>
<hr>
<table border=1 width=60% align=center>
<tbody>
                <tr>
				 <td align=center>Номер накладной</td>
                 <td align=center>Дата формирования накладной</td>
				 <td align=center>Индекс оператора</td>
				 <td align=center>Шифр поставщика</td>	
				 </tr>
                 <tr>
                 <td align = center> <?php echo $number+1 ?> </td>
                 <td align = center> <?php echo date('d-m-Y');?> </td>
                 <td align = center> <?php echo $_SESSION['user']?> </td>
                 <td align = center> <?php echo $_SESSION['supplier'];?> </td>
                  </tr>
                  </tbody>
                  </table>
                  <br><hr border=2><br>
                 
                  <table border=1 width=100%>
                  <tbody>    
                                 
                 <tr>
                 <td align= center> № </td>
                 <td align=center>Id Товара </td>
                 <td align = center> Наименование товара </td>
                 <td align = center> Количество товара </td>
                 <td align = center> Масса бруто </td>
                 <td align = center> Цена за штуку </td>
                 <td align = center> Всего </td>
                 </tr><?php $i=1; ?>
                 <?php foreach($_SESSION['products'] as $pr => $value):?>
                 <tr>
                 
                   <td align= center><?php echo $i++?></td>
                 <td align=center><?php echo $pr ?></td>
                 <td align = center><?php echo $provision[$pr-1]['name']?></td>
                 <td align = center> <?php echo $value ?> </td>
                 <td align = center> <?php echo $provision[$pr-1]['weight']?></td>
                 <td align = center> <?php echo $provision[$pr-1]['price']?></td>
                 <td align = center> <?php echo $provision[$pr-1]['price']*$value;?></td>
                 <?php endforeach ?>
</tbody>
</table>
<br><br>


<form action = " ?choose_prod" method= post>
<input type=submit value= Назад>
</form>

<div align=right>
<form action=" " method=get>
<input type=submit name=finish_naklad value=Подтвердить >
</form>
</div>


