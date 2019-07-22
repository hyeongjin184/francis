<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="main-container">
                <div class="main-container__left">
                    <section class="japan">
                        <h2 class="article-title">일본이야기</h2>
                        <div>
                            <?php
                            $japanEpisodeObject = new WP_Query(array(
                                'post_type' => 'japan', // 커스텀 게시판 이름
                                'posts_per_page' => 2, // 표시수 (-1: 전부)
                                'order' => 'DESC', // 표시순서 (내림차순)
                                'orderby' => 'date', // 표시순서 기준 (날짜)
                            ));
                            if ($japanEpisodeObject->have_posts()): ?>
                                <ul class="article-list">
                                    <?php
                                    while ($japanEpisodeObject->have_posts()):$japanEpisodeObject->the_post();
                                        $japanEpisodeImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $japanEpisodeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($japanEpisodeObject->ID), 'article_thumb')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $japanEpisodeImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                                        }
                                        ?>

                                        <li class="article-list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="date-and-title">
                                                    <h3 class="title"><?php the_title(); ?></h3>
                                                    <time class="date">Posted on <?php the_time('Y.n.j'); ?></time>
                                                </div>
                                                <div class="image-container">
                                                    <img src="<?= $japanEpisodeImageUrl; ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <p class="ariticle-content"><?= wp_trim_words(get_the_content(), 30, '⋯'); ?></p>
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
                        <div class="link-to-archive">
                            <a class="link-to-archive-btn" href="<?= get_post_type_archive_link('japan'); ?>">
                                VIEW ALL
                            </a>
                        </div>
                    </section>
                    
                    <section class="develop">
                        <h2 class="article-title">개발이야기</h2>
                        <div>
                            <?php
                            $developEpisodeObject = new WP_Query(array(
                                'post_type' => 'develop', // 커스텀 게시판 이름
                                'posts_per_page' => 2, // 표시수 (-1: 전부)
                                'order' => 'DESC', // 표시순서 (내림차순)
                                'orderby' => 'date', // 표시순서 기준 (날짜)
                            ));
                            if ($developEpisodeObject->have_posts()): ?>
                                <ul class="article-list">
                                    <?php
                                    while ($developEpisodeObject->have_posts()):$developEpisodeObject->the_post();
                                        $developEpisodeImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $developEpisodeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($developEpisodeObject->ID), 'article_thumb')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $developEpisodeImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
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
                        <div class="link-to-archive">
                            <a class="link-to-archive-btn" href="<?= get_post_type_archive_link('develop'); ?>">
                                VIEW ALL
                            </a>
                        </div>
                    </section>
                    
                    <section class="chitchat">
                        <h2 class="article-title">잡담</h2>
                        <div>
                            <?php
                            $chitchatObject = new WP_Query(array(
                                'post_type' => 'chitchat', // 커스텀 게시판 이름
                                'posts_per_page' => 2, // 표시수 (-1: 전부)
                                'order' => 'DESC', // 표시순서 (내림차순)
                                'orderby' => 'date', // 표시순서 기준 (날짜)
                            ));
                            if ($chitchatObject->have_posts()): ?>
                                <ul class="article-list">
                                    <?php
                                    while ($chitchatObject->have_posts()):$chitchatObject->the_post();
                                        $chitchatImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $chitchatImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($chitchatObject->ID), 'article_thumb')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $chitchatImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                                        }
                                        ?>
                                        <li class="article-list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="date-and-title">
                                                    <h3 class="title"><?php the_title(); ?></h3>
                                                    <time class="date">Posted on <?php the_time('Y.n.j'); ?></time>
                                                </div>
                                                <div class="image-container">
                                                    <img src="<?= $chitchatImageUrl; ?>" alt="<?php the_title(); ?>">
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
                        <div class="link-to-archive">
                            <a class="link-to-archive-btn" href="<?= get_post_type_archive_link('chitchat'); ?>">
                                VIEW ALL
                            </a>
                        </div>
                    </section>
                    
                    <section class="portfolio">
                        <h2 class="article-title">포트폴리오</h2>
                        <div>
                            <?php
                            $portfolioObject = new WP_Query(array(
                                'post_type' => 'portfolio', // 커스텀 게시판 이름
                                'posts_per_page' => -1, // 표시수 (-1: 전부)
                                'order' => 'DESC', // 표시순서 (내림차순)
                                'orderby' => 'date', // 표시순서 기준 (날짜)
                            ));
                            if ($portfolioObject->have_posts()): ?>
                                <ul class="portfolio-list">
                                    <?php
                                    while ($portfolioObject->have_posts()):$portfolioObject->the_post();
                                        $portfolioImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $portfolioImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($portfolioObject->ID), 'large')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $portfolioImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                                        }
                                        ?>

                                        <li class="portfolio-list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="portfolio-image-container">
                                                    <img src="<?= $portfolioImageUrl; ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <div class="date-and-title">
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
                    </section>
                </div>
                <aside class="main-container__right">
                    <h2>ABOUT ME</h2>
                    <div>
                        <div>
                            
                        </div>
                        <p>
                            안녕하세요. 일본 도쿄에서 개발자로 일하고 있는 한국인입니다.
                            살면서 느낀 일본에 대한 문화나, 맛집, 여행을 기록하고
                            제가 좋아하는 취미는 다 올릴 생각입니다.
                        </p>
                    </div>
                </aside>
            </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php
get_footer();
