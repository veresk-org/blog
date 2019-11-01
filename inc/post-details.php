<div class="post_detail py-3 py-md-4">
    <div class="container">
        <div class="row">

            <div class="d-none d-lg-block col-sm-1">
                <div class="author-image">

                </div>
            </div>

            <div class="author col-sm-6 col-md-3 py-2 py-md-0">
                <span><?php _e("Written By", 'vereskBlog') ?> </span>
                <span class="author-name">
                    <?php the_author_posts_link() ?>
                </span>
            </div>

            <div class="category col-sm-6 col-md-3 py-2 py-md-0">
                <span><?php _e("Categories", 'vereskBlog') ?></span>
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
                <span><?php _e("Date", 'vereskBlog') ?></span>
                <span class="detail-date">
                    <?php echo get_the_date('j F Y'); ?></span>
            </div>

            <div class="comments col-sm-6 col-md-2 py-2 py-md-0">
                <span><?php _e("Comments", 'vereskBlog') ?></span>
                <span class="d-flex align-items-center number-of-comments">
                    <?php
                    if( get_locale() == 'fa_IR') {
                        comments_number( 'بدون نظر','۱ نظر', '% نظر' );
                    } else {
                        comments_number( 'No comment','1 commnet', '% comment' );
                    }
                    ?>
                    <div hidden>
                        <svg version="1.1" id="comment-icon" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30.333 30.333"
                            style="enable-background:new 0 0 30.333 30.333;" xml:space="preserve">
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