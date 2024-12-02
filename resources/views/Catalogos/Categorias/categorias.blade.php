<!--
    Descripción: Página para gestionar las categorías de productos. Permite registrar, modificar, eliminar y consultar categorías.
    Autor: Irma Mireya Castro Carranza
-->
<!DOCTYPE html>
<html style="font-size: 16px" lang="es">
    <head>
        <!-- wasa -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>categorias</title>
        <!-- <link rel="stylesheet" href="../../nicepage.css" media="screen" /> -->
        @vite(['../resources/css/nicepage.css', '../resources/css/Catalogos/categorias.css'])
        <link rel="stylesheet" href="categorias.css" media="screen" />
        <script
            class="u-script"
            type="text/javascript"
            src="../../jquery.js"
            defer=""
        ></script>
        <script
            class="u-script"
            type="text/javascript"
            src="../../nicepage.js"
            defer=""
        ></script>
        <meta name="generator" content="Nicepage 7.0.3, nicepage.com" />
        <meta name="referrer" content="origin" />
        <link
            id="u-theme-google-font"
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
        />

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "Cinematografia",
                "logo": "https://static.wixstatic.com/media/1c9a31_9c52ca01cb8749ccbddfff96429766a4~mv2.png/v1/fill/w_90,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/WarnerBros_Logo_1-1.png"
            }
        </script>
        <meta name="theme-color" content="#478ac9" />
        <meta property="og:title" content="categorias" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="website" />
        <meta data-intl-tel-input-cdn-path="intlTelInput/" />
    </head>
    <body
        data-path-to-root="../../"
        data-include-products="true"
        class="u-body u-xl-mode"
        data-lang="es"
    >
    @include('components.pageHeader')
        
        <section
            class="u-clearfix u-container-align-center u-image u-section-1"
            id="sec-e752"
            data-image-width="626"
            data-image-height="391"
        >
            <div class="u-clearfix u-sheet u-sheet-1">
                <h2 class="u-text u-text-default u-text-1">Categorías</h2>
                <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        <div
                            class="u-container-style u-list-item u-repeater-item u-list-item-1"
                            data-animation-name="customAnimationIn"
                            data-animation-duration="1000"
                            data-animation-delay="0"
                        >
                            <div
                                class="u-container-layout u-similar-container u-container-layout-1"
                            >
                                <img
                                    class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
                                    src="https://cdn-icons-png.flaticon.com/512/88/88450.png"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                />
                                <a
                                    href="{{ route('registrarCategoria') }}""
                                    class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-1"
                                    >Registrar
                                </a>
                            </div>
                        </div>
                        <div
                            class="u-container-style u-list-item u-repeater-item u-list-item-2"
                            data-animation-name="customAnimationIn"
                            data-animation-duration="1000"
                        >
                            <div
                                class="u-container-layout u-similar-container u-container-layout-2"
                            >
                                <img
                                    class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
                                    src="https://cdn.icon-icons.com/icons2/2778/PNG/512/create_edit_modify_icon_176960.png"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                    data-animation-name="customAnimationIn"
                                    data-animation-duration="1000"
                                />
                                <a
                                    href="{{ route('modificarCategoria') }}"
                                    class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-2"
                                    >Modificar
                                </a>
                            </div>
                        </div>
                        <div
                            class="u-container-style u-list-item u-repeater-item u-list-item-3"
                            data-animation-name="customAnimationIn"
                            data-animation-duration="1000"
                        >
                            <div
                                class="u-container-layout u-similar-container u-container-layout-3"
                            >
                                <img
                                    class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
                                    src="	https://cdn-icons-png.flaticon.com/512/1214/1214594.png"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                    data-animation-name="customAnimationIn"
                                    data-animation-duration="1000"
                                />
                                <a
                                    href="{{ route('eliminarCategoria') }}"
                                    class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-3"
                                    >Eliminar
                                </a>
                            </div>
                        </div>
                        <div
                            class="u-container-style u-list-item u-repeater-item u-list-item-4"
                            data-animation-name="customAnimationIn"
                            data-animation-duration="1000"
                        >
                            <div
                                class="u-container-layout u-similar-container u-container-layout-4"
                            >
                                <img
                                    class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4"
                                    src="https://cdn-icons-png.flaticon.com/512/1225/1225063.png"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                    data-animation-name="customAnimationIn"
                                    data-animation-duration="1000"
                                />
                                <a
                                    href="{{ route('consultarCategoria') }}"
                                    class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-body-color u-btn-4"
                                    >Consultar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('components.pageFooter')
    </body>
</html>
