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

/* C:\wamp64\www\company\ebilty-web/themes/spotlayer/pages/contact.htm */
class __TwigTemplate_a6487ac13a998a27f5a20a49bb2b5f14cea511b32eb38ae90a12862a7eb0e7a1 extends \Twig\Template
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
        echo "<!-- Google maps slideshow element + Bottom mask style 5 -->
\t\t<div class=\"kl-slideshow static-content__slideshow scontent__maps\">
\t\t\t<!-- Map with custom height -->
\t\t\t<div class=\"th-google_map\" style=\"height: 750px;\"></div>
\t\t\t<!-- end map -->

\t\t\t<!-- Google map content panel -->
\t\t\t<div class=\"kl-contentmaps__panel\">
\t\t\t\t<a href=\"#\" class=\"js-toggle-class kl-contentmaps__panel-tgg hidden-xs\" data-target=\".kl-contentmaps__panel\" data-target-class=\"is-closed\"></a>
\t\t\t\t<!-- Image & Image pop-up -->
\t\t\t\t<a href=\"images/home-office-569359_640.jpg\" data-lightbox=\"image\" class=\"kl-contentmaps__panel-img\" style=\"background-image: url(./front/images/home-office-569359_640.jpg);\"></a>

\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"kl-contentmaps__panel-info\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h5 class=\"kl-contentmaps__panel-title\">
\t\t\t\t\t\t";
        // line 17
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17)]);
        echo "
\t\t\t\t\t</h5>

\t\t\t\t\t<!-- Description -->
\t\t\t\t\t<div class=\"kl-contentmaps__panel-info-text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 23
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 23), "description", [], "any", false, false, false, 23)]);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--/ Content -->
\t\t\t</div>
\t\t\t<!-- Google map content panel -->

\t\t\t<div class=\"container align-self-center breadcrumb-center\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-6 offset-lg-6\">
\t\t\t\t\t\t<!-- Sub-header titles -->
\t\t\t\t\t\t<div class=\"subheader-titles\">
\t\t\t\t\t\t\t<h2 class=\"subheader-maintitle\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36)]);
        echo "</h2>
\t\t\t\t\t\t\t<h4 class=\"subheader-subtitle\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 37), "subtitle", [], "any", false, false, false, 37)]);
        echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Sub-header titles -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Bottom mask style 5 -->
\t\t\t<div class=\"kl-bottommask kl-bottommask--mask5\">
\t\t\t\t<svg width=\"2700px\" height=\"64px\" class=\"svgmask\" viewBox=\"0 0 2700 64\" version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<filter x=\"-50%\" y=\"-50%\" width=\"200%\" height=\"200%\" filterUnits=\"objectBoundingBox\" id=\"filter-mask5\">
\t\t\t\t\t\t\t<feOffset dx=\"0\" dy=\"2\" in=\"SourceAlpha\" result=\"shadowOffsetInner1\"></feOffset>
\t\t\t\t\t\t\t<feGaussianBlur stdDeviation=\"1.5\" in=\"shadowOffsetInner1\" result=\"shadowBlurInner1\"></feGaussianBlur>
\t\t\t\t\t\t\t<feComposite in=\"shadowBlurInner1\" in2=\"SourceAlpha\" operator=\"arithmetic\" k2=\"-1\" k3=\"1\" result=\"shadowInnerInner1\"></feComposite>
\t\t\t\t\t\t\t<feColorMatrix values=\"0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.45 0\" in=\"shadowInnerInner1\" type=\"matrix\" result=\"shadowMatrixInner1\"></feColorMatrix>
\t\t\t\t\t\t\t<feMerge>
\t\t\t\t\t\t\t\t<feMergeNode in=\"SourceGraphic\"></feMergeNode>
\t\t\t\t\t\t\t\t<feMergeNode in=\"shadowMatrixInner1\"></feMergeNode>
\t\t\t\t\t\t\t</feMerge>
\t\t\t\t\t\t</filter>
\t\t\t\t\t</defs>
\t\t\t\t\t<path d=\"M1892,0 L2119,44.993 L2701,45 L2701.133,63.993 L-0.16,63.993 L1.73847048e-12,45 L909,44.993 L1892,0 Z\" class=\"bmask-bgfill\" fill=\"#fbfbfb\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t\t<path d=\"M2216,44.993 L2093,55 L1882,6 L995,62 L966,42 L1892,0 L2118,44.993 L2216,44.993 L2216,44.993 Z\" fill=\"#cd2122\" class=\"bmask-customfill\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!--/ Bottom mask style 5 -->
\t\t\t<!--/ Bottom mask style 7 -->
\t\t\t";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["currentCrumb"] ?? null), "show_crumb", [], "any", false, false, false, 65)) {
            // line 66
            echo "\t\t\t<!-- Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t<div class=\"container breadcrumb-bottom\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<!-- Breadcrumb style 2 aligned right -->
