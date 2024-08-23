@if(Auth::check())
    <li class="nav-item dropdown">
        <a class="nav-dropdown nav-link dropdown-toggle" id="navbarDropdownRight" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i>{{ Auth::user()->user }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownRight">
            <li class="dropdown-item">
                <a style="color:black;" class="nav-link" href="{{ route('logout') }}">Finalizar Sesión<span class="caret"></span></a>
            </li>
        </ul>
    </li>
    @else
    <li class="nav-item dropdown">
        <a class="nav-dropdown nav-link dropdown-toggle" id="navbarDropdownRight" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i><span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownRight">
            <li class="dropdown-item">
                <a style="color:black;" class="nav-link" href="{{ route('login-get') }}" >Iniciar Sesión<span class="caret"></span></a>
            </li>
            <li class="dropdown-item">
                <a style="color:black;" class="nav-link" href="{{ route('register') }}" >Registrar cuenta<span class="caret"></span></a>
            </li>
        </ul>
    </li>
    @endif