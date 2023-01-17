<footer class= "mainFooter">

    <div class="homeIcon">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="../images/homeIcon.png" alt="homeIcon">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </a>
    </div>

    @if (Auth::check() && Auth::user()->isAdmin)
    <div class=addIcon>
        <button class="buttonHome" style="color: white">
        <a href="{{route('createTrip')}}">+</a>
        </button>
    </div>
    @endif
    <div class="suitcaseIcon">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="../images/suitcaseIcon.png" alt="homeIcon">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </a>
    </div>
</footer> 

</main>

