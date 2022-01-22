<!-- @if (5>10)
    <p>Lower than 10</p>
    @elseif (5<10)
    <p>Bahahah</p>
@endif

@unless (empty($names))
<p>names isnt empty</p>
@endunless

@if (!empty($names))
<p>names isnt empty</p>
@endif

@empty($names)
    <p>names is empty em</p>
@endempty

@isset($names)
    names has been set
@endisset

-->

<!-- Comparing multiple possible conditions
    Multiple values that may require the same code
-->

<!--
@switch($names)
    @case('Dary')
        <h2>names is Dary</h2>
        @break
    @case('Mycel')
        <h2>names is Mycel</h2>
    @break
    @case('jhosn')
        <h2>John</h2>
    @break

    @default
    <h2>no found</h2>

@endswitch

-->

<!--
    For loop
    Foreach loop
    For else lopp
    while loop
-->

@for ($i = 0; $i < 10; $i++)
    <h2>{{ $i }}</h2>
@endfor

@foreach ($names as $item)
    <h2>{{ $item }}</h2>
@endforeach

@forelse ($names as $name)
    <h2>The name {{ $name }}</h2>
@empty
    <h2>Kosong</h2>
@endforelse