\t\t\t\t\t\t<ul class=\"breadcrumbs white text-right float-right kl-font-alt\">
\t\t\t\t\t\t\t";
            // line 72
            $context["activeCrumb"] = "";
            // line 73
            echo "\t\t\t\t\t\t\t";
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
                // line 74
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["crumb"], "in_crumb_trail", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t";
                    if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 75) &&  !twig_get_attribute($this->env, $this->source, $context["crumb"], "crumb_disabled", [], "any", false, false, false, 75))) {
                        // line 76
                        echo "\t\t\t\t\t\t\t<li><a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, $context["crumb"], "baseFileName", [], "any", false, false, false, 76));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 76)])), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t";
                    } else {
                        // line 78
                        echo "\t\t\t\t\t\t\t<li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["crumb"], "title", [], "any", false, false, false, 78)])), "html", null, true);
                        echo "</span></li>
\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t";
                    $context["activeCrumb"] = $context["crumb"];
                    // line 83
                    echo "\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t\t";
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
            // line 85
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 -->
\t\t\t\t</div>
\t\t\t\t<!--/ row -->
\t\t\t</div>
\t\t\t<!--/ Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t";
        }
        // line 93
        echo "
\t\t</div>
\t\t<!--/ Google maps slideshow element + Bottom mask style 5 -->


\t\t<!-- Contact form element & details section with custom paddings -->
\t\t<section class=\"hg_section pt-100 pb-100 contact-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-8 mb-sm-30\">
\t\t\t\t\t\t<!-- Contact form element -->
\t\t\t\t\t\t<div class=\"contactForm\">
\t\t\t\t\t\t\t<form action=\"mailto:";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 105), "primary_email", [], "any", false, false, false, 105), "html", null, true);
        echo "\" method=\"post\" class=\"contact_form contact-form row\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<!-- Response wrapper -->
\t\t\t\t\t\t\t\t<div class=\"cf_response\"></div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 112
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FIRSTNAME"]);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"cf_name\" class=\"form-control\" placeholder=\"";
        // line 114
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your first name"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_lastname\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LASTNAME"]);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"cf_lastname\" class=\"form-control\" placeholder=\"";
        // line 123
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your last name"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_email\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 130
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EMAIL"]);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"cf_email\" class=\"form-control h5-email\" placeholder=\"";
        // line 132
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your email address"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_subject\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 139
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SUBJECT"]);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" id=\"cf_subject\" class=\"form-control\" placeholder=\"";
        // line 141
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter the subject of your message"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_message\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 148
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["MESSAGE"]);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"cf_message\" class=\"form-control\" cols=\"30\" rows=\"10\" placeholder=\"";
        // line 150
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your message"]);
        echo "\" tabindex=\"4\" required></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<!-- Contact form send button -->
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-gradient btn-gradient-orange \" type=\"submit\" name=\"contact\">
\t\t\t\t\t\t\t\t\t\t";
        // line 157
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SUBMIT"]);
        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Contact form element -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-9 col-lg-9 mb-sm-30 -->

\t\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t\t<div class=\"kl-title-block text-center gray text-lg-left tbk-symbol--line\">
\t\t\t\t\t\t\t<!-- Sub-title with custom color -->
\t\t\t\t\t\t\t<h6 class=\"gray\">";
        // line 170
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CONTACT"]);
        echo "</h6>

