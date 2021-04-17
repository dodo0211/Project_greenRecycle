<?php
  session_start();
  include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/init_db.php";
  $category_array = [
      "사무용 가구" => "Aa",
      "사무용품" => "Ab",
      "사무용 의자" => "Ac",
      "사무용 쇼파" => "Ad",
      "사무용 금고" => "Ae",
      "사무용 TV" => "Af",
      "사무용 모니터" => "Ag",
      "가정용 가구" => "Ba",
      "가정용 가전" => "Bb",
      "인테리어 소품" => "Ca",
      "주방기기" => "Da",
      "주방용품" => "Db",
      "주방식기_업소용" => "Dc",
      "주방식기_가정용" => "Dd",
      "주방 유기 그릇" => "De",
      "수집" => "Ea",
      "산업용품" => "Fa",
      "산업자재" => "Fb",
      "의류 잡화" => "Ga",
      "가방" => "Gb",
      "신발" => "Gc",
      "의류" => "Gd",
      "동양화" => "Ha",
      "서양화" => "Hb",
      "건축자재" => "Ia"
  ]
?>
<span>
    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/index.php">
        <img id="logo" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/logo.jpg" alt="logo image">
    </a>
    <a href="https://cafe.naver.com/black8hal8" target="_blank">
        초록리사이클카페
    </a>
</span>
<span>
    검색창
</span>
<span>
    전화문의 <br/>
    010-6202-7966
</span>
