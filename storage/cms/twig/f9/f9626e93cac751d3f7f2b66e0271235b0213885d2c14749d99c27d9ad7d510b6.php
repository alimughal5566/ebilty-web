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

/* C:\xampp\htdocs\ebilty-web/themes/spotlayer/layouts/front.htm */
class __TwigTemplate_96cb6476bd2a9760ee3b01e873417a6f506fa44ca1b813822f96923ba0eb7843 extends \Twig\Template
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
<!--    \t<link rel=\"stylesheet\" href=\"./front/fonts/font-awesome/css/font-awesome.min.css\" type=\"text/css\" media=\"all\">-->
\t\t<link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\"/>

    \t<!-- Required CSS file for IOS Slider element  -->
    \t<link rel=\"stylesheet\" href=\"./front/css/sliders/ios/style.css\" type=\"text/css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>

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
        // line 58
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 59
            echo "            <link href='http://fonts.googleapis.com/css?family=Changa:300,400,500,600,700' rel='stylesheet' type='text/css'>
        ";
        } else {
            // line 61
            echo "
        ";
        }
        // line 63
        echo "        <!--end::Global Theme Styles -->
        <!--begin::Layout Skins(used by all pages) -->
        <style id=\"template-colors\"> a:hover,.cart-container > .widget_shopping_cart_content .checkout,.sc-infopop__btn,.m_title,.smallm_title,.circle_title,.zn_text_box-title--style1,.feature_box .title,.services_box--classic .services_box__title,.latest_posts.default-style .hoverBorder:hover h6,.latest_posts.style2 ul.posts .title,.recentwork_carousel--1 .recentwork_carousel__crsl-title,.acc--default-style .acc-tgg-button,.acc--style3 .acc-tgg-button:after,.screenshot-box .left-side h3.title,.vertical_tabs.kl-style-1 .tabbable .nav>li.active>a,.services_box_element .box .list li,.shop-latest .tabbable .nav li.active a,.product-list-item:hover .details h3,.product-category .product-list-item:hover h3,.eBlog .itemContainer:not(.featured-post) .post_details .catItemAuthor a,.theHoverBorder:hover,.text-custom,.text-custom-hover:hover,.statbox h4 , #bbpress-forums .bbp-topics li.bbp-body .bbp-topic-title > a,.ib2-text-color-light-theme .ib2-info-message:before,.tbk--color-theme.tbk-symbol--icon .tbk__icon,.pricing-table-element .plan-column .plan-title,.process_steps--style2 .process_steps__step-icon,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover,.vertical_tabs.kl-style-2 .tabbable .nav>li.active>a [data-zn_icon]:before,.vertical_tabs.kl-style-2 .tabbable .nav>li>a:hover [data-zn_icon]:before,.services_box--boxed .services_box__fonticon,.services_box--boxed .services_box__list li,.woocommerce ul.product_list_widget li .star-rating,.woocommerce .woocommerce-product-rating .star-rating,body .static-content__infopop .sc-infopop__btn, .hg_accordion_element.style3 .th-accordion .acc-group > a, .grid-ibx__item:hover .grid-ibx__icon, .kl-iconbox__title, .full-portfolio .hg-portfolio-sortable #portfolio-nav li a:hover, .full-portfolio .hg-portfolio-sortable #portfolio-nav li.current a, ul.thumbs.style2 .appreciate::before, .product-list-item:hover .kw-details-title, .kl-store-page ul.products li.product .product-list-item:hover .kw-details-title, .kl-store.widget ul.product_list_widget li .star-rating, .testimonial_slider.quoter-style .testimonialbox .who strong, .hg_accordion_element.default-style .th-accordion .acc-group > button, .team-member .mmb-position, .kl-iconbox.stage:hover .kl-iconbox__icon, .priceListElement-itemPrice, .hg_accordion_element.style2 .th-accordion .acc-group > button, .fun-fact .fun-number, .site-header .kl-header-toptext a, .testimonial_slider__carousel-wrapper .testimonialbox .who strong, .image-boxes__carousel-wrapper .inner-slide:hover a {color: #f0aa1d; } .tcolor, .vertical_tabs .tabbable .nav>li.active>a, .vertical_tabs .tabbable .nav>li>a:hover, .vertical_tabs .tabbable .nav>li.active>a>span, .vertical_tabs .tabbable .nav>li>a:hover>span, .services_boxes_wgt li:hover .kl-icon, .works_carousel.stl-simple .inner-slide:hover a, .works_carousel.stl-simple .inner-slide a:hover, .orange, .blue, .works_carousel .cfs--navigation a:hover::before, .vertical_tabs .tabbable .nav>li>a.active, .vertical_tabs .tabbable .nav>li>a.active>span, .hg_accordion_element.style4 .th-accordion .acc-group a {color: #f0aa1d !important; } .tbg, .photo-wall .pw-item::after, .bg-default, .site-header .kl-cart-button .fas:after, .logo-container .logo-infocard .right-side, .hg_accordion_element.style5 .th-accordion a::before, .image-boxes__carousel-wrapper .inner-slide .imgprev, .hg_accordion_element.style4 > h3, .hg_accordion_element.style3 .th-accordion .acc-group a:before, .keywordbox.keywordbox-4 {background-color: #f0aa1d !important;} .acc--style4,#page-loading:after,.ib2-text-color-light-theme .ib2-info-message:before,.itemThumbnail .overlay__inner a:hover,.acc--style4 .acc-tgg-button .acc-icon, .btn-lined.lined-custom, .hg_accordion_element.style4 .th-accordion {border-color: #f0aa1d; } .btn-lined.lined-custom:hover {border-color: rgba(241,196,15,0.7);} .acc--style3 .acc-tgg-button:hover,.acc--style3 .acc-tgg-button:hover:after,.acc--default-style .acc-tgg-button,.acc--style2 .acc-tgg-button,.acc--style3 .acc-tgg-button,.acc--style4 .acc-tgg-button, .btn-lined.lined-custom {color: #f0aa1d ; } .tabs_style5 > ul.nav > li.active > a, .wgt-title > span, .tabs_style5 > ul.nav > li > a.active {border-bottom: 2px solid #f0aa1d; } header.style1,header.style2 .site-logo a,header.style3 .site-logo a {border-top: 3px solid #f0aa1d; } .tabs_style1 > ul.nav > li.active > a, .tabs_style1 > ul.nav > li > a.active {box-shadow: inset 0 3px 0 #f0aa1d; } .main-nav > ul > li > a:before,.main-nav .zn_mega_container li a:not(.zn_mega_title):before,.social-icons.sc--normal li a:hover,.action_box,body .circlehover,body .kl-flex--classic .zn_general_carousel-arr:hover,body .kl-ioscaption--style1 .more:before,body .kl-ioscaption--style1 .more:after,body .kl-ioscaption--style2 .more,body .nivo-directionNav a:hover,body .th-wowslider a.ws_next:hover,body .th-wowslider a.ws_prev:hover,body .ca-more,body .title_circle,body .title_circle:before,body ul.links li a,.hg-portfolio-sortable #portfolio-nav li a:hover, .hg-portfolio-sortable #portfolio-nav li.current a,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after,.btn-flat ,.zn_limited_offers li:after,.login-panel .login_facebook ,.imgboxes_style1 .hoverBorder h6,.circlehover:before,.kl-cta-ribbon,.newsletter-signup input[type=submit],.recentwork_carousel--1 .recentwork_carousel__bg,.zn-acc--style4 .acc-title,.zn-acc--style3 .acc-tgg-button:before,.process_box .content:before,#bbpress-forums div.bbp-search-form input[type=submit], #bbpress-forums .bbp-submit-wrapper button, #bbpress-forums #bbp-your-profile fieldset.submit button,.bg-custom,.bg-custom-hover:hover,.site-header.style8 .kl-main-header .kl-cta-lined,.site-header.style9 .kl-cta-lined,.latest_posts.default-style.kl-style-2 .lp-title,.latest_posts.default-style.kl-style-2 .post:not(.lp-title) .m_title:after,.latest_posts.default-style .hoverBorder h6,.itemThumbnail .overlay__inner a:hover,.elm-searchbox--normal .elm-searchbox__submit,.elm-searchbox--transparent .elm-searchbox__submit,.itemThumbnail .overlay__inner a:hover,.zn-acc--style4 .acc-tgg-button .acc-icon:before,span.zn_badge_sale,span.zn_badge_sale:after,.zn_limited_offers li:before,.style3 .action_box_inner,.style3 .action_box_inner:before,.action_box.style3:before,.circlehover.style2,.circlehover.style2:before,body .kl-flex--classic .zn_simple_carousel-arr:hover, .main-nav .hg_mega_container li a:not(.zn_mega_title):before {background-color: #f0aa1d; } .breadcrumbs li:after,.ib2-text-color-light-theme .ib2-inner, .breadcrumbs li:after, .breadcrumbs2 li:after, .photogallery-widget .pg-thumb:nth-child(even) .pg-caption::before, .portfolio-item-details.travel li::before {border-left-color: #f0aa1d; } .kl-cta-ribbon .trisvg path,.kl-bottommask .bmask-customfill,.kl-slideshow .kl-loader svg path,.kl-slideshow.kl-loadersvg rect,.kl-diagram circle, .kl-cta-ribbon .trisvg {fill: #f0aa1d; } .how_to_shop .number, .newsletter-signup input[type=submit], .th-map_controls, .hg-portfolio-sortable #portfolio-nav li.current a, .ptcarousel .controls > a:hover, .itemLinks span a:hover, .product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a, .shop-features .shop-feature:hover, .btn-flat, .redbtn, .imgboxes_style1 .hoverBorder h6, .feature_box.style3 .box:hover, .services_box--classic:hover .services_box__icon, services_box_element:hover .box .icon, .latest_posts.default-style .hoverBorder h6, .process_steps--style1 .process_steps__intro, .process_steps--style2 .process_steps__intro, .recentwork_carousel.style2 li a .details .plus, .gobox.ok:before, .gobox.ok:after, .gobox.ok, .recentwork_carousel--1 .recentwork_carousel__bg, .circlehover:before,.kl-ioscaption--style1 .more:before, .kl-ioscaption--style1 .more:after ,.kl-ioscaption--style2 .more {background-color: #f0aa1d; } .hover-box:hover {background-color: #f0aa1d !important;} .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a, .vertical_tabs.kl-style-1 .tabbable .nav >li > a.active {box-shadow: inset -3px 0 0 0 #f0aa1d !important;} .action_box:before, .action_box:after, .site-header.style1, .site-header.style6, .site-header.style4 .site-logo a, .site-header.style5 {border-top-color: #f0aa1d; } .process_steps--style1 .process_steps__intro:after,body .nivo-caption,body .kl-flex--classic .flex-caption,body .th-wowslider .ws-title,.process_box[data-align=left] .content:after,body .ls--laptop .ls__item-caption {border-left-color: #f0aa1d; } .process_box[data-align=right] .content:after, .photogallery-widget .pg-thumb:nth-child(odd) .pg-caption::before {border-right-color: #f0aa1d; } .theHoverBorder:hover {box-shadow: 0 0 0 5px #f0aa1d inset; } .vertical_tabs.kl-style-1 .tabbable .nav>li.active>a {box-shadow: inset -3px 0 0 0 #f0aa1d inset; } .offline-page .containerbox {border-bottom: 5px solid #f0aa1d; } .offline-page .containerbox:after {border-top: 20px solid #f0aa1d; } .site-header.style2 .site-logo a, .site-header.style5, .site-header.style6 .site-logo a {border-top: 3px solid #f0aa1d; } body .kl-ioscaption--style2 .title_big, body .kl-ioscaption--style2 .title_small {border-left: 5px solid #f0aa1d; } body .kl-ioscaption--style2.fromright .title_big, body .kl-ioscaption--style2.fromright .title_small {border-right: 5px solid #f0aa1d ; } #buddypress form#whats-new-form p.activity-greeting:after {border-top-color: #f0aa1d; } #buddypress input[type=submit],#buddypress input[type=button],#buddypress input[type=reset] ,#buddypress .activity-list li.load-more a, .stg-bigblog .bb-title .bb-category, .product-list-item .kw-actions a, .kl-store-page ul.products li.product .product-list-item .kw-actions a, .btn-flat, .kl-store-page a.button, .kl-store-page button.button, .kl-store-page button.button.alt, .kl-store-page input.button, .kl-store-page input#button, .kl-store-page #review_form #submit, .fancy-list li:hover::before, .testimonial_slider.quoter-style .cfs--pagination a.selected, .photogallery-widget .pg-thumb .pg-caption, ul.dash-list li::before, .kl-iconbox--sh-circle span.kl-iconbox__icon, .process-list .processitems li:hover .ico-wrapper > span, .works_carousel.stl-simple .inner-slide .imgprev {background: #f0aa1d; } #buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a {border-top: 2px solid #f0aa1d; } #buddypress form#whats-new-form p.activity-greeting,.widget.buddypress ul.item-list li:hover {background-color: #f0aa1d; } .widget.buddypress div.item-options a.selected ,#buddypress div.item-list-tabs ul li.selected a,#buddypress div.item-list-tabs ul li.current a ,#buddypress div.activity-meta a ,#buddypress div.activity-meta a:hover,#buddypress .acomment-options a {color: #f0aa1d; } .keywordbox.keywordbox-2, .hg_post_image, .hg_full_image {border-bottom: 5px solid #f0aa1d;} {border-bottom: solid 5px #f0aa1d; } .keywordbox.keywordbox-3 {border-bottom: solid 10px #f0aa1d; } .process_box4 .number:before,.loginbox-popup input[type=submit],.login-panel .login_facebook {background: #f0aa1d; } .statistics-horizontal .v-line {border-bottom: dotted 1px #f0aa1d; } .statistics-vertical::before {border-left: dotted 1px #f0aa1d; } .circle-text-box.style3 .wpk-circle-span,.circle-text-box.style2 .wpk-circle-span::before {background: #f0aa1d; } .circle-text-box:not(.style3) .wpk-circle-span:after {background-color: #f0aa1d; } .circle-text-box .wpk-circle-title,.media-container .media-container__link--style-borderanim2 .media-container__text:hover {color: #f0aa1d; } .services_box--modern .services_box__icon {box-shadow: inset 0 0 0 2px #f0aa1d; } .services_box--modern:hover .services_box__icon {box-shadow: inset 0 0 0 40px #f0aa1d; } .services_box--modern .services_box__fonticon {color: #f0aa1d; } .services_box--modern .services_box__list li:before {box-shadow: 0 0 0 2px #f0aa1d; } .services_box--modern .services_box__list li:hover:before {box-shadow: 0 0 0 3px #f0aa1d; } .kl-has-overlay .img-intro:hover .overlay {box-shadow: inset 0 -8px 0 0 #f0aa1d; } .kl-cta-ribbon, .hg_accordion_element.style3 .th-accordion .acc-group > a:before, .tbk-symbol--line_border .tbk__symbol span, .stl-hoverstyle .cfs--navigation a:hover {background-color: #f0aa1d} .kl-cta-ribbon .trisvg path {fill: #f0aa1d} .logo-container .logo-infocard {background: #f0aa1d} body .kl-ioscaption--style4 .more:before {border-color: #f0aa1d; background: rgba(241,196,15,0.7)} body .kl-ioscaption--style4 .more:hover:before, .cart-container .buttons .button.wc-forward:hover, .logo-container .logo-infocard .left-side, .kl-ios-selectors-block.bullets2 .item.selected::before, .kl-ios-selectors-block.bullets2 .item:hover:before {background: rgba(241,196,15,0.9)} .timeline_box:hover:before {background-color: #f0aa1d} body .kl-ioscaption--style3.s3ext .main_title::before,body .kl-ios-selectors-block.bullets2 .item.selected::before,.iosslider__item .kl-ioscaption--style5 .klios-separator-line span,.btn-fullcolor,.btn-fullcolor:focus,.btn-fullcolor.btn-skewed:before,.cart-container .buttons .button.wc-forward,body .kl-flex--modern .flex-underbar,.tbk--color-theme.tbk-symbol--line .tbk__symbol span,.tbk--color-theme.tbk-symbol--line_border .tbk__symbol span,.ls__nav-item.selected,.site-header.style7 .kl-cart-button .glyphicon:after,.how_to_shop .number,.recentwork_carousel--2 .recentwork_carousel__title:after,.recentwork_carousel_v3 .btn::before,.recentwork_carousel--2 .recentwork_carousel__cat,.recentwork_carousel_v2 .recentwork_carousel__plus,.recentwork_carousel_v3 .recentwork_carousel__cat,.pricing-table-element .plan-column.featured .subscription-price .inner-cell,.shop-latest .tabbable .nav li.active a:before,.product-list-item .kw-actions a, .woocommerce ul.products li.product .product-list-item .kw-actions a,.latest_posts.style2 ul.posts .details span.date,.eBlog .related-articles .rta-post > a:after,.shop-features .shop-feature:hover,.cart-container .buttons .button.wc-forward,.media-container__link--style-borderanim1 > i,.site-header .kl-cart-button .glyphicon:after,.chaser .main-menu li.active > a,.imgboxes_style4 .imgboxes-title:after,.woocommerce a.button,.woocommerce button.button,.woocommerce button.button.alt,.woocommerce input.button,.woocommerce input#button,.woocommerce #review_form #submit {background-color: #f0aa1d; } .borderanim2-svg__shape {stroke: #f0aa1d !important; } .btn-fullcolor.btn-skewed:hover:before,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce button.button.alt:hover,.woocommerce input.button:hover,.woocommerce input#button:hover,.woocommerce #review_form #submit:hover {background-color: #a41a1b } .site-header.style8 .kl-main-header,.site-header.style9,.shop-latest .tabbable .nav li.active a:after,.zn_post_image,.zn_full_image,.sidebar .widget .widgettitle:after,.imgboxes_style4.kl-title_style_bottom .imgboxes-border-helper,.imgboxes_style4.kl-title_style_bottom:hover .imgboxes-border-helper,.statistic-box__line, .read-more-link:hover {border-bottom-color: #f0aa1d} .fake-loading:after {border: 2px solid rgba(241,196,15,0.15); border-top-color: #f0aa1d; border-right-color: #f0aa1d; } .latest_posts.style2 ul.posts .details span.date:after {border-top-color: #f0aa1d; } .eluidf3608cd8 .kl-bg-source__overlay {background: #f0aa1d ; } .kl-iconbox--sh-circle:hover span.kl-iconbox__icon:after, .kl-iconbox--sh-circle:hover span.kl-iconbox__icon, .btn-fullcolor:hover {background: rgba(241,196,15,0.7) } .btn-fullcolor.btn-skewed:hover:before, .section-video-icons .right-side {background-color: rgba(241,196,15,0.7) !important; } .skills_wgt .skill-bar > i {background: #f0aa1d !important;} .works_carousel .inner-slide:hover .imgprev::after {border-bottom: 8px solid #f0aa1d !important;} .site-header.style2 .kl-main-header, .site-header.style3, .site-header.style10 {border-bottom: 3px solid #f0aa1d;} </style>
        <!--end::Layout Skins -->
        ";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 68
        echo "    </head>

    <body class=\"preloader sticky-header ";
        // line 70
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
        // line 85
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["HOW TO ORDER"]);
        echo "
    \t\t\t\t\t</h4>

    \t\t\t\t\t<!-- Content - how to shop steps -->
    \t\t\t\t\t<div class=\"m_content how_to_shop\">
    \t\t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">1</span> ";
        // line 92
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login or create new account"]);
        echo ".
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->

    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">2</span> ";
        // line 97
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place your shipment request"]);
        echo ".
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->

    \t\t\t\t\t\t\t<div class=\"col-sm-4\">
    \t\t\t\t\t\t\t\t<span class=\"number\">3</span> ";
        // line 102
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Other steps on us"]);
        echo ".
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<!--/ col-sm-4 -->
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<!--/ row -->

    \t\t\t\t\t\t<p>
    \t\t\t\t\t\t\t";
        // line 109
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you still have problems, please let us know, by sending an email to"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 109), "primary_email", [], "any", false, false, false, 109), "html", null, true);
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
        // line 119
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Contact Us"]);
        echo "
    \t\t\t\t\t</h4>

    \t\t\t\t\t<!-- Content -->
    \t\t\t\t\t<div class=\"m_content\">
    \t\t\t\t\t\t";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 124), "company_phone", [], "any", false, false, false, 124), "html", null, true);
        echo "<br />
    \t\t\t\t\t\t";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 125), "address", [], "any", false, false, false, 125), "html", null, true);
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
        // line 158
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 158), "facebook", [], "any", false, false, false, 158)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 160), "facebook", [], "any", false, false, false, 160), "html", null, true);
            echo "\" target=\"_self\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Facebook"]);
            echo "\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        ";
        }
        // line 164
        echo "-->
