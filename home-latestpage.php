<?php
$args = array(
    'post_type' => 'page',
    'posts_per_page' => 5 ,
    'ignore_sticky_posts' => 1,
    'paged' => $paged
);
$page_query = new WP_Query( $args );
$i=0;
?>
<div class="composs-panel">
    <div class="composs-panel-title composs-panel-title-tabbed">
        <strong class="active">Bài viết nổi bật</strong>
    </div>
    <div class="composs-panel-inner">
        <div class="composs-panel-tab active">
            <div class="composs-article-split-block">
                <div class="item-large">
                    <?php while ( $page_query->have_posts() ) :
                    $page_query->the_post();
                    if($i == 1){ ?>
                </div>
                <div class="item-small">
                    <?php }
                    $i++;
                    ?>
                    <div class="item">
                        <div class="item-header">
                            <span class="ot-read-later">
                                <a href="#" class="img-read-later-button ot-add-read-later ">
                                    Read later
                                </a>
                                <a href="#" class="img-read-later-button ot-remove-read-later " data-ot-css="display:none;" data-post="2431" style="display:none;">
                                    Remove
                                </a>
                            </span>
                            <a href="<?php the_permalink();  ?>">
                                <?php
                                if(has_post_thumbnail()):
                                    the_post_thumbnail();
                                endif; ?>
<!--                                <img width="375" height="262" src="" alt="Unity-reserve lãi dao động 1-5% ngày ROI 160% thanh toán tức thì" srcset="http://vietincome.com/wp-content/uploads/2017/04/u6-750x524_c.png" data-ot-retina="http://vietincome.com/wp-content/uploads/2017/04/u6-750x524_c.png">-->
                            </a>
                        </div>
                        <div class="item-content">
                            <h2>
                                <a href="<?php the_permalink();?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <span class="item-meta">
                                <span class="item-meta-item">
                                    <i class="fa-clock-o fa"></i>
                                    <?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
                                        <?php echo get_the_date('F d ,Y'); ?>
                                    <?php else : ?>
                                        <?php echo get_the_date(); ?>
                                    <?php endif; ?>
                                </span>
                                <a href="<?php the_permalink();  ?>#comments" class="item-meta-item">
                                    <i class="fa-commenting-o fa"></i>
                                    <?php comments_popup_link( '0', '1', '%', '', '-'); ?>
                                </a>
                            </span>
                            <p>
                                <?php echo substr(get_the_excerpt(),0,75).'...'; ?>
                            </p>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>