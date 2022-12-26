    <section class="bg-persian-green text-primary py-16">
        <div class="container">
            <h3 class="text-black text-4xl mb-8 font-bold">Connect</h3>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="col-span-10 lg:col-span-9">
                    <p class="text-black pr-0 lg:pr-40">Let's put some happy little clouds in our world. Get tough with
                        it,
                        get
                        strong. In nature, dead
                        trees are just as normal
                        as live trees. Nice little clouds playing around in the sky.</p>
                </div>
                <div class="col-span-2 lg:col-span-3">
                    <a href="<?php echo site_url("/contact")?>" class="text-charcoal-900 background-gradient px-6 py-4 break-normal rounded">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-charcoal-800 text-white">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 items-center py-16">
                <div class="col-span-2">
                    <?php
                        wp_nav_menu( array(
                            'menu'           => 'Footer',
                            'theme_location' => 'footer-navigation',
                            'menu_class'     => 'h-[120px] max-h-[120px] list-none flex flex-col flex-wrap gap-y-3',
                            'fallback_cb'    => "cm_theme_menu_fallback" 
                        ) );
                    ?>
                </div>
                <div class="col-start-5 items-end justify-end">
                    <div class="mb-4">
                        <img class="h-[69px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/alt-logo.svg'?>" alt="Caroline Mweberi Alternate Logo">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="bg-charcoal-500 w-[48px] h-[48px] rounded-full flex items-center justify-center">
                            <a javascript:void(0) class="">
                                <img class="max-h-[18px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/twitter-logo.svg'?>" alt="Linkedin Logo">
                            </a>
                        </div>
                        <div class="bg-charcoal-500 w-[48px] h-[48px] rounded-full flex items-center justify-center">
                            <a javascript:void(0) class="">
                                <img class="max-h-[22px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linkedin-logo.svg'?>" alt="Linkedin Logo">
                            </a>
                        </div>
                        <div class="bg-charcoal-500 w-[48px] h-[48px] rounded-full flex items-center justify-center">
                            <a javascript:void(0) class="">
                                <img class="max-h-[22px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/facebook-logo.svg'?>" alt="Facebook Logo">
                            </a>
                        </div>
                        <div class="bg-charcoal-500 w-[48px] h-[48px] rounded-full flex items-center justify-center">
                            <a javascript:void(0) class="">
                                <img class="max-h-[24px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/instagram-logo.svg'?>" alt="Instagram Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black py-3">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div>
                        <p class="text-sm text-charcoal-500 font-work-sans mb-1 text-center">
                            Made in 🇰🇪 Copyright <?php echo date("Y")?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>