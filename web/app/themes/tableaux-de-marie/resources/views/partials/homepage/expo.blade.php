<section id="expo" class="w-full pt-12 pb-32 bg-art-darker overflow-hidden">
    <div class="w-full pb-16 flex items-center justify-center">
        <p class="text-3xl text-white font-title">Mes expositions</p>
    </div>
    <div class="max-w-screen-3xl px-8 mx-auto">
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
                        <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ the_title() }}"
                            class="w-full h-auto pb-6">
                        @if (!empty(get_field('date_de_lexpo_start')) && !empty(get_field('date_de_lexpo_stop')))
                            <div class="date pb-2">
                                <span class="day font-sans text-xs block uppercase text-white">Du
                                    {{ get_field('date_de_lexpo_start') }} au
                                    {{ get_field('date_de_lexpo_stop') }}</span>
                            </div>
                        @endif
                        <a href="{{ the_permalink() }}"
                            class="stretched-link title text-lg xl:text-md font-title leading-normal block pb-6 text-white">{{ the_title() }}</a>
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
    </div>
</section>
