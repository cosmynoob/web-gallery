<section id="expo" class="w-full pt-24 pb-6 bg-art-darker overflow-hidden relative">
    <div class="max-w-screen-3xl">
        <div class="w-full flex items-center justify-center top-8 md:-top-24 absolute ">
            <p class=" text-7xl md:text-homepage  text-art-medium font-black opacity-80 font-title">Expositions</p>
        </div>
    </div>
    <div class="max-w-screen-3xl py-24 px-8 md: px-24 mx-auto">
        <div class="swiper expo-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @php
                    $args = [
                        'post_type' => 'post',
                        'category_name' => 'expositions',
                        'posts_per_page' => '6',
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
                    <div class="swiper-slide">
                        <a href="{{ the_permalink() }}" class="block w-full h-auto pb-6 rounded-lg">
                            <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ the_title() }}" class="object-cover w-full rounded-lg">
                            @if (!empty(get_field('date_de_lexpo_start')) && !empty(get_field('date_de_lexpo_stop')))
                                <div class="date pt-4 pb-2">
                                    <span class="day font-sans text-xs block uppercase text-white">Du
                                        {{ get_field('date_de_lexpo_start') }} au
                                        {{ get_field('date_de_lexpo_stop') }}</span>
                                </div>
                            @endif
                            <span class="title text-lg xl:text-md font-title leading-normal block pb-6 text-white">{{ the_title() }}</span>
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
        <div class="navigation flex items-center justify-center mt-24">
            <a href="/expositions/"
                class="border border-white border-1 relative flex uppercase px-10 py-4 items-center justify-center overflow-hidden  text-white hover:text-art-medium shadow-2xl transition-all before:absolute before:h-0 before:w-0 before:rounded-full before:bg-white before:duration-200 before:ease-out hover:shadow-art-medium hover:before:h-96 hover:before:w-96">
                <span class="relative z-10">{{ _e('Parcourir les expositions', 'tableaux-de-marie') }}</span>
            </a>
        </div>
    </div>
</section>
