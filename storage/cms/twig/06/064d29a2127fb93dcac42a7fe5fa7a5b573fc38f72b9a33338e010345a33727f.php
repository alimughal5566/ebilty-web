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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/dashboard.htm */
class __TwigTemplate_b21d0d0074b574ef5fc247f8fc54e30c93ca524b5abc2ddfd4a35df6e29325f8 extends \Twig\Template
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
        echo "<!--Begin::Section-->

<div class=\"row\">

    <div class=\"col-12\">
        <!--begin:: Widgets/Applications/User/Profile3-->

            <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__body\">

                <div class='row'>
       <div class=\"col-12 col-md-4\">

           <div class='dashboard-top-container '>
                <div class=\"text-center img-container\">
                    <img alt=\"Logo\" src=\"./admin/media/images/logo.png\" style=\"max-height:40px\"/>
                    <h5>Summary</h5>
                </div>

                <div class='top-dashbord-left-container d-flex flex-column align-items-stretch h-100 '>
                    <div class=\"container-info\">
                        <div>
                            <!-- <i class=\"flaticon-map-location\"></i>  -->
                            <i class=\"fas fa-clipboard-list\"></i>
                            No of transactions
                        </div>
                        <div>
                           <h2>1500</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                          <i class=\"fas fa-chart-line\"></i>
                           Ranking
                        </div>
                        <div>
                           <h2>25</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                           <i class=\"fas fa-money-bill\"></i>
                           Payments
                        </div>
                        <div>
                           <h2>3222</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                          <i class=\"fas fa-chart-bar\"></i>
                           Revenue
                        </div>
                        <div>
                           <h2>1212</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                           <i class=\"far fa-window-close\"></i>
                           Cancelled Rides
                        </div>
                        <div>
                           <h2>10</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"col-12 col-md-8\">
              <div class=\"kt-widget kt-widget--user-profile-3 custom-widget\">
                    <div class=\"kt-widget__top\">
                        ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 74)) {
            // line 75
            echo "                            <div class=\"kt-widget__media\">
                                <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 76), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 76), "html", null, true);
            echo "\" alt=\"image\">
                            </div>
                       ";
        } else {
            // line 79
            echo "                            <div class=\"kt-widget__pic kt-widget__pic--brand kt-font-boldest kt-font-light boxnameShow\">
                                ";
            // line 80
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 80)), 0, 2), "html", null, true);
            echo "
                            </div>
                       ";
        }
        // line 83
        echo "                        <div class=\"kt-widget__content\">
                            <div class=\"kt-widget__head\">
                                <a href=\"javascript:void(0);\" class=\"kt-widget__username\">
                                    ";
        // line 86
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 86)), "html", null, true);
        echo "
                                </a>

                                <div class=\"kt-widget__action\">
                                    <a href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
        echo "\" class=\"btn btn-brand btn-sm btn-upper\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"kt-widget__subhead\">
                                ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 95)) {
            // line 96
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon-alarm-1\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 96), "html", null, true);
            echo "</a>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 97
