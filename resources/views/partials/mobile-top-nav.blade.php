<nav class="d-block d-lg-none navbar navbar-expand-md navbar-dark">
    <span class="navbar-brand">{{ env('APP_NAME') }}</span>
    <span class="navbar-brand">
        <img src="/images/logo-2-small.png" class="logo-mobile" alt="{{ env('APP_NAME') }}">
    </span>
    <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse border-top mt-2" id="navbarCollapse" style="">
        <ul class="navbar-nav mr-auto">
            @foreach (config('nav-info') as $navName => $navContent)
                @if ($navName === $controllerName)
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ $navContent['link'] }}">{{ $navContent['name'] }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $navContent['link'] }}">{{ $navContent['name'] }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
        @include('partials.social-links')
        <div class="text-white mt-4 mb-2">
            <span class="pr-3">Telefon:</span><span>{{ config('constants.phone-number') }}</span>
        </div>
    </div>
</nav>