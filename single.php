<?php
get_header();
if (have_posts()) {
    the_post();
}
?>
<!-- Home -->

<div class="home">
    <div class="home_slider_container">
        <div class="home_slider_background" style="background-image:url(<?php bloginfo('template_directory')?>/images/railway.png)"></div>
    </div>
    <div class="header-red-section  col-sm-12">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <span class="archive-page-title">صفحه جزئیات</span>
            <span class="route-span"><a href="#">خانه . بررسی سفارشات</a></span>
        </div>
    </div>
</div>
<!-- Post Details -->

<div class="post_detail py-4">
    <div class="container">
        <div class="row">

            <div class="col-sm-1">
                <div class="author-image">

                </div>
            </div>

            <div class="author col-sm-2">
                <span class="d-block">نوشته شده </span>
                <span class="d-block author-name">امیرمحمد حقیقت</span>
            </div>

            <div class="category col-sm-2">
                <span class="d-block">موضوعات</span>
                <span class="d-block category-name">وب و تجارت</span>
            </div>

            <div class="detail-date-section col-sm-2">
                <span class="d-block">تاریخ</span>
                <span class="d-block detail-date">۲۵ شهریور ۱۳۹۷</span>
            </div>

            <div class="comments col-sm-2">
                <span class="d-block">نظرات</span>
                <span class="d-block number-of-comments">
                    ۲۵
                    <div hidden>
                        <svg version="1.1" id="comment-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 30.333 30.333" style="enable-background:new 0 0 30.333 30.333;"
                            xml:space="preserve">
                            <g>
                                <path style="fill:#010002;" d="M0,26.75V11.908c0-4.59,3.735-8.325,8.325-8.325h13.681c4.591,0,8.327,3.735,8.327,8.325v2.56
		c0,4.59-3.735,8.325-8.325,8.325H8.518L0,26.75z M8.325,5.439c-3.567,0-6.469,2.902-6.469,6.469v11.933l6.253-2.905h13.899
		c3.567,0,6.469-2.902,6.469-6.469v-2.56c0-3.567-2.903-6.469-6.471-6.469H8.325V5.439z M8.937,11.767
		c0.975,0,1.765,0.79,1.765,1.765s-0.79,1.765-1.765,1.765s-1.765-0.79-1.765-1.765S7.962,11.767,8.937,11.767z M21.395,11.767
		c0.975,0,1.765,0.79,1.765,1.765s-0.79,1.765-1.765,1.765s-1.765-0.79-1.765-1.765S20.42,11.767,21.395,11.767z M15.165,11.767
		c0.975,0,1.765,0.79,1.765,1.765s-0.79,1.765-1.765,1.765s-1.765-0.79-1.765-1.765S14.19,11.767,15.165,11.767z" />
                            </g>

                        </svg>
                    </div>
                    <svg class="comment-icon">
                        <use xlink:href="#comment-icon" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Slider -->

<div class="slider-container">
    <div class="slide-image-container">
        <div hidden>
            <svg version="1.1" id="right_straight_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 199.405 199.405" style="enable-background:new 0 0 199.405 199.405;"
                xml:space="preserve">
                <g>
                    <polygon points="99.703,199.405 199.405,99.702 99.703,0 71.418,28.285 124.662,81.529 0,81.529 0,117.876 124.662,117.876 
		71.418,171.12 	" />
                </g>

            </svg>
        </div>
        <svg class="right_straight_arrow">
            <use xlink:href="#right_straight_arrow" />
        </svg>

        <div hidden>
            <svg version="1.1" id="left_straight_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;"
                xml:space="preserve">
                <g>
                    <polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876 
		199.404,117.876 	" />
                </g>

            </svg>
        </div>
        <svg class="left_straight_arrow">
            <use xlink:href="#left_straight_arrow" />
        </svg>
    </div>


    <div class="slide-circles d-flex justify-content-center py-5">
        <div class="d-flex align-items-center">
            <div class="blog-slide1 mx-1"></div>
            <div class="blog-slide2 mx-1"></div>
            <div class="blog-slide3 mx-1"></div>
            <div class="blog-slide4 mx-1"></div>
            <div class="blog-slide3 mx-1"></div>
            <div class="blog-slide2 mx-1"></div>
            <div class="blog-slide1 mx-1"></div>
        </div>
    </div>

