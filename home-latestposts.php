<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <?php get_template_part('home','latestpage'); ?>
            <div class="composs-panel">
                <div class="composs-panel-title">
                    <strong>Latest News</strong>
                </div>
                <div class="composs-panel-inner">
                    <div class="composs-blog-list lets-do-1">
                        <?php
                        $paged = ( get_query_var('page') ) ? intval(get_query_var('page')) : 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 7,
                            'paged' => $paged
                        );
                        $post_type_data = new WP_Query( $args );
                        while($post_type_data->have_posts()):
                            $post_type_data->the_post(); ?>

                            <div class=" post type-post status-publish format-standard has-post-thumbnail hentry category-cryp-trade category-trusted-projects tag-cryp-trade item">
                                <div class="item-header">
                    <span class="ot-read-later" data-post="">
                <a href="#" class="img-read-later-button ot-add-read-later " >
                    Read later                </a>
                <a href="#" class="img-read-later-button ot-remove-read-later " data-ot-css="display:none;" style="display:none;">
                    Remove                </a>
            			</span>
                                    <a href="<?php the_permalink();  ?>">
                                        <?php $img = array('class' => 'enigma_img_responsive');
                                        if(has_post_thumbnail()):
                                            the_post_thumbnail('home_post_thumb',$img);
                                        endif; ?>
                                        <!--						<img width="250" height="175" src="http://vietincome.com/wp-content/uploads/2017/06/1ccdef94777d8e4-250x175_c.jpg" alt="Báo cáo kết quả Trading của Cryp Trade từ 01.06.2017 đến 15.06.2017 LN đạt 41.35%" srcset="http://vietincome.com/wp-content/uploads/2017/06/1ccdef94777d8e4-500x350_c.jpg" data-ot-retina="http://vietincome.com/wp-content/uploads/2017/06/1ccdef94777d8e4-500x350_c.jpg">-->

                                    </a>
                                </div>
                                <div class="item-content">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <span class="item-meta">
									<span class="item-meta-item"><i class="fa-clock-o fa"></i>
                                        <?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
                                            <?php echo get_the_date('F d ,Y'); ?>
                                        <?php else : ?>
                                            <?php echo get_the_date(); ?>
                                        <?php endif; ?>
									</span>
									<a href="<?php the_permalink(); ?>" class="item-meta-item">
										<i class="fa-commenting-o fa"></i>
                                        <?php comments_popup_link( '0', '1', '%', '', '-'); ?>

									</a>
								</span>
                                    <?php the_excerpt( __( 'Read More' , 'enigma' ) ); ?>
                                </div>
                            </div>
                        <?php  endwhile;
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
                <!-- BEGIN .composs-panel-pager -->
                <div class="composs-panel-pager">
                    <div class="composs-panel-pager">
                        <a class="prev page-numbers" href="?page=0">
                            <i class="fa fa-angle-double-left"></i> Đầu
                        </a>
                        <?php
                        $max = min($paged+2,$post_type_data->max_num_pages);
                        $min = max($paged-2,1);
                        for($i=$min;$i<= $max;$i++ ){
                            if ($i == $paged){
                            ?>
                            <span class="page-numbers current"><?php echo $i ?></span>
                            <?php } else {?>
                                <a class="page-numbers" href="?page=<?php echo $i ?>"><?php echo $i ?></a>
                        <?php }} ?>

                        <a class="next page-numbers" href="?page=<?php echo $post_type_data->max_num_pages?>">
                            Cuối <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">


            <?php get_template_part('home','sidebar'); ?>
        </div>
    </div>
</div>