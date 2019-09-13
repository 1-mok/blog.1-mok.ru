<?php
get_header(); ?>

<div class="content">
    <div class="wrapper">
        <div class="main-content left">
            <div class="wrapper-645">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="post">
                            <div class="post-title"><?php the_title(); ?></div>
                            <div class="post-line"></div>
                            <div class="post-image"><?php the_post_thumbnail(); ?></div>
                            <div class="post-description">
                                <?php the_content(''); ?>
                                <div style='clear:both;'></div>
                            </div>
                            <div class="post-info">
                                <div class="post-info-many left">
                                    <div class="post-info-many-date"><?php the_time('M'); ?> <?php the_time('j'); ?>, <?php the_time('Y'); ?></div>
                                    <div class="post-info-many-tags">
                                        <ul>
                                            <?php if(get_the_tag_list()) {
                                                echo get_the_tag_list('',',');
                                            }?>
                                        </ul>
                                    </div>
                                    <div class="post-info-many-categories"><?php the_category(); ?></div>
                                </div>
                                <div class="post-info-more right"><a href="<?php the_permalink(); ?>">Читать далее &gt;</a></div>
                                <div class="clear-fix"></div>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>
                <div class="pagination">
                    <?php  wpbeginner_numeric_posts_nav(); ?>

                </div>
            </div>
        </div>

        <div class="clear-fix"></div>
    </div>
</div>

<?php get_footer(); ?>