($context["user"] ?? null), "email", [], "any", false, false, false, 97)) {
            // line 98
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon2-new-email\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 98), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 100
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon-user-settings\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 100), "html", null, true);
            echo "</a>
                                ";
        }
        // line 102
        echo "                                <a href=\"javascript:void(0);\"><i class=\"flaticon2-calendar-3\"></i>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "html", null, true);
        echo " </a>
                                ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "branch", [], "any", false, false, false, 103)) {
            // line 104
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon2-placeholder\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "branch", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104), "html", null, true);
            echo "</a>
                                ";
        }
        // line 106
        echo "                            </div>

                            <div class=\"kt-widget__info\">
                                <div class=\"kt-widget__desc\">
                                    ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 110) == 5)) {
            // line 111
            echo "                                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 111))) {
                // line 112
                echo "                                        ";
                $context["address"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 112), "where", [0 => "default", 1 => 1], "method", false, false, false, 112), "first", [], "any", false, false, false, 112);
                // line 113
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 113), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thecity", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 113), "html", null, true);
                echo "
                                        <br> ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thestate", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thecountry", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
                echo "
                                        ";
            }
            // line 116
            echo "                                    ";
        } else {
            // line 117
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", [], "any", false, false, false, 117)) {
                // line 118
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", [], "any", false, false, false, 118), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zip", [], "any", false, false, false, 118), "html", null, true);
                echo "
                                            <br> ";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
                echo "
                                        ";
            }
            // line 121
            echo "                                    ";
        }
        // line 122
        echo "                                </div>
                                ";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 123) != 1)) {
            // line 124
            echo "                                    <div class=\"kt-widget__progress\">
                                        <div class=\"kt-widget__text\">
                                            ";
            // line 126
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Progress"]);
            echo "
                                        </div>
                                        <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                            <div class=\"progress-bar kt-bg-";
            // line 129
            echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
            echo "\" role=\"progressbar\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "%;\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div class=\"kt-widget__stats\">
                                            ";
            // line 132
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "%
                                        </div>
                                    </div>
                                ";
        }
        // line 136
        echo "                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-4'>
                            <div class='dashboardcontainainer a'>
                                <div class=\"headers\">
                                    <h4>United Kingdom</h4>
                                    <div><img src=\"https://www.countryflags.io/gb/flat/64.png\" alt=\"\"></div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                        <!-- <i class=\"flaticon-map-location\"></i>  -->
                                        <i class=\"fas fa-clipboard-list\"></i>
                                        No of transactions
                                    </div>
                                    <div>
                                       <h3>1500</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-line\"></i>
                                       Ranking
                                    </div>
                                    <div>
                                       <h3>25</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"fas fa-money-bill\"></i>
                                       Payments
                                    </div>
                                    <div>
                                       <h3>3222</h3>
                                    </div>
                                </div>

                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-bar\"></i>
                                       Revenue
                                    </div>
                                    <div>
                                       <h3>1212</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"far fa-window-close\"></i>
                                       Cancelled Rides
                                    </div>
                                    <div>
                                       <h3>10</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class='col-4'>
                            <div class='dashboardcontainainer b'>
                                <div class=\"headers\">
                                    <h4>Canada</h4>
                                    <div><img src=\"https://www.countryflags.io/ca/flat/64.png\" alt=\"\"></div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                        <!-- <i class=\"flaticon-map-location\"></i>  -->
                                        <i class=\"fas fa-clipboard-list\"></i>
                                        No of transactions
                                    </div>
                                    <div>
                                       <h3>1500</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-line\"></i>
                                       Ranking
                                    </div>
                                    <div>
                                       <h3>25</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"fas fa-money-bill\"></i>
                                       Payments
                                    </div>
                                    <div>
                                       <h3>3222</h3>
                                    </div>
                                </div>

                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-bar\"></i>
                                       Revenue
                                    </div>
                                    <div>
                                       <h3>1212</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"far fa-window-close\"></i>
                                       Cancelled Rides
                                    </div>
                                    <div>
                                       <h3>10</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class='col-4'>
                            <div class='dashboardcontainainer c'>
                                <div class=\"headers\">
                                    <h4>Malaysia</h4>
                                    <div><img src=\"https://www.countryflags.io/my/flat/64.png\" alt=\"\"></div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                        <!-- <i class=\"flaticon-map-location\"></i>  -->
                                        <i class=\"fas fa-clipboard-list\"></i>
                                        No of transactions
                                    </div>
                                    <div>
                                       <h3>1500</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-line\"></i>
                                       Ranking
                                    </div>
                                    <div>
                                       <h3>25</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"fas fa-money-bill\"></i>
                                       Payments
                                    </div>
                                    <div>
                                       <h3>3222</h3>
                                    </div>
                                </div>

                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-bar\"></i>
                                       Revenue
                                    </div>
                                    <div>
                                       <h3>1212</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"far fa-window-close\"></i>
                                       Cancelled Rides
                                    </div>
                                    <div>
                                       <h3>10</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

