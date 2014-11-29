<html>
<head>
<title> BD.ru </title>
</head>
<body>
<div align=center>
<h3>Привет,<?php echo $_SESSION['user']?></h3>
<form action=index.php method=get>
<input type=submit name=logout value=Выйти >
</form>
</div>
<h2 align=center> Главная страница </h2>
<hr>	
<div align=center>
<a href="query.html" > Информационные запросы </a>
<br><br>
<a href="../naklad/">Накладная </a>
<br><br>
<a href="/supplier/index.php"> Поставщики </a>
</div>
</body>
</html>