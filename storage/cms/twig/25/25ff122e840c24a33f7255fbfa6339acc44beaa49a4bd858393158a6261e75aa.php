<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/layouts/front.htm */
class __TwigTemplate_a68a584c8e0f620d4102d98dd328c4022529e3777fd3ff9e515882d6ab8ac8ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "\" ";
        if ((($context["currentLang"] ?? null) == "ar")) {
            echo "direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\"";
        } else {
            echo "dir=\"ltr\"";
        }
        echo " class=\"no-js\">
    <head>
        <base href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin");
        echo "\"><!--end::Base Path -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 6
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6)]);
        echo " | ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6)]);
        echo "</title>
    \t<!-- meta -->
    \t<meta http-equiv=\"content-type\" content=\"text/html; charset=";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 8), "charset", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    \t<!-- Uncomment the meta tags you are going to use! Be relevant and don't spam! -->
    \t<meta name=\"keywords\" content=\"";
        // line 11
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "keywords", [], "any", false, false, false, 11)]);
        echo "\" />
    \t<meta name=\"description\" content=\"";
        // line 12
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12)]);
        echo "\">

        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <!-- iDevices & Retina Favicons -->
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 16), "thumb", [0 => 72, 1 => 72], "method", false, false, false, 16), "html", null, true);
            echo "\" sizes=\"72x72\" />
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 17), "thumb", [0 => 114, 1 => 114], "method", false, false, false, 17), "html", null, true);
            echo "\" sizes=\"114x114\" />
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 18), "thumb", [0 => 144, 1 => 144], "method", false, false, false, 18), "html", null, true);
            echo "\" sizes=\"144x144\" />
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19), "html", null, true);
            echo "\" />

        \t<!--  Desktop Favicons  -->
        \t<link rel=\"icon\" type=\"image/png\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 22), "path", [], "any", false, false, false, 22), "html", null, true);
            echo "\" sizes=\"32x32\">
        ";
        }
        // line 24
        echo "
    \t<!-- Google Fonts CSS Stylesheet // More here http://www.google.com/fonts#UsePlace:use/Collection:Open+Sans -->
    \t<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic\" rel=\"stylesheet\" type=\"text/css\">
    \t<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    \t<!-- ***** Boostrap Custom / Addons Stylesheets ***** -->
    \t<link rel=\"stylesheet\" href=\"./front/css/bootstrap.css\" type=\"text/css\" media=\"all\">

    \t<!-- Font Awesome icons library -->
    \t<link rel=\"stylesheet\" href=\"./front/fonts/font-awesome/css/font-awesome.min.css\" type=\"text/css\" media=\"all\">

    \t<!-- Required CSS file for IOS Slider element  -->
    \t<link rel=\"stylesheet\" href=\"./front/css/sliders/ios/style.css\" type=\"text/css\" media=\"all\">

    \t<!-- ***** Main + Responsive & Base sizing CSS Stylesheet ***** -->
    \t<link rel=\"stylesheet\" href=\"./front/css/template.css\" type=\"text/css\" media=\"all\">
    \t<link rel=\"stylesheet\" href=\"./front/css/responsive.css\" type=\"text/css\" media=\"all\">
    \t<link rel=\"stylesheet\" href=\"./front/css/base-sizing.css\" type=\"text/css\" media=\"all\">

    \t<!-- Required custom CSS file for this niche -->
    \t<link rel=\"stylesheet\" href=\"./front/css/niches/custom-cargo.css\" type=\"text/css\" />

    \t<!-- Custom CSS Stylesheet (where you should add your own css rules) -->
    \t<link rel=\"stylesheet\" href=\"./front/css/custom.css\" type=\"text/css\" />
    \t<link rel=\"stylesheet\" href=\"./front/css/styled_custom.css\" type=\"text/css\" />

    \t<!-- Modernizr Library -->
    \t<script type=\"text/javascript\" src=\"./front/js/modernizr.min.js\"></script>

    \t<!-- jQuery Library -->
    \t<script type=\"text/javascript\" src=\"./front/js/jquery.js\"></script>

        ";
        // line 56
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 57
            echo "            <link href='http://fonts.googleapis.com/css?family=Changa:300,400,500,600,700' rel='stylesheet' type='text/css'>
        ";
        } else {
            // line 59
            echo "
        ";
        }
        // line 61
        echo "        <!--end::Global Theme Styles -->
        <!--begin::Layout Skins(used by all pages) -->
        <style id=\"template-colors\"> a:hover,.cart-container > .widget_shopping_cart_content .checkout,.sc-infopop__btn,.m_title,.smallm_title,.circle_title,.zn_text_box-title--style1,.feature_box .title,.services_box--classic .services_box__title,.latest_posts.default-style .hoverBorder:hover h6,.latest_posts.style2 ul.posts .title,.recentwork_carousel--1 .recentwork_carousel__crsl-title,.acc--default-style .acc-tgg-button,.acc--style3 .acc-tgg-button:after,.screenshot-box .left-side h3.title,.vertical_tabs.kl-style-1 .tabbable .nav>li.active>a,.services_box_element .box .list li,.shop-latest .tabbable .nav li.active a,.product-list-item:hover .details h3,.product-category .product-list-item:hover h3,.eBlog .itemContainer:not(.featured-post) .post_details .catItemAuthor a,.theHoverBorder:hover,.text-custom,.text-custom-hover:hover,.statbox h4 , #bbpress-forums .bbp-topics li.bbp-body .bbp-topic-title > a,.ib2-text-color-light-theme .ib2-info-message:before,.tbk--color-theme.tbk-symbol--icon .tbk__icon,.pricing-table-element .plan-column .plan-title,.process_steps--style2 .process_steps__step-icon,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover,.vertical_tabs.kl-style-2 .tabbable .nav>li.active>a [data-zn_icon]:before,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover [data-zn_icon]:before,.services_box--boxed .services_box__fonticon,.services_box--boxed .services_box__list li,.woocommerce ul.product_list_widget li .star-rating,.woocommerce .woocommerce-product-rating .star-rating,body .static-content__infopop .sc-infopop__btn, .hg_accordion_element.style3 .th-accordion .acc-group > a, .grid-ibx__item:hover .grid-ibx__icon, .kl-iconbox__title, .full-portfolio .hg-portfolio-sortable #portfolio-nav li a:hover, .full-portfolio .hg-portfolio-sortable #portfolio-nav li.current a, ul.thumbs.style2 .appreciate::before, .product-list-item:hover .kw-details-title, .kl-store-page ul.products li.product .product-list-item:hover .kw-details-title, .kl-store.widget ul.product_list_widget li .star-rating, .testimonial_slider.quoter-style .testimonialbox .who strong, .hg_accordion_element.default-style .th-accordion .acc-group > button, .team-member .mmb-position, .kl-iconbox.stage:hover .kl-iconbox__icon, .priceListElement-itemPrice, .hg_accordion_element.style2 .th-accordion .acc-group > button, .fun-fact .fun-number, .site-header .kl-header-toptext a, .testimonial_slider__carousel-wrapper .testimonialbox .who strong, .image-boxes__carousel-wrapper .inner-slide:hover a {color: #f0aa1d; } .tcolor, .vertical_tabs .tabbable .nav>li.active>a, .vertical_tabs .tabbable .nav>li>a:hover, .vertical_tabs .tabbable .nav>li.active>a>span, .vertical_tabs .tabbable .nav>li>a:hover>span, .services_boxes_wgt li:hover .kl-icon, .works_carousel.stl-simple .inner-slide:hover a, .works_carousel.stl-simple .inner-slide a:hover, .orange, .blue, .works_carousel .cfs--navigation a:hover::before, .vertical_tabs .tabbable .nav>li>a.active, .vertical_tabs .tabbable .nav>li>a.active>span, .hg_accordion_element.style4 .th-accordion .acc-group a {color: #f0aa1d !important; } .tbg, .photo-wall .pw-item::after, .bg-default, .site-header .kl-cart-button .fas:after, .logo-container .logo-infocard .right-side, .hg_accordion_element.style5 .th-accordion a::before, .image-boxes__carousel-wrapper .inner-slide .imgprev, .hg_accordion_element.style4 > h3, .hg_accordion_element.style3 .th-accordion .acc-group a:before, .keywordbox.keywordbox-4 {background-color: #f0aa1d !important;} .acc--style4,#page-loading:after,.ib2-text-color-light-theme .ib2-info-message:before,.itemThumbnail .overlay__inner a:hover,.acc--style4 .acc-tgg-button .acc-icon, .btn-lined.lined-custom, .hg_accordion_element.style4 .th-accordion {border-color: #f0aa1d; } .btn-lined.lined-custom:hover {border-color: rgba(241,196,15,0.7);} .acc--style3 .acc-tgg-button:hover,.acc--style3 .acc-tgg-button:hover:after,.acc--default-style .acc-tgg-button,.acc--style2 .acc-tgg-button,.acc--style3 .acc-tgg-button,.acc--style4 .acc-tgg-button, .btn-lined.lined-custom {color: #f0aa1d ; } .tabs_style5 > ul.nav > li.active > a, .wgt-title > span, .tabs_style5 > ul.nav > li > a.active {border-bottom: 2px solid #f0aa1d; } header.style1,header.style2 .site-logo a,header.style3 .site-logo a {border-top: 3px solid #f0aa1d; } .tabs_style1 > ul.nav > li.active > a, .tabs_style1 > ul.nav > li > a.active {box-shadow: inset 0 3px 0 #f0aa1d; } .main-nav > ul > li > a:before,.main-nav .zn_mega_container li a:not(.zn_mega_title):before,.social-icons.sc--normal li a:hover,.action_box,body .circlehover,body .kl-flex--classic .zn_general_carousel-arr:hover,body .kl-ioscaption--style1 .more:before,body .kl-ioscaption--style1 .more:after,body .kl-ioscaption--style2 .more,body .nivo-directionNav a:hover,body .th-wowslider a.ws_next:hover,body .th-wowslider a.ws_prev:hover,body .ca-more,body .title_circle,body .title_circle:before,body ul.links li a,.hg-portfolio-sortable #portfolio-nav li a:hover, .hg-portfolio-sortable #portfolio-nav li.current a,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after,.btn-flat ,.zn_limited_offers li:after,.login-panel .login_facebook ,.imgboxes_style1 .hoverBorder h6,.circlehover:before,.kl-cta-ribbon,.newsletter-signup input[type=submit],.recentwork_carousel--1 .recentwork_carousel__bg,.zn-acc--style4 .acc-title,.zn-acc--style3 .acc-tgg-button:before,.process_box .content:before,#bbpress-forums div.bbp-search-form input[type=submit], #bbpress-forums .bbp-submit-wrapper button, #bbpress-forums #bbp-your-profile fieldset.submit button,.bg-custom,.bg-custom-hover:hover,.site-header.style8 .kl-main-header .kl-cta-lined,.site-header.style9 .kl-cta-lined,.latest_posts.default-style.kl-style-2 .lp-title,.latest_posts.default-style.kl-style-2 .post:not(.lp-title) .m_title:after,.latest_posts.default-style .hoverBorder h6,.itemThumbnail .overlay__inner a:hover,.elm-searchbox--normal .elm-searchbox__submit,.elm-searchbox--transparent .elm-searchbox__submit,.itemThumbnail .overlay__inner a:hover,.zn-acc--style4 .acc-tgg-button .acc-icon:before,span.zn_badge_sale,span.zn_badge_sale:after,.zn_limited_offers li:before,.style3 .action_box_inner,.style3 .action_box_inner:before,.action_box.style3:before,.circlehover.style2,.circlehover.style2:before,body .kl-flex--classic .zn_simple_carousel-arr:hover, .main-nav .hg_mega_container li a:not(.zn_mega_title):before {background-color: #f0aa1d; } .breadcrumbs li:after,.ib2-text-color-light-theme .ib2-inner, .breadcrumbs li:after, .breadcrumbs2 li:after, .photogallery-widget .pg-thumb:nth-child(even) .pg-caption::before, .portfolio-item-details.travel li::before {border-left-color: #f0aa1d; } .kl-cta-ribbon .trisvg path,.kl-bottommask .bmask-customfill,.kl-slideshow .kl-loader svg path,.kl-slideshow.kl-loadersvg rect,.kl-diagram circle, .kl-cta-ribbon .trisvg {fill: #f0aa1d; } .how_to_shop .number, .newsletter-signup input[type=submit], .th-map_controls, .hg-portfolio-sortable #portfolio-nav li.current a, .ptcarousel .controls > a:hover, .itemLinks span a:hover, .product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a, .shop-features .shop-feature:hover, .btn-flat, .redbtn, .imgboxes_style1 .hoverBorder h6, .feature_box.style3 .box:hover, .services_box--classic:hover .services_box__icon, services_box_element:hover .box .icon, .latest_posts.default-style .hoverBorder h6, .process_steps--style1 .process_steps__intro, .process_steps--style2 .process_steps__intro, .recentwork_carousel.style2 li a .details .plus, .gobox.ok:before, .gobox.ok:after, .gobox.ok, .recentwork_carousel--1 .recentwork_carousel__bg, .circlehover:before,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after ,.kl-ioscaption--style2 .more {background-color: #f0aa1d; } .hover-box:hover {background-color: #f0aa1d !important;} .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a, .vertical_tabs.kl-style-1 .tabbable .nav >li > a.active {box-shadow: inset -3px 0 0 0 #f0aa1d !important;} .action_box:before, .action_box:after, .site-header.style1, .site-header.style6, .site-header.style4 .site-logo a, .site-header.style5 {border-top-color: #f0aa1d; } .process_steps--style1 .process_steps__intro:after,body .nivo-caption,body .kl-flex--classic .flex-caption,body .th-wowslider .ws-title,.process_box[data-align=left] .content:after,body .ls--laptop .ls__item-caption {border-left-color: #f0aa1d; } .process_box[data-align=right] .content:after, .photogallery-widget .pg-thumb:nth-child(odd) .pg-caption::before {border-right-color: #f0aa1d; } .theHoverBorder:hover {box-shadow: 0 0 0 5px #f0aa1d inset; } .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a {box-shadow: inset -3px 0 0 0 #f0aa1d inset; } .offline-page .containerbox {border-bottom: 5px solid #f0aa1d; } .offline-page .containerbox:after {border-top: 20px solid #f0aa1d; } .site-header.style2 .site-logo a, .site-header.style5, .site-header.style6 .site-logo a {border-top: 3px solid #f0aa1d; } body .kl-ioscaption--style2 .title_big, body .kl-ioscaption--style2 .title_small {border-left: 5px solid #f0aa1d; } body .kl-ioscaption--style2.fromright .title_big, body .kl-ioscaption--style2.fromright .title_small {border-right: 5px solid #f0aa1d ; } #buddypress form#whats-new-form p.activity-greeting:after {border-top-color: #f0aa1d; } #buddypress input[type=submit],#buddypress input[type=button],#buddypress input[type=reset] ,#buddypress .activity-list li.load-more a, .stg-bigblog .bb-title .bb-category, .product-list-item .kw-actions a, .kl-store-page ul.products li.product .product-list-item .kw-actions a, .btn-flat, .kl-store-page a.button, .kl-store-page button.button, .kl-store-page button.button.alt, .kl-store-page input.button, .kl-store-page input#button, .kl-store-page #review_form #submit, .fancy-list li:hover::before, .testimonial_slider.quoter-style .cfs--pagination a.selected, .photogallery-widget .pg-thumb .pg-caption, ul.dash-list li::before, .kl-iconbox--sh-circle span.kl-iconbox__icon, .process-list .processitems li:hover .ico-wrapper > span, .works_carousel.stl-simple .inner-slide .imgprev {background: #f0aa1d; } #buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a {border-top: 2px solid #f0aa1d; } #buddypress form#whats-new-form p.activity-greeting,.widget.buddypress ul.item-list li:hover {background-color: #f0aa1d; } .widget.buddypress div.item-options a.selected ,#buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a ,#buddypress div.activity-meta a ,#buddypress div.activity-meta a:hover,#buddypress .acomment-options a {color: #f0aa1d; } .keywordbox.keywordbox-2, .hg_post_image, .hg_full_image {border-bottom: 5px solid #f0aa1d;} {border-bottom: solid 5px #f0aa1d; } .keywordbox.keywordbox-3 {border-bottom: solid 10px #f0aa1d; } .process_box4 .number:before,.loginbox-popup input[type=submit],.login-panel .login_facebook {background: #f0aa1d; } .statistics-horizontal .v-line {border-bottom: dotted 1px #f0aa1d; } .statistics-vertical::before {border-left: dotted 1px #f0aa1d; } .circle-text-box.style3 .wpk-circle-span,.circle-text-box.style2 .wpk-circle-span::before {background: #f0aa1d; } .circle-text-box:not(.style3) .wpk-circle-span:after {background-color: #f0aa1d; } .circle-text-box .wpk-circle-title,.media-container .media-container__link--style-borderanim2 .media-container__text:hover {color: #f0aa1d; } .services_box--modern .services_box__icon {box-shadow: inset 0 0 0 2px #f0aa1d; } .services_box--modern:hover .services_box__icon {box-shadow: inset 0 0 0 40px #f0aa1d; } .services_box--modern .services_box__fonticon {color: #f0aa1d; } .services_box--modern .services_box__list li:before {box-shadow: 0 0 0 2px #f0aa1d; } .services_box--modern .services_box__list li:hover:before {box-shadow: 0 0 0 3px #f0aa1d; } .kl-has-overlay .img-intro:hover .overlay {box-shadow: inset 0 -8px 0 0 #f0aa1d; } .kl-cta-ribbon, .hg_accordion_element.style3 .th-accordion .acc-group > a:before, .tbk-symbol--line_border .tbk__symbol span, .stl-hoverstyle .cfs--navigation a:hover {background-color: #f0aa1d} .kl-cta-ribbon .trisvg path {fill: #f0aa1d} .logo-container .logo-infocard {background: #f0aa1d} body .kl-ioscaption--style4 .more:before {border-color: #f0aa1d; background: rgba(241,196,15,0.7)} body .kl-ioscaption--style4 .more:hover:before, .cart-container .buttons .button.wc-forward:hover, .logo-container .logo-infocard .left-side, .kl-ios-selectors-block.bullets2 .item.selected::before, .kl-ios-selectors-block.bullets2 .item:hover:before {background: rgba(241,196,15,0.9)} .timeline_box:hover:before {background-color: #f0aa1d} body .kl-ioscaption--style3.s3ext .main_title::before,body .kl-ios-selectors-block.bullets2 .item.selected::before,.iosslider__item .kl-ioscaption--style5 .klios-separator-line span,.btn-fullcolor,.btn-fullcolor:focus,.btn-fullcolor.btn-skewed:before,.cart-container .buttons .button.wc-forward,body .kl-flex--modern .flex-underbar,.tbk--color-theme.tbk-symbol--line .tbk__symbol span,.tbk--color-theme.tbk-symbol--line_border .tbk__symbol span,.ls__nav-item.selected,.site-header.style7 .kl-cart-button .glyphicon:after,.how_to_shop .number,.recentwork_carousel--2 .recentwork_carousel__title:after,.recentwork_carousel_v3 .btn::before,.recentwork_carousel--2 .recentwork_carousel__cat,.recentwork_carousel_v2 .recentwork_carousel__plus,.recentwork_carousel_v3 .recentwork_carousel__cat,.pricing-table-element .plan-column.featured .subscription-price .inner-cell,.shop-latest .tabbable .nav li.active a:before,.product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a,.latest_posts.style2 ul.posts .details span.date,.eBlog .related-articles .rta-post > a:after,.shop-features .shop-feature:hover,.cart-container .buttons .button.wc-forward,.media-container__link--style-borderanim1 > i,.site-header .kl-cart-button .glyphicon:after,.chaser .main-menu li.active > a,.imgboxes_style4 .imgboxes-title:after,.woocommerce a.button,.woocommerce button.button,.woocommerce button.button.alt,.woocommerce input.button,.woocommerce input#button,.woocommerce #review_form #submit {background-color: #f0aa1d; } .borderanim2-svg__shape {stroke: #f0aa1d !important; } .btn-fullcolor.btn-skewed:hover:before,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce button.button.alt:hover,.woocommerce input.button:hover,.woocommerce input#button:hover,.woocommerce #review_form #submit:hover {background-color: #a41a1b } .site-header.style8 .kl-main-header,.site-header.style9,.shop-latest .tabbable .nav li.active a:after,.zn_post_image,.zn_full_image,.sidebar .widget .widgettitle:after,.imgboxes_style4.kl-title_style_bottom .imgboxes-border-helper,.imgboxes_style4.kl-title_style_bottom:hover .imgboxes-border-helper,.statistic-box__line, .read-more-link:hover {border-bottom-color: #f0aa1d} .fake-loading:after {border: 2px solid rgba(241,196,15,0.15); border-top-color: #f0aa1d; border-right-color: #f0aa1d; } .latest_posts.style2 ul.posts .details span.date:after {border-top-color: #f0aa1d; } .eluidf3608cd8 .kl-bg-source__overlay {background: #f0aa1d ; } .kl-iconbox--sh-circle:hover span.kl-iconbox__icon:after, .kl-iconbox--sh-circle:hover span.kl-iconbox__icon, .btn-fullcolor:hover {background: rgba(241,196,15,0.7) } .btn-fullcolor.btn-skewed:hover:before, .section-video-icons .right-side {background-color: rgba(241,196,15,0.7) !important; } .skills_wgt .skill-bar > i {background: #f0aa1d !important;} .works_carousel .inner-slide:hover .imgprev::after {border-bottom: 8px solid #f0aa1d !important;} .site-header.style2 .kl-main-header, .site-header.style3, .site-header.style10 {border-bottom: 3px solid #f0aa1d;} </style>
        <!--end::Layout Skins -->
        ";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 66
        echo "    </head>

    <body class=\"preloader sticky-header ";
        // line 68
        if ((($context["currentLang"] ?? null) == "ar")) {
            echo "rtl";
        }
        echo "\">

    \t<!-- Support Panel -->
    \t<input type=\"checkbox\" id=\"support_p\" class=\"panel-checkbox\">
    \t<div class=\"support_panel\">
    \t\t<div class=\"support-close-inner\">
    \t\t\t<label for=\"support_p\" class=\"spanel-label inner\">
    \t\t\t\t<span class=\"support-panel-close\">×</span>
    \t\t\t</label>
    \t\t</div>
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-9\">
    \t\t\t\t\t<!-- Title -->
    \t\t\t\t\t<h4 class=\"m_title mb-20\">
    \t\t\t\t\t\t";
        // line 83
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["HOW TO ORDER"]);
        echo "
    \t\t\t\t\t</h4>

    \t\t\t\t\t<!-- Content - how to shop steps -->
    \t\t\t\t\t<div class=\"m_content how_to_shop\">
    \t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">1</span> ";
        // line 90
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login or create new account"]);
        echo ".
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->

    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">2</span> ";
        // line 95
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place your shipment request"]);
        echo ".
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->

    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">3</span> ";
        // line 100
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Other steps on us"]);
        echo ".
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<!--/ row -->

    \t\t\t\t\t\t<p>
    \t\t\t\t\t\t\t";
        // line 107
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you still have problems, please let us know, by sending an email to"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 107), "primary_email", [], "any", false, false, false, 107), "html", null, true);
        echo " . ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you!"]);
        echo "
    \t\t\t\t\t\t</p>
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ Content - how to shop steps -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ col-sm-12 col-md-12 col-lg-9 -->

    \t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-3\">
    \t\t\t\t\t<!-- Title -->
    \t\t\t\t\t<h4 class=\"m_title mb-20\">
    \t\t\t\t\t\t";
        // line 117
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Contact Us"]);
        echo "
    \t\t\t\t\t</h4>

    \t\t\t\t\t<!-- Content -->
    \t\t\t\t\t<div class=\"m_content\">
    \t\t\t\t\t\t";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 122), "company_phone", [], "any", false, false, false, 122), "html", null, true);
        echo "<br />
    \t\t\t\t\t\t";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 123), "address", [], "any", false, false, false, 123), "html", null, true);
        echo "
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ Content -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ col-sm-12 col-md-12 col-lg-3 -->
    \t\t\t</div>
    \t\t\t<!--/ row -->
    \t\t</div>
    \t\t<!--/ container -->
    \t</div>
    \t<!--/ Support Panel -->


    \t<!-- Page Wrapper -->
    \t<div id=\"page_wrapper\">
    \t\t<!-- Header style 1 -->
    \t\t<header id=\"header\" class=\"site-header cta_button bg-white\" data-header-style=\"1\">
    \t\t\t<!-- Header background -->
