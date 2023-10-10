@extends('layout.mainlayout-k',['activePage' => 'doctors'])

@section('css')
<style>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel='stylesheet' id='astra-theme-css-css'
    href="{{ url('assets/wp-content/themes/astra/assets/css/minified/main.min3d81.css') }}" />
<link rel='stylesheet' id='wc-blocks-vendors-style-css'
    href="{{ url('assets/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-stylead26.css') }}" />
<link rel='stylesheet' id='wc-blocks-style-css'
    href="{{ url('assets/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-stylead26.css') }}" />
<link rel='stylesheet' id='jet-engine-frontend-css'
    href="{{ url('assets/wp-content/plugins/jet-engine/assets/css/frontend0fd2.css') }}" />
<link rel='stylesheet' id='woocommerce-layout-css'
    href="{{ url('assets/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-layout-grid.min3d81.css') }}" />
<link rel='stylesheet' id='woocommerce-smallscreen-css'
    href="{{ url('assets/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-smallscreen-grid.min3d81.css') }}" />
<link rel='stylesheet' id='woocommerce-general-css'
    href="{{ url('assets/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-grid.min3d81.css') }}" />

<link rel='stylesheet' id='woocommerce-mercadopago-global-css-css'
    href="{{ url('assets/wp-content/plugins/woocommerce-mercadopago/assets/css/global.mindf53.css') }}" />
<link rel='stylesheet' id='jet-ab-front-style-css'
    href="{{ url('assets/wp-content/plugins/jet-appointments-booking/assets/css/public/jet-appointments-booking7406.css') }}" />
<link rel='stylesheet' id='jet-popup-frontend-css'
    href="{{ url('assets/wp-content/plugins/jet-popup/assets/css/jet-popup-frontend7406.css') }}" />
<link rel='stylesheet' id='jet-reviews-frontend-css'
    href="{{ url('assets/wp-content/plugins/jet-reviews/assets/css/jet-reviews254d.css') }}" />
<link rel='stylesheet' id='elementor-frontend-css'
    href="{{ url('assets/wp-content/plugins/elementor/assets/css/frontend-lite.mina1c3.css') }}" />
<link rel='stylesheet' id='elementor-post-1119-css'
    href="{{ url('assets/wp-content/uploads/elementor/css/post-11197f34.css') }}" />
<link rel='stylesheet' id='elementor-icons-css'
    href="{{ url('assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minfc13.css') }}" />
<link rel='stylesheet' id='swiper-css'
    href="{{ url('assets/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css') }}" />
<link rel='stylesheet' id='elementor-post-5-css'
    href="{{ url('assets/wp-content/uploads/elementor/css/post-56771.css') }}" />
<link rel='stylesheet' id='elementor-pro-css'
    href="{{ url('assets/wp-content/plugins/elementor-pro/assets/css/frontend-lite.mina1c3.css') }}" />
<link rel='stylesheet' id='elementor-global-css'
    href="{{ url('assets/wp-content/uploads/elementor/css/global6771.css') }}" />
<link rel='stylesheet' id='elementor-post-1531-css'
    href="{{ url('assets/wp-content/uploads/elementor/css/post-15317f34.css') }}" />
<link rel='stylesheet' id='elementor-post-391-css'
    href="{{ url('assets/wp-content/uploads/elementor/css/post-3916f8c.css') }}" />
<link rel='stylesheet' id='elementor-post-409-css'
    href="{{ url('assets/wp-content/uploads/elementor/css/post-409d506.css') }}" />
<link rel='stylesheet' id='elementor-post-1589-css'
    href="{{ url('assets/wp-content/uploads/elementor/css/post-15897f34.css') }}" />
<link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Quicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.3.1'
    media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'
    href="{{ url('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css') }}" />
<link rel='stylesheet' id='elementor-icons-fa-regular-css'
    href="{{ url('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css') }}" />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'
    href="{{ url('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css') }}" />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'
    href="{{ url('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css') }}" />
