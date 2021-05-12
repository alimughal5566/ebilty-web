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

/* C:\wamp64\www\company\ebilty-web/themes/spotlayer/pages/faq.htm */
class __TwigTemplate_76652dd85bb9f240354cfb268bd13b6bc4ce8dd05a539a7370535c6d236f45bf extends \Twig\Template
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
\t\t\t\t<div class=\"kl-bg-source__bgimage\" style=\"background-image: url(./front/images/about-me.jpg); background-repeat: no-repeat; background-attachment: scroll; background-position-x: center; background-position-y: center; background-size: cover;\">
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
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">

\t\t\t\t\t\t\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, false, 29)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t<!-- Breadcrumbs -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumbs fixclear\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            $context["activeCrumb"] = "";
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t\t";
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
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 35) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 35))) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, false, 36));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 36)])), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 38)])), "html", null, true);
                        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["activeCrumb"] = $context["crumb"];
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t\t";
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
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!--/ Breadcrumbs -->
\t\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "

\t\t\t\t\t\t\t\t\t<!-- Current date -->
\t\t\t\t\t\t\t\t\t<span id=\"current-date\" class=\"subheader-currentdate\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 51)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t<!--/ Current date -->

\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-6 -->

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
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
\t\t\t\t<div class=\"container mb-40\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<!-- Breadcrumb style 2 aligned right -->
\t\t\t\t\t\t\t<ul class=\"breadcrumbs2 white text-right kl-font-alt\">
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
\t\t<!-- FAQ section -->
\t\t<section class=\"hg_section pt-80 pb-100\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"hg_accordion_element style3\">
\t\t\t\t\t\t\t<h3 class=\"tbk__title fw-semibold mb-20\">
\t\t\t\t\t\t\t\t<!-- Title symbol -->
\t\t\t\t\t\t\t\t<span class=\"tbk__symbol \">
\t\t\t\t\t\t\t\t\t<span class=\"tbk__icon fas fa-exclamation-triangle light-gray\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<!--/ Title symbol -->

\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\tFrequently asked questions.
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<!-- Accordions wrapper -->
\t\t\t\t\t\t\t<div class=\"th-accordion\">
\t\t\t\t\t\t\t\t";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "website", [], "any", false, false, false, 133), "faqs", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["key"] => $context["faq"]) {
            // line 134
            echo "\t\t\t\t\t\t\t\t<!-- Acc group #";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " -->
