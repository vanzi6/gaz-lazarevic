<div class="nav flex-column nav-pills text-white pt-5">
    @foreach (config('nav-info') as $navName => $navContent)
        @if ($navName === $controllerName)
            <a class="nav-link active" href="{{ $navContent['link'] }}">{{ $navContent['name'] }}</a>
        @else
            <a class="nav-link" href="{{ $navContent['link'] }}">{{ $navContent['name'] }}</a>
        @endif
    @endforeach
</div>