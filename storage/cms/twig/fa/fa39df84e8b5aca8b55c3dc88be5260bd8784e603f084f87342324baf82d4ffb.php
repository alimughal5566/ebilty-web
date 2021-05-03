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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/containers.htm */
class __TwigTemplate_6e869e0652a006d30983aecc8c8babddbe55ebc1abd269eef2061726b4587b58 extends \Twig\Template
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
        echo "<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 6) == 5)) {
            // line 7
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 8
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 8) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8) == "saved"))) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>";
            // line 9
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
            echo "
                    </a>
                </li>
                ";
        }
        // line 13
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) == "requests")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>";
        // line 15
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Request"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 19), "type", [], "any", false, false, false, 19) == "registered")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#registered\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>";
        // line 20
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Registered"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24) == "loaded")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#loaded\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>";
        // line 25
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loaded"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 29), "type", [], "any", false, false, false, 29) == "released")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#released\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>";
        // line 30
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Released"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 34), "type", [], "any", false, false, false, 34) == "blocked")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#blocked\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Blocked"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 39
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "all") || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39)))) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>";
        // line 40
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Containers"]);
        echo "
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 48) == 5)) {
            // line 49
            echo "                <div class=\"tab-pane  ";
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 49), "type", [], "any", false, false, false, 49)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 49) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 49), "type", [], "any", false, false, false, 49) == "saved"))) {
                echo "active";
            }
            echo "\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            ";
        }
        // line 53
        echo "            <div class=\"tab-pane  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 53), "type", [], "any", false, false, false, 53) == "requests")) {
            echo "active";
        }
        echo "\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane  ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 56), "type", [], "any", false, false, false, 56) == "registered")) {
            echo "active";
        }
        echo "\" id=\"registered\" role=\"tabpanel\">
                <div class=\"kt-datatable-registered\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 59), "type", [], "any", false, false, false, 59) == "loaded")) {
            echo "active";
        }
        echo "\" id=\"loaded\" role=\"tabpanel\">
                <div class=\"kt-datatable-loaded\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 62), "type", [], "any", false, false, false, 62) == "released")) {
            echo "active";
        }
        echo "\" id=\"released\" role=\"tabpanel\">
                <div class=\"kt-datatable-released\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 65), "type", [], "any", false, false, false, 65) == "blocked")) {
            echo "active";
        }
        echo "\" id=\"blocked\" role=\"tabpanel\">
                <div class=\"kt-datatable-blocked\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 68
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 68), "type", [], "any", false, false, false, 68)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 68), "type", [], "any", false, false, false, 68) == "all"))) {
            echo "active";
        }
        echo "\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->

<!-- statuses modal -->
<div class=\"modal fade\" id=\"change_status\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 81
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Containers Statuses"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 86
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onEditStatus", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"containers_statuses_id\" class=\"form-control\" name=\"ids\" />
                        ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 90) != 4)) {
            // line 91
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 92
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"status_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["containerStatuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 96
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 96), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 96), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                                </select>
                            </div>
                        ";
        }
        // line 101
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 104
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 105
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
        echo "</button>
                </div>
            ";
        // line 107
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>


