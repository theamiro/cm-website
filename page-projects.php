<?php get_header()?>
<header class="relative bg-no-repeat bg-cover bg-top h-[400px]"
        style="background-image: url(<?php echo get_field("hero")["background_image"]?>);">
        <div class="container grid grid-cols-1 lg:grid-cols-2">
            <div class="container z-10 mt-[160px]">
                <img class="h-[10px] block mb-4" src="<?php echo get_template_directory_uri() . '/assets/images/primary-squiggly.svg'?>" />
                <h1 class="text-white text-4xl mb-8 font-bold"><?php echo get_field("hero")["title"]?></h1>
                <p class="pb-10 text-white mb-2"><?php echo get_field("hero")["subtitle"]?></p>
            </div>
        </div>
    </header>
    <section>
        <div class="container py-16">
            <div class="mb-12 flex wrap gap-4 items-center justify-center">
                <a class="rounded-md text-white bg-persian-green px-3 py-2 min-w-[60px] text-center" href="#">All</a>
                <?php
                    $categories = get_categories();
                    foreach($categories as $category):
                        printf( '<a class="rounded-md text-white bg-charcoal-900 px-4 py-2 text-center" href="#">%1$s</a>',
                            esc_html( $category->name )
                        );
                    endforeach;
                ?>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <?php
                        $args = array(
                            'post_type' => 'projects',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query($args);
                        $index = 1;
                        while ($query->have_posts()) :
                            $query->the_post();

                    ?>
                    <a href="<?php the_permalink(); ?>" class="relative project-item bg-no-repeat bg-cover overflow-hidden rounded h-[360px] w-full px-5 py-8 mr-20 flex flex-col justify-end"
                        style="background-image: url(<?php if(has_post_thumbnail(get_the_ID())) : echo get_the_post_thumbnail_url(get_the_ID(),'full'); else: echo get_stylesheet_directory_uri() . '/assets/images/projects/project-01.png'; endif;?>) ">
                        <div class="z-10">
                            <p class="text-white"><?php echo str_pad($index,2,'0', STR_PAD_LEFT) ?>.</p>
                            <p class="text-white text-xl mb-3"><?php echo substr(get_the_title(), 0, 80) . '...'?></p>
                            <div class="flex gap-4">
                                <?php 
                                    $post_categories = wp_get_post_categories(get_the_ID());
                                    $categories = array();
                                    foreach($post_categories as $post_category):
                                        $category = get_category($post_category);
                                ?>
                                    <span class="<?php if(end($post_categories) != $post_category): echo 'background-gradient'; else: echo 'bg-persian-green'; endif; ?> px-2 py-1 text-xs rounded-lg"><?php echo $category->name ?></span>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </a>
                    <?php
                        $index++;
                        endwhile;
                         wp_reset_postdata(); 
                    ?>
            </div>
            <div class="flex justify-center items-center mt-12">
                    <a href="#" class="text-xl text-center text-charcoal-900">
                        View More Projects
                        <img class="h-[32px] w-[32px] mx-auto mt-6" src="<?php echo get_template_directory_uri() . '/assets/images/arrow-down.svg'?>"
                            alt="arrow Down" />
                    </a>
                </div>
        </div>
    </section>
<?php get_footer()?>