<?php
include"all_suppliers.php"; //выводит всех поставщиков на экран
if(isset($_GET['new_sup']))
{
 include"insert_supplier.php";
 exit();	
}
if((!isset($_GET['choose_sup'])) and (!isset($_GET['choose_prod'])) and (!isset($_GET['product_end']))) // если поставщик не определен, вызываем форму ввода
{
include"supplier.html.php";
exit();
}
$Supplier_chosen=$_GET['supplier'];
//print_r($Provision_chosen);
include"all_products.php";
if(!isset($_GET['product_end']))
{

//$Provision_chosen=array();
include"products.html.php";
print_r($_GET);
exit();
//include"products.php";
}

//include"finish_nakladnaya.html.php"

/*$supplier=$_GET['supplier'];

echo $_GET['choose_sup'];
echo "<br>";
echo "printr<br>";

print_r($_GET);

*/
?>