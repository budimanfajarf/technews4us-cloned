@if ($atf_section)
  @if ($featured_contents = $atf_section['featured_contents'])
    <div class="home-atf grid md:grid-cols-2">
      @foreach ($featured_contents as $content)
        <a href="{{ get_permalink($content->ID) }}" class="flex h-[400px] bg-[#333]">
          <div class="home-atf__content-title">
            {!! $content->post_title !!}
          </div>
        </a>
      @endforeach
    </div>
  @endif
@endif
