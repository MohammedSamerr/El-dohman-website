<?php
$servername = "localhost";
$username = "root";
$password = "admin";

$ID= post["ID"] ;
$ID=stripcslashes($ID) ;
$ID=mysql_real_escape_string($ID) ;
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysql_select_db("login") ;
//query to the server for the worker
$result=mysql_query("select" from users where ID = 'ID') 
    or die("failed to query database",mysql_error()) ;
$row=mysql-fetch_array($result);
if($row[ID]==$ID){
    echo("login suc")}
else{
    echo("faild")}
?>