<!--    \t\t\t<div class=\"kl-header-bg\"></div>-->
    \t\t\t<!--/ Header background -->

    \t\t\t<!-- Header wrapper -->
    \t\t\t<div class=\"site-header-wrapper\">
    \t\t\t\t<!-- Header Top wrapper -->
<!--    \t\t\t\t<div class=\"site-header-top-wrapper\">-->
<!--    \t\t\t\t\t&lt;!&ndash; Header Top container &ndash;&gt;-->
<!--    \t\t\t\t\t<div class=\"siteheader-container container\">-->
<!--    \t\t\t\t\t\t&lt;!&ndash; Header Top &ndash;&gt;-->
<!--    \t\t\t\t\t\t<div class=\"site-header-row site-header-top d-flex flex-row\">-->
<!--    \t\t\t\t\t\t\t&lt;!&ndash; Header Top Left Side &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t<div class=\"site-header-top-left w-md-60 w-50 d-flex justify-content-start\">-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Header Top Social links &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<ul class=\"topnav social-icons sc&#45;&#45;clean align-self-center\">-->
<!--                                        ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 156), "facebook", [], "any", false, false, false, 156)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 158), "facebook", [], "any", false, false, false, 158), "html", null, true);
            echo "\" target=\"_self\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Facebook"]);
            echo "\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        ";
        }
        // line 162
        echo "-->
<!--                                        ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 163), "twitter", [], "any", false, false, false, 163)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 165), "twitter", [], "any", false, false, false, 165), "html", null, true);
            echo "\" target=\"_self\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Twitter"]);
            echo "\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        ";
        }
        // line 169
        echo "-->
<!--                                        ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 170), "instagram", [], "any", false, false, false, 170)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 172), "instagram", [], "any", false, false, false, 172), "html", null, true);
            echo "\" target=\"_self\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Instagram"]);
            echo "\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        ";
        }
        // line 176
        echo "-->
<!--    \t\t\t\t\t\t\t\t</ul>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Header Top Social links &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t\t<div class=\"clearfix visible-xxs\">-->
<!--    \t\t\t\t\t\t\t\t</div>-->

<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Top Header contact text &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<div class=\"kl-header-toptext align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["QUESTIONS? CALL"]);
        echo ": </span>-->
<!--    \t\t\t\t\t\t\t\t\t<i class=\"phone-header fas fa-phone ml-5 visible-xs visible-sm visible-md\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 187), "company_phone", [], "any", false, false, false, 187), "html", null, true);
        echo "\" class=\"fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 187), "company_phone", [], "any", false, false, false, 187), "html", null, true);
        echo "</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Top Header contact text &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t&lt;!&ndash;/ .site-header-top-left &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t&lt;!&ndash; Header Top Right Side &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t<div class=\"site-header-top-right w-md-40 w-50 d-flex justify-content-end\">-->
<!--                                    ";
        // line 195
        if (($context["locales"] ?? null)) {
            echo "-->
<!--        \t\t\t\t\t\t\t\t&lt;!&ndash; Languages &ndash;&gt;-->
<!--        \t\t\t\t\t\t\t\t<div class=\"topnav topnav&#45;&#45;lang align-self-center\">-->
<!--        \t\t\t\t\t\t\t\t\t<div class=\"languages drop\">-->
<!--        \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"topnav-item\">-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-globe xs-icon\"></span>-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
            // line 201
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LANGUAGES"]);
            echo "</span>-->
<!--        \t\t\t\t\t\t\t\t\t\t</a>-->
<!--        \t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">-->
<!--                                                        ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                echo "-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item ";
                // line 206
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    echo "active";
                }
                echo "\">-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"locale\" rel=\"";
                // line 207
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/";
                // line 208
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo ".svg\" alt=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"toplang-flag\"> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["name"]), "html", null, true);
                echo "-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t</a>-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t</li>-->
<!--                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "-->
<!--        \t\t\t\t\t\t\t\t\t\t\t</ul>-->
<!--        \t\t\t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t&lt;!&ndash;/ Languages &ndash;&gt;-->
<!--                                    ";
        }
        // line 217
        echo "-->

<!--    \t\t\t\t\t\t\t\t<div class=\"topnav support&#45;&#45;panel align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t&lt;!&ndash; Support panel trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t<label for=\"support_p\" class=\"topnav-item spanel-label\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info-circle support-info\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
        // line 223
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SUPPORT"]);
        echo "</span>-->
<!--    \t\t\t\t\t\t\t\t\t</label>-->
<!--    \t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Support panel trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t</div>-->

<!--                                    ";
        // line 228
        if (($context["user"] ?? null)) {
            echo "-->
<!--                                    <div class=\"topnav topnav&#45;&#45;lang align-self-center\">-->
<!--                                        <div class=\"languages drop\">-->
<!--                                            <a href=\"javascript:;\" class=\"topnav-item\">-->
<!--                                                <span class=\"fas far fa-user-circle xs-icon\"></span>-->
<!--                                                <span class=\"topnav-item&#45;&#45;text\">";
            // line 233
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ACCOUNT"]);
            echo "</span>-->
<!--                                            </a>-->
<!--                                            <div class=\"pPanel\">-->
<!--                                                <ul class=\"inner\">-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"";
            // line 238
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/dashboard");
            echo "\">-->
<!--                                                            <img src=\"./front/images/set-03-01.svg\" alt=\"";
            // line 239
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"";
            // line 243
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
            echo "\">-->
<!--                                                            <img src=\"./front/images/set-03-04.svg\" alt=\"";
            // line 244
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">-->
<!--                                                            <img src=\"./front/images/set-03-03.svg\" alt=\"";
            // line 249
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Logout"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Logout"]);
            echo "-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    ";
        } else {
            // line 256
            echo "-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Login trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<div class=\"topnav login&#45;&#45;panel align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t<a class=\"topnav-item popup-with-form\" href=\"#login_panel\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<i class=\"login-icon fas fa-sign-in-alt visible-xs xs-icon\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
            // line 261
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LOGIN"]);
            echo "</span>-->
<!--    \t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Login trigger &ndash;&gt;-->
<!--                                    ";
        }
        // line 265
        echo "-->
<!--    \t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t&lt;!&ndash;/ .site-header-top-right &ndash;&gt;-->
<!--    \t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t&lt;!&ndash;/ .site-header-row .site-header-top &ndash;&gt;-->

