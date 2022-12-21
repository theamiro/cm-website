<?php get_header()?>
    <header class="relative bg-no-repeat bg-cover bg-top h-[480px]"
        style="background-image: url(<?php echo get_field("hero")["background_image"]?>);">
        <div class="container grid grid-cols-1 lg:grid-cols-2">
            <div class="container z-10 mt-[160px]">
                <img class="h-[10px] block mb-4" src="<?php echo get_template_directory_uri() . '/assets/images/primary-squiggly.svg'?>" />
                <h1 class="text-white text-5xl mb-8 font-bold">Let's create magic <br />
                    together!</h1>
                <p class="pb-10 text-white mb-2">
                    That's what painting is all about. It should make you feel good when you paint.
                </p>
            </div>
        </div>
    </header>
    <section class="bg-seashell py-16">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="">
                    <h3 class="text-4xl text-charcoal-800 mb-4 font-bold">What I'm really good at...</h3>
                    <p class="text-lg text-black mb-4">That's what painting is all about. It should make you feel good when you paint.</p>
                    <div class="px-8 grid grid-cols-2 gap-y-8">
                        <div class="text-lg flex items-center gap-4">
                            <img class="h-[16px]" src="<?php echo get_template_directory_uri() . '/assets/images/star-icon.svg'?>"/>
                            <p>Service Name</p>
                        </div>
                        <div class="text-lg flex items-center gap-4">
                            <img class="h-[16px]" src="<?php echo get_template_directory_uri() . '/assets/images/star-icon.svg'?>"/>
                            <p>Service Name</p>
                        </div>
                        <div class="text-lg flex items-center gap-4">
                            <img class="h-[16px]" src="<?php echo get_template_directory_uri() . '/assets/images/star-icon.svg'?>"/>
                            <p>Service Name</p>
                        </div>
                        <div class="text-lg flex items-center gap-4">
                            <img class="h-[16px]" src="<?php echo get_template_directory_uri() . '/assets/images/star-icon.svg'?>"/>
                            <p>Service Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="">
                    <form action="" class="flex flex-col gap-6 w-full">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="">
                                <input type="text" class="w-full rounded bg-gray-100 px-4 py-5" placeholder="Your name">
                                <p class="text-xs text-red-800 pl-4 pt-1">Enter a valid name</p>
                            </div>
                            <div class="">
                                <input type="text" class="w-full rounded bg-gray-100 px-4 py-5"
                                    placeholder="Your email">
                                <p class="text-xs text-red-800 pl-4 pt-1">Enter a valid email</p>
                            </div>
                        </div>
                        <div class="">
                            <input type="text" class="block w-full rounded bg-gray-100 px-4 py-5"
                                placeholder="Company name (optional)">
                            <p class="text-xs text-red-800 pl-4 pt-1">Enter a valid name</p>
                        </div>
                        <div>
                            <textarea rows="3" class="block w-full resize-none [rounded bg-gray-100 px-4 py-5"
                                placeholder="Project description"></textarea>
                            <p class="text-xs text-red-800 pl-4 pt-1">Enter a valid description</p>
                        </div>
                        <div class="my-2">
                            <button type="submit" class="text-charcoal rounded background-gradient px-6 py-4">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>