<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
  <title><?php wp_title( '|', true, 'right' ); //ページタイトルを出力 ?><?php bloginfo('name'); //サイト名を表示 ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); //使用中テーマディレクトリのURLを出力 ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートURLを出力 ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); //ピングバックURLを出力 ?>">
  <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>
</head>
<body <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える ?>>
  <header>
    <div class="container">
      <div id="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="とり川">
      </div>
      <div class="navi">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); //トップページのURLを出力 ?>">TOP</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">お弁当一覧</a></li>
          <li><a href="<?php echo esc_url(home_url('/map/')); ?>">ご注文の流れ</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問合せ</a></li>
          <li><a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a></li>
          <li><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
        </ul>
      </div>
    </div>
  </header>
</body>