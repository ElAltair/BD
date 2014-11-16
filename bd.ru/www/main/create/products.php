<?php
include"all_products.php";
if(!isset($_GET['product_end']))
{
include"products.html.php";
$Provision_chosen[]=array('id'=>$_GET['provision'],'count'=>$_GET['provision_count']);
}



?>