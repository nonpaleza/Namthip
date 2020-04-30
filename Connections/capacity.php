<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_capacity = "localhost";
$database_capacity = "capacity";
$username_capacity = "root";
$password_capacity = "";
$capacity = mysql_pconnect($hostname_capacity, $username_capacity, $password_capacity) or trigger_error(mysql_error(),E_USER_ERROR); 
?>