<!--    \t\t\t\t\t\t&lt;!&ndash; Header separator &ndash;&gt;-->
<!--    \t\t\t\t\t\t<div class=\"separator site-header-separator\"></div>-->
<!--    \t\t\t\t\t\t&lt;!&ndash;/ Header separator &ndash;&gt;-->
<!--    \t\t\t\t\t</div>-->
<!--    \t\t\t\t\t&lt;!&ndash;/ .siteheader-container .container &ndash;&gt;-->
<!--    \t\t\t\t</div>-->
    \t\t\t\t<!--/ Header Top wrapper -->

    \t\t\t\t<!-- Header Main wrapper -->
    \t\t\t\t<div class=\"site-header-main-wrapper d-flex py-2\">
    \t\t\t\t\t<!-- Header Main container -->
    \t\t\t\t\t<div class=\"siteheader-container container align-self-center\">
    \t\t\t\t\t\t<!-- Header Main -->
    \t\t\t\t\t\t<div class=\"site-header-row site-header-main d-flex flex-row justify-content-between\">
    \t\t\t\t\t\t\t<!-- Header Main Left Side -->
    \t\t\t\t\t\t\t<div class=\"site-header-main-left d-flex justify-content-start align-items-center\">
    \t\t\t\t\t\t\t\t<!-- Logo container-->
    \t\t\t\t\t\t\t\t<div class=\"logo-container hasInfoCard logosize--yes\">
    \t\t\t\t\t\t\t\t\t<!-- Logo -->
    \t\t\t\t\t\t\t\t\t<h1 class=\"site-logo logo\" id=\"logo\">
    \t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 291
        echo url(("/" . ($context["currentLang"] ?? null)));
        echo "\" title=\"\">
    \t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 292
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 292)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 292), "path", [], "any", false, false, false, 292), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" class=\"logo-img\" alt=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 292), "title", [], "any", false, false, false, 292)]);
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 292), "title", [], "any", false, false, false, 292)]);
        echo "\" />
    \t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t</h1>
    \t\t\t\t\t\t\t\t\t<!--/ Logo -->

    \t\t\t\t\t\t\t\t\t<!-- InfoCard -->
<!--    \t\t\t\t\t\t\t\t\t<div id=\"infocard\" class=\"logo-infocard\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<div class=\"custom\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 left-side d-flex\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"infocard-wrapper text-center\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 304
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 304)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 304), "thumb", [0 => 72, 1 => 72], "method", false, false, false, 304), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" class=\"mb-25\" alt=\"{ settings.company.title|__ }}\" title=\"{ settings.company.title|__ }}\" />-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 306
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 306), "description", [], "any", false, false, false, 306)]);
        echo ".-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ infocard-wrapper &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ .align-self-center &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ col-sm-6 left-side d-flex &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 right-side\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom contact-details\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 318
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 318), "contact_phone", [], "any", false, false, false, 318), "html", null, true);
        echo " <br>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 319), "address", [], "any", false, false, false, 319), "html", null, true);
        echo " <br>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 320), "primary_email", [], "any", false, false, false, 320), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 320), "primary_email", [], "any", false, false, false, 320), "html", null, true);
        echo "</a>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:20px;\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash; Social links clean style &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-icons sc&#45;&#45;clean\">-->
<!--                                                            ";
        // line 327
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 327), "twitter", [], "any", false, false, false, 327)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 328), "twitter", [], "any", false, false, false, 328), "html", null, true);
            echo "\" target=\"_blank\" class=\"fab fa-twitter\" title=\"Twitter\"></a></li>-->
<!--                                                            ";
        }
        // line 329
        echo "-->
<!--                                                            ";
        // line 330
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 330), "facebook", [], "any", false, false, false, 330)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 331), "facebook", [], "any", false, false, false, 331), "html", null, true);
            echo "\" target=\"_blank\" class=\"fab fa-facebook-f\" title=\"Facebook\"></a></li>-->
<!--                                                            ";
        }
        // line 332
        echo "-->
<!--                                                            ";
        // line 333
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 333), "instagram", [], "any", false, false, false, 333)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 334), "instagram", [], "any", false, false, false, 334), "html", null, true);
            echo "\" target=\"_blank\" class=\"fab fa-instagram\" title=\"Instagram\"></a></li>-->
<!--                                                            ";
        }
        // line 335
        echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</ul>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Social links clean style &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ col-sm-6 right-side &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ row &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ custom &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t</div>-->
    \t\t\t\t\t\t\t\t\t<!--/ InfoCard -->
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<!--/ logo container-->

    \t\t\t\t\t\t\t\t<!-- Separator -->
    \t\t\t\t\t\t\t\t<div class=\"separator visible-xxs\"></div>
    \t\t\t\t\t\t\t\t<!--/ Separator -->
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ .site-header-main-left -->

    \t\t\t\t\t\t\t<!-- Header Main Center Side -->
    \t\t\t\t\t\t\t<div class=\"site-header-main-center d-flex justify-content-center align-items-center\">
    \t\t\t\t\t\t\t\t<!-- Main Menu wrapper -->
    \t\t\t\t\t\t\t\t<div class=\"main-menu-wrapper\">
    \t\t\t\t\t\t\t\t\t<!-- Responsive menu trigger -->
    \t\t\t\t\t\t\t\t\t<div id=\"zn-res-menuwrapper\">
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"zn-res-trigger \"></a>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<!--/ responsive menu trigger -->

    \t\t\t\t\t\t\t\t\t<!-- Main menu -->
                            \t\t\t";
        // line 366
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 366)) {
            // line 367
            echo "        \t\t\t\t\t\t\t\t\t<div id=\"main-menu\" class=\"main-nav zn_mega_wrapper\">
        \t\t\t\t\t\t\t\t\t\t<ul id=\"menu-main-menu\" class=\"main-menu zn_mega_menu\">
                                                    ";
            // line 369
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 369));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 369), "isHidden", [], "any", false, false, false, 369)) {
                    // line 370
                    echo "                                                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 370), 1 => "r"], "method", false, false, false, 370) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 370)))) {
                        // line 371
                        echo "                \t\t\t\t\t\t\t\t\t\t\t<li class=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 371)) {
                            echo "menu-item-has-children";
                        }
                        echo " ";
                        echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 371) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 371))) ? ("active") : (""));
                        echo "\">
                                                                <a href=\"";
                        // line 372
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 372)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 372), "html", null, true);
                        } else {
                            echo "#";
                        }
                        echo "\"  ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 372), "isExternal", [], "any", false, false, false, 372)) ? ("target=\"_blank\"") : (""));
                        echo ">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 372)]);
                        echo "</a>
                                                                ";
                        // line 373
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 373)) {
                            // line 374
                            echo "                    \t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu clearfix\">
                                                                        ";
                            // line 375
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 375));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 375), "isHidden", [], "any", false, false, false, 375)) {
                                    // line 376
                                    echo "                                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 376), 1 => "r"], "method", false, false, false, 376) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 376)))) {
                                        // line 377
                                        echo "                            \t\t\t\t\t\t\t\t\t\t\t\t\t<li>
                                                                                    <a href=\"";
                                        // line 378
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 378)) {
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 378), "html", null, true);
                                        } else {
                                            echo "#";
                                        }
                                        echo "\">";
                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 378)]);
                                        echo "</a>
                                                                                    ";
                                        // line 379
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 379)) {
                                            // line 380
                                            echo "                                \t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu clearfix\">
                                                                                            ";
                                            // line 381
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 381));
                                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 381), "isHidden", [], "any", false, false, false, 381)) {
                                                    // line 382
                                                    echo "                                                                                                ";
                                                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 382), 1 => "r"], "method", false, false, false, 382) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 382)))) {
                                                        // line 383
                                                        echo "                                        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 383)) {
                                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 383), "html", null, true);
                                                        } else {
                                                            echo "#";
                                                        }
                                                        echo "\">";
                                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 383)]);
                                                        echo "</a></li>
                                                                                                ";
                                                    }
                                                    // line 385
                                                    echo "                                                                                            ";
                                                }
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 386
                                            echo "                                \t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                                    ";
                                        }
                                        // line 388
                                        echo "                            \t\t\t\t\t\t\t\t\t\t\t\t\t</li>
                                                                            ";
                                    }
                                    // line 390
                                    echo "                                                                        ";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 391
                            echo "                    \t\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                ";
                        }
                        // line 393
                        echo "                \t\t\t\t\t\t\t\t\t\t\t</li>
                                                        ";
                    }
                    // line 395
                    echo "                                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            echo "        \t\t\t\t\t\t\t\t\t\t</ul>
        \t\t\t\t\t\t\t\t\t</div>
                                        ";
        }
        // line 398
        echo "<!--/ Main menu -->
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<!--/ .main-menu-wrapper -->
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ .site-header-main-center -->

    \t\t\t\t\t\t\t<!-- Header Main Right Side -->
    \t\t\t\t\t\t\t<div class=\"site-header-main-right d-flex justify-content-end align-items-center\">
    \t\t\t\t\t\t\t\t<!-- Call to action ribbon Free Quote (Contact form pop-up element) -->
<!--    \t\t\t\t\t\t\t\t<div class=\"quote-ribbon\">-->
<!--    \t\t\t\t\t\t\t\t\t<a href=\"#contact_panel\" id=\"ctabutton\" class=\"ctabutton kl-cta-ribbon\" title=\"GET A FREE QUOTE\" target=\"_self\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<strong>";
        // line 409
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TRACK"]);
        echo "</strong>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["package"]);
        echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t<svg version=\"1.1\" class=\"trisvg\"  xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" preserveaspectratio=\"none\" width=\"14px\" height=\"5px\" viewbox=\"0 0 14 5\" enable-background=\"new 0 0 14 5\" xml:space=\"preserve\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<polygon fill-rule=\"nonzero\" points=\"14 0 7 5 0 0\"></polygon>-->
<!--    \t\t\t\t\t\t\t\t\t\t</svg>-->
<!--    \t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
    \t\t\t\t\t\t\t\t<!--/ Call to action ribbon Free Quote (Contact form pop-up element) -->

\t\t\t\t\t\t\t\t\t";
        // line 417
        if (($context["locales"] ?? null)) {
            // line 418
            echo "\t\t\t\t\t\t\t\t\t<!-- Languages -->
\t\t\t\t\t\t\t\t\t<div class=\"topnav topnav--lang align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"languages drop\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"topnav-item d-inline-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-globe xs-icon\"></span>
<!--\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text d-none\">";
            // line 423
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LANGUAGES"]);
            echo "</span>-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--image ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/en.svg\" alt=\"English\" class=\"toplang-flag\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 430
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                // line 431
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item ";
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    echo "active";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"locale\" rel=\"";
                // line 432
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/";
                // line 433
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo ".svg\" alt=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"toplang-flag\"> ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["name"]), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Languages -->
\t\t\t\t\t\t\t\t\t";
        }
        // line 443
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 444
        if (($context["user"] ?? null)) {
            // line 445
            echo "\t\t\t\t\t\t\t\t\t<div class=\"topnav topnav--lang topnav-account-login topnav-account align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"languages drop\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"topnav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas far fa-user-circle xs-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--text\">";
            // line 449
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ACCOUNT"]);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 454
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/dashboard");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-01.svg\" alt=\"";
            // line 455
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 459
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-04.svg\" alt=\"";
            // line 460
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-03.svg\" alt=\"";
            // line 465
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Logout"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Logout"]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 473
            echo "\t\t\t\t\t\t\t\t\t<!-- Login trigger -->
\t\t\t\t\t\t\t\t\t<div class=\"topnav login--panel topnav-account-login topnav-login align-self-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"topnav-item popup-with-form\" href=\"#login_panel\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"login-icon fas fa-sign-in-alt visible-xs xs-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--text\">";
            // line 477
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LOGIN"]);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Login trigger -->
\t\t\t\t\t\t\t\t\t";
        }
        // line 482
        echo "
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ .site-header-main-right -->
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<!--/ .site-header-row .site-header-main -->
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ .siteheader-container .container -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ Header Main wrapper -->
    \t\t\t</div>
    \t\t\t<!--/ Header wrapper -->
    \t\t</header>
    \t\t<!-- / Header style 1 -->

            ";
        // line 496
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 497
        echo "
            <footer id=\"footer\" data-footer-style=\"4\">
            \t<div class=\"container contact-details\">
            \t\t<div class=\"row\">
            \t\t\t<div class=\"row w-100 d-flex justify-content-between\">

\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
<!--\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">-->
<!--\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Download<br>-->
<!--\t\t\t\t\t\t\t\t\t\t\tApp</h4>-->
<!--\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap\">
                                        <div>
                                            <a href=\"";
        // line 511
        echo url("/");
        echo "\">
                                                <img src=\"";
        // line 512
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 512)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 512), "path", [], "any", false, false, false, 512), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" alt=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 512), "title", [], "any", false, false, false, 512)]);
        echo "\" class=\"footer-logo\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 512), "title", [], "any", false, false, false, 512)]);
        echo "\" />
                                            </a>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut quis nostrud exercitation commodo consequat.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                            </div>

            \t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Quick<br>Links</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap d-flex flex-column\">
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>About</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Shippers</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Carriers</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Careers</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Legal Section</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Contact</span>
                                        </a>
                                    </div>
\t\t\t\t\t\t\t\t</div>

            \t\t\t\t</div>

            \t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Contact<br>Info</h4>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"footer-detail-wrap d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t<!--                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">-->
\t<!--                                            <i class=\"glyphicon glyphicon-flag icon-size-xxs\"></i>-->
\t<!--                                            <span>";
        // line 561
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 561), "address", [], "any", false, false, false, 561), "html", null, true);
        echo "</span>-->
\t<!--                                        </a>-->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 563
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 563), "primary_email", [], "any", false, false, false, 563), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 565
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 565), "primary_email", [], "any", false, false, false, 565), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 567
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 567), "company_phone", [], "any", false, false, false, 567), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 569
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 569), "company_phone", [], "any", false, false, false, 569), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 571
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 571), "company_phone_2", [], "any", false, false, false, 571), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 573
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 573), "company_phone_2", [], "any", false, false, false, 573), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 575
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 575), "company_phone_3", [], "any", false, false, false, 575), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 577
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 577), "company_phone_3", [], "any", false, false, false, 577), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elm-socialicons m-auto \">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"elm-social-icons sc--colored sh--rounded clearfix mt-3 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 584
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 584), "facebook", [], "any", false, false, false, 584)) {
            // line 585
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 586
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 586), "facebook", [], "any", false, false, false, 586), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-0 fab fa-facebook-f bg-icon\" target=\"_self\" title=\"Facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 589
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 589), "twitter", [], "any", false, false, false, 589)) {
            // line 590
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 591
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 591), "twitter", [], "any", false, false, false, 591), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-1 fab fa-twitter bg-icon\" target=\"_self\" title=\"Twitter\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 594
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 594), "instagram", [], "any", false, false, false, 594)) {
            // line 595
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 596
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 596), "instagram", [], "any", false, false, false, 596), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-2 fab fa-instagram bg-icon\" target=\"_self\" title=\"Instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 599
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--/ Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

                                </div>
            \t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Download<br>App</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap\">
                                        <div class=\"download-app-wrap d-flex justify-content-around\">
                                            <span>
                                                Google Play
                                            </span>
                                            <span>
                                                App Store
                                            </span>
                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
            \t\t\t</div>

            \t\t\t<!--/ col-sm-offset-2 col-md-8 col-sm-8 -->
            \t\t</div>
            \t\t<!--/ row -->

            \t\t<div class=\"row\">
            \t\t\t<div class=\"col-sm-12 footer-area--bottom\"></div>

            \t\t\t<!-- Left side Copyright -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6 d-flex justify-content-start\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
            \t\t\t\t\t<p>© ";
        // line 637
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <span class=\"font-weight-bold brand_title\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 637), "title", [], "any", false, false, false, 637)]);
        echo "</span> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All rights reserved"]);
        echo ".</p>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<!--/ Left side Copyright -->

            \t\t\t<!-- Right side -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
            \t\t\t\t<div class=\"d-block text-right\">";
        // line 644
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Powered By"]);
        echo " &nbsp;<a href=\"https://ivylabtech.com\" target=\"_blank\" class=\"refer_title\">IvyLab Technologies</a>.
