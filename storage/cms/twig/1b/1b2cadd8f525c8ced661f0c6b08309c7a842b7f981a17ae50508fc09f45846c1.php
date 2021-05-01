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

/* C:\wamp64\www\company\ebilty-web/themes/spotlayer/pages/dashboard/dashboard.htm */
class __TwigTemplate_9d89e3cd42af233d7783afa0e380b95a36aed7d04d1148e957bce7ca2fc2abad extends \Twig\Template
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
                  <div class='top-dashbord-left-container'>
                                
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
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 73)) {
            // line 74
            echo "                            <div class=\"kt-widget__media\">
                                <img src=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 75), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 75), "html", null, true);
            echo "\" alt=\"image\">
                            </div>
                       ";
        } else {
            // line 78
            echo "                            <div class=\"kt-widget__pic kt-widget__pic--brand kt-font-boldest kt-font-light boxnameShow\">
                                ";
            // line 79
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 79)), 0, 2), "html", null, true);
            echo "
                            </div>
                       ";
        }
        // line 82
        echo "                        <div class=\"kt-widget__content\">
                            <div class=\"kt-widget__head\">
                                <a href=\"javascript:void(0);\" class=\"kt-widget__username\">
                                    ";
        // line 85
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 85)), "html", null, true);
        echo "
                                </a>

                                <div class=\"kt-widget__action\">
                                    <a href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/profile");
        echo "\" class=\"btn btn-brand btn-sm btn-upper\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"kt-widget__subhead\">
                                ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 94)) {
            // line 95
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon-alarm-1\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 95), "html", null, true);
            echo "</a>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 96
