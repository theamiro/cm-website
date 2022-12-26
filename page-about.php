<?php
/**
* Template Name: About Page
*
* @package WordPress
* @subpackage CM_THEME
* @since CM_THEME
*/
    get_header();?>
<header class="relative bg-no-repeat bg-cover bg-top h-[460px]"
        style="background-image: url(<?php echo get_field("hero")["background_image"]?>);">
        <div class="container grid grid-cols-1 lg:grid-cols-2">
            <div class="container z-10 mt-[160px]">
                <img class="h-[10px] block mb-4" src="<?php echo get_template_directory_uri() . '/assets/images/primary-squiggly.svg'?>" />
                <h1 class="text-white text-5xl mb-8 font-bold"><?php echo get_field("hero")["title"]?></h1>
                <p class="pb-10 text-white mb-2 text-lg"><?php echo get_field("hero")["subtitle"]?></p>
            </div>
        </div>
    </header>
    <section class="bg-seashell py-16 relative">
        <div class="container">
            <div class="grid grid-cols-5 items-center">
                <div class="col-span-3 col-start-2">
                    <p class="text-center text-lg text-charcoal-800 px-2 md:px-16"><?php echo get_field("excerpt")["primary_subtitle"]?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-persian-green py-16 z-10">
        <div class="container">
            <div class="grid grid-cols-5 items-center px-2">
                <div class="col-span-3 col-start-2">
                    <p class="text-center text-charcoal-800 text-lg"><?php echo get_field("excerpt")["secondary_subtitle"]?></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pt-16 pb-8">
            <div class="grid grid-cols-1">
                <?php get_template_part("partials/styled-title", "", array("title" => "Listen"))?>
                <div class="podcasts-carousel">
                    <?php
                        $args = array(
                            'post_type' => 'podcast',
                            'posts_per_page' => get_option( 'posts_per_page' ),
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                    <div>
                        <a href="<?php the_permalink()?>" class="hover:bg-seashell transition-colors px-4 py-4 rounded flex items-center gap-4 group max-w-[600px]">
                            <div class="relative rounded-l transition-all group-hover:rounded min-h-[164px] min-w-[164px] bg-no-repeat bg-cover overflow-hidden flex items-center justify-center"
                                style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">
                                <img class="opacity-0 group-hover:opacity-100 transition-all delay-75 h-[48px]"
                                    src="<?php echo get_template_directory_uri() . '/assets/images/play-circle.svg'?>" alt="Play Podcast button">
                            </div>
                            <div>
                                <h3 class="text-2xl mb-4"><?php the_title(); ?></h3>
                                <p class="mb-4 text-sm"><?php echo substr(get_the_excerpt(), 0, 80) . "..."?></p>
                                <p class="text-xs"><?php the_time("M d, Y")?><span class="mx-3 text-persian-green">•</span>15 min 22 sec
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php
                        endwhile;
                         wp_reset_postdata(); 
                    ?>
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
                <div class="articles-carousel">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => get_option( 'posts_per_page' ),
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                    <a href="<?php echo the_permalink(); ?>"
                            class="hover:bg-seashell transition-colors px-4 pt-4 pb-6 rounded flex flex-col items-start gap-4 max-w-[600px] group">
                        <div class="rounded-t group-hover:rounded transition-all h-[120px] w-full bg-no-repeat bg-cover"
                            style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);"></div>
                        <div class="px-4">
                            <h3 class="text-2xl mb-4 group-hover:underline transition-all"><?php the_title(); ?></h3>
                            <p class="mb-4 text-sm"><?php echo substr(get_the_excerpt(), 0, 200) . "..."; ?></p>
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