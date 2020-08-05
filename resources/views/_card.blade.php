@cache($card)
<article>
    <h1>{{ $card->title }}</h1>
    <ul>
        @foreach($card->notes as $note)
            @include('_note')
        @endforeach
    </ul>
</article>
@endcache
