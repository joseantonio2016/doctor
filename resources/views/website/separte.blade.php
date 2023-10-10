@extends('layout.mainlayout-k',['activePage' => 'separte'])

@section('css')
    <link rel="stylesheet" href="{{ url('assets/css/intlTelInput.css') }}" />
    <style>
        .signupDiv.active {
            border-color: var(--site_color);
        }

        .signupDiv.active div {
            border: var(--site_color);
        }

        .signupDiv.active label {
            color: black
        }

        .nav-tabs .nav-item .nav-link.active {
            border: 1px solid var(--site_color) !important;
            color: black !important;
        }

        .iti {
            display: block !important;
        }

        .hide {
            display: none;
        }

        /* .contentDisplay .active
        {
            display: block;
        } */
    </style>
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
        <link rel='stylesheet' id='astra-theme-css-css' href="{{ asset('assets/wp-content/themes/astra/assets/css/minified/main.min3d81.css') }}" />
        <style id='astra-theme-css-inline-css'>
        :root{--ast-container-default-xlg-padding:3em;--ast-container-default-lg-padding:3em;--ast-container-default-slg-padding:2em;--ast-container-default-md-padding:3em;--ast-container-default-sm-padding:3em;--ast-container-default-xs-padding:2.4em;--ast-container-default-xxs-padding:1.8em;--ast-code-block-background:#ECEFF3;--ast-comment-inputs-background:#F9FAFB;}html{font-size:100%;}a{color:var(--ast-global-color-0);}a:hover,a:focus{color:var(--ast-global-color-1);}body,button,input,select,textarea,.ast-button,.ast-custom-button{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif;font-weight:400;font-size:16px;font-size:1rem;line-height:1.6em;}blockquote{color:var(--ast-global-color-3);}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6,.site-title,.site-title a{font-weight:600;}.site-title{font-size:26px;font-size:1.625rem;display:block;}.site-header .site-description{font-size:15px;font-size:0.9375rem;display:none;}.entry-title{font-size:26px;font-size:1.625rem;}h1,.entry-content h1{font-size:40px;font-size:2.5rem;font-weight:600;line-height:1.4em;}h2,.entry-content h2{font-size:32px;font-size:2rem;font-weight:600;line-height:1.25em;}h3,.entry-content h3{font-size:26px;font-size:1.625rem;font-weight:600;line-height:1.2em;}h4,.entry-content h4{font-size:24px;font-size:1.5rem;line-height:1.2em;font-weight:600;}h5,.entry-content h5{font-size:20px;font-size:1.25rem;line-height:1.2em;font-weight:600;}h6,.entry-content h6{font-size:16px;font-size:1rem;line-height:1.25em;font-weight:600;}::selection{background-color:var(--ast-global-color-0);color:#ffffff;}body,h1,.entry-title a,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:var(--ast-global-color-3);}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#ffffff;border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:var(--ast-global-color-0);}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}.single .nav-links .nav-previous,.single .nav-links .nav-next{color:var(--ast-global-color-0);}.entry-meta,.entry-meta *{line-height:1.45;color:var(--ast-global-color-0);}.entry-meta a:hover,.entry-meta a:hover *,.entry-meta a:focus,.entry-meta a:focus *,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:var(--ast-global-color-1);}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:var(--ast-global-color-0);}.secondary .calendar_wrap #today,.ast-progress-val span{background:var(--ast-global-color-0);}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:var(--ast-global-color-0);border-color:var(--ast-global-color-0);}.calendar_wrap #today > a{color:#ffffff;}.page-links .page-link,.single .post-navigation a{color:var(--ast-global-color-0);}.ast-archive-title{color:var(--ast-global-color-2);}.widget-title{font-size:22px;font-size:1.375rem;color:var(--ast-global-color-2);}.ast-single-post .entry-content a,.ast-comment-content a:not(.ast-comment-edit-reply-wrap a){text-decoration:underline;}.ast-single-post .wp-block-button .wp-block-button__link,.ast-single-post .elementor-button-wrapper .elementor-button,.ast-single-post .entry-content .uagb-tab a,.ast-single-post .entry-content .uagb-ifb-cta a,.ast-single-post .entry-content .wp-block-uagb-buttons a,.ast-single-post .entry-content .uabb-module-content a,.ast-single-post .entry-content .uagb-post-grid a,.ast-single-post .entry-content .uagb-timeline a,.ast-single-post .entry-content .uagb-toc__wrap a,.ast-single-post .entry-content .uagb-taxomony-box a,.ast-single-post .entry-content .woocommerce a,.entry-content .wp-block-latest-posts > li > a,.ast-single-post .entry-content .wp-block-file__button{text-decoration:none;}a:focus-visible,.ast-menu-toggle:focus-visible,.site .skip-link:focus-visible,.wp-block-loginout input:focus-visible,.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,.ast-header-navigation-arrow:focus-visible{outline-style:dotted;outline-color:inherit;outline-width:thin;border-color:transparent;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus,.wp-block-search__input:focus,[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,.ast-mobile-popup-drawer.active .menu-toggle-close:focus,.woocommerce-ordering select.orderby:focus,#ast-scroll-top:focus,.woocommerce a.add_to_cart_button:focus,.woocommerce .button.single_add_to_cart_button:focus{border-style:dotted;border-color:inherit;border-width:thin;outline-color:transparent;}.ast-logo-title-inline .site-logo-img{padding-right:1em;}.ast-page-builder-template .hentry {margin: 0;}.ast-page-builder-template .site-content > .ast-container {max-width: 100%;padding: 0;}.ast-page-builder-template .site-content #primary {padding: 0;margin: 0;}.ast-page-builder-template .no-results {text-align: center;margin: 4em auto;}.ast-page-builder-template .ast-pagination {padding: 2em;}.ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {margin-top: 0;}.ast-page-builder-template .entry-header.ast-header-without-markup {margin-top: 0;margin-bottom: 0;}.ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {margin-bottom: 0;}.ast-page-builder-template.single .post-navigation {padding-bottom: 2em;}.ast-page-builder-template.single-post .site-content > .ast-container {max-width: 100%;}.ast-page-builder-template .entry-header {margin-top: 2em;margin-left: auto;margin-right: auto;}.ast-page-builder-template .ast-archive-description {margin: 2em auto 0;padding-left: 20px;padding-right: 20px;}.ast-page-builder-template .ast-row {margin-left: 0;margin-right: 0;}.single.ast-page-builder-template .entry-header + .entry-content {margin-bottom: 2em;}@media(min-width: 921px) {.ast-page-builder-template.archive.ast-right-sidebar .ast-row article,.ast-page-builder-template.archive.ast-left-sidebar .ast-row article {padding-left: 0;padding-right: 0;}}@media (max-width:921px){#ast-desktop-header{display:none;}}@media (min-width:921px){#ast-mobile-header{display:none;}}.wp-block-buttons.aligncenter{justify-content:center;}@media (max-width:921px){.ast-theme-transparent-header #primary,.ast-theme-transparent-header #secondary{padding:0;}}@media (max-width:921px){.ast-plain-container.ast-no-sidebar #primary{padding:0;}}.ast-plain-container.ast-no-sidebar #primary{margin-top:0;margin-bottom:0;}.wp-block-button.is-style-outline .wp-block-button__link{border-color:var(--ast-global-color-0);}div.wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color),div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color){color:var(--ast-global-color-0);}.wp-block-button.is-style-outline .wp-block-button__link:hover,div.wp-block-button.is-style-outline .wp-block-button__link:focus,div.wp-block-button.is-style-outline > .wp-block-button__link:not(.has-text-color):hover,div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}.post-page-numbers.current .page-link,.ast-pagination .page-numbers.current{color:#ffffff;border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);border-radius:2px;}h1.widget-title{font-weight:600;}h2.widget-title{font-weight:600;}h3.widget-title{font-weight:600;}#page{display:flex;flex-direction:column;min-height:100vh;}.ast-404-layout-1 h1.page-title{color:var(--ast-global-color-2);}.single .post-navigation a{line-height:1em;height:inherit;}.error-404 .page-sub-title{font-size:1.5rem;font-weight:inherit;}.search .site-content .content-area .search-form{margin-bottom:0;}#page .site-content{flex-grow:1;}.widget{margin-bottom:3.5em;}#secondary li{line-height:1.5em;}#secondary .wp-block-group h2{margin-bottom:0.7em;}#secondary h2{font-size:1.7rem;}.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .ast-comment-list li.depth-1,.ast-separate-container .comment-respond{padding:3em;}.ast-separate-container .ast-comment-list li.depth-1,.hentry{margin-bottom:2em;}.ast-separate-container .ast-archive-description,.ast-separate-container .ast-author-box{background-color:var(--ast-global-color-5);border-bottom:1px solid var(--ast-border-color);}.ast-separate-container .comments-title{padding:2em 2em 0 2em;}.ast-page-builder-template .comment-form-textarea,.ast-comment-formwrap .ast-grid-common-col{padding:0;}.ast-comment-formwrap{padding:0 20px;display:inline-flex;column-gap:20px;}.archive.ast-page-builder-template .entry-header{margin-top:2em;}.ast-page-builder-template .ast-comment-formwrap{width:100%;}.entry-title{margin-bottom:0.5em;}.ast-archive-description p{font-size:inherit;font-weight:inherit;line-height:inherit;}@media (min-width:921px){.ast-left-sidebar.ast-page-builder-template #secondary,.archive.ast-right-sidebar.ast-page-builder-template .site-main{padding-left:20px;padding-right:20px;}}@media (max-width:544px){.ast-comment-formwrap.ast-row{column-gap:10px;display:inline-block;}#ast-commentform .ast-grid-common-col{position:relative;width:100%;}}@media (min-width:1201px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .ast-author-box,.ast-separate-container .ast-404-layout-1,.ast-separate-container .no-results{padding:3em;}}@media (max-width:921px){.ast-separate-container #primary,.ast-separate-container #secondary{padding:1.5em 0;}#primary,#secondary{padding:1.5em 0;margin:0;}.ast-left-sidebar #content > .ast-container{display:flex;flex-direction:column-reverse;width:100%;}}@media (min-width:922px){.ast-separate-container.ast-right-sidebar #primary,.ast-separate-container.ast-left-sidebar #primary{border:0;}.search-no-results.ast-separate-container #primary{margin-bottom:4em;}}.wp-block-button .wp-block-button__link{color:#ffffff;}.wp-block-button .wp-block-button__link:hover,.wp-block-button .wp-block-button__link:focus{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}.elementor-widget-heading h1.elementor-heading-title{line-height:1.4em;}.elementor-widget-heading h2.elementor-heading-title{line-height:1.25em;}.elementor-widget-heading h3.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h4.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h5.elementor-heading-title{line-height:1.2em;}.elementor-widget-heading h6.elementor-heading-title{line-height:1.25em;}.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);color:#ffffff;font-family:inherit;font-weight:500;line-height:1em;font-size:16px;font-size:1rem;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;}@media (max-width:921px){.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px;}}@media (max-width:544px){.wp-block-button .wp-block-button__link,.wp-block-search .wp-block-search__button,body .wp-block-file .wp-block-file__button{padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;}}.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.search .search-submit,.woocommerce a.button,.woocommerce button.button,.woocommerce .woocommerce-message a.button,.woocommerce #respond input#submit.alt,.woocommerce input.button.alt,.woocommerce input.button,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover,.woocommerce #respond input#submit,.woocommerce button.button.alt.disabled,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link,.wc-block-grid__product-onsale,[CLASS*="wc-block"] button,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,.woocommerce button.button.alt.disabled.wc-variation-selection-needed{border-style:solid;border-top-width:0;border-right-width:0;border-left-width:0;border-bottom-width:0;color:#ffffff;border-color:var(--ast-global-color-0);background-color:var(--ast-global-color-0);padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-family:inherit;font-weight:500;font-size:16px;font-size:1rem;line-height:1em;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.ast-custom-button:hover .button:hover,.ast-custom-button:hover ,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus,body .wp-block-file .wp-block-file__button:hover,body .wp-block-file .wp-block-file__button:focus,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce .woocommerce-message a.button:hover,.woocommerce #respond input#submit:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce input.button.alt:hover,.woocommerce input.button:hover,.woocommerce button.button.alt.disabled:hover,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover,[CLASS*="wc-block"] button:hover,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping):hover,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout:hover,.woocommerce button.button.alt.disabled.wc-variation-selection-needed:hover{color:#ffffff;background-color:var(--ast-global-color-1);border-color:var(--ast-global-color-1);}form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button.has-icon{padding-top:calc(15px - 3px);padding-right:calc(30px - 3px);padding-bottom:calc(15px - 3px);padding-left:calc(30px - 3px);}@media (max-width:921px){.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.search .search-submit,.woocommerce a.button,.woocommerce button.button,.woocommerce .woocommerce-message a.button,.woocommerce #respond input#submit.alt,.woocommerce input.button.alt,.woocommerce input.button,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover,.woocommerce #respond input#submit,.woocommerce button.button.alt.disabled,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link,.wc-block-grid__product-onsale,[CLASS*="wc-block"] button,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,.woocommerce button.button.alt.disabled.wc-variation-selection-needed{padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px;}}@media (max-width:544px){.menu-toggle,button,.ast-button,.ast-custom-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"],form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,body .wp-block-file .wp-block-file__button,.search .search-submit,.woocommerce a.button,.woocommerce button.button,.woocommerce .woocommerce-message a.button,.woocommerce #respond input#submit.alt,.woocommerce input.button.alt,.woocommerce input.button,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce input.button:disabled:hover,.woocommerce input.button:disabled[disabled]:hover,.woocommerce #respond input#submit,.woocommerce button.button.alt.disabled,.wc-block-grid__products .wc-block-grid__product .wp-block-button__link,.wc-block-grid__product-onsale,[CLASS*="wc-block"] button,.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),.woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,.woocommerce button.button.alt.disabled.wc-variation-selection-needed{padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;}}@media (max-width:921px){.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon{display:inline-block;}.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon{margin:0;}.ast-comment-avatar-wrap img{max-width:2.5em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 2.14em;}.ast-separate-container .comment-respond{padding:2em 2.14em;}.ast-comment-meta{padding:0 1.8888em 1.3333em;}}@media (min-width:544px){.ast-container{max-width:100%;}}@media (max-width:544px){.ast-separate-container .ast-article-post,.ast-separate-container .ast-article-single,.ast-separate-container .comments-title,.ast-separate-container .ast-archive-description{padding:1.5em 1em;}.ast-separate-container #content .ast-container{padding-left:0.54em;padding-right:0.54em;}.ast-separate-container .ast-comment-list li.depth-1{padding:1.5em 1em;margin-bottom:1.5em;}.ast-separate-container .ast-comment-list .bypostauthor{padding:.5em;}.ast-search-menu-icon.ast-dropdown-active .search-field{width:170px;}}.ast-separate-container{background-color:var(--ast-global-color-4);;}@media (max-width:921px){.site-title{display:block;}.site-header .site-description{display:none;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:30px;}h2,.entry-content h2{font-size:25px;}h3,.entry-content h3{font-size:20px;}}@media (max-width:544px){.site-title{display:block;}.site-header .site-description{display:none;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:30px;}h2,.entry-content h2{font-size:25px;}h3,.entry-content h3{font-size:20px;}}@media (max-width:921px){html{font-size:91.2%;}}@media (max-width:544px){html{font-size:91.2%;}}@media (min-width:922px){.ast-container{max-width:1240px;}}@media (min-width:922px){.site-content .ast-container{display:flex;}}@media (max-width:921px){.site-content .ast-container{flex-direction:column;}}@media (min-width:922px){.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover > .sub-menu,.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus > .sub-menu{margin-left:-0px;}}.entry-content li > p{margin-bottom:0;}blockquote,cite {font-style: initial;}.wp-block-file {display: flex;align-items: center;flex-wrap: wrap;justify-content: space-between;}.wp-block-pullquote {border: none;}.wp-block-pullquote blockquote::before {content: "\201D";font-family: "Helvetica",sans-serif;display: flex;transform: rotate( 180deg );font-size: 6rem;font-style: normal;line-height: 1;font-weight: bold;align-items: center;justify-content: center;}.has-text-align-right > blockquote::before {justify-content: flex-start;}.has-text-align-left > blockquote::before {justify-content: flex-end;}figure.wp-block-pullquote.is-style-solid-color blockquote {max-width: 100%;text-align: inherit;}html body {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 3em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 3em;--wp--custom--ast-container-width: 1200px;--wp--custom--ast-content-width-size: 1200px;--wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));}.ast-narrow-container {--wp--custom--ast-content-width-size: 750px;--wp--custom--ast-wide-width-size: 750px;}@media(max-width: 921px) {html body {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 2em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 2em;}}@media(max-width: 544px) {html body {--wp--custom--ast-default-block-top-padding: 3em;--wp--custom--ast-default-block-right-padding: 1.5em;--wp--custom--ast-default-block-bottom-padding: 3em;--wp--custom--ast-default-block-left-padding: 1.5em;}}.entry-content > .wp-block-group,.entry-content > .wp-block-cover,.entry-content > .wp-block-columns {padding-top: var(--wp--custom--ast-default-block-top-padding);padding-right: var(--wp--custom--ast-default-block-right-padding);padding-bottom: var(--wp--custom--ast-default-block-bottom-padding);padding-left: var(--wp--custom--ast-default-block-left-padding);}.ast-plain-container.ast-no-sidebar .entry-content > .alignfull,.ast-page-builder-template .ast-no-sidebar .entry-content > .alignfull {margin-left: calc( -50vw + 50%);margin-right: calc( -50vw + 50%);max-width: 100vw;width: 100vw;}.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignwide,.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignwide,.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignfull,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignfull,.ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignwide,.ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignwide {margin-left: auto;margin-right: auto;width: 100%;}[ast-blocks-layout] .wp-block-separator:not(.is-style-dots) {height: 0;}[ast-blocks-layout] .wp-block-separator {margin: 20px auto;}[ast-blocks-layout] .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {max-width: 100px;}[ast-blocks-layout] .wp-block-separator.has-background {padding: 0;}.entry-content[ast-blocks-layout] > * {max-width: var(--wp--custom--ast-content-width-size);margin-left: auto;margin-right: auto;}.entry-content[ast-blocks-layout] > .alignwide {max-width: var(--wp--custom--ast-wide-width-size);}.entry-content[ast-blocks-layout] .alignfull {max-width: none;}.entry-content .wp-block-columns {margin-bottom: 0;}blockquote {margin: 1.5em;border: none;}.wp-block-quote:not(.has-text-align-right):not(.has-text-align-center) {border-left: 5px solid rgba(0,0,0,0.05);}.has-text-align-right > blockquote,blockquote.has-text-align-right {border-right: 5px solid rgba(0,0,0,0.05);}.has-text-align-left > blockquote,blockquote.has-text-align-left {border-left: 5px solid rgba(0,0,0,0.05);}.wp-block-site-tagline,.wp-block-latest-posts .read-more {margin-top: 15px;}.wp-block-loginout p label {display: block;}.wp-block-loginout p:not(.login-remember):not(.login-submit) input {width: 100%;}.wp-block-loginout input:focus {border-color: transparent;}.wp-block-loginout input:focus {outline: thin dotted;}.entry-content .wp-block-media-text .wp-block-media-text__content {padding: 0 0 0 8%;}.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {padding: 0 8% 0 0;}.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {padding: 8%;}.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,.entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,.entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text {color: var(--ast-global-color-5);}.wp-block-loginout .login-remember input {width: 1.1rem;height: 1.1rem;margin: 0 5px 4px 0;vertical-align: middle;}.wp-block-latest-posts > li > *:first-child,.wp-block-latest-posts:not(.is-grid) > li:first-child {margin-top: 0;}.wp-block-search__inside-wrapper .wp-block-search__input {padding: 0 10px;color: var(--ast-global-color-3);background: var(--ast-global-color-5);border-color: var(--ast-border-color);}.wp-block-latest-posts .read-more {margin-bottom: 1.5em;}.wp-block-search__no-button .wp-block-search__inside-wrapper .wp-block-search__input {padding-top: 5px;padding-bottom: 5px;}.wp-block-latest-posts .wp-block-latest-posts__post-date,.wp-block-latest-posts .wp-block-latest-posts__post-author {font-size: 1rem;}.wp-block-latest-posts > li > *,.wp-block-latest-posts:not(.is-grid) > li {margin-top: 12px;margin-bottom: 12px;}.ast-page-builder-template .entry-content[ast-blocks-layout] > *,.ast-page-builder-template .entry-content[ast-blocks-layout] > .alignfull > * {max-width: none;}.ast-page-builder-template .entry-content[ast-blocks-layout] > .alignwide > * {max-width: var(--wp--custom--ast-wide-width-size);}.ast-page-builder-template .entry-content[ast-blocks-layout] > .inherit-container-width > *,.ast-page-builder-template .entry-content[ast-blocks-layout] > * > *,.entry-content[ast-blocks-layout] > .wp-block-cover .wp-block-cover__inner-container {max-width: var(--wp--custom--ast-content-width-size);margin-left: auto;margin-right: auto;}.entry-content[ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {width: auto;}@media(max-width: 1200px) {.ast-separate-container .entry-content > .alignfull,.ast-separate-container .entry-content[ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content[ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content .alignfull {margin-left: calc(-1 * min(var(--ast-container-default-xlg-padding),20px)) ;margin-right: calc(-1 * min(var(--ast-container-default-xlg-padding),20px));}}@media(min-width: 1201px) {.ast-separate-container .entry-content > .alignfull {margin-left: calc(-1 * var(--ast-container-default-xlg-padding) );margin-right: calc(-1 * var(--ast-container-default-xlg-padding) );}.ast-separate-container .entry-content[ast-blocks-layout] > .alignwide,.ast-plain-container .entry-content[ast-blocks-layout] > .alignwide {margin-left: calc(-1 * var(--wp--custom--ast-default-block-left-padding) );margin-right: calc(-1 * var(--wp--custom--ast-default-block-right-padding) );}}@media(min-width: 921px) {.ast-separate-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width) > :where(:not(.alignleft):not(.alignright)),.ast-plain-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width) > :where(:not(.alignleft):not(.alignright)) {max-width: calc( var(--wp--custom--ast-content-width-size) + 80px );}.ast-plain-container.ast-right-sidebar .entry-content[ast-blocks-layout] .alignfull,.ast-plain-container.ast-left-sidebar .entry-content[ast-blocks-layout] .alignfull {margin-left: -60px;margin-right: -60px;}}@media(min-width: 544px) {.entry-content > .alignleft {margin-right: 20px;}.entry-content > .alignright {margin-left: 20px;}}@media (max-width:544px){.wp-block-columns .wp-block-column:not(:last-child){margin-bottom:20px;}.wp-block-latest-posts{margin:0;}}@media( max-width: 600px ) {.entry-content .wp-block-media-text .wp-block-media-text__content,.entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {padding: 8% 0 0;}.entry-content .wp-block-media-text.has-background .wp-block-media-text__content {padding: 8%;}}.ast-separate-container .entry-content .uagb-is-root-container {padding-left: 0;}.ast-page-builder-template .entry-header {padding-left: 0;}@media(min-width: 1201px) {.ast-separate-container .entry-content > .uagb-is-root-container {margin-left: 0;margin-right: 0;}}.ast-narrow-container .site-content .wp-block-uagb-image--align-full .wp-block-uagb-image__figure {max-width: 100%;margin-left: auto;margin-right: auto;}.entry-content ul,.entry-content ol {padding: revert;margin: revert;}:root .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-color{color:var(--ast-global-color-0);}:root .wp-block-button .has-ast-global-color-0-background-color{background-color:var(--ast-global-color-0);}:root .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-color{color:var(--ast-global-color-1);}:root .wp-block-button .has-ast-global-color-1-background-color{background-color:var(--ast-global-color-1);}:root .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-color{color:var(--ast-global-color-2);}:root .wp-block-button .has-ast-global-color-2-background-color{background-color:var(--ast-global-color-2);}:root .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-color{color:var(--ast-global-color-3);}:root .wp-block-button .has-ast-global-color-3-background-color{background-color:var(--ast-global-color-3);}:root .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-color{color:var(--ast-global-color-4);}:root .wp-block-button .has-ast-global-color-4-background-color{background-color:var(--ast-global-color-4);}:root .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-color{color:var(--ast-global-color-5);}:root .wp-block-button .has-ast-global-color-5-background-color{background-color:var(--ast-global-color-5);}:root .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-color{color:var(--ast-global-color-6);}:root .wp-block-button .has-ast-global-color-6-background-color{background-color:var(--ast-global-color-6);}:root .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-color{color:var(--ast-global-color-7);}:root .wp-block-button .has-ast-global-color-7-background-color{background-color:var(--ast-global-color-7);}:root .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-color{color:var(--ast-global-color-8);}:root .wp-block-button .has-ast-global-color-8-background-color{background-color:var(--ast-global-color-8);}:root{--ast-global-color-0:#046bd2;--ast-global-color-1:#045cb4;--ast-global-color-2:#1e293b;--ast-global-color-3:#334155;--ast-global-color-4:#f9fafb;--ast-global-color-5:#FFFFFF;--ast-global-color-6:#e2e8f0;--ast-global-color-7:#cbd5e1;--ast-global-color-8:#94a3b8;}:root {--ast-border-color : var(--ast-global-color-6);}.ast-single-entry-banner {-js-display: flex;display: flex;flex-direction: column;justify-content: center;text-align: center;position: relative;background: #eeeeee;}.ast-single-entry-banner[data-banner-layout="layout-1"] {max-width: 1200px;background: inherit;padding: 20px 0;}.ast-single-entry-banner[data-banner-width-type="custom"] {margin: 0 auto;width: 100%;}.ast-single-entry-banner + .site-content .entry-header {margin-bottom: 0;}header.entry-header .entry-title{font-weight:600;font-size:32px;font-size:2rem;}header.entry-header > *:not(:last-child){margin-bottom:10px;}.ast-archive-entry-banner {-js-display: flex;display: flex;flex-direction: column;justify-content: center;text-align: center;position: relative;background: #eeeeee;}.ast-archive-entry-banner[data-banner-width-type="custom"] {margin: 0 auto;width: 100%;}.ast-archive-entry-banner[data-banner-layout="layout-1"] {background: inherit;padding: 20px 0;text-align: left;}body.archive .ast-archive-description{max-width:1200px;width:100%;text-align:left;padding-top:3em;padding-right:3em;padding-bottom:3em;padding-left:3em;}body.archive .ast-archive-description .ast-archive-title,body.archive .ast-archive-description .ast-archive-title *{font-weight:600;font-size:32px;font-size:2rem;}body.archive .ast-archive-description > *:not(:last-child){margin-bottom:10px;}@media (max-width:921px){body.archive .ast-archive-description{text-align:left;}}@media (max-width:544px){body.archive .ast-archive-description{text-align:left;}}.ast-breadcrumbs .trail-browse,.ast-breadcrumbs .trail-items,.ast-breadcrumbs .trail-items li{display:inline-block;margin:0;padding:0;border:none;background:inherit;text-indent:0;text-decoration:none;}.ast-breadcrumbs .trail-browse{font-size:inherit;font-style:inherit;font-weight:inherit;color:inherit;}.ast-breadcrumbs .trail-items{list-style:none;}.trail-items li::after{padding:0 0.3em;content:"\00bb";}.trail-items li:last-of-type::after{display:none;}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:var(--ast-global-color-2);}.entry-title a{color:var(--ast-global-color-2);}@media (max-width:921px){.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}@media (max-width:544px){.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row > *:first-child,.ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row > *:last-child{grid-column:1 / -1;}}.ast-builder-layout-element[data-section="title_tagline"]{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"]{display:flex;}}.ast-builder-menu-1{font-family:inherit;font-weight:inherit;}.ast-builder-menu-1 .menu-item > .menu-link{color:var(--ast-global-color-3);}.ast-builder-menu-1 .menu-item > .ast-menu-toggle{color:var(--ast-global-color-3);}.ast-builder-menu-1 .menu-item:hover > .menu-link,.ast-builder-menu-1 .inline-on-mobile .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-1 .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-1 .menu-item.current-menu-item > .menu-link,.ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item > .ast-menu-toggle,.ast-builder-menu-1 .current-menu-ancestor > .menu-link{color:var(--ast-global-color-1);}.ast-builder-menu-1 .menu-item.current-menu-item > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-1 .sub-menu,.ast-builder-menu-1 .inline-on-mobile .sub-menu{border-top-width:2px;border-bottom-width:0;border-right-width:0;border-left-width:0;border-color:var(--ast-global-color-0);border-style:solid;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu:before,.ast-desktop .ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper:before{height:calc( 0px + 5px );}.ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link{border-style:none;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-1 .inline-on-mobile .menu-item.menu-item-has-children > .ast-menu-toggle{right:-15px;}.ast-builder-menu-1 .menu-item-has-children > .menu-link:after{content:unset;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-1 .main-header-menu > .menu-item > .sub-menu,.ast-builder-menu-1 .main-header-menu > .menu-item > .astra-full-megamenu-wrapper{margin-top:0;}}.ast-builder-menu-1{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-1{display:flex;}}.site-below-footer-wrap{padding-top:20px;padding-bottom:20px;}.site-below-footer-wrap[data-section="section-below-footer-builder"]{background-color:var(--ast-global-color-5);;min-height:80px;border-style:solid;border-width:0px;border-top-width:1px;border-top-color:var(--ast-global-color-6);}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row{max-width:1200px;margin-left:auto;margin-right:auto;}.site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,.site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section{align-items:flex-start;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section{display:flex;margin-bottom:0;}.ast-builder-grid-row-full .ast-builder-grid-row{grid-template-columns:1fr;}@media (max-width:921px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row{grid-template-columns:1fr;}}@media (max-width:544px){.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section{display:flex;margin-bottom:0;}.site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section{display:block;margin-bottom:10px;}.ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row{grid-template-columns:1fr;}}.site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}@media (max-width:921px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}@media (max-width:544px){.ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"]{display:grid;}}.ast-footer-copyright{text-align:center;}.ast-footer-copyright {color:var(--ast-global-color-3);}@media (max-width:921px){.ast-footer-copyright{text-align:center;}}@media (max-width:544px){.ast-footer-copyright{text-align:center;}}.ast-footer-copyright {font-size:16px;font-size:1rem;}.ast-footer-copyright.ast-builder-layout-element{display:flex;}@media (max-width:921px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}@media (max-width:544px){.ast-header-break-point .ast-footer-copyright.ast-builder-layout-element{display:flex;}}.footer-widget-area.widget-area.site-footer-focus-item{width:auto;}.elementor-widget-heading .elementor-heading-title{margin:0;}.elementor-page .ast-menu-toggle{color:unset !important;background:unset !important;}.elementor-post.elementor-grid-item.hentry{margin-bottom:0;}.woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,.elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product{width:auto;margin:0;float:none;}.elementor-toc__list-wrapper{margin:0;}.ast-left-sidebar .elementor-section.elementor-section-stretched,.ast-right-sidebar .elementor-section.elementor-section-stretched{max-width:100%;left:0 !important;}.elementor-template-full-width .ast-container{display:block;}@media (max-width:544px){.elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product{width:auto;margin:0;}.elementor-element .woocommerce .woocommerce-result-count{float:none;}}.ast-header-break-point .main-header-bar{border-bottom-width:1px;}@media (min-width:922px){.main-header-bar{border-bottom-width:1px;}}.main-header-menu .menu-item, #astra-footer-menu .menu-item, .main-header-bar .ast-masthead-custom-menu-items{-js-display:flex;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-moz-box-orient:vertical;-moz-box-direction:normal;-ms-flex-direction:column;flex-direction:column;}.main-header-menu > .menu-item > .menu-link, #astra-footer-menu > .menu-item > .menu-link{height:100%;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;-js-display:flex;display:flex;}.ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg{top:.2em;margin-top:0px;margin-left:0px;width:.65em;transform:translate(0, -2px) rotateZ(270deg);}.ast-mobile-popup-content .ast-submenu-expanded > .ast-menu-toggle{transform:rotateX(180deg);overflow-y:auto;}.ast-separate-container .blog-layout-1, .ast-separate-container .blog-layout-2, .ast-separate-container .blog-layout-3{background-color:transparent;background-image:none;}.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;}@media (max-width:921px){.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;}}@media (max-width:544px){.ast-separate-container .ast-article-post{background-color:var(--ast-global-color-5);;}}.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .site-main .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container.ast-two-container #secondary .widget,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title, .ast-narrow-container .site-content{background-color:var(--ast-global-color-5);;}@media (max-width:921px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .site-main .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container.ast-two-container #secondary .widget,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title, .ast-narrow-container .site-content{background-color:var(--ast-global-color-5);;}}@media (max-width:544px){.ast-separate-container .ast-article-single:not(.ast-related-post), .ast-separate-container .comments-area .comment-respond,.ast-separate-container .comments-area .ast-comment-list li, .ast-separate-container .ast-woocommerce-container, .ast-separate-container .error-404, .ast-separate-container .no-results, .single.ast-separate-container .site-main .ast-author-meta, .ast-separate-container .related-posts-title-wrapper, .ast-separate-container.ast-two-container #secondary .widget,.ast-separate-container .comments-count-wrapper, .ast-box-layout.ast-plain-container .site-content,.ast-padded-layout.ast-plain-container .site-content, .ast-separate-container .comments-area .comments-title, .ast-narrow-container .site-content{background-color:var(--ast-global-color-5);;}}.ast-plain-container, .ast-page-builder-template{background-color:var(--ast-global-color-5);;}@media (max-width:921px){.ast-plain-container, .ast-page-builder-template{background-color:var(--ast-global-color-5);;}}@media (max-width:544px){.ast-plain-container, .ast-page-builder-template{background-color:var(--ast-global-color-5);;}}
                #ast-scroll-top {
                    display: none;
                    position: fixed;
                    text-align: center;
                    cursor: pointer;
                    z-index: 99;
                    width: 2.1em;
                    height: 2.1em;
                    line-height: 2.1;
                    color: #ffffff;
                    border-radius: 2px;
                    content: "";
                    outline: inherit;
                }
                @media (min-width: 769px) {
                    #ast-scroll-top {
                        content: "769";
                    }
                }
                #ast-scroll-top .ast-icon.icon-arrow svg {
                    margin-left: 0px;
                    vertical-align: middle;
                    transform: translate(0, -20%) rotate(180deg);
                    width: 1.6em;
                }
                .ast-scroll-to-top-right {
                    right: 30px;
                    bottom: 30px;
                }
                .ast-scroll-to-top-left {
                    left: 30px;
                    bottom: 30px;
                }
            #ast-scroll-top{background-color:var(--ast-global-color-0);font-size:15px;font-size:0.9375rem;}@media (max-width:921px){#ast-scroll-top .ast-icon.icon-arrow svg{width:1em;}}.ast-mobile-header-content > *,.ast-desktop-header-content > * {padding: 10px 0;height: auto;}.ast-mobile-header-content > *:first-child,.ast-desktop-header-content > *:first-child {padding-top: 10px;}.ast-mobile-header-content > .ast-builder-menu,.ast-desktop-header-content > .ast-builder-menu {padding-top: 0;}.ast-mobile-header-content > *:last-child,.ast-desktop-header-content > *:last-child {padding-bottom: 0;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {width: 100%;}.ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded > .ast-menu-toggle::before {transform: rotateX(180deg);}#ast-desktop-header .ast-desktop-header-content,.ast-mobile-header-content .ast-search-icon,.ast-desktop-header-content .ast-search-icon,.ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,.ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {display: none;}.ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,.ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {display: block;}.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down > .menu-item .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item > .sub-menu,.ast-desktop .ast-desktop-header-content .astra-menu-animation-fade > .menu-item .menu-item > .sub-menu {opacity: 1;visibility: visible;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {width: unset;margin: unset;}.ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle,.ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children > .ast-menu-toggle {left: calc( 20px - 0.907em);right: auto;}.ast-mobile-header-content .ast-search-menu-icon,.ast-mobile-header-content .ast-search-menu-icon.slide-search,.ast-desktop-header-content .ast-search-menu-icon,.ast-desktop-header-content .ast-search-menu-icon.slide-search {width: 100%;position: relative;display: block;right: auto;transform: none;}.ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,.ast-mobile-header-content .ast-search-menu-icon .search-form,.ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,.ast-desktop-header-content .ast-search-menu-icon .search-form {right: 0;visibility: visible;opacity: 1;position: relative;top: auto;transform: none;padding: 0;display: block;overflow: hidden;}.ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-mobile-header-content .ast-search-menu-icon .search-field,.ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,.ast-desktop-header-content .ast-search-menu-icon .search-field {width: 100%;padding-right: 5.5em;}.ast-mobile-header-content .ast-search-menu-icon .search-submit,.ast-desktop-header-content .ast-search-menu-icon .search-submit {display: block;position: absolute;height: 100%;top: 0;right: 0;padding: 0 1em;border-radius: 0;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {padding-left: 30px;}.ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {padding-left: 40px;}.ast-mobile-popup-drawer.active .ast-mobile-popup-inner{background-color:#ffffff;;}.ast-mobile-header-wrap .ast-mobile-header-content, .ast-desktop-header-content{background-color:#ffffff;;}.ast-mobile-popup-content > *, .ast-mobile-header-content > *, .ast-desktop-popup-content > *, .ast-desktop-header-content > *{padding-top:0;padding-bottom:0;}.content-align-flex-start .ast-builder-layout-element{justify-content:flex-start;}.content-align-flex-start .main-header-menu{text-align:left;}.ast-mobile-popup-drawer.active .menu-toggle-close{color:#3a3a3a;}.ast-mobile-header-wrap .ast-primary-header-bar,.ast-primary-header-bar .site-primary-header-wrap{min-height:80px;}.ast-desktop .ast-primary-header-bar .main-header-menu > .menu-item{line-height:80px;}@media (max-width:921px){#masthead .ast-mobile-header-wrap .ast-primary-header-bar,#masthead .ast-mobile-header-wrap .ast-below-header-bar{padding-left:20px;padding-right:20px;}}.ast-header-break-point .ast-primary-header-bar{border-bottom-width:1px;border-bottom-color:#eaeaea;border-bottom-style:solid;}@media (min-width:922px){.ast-primary-header-bar{border-bottom-width:1px;border-bottom-color:#eaeaea;border-bottom-style:solid;}}.ast-primary-header-bar{background-color:#ffffff;;}.ast-primary-header-bar{display:block;}@media (max-width:921px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}@media (max-width:544px){.ast-header-break-point .ast-primary-header-bar{display:grid;}}[data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal{color:var(--ast-global-color-0);border:none;background:transparent;}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg{width:20px;height:20px;fill:var(--ast-global-color-0);}[data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu{color:var(--ast-global-color-0);}.ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item > .menu-link{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item > .ast-menu-toggle{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .menu-item:hover > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item > .ast-menu-toggle, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .menu-link, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}.ast-hfb-header .ast-builder-menu-mobile .main-header-menu, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link, .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link{border-style:none;}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}@media (max-width:921px){.ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item > .menu-link{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .menu-item > .ast-menu-toggle{color:var(--ast-global-color-3);}.ast-builder-menu-mobile .main-navigation .menu-item:hover > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);background:var(--ast-global-color-4);}.ast-builder-menu-mobile .main-navigation .menu-item:hover > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .menu-link, .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item > .ast-menu-toggle, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .menu-link, .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor > .ast-menu-toggle{color:var(--ast-global-color-1);background:var(--ast-global-color-4);}.ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item > .ast-menu-toggle{color:var(--ast-global-color-1);}.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}.ast-builder-menu-mobile .main-navigation .menu-item-has-children > .menu-link:after{content:unset;}.ast-builder-menu-mobile .main-navigation .main-header-menu, .ast-builder-menu-mobile .main-navigation .main-header-menu .sub-menu{background-color:var(--ast-global-color-5);;}}@media (max-width:544px){.ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children > .ast-menu-toggle{top:0;}}.ast-builder-menu-mobile .main-navigation{display:block;}@media (max-width:921px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}@media (max-width:544px){.ast-header-break-point .ast-builder-menu-mobile .main-navigation{display:block;}}:root{--e-global-color-astglobalcolor0:#046bd2;--e-global-color-astglobalcolor1:#045cb4;--e-global-color-astglobalcolor2:#1e293b;--e-global-color-astglobalcolor3:#334155;--e-global-color-astglobalcolor4:#f9fafb;--e-global-color-astglobalcolor5:#FFFFFF;--e-global-color-astglobalcolor6:#e2e8f0;--e-global-color-astglobalcolor7:#cbd5e1;--e-global-color-astglobalcolor8:#94a3b8;}
        </style>
        <link rel='stylesheet' id='wp-block-library-css' href="{{ asset('assets/wp-includes/css/dist/block-library/style.min9b30.css') }}" />
        <link rel='stylesheet' id='wc-blocks-vendors-style-css' href="{{ asset('assets/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-stylead26.css') }}" />
        <link rel='stylesheet' id='wc-blocks-style-css' href="{{ asset('assets/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-stylead26.css') }}" />
        <link rel='stylesheet' id='jet-engine-frontend-css' href="{{ asset('assets/wp-content/plugins/jet-engine/assets/css/frontend0fd2.css') }}" />
        <style id='global-styles-inline-css'>
        body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--ast-global-color-0: var(--ast-global-color-0);--wp--preset--color--ast-global-color-1: var(--ast-global-color-1);--wp--preset--color--ast-global-color-2: var(--ast-global-color-2);--wp--preset--color--ast-global-color-3: var(--ast-global-color-3);--wp--preset--color--ast-global-color-4: var(--ast-global-color-4);--wp--preset--color--ast-global-color-5: var(--ast-global-color-5);--wp--preset--color--ast-global-color-6: var(--ast-global-color-6);--wp--preset--color--ast-global-color-7: var(--ast-global-color-7);--wp--preset--color--ast-global-color-8: var(--ast-global-color-8);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}body { margin: 0;--wp--style--global--content-size: var(--wp--custom--ast-content-width-size);--wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size); }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child:first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child:last-child { margin-block-end: 0; }body { --wp--style--block-gap: 24px; }:where(body .is-layout-flow)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-flow)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-flow)  > *{margin-block-start: 24px;margin-block-end: 0;}:where(body .is-layout-constrained)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-constrained)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-constrained)  > *{margin-block-start: 24px;margin-block-end: 0;}:where(body .is-layout-flex) {gap: 24px;}:where(body .is-layout-grid) {gap: 24px;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){text-decoration: none;}.wp-element-button, .wp-block-button__link{background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;line-height: inherit;padding: calc(0.667em + 2px) calc(1.333em + 2px);text-decoration: none;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-color{color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-color{color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-color{color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-color{color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-color{color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-color{color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-color{color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-color{color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-color{color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-background-color{background-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-background-color{background-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-background-color{background-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-background-color{background-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-background-color{background-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-background-color{background-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-background-color{background-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-background-color{background-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-background-color{background-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-ast-global-color-0-border-color{border-color: var(--wp--preset--color--ast-global-color-0) !important;}.has-ast-global-color-1-border-color{border-color: var(--wp--preset--color--ast-global-color-1) !important;}.has-ast-global-color-2-border-color{border-color: var(--wp--preset--color--ast-global-color-2) !important;}.has-ast-global-color-3-border-color{border-color: var(--wp--preset--color--ast-global-color-3) !important;}.has-ast-global-color-4-border-color{border-color: var(--wp--preset--color--ast-global-color-4) !important;}.has-ast-global-color-5-border-color{border-color: var(--wp--preset--color--ast-global-color-5) !important;}.has-ast-global-color-6-border-color{border-color: var(--wp--preset--color--ast-global-color-6) !important;}.has-ast-global-color-7-border-color{border-color: var(--wp--preset--color--ast-global-color-7) !important;}.has-ast-global-color-8-border-color{border-color: var(--wp--preset--color--ast-global-color-8) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
        .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
        .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
        </style>
        <link rel='stylesheet' id='woocommerce-layout-css' href="{{ asset('assets/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-layout-grid.min3d81.css') }}" />
        <link rel='stylesheet' id='woocommerce-smallscreen-css' href="{{ asset('assets/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-smallscreen-grid.min3d81.css') }}" />
        <link rel='stylesheet' id='woocommerce-general-css' href="{{ asset('assets/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-grid.min3d81.css') }}" />
        <style id='woocommerce-general-inline-css'>

                            .woocommerce .woocommerce-result-count, .woocommerce-page .woocommerce-result-count {
                                float: left;
                            }

                            .woocommerce .woocommerce-ordering {
                                float: right;
                                margin-bottom: 2.5em;
                            }
                        #customer_details h3:not(.elementor-widget-woocommerce-checkout-page h3){font-size:1.2rem;padding:20px 0 14px;margin:0 0 20px;border-bottom:1px solid var(--ast-border-color);font-weight:700;}form #order_review_heading:not(.elementor-widget-woocommerce-checkout-page #order_review_heading){border-width:2px 2px 0 2px;border-style:solid;font-size:1.2rem;margin:0;padding:1.5em 1.5em 1em;border-color:var(--ast-border-color);font-weight:700;}form #order_review:not(.elementor-widget-woocommerce-checkout-page #order_review){padding:0 2em;border-width:0 2px 2px;border-style:solid;border-color:var(--ast-border-color);}ul#shipping_method li:not(.elementor-widget-woocommerce-cart #shipping_method li){margin:0;padding:0.25em 0 0.25em 22px;text-indent:-22px;list-style:none outside;}.woocommerce span.onsale, .wc-block-grid__product .wc-block-grid__product-onsale{background-color:var(--ast-global-color-0);color:#ffffff;}.woocommerce-message, .woocommerce-info{border-top-color:var(--ast-global-color-0);}.woocommerce-message::before,.woocommerce-info::before{color:var(--ast-global-color-0);}.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .widget_layered_nav_filters ul li.chosen a, .woocommerce-page ul.products li.product .ast-woo-product-category, .wc-layered-nav-rating a{color:var(--ast-global-color-3);}.woocommerce nav.woocommerce-pagination ul,.woocommerce nav.woocommerce-pagination ul li{border-color:var(--ast-global-color-0);}.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background:var(--ast-global-color-0);color:#ffffff;}.woocommerce-MyAccount-navigation-link.is-active a{color:var(--ast-global-color-1);}.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color:var(--ast-global-color-0);}.woocommerce .star-rating, .woocommerce .comment-form-rating .stars a, .woocommerce .star-rating::before{color:var(--ast-global-color-3);}.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before,  .woocommerce div.ast-product-tabs-layout-vertical .woocommerce-tabs ul.tabs li:hover::before{background:var(--ast-global-color-0);}.entry-content .woocommerce-message, .entry-content .woocommerce-error, .entry-content .woocommerce-info{padding-top:1em;padding-bottom:1em;padding-left:3.5em;padding-right:2em;}.woocommerce[class*="rel-up-columns-"] .site-main div.product .related.products ul.products li.product, .woocommerce-page .site-main ul.products li.product{width:100%;}.woocommerce ul.product-categories > li ul li{position:relative;}.woocommerce ul.product-categories > li ul li:before{content:"";border-width:1px 1px 0 0;border-style:solid;display:inline-block;width:6px;height:6px;position:absolute;top:50%;margin-top:-2px;-webkit-transform:rotate(45deg);transform:rotate(45deg);}.woocommerce ul.product-categories > li ul li a{margin-left:15px;}.ast-icon-shopping-cart svg{height:.82em;}.ast-icon-shopping-bag svg{height:1em;width:1em;}.ast-icon-shopping-basket svg{height:1.15em;width:1.2em;}.ast-site-header-cart.ast-menu-cart-outline .ast-addon-cart-wrap, .ast-site-header-cart.ast-menu-cart-fill .ast-addon-cart-wrap {line-height:1;}.ast-site-header-cart.ast-menu-cart-fill i.astra-icon{ font-size:1.1em;}li.woocommerce-custom-menu-item .ast-site-header-cart i.astra-icon:after{ padding-left:2px;}.ast-hfb-header .ast-addon-cart-wrap{ padding:0.4em;}.ast-header-break-point.ast-header-custom-item-outside .ast-woo-header-cart-info-wrap{ display:none;}.ast-site-header-cart i.astra-icon:after{ background:var(--ast-global-color-0);}.ast-separate-container .ast-woocommerce-container{padding:3em;}@media (min-width:545px) and (max-width:921px){.woocommerce.tablet-columns-3 ul.products li.product, .woocommerce-page.tablet-columns-3 ul.products:not(.elementor-grid){grid-template-columns:repeat(3, minmax(0, 1fr));}}@media (min-width:922px){.woocommerce form.checkout_coupon{width:50%;}}@media (max-width:921px){.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack.ast-no-menu-items .ast-site-header-cart{padding-right:0;padding-left:0;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .main-header-bar{text-align:center;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-site-header-cart, .ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-1.ast-mobile-header-stack .ast-mobile-menu-buttons{display:inline-block;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-2.ast-mobile-header-inline .site-branding{flex:auto;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .site-branding{flex:0 0 100%;}.ast-header-break-point.ast-woocommerce-cart-menu .header-main-layout-3.ast-mobile-header-stack .main-header-container{display:flex;justify-content:center;}.woocommerce-cart .woocommerce-shipping-calculator .button{width:100%;}.woocommerce div.product div.images, .woocommerce div.product div.summary, .woocommerce #content div.product div.images, .woocommerce #content div.product div.summary, .woocommerce-page div.product div.images, .woocommerce-page div.product div.summary, .woocommerce-page #content div.product div.images, .woocommerce-page #content div.product div.summary{float:none;width:100%;}.woocommerce-cart table.cart td.actions .ast-return-to-shop{display:block;text-align:center;margin-top:1em;}.ast-container .woocommerce ul.products:not(.elementor-grid), .woocommerce-page ul.products:not(.elementor-grid), .woocommerce.tablet-columns-3 ul.products:not(.elementor-grid){grid-template-columns:repeat(3, minmax(0, 1fr));}}@media (max-width:544px){.ast-separate-container .ast-woocommerce-container{padding:.54em 1em 1.33333em;}.woocommerce-message, .woocommerce-error, .woocommerce-info{display:flex;flex-wrap:wrap;}.woocommerce-message a.button, .woocommerce-error a.button, .woocommerce-info a.button{order:1;margin-top:.5em;}.woocommerce .woocommerce-ordering, .woocommerce-page .woocommerce-ordering{float:none;margin-bottom:2em;}.woocommerce table.cart td.actions .button, .woocommerce #content table.cart td.actions .button, .woocommerce-page table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button{padding-left:1em;padding-right:1em;}.woocommerce #content table.cart .button, .woocommerce-page #content table.cart .button{width:100%;}.woocommerce #content table.cart td.actions .coupon, .woocommerce-page #content table.cart td.actions .coupon{float:none;}.woocommerce #content table.cart td.actions .coupon .button, .woocommerce-page #content table.cart td.actions .coupon .button{flex:1;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a{display:block;}.ast-container .woocommerce ul.products:not(.elementor-grid), .woocommerce-page ul.products:not(.elementor-grid), .woocommerce.mobile-columns-2 ul.products:not(.elementor-grid), .woocommerce-page.mobile-columns-2 ul.products:not(.elementor-grid){grid-template-columns:repeat(2, minmax(0, 1fr));}.woocommerce.mobile-rel-up-columns-2 ul.products::not(.elementor-grid){grid-template-columns:repeat(2, minmax(0, 1fr));}}@media (max-width:544px){.woocommerce ul.products a.button.loading::after, .woocommerce-page ul.products a.button.loading::after{display:inline-block;margin-left:5px;position:initial;}.woocommerce.mobile-columns-1 .site-main ul.products li.product:nth-child(n), .woocommerce-page.mobile-columns-1 .site-main ul.products li.product:nth-child(n){margin-right:0;}.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li{display:block;margin-right:0;}}@media (min-width:922px){.woocommerce #content .ast-woocommerce-container div.product div.images, .woocommerce .ast-woocommerce-container div.product div.images, .woocommerce-page #content .ast-woocommerce-container div.product div.images, .woocommerce-page .ast-woocommerce-container div.product div.images{width:50%;}.woocommerce #content .ast-woocommerce-container div.product div.summary, .woocommerce .ast-woocommerce-container div.product div.summary, .woocommerce-page #content .ast-woocommerce-container div.product div.summary, .woocommerce-page .ast-woocommerce-container div.product div.summary{width:46%;}.woocommerce.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce.woocommerce-checkout form #customer_details.col2-set .col-2, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-1, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set .col-2{float:none;width:auto;}}.widget_product_search button{flex:0 0 auto;padding:10px 20px;;}@media (min-width:922px){.woocommerce.woocommerce-checkout form #customer_details.col2-set, .woocommerce-page.woocommerce-checkout form #customer_details.col2-set{width:55%;float:left;margin-right:4.347826087%;}.woocommerce.woocommerce-checkout form #order_review, .woocommerce.woocommerce-checkout form #order_review_heading, .woocommerce-page.woocommerce-checkout form #order_review, .woocommerce-page.woocommerce-checkout form #order_review_heading{width:40%;float:right;margin-right:0;clear:right;}}select, .select2-container .select2-selection--single{background-image:url("data:image/svg+xml,%3Csvg class='ast-arrow-svg' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' width='26px' height='16.043px' fill='%23334155' viewBox='57 35.171 26 16.043' enable-background='new 57 35.171 26 16.043' xml:space='preserve' %3E%3Cpath d='M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z'%3E%3C/path%3E%3C/svg%3E");background-size:.8em;background-repeat:no-repeat;background-position-x:calc( 100% - 10px );background-position-y:center;-webkit-appearance:none;-moz-appearance:none;padding-right:2em;}
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
                                    box-shadow: 0 4px 4px rgba(0,0,0,0.15);
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

                                .woocommerce ul.products li.product.desktop-align-left, .woocommerce-page ul.products li.product.desktop-align-left {
                                    text-align: left;
                                }
                                .woocommerce ul.products li.product.desktop-align-left .star-rating,
                                .woocommerce ul.products li.product.desktop-align-left .button,
                                .woocommerce-page ul.products li.product.desktop-align-left .star-rating,
                                .woocommerce-page ul.products li.product.desktop-align-left .button {
                                    margin-left: 0;
                                    margin-right: 0;
                                }
                            @media(max-width: 921px){
                                .woocommerce ul.products li.product.tablet-align-left, .woocommerce-page ul.products li.product.tablet-align-left {
                                    text-align: left;
                                }
                                .woocommerce ul.products li.product.tablet-align-left .star-rating,
                                .woocommerce ul.products li.product.tablet-align-left .button,
                                .woocommerce-page ul.products li.product.tablet-align-left .star-rating,
                                .woocommerce-page ul.products li.product.tablet-align-left .button {
                                    margin-left: 0;
                                    margin-right: 0;
                                }
                            }@media(max-width: 544px){
                                .woocommerce ul.products li.product.mobile-align-left, .woocommerce-page ul.products li.product.mobile-align-left {
                                    text-align: left;
                                }
                                .woocommerce ul.products li.product.mobile-align-left .star-rating,
                                .woocommerce ul.products li.product.mobile-align-left .button,
                                .woocommerce-page ul.products li.product.mobile-align-left .star-rating,
                                .woocommerce-page ul.products li.product.mobile-align-left .button {
                                    margin-left: 0;
                                    margin-right: 0;
                                }
                            }.ast-woo-active-filter-widget .wc-block-active-filters{display:flex;align-items:self-start;justify-content:space-between;}.ast-woo-active-filter-widget .wc-block-active-filters__clear-all{flex:none;margin-top:2px;}.woocommerce.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #customer_details.col2-set, .woocommerce-page.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #customer_details.col2-set{width:100%;}.woocommerce.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review, .woocommerce.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review_heading, .woocommerce-page.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review, .woocommerce-page.woocommerce-checkout .elementor-widget-woocommerce-checkout-page #order_review_heading{width:100%;float:inherit;}.elementor-widget-woocommerce-checkout-page .select2-container .select2-selection--single, .elementor-widget-woocommerce-cart .select2-container .select2-selection--single{padding:0;}.elementor-widget-woocommerce-checkout-page .woocommerce form .woocommerce-additional-fields, .elementor-widget-woocommerce-checkout-page .woocommerce form .shipping_address, .elementor-widget-woocommerce-my-account .woocommerce-MyAccount-navigation-link, .elementor-widget-woocommerce-cart .woocommerce a.remove{border:none;}.elementor-widget-woocommerce-cart .cart-collaterals .cart_totals > h2{background-color:inherit;border-bottom:0px;margin:0px;}.elementor-widget-woocommerce-cart .cart-collaterals .cart_totals{padding:0;border-color:inherit;border-radius:0;margin-bottom:0px;border-width:0px;}.elementor-widget-woocommerce-cart .woocommerce-cart-form .e-apply-coupon{line-height:initial;}.elementor-widget-woocommerce-my-account .woocommerce-MyAccount-content .woocommerce-Address-title h3{margin-bottom:var(--myaccount-section-title-spacing, 0px);}.elementor-widget-woocommerce-my-account .woocommerce-Addresses .woocommerce-Address-title, .elementor-widget-woocommerce-my-account table.shop_table thead, .elementor-widget-woocommerce-my-account .woocommerce-page table.shop_table thead, .elementor-widget-woocommerce-cart table.shop_table thead{background:inherit;}.elementor-widget-woocommerce-cart .e-apply-coupon, .elementor-widget-woocommerce-cart #coupon_code, .elementor-widget-woocommerce-checkout-page .e-apply-coupon, .elementor-widget-woocommerce-checkout-page #coupon_code{height:100%;}.elementor-widget-woocommerce-cart td.product-name dl.variation dt{font-weight:inherit;}.elementor-element.elementor-widget-woocommerce-checkout-page .e-checkout__container #customer_details .col-1{margin-bottom:0;}
        </style>
        <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required { visibility: visible; }
        </style>
        <link rel='stylesheet' id='woocommerce-mercadopago-global-css-css' href="{{ asset('assets/wp-content/plugins/woocommerce-mercadopago/assets/css/global.mindf53.css') }}" />
        <link rel='stylesheet' id='jet-ab-front-style-css' href="{{ asset('assets/wp-content/plugins/jet-appointments-booking/assets/css/public/jet-appointments-booking7406.css') }}" />
        <link rel='stylesheet' id='jet-popup-frontend-css' href="{{ asset('assets/wp-content/plugins/jet-popup/assets/css/jet-popup-frontend7406.css') }}" />
        <link rel='stylesheet' id='jet-reviews-frontend-css' href="{{ asset('assets/wp-content/plugins/jet-reviews/assets/css/jet-reviews254d.css') }}" />
        <link rel='stylesheet' id='elementor-icons-css' href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minfc13.css') }}" />
        <link rel='stylesheet' id='elementor-frontend-css' href="{{ asset('assets/wp-content/plugins/elementor/assets/css/frontend-lite.mina1c3.css') }}" />
        <link rel='stylesheet' id='swiper-css' href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css') }}" />
        <link rel='stylesheet' id='elementor-post-5-css' href="{{ asset('assets/wp-content/uploads/elementor/css/post-56771.css') }}" />
        <link rel='stylesheet' id='elementor-pro-css' href="{{ asset('assets/wp-content/plugins/elementor-pro/assets/css/frontend-lite.mina1c3.css') }}" />
        <link rel='stylesheet' id='elementor-global-css' href="{{ asset('assets/wp-content/uploads/elementor/css/global6771.css') }}" />
        <link rel='stylesheet' id='elementor-post-1509-css' href="{{ asset('assets/wp-content/uploads/elementor/css/post-1509cbc8.css') }}" />
        <link rel='stylesheet' id='elementor-post-391-css' href="{{ asset('assets/wp-content/uploads/elementor/css/post-3916f8c.css') }}" />
        <link rel='stylesheet' id='elementor-post-409-css' href="{{ asset('assets/wp-content/uploads/elementor/css/post-409d506.css') }}" />
        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Quicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.3.1' media='all' />
        <link rel='stylesheet' id='elementor-icons-shared-0-css' href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css') }}" />
        <link rel='stylesheet' id='elementor-icons-fa-solid-css' href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css') }}" />
        <link rel='stylesheet' id='elementor-icons-fa-brands-css' href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css') }}" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><!--[if IE]>
        <script src='https://pruebas.designuxperu.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js') }}"></script>
        <script id="astra-flexibility-js-after">
        flexibility(document.documentElement);
        </script>
        <![endif]-->
        <script src="{{ asset('assets/wp-includes/js/jquery/jquery.min3088.js') }}"></script>
        <script src="{{ asset('assets/wp-includes/js/jquery/jquery-migrate.min5589.js') }}"></script>
        <link rel="https://api.w.org/" href="../wp-json/index.html" /><link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/1509.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
        <meta name="generator" content="WordPress 6.3.1" />
        <meta name="generator" content="WooCommerce 7.9.0" />
        <link rel="canonical" href="index.html" />
        <link rel='shortlink' href='../index9e5e.html?p=1509' />
        <link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed29fb.json?url=https%3A%2F%2Fpruebas.designuxperu.com%2Fse-parte%2F" />
        <link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed5ccf?url=https%3A%2F%2Fpruebas.designuxperu.com%2Fse-parte%2F&amp;format=xml" />
        <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
        <meta name="generator" content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
        <style id="wp-custom-css">
            body:not(.page-template-fullwidth-content) .site-content {
            margin-top: 0px;
            margin-bottom: 0px;
        }



        .jet-form-col.jet-form-col-6.field-type-submit.jet-form-field-container {
            align-self: end;
        }

        .formulario button.jet-form__submit.submit-type-ajax {
            background: linear-gradient(90deg, #00DAFF 0%, #936BF7 100%);
        }

        .recto p.elementor-heading-title.elementor-size-default, .botonrecto {
            font-style: normal;
        }

        div.elementor-tab-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row-reverse;
        }

        .dudas i.fas.fa-chevron-up , .dudas i.fas.fa-chevron-down{
            font-size: 22px;
        }

        .dudas div.elementor-tab-title {
            border-bottom: 1px solid #26335d21;
        }

        .jet-listing-grid__slider-icon.next-arrow.slick-arrow, .jet-listing-grid__slider-icon.prev-arrow.slick-arrow {
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 8px;
        }


        .salud i.fas.fa-chevron-down, .salud i.fas.fa-chevron-up {
            font-size: 20px;
        }





        /* .swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets.swiper-pagination-horizontal {
            max-width: 1300px;
            display: flex;
            margin-left: 300px;
        } */


        section#boxsha {
            box-shadow: 0px 1px 3px 0px rgba(19, 10, 46, 0.13), 0px 3px 14px 0px rgba(19, 10, 46, 0.03), 0px 8px 32px 0px rgba(19, 10, 46, 0.07), 0px 30px 84px 0px rgba(19, 10, 46, 0.08);
        }



        @media (max-width: 767px){
            .elementor-19 .elementor-element.elementor-element-91b3d09.elementor-arrows-yes .elementor-main-swiper {
            width: 100% ;
        }
        }





        .elementor-1541 .elementor-element.elementor-element-3e4531f .jet-form .jet-apb-calendar-date--selected .jet-apb-calendar-date-body , .elementor-1605 .elementor-element.elementor-element-fab1d32 .jet-form .jet-apb-calendar-date--selected .jet-apb-calendar-date-body{
            color: white!important;
            background-color: #8B72F8;
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }



        #btncal button.jet-form__submit.submit-type-reload , button.jet-form__submit.submit-type-reload{
            background: linear-gradient(90deg, #00DAFF 0%, #936BF7 100%);
        }

        /**********/

        .appointment-calendar.jet-apb-calendar.jet-apb-calendar-layout--default {
            box-shadow: 0px 1px 3px 0px rgba(19, 10, 46, 0.13), 0px 3px 14px 0px rgba(19, 10, 46, 0.03), 0px 8px 32px 0px rgba(19, 10, 46, 0.07), 0px 30px 84px 0px rgba(19, 10, 46, 0.08);
            border-radius: 12px;
            margin-top: 20px;
        }



        button#place_order {
            background: linear-gradient(90deg, #00DAFF 0%, #936BF7 100%);
            font-family: "Quicksand", Sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            padding: 12px 14px 12px 14px;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.2);
        }


        .woocommerce-page h1, .woocommerce-page h2, .woocommerce-page h3 {
            font-size: 1.3rem;
        }


        .slider h2 {
            font-style: normal;
        }
        .woocommerce {
            font-family: 'Quicksand';
        }


        h3#order_review_heading {
            color: white;
            pointer-events: none;
        }
    </style>
@endsection

@section('content')
    <div class="hfeed site" id="page">
        <div id="content" class="site-content">
            <div class="ast-container">
                <div data-elementor-type="wp-page" data-elementor-id="1509" class="elementor elementor-1509"
                    data-elementor-post-type="page">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-248dfdf elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
                        data-id="248dfdf" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-53b26b0"
                                data-id="53b26b0" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7b56781 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default"
                                        data-id="7b56781" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bce4af2"
                                                data-id="bce4af2" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-194a6db elementor-widget elementor-widget-heading"
                                                        data-id="194a6db" data-element_type="widget"
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
                                                            <h2 class="elementor-heading-title elementor-size-default">Se
                                                                parte de
                                                                Kullay</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-533b7de elementor-widget elementor-widget-heading"
                                                        data-id="533b7de" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">Únete
                                                                a nuestra plataforma <br>de terapia en línea y <br>ayudemos
                                                                a miles de<br> personas a recuperar la<br> estabilidad
                                                                emocional que<br> necesitan para su vida <br>diaria.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d265713"
                                                data-id="d265713" data-element_type="column">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-199244b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="199244b" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8f5e1a0"
                                data-id="8f5e1a0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="section">
                                        <div class="xl:w-3/4 mx-auto">
                                            <div class="flex justify-between pt-20 pb-20 gap-10 lg:flex-row xxsm:flex-col xxsm:mx-5 xl:mx-0 2xl:mx-0">
                                                <div class="bg-slate-100 2xl:w-2/4 xxsm:w-full">
                                                    <h1 class="font-fira-sans leading-10 font-medium text-3xl px-5 p-5 ml-5">{{__('Find the best doctor and medicine for you.')}}</h1>
                                                    <div class="">
                                                        <img src="{{asset('assets/image/doctor-nurses.png')}}" class="mt-20" alt="">
                                                    </div>
                                                </div>

                                                <div class="2xl:w-2/4 xxsm:w-full">
                                                    <h1 class="font-fira-sans leading-10 font-normal text-3xl">{{__('Welcome,')}}</h1>
                                                    <h1 class="font-fira-sans leading-10 font-medium text-3xl">{{__('Create New Account!')}}</h1>
                                                    <div class="pt-5 flex">
                                                        @if (old('from'))
                                                        @if (old('from') == 'doctor')
                                                        @php
                                                        $active = 'doctor';
                                                        @endphp
                                                        @else
                                                        @php
                                                        $active = 'patient';
                                                        @endphp
                                                        @endif
                                                        @else
                                                        @php
                                                        $active = 'patient';
                                                        @endphp
                                                        @endif
                                                        <div data-attr="doctor" class="signupDiv w-1/3 cursor-pointer py-1 ml-2 border border-[#D8D8D8] {{ $active == 'doctor' ? 'active' : '' }}">
                                                            <input {{ $active == 'doctor' ? 'checked' : '' }} id="bordered-radio-1" type="radio" value="doctor" name="signup_title" class="border-[#D8D8D8] cursor-pointer signup_title ml-2 text-blue-600">
                                                            <label for="bordered-radio-1" class="text-sm font-medium text-[#666666]">{{ __('Doctor') }}</label>
                                                        </div>
                                                        <div data-attr="patient" class="signupDiv w-1/3 cursor-pointer py-1 ml-2 border border-[#D8D8D8] {{ $active == 'patient' ? 'active' : '' }}">
                                                            <input {{ $active == 'patient' ? 'checked' : '' }} id="bordered-radio-2" type="radio" value="patient" name="signup_title" class="border-[#D8D8D8] cursor-pointer signup_title ml-2 text-blue-600">
                                                            <label for="bordered-radio-2" class="text-sm font-medium text-[#666666]">{{ __('Patient') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content contentDisplay" id="tabs-tabContent">
                                                        <div class="{{ $active == 'doctor' ?  'active' : 'hide' }} doctorDiv">
                                                            <form action="{{ url('doctorRegister') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="from" value="doctor">
                                                                <div class="pt-3">
                                                                    <label class="font-fira-sans text-black text-sm font-normal">{{__('Doctor Name')}}</label>
                                                                    <input type="text" name="doc_name" value="{{ old('doc_name') }}" class="@error('doc_name') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter doctor name">
                                                                    @error('doc_name')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Email')}}</label>
                                                                    <input type="email" name="doc_email" value="{{ old('doc_email') }}" class="@error('doc_email') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter email">
                                                                    @error('doc_email')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="phone" class="font-fira-sans text-black text-sm font-normal">{{__('Phone Number')}}</label>
                                                                    <input type="number" name="doc_phone" value="{{ old('doc_phone') }}" class="@error('doc_phone') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light doc_phone" placeholder="Enter Phone Number">
                                                                    <input type="hidden" name="phone_code" value="+91">
                                                                    @error('doc_phone')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="password" class="font-fira-sans text-black text-sm font-normal">{{__('Create Password')}}</label>
                                                                    <input type="password" name="doc_password" class="@error('doc_password') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter password">
                                                                    @error('doc_password')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="doc_dob" class="font-fira-sans text-black text-sm font-normal">{{__('Birth Date')}}</label>
                                                                    <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                                                                        <input type="date" name="doc_dob" value="{{ old('doc_dob') }}" class="@error('doc_dob') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" data-te-datepicker-toggle-ref data-te-datepicker-toggle-button-ref />
                                                                    </div>
                                                                    @error('doc_dob')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <div class="flex items-center mb-5">
                                                                        <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Gendar')}}</label>
                                                                        <div class="ml-10 flex gap-10">
                                                                            <div class="form-check form-check-inline">
                                                                                <input checked class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="doc_gender" id="doc_gender_male" value="male">
                                                                                <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_male">{{ __('Male') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="doc_gender" id="doc_gender_female" value="female">
                                                                                <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_female">{{ __('Female') }}</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pt-3">
                                                                    <button type="submit" class="font-fira-sans text-white bg-primary w-full text-sm font-normal py-3">{{__('Submit')}}</button>
                                                                    <h1 class="font-fira-sans font-medium text-sm leading-5 pt-4 text-center">{{__('Already have an
                                                                    account? ')}}
                                                                        <a href="{{url('patient-login')}}" class="text-primary text-normal">{{__('Login')}}</a>
                                                                    </h1>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="{{ $active == 'patient' ?  'active' : 'hide' }} patientDiv">
                                                            <form action="{{ url('signUp') }}" method="post">
                                                                <input type="hidden" name="from" value="patient">
                                                                @csrf
                                                                <div class="pt-3">
                                                                    <label class="font-fira-sans text-black text-sm font-normal">{{__('Patient Name')}}</label>
                                                                    <input type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter patient name">
                                                                    @error('name')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Email')}}</label>
                                                                    <input type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror  w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter email">
                                                                    @error('email')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="phone" class="font-fira-sans text-black text-sm font-normal">{{__('Phone Number')}}</label>
                                                                    <input type="number" name="phone" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light phone" placeholder="Enter Phone Number">
                                                                    <input type="hidden" name="phone_code" value="+91">
                                                                    @error('phone')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="password" class="font-fira-sans text-black text-sm font-normal">{{__('Create Password')}}</label>
                                                                    <input type="password" name="password" class="@error('password') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter password">
                                                                    @error('password')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="dob" class="font-fira-sans text-black text-sm font-normal">{{__('Birth Date')}}</label>
                                                                    <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                                                                        <input type="date" name="dob" value="{{ old('dob') }}" class="@error('dob') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20" data-te-datepicker-toggle-ref data-te-datepicker-toggle-button-ref />
                                                                    </div>
                                                                    @error('dob')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="pt-3">
                                                                    <div class="flex items-center mb-5">
                                                                        <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Gender')}}</label>
                                                                        <div class="ml-10 flex gap-10">
                                                                            <div class="form-check form-check-inline">
                                                                                <input checked class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="gender_male" value="male">
                                                                                <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_male">{{ __('Male') }}</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="gender_female" value="female">
                                                                                <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_female">{{ __('Female') }}</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pt-3">
                                                                    <button type="submit" class="font-fira-sans text-white bg-primary w-full text-sm font-normal py-3">{{__('Submit')}}</button>
                                                                    <h1 class="font-fira-sans font-medium text-sm leading-5 pt-4 text-center">{{__('Already have an
                                                                    account? ')}}
                                                                        <a href="{{url('patient-login')}}" class="text-primary text-normal">{{__('Login')}}</a>
                                                                    </h1>
                                                                </div>
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
                    </section>
                </div>
            </div> <!-- ast-container -->
        </div><!-- #content -->
    </div><!-- #page -->

    <div id="ast-scroll-top" tabindex="0" class="ast-scroll-top-icon ast-scroll-to-top-right"
        data-on-devices="both">
        <span class="ast-icon icon-arrow"><svg class="ast-arrow-svg" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                width="26px" height="16.043px" viewBox="57 35.171 26 16.043"
                enable-background="new 57 35.171 26 16.043" xml:space="preserve">
                <path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z" />
            </svg></span> <span class="screen-reader-text">Scroll al inicio</span>
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
    <script id='astra-theme-js-js-extra'>
        var astra = {
            "break_point": "921",
            "isRtl": "",
            "is_scroll_to_id": "1",
            "is_scroll_to_top": "1",
            "is_header_footer_builder_active": "1"
        };
    </script>
    <script src="{{ asset('assets/wp-content/themes/astra/assets/js/minified/frontend.min3d81.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.mina588.js')}} "
        id='jquery-blockui-js'></script>
    <script id='wc-add-to-cart-js-extra'>
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "Ver carrito",
            "cart_url": "https:\/\/pruebas.designuxperu.com\/carrito\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min5125.js')}} "
        id='wc-add-to-cart-js'></script>
    <script src="{{ asset('assets/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min03f8.js')}} "
        id='js-cookie-js'></script>
    <script id='woocommerce-js-extra'>
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min5125.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-engine/assets/lib/jet-plugins/jet-pluginsf488.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-popup/assets/js/lib/anime-js/anime.min4c56.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-popup/assets/js/lib/waypoints/jquery.waypoints.min4c56.js')}} "
        id='jet-waypoints-js-js'></script>
    <script id='jet-popup-frontend-js-extra'>
        var jetPopupData = {
            "version": "2.0.1",
            "ajax_url": "https:\/\/pruebas.designuxperu.com\/wp-admin\/admin-ajax.php",
            "isElementor": "true"
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-popup/assets/js/jet-popup-frontend7406.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js')}} "
        id='smartmenus-js'></script>
    <script id='jet-engine-frontend-js-extra'>
        var JetEngineSettings = {
            "ajaxurl": "https:\/\/pruebas.designuxperu.com\/wp-admin\/admin-ajax.php",
            "ajaxlisting": "https:\/\/pruebas.designuxperu.com\/se-parte\/?nocache=1695083707",
            "restNonce": "c076d219ab",
            "hoverActionTimeout": "400"
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-engine/assets/js/frontend0fd2.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-engine/assets/lib/jquery-sortable/sortable0fd2.js')}} "
        id='jet-engine-sortable-js'></script>
    <script id='jet-engine-file-upload-js-extra'>
        var JetEngineFileUploadConfig = {
            "ajaxurl": "https:\/\/pruebas.designuxperu.com\/wp-admin\/admin-ajax.php",
            "action": "jet-engine-forms-upload-file",
            "nonce": "613be8ef82",
            "max_upload_size": "6442450944",
            "errors": {
                "upload_limit": "Maximum upload files limit is reached.",
                "file_type": "File type is not allowed.",
                "file_size": "Upload max size exceeded.",
                "internal": "Internal error! Please contact website administrator."
            }
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-engine/assets/js/file-upload0fd2.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-engine/assets/js/frontend-forms0fd2.js')}} "
        id='jet-engine-frontend-forms-js'></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.mina1c3.js')}} "
        id='elementor-pro-webpack-runtime-js'></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/webpack.runtime.mina1c3.js')}} "
        id='elementor-webpack-runtime-js'></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend-modules.mina1c3.js')}} "
        id='elementor-frontend-modules-js'></script>
    <script src="{{ asset('assets/wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js')}} "></script>
    <script src="{{ asset('assets/wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js')}} "></script>
    <script src="{{ asset('assets/wp-includes/js/dist/hooks.min2ebd.js')}} "></script>
    <script src="{{ asset('assets/wp-includes/js/dist/i18n.minf92f.js')}} "></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
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
    <script src="{{ asset('assets/wp-content/plugins/elementor-pro/assets/js/frontend.mina1c3.js')}} "
        id='elementor-pro-frontend-js'></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js')}} "
        id='elementor-waypoints-js'></script>
    <script src="{{ asset('assets/wp-includes/js/jquery/ui/core.min3f14.js')}} "></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Compartir en Facebook",
                "shareOnTwitter": "Compartir en Twitter",
                "pinIt": "Pinear",
                "download": "Descargar",
                "downloadImage": "Descargar imagen",
                "fullscreen": "Pantalla completa",
                "zoom": "Zoom",
                "share": "Compartir",
                "playVideo": "Reproducir v\u00eddeo",
                "previous": "Anterior",
                "next": "Siguiente",
                "close": "Cerrar",
                "a11yCarouselWrapperAriaLabel": "Carrusel | Scroll horizontal: Flecha izquierda y derecha",
                "a11yCarouselPrevSlideMessage": "Diapositiva anterior",
                "a11yCarouselNextSlideMessage": "Diapositiva siguiente",
                "a11yCarouselFirstSlideMessage": "Esta es la primera diapositiva",
                "a11yCarouselLastSlideMessage": "Esta es la \u00faltima diapositiva",
                "a11yCarouselPaginationBulletMessage": "Ir a la diapositiva"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "M\u00f3vil vertical",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "M\u00f3vil horizontal",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tableta vertical",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tableta horizontal",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Port\u00e1til",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Pantalla grande",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.14.1",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "additional_custom_breakpoints": true,
                "e_swiper_latest": true,
                "theme_builder_v2": true,
                "landing-pages": true,
                "page-transitions": true,
                "notes": true,
                "loop": true,
                "form-submissions": true,
                "e_scroll_snap": true
            },
            "urls": {
                "assets": "https:\/\/pruebas.designuxperu.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "woocommerce_notices_elements": []
            },
            "post": {
                "id": 1509,
                "title": "Se%20parte%20%E2%80%93%20kullay",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend.mina1c3.js')}} ">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/elementor-pro/assets/js/elements-handlers.mina1c3.js')}} "
        id='pro-elements-handlers-js'></script>
    <script src="{{ asset('assets/wp-content/plugins/jet-popup/includes/elementor/assets/js/jet-popup-elementor-frontend7406.js')}} "
        id='jet-popup-elementor-frontend-js'></script>
    <script src="{{ asset('assets/wp-includes/js/dist/url.min3338.js')}} "></script>
    <script id='wp-api-fetch-js-translations'>
        (function(domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "translation-revision-date": "2023-08-05 07:05:00+0000",
            "generator": "GlotPress\/4.0.0-alpha.7",
            "domain": "messages",
            "locale_data": {
                "messages": {
                    "": {
                        "domain": "messages",
                        "plural-forms": "nplurals=2; plural=n != 1;",
                        "lang": "es"
                    },
                    "You are probably offline.": ["Probablemente est\u00e1s desconectado."],
                    "Media upload failed. If this is a photo or a large image, please scale it down and try again.": [
                        "La subida de medios ha fallado. Si esto es una foto o una imagen grande, por favor, reduce su tama\u00f1o e int\u00e9ntalo de nuevo."
                    ],
                    "The response is not a valid JSON response.": [
                        "Las respuesta no es una respuesta JSON v\u00e1lida."],
                    "An unknown error occurred.": ["Ha ocurrido un error desconocido."]
                }
            },
            "comment": {
                "reference": "wp-includes\/js\/dist\/api-fetch.js"
            }
        });
    </script>
    <script src="{{ asset('assets/wp-includes/js/dist/api-fetch.min471f.js')}} "></script>
    <script id="wp-api-fetch-js-after">
        wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("../wp-json/index.html"));
        wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("c076d219ab");
        wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
        wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
        wp.apiFetch.nonceEndpoint = "../wp-admin/admin-ajaxf809.php?action=rest-nonce";
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-reviews/assets/js/lib/vue.mina117.js')}} "></script>
    <script id='jet-reviews-frontend-js-extra'>
        var jetReviewPublicConfig = {
            "version": "2.3.1",
            "ajax_url": "https:\/\/pruebas.designuxperu.com\/wp-admin\/admin-ajax.php",
            "current_url": "https:\/\/pruebas.designuxperu.com\/se-parte",
            "getPublicReviewsRoute": "\/jet-reviews-api\/v1\/get-public-reviews-list",
            "submitReviewCommentRoute": "\/jet-reviews-api\/v1\/submit-review-comment",
            "submitReviewRoute": "\/jet-reviews-api\/v1\/submit-review",
            "likeReviewRoute": "\/jet-reviews-api\/v1\/update-review-approval",
            "reviewTypeData": {
                "id": "1",
                "name": "Default",
                "slug": "default",
                "description": "",
                "source": "default",
                "fields": [{
                    "label": "Rating",
                    "step": 1,
                    "max": 5
                }],
                "meta_data": ""
            },
            "labels": {
                "alreadyReviewed": "*Already reviewed",
                "notApprove": "*Your review must be approved by the moderator",
                "notValidField": "*This field is required or not valid",
                "captchaValidationFailed": "*Captcha validation failed"
            },
            "recaptchaConfig": {
                "enable": false,
                "site_key": "",
                "secret_key": ""
            }
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/jet-reviews/assets/js/jet-reviews-frontend254d.js')}} "
        id='jet-reviews-frontend-js'></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.mina1c3.js')}} "
        id='e-sticky-js'></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window
            .addEventListener("hashchange", function() {
                var t, e = location.hash.substring(1);
                /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i
                    .test(t.tagName) || (t.tabIndex = -1), t.focus())
            }, !1);
    </script>
@endsection
