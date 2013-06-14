<?php

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if ($showsidepost) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has-custom-menu';
}

if (!empty($PAGE->theme->settings->tagline)) {
    $tagline = '<p>'.$PAGE->theme->settings->tagline.'</p>';
} else {
    $tagline = '<!-- There was no custom tagline set -->';
}
if (!empty($PAGE->theme->settings->logo)) {
    $logourl = $PAGE->theme->settings->logo;
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <meta name="description" content="<?php p(strip_tags(format_text($SITE->summary, FORMAT_HTML))) ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>

<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html();?>


<?php if ($hascustommenu) { ?>
<div id="custommenu"><?php echo $custommenu; ?></div>
<?php } ?>

<div id="page" class="container">

    <!--  div id="wrapper" class="clearfix" -->

<!-- START OF HEADER -->

<!-- Jai start 
        <div id="page-header" >
            <div id="page-header-wrapper" class="wrapper clearfix">
-- Jai End-->
                <div id="header-left" class="header" id="page-header" >
	                <div class="leftElement">
	                    <?php if (!empty($PAGE->theme->settings->logo)) { ?>
	                        <a href="<?php echo $CFG->wwwroot; ?>" title="Home"><img id="logo" src="<?php echo $logourl; ?>" alt="Logo" /></a>
	                    <?php } else { ?>
	                        <h1 class="headermain"><a href="<?php echo $CFG->wwwroot; ?>" title="Home"><?php echo $PAGE->heading ?></a></h1>
	                        <div class="tagline"><?php echo $tagline; ?></div>
	                    <?php } ?>
	                  </div>
				        <div class="loginForm">
				        	
			            	<div class="leftElement">
			            			<?php echo $OUTPUT->blocks_for_region('side-post') ?>
			                		<label>User</label><br />
			                		<input type="text" /><br />
			            		<label>Password</label><br />
			                	<input type="text" />
			                </div>
			                <div class="rightElement">
			                	<input type="submit" value=""/>
			                </div>
			            </div>
			    </div>
<!-- Jai start			            
            </div>
          Jai end -->
                <div class="clearWidth nav">
                    <?php
                        echo $OUTPUT->login_info();
                        echo $OUTPUT->lang_menu();
                        echo $PAGE->headingmenu;
                    ?>
                </div>
                            <!--  Slidder -->
			   <div id="sliderFrame">
					<div id="slider">
			            <img src="<?php echo $OUTPUT->pix_url('img01','theme'); ?>" />
			            <img src="<?php echo $OUTPUT->pix_url('image-slider-2','theme'); ?>" alt="" />
			            <img src="<?php echo $OUTPUT->pix_url('image-slider-3','theme'); ?>" alt="" />
			            <img src="<?php echo $OUTPUT->pix_url('image-slider-4','theme'); ?>" alt="" />
			          </div>
						<div id="htmlcaption" style="display: none;">
				            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
				        </div>
				</div>
				<!-- Jai start			
        </div>
          Jai End
        -->
  
<!-- END OF HEADER -->
		 <div class="clearWidth bgColor">
        	<img src="<?php echo $OUTPUT->pix_url('bg','theme'); ?>" class="MRGCenter clearTabel" />
        </div>
        
<!-- START OF CONTENT -->

        <div id="page-content-wrapper" class="wrapper clearWidth">
            <div id="page-content" >
                <div id="region-main-box">
                    <div id="region-post-box" >
                        <div id="region-main-wrap">
                            <div id="region-main">
                                <div class="leftElement MRGR15PX WDTH440PX">
									            	<img src="images/ladyimg.jpg" class="leftElement MRGR15PX"/>
									                <p class="WDTH264PX clearTabel info">
									                	Lorem ipsum dolor sit amet, nec numquam perpetua eu, mel ne cetero imperdiet voluptatum, deleniti interesset sed no. Quo in nostro adipiscing, per lucilius delicata ne. Ignota primis ad has, cum ea eius liberavisse, ad mel regione saperet percipit. Meis constituto ex pri. Vis fugit pericula eu, alii accusata appellantur vix et.
									                </p>
													<p class="WDTH264PX clearTabel info">Lorem ipsum dolor sit amet, nec numquam perpetua eu, mel ne cetero imperdiet voluptatum, deleniti interesset sed no. Quo in nostro adipiscing, per lucilius delicata ne. Ignota primis ad has, cum ea eius liberavisse, ad mel regione saperet percipit. Meis constituto ex pri. 
									                </p>                                
                                    <?php echo $OUTPUT->main_content(); ?>
                                </div>
                                <div class="leftElement list PDDT10PX">
						            	<ul class="MRGL30PX">
						                	<li>Improving of YOUR grades
						                    	<span class="clearTabel tagLine">Complete your school with a high achievement</span>
						                    </li>
						                	<li>Computer access 24 hours everyday
						                    	<span class="clearTabel tagLine">Study anywhere on campus or at home or from any location</span>
						                    </li>
						                	<li>Support available
						                    	<span class="clearTabel tagLine">Contact your teachers and receive tuition</span>
						                    </li>
						                </ul>
                                	<?php //echo $OUTPUT->header(); ?>
                                </div>
                            </div>
                        </div>

                        <?php if ($hassidepost) { ?>
                        <div id="region-post" class="block-region">
                            <div class="region-content">
                                <?php //echo $OUTPUT->blocks_for_region('side-post') ?>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
            
        <!--  /div-->

<!-- END OF CONTENT -->

    </div> <!-- END #wrapper -->
               <div class="clearWidth bgColor">
               		<img src="<?php echo $OUTPUT->pix_url('bg','theme'); ?>" class="MRGCenter clearTabel" />
        	   </div>
</div> <!-- END #page -->
<!-- START OF FOOTER -->
    <div id="page-footer" class="wrapper clearfix footer">
           <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
               echo $OUTPUT->login_info();
               echo $OUTPUT->home_link();
            echo $OUTPUT->standard_footer_html();
           ?>
       </div>

<!-- END OF FOOTER -->


<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>