\t\t\t\t\t\t\t<!-- Title with custom size, weight and color -->
\t\t\t\t\t\t\t<h3 class=\"tbk__title fs-xl fw-extrabold gray\">
\t\t\t\t\t\t\t\t";
        // line 174
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["INFO"]);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<!--/ Title -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Contact details -->
\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t<!-- Title -->
<!--\t\t\t\t\t\t\t<h3 class=\"text_box-title text_box-title&#45;&#45;style2\">-->
<!--\t\t\t\t\t\t\t\t";
        // line 183
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CONTACT INFO"]);
        echo "-->
<!--\t\t\t\t\t\t\t</h3>-->

\t\t\t\t\t\t\t<!-- Sub-title -->


\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t<div class=\"contact-info d-flex flex-column\">

\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 192), "primary_email", [], "any", false, false, false, 192), "html", null, true);
        echo "\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 194), "primary_email", [], "any", false, false, false, 194), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 196), "company_phone", [], "any", false, false, false, 196), "html", null, true);
        echo "\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 198), "company_phone", [], "any", false, false, false, 198), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 200), "company_phone_2", [], "any", false, false, false, 200), "html", null, true);
        echo "\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 202), "company_phone_2", [], "any", false, false, false, 202), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 204), "company_phone_3", [], "any", false, false, false, 204), "html", null, true);
        echo "\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 206), "company_phone_3", [], "any", false, false, false, 206), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 209
        echo url("/");
        echo "\">";
        echo twig_escape_filter($this->env, twig_replace_filter(url("/"), ["http://" => ""]), "html", null, true);
        echo "</a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<!-- Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t<div class=\"elm-socialicons mb-0\">
\t\t\t\t\t\t\t\t\t<ul class=\"elm-social-icons sc--colored sh--circle clearfix mt-3\">
\t\t\t\t\t\t\t\t\t\t";
        // line 217
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 217), "facebook", [], "any", false, false, false, 217)) {
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 219), "facebook", [], "any", false, false, false, 219), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-0 fab fa-facebook-f bg-icon\" target=\"_self\" title=\"Facebook\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 222
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 222), "twitter", [], "any", false, false, false, 222)) {
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 224), "twitter", [], "any", false, false, false, 224), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-1 fab fa-twitter bg-icon\" target=\"_self\" title=\"Twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 227
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 227), "instagram", [], "any", false, false, false, 227)) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 229), "instagram", [], "any", false, false, false, 229), "html", null, true);
            echo "\" class=\"elm-sc-icon elm-sc-icon-2 fab fa-instagram bg-icon\" target=\"_self\" title=\"Instagram\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--/ Contact details -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-3 col-lg-3 -->
\t\t\t\t</div>
\t\t\t\t<!--/ .row -->
\t\t\t</div>
\t\t\t<!--/ .container -->
\t\t</section>
\t\t<!--/ Contact form element & details section with custom paddings -->

";
        // line 247
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        echo "<!-- JS FILES // Loaded on this page -->
<!-- Required js scripts files for Google Maps element (create and use your API Key bellow) https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 249), "map", [], "any", false, false, false, 249), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"./front/js/plugins/jquery.gmap.min.js\"></script>

<!-- Requried js trigger file for Google Maps element -->
<script type=\"text/javascript\">
;(function(\$){
\t\"use strict\";

\t\$(document).ready(function() {

\t\t/*
\t\tFind the Latitude and Longitude of your address:
\t\t\t- http://itouchmap.com/latlong.html
\t\t\t- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
\t\t\t- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

\t\tFind settings explained:
\t\t\t- https://github.com/marioestrada/jQuery-gMap

\t\t*/

\t\t// Map Markers
\t\tvar mapMarkers = [{
\t\t\taddress: \"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 272), "address", [], "any", false, false, false, 272), "html", null, true);
        echo "\",
\t\t\tlatitude: ";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 273), "lat", [], "any", false, false, false, 273), "html", null, true);
        echo ",
\t\t\tlongitude: ";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 274), "lng", [], "any", false, false, false, 274), "html", null, true);
        echo ",
\t\t\ticon: {
\t\t\t\timage: \"./front/images/map-marker.png\",
\t\t\t\ticonsize: [32, 39], // w, h
\t\t\t\ticonanchor: [13,39] // x, y
\t\t\t},
\t\t\thtml: '<div style=\"width: 300px; padding: 15px;\"><h3 style=\"margin-bottom: 15px;\">";
        // line 280
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 280), "title", [], "any", false, false, false, 280)]);
        echo "</span></h3><p class=\"nobottommargin\"><span style=\"line-height:1.4;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 280), "address", [], "any", false, false, false, 280), "html", null, true);
        echo "</span></p></div>',
\t\t}];

