<div>
    <section>
        <!-- <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide_sample.jpg" alt="슬라이드 이미지"> -->
    </section>            
</div>
<ul>
    <?php
        foreach (array_keys($division_array) as $first_division) {
            ?>
            <li>
                <?php echo $first_division; ?>
                <ul class="dropdown-content">
                <?php
                    foreach (array_keys($division_array[$first_division]) as $second_division) {
                        ?>
                        <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/category/category.php?category=<?php echo $division_array[$first_division][$second_division]; ?>&sort=<?php echo SORT_DESC_DATE;?>">
                            <?php echo $second_division; ?>
                        </a>
                        <?php
                    }
                ?>
                </ul>
            </li>
            <?php
        }
    ?>
</ul>