<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            $currentSelectedTagName = '#전체';
            $currentSelectedTagSlug = get_query_var('japan-tag');
            if (!empty($currentSelectedTagSlug)) {
                $currentSelectedTagName = '#' . get_term_by('slug', $currentSelectedTagSlug, 'japan-tag')->name;
            }
            ?>
            <div class="archive-background archive-background-japan">
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
                                <ul class="archive-list-and-tags__list-container__list">
                                    <?php
                                    while (have_posts()):the_post();
                                        $japanEpisodeImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $japanEpisodeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'article_thumb')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $japanEpisodeImageUrl = get_stylesheet_directory_uri() . "/image/dummy/noimage.jpg";
                                        }
                                        ?>
                                        <li class="archive-list-and-tags__list-container__list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="date-and-title">
                                                    <h3 class="title"><?php the_title(); ?></h3>
                                                    <time class="date">Posted on <?php the_time('Y.n.j'); ?></time>
                                                </div>
                                                <div class="image-container">
                                                    <img src="<?= $japanEpisodeImageUrl; ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <p class="ariticle-content"><?= wp_trim_words(get_the_content(), 30, '⋯'); ?></p>
                                                <ul class="article-tags-container">
                                                <?php
                                                $articleTags = get_the_terms($post->ID, 'japan-tag');
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
                                    <a href="<?= get_post_type_archive_link('japan'); ?>" class="tag-list__link">
                                        <p>#전체</p>
                                    </a>
                                </li>
                                <?php
                                $allJapanTags = get_terms('japan-tag');
                                if ($allJapanTags) {
                                    foreach ($allJapanTags as $tag) :
                                        $linkToTagLimitedArchiveJapan = get_post_type_archive_link('japan') . '?japan-tag=' . $tag->slug;
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
               </div>
            </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php
get_footer();
