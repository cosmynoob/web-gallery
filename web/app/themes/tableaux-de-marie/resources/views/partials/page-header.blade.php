<section class="page-header relative w-full overflow-hidden flex items-center justify-center z-40">
  <div class="max-w-screen-xl px-8 xl:px-24 mx-auto py-24">
      <div class="text-center flex flex-col items-center justify-center gap-12 p-8">
        @if(is_single())
        <h1 class="text-white text-xl font-title uppercase">{{the_title()}}</h1>
        @else
        <p class="text-white text-xl font-title uppercase">{{the_title()}}</p>
        @endif
      </div>
  </div>

  <div class="bg-art-darker absolute top-0 left-0 h-full w-full -z-20"></div>

</section>
