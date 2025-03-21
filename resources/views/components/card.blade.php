@props(['highlight' =>false])

<div @class(['highlight' => $highlight, 'card'])>
    {{$slot}}
    <a {{$attributes}}class="btn">View Detail</a>
</div>