<!--                                        ";
        // line 165
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 165), "twitter", [], "any", false, false, false, 165)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 167), "twitter", [], "any", false, false, false, 167), "html", null, true);
            echo "\" target=\"_self\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Twitter"]);
            echo "\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        ";
        }
        // line 171
        echo "-->
<!--                                        ";
        // line 172
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 172), "instagram", [], "any", false, false, false, 172)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t<li>-->
<!--    \t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 174), "instagram", [], "any", false, false, false, 174), "html", null, true);
            echo "\" target=\"_self\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Instagram"]);
            echo "\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t\t</li>-->
<!--                                        ";
        }
        // line 178
        echo "-->
<!--    \t\t\t\t\t\t\t\t</ul>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Header Top Social links &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t\t<div class=\"clearfix visible-xxs\">-->
<!--    \t\t\t\t\t\t\t\t</div>-->

<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Top Header contact text &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<div class=\"kl-header-toptext align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["QUESTIONS? CALL"]);
        echo ": </span>-->
<!--    \t\t\t\t\t\t\t\t\t<i class=\"phone-header fas fa-phone ml-5 visible-xs visible-sm visible-md\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 189), "company_phone", [], "any", false, false, false, 189), "html", null, true);
        echo "\" class=\"fw-bold\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 189), "company_phone", [], "any", false, false, false, 189), "html", null, true);
        echo "</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Top Header contact text &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t&lt;!&ndash;/ .site-header-top-left &ndash;&gt;-->

