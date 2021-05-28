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

/* C:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/mybids.htm */
class __TwigTemplate_f7f463a2a53265384815a0a3e2991a706f646ee5edd6ceb81494b1fa53cf2ca5 extends \Twig\Template
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
            echo "
                                        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 41) == 1)) {
                // line 42
                echo "                                        <small class=\"text-success\">(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_amount_shipper", [], "any", false, false, false, 42), "html", null, true);
                echo ")</small>
                                        ";
            }
            // line 44
            echo "                                    </td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "city", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "street", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "bid_status", [], "any", false, false, false, 47) == 1)) ? ("Approved") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "bid_status", [], "any", false, false, false, 47) == 0)) ? ("Pending") : ("Declined"))));
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "stat", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_amount_shipper", [], "any", false, false, false, 50) != "")) {
                // line 51
                echo "                                             <a style=\"border-radius: 2px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus2('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bidid", [], "any", false, false, false, 51), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bid_amount", [], "any", false, false, false, 51), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_amount_shipper", [], "any", false, false, false, 51), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 51), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_comment", [], "any", false, false, false, 51), "html", null, true);
                echo "')\" class=\"btn btn-font-danger ";
                echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 51) == 1)) ? ("btn-success") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 51) == 2)) ? ("btn-danger") : ("btn-warning"))));
                echo " px-2 w-auto delete_record kt-font-light btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 51) == 1)) ? ("Price revision accepted") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 51) == 2)) ? ("Price revision rejected") : ("Revision request received"))));
                echo "\">revision</a></td>
                                         ";
            }
            // line 53
            echo "
                                        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["bid"], "bid_status", [], "any", false, false, false, 54) == 1)) {
                // line 55
                echo "                                            <div class=\"form-group col-lg-12 car_container\">
                                                <select class=\"form-control \" id=\"car_id_";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 56), "html", null, true);
                echo "\" name=\"car_id\" data-live-search=\"true\"  onchange=\"setStatus('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 56), "html", null, true);
                echo "')\">
                                                    <option ></option>
                                                    ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cars"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                    // line 59
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 59), "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 59) == twig_get_attribute($this->env, $this->source, $context["bid"], "stats", [], "any", false, false, false, 59))) ? ("selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "name", [], "any", false, false, false, 59), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                                                </select>
                                            </div>
                                        ";
            }
            // line 64
            echo "                                    </td>
<!--                                            ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["bid"], "stats", [], "any", false, false, false, 65) == 3)) {
                echo "-->
<!--                                    <td><button type=\"button\" onclick=\"setStatus('";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "order_id", [], "any", false, false, false, 66), "html", null, true);
                echo "')\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-check\"></i></button> </td>-->
<!--                                        ";
            }
            // line 67
            echo "-->
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"showModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Revision request</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>

            <div class=\"modal-body\">
                <div class=\"d-none beds\">
                    <lable for=\"bid_price\">My Bidded Amount
                        <input type=\"number\" id=\"prev\" name=\"prev\" class=\"form-control\" min=\"1\" placeholder=\"My Entered Amount\" readonly >
                    </lable>
                </div>
                <div>
                    <lable for=\"bid_price\">Amount to be revised
                        <input type=\"number\" id=\"amt\" name=\"bid_amt\" class=\"form-control\" min=\"1\" placeholder=\"Revision amount\" readonly>
                        <input type=\"hidden\" id=\"bedid\" name=\"bedid\" >
                    </lable>
                </div>

                <div>
                    <lable for=\"bid_price\">Comment
                        <textarea name=\"cmt\" id=\"cmt\" cols=\"10\" rows=\"5\" class=\"form-control\" required></textarea>
                    </lable>
                </div>

                <h4 class=\"pt-2 mb-0\">Revision</h4>
                <div class=\"d-flex \">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <lable for=\"111\">Accept
                        <input type=\"radio\" name=\"stat\" id=\"111\" class=\"form-control btn-sm state\" value=\"1\" style=\"font-size: 0.1rem\" >
                    </lable> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <lable for=\"11\">Reject
                        <input type=\"radio\" checked name=\"stat\" id=\"11\" class=\"form-control btn-sm state\" value=\"2\" style=\"font-size: 0.1rem\">
                    </lable>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary sbmet\" onclick=\"sav()\">Submit request</button>
            </div>
        </div>
    </div>
