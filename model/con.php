<?php
$password = "";
$user="root";
$dbname="hr_sample";

try{
    $db = new PDO(
        'mysql:host=localhost;
        dbname='.$dbname,
        $user,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch(Exception $e){
    echo "FAILED CONNECTION".$e->getMessage();
}
?>