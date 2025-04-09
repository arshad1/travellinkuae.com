<?php
/**
 * Title: Luxury Chauffeur Service Card
 * Slug: travel/luxury-chauffeur-card
 * Categories: call-to-action, banner, services
 * Description: A card featuring luxury chauffeur service with image and text overlay.
 *
 * @package WordPress
 * @subpackage Travel
 * @since Travel 1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|40"}},"border":{"radius":"8px","width":"0px","style":"none"}},"backgroundColor":"background","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default has-background-background-color has-background" style="border-radius:8px;border-style:none;border-width:0px;margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-bottom:0">
    
    <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-in-hat.webp","dimRatio":20,"minHeight":400,"contentPosition":"center center","isDark":false,"style":{"border":{"radius":"8px 8px 0 0"}}} -->
    <div class="wp-block-cover is-light" style="border-radius:8px 8px 0 0;min-height:400px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
        <img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Luxury Chauffeur Service', 'travel' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-in-hat.webp" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
        </div>
    </div>
    <!-- /wp:cover -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"0 0 8px 8px"}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-white-color has-black-background-color has-text-color has-background" style="border-radius:0 0 8px 8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        
        <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"luminous-vivid-amber","fontSize":"large"} -->
        <h3 class="wp-block-heading has-text-align-left has-luminous-vivid-amber-color has-text-color has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Luxury Chauffeur Service', 'travel' ); ?></h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
        <p style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Discover UAE in luxury. Our expert chauffeurs guarantee a seamless experience, from airport transfers to sightseeing or business trips. Sit back, relax, and savor the city while we navigate the roads for you.', 'travel' ); ?></p>
        <!-- /wp:paragraph -->
        
    </div>
    <!-- /wp:group -->
    
</div>
<!-- /wp:group --> 