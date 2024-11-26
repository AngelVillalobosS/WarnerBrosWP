<!DOCTYPE html>
<html lang="es" style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Consultar Clientes</title>

    <!-- CSS y JS -->
    @vite(['../resources/css/nicepage.css', '../resources/css/catalogos/consultarCliente.css'])
    @vite(['../resources/js/nicepage.js'])

    <!-- Fuentes -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>

<body class="u-body u-xl-mode" data-lang="es">

    <!-- Header -->
    @include('components.pageHeader')

    <!-- Sección principal -->
    <section class="u-clearfix u-image u-section-1" id="sec-01af" data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-sheet-1">

            <!-- Botón Regresar -->
            <a href="{{ route('catalogoCliente') }}"
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
            </a>

            <!-- Contenedor principal -->
            <div class="u-align-center u-container-style u-group u-group-1">
                <div class="u-container-layout">
                    <h2 class="u-text u-text-default u-text-1">Consultar Clientes</h2>

                    <!-- Formulario de búsqueda -->
                    <div class="u-form u-form-1" id="search-form">
                        <form class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="form"
                            style="padding: 10px;" action="{{ route('consultCliente') }}" method="GET">
                            <div class="u-form-group u-form-name">
                                <label for="id_cliente" class="u-label u-text-black u-label-1">Id</label>
                                <input type="text" placeholder="Introduzca el ID del cliente" name="clientes"
                                    class="u-grey-80 u-input u-input-rectangle" required>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <button type="submit" class="u-black u-border-2 u-border-active-grey-40 u-border-grey-40 u-border-hover-grey-40 u-btn u-btn-submit u-button-style u-btn-2">
                                    Consultar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.pageFooter')

</body>

</html>