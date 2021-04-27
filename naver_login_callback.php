<?php
    session_start();

    // NAVER LOGIN
    define('NAVER_CLIENT_ID', 'nxUB7OJ1tVz_uGQPYbEl');
    define('NAVER_CLIENT_SECRET', 'Za4v3FCTlm');
    define('NAVER_CALLBACK_URL', 'http://localhost/project_greenrecycle/naver_login_callback.php');

    if ($_SESSION['naver_state'] != $_GET['state']) {
        // 불법 요청 로그 남기기
        header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");        
    }

    // $naver_curl = "https://nid.naver.com/oauth2.0/token?grant_type=authorization_code&client_id=".NAVER_CLIENT_ID."&client_secret=".NAVER_CLIENT_SECRET."&redirect_uri=".urlencode(NAVER_CALLBACK_URL)."&code=".$_GET['code']."&state=".$_GET['state'];
    $naver_curl = "https://nid.naver.com/oauth2.0/token?client_id=".NAVER_CLIENT_ID."&client_secret=".NAVER_CLIENT_SECRET."&grant_type=authorization_code&state=".$_GET['state']."&code=".$_GET['code'];

    // 토큰값 가져오기
    $is_post = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $naver_curl);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status_code == 200) {
        $responseArr = json_decode($response, true);

        $_SESSION['naver_access_token'] = $responseArr['access_token'];
        $_SESSION['naver_refresh_token'] = $responseArr['refresh_token'];

        // 토큰값으로 네이버 회원정보 가져오기
        $me_headers = array(
            'Content-Type: application/json',
            sprintf('Authorization: Bearer %s', $responseArr['access_token'])
        );

        $me_is_post = false;
        $me_ch = curl_init();
        
        curl_setopt($me_ch, CURLOPT_URL, "https://openapi.naver.com/v1/nid/me");
        curl_setopt($me_ch, CURLOPT_POST, $me_is_post);
        curl_setopt($me_ch, CURLOPT_HTTPHEADER, $me_headers);
        curl_setopt($me_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($me_ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($me_ch, CURLOPT_SSL_VERIFYHOST, 0);

        $me_response = curl_exec($me_ch);
        $me_status_code = curl_getinfo($me_ch, CURLINFO_HTTP_CODE);
        curl_close($me_ch);

        $me_responseArr = json_decode($me_response, true);

        include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/conn_db.php";

        // 회원가입 DB에서 회원이 있으면(이미 가입되어 있다면) 토큰을 업데이트하고 로그인 함
        $sql = "SELECT id, name FROM member_table WHERE from='naver' AND id='{$me_responseArr['response']['id']}'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $sql = "UPDATE member_table SET `token` = {$responseArr['access_token']} WHERE from='naver' AND id='{$me_responseArr['response']['id']}'";
        }
        // 회원정보가 없다면 회원가입
        else {
            $sql = "INSERT INTO `member_table` VALUES (
                'naver', 
                '{$me_responseArr['response']['id']}',
                '{$me_responseArr['response']['name']}',
                '{$me_responseArr['response']['gender']}',
                '{$me_responseArr['response']['mobile']}',
                '{$me_responseArr['response']['birthyear']}',
                '{$responseArr['access_token']}',
                \'.date('Y-m-d').\'
            );";
        }

        if (mysqli_query($conn,$sql)) {
            echo "<script>alert('$table_name 테이블 초기값 셋팅 완료');</script>";
        } else {
            echo "<script>alert('실패원인".mysqli_error($conn)."');</script>";
        }

        mysqli_close($conn);
    } else {
        // 로그 남기기
        header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");
    }
?>