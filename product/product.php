<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/style/main.css?after1">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/product/style/product.css?after1">
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
            <div>
                category
            </div>
            <div>
                <span>
                    <div>image</div>
                    <div>images</div>
                </span>
                <span>
                    <div id="product_name">
                        <h4>상품 이름</h4>
                    </div>
                    <div id="product_price">판매가 : </div>
                    <!-- <div id="product_category">3</div> -->
                    <div id="product_inventory">갯수 : </div>
                    <div id="order_total">총 금액(수량) : </div>
                    <div id="order_buttons">
                        <button>구매하기</button>
                        <button>장바구니</button>
                        <!-- <button></button> -->
                    </div>
                </span>
            </div>
        </section>
        <section>
            규격 <br/>
            <?php 
                for ($i=0; $i < 8; $i += 1) {
                    echo "image".$i."<br/>";
                }                
            ?>
        </section>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/footer.php";?>
    </footer>
</body>
</html>