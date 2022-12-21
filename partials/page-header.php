<header class="relative bg-no-repeat bg-cover bg-center h-[400px]"
        style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
    <div class="container grid grid-cols-1 lg:grid-cols-2">
        <div class="container z-10 mt-[160px]">
            <img class="h-[10px] block mb-4" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/primary-squiggly.svg'?>" />
            <h1 class="text-white text-4xl mb-8 font-bold"><?php echo $args['title']?></h1>
            <p class="pb-10 text-white mb-2"><?php echo $args['subtitle']?></p>
        </div>
    </div>
</header>