\t\t\t\t\t\t\t\t<div class=\"acc-group\">
\t\t\t\t\t\t\t\t\t<!-- Title group button acc #";
            // line 136
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " -->
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#";
            // line 137
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (($context["key"] == 0)) {
                echo "aria-expanded=\"true\"";
            } else {
                echo "class=\"collapsed\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 138), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icon\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!--/ Title group button acc #";
            // line 141
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " -->

\t\t\t\t\t\t\t\t\t<!-- Acc #";
            // line 143
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " -->
\t\t\t\t\t\t\t\t\t<div id=\"";
            // line 144
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (($context["key"] == 0)) {
                echo "class=\"collapse in\" aria-expanded=\"true\"";
            } else {
                echo "class=\"collapse\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 149), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<!--/ Description -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/ Content -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Acc #";
            // line 155
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ Acc group #";
            // line 157
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " -->
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/ Accordions wrapper -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Accordions element style 3 -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-md-12 col-sm-12 -->
\t\t\t\t</div>
\t\t\t\t<!--/ row -->
\t\t\t</div>
\t\t\t<!--/ container -->
\t\t</section>
\t\t<!--/ FAQ section -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/faq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 159,  367 => 157,  362 => 155,  353 => 149,  339 => 144,  335 => 143,  330 => 141,  324 => 138,  314 => 137,  310 => 136,  304 => 134,  300 => 133,  277 => 112,  267 => 104,  253 => 103,  250 => 102,  247 => 101,  244 => 100,  241 => 99,  235 => 97,  227 => 95,  224 => 94,  221 => 93,  203 => 92,  201 => 91,  193 => 85,  191 => 84,  166 => 62,  162 => 61,  149 => 51,  144 => 48,  139 => 45,  125 => 44,  122 => 43,  119 => 42,  116 => 41,  113 => 40,  107 => 38,  99 => 36,  96 => 35,  93 => 34,  75 => 33,  73 => 32,  69 => 30,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Page Sub-Header + mask style 6 -->
\t\t<div id=\"page_header\" class=\"page-subheader site-subheader-cst uh_hg_def_header_style maskcontainer--mask6\">
\t\t\t<div class=\"bgback\"></div>

\t\t\t<!-- Bakcground -->
\t\t\t<div class=\"kl-bg-source\">
\t\t\t\t<!-- Background image -->
\t\t\t\t<div class=\"kl-bg-source__bgimage\" style=\"background-image: url(./front/images/about-me.jpg); background-repeat: no-repeat; background-attachment: scroll; background-position-x: center; background-position-y: center; background-size: cover;\">
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
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">

\t\t\t\t\t\t\t\t\t{% if currentCrumb.show_crumb %}
\t\t\t\t\t\t\t\t\t\t<!-- Breadcrumbs -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumbs fixclear\">
\t\t\t\t\t\t\t\t\t\t\t{% set activeCrumb = '' %}
\t\t\t\t\t\t\t\t\t\t\t{% for crumb in breadcrumbs %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if crumb.in_crumb_trail %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if not loop.last and not crumb.crumb_disabled %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{crumb.baseFileName | page}}\">{{crumb.title|__|upper}}</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">{{crumb.title|__|upper}}</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if not loop.last %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set activeCrumb = crumb %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!--/ Breadcrumbs -->
\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t<!-- Current date -->
\t\t\t\t\t\t\t\t\t<span id=\"current-date\" class=\"subheader-currentdate\">{{'now'|date(settings.dateformat)}}</span>
\t\t\t\t\t\t\t\t\t<!--/ Current date -->

\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-6 -->

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-6\">
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
\t\t\t\t<div class=\"container mb-40\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<!-- Breadcrumb style 2 aligned right -->
\t\t\t\t\t\t\t<ul class=\"breadcrumbs2 white text-right kl-font-alt\">
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
\t\t<!-- FAQ section -->
\t\t<section class=\"hg_section pt-80 pb-100\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"hg_accordion_element style3\">
\t\t\t\t\t\t\t<h3 class=\"tbk__title fw-semibold mb-20\">
\t\t\t\t\t\t\t\t<!-- Title symbol -->
\t\t\t\t\t\t\t\t<span class=\"tbk__symbol \">
\t\t\t\t\t\t\t\t\t<span class=\"tbk__icon fas fa-exclamation-triangle light-gray\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<!--/ Title symbol -->

\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\tFrequently asked questions.
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<!-- Accordions wrapper -->
\t\t\t\t\t\t\t<div class=\"th-accordion\">
\t\t\t\t\t\t\t\t{% for key,faq in settings.website.faqs %}
\t\t\t\t\t\t\t\t<!-- Acc group #{{key}} -->
\t\t\t\t\t\t\t\t<div class=\"acc-group\">
\t\t\t\t\t\t\t\t\t<!-- Title group button acc #{{key}} -->
\t\t\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#{{key}}\" {% if key ==0 %}aria-expanded=\"true\"{% else %}class=\"collapsed\"{% endif %}>
\t\t\t\t\t\t\t\t\t\t{{faq.question}}
\t\t\t\t\t\t\t\t\t\t<span class=\"acc-icon\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<!--/ Title group button acc #{{key}} -->

\t\t\t\t\t\t\t\t\t<!-- Acc #{{key}} -->
\t\t\t\t\t\t\t\t\t<div id=\"{{key}}\" {% if key ==0 %}class=\"collapse in\" aria-expanded=\"true\"{% else %}class=\"collapse\"{% endif %}>
\t\t\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t{{faq.answer}}
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<!--/ Description -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!--/ Content -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Acc #{{key}} -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ Acc group #{{key}} -->
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/ Accordions wrapper -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Accordions element style 3 -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-md-12 col-sm-12 -->
\t\t\t\t</div>
\t\t\t\t<!--/ row -->
\t\t\t</div>
\t\t\t<!--/ container -->
\t\t</section>
\t\t<!--/ FAQ section -->", "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/faq.htm", "");
    }
}
