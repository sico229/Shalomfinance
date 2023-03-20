<!DOCTYPE html>
<html lang="en">

@include('Pages.patials.Head')

<body>
    @include('Pages.Modal')
    @include('Pages.Loaders')

    @include('Pages.patials.Header')
    <div class="stick">
        <div class="hamb">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div>
            <a href="http://">&nbsp;</a>
            <p>{{ $settings->slogan }}</p>
        </div>
        <div>
            <a href="{{ route('Register') }}">{{ $version[5] }}</a>
            <a href="{{ route('Login') }}"><i class="bi bi-person-lock"></i>{{ $version[6] }}</a>
        </div>
    </div>
    <div id="ConteneurPrincipal">

        @include('Pages.patials.Nav')
        <div id="main">
            @yield('contenu')
        </div>

    </div>
    @include('Pages.patials.Footer')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/js/template2.js') }}"></script>
    @yield('scripts')
</body>

</html>
