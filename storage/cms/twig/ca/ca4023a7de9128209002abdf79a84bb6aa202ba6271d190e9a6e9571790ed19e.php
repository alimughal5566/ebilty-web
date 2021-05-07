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

/* D:\Project\ebilty-web/themes/spotlayer/pages/bid.htm */
class __TwigTemplate_da861e2fd37d2ae6e0acb722b939053c384bedb486e9b55a302e2dc5d38bf778 extends \Twig\Template
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
        echo "<?php
function onStart() {
\$bids = \\Spot\\Shipment\\Models\\Bid::all();
dd(\$bids);
}
?>

<div class=\"row\">
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
                                <tr>
                                    <th>Bid Amount</th>
                                </tr>

                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bids"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bid"]) {
            // line 27
            echo "                                <tr>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bid_amount", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Project\\ebilty-web/themes/spotlayer/pages/bid.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  71 => 28,  68 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
function onStart() {
\$bids = \\Spot\\Shipment\\Models\\Bid::all();
dd(\$bids);
}
?>

<div class=\"row\">
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
                                <tr>
                                    <th>Bid Amount</th>
                                </tr>

                                {% for bid in bids %}
                                <tr>
                                    <td>{{bid.bid_amount}}</td>
                                </tr>
                                {% endfor %}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "D:\\Project\\ebilty-web/themes/spotlayer/pages/bid.htm", "");
    }
}
