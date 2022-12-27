<?php get_header()?>
<header class="relative bg-no-repeat bg-cover bg-top h-[240px]"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/hero-image.png'?>);">
    </header>
<section class="bg-white pt-6 pb-8 with-upward-clip">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <div class="col-span-3">
                <a href="<?php echo esc_url(get_post_type_archive_link('post'));?>" class="text-charcoal-800 mb-4 flex items-center gap-2">
                    <img class="h-[11px]" src="<?php echo get_template_directory_uri() . '/assets/images/back-icon.svg'?>" alt="Back Icon">
                    Back to Articles</a>
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
                    <a href="javascript:void(0)" class="text-charcoal-900 text-xl flex items-center gap-4 cursor-pointer" id="share-modal-open"
                        data-modal-toggle="popup-modal">
                        <img class="h-[20px]" src="<?php echo get_template_directory_uri() . '/assets/images/share-icon.svg'?>" alt="Back Icon">
                        Share
                        this
                        Article</a>
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