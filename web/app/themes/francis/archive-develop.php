<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            $currentSelectedTagName = '#전체';
            $currentSelectedTagSlug = get_query_var('develop-tag');
            if (!empty($currentSelectedTagSlug)) {
                $currentSelectedTagName = '#' . get_term_by('slug', $currentSelectedTagSlug, 'develop-tag')->name;
            }
            ?>
            <div class="archive-background-container">
                <div class="archive-background archive-background-develop"></div>
                <div class="title-and-seleted-tag">
                    <div class="title-and-seleted-tag__title-container">
                        <h1 class="title"><?php the_archive_title(); ?></h1>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="archive-main">    
                    <h2 class="selected-tag"><?= $currentSelectedTagName; ?></h2>
                    <div class="archive-list-and-tags">
                        <div class="archive-list-and-tags__list-container">
                            <?php
                            if (have_posts()): ?>
                                <ul class="article-list">
                                    <?php
                                    while (have_posts()):the_post();
                                        $developEpisodeImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $developEpisodeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'article_thumb')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $developEpisodeImageUrl = get_stylesheet_directory_uri() . "/image/dummy/noimage.jpg";
                                        }
                                        ?>
                                        <li class="article-list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="date-and-title">
                                                    <h3 class="title"><?php the_title(); ?></h3>
                                                    <time class="date">Posted on <?php the_time('Y.n.j'); ?></time>
                                                </div>
                                                <div class="image-container">
                                                    <img src="<?= $developEpisodeImageUrl; ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <p class="ariticle-content"><?= wp_trim_words(get_the_content(), 30, '⋯'); ?></p>
                                                <ul class="article-tags-container">
                                                <?php
                                                $articleTags = get_the_terms($post->ID, 'develop-tag');
                                                if ($articleTags) {
                                                    foreach ($articleTags as $tag) {
                                                        echo '<li class="article-tags-container__article-tag"><p>#' . esc_html($tag->name) . '</p></li>';
                                                    }
                                                } ?>
                                                </ul>
                                            </a>
                                        </li>
                                    <?php
                                    endwhile;
                                    ?>
                                </ul>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="archive-list-and-tags__tags-container">
                            <ul class="archive-list-and-tags__tags-container__tags">
                                <?php
                                $isTheTagSelected = '';
                                if (empty($currentSelectedTagSlug)) {
                                    $isTheTagSelected = 'current-selected-tag';
                                } ?>
                                <li class="tag-list <?= $isTheTagSelected; ?>">
                                    <a href="<?= get_post_type_archive_link('develop'); ?>" class="tag-list__link">
                                        <p>#전체</p>
                                    </a>
                                </li>
                                <?php
                                $allDevelopTags = get_terms('develop-tag');
                                if ($allDevelopTags) {
                                    foreach ($allDevelopTags as $tag) :
                                        $linkToTagLimitedArchiveJapan = get_post_type_archive_link('develop') . '?develop-tag=' . $tag->slug;
                                        $isTheTagSelected = '';
                                        if (urldecode($tag->slug) == $currentSelectedTagSlug) {
                                            $isTheTagSelected = 'current-selected-tag';
                                        }
                                        ?>
                                        <li class="tag-list <?= $isTheTagSelected; ?>">
                                            <a href="<?= $linkToTagLimitedArchiveJapan ?>" class="tag-list__link">
                                                <p>#<?= $tag->name ?></p>
                                            </a>
                                        </li>
                                    <?php
                                    endforeach;
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="pagination-block">
                        <div class="archive-page-pagination">
                            <?php
                            if (function_exists("pagination")):
                                pagination($wp_query->max_num_pages);
                            endif;
                            ?>
                        </div>
                    </div>
               </div>
            </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php
get_footer();