<!--    \t\t\t\t\t\t\t&lt;!&ndash; Header Top Right Side &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t<div class=\"site-header-top-right w-md-40 w-50 d-flex justify-content-end\">-->
<!--                                    ";
        // line 197
        if (($context["locales"] ?? null)) {
            echo "-->
<!--        \t\t\t\t\t\t\t\t&lt;!&ndash; Languages &ndash;&gt;-->
<!--        \t\t\t\t\t\t\t\t<div class=\"topnav topnav&#45;&#45;lang align-self-center\">-->
<!--        \t\t\t\t\t\t\t\t\t<div class=\"languages drop\">-->
<!--        \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"topnav-item\">-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-globe xs-icon\"></span>-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
            // line 203
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LANGUAGES"]);
            echo "</span>-->
<!--        \t\t\t\t\t\t\t\t\t\t</a>-->
<!--        \t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">-->
<!--        \t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">-->
<!--                                                        ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                echo "-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item ";
                // line 208
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    echo "active";
                }
                echo "\">-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"locale\" rel=\"";
                // line 209
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">-->
<!--            \t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/";
                // line 210
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
            // line 213
            echo "-->
<!--        \t\t\t\t\t\t\t\t\t\t\t</ul>-->
<!--        \t\t\t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t\t\t&lt;!&ndash;/ Languages &ndash;&gt;-->
<!--                                    ";
        }
        // line 219
        echo "-->

