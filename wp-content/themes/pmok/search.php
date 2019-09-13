<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="content">
    <div class="wrapper">
        <div class="main-content left">
            <div class="wrapper-645">
<div class="findme">
            <? if ( have_posts() ) : ?>
            <h1><? printf( __( 'Результаты поиска: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <div class="find">            
            <? while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <div class="post-title"><? the_title() ?></div> 
                <div class="post-line"></div>
                <div class="post-image"><?php the_post_thumbnail(); ?></div>
                <div class="post-description"><p><? echo(get_the_excerpt()) ?></p></div>
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
            <? endwhile; ?>
            </div>
            <? else : ?>
            <h1>Ничего не найдено</h1>
            <p>Ничего не найдено, попробуйте еще раз.</p>
            <? endif; ?>
                </div>
		</div><!-- #content -->
        </div>
        <div class="sidebar right">
            <div class="wrapper-270">
                <?php get_sidebar(); ?>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
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
</div>

<?php get_footer(); ?>