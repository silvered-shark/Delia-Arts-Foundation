<script>
    jQuery(document).ready(function($) {
        // Only enable load more functionality if not on mobile
        if (window.innerWidth > 768) {  // Standard tablet/desktop breakpoint
            $('#load-more-news').on('click', function() {
                var button = $(this);
                var currentPage = parseInt(button.data('page')) + 1;
                var postsPerPage = button.data('posts-per-page');

                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
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
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
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