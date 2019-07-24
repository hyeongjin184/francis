<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="archive-main-container archive-develop">
                <h2>개발이야기 리스트</h2>
                <hr>
                <?php
                $currentSelectedTagName = '전체';
                $currentSelectedTagSlug = get_query_var('develop-tag');
                if (!empty($currentSelectedTagSlug)) {
                    $currentSelectedTagName = '#' . get_term_by('slug', $currentSelectedTagSlug, 'develop-tag')->name;
                }
                ?>
                <div>
                    <p>
                        선택中 태그 → <span><?= $currentSelectedTagName; ?></span>
                    </p>
                </div>
                <div class="tags">
                    <ul class="tags-container">
                        <?php
                        $isTheTagSelected = '';
                        if (empty($currentSelectedTagSlug)) {
                            $isTheTagSelected = 'current-selected-tag';
                        } ?>
                        <li class="tags-container__list <?= $isTheTagSelected; ?>">
                            <a href="<?= get_post_type_archive_link('develop'); ?>" class="tags-container__list__link">
                                <p>전체</p>
                            </a>
                        </li>
                        <?php
                        $allDevelopTags = get_terms('develop-tag');
                        if ($allDevelopTags) {
                            foreach ($allDevelopTags as $tag) :
                                $linkToTagLimitedArchiveDevelop = get_post_type_archive_link('develop') . '?develop-tag=' . $tag->slug;
                                $isTheTagSelected = '';
                                if (urldecode($tag->slug) == $currentSelectedTagSlug) {
                                    $isTheTagSelected = 'current-selected-tag';
                                }
                                ?>
                                <li class="tags-container__list <?= $isTheTagSelected; ?>">
                                    <a href="<?= $linkToTagLimitedArchiveDevelop ?>" class="tags-container__list__link">
                                        <p>#<?= $tag->name ?></p>
                                    </a>
                                </li>
                            <?php
                            endforeach;
                        } ?>
                    </ul>
                </div>
                <hr>
                <div>
                    <?php
                    if (have_posts()): ?>
                        <ul>
                            <?php
                            while (have_posts()):the_post();
                                $developEpisodeImageUrl = "";
                                if (has_post_thumbnail()) {
                                    // 아이캐치 이미지가 있을 경우
                                    $developEpisodeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium')[0];
                                } else {
                                    // 아이캐치 이미지가 없을 경우
                                    $developEpisodeImageUrl = get_stylesheet_directory_uri() . "/image/dummy/noimage.jpg";
                                }
                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="image-container">
                                            <img src="<?= $developEpisodeImageUrl; ?>" alt="<?php the_title(); ?>">
                                        </div>
                                        <div class="date-and-title">
                                            <time class="date"><?php the_time('Y.n.j'); ?></time>
                                            <h3 class="title"><?php the_title(); ?></h3>
                                        </div>
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
            </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php
get_footer();
