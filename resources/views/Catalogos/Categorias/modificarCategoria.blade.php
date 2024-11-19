<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>modificar_categorias</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/catalogos/modificarCategoria.css'])
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
    <meta property="og:title" content="modificar_categorias">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
  @include('components.pageHeader')
  
    <section class="u-clearfix u-image u-section-1" id="sec-a80e" data-image-width="626" data-image-height="391">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{ route('catalogoCategoria') }}" class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar </a>
        <div class="u-align-center u-container-style u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0">
          <div class="u-container-layout">
            <h2 class="u-text u-text-default u-text-1">Modificar Categorías </h2>
            <div class="u-form u-form-1">
            <form action="{{ route('modificarCatFunc') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                @csrf
                <div class="u-form-group u-form-name">
                    <label for="name-29e0" class="u-label u-text-black u-label-1">ID</label>
                    <input type="text" placeholder="Introduzca el ID de la Categoría" id="name-29e0" name="id_categoria" class="u-grey-80 u-input u-input-rectangle" required="">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                    <button type="submit" class="u-black u-border-2 u-border-active-grey-40 u-border-grey-40 u-border-hover-grey-40 u-btn u-btn-submit u-button-style u-btn-2">Modificar</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    @include('components.pageFooter')  

</body></html>