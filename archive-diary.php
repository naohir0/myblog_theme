<?php get_header(); ?>

<main class="ly_top">
  <div class="ly_ArticleLists__outside">
    <h1 class="el_articleListTitle"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon-tag@2x.png" height="30"> 旅行日記 記事一覧 (<?php echo wp_count_posts('diary')->publish;?>)</h1>
    <div class="ly_ArticleLists__inside">
        <?php
         if(have_posts()):
           while(have_posts()):the_post();
        ?>
         <div class="bl_articlelistCont"> 
           <span class="bl_articlelistCont_thumbnail">
             <a href="<?php the_permalink(); ?>" class="bl_topArticles_wholeLink">
              <?php 
               $thumbnailSize = array(360,280);
               if(has_post_thumbnail()){
               the_post_thumbnail($thumbnailSize);
               }
             ?>
            </a>
          </span>
          <br>
          <h3 class="bl_articlelistCont_title"><a href="<?php the_permalink(); ?>" class="bl_topArticles_wholeLink"><?php the_title(); ?></a></h3>
          <div class="bl_articlelistCont_textInfo">
             <img src="<?php echo get_template_directory_uri() ?>/images/icon-date@2x.png" width="15px" height="15px">
             <?php the_field('date1') ?> 
             <?php if(get_field('date2')): ?>
              <span> 〜 </span>
              <?php the_field('date2') ?> 
              <?php endif; ?>
              <div class="bl_articlelistCont_category bl_articlelistCont_textInfo">
               <div class="el_categoryItem">
               <?php 
                 $cat = get_the_terms($post->ID,"common_category");
                  echo $cat[1]->name;
               ?>
               </div>
              </div>
        </div>
    </div>
   <?php
    endwhile;
  else:
   ?>
   <p>現在、投稿された記事はありません</p>
   <?php
     endif;
   ?>
  </div>
  </div>

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

<?php the_posts_pagination()?>

<?php get_footer(); ?> 