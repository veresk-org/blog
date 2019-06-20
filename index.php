<?php get_header()?>
<div class="home">
    <div class="home_slider_container">
        <div class="home_slider_background"
            style="background-image:url(<?php bloginfo('template_directory')?>/images/railway.jpg)"></div>
    </div>
    <div class="header-red-section col-sm-12">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <span class="archive-page-title">اخبار و اطلاعات</span>
            <span class="route-span"><a href="https://veresk.org/fa">صفحه اصلی . اخبار و اطلاعات </a></span>
        </div>
    </div>
</div>

<div class="container-fluid filter-and-search-container">
    <div class="container py-4 px-0">
        <div class="section_panel px-3 d-flex flex-row align-items-center justify-content-between flex-wrap">
            <span class="col-lg-1 col-md-12 d-flex justify-content-center p-0">دسته ها:</span>
            <div
                class="filter_section col-lg-7 col-md-12 d-flex justify-content-center justify-content-md-start align-items-center py-3">
                <div class="section_tags px-3 d-flex justify-content-center">
                    <ul class="d-none d-md-block">
                        <li class="my-2 <?php if(!is_category()) echo 'active'?>">
                            <a href="<?php echo get_home_url(); ?>">
                                همه
                            </a>
                        </li>
                        <?php foreach (get_categories(array('orderby' => 'name', 'order' => 'ASC')) as $cat): ?>
                        <li
                            class="my-2 <?php if(is_category() && get_queried_object()->term_id == $cat->term_id) echo 'active'?>">
                            <a href="<?php echo get_category_link($cat->term_id); ?>">
                                <?php echo $cat->cat_name; ?>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ul>

                    <select class="d-md-none categories-select" onchange="location = this.value;">
                        <option value="<?php echo get_home_url(); ?>" <?php if(!is_category()) echo 'selected'?>>
                            همه
                        </option>
                        <?php foreach (get_categories(array('orderby' => 'name', 'order' => 'ASC')) as $cat): ?>
                        <option value="<?php echo get_category_link($cat->term_id); ?>"
                            <?php if(is_category() && get_queried_object()->term_id == $cat->term_id) echo 'selected'?>>
                            <?php echo $cat->cat_name; ?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>

            <form class="search-in-tag-section d-flex align-items-center col-md-12 col-lg-4" method="get" id="search form">
                <input class="form-control search-input" type="text" placeholder="جستجو..." name="s" id="s" />
                <button>
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<div class="page_content row py-5 mx-0" id="page_content">
    <?php if (is_search()): ?>
    <div class="container d-flex flex-wrap my-4">
        <div class="col-12 text-center">
            <h3>
                نتایج جستجو برای:
                <b>
                    <?php echo get_search_query(); ?>
                </b>
            </h3>
        </div>
    </div>
    <?php endif; ?>
    <?php if (have_posts()): ?>
    <div class="container d-flex flex-wrap my-4">
        <?php while (have_posts()): the_post();?>
        <div class="col-md-6 col-lg-4 mb-5">

            <div class="card">
                <span class="circle-of-date">
                    <span class="date-of-post p-2">
                        <?php echo get_the_date('j F'); ?></span>
                </span>
                </span>


                <a class="p-3" href="<?php the_permalink();?>">
                    <?php if (has_post_thumbnail()): ?>
                    <img class="card-img-top" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                        src='<?php echo get_the_post_thumbnail_url(); ?>'>
                    <?php endif;?>
                    <?php if (!has_post_thumbnail()): ?>
                    <img class="card-img-top" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src='<?php bloginfo('
                        template_directory'); ?>/images/railway-bg.jpg'>
                    <?php endif;?>
                </a>

                <div class="card-body p-4 px-md-5">
                    <a href="<?php the_permalink();?>">
                        <p class="mb-3 text-center">
                            <b class="card-body-title">
                                <?php the_title();?>
                            </b>
                        </p>
                    </a>
                    <p class="card-body-p">
                        <?php the_excerpt();?>
                    </p>

                    <span class="card-body-more-info d-flex align-items-center py-4">
                        <div hidden>
                            <svg version="1.1" id="right-more-info" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30.051 30.051"
                                style="enable-background:new 0 0 30.051 30.051;" xml:space="preserve">
                                <g>
                                    <path d="M15.024,30.051c8.301,0,15.026-6.724,15.026-15.023S23.325,0,15.024,0C6.727,0,0.002,6.729,0.002,15.027
		C0.002,23.327,6.727,30.051,15.024,30.051z M15.024,2.511c6.916,0,12.517,5.606,12.517,12.517c0,6.913-5.601,12.515-12.517,12.515
		c-6.91,0-12.515-5.602-12.515-12.515C2.51,8.117,8.115,2.511,15.024,2.511z" />
                                    <path d="M22.058,15.109l-5.422,4.486c0,0-0.643,0.679-0.643-0.056c0-0.743,0-2.53,0-2.53s-0.436,0-1.102,0c-1.91,0-5.379,0-6.792,0
		c0,0-0.382,0.1-0.382-0.483c0-0.582,0-3.143,0-3.554c0-0.419,0.317-0.411,0.317-0.411c1.376,0,4.963,0,6.81,0
		c0.597,0,1.154,0,1.154,0s0-1.435,0-2.337c0-0.896,0.641-0.119,0.641-0.119s4.934,3.719,5.467,4.252
		C22.492,14.741,22.058,15.109,22.058,15.109z" />
                                </g>
                            </svg>


                        </div>
                        <svg class="right-more-info">
                            <use xlink:href="#right-more-info" />
                        </svg>
                        <a href="<?php the_permalink();?>" class="more-info mx-2">
                            ادامه مطلب
                        </a>
                    </span>



                    <small class="post_meta mx-0 d-flex justify-content-between">
                        <span>
                            <?php the_author_posts_link() ?>
                            <span class="post_meta-date-and-time">
                                <?php echo get_the_date('Y-m-d'), "  در ", the_time() ?>
                            </span>
                        </span>

                        <span class="number-of-comments">
                            <?php comments_number( 'بدون نظر','۱ نظر', '% نظر' ); ?>
                        </span>

                    </small>
                </div>

            </div>
        </div>
        <?php endwhile;?>

        <div class="col-sm-12 p-4 mt-5 d-flex justify-content-center">
            <?php the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( '<i class="fa fa-angle-left" style="font-size:30px;"></i>', 'textdomain' ),
            'next_text' => __( '<i class="fa fa-angle-right" style="font-size:30px;"></i>', 'textdomain' ),
        )); ?>

        </div>
    </div>
    <?php endif;?>
</div>
<?php get_footer()?>