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
    // get the post id
    $quizID = get_the_ID();
    // set query parameters
    $query_args = array(
        'param1' => 'value1',
        'param2' => 'value2',
    );
    // create link url by query parameters
    $link_url = add_query_arg($query_args, get_permalink($post_id));
    ?>
    <div class="linkToQuizButtonParent">
        <a href="<?php echo get_site_url(); ?>/run-quiz?quiz=<?php echo $quizID; ?>" id="load-content-button" class="waves-effect waves-light btn deep-orange darken-4 white-text">شروع آزمون</a>
    </div>

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