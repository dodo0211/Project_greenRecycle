<?php
    include $_SERVER['DOCUMENT_ROOT']."/Project_greenRecycle/common/lib/conn_db.php";
    const COLUMN_MAX = 4;

    foreach (array_keys($division_array) as $first_division) {
        foreach ($division_array[$first_division] as $second_division) {
            $second_division_text = array_search($second_division, $division_array[$first_division]);
            $sql = "SELECT * FROM product_table WHERE category = '$second_division' ORDER By date ASC LIMIT 5";
            $result = $conn->query($sql);
            echo $second_division_text;
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
                    
                    unset($i,$row);

                    unset($price, $link, $name, $category, $id);   
                }
            ?>
            </section>
            <?php
        }
    }

    unset($first_division, $second_division, $second_division_text, $sql, $result);
    mysqli_close($conn);
?>