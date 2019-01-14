<?php get_header()?>
<div class="home">
    <div class="home_slider_container">
        <div class="home_slider_background" style="background-image:url(<?php bloginfo('template_directory')?>/images/railway-bg.jpg)"></div>
        <div class="post_title">بلاگ ورسک</div>
    </div>
    <div class="angle-down justify-content-center d-flex col-sm-12">
        <a href="#page_content"><i class="fa fa-angle-down fa-5x"></i></a>
    </div>
</div>

<div class="page_content row my-5 mx-0" id="page_content">
    <div class="container">
        <div class="section_panel px-3 d-flex flex-row align-items-center justify-content-between">
            <div class="section_title">دسته بندی‌ها:</div>
            <div class="section_tags">
                <ul>
                    <?php foreach (get_categories(array('orderby' => 'name', 'order' => 'ASC')) as $cat): ?>
                    <li class="<?php if(is_category() && get_queried_object()->term_id == $cat->term_id) echo 'active'?>">
                        <a href="<?php echo get_category_link($cat->term_id); ?>">
                            <?php echo $cat->cat_name; ?>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>

        </div>
    </div>


    <?php if (have_posts()): ?>
    <div class="container d-flex flex-wrap my-4">
        <?php while (have_posts()): the_post();?>
        <div class="col-lg-4">

            <div class="card p-2">
                <?php foreach (get_the_category() as $cat): ?>
                <a class="badge-a-tag" href="<?php echo get_category_link($cat->term_id); ?>">
                    <span class="badge badge-primary mx-1">
                        <?php echo $cat->cat_name; ?>
                    </span>
                </a>
                <?php endforeach;?>
                <a href="<?php the_permalink();?>">
                <?php if (has_post_thumbnail()): ?>
                    <img class="card-img-top" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src='<?php echo get_the_post_thumbnail_url(); ?>'>
                <?php endif;?>
                <?php if (!has_post_thumbnail()): ?>
                <img class="card-img-top" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src='<?php bloginfo('template_directory'); ?>/images/railway-bg.jpg'>
                <?php endif;?>
                </a>
               
                <div class="card-body">
                    <a href="<?php the_permalink();?>">
                        <p class="mb-3">
                            <b class="bold-tag">
                                <?php the_title();?>
                            </b>
                        </p>
                    </a>
                    <p>
                        <?php the_excerpt();?>
                    </p>
                    <small class="post_meta">
                        <?php the_author_posts_link() ?>
                        <span>
                            <?php echo get_the_date('Y-m-d'), "  در ", the_time() ?>
                        </span>
                    </small>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </div>
    <?php endif;?>
</div>
<?php get_footer()?>