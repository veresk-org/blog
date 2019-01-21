<?php
get_header();
if (have_posts()) {
    the_post();
}
?>
<!-- Home -->

<div class="home">
    <div class="home_slider_container">
        <div class="home_slider_background" style="background-image:url(<?php bloginfo('template_directory')?>/images/railway-bg.jpg)"></div>
        <div class="home_content">
            <?php foreach (get_the_category() as $cat): ?>
            <div class="post_category trans_200 px-3">
                <a class="trans_200" href="<?php echo get_category_link($cat->term_id); ?>">
                    <?php echo $cat->cat_name; ?>
                </a>
            </div>
            <?php endforeach;?>

            <div class="post_title_single">
                <?php the_title()?>
            </div>
            <div class="post_author d-flex flex-row align-items-center justify-content-center">
                <div class="post_meta">
                    <?php the_author_posts_link()?>
                    <span>
                        <?php echo get_the_date('Y-m-d'), " at ", the_time() ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="angle-down justify-content-center d-flex col-sm-12">
        <a href="#page_content"><i class="fa fa-angle-down fa-5x"></i></a>
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
                    <div class="tags_share d-flex flex-row align-items-center justify-content-between">
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
                        <div class="post_share">
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
                    <div class="post_tags d-flex flex-wrap align-items-center justify-content-center px-3">
                        <span class="mb-3">برچسب ها:</span>
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