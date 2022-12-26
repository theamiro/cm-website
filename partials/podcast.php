<a javascript:void(0) class="hover:bg-seashell transition-colors px-4 py-4 rounded flex items-center gap-4 group w-[600px]">
    <div class="relative rounded-l transition-all group-hover:rounded min-h-[164px] min-w-[164px] bg-no-repeat bg-cover overflow-hidden flex items-center justify-center"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/podcast-01.png'?>);">
        <img class="opacity-0 group-hover:opacity-100 transition-all delay-75 h-[48px] h-[48px]"
            src="<?php echo get_template_directory_uri() . '/assets/images/play-circle.svg'?>" alt="Play Podcast button">
    </div>
    <div>
        <h3 class="text-2xl mb-4"><?php echo $args["title"]?></h3>
        <p class="mb-4 text-sm">You're the greatest thing that has ever been or ever will be. You're
            special. You're so
            very special...</p>
        <p class="text-xs">Aug 31, 2021<span class="mx-3 text-persian-green">•</span>15 min 22 sec
        </p>
    </div>
</a>