<!--    \t\t\t\t\t\t\t\t<div class=\"topnav support&#45;&#45;panel align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t&lt;!&ndash; Support panel trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t<label for=\"support_p\" class=\"topnav-item spanel-label\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-info-circle support-info\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
        // line 225
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SUPPORT"]);
        echo "</span>-->
<!--    \t\t\t\t\t\t\t\t\t</label>-->
<!--    \t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Support panel trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t</div>-->

<!--                                    ";
        // line 230
        if (($context["user"] ?? null)) {
            echo "-->
<!--                                    <div class=\"topnav topnav&#45;&#45;lang align-self-center\">-->
<!--                                        <div class=\"languages drop\">-->
<!--                                            <a href=\"javascript:;\" class=\"topnav-item\">-->
<!--                                                <span class=\"fas far fa-user-circle xs-icon\"></span>-->
<!--                                                <span class=\"topnav-item&#45;&#45;text\">";
            // line 235
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ACCOUNT"]);
            echo "</span>-->
<!--                                            </a>-->
<!--                                            <div class=\"pPanel\">-->
<!--                                                <ul class=\"inner\">-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"";
            // line 240
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/dashboard");
            echo "\">-->
<!--                                                            <img src=\"./front/images/set-03-01.svg\" alt=\"";
            // line 241
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"";
            // line 245
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
            echo "\">-->
<!--                                                            <img src=\"./front/images/set-03-04.svg\" alt=\"";
            // line 246
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                    <li class=\"toplang-item\">-->
<!--                                                        <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">-->
<!--                                                            <img src=\"./front/images/set-03-03.svg\" alt=\"";
            // line 251
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
            // line 258
            echo "-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash; Login trigger &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t<div class=\"topnav login&#45;&#45;panel align-self-center\">-->
<!--    \t\t\t\t\t\t\t\t\t<a class=\"topnav-item popup-with-form\" href=\"#login_panel\">-->
<!--    \t\t\t\t\t\t\t\t\t\t<i class=\"login-icon fas fa-sign-in-alt visible-xs xs-icon\"></i>-->
<!--    \t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text\">";
            // line 263
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LOGIN"]);
            echo "</span>-->
<!--    \t\t\t\t\t\t\t\t\t</a>-->
<!--    \t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t&lt;!&ndash;/ Login trigger &ndash;&gt;-->
<!--                                    ";
        }
        // line 267
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
    \t\t\t\t\t\t\t\t<div class=\"logo-container hasInfoCard logosize--yes navbar navbar-expand-lg\">
    \t\t\t\t\t\t\t\t\t<!-- Logo -->
    \t\t\t\t\t\t\t\t\t<h1 class=\"site-logo logo\" id=\"logo\">
    \t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 293
        echo url(("/" . ($context["currentLang"] ?? null)));
        echo "\" title=\"\">
    \t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 294
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 294)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 294), "path", [], "any", false, false, false, 294), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" class=\"logo-img\" alt=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 294), "title", [], "any", false, false, false, 294)]);
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 294), "title", [], "any", false, false, false, 294)]);
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
        // line 307
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 307)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 307), "thumb", [0 => 72, 1 => 72], "method", false, false, false, 307), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" class=\"mb-25\" alt=\"{ settings.company.title|__ }}\" title=\"{ settings.company.title|__ }}\" />-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 309
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 309), "description", [], "any", false, false, false, 309)]);
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
        // line 321
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 321), "contact_phone", [], "any", false, false, false, 321), "html", null, true);
        echo " <br>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 322), "address", [], "any", false, false, false, 322), "html", null, true);
        echo " <br>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 323
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 323), "primary_email", [], "any", false, false, false, 323), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 323), "primary_email", [], "any", false, false, false, 323), "html", null, true);
        echo "</a>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"height:20px;\">-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t&lt;!&ndash; Social links clean style &ndash;&gt;-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"social-icons sc&#45;&#45;clean\">-->
<!--                                                            ";
        // line 330
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 330), "twitter", [], "any", false, false, false, 330)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 331), "twitter", [], "any", false, false, false, 331), "html", null, true);
            echo "\" target=\"_blank\" class=\"fab fa-twitter\" title=\"Twitter\"></a></li>-->
<!--                                                            ";
        }
        // line 332
        echo "-->
<!--                                                            ";
        // line 333
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 333), "facebook", [], "any", false, false, false, 333)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 334), "facebook", [], "any", false, false, false, 334), "html", null, true);
            echo "\" target=\"_blank\" class=\"fab fa-facebook-f\" title=\"Facebook\"></a></li>-->
<!--                                                            ";
        }
        // line 335
        echo "-->
<!--                                                            ";
        // line 336
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 336), "instagram", [], "any", false, false, false, 336)) {
            echo "-->
<!--    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 337), "instagram", [], "any", false, false, false, 337), "html", null, true);
            echo "\" target=\"_blank\" class=\"fab fa-instagram\" title=\"Instagram\"></a></li>-->
