<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ route('login') }}">
            Everju
        </a>

        <!-- botão mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <!-- SEARCH -->
            <form class="d-flex mx-auto my-2 my-lg-0" method="GET" action="">
                <input 
                    class="form-control me-2" 
                    type="search" 
                    name="search" 
                    placeholder="Buscar produtos..."
                    value="{{ request('search') }}"
                >
            </form>

            <!-- CARRINHO -->
            <div class="d-flex">
                <a href="" class="btn btn-outline-light ms-lg-3 mt-2 mt-lg-0">
                    🛒 Carrinho
                </a>
            </div>

        </div>

    </div>
</nav>