<?php
$connect_error = 'Sorry, we \'re experiencing connection problems';
mysql_connect('localhost', 'root', '') or die($connect_error);
mysql_select_db('moviereviewwebsite') or die($connect_error);

?>