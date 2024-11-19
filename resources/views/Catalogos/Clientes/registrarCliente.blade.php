<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>registrar_clientes</title>
    <link rel="stylesheet" href="../../nicepage.css" media="screen">
    <link rel="stylesheet" href="registrar_clientes.css" media="screen">
    @vite(['../resources/css/nicepage.css', '../resources/css/catalogos/registrarCliente.css'])
    <script class="u-script" type="text/javascript" src="../../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 7.0.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
   
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Cinematografia",
		"logo": "https://static.wixstatic.com/media/1c9a31_9c52ca01cb8749ccbddfff96429766a4~mv2.png/v1/fill/w_90,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/WarnerBros_Logo_1-1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="registrar_clientes">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')
    <section class="u-clearfix u-image u-section-1" id="sec-32d5" data-image-width="626" data-image-height="391">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{ route('catalogoCliente') }}" class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar </a>
        <div class="u-align-center u-container-style u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0">
          <div class="u-container-layout">
            <h2 class="u-text u-text-default u-text-1">Registrar Clientes </h2>
            <div class="u-form u-form-1">
              <!-- Registrar Clientes -->
              <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                <div class="u-form-group u-form-partition-factor-2">
                  <label for="name-29e0" class="u-label u-text-black u-label-1">ID</label>
                  <input type="text" id="name-29e0" name="id_cliente" class="u-grey-75 u-input u-input-rectangle" required="required"  readonly=''>
                </div>
                <div class="u-form-group u-form-partition-factor-2">
                  <label for="email-29e0" class="u-label u-text-black u-label-2">Nombre</label>
                  <input type="text" placeholder="Introduzca el nombre" id="email-29e0" name="nombre_cliente" class="u-grey-75 u-input u-input-rectangle" required="required">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-group-3">
                  <label for="text-93a1" class="u-label u-text-black u-label-3">Apellido Paterno</label>
                  <input type="text" placeholder="Introduzca el apellido paterno" id="text-93a1" name="ap_cliente" class="u-grey-75 u-input u-input-rectangle">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                  <label for="text-cfa5" class="u-label u-text-black u-label-4">Apellido Materno</label>
                  <input type="text" placeholder="Introduzca el apellido materno" id="text-cfa5" name="am_cliente" class="u-grey-75 u-input u-input-rectangle">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-5">
                  <label for="text-7f3e" class="u-label u-text-black u-label-5">Teléono</label>
                  <input type="tel" placeholder="222 123 4567" id="text-7f3e" name="telefono" class="u-grey-75 u-input u-input-rectangle" data-country-code="mx">
                </div>
                <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-6">
                  <label for="text-31be" class="u-label u-text-black u-label-6">Correo Electrónico </label>
                  <input type="email" id="text-31be" name="correo" class="u-grey-75 u-input u-input-rectangle" placeholder="correo@gmail.com">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-black u-border-2 u-border-active-grey-40 u-border-grey-40 u-border-hover-grey-40 u-btn u-btn-submit u-button-style u-btn-2">Registrar </a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success"> Gracias! Tu mensaje ha sido enviado. </div>
                <div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por favor, corrija los errores y vuelva a intentarlo. </div>
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