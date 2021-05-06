<?php
    session_start();

    // NAVER LOGIN
    define('NAVER_CLIENT_ID', 'nxUB7OJ1tVz_uGQPYbEl');
    define('NAVER_CALLBACK_URL', 'https://'.$_SERVER['HTTP_HOST'].'/login/naver_login_callback.php');
    
    // 네이버 로그인 접근토큰 요청
    $_SESSION['naver_state'] = md5(microtime() . mt_rand());
    $naver_login_api_url = "https://nid.naver.com/oauth2.0/authorize?response_type=code&client_id=".NAVER_CLIENT_ID."&redirect_uri=".urlencode(NAVER_CALLBACK_URL)."&state=".$_SESSION['naver_state'];
?>