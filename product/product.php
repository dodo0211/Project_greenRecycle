<?php
//   session_start();
  const LINK_MAX = 8;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/Project_greenRecycle/common/lib/head.php"; ?>
    
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/product/style/product.css?after=11">
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/product/js/product.js" defer></script>
</head>
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/header.php";?>
    </header>
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/nav.php";?>
    </nav>
    <main>
        <div class="common-container">
            <section>
                <?php
                    if (isset($_GET["id"]) == false || isset($_GET["category"]) == false) {
                        header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");
                    }

                    include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/conn_db.php";

                    $sql = "SELECT * FROM product_table WHERE id='".$_GET["id"]."' AND category='".$_GET["category"]."'";
                    $result = $conn->query($sql);

                    mysqli_close($conn);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
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
                    } else {
                        header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");
                    }
                ?>
                <div>
                    <?php echo_divisions(); ?>
                </div>
                <div>
                    <span>
                        <div>
                            <img src="<?php echo $link;?>" alt="제품 이미지 1"  id="product_image">
                        </div>
                        <div>
                            <img src="<?php echo $link;?>" alt="제품 이미지1" onclick="updateImage(event)">
                            <?php 
                                for ($i = 1; $i <= LINK_MAX; $i += 1) {
                                    if (isset($links[$i])) {
                                        ?>
                                        <img src="<?php echo $links[$i];?>" alt="제품 이미지<?php echo $i+1;?>" onclick="updateImage(event)">
                                        <?php
                                    }
                                }
                                unset($i);
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
                            <p>구입 문의 <br/> 010 - 6202 - 7966 </p>
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

                    unset($i);
                    unset($sql);
                    unset($result);
                    unset($row);
                    unset($category);
                    unset($name);
                    unset($inventory);
                    unset($price);
                    unset($link);
                    unset($links);
                ?>
            </section>
        </div>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/footer.php";?>
    </footer>
</body>
</html>