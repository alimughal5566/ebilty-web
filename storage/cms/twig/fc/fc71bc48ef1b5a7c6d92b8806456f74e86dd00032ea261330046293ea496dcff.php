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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/layouts/admin.htm */
class __TwigTemplate_ec4c8615aa4f88c386affbc38bac22809438612aac9c65131d1bdfda2f53f747 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "\" ";
        if ((($context["currentLang"] ?? null) == "ar")) {
            echo "direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\"";
        }
        echo " >

    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <base href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin");
        echo "\"><!--end::Base Path -->
        <meta charset=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 7), "charset", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 9
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)]);
        echo " | ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)]);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        }
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
     <meta name=\"keywords\" content=\"";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "keywords", [], "any", false, false, false, 11)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "keywords", [], "any", false, false, false, 11)]);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "keywords", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\" />
     <meta name=\"description\" content=\"";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12)]);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "description", [], "any", false, false, false, 12), "html", null, true);
        }
        echo "\">
        <meta name=\"author\" content=\"\"/>

        <link rel=\"icon\" href=\"";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 15)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\" type=\"image/png\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 16)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 17)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 17), "thumb", [0 => 72, 1 => 72], "method", false, false, false, 17), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 18)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 18), "thumb", [0 => 114, 1 => 114], "method", false, false, false, 18), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 19)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "favicon", [], "any", false, false, false, 19), "thumb", [0 => 144, 1 => 144], "method", false, false, false, 19), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.ico";
        }
        echo "\"/>

        <!--begin::Fonts -->
        <link href=\"//fonts.googleapis.com/css?family=Nunito|Roboto\" rel=\"stylesheet\">
        <!--end::Fonts -->


        <!--begin::Global Theme Styles(used by all pages) -->
            <link href=\"./admin/vendors/global/vendors.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
            ";
        // line 28
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 29
            echo "                <link href=\"./admin/css/demo1/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"//fonts.googleapis.com/css?family=Cairo:300,400,600,700\" rel=\"stylesheet\">


                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            ";
        } else {
            // line 42
            echo "                <link href=\"./admin/css/demo1/style.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.css\" rel=\"stylesheet\" type=\"text/css\" />

                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            ";
        }
        // line 53
        echo "        <!--end::Global Theme Styles -->
        <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>

        <!--begin::Layout Skins(used by all pages) -->
        <!--end::Layout Skins -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/css/ajax-bootstrap-select.min.css'>

        ";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 62
        echo "        <link rel=\"stylesheet\" href=\"./admin/css/custom_style.css\" type=\"text/css\" />

    </head>

    <body  class=\"kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed\"  >


     <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id=\"kt_header_mobile\" class=\"kt-header-mobile  kt-header-mobile--fixed \" >
            <div class=\"kt-header-mobile__logo\">
          <a href=\"";
        // line 73
        echo url("/");
        echo "\">
           <img alt=\"Logo\" src=\"";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 74)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mobile_logo", [], "any", false, false, false, 74), "path", [], "any", false, false, false, 74), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" style=\"max-height:40px\"/>
             </a>
            </div>
            <div class=\"kt-header-mobile__toolbar\">
    <button class=\"kt-header-mobile__toggler kt-header-mobile__toggler--left\" id=\"kt_aside_mobile_toggler\"><span></span></button>
    <button class=\"kt-header-mobile__toggler\" id=\"kt_header_mobile_toggler\"><span></span></button>
             <button class=\"kt-header-mobile__topbar-toggler\" id=\"kt_header_mobile_topbar_toggler\"><i class=\"flaticon-more\"></i></button>
            </div>
        </div>
        <!-- end:: Header Mobile -->
        <div class=\"kt-grid kt-grid--hor kt-grid--root\">
      <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page\">
                <!-- begin:: Aside -->
                <button class=\"kt-aside-close \" id=\"kt_aside_close_btn\"><i class=\"la la-close\"></i></button>

                <div class=\"kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop\" id=\"kt_aside\">
                 <!-- begin:: Aside -->
                    <div class=\"kt-aside__brand kt-grid__item \" id=\"kt_aside_brand\">
                     <div class=\"kt-aside__brand-logo\">
                      <a href=\"";
        // line 93
        echo url("dashboard");
        echo "\">
                       <img alt=\"Logo\" src=\"";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 94)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 94), "path", [], "any", false, false, false, 94), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\" style=\"max-height:50px;\"/>
                      </a>
                     </div>

               <div class=\"kt-aside__brand-tools\">
                   <button class=\"kt-aside__brand-aside-toggler\" id=\"kt_aside_toggler\">
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) \"/>
                                            <path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            <path d=\"M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                   </button>
                   <!--
                   <button class=\"kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left\" id=\"kt_aside_toggler\"><span></span></button>
                   -->
                  </div>
                 </div>
                    <!-- end:: Aside -->
                    <!-- begin:: Aside Menu -->
                    <div class=\"kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid\" id=\"kt_aside_menu_wrapper\">

                     <div id=\"kt_aside_menu\" class=\"kt-aside-menu \" data-ktmenu-vertical=\"1\" data-ktmenu-scroll=\"1\" data-ktmenu-dropdown-timeout=\"500\">

                            <div class=\"kt-widget kt-widget--user-profile-1 kt-padding-l-20 kt-padding-r-20 kt-padding-b-0\">
                                <div class=\"kt-widget__head\">
                                    ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 132)) {
            // line 133
            echo "                                        <div class=\"kt-widget__media\">
                                            <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 134), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 134), "html", null, true);
            echo "\" alt=\"image\">
                                        </div>
                                   ";
        } else {
            // line 137
            echo "                                       <span class=\"kt-media kt-media--lg kt-media--brand \">
                                            <span>";
            // line 138
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 138)), 0, 2), "html", null, true);
            echo "</span>
                                        </span>
                                   ";
        }
        // line 141
        echo "                                    <div class=\"kt-widget__content kt-padding-t-10\">
                                        <div class=\"kt-widget__section\">
                                            <a href=\"javascript:void(0);\" class=\"kt-widget__username\">
                                                ";
        // line 144
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 144)), "html", null, true);
        echo "
                                            </a>
                                            <span class=\"kt-widget__subtitle\">
                                                ";
        // line 147
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Welcome back"]);
        echo ",
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-widget__footer kt-margin-t-15\">
                                    <a href=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-create");
        echo "\" class=\"btn btn-label-brand btn-lg btn-upper btn-block\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--light\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <circle id=\"Oval-5\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\"/>
                                                <path d=\"M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                         <span>";
        // line 162
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Shipment"]);
        echo "</span>
                                     </a>
                                </div>
                            </div>

                            ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 167)) {
            // line 168
            echo "                          <ul class=\"kt-menu__nav \">
                                    ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", [], "any", false, false, false, 169));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 169), "isHidden", [], "any", false, false, false, 169)) {
                    // line 170
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 170), 1 => "r"], "method", false, false, false, 170) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 170)))) {
                        // line 171
                        echo "

                                   <li class=\"kt-menu__item  ";
                        // line 173
                        echo ((((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 173) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 173)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 173), "menu_breadcrumb", [], "any", false, false, false, 173) == twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 173)))) ? ("kt-menu__item--open kt-menu__item--here") : (""));
                        echo " kt-menu__item--submenu kt-menu__item--rel\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 173)) {
                            echo "data-ktmenu-submenu-toggle=\"hover\" aria-haspopup=\"true\"";
                        }
                        echo ">
                                                <a href=\"";
                        // line 174
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 174)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 174), "html", null, true);
                        } else {
                            echo "#";
                        }
                        echo "\" class=\"kt-menu__link ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 174)) {
                            echo "kt-menu__toggle";
                        }
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 174), "isExternal", [], "any", false, false, false, 174)) ? ("target=\"_blank\"") : (""));
                        echo ">
                                                    <span class=\"kt-menu__link-icon\">
                                                        ";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 176), "icon", [], "any", false, false, false, 176);
                        echo "
                                                    </span>
                                                    <span class=\"kt-menu__link-text\">";
                        // line 178
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 178)]);
                        echo "</span>
                                                    ";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 179)) {
                            // line 180
                            echo "                                                        <i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
                                                    ";
                        }
                        // line 182
                        echo "                                                </a>
                                                ";
                        // line 183
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 183)) {
                            // line 184
                            echo "                                                    <div class=\"kt-menu__submenu \">
                                                        <span class=\"kt-menu__arrow\"></span>
                                                        <ul class=\"kt-menu__subnav\">
                                                            ";
                            // line 187
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 187));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 187), "isHidden", [], "any", false, false, false, 187)) {
                                    // line 188
                                    echo "                                                                ";
                                    if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 188), 1 => "r"], "method", false, false, false, 188) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 188)))) {
                                        // line 189
                                        echo "                                                                    <li class=\"kt-menu__item ";
                                        echo ((((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 189) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 189)) || (($context["currentPageUrl"] ?? null) == twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 189), ["[url]" => url("/")])))) ? ("kt-menu__item--open kt-menu__item--here") : (""));
                                        echo "\"  aria-haspopup=\"true\">
                                                                        <a  href=\"";
                                        // line 190
                                        if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 190)) {
                                            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 190), ["[url]" => url("/")]), "html", null, true);
                                        } else {
                                            echo "javascript:void(0);";
                                        }
                                        echo "\" class=\"kt-menu__link \">
                                                                            ";
                                        // line 191
                                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 191), "icon", [], "any", false, false, false, 191) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 191), "icon", [], "any", false, false, false, 191) != ""))) {
                                            // line 192
                                            echo "                                                                                ";
                                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 192), "icon", [], "any", false, false, false, 192);
                                            echo "
                                                                            ";
                                        } else {
                                            // line 194
                                            echo "                                                                                <i class=\"kt-menu__link-bullet kt-menu__link-bullet--dot\"><span></span></i>
                                                                            ";
                                        }
                                        // line 196
                                        echo "                                                                            <span class=\"kt-menu__link-text\">";
                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 196)]);
                                        echo "</span>
                                                                        </a>
                                                                    </li>
                                                                ";
                                    }
                                    // line 200
                                    echo "                                                            ";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 201
                            echo "                                                        </ul>
                                                    </div>
                                                ";
                        }
                        // line 204
                        echo "                                            </li>
                                        ";
                    }
                    // line 206
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "
                                </ul>
                         <ul class=\"kt-menu__nav \">
                             ";
            // line 210
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 210) == 12)) {
                // line 211
                echo "                             <li class=\"kt-menu__item  ";
                echo ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isActive", [], "any", false, false, false, 211) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isChildActive", [], "any", false, false, false, 211)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 211), "menu_breadcrumb", [], "any", false, false, false, 211) == twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "code", [], "any", false, false, false, 211)))) ? ("kt-menu__item--open kt-menu__item--here") : (""));
                echo " kt-menu__item--submenu kt-menu__item--rel\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 211)) {
                    echo "data-ktmenu-submenu-toggle=\"hover\" aria-haspopup=\"true\"";
                }
                echo ">
                                 <a href=\"/en/my-bids/list\" class=\"kt-menu__link ";
                // line 212
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 212)) {
                    echo "kt-menu__toggle";
                }
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "viewBag", [], "any", false, false, false, 212), "isExternal", [], "any", false, false, false, 212)) ? ("target=\"_blank\"") : (""));
                echo ">
                                 <span class=\"kt-menu__link-icon\">
                                                     ";
                // line 214
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "viewBag", [], "any", false, false, false, 214), "icon", [], "any", false, false, false, 214);
                echo "
                                                    </span>
                                 <span class=\"kt-menu__link-text\">My Shipments</span>
                                 ";
                // line 217
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 217)) {
                    // line 218
                    echo "                                 <i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
                                 ";
                }
                // line 220
                echo "                                 </a>

                             </li>
                             ";
            }
            // line 224
            echo "                         </ul>
                            ";
        }
        // line 226
        echo "


                     </div>
                    </div>
                    <!-- end:: Aside Menu -->
                </div>
                <!-- end:: Aside -->

       <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper\" id=\"kt_wrapper\">
        <!-- begin:: Header -->
                    <div id=\"kt_header\" class=\"kt-header kt-grid__item  kt-header--fixed \" >
                        <!-- begin:: Header Menu -->
                        <button class=\"kt-header-menu-wrapper-close\" id=\"kt_header_menu_mobile_close_btn\"><i class=\"la la-close\"></i></button>
                        <div class=\"kt-header-menu-wrapper\" id=\"kt_header_menu_wrapper\">

                         <div id=\"kt_header_menu\" class=\"kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default \"  >
                          <ul class=\"kt-menu__nav \">
                           <li class=\"kt-menu__item\">
                                        <a  href=\"javascript:void(0);\" class=\"kt-menu__link kt-menu__time\">