</div>
<script>

    function setStatus2(id,amount,revised_amount,revise_status,revise_comment){
        // alert(revise_comment);
        if(revised_amount!=''){
            \$('.beds').removeClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val(revised_amount);

        }else {
            \$('.sbmet').removeClass('d-none');
            \$('.beds').addClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val('');
        }
        \$('#bedid').val(id);
        if(revise_status=='2'|| revise_status=='1'){
            if(revise_status==1){
                \$(\"#111\").prop(\"checked\",\"true\")
                \$(\"#11\").removeAttr(\"checked\")
            }else if(revise_status==2){
                \$(\"#111\").prop(\"checked\",\"true\")
                \$(\"#11\").prop(\"checked\",\"false\")
            }
            if(revise_comment!=''){
               \$('#cmt').val(revise_comment)
            }

            \$('.sbmet').addClass('d-none');
        }else{
            \$('.sbmet').removeClass('d-none');
        }
        \$('#showModal').modal('show')
    }

    function setStatus(id) {
        var result =confirm(\"Are you sure you want to update the status of shipment?\" );
        if (result) {
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

    }

    function sav() {
        if(\$('#cmt').val()==''){
            \$('#cmt').addClass('border-danger');
            return ;
        }
        var status = \$('.state:checked').val();
        var cmt = \$('#cmt').val();

        \$('#cmt').removeClass('border-danger');
        \$.ajax({
            url: \"/api/update/revise/bid\",
            type: \"POST\",
            data: {'bid_id': \$('#bedid').val() , 'status': status, 'comment': cmt},
            success: function (result){
                swal.fire(
                    'Action Successfull',
                    'Revision updated successfully.',
                    'success'
                )
                \$('#showModal').modal('hide')
            },
            error: function (request, status, error) {
                // swal.fire(
                //     'Already bidds',
                //     'Please waits for approval.',
                //     'warning');
                //
                // \$('#showModal').modal('hide')
            }
        })
    }





</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/mybids.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 70,  204 => 67,  199 => 66,  195 => 65,  192 => 64,  187 => 61,  174 => 59,  170 => 58,  163 => 56,  160 => 55,  158 => 54,  155 => 53,  137 => 51,  135 => 50,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  115 => 44,  109 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  77 => 34,  73 => 32,  69 => 31,  37 => 1,);
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
                                    <td>{{bid.bid_amount}}
                                        {% if  bid.revise_status ==1 %}
                                        <small class=\"text-success\">({{bid.revise_amount_shipper}})</small>
                                        {% endif %}
                                    </td>
                                    <td>{{bid.city}}</td>
                                    <td>{{bid.street}}</td>
                                    <td>{{(bid.bid_status==1)?\"Approved\":((bid.bid_status==0)?\"Pending\":\"Declined\")}}</td>
                                    <td>{{bid.stat}}</td>
                                    <td>
                                        {% if  bid.revise_amount_shipper !='' %}
                                             <a style=\"border-radius: 2px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus2('{{bid.bidid}}','{{bid.bid_amount}}','{{bid.revise_amount_shipper}}','{{bid.revise_status}}','{{bid.revise_comment}}')\" class=\"btn btn-font-danger {{(bid.revise_status==1)?'btn-success':((bid.revise_status==2)?'btn-danger':'btn-warning')}} px-2 w-auto delete_record kt-font-light btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{(bid.revise_status==1)?'Price revision accepted':((bid.revise_status==2)?'Price revision rejected':'Revision request received')}}\">revision</a></td>
                                         {% endif %}

                                        {% if  bid.bid_status == 1 %}
                                            <div class=\"form-group col-lg-12 car_container\">
                                                <select class=\"form-control \" id=\"car_id_{{bid.order_id}}\" name=\"car_id\" data-live-search=\"true\"  onchange=\"setStatus('{{bid.order_id}}')\">
                                                    <option ></option>
                                                    {% for car in cars %}
                                                    <option value=\"{{car.id}}\" {{(car.id==bid.stats)?\"selected\":\"\"}}>{{car.name}}</option>
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

<div class=\"modal fade\" id=\"showModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Revision request</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>

            <div class=\"modal-body\">
                <div class=\"d-none beds\">
                    <lable for=\"bid_price\">My Bidded Amount
                        <input type=\"number\" id=\"prev\" name=\"prev\" class=\"form-control\" min=\"1\" placeholder=\"My Entered Amount\" readonly >
                    </lable>
                </div>
                <div>
                    <lable for=\"bid_price\">Amount to be revised
                        <input type=\"number\" id=\"amt\" name=\"bid_amt\" class=\"form-control\" min=\"1\" placeholder=\"Revision amount\" readonly>
                        <input type=\"hidden\" id=\"bedid\" name=\"bedid\" >
                    </lable>
                </div>

                <div>
                    <lable for=\"bid_price\">Comment
                        <textarea name=\"cmt\" id=\"cmt\" cols=\"10\" rows=\"5\" class=\"form-control\" required></textarea>
                    </lable>
                </div>

                <h4 class=\"pt-2 mb-0\">Revision</h4>
                <div class=\"d-flex \">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <lable for=\"111\">Accept
                        <input type=\"radio\" name=\"stat\" id=\"111\" class=\"form-control btn-sm state\" value=\"1\" style=\"font-size: 0.1rem\" >
                    </lable> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <lable for=\"11\">Reject
                        <input type=\"radio\" checked name=\"stat\" id=\"11\" class=\"form-control btn-sm state\" value=\"2\" style=\"font-size: 0.1rem\">
                    </lable>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary sbmet\" onclick=\"sav()\">Submit request</button>
            </div>
        </div>
    </div>
</div>
<script>

    function setStatus2(id,amount,revised_amount,revise_status,revise_comment){
        // alert(revise_comment);
        if(revised_amount!=''){
            \$('.beds').removeClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val(revised_amount);

        }else {
            \$('.sbmet').removeClass('d-none');
            \$('.beds').addClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val('');
        }
        \$('#bedid').val(id);
        if(revise_status=='2'|| revise_status=='1'){
            if(revise_status==1){
                \$(\"#111\").prop(\"checked\",\"true\")
                \$(\"#11\").removeAttr(\"checked\")
            }else if(revise_status==2){
                \$(\"#111\").prop(\"checked\",\"true\")
                \$(\"#11\").prop(\"checked\",\"false\")
            }
            if(revise_comment!=''){
               \$('#cmt').val(revise_comment)
            }

            \$('.sbmet').addClass('d-none');
        }else{
            \$('.sbmet').removeClass('d-none');
        }
        \$('#showModal').modal('show')
    }

    function setStatus(id) {
        var result =confirm(\"Are you sure you want to update the status of shipment?\" );
        if (result) {
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

    }

    function sav() {
        if(\$('#cmt').val()==''){
            \$('#cmt').addClass('border-danger');
            return ;
        }
        var status = \$('.state:checked').val();
        var cmt = \$('#cmt').val();

        \$('#cmt').removeClass('border-danger');
        \$.ajax({
            url: \"/api/update/revise/bid\",
            type: \"POST\",
            data: {'bid_id': \$('#bedid').val() , 'status': status, 'comment': cmt},
            success: function (result){
                swal.fire(
                    'Action Successfull',
                    'Revision updated successfully.',
                    'success'
                )
                \$('#showModal').modal('hide')
            },
            error: function (request, status, error) {
                // swal.fire(
                //     'Already bidds',
                //     'Please waits for approval.',
                //     'warning');
                //
                // \$('#showModal').modal('hide')
            }
        })
    }





</script>", "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/mybids.htm", "");
    }
}
