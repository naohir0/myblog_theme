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
  <?php the_field('date1')?>
  <?php if(get_field('date2')): ?>
    <span> 〜 </span>
    <?php the_field('date2') ?>
  <?php endif; ?>
  </div>
  <div class="bl_singlePost_thumbnail">
  <span class="bl_singlePost_thumbnail_large">
  <?php 
   $args = array(640);
   if(has_post_thumbnail()){
    the_post_thumbnail($args);
  } ?>
  </span>
  <span class="bl_singlePost_thumbnail_mediam">
  <?php 
   $args = array(460);
   if(has_post_thumbnail()){
    the_post_thumbnail($args);
  } ?>
  </span>
  <?php 
   if(has_post_thumbnail()){
   $thumbnail_id = get_post_thumbnail_id();
   }
   $thumbnail_src_s = wp_get_attachment_image_src($thumbnail_id,'medium');
  ?>
  <img src="<?php echo $thumbnail_src_s[0]?>" class="bl_singlePost_thumbnail_small">
  </div>
  <div class="bl_singlePost_cont"><?php the_content();?></div>
  <br>
  <?php if(get_field('sub-title11')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title11') ?></div>
  <?php endif; ?>
  <?php if(get_field('image11')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image11') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text11')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text11') ?></div>
  <?php endif; ?>
  </span>
  <br>
  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title12')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title12') ?></div>
  <?php endif; ?>
  <?php if(get_field('image12')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image12') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text12')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text12') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title13')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title13') ?></div>
  <?php endif; ?>
  <?php if(get_field('image13')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image13') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text13')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text13') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title14')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title14') ?></div>
  <?php endif; ?>
  <?php if(get_field('image14')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image14') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text14')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text14') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title15')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title15') ?></div>
  <?php endif; ?>
  <?php if(get_field('image15')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image15') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text15')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text15') ?></div>
  <?php endif; ?>
  </span>
  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title1')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title1') ?></div>
  <?php endif; ?>
  <?php if(get_field('image1')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image1') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text1')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text1') ?></div>
  <?php endif; ?>
  </span>
  
  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title2')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title2') ?></div>
  <?php endif; ?>
  <?php if(get_field('image2')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image2') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text2')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text2') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title3')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title3') ?></div>
  <?php endif; ?>
  <?php if(get_field('image3')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image3') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text3')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text3') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title4')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title4') ?></div>
  <?php endif; ?>
  <?php if(get_field('image4')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image4') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text4')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text4') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title5')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title5') ?></div>
  <?php endif; ?>
  <?php if(get_field('image5')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image5') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text5')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text5') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title6')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title6') ?></div>
  <?php endif; ?>
  <?php if(get_field('image6')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image6') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text6')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text6') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title7')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title7') ?></div>
  <?php endif; ?>
  <?php if(get_field('image7')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image7') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text7')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text7') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title8')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title8') ?></div>
  <?php endif; ?>
  <?php if(get_field('image8')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image8') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text8')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text8') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title9')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title9') ?></div>
  <?php endif; ?>
  <?php if(get_field('image9')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image9') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text9')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text9') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title10')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title10') ?></div>
  <?php endif; ?>
  <?php if(get_field('image10')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image10') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text10')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text10') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title16')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title16') ?></div>
  <?php endif; ?>
  <?php if(get_field('image16')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image16') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text16')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text16') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title17')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title17') ?></div>
  <?php endif; ?>
  <?php if(get_field('image17')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image17') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text17')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text17') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title18')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title18') ?></div>
  <?php endif; ?>
  <?php if(get_field('image18')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image18') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text18')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text18') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title19')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title19') ?></div>
  <?php endif; ?>
  <?php if(get_field('image19')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image19') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text19')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text19') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title20')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title20') ?></div>
  <?php endif; ?>
  <?php if(get_field('image20')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image20') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text20')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text20') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title21')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title21') ?></div>
  <?php endif; ?>
  <?php if(get_field('image21')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image21') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text21')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text21') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title22')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title22') ?></div>
  <?php endif; ?>
  <?php if(get_field('image22')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image22') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text22')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text22') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title23')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title23') ?></div>
  <?php endif; ?>
  <?php if(get_field('image23')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image23') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text23')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text23') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title24')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title24') ?></div>
  <?php endif; ?>
  <?php if(get_field('image24')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image24') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text24')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text24') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title25')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title25') ?></div>
  <?php endif; ?>
  <?php if(get_field('image25')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image25') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text25')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text25') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title26')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title26') ?></div>
  <?php endif; ?>
  <?php if(get_field('image26')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image26') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text26')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text26') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title27')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title27') ?></div>
  <?php endif; ?>
  <?php if(get_field('image27')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image27') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text27')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text27') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title28')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title28') ?></div>
  <?php endif; ?>
  <?php if(get_field('image28')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image28') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text28')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text28') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title29')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title29') ?></div>
  <?php endif; ?>
  <?php if(get_field('image29')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image29') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text29')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text29') ?></div>
  <?php endif; ?>
  </span>

  <span class="ly_singlePosts_mainCont">
  <?php if(get_field('sub-title30')): ?>
    <div class="bl_singlePost_subTitle"><?php the_field('sub-title30') ?></div>
  <?php endif; ?>
  <?php if(get_field('image30')): ?>
    <div class="bl_singlePost_image"><img src="<?php the_field('image30') ?>" class="bl_singlePost_image_src"></div>
  <?php endif; ?>
  <?php if(get_field('sub-text30')): ?>
    <div class="bl_singlePost_cont"><?php the_field('sub-text30') ?></div>
  <?php endif; ?>
  </span>

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