<!--                                                            ";
        }
        // line 338
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
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"zn-res-trigger \">
                                                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
                                            </a>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<!--/ responsive menu trigger -->

    \t\t\t\t\t\t\t\t\t<!-- Main menu -->
                            \t\t\t";
        // line 371
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 371)) {
            // line 372
            echo "        \t\t\t\t\t\t\t\t\t<div id=\"main-menu\" class=\"main-nav zn_mega_wrapper  collapse navbar-collapse\">
        \t\t\t\t\t\t\t\t\t\t<ul id=\"menu-main-menu\" class=\"main-menu zn_mega_menu navbar-nav flex-md-row\">
                                                    ";
            // line 374
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 374));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 374), "isHidden", [], "any", false, false, false, 374)) {
                    // line 375
                    echo "                                                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 375), 1 => "r"], "method", false, false, false, 375) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 375)))) {
                        // line 376
                        echo "                \t\t\t\t\t\t\t\t\t\t\t<li class=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 376)) {
                            echo "menu-item-has-children";
                        }
                        echo " ";
                        echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 376) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 376))) ? ("active") : (""));
                        echo "\">
                                                                <a href=\"";
                        // line 377
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 377)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 377), "html", null, true);
                        } else {
                            echo "#";
                        }
                        echo "\"  ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 377), "isExternal", [], "any", false, false, false, 377)) ? ("target=\"_blank\"") : (""));
                        echo ">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 377)]);
                        echo "</a>
                                                                ";
                        // line 378
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 378)) {
                            // line 379
                            echo "                    \t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu clearfix\">
                                                                        ";
                            // line 380
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 380));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 380), "isHidden", [], "any", false, false, false, 380)) {
                                    // line 381
                                    echo "                                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 381), 1 => "r"], "method", false, false, false, 381) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 381)))) {
                                        // line 382
                                        echo "                            \t\t\t\t\t\t\t\t\t\t\t\t\t<li>
                                                                                    <a href=\"";
                                        // line 383
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 383)) {
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 383), "html", null, true);
                                        } else {
                                            echo "#";
                                        }
                                        echo "\">";
                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 383)]);
                                        echo "</a>
                                                                                    ";
                                        // line 384
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 384)) {
                                            // line 385
                                            echo "                                \t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu clearfix\">
                                                                                            ";
                                            // line 386
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 386));
                                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 386), "isHidden", [], "any", false, false, false, 386)) {
                                                    // line 387
                                                    echo "                                                                                                ";
                                                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 387), 1 => "r"], "method", false, false, false, 387) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 387)))) {
                                                        // line 388
                                                        echo "                                        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 388)) {
                                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 388), "html", null, true);
                                                        } else {
                                                            echo "#";
                                                        }
                                                        echo "\">";
                                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 388)]);
                                                        echo "</a></li>
                                                                                                ";
                                                    }
                                                    // line 390
                                                    echo "                                                                                            ";
                                                }
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 391
                                            echo "                                \t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                                    ";
                                        }
                                        // line 393
                                        echo "                            \t\t\t\t\t\t\t\t\t\t\t\t\t</li>
                                                                            ";
                                    }
                                    // line 395
                                    echo "                                                                        ";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 396
                            echo "                    \t\t\t\t\t\t\t\t\t\t\t\t</ul>
                                                                ";
                        }
                        // line 398
                        echo "                \t\t\t\t\t\t\t\t\t\t\t</li>
                                                        ";
                    }
                    // line 400
                    echo "                                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "        \t\t\t\t\t\t\t\t\t\t</ul>
        \t\t\t\t\t\t\t\t\t</div>
                                        ";
        }
        // line 403
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
        // line 414
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
        // line 422
        if (($context["locales"] ?? null)) {
            // line 423
            echo "\t\t\t\t\t\t\t\t\t<!-- Languages -->
\t\t\t\t\t\t\t\t\t<div class=\"topnav topnav--lang align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"languages drop\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"topnav-item d-inline-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-globe xs-icon\"></i>
<!--\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item&#45;&#45;text d-none\">";
            // line 428
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LANGUAGES"]);
            echo "</span>-->
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--image ml-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/en.svg\" alt=\"English\" class=\"toplang-flag\">
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                // line 436
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item ";
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    echo "active";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"locale\" rel=\"";
                // line 437
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/";
                // line 438
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
            // line 442
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Languages -->
\t\t\t\t\t\t\t\t\t";
        }
        // line 448
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 449
        if (($context["user"] ?? null)) {
            // line 450
            echo "\t\t\t\t\t\t\t\t\t<div class=\"topnav topnav--lang topnav-account-login topnav-account align-self-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"languages drop\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"topnav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas far fa-user-circle xs-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--text\">";
            // line 454
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ACCOUNT"]);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pPanel\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 459
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/dashboard");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-01.svg\" alt=\"";
            // line 460
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 464
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-04.svg\" alt=\"";
            // line 465
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "\" class=\"toplang-flag\"> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile"]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"toplang-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./front/images/set-03-03.svg\" alt=\"";
            // line 470
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
            // line 478
            echo "\t\t\t\t\t\t\t\t\t<!-- Login trigger -->
\t\t\t\t\t\t\t\t\t<div class=\"topnav login--panel topnav-account-login topnav-login align-self-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"topnav-item popup-with-form\" href=\"#login_panel\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"login-icon fas fa-sign-in-alt visible-xs xs-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"topnav-item--text\">";
            // line 482
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LOGIN"]);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Login trigger -->
\t\t\t\t\t\t\t\t\t";
        }
        // line 487
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
        // line 501
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 502
        echo "
            <footer id=\"footer\" data-footer-style=\"4\">
            \t<div class=\"container contact-details\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
<!--\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">-->
<!--\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Download<br>-->
<!--\t\t\t\t\t\t\t\t\t\t\tApp</h4>-->
<!--\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap\">
                                        <div class=\"footer-logo-wrap\">
                                            <a href=\"";
        // line 515
        echo url("/");
        echo "\">
                                                <img src=\"";
        // line 516
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 516)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 516), "path", [], "any", false, false, false, 516), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" alt=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 516), "title", [], "any", false, false, false, 516)]);
        echo "\" class=\"footer-logo\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 516), "title", [], "any", false, false, false, 516)]);
        echo "\" />
                                            </a>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-30 footer-about-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut quis nostrud exercitation commodo consequat.</p>
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
\t\t\t\t\t\t\t\t\t\t<div class=\"contact-info d-flex flex-column\">
\t<!--                                        <a href=\"javascript:void(0);\" target=\"_blank\" class=\"footer-links\">-->
\t<!--                                            <i class=\"glyphicon glyphicon-flag icon-size-xxs\"></i>-->
\t<!--                                            <span>";
        // line 565
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 565), "address", [], "any", false, false, false, 565), "html", null, true);
        echo "</span>-->
