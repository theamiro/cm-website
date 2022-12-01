<?php get_header()?>
<header class="relative bg-no-repeat bg-cover bg-center h-[460px]"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/about-header.png'?>);">
        <div class="container grid grid-cols-1 lg:grid-cols-2">
            <div class="container z-10 mt-[160px]">
                <img class="h-[10px] block mb-4" src="<?php echo get_template_directory_uri() . '/assets/images/primary-squiggly.svg'?>" />
                <h1 class="text-white text-5xl mb-8 font-bold">Communication & Brand Management Professional</h1>
                <p class="pb-10 text-white mb-2 text-xl">That's what painting is all about. It should make you feel good
                    when
                    you paint.</p>
            </div>
        </div>
    </header>
    <section class="bg-seashell py-16 relative">
        <div class="container">
            <div class="grid grid-cols-2 items-center">
                <div>
                    <p class="text-center text-lg text-charcoal-800 px-2 md:px-16">Let's put some happy little clouds in
                        our
                        world.
                        Get
                        tough with it, get
                        strong.
                        In nature, dead trees
                        are just as normal
                        as live trees. Nice little clouds playing around in the sky.</p>
                </div>
                <div class="absolute right-60 bottom-0">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/about-cutout.png'?>" alt="About Cutout Image">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-persian-green py-16 z-10">
        <div class="container">
            <div class="grid grid-cols-1 items-center px-2 md:px-40">
                <p class="text-center text-charcoal-800">Let's put some happy little clouds in our world. Get
                    tough with it, get
                    strong.
                    In nature, dead trees
                    are just as normal
                    as live trees. Nice little clouds playing around in the sky. Get tough with it, get strong. In
                    nature, dead trees.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt-16 pb-8">
            <div class="grid grid-cols-1 lg:grid-cols-7 mb-8">
                <div class="col-span-3 col-start-3">
                    <h3 class="text-center text-5xl text-charcoal-900 mb-4 font-bold">Learn</h3>
                    <img class="h-[8px] block mx-auto mb-4" src="./assets/images/golden-squiggly.svg" alt="">
                    <p class="text-center">Let's put some happy little clouds in our world. Get tough with it, get
                        strong. In nature, dead
                        trees are just as normal
                        as live trees. Nice little clouds playing around in the sky.</p>
                </div>
            </div>
            <?php get_template_part("partials/styled-title", "", array("title" => "Listen")) ?>
            <div class="mb-10">
                <a href="#"
                    class="hover:bg-seashell transition-colors px-4 py-4 rounded flex items-center gap-4 group w-[560px]">
                    <div class="relative rounded-l transition-all group-hover:rounded min-h-[164px] min-w-[164px] bg-no-repeat bg-cover overflow-hidden flex items-center justify-center"
                        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/podcast-01.png'?>);">
                        <img class="opacity-0 group-hover:opacity-100 transition-all delay-75 h-[48px] h-[48px]"
                            src="<?php echo get_template_directory_uri() . '/assets/images/play-circle.svg'?>" alt="Play Podcast button">
                    </div>
                    <div>
                        <h3 class="text-2xl mb-4">Episode 24: What have we learnt along the journey</h3>
                        <p class="mb-4 text-sm">You're the greatest thing that has ever been or ever will be. You're
                            special. You're so
                            very special...</p>
                        <p class="text-xs">Aug 31, 2021<span class="mx-3 text-persian-green">•</span>15 min 22 sec
                        </p>
                    </div>
                </a>
            </div>
            <?php get_template_part("partials/styled-title", "", array("title" => "Read")) ?>
            <div>
                <div>
                    <a href="article.html"
                        class="hover:bg-seashell transition-colors px-4 pt-4 pb-6 rounded flex flex-col items-center gap-4 group w-[560px]">
                        <div class="rounded-t group-hover:rounded transition-all h-[120px] w-full bg-no-repeat bg-cover"
                            style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/article-01.png'?>);"></div>
                        <div class="px-4">
                            <h3 class="text-2xl mb-4 group-hover:underline transition-all">What have we learnt along
                                the journey to
                                oblivion and
                                recognition?</h3>
                            <p class="mb-4 text-sm">You're the greatest thing that has ever been or ever will be.
                                You're
                                special. You're so
                                very special...</p>
                            <p class="text-xs">Aug 31, 2021<span class="mx-3 text-persian-green">•</span>10 min
                                read</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>