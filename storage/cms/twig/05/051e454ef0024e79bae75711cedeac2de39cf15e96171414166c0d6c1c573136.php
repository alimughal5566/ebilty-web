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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/pages/track.htm */
class __TwigTemplate_7a0109214450b00f68fb970fa655cd629941c07b837c89270956dbcc9c72babf extends \Twig\Template
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
        echo "<div class=\"kt-content  kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor\" id=\"kt_content\">

\t\t\t\t\t<!-- begin:: Content -->
\t<!-- begin:: Hero -->
    <div class=\"kt-sc\" style=\"background-image: url('/admin/media/bg/bg-9.jpg')\">
    <div class=\"kt-container \">
        <div class=\"kt-sc__top\">
            <h3 class=\"kt-sc__title\">
                <a class=\"kt-login__logo \" href=\"";
        // line 9
        echo url("/");
        echo "\">
                    <img style=\"max-width:90px;width:auto\" src=\"";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 10)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\">
                </a>
\t\t\t</h3>
            <div class=\"kt-sc__nav\">
                <a href=\"";
        // line 14
        echo url("/");
        echo "\" class=\"kt-link kt-font-bold\">";
        if (($context["user"] ?? null)) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dashboard"]);
        } else {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login"]);
        }
        echo "</a>
            </div>
        </div>
        <div class=\"kt-sc__bottom kt-padding-b-20\">
            <h3 class=\"kt-sc__heading kt-heading kt-heading--center kt-heading--xxl kt-heading--medium\">
\t\t\t\t";
        // line 19
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Track your shipment"]);
        echo "
\t\t\t</h3>
            <form class=\"kt-sc__form\" method=\"GET\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                    <path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                    <path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 34
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Type your full tracking number here"]);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo "\" name=\"number\" aria-describedby=\"basic-addon1\">
                    <button type=\"submit\" class=\"btn btn-success\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search"]);
        echo "</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end:: Hero -->

<!-- begin:: Section -->
";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("trackingwidget"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "<!-- end:: Section -->

<!-- end:: Content -->
</div>
";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 50
        echo "    <link href=\"./admin/css/demo1/pages/support-center/home-1.css\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .kt-timeline-v1.kt-timeline-v1--justified .kt-timeline-v1__items .kt-timeline-v1__item .kt-timeline-v1__item-time {
            width: 100%;
        }
    </style>
 ";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 57
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 58
        echo " <script type=\"text/javascript\">
     \"use strict\";

     // Class Initialization
     KTUtil.ready(function () {
          \$('body').on('keyup','.search_track_number', function(e){
              if (\$(this).val().length >= ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 64), "numbers_order", [], "any", false, false, false, 64), "html", null, true);
        echo ") {
                  KTApp.block('#tracking', {});
                  \$.request('onTracking', {
                      data: {number: \$(this).val()},
                      update: { trackingwidget: '#tracking' },
                      complete: function(e) {
                          KTApp.unblock('#tracking');
                      }
                  });
              }
          });
     });
 </script>
 ";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/track.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  145 => 64,  137 => 58,  134 => 57,  132 => 49,  124 => 50,  122 => 49,  116 => 45,  112 => 44,  100 => 35,  94 => 34,  76 => 19,  62 => 14,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-content  kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor\" id=\"kt_content\">

\t\t\t\t\t<!-- begin:: Content -->
\t<!-- begin:: Hero -->
    <div class=\"kt-sc\" style=\"background-image: url('/admin/media/bg/bg-9.jpg')\">
    <div class=\"kt-container \">
        <div class=\"kt-sc__top\">
            <h3 class=\"kt-sc__title\">
                <a class=\"kt-login__logo \" href=\"{{url('/')}}\">
                    <img style=\"max-width:90px;width:auto\" src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\">
                </a>
\t\t\t</h3>
            <div class=\"kt-sc__nav\">
                <a href=\"{{url('/')}}\" class=\"kt-link kt-font-bold\">{% if user %}{{'Dashboard'|__}}{% else %}{{'Login'|__}}{% endif %}</a>
            </div>
        </div>
        <div class=\"kt-sc__bottom kt-padding-b-20\">
            <h3 class=\"kt-sc__heading kt-heading kt-heading--center kt-heading--xxl kt-heading--medium\">
\t\t\t\t{{'Track your shipment'|__}}
\t\t\t</h3>
            <form class=\"kt-sc__form\" method=\"GET\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                    <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                    <path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
                                    <path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <input type=\"text\" class=\"form-control\" placeholder=\"{{'Type your full tracking number here'|__}}\" value=\"{{number}}\" name=\"number\" aria-describedby=\"basic-addon1\">
                    <button type=\"submit\" class=\"btn btn-success\">{{'Search'|__}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end:: Hero -->

<!-- begin:: Section -->
{% partial 'trackingwidget' %}
<!-- end:: Section -->

<!-- end:: Content -->
</div>
{% put styles %}
    <link href=\"./admin/css/demo1/pages/support-center/home-1.css\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .kt-timeline-v1.kt-timeline-v1--justified .kt-timeline-v1__items .kt-timeline-v1__item .kt-timeline-v1__item-time {
            width: 100%;
        }
    </style>
 {% endput %}
 {% put scripts %}
 <script type=\"text/javascript\">
     \"use strict\";

     // Class Initialization
     KTUtil.ready(function () {
          \$('body').on('keyup','.search_track_number', function(e){
              if (\$(this).val().length >= {{settings.tracking.numbers_order}}) {
                  KTApp.block('#tracking', {});
                  \$.request('onTracking', {
                      data: {number: \$(this).val()},
                      update: { trackingwidget: '#tracking' },
                      complete: function(e) {
                          KTApp.unblock('#tracking');
                      }
                  });
              }
          });
     });
 </script>
 {% endput %}", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/track.htm", "");
    }
}
