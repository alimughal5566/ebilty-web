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

/* C:\wamp64\www\company\ebilty-web/themes/spotlayer/pages/about.htm */
class __TwigTemplate_f32c5e2462c26317d60394596de4e1a4c0773ddc2bca21ec6b1c554ed1b90314 extends \Twig\Template
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
        echo "<!-- Page Sub-Header + mask style 6 -->
\t\t<div id=\"page_header\" class=\"page-subheader site-subheader-cst uh_hg_def_header_style maskcontainer--mask6\">
\t\t\t<div class=\"bgback\"></div>

\t\t\t<!-- Bakcground -->
\t\t\t<div class=\"kl-bg-source\">
\t\t\t\t<!-- Background image -->
\t\t\t\t<div class=\"kl-bg-source__bgimage\" style=\"background-image: url('./front/images/banner01.jpg'); background-repeat: no-repeat; background-attachment: scroll; background-position-x: center; background-position-y: center; background-size: cover;\">
\t\t\t\t</div>
\t\t\t\t<!--/ Background image -->

\t\t\t\t<!-- Gradient overlay -->
\t\t\t\t<div class=\"kl-bg-source__overlay\" style=\"\">
\t\t\t\t</div>
\t\t\t\t<!--/ Gradient overlay -->
\t\t\t</div>
\t\t\t<!--/ Bakcground -->

\t\t\t<!-- Animated Sparkles -->
\t\t\t<div class=\"th-sparkles\"></div>
\t\t\t<!--/ Animated Sparkles -->

\t\t\t\t\t<!-- Sub-Header content wrapper -->
\t\t\t\t\t<div class=\"ph-content-wrap d-flex\">
\t\t\t\t\t\t<div class=\"container align-self-center\">
\t\t\t\t\t\t\t<div class=\"row\">
<!--\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">-->

<!--\t\t\t\t\t\t\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, false, 29)) {
            echo "-->
<!--\t\t\t\t\t\t\t\t\t\t&lt;!&ndash; Breadcrumbs &ndash;&gt;-->
<!--\t\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumbs fixclear\">-->
<!--\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            $context["activeCrumb"] = "";
            echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t";
            // line 33
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
                echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, false, 34)) {
                    echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 35
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 35) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 35))) {
                        echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        // line 36
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, false, 36));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 36)])), "html", null, true);
                        echo "</a></li>-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 37
                        echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">";
                        // line 38
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 38)])), "html", null, true);
                        echo "</li>-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 41
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                    echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 42
                    $context["activeCrumb"] = $context["crumb"];
                    echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "-->
<!--\t\t\t\t\t\t\t\t\t\t\t";
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
            // line 44
            echo "-->
<!--\t\t\t\t\t\t\t\t\t\t</ul>-->
<!--\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Breadcrumbs &ndash;&gt;-->
<!--\t\t\t\t\t\t\t\t\t";
        }
        // line 47
        echo "-->


<!--\t\t\t\t\t\t\t\t\t&lt;!&ndash; Current date &ndash;&gt;-->
<!--\t\t\t\t\t\t\t\t\t<span id=\"current-date\" class=\"subheader-currentdate\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 51)), "html", null, true);
        echo "</span>-->
<!--\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Current date &ndash;&gt;-->

<!--\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>-->
<!--\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-6 -->

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 offset-lg-6\">
\t\t\t\t\t\t\t\t\t<!-- Sub-header titles -->
\t\t\t\t\t\t\t\t\t<div class=\"subheader-titles\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"subheader-maintitle\">";
        // line 61
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61)]);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"subheader-subtitle\">";
        // line 62
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 62), "subtitle", [], "any", false, false, false, 62)]);
        echo "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Sub-header titles -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-6 -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/ row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ .container .align-self-center -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ Sub-Header content wrapper -->

\t\t\t<!-- Bottom mask style 7 -->
\t\t\t<div class=\"kl-bottommask kl-bottommask--mask7\">
\t\t\t\t<svg width=\"767px\" height=\"60px\" class=\"kl-bottommask--mask7 screffect opacity3\" viewBox=\"0 0 767 60\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" preserveAspectRatio=\"none\">
\t\t\t\t\t<polygon fill=\"#000\" points=\"767 0 767 60 0 60 \"></polygon>
\t\t\t\t</svg>
\t\t\t\t<svg width=\"767px\" height=\"50px\" class=\"kl-bottommask--mask7 mask-over\" viewBox=\"0 0 767 50\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" preserveAspectRatio=\"none\">
\t\t\t\t\t<polygon fill=\"#fbfbfb\" points=\"767 0 767 50 0 50 \"></polygon>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!--/ Bottom mask style 7 -->
\t\t\t";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, false, 84)) {
            // line 85
            echo "\t\t\t\t<!-- Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<!-- Breadcrumb style 2 aligned right -->