";
        // line 113
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 114
        echo "<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"";
        // line 140
        echo url("dashboard/containers");
        echo "/'+row.id+'/view\">'+row.container_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
        // line 145
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Container Details"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                       // alert(data);
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 153)) {
            echo url("dashboard/clients");
            echo "/'+data.customer.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customer"]);
        echo ":</b> ' + data.customer.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 154
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.destination.name + '</span>';    
                       
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"cc\",
                    title: \"";
        // line 164
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cc"]);
        echo "\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        if(data.cc == 1 )
                            return '<a href=\"javascript:;\">";
        // line 169
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
        echo "</a>';
                        else
                            return '<a href=\"javascript:;\">";
        // line 171
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"";
        // line 176
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.status == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 181
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                        }

                        return output;
                    }
                },
                {
                    field: \"loading_date\",
                    title: \"";
        // line 191
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"";
        // line 198
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 204
        echo url("dashboard/containers");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View container"]);
        echo "\"><i class=\"la la-eye\"></i></button>';
                            ";
        // line 205
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "container", 1 => "u"], "method", false, false, false, 205) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 205) != 5))) {
            // line 206
            echo "                                if(data.status.equal   ==  2 || data.status.equal == 3 ){
                                    output += '<a href=\"";
            // line 207
            echo url("dashboard/containers");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Container"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 210
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 210) == 5)) {
            // line 211
            echo "                                if((data.status.equal   ==  1 ) && data.customer == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 211), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 212
            echo url("dashboard/containers");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Container"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 215
        echo "                                if((data.status.equal   !=  1 && data.status.equal   !=  2 && data.status.equal != 3)){
                                    output += '<a href=\"";
        // line 216
        echo url("dashboard/containers");
        echo "/'+data.id+'/print/container\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Container"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "container", 1 => "u"], "method", false, false, false, 218)) {
            // line 219
            echo "                                if((data.status.equal   ==  1 || data.status.equal   ==  2 || data.status.equal == 3)){
                                    output += '<a href=\"";
            // line 220
            echo url("dashboard/containers");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 223
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received


                            ";
        // line 226
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "container", 1 => "u"], "method", false, false, false, 226) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 226) != 5))) {
            // line 227
            echo "                                // if((data.status.equal   ==  1 || data.status.equal   ==  2 || data.status.equal   ==  3)){
                                //     output += '<a href=\"";
            // line 228
            echo url("dashboard/containers");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                // }
                            ";
        }
        // line 231
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 231)) {
            // line 232
            echo "                                if(data.status.equal   ==  1 || data.status.equal == 2 || data.status.equal == 3){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 233
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Container"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 236
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 236) == 5)) {
            // line 237
            echo "                                if((data.status.equal   ==  2 ) && data.customer == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 237), "html", null, true);
            echo "){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 238
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Container"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 241
        echo "                        '</div>';

                        return output;
                    }
                },
            ]
   
       datatable = \$('.kt-datatable-'+type).KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 251
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 252
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 258
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 259
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 260
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 261
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 262
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 263
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 264
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            info: \"";
        // line 267
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Displaying"]);
        echo " ";
        echo "{{";
        echo "start";
        echo "}}";
        echo " - ";
        echo "{{";
        echo "end";
        echo "}}";
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["records"]);
        echo "\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '";
        // line 292
        echo url("api/containers");
        echo "/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 365
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info-\",

                    confirmButtonText: \"";
        // line 368
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 372
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 377
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 378
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 381
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 388
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 389
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 392
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }
    // selected records status update
    var selectedFilter = function () {
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 420
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 423
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 427
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 435
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 436
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 439
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 449
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 450
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 453
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
        

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 466
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    ";
        // line 531
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 531), "type", [], "any", false, false, false, 531))) {
            // line 532
            echo "        KTAppUserListDatatable.init('all');
    ";
        } else {
            // line 534
            echo "        KTAppUserListDatatable.init('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 534), "type", [], "any", false, false, false, 534), "html", null, true);
            echo "');
    ";
        }
        // line 536
        echo "
    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '";
        // line 540
        echo url((($context["currentLang"] ?? null) . "/dashboard/containers"));
        echo "/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'registered'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 542
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Registered Containers"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'loaded'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 544
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loaded Containers"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'released'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 546
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Released Containers"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'blocked'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 548
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Blocked Containers"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 550
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Containers"]);
        echo "');
        }

        var url = '";
        // line 553
        echo url("dashboard/containers");
        echo "/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '";
        // line 568
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

    });


    
});
</script>
";
        // line 113
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/containers.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1008 => 113,  993 => 568,  975 => 553,  969 => 550,  964 => 548,  959 => 546,  954 => 544,  949 => 542,  944 => 540,  938 => 536,  932 => 534,  928 => 532,  926 => 531,  858 => 466,  842 => 453,  836 => 450,  832 => 449,  819 => 439,  813 => 436,  809 => 435,  798 => 427,  791 => 423,  783 => 420,  752 => 392,  746 => 389,  742 => 388,  732 => 381,  726 => 378,  722 => 377,  714 => 372,  707 => 368,  699 => 365,  623 => 292,  581 => 267,  575 => 264,  571 => 263,  567 => 262,  563 => 261,  559 => 260,  555 => 259,  551 => 258,  542 => 252,  538 => 251,  526 => 241,  520 => 238,  515 => 237,  512 => 236,  506 => 233,  503 => 232,  500 => 231,  492 => 228,  489 => 227,  487 => 226,  482 => 223,  474 => 220,  471 => 219,  469 => 218,  462 => 216,  459 => 215,  451 => 212,  446 => 211,  443 => 210,  435 => 207,  432 => 206,  430 => 205,  424 => 204,  415 => 198,  405 => 191,  392 => 181,  384 => 176,  376 => 171,  371 => 169,  363 => 164,  350 => 154,  339 => 153,  328 => 145,  320 => 140,  313 => 136,  289 => 114,  287 => 113,  278 => 107,  273 => 105,  269 => 104,  264 => 101,  259 => 98,  248 => 96,  244 => 95,  238 => 92,  235 => 91,  233 => 90,  226 => 86,  218 => 81,  200 => 68,  192 => 65,  184 => 62,  176 => 59,  168 => 56,  159 => 53,  149 => 49,  147 => 48,  136 => 40,  130 => 39,  123 => 35,  117 => 34,  110 => 30,  104 => 29,  97 => 25,  91 => 24,  84 => 20,  78 => 19,  71 => 15,  65 => 14,  62 => 13,  55 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                {% if user.role_id == 5 %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>{{'Saved'|__}}
                    </a>
                </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if  this.param.type == 'requests' %}active{% endif %}\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>{{'New Request'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'registered' %}active{% endif %}\" data-toggle=\"tab\" href=\"#registered\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>{{'Registered'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'loaded' %}active{% endif %}\" data-toggle=\"tab\" href=\"#loaded\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>{{\"Loaded\"|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'released' %}active{% endif %}\" data-toggle=\"tab\" href=\"#released\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>{{'Released'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'blocked' %}active{% endif %}\" data-toggle=\"tab\" href=\"#blocked\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>{{'Blocked'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type == 'all' or this.param.type is empty) %}active{% endif %}\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>{{'All Containers'|__}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            {% if user.role_id == 5 %}
                <div class=\"tab-pane  {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            {% endif %}
            <div class=\"tab-pane  {% if  this.param.type == 'requests' %}active{% endif %}\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane  {% if this.param.type == 'registered' %}active{% endif %}\" id=\"registered\" role=\"tabpanel\">
                <div class=\"kt-datatable-registered\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'loaded' %}active{% endif %}\" id=\"loaded\" role=\"tabpanel\">
                <div class=\"kt-datatable-loaded\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'released' %}active{% endif %}\" id=\"released\" role=\"tabpanel\">
                <div class=\"kt-datatable-released\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'blocked' %}active{% endif %}\" id=\"blocked\" role=\"tabpanel\">
                <div class=\"kt-datatable-blocked\"></div>
            </div>
            <div class=\"tab-pane {% if (this.param.type is empty or this.param.type == 'all') %}active{% endif %}\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->

<!-- statuses modal -->
<div class=\"modal fade\" id=\"change_status\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Edit Containers Statuses'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onEditStatus', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"containers_statuses_id\" class=\"form-control\" name=\"ids\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"status_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for status in containerStatuses %}
                                        <option value=\"{{status.id}}\">{{status.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Update'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>


