<?php
// カスタム投稿タイプ生成
add_action(
    'init', 'test'
);


    function test() {
        register_post_type(
            'product',
            [
                'labels' => [
                    'name' => 'お弁当',
                    'singular_name' => 'PRODUCT',
                ],
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 5,
                'supports' => [
                    'title',
                    'editor',
                    'thumbnail',
                ],
            ],
        );
    }