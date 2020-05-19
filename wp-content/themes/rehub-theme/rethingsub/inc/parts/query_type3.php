<?php 
global $post;
if (rehub_option('aff_link_image') == '1') {
    $link = rehub_create_affiliate_link ();
    $target = ' rel="nofollow sponsored" target="_blank"';
}
else {
    $link = get_the_permalink();
    $target = '';  
}
if (rehub_option('aff_link_title') == '1') {
    $linktitle = rehub_create_affiliate_link ();
    $targettitle = ' rel="nofollow sponsored" target="_blank"';
}
else {
    $linktitle = get_the_permalink();
    $targettitle = '';  
}
?>  
<article class="rething_item small_post col_item inf_scr_item<?php if (rehub_option('disable_resizer_grid') == 1){echo ' no_crop_grid';};?>">
        <figure><?php echo re_badge_create('tablelabel'); ?>
            <?php if(rehub_option('repick_social_disable') !='1') :?> <?php echo rehub_social_inimage(''); ?> <?php endif;?>
            <div class="thing-post-like"> 
                <?php $wishlistadd = __('Save', 'rehubchild');?>           
                <?php $wishlistadded = __('Saved', 'rehubchild');?>
                <?php $wishlistremoved = __('Removed', 'rehubchild');?>
                <?php echo RH_get_wishlist($post->ID, $wishlistadd, $wishlistadded, $wishlistremoved);?>
            </div>            
            <a href="<?php echo ''.$link;?>"<?php echo ''.$target;?>>
                <?php 
                    WPSM_image_resizer::show_static_resized_image(array('thumb'=> true, 'width'=> 381, 'height'=> 255, 'crop'=> true, 'no_thumb_url'=> get_template_directory_uri() . '/images/default/noimage_378_310.png'));
                ?>
            </a>
        </figure>                                     
    <div class="wrap_thing">
        <div class="top">
            <?php $category = get_the_category(get_the_ID());  ?>
            <?php if ($category) {$first_cat = $category[0]->term_id; meta_small( false, $first_cat, false, false );} ?>
        </div>
        <div class="hover_anons">
            <h2><a href="<?php echo ''.$linktitle;?>"<?php echo ''.$targettitle;?>><?php the_title();?></a></h2>
            <div class="post-meta"> <?php meta_small( true, false, true, false ); ?> </div>
            <div class="mb10"><?php rehub_format_score('small') ?></div>
            <p><?php kama_excerpt('maxchar=320'); ?></p>
        </div>
        <?php if(rehub_option('disable_btn_offer_loop')!='1')  : ?>  
            <div class="rething_button">                              
            <?php rehub_generate_offerbtn('wrapperclass=block_btnblock mobile_block_btnclock&btn_more=yes');?>
            </div>
        <?php endif; ?>
    </div>
</article>