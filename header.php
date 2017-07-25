<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<title>Alternate Technology </title>
    
    <meta name="description" content="" />
	<meta name="author" content="" />
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- **Favicon** -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>">
    
    <!-- **CSS - stylesheets** -->
           
    <link id="shortcodes-css" href="<?php echo get_template_directory_uri(); ?>/css/shortcode.css" rel="stylesheet" media="all" />
    <link id="skin-css" href="<?php echo get_template_directory_uri(); ?>/css/meanmenu.css" rel="stylesheet" media="all" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/animations.css" rel="stylesheet" media="all" />
    
	<link href="<?php echo get_template_directory_uri(); ?>/css/settings.css" rel="stylesheet" media="all" />
    
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" media="all" />
    
    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
    
	<!-- **Loader** -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/pace-theme-center-radar.css" rel="stylesheet" type="text/css" />
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="font-family: Lato !important">
    <div class="cover"></div>
    <!-- Wrapper div starts here -->
    <div class="wrapper dark-bg">
        <div class="inner-wrapper">
            <!-- header div starts here -->
            <header id="header" class="dt-sticky-menu">
                <div class="container">
                    <div id="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img title="" alt="" src="http://res.cloudinary.com/altertechno/image/upload/c_scale,w_1031/v1500277497/logotry_hdnmp9.png" style = "width:260px; height:50px">
                        </a>
                    </div>
                    <!-- Menu div starts here -->
                    <div class="menu-main-menu-container">
                        <nav id="main-menu">
                        
                            <?php 
                            $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $after_base_url_charat = strpos($actual_link, $GLOBALS['theUrl']) + (strlen($GLOBALS['theUrl']) + 1);
                            // echo "<script>alert('" . strlen($GLOBALS['theUrl']) . "');</script>";
                            $after_base_url_string = substr($actual_link, $after_base_url_charat);
                            
                            
                            if($after_base_url_string == '')
                                {
                                    wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
                                    // echo "<script>alert('this is empty " . $after_base_url . "');</script>";
                                    
                                } 

                            else
                                {
                                    wp_nav_menu( array( 'theme_location' => 'sub-menu' ) );
                                    // echo "<script>alert('" . $after_base_url . "');</script>";
                                } 

                            
                            ?>
                        </nav>
                        
                    </div>
                    <!-- Menu div ends here -->
                </div>
            </header>
            <!-- header div ends here -->