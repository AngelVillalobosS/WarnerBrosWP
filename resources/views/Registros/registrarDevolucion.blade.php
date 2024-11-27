<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    @vite(['../resources/css/nicepage.css', '../resources/css/registros/registrarDevolucion.css'])
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
                <h1>Modificar Devoluciones para Cliente ID: {{ $id_cliente }}</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('devoluciones.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id_cliente" value="{{ $id_cliente }}">

    <table>
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>Fecha</th>
                <th>Cantidad Devuelta</th>
                <th>Modificar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id_venta }}</td>
                    <td>{{ $venta->fecha }}</td>
                    <td>
                        <input type="number" name="nueva_cantidad" value="{{ $venta->cantidad_devuelta }}" min="0">
                    </td>
                    <td>
                        <button type="submit" name="id_venta" value="{{ $venta->id_venta }}">Actualizar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.pageFooter')
</body>

</html>