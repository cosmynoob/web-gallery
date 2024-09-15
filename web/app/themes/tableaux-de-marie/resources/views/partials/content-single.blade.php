<article @php(post_class('h-entry'))>
    <div class="single-content e-content mx-auto max-w-screen-xl text-pretty px-8 md:px-24 mx-auto">
        <h1 class="mt-12 text-xl xl:text-4xl  pb-6 font-title leading-tight text-art-dark">{{ the_title() }}</h1>
        <div class="content mt-12">
            @php(the_content())
        </div>
    </div>
</article>
