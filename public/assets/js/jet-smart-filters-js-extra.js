{/* <script id='jet-smart-filters-js-extra'> */}
var JetSmartFilterSettings = {
    "ajaxurl": "https:\/\/pruebas.designuxperu.com\/wp-admin\/admin-ajax.php",
    "siteurl": "https:\/\/pruebas.designuxperu.com",
    "sitepath": "",
    "baseurl": "\/especialistas\/",
    "selectors": {
        "epro-archive-products": {
            "selector": ".elementor-widget-wc-archive-products .elementor-widget-container",
            "action": "replace",
            "inDepth": false,
            "idPrefix": "#",
            "list": ".products",
            "item": ".product"
        },
        "epro-archive": {
            "selector": ".elementor-widget-archive-posts .elementor-widget-container",
            "action": "replace",
            "inDepth": false,
            "idPrefix": "#",
            "list": ".elementor-posts",
            "item": ".elementor-post"
        },
        "epro-loop-builder": {
            "selector": ".elementor-loop-container",
            "action": "replace",
            "inDepth": true,
            "idPrefix": "#",
            "item": ".e-loop-item"
        },
        "epro-portfolio": {
            "selector": ".elementor-portfolio",
            "action": "insert",
            "inDepth": true,
            "idPrefix": "#",
            "item": ".elementor-portfolio-item"
        },
        "epro-posts": {
            "selector": ".elementor-widget-posts .elementor-widget-container",
            "action": "replace",
            "inDepth": false,
            "idPrefix": "#",
            "list": ".elementor-posts",
            "item": ".elementor-post"
        },
        "epro-products": {
            "selector": ".elementor-widget-woocommerce-products .elementor-widget-container",
            "action": "replace",
            "inDepth": false,
            "idPrefix": "#",
            "list": ".products",
            "item": ".product"
        },
        "jet-engine-calendar": {
            "selector": ".jet-listing-calendar",
            "action": "replace",
            "inDepth": true,
            "idPrefix": "#"
        },
        "jet-engine": {
            "selector": ".jet-listing-grid.jet-listing",
            "action": "replace",
            "inDepth": true,
            "idPrefix": "#",
            "list": ".jet-listing-grid__items",
            "item": ".jet-listing-grid__item"
        },
        "jet-woo-products-grid": {
            "selector": ".elementor-jet-woo-products.jet-woo-builder",
            "action": "insert",
            "inDepth": true,
            "idPrefix": "#",
            "list": ".jet-woo-products",
            "item": ".jet-woo-builder-product"
        },
        "jet-woo-products-list": {
            "selector": ".elementor-jet-woo-products-list.jet-woo-builder",
            "action": "insert",
            "inDepth": true,
            "idPrefix": "#",
            "list": ".jet-woo-products-list",
            "item": ".jet-woo-builder-product"
        },
        "woocommerce-archive": {
            "selector": ".jet-woo-products-wrapper",
            "action": "insert",
            "inDepth": false,
            "idPrefix": "#",
            "list": ".products",
            "item": ".product"
        },
        "woocommerce-shortcode": {
            "selector": "body .woocommerce[class*=\"columns\"]",
            "action": "replace",
            "inDepth": false,
            "idPrefix": ".",
            "list": ".products",
            "item": ".product"
        }
    },
    "queries": {
        "jet-engine": {
            "prof": {
                "post_status": ["publish"],
                "post_type": "profesionales",
                "posts_per_page": "6",
                "paged": "1",
                "ignore_sticky_posts": "1"
            }
        }
    },
    "settings": {
        "jet-engine": {
            "prof": {
                "lisitng_id": "1119",
                "columns": "1",
                "columns_tablet": "",
                "columns_mobile": "",
                "column_min_width": 240,
                "column_min_width_tablet": "",
                "column_min_width_mobile": "",
                "inline_columns_css": false,
                "post_status": ["publish"],
                "use_random_posts_num": "",
                "posts_num": 6,
                "max_posts_num": 9,
                "not_found_message": "No data was found",
                "is_masonry": "",
                "equal_columns_height": "",
                "use_load_more": "",
                "load_more_id": "",
                "load_more_type": "click",
                "load_more_offset": {
                    "unit": "px",
                    "size": 0,
                    "sizes": []
                },
                "loader_text": "",
                "loader_spinner": "",
                "use_custom_post_types": "",
                "custom_post_types": "",
                "hide_widget_if": "",
                "carousel_enabled": "",
                "slides_to_scroll": "1",
                "arrows": "true",
                "arrow_icon": "fa fa-angle-left",
                "dots": "",
                "autoplay": "true",
                "autoplay_speed": 5000,
                "infinite": "true",
                "center_mode": "",
                "effect": "slide",
                "speed": 500,
                "inject_alternative_items": "",
                "injection_items": [],
                "scroll_slider_enabled": "",
                "scroll_slider_on": ["desktop", "tablet", "mobile"],
                "custom_query": "",
                "custom_query_id": "",
                "_element_id": "prof",
                "jet_apb_list_by_user": "all",
                "jet_apb_list_user_id": "",
                "jet_apb_list_status": "",
                "jet_apb_list_date": "",
                "jet_apb_list_custom_date": ""
            }
        }
    },
    "misc": {
        "week_start": "1",
        "url_type": "permalink"
    },
    "props": {
        "jet-engine": {
            "prof": {
                "found_posts": 6,
                "max_num_pages": 1,
                "page": 1
            }
        }
    },
    "extra_props": [],
    "templates": {
        "active_filter": "\/% if ($label) { %\/\n\t<div class=\"jet-active-filter__label\">\/% $label %\/<span class=\"jet-active-filter__label-separator\">:<\/span><\/div>\n\/% } %\/\n\/% if ($value) { %\/\n\t<div class=\"jet-active-filter__val\">\/% $value %\/<\/div>\n\/% } %\/\n<div class=\"jet-active-filter__remove\">&times;<\/div>",
        "active_tag": "\/% if ($label) { %\/\n\t<div class=\"jet-active-tag__label\">\/% $label %\/<span class=\"jet-active-tag__label-separator\">:<\/span><\/div>\n\/% } %\/\n\/% if ($value) { %\/\n\t<div class=\"jet-active-tag__val\">\/% $value %\/<\/div>\n\/% } %\/\n<div class=\"jet-active-tag__remove\">&times;<\/div>",
        "pagination_item": "<div class=\"jet-filters-pagination__link\">\/% $value %\/<\/div>",
        "pagination_item_dots": "<div class=\"jet-filters-pagination__dots\">&hellip;<\/div>",
        "pagination_load_more": "<div class=\"jet-filters-pagination__link\">\/% $value %\/<\/div>"
    },
    "plugin_settings": {
        "use_tabindex": "false",
        "use_url_aliases": "false",
        "url_aliases": [{
            "needle": "\/jsf\/jet-engine\/",
            "replacement": "\/filter\/"
        }]
    },
    "datePickerData": {
        "closeText": "Done",
        "prevText": "Prev",
        "nextText": "Next",
        "currentText": "Today",
        "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
            "October", "November", "December"
        ],
        "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        "dayNamesMin": ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
        "weekHeader": "Wk"
    }
};
