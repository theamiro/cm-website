<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo get_bloginfo("name")?> - <?php echo get_bloginfo("description")?></title>
    <meta name="description" content="<?php echo get_bloginfo("description")?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="relative overflow-x-hidden overflow-y-hidden <?php if(!is_user_logged_in()): echo 'overflow-hidden'; endif;?>">
    <div class="fixed bg-seashell h-screen w-screen top-0 left-0 z-[99] transition" id="preloader">
        <div class="absolute h-[80px] w-[80px] top-[50%] left-[50%] -m-[40px]">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <?php if(!is_user_logged_in()):?>
    <div class="fixed bg-seashell h-screen w-screen top-0 left-0 z-[99] transition flex flex-col items-center justify-center" id="coming-soon">
        <div class="container">
            <img class="h-[350px] md:h-[300px] mx-auto mb-6 w-full" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/article-01.png'?>" alt="Is this for me image" />
            <h1 class="mb-4 text-6xl text-center font-bold text-charcoal-900">Coming soon</h1>
            <p class="text-lg text-center text-persian-green">The website is still under construction and will be ready soon. Stay tuned.</p>
        </div>
    </div>
    <?php endif;?>
    <div class="fixed bg-charcoal-800 h-screen w-screen top-0 left-0 z-[98] transition py-20 hidden" id="main-menu">
        <div class="container">
            <div class="flex justify-end mb-20">
                <a javascript:void(0) id="close-menu">
                    <img class="h-[32px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/close-icon.svg'?>"/>
                </a>
            </div>
            <?php
                wp_nav_menu( array(
                    'menu'           => 'Main Navigation',
                    'theme_location' => 'top-navigation',
                    'menu_class'     => 'flex flex-col gap-12 text-center',
                    'fallback_cb'    => "cm_theme_menu_fallback" 
                ) );
            ?>
        </div>
    </div>
    <div class="absolute top-[48px] left-0 z-10 w-full">
        <div class="container">
            <div class="flex items-center justify-between">
                <a href="<?php echo get_home_url() ?>">
                    <img class="h-[72px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.svg'?>" alt="Caroline Mweberi Website Logo">
                </a>
                <a href="javascript:void(0)" id="open-main-menu" class="bg-charcoal-900 h-[64px] w-[64px] rounded-full flex items-center justify-center">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hamburger.svg'?>" height="16.67" />
                </a>
            </div>
        </div>
    </div>