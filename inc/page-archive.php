<div class="wrapper">
    <div class="banner"></div>
    <div class="content-wrapper">
        <div class="text-wrapper">
            <h2 class="h2-title"><?php single_cat_title(); ?></h2>
        </div>
    </div>
</div>
<div class="container main-content main">
    <div class="content">
        <?php
            if(get_option("i_notice")) {?>
                <div class="notice">
                    <span class="iconfont icon-xiaoxi"></span>
                    <p><?php echo get_option("i_notice"); ?></p>
                </div>
            <?php }
        ?>
        <div class="title-part">
            <p><span><?php single_cat_title(); ?></span> 分类下的内容</p>
            <?php get_search_form(); ?>
        </div>
        <?php 
            if(get_option("i_blog_or_card") == 1) {
                get_template_part('template/home-blog');
            } else{
                get_template_part('template/home-card');
            } 
        ?>
    </div>
</div>
