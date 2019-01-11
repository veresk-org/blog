<?php get_header()?>
<div class="home">
    <div class="home_slider_container">
        <div class="home_slider_background" style="background-image:url(<?php bloginfo('template_directory')?>/images/railway-bg.jpg)"></div>
        <div class="post_title">Veresk blog</div>
    </div>
    <div class="angle-down justify-content-center d-flex col-sm-12">
        <a href="#page_content"><i class="fa fa-angle-down fa-5x"></i></a>
    </div>
</div>

<div class="page_content row my-5 mx-0" id="page_content">
    <div class="container">
        <div class="section_panel px-3 d-flex flex-row align-items-center justify-content-between">
            <div class="section_title">Categories:</div>
            <div class="section_tags">
                <ul>
                    <?php foreach (get_categories(array('hide_empty' => 0, 'orderby' => 'name', 'order' => 'ASC')) as $cat): ?>
                    <li>
                        <a href="<?php echo get_category_link($cat->term_id); ?>">
                            <?php echo $cat->cat_name; ?>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>

        </div>
    </div>



    <div class="container d-flex flex-wrap my-4">

        <div class="col-lg-4">
            <div class="card p-3">
                <a href="post.html">
                    <span class="badge badge-primary position-absolute">Category</span>
                    <img class="card-img-top" src="<?php bloginfo('template_directory')?>/images/railway-bg.jpg" alt="image">
                    <div class="card-body">
                        <p class="mb-3">
                            <b class="bold-tag">How Did van Gogh’s Turbulent Mind Depict One of the Most
                                Complex Concepts in Physics?
                            </b>
                        </p>
                        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat
                            skin, peel it off with your teeth. Sink them into unripened...</p>
                        <small class="post_meta"><a href="#">author</a><span>Sep 29, 2017 at 9:48 am</span></small>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card p-3">
                <a href="post.html">
                    <span class="badge badge-primary position-absolute">Category</span>
                    <img class="card-img-top" src="<?php bloginfo('template_directory')?>/images/railway-bg.jpg" alt="image">
                    <div class="card-body">
                        <p class="mb-3">
                            <b class="bold-tag">How Did van Gogh’s Turbulent Mind Depict One of the Most
                                Complex Concepts in Physics?
                            </b>
                        </p>
                        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat
                            skin, peel it off with your teeth. Sink them into unripened...
                        </p>
                        <small class="post_meta"><a href="#">author</a><span>Sep 29, 2017 at 9:48 am</span></small>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card p-3">
                <a href="post.html">
                    <span class="badge badge-primary position-absolute">Category</span>
                    <img class="card-img-top" src="<?php bloginfo('template_directory')?>/images/railway-bg.jpg" alt="image">
                    <div class="card-body">
                        <p class="mb-3">
                            <b class="bold-tag">How Did van Gogh’s Turbulent Mind Depict One of the Most
                                Complex Concepts in Physics?
                            </b>
                        </p>
                        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat
                            skin, peel it off with your teeth. Sink them into unripened...
                        </p>
                        <small class="post_meta"><a href="#">author</a><span>Sep 29, 2017 at 9:48 am</span></small>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
<?php get_footer()?>