<?php
date_default_timezone_set("Asia/seoul");

define("DB_NAME", "green_recycle_db");

$file = fopen($_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/doc/db_conf.csv", "r");

const HOST_INDEX = 0;
const USER_INDEX = 1;
const PASSWORD_INDEX = 2;

$server_name = "";
$user_name = "";
$password = "";

while(!feof($file)) {
    $array = fgetcsv($file);

    $server_name = $array[HOST_INDEX];
    $user_name = $array[USER_INDEX];
    $password = $array[PASSWORD_INDEX];
}

fclose($file);
unset($file);
unset($array);

$db_flag = false;

$conn = mysqli_connect($server_name, $user_name, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "show databases";

$result = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn));

while ($row = mysqli_fetch_row($result)) {
    if ($row[0] === DB_NAME) {
        $db_flag = true;
        break;
    }
}

if ($db_flag === false) {
    $sql = "CREATE database ".DB_NAME;

    if (mysqli_query($conn, $sql)) {
        echo '<script > alert('.DB_NAME.' 데이터베이스가 생성되었습니다.");</script>';
    } else {
        //echo "실패원인".mysqli_query($conn,$sql);
        echo "실패원인".mysqli_error($conn);
    }
}

unset($sql);
unset($result);
unset($row);
unset($db_flag);

$db_conn = mysqli_select_db($conn, DB_NAME) or die('Error:' . mysqli_error($conn));