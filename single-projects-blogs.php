<?php get_header();?> 
<section class="<?php echo get_field('section_prefix'); ?>-page">
    <div class="container">
        <a href="<?php echo home_url('/projects/'); ?>" class="new-board-up">
            <div class="new-board-up-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue arrow.png" alt="blue-arrow" width="100%">
            </div>
            <p>back to projects</p>
        </a>
        <div class="<?php echo get_field('section_prefix'); ?>-page-one">
            <div class="<?php echo get_field('section_prefix'); ?>-page-one-image">              
                <?php $topImg = get_field('top_img');
                    if ($topImg) { ?>
                    <img src="<?php echo $topImg; ?>" alt="" width="100%">
                <?php } ?>                  
            </div>
            <div class="<?php echo get_field('section_prefix'); ?>-page-one-description">
                <h3><?php $topTtl = get_field('top_ttl');
                    if ($topTtl) {
                        echo $topTtl;
                    }
                ?></h3>
                <p><?php $topContent = get_field('top_content');
                    if ($topContent) {
                        echo $topContent;
                    }
                ?></p>
            </div>            
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-two">
            <div class="<?php echo get_field('section_prefix'); ?>-page-two-image">
                <?php $firstImg = get_field('first_img');
                    if ($firstImg) { ?>
                    <img src="<?php echo $firstImg; ?>" alt="" width="100%">
                <?php } ?>
            </div>
            <div class="<?php echo get_field('section_prefix'); ?>-page-two-description">
                <h6><?php $firstTtl = get_field('first_ttl');
                    if ($firstTtl) {
                        echo $firstTtl;
                    }
                ?></h6>
                <p><?php $firstContent = get_field('first_content');
                    if ($firstContent) {
                        echo $firstContent;
                    }
                ?></p>
            </div>            
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-three">
            <div class="<?php echo get_field('section_prefix'); ?>-page-three-image">
                <?php $secondImg = get_field('second_img');
                    if ($secondImg) { ?>
                    <img src="<?php echo $secondImg; ?>" alt="" width="100%">
                <?php } ?>           
            </div>
            <div class="<?php echo get_field('section_prefix'); ?>-page-three-description">
                <h6><?php $secondTtl = get_field('second_ttl');
                    if ($secondTtl) {
                        echo $secondTtl;
                    }
                ?></h6>
                <p><?php $secondContent = get_field('second_content');
                    if ($secondContent) {
                        echo $secondContent;
                    }
                ?></p>
            </div>            
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-four">
            <div class="<?php echo get_field('section_prefix'); ?>-page-four-image">
                <?php $thirdImg = get_field('third_img');
                    if ($thirdImg) { ?>
                    <img src="<?php echo $thirdImg; ?>" alt="" width="100%">
                <?php } ?>            
            </div>
            <div class="<?php echo get_field('section_prefix'); ?>-page-four-description">
                <h6><?php $thirdTtl = get_field('third_ttl');
                    if ($thirdTtl) {
                        echo $thirdTtl;
                    }
                ?></h6>
                <p><?php $thirdContent = get_field('third_content');
                    if ($thirdContent) {
                        echo $thirdContent;
                    }
                ?></p>
            </div>            
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-five-video">
            <?php $utubeVideo = get_field('utube_video');
                if ($utubeVideo) { ?>
                <div class="video-container">
                    <iframe src="<?php echo $utubeVideo; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?php } ?> 
        </div>
        <a href="<?php echo home_url('/projects/'); ?>" class="new-board-down">
            <div class="new-board-down-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue arrow.png" alt="blue-arrow" width="100%">
            </div>
            <p>back to projects</p>
        </a>
    </div>
</section>
<section class="<?php echo get_field('section_prefix'); ?>-page-mobile">
    <div class="container">
        <a href="<?php echo home_url('/projects/'); ?>" class="new-board-up">
            <div class="new-board-up-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue arrow.png" alt="blue-arrow" width="100%">
            </div>
            <p>back to projects</p>
        </a>
        <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-one">
            <h3><?php $topTtl = get_field('top_ttl');
                if ($topTtl) {
                    echo $topTtl;
                }
                ?></h3>
            <p><?php $topContent = get_field('top_content');
                if ($topContent) {
                    echo $topContent;
                }
                ?></p>
            <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-one-image">              
                <?php $topImg = get_field('top_img');
                    if ($topImg) { ?>
                    <img src="<?php echo $topImg; ?>" alt="" width="100%" height="100%">
                <?php } ?>                  
            </div>
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-two">
            <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-two-image">
                <?php $firstImg = get_field('first_img');
                    if ($firstImg) { ?>
                    <img src="<?php echo $firstImg; ?>" alt="" width="100%" height="100%">
                <?php } ?>
            </div>
            <h6><?php $firstTtl = get_field('first_ttl');
                if ($firstTtl) {
                    echo $firstTtl;
                }
            ?></h6>
            <p><?php $firstContent = get_field('first_content');
                if ($firstContent) {
                    echo $firstContent;
                }
            ?></p>
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-three">
            <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-three-image">
                <?php $secondImg = get_field('second_img');
                    if ($secondImg) { ?>
                    <img src="<?php echo $secondImg; ?>" alt="" width="100%" height="100%">
                <?php } ?>           
            </div>
            <h6><?php $secondTtl = get_field('second_ttl');
                if ($secondTtl) {
                    echo $secondTtl;
                }
            ?></h6>
            <p><?php $secondContent = get_field('second_content');
                if ($secondContent) {
                    echo $secondContent;
                }
            ?></p>
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-four">
            <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-four-image">
                <?php $thirdImg = get_field('third_img');
                    if ($thirdImg) { ?>
                    <img src="<?php echo $thirdImg; ?>" alt="" width="100%" height="100%">
                <?php } ?>            
            </div>
            <h6><?php $thirdTtl = get_field('third_ttl');
                if ($thirdTtl) {
                    echo $thirdTtl;
                }
            ?></h6>
            <p><?php $thirdContent = get_field('third_content');
                if ($thirdContent) {
                    echo $thirdContent;
                }
            ?></p>
        </div>
        <div class="<?php echo get_field('section_prefix'); ?>-page-mobile-five-video">
            <?php $utubeVideo = get_field('utube_video');
                if ($utubeVideo) { ?>
                <div class="video-container">
                    <iframe src="<?php echo $utubeVideo; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?php } ?> 
        </div>
        <a href="<?php echo home_url('/projects/'); ?>" class="new-board-down">
            <div class="new-board-down-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue arrow.png" alt="blue-arrow" width="100%">
            </div>
            <p>back to projects</p>
        </a>
    </div>
</section>

<?php get_footer();?>