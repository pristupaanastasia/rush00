<div>
<?php
$host = "localhost:8081"; 
$dbuser = "root"; 
$dbname = "test";         
$dbpasswd = ""; 
$charset = 'utf8';
 $opt = [
         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
     ];
try
{
  $dbh = new PDO('mysql:host=localhost;dbname=test;charset=utf8', $dbuser, $dbpasswd,$opt);
  $dbh->exec("set names utf8");
  foreach($dbh->query('SELECT * FOO ') as $row)
  {
    print_r($row);
  }
  $dbh = null;
}
catch (PDOException $e)
{
  die( 'Ошибка! Всё. Приехали... '.$e->getMessage() );
}
$opt = NULL;
?>
</div>