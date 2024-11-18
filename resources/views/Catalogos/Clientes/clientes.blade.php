<!DOCTYPE html>
<html style="font-size: 16px" lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>Catalogar Clientes</title>
        @vite(['../resources/css/nicepage.css', '../resources/views/Catalogos/Clientes/clientes.css'])
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
        <meta property="og:title" content="clientes" />
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
            id="sec-c282"
            data-image-width="626"
            data-image-height="391"
        >
            <div class="u-clearfix u-sheet u-sheet-1">
                <h2 class="u-text u-text-default u-text-1">Clientes</h2>
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
                                    src="{{ asset('../resources/images/88450.png') }}"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                />
                                <a
                                    href="registrar_clientes.html"
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
                                    src="{{ asset('../resources/images/modify_icon.png') }}"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                />
                                <a
                                    href="modificar_clientes.html"
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
                                    src="{{ asset('../resources/images/1214594.png') }}"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                />
                                <a
                                    href="eliminar_clientes.html"
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
                                    src="{{ asset('../resources/images/1225063.png') }}"
                                    alt=""
                                    data-image-width="512"
                                    data-image-height="512"
                                />
                                <a
                                    href="consultar_clientes.html"
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
