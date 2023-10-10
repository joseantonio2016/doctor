<head>
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
    <style id='woocommerce-general-inline-css'>
        .woocommerce .woocommerce-result-count,
        .woocommerce-page .woocommerce-result-count {
            float: left;
        }

        .woocommerce .woocommerce-ordering {
            float: right;
            margin-bottom: 2.5em;
        }

        #customer_details h3:not(.elementor-widget-woocommerce-checkout-page h3) {
            font-size: 1.2rem;
            padding: 20px 0 14px;
            margin: 0 0 20px;
            border-bottom: 1px solid var(--ast-border-color);
            font-weight: 700;
        }

        form #order_review_heading:not(.elementor-widget-woocommerce-checkout-page #order_review_heading) {
            border-width: 2px 2px 0 2px;
            border-style: solid;
            font-size: 1.2rem;
            margin: 0;
            padding: 1.5em 1.5em 1em;
            border-color: var(--ast-border-color);
            font-weight: 700;
        }

        form #order_review:not(.elementor-widget-woocommerce-checkout-page #order_review) {
            padding: 0 2em;
            border-width: 0 2px 2px;
            border-style: solid;
            border-color: var(--ast-border-color);
        }

        ul#shipping_method li:not(.elementor-widget-woocommerce-cart #shipping_method li) {
            margin: 0;
            padding: 0.25em 0 0.25em 22px;
            text-indent: -22px;
            list-style: none outside;
        }

        .woocommerce span.onsale,
        .wc-block-grid__product .wc-block-grid__product-onsale {
            background-color: var(--ast-global-color-0);
            color: #ffffff;
        }

        .woocommerce-message,
        .woocommerce-info {
            border-top-color: var(--ast-global-color-0);
        }

        .woocommerce-message::before,
        .woocommerce-info::before {
            color: var(--ast-global-color-0);
        }

        .woocommerce ul.products li.product .price,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .widget_layered_nav_filters ul li.chosen a,
        .woocommerce-page ul.products li.product .ast-woo-product-category,
        .wc-layered-nav-rating a {
            color: var(--ast-global-color-3);
        }

        .woocommerce nav.woocommerce-pagination ul,
        .woocommerce nav.woocommerce-pagination ul li {
            border-color: var(--ast-global-color-0);
        }

        .woocommerce nav.woocommerce-pagination ul li a:focus,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current {
            background: var(--ast-global-color-0);
            color: #ffffff;
        }

        .woocommerce-MyAccount-navigation-link.is-active a {
            color: var(--ast-global-color-1);
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
            background-color: var(--ast-global-color-0);
        }

        .woocommerce .star-rating,
        .woocommerce .comment-form-rating .stars a,
        .woocommerce .star-rating::before {
            color: var(--ast-global-color-3);
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li.active:before,
        .woocommerce div.ast-product-tabs-layout-vertical .woocommerce-tabs ul.tabs li:hover::before {
            background: var(--ast-global-color-0);
        }

        .entry-content .woocommerce-message,
        .entry-content .woocommerce-error,
        .entry-content .woocommerce-info {
            padding-top: 1em;
            padding-bottom: 1em;
            padding-left: 3.5em;
            padding-right: 2em;
        }

        .woocommerce[class*="rel-up-columns-"] .site-main div.product .related.products ul.products li.product,
        .woocommerce-page .site-main ul.products li.product {
            width: 100%;
        }

        .woocommerce ul.product-categories>li ul li {
            position: relative;
        }

        .woocommerce ul.product-categories>li ul li:before {
            content: "";
            border-width: 1px 1px 0 0;
            border-style: solid;
            display: inline-block;
            width: 6px;
            height: 6px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .woocommerce ul.product-categories>li ul li a {
            margin-left: 15px;
        }

        .ast-icon-shopping-cart svg {
            height: .82em;
        }

        .ast-icon-shopping-bag svg {
            height: 1em;
            width: 1em;
        }

        .ast-icon-shopping-basket svg {
            height: 1.15em;
            width: 1.2em;
        }

        .ast-site-header-cart.ast-menu-cart-outline .ast-addon-cart-wrap,
        .ast-site-header-cart.ast-menu-cart-fill .ast-addon-cart-wrap {
            line-height: 1;
        }

        .ast-site-header-cart.ast-menu-cart-fill i.astra-icon {
            font-size: 1.1em;
        }

        li.woocommerce-custom-menu-item .ast-site-header-cart i.astra-icon:after {
            padding-left: 2px;
        }

        .ast-hfb-header .ast-addon-cart-wrap {
            padding: 0.4em;
        }

        .ast-header-break-point.ast-header-custom-item-outside .ast-woo-header-cart-info-wrap {
            display: none;
        }

        .ast-site-header-cart i.astra-icon:after {
            background: var(--ast-global-color-0);
        }

        .ast-separate-container .ast-woocommerce-container {
            padding: 3em;
        }

        @media (min-width:545px) and (max-width:921px) {

            .woocommerce.tablet-columns-3 ul.products li.product,
            .woocommerce-page.tablet-columns-3 ul.products:not(.elementor-grid) {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (min-width:922px) {
            .woocommerce form.checkout_coupon {
                width: 50%;
            }
        }

        @media (max-width:921px) {

            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart,
            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart {
                padding-right: 0;
                padding-left: 0;
            }

            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .main-header-bar {
                text-align: center;
            }

            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-site-header-cart,
            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-mobile-menu-buttons {
                display: inline-block;
            }

            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-2.ast-mobile-header-inline .site-branding {
                flex: auto;
            }

            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .site-branding {
                flex: 0 0 100%;
            }

            .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .main-header-container {
                display: flex;
                justify-content: center;
            }

            .woocommerce-cart .woocommerce-shipping-calculator .button {
                width: 100%;
            }

            .woocommerce div.product div.images,
            .woocommerce div.product div.summary,
            .woocommerce #content div.product div.images,
            .woocommerce #content div.product div.summary,
            .woocommerce-page div.product div.images,
            .woocommerce-page div.product div.summary,
            .woocommerce-page #content div.product div.images,
            .woocommerce-page #content div.product div.summary {
                float: none;
                width: 100%;
            }

            .woocommerce-cart table.cart td.actions .ast-return-to-shop {
                display: block;
                text-align: center;
                margin-top: 1em;
            }

            .ast-container .woocommerce ul.products:not(.elementor-grid),
            .woocommerce-page ul.products:not(.elementor-grid),
            .woocommerce.tablet-columns-3 ul.products:not(.elementor-grid) {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width:544px) {
            .ast-separate-container .ast-woocommerce-container {
                padding: .54em 1em 1.33333em;
            }

            .woocommerce-message,
            .woocommerce-error,
            .woocommerce-info {
                display: flex;
                flex-wrap: wrap;
            }

            .woocommerce-message a.button,
            .woocommerce-error a.button,
            .woocommerce-info a.button {
                order: 1;
                margin-top: .5em;
            }

            .woocommerce .woocommerce-ordering,
            .woocommerce-page .woocommerce-ordering {
                float: none;
                margin-bottom: 2em;
            }

            .woocommerce table.cart td.actions .button,
            .woocommerce #content table.cart td.actions .button,
            .woocommerce-page table.cart td.actions .button,
            .woocommerce-page #content table.cart td.actions .button {
                padding-left: 1em;
                padding-right: 1em;
            }

            .woocommerce #content table.cart .button,
            .woocommerce-page #content table.cart .button {
                width: 100%;
            }

            .woocommerce #content table.cart td.actions .coupon,
            .woocommerce-page #content table.cart td.actions .coupon {
                float: none;
            }

            .woocommerce #content table.cart td.actions .coupon .button,
            .woocommerce-page #content table.cart td.actions .coupon .button {
                flex: 1;
            }

            .woocommerce #content div.product .woocommerce-tabs ul.tabs li a,
            .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a {
                display: block;
            }

            .ast-container .woocommerce ul.products:not(.elementor-grid),
            .woocommerce-page ul.products:not(.elementor-grid),
            .woocommerce.mobile-columns-2 ul.products:not(.elementor-grid),
            .woocommerce-page.mobile-columns-2 ul.products:not(.elementor-grid) {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .woocommerce.mobile-rel-up-columns-2 ul.products::not(.elementor-grid) {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width:544px) {

            .woocommerce ul.products a.button.loading::after,
            .woocommerce-page ul.products a.button.loading::after {
                display: inline-block;
                margin-left: 5px;
                position: initial;
            }

            .woocommerce.mobile-columns-1 .site-main ul.products li.product:nth-child(n),
            .woocommerce-page.mobile-columns-1 .site-main ul.products li.product:nth-child(n) {
                margin-right: 0;
            }

            .woocommerce #content div.product .woocommerce-tabs ul.tabs li,
            .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li {
                display: block;
                margin-right: 0;
            }
        }

        @media (min-width:922px) {

            .woocommerce #content .ast-woocommerce-container div.product div.images,
            .woocommerce .ast-woocommerce-container div.product div.images,
            .woocommerce-page #content .ast-woocommerce-container div.product div.images,
            .woocommerce-page .ast-woocommerce-container div.product div.images {
                width: 50%;
            }

            .woocommerce #content .ast-woocommerce-container div.product div.summary,
            .woocommerce .ast-woocommerce-container div.product div.summary,
            .woocommerce-page #content .ast-woocommerce-container div.product div.summary,
            .woocommerce-page .ast-woocommerce-container div.product div.summary {
                width: 46%;
            }

            .woocommerce.woocommerce-checkout form #customer_details.col2-set .col-1,
            .woocommerce.woocommerce-checkout form #customer_details.col2-set .col-2,
            .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-1,
            .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-2 {
                float: none;
                width: auto;
            }
        }

        .widget_product_search button {
            flex: 0 0 auto;
            padding: 10px 20px;
            ;
        }

        @media (min-width:922px) {

            .woocommerce.woocommerce-checkout form #customer_details.col2-set,
            .woocommerce-page.woocommerce-checkout form #customer_details.col2-set {
                width: 55%;
                float: left;
                margin-right: 4.347826087%;
            }

            .woocommerce.woocommerce-checkout form #order_review,
            .woocommerce.woocommerce-checkout form #order_review_heading,
            .woocommerce-page.woocommerce-checkout form #order_review,
            .woocommerce-page.woocommerce-checkout form #order_review_heading {
                width: 40%;
                float: right;
                margin-right: 0;
                clear: right;
            }
        }

        select,
        .select2-container .select2-selection--single {
            background-image: url("data:image/svg+xml,%3Csvg class='ast-arrow-svg' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' width='26px' height='16.043px' fill='%23334155' viewBox='57 35.171 26 16.043' enable-background='new 57 35.171 26 16.043' xml:space='preserve' %3E%3Cpath d='M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z'%3E%3C/path%3E%3C/svg%3E");
            background-size: .8em;
            background-repeat: no-repeat;
            background-position-x: calc(100% - 10px);
            background-position-y: center;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding-right: 2em;
        }

        .ast-onsale-card {
            position: absolute;
            top: 1.5em;
            left: 1.5em;
            color: var(--ast-global-color-3);
            background-color: var(--ast-global-color-5);
            width: fit-content;
            border-radius: 20px;
            padding: 0.4em 0.8em;
            font-size: .87em;
            font-weight: 500;
            line-height: normal;
            letter-spacing: normal;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.15);
            opacity: 1;
            visibility: visible;
            z-index: 4;
        }

        @media(max-width: 420px) {
            .mobile-columns-3 .ast-onsale-card {
                top: 1em;
                left: 1em;
            }
        }


        .ast-on-card-button {
            position: absolute;
            right: 1em;
            visibility: hidden;
            opacity: 0;
            transition: all 0.2s;
            z-index: 5;
            cursor: pointer;
        }

        .ast-on-card-button.ast-onsale-card {
            opacity: 1;
            visibility: visible;
        }

        .ast-on-card-button:hover .ast-card-action-tooltip {
            opacity: 1;
            visibility: visible;
        }

        .ast-on-card-button:hover .ahfb-svg-iconset {
            opacity: 1;
            color: var(--ast-global-color-2);
        }

        .ast-on-card-button .ahfb-svg-iconset {
            border-radius: 50%;
            color: var(--ast-global-color-2);
            background: var(--ast-global-color-5);
            opacity: 0.7;
            width: 2em;
            height: 2em;
            justify-content: center;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.15);
        }

        .ast-on-card-button .ahfb-svg-iconset .ast-icon {
            -js-display: inline-flex;
            display: inline-flex;
            align-self: center;
        }

        .ast-on-card-button svg {
            fill: currentColor;
        }

        .ast-select-options-trigger {
            top: 1em;
        }

        .ast-select-options-trigger.loading:after {
            display: block;
            content: " ";
            position: absolute;
            top: 50%;
            right: 50%;
            left: auto;
            width: 16px;
            height: 16px;
            margin-top: -12px;
            margin-right: -8px;
            background-color: var(--ast-global-color-2);
            background-image: none;
            border-radius: 100%;
            -webkit-animation: dotPulse 0.65s 0s infinite cubic-bezier(0.21, 0.53, 0.56, 0.8);
            animation: dotPulse 0.65s 0s infinite cubic-bezier(0.21, 0.53, 0.56, 0.8);
        }

        .ast-select-options-trigger.loading .ast-icon {
            display: none;
        }

        .ast-card-action-tooltip {
            background-color: var(--ast-global-color-2);
            pointer-events: none;
            white-space: nowrap;
            padding: 8px 9px;
            padding: 0.7em 0.9em;
            color: var(--ast-global-color-5);
            margin-right: 10px;
            border-radius: 3px;
            font-size: 0.8em;
            line-height: 1;
            font-weight: normal;
            position: absolute;
            right: 100%;
            top: auto;
            visibility: hidden;
            opacity: 0;
            transition: all 0.2s;
        }

        .ast-card-action-tooltip:after {
            content: "";
            position: absolute;
            top: 50%;
            margin-top: -5px;
            right: -10px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 5px;
            border-color: transparent transparent transparent var(--ast-global-color-2);
        }

        .astra-shop-thumbnail-wrap:hover .ast-on-card-button:not(.ast-onsale-card) {
            opacity: 1;
            visibility: visible;
        }

        @media (max-width: 420px) {

            .mobile-columns-3 .ast-select-options-trigger {
                top: 0.5em;
                right: 0.5em;
            }
        }

        .woocommerce ul.products li.product.desktop-align-left,
        .woocommerce-page ul.products li.product.desktop-align-left {
            text-align: left;
        }

        .woocommerce ul.products li.product.desktop-align-left .star-rating,
        .woocommerce ul.products li.product.desktop-align-left .button,
        .woocommerce-page ul.products li.product.desktop-align-left .star-rating,
        .woocommerce-page ul.products li.product.desktop-align-left .button {
            margin-left: 0;
            margin-right: 0;
        }

        @media(max-width: 921px) {

            .woocommerce ul.products li.product.tablet-align-left,
            .woocommerce-page ul.products li.product.tablet-align-left {
                text-align: left;
            }

            .woocommerce ul.products li.product.tablet-align-left .star-rating,
            .woocommerce ul.products li.product.tablet-align-left .button,
            .woocommerce-page ul.products li.product.tablet-align-left .star-rating,
            .woocommerce-page ul.products li.product.tablet-align-left .button {
                margin-left: 0;
                margin-right: 0;
            }
        }

        @media(max-width: 544px) {

            .woocommerce ul.products li.product.mobile-align-left,
            .woocommerce-page ul.products li.product.mobile-align-left {
                text-align: left;
            }

            .woocommerce ul.products li.product.mobile-align-left .star-rating,
            .woocommerce ul.products li.product.mobile-align-left .button,
            .woocommerce-page ul.products li.product.mobile-align-left .star-rating,
            .woocommerce-page ul.products li.product.mobile-align-left .button {
                margin-left: 0;
                margin-right: 0;
            }
        }

        .ast-woo-active-filter-widget .wc-block-active-filters {
            display: flex;
            align-items: self-start;
            justify-content: space-between;
        }

        .ast-woo-active-filter-widget .wc-block-active-filters__clear-all {
            flex: none;
            margin-top: 2px;
        }

        .woocommerce.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #customer_details.col2-set,
        .woocommerce-page.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #customer_details.col2-set {
            width: 100%;
        }

        .woocommerce.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review,
        .woocommerce.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review_heading,
        .woocommerce-page.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review,
        .woocommerce-page.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review_heading {
            width: 100%;
            float: inherit;
        }

        .elementor-widget-woocommerce-checkout-page .select2-container .select2-selection--single,
        .elementor-widget-woocommerce-cart .select2-container .select2-selection--single {
            padding: 0;
        }

        .elementor-widget-woocommerce-checkout-page .woocommerce form .woocommerce-additional-fields,
        .elementor-widget-woocommerce-checkout-page .woocommerce form .shipping_address,
        .elementor-widget-woocommerce-my-account .woocommerce-MyAccount-navigation-link,
        .elementor-widget-woocommerce-cart .woocommerce a.remove {
            border: none;
        }

        .elementor-widget-woocommerce-cart .cart-collaterals .cart_totals>h2 {
            background-color: inherit;
            border-bottom: 0px;
            margin: 0px;
        }

        .elementor-widget-woocommerce-cart .cart-collaterals .cart_totals {
            padding: 0;
            border-color: inherit;
            border-radius: 0;
            margin-bottom: 0px;
            border-width: 0px;
        }

        .elementor-widget-woocommerce-cart .woocommerce-cart-form .e-apply-coupon {
            line-height: initial;
        }

        .elementor-widget-woocommerce-my-account .woocommerce-MyAccount-content .woocommerce-Address-title h3 {
            margin-bottom: var(--myaccount-section-title-spacing, 0px);
        }

        .elementor-widget-woocommerce-my-account .woocommerce-Addresses .woocommerce-Address-title,
        .elementor-widget-woocommerce-my-account table.shop_table thead,
        .elementor-widget-woocommerce-my-account .woocommerce-page table.shop_table thead,
        .elementor-widget-woocommerce-cart table.shop_table thead {
            background: inherit;
        }

        .elementor-widget-woocommerce-cart .e-apply-coupon,
        .elementor-widget-woocommerce-cart #coupon_code,
        .elementor-widget-woocommerce-checkout-page .e-apply-coupon,
        .elementor-widget-woocommerce-checkout-page #coupon_code {
            height: 100%;
        }

        .elementor-widget-woocommerce-cart td.product-name dl.variation dt {
            font-weight: inherit;
        }

        .elementor-element.elementor-widget-woocommerce-checkout-page .e-checkout__container #customer_details .col-1 {
            margin-bottom: 0;
        }
    </style>
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
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
    <!--[if IE]>