\t\t\t\t\t\t\t<ul class=\"breadcrumbs white text-right float-right kl-font-alt\">
\t\t\t\t\t\t\t\t";
            // line 91
            $context["activeCrumb"] = "";
            // line 92
            echo "\t\t\t\t\t\t\t\t";
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
                // line 93
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 94) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 94))) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, false, 95));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 95)])), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 97)])), "html", null, true);
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["activeCrumb"] = $context["crumb"];
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t";
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
            // line 104
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ col-sm-12 -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ row -->
\t\t\t\t</div>
\t\t\t\t<!--/ Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t";
        }
        // line 112
        echo "\t\t</div>
\t\t<!--/ Page Sub-Header + mask style 6 -->


\t\t<!-- Progress bars skill section with custom paddings -->
<!--\t\t<section class=\"hg_section pt-70 pb-120\">-->
<!--\t\t\t<div class=\"container\">-->
<!--\t\t\t\t<div class=\"row\">-->
<!--\t\t\t\t\t<div class=\"col-sm-12 \">-->
<!--\t\t\t\t\t\t<h4 class=\"fw-semibold\">-->
<!--\t\t\t\t\t\t\tWorked with-->
<!--\t\t\t\t\t\t</h4>-->

<!--\t\t\t\t\t\t<p>-->
<!--\t\t\t\t\t\t\t<pre>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "website", [], "any", false, false, false, 126), "about", [], "any", false, false, false, 126), "html", null, true);
        echo "</pre>-->
<!--\t\t\t\t\t\t</p>-->
<!--\t\t\t\t\t\t&lt;!&ndash; <p>-->
<!--\t\t\t\t\t\t\tWeb design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design.-->
<!--\t\t\t\t\t\t</p>-->

<!--\t\t\t\t\t\t<p>-->
<!--\t\t\t\t\t\t\tFocused on designing and developing awesome themes and templates for multiple platforms such as: WordPress, Magento, Open cart.-->
<!--\t\t\t\t\t\t</p>-->

<!--\t\t\t\t\t\t<p>-->
<!--\t\t\t\t\t\t\tMy vision is to become your no. 1 themes and templates, plugins and digital goods supplier.-->
<!--\t\t\t\t\t\t</p> &ndash;&gt;-->
<!--\t\t\t\t\t\t-->
<!--\t\t\t\t\t</div>-->
<!--\t\t\t\t\t&lt;!&ndash;/ col-sm-12 col-md-6 col-lg-6 &ndash;&gt;-->
<!--\t\t\t\t</div>-->
<!--\t\t\t\t&lt;!&ndash;/ row &ndash;&gt;-->
<!--\t\t\t</div>-->
<!--\t\t\t&lt;!&ndash;/ container &ndash;&gt;-->
<!--\t\t</section>-->
\t\t<!--/ Progress bars skill section with custom paddings -->

\t\t<!-- Get In Touch\t-->
\t\t<section class=\"hg_section contact-section bg-white pt-0 pb-0\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-lg-6 order-last order-lg-first \" style=\"background-image: url('./front/images/FTL-Shipping-Truck-1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;\"></div>
\t\t\t\t\t<div class=\"col-12 col-lg-6 order-first order-lg-last \">
\t\t\t\t\t\t<div class=\"pt-80 pb-80 pl-80 pr-80 p\">
\t\t\t\t\t\t\t<div class=\"kl-title-block text-center gray text-lg-left tbk-symbol--line\">
\t\t\t\t\t\t\t\t<!-- Sub-title with custom color -->
\t\t\t\t\t\t\t\t<h6 class=\"gray\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ABOUT OUR"]);
        echo "</h6>

\t\t\t\t\t\t\t\t<!-- Title with custom size, weight and color -->
\t\t\t\t\t\t\t\t<h3 class=\"tbk__title fs-xl fw-extrabold gray\">
\t\t\t\t\t\t\t\t\t";
        // line 162
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["COMPANY"]);
        echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<!--/ Title -->

