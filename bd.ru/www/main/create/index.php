<?php

function delEl($arr, $del)
        {
            foreach($arr as $val)  { if($val !== $del) $newArr[] = $val; }
            return $newArr;      
         }

header('Content-Type: text/html; charset= utf-8');
session_start();
if(isset($_SESSION['products']))
{
 $products=$_SESSION['products'];
 
}
include"all_suppliers.php"; //выводит всех поставщиков на экран
//print_r($_GET);
//echo "<br>";
foreach($_GET as $g=> $value)
{
	//echo $g;
	if(is_array($products))
	{
	foreach($products as $p => $pvalue)
	{
		$name="d".$p;
		if(isset($_GET[$name]))
		{
			$provision=$_SESSION['products'];
			$provision=delEl($provision,$p);
		    $_SESSION['products']=$provision;
			$_GET['choose_prod']="Отправить";
			exit();
		}
	}
	}
}

if(isset($_GET['new_sup']))
{
 include"insert_supplier.php";
 $_SESSION['supplier']=$_POST['id'];
 $_GET['choose_sup']="Отправить";	
}
if(isset($_GET['back_main_naklad']))
{
include"../main.html";
unset($_SESSION['products']);
unset($_SESSION['supplier']);
exit();
}
if((!isset($_GET['choose_sup'])) and (!isset($_GET['choose_prod'])) and (!isset($_GET['product_end'])) and (!isset($_GET['finish_naklad'])) and (!isset($_GET['back_provision']))) // если поставщик не определен, вызываем форму ввода
{
include"supplier.html.php";
exit();
}

if(isset($_GET['supplier']))
$_SESSION['supplier']=$_GET['supplier'];
//print_r($Provision_chosen);

include"all_products.php";



if(!isset($_GET['product_end']) and (!isset($_GET['finish_naklad'])))
		{
if(isset($_GET['choose_prod']))
{
$i=$_GET['provision'];
$products[$i]=$_GET['provision_count'];
}
//echo $_GET['d1'];
//print_r($_GET);
include"products.html.php";

//print_r($_GET);
//echo "<br>";
$_SESSION['products']=$products;
//print_r($_SESSION);



exit();

}
if(!isset($_GET['finish_naklad']))
{
  include "max_str_naklad.php";	
  include "finish_naklad.html.php";
  exit();	
}
//include "add_naklad.php";
include"../main.html";
unset($_SESSION['products']);
unset($_SESSION['supplier']);
exit();
?>