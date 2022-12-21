<?php get_header()?>
<header class="relative bg-no-repeat bg-cover bg-top h-[640px]"
        style="background-image: url(<?php echo get_field("hero")["background_image"] ?>);">
    <div class="container grid grid-cols-1 lg:grid-cols-2">
        <div class="container z-10 mt-[160px]">
            <img class="h-[10px] block mb-4" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/primary-squiggly.svg"?>" />
            <h1 class="text-white text-5xl mb-8 font-bold"><?php echo get_field("hero")["title"]?></h1>
            <p class="pb-10 text-white mb-2"><?php echo get_field("hero")["subtitle"]?></p>
            <a href="<?php echo get_field("hero")["destination"]?>" class="text-charcoal rounded background-gradient px-6 py-4">
                <?php echo get_field("hero")["call_to_action_title"]?>
            </a>
        </div>
    </div>
</header>
<section class="bg-persian-green py-16">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-8 items-center">
            <div class="col-span-2">
                <img class="h-[400px] w-auto" src="<?php if(get_field("excerpt")["section_image"] != null): echo get_field("excerpt")["section_image"]; else: echo get_stylesheet_directory_uri() . '/assets/images/call-to-action.png'; endif;?>" alt="Is this for me image" />
            </div>
            <div class="col-span-4">
                <h3 class="text-charcoal-900 text-4xl mb-2 font-bold"><?php echo get_field("excerpt")["primary_title"]?></h3>
                <p class="text-black mb-8"><?php echo get_field("excerpt")["primary_subtitle"]?></p>

                <h3 class="text-charcoal-900 text-4xl mb-2 font-bold"><?php echo get_field("excerpt")["secondary_title"]?></h3>
                <p class="text-black mb-8"><?php echo get_field("excerpt")["secondary_subtitle"]?></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-16">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-10 items-center">
            <div class="col-span-2">
                <h3 class="text-5xl text-persian-green mb-4 font-bold"><?php echo get_field("projects")["title"]?></h3>
                <img class="h-[8px] block mb-6" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/golden-squiggly.svg' ?>"
                    alt="Golden Squiggly Line">
                <p><?php echo get_field("projects")["subtitle"]?></p>
            </div>
            <div class="col-span-4 overflow-hidden">
                <div class="projects-carousel owl-theme">
                    <div class="item relative project-item bg-no-repeat bg-cover overflow-hidden rounded h-[360px] w-[300px] px-5 py-8 mr-20 flex flex-col justify-end"
                        style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/images/projects/project-01.png'?>) ">
                        <div class="z-10">
                            <p class="text-white">01.</p>
                            <p class="text-white text-xl mb-3">Positioning and Scaling a Money Transfer Wallet for
                                Cross
                                Border
                                Traders
                                and Refugees in
                                Easter...</p>
                            <div class="flex gap-4">
                                <span class="bg-persian-green px-2 py-1 text-xs rounded-lg">Service 1</span>
                                <span class="background-gradient px-2 py-1 text-xs rounded-lg">Service 2</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item relative project-item bg-no-repeat bg-cover overflow-hidden rounded h-[360px] w-[300px] px-5 py-8 flex flex-col justify-end"
                        style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/images/projects/project-02.png'?>) ">
                        <div class="z-10">
                            <p class="text-white">02.</p>
                            <p class="text-white text-xl mb-3">Positioning and Scaling a Money Transfer Wallet for
                                Cross
                                Border
                                Traders
                                and Refugees in
                                Easter...</p>
                            <div class="flex gap-4">
                                <span class="bg-persian-green px-2 py-1 text-xs rounded-lg">Service 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="item relative project-item bg-no-repeat bg-cover overflow-hidden rounded h-[360px] w-[300px] px-5 py-5 flex flex-col justify-end"
                        style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/images/projects/project-02.png'?>) ">
                        <div class="z-10">
                            <p class="text-white">03.</p>
                            <p class="text-white text-xl mb-3">Positioning and Scaling a Money Transfer Wallet for
                                Cross
                                Border
                                Traders
                                and Refugees in
                                Easter...</p>
                            <div class="flex gap-4">
                                <span class="bg-persian-green px-2 py-1 text-xs rounded-lg">Service 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="item relative project-item bg-no-repeat bg-cover overflow-hidden rounded h-[360px] w-[300px] px-5 py-5 flex flex-col justify-end"
                        style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/images/projects/project-02.png'?>) ">
                        <div class="z-10">
                            <p class="text-white">04.</p>
                            <p class="text-white text-xl mb-3">Positioning and Scaling a Money Transfer Wallet for
                                Cross
                                Border
                                Traders
                                and Refugees in
                                Easter...</p>
                            <div class="flex gap-4">
                                <span class="bg-persian-green px-2 py-1 text-xs rounded-lg">Service 1</span>
                                <span class="background-gradient px-2 py-1 text-xs rounded-lg">Service 2</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-seashell py-16">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-7 mb-8">
            <div class="col-span-3 col-start-3">
                <h3 class="text-center text-5xl text-charcoal-900 mb-4 font-bold"><?php echo get_field("services")["title"]?></h3>
                <img class="h-[8px] block mx-auto mb-4" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/golden-squiggly.svg'?>" alt="">
                <p class="text-center"><?php echo get_field("projects")["subtitle"]?></p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <div class="col-md-3">
                <div class="flex flex-col items-center gap-3">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-[156px] w-[156px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/service-01.png'?>" alt="" />
                    </div>
                    <h5 class="text-lg">Service Name</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="flex flex-col items-center gap-3">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-[156px] w-[156px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/service-02.png'?>" alt="" />
                    </div>
                    <h5 class="text-lg">Service Name</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="flex flex-col items-center gap-3">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-[156px] w-[156px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/service-03.png'?>" alt="" />
                    </div>
                    <h5 class="text-lg">Service Name</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="flex flex-col items-center gap-3">
                    <div class="overflow-hidden rounded-lg">
                        <img class="h-[156px] w-[156px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/service-04.png'?>" alt="" />
                    </div>
                    <h5 class="text-lg">Service Name</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer()?>