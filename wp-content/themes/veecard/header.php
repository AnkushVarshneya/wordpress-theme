<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!-- head -->
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width">
	<meta name="keywords" content="<?php echo of_get_option('veecard_metakeywords'); ?>" />
	

	<!-- stylesheet -->
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<!-- stylesheet -->
	
	<?php if($_SERVER['REQUEST_URI'] =='/transcript/' && of_get_option('veecard_bio_vcard') != '') { ?>
	<!-- datatable -->
	<link rel="stylesheet" media="all" href="<?php echo bloginfo('stylesheet_directory').'\datatable\datatables.min.css'; ?>"/>
	<link rel="stylesheet" media="all" href="<?php echo bloginfo('stylesheet_directory').'\transcript.css'; ?>"/>

	<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory').'\datatable\datatables.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory').'\transcript.js'; ?>"></script>
	<!-- datatable -->
	<?php } ?>
	
	<!-- patterns -->
	<?php if(of_get_option('veecard_blog_pattern') !== 'default') { ?>
	<style type="text/css">.main, .main-container {background: url('<?php echo get_template_directory_uri(); ?>/images/patterns/<?php echo of_get_option('veecard_blog_pattern') ?>.png') left top repeat !important;}</style>
	<?php } else { ?><?php } ?>
	<!-- patterns -->

	<!-- skins -->
	<?php if(of_get_option('veecard_blog_skin') !== 'default') { ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo of_get_option('veecard_blog_skin') ?>" />
    <?php } else { ?><?php } ?>
    <!-- skins -->

    <!-- custom typography-->
    <?php if(of_get_option('veecard_customtypography') == '1') { ?>     
		<?php if(of_get_option('veecard_headingfontlink') != '') { ?>
			<?php echo stripslashes(html_entity_decode(of_get_option('veecard_headingfontlink')));?>
		<?php } ?>
	<?php } ?>
	<!-- custom typography -->

    <!-- custom colors -->
    <?php load_template( get_template_directory() . '/custom.typography.css.php' );?>
    <!-- custom colors -->

<!-- wp_head -->
<?php wp_head(); ?>
<!-- wp_head -->

</head>
<!-- head -->

	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

	<!-- #page -->
	<div id="page">
		<div class="header-container">
           <header class="clearfix">
           	   <?php if (of_get_option('veecard_clogo') !='' || of_get_option('veecard_clogo_text')!='' ) { ?>
               <h1 class="title"><a href="<?php bloginfo('url'); ?>"><?php if(of_get_option('veecard_clogo')) : echo '<img src="'.of_get_option('veecard_clogo').'" alt="'.get_bloginfo('name').'" />'; else: echo ''.of_get_option('veecard_clogo_text').''; endif; ?></a></h1>
               <?php } else { ?>
               <h1 class="title invisible"><?php echo get_bloginfo('name') ?></h1>
               <?php } ?>
           </header>

			<div class="col_half first">
			  <?php if($_SERVER['REQUEST_URI'] =='/resume/resume/' && of_get_option('veecard_bio_vcard') != '') { ?>
				<a href="<?php echo of_get_option('veecard_bio_paper_resume') ?>" class="vcardl"><?php _e("Download Paper Resume", "site5framework"); ?></a>
			  <?php } ?>
			  <?php if($_SERVER['REQUEST_URI'] =='/transcript/' && of_get_option('veecard_bio_vcard') != '') { ?>
				<a href="<?php echo of_get_option('veecard_bio_transcript') ?>" class="vcardl"><?php _e("Download Transcript", "site5framework"); ?></a>
			  <?php } ?>
			</div>
			<div class="col_half last">
			  <?php if(of_get_option('veecard_bio_vcard') != '') { ?>
				<a href="<?php echo of_get_option('veecard_bio_vcard') ?>" class="vcard"><?php _e("Download vCard", "site5framework"); ?></a>
			  <?php } ?>
			</div>

        </div>

		<!-- .main-container -->
		<div class="main-container">
			<nav>
				<a href="#top-menu" id="menu-button">Menu</a>
				<div id="top-menu">
				<?php  site5_main_nav(); ?>
				</div>
			</nav>

			<div class="main clearfix">
				<?php if(is_home() === false && is_post_type( 'resume' ) === false ) { get_template_part('part', 'bio'); } ?>
					

