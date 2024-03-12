<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package azmoon
 */
get_header();
?>

<main id="primary" class="site-main mainView">
    <?php
        $post_type = get_post_type();
        if ($post_type === 'test') {
            echo '<div class="breadcrumbsTestParent">';
            echo '<a href="' . esc_url(home_url()) . '">آزمون</a> <span class="breadcrumbDivider">&gt;</span> ';
            $terms = get_the_terms(get_the_ID(), 'test-cat');
            if ($terms && !is_wp_error($terms)) {
                $primary_term = reset($terms);
                echo '<a href="' . esc_url(get_term_link($primary_term)) . '">' . esc_html($primary_term->name) . '</a> <span class="breadcrumbDivider">&gt;</span> ';
            }
            echo '<a class="linkToSinglePostCurrent" href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a>';
            echo '</div>';
        }
    ?>
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', 'test' );
        // the_post_navigation(
        // 	array(
        // 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'karenteb' ) . '</span> <span class="nav-title">%title</span>',
        // 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'karenteb' ) . '</span> <span class="nav-title">%title</span>',
        // 	)
        // );
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    endwhile; // End of the loop.
    ?>
</main><!-- #main -->

<?php
get_footer();