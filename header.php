<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<title>Alternate Technology </title>

    <meta name="google-site-verification" content="wktY98ZvoqEe9J5kGaADAJAqh-sb_Hm9JG2dJZpe-TY" />
<meta property="og:url" content="http://www.altertechno.com/"/>
<meta property="og:title" content="Alternate Technology"/>
<meta property="og:description" content="As technology executives well know, running software, hardware and technology service businesses across international boundaries requires long-term vision and adaptability. We have worked with international clients in all technology based sector from computer software and hardware, semiconductors, IT services, storage, components to peripherals sectors. Alternate Technology cross-sector technology expertise and global insights help technology companies compete and thrive in an industry where innovation is both an opportunity and a threat." />
    <meta name="description" content="As technology executives well know, running software, hardware and technology service businesses across international boundaries requires long-term vision and adaptability. We have worked with international clients in all technology based sector from computer software and hardware, semiconductors, IT services, storage, components to peripherals sectors. Alternate Technology cross-sector technology expertise and global insights help technology companies compete and thrive in an industry where innovation is both an opportunity and a threat." />
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    
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
                            <img title="" alt="" src="http://res.cloudinary.com/altertechno/image/upload/v1500949430/Logo_ii_kqn0lm.png" style = "width:auto; height:64px;">
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
                            
                            // wp_nav_menu( array( 'theme_location' => 'main-menu' ) );

                            // wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
                            
                            if($after_base_url_string == '')
                                {
                                    wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
                                    // echo "<script>alert('this is empty " . $after_base_url . "');</script>";
                                    
                                } 

                            else
                                {
                                    // echo "<a href = 'http://localhost/alt_tech_v2'>Test</a>";
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