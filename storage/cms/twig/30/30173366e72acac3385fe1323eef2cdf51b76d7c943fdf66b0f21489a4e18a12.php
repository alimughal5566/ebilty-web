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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/partials/profilemenu.htm */
class __TwigTemplate_8d2a9097efb5df7a2e46564cc8e966b46e3c2e65658f7f1d51ef5ee9293dc619 extends \Twig\Template
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
        echo "<!--Begin:: App Aside Mobile Toggle-->
<button class=\"kt-app__aside-close\" id=\"kt_user_profile_aside_close\">
    <i class=\"la la-close\"></i>
</button>
<!--End:: App Aside Mobile Toggle-->

<!--Begin:: App Aside-->
<div class=\"kt-grid__item kt-app__toggle kt-app__aside kt_user_profile_aside\" id=\"kt_user_profile_aside\">
    <!--begin:: Widgets/Applications/User/Profile1-->
    <div class=\"kt-portlet kt-portlet--height-fluid-\">
        <div class=\"kt-portlet__head  kt-portlet__head--noborder\">
            <div class=\"kt-portlet__head-label\">
                <h3 class=\"kt-portlet__head-title\">
                </h3>
            </div>
        </div>
        <div class=\"kt-portlet__body kt-portlet__body--fit-y\">
            <!--begin::Widget -->
            <div class=\"kt-widget kt-widget--user-profile-1\">
                <div class=\"kt-widget__head\">
                    <div class=\"kt-widget__media\">
                        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 22)) {
            // line 23
            echo "                             <img alt=\"Pic\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 23), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 23), "html", null, true);
            echo "\" />
                        ";
        } else {
            // line 25
            echo "                            <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--xl kt-badge--rounded kt-badge--bold\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 25)), 0, 2), "html", null, true);
            echo "</span>
                         ";
        }
        // line 27
        echo "                    </div>
                    <div class=\"kt-widget__content\">
                        <div class=\"kt-widget__section\">
                            <a href=\"javascript:void(0);\" class=\"kt-widget__username\">
                                ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "
                                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "userverify_dateverified", [], "any", false, false, false, 32)) {
            // line 33
            echo "                                    <i class=\"flaticon2-correct kt-font-success\"></i>
                                ";
        }
        // line 35
        echo "                            </a>
                            <span class=\"kt-widget__subtitle\">
                                ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"kt-widget__body kt-margin-t-20\">
                    <div class=\"kt-widget__content\">
                        ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 44)) {
            // line 45
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 46
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ":</span>
                                <a href=\"javascript:void(0);\" class=\"kt-widget__data\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 50
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 50)) {
            // line 51
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 52
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
            echo ":</span>
                                <a href=\"javascript:void(0);\" class=\"kt-widget__data\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 56
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 56)) {
            // line 57
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 58
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo ":</span>
                                <span class=\"kt-widget__data\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 62
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 62) != 1)) {
            // line 63
            echo "                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">";
            // line 64
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ًWallet"]);
            echo ":</span>
                                <span class=\"kt-widget__data\">";
            // line 65
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "payments", [], "any", false, false, false, 65), "sum", [0 => "amount"], "method", false, false, false, 65)]);
            echo "</span>
                            </div>
                        ";
        }
        // line 68
        echo "                    </div>
                    <div class=\"kt-widget__items kt-margin-t-20\">

                        <a href=\"";
        // line 71
        echo url("dashboard/account");
        echo "\" class=\"kt-widget__item ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 71), "page", [], "any", false, false, false, 71))) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-user-circle\"></i>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    ";
        // line 77
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Profile Overview"]);
        echo "
                                </span>
                            </span>
                        </a>
                        <a  href=\"";
        // line 81
        echo url("dashboard/account/edit");
        echo "\" class=\"kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 81), "page", [], "any", false, false, false, 81) == "edit")) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-info-circle\"></i>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    ";
        // line 87
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Personal Information"]);
        echo "
                                </span>
                            </span>
                        </a>
                        ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 91) == 5)) {
            // line 92
            echo "                            <a href=\"";
            echo url("dashboard/account/addresses");
            echo "\" class=\"kt-widget__item ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 92), "page", [], "any", false, false, false, 92) == "addresses")) {
                echo "kt-widget__item--active";
            }
            echo "\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <i class=\"fa fa-address-card\"></i>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        ";
            // line 98
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Addresses"]);
            echo "
                                    </span>
                                </span>
                            </a>
                        ";
        } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,         // line 102
