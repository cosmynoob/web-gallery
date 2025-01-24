<div class="max-w-full mx-auto">
    @include('sections.header')
    @include('partials.page-header')

    @php
        $args = [
            'post_type' => 'creations',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish',
        ];
        $posts = new WP_Query($args);

    @endphp

    <main id="main" class="main w-full py-32">

        <div class="max-w-screen-3xl px-8 mx-auto">
            <div class=" grid gap-6 lg:gap-16 grid-cols-1 mb-16 sm:grid-cols-4">

                @while ($posts->have_posts())
                    @php $posts->the_post(); @endphp
                    <div class="expo-item hover:bg-gray-100 p-2">
                        <a href="{{ the_permalink() }}" class="flex flex-col justify-between h-full">
                            <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ the_title() }}"
                                class="w-full h-auto pb-6">
                            <div>
                                <span
                                    class="stretched-link title text-lg xl:text-md font-title leading-normal pb-6">{{ the_title() }}    
                                </span>
                                @if(get_field('creation_sold'))<p class="text-gray-400 text-xs m-0">Plus disponible</p> @endif
                                
                                @if(get_field('creation_size') || get_field('creation_painting_type'))
                                    <p class="text-xs m-0 flex gap-2">
                                        @if(get_field('creation_size')) <span class="text-art-medium">{{ get_field('creation_size') }}</span> @endif
                                        @if(get_field('creation_painting_type')) <span class="">{{get_field('creation_painting_type')}}</span> @endif
                                    </p> 
                                @endif
                                <div class="content">
                                    <p>
                                        {{ the_excerpt() }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endwhile
                @php wp_reset_postdata() @endphp

            </div>
        </div>

    </main>

    @include('sections.footer')
</div>
