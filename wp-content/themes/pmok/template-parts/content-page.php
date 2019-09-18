<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pmok
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<!--allrecords-->
	<div class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1628338" data-tilda-page-id="7234805" data-tilda-page-alias="index" data-tilda-formskey="8bfb43ea870e3a107294087c4ee4a1ac">
		<div class="r t-rec t-rec_pt_30 t-rec_pb_0" style="padding-top:30px;padding-bottom:0px; " data-record-type="43">
			<!-- T030 -->
			<div class="t030">
				<div class="t-container t-align_center">
					<div class="t-col t-col_10 t-prefix_1">
						<div class="t030__title t-title t-title_xxs" field="title" style="font-weight:600;">

							<header class="entry-header">
								<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
							</header><!-- .entry-header -->

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec t-rec_pt_0 t-rec_pb_15" style="padding-top:0px;padding-bottom:0px; " data-record-type="363">
			<!-- T029 -->
			<div class="t029">
				<div class="t029__container t-container">
					<div class="t029__col t-col t-col_8">
						<div class="t029__linewrapper" style="opacity:0.2;">
							<div class="t029__opacity t029__opacity_left" style="background-image: -moz-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(right, #000000, rgba(0,0,0,0));"></div>
							<div class="t029__line" style="background: #000000;"></div>
							<div class="t029__opacity t029__opacity_right" style="background-image: -moz-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, #000000, rgba(0,0,0,0));"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r t-rec t-rec_pt_15 t-rec_pb_60" style="padding-top:0px;padding-bottom:0px; " data-record-type="106">
			<!-- T004 -->
			<div class="t004">
				<div class="t-container ">
					<div class="t-col t-col_8 t-prefix_2">
						<div field="text" class="t-text t-text_md " style="">


							<?php pmok_post_thumbnail(); ?>

							<div class="entry-content">
								<?php
								the_content();

								wp_link_pages(array(
									'before' => '<div class="page-links">' . esc_html__('Pages:', 'pmok'),
									'after'  => '</div>',
								));
								?>
							</div><!-- .entry-content -->

							<?php if (get_edit_post_link()) : ?>
								<footer class="entry-footer">
									<?php
										edit_post_link(
											sprintf(
												wp_kses(
													/* translators: %s: Name of current post. Only visible to screen readers */
													__('Редактировать <span class="screen-reader-text">%s</span>', 'pmok'),
													array(
														'span' => array(
															'class' => array(),
														),
													)
												),
												get_the_title()
											),
											'<span class="edit-link">',
											'</span>'
										);
										?>
								</footer><!-- .entry-footer -->
							<?php endif; ?>


						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	</div>
	<!--/allrecords-->

</article><!-- #post-<?php the_ID(); ?> -->