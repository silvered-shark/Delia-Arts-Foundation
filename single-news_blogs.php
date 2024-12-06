<?php get_header();?> 
    <section class="news-single-one">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="news-single-one-up-prev">
                <div class="news-single-one-up-prev-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blue arrow.png" alt="" width="100%">
                </div>
                <p>back to news board</p>
            </a>
            <section class="news-single-one-first">
                <h4>
                    <?php the_title();?>
                </h4>                
                <p><?php $firstContent = get_field('first_content');
                        if ($firstContent) {
                            echo $firstContent;
                        }
                    ?></p>
            </section>            
            <section class="news-single-one-second">
                <?php $mainImg = get_field('main_img');
                    if ($mainImg) { ?>
                    <img src="<?php echo $mainImg;?>" alt="" width="100%">
                <?php   }
                ?>  
            </section>
            <section class="news-single-one-third">
                <p><?php $secondContent = get_field('second_content');
                        if ($secondContent) {
                            echo $secondContent;
                        }
                        ?></p>
                <p><?php $thirdContent = get_field('third_content');
                        if ($thirdContent) {
                            echo $thirdContent;
                        }
                        ?></p>
            </section>        
            <section class="news-single-one-fourth">
                <p><?php $fourthContent = get_field('fourth_content');
                        if ($fourthContent) {
                            echo $fourthContent;
                        }
                        ?></p>
            </section>
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="news-single-one-down-prev">
                <div class="news-single-one-down-prev-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blue arrow.png" alt="" width="100%">
                </div>
                <p>back to news board</p>
            </a>
        </div> 
    </section>
    <section class="news-single-one-mobile">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="news-single-one-mobile-up-prev">
                <div class="news-single-one-mobile-up-prev-image">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blue arrow.png" alt="" width="100%">
                </div>
                <p>back to news board</p>
            </a>
            <h4><?php the_title();?></h4>
            <div class="news-single-one-mobile-main-img">
                <?php $mainImg = get_field('main_img');
                    if ($mainImg) { ?>
                    <img src="<?php echo $mainImg;?>" alt="" width="100%">
                <?php   }
                ?>  
            </div>
            <p class="news-single-one-mobile-first-content"><?php $firstContent = get_field('first_content');
                    if ($firstContent) {
                        echo $firstContent;
                    }
                ?></p>
            <div class="news-single-one-mobile-responsive-img"> 
                <?php $responsiveImg = get_field('responsive_img');
                    if ($responsiveImg) { ?>
                <img src="<?php echo $responsiveImg;?>" alt="" width="100%">
                <?php   }
                ?>  
            </div>
            <p class="news-single-one-mobile-second-content"><?php $secondContent = get_field('second_content');
                    if ($secondContent) {
                        echo $secondContent;
                    }
                ?></p>
            <p class="news-single-one-mobile-third-content"><?php $thirdContent = get_field('third_content');
                    if ($thirdContent) {
                        echo $thirdContent;
                    }
                ?></p>
            <p class="news-single-one-mobile-fourth-content"><?php $fourthContent = get_field('fourth_content');
                    if ($fourthContent) {
                        echo $fourthContent;
                    }
                ?></p>
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="news-single-one-mobile-down-prev">
                <p>BACK TO NEWS</p>
            </a>
        </div> 
    </section>
<?php get_footer();?>