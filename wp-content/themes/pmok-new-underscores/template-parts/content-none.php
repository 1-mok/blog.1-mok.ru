<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pmok
 */

?>

<section class="no-results not-found">


	<!--allrecords-->
	<div class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1628338" data-tilda-page-id="7317359" data-tilda-page-alias="content-none" data-tilda-formskey="8bfb43ea870e3a107294087c4ee4a1ac">
		<div class="r t-rec t-rec_pt_0 t-rec_pb_15" style="padding-top:0px;padding-bottom:15px; " data-record-type="106">
			<!-- T004 -->
			<div class="t004">
				<div class="t-container ">
					<div class="t-col t-col_8 t-prefix_2">
						<div field="text" class="t-text t-text_md " style="">
							<div style="text-align:center;" data-customstyle="yes">

								<header class="page-header">
									<h1 class="page-title"><?php esc_html_e('Ничего не найдено', 'pmok'); ?></h1>
								</header><!-- .page-header -->

								<div class="page-content">
									<?php
									if (is_home() && current_user_can('publish_posts')) :

										printf(
											'<p>' . wp_kses(
												/* translators: 1: link to WP admin new post page. */
												__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pmok'),
												array(
													'a' => array(
														'href' => array(),
													),
												)
											) . '</p>',
											esc_url(admin_url('post-new.php'))
										);

									elseif (is_search()) :
										?>

										<p><?php esc_html_e('Ничего не найдено, попробуйте еще раз с другими словами', 'pmok'); ?></p>
									<?php
										get_search_form();

									else :
										?>

										<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pmok'); ?></p>
									<?php
										get_search_form();

									endif;
									?>
								</div><!-- .page-content -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/allrecords-->




</section><!-- .no-results -->