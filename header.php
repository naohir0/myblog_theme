<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<title>
<?php wp_title( ' | ', true, 'right' ); ?>
<?php bloginfo( 'name' ); ?>
</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="trans_body">

<header>
<div class="bl_header">
<div class="bl_header_title">
 <a href="<?php echo esc_url(home_url('/')) ?>">
 NOThEMe blOg
  <a>
</div>
<div class="main-navigation">
  <span class="main-navigation_list_humberger el_open_btn main-navigation_list_humberger__nonTop"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-open-button@2x.png" width="50" class="main-navigation_list_humberger_img">OPEN</span>
  <span class="main-navigation_list_humberger el_close_btn main-navigation_list_humberger__nonTop"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-close-button@2x.png" width="50" class="main-navigation_list_humberger_img el_close_btn_img">CLOSE</span>
  <ul class="main-navigation_list__side main-navigation_list__hidden">
    <li class="main-navigation_list_title__side">MENU</li>
    <li class="main-navigation_list_closeTitle__side">✖︎ CLOSE</li>
    <li class="main-navigation_list_item__side"><a href="/report-type/">国内旅行</a></li>
    <li class="main-navigation_list_item__side"><a href="/outer-report-type/">海外旅行</a></li>
    <li class="main-navigation_list_item__side"><a href="/hiking/">アウトドア</a></li>
    <div class="ly_SideList ly_SideList__draw">
     <div class="bl_sidelistCont">
       <div class="bl_sidelistCont_title">サイト内検索</div>
       <?php echo get_search_form(); ?> 
     </div>
     <div class="bl_sidelistCont">
      <div class="bl_sidelistCont_title">プロフィール</div> 
      <div class="el_profile_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/11165.jpg" class=""></div>
        <div class="el_profile_username">naohir0</div>
        <div class="el_profile_description">関西に住む文系大学生<br>趣味でブログをはじめました</div>
        <div class="el_profile_sns el_profile_sns__twitter">twitterをフォロー</div>
     </div>
     <?php
      // 親カテゴリーのものだけを一覧で取得
      $args = array(
        'orderby' => 'meta_value_num', // カスタムフィールド値が数値の場合 meta_value_num を指定
        'posts_per_page' => -1, // すべての投稿を表示
        'meta_query' => array( // カスタムフィールドの指定
          array(
            'key' => 'show-order', // フィールド名の指定
            'type'=>'SIGNED' // カスタムフィールドの値が日付であることを宣言
          )
        )
      );
      $categories = get_terms('common_category',$args);
    ?>
    <div class="bl_sidelistCont">
      <div class="bl_sidelistCont_title">カテゴリー一覧</div>
        <ul>
         <?php foreach( $categories as $category ) : ?>
          <?php if($category->parent):?>
	         <li class="bl_sidelistCont_category bl_sidelistCont_childCategory ">
            <a href="<?php echo get_term_link( $category->term_id ); ?>"><?php echo $category->name; ?> (<?php echo $category->count; ?>)</a>
            <a href="<?php echo get_term_link( $category->term_id ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right@2x.png" class="bl_sidelistCont_childCategory_arrowImg"></a>
           </li>
          <?php else: ?>
           <li class="bl_sidelistCont_category">
            <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?> (<?php echo $category->count; ?>)</a>
            <a href="<?php echo get_category_link( $category->term_id ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right@2x.png"></a>
           </li>
          <?php
            endif;
          ?>
         <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  </ul>
</div>
<span class="under-navigation">
  <ul class="under-navigation_list">
    <li class="under-navigation_list_item"><a href="/report-type/">国内旅行</a><div class="el_underline"></div></li>
    <li class="under-navigation_list_item"><a href="/outer-report-type/">海外旅行</a><div class="el_underline"></div></li>
    <li class="under-navigation_list_item under-navigation_list_item__lastChild"><a href="/hiking/">アウトドア</a><div class="el_underline"></div></li>
  </ul>
<span>
</header>
<div class="bl_jumbotoron">
<div class="ph">
    <div class="ph1"></div>
    <div class="ph2"></div>
    <div class="ph3"></div>
    <div class="ph4"></div>
    <div class="ph5"></div>
    <div class="ph6"></div>
</div>
  <div class="ph7"></div>
  <div class="ph8"></div>

  <div class="ch ch_1"></div>
  <div class="ch ch_2"></div>
  <div class="ch ch_3"></div>
  <div class="ch ch_4"></div>
  <div class="ch ch_5"></div>
  <div class="ch ch_6"></div>
  <div class="ch ch_7"></div>
  <div class="ch_w ch_11"></div>
  <div class="ch_w ch_12"></div>
  <div class="ch_w ch_13"></div>
  <div class="ch_w ch_14"></div>
  <div class="ch_w ch_15"></div>
  <div class="ch_w ch_16"></div>
  <div class="ch_w ch_17"></div>
</div>
<div></div>
<br>
<div class="breadcrumbs"><?php breadcrumb(); ?></div>

