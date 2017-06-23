<footer id="footer">
    <hr>
    <!-- BEGIN .wrapper -->
    <div class="wrapper">
        <div class="footer-widgets lets-do-4">
            <div class="widget-split item">
                <div class="widget-1 first widget widget_orange_themes_about">
                    <div>
                        <p><img src="http://vietincome.com/wp-content/uploads/2016/09/ffa09de8054312-300x95-1.png" alt=""></p>
                        <p>Chào các bạn đến với website vietincome.com là Blog Chuyên về Đầu tư tài chính - Kiếm tiền Online</p>
                    </div>
                </div>
            </div>

            <div class="widget-split item">

                <div class="widget-1 first widget widget_orange_themes_cat_posts">
                    <h3>Latests News</h3>
                    <div class="widget-content ot-w-article-list">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2 ,
                        );
                        $footer_post= new WP_Query( $args );
                        while($footer_post->have_posts()):
                            $footer_post->the_post(); ?>
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
                                    <h4>
                                        <a href="<?php the_permalink();?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
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

            <div class="widget-split item">
                <div class="widget-1 first widget widget_orange_themes_cat_posts">	<h3>Tin Tức</h3>
                    <div class="widget-content ot-w-article-list">

                        <?php
                        $args = array(
                            'post_type' => 'page',
                            'posts_per_page' => 2 ,
                        );
                        $footer_post= new WP_Query( $args );
                        while($footer_post->have_posts()):
                            $footer_post->the_post(); ?>
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
                                    <h4>
                                        <a href="<?php the_permalink();?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
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
            <div class="widget-split item">
                <div class="widget-1 first widget widget_text"><h3>Connect Vietincome</h3>			<div class="textwidget"><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/XBwzv5Yrm_1.js?version=42#channel=f12d85ce478707&amp;origin=http%3A%2F%2Fvietincome.com" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/XBwzv5Yrm_1.js?version=42#channel=f12d85ce478707&amp;origin=http%3A%2F%2Fvietincome.com" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
                        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/vietincome/" data-width="300" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1326667014025678&amp;container_width=252&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fvietincome%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=300"><span style="vertical-align: bottom; width: 252px; height: 230px;"><iframe name="f21793944135d7" width="300px" height="250px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.7/plugins/page.php?adapt_container_width=true&amp;app_id=1326667014025678&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df3aefc04bbf71a%26domain%3Dvietincome.com%26origin%3Dhttp%253A%252F%252Fvietincome.com%252Ff12d85ce478707%26relation%3Dparent.parent&amp;container_width=252&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fvietincome%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=300" style="border: none; visibility: visible; width: 252px; height: 230px;" class=""></iframe></span></div></div>
                </div>							</div>

        </div>
    </div>

    <div class="footer-copyright">
        <p>© 2015 - 2017 Copyright <b>Vietincome.com</b>. All Rights reserved.<br>Designed by <strong><a href="http://vietincome.com" target="_blank">Vietincome.com</a></strong>

        </p>
    </div>



    <!-- END #footer -->
</footer>