($context["user"] ?? null), "email", [], "any", false, false, false, 96)) {
            // line 97
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon2-new-email\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 97), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 99
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon-user-settings\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 99), "html", null, true);
            echo "</a>
                                ";
        }
        // line 101
        echo "                                <a href=\"javascript:void(0);\"><i class=\"flaticon2-calendar-3\"></i>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), "html", null, true);
        echo " </a>
                                ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "branch", [], "any", false, false, false, 102)) {
            // line 103
            echo "                                    <a href=\"javascript:void(0);\"><i class=\"flaticon2-placeholder\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "branch", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
            echo "</a>
                                ";
        }
        // line 105
        echo "                            </div>

                            <div class=\"kt-widget__info\">
                                <div class=\"kt-widget__desc\">
                                    ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 109) == 5)) {
            // line 110
            echo "                                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 110))) {
                // line 111
                echo "                                        ";
                $context["address"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 111), "where", [0 => "default", 1 => 1], "method", false, false, false, 111), "first", [], "any", false, false, false, 111);
                // line 112
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 112), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thecity", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 112), "html", null, true);
                echo "
                                        <br> ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thestate", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "thecountry", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
                echo "
                                        ";
            }
            // line 115
            echo "                                    ";
        } else {
            // line 116
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", [], "any", false, false, false, 116)) {
                // line 117
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street_addr", [], "any", false, false, false, 117), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zip", [], "any", false, false, false, 117), "html", null, true);
                echo "
                                            <br> ";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "state", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "country", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
                echo "
                                        ";
            }
            // line 120
            echo "                                    ";
        }
        // line 121
        echo "                                </div>
                                ";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 122) != 1)) {
            // line 123
            echo "                                    <div class=\"kt-widget__progress\">
                                        <div class=\"kt-widget__text\">
                                            ";
            // line 125
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Progress"]);
            echo "
                                        </div>
                                        <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                            <div class=\"progress-bar kt-bg-";
            // line 128
            echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
            echo "\" role=\"progressbar\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "%;\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div class=\"kt-widget__stats\">
                                            ";
            // line 131
            echo twig_escape_filter($this->env, ($context["progress_value"] ?? null), "html", null, true);
            echo "%
                                        </div>
                                    </div>
                                ";
        }
        // line 135
        echo "                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-4'>
                            <div class='dashboardcontainainer a'>
                                <div class=\"headers\">
                                    <div>United Kingdom</div>
                                    <div><img src=\"https://www.countryflags.io/gb/flat/64.png\"></div>
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
                                    <div>Canada</div>
                                    <div><img src=\"https://www.countryflags.io/ca/flat/64.png\"></div>
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
                                    <div>Malaysia</div>
                                    <div><img src=\"https://www.countryflags.io/my/flat/64.png\"></div>
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
                    <div class=\"kt-widget__bottom\">
                        <a href=\"";
        // line 308
        echo url("dashboard/shipments/approved");
        echo "\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-map-location\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">";
        // line 313
        echo twig_escape_filter($this->env, ($context["approved"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>
                                <span class=\"kt-widget__value\">";
        // line 314
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved List"]);
        echo "</span>
                            </div>
                        </a>

                        <a href=\"";
        // line 318
        echo url("dashboard/shipments/stock");
        echo "\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-truck\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">";
        // line 323
        echo twig_escape_filter($this->env, ($context["stocked"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>
                                <span class=\"kt-widget__value\">";
        // line 324
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock List"]);
        echo "</span>
                            </div>
                        </a>

                        <a href=\"";
        // line 328
        echo url("dashboard/shipments/delivered");
        echo "\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-bag\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">";
        // line 333
        echo twig_escape_filter($this->env, ($context["delivered"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["shipment"]);
        echo "</span>
                                <span class=\"kt-widget__value\">";
        // line 334
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered List"]);
        echo "</span>
                            </div>
                        </a>

                        <div class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-file-2\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                ";
        // line 343
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 343) == 5)) {
            // line 344
            echo "                                    <span class=\"kt-widget__title\">";
            echo twig_escape_filter($this->env, ($context["saved"] ?? null), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved Shipments"]);
            echo "</span>
                                    <a href=\"";
            // line 345
            echo url("dashboard/shipments/saved");
            echo "\" class=\"kt-widget__value kt-font-brand\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View"]);
            echo "</a>
                                ";
        } else {
            // line 347
            echo "                                    <span class=\"kt-widget__title\">";
            echo twig_escape_filter($this->env, ($context["new"] ?? null), "html", null, true);
            echo " ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Shipment Request"]);
            echo "</span>
                                    <a href=\"";
            // line 348
            echo url("dashboard/shipments/requests");
            echo "\" class=\"kt-widget__value kt-font-brand\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View"]);
            echo "</a>
                                ";
        }
        // line 350
        echo "                            </div>
                        </div>

                    </div>
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
        // line 364
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 364) == 1) || (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 364) == 6))) {
            // line 365
            echo "    <div class=\"row\">
        <div class=\"col-lg-4\">
            <!--begin:: Widgets/Latest Updates-->
            <div class=\"kt-portlet kt-portlet--height-fluid \" id=\"summary_container\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t";
            // line 372
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
            // line 385
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last Month Summary"]);
            echo "</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-calendar-8\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 391
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Consolidated List"]);
            echo "</span>
                                        </a>
                                    </li>
                                    <li class=\"kt-nav__item\">
                                        <a href=\"javascript:void(0);\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon2-telegram-logo\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 397
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
            // line 409
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("summarywidget"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 410
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
            // line 419
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("chartswidget"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 420
            echo "            </div>
            <!--end:: Widgets/Quick Stats-->
        </div>
    </div>
";
        }
        // line 425
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--height-fluid\" id=\"listing_container\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 432
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Latest shipments"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-widget11\">
\t\t\t\t\t<div class=\"table-responsive\" id=\"listing\">
                        ";
        // line 439
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("listingwidget"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 440
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-widget11__action kt-align-right\">
\t\t\t\t\t\t<a href=\"";
        // line 443
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
        // line 452
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 453
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
        // line 465
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "');
        moment.updateLocale('";
        // line 466
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "', {
            months : [
                \"";
        // line 468
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
        // line 469
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
        // line 481
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo ":';
                range = start.format(KTAppOptions.daterangeformat);
            } else if (label == '";
        // line 483
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "') {
                title = '";
        // line 484
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
        // line 505
        if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 505) == 1) || (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 505) == 6))) {
            // line 506
            echo "                        quickStats();
                    ";
        }
        // line 508
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
        // line 520
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apply"]);
        echo "\",
                \"cancelLabel\": \"";
        // line 521
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "\",
                \"fromLabel\": \"";
        // line 522
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo "\",
                \"toLabel\": \"";
        // line 523
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo "\",
                \"customRangeLabel\": \"";
        // line 524
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "\",
                \"daysOfWeek\": [
                    \"";
        // line 526
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Su"]);
        echo "\",
                    \"";
        // line 527
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mo"]);
        echo "\",
                    \"";
        // line 528
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tu"]);
        echo "\",
                    \"";
        // line 529
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We"]);
        echo "\",
                    \"";
        // line 530
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Th"]);
        echo "\",
                    \"";
        // line 531
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fr"]);
        echo "\",
                    \"";
        // line 532
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sa"]);
        echo "\"
                ],
                \"monthNames\": [
                    \"";
        // line 535
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
                    \"";
        // line 536
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
                    \"";
        // line 537
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
                    \"";
        // line 538
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
                    \"";
        // line 539
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
                    \"";
        // line 540
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
                    \"";
        // line 541
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
                    \"";
        // line 542
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
                    \"";
        // line 543
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
                    \"";
        // line 544
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
                    \"";
        // line 545
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
                    \"";
        // line 546
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
                ],
                \"monthsShort\": [
                    \"";
        // line 549
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
                    \"";
        // line 550
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
                    \"";
        // line 551
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
                    \"";
        // line 552
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
                    \"";
        // line 553
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
                    \"";
        // line 554
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
                    \"";
        // line 555
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
                    \"";
        // line 556
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
                    \"";
        // line 557
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
                    \"";
        // line 558
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
                    \"";
        // line 559
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
                    \"";
        // line 560
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
        // line 568
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 569
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days'), moment().utcOffset(KTAppOptions.timezone_offset).subtract(1, 'days')],
                '";
        // line 570
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 7 Days"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(6, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 571
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 30 Days"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).subtract(29, 'days'), moment().utcOffset(KTAppOptions.timezone_offset)],
                '";
        // line 572
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This Month"]);
        echo "': [moment().utcOffset(KTAppOptions.timezone_offset).startOf('month'), moment().utcOffset(KTAppOptions.timezone_offset).endOf('month')],
                '";
        // line 573
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
        // line 602
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
        // line 647
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
        // line 655
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
        // line 452
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/dashboard/dashboard.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1131 => 452,  1095 => 655,  1084 => 647,  1018 => 602,  986 => 573,  982 => 572,  978 => 571,  974 => 570,  970 => 569,  966 => 568,  955 => 560,  951 => 559,  947 => 558,  943 => 557,  939 => 556,  935 => 555,  931 => 554,  927 => 553,  923 => 552,  919 => 551,  915 => 550,  911 => 549,  905 => 546,  901 => 545,  897 => 544,  893 => 543,  889 => 542,  885 => 541,  881 => 540,  877 => 539,  873 => 538,  869 => 537,  865 => 536,  861 => 535,  855 => 532,  851 => 531,  847 => 530,  843 => 529,  839 => 528,  835 => 527,  831 => 526,  826 => 524,  822 => 523,  818 => 522,  814 => 521,  810 => 520,  796 => 508,  792 => 506,  790 => 505,  766 => 484,  762 => 483,  757 => 481,  734 => 469,  718 => 468,  713 => 466,  709 => 465,  695 => 453,  693 => 452,  679 => 443,  674 => 440,  670 => 439,  660 => 432,  651 => 425,  644 => 420,  640 => 419,  629 => 410,  625 => 409,  610 => 397,  601 => 391,  592 => 385,  574 => 372,  565 => 365,  563 => 364,  547 => 350,  540 => 348,  533 => 347,  526 => 345,  519 => 344,  517 => 343,  505 => 334,  499 => 333,  491 => 328,  484 => 324,  478 => 323,  470 => 318,  463 => 314,  457 => 313,  449 => 308,  274 => 135,  267 => 131,  257 => 128,  251 => 125,  247 => 123,  245 => 122,  242 => 121,  239 => 120,  232 => 118,  223 => 117,  220 => 116,  217 => 115,  210 => 113,  201 => 112,  198 => 111,  195 => 110,  193 => 109,  187 => 105,  181 => 103,  179 => 102,  174 => 101,  168 => 99,  162 => 97,  160 => 96,  155 => 95,  153 => 94,  143 => 89,  136 => 85,  131 => 82,  125 => 79,  122 => 78,  116 => 75,  113 => 74,  111 => 73,  37 => 1,);
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
                  <div class='top-dashbord-left-container'>
                                
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
                                    <div>United Kingdom</div>
                                    <div><img src=\"https://www.countryflags.io/gb/flat/64.png\"></div>
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
                                    <div>Canada</div>
                                    <div><img src=\"https://www.countryflags.io/ca/flat/64.png\"></div>
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
                                    <div>Malaysia</div>
                                    <div><img src=\"https://www.countryflags.io/my/flat/64.png\"></div>
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
                    <div class=\"kt-widget__bottom\">
                        <a href=\"{{url('dashboard/shipments/approved')}}\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-map-location\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">{{approved}} {{'shipment'|__}}</span>
                                <span class=\"kt-widget__value\">{{'Approved List'|__}}</span>
                            </div>
                        </a>

                        <a href=\"{{url('dashboard/shipments/stock')}}\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-truck\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">{{stocked}} {{'shipment'|__}}</span>
                                <span class=\"kt-widget__value\">{{'In Stock List'|__}}</span>
                            </div>
                        </a>

                        <a href=\"{{url('dashboard/shipments/delivered')}}\" class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-bag\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                <span class=\"kt-widget__title\">{{delivered}} {{'shipment'|__}}</span>
                                <span class=\"kt-widget__value\">{{'Delivered List'|__}}</span>
                            </div>
                        </a>

                        <div class=\"kt-widget__item\">
                            <div class=\"kt-widget__icon\">
                                <i class=\"flaticon-file-2\"></i>
                            </div>
                            <div class=\"kt-widget__details\">
                                {% if user.role_id == 5 %}
                                    <span class=\"kt-widget__title\">{{saved}} {{'Saved Shipments'|__}}</span>
                                    <a href=\"{{url('dashboard/shipments/saved')}}\" class=\"kt-widget__value kt-font-brand\">{{'View'|__}}</a>
                                {% else %}
                                    <span class=\"kt-widget__title\">{{new}} {{'New Shipment Request'|__}}</span>
                                    <a href=\"{{url('dashboard/shipments/requests')}}\" class=\"kt-widget__value kt-font-brand\">{{'View'|__}}</a>
                                {% endif %}
                            </div>
                        </div>

                    </div>
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
{% endput %}", "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/dashboard/dashboard.htm", "");
    }
}
