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

class My_Widget extends WP_Widget
{

    /**
     * ウィジェット名などを設定
     */
    public function __construct()
    {
        // widget actual processes
    }

    /**
     * ウィジェットの内容を出力
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
    }

    /**
     * 管理用のオプションのフォームを出力
     *
     * @param array $instance ウィジェットオプション
     */
    public function form($instance)
    {
        // 管理用のオプションのフォームを出力
    }

    /**
     * ウィジェットオプションの保存処理
     */
    public function update($new_instance, $old_instance)
    {
        // ウィジェットオプションの保存処理
    }
}