\t<!--                                        </a>-->
\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 567
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 567), "primary_email", [], "any", false, false, false, 567), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 569
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 569), "primary_email", [], "any", false, false, false, 569), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 571
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 571), "company_phone", [], "any", false, false, false, 571), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 573
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 573), "company_phone", [], "any", false, false, false, 573), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 575
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 575), "company_phone_2", [], "any", false, false, false, 575), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 577
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 577), "company_phone_2", [], "any", false, false, false, 577), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 579
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 579), "company_phone_3", [], "any", false, false, false, 579), "html", null, true);
        echo "\" target=\"_blank\" class=\"footer-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 581
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 581), "company_phone_3", [], "any", false, false, false, 581), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elm-socialicons mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"elm-social-icons sc--colored sh--circle clearfix mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 588
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 588), "facebook", [], "any", false, false, false, 588)) {
            // line 589
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 590
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 590), "facebook", [], "any", false, false, false, 590), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-0 fab fa-facebook-f bg-icon\" target=\"_self\" title=\"Facebook\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 593
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 593), "twitter", [], "any", false, false, false, 593)) {
            // line 594
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 595
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 595), "twitter", [], "any", false, false, false, 595), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-1 fab fa-twitter bg-icon\" target=\"_self\" title=\"Twitter\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 598
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 598), "instagram", [], "any", false, false, false, 598)) {
            // line 599
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 600
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 600), "instagram", [], "any", false, false, false, 600), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-2 fab fa-instagram bg-icon\" target=\"_self\" title=\"Instagram\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 603
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
                                        <div class=\"download-app-wrap d-flex flex-column\">
                                            <span class=\"app-wrap mb-4\">
                                                <img class=\"\"
                                                     src=\"";
        // line 621
        echo "./front/images/app-google-play.png";
        echo "\" alt=\"Google Play Store\">
                                            </span>
                                            <span class=\"app-wrap mb-4\">
                                                <img class=\"\"
                                                     src=\"";
        // line 625
        echo "./front/images/app-google-play.png";
        echo "\" alt=\"Apple App Store\">
                                            </span>
                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<!--/ col-sm-offset-2 col-md-8 col-sm-8 -->
            \t\t<!--/ row -->

            \t\t<div class=\"row\">
            \t\t\t<div class=\"col-sm-12 footer-area--bottom\"></div>

            \t\t\t<!-- Left side Copyright -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6 d-flex justify-content-start\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
            \t\t\t\t\t<p class=\"mb-0\">© ";
        // line 641
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <span class=\"font-weight-bold brand_title\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 641), "title", [], "any", false, false, false, 641)]);
        echo "</span> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All rights reserved"]);
        echo ".</p>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<!--/ Left side Copyright -->

            \t\t\t<!-- Right side -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
            \t\t\t\t<div class=\"d-block text-right\">";
        // line 648
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Powered By"]);
        echo " &nbsp;<a href=\"https://ivylabtech.com\" target=\"_blank\" class=\"font-weight-bold refer_title\">IvyLab Technologies</a>.
