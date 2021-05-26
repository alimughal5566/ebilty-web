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
                                    <th>Shipping Id</th>
                                    <th>Bid By</th>
                                    <th>Bid Route</th>
                                    <th>Bid Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bids"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bid"]) {
            // line 27
            echo "                                <tr>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "route", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bid_amount", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                    <td>";
            // line 32
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 32) == 1)) ? ("Approved") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 32) == 2)) ? ("Declined") : ("Pending"))));
            echo "</td>
                                    <td>
                                    <a style=\"border-radius: 17px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus('";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bidid", [], "any", false, false, false, 34), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 34), "html", null, true);
            echo "')\" class=\"btn btn-warning btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 34) == 1)) ? ("Cancel Bid") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 34) == 2)) ? ("Cancel Bid") : ("Accept Bid"))));
            echo "\"><i class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 34) == 1)) ? ("fa fa-check-double") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 34) == 2)) ? ("fa fa-times") : ("fa fa-pause"))));
            echo "\"></i></a></td>
                              </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
    function setStatus(id,status) {
        \$.ajax({
            url: \"";
        // line 50
        echo url("api/set/bid/status");
        echo "\",
            type: \"POST\",
            data: {'id': id,'status': status},
            success: function (result) {
                swal.fire({
                    title: 'Bid updated successfully',
                    type: 'success',
                });
                setTimeout(function(){ location.reload() },1000);
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
        return array (  122 => 50,  107 => 37,  92 => 34,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  68 => 27,  64 => 26,  37 => 1,);
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
                                    <th>Shipping Id</th>
                                    <th>Bid By</th>
                                    <th>Bid Route</th>
                                    <th>Bid Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for bid in bids %}
                                <tr>
                                    <td>{{bid.id}}</td>
                                    <td>{{bid.name}}</td>
                                    <td>{{bid.route}}</td>
                                    <td>{{bid.bid_amount}}</td>
                                    <td>{{(bid.status_approved==1)?'Approved':((bid.status_approved==2)?'Declined':'Pending')}}</td>
                                    <td>
                                    <a style=\"border-radius: 17px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus('{{bid.bidid}}','{{bid.status_approved}}')\" class=\"btn btn-warning btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{(bid.status_approved==1)?'Cancel Bid':((bid.status_approved==2)?'Cancel Bid':'Accept Bid')}}\"><i class=\"{{(bid.status_approved==1)?'fa fa-check-double':((bid.status_approved==2)?'fa fa-times':'fa fa-pause')}}\"></i></a></td>
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
    function setStatus(id,status) {
        \$.ajax({
            url: \"{{url('api/set/bid/status')}}\",
            type: \"POST\",
            data: {'id': id,'status': status},
            success: function (result) {
                swal.fire({
                    title: 'Bid updated successfully',
                    type: 'success',
                });
                setTimeout(function(){ location.reload() },1000);
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
