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
            <span class="route-span col-md-6"><a href="<?php echo get_home_url(); ?>">خانه .
                    <?php the_title() ?></a></span>
        </div>
    </div>
</div>
<!-- Post Details -->

<div class="post_detail py-3 py-md-4">
    <div class="container">
        <div class="row">

            <div class="d-none d-lg-block col-sm-1">
                <div class="author-image">

                </div>
            </div>

            <div class="author col-sm-6 col-md-3 py-2 py-md-0">
                <span>نوشته شده </span>
                <span class="author-name">
                    <?php the_author_posts_link() ?>
                </span>
            </div>

            <div class="category col-sm-6 col-md-3 py-2 py-md-0">
                <span>موضوعات</span>
                <span class="category-name">
                    <?php foreach (get_the_category() as $cat): ?>
                    <a href="<?php echo get_category_link($cat->term_id); ?>">
                        <span class="category-name__text px-1">
                            <?php echo $cat->cat_name; ?>
                        </span>
                    </a>
                    <?php endforeach;?>
                </span>
            </div>

            <div class="detail-date-section col-sm-6 col-md-3 py-2 py-md-0">
                <span>تاریخ</span>
                <span class="detail-date">
                    <?php echo get_the_date('j F Y'); ?></span>
            </div>

            <div class="comments col-sm-6 col-md-2 py-2 py-md-0">
                <span>نظرات</span>
                <span class="d-flex align-items-center number-of-comments">
                    <?php comments_number( 'بدون نظر','۱ نظر', '% نظر' ); ?>
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


<!-- Page Content -->

<div class="single_page_content pt-md-5" id="page_content">
    <div class="container">
        <div class="row ">

            <!-- Post Content -->

            <!-- Share -->
            <div class="col-lg-2 side_bar_single">
                <div class="post_body d-flex flex-column align-items-start justify-content-between">
                    <div class="side_bar_categories d-flex flex-column align-items-center">
                        <a class="social_medias d-flex justify-content-center align-items-center m-2" target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo wp_get_shortlink(); ?>&p[images][0]=<?php echo get_the_post_thumbnail_url(); ?>&p[title]=<?php the_title();?>">
                            <div hidden>
                                <svg version="1.1" id="facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z" />
                                        </g>
                                    </g>
                                </svg> </div>
                            <svg class="facebook">
                                <use xlink:href="#facebook" />
                            </svg>

                        </a>

                        <a target="_blank" href="https://t.me/share/url?url=<?php the_permalink();?>" class="social_medias d-flex justify-content-center align-items-center m-2">
                            <div hidden>
                                <svg version="1.1" id="telegram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <path d="m640-1.667969-640 272.039063 167.777344 66.585937 59.726562 224.507813 109.976563-106.558594 178.917969 123.570312zm-403.78125 367.402344-6.457031 58.535156-24.800781-93.234375 435.039062-332.703125zm0 0" />
                                </svg>
                            </div>
                            <svg class="telegram">
                                <use xlink:href="#telegram" />
                            </svg>
                        </a>

                        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&summary=<?php the_title();?>&source=veresk.org"
                            class="social_medias d-flex justify-content-center align-items-center m-2">
                            <div hidden>
                                <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <rect y="160" width="114.496" height="352" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M426.368,164.128c-1.216-0.384-2.368-0.8-3.648-1.152c-1.536-0.352-3.072-0.64-4.64-0.896
			c-6.08-1.216-12.736-2.08-20.544-2.08c-66.752,0-109.088,48.544-123.04,67.296V160H160v352h114.496V320
			c0,0,86.528-120.512,123.04-32c0,79.008,0,224,0,224H512V274.464C512,221.28,475.552,176.96,426.368,164.128z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="56" cy="56" r="56" />
                                        </g>
                                    </g>

                                </svg>
                            </div>
                            <svg class="linkedin">
                                <use xlink:href="#linkedin" />
                            </svg>
                        </a>

                        <a target="_blank" href="http://twitter.com/share?text=<?php echo the_title(); ?>&url=<?php the_permalink();?>"
                            class="social_medias d-flex justify-content-center align-items-center m-2">
                            <div hidden>
                                <svg version="1.1" id="twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
			c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
			c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
			c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
			c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
			c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
			C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
			C480.224,136.96,497.728,118.496,512,97.248z" />
                                        </g>
                                    </g>

                                </svg>
                            </div>
                            <svg class="twitter">
                                <use xlink:href="#twitter" />
                            </svg>
                        </a>

                    </div>


                </div>

            </div>

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

                </div>
            </div>

        </div>

    </div>
    <?php comments_template(); ?>

</div>
<?php get_footer();?>