\t\t\t\t\t\t\t\t<!--                                ";
        // line 649
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
        // line 665
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES"]);
        echo "
    \t\t\t</h3>

    \t\t\t<form class=\"login_panel\" name=\"login_panel\" method=\"get\" action=\"";
        // line 668
        echo url("login");
        echo "\">
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"text\" id=\"userSigninLogin\" name=\"login\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
        // line 670
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["eg"]);
        echo ": james_smith\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
        // line 672
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["loginAttributeLabel"] ?? null)]);
        echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"userSigninPassword\" name=\"password\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
        // line 677
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["type password"]);
        echo "\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
        // line 679
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

                    ";
        // line 683
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 684
            echo "        \t\t\t\t<label class=\"auth-popup-remember\" for=\"kl-rememberme\">
                            <input name=\"remember\" type=\"checkbox\" value=\"1\" id=\"kl-rememberme\" class=\"auth-popup-remember-chb\"> ";
            // line 685
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Remember me"]);
            echo "
        \t\t\t\t</label>
                    ";
        }
        // line 688
        echo "
    \t\t\t\t<input type=\"submit\" name=\"submit_button\" class=\"btn zn_sub_button btn-fullcolor btn-md\" value=\"";
        // line 689
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "\">

    \t\t\t\t<div class=\"links auth-popup-links\">
                        ";
        // line 692
        if (($context["canRegister"] ?? null)) {
            // line 693
            echo "\t\t\t\t\t\t\t<a href=\"#register_panel\" class=\"create_account auth-popup-createacc kl-login-box auth-popup-link\">
\t\t\t\t\t\t\t\t";
            // line 694
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CREATE AN ACCOUNT"]);
            echo "
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"sep auth-popup-sep\"></span>
                        ";
        }
        // line 699
        echo "    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t\t<button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
        ";
        // line 704
        if (($context["canRegister"] ?? null)) {
            // line 705
            echo "    \t<div id=\"register_panel\" class=\"mfp-hide loginbox-popup auth-popup\">
    \t\t<div class=\"inner-container register-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title\">
    \t\t\t\t";
            // line 708
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CREATE ACCOUNT"]);
            echo "
    \t\t\t</h3>

    \t\t\t<form class=\"register_panel\" name=\"register_panel\" method=\"post\" action=\"#\">
    \t\t\t\t<div class=\" kl-fancy-form \">
    \t\t\t\t\t<input type=\"text\" id=\"registerName\" name=\"name\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
            // line 713
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["type your name"]);
            echo "\" required>
    \t\t\t\t\t<label for=\"registerName\" class=\"kl-font-alt kl-fancy-form-label\">";
            // line 714
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FULL NAME"]);
            echo "</label>
    \t\t\t\t</div>
                    ";
            // line 716
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 717
                echo "    \t\t\t\t<div class=\" kl-fancy-form \">
    \t\t\t\t\t<input type=\"text\" id=\"registerUsername\" name=\"username\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"";
                // line 718
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["type desired username"]);
                echo "\" required>
    \t\t\t\t\t<label for=\"registerUsername\" class=\"kl-font-alt kl-fancy-form-label\">";
                // line 719
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["USERNAME"]);
                echo "</label>
    \t\t\t\t</div>
                    ";
            }
            // line 722
            echo "
    \t\t\t\t<div class=\"kl-fancy-form\">
    \t\t\t\t\t<input type=\"text\" id=\"registerEmail\" name=\"email\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"your-email@website.com\" required>
    \t\t\t\t\t<label for=\"registerEmail\" class=\"kl-font-alt kl-fancy-form-label\">";
            // line 725
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EMAIL"]);
            echo "</label>
    \t\t\t\t</div>
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"registerPassword\" name=\"password\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"*****\" required>
    \t\t\t\t\t<label  for=\"registerPassword\" class=\"kl-font-alt kl-fancy-form-label\">";
            // line 729
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["PASSWORD"]);
            echo "</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\"kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"rpassword\" name=\"rpassword\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"*****\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
            // line 735
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CONFIRM PASSWORD"]);
            echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<label class=\"auth-popup-remember\" for=\"agreement\">
                        <input name=\"agree\" type=\"checkbox\" value=\"1\" id=\"agreement\" class=\"auth-popup-remember-chb\" required> ";
            // line 740
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["I Agree the"]);
            echo " <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["terms and conditions"]);
            echo "</a>
    \t\t\t\t</label>

    \t\t\t\t<div class=\"\">
    \t\t\t\t\t<input type=\"submit\" id=\"signup\" name=\"submit\" class=\"btn zn_sub_button btn-block btn-fullcolor btn-md\" value=\"";
            // line 744
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CREATE MY ACCOUNT"]);
            echo "\">
    \t\t\t\t</div>

    \t\t\t\t<div class=\"links auth-popup-links\">
    \t\t\t\t\t<a href=\"#login_panel\" class=\"kl-login-box auth-popup-link\">
    \t\t\t\t\t\t";
            // line 749
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ALREADY HAVE AN ACCOUNT?"]);
            echo "
    \t\t\t\t\t</a>
    \t\t\t\t</div>
    \t\t\t</form>
    \t\t</div>
    \t</div>
        ";
        }
        // line 756
        echo "    \t<div id=\"forgot_panel\" class=\"mfp-hide loginbox-popup auth-popup forgot-popup\">
    \t\t<div class=\"inner-container forgot-panel auth-popup-panel\">
    \t\t\t<h3 class=\"m_title m_title_ext text-custom auth-popup-title\">
    \t\t\t\t";
        // line 759
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FORGOT YOUR PASSWORD?"]);
        echo "
    \t\t\t</h3>

    \t\t\t<form class=\"forgot_form\" data-request=\"";
        // line 762
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"email\" id=\"userRestoreEmail\" name=\"email\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"...\" required>
    \t\t\t\t\t<label class=\"kl-font-alt kl-fancy-form-label\">
    \t\t\t\t\t\t";
        // line 766
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EMAIL"]);
        echo "
    \t\t\t\t\t</label>
    \t\t\t\t</div>

    \t\t\t\t<div class=\"\">
    \t\t\t\t\t<input type=\"submit\" id=\"kt_login_forgot_submit\" name=\"submit\" class=\"btn btn-block zn_sub_button btn-fullcolor btn-md\" value=\"";
        // line 771
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SEND MY DETAILS!"]);
        echo "\">
    \t\t\t\t</div>

    \t\t\t\t<div class=\"links auth-popup-links\">
    \t\t\t\t\t<a href=\"#login_panel\" class=\"kl-login-box auth-popup-link\">
    \t\t\t\t\t\t";
        // line 776
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
        // line 796
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TRACK A PACKAGE"]);
        echo "
    \t\t\t\t\t\t\t</h3>
    \t\t\t\t\t\t\t<h4 class=\"tbk__subtitle fw-thin\">
    \t\t\t\t\t\t\t\t";
        // line 799
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Just type the tracking code and we'll do everything"]);
        echo "!
    \t\t\t\t\t\t\t</h4>

    \t\t\t\t\t\t\t<form action=\"";
        // line 802
        echo url("tracking");
        echo "\" method=\"get\" class=\"contact_form row mt-40\">
                                    ";
        // line 803
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                                    ";
        // line 804
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
    \t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
    \t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"number\" id=\"cf_name-pop-up\" class=\"form-control\" placeholder=\"";
        // line 806
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please enter a valid tracking number"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
    \t\t\t\t\t\t\t\t\t<label class=\"control-label\">
    \t\t\t\t\t\t\t\t\t\t";
        // line 808
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking numbers"]);
        echo "
    \t\t\t\t\t\t\t\t\t</label>
    \t\t\t\t\t\t\t\t</div>

    \t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t\t\t<!-- Contact form send button -->
    \t\t\t\t\t\t\t\t\t<button class=\"btn btn-fullcolor\" type=\"submit\">
    \t\t\t\t\t\t\t\t\t\t";
        // line 815
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
        // line 829
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close (Esc)"]);
        echo "\" type=\"button\" class=\"mfp-close\">×</button>
    \t</div>
    \t<!--/ Contact form pop-up element content -->


    \t<!-- ToTop trigger -->
    \t<a href=\"javascript:void(0);\" id=\"totop\">";
        // line 835
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
\t\t<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

    \t<script type=\"text/javascript\" src=\"./front/js/kl-scripts.js\"></script>
    \t<script type=\"text/javascript\" src=\"./front/js/kl-custom.js\"></script>


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
        // line 939
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading ..."]);
        echo "'
                },
                \"dateformat\": \"";
        // line 941
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 941), ["d" => "dd", "m" => "mm", "Y" => "yyyy"]), "html", null, true);
        echo "\",
                \"daterangeformat\": \"";
        // line 942
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 942), ["d" => "DD", "m" => "MM", "M" => "MMM"]), "html", null, true);
        echo "\"
            };

        </script>
        <!-- end::Global Config -->

        <!--begin::Page Scripts(used by this page) -->
            ";
        // line 949
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
        // line 950
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 951
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
        // line 977
        if ((($context["loginAttribute"] ?? null) == "username")) {
            // line 978
            echo "                                                data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), username: \$('#registerUsername').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                                            ";
        } else {
            // line 980
            echo "                                                data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), password_confirmation: \$('#rpassword').val()},
                                            ";
        }
        // line 982
        echo "                                            error: function(e,response) {
                                                cform.find('.cf_response').addClass('alert alert-danger error');
                                                cform.find('.cf_response').html(e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                            \t\t\t\t\tcResponse.show();
                                            },
                                            success: function(response, status, xhr, \$form) {
                                                cform.find('.cf_response').addClass('alert alert-success');
                                                ";
        // line 989
        if ((($context["requireActivation"] ?? null) && (null === ($context["automaticActivation"] ?? null)))) {
            // line 990
            echo "                                                    cform.find('.cf_response').html('";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you. To complete your registration please check your email"]);
            echo ".');
                                \t\t\t\t\tcResponse.show();
                                                 ";
        } else {
            // line 993
            echo "                                                    cform.find('.cf_response').html('";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Successfully registered, you are being redirect"]);
            echo ".');
                                \t\t\t\t\tcResponse.show();
                                                    window.location.href = \"";
            // line 995
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/dashboard");
            echo "\";
                                                ";
        }
        // line 997
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
        return "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/layouts/front.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1730 => 997,  1725 => 995,  1719 => 993,  1712 => 990,  1710 => 989,  1701 => 982,  1697 => 980,  1693 => 978,  1691 => 977,  1663 => 951,  1659 => 950,  1648 => 949,  1638 => 942,  1634 => 941,  1629 => 939,  1522 => 835,  1513 => 829,  1496 => 815,  1486 => 808,  1481 => 806,  1476 => 804,  1472 => 803,  1468 => 802,  1462 => 799,  1456 => 796,  1433 => 776,  1425 => 771,  1417 => 766,  1408 => 762,  1402 => 759,  1397 => 756,  1387 => 749,  1379 => 744,  1370 => 740,  1362 => 735,  1353 => 729,  1346 => 725,  1341 => 722,  1335 => 719,  1331 => 718,  1328 => 717,  1326 => 716,  1321 => 714,  1317 => 713,  1309 => 708,  1304 => 705,  1302 => 704,  1295 => 699,  1287 => 694,  1284 => 693,  1282 => 692,  1276 => 689,  1273 => 688,  1267 => 685,  1264 => 684,  1262 => 683,  1255 => 679,  1250 => 677,  1242 => 672,  1237 => 670,  1232 => 668,  1226 => 665,  1205 => 649,  1201 => 648,  1187 => 641,  1168 => 625,  1161 => 621,  1141 => 603,  1135 => 600,  1132 => 599,  1129 => 598,  1123 => 595,  1120 => 594,  1117 => 593,  1111 => 590,  1108 => 589,  1106 => 588,  1096 => 581,  1091 => 579,  1086 => 577,  1081 => 575,  1076 => 573,  1071 => 571,  1066 => 569,  1061 => 567,  1056 => 565,  996 => 516,  992 => 515,  977 => 502,  975 => 501,  959 => 487,  951 => 482,  945 => 478,  932 => 470,  922 => 465,  918 => 464,  909 => 460,  905 => 459,  897 => 454,  891 => 450,  889 => 449,  886 => 448,  878 => 442,  864 => 438,  860 => 437,  853 => 436,  849 => 435,  839 => 428,  832 => 423,  830 => 422,  817 => 414,  804 => 403,  799 => 401,  792 => 400,  788 => 398,  784 => 396,  777 => 395,  773 => 393,  769 => 391,  762 => 390,  750 => 388,  747 => 387,  742 => 386,  739 => 385,  737 => 384,  727 => 383,  724 => 382,  721 => 381,  716 => 380,  713 => 379,  711 => 378,  699 => 377,  690 => 376,  687 => 375,  682 => 374,  678 => 372,  676 => 371,  641 => 338,  636 => 337,  632 => 336,  629 => 335,  624 => 334,  620 => 333,  617 => 332,  612 => 331,  608 => 330,  596 => 323,  592 => 322,  588 => 321,  573 => 309,  564 => 307,  540 => 294,  536 => 293,  508 => 267,  500 => 263,  493 => 258,  480 => 251,  470 => 246,  466 => 245,  457 => 241,  453 => 240,  445 => 235,  437 => 230,  429 => 225,  421 => 219,  412 => 213,  398 => 210,  394 => 209,  388 => 208,  382 => 207,  375 => 203,  366 => 197,  353 => 189,  348 => 187,  337 => 178,  327 => 174,  322 => 172,  319 => 171,  309 => 167,  304 => 165,  301 => 164,  291 => 160,  286 => 158,  250 => 125,  246 => 124,  238 => 119,  221 => 109,  211 => 102,  203 => 97,  195 => 92,  185 => 85,  165 => 70,  161 => 68,  158 => 67,  152 => 63,  148 => 61,  144 => 59,  142 => 58,  106 => 24,  101 => 22,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  80 => 15,  78 => 14,  73 => 12,  69 => 11,  63 => 8,  56 => 6,  51 => 4,  40 => 2,  37 => 1,);
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
<!--    \t<link rel=\"stylesheet\" href=\"./front/fonts/font-awesome/css/font-awesome.min.css\" type=\"text/css\" media=\"all\">-->
\t\t<link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\"/>

    \t<!-- Required CSS file for IOS Slider element  -->
    \t<link rel=\"stylesheet\" href=\"./front/css/sliders/ios/style.css\" type=\"text/css\" media=\"all\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>

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
    \t\t\t\t\t\t\t\t<div class=\"logo-container hasInfoCard logosize--yes navbar navbar-expand-lg\">
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
    \t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"zn-res-trigger \">
                                                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
                                            </a>
    \t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t<!--/ responsive menu trigger -->

    \t\t\t\t\t\t\t\t\t<!-- Main menu -->
                            \t\t\t{% if mainMenu.menuItems %}
        \t\t\t\t\t\t\t\t\t<div id=\"main-menu\" class=\"main-nav zn_mega_wrapper  collapse navbar-collapse\">
        \t\t\t\t\t\t\t\t\t\t<ul id=\"menu-main-menu\" class=\"main-menu zn_mega_menu navbar-nav flex-md-row\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-globe xs-icon\"></i>
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"topnav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas far fa-user-circle xs-icon\"></i>
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
\t\t\t\t\t\t\t\t\t\t\t<i class=\"login-icon fas fa-sign-in-alt visible-xs xs-icon\"></i>
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
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget\">
<!--\t\t\t\t\t\t\t\t\t<div  class=\"footer-title-wrap\">-->
<!--\t\t\t\t\t\t\t\t\t\t<h4 class=\"footer-title\">Download<br>-->
<!--\t\t\t\t\t\t\t\t\t\t\tApp</h4>-->
<!--\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t<div class=\"footer-detail-wrap\">
                                        <div class=\"footer-logo-wrap\">
                                            <a href=\"{{url('/')}}\">
                                                <img src=\"{% if settings.mobile_logo %}{{ settings.mobile_logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\" alt=\"{{ settings.company.title|__ }}\" class=\"footer-logo\" title=\"{{ settings.company.title|__ }}\" />
                                            </a>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mt-30 footer-about-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut quis nostrud exercitation commodo consequat.</p>
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
\t\t\t\t\t\t\t\t\t\t<div class=\"contact-info d-flex flex-column\">
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
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"elm-socialicons mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"elm-social-icons sc--colored sh--circle clearfix mt-3\">
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
                                        <div class=\"download-app-wrap d-flex flex-column\">
                                            <span class=\"app-wrap mb-4\">
                                                <img class=\"\"
                                                     src=\"{{'./front/images/app-google-play.png'}}\" alt=\"Google Play Store\">
                                            </span>
                                            <span class=\"app-wrap mb-4\">
                                                <img class=\"\"
                                                     src=\"{{'./front/images/app-google-play.png'}}\" alt=\"Apple App Store\">
                                            </span>
                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<!--/ col-sm-offset-2 col-md-8 col-sm-8 -->
            \t\t<!--/ row -->

            \t\t<div class=\"row\">
            \t\t\t<div class=\"col-sm-12 footer-area--bottom\"></div>

            \t\t\t<!-- Left side Copyright -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6 d-flex justify-content-start\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
            \t\t\t\t\t<p class=\"mb-0\">© {{'now'|date('Y')}} <span class=\"font-weight-bold brand_title\">{{ settings.company.title|__ }}</span> {{'All rights reserved'|__}}.</p>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<!--/ Left side Copyright -->

            \t\t\t<!-- Right side -->
            \t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
            \t\t\t\t<div class=\"d-block text-right\">{{'Powered By'|__}} &nbsp;<a href=\"https://ivylabtech.com\" target=\"_blank\" class=\"font-weight-bold refer_title\">IvyLab Technologies</a>.
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
    \t\t\t\t\t<label for=\"registerName\" class=\"kl-font-alt kl-fancy-form-label\">{{\"FULL NAME\"|__}}</label>
    \t\t\t\t</div>
                    {% if loginAttribute == \"username\" %}
    \t\t\t\t<div class=\" kl-fancy-form \">
    \t\t\t\t\t<input type=\"text\" id=\"registerUsername\" name=\"username\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"{{'type desired username'|__}}\" required>
    \t\t\t\t\t<label for=\"registerUsername\" class=\"kl-font-alt kl-fancy-form-label\">{{\"USERNAME\"|__}}</label>
    \t\t\t\t</div>
                    {% endif %}

    \t\t\t\t<div class=\"kl-fancy-form\">
    \t\t\t\t\t<input type=\"text\" id=\"registerEmail\" name=\"email\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"your-email@website.com\" required>
    \t\t\t\t\t<label for=\"registerEmail\" class=\"kl-font-alt kl-fancy-form-label\">{{'EMAIL'|__}}</label>
    \t\t\t\t</div>
    \t\t\t\t<div class=\" kl-fancy-form\">
    \t\t\t\t\t<input type=\"password\" id=\"registerPassword\" name=\"password\" class=\"form-control inputbox kl-fancy-form-input kl-fw-input\" placeholder=\"*****\" required>
    \t\t\t\t\t<label  for=\"registerPassword\" class=\"kl-font-alt kl-fancy-form-label\">{{'PASSWORD'|__}}</label>
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
\t\t<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

    \t<script type=\"text/javascript\" src=\"./front/js/kl-scripts.js\"></script>
    \t<script type=\"text/javascript\" src=\"./front/js/kl-custom.js\"></script>


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
</html>", "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/layouts/front.htm", "");
    }
}
