<?php get_header(); ?>

<main class="ly_single">
  <article class="ly_singlePosts">
  <?php
    if(have_posts()):
      while(have_posts()):the_post();
  ?>
  <div class="bl_singlePost_title">
  <?php the_title(); ?><br>
  </div>
  <div class="bl_singlePost_date">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-date@2x.png" width="15px" height="15px">
  <?php the_time('Y年n月j日')?>
  </div>
  <div class="bl_singlePost_thumbnail">
  <?php 
   $args = array(400);
   if(has_post_thumbnail()){
    the_post_thumbnail($args);
  } ?>
  </div>
  <br>
  <?php the_content();?>
  <h3 class="bl_singlePost_subTitle">
  <?php 
   if(get_field('sub-title')){
     the_field('sub-title');
   }
   ?>
   </h3>
   <?php
   the_content();
   ?>
  <h3 class="bl_singlePost_subTitle">
  <?php 
   if(get_field('sub-title2')){
     the_field('sub-title2');
   }
  ?>
  </h3>
  <?php the_content();?>
  <h3 class="bl_singlePost_subTitle">
  <?php 
   if(get_field('sub-title3')){
     the_field('sub-title3');
   }
  ?>
  </h3>
  <?php
   the_content();
  ?>
  <h3 class="bl_singlePost_subTitle">
  <?php 
   if(get_field('sub-title4')){
     the_field('sub-title4');
   }
  ?>
  </h3>
  <?php
   the_content();
  ?>
  <?php 
   endwhile;
  endif;
  ?>
  </article>
  <div class="ly_SideList ly_SideList__main">
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
</main>


<?php get_footer(); ?>