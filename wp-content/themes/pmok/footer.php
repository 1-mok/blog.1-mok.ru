<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pmok
 */

?>

</div><!-- #content -->


<?php if (is_home()) { ?>

	<?php dynamic_sidebar('info'); ?>
	<!--allrecords-->
	<div class="t-records" data-hook="blocks-collection-content-node">
		<div class="r t-rec t-rec_pt_45 t-rec_pb_45" style="padding-top:45px;padding-bottom:45px; " data-record-type="218">
			<!-- T005 -->
			<div class="t005">
				<div class="t-container">
					<div class="t-row">
						<div class="t-col t-col_6 " style="margin-bottom: 20px;">
							<div class="t005__text t-text t-text_md" style="" field="text">
								<a name="search"></a>
								<?php
									get_search_form();
									?>
							</div>
						</div>
						<div class="t-col t-col_6 ">
							<div class="t005__text t-text t-text_md" style="" field="text2">
								<a name="archives"></a>
								<?php
									$pmok_archive_content = '<p>' . sprintf(esc_html__('Ежемесячные архивы', 'pmok'), convert_smilies(':)')) . '</p>';
									the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$pmok_archive_content");
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/allrecords-->

	<!--allrecords-->
	<div class="t-records" data-hook="blocks-collection-content-node">
		<div class="r t-rec t-rec_pt_45 t-rec_pb_45" style="padding-top:45px;padding-bottom:45px; " data-record-type="218">
			<!-- T005 -->
			<div class="t005">
				<div class="t-container">
					<div class="t-row">
						<div class="t-col t-col_6 ">
							<div class="t005__text t-text t-text_md" style="" field="text">
								<a name="categories"></a>
								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e('Категории', 'pmok'); ?></h2>
									<ul>
										<?php
											wp_list_categories(array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 50,
											));
											?>
									</ul>
								</div>
							</div>
						</div>
						<div class="t-col t-col_6 ">
							<div class="t005__text t-text t-text_md" style="" field="text2">
								<a name="tag"></a>
								<?php
									the_widget('WP_Widget_Tag_Cloud');
									?>
								<a name="posts"></a>
								<?php
									the_widget('WP_Widget_Recent_Posts');
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/allrecords-->
<?php } ?>






<footer>
<!--allrecords-->
<div class="t-records" data-hook="blocks-collection-content-node">
<div class="r t-rec t-rec_pt_45 t-rec_pb_75" style="padding-top:45px;padding-bottom:75px;background-color:#1e1e29; " data-record-type="463" data-bg-color="#1e1e29">
<!-- T463 -->
<div class="t463" id="t-footer_126916635"> <div class="t463__maincontainer " > <div class="t463__content" style="">	<div class="t463__colwrapper"> <div class="t463__col">	<img src="https://static.tildacdn.com/tild6464-3861-4338-a166-626461313862/logo_1_mok_footer_wh.svg" class="t463__logo t463__img" imgfield="img" style="max-width: 150px; width: 100%;" alt=""> </div>	<div class="t463__col t463__col_center t-align_center">	<div class="t463__typo t463__copyright t-name t-name_xs" field="text" style="color: #ffffff;"> Вы посетили наш сайт-спутник<br />Подробную информацию можете узнать на нашем<br /><a href="https://1-mok.mskobr.ru" style="color:rgb(255, 255, 255) !important;text-decoration: none;border-bottom: 1px solid rgb(255, 255, 255);box-shadow: inset 0px -0px 0px 0px rgb(255, 255, 255);-webkit-box-shadow: inset 0px -0px 0px 0px rgb(255, 255, 255);-moz-box-shadow: inset 0px -0px 0px 0px rgb(255, 255, 255);" target="_blank" rel="nofollow">официальном сайте 1-mok.mskobr.ru</a><br /><a href="http://files.1-mok.ru/pdf/agreement/agreement.pdf" style="" target="_blank"><br />Пользовательское соглашение</a><br /> </div> </div> <div class="t463__col t-align_right"> </div>	</div> </div> </div>
</div>
</div>
</div>
<!--/allrecords-->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</!-->