<!--                    <div class=\"kt-widget__bottom\">-->
<!--                        <a href=\"";
        // line 310
        echo url("dashboard/shipments/approved");
        echo "\" class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-map-location\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                <span class=\"kt-widget__title\">";
        // line 315
        echo twig_escape_filter($this->env, ($context["approved"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>-->
<!--                                <span class=\"kt-widget__value\">";
        // line 316
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved List"]);
        echo "</span>-->
<!--                            </div>-->
<!--                        </a>-->

<!--                        <a href=\"";
        // line 320
        echo url("dashboard/shipments/stock");
        echo "\" class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-truck\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                <span class=\"kt-widget__title\">";
        // line 325
        echo twig_escape_filter($this->env, ($context["stocked"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>-->
<!--                                <span class=\"kt-widget__value\">";
        // line 326
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock List"]);
        echo "</span>-->
<!--                            </div>-->
<!--                        </a>-->

<!--                        <a href=\"";
        // line 330
        echo url("dashboard/shipments/delivered");
        echo "\" class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-bag\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                <span class=\"kt-widget__title\">";
        // line 335
        echo twig_escape_filter($this->env, ($context["delivered"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>-->
<!--                                <span class=\"kt-widget__value\">";
        // line 336
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered List"]);
        echo "</span>-->
<!--                            </div>-->
<!--                        </a>-->

<!--                        <div class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-file-2\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                ";
        // line 345
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 345) == 5)) {
            echo "-->
<!--                                    <span class=\"kt-widget__title\">";
            // line 346
            echo twig_escape_filter($this->env, ($context["saved"] ?? null), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved Shipments"]);
            echo "</span>-->
<!--                                    <a href=\"";
            // line 347
            echo url("dashboard/shipments/saved");
            echo "\" class=\"kt-widget__value kt-font-brand\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View"]);
            echo "</a>-->
<!--                                ";
        } else {
            // line 348
            echo "-->
<!--                                    <span class=\"kt-widget__title\">";
            // line 349
            echo twig_escape_filter($this->env, ($context["new"] ?? null), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Shipment Request"]);
            echo "</span>-->
<!--                                    <a href=\"";
            // line 350
            echo url("dashboard/shipments/requests");
            echo "\" class=\"kt-widget__value kt-font-brand\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View"]);
            echo "</a>-->
<!--                                ";
        }
        // line 351
        echo "-->
<!--                            </div>-->
<!--                        </div>-->

<!--                    </div>-->

                    </div>
                </div>

            </div>
        </div>

        </div>
        <!--end:: Widgets/Applications/User/Profile3-->
    </div>
</div>
<!--End::Section-->
";
        // line 368
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 368) == 1) || (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 368) == 6))) {
            // line 369
            echo "    <div class=\"row\">
        <div class=\"col-lg-4\">
            <!--begin:: Widgets/Latest Updates-->
            <div class=\"kt-portlet kt-portlet--height-fluid \" id=\"summary_container\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t";
            // line 376
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Summary"]);
            echo " <small>";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Statistical summary"]);
            echo "</small>
            \t\t\t</h3>
            \t\t</div>
            \t\t<!--
                        <div class=\"kt-portlet__head-toolbar\">
                \t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t<i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <ul class=\"kt-nav\">
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-drop\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 389
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last Month Summary"]);
            echo "</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 395
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Consolidated List"]);
            echo "</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-telegram-logo\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 401
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered List"]);
            echo "</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                \t\t</div>
                    -->
            \t</div>
            \t<!--full height portlet body-->
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit\">
            \t\t<div class=\"kt-widget4 kt-widget4--sticky\">
            \t\t\t<div class=\"kt-widget4__items kt-portlet__space-x kt-margin-t-15\" id=\"summary\">
                            ";
            // line 413
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("summarywidget"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 414
            echo "                        </div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Latest Updates-->
        </div>
        <div class=\"col-lg-8\">
    \t\t<!--begin:: Widgets/Quick Stats-->
            <div class=\"row row-full-height\" id=\"charts\">
                ";
            // line 423
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("chartswidget"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 424
            echo "            </div>
            <!--end:: Widgets/Quick Stats-->
        </div>
    </div>
";
        }
        // line 429
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--height-fluid\" id=\"listing_container\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 436
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Latest shipments"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-widget11\">
\t\t\t\t\t<div class=\"table-responsive\" id=\"listing\">
                        ";
        // line 443
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("listingwidget"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 444
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-widget11__action kt-align-right\">
\t\t\t\t\t\t<a href=\"";
        // line 446
        echo url("dashboard/shipments/all");
        echo "\" class=\"btn background-primary text-white btn-sm btn-bold\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View All Shipments"]);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
        \t</div>
        </div>
    </div>
</div>


";
        // line 455
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 456
        echo "<script>
\"use strict\";

// Class definition
var KTDashboard = function() {

    // Daterangepicker Init
    var daterangepickerInit = function() {
        if (\$('#kt_dashboard_daterangepicker').length == 0) {
            return;
        }

        moment.locale('";
        // line 468
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "');
        moment.updateLocale('";
        // line 469
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "', {
            months : [
                \"";
        // line 471
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
        echo "\",
                \"";
        // line 472
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
            ]
        });
        var picker = \$('#kt_dashboard_daterangepicker');
        var start = moment().utcOffset(KTAppOptions.timezone_offset).startOf('month');
        var end = moment().utcOffset(KTAppOptions.timezone_offset).endOf('month');

        function cb(start, end, label) {
            var title = '';
            var range = '';

            if ((end - start) < 100 || label == 'Today') {
                title = '";
        // line 484
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo ":';
                range = start.format(KTAppOptions.daterangeformat);
            } else if (label == '";
        // line 486
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "') {
                title = '";
        // line 487
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo ":';
                range = start.format(KTAppOptions.daterangeformat);
            } else {
                range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
            }

            \$('#kt_dashboard_daterangepicker_date').html(range);
            \$('#kt_dashboard_daterangepicker_title').html(title);

            //List All Widgets in dashboard
            KTApp.block('#summary_container', {});
            KTApp.block('#charts', {});
            KTApp.block('#listing_container', {});
            \$.request('onRefreshTime', {
                data: {start: start.format(KTAppOptions.daterangeformat), end: end.format(KTAppOptions.daterangeformat)},
                update: { summarywidget: '#summary',chartswidget: '#charts', listingwidget: '#listing' },
                complete: function(e) {
                    Chart.helpers.each(Chart.instances, function (instance) {
                         instance.destroy();
                    });

                    ";
        // line 508
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 508) == 1) || (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 508) == 6))) {
            // line 509
            echo "                        quickStats();
                    ";
        }
        // line 511
        echo "                    listing();
                    KTApp.unblock('#summary_container');
                    KTApp.unblock('#listing_container');
                }
            });
        }

        picker.daterangepicker({
            direction: KTUtil.isRTL(),
            locale: {
                \"format\": KTAppOptions.daterangeformat,
                \"separator\": \" - \",
                \"applyLabel\": \"";
        // line 523
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apply"]);
        echo "\",
                \"cancelLabel\": \"";
        // line 524
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "\",
                \"fromLabel\": \"";
        // line 525
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo "\",
                \"toLabel\": \"";
        // line 526
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo "\",
                \"customRangeLabel\": \"";
        // line 527
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "\",
                \"daysOfWeek\": [
                    \"";
        // line 529
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Su"]);
        echo "\",
                    \"";
        // line 530
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mo"]);
        echo "\",
                    \"";
        // line 531
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tu"]);
        echo "\",
                    \"";
        // line 532
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We"]);
        echo "\",
                    \"";
        // line 533
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Th"]);
        echo "\",
                    \"";
        // line 534
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fr"]);
        echo "\",
                    \"";
        // line 535
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sa"]);
        echo "\"
                ],
                \"monthNames\": [
                    \"";
        // line 538
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
                    \"";
        // line 539
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
                    \"";
        // line 540
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
                    \"";
        // line 541
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
                    \"";
        // line 542
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
                    \"";
        // line 543
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
                    \"";
        // line 544
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
                    \"";
        // line 545
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
                    \"";
        // line 546
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
                    \"";
        // line 547
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
                    \"";
        // line 548
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
                    \"";
        // line 549
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
                ],
                \"monthsShort\": [
                    \"";
        // line 552
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
                    \"";
        // line 553
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
                    \"";
        // line 554
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
                    \"";
        // line 555
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
                    \"";
        // line 556
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
                    \"";
        // line 557
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
                    \"";
        // line 558
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
                    \"";
        // line 559
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
                    \"";
        // line 560
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
                    \"";
        // line 561
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
                    \"";
        // line 562
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
                    \"";
        // line 563
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
                ],
                \"firstDay\": 1
            },
            startDate: start,
            endDate: end,
            opens: 'left',
            ranges: {
                '";
        // line 571
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 572
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days')],
                '";
        // line 573
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 7 Days"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(6, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 574
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 30 Days"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(29, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 575
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This Month"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).endOf('month')],
                '";
        // line 576
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last Month"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end, '');
    }

    return {
        // Init demos
        init: function() {
            daterangepickerInit();
            var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': KTAppOptions.text.loading});
            loading.show();

            setTimeout(function() {
                loading.hide();
            }, 3000);
        }
    };
}();