\t\t\t\t\t\t\t\t<!--                                ";
        // line 645
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Developed By"]);
        echo " &nbsp;<a href=\"https://ivylabtech.com\" target=\"_blank\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Spotlayer"]);
        echo "</a>.--></div>
            \t\t\t</div>
            \t\t\t<!--/ Right side -->
            \t\t</div>
            \t\t<!--/ row -->
            \t</div>
            \t<!--/ container -->
            </footer>
    \t</div>
    \t<!--/ Page Wrapper -->


    \t<!-- Login Panel content -->
    \t<div id=\"login_panel\" class=\"mfp-hide loginbox-popup auth-popup\">
    \t\t<div class=\"inner-container login-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title tcolor\">
    \t\t\t\t";
        // line 661
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES"]);
        echo "
    \t\t\t</h3>

    \t\t\t<form class=\"login_panel\" name=\"login_panel\" method=\"get\" action=\"";
        // line 664
        echo url("login");
        echo "\">
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"text\" id=\"userSigninLogin\" name=\"login\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
        // line 666
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["eg"]);
        echo ": james_smith\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
        // line 668
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["loginAttributeLabel"] ?? null)]);
        echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"userSigninPassword\" name=\"password\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
        // line 673
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["type password"]);
        echo "\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
        // line 675
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

                    ";
        // line 679
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 680
            echo "        \t\t\t\t<label class=\"auth-popup-remember\" for=\"kl-rememberme\">
                            <input name=\"remember\" type=\"checkbox\" value=\"1\" id=\"kl-rememberme\" class=\"auth-popup-remember-chb\"> ";
            // line 681
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Remember me"]);
            echo "
        \t\t\t\t</label>
                    ";
        }
        // line 684
        echo "
    \t\t\t\t<input type=\"submit\" name=\"submit_button\" class=\"btn zn_sub_button btn-fullcolor btn-md\" value=\"";
        // line 685
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "\">

    \t\t\t\t<div class=\"links auth-popup-links\">
                        ";
        // line 688
        if (($context["canRegister"] ?? null)) {
            // line 689
            echo "\t\t\t\t\t\t\t<a href=\"#register_panel\" class=\"create_account auth-popup-createacc kl-login-box auth-popup-link\">
\t\t\t\t\t\t\t\t";
            // line 690
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CREATE AN ACCOUNT"]);
            echo "
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"sep auth-popup-sep\"></span>
                        ";
        }
        // line 695
        echo "    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t\t<button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
        ";
        // line 700
        if (($context["canRegister"] ?? null)) {
            // line 701
            echo "    \t<div id=\"register_panel\" class=\"mfp-hide loginbox-popup auth-popup\">
    \t\t<div class=\"inner-container register-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title\">
    \t\t\t\t";
            // line 704
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CREATE ACCOUNT"]);
            echo "
    \t\t\t</h3>

    \t\t\t<form class=\"register_panel\" name=\"register_panel\" method=\"post\" action=\"#\">
    \t\t\t\t<div class=\" kl-fancy-form \">
    \t\t\t\t\t<input type=\"text\" id=\"registerName\" name=\"name\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
            // line 709
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["type your name"]);
            echo "\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">";
            // line 710
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FULL NAME"]);
            echo "</label>
    \t\t\t\t</div>
                    ";
            // line 712
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 713
                echo "    \t\t\t\t<div class=\" kl-fancy-form \">
    \t\t\t\t\t<input type=\"text\" id=\"registerUsername\" name=\"username\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
                // line 714
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["type desired username"]);
                echo "\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">";
                // line 715
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["USERNAME"]);
                echo "</label>
    \t\t\t\t</div>
                    ";
            }
            // line 718
            echo "
    \t\t\t\t<div class=\"kl-fancy-form\">
    \t\t\t\t\t<input type=\"text\" id=\"registerEmail\" name=\"email\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"your-email@website.com\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
            // line 722
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EMAIL"]);
            echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div
    \t\t\t\t>
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"registerPassword\" name=\"password\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"*****\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
            // line 729
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["PASSWORD"]);
            echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\"kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"rpassword\" name=\"rpassword\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"*****\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
            // line 736
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CONFIRM PASSWORD"]);
            echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<label class=\"auth-popup-remember\" for=\"agreement\">
                        <input name=\"agree\" type=\"checkbox\" value=\"1\" id=\"agreement\" class=\"auth-popup-remember-chb\" required> ";
            // line 741
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["I Agree the"]);
            echo " <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["terms and conditions"]);
            echo "</a>
    \t\t\t\t</label>

    \t\t\t\t<div class=\"\">
    \t\t\t\t\t<input type=\"submit\" id=\"signup\" name=\"submit\" class=\"btn zn_sub_button btn-block btn-fullcolor btn-md\" value=\"";
            // line 745
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CREATE MY ACCOUNT"]);
            echo "\">
    \t\t\t\t</div>

    \t\t\t\t<div class=\"links auth-popup-links\">
    \t\t\t\t\t<a href=\"#login_panel\" class=\"kl-login-box auth-popup-link\">
    \t\t\t\t\t\t";
            // line 750
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ALREADY HAVE AN ACCOUNT?"]);
            echo "
    \t\t\t\t\t</a>
    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t</div>
        ";
        }
        // line 757
        echo "    \t<div id=\"forgot_panel\" class=\"mfp-hide loginbox-popup auth-popup forgot-popup\">
    \t\t<div class=\"inner-container forgot-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title\">
    \t\t\t\t";
        // line 760
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FORGOT YOUR PASSWORD?"]);
        echo "
    \t\t\t</h3>

    \t\t\t<form class=\"forgot_form\" data-request=\"";
        // line 763
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"email\" id=\"userRestoreEmail\" name=\"email\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"...\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
        // line 767
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EMAIL"]);
        echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\"\">
    \t\t\t\t\t<input type=\"submit\" id=\"kt_login_forgot_submit\" name=\"submit\" class=\"btn btn-block zn_sub_button btn-fullcolor btn-md\" value=\"";
        // line 772
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SEND MY DETAILS!"]);
        echo "\">
    \t\t\t\t</div>

    \t\t\t\t<div class=\"links auth-popup-links\">
    \t\t\t\t\t<a href=\"#login_panel\" class=\"kl-login-box auth-popup-link\">
    \t\t\t\t\t\t";
        // line 777
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["AAH, WAIT, I REMEMBER NOW!"]);
        echo "
    \t\t\t\t\t</a>
    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t\t<button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
    \t<!--/ Login Panel content -->

    \t<!-- Contact form pop-up element content -->
    \t<div id=\"contact_panel\" class=\"mfp-hide contact-popup\">
    \t\t<div class=\"contact-popup-panel\">
    \t\t\t<div class=\"container-fluid\">
    \t\t\t\t<div class=\"row\">
    \t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
    \t\t\t\t\t\t<!-- Contact form pop-up element -->
    \t\t\t\t\t\t<div class=\"contactForm pop-up-form\">

    \t\t\t\t\t\t\t<!-- Title -->
    \t\t\t\t\t\t\t<h3 class=\"m_title m_title_ext text-custom contact-popup-title tcolor\">
    \t\t\t\t\t\t\t\t";
        // line 797
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TRACK A PACKAGE"]);
        echo "
    \t\t\t\t\t\t\t</h3>
    \t\t\t\t\t\t\t<h4 class=\"tbk__subtitle fw-thin\">
    \t\t\t\t\t\t\t\t";
        // line 800
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Just type the tracking code and we'll do everything"]);
        echo "!
    \t\t\t\t\t\t\t</h4>

    \t\t\t\t\t\t\t<form action=\"";
        // line 803
        echo url("tracking");
        echo "\" method=\"get\" class=\"contact_form row mt-40\">
                                    ";
        // line 804
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                                    ";
        // line 805
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
    \t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
    \t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"number\" id=\"cf_name-pop-up\" class=\"form-control\" placeholder=\"";
        // line 807
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please enter a valid tracking number"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
    \t\t\t\t\t\t\t\t\t<label class=\"control-label\">
    \t\t\t\t\t\t\t\t\t\t";
        // line 809
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking numbers"]);
        echo "
    \t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t</div>

    \t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t\t\t<!-- Contact form send button -->
    \t\t\t\t\t\t\t\t\t<button class=\"btn btn-fullcolor\" type=\"submit\">
    \t\t\t\t\t\t\t\t\t\t";
        // line 816
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Track"]);
        echo "
    \t\t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</form>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<!--/ Contact form pop-up element -->
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ col-md-12 col-sm-12 -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ .row -->
    \t\t\t</div>
    \t\t\t<!--/ .container -->
    \t\t</div>
    \t\t<!--/ .contact-popup-panel -->
    \t\t<button title=\"";
        // line 830
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close (Esc)"]);
        echo "\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
    \t<!--/ Contact form pop-up element content -->


    \t<!-- ToTop trigger -->
    \t<a href=\"javascript:void(0);\" id=\"totop\">";
        // line 836
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TOP"]);
        echo "</a>
    \t<!--/ ToTop trigger -->



    \t<!-- JS FILES // These should be loaded in every page -->
    \t<script type=\"text/javascript\" src=\"./front/js/bootstrap.min.js\"></script>
    \t<script type=\"text/javascript\" src=\"./front/js/kl-plugins.js\"></script>

    \t<!-- JS FILES // Loaded on this page -->
    \t<!-- Requried js script for Slideshow Scroll effect (uncomment bellow script to activate) -->
    \t<!-- <script type=\"text/javascript\" src=\"./front/js/plugins/scrollme/jquery.scrollme.js\"></script> -->

    \t<!-- Required js script for iOS Slider element -->
    \t<script type=\"text/javascript\" src=\"./front/js/plugins/_sliders/ios/jquery.iosslider.min.js\"></script>

    \t<!-- Required js trigger script file for iOS Slider element -->
    \t<script type=\"text/javascript\" src=\"./front/js/trigger/slider/ios/kl-ios-slider.js\"></script>

    \t<!-- Slick required js script for Partners Carousel element -->
    \t<script type=\"text/javascript\" src=\"./front/js/plugins/_sliders/slick/slick.js\"></script>

    \t<!-- Required js trigger script file for Partners Carousel element -->
    \t<script type=\"text/javascript\" src=\"./front/js/trigger/kl-slick-slider.js\"></script>

    \t<!-- Required js trigger for World Map element Popup -->
    \t<script type=\"text/javascript\">
    \t\tvar wmOffices = jQuery('.world-map-offices'),
    \t\t\twmTrig = jQuery('.world-map-triggers'),
    \t\t\twmOffice = wmOffices.children('.world-office'),
    \t\t\twmTriga = wmTrig.find('.office-name'),
    \t\t\tclicked;

    \t\twmOffice.each(function(index, el) {
    \t\t\tvar \$el = jQuery(el);
    \t\t\t\$el.css({
    \t\t\t\ttop: parseInt(\$el.attr('data-fromtop')),
    \t\t\t\tleft: parseInt(\$el.attr('data-fromleft'))
    \t\t\t})
    \t\t\t.on('mouseover', function() {
    \t\t\t\twmTrig.find(\"[data-office='\" + \$el.attr('data-office') + \"']\").addClass('selected');
    \t\t\t})
    \t\t\t.on('mouseout', function() {
    \t\t\t\twmTriga.removeClass('selected');
    \t\t\t});;
    \t\t});

    \t\twmTriga.on('mouseover', function() {
    \t\t\twmOffices.find(\"[data-office='\" + jQuery(this).attr('data-office') + \"']\").addClass('selected');
    \t\t})
    \t\t.on('mouseout', function() {
    \t\t\twmOffice.removeClass('selected');
    \t\t});
    \t</script>


    \t<!-- Custom Kallyas JS codes -->
    \t<script type=\"text/javascript\" src=\"./front/js/kl-scripts.js\"></script>


    \t<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
    \t<script>
    \t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    \t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    \t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    \t  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    \t  ga('create', 'UA-XXXXX-X', 'auto');
    \t  ga('send', 'pageview');
    \t</script>
    \t-->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                \"colors\":{
                    \"state\":{
                        \"brand\":\"#5d78ff\",
                        \"light\":\"#ffffff\",
                        \"dark\":\"#282a3c\",
                        \"primary\":\"#5867dd\",
                        \"success\":\"#34bfa3\",
                        \"info\":\"#36a3f7\",
                        \"warning\":\"#ffb822\",
                        \"danger\":\"#fd3995\"
                    },
                    \"base\":{
                        \"label\":[
                            \"#c5cbe3\",
                            \"#a1a8c3\",
                            \"#3d4465\",
                            \"#3e4466\"
                        ],
                        \"shape\":[
                            \"#f0f3ff\",
                            \"#d9dffa\",
                            \"#afb4d4\",
                            \"#646c9a\"
                        ]
                    }
                },
                \"text\":{
                    'loading' : '";
        // line 938
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading ..."]);
        echo "'
                },
                \"dateformat\": \"";
        // line 940
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 940), ["d" => "dd", "m" => "mm", "Y" => "yyyy"]), "html", null, true);
        echo "\",
                \"daterangeformat\": \"";
        // line 941
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 941), ["d" => "DD", "m" => "MM", "M" => "MMM"]), "html", null, true);
        echo "\"
            };

        </script>
        <!-- end::Global Config -->

        <!--begin::Page Scripts(used by this page) -->
            ";
        // line 948
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 949
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 950
        echo "            <script type=\"text/javascript\">
                jQuery(document).ready(function() {
                    \$('body').on('click', '.locale', function(e){
                        e.preventDefault();
                        var selected = \$(this).attr('rel');
                        if(selected != ''){
                            \$.request('onSwitchLocale', {
                                data: {locale: selected}
                            });
                        }
                    });


                    // Form Validation & Send Mail code
                    \tif(typeof(\$('#register_panel form')) != 'undefined') {
                    \t\t\$.each(\$('#register_panel form'), function(index, el) {
                    \t\t\tvar cform = \$(el),
                    \t\t\t\tcResponse = \$('<div class=\"cf_response\"></div>');
                    \t\t\tcform.prepend(cResponse);
                    \t\t\tcform.h5Validate();

                    \t\t\tcform.submit(function(e) {
                    \t\t\t\te.preventDefault();
                    \t\t\t\tif(cform.h5Validate('allValid')) {

                                        \$.request('onRegister', {
                                            ";
        // line 976
        if ((($context["loginAttribute"] ?? null) == "username")) {
            // line 977
            echo "                                                data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                                            ";
        } else {
            // line 979
            echo "                                                data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                                            ";
        }
        // line 981
        echo "                                            error: function(e,response) {
                                                cform.find('.cf_response').addClass('alert alert-danger error');
                                                cform.find('.cf_response').html(e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                            \t\t\t\t\tcResponse.show();
                                            },
                                            success: function(response, status, xhr, \$form) {
                                                cform.find('.cf_response').addClass('alert alert-success');
                                                ";
        // line 988
        if ((($context["requireActivation"] ?? null) && (null === ($context["automaticActivation"] ?? null)))) {
            // line 989
            echo "                                                    cform.find('.cf_response').html('";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you. To complete your registration please check your email"]);
            echo ".');
                                \t\t\t\t\tcResponse.show();
                                                 ";
        } else {
            // line 992
            echo "                                                    cform.find('.cf_response').html('";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Successfully registered, you are being redirect"]);
            echo ".');
                                \t\t\t\t\tcResponse.show();
                                                    window.location.href = \"";
            // line 994
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/dashboard");
            echo "\";
                                                ";
        }
        // line 996
        echo "                                            }
                                        });
                    \t\t\t\t}
                    \t\t\t\treturn false;
                    \t\t\t});
                    \t\t});
                    \t}
                    \tif(typeof(\$('.contactForm form, .contactForm.pop-up-form form')) != 'undefined') {
                    \t\t\$.each(\$('.contactForm form, .contactForm.pop-up-form form'), function(index, el) {
                    \t\t\tvar cform = \$(el),
                    \t\t\t\tcResponse = \$('<div class=\"cf_response\"></div>');
                    \t\t\tif(cform.find('.cf_response').length > 0){
                    \t\t\t\tcform.find('.cf_response').remove();
                    \t\t\t}
                    \t\t\tcform.prepend(cResponse);
                    \t\t\tcform.h5Validate();

                    \t\t\tcform.on('click', 'button', function(e) {
                    \t\t\t\te.preventDefault();
                    \t\t\t\tif(cform.h5Validate('allValid')) {
                    \t\t\t\t\tcResponse.hide();
                    \t\t\t\t\tcform.submit();
                    \t\t\t\t}
                    \t\t\t\treturn false;
                    \t\t\t});
                    \t\t});
                    \t}
                    // END Form Validation
                    \$('body').on('click','#agree', function(e){
                        \$( \"#agreement\" ).prop( \"checked\", true );
                    });
                });
            </script>
        <!--end::Page Scripts -->
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/layouts/front.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1723 => 996,  1718 => 994,  1712 => 992,  1705 => 989,  1703 => 988,  1694 => 981,  1690 => 979,  1686 => 977,  1684 => 976,  1656 => 950,  1652 => 949,  1641 => 948,  1631 => 941,  1627 => 940,  1622 => 938,  1517 => 836,  1508 => 830,  1491 => 816,  1481 => 809,  1476 => 807,  1471 => 805,  1467 => 804,  1463 => 803,  1457 => 800,  1451 => 797,  1428 => 777,  1420 => 772,  1412 => 767,  1403 => 763,  1397 => 760,  1392 => 757,  1382 => 750,  1374 => 745,  1365 => 741,  1357 => 736,  1347 => 729,  1337 => 722,  1331 => 718,  1325 => 715,  1321 => 714,  1318 => 713,  1316 => 712,  1311 => 710,  1307 => 709,  1299 => 704,  1294 => 701,  1292 => 700,  1285 => 695,  1277 => 690,  1274 => 689,  1272 => 688,  1266 => 685,  1263 => 684,  1257 => 681,  1254 => 680,  1252 => 679,  1245 => 675,  1240 => 673,  1232 => 668,  1227 => 666,  1222 => 664,  1216 => 661,  1195 => 645,  1191 => 644,  1177 => 637,  1137 => 599,  1131 => 596,  1128 => 595,  1125 => 594,  1119 => 591,  1116 => 590,  1113 => 589,  1107 => 586,  1104 => 585,  1102 => 584,  1092 => 577,  1087 => 575,  1082 => 573,  1077 => 571,  1072 => 569,  1067 => 567,  1062 => 565,  1057 => 563,  1052 => 561,  992 => 512,  988 => 511,  972 => 497,  970 => 496,  954 => 482,  946 => 477,  940 => 473,  927 => 465,  917 => 460,  913 => 459,  904 => 455,  900 => 454,  892 => 449,  886 => 445,  884 => 444,  881 => 443,  873 => 437,  859 => 433,  855 => 432,  848 => 431,  844 => 430,  834 => 423,  827 => 418,  825 => 417,  812 => 409,  799 => 398,  794 => 396,  787 => 395,  783 => 393,  779 => 391,  772 => 390,  768 => 388,  764 => 386,  757 => 385,  745 => 383,  742 => 382,  737 => 381,  734 => 380,  732 => 379,  722 => 378,  719 => 377,  716 => 376,  711 => 375,  708 => 374,  706 => 373,  694 => 372,  685 => 371,  682 => 370,  677 => 369,  673 => 367,  671 => 366,  638 => 335,  633 => 334,  629 => 333,  626 => 332,  621 => 331,  617 => 330,  614 => 329,  609 => 328,  605 => 327,  593 => 320,  589 => 319,  585 => 318,  570 => 306,  561 => 304,  538 => 292,  534 => 291,  506 => 265,  498 => 261,  491 => 256,  478 => 249,  468 => 244,  464 => 243,  455 => 239,  451 => 238,  443 => 233,  435 => 228,  427 => 223,  419 => 217,  410 => 211,  396 => 208,  392 => 207,  386 => 206,  380 => 205,  373 => 201,  364 => 195,  351 => 187,  346 => 185,  335 => 176,  325 => 172,  320 => 170,  317 => 169,  307 => 165,  302 => 163,  299 => 162,  289 => 158,  284 => 156,  248 => 123,  244 => 122,  236 => 117,  219 => 107,  209 => 100,  201 => 95,  193 => 90,  183 => 83,  163 => 68,  159 => 66,  156 => 65,  150 => 61,  146 => 59,  142 => 57,  140 => 56,  106 => 24,  101 => 22,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  80 => 15,  78 => 14,  73 => 12,  69 => 11,  63 => 8,  56 => 6,  51 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{{currentLang}}\" {% if currentLang == 'ar'%}direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\"{% else %}dir=\"ltr\"{% endif %} class=\"no-js\">
    <head>
        <base href=\"{{ 'assets/admin'|theme }}\"><!--end::Base Path -->
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>{{ this.page.title|__ }} | {{ settings.company.title|__ }}</title>
    \t<!-- meta -->
    \t<meta http-equiv=\"content-type\" content=\"text/html; charset={{ settings.company.charset }}\" />
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    \t<!-- Uncomment the meta tags you are going to use! Be relevant and don't spam! -->
    \t<meta name=\"keywords\" content=\"{{ settings.company.keywords|__ }}\" />
    \t<meta name=\"description\" content=\"{{ settings.company.description|__ }}\">

        {% if settings.favicon.path %}
            <!-- iDevices & Retina Favicons -->
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"{{ settings.favicon.thumb(72,72) }}\" sizes=\"72x72\" />
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"{{ settings.favicon.thumb(114,114) }}\" sizes=\"114x114\" />
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"{{ settings.favicon.thumb(144,144) }}\" sizes=\"144x144\" />
        \t<link rel=\"apple-touch-icon-precomposed\" type=\"image/x-icon\" href=\"{{ settings.favicon.path }}\" />

        \t<!--  Desktop Favicons  -->
        \t<link rel=\"icon\" type=\"image/png\" href=\"{{ settings.favicon.path }}\" sizes=\"32x32\">
        {% endif %}

    \t<!-- Google Fonts CSS Stylesheet // More here http://www.google.com/fonts#UsePlace:use/Collection:Open+Sans -->
    \t<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic\" rel=\"stylesheet\" type=\"text/css\">
    \t<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    \t<!-- ***** Boostrap Custom / Addons Stylesheets ***** -->
    \t<link rel=\"stylesheet\" href=\"./front/css/bootstrap.css\" type=\"text/css\" media=\"all\">

    \t<!-- Font Awesome icons library -->
    \t<link rel=\"stylesheet\" href=\"./front/fonts/font-awesome/css/font-awesome.min.css\" type=\"text/css\" media=\"all\">

    \t<!-- Required CSS file for IOS Slider element  -->
    \t<link rel=\"stylesheet\" href=\"./front/css/sliders/ios/style.css\" type=\"text/css\" media=\"all\">

    \t<!-- ***** Main + Responsive & Base sizing CSS Stylesheet ***** -->
    \t<link rel=\"stylesheet\" href=\"./front/css/template.css\" type=\"text/css\" media=\"all\">
    \t<link rel=\"stylesheet\" href=\"./front/css/responsive.css\" type=\"text/css\" media=\"all\">
    \t<link rel=\"stylesheet\" href=\"./front/css/base-sizing.css\" type=\"text/css\" media=\"all\">

    \t<!-- Required custom CSS file for this niche -->
    \t<link rel=\"stylesheet\" href=\"./front/css/niches/custom-cargo.css\" type=\"text/css\" />

    \t<!-- Custom CSS Stylesheet (where you should add your own css rules) -->
    \t<link rel=\"stylesheet\" href=\"./front/css/custom.css\" type=\"text/css\" />
    \t<link rel=\"stylesheet\" href=\"./front/css/styled_custom.css\" type=\"text/css\" />

    \t<!-- Modernizr Library -->
    \t<script type=\"text/javascript\" src=\"./front/js/modernizr.min.js\"></script>

    \t<!-- jQuery Library -->
    \t<script type=\"text/javascript\" src=\"./front/js/jquery.js\"></script>

        {% if currentLang == 'ar'%}
            <link href='http://fonts.googleapis.com/css?family=Changa:300,400,500,600,700' rel='stylesheet' type='text/css'>
        {% else %}

        {% endif %}
        <!--end::Global Theme Styles -->
        <!--begin::Layout Skins(used by all pages) -->
        <style id=\"template-colors\"> a:hover,.cart-container > .widget_shopping_cart_content .checkout,.sc-infopop__btn,.m_title,.smallm_title,.circle_title,.zn_text_box-title--style1,.feature_box .title,.services_box--classic .services_box__title,.latest_posts.default-style .hoverBorder:hover h6,.latest_posts.style2 ul.posts .title,.recentwork_carousel--1 .recentwork_carousel__crsl-title,.acc--default-style .acc-tgg-button,.acc--style3 .acc-tgg-button:after,.screenshot-box .left-side h3.title,.vertical_tabs.kl-style-1 .tabbable .nav>li.active>a,.services_box_element .box .list li,.shop-latest .tabbable .nav li.active a,.product-list-item:hover .details h3,.product-category .product-list-item:hover h3,.eBlog .itemContainer:not(.featured-post) .post_details .catItemAuthor a,.theHoverBorder:hover,.text-custom,.text-custom-hover:hover,.statbox h4 , #bbpress-forums .bbp-topics li.bbp-body .bbp-topic-title > a,.ib2-text-color-light-theme .ib2-info-message:before,.tbk--color-theme.tbk-symbol--icon .tbk__icon,.pricing-table-element .plan-column .plan-title,.process_steps--style2 .process_steps__step-icon,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover,.vertical_tabs.kl-style-2 .tabbable .nav>li.active>a [data-zn_icon]:before,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover [data-zn_icon]:before,.services_box--boxed .services_box__fonticon,.services_box--boxed .services_box__list li,.woocommerce ul.product_list_widget li .star-rating,.woocommerce .woocommerce-product-rating .star-rating,body .static-content__infopop .sc-infopop__btn, .hg_accordion_element.style3 .th-accordion .acc-group > a, .grid-ibx__item:hover .grid-ibx__icon, .kl-iconbox__title, .full-portfolio .hg-portfolio-sortable #portfolio-nav li a:hover, .full-portfolio .hg-portfolio-sortable #portfolio-nav li.current a, ul.thumbs.style2 .appreciate::before, .product-list-item:hover .kw-details-title, .kl-store-page ul.products li.product .product-list-item:hover .kw-details-title, .kl-store.widget ul.product_list_widget li .star-rating, .testimonial_slider.quoter-style .testimonialbox .who strong, .hg_accordion_element.default-style .th-accordion .acc-group > button, .team-member .mmb-position, .kl-iconbox.stage:hover .kl-iconbox__icon, .priceListElement-itemPrice, .hg_accordion_element.style2 .th-accordion .acc-group > button, .fun-fact .fun-number, .site-header .kl-header-toptext a, .testimonial_slider__carousel-wrapper .testimonialbox .who strong, .image-boxes__carousel-wrapper .inner-slide:hover a {color: #f0aa1d; } .tcolor, .vertical_tabs .tabbable .nav>li.active>a, .vertical_tabs .tabbable .nav>li>a:hover, .vertical_tabs .tabbable .nav>li.active>a>span, .vertical_tabs .tabbable .nav>li>a:hover>span, .services_boxes_wgt li:hover .kl-icon, .works_carousel.stl-simple .inner-slide:hover a, .works_carousel.stl-simple .inner-slide a:hover, .orange, .blue, .works_carousel .cfs--navigation a:hover::before, .vertical_tabs .tabbable .nav>li>a.active, .vertical_tabs .tabbable .nav>li>a.active>span, .hg_accordion_element.style4 .th-accordion .acc-group a {color: #f0aa1d !important; } .tbg, .photo-wall .pw-item::after, .bg-default, .site-header .kl-cart-button .fas:after, .logo-container .logo-infocard .right-side, .hg_accordion_element.style5 .th-accordion a::before, .image-boxes__carousel-wrapper .inner-slide .imgprev, .hg_accordion_element.style4 > h3, .hg_accordion_element.style3 .th-accordion .acc-group a:before, .keywordbox.keywordbox-4 {background-color: #f0aa1d !important;} .acc--style4,#page-loading:after,.ib2-text-color-light-theme .ib2-info-message:before,.itemThumbnail .overlay__inner a:hover,.acc--style4 .acc-tgg-button .acc-icon, .btn-lined.lined-custom, .hg_accordion_element.style4 .th-accordion {border-color: #f0aa1d; } .btn-lined.lined-custom:hover {border-color: rgba(241,196,15,0.7);} .acc--style3 .acc-tgg-button:hover,.acc--style3 .acc-tgg-button:hover:after,.acc--default-style .acc-tgg-button,.acc--style2 .acc-tgg-button,.acc--style3 .acc-tgg-button,.acc--style4 .acc-tgg-button, .btn-lined.lined-custom {color: #f0aa1d ; } .tabs_style5 > ul.nav > li.active > a, .wgt-title > span, .tabs_style5 > ul.nav > li > a.active {border-bottom: 2px solid #f0aa1d; } header.style1,header.style2 .site-logo a,header.style3 .site-logo a {border-top: 3px solid #f0aa1d; } .tabs_style1 > ul.nav > li.active > a, .tabs_style1 > ul.nav > li > a.active {box-shadow: inset 0 3px 0 #f0aa1d; } .main-nav > ul > li > a:before,.main-nav .zn_mega_container li a:not(.zn_mega_title):before,.social-icons.sc--normal li a:hover,.action_box,body .circlehover,body .kl-flex--classic .zn_general_carousel-arr:hover,body .kl-ioscaption--style1 .more:before,body .kl-ioscaption--style1 .more:after,body .kl-ioscaption--style2 .more,body .nivo-directionNav a:hover,body .th-wowslider a.ws_next:hover,body .th-wowslider a.ws_prev:hover,body .ca-more,body .title_circle,body .title_circle:before,body ul.links li a,.hg-portfolio-sortable #portfolio-nav li a:hover, .hg-portfolio-sortable #portfolio-nav li.current a,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after,.btn-flat ,.zn_limited_offers li:after,.login-panel .login_facebook ,.imgboxes_style1 .hoverBorder h6,.circlehover:before,.kl-cta-ribbon,.newsletter-signup input[type=submit],.recentwork_carousel--1 .recentwork_carousel__bg,.zn-acc--style4 .acc-title,.zn-acc--style3 .acc-tgg-button:before,.process_box .content:before,#bbpress-forums div.bbp-search-form input[type=submit], #bbpress-forums .bbp-submit-wrapper button, #bbpress-forums #bbp-your-profile fieldset.submit button,.bg-custom,.bg-custom-hover:hover,.site-header.style8 .kl-main-header .kl-cta-lined,.site-header.style9 .kl-cta-lined,.latest_posts.default-style.kl-style-2 .lp-title,.latest_posts.default-style.kl-style-2 .post:not(.lp-title) .m_title:after,.latest_posts.default-style .hoverBorder h6,.itemThumbnail .overlay__inner a:hover,.elm-searchbox--normal .elm-searchbox__submit,.elm-searchbox--transparent .elm-searchbox__submit,.itemThumbnail .overlay__inner a:hover,.zn-acc--style4 .acc-tgg-button .acc-icon:before,span.zn_badge_sale,span.zn_badge_sale:after,.zn_limited_offers li:before,.style3 .action_box_inner,.style3 .action_box_inner:before,.action_box.style3:before,.circlehover.style2,.circlehover.style2:before,body .kl-flex--classic .zn_simple_carousel-arr:hover, .main-nav .hg_mega_container li a:not(.zn_mega_title):before {background-color: #f0aa1d; } .breadcrumbs li:after,.ib2-text-color-light-theme .ib2-inner, .breadcrumbs li:after, .breadcrumbs2 li:after, .photogallery-widget .pg-thumb:nth-child(even) .pg-caption::before, .portfolio-item-details.travel li::before {border-left-color: #f0aa1d; } .kl-cta-ribbon .trisvg path,.kl-bottommask .bmask-customfill,.kl-slideshow .kl-loader svg path,.kl-slideshow.kl-loadersvg rect,.kl-diagram circle, .kl-cta-ribbon .trisvg {fill: #f0aa1d; } .how_to_shop .number, .newsletter-signup input[type=submit], .th-map_controls, .hg-portfolio-sortable #portfolio-nav li.current a, .ptcarousel .controls > a:hover, .itemLinks span a:hover, .product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a, .shop-features .shop-feature:hover, .btn-flat, .redbtn, .imgboxes_style1 .hoverBorder h6, .feature_box.style3 .box:hover, .services_box--classic:hover .services_box__icon, services_box_element:hover .box .icon, .latest_posts.default-style .hoverBorder h6, .process_steps--style1 .process_steps__intro, .process_steps--style2 .process_steps__intro, .recentwork_carousel.style2 li a .details .plus, .gobox.ok:before, .gobox.ok:after, .gobox.ok, .recentwork_carousel--1 .recentwork_carousel__bg, .circlehover:before,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after ,.kl-ioscaption--style2 .more {background-color: #f0aa1d; } .hover-box:hover {background-color: #f0aa1d !important;} .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a, .vertical_tabs.kl-style-1 .tabbable .nav >li > a.active {box-shadow: inset -3px 0 0 0 #f0aa1d !important;} .action_box:before, .action_box:after, .site-header.style1, .site-header.style6, .site-header.style4 .site-logo a, .site-header.style5 {border-top-color: #f0aa1d; } .process_steps--style1 .process_steps__intro:after,body .nivo-caption,body .kl-flex--classic .flex-caption,body .th-wowslider .ws-title,.process_box[data-align=left] .content:after,body .ls--laptop .ls__item-caption {border-left-color: #f0aa1d; } .process_box[data-align=right] .content:after, .photogallery-widget .pg-thumb:nth-child(odd) .pg-caption::before {border-right-color: #f0aa1d; } .theHoverBorder:hover {box-shadow: 0 0 0 5px #f0aa1d inset; } .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a {box-shadow: inset -3px 0 0 0 #f0aa1d inset; } .offline-page .containerbox {border-bottom: 5px solid #f0aa1d; } .offline-page .containerbox:after {border-top: 20px solid #f0aa1d; } .site-header.style2 .site-logo a, .site-header.style5, .site-header.style6 .site-logo a {border-top: 3px solid #f0aa1d; } body .kl-ioscaption--style2 .title_big, body .kl-ioscaption--style2 .title_small {border-left: 5px solid #f0aa1d; } body .kl-ioscaption--style2.fromright .title_big, body .kl-ioscaption--style2.fromright .title_small {border-right: 5px solid #f0aa1d ; } #buddypress form#whats-new-form p.activity-greeting:after {border-top-color: #f0aa1d; } #buddypress input[type=submit],#buddypress input[type=button],#buddypress input[type=reset] ,#buddypress .activity-list li.load-more a, .stg-bigblog .bb-title .bb-category, .product-list-item .kw-actions a, .kl-store-page ul.products li.product .product-list-item .kw-actions a, .btn-flat, .kl-store-page a.button, .kl-store-page button.button, .kl-store-page button.button.alt, .kl-store-page input.button, .kl-store-page input#button, .kl-store-page #review_form #submit, .fancy-list li:hover::before, .testimonial_slider.quoter-style .cfs--pagination a.selected, .photogallery-widget .pg-thumb .pg-caption, ul.dash-list li::before, .kl-iconbox--sh-circle span.kl-iconbox__icon, .process-list .processitems li:hover .ico-wrapper > span, .works_carousel.stl-simple .inner-slide .imgprev {background: #f0aa1d; } #buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a {border-top: 2px solid #f0aa1d; } #buddypress form#whats-new-form p.activity-greeting,.widget.buddypress ul.item-list li:hover {background-color: #f0aa1d; } .widget.buddypress div.item-options a.selected ,#buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a ,#buddypress div.activity-meta a ,#buddypress div.activity-meta a:hover,#buddypress .acomment-options a {color: #f0aa1d; } .keywordbox.keywordbox-2, .hg_post_image, .hg_full_image {border-bottom: 5px solid #f0aa1d;} {border-bottom: solid 5px #f0aa1d; } .keywordbox.keywordbox-3 {border-bottom: solid 10px #f0aa1d; } .process_box4 .number:before,.loginbox-popup input[type=submit],.login-panel .login_facebook {background: #f0aa1d; } .statistics-horizontal .v-line {border-bottom: dotted 1px #f0aa1d; } .statistics-vertical::before {border-left: dotted 1px #f0aa1d; } .circle-text-box.style3 .wpk-circle-span,.circle-text-box.style2 .wpk-circle-span::before {background: #f0aa1d; } .circle-text-box:not(.style3) .wpk-circle-span:after {background-color: #f0aa1d; } .circle-text-box .wpk-circle-title,.media-container .media-container__link--style-borderanim2 .media-container__text:hover {color: #f0aa1d; } .services_box--modern .services_box__icon {box-shadow: inset 0 0 0 2px #f0aa1d; } .services_box--modern:hover .services_box__icon {box-shadow: inset 0 0 0 40px #f0aa1d; } .services_box--modern .services_box__fonticon {color: #f0aa1d; } .services_box--modern .services_box__list li:before {box-shadow: 0 0 0 2px #f0aa1d; } .services_box--modern .services_box__list li:hover:before {box-shadow: 0 0 0 3px #f0aa1d; } .kl-has-overlay .img-intro:hover .overlay {box-shadow: inset 0 -8px 0 0 #f0aa1d; } .kl-cta-ribbon, .hg_accordion_element.style3 .th-accordion .acc-group > a:before, .tbk-symbol--line_border .tbk__symbol span, .stl-hoverstyle .cfs--navigation a:hover {background-color: #f0aa1d} .kl-cta-ribbon .trisvg path {fill: #f0aa1d} .logo-container .logo-infocard {background: #f0aa1d} body .kl-ioscaption--style4 .more:before {border-color: #f0aa1d; background: rgba(241,196,15,0.7)} body .kl-ioscaption--style4 .more:hover:before, .cart-container .buttons .button.wc-forward:hover, .logo-container .logo-infocard .left-side, .kl-ios-selectors-block.bullets2 .item.selected::before, .kl-ios-selectors-block.bullets2 .item:hover:before {background: rgba(241,196,15,0.9)} .timeline_box:hover:before {background-color: #f0aa1d} body .kl-ioscaption--style3.s3ext .main_title::before,body .kl-ios-selectors-block.bullets2 .item.selected::before,.iosslider__item .kl-ioscaption--style5 .klios-separator-line span,.btn-fullcolor,.btn-fullcolor:focus,.btn-fullcolor.btn-skewed:before,.cart-container .buttons .button.wc-forward,body .kl-flex--modern .flex-underbar,.tbk--color-theme.tbk-symbol--line .tbk__symbol span,.tbk--color-theme.tbk-symbol--line_border .tbk__symbol span,.ls__nav-item.selected,.site-header.style7 .kl-cart-button .glyphicon:after,.how_to_shop .number,.recentwork_carousel--2 .recentwork_carousel__title:after,.recentwork_carousel_v3 .btn::before,.recentwork_carousel--2 .recentwork_carousel__cat,.recentwork_carousel_v2 .recentwork_carousel__plus,.recentwork_carousel_v3 .recentwork_carousel__cat,.pricing-table-element .plan-column.featured .subscription-price .inner-cell,.shop-latest .tabbable .nav li.active a:before,.product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a,.latest_posts.style2 ul.posts .details span.date,.eBlog .related-articles .rta-post > a:after,.shop-features .shop-feature:hover,.cart-container .buttons .button.wc-forward,.media-container__link--style-borderanim1 > i,.site-header .kl-cart-button .glyphicon:after,.chaser .main-menu li.active > a,.imgboxes_style4 .imgboxes-title:after,.woocommerce a.button,.woocommerce button.button,.woocommerce button.button.alt,.woocommerce input.button,.woocommerce input#button,.woocommerce #review_form #submit {background-color: #f0aa1d; } .borderanim2-svg__shape {stroke: #f0aa1d !important; } .btn-fullcolor.btn-skewed:hover:before,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce button.button.alt:hover,.woocommerce input.button:hover,.woocommerce input#button:hover,.woocommerce #review_form #submit:hover {background-color: #a41a1b } .site-header.style8 .kl-main-header,.site-header.style9,.shop-latest .tabbable .nav li.active a:after,.zn_post_image,.zn_full_image,.sidebar .widget .widgettitle:after,.imgboxes_style4.kl-title_style_bottom .imgboxes-border-helper,.imgboxes_style4.kl-title_style_bottom:hover .imgboxes-border-helper,.statistic-box__line, .read-more-link:hover {border-bottom-color: #f0aa1d} .fake-loading:after {border: 2px solid rgba(241,196,15,0.15); border-top-color: #f0aa1d; border-right-color: #f0aa1d; } .latest_posts.style2 ul.posts .details span.date:after {border-top-color: #f0aa1d; } .eluidf3608cd8 .kl-bg-source__overlay {background: #f0aa1d ; } .kl-iconbox--sh-circle:hover span.kl-iconbox__icon:after, .kl-iconbox--sh-circle:hover span.kl-iconbox__icon, .btn-fullcolor:hover {background: rgba(241,196,15,0.7) } .btn-fullcolor.btn-skewed:hover:before, .section-video-icons .right-side {background-color: rgba(241,196,15,0.7) !important; } .skills_wgt .skill-bar > i {background: #f0aa1d !important;} .works_carousel .inner-slide:hover .imgprev::after {border-bottom: 8px solid #f0aa1d !important;} .site-header.style2 .kl-main-header, .site-header.style3, .site-header.style10 {border-bottom: 3px solid #f0aa1d;} </style>
        <!--end::Layout Skins -->
        {% styles %}
    </head>

    <body class=\"preloader sticky-header {% if currentLang == 'ar'%}rtl{% endif %}\">

    \t<!-- Support Panel -->
    \t<input type=\"checkbox\" id=\"support_p\" class=\"panel-checkbox\">
    \t<div class=\"support_panel\">
    \t\t<div class=\"support-close-inner\">
    \t\t\t<label for=\"support_p\" class=\"spanel-label inner\">
    \t\t\t\t<span class=\"support-panel-close\">×</span>
    \t\t\t</label>
    \t\t</div>
    \t\t<div class=\"container\">
    \t\t\t<div class=\"row\">
    \t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-9\">
    \t\t\t\t\t<!-- Title -->
    \t\t\t\t\t<h4 class=\"m_title mb-20\">
    \t\t\t\t\t\t{{'HOW TO ORDER'|__}}
    \t\t\t\t\t</h4>

    \t\t\t\t\t<!-- Content - how to shop steps -->
    \t\t\t\t\t<div class=\"m_content how_to_shop\">
    \t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">1</span> {{'Login or create new account'|__}}.
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->

    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">2</span> {{'Place your shipment request'|__}}.
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->

    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">3</span> {{'Other steps on us'|__}}.
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<!--/ row -->

    \t\t\t\t\t\t<p>
    \t\t\t\t\t\t\t{{'If you still have problems, please let us know, by sending an email to'|__}} {{settings.company.primary_email}} . {{'Thank you!'|__}}
    \t\t\t\t\t\t</p>
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ Content - how to shop steps -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ col-sm-12 col-md-12 col-lg-9 -->

    \t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-3\">
    \t\t\t\t\t<!-- Title -->
    \t\t\t\t\t<h4 class=\"m_title mb-20\">
    \t\t\t\t\t\t{{'Contact Us'|__}}
    \t\t\t\t\t</h4>

    \t\t\t\t\t<!-- Content -->
    \t\t\t\t\t<div class=\"m_content\">
    \t\t\t\t\t\t{{settings.company.company_phone}}<br />
    \t\t\t\t\t\t{{settings.company.address}}
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ Content -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ col-sm-12 col-md-12 col-lg-3 -->
    \t\t\t</div>
    \t\t\t<!--/ row -->
    \t\t</div>
    \t\t<!--/ container -->
    \t</div>
    \t<!--/ Support Panel -->


    \t<!-- Page Wrapper -->
    \t<div id=\"page_wrapper\">
    \t\t<!-- Header style 1 -->
    \t\t<header id=\"header\" class=\"site-header cta_button bg-white\" data-header-style=\"1\">
    \t\t\t<!-- Header background -->
<!--    \t\t\t<div class=\"kl-header-bg\"></div>-->
    \t\t\t<!--/ Header background -->

    \t\t\t<!-- Header wrapper -->
    \t\t\t<div class=\"site-header-wrapper\">
    \t\t\t\t<!-- Header Top wrapper -->
<!--    \t\t\t\t<div class=\"site-header-top-wrapper\">-->
<!--    \t\t\t\t\t&lt;!&ndash; Header Top container &ndash;&gt;-->
<!--    \t\t\t\t\t<div class=\"siteheader-container container\">-->
<!--    \t\t\t\t\t\t&lt;!&ndash; Header Top &ndash;&gt;-->
<!--    \t\t\t\t\t\t<div class=\"site-header-row site-header-top d-flex flex-row\">-->
<!--    \t\t\t\t\t\t\t&lt;!&ndash; Header Top Left Side &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t<div class=\"site-header-top-left w-md-60 w-50 d-flex justify-content-start\">-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Header Top Social links &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<ul class=\"topnav social-icons sc&#45;&#45;clean align-self-center\">-->
<!--                                        {% if settings.company.facebook %}-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.facebook }}\" target=\"_self\" title=\"{{'Facebook'|__}}\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        {% endif %}-->
<!--                                        {% if settings.company.twitter %}-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.twitter }}\" target=\"_self\" title=\"{{'Twitter'|__}}\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        {% endif %}-->
<!--                                        {% if settings.company.instagram %}-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.instagram }}\" target=\"_self\" title=\"{{'Instagram'|__}}\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        {% endif %}-->
<!--    \t\t\t\t\t\t\t\t</ul>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Header Top Social links &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t\t<div class=\"clearfix visible-xxs\">-->
<!--    \t\t\t\t\t\t\t\t</div>-->

