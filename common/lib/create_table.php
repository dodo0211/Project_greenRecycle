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
    if($row[0] === $table_name){//문자열로 넘어오므로 ""으로 처리 ''은 문자열뿐아니라 속성도 반영
      $flag = true;
      break;
    }
  }

  if($flag === false){
    switch($table_name){
          case MEMBER_TABLE :
            $sql = "CREATE TABLE `member_table`(
                        `name` varchar(20) not null,
                        `phone` varchar(12) not null unique,
                        `address` varchar(60) not null,
                        constraint `pk_phone` primary key(`phone`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
            break;
          case PRODUCT_TABLE :
            $sql = "CREATE TABLE `product_table` (
                        `id` varchar(7) not null unique,
                        `name` varchar(20) not null,
                        `inventory` int not null,
                        `price` int not null,
                        `image` mediumblob not null,
                        constraint `pk_id_name` primary key (`id`, `name`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
            break;
        case CART_TABLE:
            $sql = "CREATE TABLE `cart_table` (
                        `phone` varchar(12) not null,
                        `id` varchar(7) not null,
                        `count` int not null,
                        constraint `pk_phone_id` primary key(`phone`, `id`),
                        constraint `fk_phone` foreign key(`phone`) references `member_table`(`phone`) on delete cascade on update cascade,
                        constraint `fk_id` foreign key(`id`) references `product_table`(`id`) on delete cascade on update cascade
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
            break;
        case PRODUCT_PHOTO_TABLE:
            $sql = "CREATE TABLE `product_photo_table` (
                        `id` varchar(7) not null unique,
                        `image_1` mediumblob,
                        `image_2` mediumblob,
                        `image_3` mediumblob,
                        `image_4` mediumblob,
                        `image_5` mediumblob,
                        `image_6` mediumblob,
                        `image_7` mediumblob,
                        `image_8` mediumblob,
                        constraint `pk_id` primary key(`id`),
                        constraint `fk_id` foreign key(`id`) references `product_table`(`id`) on delete cascade on update cascade
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
            break;
      default:
        echo "<script>alert('해당 테이블 이름이 없습니다. ');</script>";
        break;
    }

    if(mysqli_query($conn, $sql)){
      echo "<script>alert('$table_name 테이블이 생성되었습니다.');</script>";
    }else{
      echo "table 생성 실패원인: ".mysqli_error($conn);
    }
  }
}

?>
