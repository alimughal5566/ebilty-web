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

/* C:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/profile.htm */
class __TwigTemplate_4961fb67a20daafc67f6b50a90e8c75018e850a0389fd629e1f841c9ee5c268c extends \Twig\Template
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
        echo "<!--Begin::App-->
<div class=\"kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("profilemenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <!--Begin:: App Content-->
    <div class=\"kt-grid__item kt-grid__item--fluid kt-app__content\">
        ";
        // line 7
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 7), "page", [], "any", false, false, false, 7))) {
            // line 8
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 8) == 51)) {
                // line 9
                echo "                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <!--begin:: Widgets/Order Statistics-->
                        <div class=\"kt-portlet kt-portlet--height-fluid\">
                            <div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <h3 class=\"kt-portlet__head-title\">";
                // line 15
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Orders Statistics"]);
                echo "</h3>
                                </div>
                            </div>
                            <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                                <div class=\"kt-widget12\">
                                    <div class=\"kt-widget12__content\">
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Annual Taxes EMS</span>
                                                <span class=\"kt-widget12__value\">\$400,000</span>
                                            </div>

                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Finance Review Date</span>
                                                <span class=\"kt-widget12__value\">July 24,2019</span>
                                            </div>
                                        </div>
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Avarage Revenue</span>
                                                <span class=\"kt-widget12__value\">\$60M</span>
                                            </div>
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Revenue Margin</span>
                                                <div class=\"kt-widget12__progress\">
                                                    <div class=\"progress kt-progress--sm\">
                                                        <div class=\"progress-bar kt-bg-brand\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                    <span class=\"kt-widget12__stat\">
                                                        40%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"kt-widget12__chart\" style=\"height:100px;\">
                                        <canvas id=\"kt_chart_order_statistics\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Order Statistics-->
                    </div>
                </div>
            ";
            }
            // line 60
            echo "            <div class=\"row\">
                <div class=\"col-12\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 66
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Latest Updates"]);
            echo "</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "activities", [], "any", false, false, false, 71), "orderBy", [0 => "id", 1 => "desc"], "method", false, false, false, 71), "take", [0 => 20], "method", false, false, false, 71));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 72
                echo "                                    <!--begin::widget 12-->
                                    <div class=\"kt-widget4\">
                                        <div class=\"kt-widget4__item\">
                                            <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                            <a href=\"#\" class=\"kt-widget4__title kt-widget4__title--light\">";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 76), "html", null, true);
                echo "</a>
                                            <span class=\"kt-widget4__number kt-font-info\">#";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "order_id", [], "any", false, false, false, 77), "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                    <!--end::Widget 12-->
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    ";
                // line 95
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No activities found"]);
                echo ".
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
                <div class=\"col-12\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 111
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notifications"]);
            echo "</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "notifications", [], "any", false, false, false, 116), "where", [0 => "read_at", 1 => null], "method", false, false, false, 116));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 117
                echo "                                    <!--begin::widget 12-->
                                    <!--begin::widget 12-->
                                    <div class=\"kt-notification\">
                                        ";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 120) == "new_account")) {
                    // line 121
                    echo "                                        <a href=\"javascript:void(0);\" class=\"kt-notification__item\">
                                        ";
                } else {
                    // line 123
                    echo "                                        <a href=\"";
                    echo url("dashboard/notifications");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 123), "html", null, true);
                    echo "\" class=\"kt-notification__item\">
                                        ";
                }
                // line 124
                echo " 
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    ";
                // line 136
                if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "body", [], "any", false, false, false, 136)])) {
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "body", [], "any", false, false, false, 136)]);
                }
                // line 137
                echo "                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    ";
                // line 139
                if (call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 139)])) {
                    // line 140
                    echo "                                                        ";
                    echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 140)]);
                    echo "
                                                    ";
                } else {
                    // line 142
                    echo "                                                        ";
                    echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["notification"], "created_at", [], "any", false, false, false, 142)]);
                    echo "
                                                    ";
                }
                // line 144
                echo "                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Widget 12-->
                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 150
                echo "                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    ";
                // line 163
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No new notifications found"]);
                echo ".
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
            </div>
        ";
        }
        // line 176
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 176), "page", [], "any", false, false, false, 176) == "edit")) {
            // line 177
            echo "            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 182
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Personal Information"]);
            echo " <small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["update your personal informaiton"]);
            echo "</small></h3>
                            </div>
                        </div>

                        ";
            // line 186
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["files" => true, "id" => "kt_form", "class" => "kt-form kt-form--label-right"]]);
            echo "
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 192
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Company Name"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"company\"  value=\"";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "company", [], "any", false, false, false, 194), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 198
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Owner Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 200), "html", null, true);
            echo "\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 204
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Commercial Registration No"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"commercialRegistration\"  value=\"";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "commercialRegistration", [], "any", false, false, false, 206), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 210
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax Certificate No"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"taxCertificate\"  value=\"";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "taxCertificate", [], "any", false, false, false, 212), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 216
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Number"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"mobile\"  value=\"";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 218), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 222
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "email", [], "any", false, false, false, 224), "html", null, true);
            echo "\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 228
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password\" />
                                                <span class=\"text-muted\">";
            // line 231
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Only fill it if you need to change your password"]);
            echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 235
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password Confirmation"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 242
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"country_id\" data-live-search=\"true\" name=\"country_id\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 247
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 247), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 247), "name", [], "any", false, false, false, 247), "html", null, true);
                    echo " \"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "country_id", [], "any", false, false, false, 247) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 247))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 247), "name", [], "any", false, false, false, 247), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 253
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"zip\"  value=\"";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "zip", [], "any", false, false, false, 255), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 259
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control state_id\" id=\"state_id\" title=\"";
            // line 261
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"state_id\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getList"] ?? null), "states", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 263), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "country_id", [], "any", false, false, false, 263)], "method", false, false, false, 263), "html", null, true);
            echo "
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 268
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control city\" id=\"city\" title=\"";
            // line 270
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" name=\"city\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getList"] ?? null), "cities", [0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "city_id", [], "any", false, false, false, 272), 1 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "state_id", [], "any", false, false, false, 272)], "method", false, false, false, 272), "html", null, true);
            echo "
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 277
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"street_addr\"  value=\"";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "street_addr", [], "any", false, false, false, 279), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 284
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The Number of Expected Orders"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"expectedOrders\" data-live-search=\"true\" name=\"numOrders\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["expectedOrders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["numOrders"]) {
                // line 289
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["numOrders"], "id", [], "any", false, false, false, 289), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "numOrders", [], "any", false, false, false, 289) == twig_get_attribute($this->env, $this->source, $context["numOrders"], "id", [], "any", false, false, false, 289))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["numOrders"], "name", [], "any", false, false, false, 289), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numOrders'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-6 col-lg-3 col-form-label\">
                                            ";
            // line 296
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Way to Entry Orders"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                            <br /><span class=\"text-muted\"></span>
                                            </label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-radio-inline\">
                                                    <label class=\"kt-radio\">
                                                        <input type=\"radio\" name=\"wayOrder\" class=\"wayOrder\" value=\"1\" required ";
            // line 302
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "wayOrder", [], "any", false, false, false, 302) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manual"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-radio\">
                                                        <input type=\"radio\" name=\"wayOrder\" class=\"wayOrder\" value=\"2\" required ";
            // line 306
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "wayOrder", [], "any", false, false, false, 306) == 2)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["API"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-radio\">
                                                        <input type=\"radio\" name=\"wayOrder\" class=\"wayOrder\" value=\"3\" required ";
            // line 310
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "wayOrder", [], "any", false, false, false, 310) == 3)) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Both"]);
            echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 317
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["IBAN"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"iban\" value=\"";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "iban", [], "any", false, false, false, 319), "html", null, true);
            echo "\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 323
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Full Name of the Bank Account"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"nameAccount\" value=\"";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "nameAccount", [], "any", false, false, false, 325), "html", null, true);
            echo "\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 329
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The Name of Bank"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"bankName\" data-live-search=\"true\" name=\"bankName\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 333
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["bankName"]) {
                // line 334
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bankName"], "id", [], "any", false, false, false, 334), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "bankName", [], "any", false, false, false, 334) == twig_get_attribute($this->env, $this->source, $context["bankName"], "id", [], "any", false, false, false, 334))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bankName"], "name", [], "any", false, false, false, 334), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bankName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            echo "                                                </select>
                                            </div>
                                        </div>


                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 342
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Upload Files"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"file\" class=\"form-control \" name=\"files[]\" multiple=\"\"  />
                                            </div>
                                        </div> 

                                        ";
            // line 348
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "files", [], "any", false, false, false, 348)) {
                // line 349
                echo "                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\">File Information</th>
                                                    <th scope=\"col\"></th>
                                                </tr>
                                            </thead>
                                            <tbody>   <!-- getClientOriginalExtension()  getClientOriginalName -->
                                                ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "files", [], "any", false, false, false, 357));
                foreach ($context['_seq'] as $context["key"] => $context["file"]) {
                    // line 358
                    echo "                                                <tr>
                                                    
                                                    <td>
                                                        <a href=\"";
                    // line 361
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 361), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, false, 361), "html", null, true);
                    echo "</a>
                                                    </td>
                                                    <td>
                                                        <button id=\"removeFile\" type=\"button\" name=\"";
                    // line 364
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"close\" aria-label=\"Close\">X
                                                        </button>
                                                    </td>
                                                </tr>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 369
                echo "                                            </tbody>
                                        </table>
                                        ";
            }
            // line 372
            echo "


                                        
                                    </div>
                                </div>

                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                     <button type=\"submit\" class=\"btn btn-primary\">";
            // line 386
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                                     <span class=\"kt-margin-left-10\">";
            // line 387
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
            echo " <a href=\"";
            echo url("dashboard/account");
            echo "\" class=\"kt-link\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            // line 392
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 397
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 397), "page", [], "any", false, false, false, 397) == "password")) {
            // line 398
            echo "            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 403
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Password"]);
            echo "<small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["change or reset your account password"]);
            echo "</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                            <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                            <div class=\"alert-text\">";
            // line 412
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire"]);
            echo ", <br>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or they might inadvertently get locked out of the system"]);
            echo "!</div>
                                            <div class=\"alert-close\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">";
            // line 423
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Or Recover Your Password"]);
            echo ":</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 427
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Current Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"old_password\" value=\"\" placeholder=\"";
            // line 429
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Current Password"]);
            echo "\">
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 433
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"\"value=\"\" placeholder=\"";
            // line 435
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Password"]);
            echo "\">
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 439
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Verify Password"]);
            echo "</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" value=\"\" placeholder=\"";
            // line 441
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Verify Password"]);
            echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">";
            // line 453
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Password"]);
            echo "</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">";
            // line 454
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        // line 464
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 464), "page", [], "any", false, false, false, 464) == "addresses")) {
            // line 465
            echo "            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                ";
            // line 470
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 470) == 5)) {
                // line 471
                echo "                                    <h3 class=\"kt-portlet__head-title\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Addresses"]);
                echo "<small>";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your addresses that you will ship from or to"]);
                echo "</small></h3>
                                ";
            } else {
                // line 473
                echo "                                    <h3 class=\"kt-portlet__head-title\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Covered Areas"]);
                echo "<small>";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your covered areas that you can deliver from or to"]);
                echo "</small></h3>
                                ";
            }
            // line 475
            echo "                            </div>
                        </div>
                        ";
            // line 477
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPlaces", ["id" => "kt_form", "class" => "kt-form kt-form--label-right", "novalidate" => true]]);
            echo "
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        ";
            // line 481
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 481) == 5)) {
                // line 482
                echo "                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">";
                // line 484
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please be aware that your addresses pin on google maps is always very urgent for fast and accurate deliver for your shipments"]);
                echo "</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div id=\"kt_repeater_addresses\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"location\">
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-6\">
                                                                        <label>";
                // line 499
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
                // line 500
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "name", [], "any", false, false, false, 500), "html", null, true);
                echo "\" required/>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-6\">
                                                                        <label>";
                // line 503
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Address"]);
                echo "</label>
                                                                        <div class=\"kt-radio-inline\">
                                                                            <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"1\" ";
                // line 506
                if ((twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "default", [], "any", false, false, false, 506) == 1)) {
                    echo "checked";
                }
                echo "> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                echo "
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"0\" ";
                // line 510
                if ((twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "default", [], "any", false, false, false, 510) == 0)) {
                    echo "checked";
                }
                echo "> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
                echo "
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-5\">
                                                                        <label>";
                // line 518
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <input type=\"text\" class=\"form-control address street_addr\" data-location=\"route\" name=\"street_address\" required/>
                                                                        <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" />
                                                                        <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" />
                                                                        <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" />
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 525
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                echo "</label>
                                                                        <select class=\"form-control country_id repeater_select\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 528
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 529
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 529), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 529), "name", [], "any", false, false, false, 529), "html", null, true);
                        echo " \"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 529), "name", [], "any", false, false, false, 529), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 531
                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-3\">
                                                                        <label>";
                // line 534
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                                        <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" >
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 540
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "</label>
                                                                        <select class=\"form-control state_id repeater_select\" data-location=\"administrative_area_level_1\" title=\"";
                // line 541
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"state\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 543
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 544
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 544), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 544), "name", [], "any", false, false, false, 544), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 544), "name", [], "any", false, false, false, 544), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 546
                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 549
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                echo "</label>
                                                                        <select class=\"form-control city_id repeater_select\" data-location=\"locality\" name=\"city\" title=\"";
                // line 550
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                echo "\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 552
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                    // line 553
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 553), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 553), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 555
                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>";
                // line 558
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <select class=\"form-control area_id repeater_select\" data-location=\"sublocality\" name=\"county\" title=\"";
                // line 559
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                // line 561
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 562
                    echo "                                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 562), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 562), "html", null, true);
                    echo "</option>
                                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 564
                echo "                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                // line 569
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                                        <div class=\"col-sm-12 map_canvas\"></div>
                                                                        <span class=\"form-text text-muted\">";
                // line 571
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        ";
                // line 580
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var lat = [];
                                                            var lng = [];
                                                        </script>
                                                        ";
                // line 589
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 589));
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
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 590
                    echo "                                                            <div data-repeater-item class=\"align-items-center\">
                                                                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 591
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 591), "html", null, true);
                    echo "\" />
                                                                <div class=\"location\">
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-6\">
                                                                            <label>";
                    // line 595
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
                    // line 596
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 596), "html", null, true);
                    echo "\" required/>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-6\">
                                                                            <label>";
                    // line 599
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Default Address"]);
                    echo "</label>
                                                                            <div class=\"kt-radio-inline\">
                                                                               <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"1\" ";
                    // line 602
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 602) == 1)) {
                        echo "checked";
                    }
                    echo "> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                    echo "
                                                                                <span></span>
                                                                               </label>
                                                                               <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"0\" ";
                    // line 606
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 606) == 0)) {
                        echo "checked";
                    }
                    echo "> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
                    echo "
                                                                                <span></span>
                                                                               </label>
                                                                              </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-5\">
                                                                            <label>";
                    // line 614
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <input type=\"text\" class=\"form-control address street_addr edit_address_";
                    // line 615
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 615), "html", null, true);
                    echo "\" data-location=\"route\" name=\"street_address\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", [], "any", false, false, false, 615), "html", null, true);
                    echo "\" required/>
                                                                            <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" value=\"";
                    // line 616
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 616), "html", null, true);
                    echo "\" />
                                                                            <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" value=\"";
                    // line 617
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 617), "html", null, true);
                    echo "\" />
                                                                            <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" value=\"";
                    // line 618
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "url", [], "any", false, false, false, 618), "html", null, true);
                    echo "\" />
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 621
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control country_id_repeater\" data-location=\"country\" data-live-search=\"true\" name=\"country\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 624
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        // line 625
                        echo "                                                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 625), "html", null, true);
                        echo "\" ";
                        if ((($context["currentLang"] ?? null) != "en")) {
                            echo "data-subtext=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 625), "name", [], "any", false, false, false, 625), "html", null, true);
                            echo " \"";
                        }
                        echo " ";
                        if ((twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 625) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 625))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 625), "name", [], "any", false, false, false, 625), "html", null, true);
                        echo "</option>
                                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 627
                    echo "                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-3\">
                                                                            <label>";
                    // line 630
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                    echo "</label>
                                                                            <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" value=\"";
                    // line 631
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "zipcode", [], "any", false, false, false, 631), "html", null, true);
                    echo "\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 636
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control state_id_repeater\" data-location=\"administrative_area_level_1\" title=\"";
                    // line 637
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                    echo "\" name=\"state\" data-live-search=\"true\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 639
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getList"] ?? null), "states", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 639), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 639)], "method", false, false, false, 639), "html", null, true);
                    echo "
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 643
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control city_id_repeater\" data-location=\"locality\" name=\"city\" title=\"";
                    // line 644
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                    echo "\" data-live-search=\"true\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 646
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getList"] ?? null), "cities", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 646), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 646)], "method", false, false, false, 646), "html", null, true);
                    echo "
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>";
                    // line 650
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                    echo "</label>
                                                                            <select class=\"form-control area_id_repeater\" data-location=\"sublocality\" name=\"county\" title=\"";
                    // line 651
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                    echo "\" data-live-search=\"true\" >
                                                                                <option data-hidden=\"true\"></option>
                                                                                ";
                    // line 653
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getList"] ?? null), "areas", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "county", [], "any", false, false, false, 653), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 653)], "method", false, false, false, 653), "html", null, true);
                    echo "
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-12\">
                                                                            <label>";
                    // line 659
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                    echo "</label>
                                                                            <div class=\"col-sm-12 map_canvas map_canvas_";
                    // line 660
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 660), "html", null, true);
                    echo "\"></div>
                                                                            <span class=\"form-text text-muted\">";
                    // line 661
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                    echo "</span>
                                                                        </div>
                                                                        <script>
                                                                            lat[";
                    // line 664
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 664), "html", null, true);
                    echo "] = ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 664), "html", null, true);
                    echo ";
                                                                            lng[";
                    // line 665
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 665), "html", null, true);
                    echo "] = ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 665), "html", null, true);
                    echo ";
                                                                        </script>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            ";
                    // line 674
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 680
                echo "                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:void(0);\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> ";
                // line 685
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Another Address"]);
                echo "
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>


                                        ";
            } else {
                // line 693
                echo "                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">";
                // line 695
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please be aware that you will be assigned to those places orders"]);
                echo "</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>


                                            <div id=\"kt_repeater_places\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"form-group row\">
                                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 709
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place Type"]);
                echo "</label>
                                                                <div class=\"col-lg-9 col-xl-6\">
                                                                    <div class=\"kt-radio-list\">
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" checked required> ";
                // line 713
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Countries"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" required> ";
                // line 717
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["States"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" required> ";
                // line 721
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cities"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" required> ";
                // line 725
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Areas"]);
                echo "
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_1 type_container\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 733
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                        <option data-hidden=\"true\"></option>
                                                                        ";
                // line 736
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 737
                    echo "                                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 737), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 737), "html", null, true);
                    echo "</option>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 739
                echo "                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_2 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 744
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required title=\"";
                // line 745
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_3 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 752
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required title=\"";
                // line 753
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                echo "\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_4 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>";
                // line 760
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required title=\"";
                // line 761
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        ";
                // line 771
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
                // line 776
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "places", [], "any", false, false, false, 776));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 777
                    echo "                                                            <div data-repeater-item class=\"align-items-center prev_child\">
                                                                <div class=\"form-group row\">
                                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                    // line 779
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Place Type"]);
                    echo "</label>
                                                                    <div class=\"col-lg-9 col-xl-6\">
                                                                        <div class=\"kt-radio-list\">
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" ";
                    // line 783
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 783) == 1)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Countries"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" ";
                    // line 787
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 787) == 2)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["States"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" ";
                    // line 791
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 791) == 3)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cities"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" ";
                    // line 795
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 795) == 4)) {
                        echo "checked";
                    }
                    echo " required> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Areas"]);
                    echo "
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_1 type_container\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 803
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 806
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 806) == 1)) {
                        // line 807
                        echo "                                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 808
                            echo "                                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 808), "html", null, true);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 808) == twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 808))) {
                                echo "selected";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 808), "html", null, true);
                            echo "</option>
                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 810
                        echo "                                                                            ";
                    } else {
                        // line 811
                        echo "                                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "countries", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 811), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 811)], "method", false, false, false, 811), "html", null, true);
                        echo "
                                                                            ";
                    }
                    // line 813
                    echo "                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_2 type_container ";
                    // line 816
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 816) == 1)) {
                        echo "kt-hidden";
                    }
                    echo "\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 818
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required ";
                    // line 819
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 819) == 1)) {
                        echo "title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                        echo "\"";
                    }
                    echo ">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 821
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "states", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 821), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 821)], "method", false, false, false, 821), "html", null, true);
                    echo "
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_3 type_container ";
                    // line 825
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 825) == 2) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 825) == 1))) {
                        echo "kt-hidden";
                    }
                    echo "\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 827
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required  ";
                    // line 828
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 828) == 2) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 828) == 1))) {
                        echo "title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                        echo "\"";
                    }
                    echo ">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 830
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 830) == 2) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 830) == 3))) {
                        // line 831
                        echo "                                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "cities", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 831), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 831)], "method", false, false, false, 831), "html", null, true);
                        echo "
                                                                            ";
                    }
                    // line 833
                    echo "                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_4 type_container ";
                    // line 836
                    if ((((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 836) == 3) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 836) == 2)) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 836) == 1))) {
                        echo "kt-hidden";
                    }
                    echo "\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>";
                    // line 838
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required ";
                    // line 839
                    if ((((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 839) == 3) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 839) == 2)) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 839) == 1))) {
                        echo "title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                        echo "\"";
                    }
                    echo ">
                                                                            <option data-hidden=\"true\"></option>
                                                                            ";
                    // line 841
                    if (((twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 841) == 3) || (twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 841) == 4))) {
                        // line 842
                        echo "                                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getData"] ?? null), "areas", [0 => twig_get_attribute($this->env, $this->source, $context["address"], "area", [], "any", false, false, false, 842), 1 => twig_get_attribute($this->env, $this->source, $context["address"], "type", [], "any", false, false, false, 842)], "method", false, false, false, 842), "html", null, true);
                        echo "
                                                                            ";
                    }
                    // line 844
                    echo "                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            ";
                    // line 853
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 859
                echo "                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-lg-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:void(0);\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> ";
                // line 864
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Another Place"]);
                echo "
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>
                                        ";
            }
            // line 870
            echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"submit\" class=\"btn btn-brand btn-bold\">";
            // line 879
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">";
            // line 880
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            // line 885
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 890
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 890), "page", [], "any", false, false, false, 890) == "settings")) {
            // line 891
            echo "            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">";
            // line 896
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Settings"]);
            echo " <small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["control when and how often system sends emails to you"]);
            echo "</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-sm row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email Notification</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
                   <label>
                    <input type=\"checkbox\" checked=\"checked\" name=\"email_notification_1\">
                    <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Send Copy To Personal Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
                <label>
                 <input type=\"checkbox\" name=\"email_notification_2\">
                 <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You have new notifications.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You're sent a direct message
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Someone adds you as a connection
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Escalate Emails</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> Upon new order.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> New membership approval
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Member registration
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Updates From Keenthemes:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email You With</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> News about Keenthemes products and feature updates
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> Tips on getting more out of Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Things you missed since you last logged into Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> News about Metronic on partner products and other services
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Tips on Metronic business products
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">Change Password</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        // line 1042
        echo "    </div>
    <!--End:: App Content-->
</div>
<!--End::App-->


";
        // line 1048
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1049
        echo "    
    <style>
        .map_canvas {
          height: 350px;
        }
    </style>
";
        // line 1048
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1056
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1057
        echo "
<script src=\"";
        // line 1058
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 1059
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 1059), "map", [], "any", false, false, false, 1059), "html", null, true);
        echo "\"></script>