<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Top Header contact text &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<div class=\"kl-header-toptext align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">{{'QUESTIONS? CALL'|__}}: </span>-->
<!--    \t\t\t\t\t\t\t\t\t<i class=\"phone-header fas fa-phone ml-5 visible-xs visible-sm visible-md\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t<a href=\"tel:{{ settings.company.company_phone }}\" class=\"fw-bold\">{{ settings.company.company_phone }}</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Top Header contact text &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t&lt;!&ndash;/ .site-header-top-left &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t&lt;!&ndash; Header Top Right Side &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t<div class=\"site-header-top-right w-md-40 w-50 d-flex justify-content-end\">-->
<!--                                    {% if locales %}-->
<!--        \t\t\t\t\t\t\t\t&lt;!&ndash; Languages &ndash;&gt;-->
<!--        \t\t\t\t\t\t\t\t<div class=\"topnav topnav&#45;&#45;lang align-self-center\">-->
<!--        \t\t\t\t\t\t\t\t\t<div class=\"languages drop\">-->
<!--        \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"topnav-item\">-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-globe xs-icon\"></span>-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">{{'LANGUAGES'|__}}</span>-->
<!--        \t\t\t\t\t\t\t\t\t\t</a>-->
<!--        \t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">-->
<!--                                                        {% for code, name in locales %}-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item {% if activeLocale == code %}active{% endif %}\">-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"locale\" rel=\"{{code}}\">-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/{{code}}.svg\" alt=\"{{name}}\" class=\"toplang-flag\"> {{name|capitalize}}-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t</a>-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t</li>-->
<!--                                                        {% endfor %}-->
<!--        \t\t\t\t\t\t\t\t\t\t\t</ul>-->
<!--        \t\t\t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t&lt;!&ndash;/ Languages &ndash;&gt;-->
<!--                                    {% endif %}-->