function _initSparklineChart(src, data, color, border) {
    if (src.length == 0) {
        return;
    }

    var config = {
        type: 'line',
        data: {
            labels: [\"";
        // line 605
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
        echo "\"],
            datasets: [{
                label: \"\",
                borderColor: color,
                borderWidth: border,

                pointHoverRadius: 4,
                pointHoverBorderWidth: 12,
                pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                fill: false,
                data: data,
            }]
        },
        options: {
            title: {
                display: false,
            },
            tooltips: {
                enabled: false,
                intersect: false,
                mode: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: false
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            hover: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '";
        // line 650
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Month"]);
        echo "'
                    }
                }],
                yAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '";
        // line 658
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Value"]);
        echo "'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },

            elements: {
                point: {
                    radius: 4,
                    borderWidth: 12
                },
            },

            layout: {
                padding: {
                    left: 0,
                    right: 10,
                    top: 5,
                    bottom: 0
                }
            }
        }
    };

    new Chart(src, config);
}
// Class initialization on page load
jQuery(document).ready(function() {
    KTDashboard.init();
});
</script>
";
        // line 455
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/dashboard.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1138 => 455,  1102 => 658,  1091 => 650,  1025 => 605,  993 => 576,  989 => 575,  985 => 574,  981 => 573,  977 => 572,  973 => 571,  962 => 563,  958 => 562,  954 => 561,  950 => 560,  946 => 559,  942 => 558,  938 => 557,  934 => 556,  930 => 555,  926 => 554,  922 => 553,  918 => 552,  912 => 549,  908 => 548,  904 => 547,  900 => 546,  896 => 545,  892 => 544,  888 => 543,  884 => 542,  880 => 541,  876 => 540,  872 => 539,  868 => 538,  862 => 535,  858 => 534,  854 => 533,  850 => 532,  846 => 531,  842 => 530,  838 => 529,  833 => 527,  829 => 526,  825 => 525,  821 => 524,  817 => 523,  803 => 511,  799 => 509,  797 => 508,  773 => 487,  769 => 486,  764 => 484,  741 => 472,  725 => 471,  720 => 469,  716 => 468,  702 => 456,  700 => 455,  686 => 446,  682 => 444,  678 => 443,  668 => 436,  659 => 429,  652 => 424,  648 => 423,  637 => 414,  633 => 413,  618 => 401,  609 => 395,  600 => 389,  582 => 376,  573 => 369,  571 => 368,  552 => 351,  545 => 350,  539 => 349,  536 => 348,  529 => 347,  523 => 346,  519 => 345,  507 => 336,  501 => 335,  493 => 330,  486 => 326,  480 => 325,  472 => 320,  465 => 316,  459 => 315,  451 => 310,  275 => 136,  268 => 132,  258 => 129,  252 => 126,  248 => 124,  246 => 123,  243 => 122,  240 => 121,  233 => 119,  224 => 118,  221 => 117,  218 => 116,  211 => 114,  202 => 113,  199 => 112,  196 => 111,  194 => 110,  188 => 106,  182 => 104,  180 => 103,  175 => 102,  169 => 100,  163 => 98,  161 => 97,  156 => 96,  154 => 95,  144 => 90,  137 => 86,  132 => 83,  126 => 80,  123 => 79,  117 => 76,  114 => 75,  112 => 74,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Begin::Section-->

