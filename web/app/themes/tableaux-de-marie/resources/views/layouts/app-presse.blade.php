

<div class="max-w-full mx-auto">
      @include('sections.header')
      @include('partials.page-header')

      <main id="main" class="main w-full py-32">

        <div class="max-w-screen-3xl px-8 mx-auto">
            <div class="grid gap-6 lg:gap-16 grid-cols-1 sm:grid-cols-2 grid-rows-2 mb-8">
                
                @php
                    $args = [
                        'post_type' => 'post',
                        'category_name' => 'articles-de-presse',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                    ];
                    $posts = new WP_Query($args);
                @endphp

                @while ($posts->have_posts())
                            @php
                                $posts->the_post();
                            @endphp

                            <a  @if(get_field('link_ext'))target="_blank"@endif href="@if(get_field('link_ext')){{get_field('link_ext')}} @else {{the_permalink()}} @endif" class="block press-item">
                                <div class="date pb-4">
                                    @php
                                        $Adate = explode(' ', get_field('date_de_larticle'));

                                        if ($Adate) {
                                            $day = $Adate[0];
                                            $month = $Adate[1];
                                            $year = $Adate[2];
                                        }

                                    @endphp

                                    @if (!empty($Adate))
                                        <span
                                            class="day font-title text-3xl block text-art-medium">{{ $day }}</span>
                                        <span
                                            class="month font-sans uppercase font-semibold block">{{ $month }}&nbsp;{{ $year }}</span>
                                    @endif

                                </div>
                                <div class="title text-lg xl:text-2xl font-title leading-tight mb-6 text-art-dark block">
                                    {{ the_title() }}
                                </div>
                                <div class="leading-normal font-sans text-xs sm:text-xs">
                                    {{ the_excerpt(10) }}
                                </div>
                                <span class="underline block mt-2 text-bold text-art-medium">{{ _e('Lire l\'article', 'tableaux-de-marie') }}</span>
                            </a>

                        @endwhile
                @php wp_reset_postdata() @endphp

            </div>
        </div>

      </main>

      @include('sections.footer')
</div>
