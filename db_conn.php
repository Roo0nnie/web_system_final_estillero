<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "account";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    echo "Connetion failed!";
}
?>