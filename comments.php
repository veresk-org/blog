<div class="comment_section">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-sm-12 col-md-8">
                <div class="comment_body p-4 mb-5">
                    <div class="leave-comment">
                        <div class="leave-comment-title col-sm-12 col-md-7">
                            نظر خود را بنویسید
                        </div>
                        <div class="leave-comment-text col-sm-12 col-md-4">
                            با آغوش گرم پذیرای نظرات شما هستیم
                        </div>
                    </div>
                    <form class="py-5" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
                        <textarea required name="comment" class="form-control comment-textarea my-2" placeholder="متن نظر"
                            rows="5"></textarea>
                        <input required name="author" type="text" placeholder="نام ، نام خانوادگی" class="form-control comment-inputs my-4">
                        <input required name="email" type="email" placeholder="آدرس ایمیل" class="form-control comment-inputs my-4">
                        <input name="url" type="text" placeholder="وبسایت" class="form-control comment-inputs my-4">
                        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                        <button type="submit" class="btn comment-btn">ارسال نظر</button>
                        <?php do_action('comment_form', $post->ID);?>
                    </form>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6 pt-5 pb-3">
                    <div class="users-comments-title-box d-flex">
                        <div class="number-of-users-comments pl-3">
                            <?php comments_number( '0', '1', '%' ); ?>
                        </div>
                        <span class="users-comments-title d-flex align-items-center">
                            نظرات کاربران
                        </span>
                    </div>
                </div>
                <?php if ($comments): ?>
                <?php foreach ($comments as $comment): ?>
                <?php if ($comment->comment_approved == '0'): ?>
                <p class="comment-approving">نظر شما در انتظار تایید می‌باشد.</p>
                <?php endif;?>
                <div class="comment-of-user-box mb-5" id="comment-<?php comment_ID();?>">
                    <div class="comment-of-user-content-div p-5">
                        <div class="name-of-user-in-comment-box py-2">
                            <?php comment_author_link();?>
                        </div>

                        <div class="comment-of-user-in-comment-box">
                            <?php comment_text();?>
                        </div>
                    </div>

                    <div class="date-and-reply py-3 px-5">
                        <span class="date--comment-box">
                            <?php echo get_comment_date('j F Y', $comment->ID); ?>
                        </span>
                        <!-- <div class="reply">
                            <span>پاسخ دادن</span>
                            <i class="fa fa-angle-left"></i>
                        </div> -->
                    </div>
                </div>
                <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>