\t\t\t\t\t\t\t\t<p class=\"mt-5\">
\t\t\t\t\t\t\t\t\t";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "website", [], "any", false, false, false, 167), "about", [], "any", false, false, false, 167), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 167,  348 => 162,  341 => 158,  306 => 126,  290 => 112,  280 => 104,  266 => 103,  263 => 102,  260 => 101,  257 => 100,  254 => 99,  248 => 97,  240 => 95,  237 => 94,  234 => 93,  216 => 92,  214 => 91,  206 => 85,  204 => 84,  179 => 62,  175 => 61,  162 => 51,  156 => 47,  150 => 44,  135 => 43,  130 => 42,  126 => 41,  123 => 40,  119 => 39,  114 => 38,  111 => 37,  104 => 36,  100 => 35,  96 => 34,  77 => 33,  73 => 32,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Page Sub-Header + mask style 6 -->
\t\t<div id=\"page_header\" class=\"page-subheader site-subheader-cst uh_hg_def_header_style maskcontainer--mask6\">
\t\t\t<div class=\"bgback\"></div>

\t\t\t<!-- Bakcground -->
\t\t\t<div class=\"kl-bg-source\">
\t\t\t\t<!-- Background image -->
\t\t\t\t<div class=\"kl-bg-source__bgimage\" style=\"background-image: url('./front/images/banner01.jpg'); background-repeat: no-repeat; background-attachment: scroll; background-position-x: center; background-position-y: center; background-size: cover;\">
\t\t\t\t</div>
\t\t\t\t<!--/ Background image -->

\t\t\t\t<!-- Gradient overlay -->
\t\t\t\t<div class=\"kl-bg-source__overlay\" style=\"\">
\t\t\t\t</div>
\t\t\t\t<!--/ Gradient overlay -->
\t\t\t</div>
\t\t\t<!--/ Bakcground -->

\t\t\t<!-- Animated Sparkles -->
\t\t\t<div class=\"th-sparkles\"></div>
\t\t\t<!--/ Animated Sparkles -->

\t\t\t\t\t<!-- Sub-Header content wrapper -->
\t\t\t\t\t<div class=\"ph-content-wrap d-flex\">
\t\t\t\t\t\t<div class=\"container align-self-center\">
\t\t\t\t\t\t\t<div class=\"row\">
<!--\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">-->

