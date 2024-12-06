<?php
// Initialize WordPress
require_once('../../../wp-load.php');

// Verify request
if (!isset($_POST['page']) || !isset($_POST['posts_per_page'])) {
    exit;
}

// Get parameters
$paged = $_POST['page'];
$posts_per_page = $_POST['posts_per_page'];

// Set up query
$args = array(
    'post_type' => 'news_blogs',
    'post_status' => 'publish',
    'posts_per_page' => $posts_per_page,
    'paged' => $paged
);

$news = new WP_Query($args);

if ($news->have_posts()) :
    while ($news->have_posts()) :
        $news->the_post();
        // Output the same HTML structure as in your main template
        include('template-parts/content-news.php'); // Optional: You can move the HTML to a separate template file
    endwhile;
endif;
wp_reset_postdata();

exit;