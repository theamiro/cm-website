<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo get_bloginfo("name")?> - <?php echo get_bloginfo("description")?></title>
    <meta name="description" content="<?php echo get_bloginfo("description")?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style type="text/tailwindcss">
        @layer utilities {
            * {
                box-sizing: border-box;
            }
            .background-gradient {
                background: linear-gradient(90deg, #edc474 0%, #cb9d52 60.94%, #b6853c 100%);
            }
            h1, h3 {
                font-family: "Judson", serif !important;
            }

            body {
                font-family: "Inder", sans-serif;
                line-height: 1.61rem;
            }
            .container {
                @apply max-w-6xl mx-auto;
            }
            header:before {
                content: "";
                position: absolute;
                height: 100%;
                width: 100%;
                top:0;
                left: 0;
                background: linear-gradient(90deg, #101611 24.69%, rgba(16, 22, 17, 0) 64.55%);
            }
            .project-item:before {
                position: absolute;
                content: "";
                height: 100%;
                width: 100%;
                top:0;
                left: 0;
                background: linear-gradient(0deg, #101E23 -2.62%, rgba(16, 30, 35, 0) 87.97%);
            }
            .carousel-item {
                margin-left: 10px;
            }
                .carousel-item:first-child {
                margin-left: 0;
            }
        }
    </style>
    <script type="text/javascript">
        jQuery(window).on("load", function () {
            jQuery("body").removeClass("overflow-y-hidden")
            jQuery("#preloader").addClass("opacity-0").addClass("hidden")
        })
        jQuery("#close-menu").on("click", function() {
            jQuery("#main-menu").addClass("opacity-0").addClass("hidden")
        })
        jQuery("#open-main-menu").on("click", function() {
            jQuery("#main-menu").removeClass("hidden").removeClass("opacity-0")
        })
    </script>
</head>

<body class="relative overflow-x-hidden overflow-y-hidden">
    <div class="fixed bg-seashell h-screen w-screen top-0 left-0 z-[99] transition" id="preloader">
        <div class="absolute h-[80px] w-[80px] top-[50%] left-[50%] -m-[40px] -m-[40px]">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
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