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
<div class="main-banner">
    <div class="efect">
        <div class="wrapper">
            <div class="info">
                <div class="title">Ф-т «Дизайн» провёл занятия</div>
                <div class="description">
                    Благоприятный климат в коллективе – важный показатель успешного творческого процесса. Во многом
                    именно от него зависит качество усвоения изучаемого материала и общий результат совместной
                    деятельности группы.
                </div>

            </div>
            <div class="more">
                <a href="#">Подробнее</a>
                <div class="clear-fix"></div>
            </div>
            <div class="info">
                <div class="tags">
                    <ul>
                        <li><a href="#">Колледж</a></li>
                        <li><a href="#">Теги</a></li>
                        <li><a href="#">Метки</a></li>
                        <li><a href="#">Факультет</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="banners">
    <div class="wrapper">
        <div class="banner left" style="background-image: url('images/item-banner-background.jpg')">
            <div class="efect">
                <div class="title">
                    Ф-т провёл занятия
                </div>
                <div class="line">
                </div>
                <div class="date">
                    декабрь 14, 2016
                </div>
                <div class="more">
                    <a href="#">Подробнее</a>
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
        <div class="banner left" style="background-image: url('images/item-banner-background.jpg')">
            <div class="efect">
                <div class="title">
                    Ф-т провёл занятия
                </div>
                <div class="line">
                </div>
                <div class="date">
                    декабрь 14, 2016
                </div>
                <div class="more">
                    <a href="#">Подробнее</a>
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
        <div class="banner left" style="background-image: url('images/item-banner-background.jpg')">
            <div class="efect">
                <div class="title">
                    Ф-т провёл занятия
                </div>
                <div class="line">
                </div>
                <div class="date">
                    декабрь 14, 2016
                </div>
                <div class="more">
                    <a href="#">Подробнее</a>
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
<div class="content">
    <div class="wrapper">
        <div class="main-content left">
            <div class="wrapper-645">
                <div class="single">
                    <div class="post-title2"><?php the_title(); ?></div>
                    <div class="post-text">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php
                                the_content();
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="post-info">
                        <div class="post-info-many-date"><?php the_time('M'); ?> <?php the_time('j'); ?>
                            , <?php the_time('Y'); ?></div>
                        <div class="post-info-many-tags">
                            <ul>
                                <?php if (get_the_tag_list()) {
                                    echo get_the_tag_list('', ',');
                                } ?>
                            </ul>
                        </div>
                        <div class="post-info-many-categories"><?php the_category(); ?></div><br />
                        				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( '', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>
                    </div>
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
</div>
</div>
</div><!--
<div class="subscribe">
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