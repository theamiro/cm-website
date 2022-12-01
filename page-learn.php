<?php get_header()?>
<header class="relative bg-no-repeat bg-cover bg-center h-[400px]"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/hero-image.png'?>);">
        <div class="container grid grid-cols-1 lg:grid-cols-2">
            <div class="container z-10 mt-[160px]">
                <img class="h-[10px] block mb-4" src="<?php echo get_template_directory_uri() . '/assets/images/primary-squiggly.svg'?>" />
                <h1 class="text-white text-4xl mb-8 font-bold"><?php the_title(); ?></h1>
                <p class="pb-10 text-white mb-2">
                    This is probably the greatest thing to happen in my life - to be able
                    to share this with you. Talk to trees, look at the
                    birds. Whatever it takes.
                </p>
            </div>
        </div>
    </header>
    <section class="bg-seashell py-16">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="">
                    <p class="text-earth-yellow mb-2">ARTICLE</p>
                    <h3 class="text-3xl text-black font-bold mb-4">
                        What have we learnt on the journey to oblivion and recognition?
                    </h3>
                    <p class="text-black text-lg mb-4">
                        Massa sit pulvinar viverra blandit feugiat sed fermentum, ultrices. Sed senectus pellentesque
                        sit sollicitudin sapien
                        phasellus vel duis quam.
                    </p>
                    <a href="#" class="text-charcoal-900 text-lg flex gap-2 items-center">
                        Read Article
                        <i class="mr-2">
                            <img class="h-[20px] w-[20px]" src="<?php echo get_template_directory_uri() . '/assets/images/arrow-circle-right.svg'?>" />
                        </i>
                    </a>
                    <nav class="flex gap-7 my-8">
                        <div class="block h-[5px] w-[91px] bg-earth-yellow rounded"></div>
                        <div class="block h-[5px] w-[91px] bg-silver rounded"></div>
                        <div class="block h-[5px] w-[91px] bg-silver rounded"></div>
                        <div class="block h-[5px] w-[91px] bg-silver rounded"></div>
                    </nav>
                </div>
                <div class="flex justify-end">
                    <img class="h-[300px]" src="<?php echo get_template_directory_uri() . '/assets/images/learn-image.png'?>" alt="Learn Image">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt-16 pb-8">
            <div class="grid grid-cols-1">
                <?php get_template_part("partials/styled-title", "", array("title" => "Listen"))?>
                <div class="podcasts-carousel">
                    <?php get_template_part("partials/podcast", "", array("title" => "What have we learnt along the journey to oblivion and recognition?"))?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-8">
            <div class="grid grid-cols-1">
                <?php get_template_part("partials/styled-title", "", array("title" => "Read")) ?>
            </div>
            <div class="grid grid-cols-1">
                <div class="articles-carousel owl-theme">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                    <a href="<?php echo the_permalink(); ?>"
                            class="hover:bg-seashell transition-colors px-4 pt-4 pb-6 rounded flex flex-col items-center gap-4 max-w-[600px] group">
                        <div class="rounded-t group-hover:rounded transition-all h-[120px] w-full bg-no-repeat bg-cover"
                            style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
                        <div class="px-4">
                            <h3 class="text-2xl mb-4 group-hover:underline transition-all"><?php the_title(); ?></h3>
                            <p class="mb-4 text-sm"><?php the_excerpt(); ?></p>
                            <p class="text-xs"><?php the_time("M d, Y")?><span class="mx-3 text-persian-green">•</span>10 min
                                read</p>
                        </div>
                    </a>
                    <?php
                        endwhile;
                         wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>