<!--    \t\t\t\t\t\t\t\t<div class=\"topnav support&#45;&#45;panel align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t&lt;!&ndash; Support panel trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t<label for=\"support_p\" class=\"topnav-item spanel-label\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info-circle support-info\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">{{'SUPPORT'|__}}</span>-->
<!--    \t\t\t\t\t\t\t\t\t</label>-->
<!--    \t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Support panel trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t</div>-->

<!--                                    {% if user %}-->
<!--                                    <div class=\"topnav topnav&#45;&#45;lang align-self-center\">-->
<!--                                        <div class=\"languages drop\">-->
<!--                                            <a href=\"javascript:;\" class=\"topnav-item\">-->
<!--                                                <span class=\"fas far fa-user-circle xs-icon\"></span>-->
<!--                                                <span class=\"topnav-item&#45;&#45;text\">{{'ACCOUNT'|__}}</span>-->
<!--                                            </a>-->
<!--                                            <div class=\"pPanel\">-->
<!--                                                <ul class=\"inner\">-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"{{'dashboard/dashboard'|page}}\">-->
<!--                                                            <img src=\"./front/images/set-03-01.svg\" alt=\"{{'Dashboard'|__}}\" class=\"toplang-flag\"> {{'Dashboard'|__}}-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"{{'dashboard/profile'|page}}\">-->
<!--                                                            <img src=\"./front/images/set-03-04.svg\" alt=\"{{'Profile'|__}}\" class=\"toplang-flag\"> {{'Profile'|__}}-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">-->
<!--                                                            <img src=\"./front/images/set-03-03.svg\" alt=\"{{'Logout'|__}}\" class=\"toplang-flag\"> {{'Logout'|__}}-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    {% else %}-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Login trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<div class=\"topnav login&#45;&#45;panel align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t<a class=\"topnav-item popup-with-form\" href=\"#login_panel\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<i class=\"login-icon fas fa-sign-in-alt visible-xs xs-icon\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">{{'LOGIN'|__}}</span>-->
<!--    \t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Login trigger &ndash;&gt;-->
<!--                                    {% endif %}-->
<!--    \t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t&lt;!&ndash;/ .site-header-top-right &ndash;&gt;-->
<!--    \t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t&lt;!&ndash;/ .site-header-row .site-header-top &ndash;&gt;-->

