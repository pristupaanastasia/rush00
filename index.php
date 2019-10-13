<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
<title>SVALKA</title>
<link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <div id="header">
    <nav>
    <a href="index.php?page=main" class="button1" >Second Use</a>          
    <a href="index.php?page=contacts" class="button1" >about Svalka</a>
    </nav>
    </div>
    <div class="dropdown">
        <button class="mainmenubtn">Главное меню</button>
        <div class="dropdown-child">
             <a href="http://www.вашдомен.ru/page1.html">Вывезите мне вещи!</a>
             <a href="http://www.вашдомен.ru/page2.html">Я передумал!</a>
         </div>
    </div>
</header>

<?php include basename($page).'.php'; 
?>

<footer>
    Рады вам онлайн и офлайн)))))
</footer>
</body>
</html>