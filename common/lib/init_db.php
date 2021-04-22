<?php
    include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/conn_db.php";
    include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/init_db_create_table.php";
    // include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/init_db_insert.php";
    // include $_SERVER['DOCUMENT_ROOT']."/helf/common/lib/create_procedure.php";
    // include $_SERVER['DOCUMENT_ROOT']."/helf/common/lib/create_trigger.php";

    create_table($conn, MEMBER_TABLE);
    create_table($conn, PRODUCT_TABLE);
    create_table($conn, DIBS_TABLE);

    // insert_init_data($conn, MEMBER_TABLE);
    // insert_init_data($conn, PRODUCT_TABLE);

    // create_procedure($conn, 'carecenter_procedure');
    // create_trigger($conn);  //deleted_members

    mysqli_close($conn);
?>
