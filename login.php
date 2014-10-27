<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrapper">
  <div class="header">
    <ul class="ul_li">
      <li> <a href="/"> Главная </a></li>
      <li> <a href="#"> Создать накладную </a></li>
      <li> <a href="inf_query.html"> Информационные запросы </a></li>
      <li> <a href="#"> Войти </a></li>
    </ul>
  </div>
  <!-- .header-->
  
  <div class="middle">
    <div class="container">
      <div class="content">
       <div><?php $login_local=$_REQUEST['text_login']; echo 'Hi,'.$login_local."<br>"; ?></div>
      </div><!-- .content--> 
    </div>
    <!-- .container-->
    
    <div class="left-sidebar">
      <div class="base-date">Базы данных</div>
      <ul>
        <li> <a href="#"> Накладные </a></li>
        <li> <a href="#"> Сотрудники </a></li>
        <li> <a href="#"> Поставщики </a></li>
        <li> <a href="#"> Заготовки </a></li>
      </ul>
    </div>
    <!-- .left-sidebar --> 
    
  </div>
  <!-- .middle--> 
  
</div>
<!-- .wrapper -->

</body>
</html>