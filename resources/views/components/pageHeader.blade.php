<header class="u-black u-border-2 u-border-grey-75 u-clearfix u-header u-sticky u-sticky-4940 u-header" id="sec-6f4c">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{ route('home') }}" class="u-image u-logo u-image-1" data-image-width="90" data-image-height="90">
            <img src="https://static.wixstatic.com/media/1c9a31_9c52ca01cb8749ccbddfff96429766a4~mv2.png/v1/fill/w_90,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/WarnerBros_Logo_1-1.png"
                class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                    href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40"
                            href="{{ route('home') }}" style="padding: 10px 35px;">Inicio</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40"
                            style="padding: 10px 35px;">Registros</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="Registros/registrar_alquileres.html">Renta de productos</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="{{ route('registrarVenta') }}">Ventas</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="{{ route('registrarDevolucion') }}">Devoluciones</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="Registros/registrar_gastos.html">Gastos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40"
                            style="padding: 10px 35px;">Catálogos</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="{{route('catalogoCategoria')}}">Categorías</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="{{ route('catalogoCliente') }}">Clientes</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="Catalogos/Productos/productos.html">Productos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40"
                            style="padding: 10px 35px;">Reportes</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="{{ route('ContenidoMasVendido') }}">Contenido más vendido</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="Reportes/reporte_ventas.html">Ventas</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="Reportes/reporte_gastosVentas.html">Comparar gastos y ventas</a>
                                </li>
                                <li class="u-nav-item"><a
                                        class="u-active-grey-40 u-black u-button-style u-hover-grey-40 u-nav-link"
                                        href="Reportes/reporte_historial.html">Historial de compras</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40"
                            href="realizar_encuestas.html" style="padding: 10px 35px;">Realizar encuesta</a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-5">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="./"
                                    target="_blank">Inicio</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Registros</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Registros/registrar_alquileres.html">Renta de productos</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Registros/registrar_ventas.html">Ventas</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Registros/registrar_devoluciones.html">Devoluciones</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Registros/registrar_gastos.html">Gastos</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Catálogos</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Catalogos/Categorias/categorias.html">Categorías</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Catalogos/Clientes/clientes.html">Clientes</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Catalogos/Productos/productos.html">Productos</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Reportes</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Reportes/reporte_masVendidos.html">Contenido más vendido</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Reportes/reporte_ventas.html">Ventas</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Reportes/reporte_gastosVentas.html">Comparar gastos y
                                                ventas</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                href="Reportes/reporte_historial.html">Historial de compras</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                    href="realizar_encuestas.html">Realizar encuesta</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
            <style class="menu-style">
                @media (max-width: 939px) {
                    [data-responsive-from="MD"] .u-nav-container {
                        display: none;
                    }

                    [data-responsive-from="MD"] .menu-collapse {
                        display: block;
                    }
                }
            </style>
        </nav>
    </div>
</header>