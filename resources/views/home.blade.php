<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Warner Bros">
    <meta name="description" content="">
    <title>Inicio</title>
    @vite(['resources/css/nicepage.css', 'resources/css/index.css'])
    @vite(['resources/js/jquery.js', 'resources/js/nicepage.js'])
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
    <meta property="og:title" content="Inicio">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warner Bros</title>
</head>

<body data-home-page="Inicio.html" data-home-page-title="Inicio" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="es">
    @include('components.pageHeader')
    <section class="u-align-left u-clearfix u-container-align-left u-image u-shading u-section-1" id="sec-49a3"
        data-image-width="626" data-image-height="391">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-group-elements u-group-elements-1" data-animation-name="customAnimationIn"
                data-animation-duration="1000" data-animation-delay="0">
                <h1 class="u-align-left u-text u-text-default u-title u-text-1"> Warner Bros</h1>
                <p class="u-align-left u-large-text u-text u-text-variant u-text-2"> Warner Bros es una de las compañías
                    de entretenimiento más reconocidas a nivel mundial. Con una rica historia en la producción
                    cinematográfica, televisión y videojuegos, se ha destacado por crear contenidos que inspiran y
                    entretienen a las audiencias de todas las edades.</p>
                <img class="u-image u-image-default u-image-1"
                    src="https://static.wixstatic.com/media/1c9a31_fe519bb975204fa396494d49d44c3c0f~mv2.png/v1/crop/x_0,y_0,w_300,h_296,q_85,enc_auto/1c9a31_fe519bb975204fa396494d49d44c3c0f~mv2.png"
                    alt="" data-image-width="300" data-image-height="296">
            </div>
        </div>
    </section>
    <section class="u-black u-clearfix u-section-2" id="sec-5854">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <!--products-->
            <!--products_options_json-->
            <!--{"type":"Recent","source":"","tags":"","count":""}-->
            <!--/products_options_json-->
            <div class="u-expanded-width u-layout-horizontal u-products u-products-1" data-site-sorting-prop="created"
                data-site-sorting-order="desc" data-products-datasource="site" data-items-per-page="6"
                data-products-id="1">
                <div class="u-list-control"></div>
                <div class="u-repeater u-repeater-1">
                    <!--product_item-->
                    <div class="u-align-center u-container-align-center u-container-style u-products-item u-repeater-item"
                        data-product-id="6">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <!--product_image-->
                            <a class="u-product-title-link" href="{{ route('productoBeetlejuice') }}"><img
                                    src="{{ asset('../resources/images/beetlejuice2_poster.jpg') }}" alt=""
                                    class="u-expanded-width u-image u-image-default u-product-control u-image-1"></a>
                            <!--/product_image-->
                            <!--product_title-->
                            <h4 class="u-product-control u-text u-text-1">
                                <a class="u-product-title-link" href="{{ route('productoBeetlejuice') }}">Bettlejuice</a>
                            </h4>
                            <!--/product_title-->
                            <!--product_price-->
                            <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-old-price" style="text-decoration: line-through !important;">$175.00
                                    </div>
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-2-base"
                                        style="font-size: 1.25rem; font-weight: 700;">$150.00</div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                        </div>
                    </div>
                    <!--/product_item-->
                    <!--product_item-->
                    <div class="u-align-center u-container-align-center u-container-style u-products-item u-repeater-item"
                        data-product-id="4">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <!--product_image-->
                            <a class="u-product-title-link" href="products/harry-potter-y-el-c-liz-de-fuego.html"><img
                                    src="{{ asset('../resources/images/harryPotterCalizFuego_Poster.jpg') }}" alt=""
                                    class="u-expanded-width u-image u-image-default u-product-control u-image-2"></a><img
                                src="images/776587db.svg" class="u-product-second-image">
                            <!--/product_image-->
                            <!--product_title-->
                            <h4 class="u-product-control u-text u-text-2">
                                <a class="u-product-title-link"
                                    href="products/harry-potter-y-el-c-liz-de-fuego.html">Harry Potter y el Cáliz de
                                    Fuego</a>
                            </h4>
                            <!--/product_title-->
                            <!--product_price-->
                            <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-2">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-old-price" style="text-decoration: line-through !important;">$25.00
                                    </div>
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-2-base"
                                        style="font-size: 1.25rem; font-weight: 700;">$20.00</div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                        </div>
                    </div>
                    <!--/product_item-->
                    <!--product_item-->
                    <div class="u-align-center u-container-align-center u-container-style u-products-item u-repeater-item"
                        data-product-id="5">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <!--product_image-->
                            <a class="u-product-title-link" href="products/el-cad-ver-de-la-novia.html"><img
                                    src="{{ asset('../resources/images/20065463.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg') }}" alt=""
                                    class="u-expanded-width u-image u-image-default u-product-control u-image-3"></a>
                            <!--/product_image-->
                            <!--product_title-->
                            <h4 class="u-product-control u-text u-text-3">
                                <a class="u-product-title-link" href="products/el-cad-ver-de-la-novia.html">El Cadáver
                                    de la Novia</a>
                            </h4>
                            <!--/product_title-->
                            <!--product_price-->
                            <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-3">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-old-price" style="text-decoration: line-through !important;">$10.00
                                    </div>
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-2-base"
                                        style="font-size: 1.25rem; font-weight: 700;">$7.00</div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                        </div>
                    </div>
                    <!--/product_item-->
                    <!--product_item-->
                    <div class="u-align-center u-container-align-center u-container-style u-products-item u-repeater-item"
                        data-product-id="3">
                        <div class="u-container-layout u-similar-container u-container-layout-4">
                            <!--product_image-->
                            <a class="u-product-title-link" href="products/joker.html"><img
                                    src="images/https://assets.nicepagecdn.com/23104b51/6387330/images/Z3VGHPKH7JFWRFSDIZZROALSZQ2.png"
                                    alt=""
                                    class="u-expanded-width u-image u-image-default u-product-control u-image-4"></a><img
                                src="images/6537f30a.svg" class="u-product-second-image">
                            <!--/product_image-->
                            <!--product_title-->
                            <h4 class="u-product-control u-text u-text-4">
                                <a class="u-product-title-link" href="products/joker.html">Joker</a>
                            </h4>
                            <!--/product_title-->
                            <!--product_price-->
                            <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-4">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-old-price" style="text-decoration: line-through !important;">$25.00
                                    </div>
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-2-base"
                                        style="font-size: 1.25rem; font-weight: 700;">$19.00</div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                        </div>
                    </div>
                    <!--/product_item-->
                    <!--product_item-->
                    <div class="u-align-center u-container-align-center u-container-style u-products-item u-repeater-item"
                        data-product-id="6">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <!--product_image-->
                            <a class="u-product-title-link" href="products/playeras-de-hombre.html"><img
                                    src="images/53c4c417.svg" alt=""
                                    class="u-expanded-width u-image u-image-default u-product-control u-image-1"></a>
                            <!--/product_image-->
                            <!--product_title-->
                            <h4 class="u-product-control u-text u-text-1">
                                <a class="u-product-title-link" href="products/playeras-de-hombre.html">Playeras de
                                    Hombre</a>
                            </h4>
                            <!--/product_title-->
                            <!--product_price-->
                            <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-old-price" style="text-decoration: line-through !important;">$300.00
                                    </div>
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-2-base"
                                        style="font-size: 1.25rem; font-weight: 700;">$245.00</div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                        </div>
                    </div>
                    <!--/product_item-->
                    <!--product_item-->
                    <div class="u-align-center u-container-align-center u-container-style u-products-item u-repeater-item"
                        data-product-id="4">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <!--product_image-->
                            <a class="u-product-title-link" href="products/zapados-de-mujer.html"><img
                                    src="images/d754debf.svg" alt=""
                                    class="u-expanded-width u-image u-image-default u-product-control u-image-2"></a><img
                                src="images/414330ad.svg" class="u-product-second-image">
                            <!--/product_image-->
                            <!--product_title-->
                            <h4 class="u-product-control u-text u-text-2">
                                <a class="u-product-title-link" href="products/zapados-de-mujer.html">Zapados de
                                    Mujer</a>
                            </h4>
                            <!--/product_title-->
                            <!--product_price-->
                            <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-2">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-old-price" style="text-decoration: line-through !important;">$20.00
                                    </div>
                                    <!--/product_old_price-->
                                    <!--product_regular_price-->
                                    <div class="u-price u-text-palette-2-base"
                                        style="font-size: 1.25rem; font-weight: 700;">$17.00</div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                        </div>
                    </div>
                    <!--/product_item-->
                </div>
                <div class="u-list-control"></div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                    </span>
                </a>
            </div>
            <!--/products-->
        </div>
    </section>

    @include('components.pageFooter')

    <section
        class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-payment-dialog u-valign-middle u-dialog-section-5"
        id="sec-c14e">
        <div
            class="u-align-center u-container-align-center u-container-style u-dialog u-radius-25 u-shape-round u-white u-dialog-1">
            <div class="u-container-layout u-valign-top u-container-layout-1">
                <h5 class="u-align-left u-text u-text-1">Buy Now</h5>
                <div class="u-expanded-width u-products u-products-1" data-site-sorting-prop="created"
                    data-site-sorting-order="desc" data-items-per-page="1">
                    <div class="u-list-control"></div>
                    <div class="u-repeater u-repeater-1">
                        <!--product_item-->
                        <div class="u-container-style u-products-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-2">
                                <h5 class="u-align-left u-product-control u-text u-text-2">
                                    <a class="u-product-title-link" href="#">Product 1 Title</a>
                                </h5>
                                <div class="u-align-left u-product-control u-product-desc u-text u-text-3">
                                    <p>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc
                                        justo sagittis suscipit ultrices.</p>
                                </div>
                                <div class="u-align-left u-product-control u-product-quantity u-product-quantity-1">
                                    <div class="u-hidden u-quantity-label">Quantity</div>
                                    <div class="u-border-1 u-border-grey-30 u-quantity-input u-radius-50">
                                        <a class="disabled minus u-button-style u-quantity-button u-text-body-color">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="m 4 8 h 8" fill="none" stroke="currentColor" stroke-width="1"
                                                    fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                        <input class="u-input" type="text" value="1" pattern="[0-9]+">
                                        <a class="plus u-button-style u-quantity-button u-text-body-color">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                                <path d="m 4 8 h 8 M 8 4 v 8" fill="none" stroke="currentColor"
                                                    stroke-width="1" fill-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div data-add-zero-cents="true"
                                    class="u-align-left u-product-control u-product-price u-product-price-1">
                                    <div class="u-price-wrapper u-spacing-10">
                                        <div class="u-old-price" style="text-decoration: line-through !important;">
                                            $20.00</div>
                                        <div class="u-price" style="font-size: 1.25rem; font-weight: 700;">$17.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/product_item-->
                    </div>
                    <div class="u-list-control"></div>
                </div>
                <div class="u-expanded-width u-payment-services u-tab-links-align-justify u-tab-payment u-tab-vertical u-tabs u-payment-services-1"
                    data-payment-order-approved-message="Your order has been approved. Thank you!"
                    data-payment-order-cancelled-message="Unable to process your order. Please try again later.">
                    <ul class="u-tab-list u-unstyled" role="tablist">
                        <li class="u-tab-item" role="presentation"><a
                                class="active u-active-grey-10 u-button-style u-payment-paypal u-tab-link u-text-body-color"
                                id="link-tab-9cb3" href="#tab-9cb3" role="tab" aria-controls="tab-9cb3"
                                aria-selected="true"><input type="radio" class="u-field-input u-grey-15 u-radius-15"
                                    name="payment-group" checked="checked"><span>Paypal</span><svg class="u-svg-content"
                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px">
                                    <path fill="#009EE3" d="M11,5.9H18c3.8,0,5.2,1.9,4.9,4.7c-0.3,4.7-3.2,7.2-6.9,7.2h-1.9c-0.5,0-0.8,0.3-0.9,1.3l-0.8,4.3
  c-0.1,0.3-0.2,0.5-0.5,0.6H7.6c-0.4,0-0.5-0.3-0.4-1l2.6-16C9.9,6.3,10.2,5.9,11,5.9z"></path>
                                    <path fill="#113984" d="M6.7,0h7.1c2,0,4.3,0.1,5.9,1.5c1.1,0.9,1.6,2.4,1.5,4c-0.4,5.4-3.7,8.5-8,8.5H9.6c-0.6,0-0.9,0.4-1.2,1.5
  l-0.9,5.1C7.4,21,7.3,21.3,7,21.3H2.6C2,21.3,1.9,21,2,20.1L5.2,1.3C5.3,0.4,5.7,0,6.7,0z"></path>
                                    <path fill="#172C70" d="M8.6,14.8l1.3-7.9c0.1-0.7,0.5-1,1.3-1h7.1c1.2,0,2.1,0.2,2.8,0.5c-0.7,4.8-3.8,7.5-7.9,7.5H9.6
  C9.1,13.9,8.8,14.1,8.6,14.8z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="u-tab-item" role="presentation"><a
                                class="u-active-grey-10 u-button-style u-payment-stripe u-tab-link u-text-body-color"
                                id="link-tab-ab80" href="#tab-ab80" role="tab" aria-controls="tab-ab80"
                                aria-selected="false"><input type="radio" class="u-field-input u-grey-15 u-radius-15"
                                    name="payment-group"><span>Stripe</span><svg class="u-svg-content"
                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24">
                                    <path fill="#635BFF" d="M14,9.2c-2.3-0.8-3.4-1.5-3.4-2.4c0-0.8,0.8-1.3,2-1.3c2.3,0,4.7,0.8,6.4,1.6l0.9-5.5
  c-1.3-0.5-4-1.6-7.7-1.6C9.6,0,7.5,0.7,5.8,1.9C4.1,3.2,3.4,4.9,3.4,7.2c0,4,2.6,5.7,6.8,7.2c2.7,0.9,3.6,1.6,3.6,2.5
  c0,0.9-0.9,1.6-2.4,1.6c-1.9,0-5.2-0.9-7.3-2.1L3,22c1.8,0.9,5.1,2,8.7,2c2.8,0,5.1-0.7,6.6-1.9c1.8-1.3,2.7-3.2,2.7-5.7
  C20.9,12.3,18.2,10.7,14,9.2L14,9.2z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="u-tab-content">
                        <div class="u-container-style u-payment-paypal u-tab-active u-tab-pane" id="tab-9cb3"
                            role="tabpanel" aria-labelledby="link-tab-9cb3">
                            <div class="u-container-layout u-payment-services-inner u-container-layout-3">Loading...
                            </div>
                        </div>
                        <div class="u-container-style u-payment-stripe u-tab-pane" id="tab-ab80" role="tabpanel"
                            aria-labelledby="link-tab-ab80">
                            <div class="u-container-layout u-container-layout-4">
                                <a href="#" class="u-btn u-button-style u-stripe-button u-btn-1">Pay with Stripe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link"
                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use>
                </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9">
                    <rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2"
                        height="16"></rect>
                    <rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16"
                        height="2"></rect>
                </svg></button>
        </div>
    </section>
    <style>
    .u-dialog-section-5 .u-dialog-1 {
        width: 570px;
        min-height: 578px;
        height: auto;
        box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.2);
        margin: 60px auto;
    }

    .u-dialog-section-5 .u-container-layout-1 {
        padding: 34px 35px;
    }

    .u-dialog-section-5 .u-text-1 {
        font-weight: 700;
        margin: 0 165px 0 0;
    }

    .u-dialog-section-5 .u-products-1 {
        margin-top: 30px;
        margin-bottom: 0;
    }

    .u-dialog-section-5 .u-repeater-1 {
        grid-template-columns: 100%;
        min-height: 206px;
        grid-gap: 10px;
    }

    .u-dialog-section-5 .u-container-layout-2 {
        padding: 0 0 30px;
    }

    .u-dialog-section-5 .u-text-2 {
        background-image: none;
        margin: 0;
    }

    .u-dialog-section-5 .u-text-3 {
        font-size: 0.875rem;
        margin: 20px 0 0;
    }

    .u-dialog-section-5 .u-product-quantity-1 {
        width: 125px;
        margin: 30px auto 0 0;
    }

    .u-dialog-section-5 .u-product-price-1 {
        margin: -34px 0 0 auto;
    }

    .u-dialog-section-5 .u-payment-services-1 {
        min-height: 250px;
        min-width: 50px;
        margin: 0;
    }

    .u-dialog-section-5 .u-container-layout-3 {
        padding: 20px 0 0;
    }

    .u-dialog-section-5 .u-container-layout-4 {
        padding: 20px 0 0;
    }

    .u-dialog-section-5 .u-btn-1 {
        width: 100%;
        margin: 0 auto;
    }

    .u-dialog-section-5 .u-icon-1 {
        width: 20px;
        height: 20px;
        left: auto;
        top: 36px;
        position: absolute;
        right: 35px;
        padding: 0;
    }

    @media (max-width: 1199px) {
        .u-dialog-section-5 .u-text-1 {
            margin-right: 165px;
        }

        .u-dialog-section-5 .u-payment-services-1 {
            margin-right: initial;
            margin-left: initial;
        }
    }

    @media (max-width: 991px) {
        .u-dialog-section-5 .u-container-layout-1 {
            padding: 30px;
        }

        .u-dialog-section-5 .u-container-layout-3 {
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .u-dialog-section-5 .u-container-layout-4 {
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .u-dialog-section-5 .u-icon-1 {
            top: 32px;
            right: 30px;
        }
    } 
    @media (max-width: 767px) {
        .u-dialog-section-5 .u-dialog-1 {
            width: 540px;
        }
    }

    @media (max-width: 575px) {
        .u-dialog-section-5 .u-dialog-1 {
            width: 340px;
        }

        .u-dialog-section-5 .u-container-layout-1 {
            padding-left: 20px;
            padding-right: 20px;
        }

        .u-dialog-section-5 .u-text-1 {
            margin-right: 5px;
        }

        .u-dialog-section-5 .u-icon-1 {
            right: 20px;
        }
    }
    </style>
</body>
</html>
