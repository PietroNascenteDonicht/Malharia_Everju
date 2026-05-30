<nav class="header">

    <div class="container header-content space">

        <!-- LOGO -->
        <a href="{{ route('home.index') }}" class="header-logo">
            EVERJU
        </a>

        <!-- LINKS -->
        <div class="header-links">
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('produto.index') }}">Produtos</a>
        </div>

        <!-- USER -->
        <div class="header-user">

            <span>{{ Auth::user()->nome }}</span>

            <div class="header-dropdown">
                <a href="{{ route('profile.edit') }}">Perfil</a>

                <a class="nav-link" href="{{ route('pedidos.index') }}">
                    Meus Pedidos
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Sair</button>
                </form>
            </div>

        </div>

        <a href="{{ route('carrinho.index') }}" class="cart-icon">
            <!-- tem q fazer funcionar essa porra -->
            <i class="cart-badge">{{$cartcount}}</i>
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </a>

    </div>

</nav>