<!--    \t\t\t\t\t\t&lt;!&ndash; Header separator &ndash;&gt;-->
<!--    \t\t\t\t\t\t<div class=\"separator site-header-separator\"></div>-->
<!--    \t\t\t\t\t\t&lt;!&ndash;/ Header separator &ndash;&gt;-->
<!--    \t\t\t\t\t</div>-->
<!--    \t\t\t\t\t&lt;!&ndash;/ .siteheader-container .container &ndash;&gt;-->
<!--    \t\t\t\t</div>-->
    \t\t\t\t<!--/ Header Top wrapper -->

    \t\t\t\t<!-- Header Main wrapper -->
    \t\t\t\t<div class=\"site-header-main-wrapper d-flex py-2\">
    \t\t\t\t\t<!-- Header Main container -->
    \t\t\t\t\t<div class=\"siteheader-container container align-self-center\">
    \t\t\t\t\t\t<!-- Header Main -->
    \t\t\t\t\t\t<div class=\"site-header-row site-header-main d-flex flex-row justify-content-between\">
    \t\t\t\t\t\t\t<!-- Header Main Left Side -->
    \t\t\t\t\t\t\t<div class=\"site-header-main-left d-flex justify-content-start align-items-center\">
    \t\t\t\t\t\t\t\t<!-- Logo container-->
    \t\t\t\t\t\t\t\t<div class=\"logo-container hasInfoCard logosize--yes\">
    \t\t\t\t\t\t\t\t\t<!-- Logo -->
    \t\t\t\t\t\t\t\t\t<h1 class=\"site-logo logo\" id=\"logo\">
    \t\t\t\t\t\t\t\t\t\t<a href=\"{{url('/'~currentLang)}}\" title=\"\">
    \t\t\t\t\t\t\t\t\t\t\t<img src=\"{% if settings.mobile_logo %}{{ settings.mobile_logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\" class=\"logo-img\" alt=\"{{ settings.company.title|__ }}\" title=\"{{ settings.company.title|__ }}\" />
    \t\t\t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t\t\t</h1>
    \t\t\t\t\t\t\t\t\t<!--/ Logo -->

    \t\t\t\t\t\t\t\t\t<!-- InfoCard -->
<!--    \t\t\t\t\t\t\t\t\t<div id=\"infocard\" class=\"logo-infocard\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<div class=\"custom\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 left-side d-flex\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"infocard-wrapper text-center\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{% if settings.favicon %}{{ settings.favicon.thumb(72,72) }}{% else %}./admin/media/logos/logo.svg{% endif %}\" class=\"mb-25\" alt=\"{ settings.company.title|__ }}\" title=\"{ settings.company.title|__ }}\" />-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ settings.company.description|__ }}.-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ infocard-wrapper &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ .align-self-center &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ col-sm-6 left-side d-flex &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 right-side\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom contact-details\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ settings.company.contact_phone }} <br>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ settings.company.address }} <br>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:{{ settings.company.primary_email }}\">{{ settings.company.primary_email }}</a>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:20px;\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash; Social links clean style &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-icons sc&#45;&#45;clean\">-->
<!--                                                            {% if settings.company.twitter %}-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ settings.company.twitter }}\" target=\"_blank\" class=\"fab fa-twitter\" title=\"Twitter\"></a></li>-->
<!--                                                            {% endif %}-->
<!--                                                            {% if settings.company.facebook %}-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ settings.company.facebook }}\" target=\"_blank\" class=\"fab fa-facebook-f\" title=\"Facebook\"></a></li>-->
<!--                                                            {% endif %}-->
<!--                                                            {% if settings.company.instagram %}-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ settings.company.instagram }}\" target=\"_blank\" class=\"fab fa-instagram\" title=\"Instagram\"></a></li>-->
<!--                                                            {% endif %}-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</ul>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Social links clean style &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ col-sm-6 right-side &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ row &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ custom &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t</div>-->
    \t\t\t\t\t\t\t\t\t<!--/ InfoCard -->
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<!--/ logo container-->

    \t\t\t\t\t\t\t\t<!-- Separator -->
    \t\t\t\t\t\t\t\t<div class=\"separator visible-xxs\"></div>
    \t\t\t\t\t\t\t\t<!--/ Separator -->
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ .site-header-main-left -->

    \t\t\t\t\t\t\t<!-- Header Main Center Side -->
    \t\t\t\t\t\t\t<div class=\"site-header-main-center d-flex justify-content-center align-items-center\">
    \t\t\t\t\t\t\t\t<!-- Main Menu wrapper -->
    \t\t\t\t\t\t\t\t<div class=\"main-menu-wrapper\">
    \t\t\t\t\t\t\t\t\t<!-- Responsive menu trigger -->
    \t\t\t\t\t\t\t\t\t<div id=\"zn-res-menuwrapper\">
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"zn-res-trigger \"></a>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<!--/ responsive menu trigger -->

    \t\t\t\t\t\t\t\t\t<!-- Main menu -->
                            \t\t\t{% if mainMenu.menuItems %}
        \t\t\t\t\t\t\t\t\t<div id=\"main-menu\" class=\"main-nav zn_mega_wrapper\">
        \t\t\t\t\t\t\t\t\t\t<ul id=\"menu-main-menu\" class=\"main-menu zn_mega_menu\">
                                                    {% for item in mainMenu.menuItems if not item.viewBag.isHidden %}
                                                        {% if user.hasUserPermission(item.code, 'r') or item.code is empty %}
                \t\t\t\t\t\t\t\t\t\t\t<li class=\"{% if item.items %}menu-item-has-children{% endif %} {{ item.isActive or item.isChildActive ? 'active' : '' }}\">
                                                                <a href=\"{% if item.url %}{{ item.url }}{% else %}#{% endif %}\"  {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>{{ item.title|__ }}</a>
                                                                {% if item.items %}
                    \t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu clearfix\">
                                                                        {% for item in item.items if not item.viewBag.isHidden %}
                                                                            {% if user.hasUserPermission(item.code, 'r') or item.code is empty %}
                            \t\t\t\t\t\t\t\t\t\t\t\t\t<li>
                                                                                    <a href=\"{% if item.url %}{{ item.url }}{% else %}#{% endif %}\">{{ item.title|__ }}</a>
                                                                                    {% if item.items %}
                                \t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu clearfix\">
                                                                                            {% for item in item.items if not item.viewBag.isHidden %}
                                                                                                {% if user.hasUserPermission(item.code, 'r') or item.code is empty %}
                                        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{% if item.url %}{{ item.url }}{% else %}#{% endif %}\">{{ item.title|__ }}</a></li>
                                                                                                {% endif %}
                                                                                            {% endfor %}
                                \t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                                    {% endif %}
                            \t\t\t\t\t\t\t\t\t\t\t\t\t</li>
                                                                            {% endif %}
                                                                        {% endfor %}
                    \t\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                {% endif %}
                \t\t\t\t\t\t\t\t\t\t\t</li>
                                                        {% endif %}
                                                    {% endfor %}
        \t\t\t\t\t\t\t\t\t\t</ul>
        \t\t\t\t\t\t\t\t\t</div>
                                        {% endif %}<!--/ Main menu -->
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<!--/ .main-menu-wrapper -->
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ .site-header-main-center -->

    \t\t\t\t\t\t\t<!-- Header Main Right Side -->
    \t\t\t\t\t\t\t<div class=\"site-header-main-right d-flex justify-content-end align-items-center\">
    \t\t\t\t\t\t\t\t<!-- Call to action ribbon Free Quote (Contact form pop-up element) -->
<!--    \t\t\t\t\t\t\t\t<div class=\"quote-ribbon\">-->
<!--    \t\t\t\t\t\t\t\t\t<a href=\"#contact_panel\" id=\"ctabutton\" class=\"ctabutton kl-cta-ribbon\" title=\"GET A FREE QUOTE\" target=\"_self\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<strong>{{'TRACK'|__}}</strong>{{'package'|__}}-->
<!--    \t\t\t\t\t\t\t\t\t\t<svg version=\"1.1\" class=\"trisvg\"  xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" preserveaspectratio=\"none\" width=\"14px\" height=\"5px\" viewbox=\"0 0 14 5\" enable-background=\"new 0 0 14 5\" xml:space=\"preserve\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<polygon fill-rule=\"nonzero\" points=\"14 0 7 5 0 0\"></polygon>-->
<!--    \t\t\t\t\t\t\t\t\t\t</svg>-->
<!--    \t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
    \t\t\t\t\t\t\t\t<!--/ Call to action ribbon Free Quote (Contact form pop-up element) -->

\t\t\t\t\t\t\t\t\t{% if locales %}
\t\t\t\t\t\t\t\t\t<!-- Languages -->
\t\t\t\t\t\t\t\t\t<div class=\"topnav topnav--lang align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"languages drop\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"topnav-item d-inline-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-globe xs-icon\"></span>
<!--\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text d-none\">{{'LANGUAGES'|__}}</span>-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--image ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/en.svg\" alt=\"English\" class=\"toplang-flag\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for code, name in locales %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item {% if activeLocale == code %}active{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"locale\" rel=\"{{code}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/{{code}}.svg\" alt=\"{{name}}\" class=\"toplang-flag\"> {{name|capitalize}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Languages -->
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t{% if user %}
\t\t\t\t\t\t\t\t\t<div class=\"topnav topnav--lang topnav-account-login topnav-account align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"languages drop\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"topnav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas far fa-user-circle xs-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--text\">{{'ACCOUNT'|__}}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{'dashboard/dashboard'|page}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-01.svg\" alt=\"{{'Dashboard'|__}}\" class=\"toplang-flag\"> {{'Dashboard'|__}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{'dashboard/profile'|page}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-04.svg\" alt=\"{{'Profile'|__}}\" class=\"toplang-flag\"> {{'Profile'|__}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-03.svg\" alt=\"{{'Logout'|__}}\" class=\"toplang-flag\"> {{'Logout'|__}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<!-- Login trigger -->
\t\t\t\t\t\t\t\t\t<div class=\"topnav login--panel topnav-account-login topnav-login align-self-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"topnav-item popup-with-form\" href=\"#login_panel\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"login-icon fas fa-sign-in-alt visible-xs xs-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--text\">{{'LOGIN'|__}}</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Login trigger -->
\t\t\t\t\t\t\t\t\t{% endif %}

    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ .site-header-main-right -->
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<!--/ .site-header-row .site-header-main -->
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ .siteheader-container .container -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ Header Main wrapper -->
    \t\t\t</div>
    \t\t\t<!--/ Header wrapper -->
    \t\t</header>
    \t\t<!-- / Header style 1 -->

            {% page %}

            <footer id=\"footer\" data-footer-style=\"4\">
            \t<div class=\"container contact-details\">
            \t\t<div class=\"row\">
            \t\t\t<div class=\"row w-100 d-flex justify-content-between\">

\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
<!--\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">-->
<!--\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Download<br>-->
<!--\t\t\t\t\t\t\t\t\t\t\tApp</h4>-->
<!--\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap\">
                                        <div>
                                            <a href=\"{{url('/')}}\">
                                                <img src=\"{% if settings.mobile_logo %}{{ settings.mobile_logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\" alt=\"{{ settings.company.title|__ }}\" class=\"footer-logo\" title=\"{{ settings.company.title|__ }}\" />
                                            </a>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut quis nostrud exercitation commodo consequat.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                            </div>

            \t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Quick<br>Links</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap d-flex flex-column\">
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>About</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Shippers</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Carriers</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Careers</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Legal Section</span>
                                        </a>
                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">
                                            <span>Contact</span>
                                        </a>
                                    </div>
\t\t\t\t\t\t\t\t</div>

            \t\t\t\t</div>

            \t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Contact<br>Info</h4>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"footer-detail-wrap d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t<!--                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">-->
\t<!--                                            <i class=\"glyphicon glyphicon-flag icon-size-xxs\"></i>-->
\t<!--                                            <span>{{ settings.company.address }}</span>-->
\t<!--                                        </a>-->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:{{ settings.company.primary_email }}\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ settings.company.primary_email }}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:{{ settings.company.company_phone }}\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ settings.company.company_phone }}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:{{ settings.company.company_phone_2 }}\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ settings.company.company_phone_2 }}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:{{ settings.company.company_phone_3 }}\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ settings.company.company_phone_3 }}</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elm-socialicons m-auto \">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"elm-social-icons sc--colored sh--rounded clearfix mt-3 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if settings.company.facebook %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.facebook }}\" class=\"elm-sc-icon elm-sc-icon-0 fab fa-facebook-f bg-icon\" target=\"_self\" title=\"Facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if settings.company.twitter %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.twitter }}\" class=\"elm-sc-icon elm-sc-icon-1 fab fa-twitter bg-icon\" target=\"_self\" title=\"Twitter\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if settings.company.instagram %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.instagram }}\" class=\"elm-sc-icon elm-sc-icon-2 fab fa-instagram bg-icon\" target=\"_self\" title=\"Instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!--/ Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

                                </div>
            \t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Download<br>App</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap\">
                                        <div class=\"download-app-wrap d-flex justify-content-around\">
                                            <span>
                                                Google Play
                                            </span>
                                            <span>
                                                App Store
                                            </span>
                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
            \t\t\t</div>

            \t\t\t<!--/ col-sm-offset-2 col-md-8 col-sm-8 -->
            \t\t</div>
            \t\t<!--/ row -->

            \t\t<div class=\"row\">
            \t\t\t<div class=\"col-sm-12 footer-area--bottom\"></div>

            \t\t\t<!-- Left side Copyright -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6 d-flex justify-content-start\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
            \t\t\t\t\t<p>© {{'now'|date('Y')}} <span class=\"font-weight-bold brand_title\">{{ settings.company.title|__ }}</span> {{'All rights reserved'|__}}.</p>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<!--/ Left side Copyright -->

            \t\t\t<!-- Right side -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
            \t\t\t\t<div class=\"d-block text-right\">{{'Powered By'|__}} &nbsp;<a href=\"https://ivylabtech.com\" target=\"_blank\" class=\"refer_title\">IvyLab Technologies</a>.
