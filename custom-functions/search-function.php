<?php
function search_quiz() {
    $searchQuery = $_POST['searchQuery'];
    ob_start();
    $searchQuizArgs = array(
        'post_type'=>'test',
        'posts_per_page'=>-1,
        's'=>$searchQuery
    );
    $searchQuizQuery = new WP_Query($searchQuizArgs);
    while($searchQuizQuery->have_posts()) : $searchQuizQuery->the_post();
    ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-image">
                    <div class="imageTestCardArchive"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <a href="<?php the_permalink(); ?>" class="btn-floating halfway-fab waves-effect waves-light linkBtnTestCardArchive"><svg width="25" height="25" fill="#fff" viewBox="0 0 0.3 0.3" xmlns="http://www.w3.org/2000/svg"><path d="M.15.037a.02.02 0 0 0-.019.019v.075H.056a.019.019 0 1 0 0 .037h.075v.075a.019.019 0 1 0 .037 0V.169h.075a.019.019 0 1 0 0-.037H.169V.056A.02.02 0 0 0 .15.037"/></svg></a>
                </div>
                <div class="card-content">
                    <h3 class="card-title titleTestCardArchive"><?php the_title(); ?></h3>
                    <p class="explainTestCardArchive"><?php echo get_field('azmoon_single_test_shortdec') ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
    $data = ob_get_clean();
    echo $data;
    wp_die();
  }
  add_action('wp_ajax_search_quiz', 'search_quiz');
  add_action('wp_ajax_nopriv_search_quiz', 'search_quiz');