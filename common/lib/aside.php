<div id="naver_id_login">
    <a href="<?php echo $naver_login_api_url; ?>">
        <img height="50" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/naver_login.png"/>
    </a>
</div>
<div>
    <p>010-6202-7966</p>
</div>       
<div>
    <br/>
    <p>계좌번호</p>
</div>     
<div>
    <br/>
    <p>위치</p>
    <p>경기도 구리시 아차산로256 초록리싸이클</p>
    <!-- <div id="map" style="width:100%;height:300px;"></div> -->
</div>
<div>
    <img id="map" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/map.png" alt="map image">
</div>

<!-- 네이버아디디로로그인 초기화 Script -->
<!-- <script type="text/javascript">
	var naver_id_login = new naver_id_login("nxUB7OJ1tVz_uGQPYbEl", "http://192.168.0.164/project_greenrecycle/index.php");
	var state = naver_id_login.getUniqState();
	naver_id_login.setButton("green", 3, 40);
	naver_id_login.setDomain(".chorokrecycle.com");
	naver_id_login.setState(state);
    // 접근 토큰 값 출력
    alert(naver_id_login.oauthParams.access_token);
    // 네이버 사용자 프로필 조회
    naver_id_login.get_naver_userprofile("naverSignInCallback()");
    // 네이버 사용자 프로필 조회 이후 프로필 정보를 처리할 callback function
    function naverSignInCallback() {
        alert(naver_id_login.getProfileData('email'));
        alert(naver_id_login.getProfileData('nickname'));
        alert(naver_id_login.getProfileData('age'));
    }
	// naver_id_login.setPopup();
	naver_id_login.init_naver_id_login();
</script> -->
<!-- // 네이버아이디로로그인 초기화 Script -->

<!-- <script>
    let mapOptions = {
        center: new naver.maps.LatLng(37.577413, 127.128646),
        zoom: 18
    };

    let map = new naver.maps.Map('map', mapOptions);
</script> -->