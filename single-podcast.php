<?php get_header()?>
<header class="relative bg-no-repeat bg-cover bg-top h-[160px]"
        style="background-image: url(<?php if(has_post_thumbnail(get_the_ID())) : echo get_the_post_thumbnail_url(get_the_ID(),'full'); else: echo get_stylesheet_directory_uri() . '/assets/images/hero-image.png'; endif;?>);">
    </header>
<section class="bg-white pt-16 pb-8">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <div class="col-span-3">
                <a href="<?php echo esc_url(site_url('/podcast'));?>" class="text-charcoal-800 mb-4 flex items-center gap-2">
                    <img class="h-[11px]" src="<?php echo get_template_directory_uri() . '/assets/images/back-icon.svg'?>" alt="Back Icon">
                    Back to Podcasts</a>
                <h1 class="text-6xl text-black font-bold mb-4">
                    <?php the_title()?>
                </h1>
                <p class="text-black text-xl mb-4">
                    <?php the_excerpt()?>
                </p>
            </div>
            <div class="col-span-2 flex justify-end">
                <div class="flex flex-col items-end">
                    <img class="h-[300px]" src="<?php echo get_template_directory_uri() . '/assets/images/learn-image.png'?>" alt="Learn Image">
                    <a class="text-charcoal-900 text-xl flex items-center gap-4" href="#" id="share-modal-open"
                        data-modal-toggle="popup-modal">
                        <img class="h-[20px]" src="<?php echo get_template_directory_uri() . '/assets/images/share-icon.svg'?>" alt="Back Icon">
                        Share
                        this
                        Podcast</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-16">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-4">
            <div class="col-span-1 md:col-span-3 article-content">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer()?>