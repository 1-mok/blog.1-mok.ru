<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php if (is_home()) { ?>

            <?php  dynamic_sidebar( 'info' ); ?>

<!--
<div class="banners">
    <div class="wrapper">
     <?php  dynamic_sidebar( 'secondary-widget-area' ); ?>
        <div class="clear-fix"></div>
    </div>
</div>
-->

<?php } ?>
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
        <div class="sidebar right">
            <div class="wrapper-270">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
<!--<div class="subscribe">
    <div class="wrapper">
        <div class="left">
            <div class="wrapper-645">
                <div class="subscribe-text">
                    <div class="subscribe-text-top">
                        Подпишитесь на<br/> новостную рассылку
                    </div>
                    <div class="subscribe-text-bottom">
                        только полезные статьи. спама не будет.
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="wrapper-270">
                <div class="subscribe-input">
                    <input type="text" placeholder="Введите свой e-mail">
                </div>
                <div class="subscribe-more">Подписаться</div>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>-->
<?php get_footer(); ?>