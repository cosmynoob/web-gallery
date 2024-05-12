<div class="max-w-full mx-auto">
    @include('sections.header')
    @include('partials.page-header')

    @php
        $args = [
            'post_type' => 'post',
            'category_name' => 'expositions',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish',
        ];
        $posts = new WP_Query($args);

    @endphp

    <main id="main" class="main w-full py-32">

        <div class="max-w-screen-3xl px-8 mx-auto">
            <div class=" grid gap-6 lg:gap-20 grid-cols-1 mb-16 sm:grid-cols-4">

                @while ($posts->have_posts())
                    @php $posts->the_post(); @endphp
                    <div class="expo-item">
                        <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ the_title() }}"
                            class="w-full h-auto pb-6">

                        @if (!empty(get_field('date_de_lexpo_start')) && !empty(get_field('date_de_lexpo_stop')))
                            <div class="date pb-6">
                                <span class="day font-sans text-xs block uppercase">Du
                                    {{ get_field('date_de_lexpo_start') }} au
                                    {{ get_field('date_de_lexpo_stop') }}</span>
                            </div>
                        @endif

                        <a href="{{ the_permalink() }}"
                            class="stretched-link title text-lg xl:text-md font-title leading-normal pb-6">{{ the_title() }}</a>
                        <div class="content">
                            <p>
                                {{ the_excerpt() }}
                            </p>
                        </div>
                    </div>
                @endwhile
                @php wp_reset_postdata() @endphp

            </div>
        </div>

    </main>

    @include('sections.footer')
</div>