</div>

<!-- Page Content -->

<div class="page_content" id="page_content">
    <div class="container">
        <div class="row ">

            <!-- Post Content -->

            <div class="col-lg-9">

                <!-- Post Body -->

                <div class="post_body">
                    <div class="post_content">
                        <?php the_content();?>
                    </div>
                    <div class="post_quote_source">
                        <?php the_author_posts_link()?>
                    </div>

                    <!-- Post Tags and Share-->
                    <div class="tags_share d-flex flex-column align-items-center">
                        <div class="post_tags">
                            <ul>
                                <?php if (get_the_tags()[0]): ?>
                                <?php foreach (get_the_tags() as $tag): ?>
                                <li class="post_tag">
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>">
                                        <?php echo $tag->name ?>
                                    </a>
                                </li>
                                <?php endforeach;?>
                                <?php endif?>
                            </ul>
                        </div>
                        <div class="post_share my-3">
                            <span>اشتراک گذاری:</span>
                            <ul class="post_share_list">
                                <a target="_blank" href="http://twitter.com/share?text=<?php echo the_title(); ?>&url=<?php the_permalink();?>">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary=<?php the_title();?>&source=veresk.org"><i
                                        class="fa fa-linkedin"></i></a>
                                <!-- <a target="_blank" href="https://www.instagram.com/veresk_org"><i class="fa fa-instagram"></i></a> -->
                                <a target="_blank" href="https://t.me/share/url?url=<?php the_permalink();?>"><i class="fa fa-telegram"></i></a>
                            </ul>
                        </div>
                    </div>
                    <div class="track_your_wagon my-4 mt-5 p-5 row mx-0 align-items-center">
                        <h4>
                            مایل به ردیابی واگن یا بار خود هستید؟
                        </h4>
                        <a href="https://panel.veresk.org/dashboard/track-list?guest=true&lang=fa">
                            <button>
                                ردیابی کنید
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 side_bar_single">
                <div class="post_body d-flex flex-column align-items-center justify-content-between px-3">
                    <div class="side_bar_categories d-flex flex-column align-items-center">
                        دسته بندی ها:
                        <div class="section_tags">
                            <ul class="d-flex flex-column">
                                <?php foreach (get_categories(array('orderby' => 'name', 'order' => 'ASC')) as $cat): ?>
                                <li class="my-2 <?php if(is_category() && get_queried_object()->term_id == $cat->term_id) echo 'active'?>">
                                    <a href="<?php echo get_category_link($cat->term_id); ?>">
                                        <?php echo $cat->cat_name; ?>
                                    </a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>

                    </div>
                    <div class="post_tags d-flex flex-wrap align-items-center justify-content-center p-4">
                        <span class="mb-3">برچسب ها:</span>
                        <ul>
                            <?php if (get_the_tags()[0]): ?>
                            <?php foreach (get_the_tags() as $tag): ?>
                            <li class="post_tag">
                                <a href="<?php echo get_tag_link($tag->term_id); ?>">
                                    <span>
                                        <?php echo $tag->name ?>
                                    </span>
                                </a>
                            </li>
                            <?php endforeach;?>
                            <?php endif?>
                        </ul>
                    </div>
                    <div class="social_media d-flex flex-column align-items-center py-3">
                        ما را در شبکه های اجتماعی دنبال کنید:
                        <ul class="my-4">
                            <a target="_blank" href="http://twitter.com/share?text=<?php echo the_title(); ?>&url=<?php the_permalink();?>">
                                <i class="fa fa-twitter fa-2x"></i>
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary=<?php the_title();?>&source=veresk.org"><i
                                    class="fa fa-linkedin fa-2x mx-1"></i></a>
                            <a target="_blank" href="https://www.instagram.com/veresk_org"><i class="fa fa-instagram fa-2x mx-1"></i></a>
                            <a target="_blank" href="https://t.me/share/url?url=<?php the_permalink();?>"><i class="fa fa-telegram fa-2x"></i></a>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<?php get_footer();?>