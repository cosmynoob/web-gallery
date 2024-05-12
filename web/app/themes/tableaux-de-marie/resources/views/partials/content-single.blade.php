<article @php(post_class('h-entry'))>

  <div class="single-content e-content mx-auto max-w-screen-3xl text-pretty">
    @php(the_content())
  </div>

  @if ($pagination)
    <footer>
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </footer>
  @endif
</article>
