<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localmongkol9 = "localhost";
$database_localmongkol9 = "mongkhol_9name";
$username_localmongkol9 = "root";
$password_localmongkol9 = "";
$localmongkol9 = mysql_pconnect($hostname_localmongkol9, $username_localmongkol9, $password_localmongkol9) or trigger_error(mysql_error(),E_USER_ERROR); 
?>