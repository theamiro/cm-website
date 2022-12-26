<div class="hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="share-modal">
    <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white p-8 sm:p-6">
                    <div class="flex items-center justify-between">
                        <h4>Share with</h4>
                        <a class="p-2" href="javascript:void(0)" id="share-modal-close">
                            <img class="h-[14px] w-[14px]" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/close-icon.svg';?>"
                                alt="Close Modal Icon">
                        </a>
                    </div>
                    <div class="flex justify-between items-center gap-4 my-8">
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank" class="group cursor-pointer">
                            <div
                                class="rounded-2xl bg-black bg-opacity-5 group-hover:bg-persian-green transition-colors group-hover:bg-opacity-10 h-[72px] w-[72px] flex items-center justify-center">
                                <svg class="fill-black group-hover:fill-persian-green transition-colors" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2234 0H1.77187C0.792187 0 0 0.773438 0 1.72969V22.2656C0 23.2219 0.792187 24 1.77187 24H22.2234C23.2031 24 24 23.2219 24 22.2703V1.72969C24 0.773438 23.2031 0 22.2234 0ZM7.12031 20.4516H3.55781V8.99531H7.12031V20.4516ZM5.33906 7.43438C4.19531 7.43438 3.27188 6.51094 3.27188 5.37187C3.27188 4.23281 4.19531 3.30937 5.33906 3.30937C6.47813 3.30937 7.40156 4.23281 7.40156 5.37187C7.40156 6.50625 6.47813 7.43438 5.33906 7.43438ZM20.4516 20.4516H16.8937V14.8828C16.8937 13.5562 16.8703 11.8453 15.0422 11.8453C13.1906 11.8453 12.9094 13.2937 12.9094 14.7891V20.4516H9.35625V8.99531H12.7687V10.5609H12.8156C13.2891 9.66094 14.4516 8.70938 16.1813 8.70938C19.7859 8.70938 20.4516 11.0813 20.4516 14.1656V20.4516Z" />
                                </svg>

                            </div>
                            <p
                                class="my-1 font-light text-black group-hover:text-persian-green text-center text-sm">
                                LinkedIn</p>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" class="group cursor-pointer">
                            <div
                                class="rounded-2xl bg-black bg-opacity-5 group-hover:bg-persian-green transition-colors group-hover:bg-opacity-10 h-[72px] w-[72px] flex items-center justify-center">
                                
                                <svg class="fill-black group-hover:fill-persian-green transition-colors" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" />
                                </svg>

                            </div>
                            <p
                                class="my-1 font-light text-black group-hover:text-persian-green text-center text-sm">
                                Facebook</p>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" target="_blank" class="group cursor-pointer">
                            <div
                                class="rounded-2xl bg-black bg-opacity-5 group-hover:bg-persian-green transition-colors group-hover:bg-opacity-10 h-[72px] w-[72px] flex items-center justify-center">
                                <svg class="fill-black group-hover:fill-persian-green transition-colors" width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.55016 19.75C16.6045 19.75 21.5583 12.2467 21.5583 5.74186C21.5583 5.53092 21.5536 5.3153 21.5442 5.10436C22.5079 4.40746 23.3395 3.54425 24 2.5553C23.1025 2.9546 22.1496 3.21538 21.1739 3.32874C22.2013 2.71291 22.9705 1.74547 23.3391 0.605767C22.3726 1.17856 21.3156 1.58261 20.2134 1.80061C19.4708 1.01156 18.489 0.489116 17.4197 0.314051C16.3504 0.138986 15.2532 0.32105 14.2977 0.832096C13.3423 1.34314 12.5818 2.15471 12.1338 3.14131C11.6859 4.12792 11.5754 5.23461 11.8195 6.2903C9.86249 6.19209 7.94794 5.6837 6.19998 4.7981C4.45203 3.91249 2.90969 2.66944 1.67297 1.14952C1.0444 2.23324 0.852057 3.51564 1.13503 4.73609C1.418 5.95654 2.15506 7.02345 3.19641 7.71999C2.41463 7.69516 1.64998 7.48468 0.965625 7.10592V7.16686C0.964925 8.30415 1.3581 9.40659 2.07831 10.2868C2.79852 11.167 3.80132 11.7706 4.91625 11.995C4.19206 12.1931 3.43198 12.222 2.69484 12.0794C3.00945 13.0574 3.62157 13.9129 4.44577 14.5263C5.26997 15.1398 6.26512 15.4806 7.29234 15.5012C5.54842 16.8711 3.39417 17.6141 1.17656 17.6106C0.783287 17.61 0.390399 17.5859 0 17.5384C2.25286 18.9837 4.87353 19.7514 7.55016 19.75Z" />
                                </svg>

                            </div>
                            <p
                                class="my-1 font-light text-black group-hover:text-persian-green text-center text-sm">
                                Twitter
                            </p>
                        </a>
                        <a href="whatsapp://send?text=<?php the_permalink();?>" data-action="share/whatsapp/share" target="_blank" class="group cursor-pointer">
                            <div
                                class="rounded-2xl bg-black bg-opacity-5 group-hover:bg-persian-green transition-colors group-hover:bg-opacity-10 h-[72px] w-[72px] flex items-center justify-center">
                                <svg class="fill-black group-hover:fill-persian-green transition-colors" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.07239 21.0389L5.47046 21.2778C7.15124 22.2715 9.07845 22.7934 11.0436 22.7997H11.0499C17.0843 22.7997 22.0002 17.9134 22.0002 11.9014C22.0002 8.98976 20.8628 6.25418 18.7966 4.19149C16.7304 2.1288 13.9754 0.996841 11.0499 0.996841C5.01552 0.990552 0.0995609 5.87686 0.0995609 11.8888C0.0995609 13.9452 0.674564 15.9513 1.77402 17.687L2.03309 18.1021L0.927312 22.1205L5.07239 21.0389ZM7.39617 6.405C7.60826 6.4107 7.84328 6.42211 8.06683 6.91844C8.21007 7.23765 8.44804 7.8178 8.64749 8.30406C8.8152 8.71292 8.95568 9.0554 8.98972 9.12055C9.06423 9.26888 9.11009 9.44002 9.01264 9.6397C9.00113 9.66328 8.99026 9.68584 8.97979 9.70755C8.90165 9.86966 8.846 9.9851 8.71457 10.136C8.66078 10.1978 8.60474 10.2655 8.54889 10.333C8.45001 10.4525 8.35171 10.5713 8.26746 10.6552C8.11842 10.8035 7.96365 10.9632 8.13562 11.2599C8.30758 11.5566 8.90946 12.5321 9.79795 13.3194C10.7531 14.1697 11.5837 14.528 12.0036 14.7092C12.0852 14.7443 12.1513 14.7728 12.1997 14.797C12.4978 14.9453 12.6755 14.9225 12.8475 14.7228C13.0194 14.5231 13.5927 13.8556 13.7933 13.559C13.9882 13.2623 14.1888 13.3137 14.4639 13.4107C14.7391 13.5134 16.2065 14.2322 16.5046 14.3805C16.5633 14.4097 16.6183 14.4361 16.6692 14.4605C16.8768 14.5601 17.018 14.6277 17.0778 14.7285C17.1523 14.854 17.1523 15.4473 16.9059 16.1433C16.6536 16.8393 15.4327 17.5068 14.8881 17.5582C14.836 17.5631 14.7842 17.5693 14.7309 17.5758C14.2265 17.6368 13.5864 17.7142 11.3055 16.8165C8.49542 15.7116 6.64034 12.9702 6.26492 12.4154C6.23523 12.3716 6.2148 12.3414 6.20388 12.3267L6.19753 12.3182C6.02688 12.0899 4.98292 10.6931 4.98292 9.25176C4.98292 7.87296 5.66221 7.1551 5.972 6.82771C5.99163 6.80697 6.00978 6.78779 6.02618 6.77011C6.30132 6.47345 6.62232 6.39929 6.82295 6.39929C7.02358 6.39929 7.2242 6.39929 7.39617 6.405Z" />
                                    </svg>
                            </div>
                            <p
                                class="my-1 font-light text-black group-hover:text-persian-green text-center text-sm">
                                Whatsapp</p>
                        </a>
                        <a href="mailto:?subject=<?php the_title(); ?>&amp;body=Check out this site <?php the_permalink()?>" target="_blank" class="group">
                            <div
                                class="rounded-2xl bg-black bg-opacity-5 group-hover:bg-persian-green transition-colors group-hover:bg-opacity-10 h-[72px] w-[72px] flex items-center justify-center">
                                <svg class="fill-black group-hover:fill-persian-green transition-colors" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20H15V18H10C5.66 18 2 14.34 2 10C2 5.66 5.66 2 10 2C14.34 2 18 5.66 18 10V11.43C18 12.22 17.29 13 16.5 13C15.71 13 15 12.22 15 11.43V10C15 7.24 12.76 5 10 5C7.24 5 5 7.24 5 10C5 12.76 7.24 15 10 15C11.38 15 12.64 14.44 13.54 13.53C14.19 14.42 15.31 15 16.5 15C18.47 15 20 13.4 20 11.43V10C20 4.48 15.52 0 10 0ZM10 13C8.34 13 7 11.66 7 10C7 8.34 8.34 7 10 7C11.66 7 13 8.34 13 10C13 11.66 11.66 13 10 13Z"/>
                                </svg>
                            </div>
                            <p
                                class="my-1 font-light text-black group-hover:text-persian-green text-center text-sm">
                                E-mail
                            </p>
                        </a>
                    </div>
                    <p class="text-center text-charcoal-900">or share with link</p>
                    <div class="relative">
                        <div class="relative cursor-pointer group rounded-lg bg-black bg-opacity-5 mt-4 mb-2" id="copy-share-link">
                            <div class="flex absolute inset-y-0 right-0 items-center px-5 pointer-events-none">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/copy-icon.svg';?>" alt="Copy Link">
                            </div>
                            <input type="text" readonly disabled
                                class="w-full disabled text-charcoal-900 text-opacity-50 bg-transparent cursor-pointer focus:ring-transparent focus:border-transparent block pr-14 px-4 py-3"
                                id="single-share"
                                value="<?php the_permalink()?>">
                            <div class="absolute right-0 top-0 opacity-0 transition-all my-2 mx-auto px-2 py-1 w-full rounded bg-gray-100 text-center" id="copied-badge">Copied</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>