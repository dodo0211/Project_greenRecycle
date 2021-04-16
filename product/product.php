<?php
  session_start();
  const LINK_MAX = 8;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/style/main.css?after3">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/product/style/product.css?after4">
    <script src="https://kit.fontawesome.com/e5f544887c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">
    <title>초록리싸이클</title>
</head>
<body>
    <!-- <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/header.php";?>
    </header> -->
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/nav.php";?>
    </nav>
    <main>
        <section>
            <?php
                $sql = "SELECT * FROM product_table";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $category = $row["category"];
                        $name = $row["name"];
                        $inventory = $row["inventory"];
                        $price = $row["price"];
                        $link = $row["link"];
                        $links = [$link];
                        for ($i = 1; $i <= LINK_MAX; $i += 1) {
                            if (isset($row["link_".$i])) {
                                $links[] = $row["link_".$i];
                            }
                        }
                    }
                } else {
                    echo "0 results";
                }
            ?>
            <div>
                카테고리 : <?php echo $category; ?>
            </div>
            <div>
                <span>
                    <div>
                        <img src="<?php echo $link;?>" alt="제품 이미지 1">
                    </div>
                    <div>
                        <?php 
                            for ($i = 1; $i <= LINK_MAX; $i += 1) {
                                if (isset($links[$i])) {
                                    ?>
                                    <img src="<?php echo $links[$i];?>" alt="제품 이미지<?php echo $i;?>">
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </span>
                <span>
                    <div id="product_name">
                        <h4>상품 이름 : <?php echo $name; ?></h4>
                    </div>
                    <div id="product_price">
                        판매가 : <?php echo $price; ?> 
                    </div>
                    <!-- <div id="product_category">3</div> -->
                    <div id="product_inventory">
                        갯수 : <?php echo $inventory; ?>
                    </div>
                    <div id="order_total">
                        총 금액(수량) : <?php echo $price * $inventory;?>
                    </div>
                    <div id="order">
                        <p>구입 문의는 다음 번호로</p>
                        <p> 010 - xxxx - xxxx </p>
                        <button>관심 상품 등록</button>
                    </div>
                </span>
            </div>
        </section>
        <section>
            <br/>
            <p>규격</p>
            <img src="<?php echo $link;?>" alt="제품 이미지 1">
            
            <?php 
                for ($i = 1; $i <= LINK_MAX; $i += 1) {
                    if (isset($links[$i])) {
                        ?>
                        <img src="<?php echo $links[$i];?>" alt="제품 이미지<?php echo $i;?>">
                        <?php
                    }
                }
            ?>
        </section>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/footer.php";?>
    </footer>
</body>
</html>