<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * Post Type
 */
add_action( 'init', function() {
    register_post_type( 'interviews', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'インタビュー', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'inteviews',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => false, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports'            => array(
            'title',        // 編集ページのタイトル
            'editor',       // 編集ページの本文エディタ
            'thumbnail',    // 編集ページのアイキャッチ画像
            'custom-fields',    // 編集ページのカスタムフィルド
        ),

    ]);
});

add_action( 'init', function() {
    register_post_type( 'works', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '施工事例', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'works',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => false, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
        'supports'            => array(
            'title',        // 編集ページのタイトル
            'editor',       // 編集ページの本文エディタ
            'thumbnail',    // 編集ページのアイキャッチ画像
            'custom-fields',    // 編集ページのカスタムフィルド
        ),
    ]);
});