<!--                                            <i class=\"kt-menu__link-icon flaticon-clock-1\"></i>-->
                                            <span class=\"kt-menu__link-text\">
                                                <div class='time-frame'>
                                                    <div id='date-part-icon' class=\"d-inline-block mr-1\">
                                                        <i class=\"far fa-calendar-day\"></i>
                                                    </div>
                                                    <div id='date-part' class=\"d-inline-block\"></div>
                                                    <div id='time-part-icon' class=\"d-inline-block ml-3 mr-1\">
                                                        <i class=\"far fa-clock\"></i>
                                                    </div>
                                                    <div id='time-part' class=\"d-inline-block\"></div>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                         </div>
                        </div>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        <div class=\"kt-header__topbar\">
                            <!--begin: Search -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--search dropdown\" id=\"kt_quick_search_toggle\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <span class=\"kt-header__topbar-icon\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                                <path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg\">
                                    <div class=\"kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact\" id=\"kt_quick_search_dropdown\">
                                        <form method=\"GET\" action=\"";
        // line 282
        echo url("dashboard/search");
        echo "\"class=\"kt-quick-search__form\">
                                            ";
        // line 283
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                                            ";
        // line 284
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"flaticon2-search-1\"></i></span></div>
                                                <input type=\"text\" class=\"form-control kt-quick-search__input\" placeholder=\"";
        // line 287
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["quick search"]);
        echo "...\" name=\"quicksearch\" >
                                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"la la-close kt-quick-search__close\"></i></span></div>
                                            </div>
                                        </form>
                                        <div class=\"kt-quick-search__wrapper kt-scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\" style=\"direction: ltr;\">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search -->

                            <!--begin: Notifications -->
                            <div id=\"notificationsmenu\" class=\"kt-header__topbar-item dropdown\">
                                ";
        // line 301
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("notificationsmenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 302
        echo "                            </div>
                            <!--end: Notifications -->
                            ";
        // line 304
        if (($context["locales"] ?? null)) {
            // line 305
            echo "                                <!--begin: Language bar -->
                                <div class=\"kt-header__topbar-item kt-header__topbar-item--langs\">
                                    <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                        <span class=\"kt-header__topbar-icon kt-header__topbar-icon--info\">
                                            ";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    // line 310
                    echo "                                                <img class=\"\" src=\"./admin/media/flags/";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo ".svg\" alt=\"\" />
                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                                        </span>
                                    </div>
                                    <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim\">
                                        <ul class=\"kt-nav kt-margin-t-10 kt-margin-b-10\">
                                            ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["name"]) {
                // line 317
                echo "                                                <li class=\"kt-nav__item ";
                if ((($context["activeLocale"] ?? null) == $context["code"])) {
                    echo "kt-nav__item--active";
                }
                echo " locale\" rel=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
                                                    <a href=\"#\" class=\"kt-nav__link\">
                                                        <span class=\"kt-nav__link-icon\"><img src=\"./admin/media/flags/";
                // line 319
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo ".svg\" alt=\"\" /></span>
                                                        <span class=\"kt-nav__link-text\">";
                // line 320
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            echo "                                        </ul>
                                    </div>
                                </div>
                                <!--end: Language bar -->
                            ";
        }
        // line 329
        echo "
                            <!--begin: User bar -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--user\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <div class=\"kt-header__topbar-user\">
                                        <span class=\"kt-header__topbar-welcome\">";
        // line 334
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Hi"]);
        echo ",</span>
                                        <span class=\"kt-header__topbar-username\">";
        // line 335
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 335)), "html", null, true);
        echo "</span>
                                        ";
        // line 336
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 336)) {
            // line 337
            echo "                                             <img alt=\"Pic\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 337), "thumb", [0 => 25, 1 => 25, 2 => "crop"], "method", false, false, false, 337), "html", null, true);
            echo "\" />
                                        ";
        } else {
            // line 339
            echo "                                           <span class=\"kt-badge kt-badge--username kt-badge--unified-brand kt-badge--lg kt-badge--rounded kt-font-light kt-badge--bold\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 339)), 0, 2), "html", null, true);
            echo "</span>
                                        ";
        }
        // line 341
        echo "                                    </div>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl\">
                                    <!--begin: Head -->
                                    <div class=\"kt-user-card kt-user-card--skin-light kt-notification-item-padding-x\">
                                        <div class=\"kt-user-card__avatar\">
                                            ";
        // line 347
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 347)) {
            // line 348
            echo "                                                 <img alt=\"Pic\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 348), "thumb", [0 => 60, 1 => 60, 2 => "crop"], "method", false, false, false, 348), "html", null, true);
            echo "\" />
                                            ";
        } else {
            // line 350
            echo "                                                <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 350)), 0, 1), "html", null, true);
            echo "</span>
                                             ";
        }
        // line 352
        echo "                                        </div>
                                        <div class=\"kt-user-card__name\">
                                            ";
        // line 354
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 354)), "html", null, true);
        echo "
                                        </div>
                                        <!--<div class=\"kt-user-card__badge kt-hidden\">
                                            <span class=\"btn btn-";
        // line 357
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "messages", [], "any", false, false, false, 357), "where", [0 => "read_at", 1 => null], "method", false, false, false, 357)) > 0)) {
            echo "danger";
        } else {
            echo "success";
        }
        echo " btn-sm btn-bold btn-font-md\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "messages", [], "any", false, false, false, 357), "where", [0 => "read_at", 1 => null], "method", false, false, false, 357)), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["messages"]);
        echo "</span>
                                        </div>-->
                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class=\"kt-notification\">
                                        <a href=\"";
        // line 364
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
        echo "\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-calendar-3 kt-font-success\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 370
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["My Profile"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 373
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Account settings and more"]);
        echo "
                                                </div>
                                            </div>
                                        </a>
                                        <!--
                                            ";
        // line 378
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "message", 1 => "r"], "method", false, false, false, 378)) {
            // line 379
            echo "                                                <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/inbox");
            echo "\" class=\"kt-notification__item\">
                                                    <div class=\"kt-notification__item-icon\">
                                                        <i class=\"flaticon2-mail kt-font-warning\"></i>
                                                    </div>
                                                    <div class=\"kt-notification__item-details\">
                                                        <div class=\"kt-notification__item-title kt-font-bold\">
                                                            ";
            // line 385
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Messages"]);
            echo "
                                                        </div>
                                                        <div class=\"kt-notification__item-time\">
                                                            ";
            // line 388
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customers messages from website"]);
            if ((($context["unreaded"] ?? null) > 0)) {
                echo " <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">";
                echo twig_escape_filter($this->env, ($context["unreaded"] ?? null), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Unreaded"]);
                echo "</span>";
            }
            // line 389
            echo "                                                        </div>
                                                    </div>
                                                </a>
                                            ";
        }
        // line 393
        echo "                                        -->
                                        <a href=\"";
        // line 394
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-rocket-1 kt-font-danger\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 400
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["My Notifications"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 403
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["all pervious notifications"]);
        echo "
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-notification__item kt-hidden\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-hourglass kt-font-brand\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 413
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["My Tasks"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 416
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["latest tasks and requests"]);
        echo "
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-hidden kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-cardiogram kt-font-warning\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    ";
        // line 426
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Billing"]);
        echo "
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
        // line 429
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["billing & statements"]);
        echo " <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">2 ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["pending"]);
        echo "</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"kt-notification__custom kt-space-between\">
                                            <a class=\"btn btn-danger btn-block btn-bold kt-font-light\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">";
        // line 434
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Out"]);
        echo "</a>
                                            <a href=\"#\" target=\"_blank\" class=\"btn btn-clean btn-sm btn-bold kt-hidden\">";
        // line 435
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Upgrade Plan"]);
        echo "</a>
                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->
        <div class=\"kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor\" id=\"kt_content\">
                        <!-- begin:: Content Head -->
                        <div class=\"kt-subheader   kt-grid__item\" id=\"kt_subheader\">
                            <div class=\"kt-container  kt-container--fluid  \">
                                <div class=\"kt-subheader__main\">
                                    ";
        // line 451
        $context["crumbOptions"] = twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "options", [], "any", false, false, false, 451);
        // line 452
        echo "                                    <h3 class=\"kt-subheader__title\"><button class=\"kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left\" id=\"kt_subheader_mobile_toggle\"><span></span></button>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 452), "title", [], "any", false, false, false, 452)]);
        echo "</h3>

                                    ";
        // line 454
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 454), "description", [], "any", false, false, false, 454)) {
            // line 455
            echo "                                        <span class=\"kt-subheader__desc\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 455), "description", [], "any", false, false, false, 455)]);
            echo "</span>
                                    ";
        }
        // line 457
        echo "                                    <span class=\"kt-subheader__separator kt-subheader__separator--v\"></span>
                                    ";
        // line 458
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 458), "listing", [], "any", false, false, false, 458)) {
            // line 459
            echo "                                        <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                            <span class=\"kt-subheader__desc\" id=\"kt_subheader_total\">";
            // line 460
            if (($context["total_records"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["total_records"] ?? null), "html", null, true);
                echo " ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
            }
            echo "</span>
                                            <form class=\"kt-margin-l-20\" id=\"kt_subheader_search_form\" style=\"margin-left:10px !important \">
                                                ";
            // line 462
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "
                                                ";
            // line 463
            echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
            echo "
                                                <div class=\"kt-input-icon kt-input-icon--right kt-subheader__search\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 465
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quick Search"]);
            echo "\" id=\"generalSearch\">
                                                    <span class=\"kt-input-icon__icon kt-input-icon__icon--right\">
                                                        <span><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></span>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        ";
            // line 472
            if (($context["filter_statuses"] ?? null)) {
                // line 473
                echo "                                            <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                                <div class=\"btn-toolbar kt-margin-l-20\">
                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_filter_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 476
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Filter By"]);
                echo "<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                    <span class=\"kt-nav__section-text kt-font-boldest kt-padding-b-10\">";
                // line 480
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Only show"]);
                echo ":</span>
                                                                    <br />
                                                                    ";
                // line 482
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["filter_statuses"] ?? null));
                foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                    // line 483
                    echo "                                                                        <form class=\"kt_subheader_filter_form\">
                                                                            ";
                    // line 484
                    echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
                    echo "
                                                                            ";
                    // line 485
                    echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
                    echo "
                                                                            <li class=\"kt-nav__item\">
                                                                                <input type='hidden' class=\"filter\" value=\"";
                    // line 487
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\" />
                                                                                <button class=\"btn btn-outline-dark btn-wide\" style=\"display: block;width: 100%;\" type=\"submit\">";
                    // line 488
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</button>
                                                                            </li>
                                                                        </form>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 492
                echo "                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 499
            echo "                                        <div class=\"kt-subheader__group kt-hidden\" id=\"kt_subheader_group_actions\">
                                            <div class=\"kt-subheader__desc\"><span id=\"kt_subheader_group_selected_rows\"></span> ";
            // line 500
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Selected"]);
            echo ":</div>
                                            <div class=\"btn-toolbar kt-margin-l-20\">
                                                ";
            // line 502
            if (($context["statuses"] ?? null)) {
                // line 503
                echo "                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_status_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 504
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
                echo "</button>
                                                        <div class=\"dropdown-menu\">
                                                            <ul class=\"kt-nav\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\"><span class=\"kt-nav__section-text\">";
                // line 507
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change status to"]);
                echo ":</span></li>
                                                                ";
                // line 508
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 509
                    echo "                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"#\" class=\"kt-nav__link\" data-toggle=\"status-change\" data-status=\"";
                    // line 510
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "value", [], "any", false, false, false, 510), "html", null, true);
                    echo "\">
                                                                            <span class=\"kt-nav__link-text\"><span class=\"kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold\">";
                    // line 511
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 511), "html", null, true);
                    echo "</span></span>
                                                                        </a>
                                                                    </li>
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 515
                echo "                                                            </ul>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 519
            echo "                                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 519), "actions", [], "any", false, true, false, 519), "listing", [], "any", true, true, false, 519)) {
                // line 520
                echo "                                                <div class=\"dropdown\" id=\"kt_subheader_group_actions_shipment_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 521
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Selected Actions"]);
                echo "<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                ";
                // line 525
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 525), "actions", [], "any", false, false, false, 525), "listing", [], "any", false, false, false, 525));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 526
                    echo "                                                                    <button class=\"btn btn-outline-dark btn-sm btn-bold \" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 526), "html", null, true);
                    echo "\" style=\"display: block;width: 100%;\" >";
                    if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 526)])) {
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 526)]);
                    }
                    echo "</button>
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 528
                echo "                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 533
            echo "                                                ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 533), "actions", [], "any", false, true, false, 533), "delete", [], "any", true, true, false, 533)) {
                // line 534
                echo "                                                    <button class=\"btn btn-label-danger btn-bold btn-sm btn-icon-h\" id=\"kt_subheader_group_actions_delete_all\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete All"]);
                echo "</button>
                                                ";
            }
            // line 536
            echo "                                            </div>
                                        </div>
                                    ";
        } else {
            // line 539
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, false, 539)) {
                // line 540
                echo "                                            <div class=\"kt-subheader__breadcrumbs\">
                                                ";
                // line 541
                $context["activeCrumb"] = "";
                // line 542
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                    // line 543
                    echo "                                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, false, 543)) {
                        // line 544
                        echo "                                                        ";
                        if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 544) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 544))) {
                            // line 545
                            echo "                                                            <a href=\"";
                            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, false, 545));
                            echo "\" class=\"kt-subheader__breadcrumbs-home\">
                                                                ";
                            // line 546
                            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 546)) {
                                // line 547
                                echo "                                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                                            <path d=\"M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                                                        </g>
                                                                    </svg>
                                                                ";
                            } else {
                                // line 553
                                if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 553)])) {
                                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 553)]);
                                }
                            }
                            echo "</a>
                                                        ";
                        } else {
                            // line 555
                            echo "                                                            <span class=\"kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active\">";
                            if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 555)])) {
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 555)]);
                            }
                            echo "</span>
                                                        ";
                        }
                        // line 557
                        echo "                                                    ";
                    }
                    // line 558
                    echo "                                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 558)) {
                        // line 559
                        echo "                                                        ";
                        $context["activeCrumb"] = $context["crumb"];
                        // line 560
                        echo "                                                    ";
                    }
                    // line 561
                    echo "                                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 562
                echo "                                            </div>
                                        ";
            }
            // line 564
            echo "                                    ";
        }
        // line 565
        echo "                                </div>
                                <div class=\"kt-subheader__toolbar\">
                                    <div class=\"kt-subheader__wrapper\">
                                        ";
        // line 568
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 568), "daterange", [], "any", false, false, false, 568) == 1)) {
            // line 569
            echo "                                            <div class=\"btn kt-subheader__btn-daterange\" id=\"kt_dashboard_daterangepicker\" data-toggle=\"kt-tooltip\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select dashboard daterange"]);
            echo "\" data-placement=\"left\">
                                                <span class=\"kt-subheader__btn-daterange-title\" id=\"kt_dashboard_daterangepicker_title\">";
            // line 570
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
            echo "</span>&nbsp;
                                                <span class=\"kt-subheader__btn-daterange-date\" id=\"kt_dashboard_daterangepicker_date\">";
            // line 571
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d M"), "html", null, true);
            echo "</span>
                                                <i class=\"flaticon2-calendar-1\"></i>
                                            </div>
                                        ";
        } else {
            // line 575
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 575), "actions", [], "any", false, false, false, 575)) {
                // line 576
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 576), "actions", [], "any", false, true, false, 576), "add", [], "any", true, true, false, 576)) {
                    // line 577
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 577), "actions", [], "any", false, false, false, 577), "add", [], "any", false, false, false, 577), "html", null, true);
                    echo "\" class=\"btn btn-label-success btn-bold\" id=\"add_new_btn\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add new"]);
                    echo "&nbsp;<i class=\"flaticon2-add\"></i></a>
                                                ";
                }
                // line 579
                echo "
                                                ";
                // line 580
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 580), "actions", [], "any", false, true, false, 580), "filter", [], "any", true, true, false, 580)) {
                    // line 581
                    echo "                                                    <a href=\"#\" class=\"btn btn-label-success btn-bold\" id=\"filter\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Filter"]);
                    echo "&nbsp;<i class=\"flaticon2-search\"></i></a>
                                                ";
                }
                // line 583
                echo "                                                 <!-- add multi shipments  -->
                                                ";
                // line 584
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 584), "actions", [], "any", false, true, false, 584), "multi", [], "any", true, true, false, 584)) {
                    // line 585
                    echo "                                                <div class=\"kt-subheader__group\" id=\"kt_subheader_search\" style=\"display:inline-block; \">
                                                    <div class=\"btn-toolbar kt-margin-l-20\">
                                                        <div class=\"dropdown\" id=\"\">
                                                            <button type=\"button\" class=\"btn btn-label-success btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 588
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Using"]);
                    echo "<span id=\"filter_selected\"></span></button>
                                                            <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                                <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                    <li class=\"kt-nav__section kt-nav__section--first\">
                                                                    ";
                    // line 592
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 592), "actions", [], "any", false, false, false, 592), "multi", [], "any", false, false, false, 592));
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 593
                        echo "                                                                        <button class=\"btn btn-outline-dark btn-sm btn-bold \" id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 593), "html", null, true);
                        echo "\" style=\"display: block;width: 100%;\" >
                                                                            <a href=\"";
                        // line 594
                        if (twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 594)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 594), "html", null, true);
                        } else {
                            echo "#";
                        }
                        echo "\" style=\"\">";
                        if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 594)])) {
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 594)]);
                        }
                        echo "</a></button>

                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 597
                    echo "                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
                }
                // line 604
                echo "                                                <!--end  -->
                                                ";
                // line 605
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 605), "actions", [], "any", false, true, false, 605), "buttons", [], "any", true, true, false, 605)) {
                    // line 606
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 606), "actions", [], "any", false, false, false, 606), "buttons", [], "any", false, false, false, 606));
                    foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                        // line 607
                        echo "                                                        <a href=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 607)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 607), "html", null, true);
                        } else {
                            echo "#";
                        }
                        echo "\" class=\"btn btn-label-";
                        if (twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 607)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 607), "html", null, true);
                        } else {
                            echo "primary";
                        }
                        echo " btn-bold\" id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 607), "html", null, true);
                        echo "\">";
                        if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 607)])) {
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 607)]);
                        }
                        echo "&nbsp;<i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "icon", [], "any", false, false, false, 607), "html", null, true);
                        echo "\"></i></a>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 609
                    echo "                                                ";
                }
                // line 610
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 610), "actions", [], "any", false, true, false, 610), "other", [], "any", true, true, false, 610)) {
                    // line 611
                    echo "                                                    <div class=\"dropdown dropdown-inline\" data-toggle-=\"kt-tooltip\" title=\"Quick actions\" data-placement=\"left\">
                                                        <a href=\"#\" class=\"btn kt-subheader__btn-primary\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            ";
                    // line 613
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Other Actions"]);
                    echo " &nbsp;

                                                            <!--<i class=\"flaticon2-calendar-1\"></i>-->
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--sm\">
                                                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                    <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                    <rect id=\"Rectangle-8\" fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\" />
                                                                    <path d=\"M7.5,11 L16.5,11 C17.3284271,11 18,11.6715729 18,12.5 C18,13.3284271 17.3284271,14 16.5,14 L7.5,14 C6.67157288,14 6,13.3284271 6,12.5 C6,11.6715729 6.67157288,11 7.5,11 Z M10.5,17 L13.5,17 C14.3284271,17 15,17.6715729 15,18.5 C15,19.3284271 14.3284271,20 13.5,20 L10.5,20 C9.67157288,20 9,19.3284271 9,18.5 C9,17.6715729 9.67157288,17 10.5,17 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right\">

                                                            <!--begin::Nav-->
                                                            <ul class=\"kt-nav\">
                                                                ";
                    // line 628
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 628), "actions", [], "any", false, false, false, 628), "other", [], "any", false, false, false, 628));
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 629
                        echo "                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"";
                        // line 630
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 630), "html", null, true);
                        echo "\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon ";
                        // line 631
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 631), "html", null, true);
                        echo "\"></i>
                                                                            <span class=\"kt-nav__link-text\">";
                        // line 632
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 632), "html", null, true);
                        echo "</span>
                                                                        </a>
                                                                    </li>
                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 636
                    echo "                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 642
                echo "                                            ";
            }
            // line 643
            echo "                                        ";
        }
        // line 644
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                     <div class=\"kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid\">



                       ";
        // line 654
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 654)) {
            // line 655
            echo "                         <div class=\"alert alert-warning\" role=\"alert\">
                                 ";
            // line 656
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please be aware that data will be replaced on this demo every 6 hours so that every one can test this demo as he needs without corrupting the data."]);
            echo "
                          </div>
                      ";
        }
        // line 659
        echo "
                       ";
        // line 660
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 660), "map", [], "any", false, false, false, 660) == "")) {
            // line 661
            echo "                          <div class=\"alert alert-warning\" role=\"alert\">
                            ";
            // line 662
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google maps functions will not be activated until you enter your google key"]);
            echo " <a href=\"";
            echo url("dashboard/settings/google");
            echo "\">&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Here"]);
            echo "</a>, ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["you can follow this tutorial to generate one"]);
            echo " <a href=\"https://developers.google.com/maps/documentation/embed/get-api-key\" target=\"_blank\">&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Get an API Key"]);
            echo "</a>
                          </div>
                      ";
        }
        // line 665
        echo "


                            ";
        // line 668
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 669
        echo "               </div>
                        <!-- end:: Content -->
                    </div>

        <!-- begin:: Footer -->
                    <div class=\"kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop\" id=\"kt_footer\">
                     <div class=\"kt-container  kt-container--fluid \">
                      <div class=\"kt-footer__copyright\">
