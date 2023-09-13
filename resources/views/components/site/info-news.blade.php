<span {{ $attributes->merge(['class' => 'info-news']) }}>
    @if ($link)
        <a class="text-dark" href="{{ $link }}">{{ $text }}</a>
    @else
        {{ $text }}
    @endif
</span>