<!--\t\t\t\t\t\t\t\t\t{% if currentCrumb.show_crumb %}-->
<!--\t\t\t\t\t\t\t\t\t\t&lt;!&ndash; Breadcrumbs &ndash;&gt;-->
<!--\t\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumbs fixclear\">-->
<!--\t\t\t\t\t\t\t\t\t\t\t{% set activeCrumb = '' %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t{% for crumb in breadcrumbs %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t{% if crumb.in_crumb_trail %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not loop.last and not crumb.crumb_disabled %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{crumb.baseFileName | page}}\">{{crumb.title|__|upper}}</a></li>-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">{{crumb.title|__|upper}}</li>-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t{% if not loop.last %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t\t{% set activeCrumb = crumb %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}-->
<!--\t\t\t\t\t\t\t\t\t\t\t{% endfor %}-->
<!--\t\t\t\t\t\t\t\t\t\t</ul>-->
<!--\t\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Breadcrumbs &ndash;&gt;-->
<!--\t\t\t\t\t\t\t\t\t{% endif %}-->


<!--\t\t\t\t\t\t\t\t\t&lt;!&ndash; Current date &ndash;&gt;-->
<!--\t\t\t\t\t\t\t\t\t<span id=\"current-date\" class=\"subheader-currentdate\">{{'now'|date(settings.dateformat)}}</span>-->
<!--\t\t\t\t\t\t\t\t\t&lt;!&ndash;/ Current date &ndash;&gt;-->

<!--\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>-->
<!--\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-6 -->

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 offset-lg-6\">
\t\t\t\t\t\t\t\t\t<!-- Sub-header titles -->
\t\t\t\t\t\t\t\t\t<div class=\"subheader-titles\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"subheader-maintitle\">{{this.page.title|__}}</h2>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"subheader-subtitle\">{{this.page.subtitle|__}}</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Sub-header titles -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-6 -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/ row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ .container .align-self-center -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ Sub-Header content wrapper -->

\t\t\t<!-- Bottom mask style 7 -->
\t\t\t<div class=\"kl-bottommask kl-bottommask--mask7\">
\t\t\t\t<svg width=\"767px\" height=\"60px\" class=\"kl-bottommask--mask7 screffect opacity3\" viewBox=\"0 0 767 60\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" preserveAspectRatio=\"none\">
\t\t\t\t\t<polygon fill=\"#000\" points=\"767 0 767 60 0 60 \"></polygon>
\t\t\t\t</svg>
\t\t\t\t<svg width=\"767px\" height=\"50px\" class=\"kl-bottommask--mask7 mask-over\" viewBox=\"0 0 767 50\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" preserveAspectRatio=\"none\">
\t\t\t\t\t<polygon fill=\"#fbfbfb\" points=\"767 0 767 50 0 50 \"></polygon>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!--/ Bottom mask style 7 -->
\t\t\t{% if currentCrumb.show_crumb %}
\t\t\t\t<!-- Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<!-- Breadcrumb style 2 aligned right -->
\t\t\t\t\t\t\t<ul class=\"breadcrumbs white text-right float-right kl-font-alt\">
\t\t\t\t\t\t\t\t{% set activeCrumb = '' %}
\t\t\t\t\t\t\t\t{% for crumb in breadcrumbs %}
\t\t\t\t\t\t\t\t\t{% if crumb.in_crumb_trail %}
\t\t\t\t\t\t\t\t\t\t{% if not loop.last and not crumb.crumb_disabled %}
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{crumb.baseFileName | page}}\">{{crumb.title|__|upper}}</a></li>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><span>{{crumb.title|__|upper}}</span></li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if not loop.last %}
\t\t\t\t\t\t\t\t\t\t{% set activeCrumb = crumb %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ col-sm-12 -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ row -->
\t\t\t\t</div>
\t\t\t\t<!--/ Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t{% endif %}
\t\t</div>
\t\t<!--/ Page Sub-Header + mask style 6 -->


\t\t<!-- Progress bars skill section with custom paddings -->
<!--\t\t<section class=\"hg_section pt-70 pb-120\">-->
<!--\t\t\t<div class=\"container\">-->
<!--\t\t\t\t<div class=\"row\">-->
<!--\t\t\t\t\t<div class=\"col-sm-12 \">-->
<!--\t\t\t\t\t\t<h4 class=\"fw-semibold\">-->
<!--\t\t\t\t\t\t\tWorked with-->
<!--\t\t\t\t\t\t</h4>-->

<!--\t\t\t\t\t\t<p>-->
<!--\t\t\t\t\t\t\t<pre>{{settings.website.about}}</pre>-->
<!--\t\t\t\t\t\t</p>-->
<!--\t\t\t\t\t\t&lt;!&ndash; <p>-->
<!--\t\t\t\t\t\t\tWeb design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design.-->
<!--\t\t\t\t\t\t</p>-->

<!--\t\t\t\t\t\t<p>-->
<!--\t\t\t\t\t\t\tFocused on designing and developing awesome themes and templates for multiple platforms such as: WordPress, Magento, Open cart.-->
<!--\t\t\t\t\t\t</p>-->

<!--\t\t\t\t\t\t<p>-->
<!--\t\t\t\t\t\t\tMy vision is to become your no. 1 themes and templates, plugins and digital goods supplier.-->
<!--\t\t\t\t\t\t</p> &ndash;&gt;-->
<!--\t\t\t\t\t\t-->
<!--\t\t\t\t\t</div>-->
<!--\t\t\t\t\t&lt;!&ndash;/ col-sm-12 col-md-6 col-lg-6 &ndash;&gt;-->
<!--\t\t\t\t</div>-->
<!--\t\t\t\t&lt;!&ndash;/ row &ndash;&gt;-->
<!--\t\t\t</div>-->
<!--\t\t\t&lt;!&ndash;/ container &ndash;&gt;-->
<!--\t\t</section>-->
\t\t<!--/ Progress bars skill section with custom paddings -->

\t\t<!-- Get In Touch\t-->
\t\t<section class=\"hg_section contact-section bg-white pt-0 pb-0\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-lg-6 order-last order-lg-first \" style=\"background-image: url('./front/images/FTL-Shipping-Truck-1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;\"></div>
\t\t\t\t\t<div class=\"col-12 col-lg-6 order-first order-lg-last \">
\t\t\t\t\t\t<div class=\"pt-80 pb-80 pl-80 pr-80 p\">
\t\t\t\t\t\t\t<div class=\"kl-title-block text-center gray text-lg-left tbk-symbol--line\">
\t\t\t\t\t\t\t\t<!-- Sub-title with custom color -->
\t\t\t\t\t\t\t\t<h6 class=\"gray\">{{'ABOUT OUR'|__}}</h6>

\t\t\t\t\t\t\t\t<!-- Title with custom size, weight and color -->
\t\t\t\t\t\t\t\t<h3 class=\"tbk__title fs-xl fw-extrabold gray\">
\t\t\t\t\t\t\t\t\t{{'COMPANY'|__}}
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<!--/ Title -->

\t\t\t\t\t\t\t\t<p class=\"mt-5\">
\t\t\t\t\t\t\t\t\t{{settings.website.about}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>", "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/about.htm", "");
    }
}
