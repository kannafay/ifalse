<div class="banner"></div>
<div class="wrapper">
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
            <p id="title-part"><?php single_cat_title(); ?> 分类下的文章</p>
            <?php get_search_form(); ?>
        </div>
        <?php 
            if(get_option("i_blog_or_card") == 1) {
                get_template_part('template/home-2');
            } else{
                get_template_part('template/home-1');
            } 
        ?>
    </div>
</div>