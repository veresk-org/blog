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
    <div class="header-red-section col-sm-12">
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

            <div class="d-none d-lg-block col-sm-1">
                <div class="author-image">

                </div>
            </div>

            <div class="author col-12 col-md-3 py-2 py-md-0">
                <span class="d-block">نوشته شده </span>
                <span class="d-block author-name">امیرمحمد حقیقت</span>
            </div>

            <div class="category col-12 col-md-3 py-2 py-md-0">
                <span class="d-block">موضوعات</span>
                <span class="d-block category-name">وب و تجارت</span>
            </div>

            <div class="detail-date-section col-12 col-md-3 py-2 py-md-0">
                <span class="d-block">تاریخ</span>
                <span class="d-block detail-date">۲۵ شهریور ۱۳۹۷</span>
            </div>

            <div class="comments col-12 col-md-2 py-2 py-md-0">
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


<!-- Page Content -->

<div class="page_content py-5" id="page_content">
    <div class="container">
        <div class="row ">

            <!-- Post Content -->

            <!-- Share -->
            <div class="col-lg-2 side_bar_single">
                <div class="post_body d-flex flex-column align-items-center justify-content-between px-3">
                    <div class="side_bar_categories d-flex flex-column align-items-center">
                        <a class="social_medias d-flex justify-content-center align-items-center m-2">
                            <div hidden>
                                <svg version="1.1" id="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192c88.352,0,160-71.648,160-160V160
			C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48
			h192c61.76,0,112,50.24,112,112V352z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128z M256,336
			c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="393.6" cy="118.4" r="17.056" />
                                        </g>
                                    </g>

                                </svg>
                            </div>
                            <svg class="instagram">
                                <use xlink:href="#instagram" />
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
                    <div class="post_quote_source">
                        <?php the_author_posts_link()?>
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
    <div class="comment_section">
        <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-sm-8">
                    <div class="comment_body p-4 mb-5">
                        <div class="leave-comment">
                            <div class="leave-comment-title col-sm-12 col-md-7">
                                نظر خود را بنویسید
                            </div>

                            <div class="leave-comment-text col-sm-12 col-md-4">
                                برای ارسال نظر لطفا وارد شوید و یا ثبت نام کنید
                            </div>
                        </div>
                        <form class="py-5">
                            <textarea class="form-control comment-textarea my-2" placeholder="نظر خود را بنوسید" rows="5"></textarea>
                            <input type="text" placeholder="نام ، نام خانوادگی" class="form-control comment-inputs my-4">
                            <input type="email" placeholder="آدرس ایمیل" class="form-control comment-inputs my-4">
                            <input type="text" placeholder="وبسایت" class="form-control comment-inputs my-4">
                            <button type="submit" class="btn comment-btn">ارسال نظر</button>
                        </form>
                    </div>

                    <div class="col-sm-12 col-md-8 col-lg-6 py-5">
                        <div class="users-comments-title-box d-flex">
                            <div class="number-of-users-comments">
                                ۵
                            </div>
                            <span class="users-comments-title d-flex align-items-center">
                                نظرات کاربران
                            </span>

                        </div>
                    </div>

                    <div class="comment-of-user-box">
                        <div class="comment-of-user-content-div p-5">
                            <div class="name-of-user-in-comment-box py-2">
                                امیرمحمد حقیقت
                            </div>

                            <div class="comment-of-user-in-comment-box">
                                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت
                                و سه درصد فراوان جامعه و متخصصان را می طلبد
                            </div>


                        </div>

                        <div class="date-and-reply py-3 px-5">

                            <span class="date--comment-box">
                                ۲۷ خرداد ۱۳۹۸
                            </span>

                            <div class="reply">
                                <span>
                                    پاسخ دادن
                                </span>

                                <i class="fa fa-angle-left"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>