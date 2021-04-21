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
            $sql = "CREATE TABLE `cart_table` (
                        `member_id` varchar(20) not null,
                        `product_category` varchar(7) not null,
                        `product_name` varchar(20) not null,
                        `count` int not null,
                        constraint `pk_cart_member_id_product_category_name` primary key(`member_id`, `product_category`, `product_name`),
                        constraint `fk_cart_member_id` foreign key(`member_id`) references `member_table`(`id`) on delete cascade on update cascade,
                        constraint `fk_cart_product_category_name` foreign key(`product_category`, `product_name`) references `product_table`(`category`, `name`) on delete cascade on update cascade
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
