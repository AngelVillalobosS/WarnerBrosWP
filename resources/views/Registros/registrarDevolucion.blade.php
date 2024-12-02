<!-- Autor: Angel Gabriel Villalobos Saucedo -->
<!-- Descripción: Estructura de la vista que se encarga de registrar devoluciones -->
<!-- Fecha de Creación:  Jueves 14, Noviembre 2024 -->
<!-- Ultima modificación: Domingo 1, Diciembre 2024 -->
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    @vite(['../resources/css/nicepage.css', '../resources/css/registros/registrarDevolucion.css', '../resources/css/reportes/reportes/reporteEstilo.css'])
    @vite(['../resources/js/nicepage.js'])
    <meta name="generator" content="Nicepage 7.0.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Cinematografia",
        "logo": "https://static.wixstatic.com/media/1c9a31_9c52ca01cb8749ccbddfff96429766a4~mv2.png/v1/fill/w_90,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/WarnerBros_Logo_1-1.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="registrar_devoluciones">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <title>Registrar Devoluciones</title>
</head>

<body data-path-to-root="../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')
    <section class="u-clearfix u-image u-section-1" id="sec-4415" data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-container-style u-group u-group-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-delay="0">
                <div class="u-container-layout">
                    <h2 class="u-text u-text-default u-text-1">Devoluciones<br>
                    </h2>
                    <div class="u-form u-form-1">
                        <!-- Formulario -->
                        <form action="{{ route('saveDevolucion') }}" method="POST"
                            class="u-clearfix u-form-spacing-45 u-form-vertical u-inner-form" style="padding: 10px;">
                            {{ csrf_field() }}
                            <div class="u-form-group u-form-select u-form-group-1">
                                <div class="u-form-select-wrapper">

                                    <!-- Titulo Cliente -->
                                    <label for="select-822a" class="u-label u-label-3" style="font-style: oblique;">Id -
                                        Venta</label>
                                    <input class="u-grey-75 u-input u-input-rectangle" type="text" name="id_venta" id=""
                                        placeholder="Ingresar ID de la venta">
                                    <button class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-1"
                                        href='#' type="button">Buscar Venta</button>
                                </div>
                            </div>
                            <div>
                                <table class="reporte-table">
                                    <thead>
                                        <tr>
                                            <th>Id Venta</th>
                                            <th>Id Producto</th>
                                            <th>Cantidad de devoluciones</th>
                                            <th>Cantidad comprada</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detallesVentas as $dvt)
                                        <tr>
                                            <td>{{ $dvt->id_venta }}</td>
                                            <td>{{ $dvt->id_producto }}</td>
                                            <td>{{ $dvt->cant_devueltas}}</td>
                                            <td>{{ $dvt->cantidad }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tr>

                                    </tr>
                                </table>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <input type="submit"
                                    class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-1"
                                    value="Registrar devolución">
                            </div>
                            <div class="u-form u-form-1">

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('components.pageFooter')
</body>

</html>