<div class=\"row\">

    <div class=\"col-12\">
        <!--begin:: Widgets/Applications/User/Profile3-->

            <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__body\">

                <div class='row'>
       <div class=\"col-12 col-md-4\">

           <div class='dashboard-top-container '>
                <div class=\"text-center img-container\">
                    <img alt=\"Logo\" src=\"./admin/media/images/logo.png\" style=\"max-height:40px\"/>
                    <h5>Summary</h5>
                </div>

                <div class='top-dashbord-left-container d-flex flex-column align-items-stretch h-100 '>
                    <div class=\"container-info\">
                        <div>
                            <!-- <i class=\"flaticon-map-location\"></i>  -->
                            <i class=\"fas fa-clipboard-list\"></i>
                            No of transactions
                        </div>
                        <div>
                           <h2>1500</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                          <i class=\"fas fa-chart-line\"></i>
                           Ranking
                        </div>
                        <div>
                           <h2>25</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                           <i class=\"fas fa-money-bill\"></i>
                           Payments
                        </div>
                        <div>
                           <h2>3222</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                          <i class=\"fas fa-chart-bar\"></i>
                           Revenue
                        </div>
                        <div>
                           <h2>1212</h2>
                        </div>
                    </div>
                    <div class=\"container-info\">
                        <div>
                           <i class=\"far fa-window-close\"></i>
                           Cancelled Rides
                        </div>
                        <div>
                           <h2>10</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"col-12 col-md-8\">
              <div class=\"kt-widget kt-widget--user-profile-3 custom-widget\">
                    <div class=\"kt-widget__top\">
                        {% if user.avatar %}
                            <div class=\"kt-widget__media\">
                                <img src=\"{{user.avatar.thumb(100, 100,'crop')}}\" alt=\"image\">
                            </div>
                       {% else %}
                            <div class=\"kt-widget__pic kt-widget__pic--brand kt-font-boldest kt-font-light boxnameShow\">
                                {{user.name|upper|slice(0,2)}}
                            </div>
                       {% endif %}
                        <div class=\"kt-widget__content\">
                            <div class=\"kt-widget__head\">
                                <a href=\"javascript:void(0);\" class=\"kt-widget__username\">
                                    {{user.name|capitalize}}
                                </a>

                                <div class=\"kt-widget__action\">
                                    <a href=\"{{'dashboard/profile'|page}}\" class=\"btn btn-brand btn-sm btn-upper\">{{'Edit'|__}}</a>
                                </div>
                            </div>

                            <div class=\"kt-widget__subhead\">
                                {% if user.mobile %}
                                    <a href=\"javascript:void(0);\"><i class=\"flaticon-alarm-1\"></i>{{user.mobile}}</a>
                                {% elseif user.email %}
                                    <a href=\"javascript:void(0);\"><i class=\"flaticon2-new-email\"></i>{{user.email}}</a>
                                {% else %}
                                    <a href=\"javascript:void(0);\"><i class=\"flaticon-user-settings\"></i>{{user.username}}</a>
                                {% endif %}
                                <a href=\"javascript:void(0);\"><i class=\"flaticon2-calendar-3\"></i>{{user.role.name}} </a>
                                {% if user.branch %}
                                    <a href=\"javascript:void(0);\"><i class=\"flaticon2-placeholder\"></i>{{user.branch.name}}</a>
                                {% endif %}
                            </div>

                            <div class=\"kt-widget__info\">
                                <div class=\"kt-widget__desc\">
                                    {% if user.role_id == 5 %}
                                        {% if user.addresses is not empty %}
                                        {% set address = user.addresses.where('default', 1).first %}
                                        {{address.street}}, {{address.thecity.name}} {{address.zipcode}}
                                        <br> {{address.thestate.name}}, {{address.thecountry.name}}
                                        {% endif %}
                                    {% else %}
                                        {% if user.street_addr %}
                                            {{user.street_addr}}, {{user.city.name}} {{user.zip}}
                                            <br> {{user.state.name}}, {{user.country.name}}
                                        {% endif %}
                                    {% endif %}
                                </div>
                                {% if user.role_id != 1 %}
                                    <div class=\"kt-widget__progress\">
                                        <div class=\"kt-widget__text\">
                                            {{'Progress'|__}}
                                        </div>
                                        <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                            <div class=\"progress-bar kt-bg-{{progress_status}}\" role=\"progressbar\" style=\"width: {{progress_value}}%;\" aria-valuenow=\"{{progress_value}}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div class=\"kt-widget__stats\">
                                            {{progress_value}}%
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-4'>
                            <div class='dashboardcontainainer a'>
                                <div class=\"headers\">
                                    <h4>United Kingdom</h4>
                                    <div><img src=\"https://www.countryflags.io/gb/flat/64.png\" alt=\"\"></div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                        <!-- <i class=\"flaticon-map-location\"></i>  -->
                                        <i class=\"fas fa-clipboard-list\"></i>
                                        No of transactions
                                    </div>
                                    <div>
                                       <h3>1500</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-line\"></i>
                                       Ranking
                                    </div>
                                    <div>
                                       <h3>25</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"fas fa-money-bill\"></i>
                                       Payments
                                    </div>
                                    <div>
                                       <h3>3222</h3>
                                    </div>
                                </div>

                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-bar\"></i>
                                       Revenue
                                    </div>
                                    <div>
                                       <h3>1212</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"far fa-window-close\"></i>
                                       Cancelled Rides
                                    </div>
                                    <div>
                                       <h3>10</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class='col-4'>
                            <div class='dashboardcontainainer b'>
                                <div class=\"headers\">
                                    <h4>Canada</h4>
                                    <div><img src=\"https://www.countryflags.io/ca/flat/64.png\" alt=\"\"></div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                        <!-- <i class=\"flaticon-map-location\"></i>  -->
                                        <i class=\"fas fa-clipboard-list\"></i>
                                        No of transactions
                                    </div>
                                    <div>
                                       <h3>1500</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-line\"></i>
                                       Ranking
                                    </div>
                                    <div>
                                       <h3>25</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"fas fa-money-bill\"></i>
                                       Payments
                                    </div>
                                    <div>
                                       <h3>3222</h3>
                                    </div>
                                </div>

                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-bar\"></i>
                                       Revenue
                                    </div>
                                    <div>
                                       <h3>1212</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"far fa-window-close\"></i>
                                       Cancelled Rides
                                    </div>
                                    <div>
                                       <h3>10</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class='col-4'>
                            <div class='dashboardcontainainer c'>
                                <div class=\"headers\">
                                    <h4>Malaysia</h4>
                                    <div><img src=\"https://www.countryflags.io/my/flat/64.png\" alt=\"\"></div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                        <!-- <i class=\"flaticon-map-location\"></i>  -->
                                        <i class=\"fas fa-clipboard-list\"></i>
                                        No of transactions
                                    </div>
                                    <div>
                                       <h3>1500</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-line\"></i>
                                       Ranking
                                    </div>
                                    <div>
                                       <h3>25</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"fas fa-money-bill\"></i>
                                       Payments
                                    </div>
                                    <div>
                                       <h3>3222</h3>
                                    </div>
                                </div>

                                <div class=\"container-info\">
                                    <div>
                                      <i class=\"fas fa-chart-bar\"></i>
                                       Revenue
                                    </div>
                                    <div>
                                       <h3>1212</h3>
                                    </div>
                                </div>
                                <div class=\"container-info\">
                                    <div>
                                       <i class=\"far fa-window-close\"></i>
                                       Cancelled Rides
                                    </div>
                                    <div>
                                       <h3>10</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

