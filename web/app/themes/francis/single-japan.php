<?php
get_header();

if (have_posts()):
    while (have_posts()):the_post(); 
        if (has_post_thumbnail()) {
            $japanImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0]; 
        } else {
            $japanImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
        }
        ?>

        <div id="primary" class="content-area">
            <main id="main" class="" role="main">
                <div class="main-container">
                    <div class="single-page">
                        <h1 class="single-page__title">일본이야기</h1>
                        <div class="single-page__body">
                            <div class="date-and-title">
                                <h2 class="date-and-title__title"><?php the_title(); ?></h2>
                                <p class="date-and-title__date"><?php the_date('Y.n.j'); ?></p>
                            </div>
                            <div class="image-container">
                                <img class="image-container__image" src="<?= $japanImageUrl; ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div class="content-container">
                                <p class="content-container__content"><?php the_content(); ?></p>
                            </div>
                        </div>


                        <div class="single-page__pagination">
                            <?php
                            $previous_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            <div class="previous-page">
                                <?php
                                if (!empty($next_post)):
                                    $next_post_id = $next_post->ID; ?>
                                    <a class="previous-page__link" href="<?= get_the_permalink($next_post_id); ?>">
                                        <div class="pagination-container">
                                            <time class="pagination-date-and-title__date"><?= get_the_time('Y.n.j', $next_post_id); ?></time>
                                            <p class="pagination-date-and-title__title"><?= get_the_title($next_post_id); ?></p>
                                            <span class="arrow-left"></span>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="next-page">
                                <?php
                                if (!empty($previous_post)):
                                    $previous_post_id = $previous_post->ID; ?>
                                    <a class="next-page__link" href="<?= get_the_permalink($previous_post_id); ?>">
                                        <div class="pagination-container">
                                            <time class="pagination-date-and-title__date"><?= get_the_time('Y.n.j', $previous_post_id); ?></time>
                                            <p class="pagination-date-and-title__title"><?= get_the_title($previous_post_id); ?></p>
                                            <span class="arrow-right"></span>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="link-to-archive">
                            <a class="link-to-archive__btn" href="<?= get_post_type_archive_link('japan'); ?>">
                                <span class="text">일본이야기 목록</span>
                            </a>
                        </div>
                    </div>
                </div>

                
            </main><!-- .site-main -->
        </div><!-- .content-area -->

        <?php
    endwhile;
endif;

get_footer();