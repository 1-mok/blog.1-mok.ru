<?php
get_header(); ?>

<?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

<!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1628338" data-tilda-page-id="7234805" data-tilda-page-alias="index" data-tilda-formskey="8bfb43ea870e3a107294087c4ee4a1ac" >
<div id="rec127654927" class="r t-rec t-rec_pt_30 t-rec_pb_0" style="padding-top:30px;padding-bottom:0px; " data-record-type="43" >
<!-- T030 -->
<div class="t030"> <div class="t-container t-align_center"> <div class="t-col t-col_10 t-prefix_1"> <div class="t030__title t-title t-title_xxs" field="title" style="font-weight:600;"><strong><?php the_title(); ?></strong></div> </div> </div>
</div>
</div>
<div id="rec127654718" class="r t-rec t-rec_pt_0 t-rec_pb_15" style="padding-top:0px;padding-bottom:15px; " data-record-type="363" >
<!-- T029 -->
<div class="t029"> <div class="t029__container t-container"> <div class="t029__col t-col t-col_8"> <div class="t029__linewrapper" style="opacity:0.2;"> <div class="t029__opacity t029__opacity_left" style="background-image: -moz-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(right, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(right, #000000, rgba(0,0,0,0));"></div> <div class="t029__line" style="background: #000000;"></div> <div class="t029__opacity t029__opacity_right" style="background-image: -moz-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -webkit-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -o-linear-gradient(left, #000000, rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, #000000, rgba(0,0,0,0));"></div> </div> </div> </div>
</div>
</div>
<div id="rec127652149" class="r t-rec t-rec_pt_15 t-rec_pb_60" style="padding-top:15px;padding-bottom:60px; " data-record-type="106" >
<!-- T004 -->
<div class="t004">	<div class="t-container ">	<div class="t-col t-col_8 t-prefix_2">	<div field="text" class="t-text t-text_md " style="">
<?php the_post_thumbnail(); ?>
<?php the_content(''); ?>
</div>	</div>	</div>
</div>
</div>
<div id="rec127655645" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px;background-color:#f3f3f3; " data-record-type="209" data-bg-color="#f3f3f3">
<!-- T185 -->
<div class="t185">	<div class="t-container t-container_flex">	<div class="t-col t-col_flex t-col_6 t-prefix_2">	<div class="t-text t-text_lg" style="" field="text"><div style="font-size:14px;" data-customstyle="yes"><span style="font-size: 16px;">СЕН 11, 2019</span><br />Мастер-класс<br />★ "Культура и искусство"<br /></div></div>	</div>	<div class="t185__butwrapper t-col t-col_2 "> <a href="<?php the_permalink(); ?>" target="" class="t-btn " style="color:#ffffff;background-color:#7b3ef8;" ><table style="width:100%; height:100%;"><tr><td>Читать далее</td></tr></table></a>	</div>	</div>
</div>
<style>
#rec127655645 .t-btn[data-btneffects-first],
#rec127655645 .t-btn[data-btneffects-second],
#rec127655645 .t-submit[data-btneffects-first],
#rec127655645 .t-submit[data-btneffects-second] {	position: relative; overflow: hidden; -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);
}
</style>
<script type="text/javascript">
$(document).ready(function() {
});
</script>
</div>

<?php endwhile;
                endif; ?>
                
<div id="rec127665766" class="r t-rec t-rec_pt_30 t-rec_pb_30" style="padding-top:30px;padding-bottom:30px; " data-record-type="37" >
<!-- T022 -->
<div class="t022 t-align_center">	<div class="t-container">	<div class="t-row">	<div class="t-col t-col_6 t-prefix_3">	<div class="t022__text t-text t-text_sm" style="" field="text"><div class="pagination">
                    <?php  wpbeginner_numeric_posts_nav(); ?>

                </div> <br /></div>	</div>	</div>	</div>
</div>
</div>
</div>
<!--/allrecords-->



<?php get_footer(); ?>