\t\t// Map Color Scheme - more styles here http://snazzymaps.com/
\t\tvar mapStyles = [
\t\t    {
\t\t        \"featureType\": \"landscape\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 60
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.local\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"transit\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"visibility\": \"simplified\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"administrative.province\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"water\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 30
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#ef8c25\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.stroke\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"poi.park\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#b6c54c\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"saturation\": -40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {}
\t\t];

\t\t// Map Initial Location
\t\tvar initLatitude = ";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 380), "lat", [], "any", false, false, false, 380), "html", null, true);
        echo ";
\t\tvar initLongitude = ";
        // line 381
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 381), "lng", [], "any", false, false, false, 381), "html", null, true);
        echo ";

\t\t// Map Extended Settings
\t\tvar map = jQuery(\".th-google_map\").gMap({
\t\t\tcontrols: {
\t\t\t\tpanControl: true,
\t\t\t\tzoomControl: true,
\t\t\t\tzoomControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\tmapTypeControl: true,
\t\t\t\tscaleControl: true,
\t\t\t\tstreetViewControl: true,
\t\t\t\tstreetViewControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\toverviewMapControl: true
\t\t\t},
\t\t\tscrollwheel: false,
\t\t\tmarkers: mapMarkers,
\t\t\tlatitude: initLatitude,
\t\t\tlongitude: initLongitude,
\t\t\tzoom: 13,
\t\t\tstyle: mapStyles,
\t\t\tdraggable: Modernizr.touch ? false : true
\t\t});
\t});// end of document ready

})(jQuery);
</script>
";
        // line 247
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 247,  610 => 381,  606 => 380,  501 => 280,  492 => 274,  488 => 273,  484 => 272,  458 => 249,  453 => 247,  436 => 232,  430 => 229,  427 => 228,  424 => 227,  418 => 224,  415 => 223,  412 => 222,  406 => 219,  403 => 218,  401 => 217,  388 => 209,  382 => 206,  377 => 204,  372 => 202,  367 => 200,  362 => 198,  357 => 196,  352 => 194,  347 => 192,  335 => 183,  323 => 174,  316 => 170,  300 => 157,  290 => 150,  285 => 148,  275 => 141,  270 => 139,  260 => 132,  255 => 130,  245 => 123,  240 => 121,  230 => 114,  225 => 112,  215 => 105,  201 => 93,  191 => 85,  177 => 84,  174 => 83,  171 => 82,  168 => 81,  165 => 80,  159 => 78,  151 => 76,  148 => 75,  145 => 74,  127 => 73,  125 => 72,  117 => 66,  115 => 65,  84 => 37,  80 => 36,  64 => 23,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Google maps slideshow element + Bottom mask style 5 -->
\t\t<div class=\"kl-slideshow static-content__slideshow scontent__maps\">
\t\t\t<!-- Map with custom height -->
\t\t\t<div class=\"th-google_map\" style=\"height: 750px;\"></div>
\t\t\t<!-- end map -->

\t\t\t<!-- Google map content panel -->
\t\t\t<div class=\"kl-contentmaps__panel\">
\t\t\t\t<a href=\"#\" class=\"js-toggle-class kl-contentmaps__panel-tgg hidden-xs\" data-target=\".kl-contentmaps__panel\" data-target-class=\"is-closed\"></a>
\t\t\t\t<!-- Image & Image pop-up -->
\t\t\t\t<a href=\"images/home-office-569359_640.jpg\" data-lightbox=\"image\" class=\"kl-contentmaps__panel-img\" style=\"background-image: url(./front/images/home-office-569359_640.jpg);\"></a>

