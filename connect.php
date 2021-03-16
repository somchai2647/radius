<?php
$dsn = 'mysql:dbname=radius;host=127.0.0.1';
$db_user = "root";
$db_password = "";
try {
    $db = new PDO($dsn, $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

function query($sql, $array = array())
{
    global $db;
    $q = $db->prepare($sql);
    $q->execute($array);
    return $q;
}

// error_reporting(0);