<!--                       ";
        // line 677
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "&nbsp;&copy;&nbsp;<a href=\"//spotlayer.com\" target=\"_blank\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Powered By ivylabtech"]);
        echo "</a>.-->
                      </div>
                      <div class=\"kt-footer__menu\">
<!--                       <a href=\"//ivylabtech.com\" target=\"_blank\" class=\"kt-link\">";
        // line 680
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Support"]);
        echo "</a>-->
                      </div>
                     </div>
                    </div>
                    <!-- end:: Footer -->
                </div>
      </div>
     </div>
        <!-- end:: Page -->


        <!-- begin::Scrolltop -->
        <div id=\"kt_scrolltop\" class=\"kt-scrolltop\">
         <i class=\"fa fa-arrow-up\"></i>
        </div>
        <!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            ";
        // line 699
        $context["timezone"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "timezone_offset", [], "any", false, false, false, 699), ":");
        // line 700
        echo "            ";
        $context["timezone_offset"] = ((twig_get_attribute($this->env, $this->source, ($context["timezone"] ?? null), 0, [], "any", false, false, false, 700) * 60) + twig_get_attribute($this->env, $this->source, ($context["timezone"] ?? null), 1, [], "any", false, false, false, 700));
        // line 701
        echo "            ";
        $context["timezone_offset_hours"] = (($context["timezone_offset"] ?? null) / 60);
        // line 702
        echo "
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
        // line 731
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading ..."]);
        echo "'
                },
                \"timezone_offset\": \"";
        // line 733
        echo twig_escape_filter($this->env, ($context["timezone_offset"] ?? null), "html", null, true);
        echo "\",
                \"timezone_offset_hours\": \"";
        // line 734
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo "\",
                \"dateformat\": \"";
        // line 735
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 735), ["d" => "dd", "m" => "mm", "Y" => "yyyy"]), "html", null, true);
        echo "\",
                \"daterangeformat\": \"";
        // line 736
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 736), ["d" => "DD", "m" => "MM", "M" => "MMM"]), "html", null, true);
        echo "\"
            };
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
            <script src=\"./admin/vendors/custom/notifications/js/modernizr.custom.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/classie.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/notificationFx.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/global/vendors.bundle.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/js/demo1/scripts.bundle.js\" type=\"text/javascript\"></script>
            ";
        // line 747
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 747), "live", [], "any", false, false, false, 747) == 1)) {
            // line 748
            echo "                <script src=\"//js.pusher.com/5.0/pusher.min.js\"></script>
            ";
        }
        // line 750
        echo "        <!--end::Global Theme Bundle -->
            </script>

        <!--begin::Page Scripts(used by this page) -->
            <script src='https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/js/ajax-bootstrap-select.min.js'></script>
            ";
        // line 755
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
        // line 756
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 757
        echo "            <script type=\"text/javascript\">
                function initAjaxSelectPicker(url,item,dependency = null){
                    var options = {
                        ajax: {
                            url: url,
                            type: \"GET\",
                            dataType: \"json\",
                            data : function() {
                                return {
                                    q: '";
        // line 766
        echo "{{{q}}}";
        echo "',
                                    dependency_id: \$(dependency+\" option:selected\").val()
                                };
                            },
                        },
                        cache: false,
                        extendData:
                        [
                            {
                                key: \"dependency_id\",
                                func: function() {
                                    return \$(dependency+' option:first').val();
                                }
                            }
                        ]
                    };
                    \$(item).selectpicker().filter(\".with-ajax\").ajaxSelectPicker(options);
                    \$(item).trigger(\"change\");
                    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        \$(item).selectpicker('refresh');
                    });

                }
                function flashRequest(type,message){

                    swal.fire({
                        buttonsStyling: false,
                        title: message,
                        type: type,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
                KTUtil.ready(function () {

                    \$.validator.addMethod(\"customDateValidator\", function(value, element) {
                            // parseDate throws exception if the value is invalid
                            try{\$.datepicker.parseDate( KTAppOptions.dateformat, value);return true;}
                            catch(e){return false;}
                        },
                        \"";
        // line 806
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please enter a valid date"]);
        echo "\"
                    );

                    if('dd/mm/yyyy' == KTAppOptions.dateformat){
                        console.log(KTAppOptions.dateformat);
                        \$.validator.methods.date = function (value, element) {
                            value = dateValue(value);
                            return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());;
                        }

                        function dateValue(value) {
                            var date = value.split(\"/\");
                            return date[2] + \"/\" + date[1] + \"/\" + date[0]
                        }
                    }

                    \$('body').on('click', '.locale', function(e){
                        e.preventDefault();
                        var selected = \$(this).attr('rel');
                        if(selected != ''){
                            \$.request('onSwitchLocale', {
                                data: {locale: selected}
                            });
                        }
                    });
                    \$('select').selectpicker({
                        noneSelectedText: '";
        // line 832
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing selected"]);
        echo "',
                    });
                    \$('body').on('changed.bs.select','.with-ajax', function(e, clickedIndex, newValue, oldValue) {
                        \$('.with-ajax').selectpicker('refresh');
                    });

                    if (KTUtil.get('kt_quick_search_dropdown')) {
                        KTQuickSearch().init(KTUtil.get('kt_quick_search_dropdown'));
                    }

                    if (KTUtil.get('kt_quick_search_inline')) {
                        KTQuickSearchInline().init(KTUtil.get('kt_quick_search_inline'));
                    }

                    if (KTUtil.get('kt_quick_search_offcanvas')) {
                        KTQuickSearchOffcanvas().init(KTUtil.get('kt_quick_search_offcanvas'));
                    }

                    \$('input.decimal').blur(function(){
                        var num = parseFloat(\$(this).val());
                        var cleanNum = num.toFixed(";
        // line 852
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 852), "html", null, true);
        echo ");
                        \$(this).val(cleanNum);
                    });

                    var arrows;
                    if (KTUtil.isRTL()) {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-right\"></i>',
                            rightArrow: '<i class=\"la la-angle-left\"></i>'
                        }
                    } else {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-left\"></i>',
                            rightArrow: '<i class=\"la la-angle-right\"></i>'
                        }
                    }

                    \$.fn.datepicker.dates['";
        // line 869
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "'] = {
                        days: [\"";
        // line 870
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sunday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Monday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tuesday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wednesday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thursday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Friday"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saturday"]);
        echo "\"],
                        daysShort: [\"";
        // line 871
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sun"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mon"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tue"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wed"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thu"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fri"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sat"]);
        echo "\"],
                        daysMin: [\"";
        // line 872
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Su"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mo"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tu"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Th"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fr"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sa"]);
        echo "\"],
                        months: [\"";
        // line 873
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"],
                        monthsShort: [\"";
        // line 874
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Jan"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Feb"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mar"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apr"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Jun"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Jul"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Aug"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sep"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oct"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nov"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dec"]);
        echo "\"],
                        today: \"";
        // line 875
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo "\",
                        clear: \"";
        // line 876
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Clear"]);
        echo "\",
                        format: KTAppOptions.dateformat,
                        titleFormat: KTAppOptions.dateformat, /* Leverages same syntax as 'format' */
                        weekStart: 0
                    };
                    \$('.date').datepicker({
                        rtl: KTUtil.isRTL(),
                        language: '";
        // line 883
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "',
                        format: KTAppOptions.dateformat,
                        todayHighlight: true,
                        orientation: \"bottom left\",
                        templates: arrows
                    });

                        var momentNow = moment();

                    console.log(";
        // line 892
        echo twig_escape_filter($this->env, ($context["timezone_offset"] ?? null), "html", null, true);
        echo ");
                    console.log(";
        // line 893
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo ");
                    console.log(momentNow.utcOffset(4));
                    console.log(momentNow.utcOffset(";
        // line 895
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo "));
                    var interval = setInterval(function() {
                        if('ar' == '";
        // line 897
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "'){
                            moment.locale('ar-sa');
                        }
                        var momentNow = moment();
                        \$('#date-part').html(momentNow.utcOffset(";
        // line 901
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo ").format(KTAppOptions.daterangeformat) + ' ');
                        \$('#time-part').html(momentNow.utcOffset(";
        // line 902
        echo twig_escape_filter($this->env, ($context["timezone_offset_hours"] ?? null), "html", null, true);
        echo ").format('hh:mm:ss A'));
                    }, 100);

                });

                \"use strict\";

                var KTQuickSearch = function() {
                    var target;
                    var form;
                    var input;
                    var closeIcon;
                    var resultWrapper;
                    var resultDropdown;
                    var resultDropdownToggle;
                    var inputGroup;
                    var query = '';

                    var hasResult = false;
                    var timeout = false;
                    var isProcessing = false;
                    var requestTimeout = 200; // ajax request fire timeout in milliseconds
                    var spinnerClass = 'kt-spinner kt-spinner--input kt-spinner--sm kt-spinner--brand kt-spinner--right';
                    var resultClass = 'kt-quick-search--has-result';
                    var minLength = 2;

                    var showProgress = function() {
                        isProcessing = true;
                        KTUtil.addClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            KTUtil.hide(closeIcon);
                        }
                    }

                    var hideProgress = function() {
                        isProcessing = false;
                        KTUtil.removeClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            if (input.value.length < minLength) {
                                KTUtil.hide(closeIcon);
                            } else {
                                KTUtil.show(closeIcon, 'flex');
                            }
                        }
                    }

                    var showDropdown = function() {
                        if (resultDropdownToggle && !KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                            \$(resultDropdownToggle).dropdown('update');
                        }
                    }

                    var hideDropdown = function() {
                        if (resultDropdownToggle && KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                        }
                    }

                    var processSearch = function() {
                        if (hasResult && query === input.value) {
                            hideProgress();
                            KTUtil.addClass(target, resultClass);
                            showDropdown();
                            KTUtil.scrollUpdate(resultWrapper);

                            return;
                        }

                        query = input.value;

                        KTUtil.removeClass(target, resultClass);
                        showProgress();
                        hideDropdown();

                        \$.request('onQuicksearch', {
                            data: {query: query},
                            success: function(res) {
                                hasResult = true;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, res.result);
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            },
                            error: function(res) {
                                hasResult = false;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, '<span class=\"kt-quick-search__message kt-font-danger\">";
        // line 993
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connection error. Pleae try again later"]);
        echo ".</div>');
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            }
                        });
                    }

                    var handleCancel = function(e) {
                        input.value = '';
                        query = '';
                        hasResult = false;
                        KTUtil.hide(closeIcon);
                        KTUtil.removeClass(target, resultClass);
                        hideDropdown();
                    }

                    var handleSearch = function() {
                        if (input.value.length < minLength) {
                            hideProgress();
                            hideDropdown();

                            return;
                        }

                        if (isProcessing == true) {
                            return;
                        }

                        if (timeout) {
                            clearTimeout(timeout);
                        }

                        timeout = setTimeout(function() {
                            processSearch();
                        }, requestTimeout);
                    }

                    return {
                        init: function(element) {
                            // Init
                            target = element;
                            form = KTUtil.find(target, '.kt-quick-search__form');
                            input = KTUtil.find(target, '.kt-quick-search__input');
                            closeIcon = KTUtil.find(target, '.kt-quick-search__close');
                            resultWrapper = KTUtil.find(target, '.kt-quick-search__wrapper');
                            resultDropdown = KTUtil.find(target, '.dropdown-menu');
                            resultDropdownToggle = KTUtil.find(target, '[data-toggle=\"dropdown\"]');
                            inputGroup = KTUtil.find(target, '.input-group');

                            // Attach input keyup handler
                            KTUtil.addEvent(input, 'keyup', handleSearch);
                            KTUtil.addEvent(input, 'focus', handleSearch);

                            // Prevent enter click
                            form.onkeypress = function(e) {
                                var key = e.charCode || e.keyCode || 0;
                                if (key == 13) {
                                    e.preventDefault();
                                }
                            }

                            KTUtil.addEvent(closeIcon, 'click', handleCancel);
                        }
                    };
                };

                var KTQuickSearchInline = KTQuickSearch;
                var KTQuickSearchOffcanvas = KTQuickSearch;
                ";
        // line 1061
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 1061), "live", [], "any", false, false, false, 1061) == 1)) {
            // line 1062
            echo "                    var pusher = new Pusher('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 1062), "pusher", [], "any", false, false, false, 1062), "key", [], "any", false, false, false, 1062), "html", null, true);
            echo "', {cluster: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "notifications", [], "any", false, false, false, 1062), "pusher", [], "any", false, false, false, 1062), "cluster", [], "any", false, false, false, 1062), "html", null, true);
            echo "',forceTLS: true});
                    var presenceChannel = pusher.subscribe('spotlayer');
                    presenceChannel.bind('notification', function(data) {
                        //if(data.id != ";
            // line 1065
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 1065), "html", null, true);
            echo "){
                        if(data.for_userid == ";
            // line 1066
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 1066), "html", null, true);
            echo "){
                            setTimeout( function() {
                                // create the notification
                                // check if the reciever is the targeted user
                                if(data.thumb == 'icon'){
                                    var thumb_content = '<i class=\"'+data.icon+'\"></i>';
                                }else{
                                    var thumb_content = '<img src=\"./admin/vendors/custom/notifications/img/default.jpg\"/>';
                                }
                                var notification = new NotificationFx({
                                    message : '<div class=\"ns-thumb '+data.thumb+'\">'+thumb_content+'</div><div class=\"ns-content notice\"><p><a href=\"";
            // line 1076
            echo url("dashboard/notifications");
            echo "\">'+data.sender.name+'</a> '+data.subject+'.</p></div>',
                                    layout : 'other',
                                    ttl : 5000,
                                    effect : 'thumbslider',
                                    type : 'notice', // notice, warning, error or success
                                    onClose : function() {
                                        //dismiss notification and make it as readed;
                                    }
                                });
                                // show the notification
                                notification.show();
                                if(data.sound){
                                    let audio = new Audio('./admin/media/notifications/notification.mp3');
                                    audio.play();
                                }
                                \$.request('onRefreshTime', {
                                    data: {id: ";
            // line 1092
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 1092), "html", null, true);
            echo "},
                                    update: { notificationsmenu: '#notificationsmenu' },
                                    complete: function(e) {
                                        notificationPanel();
                                    }
                                });
                            }, 4000 );
                        }


                    });
                ";
        }
        // line 1104
        echo "            </script>
     <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

     <script>
         \$('#vehicleTypeCarousel').slick({
             centerMode: true,
             arrows: true,
             centerPadding: '60px',
             prevArrow: \"<button type='button' class='slick-prev'><i class='fa fa-chevron-left fa-2x' aria-hidden='true'></i></button>\",
             nextArrow: \"<button type='button' class='slick-next'><i class='fa fa-chevron-right fa-2x' aria-hidden='true'></i></button>\",
             slidesToShow: 3,
             slidesToScroll: 1,
             autoplay: false,
             infinite: true,
             autoplaySpeed: 2000,
             responsive: [
                 {
                     breakpoint: 768,
                     settings: {
                         arrows: true,
                         centerMode: true,
                         centerPadding: '40px',
                         slidesToShow: 3,
                         slidesToScroll: 1,
                     }
                 },
                 {
                     breakpoint: 480,
                     settings: {
                         arrows: true,
                         centerMode: true,
                         centerPadding: '30px',
                         slidesToShow: 1
                     }
                 }
             ]
         });

     </script>

     <!--end::Page Scripts -->
    </body>
    <!-- end::Body -->
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/layouts/admin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2103 => 1104,  2088 => 1092,  2069 => 1076,  2056 => 1066,  2052 => 1065,  2043 => 1062,  2041 => 1061,  1970 => 993,  1876 => 902,  1872 => 901,  1865 => 897,  1860 => 895,  1855 => 893,  1851 => 892,  1839 => 883,  1829 => 876,  1825 => 875,  1799 => 874,  1773 => 873,  1757 => 872,  1741 => 871,  1725 => 870,  1721 => 869,  1701 => 852,  1678 => 832,  1649 => 806,  1606 => 766,  1595 => 757,  1591 => 756,  1580 => 755,  1573 => 750,  1569 => 748,  1567 => 747,  1553 => 736,  1549 => 735,  1545 => 734,  1541 => 733,  1536 => 731,  1505 => 702,  1502 => 701,  1499 => 700,  1497 => 699,  1475 => 680,  1467 => 677,  1457 => 669,  1455 => 668,  1450 => 665,  1436 => 662,  1433 => 661,  1431 => 660,  1428 => 659,  1422 => 656,  1419 => 655,  1417 => 654,  1405 => 644,  1402 => 643,  1399 => 642,  1391 => 636,  1381 => 632,  1377 => 631,  1373 => 630,  1370 => 629,  1366 => 628,  1348 => 613,  1344 => 611,  1341 => 610,  1338 => 609,  1311 => 607,  1306 => 606,  1304 => 605,  1301 => 604,  1292 => 597,  1275 => 594,  1270 => 593,  1266 => 592,  1259 => 588,  1254 => 585,  1252 => 584,  1249 => 583,  1243 => 581,  1241 => 580,  1238 => 579,  1230 => 577,  1227 => 576,  1224 => 575,  1217 => 571,  1213 => 570,  1208 => 569,  1206 => 568,  1201 => 565,  1198 => 564,  1194 => 562,  1180 => 561,  1177 => 560,  1174 => 559,  1171 => 558,  1168 => 557,  1160 => 555,  1152 => 553,  1143 => 547,  1141 => 546,  1136 => 545,  1133 => 544,  1130 => 543,  1112 => 542,  1110 => 541,  1107 => 540,  1104 => 539,  1099 => 536,  1093 => 534,  1090 => 533,  1083 => 528,  1070 => 526,  1066 => 525,  1059 => 521,  1056 => 520,  1053 => 519,  1047 => 515,  1037 => 511,  1033 => 510,  1030 => 509,  1026 => 508,  1022 => 507,  1016 => 504,  1013 => 503,  1011 => 502,  1006 => 500,  1003 => 499,  994 => 492,  984 => 488,  980 => 487,  975 => 485,  971 => 484,  968 => 483,  964 => 482,  959 => 480,  952 => 476,  947 => 473,  945 => 472,  935 => 465,  930 => 463,  926 => 462,  917 => 460,  914 => 459,  912 => 458,  909 => 457,  903 => 455,  901 => 454,  895 => 452,  893 => 451,  874 => 435,  870 => 434,  860 => 429,  854 => 426,  841 => 416,  835 => 413,  822 => 403,  816 => 400,  807 => 394,  804 => 393,  798 => 389,  789 => 388,  783 => 385,  773 => 379,  771 => 378,  763 => 373,  757 => 370,  748 => 364,  730 => 357,  724 => 354,  720 => 352,  714 => 350,  708 => 348,  706 => 347,  698 => 341,  692 => 339,  686 => 337,  684 => 336,  680 => 335,  676 => 334,  669 => 329,  662 => 324,  652 => 320,  648 => 319,  638 => 317,  634 => 316,  628 => 312,  618 => 310,  613 => 309,  607 => 305,  605 => 304,  601 => 302,  597 => 301,  580 => 287,  574 => 284,  570 => 283,  566 => 282,  508 => 226,  504 => 224,  498 => 220,  494 => 218,  492 => 217,  486 => 214,  477 => 212,  468 => 211,  466 => 210,  461 => 207,  454 => 206,  450 => 204,  445 => 201,  438 => 200,  430 => 196,  426 => 194,  420 => 192,  418 => 191,  410 => 190,  405 => 189,  402 => 188,  397 => 187,  392 => 184,  390 => 183,  387 => 182,  383 => 180,  381 => 179,  377 => 178,  372 => 176,  357 => 174,  349 => 173,  345 => 171,  342 => 170,  337 => 169,  334 => 168,  332 => 167,  324 => 162,  313 => 154,  303 => 147,  297 => 144,  292 => 141,  286 => 138,  283 => 137,  277 => 134,  274 => 133,  272 => 132,  227 => 94,  223 => 93,  197 => 74,  193 => 73,  180 => 62,  177 => 61,  167 => 53,  154 => 42,  139 => 29,  137 => 28,  121 => 19,  113 => 18,  105 => 17,  97 => 16,  89 => 15,  79 => 12,  71 => 11,  60 => 9,  55 => 7,  51 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{currentLang}}\" {% if currentLang == 'ar'%}direction=\"rtl\" dir=\"rtl\" style=\"direction: rtl\"{% endif %} >

    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <base href=\"{{ 'assets/admin'|theme }}\"><!--end::Base Path -->
        <meta charset=\"{{ settings.company.charset }}\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>{{ this.page.title|__ }} | {% if settings.company.title %}{{ settings.company.title|__ }}{% else %}{{ settings.company.title }}{% endif %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
     <meta name=\"keywords\" content=\"{% if settings.company.keywords %}{{ settings.company.keywords|__ }}{% else %}{{ settings.company.keywords }}{% endif %}\" />
     <meta name=\"description\" content=\"{% if settings.company.description %}{{ settings.company.description|__ }}{% else %}{{ settings.company.description }}{% endif %}\">
        <meta name=\"author\" content=\"\"/>

        <link rel=\"icon\" href=\"{% if settings.favicon %}{{ settings.favicon.path }}{% else %}./admin/media/logos/logo.ico{% endif %}\" type=\"image/png\">
        <link rel=\"apple-touch-icon\" href=\"{% if settings.favicon %}{{ settings.favicon.path }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{% if settings.favicon %}{{ settings.favicon.thumb(72,72) }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{% if settings.favicon %}{{ settings.favicon.thumb(114,114) }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{% if settings.favicon %}{{ settings.favicon.thumb(144,144) }}{% else %}./admin/media/logos/logo.ico{% endif %}\"/>

        <!--begin::Fonts -->
        <link href=\"//fonts.googleapis.com/css?family=Nunito|Roboto\" rel=\"stylesheet\">
        <!--end::Fonts -->


        <!--begin::Global Theme Styles(used by all pages) -->
            <link href=\"./admin/vendors/global/vendors.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
            {% if currentLang == 'ar'%}
                <link href=\"./admin/css/demo1/style.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"//fonts.googleapis.com/css?family=Cairo:300,400,600,700\" rel=\"stylesheet\">


                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            {% else %}
                <link href=\"./admin/css/demo1/style.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-default.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/vendors/custom/notifications/css/ns-style-other.css\" rel=\"stylesheet\" type=\"text/css\" />

                <!--begin::Layout Skins(used by all pages) -->
                <link href=\"./admin/css/demo1/skins/header/base/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/header/menu/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/brand/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"./admin/css/demo1/skins/aside/light.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!--end::Layout Skins -->
            {% endif %}
        <!--end::Global Theme Styles -->
        <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>

        <!--begin::Layout Skins(used by all pages) -->
        <!--end::Layout Skins -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/css/ajax-bootstrap-select.min.css'>

        {% styles %}
        <link rel=\"stylesheet\" href=\"./admin/css/custom_style.css\" type=\"text/css\" />

    </head>

    <body  class=\"kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed\"  >


     <!-- begin:: Page -->
        <!-- begin:: Header Mobile -->
        <div id=\"kt_header_mobile\" class=\"kt-header-mobile  kt-header-mobile--fixed \" >
            <div class=\"kt-header-mobile__logo\">
          <a href=\"{{url('/')}}\">
           <img alt=\"Logo\" src=\"{% if settings.mobile_logo %}{{ settings.mobile_logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\" style=\"max-height:40px\"/>
             </a>
            </div>
            <div class=\"kt-header-mobile__toolbar\">
    <button class=\"kt-header-mobile__toggler kt-header-mobile__toggler--left\" id=\"kt_aside_mobile_toggler\"><span></span></button>
    <button class=\"kt-header-mobile__toggler\" id=\"kt_header_mobile_toggler\"><span></span></button>
             <button class=\"kt-header-mobile__topbar-toggler\" id=\"kt_header_mobile_topbar_toggler\"><i class=\"flaticon-more\"></i></button>
            </div>
        </div>
        <!-- end:: Header Mobile -->
        <div class=\"kt-grid kt-grid--hor kt-grid--root\">
      <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page\">
                <!-- begin:: Aside -->
                <button class=\"kt-aside-close \" id=\"kt_aside_close_btn\"><i class=\"la la-close\"></i></button>

                <div class=\"kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop\" id=\"kt_aside\">
                 <!-- begin:: Aside -->
                    <div class=\"kt-aside__brand kt-grid__item \" id=\"kt_aside_brand\">
                     <div class=\"kt-aside__brand-logo\">
                      <a href=\"{{url('dashboard')}}\">
                       <img alt=\"Logo\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\" style=\"max-height:50px;\"/>
                      </a>
                     </div>

               <div class=\"kt-aside__brand-tools\">
                   <button class=\"kt-aside__brand-aside-toggler\" id=\"kt_aside_toggler\">
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) \"/>
                                            <path d=\"M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                    <span>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
                                            <path d=\"M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            <path d=\"M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z\" id=\"Path-94\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\" transform=\"translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) \"/>
                                        </g>
                                    </svg>
                                </span>
                   </button>
                   <!--
                   <button class=\"kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left\" id=\"kt_aside_toggler\"><span></span></button>
                   -->
                  </div>
                 </div>
                    <!-- end:: Aside -->
                    <!-- begin:: Aside Menu -->
                    <div class=\"kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid\" id=\"kt_aside_menu_wrapper\">

                     <div id=\"kt_aside_menu\" class=\"kt-aside-menu \" data-ktmenu-vertical=\"1\" data-ktmenu-scroll=\"1\" data-ktmenu-dropdown-timeout=\"500\">

                            <div class=\"kt-widget kt-widget--user-profile-1 kt-padding-l-20 kt-padding-r-20 kt-padding-b-0\">
                                <div class=\"kt-widget__head\">
                                    {% if user.avatar %}
                                        <div class=\"kt-widget__media\">
                                            <img src=\"{{user.avatar.thumb(100, 100,'crop')}}\" alt=\"image\">
                                        </div>
                                   {% else %}
                                       <span class=\"kt-media kt-media--lg kt-media--brand \">
                                            <span>{{user.name|upper|slice(0,2)}}</span>
                                        </span>
                                   {% endif %}
                                    <div class=\"kt-widget__content kt-padding-t-10\">
                                        <div class=\"kt-widget__section\">
                                            <a href=\"javascript:void(0);\" class=\"kt-widget__username\">
                                                {{user.name|capitalize}}
                                            </a>
                                            <span class=\"kt-widget__subtitle\">
                                                {{'Welcome back'|__}},
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-widget__footer kt-margin-t-15\">
                                    <a href=\"{{'dashboard/order-create'|page}}\" class=\"btn btn-label-brand btn-lg btn-upper btn-block\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--light\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <circle id=\"Oval-5\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"10\"/>
                                                <path d=\"M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                         <span>{{'Add Shipment'|__}}</span>
                                     </a>
                                </div>
                            </div>

                            {% if mainMenu.menuItems %}
                          <ul class=\"kt-menu__nav \">
                                    {% for item in mainMenu.menuItems if not item.viewBag.isHidden %}
                                        {% if user.hasUserPermission(item.code, 'r') or item.code is empty %}


                                   <li class=\"kt-menu__item  {{ item.isActive or item.isChildActive or this.page.menu_breadcrumb == item.code ? 'kt-menu__item--open kt-menu__item--here' : '' }} kt-menu__item--submenu kt-menu__item--rel\" {% if item.items %}data-ktmenu-submenu-toggle=\"hover\" aria-haspopup=\"true\"{% endif %}>
                                                <a href=\"{% if item.url %}{{ item.url }}{% else %}#{% endif %}\" class=\"kt-menu__link {% if item.items %}kt-menu__toggle{% endif %}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                                                    <span class=\"kt-menu__link-icon\">
                                                        {{ item.viewBag.icon|raw }}
                                                    </span>
                                                    <span class=\"kt-menu__link-text\">{{ item.title|__ }}</span>
                                                    {% if item.items %}
                                                        <i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
                                                    {% endif %}
                                                </a>
                                                {% if item.items %}
                                                    <div class=\"kt-menu__submenu \">
                                                        <span class=\"kt-menu__arrow\"></span>
                                                        <ul class=\"kt-menu__subnav\">
                                                            {% for item in item.items if not item.viewBag.isHidden %}
                                                                {% if user.hasUserPermission(item.code, 'r') or item.code is empty %}
                                                                    <li class=\"kt-menu__item {{ item.isActive or item.isChildActive or (currentPageUrl == item.url|replace({'[url]': url('/')})) ? 'kt-menu__item--open kt-menu__item--here' : '' }}\"  aria-haspopup=\"true\">
                                                                        <a  href=\"{% if item.url %}{{ item.url|replace({'[url]': url('/')}) }}{% else %}javascript:void(0);{% endif %}\" class=\"kt-menu__link \">
                                                                            {% if item.viewBag.icon and item.viewBag.icon != '' %}
                                                                                {{ item.viewBag.icon|raw }}
                                                                            {% else %}
                                                                                <i class=\"kt-menu__link-bullet kt-menu__link-bullet--dot\"><span></span></i>
                                                                            {% endif %}
                                                                            <span class=\"kt-menu__link-text\">{{ item.title|__ }}</span>
                                                                        </a>
                                                                    </li>
                                                                {% endif %}
                                                            {% endfor %}
                                                        </ul>
                                                    </div>
                                                {% endif %}
                                            </li>
                                        {% endif %}
                                    {% endfor %}

                                </ul>
                         <ul class=\"kt-menu__nav \">
                             {% if user.role_id==12 %}
                             <li class=\"kt-menu__item  {{ item.isActive or item.isChildActive or this.page.menu_breadcrumb == item.code ? 'kt-menu__item--open kt-menu__item--here' : '' }} kt-menu__item--submenu kt-menu__item--rel\" {% if item.items %}data-ktmenu-submenu-toggle=\"hover\" aria-haspopup=\"true\"{% endif %}>
                                 <a href=\"/en/my-bids/list\" class=\"kt-menu__link {% if item.items %}kt-menu__toggle{% endif %}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                                 <span class=\"kt-menu__link-icon\">
                                                     {{ item.viewBag.icon|raw }}
                                                    </span>
                                 <span class=\"kt-menu__link-text\">My Shipments</span>
                                 {% if item.items %}
                                 <i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
                                 {% endif %}
                                 </a>

                             </li>
                             {% endif %}
                         </ul>
                            {% endif %}



                     </div>
                    </div>
                    <!-- end:: Aside Menu -->
                </div>
                <!-- end:: Aside -->

       <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper\" id=\"kt_wrapper\">
        <!-- begin:: Header -->
                    <div id=\"kt_header\" class=\"kt-header kt-grid__item  kt-header--fixed \" >
                        <!-- begin:: Header Menu -->
                        <button class=\"kt-header-menu-wrapper-close\" id=\"kt_header_menu_mobile_close_btn\"><i class=\"la la-close\"></i></button>
                        <div class=\"kt-header-menu-wrapper\" id=\"kt_header_menu_wrapper\">

                         <div id=\"kt_header_menu\" class=\"kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default \"  >
                          <ul class=\"kt-menu__nav \">
                           <li class=\"kt-menu__item\">
                                        <a  href=\"javascript:void(0);\" class=\"kt-menu__link kt-menu__time\">
