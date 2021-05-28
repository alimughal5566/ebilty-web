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

/* C:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/bid.htm */
class __TwigTemplate_9e222151a18aa73175cd2969021fa1c6892befa017ea8b137fdacf4fd2f75d12 extends \Twig\Template
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
            echo "
                                        ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 32) == 1)) {
                // line 33
                echo "                                        <small class=\"text-success\">(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_amount_shipper", [], "any", false, false, false, 33), "html", null, true);
                echo ")</small>
                                        ";
            }
            // line 35
            echo "                                    </td>
                                    <td>";
            // line 36
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 36) == 1)) ? ("Approved") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 36) == 2)) ? ("Declined") : ("Pending"))));
            echo "</td>
                                    <td>
                                    <a style=\"border-radius: 17px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus('";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bidid", [], "any", false, false, false, 38), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 38), "html", null, true);
            echo "')\" class=\"btn btn-warning btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 38) == 1)) ? ("Cancel Bid") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 38) == 2)) ? ("Cancel Bid") : ("Accept Bid"))));
            echo "\"><i class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 38) == 1)) ? ("fa fa-check-double") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "status_approved", [], "any", false, false, false, 38) == 2)) ? ("fa fa-times") : ("fa fa-pause"))));
            echo "\"></i></a>

                                    <a style=\"border-radius: 2px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus2('";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bidid", [], "any", false, false, false, 40), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "bid_amount", [], "any", false, false, false, 40), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_amount_shipper", [], "any", false, false, false, 40), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 40), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "revise_comment", [], "any", false, false, false, 40), "html", null, true);
            echo "')\" class=\"btn btn-font-danger ";
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 40) == 1)) ? ("btn-success") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 40) == 2)) ? ("btn-danger") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_amount_shipper", [], "any", false, false, false, 40) == "")) ? ("btn-warning") : ("btn-info"))))));
            echo " px-2 w-auto delete_record kt-font-light btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 40) == 1)) ? ("Price revision accepted") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_status", [], "any", false, false, false, 40) == 2)) ? ("Price revision rejected") : ((((twig_get_attribute($this->env, $this->source, $context["bid"], "revise_amount_shipper", [], "any", false, false, false, 40) == "")) ? ("Send price revision request") : ("Waiting For revision approvel"))))));
            echo "\">revision</a></td>

                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
                <div>
                    <lable for=\"bid_price\">Amount to be revised
                        <input type=\"number\" id=\"amt\" name=\"bid_amt\" class=\"form-control\" min=\"1\" placeholder=\"Revision amount\" required>
                        <input type=\"hidden\" id=\"bedid\" name=\"bedid\" >
                    </lable>
                </div>
                <div class=\"d-none beds\">
                    <lable for=\"bid_price\">Service Provider Amount
                        <input type=\"number\" id=\"prev\" name=\"prev\" class=\"form-control\" min=\"1\" placeholder=\"Service Provider Amount\" readonly>
                    </lable>
                </div>

                <div class=\"comnt d-none\">
                    <lable for=\"cmt\">Provider Comment
                        <textarea name=\"cmt\" id=\"cmt\" cols=\"10\" rows=\"5\" class=\"form-control\" required></textarea>
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
    function setStatus(id,status) {
        \$.ajax({
            url: \"";
        // line 94
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
                // \$('#showBidModal').modal('hide')
            }
        })
    }

    function setStatus2(id,amount,revised_amount,revise_status,revise_comment){

        if(revise_status==2 || revise_status==1 || revised_amount!=''){
            \$('.beds').removeClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val(revised_amount);
            \$('.sbmet').addClass('d-none');
        }else {
            \$('.sbmet').removeClass('d-none');
            \$('.beds').addClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val('');
        }
      // alert( revise_comment)
        if(revise_status==2 || revise_status==1){
            \$('#cmt').val(revise_comment);
            \$('.comnt').removeClass('d-none');
        }else{
            \$('#cmt').val('');
            \$('.comnt').addClass('d-none');
        }

        \$('#bedid').val(id);
        \$('#showModal').modal('show')

    }



    function sav() {
        if(\$('#amt').val()=='' || \$('#amt').val()<1){
            \$('#amt').addClass('border-danger');
            return ;
        }
        \$('#amt').removeClass('border-danger');
        \$.ajax({
            url: \"/api/revise/bid\",
            type: \"POST\",
            data: {'bid_id': \$('#bedid').val() , 'amt': \$('#amt').val()},
            success: function (result){
                swal.fire(
                    'Action Successfull',
                    'Revision sends successfully.',
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
        return "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/bid.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 94,  136 => 44,  114 => 40,  103 => 38,  98 => 36,  95 => 35,  89 => 33,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  68 => 27,  64 => 26,  37 => 1,);
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
                                    <td>{{bid.bid_amount}}
                                        {% if  bid.revise_status ==1 %}
                                        <small class=\"text-success\">({{bid.revise_amount_shipper}})</small>
                                        {% endif %}
                                    </td>
                                    <td>{{(bid.status_approved==1)?'Approved':((bid.status_approved==2)?'Declined':'Pending')}}</td>
                                    <td>
                                    <a style=\"border-radius: 17px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus('{{bid.bidid}}','{{bid.status_approved}}')\" class=\"btn btn-warning btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{(bid.status_approved==1)?'Cancel Bid':((bid.status_approved==2)?'Cancel Bid':'Accept Bid')}}\"><i class=\"{{(bid.status_approved==1)?'fa fa-check-double':((bid.status_approved==2)?'fa fa-times':'fa fa-pause')}}\"></i></a>

                                    <a style=\"border-radius: 2px !important;\" href=\"javascript:void(0);\" onclick=\"setStatus2('{{bid.bidid}}','{{bid.bid_amount}}','{{bid.revise_amount_shipper}}','{{bid.revise_status}}','{{bid.revise_comment}}')\" class=\"btn btn-font-danger {{(bid.revise_status==1)?'btn-success':((bid.revise_status==2)?'btn-danger':((bid.revise_amount_shipper=='')?'btn-warning':'btn-info'))}} px-2 w-auto delete_record kt-font-light btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{(bid.revise_status==1)?'Price revision accepted':((bid.revise_status==2)?'Price revision rejected':(bid.revise_amount_shipper=='')?'Send price revision request':'Waiting For revision approvel')}}\">revision</a></td>

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
                <div>
                    <lable for=\"bid_price\">Amount to be revised
                        <input type=\"number\" id=\"amt\" name=\"bid_amt\" class=\"form-control\" min=\"1\" placeholder=\"Revision amount\" required>
                        <input type=\"hidden\" id=\"bedid\" name=\"bedid\" >
                    </lable>
                </div>
                <div class=\"d-none beds\">
                    <lable for=\"bid_price\">Service Provider Amount
                        <input type=\"number\" id=\"prev\" name=\"prev\" class=\"form-control\" min=\"1\" placeholder=\"Service Provider Amount\" readonly>
                    </lable>
                </div>

                <div class=\"comnt d-none\">
                    <lable for=\"cmt\">Provider Comment
                        <textarea name=\"cmt\" id=\"cmt\" cols=\"10\" rows=\"5\" class=\"form-control\" required></textarea>
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
                // \$('#showBidModal').modal('hide')
            }
        })
    }

    function setStatus2(id,amount,revised_amount,revise_status,revise_comment){

        if(revise_status==2 || revise_status==1 || revised_amount!=''){
            \$('.beds').removeClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val(revised_amount);
            \$('.sbmet').addClass('d-none');
        }else {
            \$('.sbmet').removeClass('d-none');
            \$('.beds').addClass('d-none');
            \$('#prev').val(amount);
            \$('#amt').val('');
        }
      // alert( revise_comment)
        if(revise_status==2 || revise_status==1){
            \$('#cmt').val(revise_comment);
            \$('.comnt').removeClass('d-none');
        }else{
            \$('#cmt').val('');
            \$('.comnt').addClass('d-none');
        }

        \$('#bedid').val(id);
        \$('#showModal').modal('show')

    }



    function sav() {
        if(\$('#amt').val()=='' || \$('#amt').val()<1){
            \$('#amt').addClass('border-danger');
            return ;
        }
        \$('#amt').removeClass('border-danger');
        \$.ajax({
            url: \"/api/revise/bid\",
            type: \"POST\",
            data: {'bid_id': \$('#bedid').val() , 'amt': \$('#amt').val()},
            success: function (result){
                swal.fire(
                    'Action Successfull',
                    'Revision sends successfully.',
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





</script>", "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/bid.htm", "");
    }
}
