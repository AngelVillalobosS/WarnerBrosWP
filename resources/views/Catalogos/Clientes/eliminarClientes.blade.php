<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>WB | Eliminar Cliente</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/Catalogos/eliminarCliente.css'])
    @vite(['../resources/js/nicepage.js'])
    <script class="u-script" type="text/javascript" src="../../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../nicepage.js" defer=""></script>
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
    <meta property="og:title" content="eliminar_clientes">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')

    <section class="u-clearfix u-image u-section-1" id="sec-0f31" data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="{{ route('catalogoCliente') }}"
                class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar
            </a>
            <div class="u-align-center u-container-style u-group u-group-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-delay="0">
                <div class="u-container-layout">
                    <h2 class="u-text u-text-default u-text-1">Eliminar Clientes </h2>
                    @if (Session::has('mensaje'))
                    <div>
                        <div class="alert alert-dismissible alert-success">
                            <br>
                            <strong>{{ Session::get('mensaje') }}</strong>
                        </div>
                    </div>
                    @endif
                    <div class="u-form u-form-1">
                        <form action=" {{ route('deleteClient') }}"
                            class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form"
                            style="padding: 10px;" method="POST">
                            @csrf
                            <div class="u-form-group u-form-name">
                            <div class="u-form-select-wrapper">
                                    <label for="select-822a" class="u-label u-label-3" style="font-style: oblique;">Id -
                                        Cliente</label>
                                    <select id="select-c607" name="clientes"
                                        class="u-grey-80 u-input u-input-rectangle u-input-1" required>
                                        @foreach($clientes as $client)
                                        <option value="{{ $client->id_cliente }}">
                                            {{$client->id_cliente}} - {{ $client->nombre_cliente }}
                                            {{ $client->ap_cliente }}
                                            {{ $client->am_cliente }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"
                                        style="fill:currentColor;" xml:space="preserve">
                                        <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                                    </svg>
                                </div>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <input type="submit" value="Eliminar" class="u-black u-border-2 u-border-active-grey-40 u-border-grey-40 u-border-hover-grey-40 u-btn u-btn-submit u-button-style u-btn-2" >
                            </div>
                            <div class="u-form-send-message u-form-send-success">
                                Gracias! Tu mensaje ha sido enviado.
                            </div>
                            <div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por
                                favor, corrija los errores y vuelva a intentarlo. </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                            <input type="hidden" name="formServices" value="544b23d9-71dd-99b1-1cd7-56f467c3653a">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.pageFooter')
</body>

</html>