($context["user"] ?? null), "role_id", [], "any", false, false, false, 102), [0 => 3, 1 => 4, 2 => 6])) {
            // line 103
            echo "                            <a href=\"";
            echo url("dashboard/account/addresses");
            echo "\" class=\"kt-widget__item ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 103), "page", [], "any", false, false, false, 103) == "addresses")) {
                echo "kt-widget__item--active";
            }
            echo "\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                            <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        ";
            // line 115
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Covered Areas"]);
            echo "
                                    </span>
                                </span>
                            </a>
                        ";
        }
        // line 120
        echo "                        <a href=\"";
        echo url("dashboard/account/password");
        echo "\" class=\"kt-hidden kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 120), "page", [], "any", false, false, false, 120) == "password")) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-user-lock\"></i>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    ";
        // line 126
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Password"]);
        echo "
                                </span>
                            </span>
                        </a>
                        <a href=\"";
        // line 130
        echo url("dashboard/account/settings");
        echo "\"  class=\"kt-hidden kt-widget__item ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 130), "page", [], "any", false, false, false, 130) == "settings")) {
            echo "kt-widget__item--active";
        }
        echo "\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-cog\"></i>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    ";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Settings"]);
        echo "
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Widget -->
        </div>
    </div>
    <!--end:: Widgets/Applications/User/Profile1-->
</div>
<!--End:: App Aside-->";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/profilemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 136,  286 => 130,  279 => 126,  265 => 120,  257 => 115,  237 => 103,  235 => 102,  228 => 98,  214 => 92,  212 => 91,  205 => 87,  192 => 81,  185 => 77,  172 => 71,  167 => 68,  161 => 65,  157 => 64,  154 => 63,  151 => 62,  145 => 59,  141 => 58,  138 => 57,  135 => 56,  129 => 53,  125 => 52,  122 => 51,  119 => 50,  113 => 47,  109 => 46,  106 => 45,  104 => 44,  94 => 37,  90 => 35,  86 => 33,  84 => 32,  80 => 31,  74 => 27,  68 => 25,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Begin:: App Aside Mobile Toggle-->
<button class=\"kt-app__aside-close\" id=\"kt_user_profile_aside_close\">
    <i class=\"la la-close\"></i>
</button>
<!--End:: App Aside Mobile Toggle-->