<link rel='stylesheet' id='elementor-start-rating' href="{{ asset('assets/css/elementor-start-rating.css') }}" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
@endsection
@section('content')
    <div class="hfeed site" id="page">
        <div id="content" class="site-content">
            <div class="ast-container">
                <div data-elementor-type="wp-page" data-elementor-id="1531" class="elementor elementor-1531"
                    data-elementor-post-type="page">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-dd90cba elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="dd90cba" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-79ddc8b"
                                data-id="79ddc8b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-9d74567 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="9d74567" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4e1b7b5"
                                                data-id="4e1b7b5" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1ec9db9 elementor-widget elementor-widget-heading"
                                                        data-id="1ec9db9" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.14.0 - 26-06-2023 */
                                                                .elementor-heading-title {
                                                                    padding: 0;
                                                                    margin: 0;
                                                                    line-height: 1
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                                    color: inherit;
                                                                    font-size: inherit;
                                                                    line-height: inherit
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                                    font-size: 15px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                                    font-size: 19px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                                    font-size: 29px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                                    font-size: 39px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                                    font-size: 59px
                                                                }
                                                            </style>
                                                            <p class="elementor-heading-title elementor-size-default">
                                                                ¿Buscas un psicólogo en línea? ¡Encuentra la mejor ayuda
                                                                psicológica!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-db9ed31 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="db9ed31" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bb87f0f"
                                                data-id="bb87f0f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0ce8ded elementor-widget elementor-widget-heading"
                                                        data-id="0ce8ded" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">
                                                                Modelos de terapia</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-74105d8 jet-filters-counter-position-default elementor-widget elementor-widget-jet-smart-filters-radio"
                                                        data-id="74105d8" data-element_type="widget"
                                                        data-widget_type="jet-smart-filters-radio.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="jet-smart-filters-radio jet-filter "
                                                                data-indexer-rule="show" data-show-counter=""
                                                                data-change-counter="always">
                                                                <div class="jet-radio-list"
                                                                    data-query-type="meta_query"
                                                                    data-query-var="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                    data-smart-filter="radio" data-filter-id="1175"
                                                                    data-apply-type="ajax"
                                                                    data-content-provider="jet-engine"
                                                                    data-additional-providers="" data-query-id="prof"
                                                                    data-active-label=""
                                                                    data-layout-options="{&quot;show_label&quot;:&quot;&quot;,&quot;display_options&quot;:{&quot;show_items_label&quot;:false,&quot;show_decorator&quot;:&quot;yes&quot;,&quot;filter_image_size&quot;:&quot;full&quot;,&quot;show_counter&quot;:false}}"
                                                                    data-query-var-suffix="">
                                                                    <form class="jet-radio-list-wrapper">
                                                                        <fieldset>
                                                                            <legend style="display:none;">filtservi
                                                                            </legend>
                                                                            <div
                                                                                class="jet-radio-list__row jet-filter-row">
                                                                                <label class="jet-radio-list__item">
                                                                                    <input type="radio"
                                                                                        class="jet-radio-list__input"
                                                                                        name="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                                        value="all"
                                                                                        data-label="Todos"
                                                                                        aria-label="Todos">
                                                                                    <div
                                                                                        class="jet-radio-list__button">
                                                                                        <span
                                                                                            class="jet-radio-list__decorator"><i
                                                                                                class="jet-radio-list__checked-icon fa fa-check"></i></span>
                                                                                        <span
                                                                                            class="jet-radio-list__label">Todos</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="jet-radio-list__row jet-filter-row">
                                                                                <label class="jet-radio-list__item">
                                                                                    <input type="radio"
                                                                                        class="jet-radio-list__input"
                                                                                        name="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                                        value="1480"
                                                                                        data-label="Fortaleciendo Lazos Familiares"
                                                                                        aria-label="Fortaleciendo Lazos Familiares">
                                                                                    <div
                                                                                        class="jet-radio-list__button">
                                                                                        <span
                                                                                            class="jet-radio-list__decorator"><i
                                                                                                class="jet-radio-list__checked-icon fa fa-check"></i></span>
                                                                                        <span
                                                                                            class="jet-radio-list__label">Fortaleciendo
                                                                                            Lazos Familiares</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="jet-radio-list__row jet-filter-row">
                                                                                <label class="jet-radio-list__item">
                                                                                    <input type="radio"
                                                                                        class="jet-radio-list__input"
                                                                                        name="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                                        value="1479"
                                                                                        data-label="Terapia Individual"
                                                                                        aria-label="Terapia Individual">
                                                                                    <div
                                                                                        class="jet-radio-list__button">
                                                                                        <span
                                                                                            class="jet-radio-list__decorator"><i
                                                                                                class="jet-radio-list__checked-icon fa fa-check"></i></span>
                                                                                        <span
                                                                                            class="jet-radio-list__label">Terapia
                                                                                            Individual</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="jet-radio-list__row jet-filter-row">
                                                                                <label class="jet-radio-list__item">
                                                                                    <input type="radio"
                                                                                        class="jet-radio-list__input"
                                                                                        name="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                                        value="1478"
                                                                                        data-label="Orientación Vocacional"
                                                                                        aria-label="Orientación Vocacional">
                                                                                    <div
                                                                                        class="jet-radio-list__button">
                                                                                        <span
                                                                                            class="jet-radio-list__decorator"><i
                                                                                                class="jet-radio-list__checked-icon fa fa-check"></i></span>
                                                                                        <span
                                                                                            class="jet-radio-list__label">Orientación
                                                                                            Vocacional</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="jet-radio-list__row jet-filter-row">
                                                                                <label class="jet-radio-list__item">
                                                                                    <input type="radio"
                                                                                        class="jet-radio-list__input"
                                                                                        name="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                                        value="1477"
                                                                                        data-label="Terapia para Niños"
                                                                                        aria-label="Terapia para Niños">
                                                                                    <div
                                                                                        class="jet-radio-list__button">
                                                                                        <span
                                                                                            class="jet-radio-list__decorator"><i
                                                                                                class="jet-radio-list__checked-icon fa fa-check"></i></span>
                                                                                        <span
                                                                                            class="jet-radio-list__label">Terapia
                                                                                            para Niños</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="jet-radio-list__row jet-filter-row">
                                                                                <label class="jet-radio-list__item">
                                                                                    <input type="radio"
                                                                                        class="jet-radio-list__input"
                                                                                        name="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                                        value="1035"
                                                                                        data-label="Atención Psiquiátrica"
                                                                                        aria-label="Atención Psiquiátrica">
                                                                                    <div
                                                                                        class="jet-radio-list__button">
                                                                                        <span
                                                                                            class="jet-radio-list__decorator"><i
                                                                                                class="jet-radio-list__checked-icon fa fa-check"></i></span>
                                                                                        <span
                                                                                            class="jet-radio-list__label">Atención
                                                                                            Psiquiátrica</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                            <div
                                                                                class="jet-radio-list__row jet-filter-row">
                                                                                <label class="jet-radio-list__item">
                                                                                    <input type="radio"
                                                                                        class="jet-radio-list__input"
                                                                                        name="relation_22bab48fbac3f1f91618d9d17a84d389"
                                                                                        value="1034"
                                                                                        data-label="Terapias de pareja"
                                                                                        aria-label="Terapias de pareja">
                                                                                    <div
                                                                                        class="jet-radio-list__button">
                                                                                        <span
                                                                                            class="jet-radio-list__decorator"><i
                                                                                                class="jet-radio-list__checked-icon fa fa-check"></i></span>
                                                                                        <span
                                                                                            class="jet-radio-list__label">Terapias
                                                                                            de pareja</span>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-743b1e1 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="743b1e1" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.14.0 - 26-06-2023 */
                                                                .elementor-widget-divider {
                                                                    --divider-border-style: none;
                                                                    --divider-border-width: 1px;
                                                                    --divider-color: #0c0d0e;
                                                                    --divider-icon-size: 20px;
                                                                    --divider-element-spacing: 10px;
                                                                    --divider-pattern-height: 24px;
                                                                    --divider-pattern-size: 20px;
                                                                    --divider-pattern-url: none;
                                                                    --divider-pattern-repeat: repeat-x
                                                                }

                                                                .elementor-widget-divider .elementor-divider {
                                                                    display: flex
                                                                }

                                                                .elementor-widget-divider .elementor-divider__text {
                                                                    font-size: 15px;
                                                                    line-height: 1;
                                                                    max-width: 95%
                                                                }

                                                                .elementor-widget-divider .elementor-divider__element {
                                                                    margin: 0 var(--divider-element-spacing);
                                                                    flex-shrink: 0
                                                                }

                                                                .elementor-widget-divider .elementor-icon {
                                                                    font-size: var(--divider-icon-size)
                                                                }

                                                                .elementor-widget-divider .elementor-divider-separator {
                                                                    display: flex;
                                                                    margin: 0;
                                                                    direction: ltr
                                                                }

                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                                    align-items: center
                                                                }

                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                                    display: block;
                                                                    content: "";
                                                                    border-bottom: 0;
                                                                    flex-grow: 1;
                                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                                }

                                                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                                    flex-grow: 0;
                                                                    flex-shrink: 100
                                                                }

                                                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                                    content: none
                                                                }

                                                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                                    margin-left: 0
                                                                }

                                                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                                    flex-grow: 0;
                                                                    flex-shrink: 100
                                                                }

                                                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                                    content: none
                                                                }

                                                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                                    margin-right: 0
                                                                }

                                                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                                }

                                                                .elementor-widget-divider--separator-type-pattern {
                                                                    --divider-border-style: none
                                                                }

                                                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                                .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                                    width: 100%;
                                                                    min-height: var(--divider-pattern-height);
                                                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                                    mask-size: var(--divider-pattern-size) 100%;
                                                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                                    mask-repeat: var(--divider-pattern-repeat);
                                                                    background-color: var(--divider-color);
                                                                    -webkit-mask-image: var(--divider-pattern-url);
                                                                    mask-image: var(--divider-pattern-url)
                                                                }

                                                                .elementor-widget-divider--no-spacing {
                                                                    --divider-pattern-size: auto
                                                                }

                                                                .elementor-widget-divider--bg-round {
                                                                    --divider-pattern-repeat: round
                                                                }

                                                                .rtl .elementor-widget-divider .elementor-divider__text {
                                                                    direction: rtl
                                                                }

                                                                .e-con-inner>.elementor-widget-divider,
                                                                .e-con>.elementor-widget-divider {
                                                                    width: var(--container-widget-width, 100%);
                                                                    --flex-grow: var(--container-widget-flex-grow)
                                                                }
                                                            </style>
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-48654c9 elementor-widget elementor-widget-heading"
                                                        data-id="48654c9" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">
                                                                Rango de precios</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3b8aa60 elementor-widget elementor-widget-jet-smart-filters-range"
                                                        data-id="3b8aa60" data-element_type="widget"
                                                        data-widget_type="jet-smart-filters-range.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="jet-smart-filters-range jet-filter "
                                                                data-indexer-rule="show" data-show-counter=""
                                                                data-change-counter="always">
                                                                <div class="jet-range" data-query-type="meta_query"
                                                                    data-query-var="_app_price"
                                                                    data-smart-filter="range" data-filter-id="1138"
                                                                    data-apply-type="ajax-reload"
                                                                    data-content-provider="jet-engine"
                                                                    data-additional-providers="" data-query-id="prof"
                                                                    data-active-label=""
                                                                    data-layout-options="{&quot;show_label&quot;:&quot;&quot;,&quot;display_options&quot;:{&quot;show_items_label&quot;:false,&quot;show_decorator&quot;:false,&quot;filter_image_size&quot;:&quot;full&quot;,&quot;show_counter&quot;:false}}"
                                                                    data-query-var-suffix="range"
                                                                    data-format="{&quot;decimal_num&quot;:0,&quot;decimal_sep&quot;:&quot;.&quot;,&quot;thousands_sep&quot;:&quot;&quot;}">
                                                                    <fieldset class="jet-range__slider">
                                                                        <legend style="display:none;">filtro2 - slider
                                                                        </legend>
                                                                        <div class="jet-range__slider__track">
                                                                            <div
                                                                                class="jet-range__slider__track__range">
                                                                            </div>
                                                                        </div>
                                                                        <input type="range"
                                                                            class="jet-range__slider__input jet-range__slider__input--min"
                                                                            step="5" min="10"
                                                                            max="350" value="10"
                                                                            aria-label="Minimal value">
                                                                        <input type="range"
                                                                            class="jet-range__slider__input jet-range__slider__input--max"
                                                                            step="5" min="10"
                                                                            max="350" value="350"
                                                                            aria-label="Maximum value">
                                                                    </fieldset>
                                                                    <div class="jet-range__inputs">
                                                                        <fieldset class="jet-range__inputs__container">
                                                                            <legend style="display:none;">filtro2 -
                                                                                inputs</legend>
                                                                            <div class="jet-range__inputs__group">
                                                                                <span
                                                                                    class="jet-range__inputs__group__text">$/.</span>
                                                                                <input type="number"
                                                                                    class="jet-range__inputs__min"
                                                                                    step="5" min="10"
                                                                                    max="350" value="10"
                                                                                    aria-label="Minimal value" />
                                                                            </div>
                                                                            <div class="jet-range__inputs__group">
                                                                                <span
                                                                                    class="jet-range__inputs__group__text">$/.</span>
                                                                                <input type="number"
                                                                                    class="jet-range__inputs__max"
                                                                                    step="5" min="10"
                                                                                    max="350" value="350"
                                                                                    aria-label="Maximum value" />
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="apply-filters">
                                                                <button type="button"
                                                                    class="apply-filters__button">Aplicar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b9b3fb9"
                                                data-id="b9b3fb9" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-756b4be elementor-widget elementor-widget-jet-listing-grid"
                                                        data-id="756b4be" data-element_type="widget" id="prof"
                                                        data-settings="{&quot;columns&quot;:&quot;1&quot;}"
                                                        data-widget_type="jet-listing-grid.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="jet-listing-grid jet-listing">
                                                                @if (count($doctors['data']) > 0)
                                                                    <div class="jet-listing-grid__items grid-col-desk-1 grid-col-tablet-1 grid-col-mobile-1 jet-listing-grid--1119">
                                                                        @include('website.display_doctors1', ['doctor' => $doctors])
                                                                    </div>
                                                                @else
                                                                    <div class="flex justify-center mt-10 font-fira-sans font-normal text-base text-gray">
                                                                        {{ __('No hay data disponible') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @if (count($doctors) > 0)
                                                            @if ($doctors['current_page'] != $doctors['last_page'])
                                                                <div
                                                                    class="flex justify-center pt-8 pb-32 2xl:ml-64 xl:ml-72 xlg:ml-64 lg:ml-54 xmd:ml-44 sm:ml-20 xsm:ml-5 xxsm:ml-4">
                                                                    <div class="sm:py-3 md:py-0 msm:py-3 xsm:py-3 xxsm:py-3" id="">
                                                                        <button id="more-doctor" type="button"  data-te-ripple-init data-te-ripple-color="light" class="text-sm font-normal font-fira-sans leading-4 md:text-sm text-primary border border-primary text-center py-3.5 px-6">{{ __('View More') }}</button>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @else
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-47d2193 elementor-widget elementor-widget-html"
                                                        data-id="47d2193" data-element_type="widget"
                                                        data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <script>
                                                        jQuery(document).ready(function($) {

                                                            const caja = document.querySelector(".jet-radio-list-wrapper")
                                                            const botones = document.querySelectorAll(".modalbtn")

                                                            //console.log(caja)

                                                            caja.addEventListener("click", e => {
                                                                console.log(e.target.closest(".jet-radio-list__item"))
                                                            })


                                                            $("#prof a").on("click", function() {

                                                                console.log("Botón clickeado: ", $(this));
                                                            });


                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div> <!-- ast-container -->
        </div><!-- #content -->
        <div data-elementor-type="popup" data-elementor-id="1589"
            class="elementor elementor-1589 elementor-location-popup"
            data-elementor-settings="{&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}"
            data-elementor-post-type="elementor_library">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-10a31b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="10a31b3" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c812aa0"
                        data-id="c812aa0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fdb0468 elementor-widget elementor-widget-jet-engine-booking-form"
                                data-id="fdb0468" data-element_type="widget"
                                data-widget_type="jet-engine-booking-form.default">
                                <div class="elementor-widget-container">
                                    <form class="jet-form layout-column submit-type-reload"
                                        action="https://pruebas.designuxperu.com/especialistas/?jet_engine_action=book&amp;nocache=1695083707"
                                        method="POST" data-form-id="1031"><input class="jet-form__field hidden-field"
                                            type="hidden" name="_jet_engine_booking_form_id" value="1031"
                                            data-field-name="_jet_engine_booking_form_id"><input
                                            class="jet-form__field hidden-field" type="hidden"
                                            name="_jet_engine_refer"
                                            value="https://pruebas.designuxperu.com/especialistas"
                                            data-field-name="_jet_engine_refer">
                                        <div class="jet-form-row jet-form-row--hidden">
                                            <div class="jet-form-col jet-form-col-12  field-type-hidden  jet-form-field-container"
                                                data-field="page_id" data-conditional="false"><input
                                                    class="jet-form__field hidden-field" type="hidden" name="page_id"
                                                    value="1531" data-field-name="page_id"></div>
                                        </div>
                                        <div class="jet-form-row jet-form-row--first-visible">
                                            <div class="jet-form-col jet-form-col-12  field-type-select  jet-form-field-container"
                                                data-field="service_id" data-conditional="false">
                                                <div class="jet-form__label">
                                                    <span class="jet-form__label-text">Selecciona el servicio<span
                                                            class="jet-form__required">*</span></span>
                                                </div><select required="required" name="service_id"
                                                    data-field-name="service_id" id="service_id" data-default-val=""
                                                    class="jet-form__field select-field">
                                                    <option value="1480">Fortaleciendo Lazos Familiares</option>
                                                    <option value="1479">Terapia Individual</option>
                                                    <option value="1478">Orientación Vocacional</option>
                                                    <option value="1477">Terapia para Niños</option>
                                                    <option value="1035">Atención Psiquiátrica</option>
                                                    <option value="1034">Terapias de pareja</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="jet-form-row">
                                            <div class="jet-form-col jet-form-col-12  field-type-appointment_provider  jet-form-field-container"
                                                data-field="provider_id" data-conditional="false">
                                                <div class="jet-form__label">
                                                    <span class="jet-form__label-text">Profesional<span
                                                            class="jet-form__required">*</span></span>
                                                </div><select class="appointment-provider jet-form__field select-field"
                                                    name="provider_id" required
                                                    data-args="{&quot;service&quot;:{&quot;field&quot;:&quot;service_id&quot;},&quot;api&quot;:{&quot;date_slots&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-date-slots\/&quot;,&quot;refresh_dates&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-refresh-date\/&quot;,&quot;service_providers&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-service-providers\/&quot;,&quot;provider_services&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-provider-services\/&quot;,&quot;appointments_list&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointments-list\/&quot;,&quot;delete_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/delete-appointment\/&quot;,&quot;update_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/update-appointment\/&quot;,&quot;add_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-add-appointment\/&quot;,&quot;update_workflows&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/update-appointment-workflows\/&quot;,&quot;appointment_meta&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-meta\/&quot;,&quot;get_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/get-appointment\/&quot;},&quot;placeholder&quot;:&quot;Select...&quot;}"></select>
                                            </div>
                                        </div>
                                        <div class="jet-form-row">
                                            <div class="jet-form-col jet-form-col-12  field-type-appointment_date  jet-form-field-container"
                                                data-field="appointment_date" data-conditional="false">
                                                <div class="jet-apb-calendar-wrapper">
                                                    <div class="appointment-calendar jet-apb-calendar"
                                                        data-args="{&quot;booking_type&quot;:&quot;slot&quot;,&quot;excludedDates&quot;:[],&quot;worksDates&quot;:[],&quot;availableWeekDays&quot;:[&quot;monday&quot;,&quot;tuesday&quot;,&quot;wednesday&quot;,&quot;thursday&quot;,&quot;friday&quot;],&quot;service&quot;:{&quot;field&quot;:&quot;service_id&quot;},&quot;providerIsset&quot;:true,&quot;provider&quot;:{&quot;field&quot;:&quot;provider_id&quot;},&quot;inputName&quot;:&quot;appointment_date&quot;,&quot;isRequired&quot;:true,&quot;allowedServices&quot;:{&quot;field&quot;:&quot;provider_id&quot;}}">
                                                    </div>

                                                    <div class="jet-apb-calendar-appointments-list-wrapper"
                                                        style="display: none">
                                                        <div class="jet-form__heading">
                                                            <span class="jet-form__label-text">Appointment details:</span>
                                                        </div>
                                                        <div class="jet-apb-calendar-appointments-list"></div>
                                                    </div>
                                                    <div class="jet-apb-calendar-notification" style="display: none">
                                                        <div class="jet-apb-calendar-notification-service">Please, select
                                                            the service first.</div>
                                                        <div class="jet-apb-calendar-notification-provider">Please, select
                                                            the provider first.</div>
                                                        <div class="jet-apb-calendar-notification-service-field">Please
                                                            set service field for current calendar</div>
                                                        <div class="jet-apb-calendar-notification-max-slots">Sorry. You
                                                            have the max number of appointments.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jet-form-col jet-form-col-12  field-type-text  jet-form-field-container"
                                                data-field="user_email" data-conditional="false">
                                                <div class="jet-form__label">
                                                    <span class="jet-form__label-text">Correo electrónico<span
                                                            class="jet-form__required">*</span></span>
                                                </div><input class="jet-form__field text-field " value=""
                                                    required="required" name="user_email" id="user_email"
                                                    type="email" data-field-name="user_email">
                                            </div>
                                        </div>
                                        <div class="jet-form-row jet-form-row--submit">
                                            <div class="jet-form-col jet-form-col-12  field-type-submit  jet-form-field-container"
                                                data-field="Submit" data-conditional="false">
                                                <div class="jet-form__submit-wrap">
                                                    <button class="jet-form__submit submit-type-reload"
                                                        type="submit">Ir a Pagos</button>
                                                </div>
                                            </div>
                                        </div><input class="jet-form__field hidden-field" type="hidden"
                                            name="_jet_engine_nonce" value="6ba4cf78e9"
                                            data-field-name="_jet_engine_nonce">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='elementor-post-1605-css'
        href="{{ url('assets/wp-content/uploads/elementor/css/post-160552ff.css') }}" />
    <link rel='stylesheet' id='vanilla-calendar-css'
        href="{{ url('assets/wp-content/plugins/jet-appointments-booking/assets/css/public/vanilla-calendar7406.css') }}" />
    <link rel='stylesheet' id='flatpickr-css'
        href="{{ url('assets/wp-content/plugins/jet-appointments-booking/assets/lib/flatpickr/flatpickr.min7406.css') }}" />
    <link rel='stylesheet' id='e-animations-css'
        href="{{ url('assets/wp-content/plugins/elementor/assets/lib/animations/animations.mina1c3.css') }}" />
    <link rel='stylesheet' id='font-awesome-css'
        href="{{ url('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css') }}" />
    <link rel='stylesheet' id='jet-smart-filters-css'
        href="{{ url('assets/wp-content/plugins/jet-smart-filters/assets/css/public55a0.css') }}" />
    <style id='jet-smart-filters-inline-css'>
        .jet-filter {
            --tabindex-color: #0085f2;
            --tabindex-shadow-color: rgba(0, 133, 242, 0.4);
        }
    </style>
    <script id='astra-theme-js-js-extra'>
        var astra = {
            "break_point": "921",
            "isRtl": "",
            "is_scroll_to_id": "1",
            "is_scroll_to_top": "1",
            "is_header_footer_builder_active": "1"
        };
    </script>
    <script src="{{ url('assets/wp-content/themes/astra/assets/js/minified/frontend.min3d81.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min5125.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min03f8.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min5125.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/jet-engine/assets/lib/jet-plugins/jet-pluginsf488.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/jet-popup/assets/js/lib/anime-js/anime.min4c56.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/jet-popup/assets/js/lib/waypoints/jquery.waypoints.min4c56.js') }}">
    </script>
    <script src="{{ url('assets/wp-content/plugins/jet-popup/assets/js/jet-popup-frontend7406.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js') }}">
    </script>
    <script src="{{ url('assets/wp-content/plugins/jet-engine/assets/js/frontend0fd2.js') }}"></script>
    <script id="moment-js-after">
        moment.updateLocale('es_ES', {
            "months": ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre",
                "octubre", "noviembre", "diciembre"
            ],
            "monthsShort": ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            "weekdays": ["domingo", "lunes", "martes", "mi\u00e9rcoles", "jueves", "viernes", "s\u00e1bado"],
            "weekdaysShort": ["Dom", "Lun", "Mar", "Mi\u00e9", "Jue", "Vie", "S\u00e1b"],
            "week": {
                "dow": 1
            },
            "longDateFormat": {
                "LT": "H:i",
                "LTS": null,
                "L": null,
                "LL": "j \\d\\e F \\d\\e Y",
                "LLL": "j \\d\\e F \\d\\e Y H:i",
                "LLLL": null
            }
        });
    </script>

    <script src="{{ url('assets/wp-content/plugins/jet-appointments-booking/assets/js/public/vanilla-calendar7406.js') }}">
    </script>
    <script src="{{ url('assets/wp-content/plugins/jet-appointments-booking/assets/lib/flatpickr/flatpickr7406.js') }}">
    </script>
    <script id='jet-ab-front-init-js-extra'>
        var JetAPBData = {
            "api": {
                "date_slots": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-date-slots\/",
                "refresh_dates": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-refresh-date\/",
                "service_providers": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-service-providers\/",
                "provider_services": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-provider-services\/",
                "appointments_list": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointments-list\/",
                "delete_appointment": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/delete-appointment\/",
                "update_appointment": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/update-appointment\/",
                "add_appointment": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-add-appointment\/",
                "update_workflows": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/update-appointment-workflows\/",
                "appointment_meta": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-meta\/",
                "get_appointment": "https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/get-appointment\/"
            },
            "week_days": ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"],
            "start_of_week": "1",
            "available_week_days": ["monday", "tuesday", "wednesday", "thursday", "friday"],
            "time_format": "HH:mm",
            "layout": "default",
            "scroll_to_details": "",
            "utc_offset": "7200",
            "providers": {
                "1379": "danilo",
                "1278": "Tatiana",
                "1174": "Lupe",
                "1037": "Carla Casas",
                "1036": "Rub\u00e9n Mota",
                "1033": "Mar\u00eda Alvarado"
            },
            "services": {
                "1480": "Fortaleciendo Lazos Familiares",
                "1479": "Terapia Individual",
                "1478": "Orientaci\u00f3n Vocacional",
                "1477": "Terapia para Ni\u00f1os",
                "1035": "Atenci\u00f3n Psiqui\u00e1trica",
                "1034": "Terapias de pareja"
            },
            "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                "November", "December"
            ],
            "shortWeekday": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
        };
    </script>
    <script
        src="{{ url('assets/wp-content/plugins/jet-appointments-booking/assets/js/public/appointments-init7406.js') }}">
    </script>
    <script src="{{ url('assets/wp-content/plugins/jet-engine/assets/js/frontend-forms0fd2.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.mina1c3.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/elementor/assets/js/webpack.runtime.mina1c3.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/elementor/assets/js/frontend-modules.mina1c3.js') }}"></script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/pruebas.designuxperu.com\/wp-admin\/admin-ajax.php",
            "nonce": "5eda2bd2a2",
            "urls": {
                "assets": "https:\/\/pruebas.designuxperu.com\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/pruebas.designuxperu.com\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "woocommerce": {
                "menu_cart": {
                    "cart_page_url": "https:\/\/pruebas.designuxperu.com\/carrito\/",
                    "checkout_page_url": "https:\/\/pruebas.designuxperu.com\/finalizar-compra\/",
                    "fragments_nonce": "8e5e222c80"
                }
            },
            "facebook_sdk": {
                "lang": "es_ES",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/pruebas.designuxperu.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script src="{{ url('assets/wp-content/plugins/elementor-pro/assets/js/frontend.mina1c3.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js') }}"></script>
    {{-- <script id="elementor-frontend-js-before"> --}}
    <script src="{{ url('assets/wp-content/plugins/elementor/assets/js/frontend.mina1c3.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/elementor-pro/assets/js/elements-handlers.mina1c3.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/jet-reviews/assets/js/jet-reviews-frontend254d.js') }}"></script>
    <script src="{{ url('assets/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.mina1c3.js') }}"></script>
    {{-- <script id='jet-smart-filters-js-extra'> --}}
    <script src="{{ url('assets/wp-content/plugins/jet-smart-filters/assets/js/public55a0.js') }}"></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window
            .addEventListener("hashchange", function() {
                var t, e = location.hash.substring(1);
                /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i
                    .test(t.tagName) || (t.tabIndex = -1), t.focus())
            }, !1);
    </script>
    <script>
        (function() {

            'use strict';

            function loadServices(namespace, providerWrapper, data) {

                let $input = this;
                let service = $input.val();
                let $loader = $input.find('.appointment-provider__loader');
                let isAjax = window.JetAPBisAjax || false;

                if (!service) {
                    return;
                }

                if ($loader.length) {
                    $loader.removeClass('appointment-provider__loader-hidden');
                }

                jQuery.ajax({
                    url: data.api.service_providers,
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        service: service,
                        custom_template: data.custom_template,
                        args_str: data.args_str,
                        is_ajax: isAjax,
                        namespace,
                    },
                }).done(function(response) {

                    if ($loader.length) {
                        $loader.addClass('appointment-provider__loader-hidden');
                    }

                    providerWrapper.val('').trigger('refresh', [providerWrapper]);

                    if (!data.custom_template) {
                        if (response.data.length) {
                            providerWrapper.html('<option value="">' + data.placeholder + '</option>');
                            for (var i = 0; i < response.data.length; i++) {
                                let item = response.data[i];
                                providerWrapper.append('<option value="' + item.ID + '">' + item.post_title +
                                    '</option>');
                            }
                        } else if (response.data && 0 == response.data.length) {
                            providerWrapper.html('<option value="">' + data.placeholder + '</option>');
                        }
                    } else {
                        if (response.data) {
                            providerWrapper.find('.appointment-provider__content').html(response.data);
                        }
                    }
                });

            }

            function handleServicesBy(namespace, providerWrapper, data) {

                jQuery(document).on('change',
                    `.${ namespace } [name="` + data.service.field + `"]`,
                    e => loadServices.call(jQuery(e.target), namespace, providerWrapper, data),
                );

                jQuery(
                    `.${ namespace } select[name="` + data.service.field + `"]`,
                ).each(function() {
                    loadServices.call(jQuery(this), namespace, providerWrapper, data)
                });

                jQuery(
                    `.${ namespace } input[name="` + data.service.field + `"]:checked`,
                ).each(function() {
                    loadServices.call(jQuery(this), namespace, providerWrapper, data)
                });

                jQuery(
                    `.${ namespace } input[name="` + data.service.field + `"][type="hidden"]`,
                ).each(function() {
                    loadServices.call(jQuery(this), namespace, providerWrapper, data)
                });
            }

            function initProviderControl(event) {

                let namespace = event.data.namespace;

                jQuery(' .' + namespace + ' .appointment-provider').each(function() {

                    var $this = jQuery(this),
                        data = $this.data('args');

                    if (data.service.field) {

                        if ($this.is('select')) {
                            $this.html('<option value="">' + data.placeholder + '</option>');
                        }

                        handleServicesBy(namespace, $this, data);
                    }

                });
            }

            jQuery(document).on('jet-engine/booking-form/init', {
                namespace: "jet-form"
            }, initProviderControl);
            jQuery(document).on('jet-form-builder/init', {
                namespace: "jet-form-builder"
            }, initProviderControl);

        }());
    </script>
@endsection
