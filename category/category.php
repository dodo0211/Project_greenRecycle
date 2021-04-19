<?php
//   session_start();
  const LINK_MAX = 8;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/style/main.css?after=3">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/product/style/product.css?after=8">
    <script src="https://kit.fontawesome.com/e5f544887c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">

    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/product/js/product.js" defer></script>

    <title>초록리싸이클</title>
</head>
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/header.php";?>
    </header>
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/nav.php";?>
    </nav>
    <main>
        <section>
            <?php
                if (isset($_GET["category"]) == false) {
                    header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");
                }

                $sql = "SELECT * FROM product_table WHERE category='".$_GET["category"]."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $category = $row["category"];
                    $name = $row["name"];
                    $inventory = $row["inventory"];
                    $price = $row["price"];
                    $link = $row["link"];
                } else {
                    header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");
                }
            ?>
        </section>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/footer.php";?>
    </footer>
</body>
</html>