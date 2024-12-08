<section id="hero" class="w-full max-h-[900px] xl:max-h-none h-screen relative overflow-hidden flex items-center sm:items-start">

    <div class="title mx-auto z-30 pt-16 pb-32 sm:py-32 xl:py-64 w-full flex items-center justify-center px-8 xl:px-24">
        <h1 class="text-5xl sm:text-6xl text-white font-title text-center leading-tight">{{get_field('header_title')}}</h1>
    </div>

    <div class="hidden sm:flex absolute right-0 xl:top-0 xl:1/2 xl:h-full flex items-center gap-4 xl:gap-10 ">
        <div class="hidden sm:flex w-1/2 aspect-square  mt-48 xl:mt-96 relative">
            <img src="{{get_field('header_image_2')}}" class="object-cover w-full h-auto z-20 relative max-w-[450px]" /> 
            
            <div class="hidden sm:flex absolute -top-12 -left-28 w-[400px] z-10">
                <img src="@asset('images/brush-hero.svg')" />        
            </div>
            
        </div>
        <div class="w-1/2 aspect-square z-20 -mt-20">
            <img src="{{get_field('header_image_3')}}" class="object-cover w-full max-w-[450px] h-auto"/>  
        </div>
    </div>

    <div class="absolute top-0 left-0 w-full sm:w-1/2 h-screen sm:aspect-square -z-20 sm:-z-10 bg-cover bg-bottom" style="background-image: url({{get_field('header_image_1')}})"></div>

    <div class="absolute -bottom-2 right-0 w-[300%] -z-10 sm:-z-20">
        <img src="@asset('images/separator_bottom.svg')" class="w-full"/>
    </div>

    <div class="bg-art-dark absolute top-0 left-0 w-full h-full -z-30"></div>

</section>