<!--                    <div class=\"kt-widget__bottom\">-->
<!--                        <a href=\"{{url('dashboard/shipments/approved')}}\" class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-map-location\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                <span class=\"kt-widget__title\">{{approved}} {{'shipment'|__}}</span>-->
<!--                                <span class=\"kt-widget__value\">{{'Approved List'|__}}</span>-->
<!--                            </div>-->
<!--                        </a>-->

<!--                        <a href=\"{{url('dashboard/shipments/stock')}}\" class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-truck\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                <span class=\"kt-widget__title\">{{stocked}} {{'shipment'|__}}</span>-->
<!--                                <span class=\"kt-widget__value\">{{'In Stock List'|__}}</span>-->
<!--                            </div>-->
<!--                        </a>-->

<!--                        <a href=\"{{url('dashboard/shipments/delivered')}}\" class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-bag\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                <span class=\"kt-widget__title\">{{delivered}} {{'shipment'|__}}</span>-->
<!--                                <span class=\"kt-widget__value\">{{'Delivered List'|__}}</span>-->
<!--                            </div>-->
<!--                        </a>-->

<!--                        <div class=\"kt-widget__item\">-->
<!--                            <div class=\"kt-widget__icon\">-->
<!--                                <i class=\"flaticon-file-2\"></i>-->
<!--                            </div>-->
<!--                            <div class=\"kt-widget__details\">-->
<!--                                {% if user.role_id == 5 %}-->
<!--                                    <span class=\"kt-widget__title\">{{saved}} {{'Saved Shipments'|__}}</span>-->
<!--                                    <a href=\"{{url('dashboard/shipments/saved')}}\" class=\"kt-widget__value kt-font-brand\">{{'View'|__}}</a>-->
<!--                                {% else %}-->
<!--                                    <span class=\"kt-widget__title\">{{new}} {{'New Shipment Request'|__}}</span>-->
<!--                                    <a href=\"{{url('dashboard/shipments/requests')}}\" class=\"kt-widget__value kt-font-brand\">{{'View'|__}}</a>-->
<!--                                {% endif %}-->
<!--                            </div>-->
<!--                        </div>-->

