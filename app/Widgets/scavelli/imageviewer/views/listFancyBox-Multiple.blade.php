<div class="content_div">
    @foreach($items as $item)
        {!! $list->getItem($item) !!}
    @endforeach
</div>

{{ $list->theme->addExCss('/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css') }}
{{ $list->theme->addExJs('/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js') }}