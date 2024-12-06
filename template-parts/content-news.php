<section class="news-second">
    <div class="news-second-title">
        <a href="<?php the_permalink();?>">
            <h6><?php the_title();?></h6>
        </a> 
        <p><?php echo get_the_date('m/d/Y'); ?></p>
    </div>
    <div class="news-second-image">
        <a href="<?php the_permalink();?>">
            <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </a>
    </div>
    <div class="news-second-description">
        <?php the_content();?>
        <a href="<?php the_permalink();?>">
            <p>
                read more
            </p>
        </a>
    </div>
</section>  
<section class="news-second-mobile">
    <div class="news-second-mobile-image">
        <a href="<?php the_permalink();?>">
            <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </a>    
    </div>
    <div class="news-second-mobile-title">
        <a href="<?php the_permalink();?>">
            <h6><?php the_title();?></h6>
        </a>    
        <p><?php echo get_the_date('m/d/Y'); ?></p>
    </div>
    <div class="news-second-mobile-description">
        <?php the_content();?>
        <a href="<?php the_permalink();?>">
            <p>
                read more
            </p>
        </a>
    </div>
</section>  