<!--                                            <i class=\"kt-menu__link-icon flaticon-clock-1\"></i>-->
                                            <span class=\"kt-menu__link-text\">
                                                <div class='time-frame'>
                                                    <div id='date-part-icon' class=\"d-inline-block mr-1\">
                                                        <i class=\"far fa-calendar-day\"></i>
                                                    </div>
                                                    <div id='date-part' class=\"d-inline-block\"></div>
                                                    <div id='time-part-icon' class=\"d-inline-block ml-3 mr-1\">
                                                        <i class=\"far fa-clock\"></i>
                                                    </div>
                                                    <div id='time-part' class=\"d-inline-block\"></div>
                                                </div>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                         </div>
                        </div>
                        <!-- end:: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        <div class=\"kt-header__topbar\">
                            <!--begin: Search -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--search dropdown\" id=\"kt_quick_search_toggle\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <span class=\"kt-header__topbar-icon\">
             <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                <path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                                <path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg\">
                                    <div class=\"kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact\" id=\"kt_quick_search_dropdown\">
                                        <form method=\"GET\" action=\"{{url('dashboard/search')}}\"class=\"kt-quick-search__form\">
                                            {{form_token()}}
                                            {{form_sessionKey()}}
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"flaticon2-search-1\"></i></span></div>
                                                <input type=\"text\" class=\"form-control kt-quick-search__input\" placeholder=\"{{'quick search'|__}}...\" name=\"quicksearch\" >
                                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"la la-close kt-quick-search__close\"></i></span></div>
                                            </div>
                                        </form>
                                        <div class=\"kt-quick-search__wrapper kt-scroll\" data-scroll=\"true\" data-height=\"325\" data-mobile-height=\"200\" style=\"direction: ltr;\">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search -->

                            <!--begin: Notifications -->
                            <div id=\"notificationsmenu\" class=\"kt-header__topbar-item dropdown\">
                                {% partial 'notificationsmenu' %}
                            </div>
                            <!--end: Notifications -->
                            {% if locales %}
                                <!--begin: Language bar -->
                                <div class=\"kt-header__topbar-item kt-header__topbar-item--langs\">
                                    <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                        <span class=\"kt-header__topbar-icon kt-header__topbar-icon--info\">
                                            {% for code, name in locales if activeLocale == code %}
                                                <img class=\"\" src=\"./admin/media/flags/{{code}}.svg\" alt=\"\" />
                                            {% endfor %}
                                        </span>
                                    </div>
                                    <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim\">
                                        <ul class=\"kt-nav kt-margin-t-10 kt-margin-b-10\">
                                            {% for code, name in locales %}
                                                <li class=\"kt-nav__item {% if activeLocale == code %}kt-nav__item--active{% endif %} locale\" rel=\"{{code}}\">
                                                    <a href=\"#\" class=\"kt-nav__link\">
                                                        <span class=\"kt-nav__link-icon\"><img src=\"./admin/media/flags/{{code}}.svg\" alt=\"\" /></span>
                                                        <span class=\"kt-nav__link-text\">{{ name }}</span>
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                                <!--end: Language bar -->
                            {% endif %}

                            <!--begin: User bar -->
                            <div class=\"kt-header__topbar-item kt-header__topbar-item--user\">
                                <div class=\"kt-header__topbar-wrapper\" data-toggle=\"dropdown\" data-offset=\"10px,0px\">
                                    <div class=\"kt-header__topbar-user\">
                                        <span class=\"kt-header__topbar-welcome\">{{'Hi'|__}},</span>
                                        <span class=\"kt-header__topbar-username\">{{user.name|capitalize}}</span>
                                        {% if user.avatar %}
                                             <img alt=\"Pic\" src=\"{{user.avatar.thumb(25, 25,'crop')}}\" />
                                        {% else %}
                                           <span class=\"kt-badge kt-badge--username kt-badge--unified-brand kt-badge--lg kt-badge--rounded kt-font-light kt-badge--bold\">{{user.name|upper|slice(0,2)}}</span>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl\">
                                    <!--begin: Head -->
                                    <div class=\"kt-user-card kt-user-card--skin-light kt-notification-item-padding-x\">
                                        <div class=\"kt-user-card__avatar\">
                                            {% if user.avatar %}
                                                 <img alt=\"Pic\" src=\"{{user.avatar.thumb(60, 60,'crop')}}\" />
                                            {% else %}
                                                <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold\">{{user.name|capitalize|slice(0,1)}}</span>
                                             {% endif %}
                                        </div>
                                        <div class=\"kt-user-card__name\">
                                            {{user.name|capitalize}}
                                        </div>
                                        <!--<div class=\"kt-user-card__badge kt-hidden\">
                                            <span class=\"btn btn-{% if user.messages.where('read_at', null)|length > 0 %}danger{% else %}success{% endif %} btn-sm btn-bold btn-font-md\">{{user.messages.where('read_at', null)|length}} {{'messages'|__}}</span>
                                        </div>-->
                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class=\"kt-notification\">
                                        <a href=\"{{'dashboard/profile'|page}}\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-calendar-3 kt-font-success\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'My Profile'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'Account settings and more'|__}}
                                                </div>
                                            </div>
                                        </a>
                                        <!--
                                            {% if user.hasUserPermission('message', 'r') %}
                                                <a href=\"{{'dashboard/inbox'|page}}\" class=\"kt-notification__item\">
                                                    <div class=\"kt-notification__item-icon\">
                                                        <i class=\"flaticon2-mail kt-font-warning\"></i>
                                                    </div>
                                                    <div class=\"kt-notification__item-details\">
                                                        <div class=\"kt-notification__item-title kt-font-bold\">
                                                            {{'Messages'|__}}
                                                        </div>
                                                        <div class=\"kt-notification__item-time\">
                                                            {{'Customers messages from website'|__}}{% if unreaded > 0 %} <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">{{unreaded}} {{'Unreaded'|__}}</span>{% endif %}
                                                        </div>
                                                    </div>
                                                </a>
                                            {% endif %}
                                        -->
                                        <a href=\"{{'dashboard/notifications'|page}}\" class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-rocket-1 kt-font-danger\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'My Notifications'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'all pervious notifications'|__}}
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-notification__item kt-hidden\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-hourglass kt-font-brand\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'My Tasks'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'latest tasks and requests'|__}}
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"kt-hidden kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <i class=\"flaticon2-cardiogram kt-font-warning\"></i>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title kt-font-bold\">
                                                    {{'Billing'|__}}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {{'billing & statements'|__}} <span class=\"kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded\">2 {{'pending'|__}}</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"kt-notification__custom kt-space-between\">
                                            <a class=\"btn btn-danger btn-block btn-bold kt-font-light\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">{{'Sign Out'|__}}</a>
                                            <a href=\"#\" target=\"_blank\" class=\"btn btn-clean btn-sm btn-bold kt-hidden\">{{'Upgrade Plan'|__}}</a>
                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                    <!-- end:: Header -->
        <div class=\"kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor\" id=\"kt_content\">
                        <!-- begin:: Content Head -->
                        <div class=\"kt-subheader   kt-grid__item\" id=\"kt_subheader\">
                            <div class=\"kt-container  kt-container--fluid  \">
                                <div class=\"kt-subheader__main\">
                                    {% set crumbOptions = breadcrumbs.options %}
                                    <h3 class=\"kt-subheader__title\"><button class=\"kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left\" id=\"kt_subheader_mobile_toggle\"><span></span></button>{{ this.page.title|__ }}</h3>

                                    {% if this.page.description %}
                                        <span class=\"kt-subheader__desc\">{{ this.page.description|__ }}</span>
                                    {% endif %}
                                    <span class=\"kt-subheader__separator kt-subheader__separator--v\"></span>
                                    {% if this.page.listing %}
                                        <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                            <span class=\"kt-subheader__desc\" id=\"kt_subheader_total\">{% if total_records %}{{total_records}} {{'Total'|__}}{% endif %}</span>
                                            <form class=\"kt-margin-l-20\" id=\"kt_subheader_search_form\" style=\"margin-left:10px !important \">
                                                {{form_token()}}
                                                {{form_sessionKey()}}
                                                <div class=\"kt-input-icon kt-input-icon--right kt-subheader__search\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\"{{'Quick Search'|__}}\" id=\"generalSearch\">
                                                    <span class=\"kt-input-icon__icon kt-input-icon__icon--right\">
                                                        <span><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" id=\"Path-2\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" id=\"Path\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></span>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        {% if filter_statuses %}
                                            <div class=\"kt-subheader__group\" id=\"kt_subheader_search\">
                                                <div class=\"btn-toolbar kt-margin-l-20\">
                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_filter_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'Filter By'|__}}<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                    <span class=\"kt-nav__section-text kt-font-boldest kt-padding-b-10\">{{'Only show'|__}}:</span>
                                                                    <br />
                                                                    {% for id,name in filter_statuses %}
                                                                        <form class=\"kt_subheader_filter_form\">
                                                                            {{form_token()}}
                                                                            {{form_sessionKey()}}
                                                                            <li class=\"kt-nav__item\">
                                                                                <input type='hidden' class=\"filter\" value=\"{{id}}\" />
                                                                                <button class=\"btn btn-outline-dark btn-wide\" style=\"display: block;width: 100%;\" type=\"submit\">{{name}}</button>
                                                                            </li>
                                                                        </form>
                                                                    {% endfor %}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"kt-subheader__group kt-hidden\" id=\"kt_subheader_group_actions\">
                                            <div class=\"kt-subheader__desc\"><span id=\"kt_subheader_group_selected_rows\"></span> {{'Selected'|__}}:</div>
                                            <div class=\"btn-toolbar kt-margin-l-20\">
                                                {% if statuses %}
                                                    <div class=\"dropdown\" id=\"kt_subheader_group_actions_status_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'Update Status'|__}}</button>
                                                        <div class=\"dropdown-menu\">
                                                            <ul class=\"kt-nav\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\"><span class=\"kt-nav__section-text\">{{'Change status to'|__}}:</span></li>
                                                                {% for status in statuses %}
                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"#\" class=\"kt-nav__link\" data-toggle=\"status-change\" data-status=\"{{status.value}}\">
                                                                            <span class=\"kt-nav__link-text\"><span class=\"kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold\">{{status.name}}</span></span>
                                                                        </a>
                                                                    </li>
                                                                {% endfor %}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                {% if this.page.actions.listing  is defined %}
                                                <div class=\"dropdown\" id=\"kt_subheader_group_actions_shipment_change\">
                                                        <button type=\"button\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'Selected Actions'|__}}<span id=\"filter_selected\"></span></button>
                                                        <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                            <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                <li class=\"kt-nav__section kt-nav__section--first\">
                                                                {% for button in this.page.actions.listing %}
                                                                    <button class=\"btn btn-outline-dark btn-sm btn-bold \" id=\"{{button.id}}\" style=\"display: block;width: 100%;\" >{% if button.title|__ %}{{button.title|__}}{% endif %}</button>
                                                                {% endfor %}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                                {% if this.page.actions.delete is not defined %}
                                                    <button class=\"btn btn-label-danger btn-bold btn-sm btn-icon-h\" id=\"kt_subheader_group_actions_delete_all\">{{'Delete All'|__}}</button>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% else %}
                                        {% if currentCrumb.show_crumb %}
                                            <div class=\"kt-subheader__breadcrumbs\">
                                                {% set activeCrumb = '' %}
                                                {% for crumb in breadcrumbs %}
                                                    {% if crumb.in_crumb_trail %}
                                                        {% if not loop.last and not crumb.crumb_disabled %}
                                                            <a href=\"{{crumb.baseFileName | page}}\" class=\"kt-subheader__breadcrumbs-home\">
                                                                {% if loop.first %}
                                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                                            <path d=\"M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
                                                                        </g>
                                                                    </svg>
                                                                {% else %}{% if crumb.title|__ %}{{crumb.title|__}}{% endif %}{% endif %}</a>
                                                        {% else %}
                                                            <span class=\"kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active\">{% if crumb.title|__ %}{{crumb.title|__}}{% endif %}</span>
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if not loop.last %}
                                                        {% set activeCrumb = crumb %}
                                                    {% endif %}
                                                {% endfor %}
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                </div>
                                <div class=\"kt-subheader__toolbar\">
                                    <div class=\"kt-subheader__wrapper\">
                                        {% if this.page.daterange == 1 %}
                                            <div class=\"btn kt-subheader__btn-daterange\" id=\"kt_dashboard_daterangepicker\" data-toggle=\"kt-tooltip\" title=\"{{'Select dashboard daterange'|__}}\" data-placement=\"left\">
                                                <span class=\"kt-subheader__btn-daterange-title\" id=\"kt_dashboard_daterangepicker_title\">{{'Today'|__}}</span>&nbsp;
                                                <span class=\"kt-subheader__btn-daterange-date\" id=\"kt_dashboard_daterangepicker_date\">{{'now'|date('d M')}}</span>
                                                <i class=\"flaticon2-calendar-1\"></i>
                                            </div>
                                        {% else %}
                                            {% if this.page.actions %}
                                                {% if this.page.actions.add is defined %}
                                                    <a href=\"{{this.page.actions.add}}\" class=\"btn btn-label-success btn-bold\" id=\"add_new_btn\">{{'Add new'|__}}&nbsp;<i class=\"flaticon2-add\"></i></a>
                                                {% endif %}

                                                {% if this.page.actions.filter is defined %}
                                                    <a href=\"#\" class=\"btn btn-label-success btn-bold\" id=\"filter\">{{'Filter'|__}}&nbsp;<i class=\"flaticon2-search\"></i></a>
                                                {% endif %}
                                                 <!-- add multi shipments  -->
                                                {% if this.page.actions.multi  is defined %}
                                                <div class=\"kt-subheader__group\" id=\"kt_subheader_search\" style=\"display:inline-block; \">
                                                    <div class=\"btn-toolbar kt-margin-l-20\">
                                                        <div class=\"dropdown\" id=\"\">
                                                            <button type=\"button\" class=\"btn btn-label-success btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'Add Using'|__}}<span id=\"filter_selected\"></span></button>
                                                            <div class=\"dropdown-menu kt-padding-t-0 kt-padding-b-0\">
                                                                <ul class=\"kt-nav kt-padding-t-0 kt-padding-b-10\">
                                                                    <li class=\"kt-nav__section kt-nav__section--first\">
                                                                    {% for button in this.page.actions.multi %}
                                                                        <button class=\"btn btn-outline-dark btn-sm btn-bold \" id=\"{{button.id}}\" style=\"display: block;width: 100%;\" >
                                                                            <a href=\"{% if button.url %}{{button.url}}{% else %}#{% endif %}\" style=\"\">{% if button.title|__ %}{{button.title|__}}{% endif %}</a></button>

                                                                    {% endfor %}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {% endif %}
                                                <!--end  -->
                                                {% if this.page.actions.buttons is defined %}
                                                    {% for button in this.page.actions.buttons %}
                                                        <a href=\"{% if button.url %}{{button.url}}{% else %}#{% endif %}\" class=\"btn btn-label-{% if button.type %}{{button.type}}{% else %}primary{% endif %} btn-bold\" id=\"{{button.id}}\">{% if button.title|__ %}{{button.title|__}}{% endif %}&nbsp;<i class=\"{{button.icon}}\"></i></a>
                                                    {% endfor %}
                                                {% endif %}
                                                {% if this.page.actions.other is defined %}
                                                    <div class=\"dropdown dropdown-inline\" data-toggle-=\"kt-tooltip\" title=\"Quick actions\" data-placement=\"left\">
                                                        <a href=\"#\" class=\"btn kt-subheader__btn-primary\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                            {{'Other Actions'|__}} &nbsp;

                                                            <!--<i class=\"flaticon2-calendar-1\"></i>-->
                                                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--sm\">
                                                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                    <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\" />
                                                                    <rect id=\"Rectangle-8\" fill=\"#000000\" x=\"4\" y=\"5\" width=\"16\" height=\"3\" rx=\"1.5\" />
                                                                    <path d=\"M7.5,11 L16.5,11 C17.3284271,11 18,11.6715729 18,12.5 C18,13.3284271 17.3284271,14 16.5,14 L7.5,14 C6.67157288,14 6,13.3284271 6,12.5 C6,11.6715729 6.67157288,11 7.5,11 Z M10.5,17 L13.5,17 C14.3284271,17 15,17.6715729 15,18.5 C15,19.3284271 14.3284271,20 13.5,20 L10.5,20 C9.67157288,20 9,19.3284271 9,18.5 C9,17.6715729 9.67157288,17 10.5,17 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <div class=\"dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right\">

                                                            <!--begin::Nav-->
                                                            <ul class=\"kt-nav\">
                                                                {% for link in this.page.actions.other %}
                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"{{link.url}}\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon {{link.icon}}\"></i>
                                                                            <span class=\"kt-nav__link-text\">{{link.name}}</span>
                                                                        </a>
                                                                    </li>
                                                                {% endfor %}
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Content Head -->
                        <!-- begin:: Content -->
                     <div class=\"kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid\">



                       {% if settings.demo_mode %}
                         <div class=\"alert alert-warning\" role=\"alert\">
                                 {{'Please be aware that data will be replaced on this demo every 6 hours so that every one can test this demo as he needs without corrupting the data.'|__}}
                          </div>
                      {% endif %}

                       {% if settings.google.map == '' %}
                          <div class=\"alert alert-warning\" role=\"alert\">
                            {{'Google maps functions will not be activated until you enter your google key'|__}} <a href=\"{{url('dashboard/settings/google')}}\">&nbsp;{{'Here'|__}}</a>, {{'you can follow this tutorial to generate one'|__}} <a href=\"https://developers.google.com/maps/documentation/embed/get-api-key\" target=\"_blank\">&nbsp;{{'Get an API Key'|__}}</a>
                          </div>
                      {% endif %}



                            {% page %}
               </div>
                        <!-- end:: Content -->
                    </div>

        <!-- begin:: Footer -->
                    <div class=\"kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop\" id=\"kt_footer\">
                     <div class=\"kt-container  kt-container--fluid \">
                      <div class=\"kt-footer__copyright\">
