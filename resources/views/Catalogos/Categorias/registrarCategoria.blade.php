<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>registrar_categorias</title>
    @vite(['../resources/css/nicepage.css', '../resources/css/catalogos/registrarCategoria.css'])
    <script class="u-script" type="text/javascript" src="../../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 7.0.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>
<body data-path-to-root="../../" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')
    
    <section class="u-clearfix u-image u-section-1" id="sec-4f8f" data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="{{ route('catalogoCategoria') }}" class="u-border-1 u-border-active-grey-40 u-border-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1">Regresar </a>
            <div class="u-align-center u-container-style u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0">
                <div class="u-container-layout">
                    <h2 class="u-text u-text-default u-text-1">Registrar Categorías </h2>
                    
                    <!-- Mostrar mensaje de sesión aquí -->
                    @if(session('mensaje'))
                        <div class="u-alert u-alert-success" role="alert">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    
                    <div class="u-form u-form-1">
                        <form action="{{ route('registerCategorie') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                            {{ csrf_field() }}
                            <div class="u-form-group">
                                <label for="name-29e0" class="u-label u-text-black u-label-1">ID</label>
                                <input type="text" id="name-29e0" name="id_categoria" value='{{$sigue}}' class="u-grey-75 u-input u-input-rectangle" required="required" readonly>
                            </div>
                            <div class="u-form-group">
                                <label for="email-29e0" class="u-label u-text-black u-label-2">Nombre</label>
                                <input type="text" placeholder="Introduzca el nombre de la categoría" id="email-29e0" name="nom_categoria" class="u-grey-75 u-input u-input-rectangle" required="required">
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <button type="submit" class="u-black u-border-2 u-border-active-grey-40 u-border-grey-40 u-border-hover-grey-40 u-btn u-btn-submit u-button-style u-btn-2">Registrar</button>
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
