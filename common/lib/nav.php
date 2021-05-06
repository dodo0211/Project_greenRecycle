<div>
    <section>
        <div class="slideshow">
            <div class="slideshow_slides">
                <a href="#"><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image/slide1.png" alt="slide image 1"></a>
                <a href="#"><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image/slide2.png" alt="slide image 2"></a>
                <a href="#"><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image/slide3.png" alt="slide image 3"></a>
                <a href="#"><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image/slide4.png" alt="slide image 4"></a>
                <a href="#"><img src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/image/slide5.png" alt="slide image 5"></a>
            </div>

            <div class="slideshow_nav">
                <a href="#" class="prev">prev</a>
                <a href="#" class="next">next</a>
            </div>
        </div>
        <!-- <div class='mainArea'>
            <div class='post photoSet 1photos'>
                <div class='slideshow'>
                    <div class='slide'>
                        <img src='https://i.imgur.com/76nykRK.gif' />
                    </div>
                    <div class='slide'>
                        <img src='https://i.imgur.com/x4nn8FD.jpg' />
                    </div>
                    <div class='slide'>
                        <img src='https://i.imgur.com/rPgXc03.jpg' />
                    </div>
                    <div class='slide'>
                        <img src='https://i.imgur.com/bUBp4t0.jpg' />
                    </div>
                </div>
            </div>
        </div> -->
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
                    <a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/category/category.php?category=<?php echo $division_array[$first_division][$second_division]; ?>&sort=<?php echo SORT_DESC_DATE; ?>">
                        <?php echo $second_division; ?>
                    </a>
                <?php
                    }
                ?>
            </ul>
        </li>
    <?php
        }
        unset($first_division);
        unset($second_division);
    ?>
</ul>