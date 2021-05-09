<?php
date_default_timezone_set("Asia/seoul");

$file = fopen($_SERVER['DOCUMENT_ROOT']."/doc/db_conf.csv", "r");

$HOST_INDEX = 0;
$USER_INDEX = 1;
$PASSWORD_INDEX = 2;

$server_name = "";
$user_name = "";
$password = "";

while(!feof($file)) {
    $array = fgetcsv($file);

    $server_name = $array[$HOST_INDEX];
    $user_name = $array[$USER_INDEX];
    $password = $array[$PASSWORD_INDEX];
}

fclose($file);
unset($file, $array, $HOST_INDEX, $USER_INDEX, $PASSWORD_INDEX);

$conn = mysqli_connect($server_name, $user_name, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $db_flag = false;
// $sql = "show databases";
// $result = mysqli_query($conn, $sql) or die('Error: ' . mysqli_error($conn));

// while ($row = mysqli_fetch_row($result)) {
//     if ($row[0] === DB_NAME) {
//         $db_flag = true;
//         break;
//     }
// }

// if ($db_flag === false) {
//     $sql = "CREATE database ".DB_NAME;

//     if (mysqli_query($conn, $sql)) {
//         echo '<script > alert('.DB_NAME.' 데이터베이스가 생성되었습니다.");</script>';
//     } else {
//         //echo "실패원인".mysqli_query($conn,$sql);
//         echo "실패원인".mysqli_error($conn);
//     }
// }

// unset($sql);
// unset($result);
// unset($row);
// unset($db_flag);

$DB_NAME = "green_recycle_db";

mysqli_select_db($conn, $DB_NAME) or die('Error:' . mysqli_error($conn));

// 이 php파일을 include 후 mysqli_close를 호출해 리소스를 해제시켜야 한다.
// mysqli_close($conn);