<!--                       {{ \"now\"|date(\"Y\") }}&nbsp;&copy;&nbsp;<a href=\"//spotlayer.com\" target=\"_blank\" class=\"kt-link\">{{'Powered By ivylabtech'|__}}</a>.-->
                      </div>
                      <div class=\"kt-footer__menu\">
<!--                       <a href=\"//ivylabtech.com\" target=\"_blank\" class=\"kt-link\">{{ 'Support'|__ }}</a>-->
                      </div>
                     </div>
                    </div>
                    <!-- end:: Footer -->
                </div>
      </div>
     </div>
        <!-- end:: Page -->


        <!-- begin::Scrolltop -->
        <div id=\"kt_scrolltop\" class=\"kt-scrolltop\">
         <i class=\"fa fa-arrow-up\"></i>
        </div>
        <!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            {% set timezone = settings.timezone_offset|split(':') %}
            {% set timezone_offset = (timezone.0*60) + (timezone.1) %}
            {% set timezone_offset_hours = (timezone_offset/60) %}

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
                \"timezone_offset\": \"{{timezone_offset}}\",
                \"timezone_offset_hours\": \"{{timezone_offset_hours}}\",
                \"dateformat\": \"{{settings.dateformat|replace({'d':'dd', 'm':'mm', 'Y':'yyyy'})}}\",
                \"daterangeformat\": \"{{settings.dateformat|replace({'d':'DD', 'm':'MM', 'M':'MMM'})}}\"
            };
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
            <script src=\"./admin/vendors/custom/notifications/js/modernizr.custom.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/classie.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/custom/notifications/js/notificationFx.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/vendors/global/vendors.bundle.js\" type=\"text/javascript\"></script>
            <script src=\"./admin/js/demo1/scripts.bundle.js\" type=\"text/javascript\"></script>
            {% if settings.notifications.live == 1 %}
                <script src=\"//js.pusher.com/5.0/pusher.min.js\"></script>
            {% endif %}
        <!--end::Global Theme Bundle -->
            </script>

        <!--begin::Page Scripts(used by this page) -->
            <script src='https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.3.8/js/ajax-bootstrap-select.min.js'></script>
            {% framework extras %}
            {% scripts %}
            <script type=\"text/javascript\">
                function initAjaxSelectPicker(url,item,dependency = null){
                    var options = {
                        ajax: {
                            url: url,
                            type: \"GET\",
                            dataType: \"json\",
                            data : function() {
                                return {
                                    q: '{{\"{{{q}}}\"}}',
                                    dependency_id: \$(dependency+\" option:selected\").val()
                                };
                            },
                        },
                        cache: false,
                        extendData:
                        [
                            {
                                key: \"dependency_id\",
                                func: function() {
                                    return \$(dependency+' option:first').val();
                                }
                            }
                        ]
                    };
                    \$(item).selectpicker().filter(\".with-ajax\").ajaxSelectPicker(options);
                    \$(item).trigger(\"change\");
                    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        \$(item).selectpicker('refresh');
                    });

                }
                function flashRequest(type,message){

                    swal.fire({
                        buttonsStyling: false,
                        title: message,
                        type: type,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
                KTUtil.ready(function () {

                    \$.validator.addMethod(\"customDateValidator\", function(value, element) {
                            // parseDate throws exception if the value is invalid
                            try{\$.datepicker.parseDate( KTAppOptions.dateformat, value);return true;}
                            catch(e){return false;}
                        },
                        \"{{'Please enter a valid date'|__}}\"
                    );

                    if('dd/mm/yyyy' == KTAppOptions.dateformat){
                        console.log(KTAppOptions.dateformat);
                        \$.validator.methods.date = function (value, element) {
                            value = dateValue(value);
                            return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());;
                        }

                        function dateValue(value) {
                            var date = value.split(\"/\");
                            return date[2] + \"/\" + date[1] + \"/\" + date[0]
                        }
                    }

                    \$('body').on('click', '.locale', function(e){
                        e.preventDefault();
                        var selected = \$(this).attr('rel');
                        if(selected != ''){
                            \$.request('onSwitchLocale', {
                                data: {locale: selected}
                            });
                        }
                    });
                    \$('select').selectpicker({
                        noneSelectedText: '{{\"Nothing selected\"|__}}',
                    });
                    \$('body').on('changed.bs.select','.with-ajax', function(e, clickedIndex, newValue, oldValue) {
                        \$('.with-ajax').selectpicker('refresh');
                    });

                    if (KTUtil.get('kt_quick_search_dropdown')) {
                        KTQuickSearch().init(KTUtil.get('kt_quick_search_dropdown'));
                    }

                    if (KTUtil.get('kt_quick_search_inline')) {
                        KTQuickSearchInline().init(KTUtil.get('kt_quick_search_inline'));
                    }

                    if (KTUtil.get('kt_quick_search_offcanvas')) {
                        KTQuickSearchOffcanvas().init(KTUtil.get('kt_quick_search_offcanvas'));
                    }

                    \$('input.decimal').blur(function(){
                        var num = parseFloat(\$(this).val());
                        var cleanNum = num.toFixed({{primary_currency.initbiz_money_fraction_digits}});
                        \$(this).val(cleanNum);
                    });

                    var arrows;
                    if (KTUtil.isRTL()) {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-right\"></i>',
                            rightArrow: '<i class=\"la la-angle-left\"></i>'
                        }
                    } else {
                        arrows = {
                            leftArrow: '<i class=\"la la-angle-left\"></i>',
                            rightArrow: '<i class=\"la la-angle-right\"></i>'
                        }
                    }

                    \$.fn.datepicker.dates['{{currentLang}}'] = {
                        days: [\"{{'Sunday'|__}}\", \"{{'Monday'|__}}\", \"{{'Tuesday'|__}}\", \"{{'Wednesday'|__}}\", \"{{'Thursday'|__}}\", \"{{'Friday'|__}}\", \"{{'Saturday'|__}}\"],
                        daysShort: [\"{{'Sun'|__}}\", \"{{'Mon'|__}}\", \"{{'Tue'|__}}\", \"{{'Wed'|__}}\", \"{{'Thu'|__}}\", \"{{'Fri'|__}}\", \"{{'Sat'|__}}\"],
                        daysMin: [\"{{'Su'|__}}\", \"{{'Mo'|__}}\", \"{{'Tu'|__}}\", \"{{'We'|__}}\", \"{{'Th'|__}}\", \"{{'Fr'|__}}\", \"{{'Sa'|__}}\"],
                        months: [\"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\", \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\", \"{{'November'|__}}\", \"{{'December'|__}}\"],
                        monthsShort: [\"{{'Jan'|__}}\", \"{{'Feb'|__}}\", \"{{'Mar'|__}}\", \"{{'Apr'|__}}\", \"{{'May'|__}}\", \"{{'Jun'|__}}\", \"{{'Jul'|__}}\", \"{{'Aug'|__}}\", \"{{'Sep'|__}}\", \"{{'Oct'|__}}\", \"{{'Nov'|__}}\", \"{{'Dec'|__}}\"],
                        today: \"{{'Today'|__}}\",
                        clear: \"{{'Clear'|__}}\",
                        format: KTAppOptions.dateformat,
                        titleFormat: KTAppOptions.dateformat, /* Leverages same syntax as 'format' */
                        weekStart: 0
                    };
                    \$('.date').datepicker({
                        rtl: KTUtil.isRTL(),
                        language: '{{currentLang}}',
                        format: KTAppOptions.dateformat,
                        todayHighlight: true,
                        orientation: \"bottom left\",
                        templates: arrows
                    });

                        var momentNow = moment();

                    console.log({{timezone_offset}});
                    console.log({{timezone_offset_hours}});
                    console.log(momentNow.utcOffset(4));
                    console.log(momentNow.utcOffset({{timezone_offset_hours}}));
                    var interval = setInterval(function() {
                        if('ar' == '{{currentLang}}'){
                            moment.locale('ar-sa');
                        }
                        var momentNow = moment();
                        \$('#date-part').html(momentNow.utcOffset({{timezone_offset_hours}}).format(KTAppOptions.daterangeformat) + ' ');
                        \$('#time-part').html(momentNow.utcOffset({{timezone_offset_hours}}).format('hh:mm:ss A'));
                    }, 100);

                });

                \"use strict\";

                var KTQuickSearch = function() {
                    var target;
                    var form;
                    var input;
                    var closeIcon;
                    var resultWrapper;
                    var resultDropdown;
                    var resultDropdownToggle;
                    var inputGroup;
                    var query = '';

                    var hasResult = false;
                    var timeout = false;
                    var isProcessing = false;
                    var requestTimeout = 200; // ajax request fire timeout in milliseconds
                    var spinnerClass = 'kt-spinner kt-spinner--input kt-spinner--sm kt-spinner--brand kt-spinner--right';
                    var resultClass = 'kt-quick-search--has-result';
                    var minLength = 2;

                    var showProgress = function() {
                        isProcessing = true;
                        KTUtil.addClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            KTUtil.hide(closeIcon);
                        }
                    }

                    var hideProgress = function() {
                        isProcessing = false;
                        KTUtil.removeClass(inputGroup, spinnerClass);

                        if (closeIcon) {
                            if (input.value.length < minLength) {
                                KTUtil.hide(closeIcon);
                            } else {
                                KTUtil.show(closeIcon, 'flex');
                            }
                        }
                    }

                    var showDropdown = function() {
                        if (resultDropdownToggle && !KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                            \$(resultDropdownToggle).dropdown('update');
                        }
                    }

                    var hideDropdown = function() {
                        if (resultDropdownToggle && KTUtil.hasClass(resultDropdown, 'show')) {
                            \$(resultDropdownToggle).dropdown('toggle');
                        }
                    }

                    var processSearch = function() {
                        if (hasResult && query === input.value) {
                            hideProgress();
                            KTUtil.addClass(target, resultClass);
                            showDropdown();
                            KTUtil.scrollUpdate(resultWrapper);

                            return;
                        }

                        query = input.value;

                        KTUtil.removeClass(target, resultClass);
                        showProgress();
                        hideDropdown();

                        \$.request('onQuicksearch', {
                            data: {query: query},
                            success: function(res) {
                                hasResult = true;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, res.result);
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            },
                            error: function(res) {
                                hasResult = false;
                                hideProgress();
                                KTUtil.addClass(target, resultClass);
                                KTUtil.setHTML(resultWrapper, '<span class=\"kt-quick-search__message kt-font-danger\">{{\"Connection error. Pleae try again later\"|__}}.</div>');
                                showDropdown();
                                KTUtil.scrollUpdate(resultWrapper);
                            }
                        });
                    }

                    var handleCancel = function(e) {
                        input.value = '';
                        query = '';
                        hasResult = false;
                        KTUtil.hide(closeIcon);
                        KTUtil.removeClass(target, resultClass);
                        hideDropdown();
                    }

                    var handleSearch = function() {
                        if (input.value.length < minLength) {
                            hideProgress();
                            hideDropdown();

                            return;
                        }

                        if (isProcessing == true) {
                            return;
                        }

                        if (timeout) {
                            clearTimeout(timeout);
                        }

                        timeout = setTimeout(function() {
                            processSearch();
                        }, requestTimeout);
                    }

                    return {
                        init: function(element) {
                            // Init
                            target = element;
                            form = KTUtil.find(target, '.kt-quick-search__form');
                            input = KTUtil.find(target, '.kt-quick-search__input');
                            closeIcon = KTUtil.find(target, '.kt-quick-search__close');
                            resultWrapper = KTUtil.find(target, '.kt-quick-search__wrapper');
                            resultDropdown = KTUtil.find(target, '.dropdown-menu');
                            resultDropdownToggle = KTUtil.find(target, '[data-toggle=\"dropdown\"]');
                            inputGroup = KTUtil.find(target, '.input-group');

                            // Attach input keyup handler
                            KTUtil.addEvent(input, 'keyup', handleSearch);
                            KTUtil.addEvent(input, 'focus', handleSearch);

                            // Prevent enter click
                            form.onkeypress = function(e) {
                                var key = e.charCode || e.keyCode || 0;
                                if (key == 13) {
                                    e.preventDefault();
                                }
                            }

                            KTUtil.addEvent(closeIcon, 'click', handleCancel);
                        }
                    };
                };

                var KTQuickSearchInline = KTQuickSearch;
                var KTQuickSearchOffcanvas = KTQuickSearch;
                {% if settings.notifications.live == 1 %}
                    var pusher = new Pusher('{{ settings.notifications.pusher.key }}', {cluster: '{{ settings.notifications.pusher.cluster }}',forceTLS: true});
                    var presenceChannel = pusher.subscribe('spotlayer');
                    presenceChannel.bind('notification', function(data) {
                        //if(data.id != {{user.id}}){
                        if(data.for_userid == {{user.id}}){
                            setTimeout( function() {
                                // create the notification
                                // check if the reciever is the targeted user
                                if(data.thumb == 'icon'){
                                    var thumb_content = '<i class=\"'+data.icon+'\"></i>';
                                }else{
                                    var thumb_content = '<img src=\"./admin/vendors/custom/notifications/img/default.jpg\"/>';
                                }
                                var notification = new NotificationFx({
                                    message : '<div class=\"ns-thumb '+data.thumb+'\">'+thumb_content+'</div><div class=\"ns-content notice\"><p><a href=\"{{url('dashboard/notifications')}}\">'+data.sender.name+'</a> '+data.subject+'.</p></div>',
                                    layout : 'other',
                                    ttl : 5000,
                                    effect : 'thumbslider',
                                    type : 'notice', // notice, warning, error or success
                                    onClose : function() {
                                        //dismiss notification and make it as readed;
                                    }
                                });
                                // show the notification
                                notification.show();
                                if(data.sound){
                                    let audio = new Audio('./admin/media/notifications/notification.mp3');
                                    audio.play();
                                }
                                \$.request('onRefreshTime', {
                                    data: {id: {{user.id}}},
                                    update: { notificationsmenu: '#notificationsmenu' },
                                    complete: function(e) {
                                        notificationPanel();
                                    }
                                });
                            }, 4000 );
                        }


                    });
                {% endif %}
            </script>
     <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

     <script>
         \$('#vehicleTypeCarousel').slick({
             centerMode: true,
             arrows: true,
             centerPadding: '60px',
             prevArrow: \"<button type='button' class='slick-prev'><i class='fa fa-chevron-left fa-2x' aria-hidden='true'></i></button>\",
             nextArrow: \"<button type='button' class='slick-next'><i class='fa fa-chevron-right fa-2x' aria-hidden='true'></i></button>\",
             slidesToShow: 3,
             slidesToScroll: 1,
             autoplay: false,
             infinite: true,
             autoplaySpeed: 2000,
             responsive: [
                 {
                     breakpoint: 768,
                     settings: {
                         arrows: true,
                         centerMode: true,
                         centerPadding: '40px',
                         slidesToShow: 3,
                         slidesToScroll: 1,
                     }
                 },
                 {
                     breakpoint: 480,
                     settings: {
                         arrows: true,
                         centerMode: true,
                         centerPadding: '30px',
                         slidesToShow: 1
                     }
                 }
             ]
         });

     </script>

     <!--end::Page Scripts -->
    </body>
    <!-- end::Body -->
</html>", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/layouts/admin.htm", "");
    }
}
