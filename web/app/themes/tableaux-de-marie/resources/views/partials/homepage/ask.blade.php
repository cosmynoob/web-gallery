<section id="ask" class="w-full pt-12 pb-24 md:pt-32 md:pb-32 lg:pb-64 relative overflow-hidden">
    
    <div class="max-w-screen-3xl px-8 md:px-0 mx-auto flex flex-col lg:flex-row gap-4 md:gap-24">
        <div class="lg:order-first order-last w-full lg:w-1/2 flex flex-col sm:flex-row items-center gap-4 md:gap-10 ">
            <div class="md:mt-20 w-full">
                <img src="{{get_field('ask_section_img_1')}}" class="aspect-square w-full object-cover"/>
            </div>
            <div class="w-full hidden sm:block">
                <img src="{{get_field('ask_section_img_2')}}" class="aspect-square w-full object-cover"/>
            </div>
        </div>
        <div class="order-first lg:order-last w-full lg:w-1/2 flex items-center justify-center">
            <div class="p-8">
                <p class="text-xl xl:text-3xl pb-6 font-title leading-tight text-art-dark">{{get_field('ask_section_title')}}
                </p>
                <div class="pb-12 leading-normal xl:leading-loose text-2xs text-art-dark">
                    {!!get_field('ask_section_desc')!!}
                </div>
                <a href="#contact" class=" js-scrollTo inline-block btn border border-art-light text-art-light px-10 py-4 uppercase">Contactez-moi</a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full -z-20">
        <img src="@asset('images/separator_bottom.svg')" />
    </div>

    <div class="bg-white absolute top-0 left-0 w-full h-full -z-30"></div>

</section>
