<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "project";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password);

/* if ( !$bd )
{
echo "Error connecting to database.\n";
}
else
{
echo " succesfully connnected" ;
} */
mysqli_select_db($bd, $mysql_database);
?>
