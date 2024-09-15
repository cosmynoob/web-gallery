<section id="about" class="w-full sm:pt-32 pb-40 bg-art-darker overflow-hidden">
    <div class="max-w-screen-3xl px-8 xl:px-24 mx-auto flex flex-col lg:flex-row">
        <div class="w-full lg:w-3/6 text-white mb-24 lg:mb-0">
            <div class="p-8">
                <p class="h2 text-3xl pb-12 font-title">{{get_field('bio_section_title')}}</p>
                <div class="pb-6 leading-loose font-sans font-extra-light text-xs">
                    {!! get_field('_bio_section_desc') !!}
                </div>
            </div>
        </div>
        <div class="w-full lg:w-3/6 flex flex-col sm:flex-row relative">
            <div class="w-full aspect-square sm:w-1/2 z-20 overflow-hidden">
                <img src="@asset('images/about.png')" class="object-cover aspect-square w-full sm:h-full"/>  
            </div>
            <div class="w-full sm:w-1/2 p-12 bg-white flex items-center z-20">
                <div class="text-right">
                    <div class="leading-loose font-title font-bold text-xs sm:text-xs">
                        {!! get_field('_bio_section_caption') !!}
                    </div>
                </div>
            </div>
            <div class="absolute -bottom-12 -right-28 w-[400px] z-10">
                <img src="{{ get_field('_bio_section_picture') }}" />        
            </div>
        </div>
    </div>
</section>
