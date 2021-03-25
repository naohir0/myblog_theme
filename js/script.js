jQuery(function(){
  jQuery('.el_open_btn').on('click',()=>{
    jQuery('.el_open_btn').css('display','none');
    jQuery('.el_close_btn').css('display','inline-block');
    jQuery('#trans_body').css( { 'transform': 'translate3d(-370px,0px,0px)' } );
    jQuery('.main-navigation_list__side').removeClass("main-navigation_list__hidden");
  });
  jQuery('.el_close_btn').on('click',()=>{
    jQuery('.el_close_btn').css('display','none');
    jQuery('.el_open_btn').css('display','inline-block');
    jQuery('#trans_body').css( { 'transform': 'translate3d(0px,0px,0px)' } );
    jQuery('.main-navigation_list__side').addClass("main-navigation_list__hidden");
  });
  jQuery('.main-navigation_list_closeTitle__side').on('click',()=>{
    jQuery('#trans_body').css( { 'transform': 'translate3d(0px,0px,0px)' } );
    jQuery('.el_close_btn').css('display','none');
    jQuery('.el_open_btn').css('display','inline-block');
    jQuery('.main-navigation_list__side').addClass("main-navigation_list__hidden");
  })
})