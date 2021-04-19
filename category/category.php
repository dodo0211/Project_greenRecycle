<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/style/main.css?after=1">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/category/style/category.css?after=5">
    <script src="https://kit.fontawesome.com/e5f544887c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@700&display=swap" rel="stylesheet">

    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/Project_greenRecycle/category/js/category.js" defer></script>

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
         <?php
            if (isset($_GET["category"]) == false) {
                header('Location: '."http://".$_SERVER['HTTP_HOST']."/project_greenrecycle/index.php");
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

            $sql = "SELECT * FROM product_table WHERE category='".$_GET["category"]."'".$orderby;
            $result = $conn->query($sql);
        ?>
        <?php
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
        ?>
        <ul>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/category/category.php?category=<?php echo $_GET["category"]; ?>&sort=<?php echo SORT_DESC_DATE;?>">
                <li>신상품순</li>
            </a>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/category/category.php?category=<?php echo $_GET["category"]; ?>&sort=<?php echo SORT_ASC_PRICE;?>">
                <li>낮은 가격순</li>
            </a>
            <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/category/category.php?category=<?php echo $_GET["category"]; ?>&sort=<?php echo SORT_DESC_PRICE;?>">
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
                        <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/product/product.php?id=<?php echo $id;?>&category=<?php echo $category;?>">
                            <img src="<?php echo $link ?>"/>
                        </a>
                        <p><?php echo $name ?></p>
                        <p><?php echo $price ?></p>
                    </span>
                    <?php
                }
            ?>
        </section>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/footer.php";?>
    </footer>
</body>
</html>