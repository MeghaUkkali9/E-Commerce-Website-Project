<?php
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','PGaurav');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','team_b_db');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .mysqli_connect_error());



?>