<!--                    </div>-->

                    </div>
                </div>

            </div>
        </div>

        </div>
        <!--end:: Widgets/Applications/User/Profile3-->
    </div>
</div>
<!--End::Section-->
{% if user.role_id == 1 or user.role_id == 6 %}
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <!--begin:: Widgets/Latest Updates-->
            <div class=\"kt-portlet kt-portlet--height-fluid \" id=\"summary_container\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t{{'Summary'|__}} <small>{{'Statistical summary'|__}}</small>
            \t\t\t</h3>
            \t\t</div>
            \t\t<!--
                        <div class=\"kt-portlet__head-toolbar\">
                \t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t<i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <ul class=\"kt-nav\">
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-drop\"></i>
                                            <span class=\"kt-nav__link-text\">{{'Last Month Summary'|__}}</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                                            <span class=\"kt-nav__link-text\">{{'Consolidated List'|__}}</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-telegram-logo\"></i>
                                            <span class=\"kt-nav__link-text\">{{'Delivered List'|__}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                \t\t</div>
                    -->
            \t</div>
            \t<!--full height portlet body-->
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit\">
            \t\t<div class=\"kt-widget4 kt-widget4--sticky\">
            \t\t\t<div class=\"kt-widget4__items kt-portlet__space-x kt-margin-t-15\" id=\"summary\">
                            {% partial 'summarywidget' %}
                        </div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Latest Updates-->
        </div>
        <div class=\"col-lg-8\">
    \t\t<!--begin:: Widgets/Quick Stats-->
            <div class=\"row row-full-height\" id=\"charts\">
                {% partial 'chartswidget' %}
            </div>
            <!--end:: Widgets/Quick Stats-->
        </div>
    </div>
{% endif %}

