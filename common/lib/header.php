<?php
  include $_SERVER['DOCUMENT_ROOT']."/common/lib/init_db.php";
  
  $division_array = [];
  
  $file = fopen($_SERVER['DOCUMENT_ROOT']."/doc/category.csv", "r");

  const FIRST_DIVISION_INDEX = 0;
  const SECOND_DIVISION_INDEX = 2;
  const CATEGORY_INDEX = 4;

  $first_division;

  while(!feof($file)) {
    $array = fgetcsv($file);
    $category;
    $second_division;

    if ($array != null) {
        if ($array[CATEGORY_INDEX] != "") {
            if ($array[FIRST_DIVISION_INDEX] != "") {
                $first_division = $array[FIRST_DIVISION_INDEX];
            }
            $second_division = $array[SECOND_DIVISION_INDEX];
            $category = $array[CATEGORY_INDEX];
        }
    }

    if (isset($first_division)) {
        if (isset($division_array[$first_division]) == false) {
            $division_array[$first_division] = [];
        }
        $division_array[$first_division][$second_division] = $category;
    }
  }

  fclose($file);
  unset($file, $array, $category, $second_division);

  /**
   * use in category.php
   */
  const SORT_DESC_DATE = 0;
  const SORT_ASC_PRICE = 1;
  const SORT_DESC_PRICE = 2;

  function echo_divisions() {
    global $division_array;
    foreach (array_keys($division_array) as $first_division) {
        foreach ($division_array[$first_division] as $second_division) {
            if ($second_division == $_GET["category"]) {
                $second_division_text = array_search($second_division, $division_array[$first_division]);
                ?>
                <div>
                    <?php echo $first_division." > ".$second_division_text; ?>
                </div>
                <?php
                break 2;
            }
        }
    }
    unset($first_division, $second_division, $second_division_text);
  }
?>
<div class="common-container">
    <div id="user_menu">
        <ul>
            <!-- <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/register/register.php">
                <li id="register_button">회원가입</li>
            </a>
            <li>|</li> -->
            <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/login/login.php">
                <li id="login_button">로그인</li>
            </a>
        </ul>
    </div>
    <div>
        <span>
            <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php">
                <img id="logo" src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image/logo.jpg" alt="logo image">
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
    </div>
</div>