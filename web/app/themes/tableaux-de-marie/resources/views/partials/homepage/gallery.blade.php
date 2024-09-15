<section id="gallery" class="w-full overflow-hidden relative">
    <div class="max-w-screen-3xl w-full">
        <div class="w-full flex items-center justify-center top-8 absolute ">
            <p class="text-7xl md:text-homepage  text-art-medium opacity-30 font-title">Gallerie</p>
        </div>
    </div>
    <div class="pt-44">
        <div class="hidden md:flex max-w-screen-3xl navigation items-center justify-end py-24 px-8 mx-auto">
            <a href="/gallerie/"
            class="border border-art-medium border-1 z-20 flex uppercase px-10 py-4 hover:shadow-2xl items-center justify-center bg-white overflow-hidden text-art-medium transition-all before:absolute before:h-0 before:w-0 before:rounded-full before:bg-art-medium before:duration-200 relative  before:z-10 before:ease-out hover:bg-art-medium hover:shadow-art-medium hover:text-white hover:before:h-96 hover:before:w-96">{{ _e('Voir tous mes tableaux', 'tableaux-de-marie') }}</a>
        </div>
        <div class="pb-10 md:pb-0 px-8 mx-auto swiper gallery-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @php
                    $args = [
                        'post_type' => 'creations',
                        'posts_per_page' => '5',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                    ];
                    $recent_posts = new WP_Query($args);
                @endphp

                @while ($recent_posts->have_posts())
                    @php
                        $recent_posts->the_post();
                    @endphp
                    <div class="swiper-slide ">
                        <a href="{{ the_permalink() }}"
                            class="block overflow-hidden relative w-full h-auto aspect-square group">
                            <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ the_title() }}"
                                class="w-full h-auto transition duration-500 ease-in-out transform group-hover:scale-110">
                            <div class="absolute inset-0 bg-art-dark bg-opacity-50 hidden group-hover:flex justify-center items-center">
                                <p class="text-white text-lg font-title">
                                    {{ _e('Voir le tableau', 'tableaux-de-marie') }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endwhile
                @php wp_reset_postdata() @endphp
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="flex md:hidden max-w-screen-3xl navigation items-center justify-center px-8 mx-auto pb-10">
            <a href="/gallerie/"
            class="border border-art-medium border-1 z-20 flex uppercase px-10 py-4 hover:shadow-2xl items-center justify-center bg-white overflow-hidden text-art-medium transition-all before:absolute before:h-0 before:w-0 before:rounded-full before:bg-art-medium before:duration-200 relative  before:z-10 before:ease-out hover:bg-art-medium hover:shadow-art-medium hover:text-white hover:before:h-96 hover:before:w-96">{{ _e('Voir tous mes tableaux', 'tableaux-de-marie') }}</a>
        </div>
    </div>

</section>