<script src='https://pruebas.designuxperu.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js' )}}">
</script>
<script id="astra-flexibility-js-after">
    flexibility(document.documentElement);
</script>
<![endif]-->
    <meta name="generator"
        content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
        {{-- <style id="wp-custom-css"> --}}
</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope'
    class="page-template-default page page-id-1531 theme-astra woocommerce-no-js ast-desktop ast-page-builder-template ast-no-sidebar astra-4.1.6 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-1531">
    <div class="hfeed site" id="page">
        <div data-elementor-type="header" data-elementor-id="391"
            class="elementor elementor-391 elementor-location-header" data-elementor-post-type="elementor_library">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d80b125 head elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d80b125" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0665651"
                        data-id="0665651" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-ef01456 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="ef01456" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8ced2d6"
                                        data-id="8ced2d6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3b758e7 elementor-widget__width-auto elementor-widget elementor-widget-image"
                                                data-id="3b758e7" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.14.0 - 26-06-2023 */
                                                        .elementor-widget-image {
                                                            text-align: center
                                                        }

                                                        .elementor-widget-image a {
                                                            display: inline-block
                                                        }

                                                        .elementor-widget-image a img[src$=".svg"] {
                                                            width: 48px
                                                        }

                                                        .elementor-widget-image img {
                                                            vertical-align: middle;
                                                            display: inline-block
                                                        }
                                                    </style>
                                                    <a href="{{ url('')}}">
                                                        <img width="1024" height="290"
                                                            src="assets/wp-content/uploads/2023/08/KULLAY-Logo202-02-1024x290.png"
                                                            class="attachment-large size-large wp-image-1697" alt=""
                                                            srcset="https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-1024x290.png 1024w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-300x85.png 300w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-768x218.png 768w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-1536x436.png 1536w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-2048x581.png 2048w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-600x170.png 600w"
                                                            sizes="(max-width: 1024px) 100vw, 1024px" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a72f687"
                                        data-id="a72f687" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c2244de elementor-widget__width-auto elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                                data-id="c2244de" data-element_type="widget"
                                                data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                                                data-widget_type="nav-menu.default">
                                                <div class="elementor-widget-container">
                                                    <link rel="stylesheet" href="{{ asset('assets/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css') }}">
                                                    <nav
                                                        class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                        <ul id="menu-1-c2244de" class="elementor-nav-menu">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link">Nosotros</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link">Especialistas</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link">Kullay
                                                                    Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                    <div class="elementor-menu-toggle" role="button" tabindex="0"
                                                        aria-label="Menu Toggle" aria-expanded="false">
                                                        <i aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                                            aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--close eicon-close"></i>
                                                        <span class="elementor-screen-only">Menu</span>
                                                    </div>
                                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                        aria-hidden="true">
                                                        <ul id="menu-2-c2244de" class="elementor-nav-menu">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link"
                                                                    tabindex="-1">Nosotros</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link"
                                                                    tabindex="-1">Especialistas</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Kullay Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-13fe63d elementor-align-left elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="13fe63d" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Contactar </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d0a4ea4 head elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d0a4ea4" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-916dd2e"
                        data-id="916dd2e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-9482bda elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9482bda" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-feb675f"
                                        data-id="feb675f" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-19753f3 elementor-widget__width-auto elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
                                                data-id="19753f3" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="../index.html">
                                                        <img width="1024" height="290"
                                                            src="../assets/wp-content/uploads/2023/08/KULLAY-Logo202-02-1024x290.png"
                                                            class="attachment-large size-large wp-image-1697"
                                                            alt=""
                                                            srcset="https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-1024x290.png 1024w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-300x85.png 300w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-768x218.png 768w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-1536x436.png 1536w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-2048x581.png 2048w, https://pruebas.designuxperu.com/wp-content/uploads/2023/08/KULLAY-Logo202-02-600x170.png 600w"
                                                            sizes="(max-width: 1024px) 100vw, 1024px" /> </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-075b713 elementor-align-left elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="075b713" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Contactar </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-53c8a46 elementor-widget__width-auto elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-widget-mobile__width-auto elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                                data-id="53c8a46" data-element_type="widget"
                                                data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                                                data-widget_type="nav-menu.default">
                                                <div class="elementor-widget-container">
                                                    <nav
                                                        class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                                        <ul id="menu-1-53c8a46" class="elementor-nav-menu">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link">Nosotros</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link">Especialistas</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link">Kullay
                                                                    Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                    <div class="elementor-menu-toggle" role="button" tabindex="0"
                                                        aria-label="Menu Toggle" aria-expanded="false">
                                                        <i aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                                            aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--close eicon-close"></i>
                                                        <span class="elementor-screen-only">Menu</span>
                                                    </div>
                                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                        aria-hidden="true">
                                                        <ul id="menu-2-53c8a46" class="elementor-nav-menu">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link"
                                                                    tabindex="-1">Nosotros</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link"
                                                                    tabindex="-1">Especialistas</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Kullay Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
        <div data-elementor-type="footer" data-elementor-id="409"
            class="elementor elementor-409 elementor-location-footer" data-elementor-post-type="elementor_library">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-57be168 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
                data-id="57be168" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f47009b"
                        data-id="f47009b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-a7307ff elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="a7307ff" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9525d91"
                                        data-id="9525d91" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8f89e77 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="8f89e77" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-0711125 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default"
                                data-id="0711125" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-8f9e7e5"
                                        data-id="8f9e7e5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-71be23f elementor-widget elementor-widget-heading"
                                                data-id="71be23f" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Sobre
                                                        Kullay</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8524faf elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                                data-id="8524faf" data-element_type="widget"
                                                data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                                                data-widget_type="nav-menu.default">
                                                <div class="elementor-widget-container">
                                                    <nav
                                                        class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-underline e--animation-fade">
                                                        <ul id="menu-1-8524faf"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link">Nosotros</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link">Especialistas</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link">Kullay
                                                                    Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                    <div class="elementor-menu-toggle" role="button"
                                                        tabindex="0" aria-label="Menu Toggle"
                                                        aria-expanded="false">
                                                        <i aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                                            aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--close eicon-close"></i>
                                                        <span class="elementor-screen-only">Menu</span>
                                                    </div>
                                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                        aria-hidden="true">
                                                        <ul id="menu-2-8524faf"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link"
                                                                    tabindex="-1">Nosotros</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link"
                                                                    tabindex="-1">Especialistas</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Kullay Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-07a6b5e"
                                        data-id="07a6b5e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8d53021 elementor-widget elementor-widget-heading"
                                                data-id="8d53021" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        Categorías</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-955ba03 elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                                data-id="955ba03" data-element_type="widget"
                                                data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                                                data-widget_type="nav-menu.default">
                                                <div class="elementor-widget-container">
                                                    <nav
                                                        class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-underline e--animation-fade">
                                                        <ul id="menu-1-955ba03"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link">Nosotros</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link">Especialistas</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link">Kullay
                                                                    Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                    <div class="elementor-menu-toggle" role="button"
                                                        tabindex="0" aria-label="Menu Toggle"
                                                        aria-expanded="false">
                                                        <i aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                                            aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--close eicon-close"></i>
                                                        <span class="elementor-screen-only">Menu</span>
                                                    </div>
                                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                        aria-hidden="true">
                                                        <ul id="menu-2-955ba03"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link"
                                                                    tabindex="-1">Nosotros</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link"
                                                                    tabindex="-1">Especialistas</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Kullay Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-4ce344a"
                                        data-id="4ce344a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-9aae4e8 elementor-widget elementor-widget-heading"
                                                data-id="9aae4e8" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        Patologías</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6e0dcf7 elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                                data-id="6e0dcf7" data-element_type="widget"
                                                data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                                                data-widget_type="nav-menu.default">
                                                <div class="elementor-widget-container">
                                                    <nav
                                                        class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-underline e--animation-fade">
                                                        <ul id="menu-1-6e0dcf7"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link">Nosotros</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link">Especialistas</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link">Kullay
                                                                    Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                    <div class="elementor-menu-toggle" role="button"
                                                        tabindex="0" aria-label="Menu Toggle"
                                                        aria-expanded="false">
                                                        <i aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                                            aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--close eicon-close"></i>
                                                        <span class="elementor-screen-only">Menu</span>
                                                    </div>
                                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                        aria-hidden="true">
                                                        <ul id="menu-2-6e0dcf7"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link"
                                                                    tabindex="-1">Nosotros</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link"
                                                                    tabindex="-1">Especialistas</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Kullay Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-07d045e"
                                        data-id="07d045e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-201e789 elementor-widget elementor-widget-heading"
                                                data-id="201e789" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        Recursos</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f5b5ffa elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                                data-id="f5b5ffa" data-element_type="widget"
                                                data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                                                data-widget_type="nav-menu.default">
                                                <div class="elementor-widget-container">
                                                    <nav
                                                        class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-underline e--animation-fade">
                                                        <ul id="menu-1-f5b5ffa"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link">Nosotros</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link">Especialistas</a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link">Kullay
                                                                    Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                    <div class="elementor-menu-toggle" role="button"
                                                        tabindex="0" aria-label="Menu Toggle"
                                                        aria-expanded="false">
                                                        <i aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                                            aria-hidden="true" role="presentation"
                                                            class="elementor-menu-toggle__icon--close eicon-close"></i>
                                                        <span class="elementor-screen-only">Menu</span>
                                                    </div>
                                                    <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                        aria-hidden="true">
                                                        <ul id="menu-2-f5b5ffa"
                                                            class="elementor-nav-menu sm-vertical">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-394">
                                                                <a href="#"
                                                                    class="elementor-item elementor-item-anchor menu-link"
                                                                    tabindex="-1">Nosotros</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-395">
                                                                <a href="index.html" aria-current="page"
                                                                    class="elementor-item elementor-item-active menu-link"
                                                                    tabindex="-1">Especialistas</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-396">
                                                                <a href="../se-parte/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Se parte</a></li>
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-397">
                                                                <a href="../kullay-para-empresas/index.html"
                                                                    class="elementor-item menu-link"
                                                                    tabindex="-1">Kullay Empresas</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-d740320"
                                        data-id="d740320" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c436afc elementor-widget elementor-widget-heading"
                                                data-id="c436afc" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Get In
                                                        Touch</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-461286e elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="461286e" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="25"
                                                                    viewBox="0 0 24 25" fill="none">
                                                                    <g id="bx:bx-phone"
                                                                        clip-path="url(#clip0_440_6194)">
                                                                        <path id="Vector"
                                                                            d="M18.8478 13.0158C18.7365 12.9042 18.6043 12.8158 18.4587 12.7554C18.3131 12.695 18.157 12.6639 17.9995 12.6639C17.8419 12.6639 17.6858 12.695 17.5402 12.7554C17.3946 12.8158 17.2624 12.9042 17.1511 13.0158L15.2383 14.9286C14.3515 14.6646 12.6967 14.0646 11.6479 13.0158C10.5991 11.967 9.99913 10.3122 9.73513 9.42542L11.6479 7.51263C11.7594 7.40129 11.8479 7.26905 11.9083 7.12347C11.9687 6.97789 11.9998 6.82184 11.9998 6.66424C11.9998 6.50664 11.9687 6.35059 11.9083 6.20502C11.8479 6.05944 11.7594 5.9272 11.6479 5.81585L6.84796 1.0159C6.73662 0.904367 6.60438 0.815882 6.4588 0.75551C6.31322 0.695137 6.15717 0.664062 5.99957 0.664062C5.84197 0.664062 5.68592 0.695137 5.54034 0.75551C5.39477 0.815882 5.26252 0.904367 5.15118 1.0159L1.89681 4.27027C1.44082 4.72626 1.18402 5.35266 1.19362 5.99225C1.22122 7.70103 1.67361 13.6362 6.35117 18.3137C11.0287 22.9913 16.9639 23.4425 18.6738 23.4713H18.7074C19.341 23.4713 19.9398 23.2217 20.3934 22.7681L23.6478 19.5137C23.7593 19.4024 23.8478 19.2701 23.9082 19.1245C23.9686 18.979 23.9996 18.8229 23.9996 18.6653C23.9996 18.5077 23.9686 18.3517 23.9082 18.2061C23.8478 18.0605 23.7593 17.9283 23.6478 17.8169L18.8478 13.0158ZM18.6954 21.0701C17.1979 21.0449 12.0739 20.6429 8.04795 16.6157C4.00879 12.5766 3.61759 7.43464 3.5936 5.96705L5.99957 3.56107L9.10274 6.66424L7.55116 8.21583C7.41011 8.35677 7.30641 8.53063 7.24942 8.7217C7.19243 8.91278 7.18396 9.11504 7.22476 9.31022C7.25356 9.44822 7.95795 12.7206 9.94993 14.7126C11.9419 16.7045 15.2143 17.4089 15.3523 17.4377C15.5473 17.4797 15.7498 17.4719 15.941 17.4151C16.1323 17.3582 16.3062 17.2542 16.4467 17.1125L17.9995 15.561L21.1026 18.6641L18.6954 21.0701Z"
                                                                            fill="#3AD5EE"></path>
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_440_6194">
                                                                            <rect width="24" height="24"
                                                                                fill="white"
                                                                                transform="translate(0 0.664062)">
                                                                            </rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> </span>
                                                            <span class="elementor-icon-list-text">(+51) 924 726
                                                                005</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="27"
                                                                    viewBox="0 0 24 27" fill="none">
                                                                    <g id="carbon:send-alt"
                                                                        clip-path="url(#clip0_440_6198)">
                                                                        <path id="Vector" fill-rule="evenodd"
                                                                            clip-rule="evenodd"
                                                                            d="M-0.91875 6.38073C-0.75492 5.64447 -0.352185 4.98708 0.223498 4.51624C0.79918 4.0454 1.51369 3.78901 2.25 3.78906H21.75C22.4863 3.78901 23.2008 4.0454 23.7765 4.51624C24.3522 4.98708 24.7549 5.64447 24.9187 6.38073L12 14.4791L-0.91875 6.38073ZM-1 8.28406V20.1241L8.42988 14.1941L-1 8.28406ZM9.98663 15.1724L-0.689625 21.8841C-0.425844 22.4545 -0.00951922 22.9364 0.510895 23.2737C1.03131 23.6109 1.63441 23.7897 2.25 23.7891H21.75C22.3655 23.7892 22.9684 23.6101 23.4885 23.2725C24.0086 22.935 24.4246 22.4529 24.688 21.8824L14.0118 15.1707L12 16.4324L9.98663 15.1707V15.1724ZM15.5701 14.1957L25 20.1241V8.28406L15.5701 14.1941V14.1957Z"
                                                                            fill="#3AD5EE"></path>
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_440_6198">
                                                                            <rect width="24" height="26"
                                                                                fill="white"
                                                                                transform="translate(0 0.664062)">
                                                                            </rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg> </span>
                                                            <span
                                                                class="elementor-icon-list-text">Consultas@kullay.com</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-b089a09 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b089a09" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5493fc5"
                                        data-id="5493fc5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a503ddb elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                                data-id="a503ddb" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Hecho
                                                        con amor por<b> Designux Perú</b></h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c4abed7 elementor-shape-circle elementor-widget__width-auto elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                                data-id="c4abed7" data-element_type="widget"
                                                data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.14.0 - 26-06-2023 */
                                                        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                                        .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                                        .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                            line-height: 1;
                                                            font-size: 0
                                                        }

                                                        .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                            display: inline-grid
                                                        }

                                                        .elementor-widget-social-icons .elementor-grid {
                                                            grid-column-gap: var(--grid-column-gap, 5px);
                                                            grid-row-gap: var(--grid-row-gap, 5px);
                                                            grid-template-columns: var(--grid-template-columns);
                                                            justify-content: var(--justify-content, center);
                                                            justify-items: var(--justify-content, center)
                                                        }

                                                        .elementor-icon.elementor-social-icon {
                                                            font-size: var(--icon-size, 25px);
                                                            line-height: var(--icon-size, 25px);
                                                            width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                            height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                                        }

                                                        .elementor-social-icon {
                                                            --e-social-icon-icon-color: #fff;
                                                            display: inline-flex;
                                                            background-color: #69727d;
                                                            align-items: center;
                                                            justify-content: center;
                                                            text-align: center;
                                                            cursor: pointer
                                                        }

                                                        .elementor-social-icon i {
                                                            color: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon svg {
                                                            fill: var(--e-social-icon-icon-color)
                                                        }

                                                        .elementor-social-icon:last-child {
                                                            margin: 0
                                                        }

                                                        .elementor-social-icon:hover {
                                                            opacity: .9;
                                                            color: #fff
                                                        }

                                                        .elementor-social-icon-android {
                                                            background-color: #a4c639
                                                        }

                                                        .elementor-social-icon-apple {
                                                            background-color: #999
                                                        }

                                                        .elementor-social-icon-behance {
                                                            background-color: #1769ff
                                                        }

                                                        .elementor-social-icon-bitbucket {
                                                            background-color: #205081
                                                        }

                                                        .elementor-social-icon-codepen {
                                                            background-color: #000
                                                        }

                                                        .elementor-social-icon-delicious {
                                                            background-color: #39f
                                                        }

                                                        .elementor-social-icon-deviantart {
                                                            background-color: #05cc47
                                                        }

                                                        .elementor-social-icon-digg {
                                                            background-color: #005be2
                                                        }

                                                        .elementor-social-icon-dribbble {
                                                            background-color: #ea4c89
                                                        }

                                                        .elementor-social-icon-elementor {
                                                            background-color: #d30c5c
                                                        }

                                                        .elementor-social-icon-envelope {
                                                            background-color: #ea4335
                                                        }

                                                        .elementor-social-icon-facebook,
                                                        .elementor-social-icon-facebook-f {
                                                            background-color: #3b5998
                                                        }

                                                        .elementor-social-icon-flickr {
                                                            background-color: #0063dc
                                                        }

                                                        .elementor-social-icon-foursquare {
                                                            background-color: #2d5be3
                                                        }

                                                        .elementor-social-icon-free-code-camp,
                                                        .elementor-social-icon-freecodecamp {
                                                            background-color: #006400
                                                        }

                                                        .elementor-social-icon-github {
                                                            background-color: #333
                                                        }

                                                        .elementor-social-icon-gitlab {
                                                            background-color: #e24329
                                                        }

                                                        .elementor-social-icon-globe {
                                                            background-color: #69727d
                                                        }

                                                        .elementor-social-icon-google-plus,
                                                        .elementor-social-icon-google-plus-g {
                                                            background-color: #dd4b39
                                                        }

                                                        .elementor-social-icon-houzz {
                                                            background-color: #7ac142
                                                        }

                                                        .elementor-social-icon-instagram {
                                                            background-color: #262626
                                                        }

                                                        .elementor-social-icon-jsfiddle {
                                                            background-color: #487aa2
                                                        }

                                                        .elementor-social-icon-link {
                                                            background-color: #818a91
                                                        }

                                                        .elementor-social-icon-linkedin,
                                                        .elementor-social-icon-linkedin-in {
                                                            background-color: #0077b5
                                                        }

                                                        .elementor-social-icon-medium {
                                                            background-color: #00ab6b
                                                        }

                                                        .elementor-social-icon-meetup {
                                                            background-color: #ec1c40
                                                        }

                                                        .elementor-social-icon-mixcloud {
                                                            background-color: #273a4b
                                                        }

                                                        .elementor-social-icon-odnoklassniki {
                                                            background-color: #f4731c
                                                        }

                                                        .elementor-social-icon-pinterest {
                                                            background-color: #bd081c
                                                        }

                                                        .elementor-social-icon-product-hunt {
                                                            background-color: #da552f
                                                        }

                                                        .elementor-social-icon-reddit {
                                                            background-color: #ff4500
                                                        }

                                                        .elementor-social-icon-rss {
                                                            background-color: #f26522
                                                        }

                                                        .elementor-social-icon-shopping-cart {
                                                            background-color: #4caf50
                                                        }

                                                        .elementor-social-icon-skype {
                                                            background-color: #00aff0
                                                        }

                                                        .elementor-social-icon-slideshare {
                                                            background-color: #0077b5
                                                        }

                                                        .elementor-social-icon-snapchat {
                                                            background-color: #fffc00
                                                        }

                                                        .elementor-social-icon-soundcloud {
                                                            background-color: #f80
                                                        }

                                                        .elementor-social-icon-spotify {
                                                            background-color: #2ebd59
                                                        }

                                                        .elementor-social-icon-stack-overflow {
                                                            background-color: #fe7a15
                                                        }

                                                        .elementor-social-icon-steam {
                                                            background-color: #00adee
                                                        }

                                                        .elementor-social-icon-stumbleupon {
                                                            background-color: #eb4924
                                                        }

                                                        .elementor-social-icon-telegram {
                                                            background-color: #2ca5e0
                                                        }

                                                        .elementor-social-icon-thumb-tack {
                                                            background-color: #1aa1d8
                                                        }

                                                        .elementor-social-icon-tripadvisor {
                                                            background-color: #589442
                                                        }

                                                        .elementor-social-icon-tumblr {
                                                            background-color: #35465c
                                                        }

                                                        .elementor-social-icon-twitch {
                                                            background-color: #6441a5
                                                        }

                                                        .elementor-social-icon-twitter {
                                                            background-color: #1da1f2
                                                        }

                                                        .elementor-social-icon-viber {
                                                            background-color: #665cac
                                                        }

                                                        .elementor-social-icon-vimeo {
                                                            background-color: #1ab7ea
                                                        }

                                                        .elementor-social-icon-vk {
                                                            background-color: #45668e
                                                        }

                                                        .elementor-social-icon-weibo {
                                                            background-color: #dd2430
                                                        }

                                                        .elementor-social-icon-weixin {
                                                            background-color: #31a918
                                                        }

                                                        .elementor-social-icon-whatsapp {
                                                            background-color: #25d366
                                                        }

                                                        .elementor-social-icon-wordpress {
                                                            background-color: #21759b
                                                        }

                                                        .elementor-social-icon-xing {
                                                            background-color: #026466
                                                        }

                                                        .elementor-social-icon-yelp {
                                                            background-color: #af0606
                                                        }

                                                        .elementor-social-icon-youtube {
                                                            background-color: #cd201f
                                                        }

                                                        .elementor-social-icon-500px {
                                                            background-color: #0099e5
                                                        }

                                                        .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                            border-radius: 10%
                                                        }

                                                        .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                            border-radius: 50%
                                                        }
                                                    </style>
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-a2ee004"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Facebook</span>
                                                                <i class="fab fa-facebook"></i> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-2ede137"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Instagram</span>
                                                                <i class="fab fa-instagram"></i> </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-351f66a"
                                                                target="_blank">
                                                                <span class="elementor-screen-only">Twitter</span>
                                                                <i class="fab fa-twitter"></i> </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- #page -->
    <div id="jet-popup-1605" class="jet-popup jet-popup--front-mode jet-popup--hide-state jet-popup--animation-fade"
        data-settings="{&quot;id&quot;:&quot;1605&quot;,&quot;jet-popup-id&quot;:&quot;jet-popup-1605&quot;,&quot;type&quot;:&quot;default&quot;,&quot;animation&quot;:&quot;fade&quot;,&quot;open-trigger&quot;:&quot;custom-selector&quot;,&quot;page-load-delay&quot;:1,&quot;user-inactivity-time&quot;:1,&quot;scrolled-to&quot;:10,&quot;on-date&quot;:&quot;2023-10-03 21:46&quot;,&quot;on-time-start&quot;:&quot;&quot;,&quot;on-time-end&quot;:&quot;&quot;,&quot;custom-selector&quot;:&quot;.custom&quot;,&quot;prevent-scrolling&quot;:true,&quot;show-once&quot;:false,&quot;show-again-delay&quot;:&quot;none&quot;,&quot;use-ajax&quot;:false,&quot;force-ajax&quot;:false,&quot;close-on-overlay-click&quot;:true,&quot;content-type&quot;:&quot;elementor&quot;}">
        <div class="jet-popup__inner">
            <div class="jet-popup__overlay"></div>
            <div class="jet-popup__container">
                <div class="jet-popup__container-inner">
                    <div class="jet-popup__container-overlay"></div>
                    <div class="jet-popup__container-content">
                        <style>
                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__label {
                                font-family: "Quicksand", Sans-serif;
                                font-size: 16px;
                                font-weight: 500;
                                line-height: 16px;
                                color: #878C8F;
                                padding: 0px 0px 11px 0px;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__desc {
                                font-family: "Quicksand", Sans-serif;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form-col {
                                align-items: flex-start;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__field:not(.checkradio-field):not(.range-field) {
                                font-family: "Quicksand", Sans-serif;
                                font-size: 16px;
                                font-weight: 500;
                                line-height: 20px;
                                color: #0F191E;
                                background-color: #FFFFFF;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .checkradio-wrap {
                                font-family: "Quicksand", Sans-serif;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__calculated-field {
                                font-family: "Quicksand", Sans-serif;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__field-value.range-value {
                                font-family: "Quicksand", Sans-serif;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__heading {
                                font-family: "Quicksand", Sans-serif;
                                font-size: 18px;
                                font-weight: 700;
                                line-height: 36px;
                                padding: 30px 0px 0px 22px;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__heading-desc {
                                font-family: "Quicksand", Sans-serif;
                                font-size: 16px;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form-repeater__actions {
                                justify-content: flex-start;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form-repeater__row-remove {
                                align-self: flex-start;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar .jet-apb-calendar-content {
                                width: 100%;
                                min-width: 100%;
                                flex: 0 0 100%;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-header {
                                color: #19181A;
                                font-family: "Quicksand", Sans-serif;
                                font-size: 18px;
                                font-weight: 700;
                                line-height: 36px;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-week span {
                                font-family: "Quicksand", Sans-serif;
                                font-size: 14px;
                                font-weight: 700;
                                line-height: 36px;
                                color: #19181A;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-body {
                                font-family: "Quicksand", Sans-serif;
                                font-size: 12px;
                                font-weight: 400;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-date .jet-apb-calendar-date-body {
                                color: #1A191F;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-date.jet-apb-calendar-date--disabled .jet-apb-calendar-date-body {
                                color: #1A191F !important;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-date--selected .jet-apb-calendar-date-body {
                                color: #DA2B2B;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-date-body {
                                padding-top: calc(20px / 2);
                                padding-bottom: calc(20px / 2);
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar .jet-apb-calendar-slots.jet-apb-calendar-slots--active {
                                padding: 15px 15px 15px 15px;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-slot {
                                font-family: "Quicksand", Sans-serif;
                                color: #000000;
                                background-color: #F3F2F5;
                                padding: 6px 14px 6px 14px;
                                border-radius: 10px 10px 10px 10px;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-slot.jet-apb-slot--selected {
                                color: #FFFFFF;
                                background-color: #8B72F8;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-slots__close {
                                font-size: 35px;
                                top: 10px;
                                right: 10px;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__submit {
                                font-family: "Quicksand", Sans-serif;
                                font-size: 16px;
                                font-weight: 600;
                                line-height: 24px;
                                padding: 12px 14px 12px 14px;
                                border-radius: 10px 10px 10px 10px;
                                box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.2);
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__submit-wrap {
                                justify-content: stretch;
                                align-items: stretch;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form-message {
                                font-family: "Quicksand", Sans-serif;
                                text-align: center;
                            }

                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form__field-error,
                            .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-engine-file-upload__errors {
                                text-align: left;
                            }

                            #jet-popup-1605 .jet-popup__container {
                                width: 441px;
                                height: 100%;
                            }

                            #jet-popup-1605 .jet-popup__inner {
                                justify-content: flex-end;
                                align-items: center;
                            }
                        </style>
                        <div data-elementor-type="jet-popup" data-elementor-id="1605"
                            class="elementor elementor-1605" data-elementor-post-type="jet-popup">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-ce06d82 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="ce06d82" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a3ac3f6"
                                        data-id="a3ac3f6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-fab1d32 elementor-widget elementor-widget-jet-engine-booking-form"
                                                data-id="fab1d32" data-element_type="widget"
                                                data-widget_type="jet-engine-booking-form.default">
                                                <div class="elementor-widget-container">
                                                    <form class="jet-form layout-column submit-type-reload"
                                                        action="https://pruebas.designuxperu.com/especialistas/?jet_engine_action=book&amp;nocache=1695083707"
                                                        method="POST" data-form-id="1031"><input
                                                            class="jet-form__field hidden-field" type="hidden"
                                                            name="_jet_engine_booking_form_id" value="1031"
                                                            data-field-name="_jet_engine_booking_form_id"><input
                                                            class="jet-form__field hidden-field" type="hidden"
                                                            name="_jet_engine_refer"
                                                            value="https://pruebas.designuxperu.com/especialistas"
                                                            data-field-name="_jet_engine_refer">
                                                        <div class="jet-form-row jet-form-row--hidden">
                                                            <div class="jet-form-col jet-form-col-12  field-type-hidden  jet-form-field-container"
                                                                data-field="page_id" data-conditional="false"><input
                                                                    class="jet-form__field hidden-field"
                                                                    type="hidden" name="page_id" value="1531"
                                                                    data-field-name="page_id"></div>
                                                        </div>
                                                        <div class="jet-form-row jet-form-row--first-visible">
                                                            <div class="jet-form-col jet-form-col-12  field-type-select  jet-form-field-container"
                                                                data-field="service_id" data-conditional="false">
                                                                <div class="jet-form__label">
                                                                    <span class="jet-form__label-text">Selecciona el
                                                                        servicio<span
                                                                            class="jet-form__required">*</span></span>
                                                                </div><select required="required" name="service_id"
                                                                    data-field-name="service_id" id="service_id"
                                                                    data-default-val=""
                                                                    class="jet-form__field select-field">
                                                                    <option value="1480">Fortaleciendo Lazos
                                                                        Familiares</option>
                                                                    <option value="1479">Terapia Individual</option>
                                                                    <option value="1478">Orientación Vocacional
                                                                    </option>
                                                                    <option value="1477">Terapia para Niños</option>
                                                                    <option value="1035">Atención Psiquiátrica
                                                                    </option>
                                                                    <option value="1034">Terapias de pareja</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="jet-form-row">
                                                            <div class="jet-form-col jet-form-col-12  field-type-appointment_provider  jet-form-field-container"
                                                                data-field="provider_id" data-conditional="false">
                                                                <div class="jet-form__label">
                                                                    <span
                                                                        class="jet-form__label-text">Profesional<span
                                                                            class="jet-form__required">*</span></span>
                                                                </div><select
                                                                    class="appointment-provider jet-form__field select-field"
                                                                    name="provider_id" required
                                                                    data-args="{&quot;service&quot;:{&quot;field&quot;:&quot;service_id&quot;},&quot;api&quot;:{&quot;date_slots&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-date-slots\/&quot;,&quot;refresh_dates&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-refresh-date\/&quot;,&quot;service_providers&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-service-providers\/&quot;,&quot;provider_services&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-provider-services\/&quot;,&quot;appointments_list&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointments-list\/&quot;,&quot;delete_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/delete-appointment\/&quot;,&quot;update_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/update-appointment\/&quot;,&quot;add_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-add-appointment\/&quot;,&quot;update_workflows&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/update-appointment-workflows\/&quot;,&quot;appointment_meta&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/appointment-meta\/&quot;,&quot;get_appointment&quot;:&quot;https:\/\/pruebas.designuxperu.com\/wp-json\/jet-engine\/v2\/get-appointment\/&quot;},&quot;placeholder&quot;:&quot;Select...&quot;}"></select>
                                                            </div>
                                                        </div>
                                                        <div class="jet-form-row">
                                                            <div class="jet-form-col jet-form-col-12  field-type-appointment_date  jet-form-field-container"
                                                                data-field="appointment_date"
                                                                data-conditional="false">
                                                                <div class="jet-apb-calendar-wrapper">
                                                                    <div class="appointment-calendar jet-apb-calendar"
                                                                        data-args="{&quot;booking_type&quot;:&quot;slot&quot;,&quot;excludedDates&quot;:[],&quot;worksDates&quot;:[],&quot;availableWeekDays&quot;:[&quot;monday&quot;,&quot;tuesday&quot;,&quot;wednesday&quot;,&quot;thursday&quot;,&quot;friday&quot;],&quot;service&quot;:{&quot;field&quot;:&quot;service_id&quot;},&quot;providerIsset&quot;:true,&quot;provider&quot;:{&quot;field&quot;:&quot;provider_id&quot;},&quot;inputName&quot;:&quot;appointment_date&quot;,&quot;isRequired&quot;:true,&quot;allowedServices&quot;:{&quot;field&quot;:&quot;provider_id&quot;}}">
                                                                    </div>

                                                                    <div class="jet-apb-calendar-appointments-list-wrapper"
                                                                        style="display: none">
                                                                        <div class="jet-form__heading">
                                                                            <span
                                                                                class="jet-form__label-text">Appointment
                                                                                details:</span>
                                                                        </div>
                                                                        <div
                                                                            class="jet-apb-calendar-appointments-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="jet-apb-calendar-notification"
                                                                        style="display: none">
                                                                        <div
                                                                            class="jet-apb-calendar-notification-service">
                                                                            Please, select the service first.</div>
                                                                        <div
                                                                            class="jet-apb-calendar-notification-provider">
                                                                            Please, select the provider first.</div>
                                                                        <div
                                                                            class="jet-apb-calendar-notification-service-field">
                                                                            Please set service field for current
                                                                            calendar</div>
                                                                        <div
                                                                            class="jet-apb-calendar-notification-max-slots">
                                                                            Sorry. You have the max number of
                                                                            appointments.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="jet-form-col jet-form-col-12  field-type-text  jet-form-field-container"
                                                                data-field="user_email" data-conditional="false">
                                                                <div class="jet-form__label">
                                                                    <span class="jet-form__label-text">Correo
                                                                        electrónico<span
                                                                            class="jet-form__required">*</span></span>
                                                                </div><input class="jet-form__field text-field "
                                                                    value="" required="required"
                                                                    name="user_email" id="user_email"
                                                                    type="email" data-field-name="user_email">
                                                            </div>
                                                        </div>
                                                        <div class="jet-form-row jet-form-row--submit">
                                                            <div class="jet-form-col jet-form-col-12  field-type-submit  jet-form-field-container"
                                                                data-field="Submit" data-conditional="false">
                                                                <div class="jet-form__submit-wrap">
                                                                    <button
                                                                        class="jet-form__submit submit-type-reload"
                                                                        type="submit">Ir a Pagos</button>
                                                                </div>
                                                            </div>
                                                        </div><input class="jet-form__field hidden-field"
                                                            type="hidden" name="_jet_engine_nonce"
                                                            value="6ba4cf78e9" data-field-name="_jet_engine_nonce">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="ast-scroll-top" tabindex="0" class="ast-scroll-top-icon ast-scroll-to-top-right"
        data-on-devices="both">
        <span class="ast-icon icon-arrow"><svg class="ast-arrow-svg" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                width="26px" height="16.043px" viewBox="57 35.171 26 16.043"
                enable-background="new 57 35.171 26 16.043" xml:space="preserve">
                <path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z" />
            </svg></span> <span class="screen-reader-text">Scroll al inicio</span>
    </div>


    <div class="jet-reviews-comment-container">
        <div class="jet-reviews-comment-user-details">
            <div class="jet-reviews-comment-user-name"><span> </span></time></div>
            <div class="jet-reviews-user-data__verifications" v-if="authorVerificationData">
                <div class="jet-reviews-user-data__verification" :class="[item.slug]"
                    v-for="(item, index) in authorVerificationData">
                    <span class="verification-icon" v-html="item.icon" v-if="item.icon"></span>
                    <span class="verification-label" v-html="item.message"></span>
                </div>

            </div>
        </div>

        <div class="jet-reviews-comment-actions" v-if="formControlsVisible">
            <div class="jet-reviews-button jet-reviews-button--primary" tabindex="0" @click="showReplyForm"
                @keyup.enter="showReplyForm">
                <span class="jet-reviews-button__icon" v-if="replyIcon" v-html="replyIcon"></span>
                <span class="jet-reviews-button__text"> </span>
            </div>
        </div>

        <div class="jet-reviews-comment-reply-form" :class="{ 'jet-progress-state': replySubmiting }"
            v-if="replyFormVisible">
            <html-textarea class="jet-reviews-input jet-reviews-input--textarea"
                :data-placeholder="$root.options.labels.replyPlaceholder" v-model="replyText"
                ref="commentText"></html-textarea>
            <html-textarea class="jet-reviews-input" :is-valid="isValidAuthorName"
                :placeholder="$root.options.labels.authorNamePlaceholder"
                :not-valid-label="$root.options.labels.notValidFieldMessage" v-model="replyAuthorName"
                v-if="$root.guestNameFieldVisible"></html-textarea>
            <html-textarea class="jet-reviews-input" :is-valid="isValidAuthorEmail"
                :placeholder="$root.options.labels.authorMailPlaceholder"
                :not-valid-label="$root.options.labels.notValidFieldMessage" v-model="replyAuthorMail"
                v-if="$root.guestNameFieldVisible"></html-textarea>

            <div class="jet-reviews-comment-reply-controls">
                <div class="jet-reviews-button jet-reviews-button--secondary" tabindex="0"
                    @click="cancelNewReply" @keyup.enter="cancelNewReply">
                    <div class="jet-reviews-button__text"> </div>
                </div>
                <div v-if="submitVisible" class="jet-reviews-button jet-reviews-button--primary" tabindex="0"
                    @click="submitNewReply" @keyup.enter="submitNewReply">
                    <div class="jet-reviews-button__text"> </div>
                </div>
            </div>

            <div v-if="responseMessage" class="jet-reviews-comment-reply-message">
                <span> </span>
            </div>
        </div>

        <div v-if="0 !== commentsList.length" class="jet-reviews-comment-reply-list">
        </div>

    </div>

    </div>
    <div class="jet-new-review-control jet-new-review-content">

    </div>

    <div class="jet-new-review-control jet-new-review-title">

    </div>

    <div class="jet-new-review-control jet-new-review-author-name" v-if="$root.guestNameFieldVisible">

    </div>

    <div class="jet-new-review-control jet-new-review-author-mail" v-if="$root.guestMailFieldVisible">
        <html-textarea class="jet-reviews-input" :is-valid="isValidAuthorEmail"
            :placeholder="$root.options.labels.authorMailPlaceholder"
            :not-valid-label="$root.options.labels.notValidFieldMessage" v-model="reviewAuthorMail"></html-textarea>
    </div>

    <div class="jet-new-review-fields">
        <div class="jet-new-review-field" v-for="(field, index) in fields" :key="index">
        </div>
    </div>

    <div class="jet-new-review-controls">
        <div class="jet-reviews-button jet-reviews-button--secondary" tabindex="0" @click="cancelSubmit"
            @keyup.enter="cancelSubmit">
            <div class="jet-reviews-button__text"> </div>
        </div>
        <div v-if="formControlsVisible" class="jet-reviews-button jet-reviews-button--primary" tabindex="0"
            @click="submitReview" @keyup.enter="submitReview">
            <div class="jet-reviews-button__text"> </div>
        </div>
    </div>

    <div class="jet-new-review-message" v-if="formMessageVisible">
        <span> </span>
    </div>
    </div>
    <script type="text/x-template" id="jet-advanced-reviews-item-template"><div :id="`jet-reviews-item-${itemData.id}`" class="jet-reviews-advanced__review">
	<div class="jet-reviews-advanced__review-header">
		<div class="jet-reviews-advanced__review-author">
			<div class="jet-reviews-user-data">
				<div
					class="jet-reviews-user-data__avatar"
					v-html="itemData.author.avatar"
                    v-if="$root.options.reviewAuthorAvatarVisible"
				></div>
				<div class="jet-reviews-user-data__info">
					<div class="jet-reviews-user-data__info-row">
						<div class="jet-reviews-user-data__name">
							<span v-html="itemData.author.name"></span>
							<time class="jet-reviews-published-date" :datetime="itemData.date.raw" :title="itemData.date.raw"><span> </span></time>
						</div>
						<div
							class="jet-reviews-user-data__verifications"

							v-if="authorVerificationData"
						>
							<div
								class="jet-reviews-user-data__verification"
								:class="[ item.slug ]"
								v-for="(item, index) in authorVerificationData"
							>
								<span class="verification-icon" v-html="item.icon" v-if="item.icon"></span>
								<span class="verification-label" v-html="item.message"></span>
							</div>

						</div>
					</div>

					<div
						class="jet-reviews-user-data__summary-rating"
						v-if="averageRatingVisible"
					>
						<component
							:is="$root.options.ratingLayout"
							:before="false"
							:rating="+itemData.rating"
							:after="'points-field' === $root.options.ratingLayout ? averageRatingData.value : false"
						></component>
					</div>
					<div
						class="jet-reviews-user-data__details-rating"
						v-if="detailsRatingVisible"
					>
						<component
							v-for="(item, index) in itemData.rating_data"
							:is="$root.options.ratingLayout"
							:key="index"
							:before="item.field_label"
							:rating="Math.round( +item.field_value * 100 / +item.field_max )"
							:after="'points-field' === $root.options.ratingLayout ? +item.field_value : false"
						></component>
					</div>
				</div>
			</div>
		</div>
		<div class="jet-reviews-advanced__review-misc">
			<div
				class="jet-reviews-advanced__review-pin"
				v-html="pinnedIcon"
				v-if="pinnedVisible"
			>
			</div>
		</div>
	</div>
	<div
		class="jet-reviews-advanced__review-container"
	>
		<h3
            class="jet-reviews-advanced__review-title"
            v-html="itemData.title"
            v-if="$root.options.reviewTitleVisible"
        ></h3>
		<p class="jet-reviews-advanced__review-content" v-html="itemData.content"></p>
	</div>
	<div
		class="jet-reviews-advanced__review-footer"
	>
		<div class="jet-reviews-advanced__review-controls">
			<div
				class="jet-reviews-advanced__review-control-group"
				v-if="userCanRate"
			>
				<div
					class="jet-reviews-button jet-reviews-button--secondary"
					:class="{ 'jet-progress-state': approvalSubmiting }"
					tabindex="0"
					@click="updateApprovalHandler( 'like' )"
					@keyup.enter="updateApprovalHandler( 'like' )"
				>
					<span class="jet-reviews-button__icon" v-html="likeIcon"></span>
					<span class="jet-reviews-button__text"> </span>
				</div>

				<div
					class="jet-reviews-button jet-reviews-button--secondary"
					:class="{ 'jet-progress-state': approvalSubmiting }"
					tabindex="0"
					@click="updateApprovalHandler( 'dislike' )"
					@keyup.enter="updateApprovalHandler( 'dislike' )"
				>
					<span class="jet-reviews-button__icon" v-html="dislikeIcon"></span>
					<span class="jet-reviews-button__text"> </span>
				</div>
			</div>

			<div class="jet-reviews-advanced__review-control-group">
				<div
					v-if="!isCommentsEmpty"
					class="jet-reviews-button jet-reviews-button--primary"
					tabindex="0"
					@click="toggleCommentsVisible"
					@keyup.enter="toggleCommentsVisible"
				>
					<span class="jet-reviews-button__icon" v-if="showCommentsIcon" v-html="showCommentsIcon"></span>
					<span class="jet-reviews-button__text" v-if="!commentsVisible"> </span>
					<span class="jet-reviews-button__text" v-if="commentsVisible"> </span>
				</div>

				<div
					v-if="userCanComment"
					class="jet-reviews-button jet-reviews-button--primary"
					tabindex="0"
					@click="showCommentForm"
					@keyup.enter="showCommentForm"
				>
					<span class="jet-reviews-button__icon" v-if="addCommentIcon" v-html="addCommentIcon"></span>
					<span class="jet-reviews-button__text"> </span>
				</div>
			</div>
		</div>

</div>

</div>
					</script>
    <script type="text/x-template" id="jet-advanced-reviews-stars-input-template"><div
	class="jet-reviews-stars-input"
>
	<span
		class="jet-new-review-field-label"
		v-html="label"
	></span>
	<div
		class="jet-reviews-field jet-reviews-stars-field"
		:class="ratingClass"
	>
		<div
			class="jet-reviews-field__rating"
		>
			<div
				class="jet-reviews-stars jet-reviews-stars--adjuster"
				@mouseout="ratingMouseOut()"
			>
				<div
					class="jet-reviews-star"
					v-for="index in max"
					:key="index"
					v-html="emptyIcon"
					@click="ratingClick( index )"
					@mouseover="ratingMouseOver( index )"
				></div>
			</div>
			<div
				class="jet-reviews-stars jet-reviews-stars--filled"
				:style="{ width: preparedRating + '%' }"
				v-html="filledIcons"
			>
			</div>
			<div
				class="jet-reviews-stars jet-reviews-stars--empty"
				:style="{ width: ( 100 - preparedRating ) + '%' }"
				v-html="emptyIcons"
			>
			</div>
		</div>
	</div>
	<span
		class="jet-new-review-field-value"
		v-html="valueLabel"
	></span>
</div>
					</script>
    <script type="text/x-template" id="jet-reviews-widget-pagination-template"><div
	:class="classesList"
>
	<div :class="[baseClass + '__items']">
		<div
			:class="prevClasses"
			v-html="prevIcon"
			@click="prev"
		>
		</div>
		<div :class="firstPageClasses" @click="changePage(1)"><span>1</span></div>
		<div v-if="currentPage > 5" :class="[baseClass + '__item', baseClass + '__item--jump-prev']" @click="fastPrev"><span>...</span></div>
		<div v-if="currentPage === 5" :class="[baseClass + '__item']" @click="changePage(currentPage - 3)"><span> </span></div>
		<div v-if="currentPage - 2 > 1" :class="[baseClass + '__item']" @click="changePage(currentPage - 2)"><span> </span></div>
		<div v-if="currentPage - 1 > 1" :class="[baseClass + '__item']" @click="changePage(currentPage - 1)"><span> </span></div>
		<div v-if="currentPage != 1 && currentPage != allPages" :class="[baseClass + '__item',baseClass + '__item--active']"><span> </span></div>
		<div v-if="currentPage + 1 < allPages" :class="[baseClass + '__item']" @click="changePage(currentPage + 1)"><span> </span></div>
		<div v-if="currentPage + 2 < allPages" :class="[baseClass + '__item']" @click="changePage(currentPage + 2)"><span> </span></div>
		<div v-if="allPages - currentPage === 4" :class="[baseClass + '__item']" @click="changePage(currentPage + 3)"><span> </span></div>
		<div v-if="allPages - currentPage >= 5" :class="[baseClass + '__item', baseClass + '__item--jump-next']" @click="fastNext"><span>...</span></div>
		<div v-if="allPages > 1" :class="lastPageClasses" @click="changePage(allPages)"><span> </span></div>
		<div
			:class="nextClasses"
			v-html="nextIcon"
			@click="next"
		>
		</div>
	</div>
</div>
					</script>
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
</body>
