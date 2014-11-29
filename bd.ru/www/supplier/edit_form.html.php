<html>
<head>
<title>Редактирование</title>
</head>
<h2 align=center> Редактирование </h2>
<?php
$id=$_SESSION['edit_id'];
$quer="select * from Supplier where S_id='$id' and S_deleted = 0";
$result=$pdo->query($quer);

$row=$result->fetch();
$edited_supp=array('id'=>$id,'name'=>$row['S_Name'],'adress'=>$row['S_Adress'],
	'contract'=>$row['S_contract_id'],'date'=>$row['S_contract_date'],'deleted'=>$row['S_deleted']);
?>
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
<td align=center><?php echo $edited_supp['id']?></td>
<td align=center><input type=text name="name" value="<?php echo  $edited_supp['name']?>"></td>
<td align=center><input type=text name="adress" value="<?php echo  $edited_supp['adress']?>" ></td>
<td align=center><input type=text name="contract_id" value="<?php echo  $edited_supp['contract']?>" ></td>
<!--<td align=center><input required name="contract_date" id=id ></td>-->
<td align=center><input type="date" value="<?php echo $edited_supp['date'];?>" max="<?php echo date('Y-m-d');?>" name="date"></td>
</tr>
</tbody>
</table>



<br><br>
<div align=right>
<input type=submit name="conferm_edit" value="Редактировать">
</div>
</form>

<dvi align=left>
</form>
<form action="?" method=post>
<input type=submit name="return_edirt" value="Назад">
</form>
</div>


<body>
</body>
</html>