<!--Begin:: App Aside-->
<div class=\"kt-grid__item kt-app__toggle kt-app__aside kt_user_profile_aside\" id=\"kt_user_profile_aside\">
    <!--begin:: Widgets/Applications/User/Profile1-->
    <div class=\"kt-portlet kt-portlet--height-fluid-\">
        <div class=\"kt-portlet__head  kt-portlet__head--noborder\">
            <div class=\"kt-portlet__head-label\">
                <h3 class=\"kt-portlet__head-title\">
                </h3>
            </div>
        </div>
        <div class=\"kt-portlet__body kt-portlet__body--fit-y\">
            <!--begin::Widget -->
            <div class=\"kt-widget kt-widget--user-profile-1\">
                <div class=\"kt-widget__head\">
                    <div class=\"kt-widget__media\">
                        {% if user.avatar %}
                             <img alt=\"Pic\" src=\"{{user.avatar.thumb(100, 100,'crop')}}\" />
                        {% else %}
                            <span class=\"kt-badge kt-badge--username kt-badge--unified-success kt-badge--xl kt-badge--rounded kt-badge--bold\">{{user.name|capitalize|slice(0,2)}}</span>
                         {% endif %}
                    </div>
                    <div class=\"kt-widget__content\">
                        <div class=\"kt-widget__section\">
                            <a href=\"javascript:void(0);\" class=\"kt-widget__username\">
                                {{user.name}}
                                {% if item.userverify_dateverified %}
                                    <i class=\"flaticon2-correct kt-font-success\"></i>
                                {% endif %}
                            </a>
                            <span class=\"kt-widget__subtitle\">
                                {{user.role.name}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"kt-widget__body kt-margin-t-20\">
                    <div class=\"kt-widget__content\">
                        {% if user.email %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'Email'|__}}:</span>
                                <a href=\"javascript:void(0);\" class=\"kt-widget__data\">{{user.email}}</a>
                            </div>
                        {% endif %}
                        {% if user.phone %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'Phone'|__}}:</span>
                                <a href=\"javascript:void(0);\" class=\"kt-widget__data\">{{user.phone}}</a>
                            </div>
                        {% endif %}
                        {% if user.mobile %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'Mobile'|__}}:</span>
                                <span class=\"kt-widget__data\">{{user.mobile}}</span>
                            </div>
                        {% endif %}
                        {% if user.role_id != 1 %}
                            <div class=\"kt-widget__info\">
                                <span class=\"kt-widget__label\">{{'ًWallet'|__}}:</span>
                                <span class=\"kt-widget__data\">{{user.payments.sum('amount')|currency}}</span>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"kt-widget__items kt-margin-t-20\">

                        <a href=\"{{url('dashboard/account')}}\" class=\"kt-widget__item {% if this.param.page is empty %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-user-circle\"></i>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    {{'Profile Overview'|__}}
                                </span>
                            </span>
                        </a>
                        <a  href=\"{{url('dashboard/account/edit')}}\" class=\"kt-widget__item {% if this.param.page == 'edit' %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-info-circle\"></i>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    {{'Personal Information'|__}}
                                </span>
                            </span>
                        </a>
                        {% if user.role_id ==  5 %}
                            <a href=\"{{url('dashboard/account/addresses')}}\" class=\"kt-widget__item {% if this.param.page == 'addresses' %}kt-widget__item--active{% endif %}\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <i class=\"fa fa-address-card\"></i>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        {{'Addresses'|__}}
                                    </span>
                                </span>
                            </a>
                        {% elseif user.role_id in [3,4,6]%}
                            <a href=\"{{url('dashboard/account/addresses')}}\" class=\"kt-widget__item {% if this.param.page == 'addresses' %}kt-widget__item--active{% endif %}\">
                                <span class=\"kt-widget__section\">
                                    <span class=\"kt-widget__icon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                            <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z\" fill=\"#000000\" opacity=\"0.3\"/>
                                            <path d=\"M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z\" fill=\"#000000\"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=\"kt-widget__desc\">
                                        {{'Covered Areas'|__}}
                                    </span>
                                </span>
                            </a>
                        {% endif %}
                        <a href=\"{{url('dashboard/account/password')}}\" class=\"kt-hidden kt-widget__item {% if this.param.page == 'password' %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-user-lock\"></i>
                                </span>
                                <span  class=\"kt-widget__desc\">
                                    {{'Change Password'|__}}
                                </span>
                            </span>
                        </a>
                        <a href=\"{{url('dashboard/account/settings')}}\"  class=\"kt-hidden kt-widget__item {% if this.param.page == 'settings' %}kt-widget__item--active{% endif %}\">
                            <span class=\"kt-widget__section\">
                                <span class=\"kt-widget__icon\">
                                    <i class=\"fa fa-cog\"></i>
                                </span>
                                <span class=\"kt-widget__desc\">
                                    {{'Settings'|__}}
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Widget -->
        </div>
    </div>
    <!--end:: Widgets/Applications/User/Profile1-->
</div>
<!--End:: App Aside-->", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/profilemenu.htm", "");
    }
}
