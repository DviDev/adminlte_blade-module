@props([
    'title',
    'content',
    'info' => false,
    'success' => false,
    'warning' => false,
    'danger' => false,
    'icon',
    'footer_txt' => 'Mais informações',
    'url' => '#',
])
<div @class([
        "small-box",
        "bg-info" => $info || !$success,
        "bg-success" => $success,
        "bg-warning" => $warning,
        "bg-danger" => $danger,
     ])>
    <div class="inner">
        @if(isset($title))
            <h3>{{$title}}</h3>
        @endif
        <p>{{$content}}</p>
    </div>
    <div class="icon">
        <i class="{{$icon}}"></i>
    </div>
    <a href="{{$url}}" class="small-box-footer">
        {{$footer_txt}} <i class="fas fa-arrow-circle-right ml-1"></i>
    </a>
</div>