\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"kl-contentmaps__panel-info\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h5 class=\"kl-contentmaps__panel-title\">
\t\t\t\t\t\t{{ settings.company.title|__ }}
\t\t\t\t\t</h5>

\t\t\t\t\t<!-- Description -->
\t\t\t\t\t<div class=\"kl-contentmaps__panel-info-text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ settings.company.description|__ }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--/ Content -->
\t\t\t</div>
\t\t\t<!-- Google map content panel -->

\t\t\t<div class=\"container align-self-center breadcrumb-center\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12 col-md-6 offset-lg-6\">
\t\t\t\t\t\t<!-- Sub-header titles -->
\t\t\t\t\t\t<div class=\"subheader-titles\">
\t\t\t\t\t\t\t<h2 class=\"subheader-maintitle\">{{this.page.title|__}}</h2>
\t\t\t\t\t\t\t<h4 class=\"subheader-subtitle\">{{this.page.subtitle|__}}</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Sub-header titles -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Bottom mask style 5 -->
\t\t\t<div class=\"kl-bottommask kl-bottommask--mask5\">
\t\t\t\t<svg width=\"2700px\" height=\"64px\" class=\"svgmask\" viewBox=\"0 0 2700 64\" version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<filter x=\"-50%\" y=\"-50%\" width=\"200%\" height=\"200%\" filterUnits=\"objectBoundingBox\" id=\"filter-mask5\">
\t\t\t\t\t\t\t<feOffset dx=\"0\" dy=\"2\" in=\"SourceAlpha\" result=\"shadowOffsetInner1\"></feOffset>
\t\t\t\t\t\t\t<feGaussianBlur stdDeviation=\"1.5\" in=\"shadowOffsetInner1\" result=\"shadowBlurInner1\"></feGaussianBlur>
\t\t\t\t\t\t\t<feComposite in=\"shadowBlurInner1\" in2=\"SourceAlpha\" operator=\"arithmetic\" k2=\"-1\" k3=\"1\" result=\"shadowInnerInner1\"></feComposite>
\t\t\t\t\t\t\t<feColorMatrix values=\"0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.45 0\" in=\"shadowInnerInner1\" type=\"matrix\" result=\"shadowMatrixInner1\"></feColorMatrix>
\t\t\t\t\t\t\t<feMerge>
\t\t\t\t\t\t\t\t<feMergeNode in=\"SourceGraphic\"></feMergeNode>
\t\t\t\t\t\t\t\t<feMergeNode in=\"shadowMatrixInner1\"></feMergeNode>
\t\t\t\t\t\t\t</feMerge>
\t\t\t\t\t\t</filter>
\t\t\t\t\t</defs>
\t\t\t\t\t<path d=\"M1892,0 L2119,44.993 L2701,45 L2701.133,63.993 L-0.16,63.993 L1.73847048e-12,45 L909,44.993 L1892,0 Z\" class=\"bmask-bgfill\" fill=\"#fbfbfb\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t\t<path d=\"M2216,44.993 L2093,55 L1882,6 L995,62 L966,42 L1892,0 L2118,44.993 L2216,44.993 L2216,44.993 Z\" fill=\"#cd2122\" class=\"bmask-customfill\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!--/ Bottom mask style 5 -->
\t\t\t<!--/ Bottom mask style 7 -->
\t\t\t{% if currentCrumb.show_crumb %}
\t\t\t<!-- Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t<div class=\"container breadcrumb-bottom\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<!-- Breadcrumb style 2 aligned right -->
\t\t\t\t\t\t<ul class=\"breadcrumbs white text-right float-right kl-font-alt\">
\t\t\t\t\t\t\t{% set activeCrumb = '' %}
\t\t\t\t\t\t\t{% for crumb in breadcrumbs %}
\t\t\t\t\t\t\t{% if crumb.in_crumb_trail %}
\t\t\t\t\t\t\t{% if not loop.last and not crumb.crumb_disabled %}
\t\t\t\t\t\t\t<li><a href=\"{{crumb.baseFileName | page}}\">{{crumb.title|__|upper}}</a></li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li class=\"active\"><span>{{crumb.title|__|upper}}</span></li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if not loop.last %}
\t\t\t\t\t\t\t{% set activeCrumb = crumb %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 -->
\t\t\t\t</div>
\t\t\t\t<!--/ row -->
\t\t\t</div>
\t\t\t<!--/ Breadcrumb style 2 for bottom mask style 7 -->
\t\t\t{% endif %}

\t\t</div>
\t\t<!--/ Google maps slideshow element + Bottom mask style 5 -->


\t\t<!-- Contact form element & details section with custom paddings -->
\t\t<section class=\"hg_section pt-100 pb-100 contact-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-8 mb-sm-30\">
\t\t\t\t\t\t<!-- Contact form element -->
\t\t\t\t\t\t<div class=\"contactForm\">
\t\t\t\t\t\t\t<form action=\"mailto:{{ settings.company.primary_email }}\" method=\"post\" class=\"contact_form contact-form row\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<!-- Response wrapper -->
\t\t\t\t\t\t\t\t<div class=\"cf_response\"></div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_name\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t{{\"FIRSTNAME\"|__}}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"cf_name\" class=\"form-control\" placeholder=\"{{'Enter your first name'|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_lastname\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t{{\"LASTNAME\"|__}}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"cf_lastname\" class=\"form-control\" placeholder=\"{{'Enter your last name'|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_email\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t{{\"EMAIL\"|__}}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"cf_email\" class=\"form-control h5-email\" placeholder=\"{{'Enter your email address'|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_subject\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t{{\"SUBJECT\"|__}}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" id=\"cf_subject\" class=\"form-control\" placeholder=\"{{'Enter the subject of your message'|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t\t\t\t<label for=\"cf_message\" class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t\t{{\"MESSAGE\"|__}}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"cf_message\" class=\"form-control\" cols=\"30\" rows=\"10\" placeholder=\"{{'Your message'|__}}\" tabindex=\"4\" required></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<!-- Contact form send button -->
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-gradient btn-gradient-orange \" type=\"submit\" name=\"contact\">
\t\t\t\t\t\t\t\t\t\t{{\"SUBMIT\"|__}}
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Contact form element -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-9 col-lg-9 mb-sm-30 -->

\t\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t\t<div class=\"kl-title-block text-center gray text-lg-left tbk-symbol--line\">
\t\t\t\t\t\t\t<!-- Sub-title with custom color -->
\t\t\t\t\t\t\t<h6 class=\"gray\">{{'CONTACT'|__}}</h6>

\t\t\t\t\t\t\t<!-- Title with custom size, weight and color -->
\t\t\t\t\t\t\t<h3 class=\"tbk__title fs-xl fw-extrabold gray\">
\t\t\t\t\t\t\t\t{{'INFO'|__}}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<!--/ Title -->

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Contact details -->
\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t<!-- Title -->
<!--\t\t\t\t\t\t\t<h3 class=\"text_box-title text_box-title&#45;&#45;style2\">-->
<!--\t\t\t\t\t\t\t\t{{\"CONTACT INFO\"|__}}-->
<!--\t\t\t\t\t\t\t</h3>-->

\t\t\t\t\t\t\t<!-- Sub-title -->


\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t<div class=\"contact-info d-flex flex-column\">

\t\t\t\t\t\t\t\t<a href=\"mailto:{{ settings.company.primary_email }}\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>{{ settings.company.primary_email }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"tel:{{ settings.company.company_phone }}\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>{{ settings.company.company_phone }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"tel:{{ settings.company.company_phone_2 }}\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>{{ settings.company.company_phone_2 }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"tel:{{ settings.company.company_phone_3 }}\" target=\"_blank\" class=\"contact-links\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-earphone icon-size-xxs\"></i>
\t\t\t\t\t\t\t\t\t<span>{{ settings.company.company_phone_3 }}</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"{{url('/')}}\">{{url('/')|replace({'http://':''})}}</a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<!-- Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t\t<div class=\"elm-socialicons mb-0\">
\t\t\t\t\t\t\t\t\t<ul class=\"elm-social-icons sc--colored sh--circle clearfix mt-3\">
\t\t\t\t\t\t\t\t\t\t{% if settings.company.facebook %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.facebook }}\" class=\"elm-sc-icon elm-sc-icon-0 fab fa-facebook-f bg-icon\" target=\"_self\" title=\"Facebook\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if settings.company.twitter %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.twitter }}\" class=\"elm-sc-icon elm-sc-icon-1 fab fa-twitter bg-icon\" target=\"_self\" title=\"Twitter\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if settings.company.instagram %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ settings.company.instagram }}\" class=\"elm-sc-icon elm-sc-icon-2 fab fa-instagram bg-icon\" target=\"_self\" title=\"Instagram\"></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ Social icons colored background, aligned center and rounded style -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!--/ Contact details -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-3 col-lg-3 -->
\t\t\t\t</div>
\t\t\t\t<!--/ .row -->
\t\t\t</div>
\t\t\t<!--/ .container -->
\t\t</section>
\t\t<!--/ Contact form element & details section with custom paddings -->

{% put scripts %}<!-- JS FILES // Loaded on this page -->
<!-- Required js scripts files for Google Maps element (create and use your API Key bellow) https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key={{settings.google.map}}\"></script>
<script type=\"text/javascript\" src=\"./front/js/plugins/jquery.gmap.min.js\"></script>

<!-- Requried js trigger file for Google Maps element -->
<script type=\"text/javascript\">
;(function(\$){
\t\"use strict\";

\t\$(document).ready(function() {

\t\t/*
\t\tFind the Latitude and Longitude of your address:
\t\t\t- http://itouchmap.com/latlong.html
\t\t\t- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
\t\t\t- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

\t\tFind settings explained:
\t\t\t- https://github.com/marioestrada/jQuery-gMap

\t\t*/

\t\t// Map Markers
\t\tvar mapMarkers = [{
\t\t\taddress: \"{{ settings.company.address }}\",
\t\t\tlatitude: {{ settings.company.lat }},
\t\t\tlongitude: {{ settings.company.lng }},
\t\t\ticon: {
\t\t\t\timage: \"./front/images/map-marker.png\",
\t\t\t\ticonsize: [32, 39], // w, h
\t\t\t\ticonanchor: [13,39] // x, y
\t\t\t},
\t\t\thtml: '<div style=\"width: 300px; padding: 15px;\"><h3 style=\"margin-bottom: 15px;\">{{ settings.company.title|__ }}</span></h3><p class=\"nobottommargin\"><span style=\"line-height:1.4;\">{{ settings.company.address }}</span></p></div>',
\t\t}];

\t\t// Map Color Scheme - more styles here http://snazzymaps.com/
\t\tvar mapStyles = [
\t\t    {
\t\t        \"featureType\": \"landscape\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 60
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.local\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"transit\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"visibility\": \"simplified\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"administrative.province\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"water\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 30
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#ef8c25\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.stroke\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"poi.park\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#b6c54c\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"saturation\": -40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {}
\t\t];

\t\t// Map Initial Location
\t\tvar initLatitude = {{ settings.company.lat }};
\t\tvar initLongitude = {{ settings.company.lng }};

\t\t// Map Extended Settings
\t\tvar map = jQuery(\".th-google_map\").gMap({
\t\t\tcontrols: {
\t\t\t\tpanControl: true,
\t\t\t\tzoomControl: true,
\t\t\t\tzoomControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\tmapTypeControl: true,
\t\t\t\tscaleControl: true,
\t\t\t\tstreetViewControl: true,
\t\t\t\tstreetViewControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\toverviewMapControl: true
\t\t\t},
\t\t\tscrollwheel: false,
\t\t\tmarkers: mapMarkers,
\t\t\tlatitude: initLatitude,
\t\t\tlongitude: initLongitude,
\t\t\tzoom: 13,
\t\t\tstyle: mapStyles,
\t\t\tdraggable: Modernizr.touch ? false : true
\t\t});
\t});// end of document ready

})(jQuery);
</script>
{% endput %}", "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/contact.htm", "");
    }
}