{% put scripts %}
<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"{{'Tracking'|__}}\",
                    sortable: true,
                    width: 100,
                    template: function(row) {
                        return '<a href=\"{{url('dashboard/containers')}}/'+row.id+'/view\">'+row.container_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"{{'Container Details'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                       // alert(data);
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.customer.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Customer\"|__}}:</b> ' + data.customer.name + '</a>\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.destination.name + '</span>';    
                       
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                    }
                },
                {
                    field: \"cc\",
                    title: \"{{'Cc'|__}}\",
                    sortable: false,
                    width: 100,
                    template: function(data, i) {
                        if(data.cc == 1 )
                            return '<a href=\"javascript:;\">{{\"Yes\"|__}}</a>';
                        else
                            return '<a href=\"javascript:;\">{{\"No\"|__}}</a>';
                    }
                },
                {
                    field: \"status\",
                    title: \"{{'Status'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.status == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                        }else{
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                        }

                        return output;
                    }
                },
                {
                    field: \"loading_date\",
                    title: \"{{'Date'|__}}\",
                    sortable: false,
                    width: 100,
                },
                {
                    field: \"Actions\",
                    width: 100,
                    title: \"{{'Actions'|__}}\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"{{url(\"dashboard/containers\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View container\"|__}}\"><i class=\"la la-eye\"></i></button>';
                            {% if user.hasUserPermission('container', 'u') and user.role_id != 5 %}
                                if(data.status.equal   ==  2 || data.status.equal == 3 ){
                                    output += '<a href=\"{{url(\"dashboard/containers\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Container\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.status.equal   ==  1 ) && data.customer == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/containers\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Container\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.status.equal   !=  1 && data.status.equal   !=  2 && data.status.equal != 3)){
                                    output += '<a href=\"{{url(\"dashboard/containers\")}}/'+data.id+'/print/container\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Container\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('container', 'u') %}
                                if((data.status.equal   ==  1 || data.status.equal   ==  2 || data.status.equal == 3)){
                                    output += '<a href=\"{{url(\"dashboard/containers\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received


                            {% if user.hasUserPermission('container', 'u') and user.role_id != 5 %}
                                // if((data.status.equal   ==  1 || data.status.equal   ==  2 || data.status.equal   ==  3)){
                                //     output += '<a href=\"{{url(\"dashboard/containers\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                // }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') %}
                                if(data.status.equal   ==  1 || data.status.equal == 2 || data.status.equal == 3){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Container\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.status.equal   ==  2 ) && data.customer == {{user.id}}){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Container\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    }
                },
            ]
   
       datatable = \$('.kt-datatable-'+type).KTDatatable({
            translate: {
                records: {
                    processing: '{{\"Please wait\"|__}}...',
                    noRecords: '{{\"No records found\"|__}}'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '{{\"First\"|__}}',
                                prev: '{{\"Previous\"|__}}',
                                next: '{{\"Next\"|__}}',
                                last: '{{\"Last\"|__}}',
                                more: '{{\"More pages\"|__}}',
                                input: '{{\"Page number\"|__}}',
                                select: '{{\"Select page size\"|__}}'
                            },

                            info: \"{{\"Displaying\"|__}} {{ '{{' }}start{{ '}}' }} - {{ '{{' }}end{{ '}}' }} {{\"of\"|__}} {{total}} {{\"records\"|__}}\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '{{url(\"api/containers\")}}/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to update\"|__}} \" + ids.length + \" {{\"selected records status to\"|__}} \" + status + \" ?\",
                    type: \"info-\",

                    confirmButtonText: \"{{\"Yes, update\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '{{\"Deleted\"|__}}!',
                            text: '{{\"Your selected records statuses have been updated\"|__}}!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records statuses have not been updated\"|__}}!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }
    // selected records status update
    var selectedFilter = function () {
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure to delete'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes, delete!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Deleted!\"|__}}',
                                    text: '{{\"Your selected records have been deleted! :(\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records have not been deleted! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
        

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' {{\"Total\"|__}}');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    {% if this.param.type is empty %}
        KTAppUserListDatatable.init('all');
    {% else %}
        KTAppUserListDatatable.init('{{this.param.type}}');
    {% endif %}

    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '{{url(currentLang~\"/dashboard/containers\")}}/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'registered'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Registered Containers\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'loaded'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Loaded Containers\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'released'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Released Containers\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'blocked'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Blocked Containers\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"All Containers\"|__}}');
        }

        var url = '{{url(\"dashboard/containers\")}}/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '{{\"Processing, please wait\"|__}}...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

    });


    
});
</script>
{% endput %}", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/containers.htm", "");
    }
}
