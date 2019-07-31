<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div id="key-visual" class="key-visual">
                <?php
                $keyVisualObject = new WP_Query(array(
                    'post_type' => 'slider', // カスタム投稿名
                    'posts_per_page' => -1, // 表示件数
                    'order' => 'ASC',
                    'orderby' => 'menu_order' // 管理画面の並び順
                ));
                if ($keyVisualObject->have_posts()): ?>
                    <div class="key-visual__container">
                        <div id="slider-wrap" class="key-visual__slider">
                            <?php while ($keyVisualObject->have_posts()):$keyVisualObject->the_post();
                                $keyVisualUrlPc = get_field('image_pc');
                                $keyVisualUrlSp = get_field('image_sp');
                                ?>
                                <div class="key-visual__slider__image-container slider-item">
                                    <div class="image-pc"
                                         style="background-image: url('<?php echo $keyVisualUrlPc; ?>')"></div>
                                    <div class="image-sp"
                                         style="background-image: url('<?php echo $keyVisualUrlSp; ?>')"></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif;
                wp_reset_postdata(); ?>
                <div class="sp-scroll-icon">
                    <p>SCROLL DOWN</p>
                    <span></span>
                </div>
            </div>
            <div class="main-container">
                <div class="main-container__left">
                    <section class="japan">
                        <h2 class="article-title">일본이야기</h2>
                        <div>
                            <?php
                            $japanEpisodeObject = new WP_Query(array(
                                'post_type' => 'japan', // 커스텀 게시판 이름
                                'posts_per_page' => 5, // 표시수 (-1: 전부)
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
                                                <ul class="article-tags-container">
                                                <?php
                                                $articleTags = get_the_terms($japanEpisodeObject->ID, 'japan-tag');
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
                        <div class="link-to-archive">
                            <a class="link-to-archive-btn" href="<?= get_post_type_archive_link('japan'); ?>">
                                <span class="text">VIEW ALL</span>
                                <span class="arrow"></span>
                            </a>
                        </div>
                    </section>
                    
                    <section class="develop">
                        <h2 class="article-title">개발이야기</h2>
                        <div>
                            <?php
                            $developEpisodeObject = new WP_Query(array(
                                'post_type' => 'develop', // 커스텀 게시판 이름
                                'posts_per_page' => 5, // 표시수 (-1: 전부)
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
                                                <p class="ariticle-content"><?= wp_trim_words(get_the_content(), 30, '⋯'); ?></p>
                                                <ul class="article-tags-container">
                                                <?php
                                                $articleTags = get_the_terms($japanEpisodeObject->ID, 'develop-tag');
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
                        <div class="link-to-archive">
                            <a class="link-to-archive-btn" href="<?= get_post_type_archive_link('develop'); ?>">
                                <span class="text">VIEW ALL</span>
                                <span class="arrow"></span>
                            </a>
                        </div>
                    </section>

                    <section class="travel">
                        <h2 class="article-title">여행이야기</h2>
                        <div>
                            <?php
                            $travelObject = new WP_Query(array(
                                'post_type' => 'travel', // 커스텀 게시판 이름
                                'posts_per_page' => -1, // 표시수 (-1: 전부)
                                'order' => 'DESC', // 표시순서 (내림차순)
                                'orderby' => 'date', // 표시순서 기준 (날짜)
                            ));
                            if ($travelObject->have_posts()): ?>
                                <ul class="travel-list">
                                    <?php
                                    while ($travelObject->have_posts()):$travelObject->the_post();
                                        $travelImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $travelImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($travelObject->ID), 'travel_thumb')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $travelImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                                        }
                                        ?>

                                        <li class="travel-list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="travel-image-container">
                                                    <img src="<?= $travelImageUrl; ?>" alt="<?php the_title(); ?>">
                                                    <div class="title-container">
                                                        <h3 class="title"><?php the_title(); ?></h3>
                                                    </div>
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

                    <section class="chitchat">
                        <h2 class="article-title">잡담</h2>
                        <div>
                            <?php
                            $chitchatObject = new WP_Query(array(
                                'post_type' => 'chitchat', // 커스텀 게시판 이름
                                'posts_per_page' => 4, // 표시수 (-1: 전부)
                                'order' => 'DESC', // 표시순서 (내림차순)
                                'orderby' => 'date', // 표시순서 기준 (날짜)
                            ));
                            if ($chitchatObject->have_posts()): ?>
                                <ul class="chitchat-list">
                                    <?php
                                    while ($chitchatObject->have_posts()):$chitchatObject->the_post();
                                        $chitchatImageUrl = "";
                                        if (has_post_thumbnail()) {
                                            // 아이캐치 이미지가 있을 경우
                                            $chitchatImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($chitchatObject->ID), 'chitchat_thumb')[0];
                                        } else {
                                            // 아이캐치 이미지가 없을 경우
                                            $chitchatImageUrl = get_stylesheet_directory_uri() . "/image/dummy-image/news_thumb_noimage.jpg";
                                        }
                                        ?>
                                        <li class="chitchat-list__item">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="image-container">
                                                    <img src="<?= $chitchatImageUrl; ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <div class="chichat-info">
                                                    <div class="date-and-title">
                                                        <h3 class="title"><?= wp_trim_words(get_the_title(), 7, '⋯'); ?></h3>
                                                        <time class="date">Posted on <?php the_time('Y.n.j'); ?></time>
                                                    </div>
                                                    <p class="ariticle-content"><?= wp_trim_words(get_the_content(), 13, '⋯'); ?></p>
                                                    <ul class="article-tags-container">
                                                    <?php
                                                    $articleTags = get_the_terms($japanEpisodeObject->ID, 'chitchat-tag');
                                                    if ($articleTags) {
                                                        foreach ($articleTags as $tag) {
                                                            echo '<li class="article-tags-container__article-tag"><p>#' . esc_html($tag->name) . '</p></li>';
                                                        }
                                                    } ?>
                                                    </ul>
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
                                <span class="text">VIEW ALL</span>
                                <span class="arrow"></span>
                            </a>
                        </div>
                    </section>
                    
                </div>
                <aside class="main-container__right">
                    <div class="about-title">
                        <h2>自己紹介</h2>
                    </div>
                    <div class="about-container">
                        <div class="about-container__image"></div>
                        <p class="about-container__content">
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
