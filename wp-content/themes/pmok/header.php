<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pmok
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-MM595QJ');
	</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-grid-3.0.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="https://project1628338.tilda.ws/tilda-blocks-2.12.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-animation-1.0.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-menusub-1.0.min.css" rel="stylesheet" media="screen">

	<script src="https://static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
	<script src="https://static.tildacdn.com/js/tilda-scripts-2.8.min.js"></script>
	<script src="https://project1628338.tilda.ws/tilda-blocks-2.7.js"></script>
	<script src="https://static.tildacdn.com/js/lazyload-1.3.min.js"></script>
	<script src="https://static.tildacdn.com/js/tilda-animation-1.0.min.js"></script>
	<script src="https://static.tildacdn.com/js/tilda-menusub-1.0.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="margin-bottom: 0px;">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MM595QJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header>

		<!--allrecords-->
		<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1628338" data-tilda-page-id="7232105" data-tilda-page-alias="header" data-tilda-formskey="8bfb43ea870e3a107294087c4ee4a1ac">
			<div id="rec126900095" class="r t-rec" style=" " data-record-type="360">
				<!-- T360 -->
				<style type="text/css">
					@media screen and (min-width: 980px) {
						.t-records {
							opacity: 0;
						}

						.t-records_animated {
							-webkit-transition: opacity ease-in-out .5s;
							-moz-transition: opacity ease-in-out .5s;
							-o-transition: opacity ease-in-out .5s;
							transition: opacity ease-in-out .5s;
						}

						.t-records.t-records_visible {
							opacity: 1;
						}
					}
				</style>
				<script type="text/javascript">
					$(document).ready(function() {
						$(window).bind('pageshow', function(event) {
							if (event.originalEvent.persisted) {
								window.location.reload()
							}
						});
						$("#rec126900095").attr('data-animationappear', 'off');
						$("#rec126900095").css('opacity', '1');
						$('.t-records').addClass('t-records_animated');
						setTimeout(function() {
							$('.t-records').addClass('t-records_visible');
						}, 200);
					});
				</script>
				<script type="text/javascript">
					$(document).ready(function() {
						$("button:not(.t-submit):not(.t835__btn_next):not(.t835__btn_prev):not(.t835__btn_result):not(.t862__btn_next):not(.t862__btn_prev):not(.t862__btn_result):not(.t854__news-btn):not(.t862__btn_next), a:not([href*=#],.carousel-control,.t-carousel__control,.t807__btn_reply,[href^=#price],[href^=javascript],[href^=mailto],[href^=tel],[href^=link_sub])").click(function(e) {
							var goTo = this.getAttribute("href");
							if (goTo && goTo.substring(0, 4) == 'tel:') {
								return true;
							}
							var target = $(this).attr("target");
							if (target !== "_blank") {
								e.preventDefault();
								$(".t-records").removeClass("t-records_visible");
								setTimeout(function() {
									window.location = goTo;
								}, 500);
							}
						});
					});
				</script>
				<style type="text/css">
					.t360__bar {
						background-color: #7b3ef8;
					}
				</style>
				<script type="text/javascript">
					$(document).ready(function() {
						var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
						if (isSafari) {} else {
							$("body").append('<div class="t360__progress"><div class="t360__bar"></div></div>');
							setTimeout(function() {
								$(".t360__bar").addClass("t360__barprogress");
							}, 10);
						}
					});
					$(window).load(function() {
						$(".t360__bar").removeClass("t360__barprogress");
						$(".t360__bar").addClass("t360__barprogressfinished");
						setTimeout(function() {
							$(".t360__bar").addClass("t360__barprogresshidden");
						}, 20);
						setTimeout(function() {
							$(".t360__progress").hide();
						}, 500);
					});
				</script>
			</div>
			<div id="rec126900096" class="r t-rec t-screenmin-980px" style="background-color:#ffffff; " data-animationappear="off" data-record-type="257" data-screen-min="980px" data-bg-color="#ffffff">
				<!-- T228 -->
				<div id="nav126900096marker"></div>
				<div id="nav126900096" class="t228 t228__positionstatic " style=" height:50px; " data-bgcolor-hex="" data-bgcolor-rgba="" data-navmarker="nav126900096marker" data-appearoffset="" data-bgopacity-two="" data-menushadow="" data-bgopacity="1" data-menu-items-align="left" data-menu="yes">
					<div class="t228__maincontainer t228__c12collumns" style="height:50px;">
						<div class="t228__padding40px"></div>
						<div class="t228__leftside">
							<div class="t228__leftcontainer"> <a href="/" style="color:#ffffff;"><img src="https://static.tildacdn.com/tild6466-3662-4439-b564-613333353635/logo_1_mok_horiz-02-.svg" class="t228__imglogo t228__imglogomobile" imgfield="img" style="max-width: 100px;width: 100px; height: auto; display: block;" alt="1-й МОК"></a> </div>
						</div>
						<div class="t228__centerside t228__menualign_left">
							<div class="t228__centercontainer">
								<ul class="t228__list ">
									<li class="t228__list_item"><a class="t-menu__link-item" href="https://1-mok.ru" style="font-size:12px;font-weight:400;text-transform:uppercase;" data-menu-item-number="1">Комплекс</a> </li>
									<li class="t228__list_item"><a class="t-menu__link-item" href="https://1-mok.ru/kindergarten" style="font-size:12px;font-weight:400;text-transform:uppercase;" data-menu-item-number="2">Дошкольное</a> </li>
									<li class="t228__list_item"><a class="t-menu__link-item" href="https://1-mok.ru/school" style="font-size:12px;font-weight:400;text-transform:uppercase;" data-menu-item-number="3">Школа</a> </li>
									<li class="t228__list_item"><a class="t-menu__link-item" href="https://mskskills.ru" style="font-size:12px;font-weight:400;text-transform:uppercase;" data-menu-item-number="4">Дополнительное</a> </li>
									<li class="t228__list_item"><a class="t-menu__link-item" href="https://artcollege.ru" style="font-size:12px;font-weight:400;text-transform:uppercase;" data-menu-item-number="5">Колледж</a> </li>
									<li class="t228__list_item"><a class="t-menu__link-item" href="https://1-mok.ru/courses" style="font-size:12px;font-weight:400;text-transform:uppercase;" data-menu-item-number="6">Курсы</a> </li>
									<li class="t228__list_item"><a class="t-menu__link-item" href="/" style="font-size:12px;font-weight:400;text-transform:uppercase;" data-menu-item-number="7">События</a> </li>
								</ul>
							</div>
						</div>
						<div class="t228__rightside">
							<div class="t228__rightcontainer">
								<div class="t228__right_buttons">
									<div class="t228__right_buttons_wrap">
										<div class="t228__right_buttons_but"><a href="tel:+7(495)120-13-02" target="" class="t-btn " style="color:#333344;background-color:#ffffff;border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px;">
												<table style="width:100%; height:100%;">
													<tr>
														<td>+7 (495) 120-13-02</td>
													</tr>
												</table>
											</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="t228__padding40px"></div>
					</div>
				</div>
				<style>
					@media screen and (max-width: 980px) {
						#rec126900096 .t228__leftcontainer {
							padding: 20px;
						}
					}

					@media screen and (max-width: 980px) {
						#rec126900096 .t228__imglogo {
							padding: 20px 0;
						}
					}
				</style>
				<script type="text/javascript">
					$(document).ready(function() {
						t228_highlight();
					});
					$(window).resize(function() {
						t228_setBg('126900096');
					});
					$(document).ready(function() {
						t228_setBg('126900096');
					});
				</script>
				<style>
					#rec126900096 .t-btn:not(.t-animate_no-hover):hover {
						background-color: #7b3ef8 !important;
						color: #ffffff !important;
					}

					#rec126900096 .t-btn:not(.t-animate_no-hover) {
						-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
						transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
					}
				</style>
				<style>
					#rec126900096 .t-menu__link-item {
						-webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
						transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
					}

					#rec126900096 .t-menu__link-item.t-active {
						opacity: 0.50 !important;
					}

					#rec126900096 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
						opacity: 0.5 !important;
					}

					@supports (overflow:-webkit-marquee) and (justify-content:inherit) {

						#rec126900096 .t-menu__link-item,
						#rec126900096 .t-menu__link-item.t-active {
							opacity: 1 !important;
						}
					}
				</style>
				<script type="text/javascript">
					$(document).ready(function() {
						setTimeout(function() {
							t_menusub_init('126900096');
						}, 500);
					});
				</script>
				<style>
					@media screen and (max-width: 980px) {
						#rec126900096 .t-menusub__menu .t-menusub__link-item {
							color: #000000 !important;
						}
					}
				</style>
			</div>
			<div id="rec128310707" class="r t-rec t-rec_pb_0 t-screenmin-980px" style="padding-bottom:0px; " data-animationappear="off" data-record-type="258" data-screen-min="980px">
				<!-- T229 -->
				<div id="nav128310707marker"></div>
				<div id="nav128310707" class="t229 t229__positionstatic " style="background-color: rgba(255,255,255,1); height:50px; " data-bgcolor-hex="#ffffff" data-bgcolor-rgba="rgba(255,255,255,1)" data-navmarker="nav128310707marker" data-appearoffset="" data-bgopacity="1" data-menu="yes">
					<div class="t229__maincontainer " style="height:50px;">
						<div class="t229__padding40px"></div>
						<div class="t229__centerside ">
							<ul class="uppercase">
								<li class="t229__list_item"><a class="t-menu__link-item" href="/#search" style="color:#000000;font-size:13px;font-weight:400;text-transform:uppercase;">Поиск</a> </li>
								<li class="t229__list_item"><a class="t-menu__link-item" href="/#archives" style="color:#000000;font-size:13px;font-weight:400;text-transform:uppercase;">Архив</a> </li>
								<li class="t229__list_item"><a class="t-menu__link-item" href="/#categories" style="color:#000000;font-size:13px;font-weight:400;text-transform:uppercase;">Категории</a> </li>
								<li class="t229__list_item"><a class="t-menu__link-item" href="/#tag" style="color:#000000;font-size:13px;font-weight:400;text-transform:uppercase;">Метки</a> </li>
								<li class="t229__list_item"><a class="t-menu__link-item" href="/#posts" style="color:#000000;font-size:13px;font-weight:400;text-transform:uppercase;">Последние</a> </li>
							</ul>
						</div>
						<div class="t229__padding40px"></div>
					</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
						t229_highlight('7232105');
						$('.t229').removeClass('t229__beforeready');
					});
				</script>
				<script type="text/javascript">
					$(window).resize(function() {
						t229_setBg('128310707');
					});
					$(window).load(function() {
						t229_setBg('128310707');
					});
					$(document).ready(function() {
						t229_setBg('128310707');
					});
				</script>
				<script type="text/javascript">
					$(document).ready(function() {
						setTimeout(function() {
							t_menusub_init('128310707');
						}, 500);
					});
				</script>
				<style>
					@media screen and (max-width: 980px) {
						#rec128310707 .t-menusub__menu .t-menusub__link-item {
							color: #000000 !important;
						}
					}
				</style>
				<!--[if IE 8]>
