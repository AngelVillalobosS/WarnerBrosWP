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
                    <h2 class="u-text u-text-default u-text-1">Devoluciones<br>
                    </h2>
                    @if (Session::has('mensaje'))
                        <div>
                            <div class="alert alert-dismissible alert-success">
                                <strong></strong> {{ Session::get('mensaje') }}
                            </div>
                        </div>
                        @endif
                    <div class="u-form u-form-1">

                        <!-- Formulario -->
                        <form action="{{ route('saveDevolucion') }}" method="POST"
                            class="u-clearfix u-form-spacing-45 u-form-vertical u-inner-form" style="padding: 10px;">
                            @csrf
                            <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-1">
                                <label for="select-c607" class="u-label u-label-1">Seleccionar cliente</label>
                                <div class="u-form-select-wrapper">
                                    <select name="clientes" class="u-grey-80 u-input u-input-rectangle u-input-1"
                                        required>
                                        @foreach($clientes as $client)
                                        <option value="{{ $client->id_cliente }}">
                                            {{ $client->nombre_cliente }} {{ $client->ap_cliente }}
                                            {{ $client->am_cliente }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-2">
                                <label for="date-65bb" class="u-label u-label-2">Fecha</label>
                                @if($errors->first('fecha'))
                                <p class="text-warning">{{$errors->first('fecha')}}</p>
                                @endif
                                <input type="date" id="date-65bb" name="fecha"
                                    class="u-grey-80 u-input u-input-rectangle u-input-2" value="{{ old('fecha') }}"
                                    required>
                            </div>
                            <div class="u-form-group u-form-select u-form-group-3">
                                <label for="select-d405" class="u-label u-label-3">Seleccionar producto</label>
                                <div class="u-form-select-wrapper">
                                    <select name="productos" class="u-grey-80 u-input u-input-rectangle u-input-3"
                                        required>
                                        @foreach($productos as $product)
                                        <option value="{{ $product->id_product }}">{{ $product->nom_producto }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="u-form-group u-form-select u-form-group-3">
                                <label for="select-d405" class="u-label u-label-3">Cantidad:</label>
                                <div class="u-form-select-wrapper">
                                    <input type="text" name="cantidad" class="u-grey-80 u-input u-input-rectangle u-input-4" value="">
                                </div>
                            </div>
                            <div class="u-form-group u-form-message u-form-group-4">
                                <label for="text-2ca3" class="u-label u-label-4">Motivo de la devolución</label>
                                <textarea id="text-2ca3" name="motivo"
                                    class="u-grey-80 u-input u-input-rectangle u-input-4"
                                    required>{{ old('motivo') }}</textarea>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <button type="submit"
                                    class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-1">Registrar
                                    devolución</button>
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