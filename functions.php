<?php
// ===========================
// CSS読み込み
// ===========================
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'edu-forest-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
});

// ===========================
// テーマ基本設定
// ===========================
add_action('after_setup_theme', function () {
    register_nav_menus([
        'main-menu' => 'メインメニュー'
    ]);
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
});

// ===========================
// プリント（教材）投稿タイプ
// ===========================
add_action('init', function () {
    register_post_type('print', [
        'labels' => [
            'name'          => 'プリント',
            'singular_name' => 'プリント',
            'add_new_item'  => '新しいプリントを追加',
            'edit_item'     => 'プリントを編集',
            'view_item'     => 'プリントを見る',
        ],
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'supports'      => ['title', 'editor', 'thumbnail'],
        'rewrite'       => ['slug' => 'print'],
    ]);
});

// ===========================
// 教科タクソノミー（算数・国語など）
// ===========================
add_action('init', function () {
    register_taxonomy('subject', 'print', [
        'label'        => '教科',
        'hierarchical' => true,
        'public'       => true,
        'rewrite'      => ['slug' => 'subject'],
    ]);
});

// ===========================
// 学年タクソノミー（小1・小2など）
// ===========================
add_action('init', function () {
    register_taxonomy('grade', 'print', [
        'label'        => '学年',
        'hierarchical' => true,
        'public'       => true,
        'rewrite'      => ['slug' => 'grade'],
        'show_ui'      => true,
        'show_in_rest' => true,
    ]);
});

// ===========================
// 単元タクソノミー（足し算 → 一桁 → 繰り上がりなし）
// ===========================
add_action('init', function () {
   register_taxonomy('unit', 'print', [
    'label'        => '単元',
    'hierarchical' => true,
    'public'       => true,
    'rewrite'      => ['slug' => 'unit'],
    'show_ui'      => true,
    'show_in_rest' => true,
    ]);
});

// ===========================
// OGP設定
// ===========================
add_action('wp_head', function () {
    if (!is_singular()) return;

    global $post;

    $og_title = get_the_title($post);
    $og_url   = get_permalink($post);
    $og_desc  = get_the_excerpt($post);

    $og_image = has_post_thumbnail($post)
        ? get_the_post_thumbnail_url($post, 'full')
        : get_template_directory_uri() . '/images/owl-logo-character.png';

    echo "\n";
    echo '<meta property="og:title" content="' . esc_attr($og_title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($og_desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($og_url) . '">' . "\n";
    echo '<meta property="og:type" content="article">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($og_image) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
});