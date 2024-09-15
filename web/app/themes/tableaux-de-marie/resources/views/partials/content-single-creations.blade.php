<article @php(post_class())>
    <div class="max-w-screen-2xl py-24 px-8 xl:px-24 mx-auto">
        <div class="flex flex-row w-full">
            <div class="w-1/2">
                <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ get_the_title() }}"
                    class="object-cover w-full h-auto">
            </div>
            <div class="w-1/2 p-12">
                <h2 class="text-4xl  font-title leading-tight">{{ get_the_title() }}</h2>
                <p class="text-3xl text-art-medium font-title ">{{get_field('creation_price')}} €</p>
                @if(get_field('creation_sold'))<p>VENDU</p> @endif
                <div class="entry-content mt-12">
                    @php(the_content())
                </div>
            </div>
        </div>
    </div>
</article>
