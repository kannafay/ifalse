<div class="container single-top article-top">
    <div class="single-banner">
        <div class="single-cate">
            <div class="single-cate-box">
                <span class="iconfont icon-zhinanzhen"></span>
                <b><?php echo the_category(' ') ?></b>
            </div>
        </div>
        <div class="single-title"><h1><?php the_title(); ?></h1></div>
        <div class="single-detail">
            <div class="author">
                <a href="<?php the_post();home_url();echo '/author/';echo get_the_author_meta('user_login');rewind_posts(); ?>"><?php the_post();echo get_avatar( get_the_author_ID() );rewind_posts(); ?></a>
                <span><?php the_author_posts_link(); ?></span>
            </div>
            <div class="other">
                <span class="date"><?php echo get_the_date(); ?> <?php the_time(); ?></span>
                <span class="views"><?php setPostViews(get_the_ID()) ?><?php echo getPostViews(get_the_ID()) ?></span>
                <?php if(get_option("i_comments_article") == 1){ ?><span class="comments"><?php if(post_password_required()){echo '已加密';}elseif(comments_open()){comments_popup_link('沙发','1','%');}else{echo '已关闭';} ?></span><?php } ?>
                <?php edit_post_link('编辑文章') ?>
            </div>
        </div>
        <div class="breadcrumb"><?php if ( function_exists('i_breadcrumb') ) i_breadcrumb();?></div>
    </div>
</div>
<div class="container single-main article-main">
    <div class="left">
        <div class="post-content">
            <?php the_content(); ?>
            <?php if(get_option("i_post_copyright") == 1) { ?>
                <div class="post-copyright">
                    <div class="post-copyright-title">© 版权声明</div>
                    <div class="post-copyright-text"><?php if(get_option("i_post_copyright_text")){echo get_option("i_post_copyright_text");}else{echo '分享是一种美德，转载请保留原链接';} ?></div>
                </div>
            <?php } ?>
            <div class="the-tag"><?php echo get_the_tag_list('<span>',' ','</span>'); ?></div>
        </div>
        <?php if(get_option("i_next_post") == 1) { ?>
            <div class="post-context">
                <div class="post-prev-next">
                    <div class="post-prev"><span>上一篇：</span><?php previous_post_link('%link'); ?></div>
                    <div class="post-next"><span>下一篇：</span><?php next_post_link('%link'); ?></div>
                </div>
            </div>
        <?php } ?>
        <?php 
            if(get_option("i_comments_article") == 1) { ?>
                <?php comments_template('/comments.php');?>
            <?php
            }
        ?>
    </div>
    <div class="right">
        <?php get_template_part('inc/sidebar-article')?>
    </div>
</div>

<div class="post-menu-mb-btn">
    <div>
        <span class="iconfont icon-category"></span>
    </div>
</div>