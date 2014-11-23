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
<a href="/main/main.html">Накладная </a>
</div>
</body>
</html>