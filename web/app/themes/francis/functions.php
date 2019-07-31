<?php
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');
function enqueue_styles_and_scripts()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/dist/css/style.css');

    if (is_front_page()) {
        wp_enqueue_script('keyvisual_slider', get_stylesheet_directory_uri() . '/dist/js/keyvisual_slider.js', array(), false, true);
    }
}



function add_thumbnail_size()
{
    add_image_size('article_thumb', 680, 465, true);
    add_image_size('travel_thumb', 340, 340, true);
    add_image_size('chitchat_thumb', 330, 185, true);
}
add_action('after_setup_theme', 'add_thumbnail_size');



add_action('init', 'add_custom_post_type');
function add_custom_post_type()
{
    $sliderParams = array(
        'labels' => array(
            'name' => '슬라이더',
            'singular_name' => '슬라이더',
            'add_new' => '슬라이더 추가',
            'add_new_item' => '신규 슬라이더 추가',
            'edit_item' => '편집',
            'new_item' => '신규 슬라이더',
            'all_items' => '전체 슬라이더',
            'view_item' => '슬라이더 보기',
            'search_items' => '슬라이더 찾기',
            'not_found' => '찾을 수 없습니다',
            'not_found_in_trash' => '휴지통 안에 없습니다',
            'enter_title_here' => '슬라이더 제목을 입력',
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        "supports" => array("title"),
        'menu_position' => 20,
    );
    register_post_type('slider', $sliderParams);

    $travelParams = array(
        'labels' => array(
            'name' => '여행이야기',
            'singular_name' => '여행이야기',
            'add_new' => '여행이야기 추가',
            'add_new_item' => '신규 여행이야기 추가',
            'edit_item' => '편집',
            'new_item' => '신규 여행이야기',
            'all_items' => '전체 여행이야기',
            'view_item' => '여행이야기 보기',
            'search_items' => '여행이야기 찾기',
            'not_found' => '찾을 수 없습니다',
            'not_found_in_trash' => '휴지통 안에 없습니다',
            'enter_title_here' => '여행이야기 제목을 입력',
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        "supports" => array("title", "editor", "thumbnail"),
        'menu_position' => 20,
    );
    register_post_type('travel', $travelParams);

    $japanEpisodeParams = array(
        'labels' => array(
            'name' => '일본이야기',
            'singular_name' => '일본이야기',
            'add_new' => '일본이야기 추가',
            'add_new_item' => '신규 일본이야기 추가',
            'edit_item' => '편집',
            'new_item' => '신규 일본이야기',
            'all_items' => '전체 일본이야기',
            'view_item' => '일본이야기 보기',
            'search_items' => '일본이야기 찾기',
            'not_found' => '찾을 수 없습니다',
            'not_found_in_trash' => '휴지통 안에 없습니다',
            'enter_title_here' => '일본이야기 제목을 입력',
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        "supports" => array("title", "editor", "thumbnail"),
        'menu_position' => 21,
    );
    register_post_type('japan', $japanEpisodeParams);

    $developEpisodeParams = array(
        'labels' => array(
            'name' => '개발이야기',
            'singular_name' => '개발이야기',
            'add_new' => '개발이야기 추가',
            'add_new_item' => '신규 개발이야기 추가',
            'edit_item' => '편집',
            'new_item' => '신규 개발이야기',
            'all_items' => '전체 개발이야기',
            'view_item' => '개발이야기 보기',
            'search_items' => '개발이야기 찾기',
            'not_found' => '찾을 수 없습니다',
            'not_found_in_trash' => '휴지통 안에 없습니다',
            'enter_title_here' => '개발이야기 제목을 입력',
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        "supports" => array("title", "editor", "thumbnail"),
        'menu_position' => 22,
    );
    register_post_type('develop', $developEpisodeParams);

    $chitchatParams = array(
        'labels' => array(
            'name' => '잡담',
            'singular_name' => '잡담',
            'add_new' => '잡담 추가',
            'add_new_item' => '신규 잡담 추가',
            'edit_item' => '편집',
            'new_item' => '신규 잡담',
            'all_items' => '전체 잡담',
            'view_item' => '잡담 보기',
            'search_items' => '잡담 찾기',
            'not_found' => '찾을 수 없습니다',
            'not_found_in_trash' => '휴지통 안에 없습니다',
            'enter_title_here' => '잡담 제목을 입력',
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        "supports" => array("title", "editor", "thumbnail"),
        'menu_position' => 23,
    );
    register_post_type('chitchat', $chitchatParams);
}

function menu_setup()
{
    register_nav_menus(array(
        'global' => 'Global Menu',
    ));
}

add_action('after_setup_theme', 'menu_setup');



/**
 * 각 포트스에 택소노미 추가 (태그)
 */
register_taxonomy(
    'japan-tag',
    'japan',
    array(
        'hierarchical' => false,
        'label' => '일본이야기 태그',
        'singular_label' => '일본이야기 태그',
        'public' => true,
        'query_var' => true,
        'has_archive' => false,
        'rewrite' => true,
        'show_ui' => true,
        'labels' => array(
            'add_new_item' => '일본이야기 태그를 추가',
            'search_items' => '일본이야기 태그를 검색',
        )
    )
);

register_taxonomy(
    'develop-tag',
    'develop',
    array(
        'hierarchical' => false,
        'label' => '개발이야기 태그',
        'singular_label' => '개발이야기 태그',
        'public' => true,
        'query_var' => true,
        'has_archive' => false,
        'rewrite' => true,
        'show_ui' => true,
        'labels' => array(
            'add_new_item' => '개발이야기 태그를 추가',
            'search_items' => '개발이야기 태그를 검색',
        )
    )
);

register_taxonomy(
    'chitchat-tag',
    'chitchat',
    array(
        'hierarchical' => false,
        'label' => '잡담 태그',
        'singular_label' => '잡담 태그',
        'public' => true,
        'query_var' => true,
        'has_archive' => false,
        'rewrite' => true,
        'show_ui' => true,
        'labels' => array(
            'add_new_item' => '잡담 태그를 추가',
            'search_items' => '잡담 태그를 검색',
        )
    )
);

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_Slider',
        'title' => 'Slider',
        'fields' => array(
            array(
                'key' => 'field_image_pc',
                'label' => 'image pc',
                'name' => 'image_pc',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_image_sp',
                'label' => 'image sp',
                'name' => 'image_sp',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'slider',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;




add_filter('get_the_archive_title', 'my_theme_archive_title');
function my_theme_archive_title($title)
{
    if (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
