<?php
include "./common/lib/db_connector.php";
include "./common/lib/create_table.php";
// include $_SERVER['DOCUMENT_ROOT']."/helf/common/lib/db_ini_insert.php";
// include $_SERVER['DOCUMENT_ROOT']."/helf/common/lib/create_procedure.php";
// include $_SERVER['DOCUMENT_ROOT']."/helf/common/lib/create_trigger.php";

create_table($conn, MEMBER_TABLE);
create_table($conn, PRODUCT_TABLE);
create_table($conn, CART_TABLE);
create_table($conn, PRODUCT_PHOTO_TABLE);

// insert_init_data($conn, 'members');

// create_procedure($conn, 'carecenter_procedure');
// create_trigger($conn);  //deleted_members

?>
