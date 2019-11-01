<?php
get_header();
if (have_posts()) {
    the_post();
}
?>
<!-- Home -->

<div class="home">
    <div class="home_slider_container">
        <div class="home_slider_background" style="background-image:url(<?php bloginfo('template_directory')?>/images/railway.jpg)"></div>
    </div>
    <div class="header-red-section col-sm-12">
        <div class="container d-flex justify-content-between align-items-center flex-wrap h-100">
            <h1 class="archive-page-title col-md-6 m-0">
                <?php the_title() ?>
            </h1>
            <span class="route-span col-md-6"><a href="<?php echo get_home_url(); ?>"> <?php _e("Home", 'vereskBlog') ?> .
                    <?php the_title() ?></a></span>
        </div>
    </div>
</div>
<!-- Post Details -->
<?php include('inc/post-details.php') ?>



<!-- Page Content -->

<div class="single_page_content pt-md-5" id="page_content">
    <div class="container">
        <div class="row ">

            <!-- Post Content -->

            <!-- Share -->
            <?php include('inc/sidebar.php') ?>

            <div class="col-lg-10">

                <!-- Post Body -->

                <div class="post_body">
                    <div class="post_content">
                        <?php the_content();?>
                    </div>

                    <!-- Post Tags -->
                    <div class="tags_share d-flex flex-column">
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

                    </div>


                    <?php include('inc/services.php'); ?>


                </div>
            </div>

        </div>

    </div>
    <?php comments_template(); ?>

</div>
<?php get_footer();?>