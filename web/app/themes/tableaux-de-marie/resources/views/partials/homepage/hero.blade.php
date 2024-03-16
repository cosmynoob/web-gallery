<section id="hero" class="w-full h-screen relative overflow-hidden">

    <div class="title mx-auto z-30 py-64 w-full flex items-center justify-center">
        <h1 class="text-6xl text-white">Les tableaux de Marie</h1>
    </div>

    <div class="absolute right-0 top-0 h-full w-1/2 flex items-center gap-10">
        <div class="w-1/2 aspect-square  mt-96 relative">
            <img src="@asset('images/about.png')" class="object-cover w-full h-auto z-20 relative" /> 
            
            <div class="absolute -top-12 -left-28 w-[400px] z-10">
                <img src="@asset('images/brush-hero.svg')" />        
            </div>
            
        </div>
        <div class="w-1/2 aspect-square z-20 -mt-20">
            <img src="@asset('images/about.png')" class="object-cover w-full h-auto" />  
        </div>
    </div>

    <div class="absolute top-0 left-0 h-full aspect-square -z-10 bg-cover bg-bottom" style="background-image: url(@asset('images/hero-1.png'))"></div>
    <div class="absolute bottom-0 left-0 w-full -z-20">
        <img src="@asset('images/separator_bottom.svg')" />
    </div>

    <div class="bg-art-dark absolute top-0 left-0 w-full h-full -z-30"></div>

</section>
