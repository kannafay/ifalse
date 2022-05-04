<div class="container single-top article-top">
    <div class="single-banner">
        <div class="single-cate">
            <div class="single-cate-box">
                <span class="iconfont icon-zhinanzhen"></span>
                <b><?php echo the_category(' ') ?></b>
            </div>
        </div>
        <div class="single-title"><h1><?php the_title(); ?></h1></div>
        <div class="single-detail"><span>浏览 <?php setPostViews(get_the_ID()) ?><?php echo getPostViews(get_the_ID()) ?> / 发布于 <?php the_time('Y-m-d'); ?> / 评论 <?php comments_popup_link('沙发！','1','%') ?> <?php edit_post_link('编辑文章') ?></span></div>
        <div class="breadcrumb"><span class="iconfont icon-home"></span><?php if ( function_exists('i_breadcrumb') ) i_breadcrumb();?></div>
    </div>
</div>
<div class="container single-main article-main">
    <div class="left">
        <?php if(get_option("i_post_cover") == 1) {?>
        <?php } else {?>
            <div class="post-tip">
                <?php if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail(); ?>
                <?php } else {?>
                    <img src="<?php echo i_cover_pic(); ?>" data-src="<?php if(get_option("i_random_pic")) {echo get_option("i_random_pic");} else{echo i_cover_pic(); } ?>?<?php echo $randNum = mt_rand(1,999999999) ?>" /> 
                <?php } ?>
                <i>封面图</i>
            </div>
        <?php } ?>
    </div>
    <div class="center">
        <div class="post-content">
            <?php if(get_option("i_post_cover") == 1) {?>
            <?php } else {?>
                <div class="post-tip">
                    <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail(); ?>
                    <?php } else {?>
                        <img src="<?php echo i_cover_pic(); ?>" data-src="<?php if(get_option("i_random_pic")) {echo get_option("i_random_pic");} else{echo i_cover_pic(); } ?>?<?php echo $randNum = mt_rand(1,999999999) ?>" /> 
                    <?php } ?>
                    <i>封面图</i>
                </div>
            <?php } ?>
                <?php the_content(); ?>
                <script> 
                    if(document.querySelector('#article-toc')) {
                        document.querySelector('.single-main .left').appendChild(document.querySelector('#article-toc'))
                    }
                </script>
            <div class="the-end" style="">—— THE END ——</div>
        </div>
        <div class="post-context">
            <div class="post-prev-next">
                <div class="post-prev"><span>上一篇：</span><?php previous_post_link('%link'); ?></div>
                <div class="post-next"><span>下一篇：</span><?php next_post_link('%link'); ?></div>
            </div>
        </div>
        <?php 
            if(get_option("i_comments_article") == 1) { ?>
                <div class="post-comments">
                    <div class="post-comments-content">
                        <h2>评论（<?php comments_popup_link('0','1','%') ?>）</h2>
                        <?php comments_template(); ?>
                    </div>
                </div> <?php
            }
        ?>
    </div>
    <div class="right">
        <div class="post-about-card">
            <div class="post-about-title">相关文章</div>
            <div class="post-about-content">
                <?php
                    if ( is_single() ) :
                    global $post;
                    $categories = get_the_category();
                    foreach ($categories as $category) :
                ?>
                <?php
                    $posts = get_posts('numberposts=3&category='. $category->term_id.'&exclude='.get_the_ID());
                    foreach($posts as $post) :
                ?>
                <div class="post-about-content-detail">
                
                    <a href="<?php the_permalink(); ?>">
                        <div class="mask-pic"><span class="iconfont icon-chakan"></span></div>
                        <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                        <?php } else {?>
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/thumbnail.png" data-src="<?php if(get_option("i_random_pic")) {echo get_option("i_random_pic");} else{echo i_cover_pic(); } ?>?<?php echo $randNum = mt_rand(1,999999999) ?>" />
                        <?php } ?>
                    </a>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                </div>
                <?php endforeach; ?>  
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>
