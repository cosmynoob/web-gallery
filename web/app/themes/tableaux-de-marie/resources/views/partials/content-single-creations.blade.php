<article @php(post_class())>
    <div class="max-w-screen-2xl py-24 px-8 xl:px-24 mx-auto">
        <div class="flex flex-row w-full font-title">
            <div class="w-1/2">
                <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ get_the_title() }}"
                    class="object-cover w-full h-auto">
            </div>
            <div class="w-1/2 p-12">
                <h2 class="text-4xl  font-title leading-tight">{{ get_the_title() }}</h2>
                
                @if(get_field('creation_size') || get_field('creation_painting_type'))
                    <div class="flex gap-2 justify-start items-center">
                        @if(get_field('creation_size')) <span class="text-xl text-art-medium">{{get_field('creation_size')}}</span> @endif
                        @if(get_field('creation_painting_type')) <span class="text-xl text-gray-400">{{get_field('creation_painting_type')}}</span> @endif
                    </div>
                @endif
                @if(get_field('creation_sold'))
                    <p class="text-gray-400 text-xs">Plus disponible</p> 
                @elseif(get_field('creation_price'))
                    <p class="text-3xl text-art-medium font-title ">{{get_field('creation_price')}} €</p>
                @endif
                <div class="entry-content mt-12">
                    @php(the_content())
                </div>
            </div>
        </div>
    </div>
</article>
