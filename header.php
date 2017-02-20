<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="DC.language" content="ENG" />
<meta name="DC.identifier" scheme="DCTERMS.URI" content="http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" />
<meta name="DC.title"  content="<?php wp_title( ); ?>" />
<meta name="DC.publisher" content="The National Archives, Kew, Richmond, Surrey, TW9 4DU" />
<meta name="DC.creator"   content="The National Archives" />
<meta name="DC.date.created" scheme=" W3CDTF" content="<?php the_time('j/m/Y g:i A') ?>" />
<meta name="DC.date.modified" scheme=" W3CDTF" content="<?php the_modified_time('j-m-Y') ?>" />
<meta name="DC.date.published" scheme=" W3CDTF" content="<?php the_time('j/m/Y g:i A') ?>" />
<meta name="eGMS.accessibility" scheme="eGMS.WCAG10" content="Double-A" /> 
<meta name="DC.rights" content="http://www.nationalarchives.gov.uk/legal/copyright.htm" />
<meta name="TNAcategory" content ="<?php $values = get_post_custom_values("tnasearch"); if($values[0] == "") { echo "Records"; } else { echo $values[0]; } ?>" />   
<meta name="eGMS.subject.category" scheme="GCL" content="Libraries and archives" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/colorbox.css" />
<link href='http://fonts.googleapis.com/css?family=Nobile:regular,bold' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>


<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery-1.4.4.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery.carouFredSel-4.1.0-packed.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery.colorbox-min.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/hub-behaviour.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jwplayer.js"></script>



</head>

<body <?php body_class(); ?>>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2827241-1']);
  _gaq.push(['_setDomainName', 'nationalarchives.gov.uk']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<div id="wrapper" class="hfeed">
<?php echo survey_banner() ?>
<?php include("includes/logosearchcms.php"); ?>
<?php include("includes/menu.php"); ?>

<div id="hubWrapper">


<div class="breadcrumbs">
	<?php if ( !is_home() ) {?>
    <a title="Go to The National Archives homepage" href="http://www.nationalarchives.gov.uk">Home</a> > 
        <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    <?php }?>
</div>

<!-- [breadcrumbs] -->


	<div id="header">
		
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
                
<div id="search"> <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><label for="s">Search</label><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" onFocus="if (this.value == 'Search audio, video and authors') {this.value=''}"/>
<input name="Search" id="searchsubmit" type="image" alt="Search" value="Search" src="<?php bloginfo('template_directory'); ?>/images/searchBtn.png">

</div>
</form></div>
				
	</div><!-- #header -->


<?php if ( is_home() ) {?>
<div id="description">
<h1><?php bloginfo('description'); ?></h1>
</div>
<?php }?>
<?php if ( is_category('audio') ) {?>
<div id="description">
<h1><?php echo category_description(); ?></h1>
</div>
<?php }?>
<?php if ( is_category('video') ) {?>
<div id="description">
<h1><?php echo category_description(); ?></h1>
</div>
<?php }?>



	<div id="main">
