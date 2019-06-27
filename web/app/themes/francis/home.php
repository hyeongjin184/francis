<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="portfolio">
                <h2>포트폴리오</h2>
                <?php
                $portfolioObject = new WP_Query(array(
                    'post_type' => 'portfolio', // 커스텀 게시판 이름
                    'posts_per_page' => -1, // 표시수 (-1: 전부)
                    'order' => 'DESC', // 표시순서 (내림차순)
                    'orderby' => 'date', // 표시순서 기준 (날짜)
                ));
                if ($portfolioObject->have_posts()): ?>
                    <ul>
                        <?php while ($portfolioObject->have_posts()):$portfolioObject->the_post();
                            $portfolioImageUrl = "";
                            if (has_post_thumbnail()) {
                                // 아이캐치 이미지가 있을 경우
                                $portfolioImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($portfolioObject->ID), 'medium')[0];
                            } else {
                                // 아이캐치 이미지가 없을 경우
                                $portfolioImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                            }
                            ?>

                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image-container">
                                        <img src="<?= $portfolioImageUrl; ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="date-and-title">
                                        <time class="date"><?php the_time('Y.n.j'); ?></time>
                                        <h3 class="title"><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif;
                wp_reset_postdata(); ?>
            </section>
            <hr>
            <section class="japan-episode">
                <h2>일본이야기</h2>
                <?php
                $japanEpisodeObject = new WP_Query(array(
                    'post_type' => 'japan_episode', // 커스텀 게시판 이름
                    'posts_per_page' => -1, // 표시수 (-1: 전부)
                    'order' => 'DESC', // 표시순서 (내림차순)
                    'orderby' => 'date', // 표시순서 기준 (날짜)
                ));
                if ($japanEpisodeObject->have_posts()): ?>
                    <ul>
                        <?php while ($japanEpisodeObject->have_posts()):$japanEpisodeObject->the_post();
                            $japanEpisodeImageUrl = "";
                            if (has_post_thumbnail()) {
                                // 아이캐치 이미지가 있을 경우
                                $japanEpisodeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($japanEpisodeObject->ID), 'medium')[0];
                            } else {
                                // 아이캐치 이미지가 없을 경우
                                $japanEpisodeImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                            }
                            ?>

                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image-container">
                                        <img src="<?= $japanEpisodeImageUrl; ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="date-and-title">
                                        <time class="date"><?php the_time('Y.n.j'); ?></time>
                                        <h3 class="title"><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif;
                wp_reset_postdata(); ?>
            </section>
            <hr>
            <section class="develop-episode">
                <h2>개발이야기</h2>
                <?php
                $developEpisodeObject = new WP_Query(array(
                    'post_type' => 'japan_episode', // 커스텀 게시판 이름
                    'posts_per_page' => -1, // 표시수 (-1: 전부)
                    'order' => 'DESC', // 표시순서 (내림차순)
                    'orderby' => 'date', // 표시순서 기준 (날짜)
                ));
                if ($developEpisodeObject->have_posts()): ?>
                    <ul>
                        <?php while ($developEpisodeObject->have_posts()):$developEpisodeObject->the_post();
                            $developEpisodeImageUrl = "";
                            if (has_post_thumbnail()) {
                                // 아이캐치 이미지가 있을 경우
                                $developEpisodeImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($developEpisodeObject->ID), 'medium')[0];
                            } else {
                                // 아이캐치 이미지가 없을 경우
                                $developEpisodeImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
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
                        <?php endwhile; ?>
                    </ul>
                <?php endif;
                wp_reset_postdata(); ?>
            </section>
            <hr>
            <section class="chitchat">
                <h2>잡담</h2>
                <?php
                $chitchatObject = new WP_Query(array(
                    'post_type' => 'chitchat', // 커스텀 게시판 이름
                    'posts_per_page' => -1, // 표시수 (-1: 전부)
                    'order' => 'DESC', // 표시순서 (내림차순)
                    'orderby' => 'date', // 표시순서 기준 (날짜)
                ));
                if ($chitchatObject->have_posts()): ?>
                    <ul>
                        <?php while ($chitchatObject->have_posts()):$chitchatObject->the_post();
                            $chitchatImageUrl = "";
                            if (has_post_thumbnail()) {
                                // 아이캐치 이미지가 있을 경우
                                $chitchatImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($chitchatObject->ID), 'medium')[0];
                            } else {
                                // 아이캐치 이미지가 없을 경우
                                $chitchatImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                            }
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image-container">
                                        <img src="<?= $chitchatImageUrl; ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="date-and-title">
                                        <time class="date"><?php the_time('Y.n.j'); ?></time>
                                        <h3 class="title"><?php the_title(); ?></h3>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif;
                wp_reset_postdata(); ?>
            </section>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php
get_footer();
