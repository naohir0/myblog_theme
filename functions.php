<?php

function my_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'javascript',get_template_directory_uri().'/js/script.js',array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_theme_support( 'post-thumbnails' );

function new_excerpt_more($post){
  return ' <a href="'. esc_url(get_permalink()) . '">' .'<br>'. '…続きを読む' . '</a>';  
}
add_filter('excerpt_more','new_excerpt_more');

function foo_pop($trail)
{
  {
    array_shift($trail->trail);
  }
}
add_action('bcn_after_fill', 'foo_pop');


if ( function_exists( 'register_sidebar' ) ) {
register_sidebar( array(
'name' => 'naohir0',
'id' => 'widget_area01',
'before_widget' => '<div class=”widget”>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
) );
} 


// パンくずリスト
function breadcrumb() {
  $home = '<span><a href="'.get_bloginfo('url').'" >HOME</a></span>';

  echo '<ul>';
  if ( is_front_page() ) {
      // トップページの場合
  }
  else if ( is_category() ) {
      // カテゴリページの場合
      $cat = get_queried_object();
      $cat_id = $cat->parent;
      $cat_list = array();
      while ($cat_id != 0){
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<span><a href="'.$cat_link.'">'.$cat->name.'</a></span>' );
          $cat_id = $cat->parent;
      }
      echo $home;
      foreach($cat_list as $value){
          echo $value;
      }
      the_archive_title(' &gt; <span>', '</span>');
  }
  else if ( is_archive() ) {
  // 月別アーカイブ・タグページの場合
  echo $home;
  the_archive_title(' &gt; <span>', '</span>');
  }
  else if ( is_single() ) {
  // 投稿ページの場合
  $cat = get_the_category();
      if( isset($cat[0]->cat_ID) ) $cat_id = $cat[0]->cat_ID;
      $cat_list = array();
      while ($cat_id != 0){
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<span><a href="'.$cat_link.'">'.$cat->name.'</a></span>' );
          $cat_id = $cat->parent;
      }
      echo $home;
      foreach($cat_list as $value){
          echo $value;
      }
      if(get_post_type_object(get_post_type())->label){
        echo ' > ';
      }
      $homeUrl =  home_url();
      $typeSlag = get_post_type_object(get_post_type())->name;
      $labelUrl =  $homeUrl."/".$typeSlag;
      echo '<a href="'.$labelUrl.'">'.esc_html(get_post_type_object(get_post_type())->label)."</a>";
      the_title(' &gt; <span>', '</span>');
  }
  else if( is_page() ) {
  // 固定ページの場合
  echo $home;
  the_title(' &gt; <span>', '</span>');
  }
  else if( is_search() ) {
  // 検索ページの場合
  echo $home;
  echo ' &gt; <span>「'.get_search_query().'」の検索結果</span>';
  }
  else if( is_404() ) {
  // 404ページの場合
  echo $home;
  echo ' &gt; <span>ページが見つかりません</span>';
  }
  echo "</ul>";
}

// アーカイブの余計なタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
  if ( is_category() ) {
      $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
  } elseif ( is_month() ) {
      $title = single_month_title( '', false );
  }
  return $title;
});

add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
} elseif (is_tax()) {
    $title = single_term_title('',false);
} elseif (is_post_type_archive() ){
  $title = post_type_archive_title('',false);
} elseif (is_date()) {
    $title = get_the_time('Y年n月');
}  else {

}
  return $title;
});

// 現在のURLを取得する関数
function get_current_link() {
  return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
 }

?>
