<?php

// 결과가 잘못되었을 경우, 경고해주고 뒤로
function alert_back($message)
{
    echo ("
        <script>
        alert('$message');
        history.go(-1)
        </script>
        ");
}

// 공격성을 가진 클라이언트를 방어
function input_set($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);    // entity로 변환
    return $data;
}