<style>
#rec128310707 .t229 { filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9ffffff', endColorstr='#D9ffffff');
}
</style>
<![endif]-->
			</div>
			<div id="rec126900099" class="r t-rec t-screenmax-980px" style="background-color:#ffffff; " data-animationappear="off" data-record-type="327" data-screen-max="980px" data-bg-color="#ffffff">
				<!-- T282 -->
				<div id="nav126900099marker"></div>
				<div id="nav126900099" class="t282 " data-menu="yes" data-appearoffset="">
					<div class="t282__container t282__small t282__positionstatic" style="">
						<div class="t282__container__bg" style=" " data-bgcolor-hex="" data-bgcolor-rgba="" data-navmarker="nav126900099marker" data-appearoffset="" data-bgopacity="1" data-menu-shadow="0px 1px 3px rgba(0,0,0,0.)"></div>
						<div class="t282__container__bg_opened" style="background-color:#f1f2f9;"></div>
						<div class="t282__menu__content ">
							<div class="t282__logo__container" style="height:60px;">
								<div class="t282__logo__content"><a class="t282__logo" href="/" style="color:#333344;font-size:19px;font-weight:400;letter-spacing:1px;text-transform:uppercase;"><img src="https://static.tildacdn.com/tild3634-3365-4130-b935-316537363538/logo_1_mok_horizont-.svg" style="height: 25px;" class="t280__logo__img" imgfield="img" alt="Колледж | 1-й МОК"></a></div>
								<div class="t282__burger"> <span style="background-color:#333344;"></span> <span style="background-color:#333344;"></span> <span style="background-color:#333344;"></span> <span style="background-color:#333344;"></span> </div>
							</div>
						</div>
					</div>
					<div class="t282__menu__container t282__closed">
						<div class="t282__menu__wrapper" style="background-color:#f1f2f9;">
							<div class="t282__menu">
								<div class="t282__menu__items"> <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="https://1-mok.ru" style="color:#333344;font-size:15px;font-weight:400;">Комплекс</a> <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/#search" style="color:#333344;font-size:15px;font-weight:400;">Поиск</a> <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/#archives" style="color:#333344;font-size:15px;font-weight:400;">Архив</a> <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/#categories" style="color:#333344;font-size:15px;font-weight:400;">Категории</a> <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/#tag" style="color:#333344;font-size:15px;font-weight:400;">Метки</a> <a class="t282__menu__item t-heading t-heading_md t-menu__link-item" href="/#posts" style="color:#333344;font-size:15px;font-weight:400;">Последние</a> </div>
								<div class="t282__descr t-descr t-descr__xxs" style="color:#7b3ef8;font-size:24px;">
									<div style="color:#7b3ef8;" data-customstyle="yes"><a href="tel:+7(495)120-13-02" style="color: rgb(123, 62, 248);"><span style="font-weight: 400;">+7(495)120-13-02</span></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="t282__overlay t282__closed"></div>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
						t282_showMenu('126900099');
						t282_changeSize('126900099');
						t282_highlight();
					});
					$(window).resize(function() {
						t282_changeSize('126900099');
					});
				</script>
				<style>
					#rec126900099 .t-menu__link-item {
						-webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
						transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
					}

					#rec126900099 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
						color: #6f7998 !important;
						opacity: 0.5 !important;
					}

					@supports (overflow:-webkit-marquee) and (justify-content:inherit) {

						#rec126900099 .t-menu__link-item,
						#rec126900099 .t-menu__link-item.t-active {
							opacity: 1 !important;
						}
					}
				</style>
				<script type="text/javascript">
					$(document).ready(function() {
						setTimeout(function() {
							t_menusub_init('126900099');
						}, 500);
					});
				</script>
				<style>
					@media screen and (max-width: 980px) {
						#rec126900099 .t-menusub__menu .t-menusub__link-item {
							color: #333344 !important;
						}
					}
				</style>
			</div>
		</div>
		<!--/allrecords-->


	</header>



	<div id="content" class="site-content">