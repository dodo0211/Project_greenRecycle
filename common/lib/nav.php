<div>
    <section>
        <!-- <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide_sample.jpg" alt="슬라이드 이미지"> -->

        <!-- header > slide container -->
        <div class="slideshow">
            <!-- container > nav slide*5 -->
            <div class="slideshow_slides">
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide1.jpg" alt="slide1"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide2.jpg" alt="slide2"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide3.jpg" alt="slide3"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide4.jpg" alt="slide4"></a>
                <a href="#"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_greenrecycle/image/slide5.jpg" alt="slide5"></a>
            </div>

            <!-- 슬라이드 좌우 네비게이션 -->
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