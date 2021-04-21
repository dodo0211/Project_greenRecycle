<?php
    session_start();

    // NAVER LOGIN
    define('NAVER_CLIENT_ID', 'nxUB7OJ1tVz_uGQPYbEl');
    define('NAVER_CLIENT_SECRET', 'nxUB7OJ1tVz_uGQPYbEl');
    define('NAVER_CALLBACK_URL', 'http://192.168.0.164/project_greenrecycle/naver_login_callback.php');

    if ($_SESSION['naver_state'] != $_GET['state']) {
        header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");        
    }

    $naver_curl = "https://nid.naver.com/oauth2.0/token?grant_type=authorization_code&client_id=".NAVER_CLIENT_ID."&client_secret=".NAVER_CLIENT_SECRET."&redirect_uri=".urlencode(NAVER_CALLBACK_URL)."&code=".$_GET['code']."&state=".$_GET['state'];

    // 토큰값 가져오기
    $is_post = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $naver_curl);
    curl_setopt($ch, CURLOPT_POST, $is_post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
        $me_response = curl_exec($me_ch);
        $me_status_code = curl_getinfo($me_ch, CURLINFO_HTTP_CODE);
        curl_close($me_ch);

        $me_responseArr = json_decode($me_response, true);

        if ($me_responseArr['response']['id']) {
            // 회원 아이디(naver_ 접두사에 네이버 아이디를 붙여줌)
            $mb_uid = 'naver_'.$me_responseArr['response']['id'];
            echo $mb_uid;
            // 회원가입 DB에서 회원이 있으면(이미 가입되어 있다면) 토큰을 업데이트하고 로그인 함
            // if (회원정보가 있다면) {
            //     // 멤버 DB에 토큰값 업데이트 $responseArr['access_token']
            //     // 로그인
            // }
            // // 회원정보가 없다면 회원가입
            // else {
            //     // 회원아이디 $mb_uid
            //     $mb_nickname = $me_responseArr['response']['nickname']; // 닉네임 
            //     $mb_email = $me_responseArr['response']['email']; // 이메일 
            //     $mb_gender = $me_responseArr['response']['gender']; // 성별 F: 여성, M: 남성, U: 확인불가 
            //     $mb_age = $me_responseArr['response']['age']; // 연령대 
            //     $mb_birthday = $me_responseArr['response']['birthday']; // 생일(MM-DD 형식) 
            //     $mb_profile_image = $me_responseArr['response']['profile_image']; // 프로필 이미지

            //     // 멤버 db에 토큰과 회원정보를 넣고 로그인
            // }
        } else {
            echo '<script>alert("no naver member");</script>';
        }
    } else {
        echo '<script>alert("no token value");</script>';
    }
?>