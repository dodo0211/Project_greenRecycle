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
          // case PRODUCT_TABLE :            
          //   $sql = "INSERT INTO `product_table` VALUES (null, 'Ca', '제품명 테스트', 1, 1000000, 
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTc5/MDAxNjE3NjEzNDcyNDM3.GTnPcum-GyCgzC67PjkZfI7bLdm5q6N6BNiqp-78LQMg.fqaijFBdgMeQEaeN5hq7VI0scJXmdYLdox6w_Ehrwtgg.JPEG/150773511_1_1617598631_w1100.jpg?type=w1600',
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMjY2/MDAxNjE3NjEzNDcyNDM0.lLFE8LF_wDwPSXCHMeGOJhUiNTutuY-7OiwCD-WKZkwg.Svj5CvC0ltx9jDUuR_GoJIDwCybuj5a_1ENCAXiOlXgg.JPEG/150773511_2_1617598631_w1100.jpg?type=w1600',
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfNTcg/MDAxNjE3NjEzNDcyNDIx.Y9vkPAr_4NSBSV4HuOv2A0b-8--1eZ50BjeaL28LolIg.AiQW_F3KERKrvshRvkaXRsKfV2jSHNQe1HkMzi65XHAg.JPEG/150773511_3_1617598631_w1100.jpg?type=w1600',
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfNCAg/MDAxNjE3NjEzNDcyNDM2.ixzIwDe0sOvzmTknOJGQtp94qGQfoP1L6KuOg_nbS40g.ANDpkWkYjtnegBiiCBi6rkeVGQv2dNtk4T52kzT89OQg.JPEG/150773511_4_1617598631_w1100.jpg?type=w1600',
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTA0/MDAxNjE3NjEzNDcyNDM3.IgV4yd33CJS_YUh4MrP5_unduqqhqMSqxYADjuzqO9og.Ou3xLANuJqXH9h7aIw8fR2sy1iPSAVeFqzhvaP0qPmsg.JPEG/150773511_5_1617598631_w1100.jpg?type=w1600',
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTEy/MDAxNjE3NjEzNDcyNDQ1.cJ8-zV1_peNL22L0uGKnibQcKPpw8mp2NFTxqp4lELMg.Qz-goBCcUu81oYCj5cVJ3DDMHgEmGh96h2dgwi4xyokg.JPEG/150773511_6_1617598631_w1100.jpg?type=w1600',
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMTk1/MDAxNjE3NjEzNDcyNzcx.9Hd0P95_tfV0VhOeZ9rZ6Pj21yuP5LVanED-PFumu74g.ZYezxID__zkzpb1DK16Rnzy3bRjwrpak1x6-Wzg-nAog.JPEG/150773511_7_1617598631_w1100.jpg?type=w1600',
          //   'https://cafeptthumb-phinf.pstatic.net/MjAyMTA0MDVfMjUy/MDAxNjE3NjEzNDcyNzg0.xf47EuB21qPZMhB2gaFs6s86E-88ph6bKKesqzEdnDIg.jSGpDCbzfOKJvpQ3jcUWk9BlVC29lOy4jUurUgo4IS4g.JPEG/150773511_8_1617598631_w856.jpg?type=w1600'
          //   );";
          //   break;
          // case CART_TABLE :
          //   $sql = "INSERT INTO `cart_table` VALUES ('admin', 'Ca', '1');";
          //   break;
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

  unset($flag);
  unset($sql);
  unset($result);
  unset($is_set);
  unset($table_name);
}//end of function

?>
