<section class="py-0" wire:refresh>
    <div class="container-small">
        <div class="ecommerce-topbar" >
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <div class="row gx-0 gy-2 w-100 flex-between-center">
                    <div class="col-auto"><a class="text-decoration-none" href="../../../index-2.html">
                            <div class="d-flex align-items-center"><img src="../../../assets/img/icons/logo.png"
                                    alt="phoenix" width="27" />
                                <p class="logo-text ms-2">SOP&Five</p>
                            </div>
                        </a></div>
                    <div class="col-auto order-md-1">
                        <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                            <li class="nav-item d-flex align-items-center">
                                {{-- <div class="theme-control-toggle fa-icon-wait px-2"><input
                                        class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                        data-theme-control="phoenixTheme" value="dark"
                                        id="themeControlToggle" /><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme"><span class="icon"
                                            data-feather="moon"></span></label><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                                </div> --}}
                            </li>
                            <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary"
                                    href="{{ route('cart') }}" wire:navigate role="button"><span class="text-700"
                                        data-feather="shopping-cart" style="height:20px;width:20px;"></span><span
                                        class="icon-indicator-number">{{$cartSize}}</span></a></li>

                            {{-- ITEM ORDENES --}}
                            <livewire:market.component.nav-orders>
                            
                            {{-- ITEM USUARIO --}}
                            <livewire:market.component.nav-user>
                            

                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="search-box ecommerce-search-box w-100">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input search form-control-sm" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- end of .container-->
</section>
