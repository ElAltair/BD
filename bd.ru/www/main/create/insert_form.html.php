<html>
<head>
<title>Создание нового поставщика</title>
</head>
<h2 align=center> Создание нового поставщика </h2>
<form action=" " method=post>
<table border=1 width=100%>
<tbody>
<tr>
<td align=center><label for="id">  Id Поставщика</label></td>
<td align=center><label for="name">  Название поставщика</label></td>
<td align=center><label for="adress"> Адрес поставщика</label></td>
<td align=center><label for="contract">Номер контракта</label></td>
<td align=center><label for="contract_date">Дата заключения контракта</label></td>
<tr>
<td align=center><input required name="id" id=id ></td>
<td align=center><input required name="name" id=id ></td>
<td align=center><input required name="adress" id=id ></td>
<td align=center><input required name="contract" id=id ></td>
<!--<td align=center><input required name="contract_date" id=id ></td>-->
<td align=center><input type="date" value="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d');?>" name="date"></td>
</tr>
</tbody>
</table>
<br><br>
<dvi align=left>
<<input type=submit name="return" value="Назад">
</div>
<div align=right>
<input type=submit name="add_sup" value="Добавить">
</div>
</form>
<body>
</body>
</html>
