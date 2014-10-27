<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<div class="wrapper">

	<div class="header">
		<ul class="ul_li">
           <li> <a href="/"> Главная </a></li>
           <li> <a href="/"> Создать накладную </a></li>
           <li> <a href="/inf_query.html"> Информационные запросы </a></li>
           <li> <a href="/loginform.html"> Войти </a></li>
       </ul>
	</div><!-- .header-->

	<div class="middle">

		<div class="container">
			<div class="content">
            <div>
               <?php
			   
			       $pdo=new PDO('mysql:host=localhost;dbname=storage','root','');
				   $sql=$pdo->prepare("select E_Name from `employee` where E_id=?");
				   $sql->execute(array($detail));
				//   $result=$pdo->query($sql);
				   
				   while($row=$sql->fetch())
				   {
					  $aname[]=$row['E_Name'];
					  echo $name[0];
				   }
				   
				   ?>
               </div>
             
			</div><!-- .content-->
		</div><!-- .container-->

		<div class="left-sidebar">
        <div class="base-date">Базы данных</div>
			<ul>
           <li> <a href="/"> Накладные </a></li>
           <li> <a href="/"> Сотрудники </a></li>
           <li> <a href="/"> Поставщики </a></li>
           <li> <a href="/"> Заготовки </a></li>
           
       </ul>
		</div><!-- .left-sidebar -->

	</div><!-- .middle-->

</div><!-- .wrapper -->

<div class="footer">
	<strong>Footer:</strong> Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.<!-- .footer -->
</div>
</body>
</html>