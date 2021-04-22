<?php

define("MEMBER_TABLE", "member_table");
define("PRODUCT_TABLE", "product_table");
define("PRODUCT_PHOTO_TABLE", "product_photo_table");
define("CART_TABLE", "cart_table");

function create_table($conn, $table_name){
  $flag = false;
  $sql = "show tables from ".DB_NAME;
  $result = mysqli_query($conn, $sql) or die('Error: '.mysqli_error($conn));

  while ($row = mysqli_fetch_row($result)) {
    //문자열로 넘어오므로 ""으로 처리 ''은 문자열뿐아니라 속성도 반영
    if($row[0] === $table_name){
      $flag = true;
      break;
    }
  }

  if($flag === false){
    switch($table_name){
          case MEMBER_TABLE :
            $sql = "CREATE TABLE `member_table`(
                        `id` varchar(20) not null unique,
                        `password` varchar(20) not null,
                        `name` varchar(20) not null,
                        `phone` varchar(12) not null,
                        `address` varchar(60) not null,
                        constraint `pk_member_phone` primary key(`phone`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
            break;
          case PRODUCT_TABLE :
            $sql = "CREATE TABLE `product_table` (
                        `category` varchar(7) not null,
                        `name` varchar(20) not null,
                        `inventory` int not null,
                        `price` int not null,
                        `link` varchar(400) not null,
                        `link_2` varchar(400) null default null,
                        `link_3` varchar(400) null default null,
                        `link_4` varchar(400) null default null,
                        `link_5` varchar(400) null default null,
                        `link_6` varchar(400) null default null,
                        `link_7` varchar(400) null default null,
                        `link_8` varchar(400) null default null,
                        constraint `pk_product_category_name` primary key (`category`, `name`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
            break;
        case CART_TABLE:
            $sql = "CREATE TABLE if not exists `member_table`(
                      `from` varchar(5) not null,
                      `id` varchar(10) not null unique,
                      `name` varchar(6) not null,
                        `gender` varchar(1) not null,
                      `phone` varchar(14) not null,
                        `birthyear` varchar(4) not null,
                        `date` date not null,
                      constraint `pk_from_id` primary key(`from`, `id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
            break;
      default:
        echo "<script>alert('해당 테이블 이름이 없습니다. ');</script>";
        break;
    }

    if (mysqli_query($conn, $sql)){
      echo "<script>alert('$table_name 테이블이 생성되었습니다.');</script>";
    } else {
      echo "table 생성 실패원인: ".mysqli_error($conn);
    }
  }

  unset($flag);
  unset($sql);
  unset($result);
  unset($row);
  unset($table_name);
}

?>