<script>
\"use strict\";



// Class definition
var KTUserProfile = function () {
 // Base elements
 var avatar;
 var offcanvas;

 // Private functions
 var initAside = function () {
  // Mobile offcanvas for mobile mode
  offcanvas = new KTOffcanvas('kt_user_profile_aside', {
            overlay: true,
            baseClass: 'kt-app__aside',
            closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        });
        \$('#kt_subheader_mobile_toggle').show();
 }

 var initUserForm = function() {
  avatar = new KTAvatar('kt_user_avatar');
 }

 return {
  // public functions
  init: function() {
   initAside();
   initUserForm();
  }
 };
}();

KTUtil.ready(function() {
 KTUserProfile.init();

    ";
        // line 1100
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1100), "page", [], "any", false, false, false, 1100) == "edit")) {
            // line 1101
            echo "        \$('body').on('changed.bs.select', '#country_id', function(e, clickedIndex, newValue, oldValue){
            
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListstates', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.state_id').selectpicker(\"destroy\");
                        \$('.state_id').attr('title', '";
            // line 1109
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
            echo "');
                        \$('.state_id').html(data.html);
                        \$('.state_id').selectpicker(\"refresh\");
                    }
                });
            }
        });
        \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListcities', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.city').selectpicker(\"destroy\");
                        \$('.city').attr('title', '";
            // line 1123
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
            echo "');
                        \$('.city').html(data.html);
                        \$('.city').selectpicker(\"refresh\");
                    }
                });
            }
        });

        \$('body').on('click', '#removeFile', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).attr('name');
            selected = parseInt(selected);
            //alert(selected);
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
            // line 1139
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete selected file ?"]);
            echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
            // line 1142
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
            echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
            // line 1146
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
            echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '";
            // line 1154
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
            echo "',
                                    text: '";
            // line 1155
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected file have been deleted! :("]);
            echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
            // line 1158
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
            echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                location.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
            // line 1168
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
            echo "',
                            text: '";
            // line 1169
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected file have not been deleted! :)"]);
            echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
            // line 1172
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
            echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
        });

    ";
        }
        // line 1180
        echo "
    //if this.param.page == 'addresses' and user.role_id ==  5
    ";
        // line 1182
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1182), "page", [], "any", false, false, false, 1182) == "addresses")) {
            // line 1183
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1183) == 5)) {
                // line 1184
                echo "
            \$('body').on('changed.bs.select', '.country_id_repeater', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var repeater_item = \$(this);
                if(selected != ''){
                    \$.request('onListstates', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').selectpicker(\"destroy\");
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').attr('title', '";
                // line 1193
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').html(data.html);
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('body').on('changed.bs.select', '.state_id_repeater', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var repeater_item = \$(this);
                if(selected != ''){
                    \$.request('onListcities', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').selectpicker(\"destroy\");
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').attr('title', '";
                // line 1208
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').html(data.html);
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('body').on('changed.bs.select', '.city_id_repeater', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var repeater_item = \$(this);
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').selectpicker(\"destroy\");
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').attr('title', '";
                // line 1223
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').html(data.html);
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').selectpicker(\"refresh\");
                        }
                    });
                }
            });

            ";
                // line 1231
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 1231));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 1232
                    echo "                var map_canvas  = \$('.map_canvas_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 1232), "html", null, true);
                    echo "');
                var map_data    = \$(this).parent().find(\".location\");
                \$('.edit_address_";
                    // line 1234
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 1234), "html", null, true);
                    echo "').geocomplete({
                    map: map_canvas,
                    location: [";
                    // line 1236
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lat", [], "any", false, false, false, 1236), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lng", [], "any", false, false, false, 1236), "html", null, true);
                    echo "],
                    mapOptions: {
                        zoom: 18
                    },
                    markerOptions: {
                        draggable: true
                    },
                    details: map_data,
                    detailsAttribute: \"data-location\"
                });
                 \$(this).parent().find(\".edit_address_";
                    // line 1246
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 1246), "html", null, true);
                    echo "\").bind(\"geocode:dragged\", function(event, latLng){
                     \$(this).parent().find(\"input.lat\").val(latLng.lat());
                     \$(this).parent().find(\"input.lng\").val(latLng.lng());
                });
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1251
                echo "

            \$(\"#kt_repeater_addresses\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').selectpicker('refresh');
                    repeater_item.on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.state_id').selectpicker(\"destroy\");
                                    repeater_item.find('.state_id').attr('title', '";
                // line 1265
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('.state_id').html(data.html);
                                    repeater_item.find('.state_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.city_id').selectpicker(\"destroy\");
                                    repeater_item.find('.city_id').attr('title', '";
                // line 1279
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('.city_id').html(data.html);
                                    repeater_item.find('.city_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.area_id').selectpicker(\"destroy\");
                                    repeater_item.find('.area_id').attr('title', '";
                // line 1293
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('.area_id').html(data.html);
                                    repeater_item.find('.area_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    var map_canvas  = repeater_item.find(\".map_canvas\");
                    var map_data    = repeater_item.find(\".location\");
                    repeater_item.find(\".address\").geocomplete({
                        map: map_canvas,
                        mapOptions: {
                            zoom: 18
                        },
                        markerOptions: {
                            draggable: true
                        },
                        details: map_data,
                        detailsAttribute: \"data-location\",
                        autoselect: true,
                    });
                    repeater_item.bind(\"geocode:dragged\", function(event, latLng){
                        repeater_item.find(\"input[data-location=lat]\").val(latLng.lat());
                        repeater_item.find(\"input[data-location=lng]\").val(latLng.lng());
                    });
                    repeater_item.slideDown();
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();
        ";
            } else {
                // line 1326
                echo "            \$(\"#kt_repeater_places\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').next('.dropdown-toggle').remove();
                    repeater_item.find('select').selectpicker('refresh');

                    repeater_item.on('change', '.place_type', function(){
                        repeater_item.find('.type_container').addClass('kt-hidden');
                        for (var i = \$(this).val(); i >= 1; i--) {
                            repeater_item.find('.type_'+i).removeClass('kt-hidden');
                        }
                    });

                    repeater_item.on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_from').attr('title', '";
                // line 1347
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.state_from').html(data.html);
                                    repeater_item.find('select.state_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.country_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        var parent = \$(e.currentTarget).parent().parent().parent().parent();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_to').attr('title', '";
                // line 1362
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.state_to').html(data.html);
                                    repeater_item.find('select.state_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_from').attr('title', '";
                // line 1376
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.city_from').html(data.html);
                                    repeater_item.find('select.city_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_to').attr('title', '";
                // line 1390
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.city_to').html(data.html);
                                    repeater_item.find('select.city_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_from').attr('title', '";
                // line 1404
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.area_from').html(data.html);
                                    repeater_item.find('select.area_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_to').attr('title', '";
                // line 1418
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                                    repeater_item.find('select.area_to').html(data.html);
                                    repeater_item.find('select.area_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.slideDown();
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();


            \$('.prev_child').on('change', '.place_type', function(){
                var parent = \$(this).parent().parent().parent().parent().parent();
                parent.find('.type_container').addClass('kt-hidden');
                for (var i = \$(this).val(); i >= 1; i--) {
                    parent.find('.type_'+i).removeClass('kt-hidden');
                }
            });

            \$('.prev_child').on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListstates', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.state_from').selectpicker(\"destroy\");
                            parent.find('select.state_from').attr('title', '";
                // line 1450
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            parent.find('select.state_from').html(data.html);
                            parent.find('select.state_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListcities', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.city_from').selectpicker(\"destroy\");
                            parent.find('select.city_from').attr('title', '";
                // line 1465
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            parent.find('select.city_from').html(data.html);
                            parent.find('select.city_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.area_from').selectpicker(\"destroy\");
                            parent.find('select.area_from').attr('title', '";
                // line 1480
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing Selected"]);
                echo "');
                            parent.find('select.area_from').html(data.html);
                            parent.find('select.area_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
        ";
            }
            // line 1488
            echo "    ";
        }
        // line 1489
        echo "});
</script>
";
        // line 1056
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2554 => 1056,  2550 => 1489,  2547 => 1488,  2536 => 1480,  2518 => 1465,  2500 => 1450,  2465 => 1418,  2448 => 1404,  2431 => 1390,  2414 => 1376,  2397 => 1362,  2379 => 1347,  2356 => 1326,  2320 => 1293,  2303 => 1279,  2286 => 1265,  2270 => 1251,  2259 => 1246,  2244 => 1236,  2239 => 1234,  2233 => 1232,  2229 => 1231,  2218 => 1223,  2200 => 1208,  2182 => 1193,  2171 => 1184,  2168 => 1183,  2166 => 1182,  2162 => 1180,  2151 => 1172,  2145 => 1169,  2141 => 1168,  2128 => 1158,  2122 => 1155,  2118 => 1154,  2107 => 1146,  2100 => 1142,  2094 => 1139,  2075 => 1123,  2058 => 1109,  2048 => 1101,  2046 => 1100,  2002 => 1059,  1998 => 1058,  1995 => 1057,  1993 => 1056,  1991 => 1048,  1983 => 1049,  1981 => 1048,  1973 => 1042,  1822 => 896,  1815 => 891,  1812 => 890,  1804 => 885,  1796 => 880,  1792 => 879,  1781 => 870,  1772 => 864,  1765 => 859,  1753 => 853,  1742 => 844,  1736 => 842,  1734 => 841,  1725 => 839,  1721 => 838,  1714 => 836,  1709 => 833,  1703 => 831,  1701 => 830,  1692 => 828,  1688 => 827,  1681 => 825,  1674 => 821,  1665 => 819,  1661 => 818,  1654 => 816,  1649 => 813,  1643 => 811,  1640 => 810,  1625 => 808,  1620 => 807,  1618 => 806,  1612 => 803,  1597 => 795,  1586 => 791,  1575 => 787,  1564 => 783,  1557 => 779,  1553 => 777,  1549 => 776,  1541 => 771,  1528 => 761,  1524 => 760,  1514 => 753,  1510 => 752,  1500 => 745,  1496 => 744,  1489 => 739,  1478 => 737,  1474 => 736,  1468 => 733,  1457 => 725,  1450 => 721,  1443 => 717,  1436 => 713,  1429 => 709,  1412 => 695,  1408 => 693,  1397 => 685,  1390 => 680,  1370 => 674,  1356 => 665,  1350 => 664,  1344 => 661,  1340 => 660,  1336 => 659,  1327 => 653,  1322 => 651,  1318 => 650,  1311 => 646,  1306 => 644,  1302 => 643,  1295 => 639,  1290 => 637,  1286 => 636,  1278 => 631,  1274 => 630,  1269 => 627,  1248 => 625,  1244 => 624,  1238 => 621,  1232 => 618,  1228 => 617,  1224 => 616,  1218 => 615,  1214 => 614,  1199 => 606,  1188 => 602,  1182 => 599,  1176 => 596,  1172 => 595,  1165 => 591,  1162 => 590,  1145 => 589,  1133 => 580,  1121 => 571,  1116 => 569,  1109 => 564,  1098 => 562,  1094 => 561,  1089 => 559,  1085 => 558,  1080 => 555,  1069 => 553,  1065 => 552,  1060 => 550,  1056 => 549,  1051 => 546,  1034 => 544,  1030 => 543,  1025 => 541,  1021 => 540,  1012 => 534,  1007 => 531,  990 => 529,  986 => 528,  980 => 525,  970 => 518,  955 => 510,  944 => 506,  938 => 503,  932 => 500,  928 => 499,  910 => 484,  906 => 482,  904 => 481,  897 => 477,  893 => 475,  885 => 473,  877 => 471,  875 => 470,  868 => 465,  865 => 464,  852 => 454,  848 => 453,  833 => 441,  828 => 439,  821 => 435,  816 => 433,  809 => 429,  804 => 427,  797 => 423,  781 => 412,  767 => 403,  760 => 398,  757 => 397,  749 => 392,  737 => 387,  733 => 386,  717 => 372,  712 => 369,  701 => 364,  693 => 361,  688 => 358,  684 => 357,  674 => 349,  672 => 348,  663 => 342,  655 => 336,  640 => 334,  636 => 333,  629 => 329,  622 => 325,  617 => 323,  610 => 319,  605 => 317,  591 => 310,  580 => 306,  569 => 302,  560 => 296,  553 => 291,  538 => 289,  534 => 288,  527 => 284,  519 => 279,  514 => 277,  506 => 272,  501 => 270,  496 => 268,  488 => 263,  483 => 261,  478 => 259,  471 => 255,  466 => 253,  460 => 249,  439 => 247,  435 => 246,  428 => 242,  418 => 235,  411 => 231,  405 => 228,  398 => 224,  393 => 222,  386 => 218,  381 => 216,  374 => 212,  369 => 210,  362 => 206,  357 => 204,  350 => 200,  345 => 198,  338 => 194,  333 => 192,  324 => 186,  315 => 182,  308 => 177,  305 => 176,  296 => 169,  284 => 163,  269 => 150,  259 => 144,  253 => 142,  247 => 140,  245 => 139,  241 => 137,  237 => 136,  223 => 124,  215 => 123,  211 => 121,  209 => 120,  204 => 117,  199 => 116,  191 => 111,  179 => 101,  167 => 95,  152 => 82,  142 => 77,  138 => 76,  132 => 72,  127 => 71,  119 => 66,  111 => 60,  63 => 15,  55 => 9,  52 => 8,  50 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Begin::App-->
<div class=\"kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app\">
    {% partial 'profilemenu' %}

    <!--Begin:: App Content-->
    <div class=\"kt-grid__item kt-grid__item--fluid kt-app__content\">
        {% if this.param.page is empty %}
            {% if user.role_id ==  51 %}
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <!--begin:: Widgets/Order Statistics-->
                        <div class=\"kt-portlet kt-portlet--height-fluid\">
                            <div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <h3 class=\"kt-portlet__head-title\">{{'Orders Statistics'|__}}</h3>
                                </div>
                            </div>
                            <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                                <div class=\"kt-widget12\">
                                    <div class=\"kt-widget12__content\">
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Annual Taxes EMS</span>
                                                <span class=\"kt-widget12__value\">\$400,000</span>
                                            </div>

                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Finance Review Date</span>
                                                <span class=\"kt-widget12__value\">July 24,2019</span>
                                            </div>
                                        </div>
                                        <div class=\"kt-widget12__item\">
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Avarage Revenue</span>
                                                <span class=\"kt-widget12__value\">\$60M</span>
                                            </div>
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">Revenue Margin</span>
                                                <div class=\"kt-widget12__progress\">
                                                    <div class=\"progress kt-progress--sm\">
                                                        <div class=\"progress-bar kt-bg-brand\" role=\"progressbar\" style=\"width: 40%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                    </div>
                                                    <span class=\"kt-widget12__stat\">
                                                        40%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"kt-widget12__chart\" style=\"height:100px;\">
                                        <canvas id=\"kt_chart_order_statistics\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Order Statistics-->
                    </div>
                </div>
            {% endif %}
            <div class=\"row\">
                <div class=\"col-12\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Latest Updates'|__}}</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                {% for activity in user.activities.orderBy('id','desc').take(20) %}
                                    <!--begin::widget 12-->
                                    <div class=\"kt-widget4\">
                                        <div class=\"kt-widget4__item\">
                                            <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                            <a href=\"#\" class=\"kt-widget4__title kt-widget4__title--light\">{{activity.description}}</a>
                                            <span class=\"kt-widget4__number kt-font-info\">#{{activity.order_id}}</span>
                                        </div>
                                    </div>
                                    <!--end::Widget 12-->
                                {% else %}
                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    {{'No activities found'|__}}.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
                <div class=\"col-12\">
                    <!--begin:: Widgets/Last Updates-->
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Notifications'|__}}</h3>
                            </div>
                        </div>
                        <div class=\"kt-portlet__body\">
                            <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                                {% for notification in user.notifications.where('read_at', null) %}
                                    <!--begin::widget 12-->
                                    <!--begin::widget 12-->
                                    <div class=\"kt-notification\">
                                        {%if notification.type == 'new_account'%}
                                        <a href=\"javascript:void(0);\" class=\"kt-notification__item\">
                                        {% else %}
                                        <a href=\"{{url('dashboard/notifications')}}/{{notification.id}}\" class=\"kt-notification__item\">
                                        {% endif %} 
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    {% if notification.body|__ %}{{notification.body|__}}{% endif %}
                                                </div>
                                                <div class=\"kt-notification__item-time\">
                                                    {% if notification.created_at|time_diff %}
                                                        {{notification.created_at|time_diff}}
                                                    {% else %}
                                                        {{notification.created_at|time_diff}}
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Widget 12-->
                                {% else %}
                                    <div class=\"kt-notification\">
                                        <div class=\"kt-notification__item\">
                                            <div class=\"kt-notification__item-icon\">
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                                        <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                                        <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"kt-notification__item-details\">
                                                <div class=\"kt-notification__item-title\">
                                                    {{'No new notifications found'|__}}.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Last Updates-->
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'edit' %}
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Personal Information'|__}} <small>{{'update your personal informaiton'|__}}</small></h3>
                            </div>
                        </div>

                        {{ form_ajax('onSave', {files:true, id: 'kt_form', class:'kt-form kt-form--label-right' }) }}
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Company Name'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"company\"  value=\"{{item.company}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Owner Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{item.name}}\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Commercial Registration No'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"commercialRegistration\"  value=\"{{item.commercialRegistration}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Tax Certificate No'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"taxCertificate\"  value=\"{{item.taxCertificate}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Mobile Number'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"mobile\"  value=\"{{item.mobile}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Email'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"email\" class=\"form-control\" name=\"email\" value=\"{{item.email}}\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password\" />
                                                <span class=\"text-muted\">{{'Only fill it if you need to change your password'|__}}</span>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Password Confirmation'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"password_confirmation\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Country'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"country_id\" data-live-search=\"true\" name=\"country_id\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}} \"{% endif %} {% if item.country_id == country.id %}selected{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Postal Code'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"zip\"  value=\"{{item.zip}}\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'State / Region'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control state_id\" id=\"state_id\" title=\"{{'Please select country first'|__}}\" name=\"state_id\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {{getList.states(item.state_id,item.country_id)}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'City'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control city\" id=\"city\" title=\"{{'Please select state first'|__}}\" name=\"city\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {{getList.cities(item.city_id,item.state_id)}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Street Address'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"text\" class=\"form-control\" name=\"street_addr\"  value=\"{{item.street_addr}}\"/>
                                            </div>
                                        </div>

                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'The Number of Expected Orders'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"expectedOrders\" data-live-search=\"true\" name=\"numOrders\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for numOrders in expectedOrders %}
                                                        <option value=\"{{numOrders.id}}\" {% if item.numOrders == numOrders.id %}selected{% endif %}>{{numOrders.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-6 col-lg-3 col-form-label\">
                                            {{'Way to Entry Orders'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                            <br /><span class=\"text-muted\"></span>
                                            </label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-radio-inline\">
                                                    <label class=\"kt-radio\">
                                                        <input type=\"radio\" name=\"wayOrder\" class=\"wayOrder\" value=\"1\" required {% if item.wayOrder == 1 %}checked{%endif%}> {{'Manual'|__}}
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-radio\">
                                                        <input type=\"radio\" name=\"wayOrder\" class=\"wayOrder\" value=\"2\" required {% if item.wayOrder == 2 %}checked{%endif%}> {{'API'|__}}
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-radio\">
                                                        <input type=\"radio\" name=\"wayOrder\" class=\"wayOrder\" value=\"3\" required {% if item.wayOrder == 3 %}checked{%endif%}> {{'Both'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'IBAN'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"iban\" value=\"{{item.iban}}\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Full Name of the Bank Account'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"text\" class=\"form-control\" name=\"nameAccount\" value=\"{{item.nameAccount}}\" required />
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'The Name of Bank'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <select class=\"form-control\" id=\"bankName\" data-live-search=\"true\" name=\"bankName\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for bankName in banks %}
                                                        <option value=\"{{bankName.id}}\" {% if item.bankName == bankName.id %}selected{% endif %}>{{bankName.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>


                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Upload Files'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                   <input type=\"file\" class=\"form-control \" name=\"files[]\" multiple=\"\"  />
                                            </div>
                                        </div> 

                                        {% if item.files %}
                                        <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\">File Information</th>
                                                    <th scope=\"col\"></th>
                                                </tr>
                                            </thead>
                                            <tbody>   <!-- getClientOriginalExtension()  getClientOriginalName -->
                                                {% for key,file in item.files %}
                                                <tr>
                                                    
                                                    <td>
                                                        <a href=\"{{ file.path }}\">{{ file.file_name }}</a>
                                                    </td>
                                                    <td>
                                                        <button id=\"removeFile\" type=\"button\" name=\"{{ key }}\" class=\"close\" aria-label=\"Close\">X
                                                        </button>
                                                    </td>
                                                </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                        {% endif %}



                                        
                                    </div>
                                </div>

                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                     <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                                     <span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{url('dashboard/account')}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ form_close() }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'password' %}
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Change Password'|__}}<small>{{'change or reset your account password'|__}}</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                            <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                            <div class=\"alert-text\">{{'Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire'|__}}, <br>{{'or they might inadvertently get locked out of the system'|__}}!</div>
                                            <div class=\"alert-close\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">{{'Change Or Recover Your Password'|__}}:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Current Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"old_password\" value=\"\" placeholder=\"{{'Current Password'|__}}\">
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'New Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" name=\"\"value=\"\" placeholder=\"{{'New Password'|__}}\">
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Verify Password'|__}}</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <input type=\"password\" class=\"form-control\" value=\"\" placeholder=\"{{'Verify Password'|__}}\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">{{'Change Password'|__}}</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'addresses' %}
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                {% if user.role_id ==  5 %}
                                    <h3 class=\"kt-portlet__head-title\">{{'Addresses'|__}}<small>{{'Your addresses that you will ship from or to'|__}}</small></h3>
                                {% else %}
                                    <h3 class=\"kt-portlet__head-title\">{{'Covered Areas'|__}}<small>{{'Your covered areas that you can deliver from or to'|__}}</small></h3>
                                {% endif %}
                            </div>
                        </div>
                        {{ form_ajax('onPlaces', { id: 'kt_form', class:'kt-form kt-form--label-right', novalidate: true }) }}
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        {% if user.role_id ==  5 %}
                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">{{'Please be aware that your addresses pin on google maps is always very urgent for fast and accurate deliver for your shipments'|__}}</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div id=\"kt_repeater_addresses\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"location\">
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-6\">
                                                                        <label>{{'Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{address.name}}\" required/>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-6\">
                                                                        <label>{{'Default Address'|__}}</label>
                                                                        <div class=\"kt-radio-inline\">
                                                                            <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"1\" {% if address.default == 1 %}checked{% endif %}> {{'Yes'|__}}
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"0\" {% if address.default == 0 %}checked{% endif %}> {{'No'|__}}
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-5\">
                                                                        <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <input type=\"text\" class=\"form-control address street_addr\" data-location=\"route\" name=\"street_address\" required/>
                                                                        <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" />
                                                                        <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" />
                                                                        <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" />
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'Country'|__}}</label>
                                                                        <select class=\"form-control country_id repeater_select\" data-location=\"country\" data-live-search=\"true\" name=\"country\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for country in countries %}
                                                                                <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}} \"{% endif %}>{{country.lang('en').name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-3\">
                                                                        <label>{{'Postal Code'|__}}</label>
                                                                        <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" >
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'State / Region'|__}}</label>
                                                                        <select class=\"form-control state_id repeater_select\" data-location=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"state\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for state in states %}
                                                                                <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'City'|__}}</label>
                                                                        <select class=\"form-control city_id repeater_select\" data-location=\"locality\" name=\"city\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for city in cities %}
                                                                                <option value=\"{{city.id}}\">{{city.name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                    <div class=\"form-group col-lg-4\">
                                                                        <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                        <select class=\"form-control area_id repeater_select\" data-location=\"sublocality\" name=\"county\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% for county in areas %}
                                                                                <option value=\"{{county.id}}\">{{county.name}}</option>
                                                                            {% endfor %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'Google Map'|__}}</label>
                                                                        <div class=\"col-sm-12 map_canvas\"></div>
                                                                        <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        {{'Delete'|__}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var lat = [];
                                                            var lng = [];
                                                        </script>
                                                        {% for address in user.addresses %}
                                                            <div data-repeater-item class=\"align-items-center\">
                                                                <input type=\"hidden\" name=\"id\" value=\"{{address.id}}\" />
                                                                <div class=\"location\">
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-6\">
                                                                            <label>{{'Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{address.name}}\" required/>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-6\">
                                                                            <label>{{'Default Address'|__}}</label>
                                                                            <div class=\"kt-radio-inline\">
                                                                               <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"1\" {% if address.default == 1 %}checked{% endif %}> {{'Yes'|__}}
                                                                                <span></span>
                                                                               </label>
                                                                               <label class=\"kt-radio\">
                                                                                <input type=\"radio\" name=\"default\" value=\"0\" {% if address.default == 0 %}checked{% endif %}> {{'No'|__}}
                                                                                <span></span>
                                                                               </label>
                                                                              </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-5\">
                                                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <input type=\"text\" class=\"form-control address street_addr edit_address_{{address.id}}\" data-location=\"route\" name=\"street_address\" value=\"{{address.street}}\" required/>
                                                                            <input type=\"hidden\" class=\"form-control lat\" data-location=\"lat\" name=\"lat\" value=\"{{address.lat}}\" />
                                                                            <input type=\"hidden\" class=\"form-control lng\" data-location=\"lng\" name=\"lng\" value=\"{{address.lng}}\" />
                                                                            <input type=\"hidden\" class=\"form-control url\" data-location=\"url\" name=\"url\" value=\"{{address.url}}\" />
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control country_id_repeater\" data-location=\"country\" data-live-search=\"true\" name=\"country\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                {% for country in countries %}
                                                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}} \"{% endif %} {% if address.country == country.id %}selected{% endif %}>{{country.lang('en').name}}</option>
                                                                                {% endfor %}
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-3\">
                                                                            <label>{{'Postal Code'|__}}</label>
                                                                            <input class=\"form-control postal_code\" type=\"text\" data-location=\"postal_code\" name=\"postal_code\" value=\"{{address.zipcode}}\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control state_id_repeater\" data-location=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"state\" data-live-search=\"true\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                {{getList.states(address.state,address.country)}}
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                            <select class=\"form-control city_id_repeater\" data-location=\"locality\" name=\"city\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                                                <option data-hidden=\"true\"></option>
                                                                                {{getList.cities(address.city,address.state)}}
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"form-group col-lg-4\">
                                                                            <label>{{'County'|__}}</label>
                                                                            <select class=\"form-control area_id_repeater\" data-location=\"sublocality\" name=\"county\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" >
                                                                                <option data-hidden=\"true\"></option>
                                                                                {{getList.areas(address.county,address.city)}}
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"row\">
                                                                        <div class=\"form-group col-lg-12\">
                                                                            <label>{{'Google Map'|__}}</label>
                                                                            <div class=\"col-sm-12 map_canvas map_canvas_{{address.id}}\"></div>
                                                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                                        </div>
                                                                        <script>
                                                                            lat[{{loop.index}}] = {{address.lat}};
                                                                            lng[{{loop.index}}] = {{address.lng}};
                                                                        </script>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            {{'Delete'|__}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:void(0);\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> {{'Add Another Address'|__}}
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>


                                        {% else %}
                                            <div class=\"alert alert-solid-info alert-bold fade show kt-margin-t-20 kt-margin-b-40\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                                                <div class=\"alert-text\">{{'Please be aware that you will be assigned to those places orders'|__}}</div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>


                                            <div id=\"kt_repeater_places\">
                                                <div class=\"form-group form-group-last row\">
                                                    <div data-repeater-list=\"addresses\" class=\"col-lg-12\">
                                                        <div data-repeater-item class=\"align-items-center first-child\">
                                                            <div class=\"form-group row\">
                                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Place Type'|__}}</label>
                                                                <div class=\"col-lg-9 col-xl-6\">
                                                                    <div class=\"kt-radio-list\">
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" checked required> {{\"Countries\"|__}}
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" required> {{\"States\"|__}}
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" required> {{\"Cities\"|__}}
                                                                            <span></span>
                                                                        </label>
                                                                        <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                            <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" required> {{\"Areas\"|__}}
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_1 type_container\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                        <option data-hidden=\"true\"></option>
                                                                        {% for country in countries %}
                                                                            <option value=\"{{country.id}}\">{{country.name}}</option>
                                                                        {% endfor %}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_2 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'State'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required title=\"{{'Please select country first'|__}}\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_3 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required title=\"{{'Please select state first'|__}}\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"row type_4 type_container kt-hidden\">
                                                                <div class=\"form-group col-lg-12\">
                                                                    <label>{{'Area'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                    <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required title=\"{{'Please select city first'|__}}\">
                                                                        <option data-hidden=\"true\"></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class=\"form-group row\">
                                                                <div class=\"col-md-3\">
                                                                    <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                        <i class=\"la la-trash-o\"></i>
                                                                        {{'Delete'|__}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {% for address in user.places %}
                                                            <div data-repeater-item class=\"align-items-center prev_child\">
                                                                <div class=\"form-group row\">
                                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Place Type'|__}}</label>
                                                                    <div class=\"col-lg-9 col-xl-6\">
                                                                        <div class=\"kt-radio-list\">
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"1\" {% if address.type == 1 %}checked{% endif %} required> {{\"Countries\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"2\" {% if address.type == 2 %}checked{% endif %} required> {{\"States\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"3\" {% if address.type == 3 %}checked{% endif %} required> {{\"Cities\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                                            <label class=\"kt-radio kt-radio--bold kt-radio--dark\">
                                                                                <input type=\"radio\" name=\"type\" class=\"place_type\" value=\"4\" {% if address.type == 4 %}checked{% endif %} required> {{\"Areas\"|__}}
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_1 type_container\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control country_from\" name=\"country\" data-live-search=\"true\" required>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% if address.type == 1 %}
                                                                                {% for country in countries %}
                                                                                    <option value=\"{{country.id}}\" {% if address.area == country.id %}selected{% endif %}>{{country.name}}</option>
                                                                                {% endfor %}
                                                                            {% else %}
                                                                                {{getData.countries(address.area,address.type)}}
                                                                            {% endif %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_2 type_container {% if address.type == 1 %}kt-hidden{% endif %}\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'State'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control state_from\" name=\"state\" data-live-search=\"true\" required {% if address.type == 1 %}title=\"{{'Please select country first'|__}}\"{% endif %}>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {{getData.states(address.area,address.type)}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_3 type_container {% if address.type == 2 or address.type == 1 %}kt-hidden{% endif %}\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control city_from\" name=\"city\" data-live-search=\"true\" required  {% if address.type == 2 or address.type == 1 %}title=\"{{'Please select state first'|__}}\"{% endif %}>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% if address.type == 2 or address.type == 3 %}
                                                                                {{getData.cities(address.area,address.type)}}
                                                                            {% endif %}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class=\"row type_4 type_container {% if address.type == 3 or address.type == 2 or address.type == 1 %}kt-hidden{% endif %}\">
                                                                    <div class=\"form-group col-lg-12\">
                                                                        <label>{{'Area'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></label>
                                                                        <select class=\"form-control area_from\" name=\"area\" data-live-search=\"true\" required {% if address.type == 3 or address.type == 2 or address.type == 1 %}title=\"{{'Please select city first'|__}}\"{% endif %}>
                                                                            <option data-hidden=\"true\"></option>
                                                                            {% if address.type == 3 or address.type == 4 %}
                                                                                {{getData.areas(address.area,address.type)}}
                                                                            {% endif %}
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class=\"form-group row\">
                                                                    <div class=\"col-md-3\">
                                                                        <a href=\"javascript:void(0);\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                                            <i class=\"la la-trash-o\"></i>
                                                                            {{'Delete'|__}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                 </div>
                                                 <div class=\"form-group form-group-last row\">
                                                     <label class=\"col-xl-12 col-lg-12 col-form-label kt-align-right\">
                                                         <a href=\"javascript:void(0);\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                             <i class=\"la la-plus\"></i> {{'Add Another Place'|__}}
                                                         </a>
                                                     </label>
                                                </div>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"submit\" class=\"btn btn-brand btn-bold\">{{'Save'|__}}</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ form_close() }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if this.param.page == 'settings' %}
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"kt-portlet kt-portlet--height-fluid\">
                        <div class=\"kt-portlet__head\">
                            <div class=\"kt-portlet__head-label\">
                                <h3 class=\"kt-portlet__head-title\">{{'Settings'|__}} <small>{{'control when and how often system sends emails to you'|__}}</small></h3>
                            </div>
                        </div>
                        <form class=\"kt-form kt-form--label-right\">
                            <div class=\"kt-portlet__body\">
                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Setup Email Notification:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-sm row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email Notification</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
                   <label>
                    <input type=\"checkbox\" checked=\"checked\" name=\"email_notification_1\">
                    <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Send Copy To Personal Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <span class=\"kt-switch\">
                <label>
                 <input type=\"checkbox\" name=\"email_notification_2\">
                 <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Activity Related Emails:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Email</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You have new notifications.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> You're sent a direct message
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Someone adds you as a connection
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group form-group-last row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">When To Escalate Emails</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> Upon new order.
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\"> New membership approval
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox kt-checkbox--brand\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Member registration
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg\"></div>

                                <div class=\"kt-section kt-section--first\">
                                    <div class=\"kt-section__body\">
                                        <div class=\"row\">
                                            <label class=\"col-xl-3\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <h3 class=\"kt-section__title kt-section__title-sm\">Updates From Keenthemes:</h3>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\">Email You With</label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-list\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> News about Keenthemes products and feature updates
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\"> Tips on getting more out of Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Things you missed since you last logged into Keen
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> News about Metronic on partner products and other services
                                                        <span></span>
                                                    </label>
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" checked=\"checked\"> Tips on Metronic business products
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"kt-portlet__foot\">
                                <div class=\"kt-form__actions\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3 col-xl-3\">
                                        </div>
                                        <div class=\"col-lg-9 col-xl-9\">
                                            <button type=\"reset\" class=\"btn btn-brand btn-bold\">Change Password</button>&nbsp;
                                            <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
    <!--End:: App Content-->
</div>
<!--End::App-->


{% put styles %}
    
    <style>
        .map_canvas {
          height: 350px;
        }
    </style>
{% endput %}
{% put scripts %}

<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map}}\"></script>

<script>
\"use strict\";



// Class definition
var KTUserProfile = function () {
 // Base elements
 var avatar;
 var offcanvas;

 // Private functions
 var initAside = function () {
  // Mobile offcanvas for mobile mode
  offcanvas = new KTOffcanvas('kt_user_profile_aside', {
            overlay: true,
            baseClass: 'kt-app__aside',
            closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        });
        \$('#kt_subheader_mobile_toggle').show();
 }

 var initUserForm = function() {
  avatar = new KTAvatar('kt_user_avatar');
 }

 return {
  // public functions
  init: function() {
   initAside();
   initUserForm();
  }
 };
}();

KTUtil.ready(function() {
 KTUserProfile.init();

    {% if this.param.page == 'edit' %}
        \$('body').on('changed.bs.select', '#country_id', function(e, clickedIndex, newValue, oldValue){
            
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListstates', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.state_id').selectpicker(\"destroy\");
                        \$('.state_id').attr('title', '{{\"Nothing Selected\"|__}}');
                        \$('.state_id').html(data.html);
                        \$('.state_id').selectpicker(\"refresh\");
                    }
                });
            }
        });
        \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).val();
            if(selected != ''){
                \$.request('onListcities', {
                    data: {id: selected},
                    success: function(data) {
                        \$('.city').selectpicker(\"destroy\");
                        \$('.city').attr('title', '{{\"Nothing Selected\"|__}}');
                        \$('.city').html(data.html);
                        \$('.city').selectpicker(\"refresh\");
                    }
                });
            }
        });

        \$('body').on('click', '#removeFile', function(e, clickedIndex, newValue, oldValue){
            var selected = \$(e.currentTarget).attr('name');
            selected = parseInt(selected);
            //alert(selected);
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure to delete selected file ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes, delete!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Deleted!\"|__}}',
                                    text: '{{\"Your selected file have been deleted! :(\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                location.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected file have not been deleted! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
        });

    {% endif %}

    //if this.param.page == 'addresses' and user.role_id ==  5
    {% if this.param.page == 'addresses' %}
        {% if user.role_id ==  5 %}

            \$('body').on('changed.bs.select', '.country_id_repeater', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var repeater_item = \$(this);
                if(selected != ''){
                    \$.request('onListstates', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').selectpicker(\"destroy\");
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').attr('title', '{{\"Nothing Selected\"|__}}');
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').html(data.html);
                            repeater_item.parent().parent().parent().parent().find('.state_id_repeater').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('body').on('changed.bs.select', '.state_id_repeater', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var repeater_item = \$(this);
                if(selected != ''){
                    \$.request('onListcities', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').selectpicker(\"destroy\");
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').attr('title', '{{\"Nothing Selected\"|__}}');
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').html(data.html);
                            repeater_item.parent().parent().parent().parent().find('.city_id_repeater').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('body').on('changed.bs.select', '.city_id_repeater', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var repeater_item = \$(this);
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').selectpicker(\"destroy\");
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').attr('title', '{{\"Nothing Selected\"|__}}');
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').html(data.html);
                            repeater_item.parent().parent().parent().parent().find('.area_id_repeater').selectpicker(\"refresh\");
                        }
                    });
                }
            });

            {% for address in user.addresses %}
                var map_canvas  = \$('.map_canvas_{{address.id}}');
                var map_data    = \$(this).parent().find(\".location\");
                \$('.edit_address_{{address.id}}').geocomplete({
                    map: map_canvas,
                    location: [{{address.lat}},{{address.lng}}],
                    mapOptions: {
                        zoom: 18
                    },
                    markerOptions: {
                        draggable: true
                    },
                    details: map_data,
                    detailsAttribute: \"data-location\"
                });
                 \$(this).parent().find(\".edit_address_{{address.id}}\").bind(\"geocode:dragged\", function(event, latLng){
                     \$(this).parent().find(\"input.lat\").val(latLng.lat());
                     \$(this).parent().find(\"input.lng\").val(latLng.lng());
                });
            {% endfor %}


            \$(\"#kt_repeater_addresses\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').selectpicker('refresh');
                    repeater_item.on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.state_id').selectpicker(\"destroy\");
                                    repeater_item.find('.state_id').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('.state_id').html(data.html);
                                    repeater_item.find('.state_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.city_id').selectpicker(\"destroy\");
                                    repeater_item.find('.city_id').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('.city_id').html(data.html);
                                    repeater_item.find('.city_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('.area_id').selectpicker(\"destroy\");
                                    repeater_item.find('.area_id').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('.area_id').html(data.html);
                                    repeater_item.find('.area_id').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    var map_canvas  = repeater_item.find(\".map_canvas\");
                    var map_data    = repeater_item.find(\".location\");
                    repeater_item.find(\".address\").geocomplete({
                        map: map_canvas,
                        mapOptions: {
                            zoom: 18
                        },
                        markerOptions: {
                            draggable: true
                        },
                        details: map_data,
                        detailsAttribute: \"data-location\",
                        autoselect: true,
                    });
                    repeater_item.bind(\"geocode:dragged\", function(event, latLng){
                        repeater_item.find(\"input[data-location=lat]\").val(latLng.lat());
                        repeater_item.find(\"input[data-location=lng]\").val(latLng.lng());
                    });
                    repeater_item.slideDown();
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();
        {% else %}
            \$(\"#kt_repeater_places\").repeater({
                initEmpty: false,
                show: function() {
                    var repeater_item = \$(this);
                    repeater_item.find('select').next('.dropdown-toggle').remove();
                    repeater_item.find('select').selectpicker('refresh');

                    repeater_item.on('change', '.place_type', function(){
                        repeater_item.find('.type_container').addClass('kt-hidden');
                        for (var i = \$(this).val(); i >= 1; i--) {
                            repeater_item.find('.type_'+i).removeClass('kt-hidden');
                        }
                    });

                    repeater_item.on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_from').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.state_from').html(data.html);
                                    repeater_item.find('select.state_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.country_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        var parent = \$(e.currentTarget).parent().parent().parent().parent();
                        if(selected != ''){
                            \$.request('onListstates', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.state_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.state_to').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.state_to').html(data.html);
                                    repeater_item.find('select.state_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_from').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.city_from').html(data.html);
                                    repeater_item.find('select.city_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.state_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListcities', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.city_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.city_to').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.city_to').html(data.html);
                                    repeater_item.find('select.city_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_from').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_from').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.area_from').html(data.html);
                                    repeater_item.find('select.area_from').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.on('changed.bs.select', '.city_to', function(e, clickedIndex, newValue, oldValue){
                        var selected = \$(e.currentTarget).val();
                        if(selected != ''){
                            \$.request('onListareas', {
                                data: {id: selected},
                                success: function(data) {
                                    repeater_item.find('select.area_to').selectpicker(\"destroy\");
                                    repeater_item.find('select.area_to').attr('title', '{{\"Nothing Selected\"|__}}');
                                    repeater_item.find('select.area_to').html(data.html);
                                    repeater_item.find('select.area_to').selectpicker(\"refresh\");
                                }
                            });
                        }
                    });
                    repeater_item.slideDown();
                },
                hide: function(e) {
                    \$(this).slideUp(e);
                }
            });
            \$('.first-child').remove();


            \$('.prev_child').on('change', '.place_type', function(){
                var parent = \$(this).parent().parent().parent().parent().parent();
                parent.find('.type_container').addClass('kt-hidden');
                for (var i = \$(this).val(); i >= 1; i--) {
                    parent.find('.type_'+i).removeClass('kt-hidden');
                }
            });

            \$('.prev_child').on('changed.bs.select', '.country_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListstates', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.state_from').selectpicker(\"destroy\");
                            parent.find('select.state_from').attr('title', '{{\"Nothing Selected\"|__}}');
                            parent.find('select.state_from').html(data.html);
                            parent.find('select.state_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.state_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListcities', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.city_from').selectpicker(\"destroy\");
                            parent.find('select.city_from').attr('title', '{{\"Nothing Selected\"|__}}');
                            parent.find('select.city_from').html(data.html);
                            parent.find('select.city_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
            \$('.prev_child').on('changed.bs.select', '.city_from', function(e, clickedIndex, newValue, oldValue){
                var selected = \$(e.currentTarget).val();
                var parent = \$(e.currentTarget).parent().parent().parent().parent();
                if(selected != ''){
                    \$.request('onListareas', {
                        data: {id: selected},
                        success: function(data) {
                            parent.find('select.area_from').selectpicker(\"destroy\");
                            parent.find('select.area_from').attr('title', '{{\"Nothing Selected\"|__}}');
                            parent.find('select.area_from').html(data.html);
                            parent.find('select.area_from').selectpicker(\"refresh\");
                        }
                    });
                }
            });
        {% endif %}
    {% endif %}
});
</script>
{% endput %}", "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/profile.htm", "");
    }
}
