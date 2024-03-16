<section id="gallery" class="w-full py-40 bg-grey-light">
    <div class="w-full pb-16 flex items-center justify-center">
        <p class="text-3xl">Galerie</p>
    </div>
    <div class="swiper gallery-swiper">
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
                    $recent_posts->the_post() 
                @endphp
                <div class="swiper-slide">
                    <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ the_title() }}" class="w-full h-auto aspect-square">
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

</section>
