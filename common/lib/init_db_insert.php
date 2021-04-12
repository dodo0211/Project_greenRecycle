<?php
function insert_init_data($conn, $table_name){
  $flag = false;
  $sql = "SELECT * from $table_name";
  $result = mysqli_query($conn, $sql) or die('Error: '.mysqli_error($conn));

  $is_set = mysqli_num_rows($result);

  if(!empty($is_set)){
    $flag = true;
  }

  if($flag == false){
    switch($table_name){
          case MEMBER_TABLE :
            $sql = "INSERT INTO `member_table` VALUES ('admin', '1234', '송훈일', '01079978395', '주소');";
            break;
          case PRODUCT_TABLE :            
            $link = "https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MTBfNzEg/MDAxNjE4MDE2MDQ0NzQz.q7Rikz21f2brwe2ZeXQNQYX06uUUKkCGVjBRhclqeU8g.5FsXa2hbzlDK9ZEmJdSuxL8WsOfnqzhpZZyHRjMICVYg.JPEG/151155795_1_1617955616_w1100.jpg?type=w1600";
            // $sql = "INSERT INTO `product_table` VALUES ('Aa0001', '제품명 테스트', 1, 1000000, '$link'),";
            // for ($i = 2; $i < 20; $i+=1) {
            //   $sql += "('Aa0001', '제품명 테스트$i', 1, 1000000, '$link'),";
            // }
            // $sql += "('Aa0001', '제품명 테스트20', 1, 1000000, '$link');";
            $sql = "INSERT INTO `product_table`(`category`, `name`, `inventory`, `price`, `link`) VALUE ('Aa0001', '제품명 테스트', 1, 1000000, '$link');";
            break;
          case CART_TABLE :
            $sql = "INSERT INTO `cart_table` VALUES ('admin', 'Aa0001', '서랍장', 1);";
            break;
      default:
        echo "<script>alert('해당 테이블 이름이 없습니다. ');</script>";
        break;
    }//end of switch

    if(mysqli_query($conn,$sql)){
      echo "<script>alert('$table_name 테이블 초기값 셋팅 완료');</script>";
    }else{
      echo "실패원인".mysqli_error($conn);
    }
  }//end of if flag

}//end of function

?>
