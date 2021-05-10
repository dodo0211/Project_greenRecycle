<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/lib/head.php"; ?>
    
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/category/style/category.css?after=6">
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/category/js/category.js" defer></script>
</head>
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/common/lib/header.php";?>
    </header>
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT']."/common/lib/nav.php";?>
    </nav>
    <main>
        <div class="common-container">
            <?php
                if (isset($_GET["category"]) == false) {
                    header('Location: '."https://".$_SERVER['HTTP_HOST']."/index.php");
                }

                $sort;

                if (isset($_GET["sort"]) == false) {
                    $sort = SORT_DESC_DATE;
                } else {
                    $sort = $_GET["sort"];
                }
                
                $orderby = "";
                switch ($sort) {
                    case SORT_ASC_PRICE:
                        $orderby = "ORDER BY price ASC";
                        break;
                    case SORT_DESC_PRICE:
                        $orderby = "ORDER BY price DESC";
                        break;
                    default:
                        $orderby = "ORDER BY date DESC";
                        break;
                }

                include $_SERVER['DOCUMENT_ROOT']."/common/lib/conn_db.php";
                
                $sql = "SELECT * FROM product_table WHERE category='".$_GET["category"]."'".$orderby;
                $result = $conn->query($sql);
                
                unset($sort);
                unset($orderby);
                unset($sql);

                foreach (array_keys($division_array) as $first_division) {
                    foreach ($division_array[$first_division] as $second_division) {
                        if ($second_division == $_GET["category"]) {
                            $second_division_text = array_search($second_division, $division_array[$first_division]);
                            ?>
                            <h1> 
                                <?php echo $second_division_text; ?>
                            </h1>
                            <div>
                                <?php echo $first_division." > ".$second_division_text; ?>
                            </div>
                            <?php
                            break 2;
                        }
                    }
                }

                unset($second_division_text);
                mysqli_close($conn);
            ?>
            <ul>
                <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/category/category.php?category=<?php echo $_GET["category"]; ?>&sort=<?php echo SORT_DESC_DATE;?>">
                    <li>신상품순</li>
                </a>
                <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/category/category.php?category=<?php echo $_GET["category"]; ?>&sort=<?php echo SORT_ASC_PRICE;?>">
                    <li>낮은 가격순</li>
                </a>
                <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/category/category.php?category=<?php echo $_GET["category"]; ?>&sort=<?php echo SORT_DESC_PRICE;?>">
                    <li>높은 가격순</li>
                </a>
                <li>
                    등록된 제품 : <?php echo $result->num_rows." 개"; ?>
                </li>
            </ul>
            <section>
                <?php
                    for ($i = 0; $i < $result->num_rows; $i += 1) {
                        ?>
                        <span>                        
                        <?php
                            $row = $result->fetch_assoc();
                            $price = number_format($row["price"], 0, '', ',')."원";
                            $link = $row["link"];
                            $name = $row["name"];
                            $category = $row["category"];
                            $id = $row["id"];
                            ?>
                            <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/product/product.php?id=<?php echo $id;?>&category=<?php echo $category;?>">
                                <img src="<?php echo $link ?>"/>
                            </a>
                            <p><?php echo $name ?></p>
                            <p><?php echo $price ?></p>
                        </span>
                        <?php
                    }

                    unset($result, $row, $$proce, $link, $name, $id);
                ?>
            </section>
        </div>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT']."/common/lib/footer.php";?>
    </footer>
</body>
</html>