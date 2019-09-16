<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pmok
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

		<!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1628338" data-tilda-page-id="7317359" data-tilda-page-alias="content-none" data-tilda-formskey="8bfb43ea870e3a107294087c4ee4a1ac" >
<div id="rec128285990" class="r t-rec t-rec_pt_0 t-rec_pb_15" style="padding-top:0px;padding-bottom:15px; " data-record-type="106" >
<!-- T004 -->
<div class="t004">	<div class="t-container ">	<div class="t-col t-col_8 t-prefix_2">	<div field="text" class="t-text t-text_md " style=""><div style="text-align:center;" data-customstyle="yes">

<header class="page-header">
				<h2 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты поиска: %s', 'pmok' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
			</header><!-- .page-header -->


</div></div>	</div>	</div>
</div>
</div>
</div>
<!--/allrecords-->

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
