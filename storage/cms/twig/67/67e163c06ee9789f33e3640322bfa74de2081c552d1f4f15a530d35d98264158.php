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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/partials/chartswidget.htm */
class __TwigTemplate_f3c44618c42a96a95ebd81b23db7e821f27ccec498f40f3c8078f0da2f476257 extends \Twig\Template
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
        echo "<div class=\"col-sm-12\">
    <div class=\"kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-warning\">
        <div class=\"kt-portlet__body kt-portlet__body--fluid\">
            <div class=\"kt-widget26\">
                <div class=\"kt-widget26__content flex-md-row\">
                    <span class=\"kt-widget26__desc\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pending Payments"]);
        echo "</span>
                    <span class=\"kt-widget26__number ml-md-4 color-danger\"><span class=\"kt-currency_before\"></span>";
        // line 7
        echo twig_escape_filter($this->env, ($context["PendingPayments"] ?? null), "html", null, true);
        echo "<span class=\"kt-currency_after\"></span></span>
                </div>
                <div class=\"kt-widget26__chart\" style=\"height:200px; width: 100%;\">
                    <canvas id=\"kt_chart_quick_stats_1\"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
<div class=\"col-sm-12\">
    <div class=\"kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-success\">
        <div class=\"kt-portlet__body kt-portlet__body--fluid\">
            <div class=\"kt-widget26\">
                <div class=\"kt-widget26__content flex-md-row\">
                    <span class=\"kt-widget26__desc\">";
        // line 22
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Current Month Sales"]);
        echo "</span>
                    <span class=\"kt-widget26__number ml-md-4 color-success\"><span class=\"kt-currency_before\"></span>";
        // line 23
        echo twig_escape_filter($this->env, ($context["CurrentMonthSales"] ?? null), "html", null, true);
        echo "<span class=\"kt-currency_after\"></span></span>
                </div>
                <div class=\"kt-widget26__chart\" style=\"height:200px; width: 100%;\">
                    <canvas id=\"kt_chart_quick_stats_2\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-sm-12 col-md-4\">
    <div class=\"kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-dark\">
        <div class=\"kt-portlet__body kt-portlet__body--fluid\">
            <div class=\"kt-widget26\">
                <div class=\"kt-widget26__content flex-md-row\">
                    <span class=\"kt-widget26__desc\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed Shipping Percentage"]);
        echo "</span>
                    <span class=\"kt-widget26__number ml-md-4 kt-font-danger\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["shipping"] ?? null), "html", null, true);
        echo "% </span>
                </div>
                <div class=\"kt-widget26__chart\" style=\"height:200px; width: 100%;\">
                    <canvas id=\"kt_chart_quick_stats_3\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function quickStats(){
    _initSparklineChart(\$('#kt_chart_quick_stats_1'), [";
        // line 49
        echo twig_escape_filter($this->env, ($context["PendingPaymentsChart"] ?? null), "html", null, true);
        echo "], KTApp.getStateColor('warning'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_2'), [";
        // line 50
        echo twig_escape_filter($this->env, ($context["CurrentMonthSalesChart"] ?? null), "html", null, true);
        echo "], KTApp.getStateColor('success'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_3'), [";
        // line 51
        echo twig_escape_filter($this->env, ($context["shippingChart"] ?? null), "html", null, true);
        echo "], KTApp.getStateColor('danger'), 3);
}
</script>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/chartswidget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 51,  109 => 50,  105 => 49,  91 => 38,  87 => 37,  70 => 23,  66 => 22,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-12\">
    <div class=\"kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-warning\">
        <div class=\"kt-portlet__body kt-portlet__body--fluid\">
            <div class=\"kt-widget26\">
                <div class=\"kt-widget26__content flex-md-row\">
                    <span class=\"kt-widget26__desc\">{{'Pending Payments'|__}}</span>
                    <span class=\"kt-widget26__number ml-md-4 color-danger\"><span class=\"kt-currency_before\"></span>{{PendingPayments}}<span class=\"kt-currency_after\"></span></span>
                </div>
                <div class=\"kt-widget26__chart\" style=\"height:200px; width: 100%;\">
                    <canvas id=\"kt_chart_quick_stats_1\"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
<div class=\"col-sm-12\">
    <div class=\"kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-success\">
        <div class=\"kt-portlet__body kt-portlet__body--fluid\">
            <div class=\"kt-widget26\">
                <div class=\"kt-widget26__content flex-md-row\">
                    <span class=\"kt-widget26__desc\">{{'Current Month Sales'|__}}</span>
                    <span class=\"kt-widget26__number ml-md-4 color-success\"><span class=\"kt-currency_before\"></span>{{CurrentMonthSales}}<span class=\"kt-currency_after\"></span></span>
                </div>
                <div class=\"kt-widget26__chart\" style=\"height:200px; width: 100%;\">
                    <canvas id=\"kt_chart_quick_stats_2\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"col-sm-12 col-md-4\">
    <div class=\"kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-dark\">
        <div class=\"kt-portlet__body kt-portlet__body--fluid\">
            <div class=\"kt-widget26\">
                <div class=\"kt-widget26__content flex-md-row\">
                    <span class=\"kt-widget26__desc\">{{'Delayed Shipping Percentage'|__}}</span>
                    <span class=\"kt-widget26__number ml-md-4 kt-font-danger\">{{shipping}}% </span>
                </div>
                <div class=\"kt-widget26__chart\" style=\"height:200px; width: 100%;\">
                    <canvas id=\"kt_chart_quick_stats_3\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function quickStats(){
    _initSparklineChart(\$('#kt_chart_quick_stats_1'), [{{PendingPaymentsChart}}], KTApp.getStateColor('warning'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_2'), [{{CurrentMonthSalesChart}}], KTApp.getStateColor('success'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_3'), [{{shippingChart}}], KTApp.getStateColor('danger'), 3);
}
</script>", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/chartswidget.htm", "");
    }
}
