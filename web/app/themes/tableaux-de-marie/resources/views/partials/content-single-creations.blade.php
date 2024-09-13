<article @php(post_class())>
    <div class="flex flex-row w-full">
        <div class="w-1/2">
            <img src="{{ get_the_post_thumbnail_url(get_the_ID()) }}" alt="{{ get_the_title() }}"
                class="object-cover w-full h-auto">
        </div>
        <div class="w-1/2 p-12">
            <h2 class="text-4xl text-white font-title leading-tight">{{ get_the_title() }}</h2>
            <div class="entry-summary">
                @php(the_content())
            </div>
        </div>
    </div>
</article>
