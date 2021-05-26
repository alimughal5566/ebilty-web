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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/pages/mybids.htm */
class __TwigTemplate_f07bea30aadc6604f5bedc81257c6a1cb6398ee998bd5f7beedf8a463af259e7 extends \Twig\Template
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
                                    <th>Shipment id</th>
                                    <th>User</th>
                                    <th>Delivery Date</th>
                                    <th>Bid Route</th>
                                    <th>Bid Amount</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Bid Status</th>
                                    <th>Shipping Status</th>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bids"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bid"]) {
            // line 32
            echo "                                <tr>
                                    <td>
<!--                                    <a href=\"/en/dashboard/shipments/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 34), "html", null, true);
            echo "/view\" > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></td>-->
                                    <a > ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 35), "html", null, true);
            echo "</a></td>
<!--                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["this"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["settings"] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["tracking"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["prefix_order"] ?? null) : null), "bid", [], "any", false, false, false, 36), "order_id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>-->
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "delivery_date", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "route", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bid_amount", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "city", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "street", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "bid_status", [], "any", false, false, false, 43) == 1)) ? ("Approved") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "bid_status", [], "any", false, false, false, 43) == 0)) ? ("Pending") : ("Declined"))));
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "stat", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["bid"], "bid_status", [], "any", false, false, false, 46) == 1)) {
                // line 47
                echo "                                        <div class=\"form-group col-lg-12 car_container\">
                                            <select class=\"form-control \" id=\"car_id_";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 48), "html", null, true);
                echo "\" name=\"car_id\" data-live-search=\"true\"  onchange=\"setStatus('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 48), "html", null, true);
                echo "')\">
                                                <option ></option>
                                                ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cars"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                    // line 51
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 51), "html", null, true);
                    echo "\"  ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 51) == twig_get_attribute($this->env, $this->source, $context["bid"], "stats", [], "any", false, false, false, 51))) ? ("selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "name", [], "any", false, false, false, 51), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                                            </select>
                                        </div>
                                        ";
            }
            // line 56
            echo "                                    </td>

<!--                                            ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["bid"], "stats", [], "any", false, false, false, 58) == 3)) {
                echo "-->
<!--                                    <td><button type=\"button\" onclick=\"setStatus('";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 59), "html", null, true);
                echo "')\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-check\"></i></button> </td>-->
<!--                                        ";
            }
            // line 60
            echo "-->
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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

        // alert(id)
        var result =confirm(\"Are you sure you want to update the status of shipment?\" );
        if (result) {
// alert(\$('#car_id').val());
            \$.request('onChangefees1', {
                method: 'post',
                data: {id: id,status:\$('#car_id_'+id).val()},
                success: function (response, status, xhr, \$form) {

                    console.log(response);

                    swal.fire({
                        title: 'Status updated successfully',
                        type: 'success',
                    });
                    setTimeout(function(){ location.reload() },1000);

                }
            });
        }

    };





</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/mybids.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 63,  171 => 60,  166 => 59,  162 => 58,  158 => 56,  153 => 53,  140 => 51,  136 => 50,  129 => 48,  126 => 47,  124 => 46,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  77 => 34,  73 => 32,  69 => 31,  37 => 1,);
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
                                    <th>Shipment id</th>
                                    <th>User</th>
                                    <th>Delivery Date</th>
                                    <th>Bid Route</th>
                                    <th>Bid Amount</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Bid Status</th>
                                    <th>Shipping Status</th>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for bid in bids %}
                                <tr>
                                    <td>
<!--                                    <a href=\"/en/dashboard/shipments/{{bid.order_id}}/view\" > {{bid.order_id}}</a></td>-->
                                    <a > {{bid.order_id}}</a></td>
<!--                                    <td>{{this['settings']['tracking']['prefix_order'].bid.order_id}}</td>-->
                                    <td>{{bid.name}}</td>
                                    <td>{{bid.delivery_date}}</td>
                                    <td>{{bid.route}}</td>
                                    <td>{{bid.bid_amount}}</td>
                                    <td>{{bid.city}}</td>
                                    <td>{{bid.street}}</td>
                                    <td>{{(bid.bid_status==1)?\"Approved\":((bid.bid_status==0)?\"Pending\":\"Declined\")}}</td>
                                    <td>{{bid.stat}}</td>
                                    <td>
                                        {% if  bid.bid_status == 1 %}
                                        <div class=\"form-group col-lg-12 car_container\">
                                            <select class=\"form-control \" id=\"car_id_{{bid.order_id}}\" name=\"car_id\" data-live-search=\"true\"  onchange=\"setStatus('{{bid.order_id}}')\">
                                                <option ></option>
                                                {% for car in cars %}
                                                <option value=\"{{car.id}}\"  {{(car.id==bid.stats)?\"selected\":\"\"}}>{{car.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        {% endif %}
                                    </td>

<!--                                            {% if bid.stats == 3 %}-->
<!--                                    <td><button type=\"button\" onclick=\"setStatus('{{bid.order_id}}')\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-check\"></i></button> </td>-->
<!--                                        {% endif %}-->
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

        // alert(id)
        var result =confirm(\"Are you sure you want to update the status of shipment?\" );
        if (result) {
// alert(\$('#car_id').val());
            \$.request('onChangefees1', {
                method: 'post',
                data: {id: id,status:\$('#car_id_'+id).val()},
                success: function (response, status, xhr, \$form) {

                    console.log(response);

                    swal.fire({
                        title: 'Status updated successfully',
                        type: 'success',
                    });
                    setTimeout(function(){ location.reload() },1000);

                }
            });
        }

    };





</script>", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/mybids.htm", "");
    }
}
