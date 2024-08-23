<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand main-title" href="{{ route('home') }}">Marca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse " id="navbarColor01">
        <ul class="nav navbar-nav ml-xl-5">
            <li class="nav-item"><a class="nav-link" href="#">My tienda en Laravel 6.x</a></li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="">Conocenos</a></li>
            <li class="nav-item"><a class="nav-link" href="">Contacto</a></li>
            @include('store.partials.menu-user')
        </ul>
    </div>
</nav>