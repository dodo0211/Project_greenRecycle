<?php
    const COLUMN_MAX = 4;

    foreach ($category_array as $value) {
        $sql = "SELECT * FROM product_table WHERE category = '$value' ORDER By date ASC LIMIT 5";
        $result = $conn->query($sql);
        ?>
        <section>
        <?php
            if ($result->num_rows > 0) {
                for ($i = 0; $i < COLUMN_MAX; $i += 1) {
                    ?>
                    <span>
                    
                    <?php
                        $row = $result->fetch_assoc();
                        if (isset($row)) {
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
                            <?php
                        } else {
                            ?>
                            <a>
                                <img style="opacity:0;">
                            </a>
                            <p></p>
                            <p></p>
                            <?php
                        }
                    ?>
                    </span>
                    <?php
                }
            }
        ?>
        </section>
        <?php
    }
?>