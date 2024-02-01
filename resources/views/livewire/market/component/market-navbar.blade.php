<nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between"  >
    <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
        <livewire:market.component.nav-categories>
            <ul class="navbar-nav justify-content-end align-items-center">
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active"
                        href="{{ route('mercado') }}" wire:navigate>Inicio</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="{{ route('productos') }}"
                        wire:navigate>Productos</a></li>
                <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="{{ route('home') }}">Volver
                        a página inicial</a></li>



            </ul>
    </div>
</nav>
