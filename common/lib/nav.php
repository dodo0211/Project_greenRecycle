<div>
    <section>
        <div class="slideshow">
            <div class="slideshow_slides">
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide1.png" alt="slide image 1"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide2.png" alt="slide image 2"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide3.png" alt="slide image 3"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide4.png" alt="slide image 4"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide5.png" alt="slide image 5"></a>
            </div>

            <div class="slideshow_nav">
                <a href="#" class="prev">prev</a>
                <a href="#" class="next">next</a>
            </div>
        </div>
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
                    <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/category/category.php?category=<?php echo $division_array[$first_division][$second_division]; ?>&sort=<?php echo SORT_DESC_DATE; ?>">
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