<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>registrar_ventas</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/registros/registrarVenta.css'])
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
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
    <meta property="og:title" content="registrar_ventas">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
  @include('components.pageHeader')
    
    <section class="u-clearfix u-image u-section-1" id="sec-b4c2" data-image-width="626" data-image-height="391">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0">
          <div class="u-container-layout">
            <h2 class="u-text u-text-default u-text-1">Ventas<br>
            </h2>
            <div class="u-form u-form-1">
              <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-45 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-1">
                  <label for="select-c607" class="u-label u-label-1">Seleccionar cliente</label>
                  <div class="u-form-select-wrapper">
                    <select id="select-c607" name="id_cliente" class="u-grey-80 u-input u-input-rectangle u-input-1" required="required">
                      <option value="Item 1" data-calc="">Item 1</option>
                      <option value="Item 2" data-calc="">Item 2</option>
                      <option value="Item 3" data-calc="">Item 3</option>
                    </select>
                    <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                  </div>
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-2">
                  <label for="date-65bb" class="u-label u-label-2">Fecha</label>
                  <input type="text" placeholder="MM/DD/AAAA" id="date-65bb" name="fecha_venta" class="u-grey-80 u-input u-input-rectangle u-input-2" required="" data-date-format="mm/dd/yyyy">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-3">
                  <label for="select-d405" class="u-label u-label-3">Seleccionar producto</label>
                  <div class="u-form-select-wrapper">
                    <select id="select-d405" name="id_producto" class="u-grey-80 u-input u-input-rectangle u-input-3" required="required">
                      <option value="Item 1" data-calc="">Item 1</option>
                      <option value="Item 2" data-calc="">Item 2</option>
                      <option value="Item 3" data-calc="">Item 3</option>
                    </select>
                    <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                  </div>
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                  <label for="text-2ca3" class="u-label u-label-4">Ingresa la cantidad del producto</label>
                  <input type="text" id="text-2ca3" name="cantidad" class="u-grey-80 u-input u-input-rectangle u-input-4" placeholder="99">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-1">Registrar venta </a>
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


  
</body></html>