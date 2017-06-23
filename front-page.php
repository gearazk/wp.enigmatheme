<?php get_header();
$wl_theme_options = weblizar_get_options();
$wl_theme_options['_frontpage'];
if ($wl_theme_options['_frontpage']=="1" && is_front_page())
{

    get_template_part('home','slideshow');
    get_template_part('subheader','menu');
    $frontpage_id = get_option( 'page_on_front' );
    if (isset($frontpage_id))
    {
        ?>
        <div class="container">
            <div class="row enigma_blog_wrapper">
                <div class="col-md-12">
                    <?php get_template_part('post','page'); ?>
                </div>
            </div>
        </div>
        <?php
    }
    get_template_part('home','latestposts');
    get_template_part('home','footer');

//    if($wl_theme_options['show_blog'] == "1") {
//        get_template_part('home','blog');
//    }
//    get_footer();

}
else
{
    if(is_page()){
        get_template_part('page');
    }else{
        get_template_part('index');
    }
}	?>