<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--height-fluid\" id=\"listing_container\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Latest shipments'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-widget11\">
\t\t\t\t\t<div class=\"table-responsive\" id=\"listing\">
                        {% partial 'listingwidget' %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-widget11__action kt-align-right\">
\t\t\t\t\t\t<a href=\"{{url('dashboard/shipments/all')}}\" class=\"btn background-primary text-white btn-sm btn-bold\">{{'View All Shipments'|__}}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
        \t</div>
        </div>
    </div>
</div>


{% put scripts %}
<script>
\"use strict\";

// Class definition
var KTDashboard = function() {

    // Daterangepicker Init
    var daterangepickerInit = function() {
        if (\$('#kt_dashboard_daterangepicker').length == 0) {
            return;
        }

        moment.locale('{{currentLang}}');
        moment.updateLocale('{{currentLang}}', {
            months : [
                \"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\",
                \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\", \"{{'November'|__}}\", \"{{'December'|__}}\"
            ]
        });
        var picker = \$('#kt_dashboard_daterangepicker');
        var start = moment().utcOffset(KTAppOptions.timezone_offset).startOf('month');
        var end = moment().utcOffset(KTAppOptions.timezone_offset).endOf('month');

        function cb(start, end, label) {
            var title = '';
            var range = '';

            if ((end - start) < 100 || label == 'Today') {
                title = '{{\"Today\"|__}}:';
                range = start.format(KTAppOptions.daterangeformat);
            } else if (label == '{{\"Yesterday\"|__}}') {
                title = '{{\"Yesterday\"|__}}:';
                range = start.format(KTAppOptions.daterangeformat);
            } else {
                range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
            }

            \$('#kt_dashboard_daterangepicker_date').html(range);
            \$('#kt_dashboard_daterangepicker_title').html(title);

            //List All Widgets in dashboard
            KTApp.block('#summary_container', {});
            KTApp.block('#charts', {});
            KTApp.block('#listing_container', {});
            \$.request('onRefreshTime', {
                data: {start: start.format(KTAppOptions.daterangeformat), end: end.format(KTAppOptions.daterangeformat)},
                update: { summarywidget: '#summary',chartswidget: '#charts', listingwidget: '#listing' },
                complete: function(e) {
                    Chart.helpers.each(Chart.instances, function (instance) {
                         instance.destroy();
                    });

                    {% if user.role_id == 1 or user.role_id == 6 %}
                        quickStats();
                    {% endif %}
                    listing();
                    KTApp.unblock('#summary_container');
                    KTApp.unblock('#listing_container');
                }
            });
        }

        picker.daterangepicker({
            direction: KTUtil.isRTL(),
            locale: {
                \"format\": KTAppOptions.daterangeformat,
                \"separator\": \" - \",
                \"applyLabel\": \"{{'Apply'|__}}\",
                \"cancelLabel\": \"{{'Cancel'|__}}\",
                \"fromLabel\": \"{{'From'|__}}\",
                \"toLabel\": \"{{'To'|__}}\",
                \"customRangeLabel\": \"{{'Custom'|__}}\",
                \"daysOfWeek\": [
                    \"{{'Su'|__}}\",
                    \"{{'Mo'|__}}\",
                    \"{{'Tu'|__}}\",
                    \"{{'We'|__}}\",
                    \"{{'Th'|__}}\",
                    \"{{'Fr'|__}}\",
                    \"{{'Sa'|__}}\"
                ],
                \"monthNames\": [
                    \"{{'January'|__}}\",
                    \"{{'February'|__}}\",
                    \"{{'March'|__}}\",
                    \"{{'April'|__}}\",
                    \"{{'May'|__}}\",
                    \"{{'June'|__}}\",
                    \"{{'July'|__}}\",
                    \"{{'August'|__}}\",
                    \"{{'September'|__}}\",
                    \"{{'October'|__}}\",
                    \"{{'November'|__}}\",
                    \"{{'December'|__}}\"
                ],
                \"monthsShort\": [
                    \"{{'January'|__}}\",
                    \"{{'February'|__}}\",
                    \"{{'March'|__}}\",
                    \"{{'April'|__}}\",
                    \"{{'May'|__}}\",
                    \"{{'June'|__}}\",
                    \"{{'July'|__}}\",
                    \"{{'August'|__}}\",
                    \"{{'September'|__}}\",
                    \"{{'October'|__}}\",
                    \"{{'November'|__}}\",
                    \"{{'December'|__}}\"
                ],
                \"firstDay\": 1
            },
            startDate: start,
            endDate: end,
            opens: 'left',
            ranges: {
                '{{\"Today\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset), moment().utcOffset(KTAppOptions.timezone_offset)],
                '{{\"Yesterday\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days')],
                '{{\"Last 7 Days\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(6, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '{{\"Last 30 Days\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(29, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '{{\"This Month\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).endOf('month')],
                '{{\"Last Month\"|__}}': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end, '');
    }

    return {
        // Init demos
        init: function() {
            daterangepickerInit();
            var loading = new KTDialog({'type': 'loader', 'placement': 'top center', 'message': KTAppOptions.text.loading});
            loading.show();

            setTimeout(function() {
                loading.hide();
            }, 3000);
        }
    };
}();

function _initSparklineChart(src, data, color, border) {
    if (src.length == 0) {
        return;
    }

    var config = {
        type: 'line',
        data: {
            labels: [\"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\", \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\"],
            datasets: [{
                label: \"\",
                borderColor: color,
                borderWidth: border,

                pointHoverRadius: 4,
                pointHoverBorderWidth: 12,
                pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                pointHoverBackgroundColor: KTApp.getStateColor('danger'),
                pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),
                fill: false,
                data: data,
            }]
        },
        options: {
            title: {
                display: false,
            },
            tooltips: {
                enabled: false,
                intersect: false,
                mode: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: false
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            hover: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '{{\"Month\"|__}}'
                    }
                }],
                yAxes: [{
                    display: false,
                    gridLines: false,
                    scaleLabel: {
                        display: true,
                        labelString: '{{\"Value\"|__}}'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },

            elements: {
                point: {
                    radius: 4,
                    borderWidth: 12
                },
            },

            layout: {
                padding: {
                    left: 0,
                    right: 10,
                    top: 5,
                    bottom: 0
                }
            }
        }
    };

    new Chart(src, config);
}
// Class initialization on page load
jQuery(document).ready(function() {
    KTDashboard.init();
});
</script>
{% endput %}", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/dashboard.htm", "");
    }
}
