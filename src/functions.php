<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');


/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}

/**
 * タイトルタグのテキストを変更する
 */
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title)
{
    if (is_home()) {
        unset($title['tagline']); // タグラインを削除
        $title['title'] = 'まとめブログ開発中'; //テキストを変更
    }
    return $title;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');


function twpp_change_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'twpp_change_excerpt_length', 999);

/**
 * ウィジェットエリア機能
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'sidebar',
        'description' => 'サイドバーウィジェット',
        'before_widget' => '<section class="sidebar-content">',
        'after_widget' => '</section>',
    ));
    register_sidebar(array(
        'name' => 'ピックアップエリア',
        'id' => 'pickup',
        'description' => 'ピツクアップウィジェット',
        'before_widget' => '<div class="pickup">',
        'after_widget' => '</div>',
    ));
}

/**
 * コメントの項目を変更する
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields($args)
{
    $args['author'] = ''; // 「名前」を削除
    $args['email'] = ''; // 「メールアドレス」を削除
    $args['url'] = ''; // 「サイト」を削除
    return $args;
}
