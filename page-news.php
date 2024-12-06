<?php get_header(); ?>
    <section class="news">
        <div class="container">
            <section class="news-first">
                <p>Check out Delia Arts' latest updates.</p>
                <h2>WHAT’S NEW?</h2>
                <div class="news-first-subscribe">
                    <p>You can also stay up to date with our latest news by subscribing to our newsletter.</p>
                    <?php echo do_shortcode('[mc4wp_form id=432]'); ?>
                </div>
            </section>
            <section class="news-first-mobile">
                <h2>WHAT’S NEW?</h2>
                <p>Check out Delia Arts' latest updates.</p>
            </section> 
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $posts_per_page = 5;
                $args = array(
                    'post_type' => 'news_blogs',
                    'post_status' => 'publish',
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged
                );
                $news = new WP_Query($args);
                $total_posts = $news->found_posts;

                if ($news->have_posts()) :
                    echo '<div class="news-posts-container">';  // Add container for all posts
                    while ($news->have_posts()) :
                        $news->the_post();
                        // Add 'last-news' class if it's the last post
                        // $last_class = ($news->current_post === ($news->post_count - 1)) ? ' last-news' : '';
            ?>
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
            <?php
                    endwhile;
                    echo '</div>';

                    // Add Load More button if there are more posts
                    if ($total_posts > $posts_per_page) :
                ?>
                        <div class="load-more-container">
                            <button id="load-more-news" data-page="1" data-posts-per-page="<?php echo $posts_per_page; ?>">
                                Load More News
                            </button>
                        </div>
                <?php
                    endif;
                else :
                    echo '<p>No news found</p>';
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </section>
    <script>
    jQuery(document).ready(function($) {
        // Only enable load more functionality if not on mobile
        if (window.innerWidth > 768) {  // Standard tablet/desktop breakpoint
            $('#load-more-news').on('click', function() {
                var button = $(this);
                var currentPage = parseInt(button.data('page')) + 1;
                var postsPerPage = button.data('posts-per-page');

                $.ajax({
                    url: '<?php echo get_template_directory_uri(); ?>/load-more-news.php',
                    type: 'POST',
                    data: {
                        action: 'load_more_news',
                        page: currentPage,
                        posts_per_page: postsPerPage
                    },
                    success: function(response) {
                        if (response) {
                            $('.news-posts-container').append(response);
                            button.data('page', currentPage);
                            
                            // Hide button if no more posts
                            if ($('.news-posts-container').children().length >= <?php echo $total_posts; ?>) {
                                button.hide();
                            }
                        } else {
                            button.hide();
                        }
                        
                        // Set margin-bottom to 0 after AJAX is finished
                        $('.load-more-container').css('margin-bottom', '0');
                    }
                });
            });
        } else {
            // Instead of hiding the button, load all posts immediately
            var totalPosts = <?php echo $total_posts; ?>;
            var postsPerPage = <?php echo $posts_per_page; ?>;
            var totalPages = Math.ceil(totalPosts / postsPerPage);
            var currentPage = 1;

            function loadAllPosts() {
                if (currentPage >= totalPages) return;
                
                $.ajax({
                    url: '<?php echo get_template_directory_uri(); ?>/load-more-news.php',
                    type: 'POST',
                    data: {
                        action: 'load_more_news',
                        page: currentPage + 1,
                        posts_per_page: postsPerPage
                    },
                    success: function(response) {
                        if (response) {
                            $('.news-posts-container').append(response);
                            currentPage++;
                            if (currentPage < totalPages) {
                                loadAllPosts();
                            }
                        }
                    }
                });
            }

            // Hide the button and load all posts
            $('#load-more-news').hide();
            loadAllPosts();
        }
    });
    </script>
<?php get_footer();?>