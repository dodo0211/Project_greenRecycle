<?php
    include $_SERVER['DOCUMENT_ROOT']."/common/lib/conn_db.php";

    var_dump($_POST);
    
    $id = $_POST['id'];
    $sql = "select * from member_table where id='{$id}'";
    $result = mysqli_query($conn, $sql);

    $num_record = mysqli_num_rows($result);

    if ($num_record) {
        // echo "<script>alert('다른 아이디를 사용해 주세요!');</script>";
        echo "<li>".$id." 아이디는 중복됩니다.</li>";
        echo "<li>다른 아이디를 사용해 주세요!</li>";
    } else {
        // echo "<script>alert('아이디는 사용 가능합니다');</script>";
        echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
    }

    mysqli_close($conn);
?>

