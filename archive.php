<?php get_header()?>
<header class="relative bg-no-repeat bg-cover bg-center h-[400px]"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/hero-image.png'?>);">
        <div class="container grid grid-cols-1 lg:grid-cols-2">
            <div class="container z-10 mt-[160px]">
                <img class="h-[10px] block mb-4" src="<?php echo get_template_directory_uri() . '/assets/images/primary-squiggly.svg'?>" />
                <h1 class="text-white text-4xl mb-8 font-bold"><?php the_title() ?></h1>
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
                    <p class="text-earth-yellow mb-2 uppercase">FEATURED ARTICLES</p>
                    <?php
                        $stickies = get_option( 'sticky_posts' );
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'post__in' => $stickies
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                    <div class="item">
                        <h3 class="text-3xl text-black font-bold mb-4">
                            What have we learnt on the journey to oblivion and recognition?
                        </h3>
                        <p class="text-black text-lg mb-4">
                            Massa sit pulvinar viverra blandit feugiat sed fermentum, ultrices. Sed senectus pellentesque
                            sit sollicitudin sapien
                            phasellus vel duis quam.
                        </p>
                        <a href="<?php the_permalink() ?>" class="text-charcoal-900 text-lg flex gap-2 items-center">
                            Read Article
                            <i class="mr-2">
                                <img class="h-[20px] w-[20px]" src="<?php echo get_template_directory_uri() . '/assets/images/arrow-circle-right.svg'?>" />
                            </i>
                        </a>
                    </div>  
                    <?php endwhile;?>
                        <nav class="flex gap-7 my-8">
                            <?php foreach($query->posts as $post):?>
                                <div class="block h-[5px] w-[91px] rounded bg-earth-yellow"></div>
                            <?php endforeach; ?>
                        </nav>
                    <?php wp_reset_postdata();?>  
                </div>
                <div class="flex justify-end">
                    <img class="h-[300px]" src="<?php echo get_template_directory_uri() . '/assets/images/learn-image.png'?>" alt="Learn Image">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-16">
            <div class="grid grid-cols-1">
                <?php get_template_part("partials/styled-title", "", array("title" => "Read")) ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                    <div>
                        <a href="<?php the_permalink() ?>"
                            class="hover:bg-seashell transition-colors px-4 pt-4 pb-6 rounded flex flex-col items-start gap-4 group">
                            <div class="rounded-t group-hover:rounded transition-all h-[120px] w-full bg-no-repeat bg-cover"
                                style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
                            <div class="px-4">
                                <h3 class="text-2xl mb-4 group-hover:underline transition-all"><?php the_title() ?></h3>
                                <p class="mb-4 text-sm"><?php the_excerpt() ?></p>
                                <p class="text-xs"><?php the_time("M d, Y") ?><span class="mx-3 text-persian-green">???</span>10 min read</p>
                            </div>
                        </a>
                    </div>
                    <?php
                        endwhile;
                         wp_reset_postdata(); 
                    ?>
                </div>
                <div class="flex justify-center items-center mt-12">
                    <a javascript:void(0) class="text-xl text-center text-charcoal-900">
                        View More Articles
                        <img class="h-[32px] w-[32px] mx-auto mt-6" src="<?php echo get_template_directory_uri() . '/assets/images/arrow-down.svg'?>"
                            alt="arrow Down" />
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>