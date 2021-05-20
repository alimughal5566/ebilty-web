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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/pages/bid.htm */
class __TwigTemplate_03b8b9e1f54fd836300d9e0ae7acce8377ec2d8c3d8918f1fb77e34c5c309216 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <div>
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Bid By</th>
                                    <th>Bid Route</th>
                                    <th>Bid Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bids"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bid"]) {
            // line 25
            echo "                                <tr>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "route", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bid_amount", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td><button type=\"button\" onclick=\"setStatus('";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bidid", [], "any", false, false, false, 29), "html", null, true);
            echo "')\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-check\"></i></button>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function setStatus(id) {
        \$.ajax({
            url: \"";
        // line 45
        echo url("api/set/bid/status");
        echo "\",
            type: \"POST\",
            data: {'id': id},
            success: function (result) {
                location.reload()
            },
            error: function (request, status, error) {
                alert(request.responseText);
                \$('#showBidModal').modal('hide')
            }
        })
    }
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/bid.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 45,  90 => 32,  81 => 29,  77 => 28,  73 => 27,  69 => 26,  66 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <div>
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Bid By</th>
                                    <th>Bid Route</th>
                                    <th>Bid Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for bid in bids %}
                                <tr>
                                    <td>{{bid.name}}</td>
                                    <td>{{bid.route}}</td>
                                    <td>{{bid.bid_amount}}</td>
                                    <td><button type=\"button\" onclick=\"setStatus('{{bid.bidid}}')\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-check\"></i></button>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function setStatus(id) {
        \$.ajax({
            url: \"{{url('api/set/bid/status')}}\",
            type: \"POST\",
            data: {'id': id},
            success: function (result) {
                location.reload()
            },
            error: function (request, status, error) {
                alert(request.responseText);
                \$('#showBidModal').modal('hide')
            }
        })
    }
</script>", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/bid.htm", "");
    }
}