\t\t\t\t\t\t\t\t<!--                                {{'Developed By'|__}} &nbsp;<a href=\"https://ivylabtech.com\" target=\"_blank\">{{'Spotlayer'|__}}</a>.--></div>
            \t\t\t</div>
            \t\t\t<!--/ Right side -->
            \t\t</div>
            \t\t<!--/ row -->
            \t</div>
            \t<!--/ container -->
            </footer>
    \t</div>
    \t<!--/ Page Wrapper -->


    \t<!-- Login Panel content -->
    \t<div id=\"login_panel\" class=\"mfp-hide loginbox-popup auth-popup\">
    \t\t<div class=\"inner-container login-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title tcolor\">
    \t\t\t\t{{'SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES'|__}}
    \t\t\t</h3>

    \t\t\t<form class=\"login_panel\" name=\"login_panel\" method=\"get\" action=\"{{url('login')}}\">
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"text\" id=\"userSigninLogin\" name=\"login\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"{{'eg'|__}}: james_smith\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t{{ loginAttributeLabel|__ }}
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"userSigninPassword\" name=\"password\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"{{'type password'|__}}\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t{{'Password'|__}}
    \t\t\t\t\t</label>
    \t\t\t\t</div>

                    {% if rememberLoginMode == 'ask' %}
        \t\t\t\t<label class=\"auth-popup-remember\" for=\"kl-rememberme\">
                            <input name=\"remember\" type=\"checkbox\" value=\"1\" id=\"kl-rememberme\" class=\"auth-popup-remember-chb\"> {{'Remember me'|__}}
        \t\t\t\t</label>
                    {% endif %}

    \t\t\t\t<input type=\"submit\" name=\"submit_button\" class=\"btn zn_sub_button btn-fullcolor btn-md\" value=\"{{'Sign In'|__}}\">

    \t\t\t\t<div class=\"links auth-popup-links\">
                        {% if canRegister %}
\t\t\t\t\t\t\t<a href=\"#register_panel\" class=\"create_account auth-popup-createacc kl-login-box auth-popup-link\">
\t\t\t\t\t\t\t\t{{'CREATE AN ACCOUNT'|__}}
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"sep auth-popup-sep\"></span>
                        {% endif %}
    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t\t<button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
        {% if canRegister %}
    \t<div id=\"register_panel\" class=\"mfp-hide loginbox-popup auth-popup\">
    \t\t<div class=\"inner-container register-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title\">
    \t\t\t\t{{\"CREATE ACCOUNT\"|__}}
    \t\t\t</h3>

    \t\t\t<form class=\"register_panel\" name=\"register_panel\" method=\"post\" action=\"#\">
    \t\t\t\t<div class=\" kl-fancy-form \">
    \t\t\t\t\t<input type=\"text\" id=\"registerName\" name=\"name\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"{{'type your name'|__}}\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">{{\"FULL NAME\"|__}}</label>
    \t\t\t\t</div>
                    {% if loginAttribute == \"username\" %}
    \t\t\t\t<div class=\" kl-fancy-form \">
    \t\t\t\t\t<input type=\"text\" id=\"registerUsername\" name=\"username\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"{{'type desired username'|__}}\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">{{\"USERNAME\"|__}}</label>
    \t\t\t\t</div>
                    {% endif %}

    \t\t\t\t<div class=\"kl-fancy-form\">
    \t\t\t\t\t<input type=\"text\" id=\"registerEmail\" name=\"email\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"your-email@website.com\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t{{'EMAIL'|__}}
    \t\t\t\t\t</label>
    \t\t\t\t</div
    \t\t\t\t>
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"registerPassword\" name=\"password\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"*****\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t{{'PASSWORD'|__}}
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\"kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"rpassword\" name=\"rpassword\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"*****\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t{{'CONFIRM PASSWORD'|__}}
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<label class=\"auth-popup-remember\" for=\"agreement\">
                        <input name=\"agree\" type=\"checkbox\" value=\"1\" id=\"agreement\" class=\"auth-popup-remember-chb\" required> {{'I Agree the'|__}} <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">{{'terms and conditions'|__}}</a>
    \t\t\t\t</label>

    \t\t\t\t<div class=\"\">
    \t\t\t\t\t<input type=\"submit\" id=\"signup\" name=\"submit\" class=\"btn zn_sub_button btn-block btn-fullcolor btn-md\" value=\"{{'CREATE MY ACCOUNT'|__}}\">
    \t\t\t\t</div>

    \t\t\t\t<div class=\"links auth-popup-links\">
    \t\t\t\t\t<a href=\"#login_panel\" class=\"kl-login-box auth-popup-link\">
    \t\t\t\t\t\t{{'ALREADY HAVE AN ACCOUNT?'|__}}
    \t\t\t\t\t</a>
    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t</div>
        {% endif %}
    \t<div id=\"forgot_panel\" class=\"mfp-hide loginbox-popup auth-popup forgot-popup\">
    \t\t<div class=\"inner-container forgot-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title\">
    \t\t\t\t{{'FORGOT YOUR PASSWORD?'|__}}
    \t\t\t</h3>

    \t\t\t<form class=\"forgot_form\" data-request=\"{{ __SELF__ }}::onRestorePassword\" data-request-update=\"'{{ __SELF__ }}::reset': '#partialUserResetForm'\">
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"email\" id=\"userRestoreEmail\" name=\"email\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"...\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t{{\"EMAIL\"|__}}
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\"\">
    \t\t\t\t\t<input type=\"submit\" id=\"kt_login_forgot_submit\" name=\"submit\" class=\"btn btn-block zn_sub_button btn-fullcolor btn-md\" value=\"{{'SEND MY DETAILS!'|__}}\">
    \t\t\t\t</div>

    \t\t\t\t<div class=\"links auth-popup-links\">
    \t\t\t\t\t<a href=\"#login_panel\" class=\"kl-login-box auth-popup-link\">
    \t\t\t\t\t\t{{'AAH, WAIT, I REMEMBER NOW!'|__}}
    \t\t\t\t\t</a>
    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t\t<button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
    \t<!--/ Login Panel content -->

    \t<!-- Contact form pop-up element content -->
    \t<div id=\"contact_panel\" class=\"mfp-hide contact-popup\">
    \t\t<div class=\"contact-popup-panel\">
    \t\t\t<div class=\"container-fluid\">
    \t\t\t\t<div class=\"row\">
    \t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
    \t\t\t\t\t\t<!-- Contact form pop-up element -->
    \t\t\t\t\t\t<div class=\"contactForm pop-up-form\">

    \t\t\t\t\t\t\t<!-- Title -->
    \t\t\t\t\t\t\t<h3 class=\"m_title m_title_ext text-custom contact-popup-title tcolor\">
    \t\t\t\t\t\t\t\t{{'TRACK A PACKAGE'|__}}
    \t\t\t\t\t\t\t</h3>
    \t\t\t\t\t\t\t<h4 class=\"tbk__subtitle fw-thin\">
    \t\t\t\t\t\t\t\t{{\"Just type the tracking code and we'll do everything\"|__}}!
    \t\t\t\t\t\t\t</h4>

    \t\t\t\t\t\t\t<form action=\"{{url('tracking')}}\" method=\"get\" class=\"contact_form row mt-40\">
                                    {{form_token()}}
                                    {{form_sessionKey()}}
    \t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
    \t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"number\" id=\"cf_name-pop-up\" class=\"form-control\" placeholder=\"{{'Please enter a valid tracking number'|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
    \t\t\t\t\t\t\t\t\t<label class=\"control-label\">
    \t\t\t\t\t\t\t\t\t\t{{'Tracking numbers'|__}}
    \t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t</div>

    \t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t\t\t<!-- Contact form send button -->
    \t\t\t\t\t\t\t\t\t<button class=\"btn btn-fullcolor\" type=\"submit\">
    \t\t\t\t\t\t\t\t\t\t{{'Track'|__}}
    \t\t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</form>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<!--/ Contact form pop-up element -->
    \t\t\t\t\t</div>
    \t\t\t\t\t<!--/ col-md-12 col-sm-12 -->
    \t\t\t\t</div>
    \t\t\t\t<!--/ .row -->
    \t\t\t</div>
    \t\t\t<!--/ .container -->
    \t\t</div>
    \t\t<!--/ .contact-popup-panel -->
    \t\t<button title=\"{{'Close (Esc)'|__}}\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
    \t<!--/ Contact form pop-up element content -->


    \t<!-- ToTop trigger -->
    \t<a href=\"javascript:void(0);\" id=\"totop\">{{'TOP'|__}}</a>
    \t<!--/ ToTop trigger -->



    \t<!-- JS FILES // These should be loaded in every page -->
    \t<script type=\"text/javascript\" src=\"./front/js/bootstrap.min.js\"></script>
    \t<script type=\"text/javascript\" src=\"./front/js/kl-plugins.js\"></script>

    \t<!-- JS FILES // Loaded on this page -->
    \t<!-- Requried js script for Slideshow Scroll effect (uncomment bellow script to activate) -->
    \t<!-- <script type=\"text/javascript\" src=\"./front/js/plugins/scrollme/jquery.scrollme.js\"></script> -->

    \t<!-- Required js script for iOS Slider element -->
    \t<script type=\"text/javascript\" src=\"./front/js/plugins/_sliders/ios/jquery.iosslider.min.js\"></script>

    \t<!-- Required js trigger script file for iOS Slider element -->
    \t<script type=\"text/javascript\" src=\"./front/js/trigger/slider/ios/kl-ios-slider.js\"></script>

    \t<!-- Slick required js script for Partners Carousel element -->
    \t<script type=\"text/javascript\" src=\"./front/js/plugins/_sliders/slick/slick.js\"></script>

    \t<!-- Required js trigger script file for Partners Carousel element -->
    \t<script type=\"text/javascript\" src=\"./front/js/trigger/kl-slick-slider.js\"></script>

    \t<!-- Required js trigger for World Map element Popup -->
    \t<script type=\"text/javascript\">
    \t\tvar wmOffices = jQuery('.world-map-offices'),
    \t\t\twmTrig = jQuery('.world-map-triggers'),
    \t\t\twmOffice = wmOffices.children('.world-office'),
    \t\t\twmTriga = wmTrig.find('.office-name'),
    \t\t\tclicked;

    \t\twmOffice.each(function(index, el) {
    \t\t\tvar \$el = jQuery(el);
    \t\t\t\$el.css({
    \t\t\t\ttop: parseInt(\$el.attr('data-fromtop')),
    \t\t\t\tleft: parseInt(\$el.attr('data-fromleft'))
    \t\t\t})
    \t\t\t.on('mouseover', function() {
    \t\t\t\twmTrig.find(\"[data-office='\" + \$el.attr('data-office') + \"']\").addClass('selected');
    \t\t\t})
    \t\t\t.on('mouseout', function() {
    \t\t\t\twmTriga.removeClass('selected');
    \t\t\t});;
    \t\t});

    \t\twmTriga.on('mouseover', function() {
    \t\t\twmOffices.find(\"[data-office='\" + jQuery(this).attr('data-office') + \"']\").addClass('selected');
    \t\t})
    \t\t.on('mouseout', function() {
    \t\t\twmOffice.removeClass('selected');
    \t\t});
    \t</script>


    \t<!-- Custom Kallyas JS codes -->
    \t<script type=\"text/javascript\" src=\"./front/js/kl-scripts.js\"></script>


    \t<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
    \t<script>
    \t  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    \t  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    \t  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    \t  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    \t  ga('create', 'UA-XXXXX-X', 'auto');
    \t  ga('send', 'pageview');
    \t</script>
    \t-->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                \"colors\":{
                    \"state\":{
                        \"brand\":\"#5d78ff\",
                        \"light\":\"#ffffff\",
                        \"dark\":\"#282a3c\",
                        \"primary\":\"#5867dd\",
                        \"success\":\"#34bfa3\",
                        \"info\":\"#36a3f7\",
                        \"warning\":\"#ffb822\",
                        \"danger\":\"#fd3995\"
                    },
                    \"base\":{
                        \"label\":[
                            \"#c5cbe3\",
                            \"#a1a8c3\",
                            \"#3d4465\",
                            \"#3e4466\"
                        ],
                        \"shape\":[
                            \"#f0f3ff\",
                            \"#d9dffa\",
                            \"#afb4d4\",
                            \"#646c9a\"
                        ]
                    }
                },
                \"text\":{
                    'loading' : '{{\"Loading ...\"|__}}'
                },
                \"dateformat\": \"{{settings.dateformat|replace({'d':'dd', 'm':'mm', 'Y':'yyyy'})}}\",
                \"daterangeformat\": \"{{settings.dateformat|replace({'d':'DD', 'm':'MM', 'M':'MMM'})}}\"
            };

        </script>
        <!-- end::Global Config -->

        <!--begin::Page Scripts(used by this page) -->
            {% framework extras %}
            {% scripts %}
            <script type=\"text/javascript\">
                jQuery(document).ready(function() {
                    \$('body').on('click', '.locale', function(e){
                        e.preventDefault();
                        var selected = \$(this).attr('rel');
                        if(selected != ''){
                            \$.request('onSwitchLocale', {
                                data: {locale: selected}
                            });
                        }
                    });


                    // Form Validation & Send Mail code
                    \tif(typeof(\$('#register_panel form')) != 'undefined') {
                    \t\t\$.each(\$('#register_panel form'), function(index, el) {
                    \t\t\tvar cform = \$(el),
                    \t\t\t\tcResponse = \$('<div class=\"cf_response\"></div>');
                    \t\t\tcform.prepend(cResponse);
                    \t\t\tcform.h5Validate();

                    \t\t\tcform.submit(function(e) {
                    \t\t\t\te.preventDefault();
                    \t\t\t\tif(cform.h5Validate('allValid')) {

                                        \$.request('onRegister', {
                                            {% if loginAttribute == \"username\" %}
                                                data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                                            {% else %}
                                                data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                                            {% endif %}
                                            error: function(e,response) {
                                                cform.find('.cf_response').addClass('alert alert-danger error');
                                                cform.find('.cf_response').html(e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                            \t\t\t\t\tcResponse.show();
                                            },
                                            success: function(response, status, xhr, \$form) {
                                                cform.find('.cf_response').addClass('alert alert-success');
                                                {% if (requireActivation and automaticActivation is null) %}
                                                    cform.find('.cf_response').html('{{\"Thank you. To complete your registration please check your email\"|__}}.');
                                \t\t\t\t\tcResponse.show();
                                                 {% else %}
                                                    cform.find('.cf_response').html('{{\"Successfully registered, you are being redirect\"|__}}.');
                                \t\t\t\t\tcResponse.show();
                                                    window.location.href = \"{{'dashboard/dashboard'|page}}\";
                                                {% endif %}
                                            }
                                        });
                    \t\t\t\t}
                    \t\t\t\treturn false;
                    \t\t\t});
                    \t\t});
                    \t}
                    \tif(typeof(\$('.contactForm form, .contactForm.pop-up-form form')) != 'undefined') {
                    \t\t\$.each(\$('.contactForm form, .contactForm.pop-up-form form'), function(index, el) {
                    \t\t\tvar cform = \$(el),
                    \t\t\t\tcResponse = \$('<div class=\"cf_response\"></div>');
                    \t\t\tif(cform.find('.cf_response').length > 0){
                    \t\t\t\tcform.find('.cf_response').remove();
                    \t\t\t}
                    \t\t\tcform.prepend(cResponse);
                    \t\t\tcform.h5Validate();

                    \t\t\tcform.on('click', 'button', function(e) {
                    \t\t\t\te.preventDefault();
                    \t\t\t\tif(cform.h5Validate('allValid')) {
                    \t\t\t\t\tcResponse.hide();
                    \t\t\t\t\tcform.submit();
                    \t\t\t\t}
                    \t\t\t\treturn false;
                    \t\t\t});
                    \t\t});
                    \t}
                    // END Form Validation
                    \$('body').on('click','#agree', function(e){
                        \$( \"#agreement\" ).prop( \"checked\", true );
                    });
                });
            </script>
        <!--end::Page Scripts -->
    </body>
</html>", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/layouts/front.htm", "");
    }
}
