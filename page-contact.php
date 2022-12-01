<?php get_header()?>
    <header class="relative bg-no-repeat bg-cover bg-center h-[480px]"
        style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/hero-image.png'?>);">
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
    <section class="bg-persian-green py-16">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-6 gap-8 items-center">
                <div class="col-span-2">
                    <img class="h-[400px] w-auto" src="<?php echo get_template_directory_uri() . '/assets/images/call-to-action.png'?>" alt="Is this for me image" />
                </div>
                <div class="col-span-4">
                    <h3 class="text-charcoal-900 text-4xl mb-2 font-bold">Is this for me?</h3>
                    <p class="text-black mb-8">Let's put some happy little clouds in our world. Get tough with it, get
                        strong. In nature, dead
                        trees are just as normal
                        as live trees. Nice little clouds playing around in the sky.</p>

                    <h3 class="text-charcoal-900 text-4xl mb-2 font-bold">Does it work?</h3>
                    <p class="text-black mb-8">Let's put some happy little clouds in our world. Get tough with it, get
                        strong. In nature, dead
                        trees are just as normal
                        as live trees. Nice little clouds playing around in the sky.</p>
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
                            <input type="text" class="block w-[75%] rounded bg-gray-100 px-4 py-5"
                                placeholder="Company name (optional)">
                            <p class="text-xs text-red-800 pl-4 pt-1">Enter a valid name</p>
                        </div>
                        <div>
                            <textarea rows="3" class="block w-[75%] resize-none [rounded bg-gray-100 px-4 py-5"
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