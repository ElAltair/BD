<?php
include"all_suppliers.php"; //выводит всех поставщиков на экран
if(isset($_GET['new_sup']))
{
 include"insert_supplier.php";
 exit();	
}
if(!isset($_GET['choose_sup'])) // если поставщик не определен, вызываем форму ввода
{
include"supplier.html.php";
exit();
}
$Supplier_chosen=$_GET['supplier'];
$Provision_chosen=array();
print_r($Provision_chosen);
include"all_products.php";
while(!isset($_GET['finish_product_choose']))
{
include"products.html.php";
$Provision_chosen[]=array('id'=>$_GET['provision'],'count'=>$_GET['provision_count']);
exit();
//include"products.php";
}
/*$supplier=$_GET['supplier'];

echo $_GET['choose_sup'];
echo "<br>";
echo "printr<br>";

print_r($_GET);

*/
?>