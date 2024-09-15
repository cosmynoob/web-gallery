<section id="press" class="w-full relative overflow-hidden">

    <div class="flex pb-24">
        <div class="hidden md:block w-full md:w-1/3 overflow-hidden">
            <img src="@asset('images/marie-tableau.png')" class="object-cover h-full object-left" />
        </div>
        <div class="w-full md:w-2/3 sm:px-6 lg:px-24 pt-48 pb-12 md:pb-48 relative">
            <div class="max-w-screen-3xl z-30">
                <div class="w-full flex items-center justify-center top-16 md:top-0 left-0 absolute ">
                    <p class="text-7xl md:text-homepage  text-art-medium font-black opacity-10 font-title">Presse</p>
                </div>
            </div>
            <div class="max-w-screen-3xl px-8 mx-auto relative z-40">
                <div class="">
                    <div class="grid gap-6 lg:gap-16 grid-cols-1 sm:grid-cols-2 grid-rows-2 mb-8">

                        @php
                            $args = [
                                'post_type' => 'post',
                                'category_name' => 'articles-de-presse',
                                'posts_per_page' => '4',
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

                            <a  @if(get_field('link_ext'))target="_blank"@endif href="@if(get_field('link_ext')){{get_field('link_ext')}} @else {{the_permalink()}} @endif" class="block press-item max-w-lg">
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
                    <div class="navigation">
                        <a href="/articles-de-presse/"
                            class="inline-block btn border border-art-light text-art-light px-10 py-4 uppercase">{{ _e('Voir plus d\'articles', 'tableaux-de-marie') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full z-30">
        <img src="@asset('images/separator_bottom.svg')" />
    </div>

    <div class="bg-white absolute top-0 left-0 w-full h-full -z-30"></div>

</section>
