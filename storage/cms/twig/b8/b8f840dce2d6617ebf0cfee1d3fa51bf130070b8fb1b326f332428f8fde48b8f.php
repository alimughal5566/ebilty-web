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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/partials/listingwidget.htm */
class __TwigTemplate_aa681cfdf7967fdfe37e0581b52b39fa2e73585a6d2f90efd8914c3896cbaf1e extends \Twig\Template
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
        echo "<div class=\"kt-datatable\"></div>

<script>
function listing(){
    \$('.kt-datatable').KTDatatable({
        translate: {
            records: {
                processing: '";
        // line 8
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                noRecords: '";
        // line 9
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
            },
            toolbar: {
                pagination: {
                    items: {
                        default: {
                            first: '";
        // line 15
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                            prev: '";
        // line 16
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                            next: '";
        // line 17
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                            last: '";
        // line 18
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                            more: '";
        // line 19
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                            input: '";
        // line 20
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                            select: '";
        // line 21
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                        },

                        info: \"";
        // line 24
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
        // line 49
        echo url("api/dashboardshipments");
        echo "',
                    params: {
                      start: '";
        // line 51
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "',
                      end: '";
        // line 52
        echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
        echo "'
                    }
                },
            },
            pageSize: 10, // display 20 records per page
            serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
        },
        // columns definition
        columns: [
            {
                field: \"number\",
                title: \"";
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                sortable: true,
                width: 140,
                template: function(row) {
                    
                    return '<a href=\"";
        // line 70
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 70), "prefix_order", [], "any", false, false, false, 70), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 70), "numbers_order", [], "any", false, false, false, 70), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                }
            },
            {
                field: \"details\",
                title: \"";
        // line 75
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                sortable: false,
                width: 'auto',
                template: function(data, i) {
                    if(data.sender && data.sender.name){
                        var output  = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 83)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>';
                      if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                          output      += '\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 86
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                                }
                    }else{
                        var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 92
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender_name + '</a>';
                      if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                          output      += '\\
                                          <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 95
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                      }
                    }
                    if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                        output      += '\\
                                    <a href=\"";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 100)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>';
                      if(data.shipping_to_area && + data.shipping_to_area != '-'){
                          output      += '\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                      }
                    }else if(data.receiver_name && data.receiver_name != '-'){
                        output  += '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver_name + '</a>';
                        if(data.shipping_to_area && + data.shipping_to_area != '-'){
                            output      += '\\
                                            <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                        }
                    }
                        output      += '\\
                                </div>\\
                            </div>';


                        output  += '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 123
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo ":</b> ' + data.office + '</a>\\
                                    </div>\\
                                </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 129
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo ":</b> ' + data.created_at_date + '</a>\\
                                        </div>\\
                                    </div>';
                    return output;
                }
            },
            {
                field: \"status\",
                title: \"";
        // line 137
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                sortable: false,
                width: 'auto',
                template: function(row) {
                    if(row.requested == 100){
                        var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 142
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                    }else{
                        if(row.status != null){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                        } else {
                            var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                        }
                        if(row.delayed == 1){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 150
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                        }
                        if(row.requested == 10 || row.requested == 11){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 153
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                        }
                        if(row.requested == 12 && row.status.equal != 12){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                        }
                    }

                    return output;
                }
            },
            {
                field: \"Actions\",
                width: 100,
                title: \"";
        // line 166
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                sortable: false,
                overflow: 'visible',
                template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 172
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';


                            ";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 175) != 5)) {
            // line 176
            echo "                                if(data.requested   ==  0 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentApproved btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 177
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approve"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-check\"></i></button>';
                                }
                            ";
        }
        // line 180
        echo "
                            ";
        // line 181
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 181) != 5)) {
            // line 182
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                                    output += '<a href=\"javascript:;\" class=\"assign_employee btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"modal\" data-target=\"#assign_shipmentEmployee\" data-placement=\"top\" title=\"";
            // line 183
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-user\"></i></button>';
                                }
                            ";
        }
        // line 186
        echo "
                            ";
        // line 187
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 187) != 5)) {
            // line 188
            echo "                                if(data.requested   ==  1 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentReceived btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 189
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-arrow-down\"></i></button>';
                                }
                            ";
        }
        // line 192
        echo "

                            ";
        // line 194
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 194) != 5)) {
            // line 195
            echo "                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentDeliveried btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 196
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["set as Deliveried"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-thumbs-o-up\"></i></button>';
                                }
                            ";
        }
        // line 199
        echo "
                            ";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 200) != 5)) {
            // line 201
            echo "                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentPaid btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 202
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-dollar\"></i></button>';
                                }
                            ";
        }
        // line 205
        echo "
                            ";
        // line 206
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 206) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 206) != 5))) {
            // line 207
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"";
            // line 208
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 211
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 211) == 5)) {
            // line 212
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 212), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 213
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 216
        echo "                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"";
        // line 217
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 219)) {
            // line 220
            echo "                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"";
            // line 221
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 224
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 224)) {
            // line 225
            echo "                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"";
            // line 226
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                }
                            ";
        }
        // line 229
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            ";
        // line 231
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 231)) {
            // line 232
            echo "                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"";
            // line 233
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            ";
        }
        // line 236
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 236) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 236) != 5))) {
            // line 237
            echo "                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 238
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 241
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 241) == 5)) {
            // line 242
            echo "                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 242), "html", null, true);
            echo ")){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 243
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 246
        echo "                        '</div>';

                        return output;
                    },
                }

        ]
    });
    \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
    \$('body').on('click','.delete_record',function(){
        var id      = \$(this).attr('rel');
        var type    = \$(this).attr('data-type');
        swal.fire({
            buttonsStyling: false,

            text: \"";
        // line 261
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
            type: \"question\",

            confirmButtonText: \"";
        // line 264
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '";
        // line 268
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
            cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
        }).then(function (result) {
            if (result.value) {
                \$.request('onDelete', {
                    data: {id: id, type: type},
                    success: function(data) {

                        swal.fire({
                            title: '";
        // line 277
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                            text: '";
        // line 278
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 281
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
        // line 291
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                    text: '";
        // line 292
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: '";
        // line 295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                });
            }
        });
    });
}
</script>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/listingwidget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 295,  594 => 292,  590 => 291,  577 => 281,  571 => 278,  567 => 277,  555 => 268,  548 => 264,  542 => 261,  525 => 246,  519 => 243,  514 => 242,  511 => 241,  505 => 238,  502 => 237,  499 => 236,  491 => 233,  488 => 232,  486 => 231,  482 => 229,  474 => 226,  471 => 225,  468 => 224,  460 => 221,  457 => 220,  455 => 219,  448 => 217,  445 => 216,  437 => 213,  432 => 212,  429 => 211,  421 => 208,  418 => 207,  416 => 206,  413 => 205,  407 => 202,  404 => 201,  402 => 200,  399 => 199,  393 => 196,  390 => 195,  388 => 194,  384 => 192,  378 => 189,  375 => 188,  373 => 187,  370 => 186,  364 => 183,  361 => 182,  359 => 181,  356 => 180,  350 => 177,  347 => 176,  345 => 175,  337 => 172,  328 => 166,  315 => 156,  309 => 153,  303 => 150,  292 => 142,  284 => 137,  273 => 129,  264 => 123,  250 => 112,  244 => 109,  235 => 103,  222 => 100,  214 => 95,  208 => 92,  199 => 86,  186 => 83,  175 => 75,  164 => 70,  156 => 65,  140 => 52,  136 => 51,  131 => 49,  89 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-datatable\"></div>

<script>
function listing(){
    \$('.kt-datatable').KTDatatable({
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
                    url: '{{url(\"api/dashboardshipments\")}}',
                    params: {
                      start: '{{start}}',
                      end: '{{end}}'
                    }
                },
            },
            pageSize: 10, // display 20 records per page
            serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
        },
        // columns definition
        columns: [
            {
                field: \"number\",
                title: \"{{'Tracking'|__}}\",
                sortable: true,
                width: 140,
                template: function(row) {
                    
                    return '<a href=\"{{url('dashboard/shipments')}}/'+row.id+'/view\">{{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}'+row.shipping_number+'</a>';
                }
            },
            {
                field: \"details\",
                title: \"{{'Shipment Details'|__}}\",
                sortable: false,
                width: 'auto',
                template: function(data, i) {
                    if(data.sender && data.sender.name){
                        var output  = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.sender.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender.name + '</a>';
                      if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                          output      += '\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                                }
                    }else{
                        var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender_name + '</a>';
                      if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                          output      += '\\
                                          <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                      }
                    }
                    if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                        output      += '\\
                                    <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.receiver.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>{{\"Receiver\"|__}}:</b> ' + data.receiver.name + '</a>';
                      if(data.shipping_to_area && + data.shipping_to_area != '-'){
                          output      += '\\
                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"To\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                      }
                    }else if(data.receiver_name && data.receiver_name != '-'){
                        output  += '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Receiver\"|__}}:</b> ' + data.receiver_name + '</a>';
                        if(data.shipping_to_area && + data.shipping_to_area != '-'){
                            output      += '\\
                                            <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                        }
                    }
                        output      += '\\
                                </div>\\
                            </div>';


                        output  += '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Branch\"|__}}:</b> ' + data.office + '</a>\\
                                    </div>\\
                                </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Date\"|__}}:</b> ' + data.created_at_date + '</a>\\
                                        </div>\\
                                    </div>';
                    return output;
                }
            },
            {
                field: \"status\",
                title: \"{{'Status'|__}}\",
                sortable: false,
                width: 'auto',
                template: function(row) {
                    if(row.requested == 100){
                        var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                    }else{
                        if(row.status != null){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                        } else {
                            var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                        }
                        if(row.delayed == 1){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                        }
                        if(row.requested == 10 || row.requested == 11){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Returning Discards\"|__}}</span>';
                        }
                        if(row.requested == 12 && row.status.equal != 12){
                            output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Supplied\"|__}}</span>';
                        }
                    }

                    return output;
                }
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
                            '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View Shipment\"|__}}\"><i class=\"la la-eye\"></i></button>';


                            {% if user.role_id != 5 %}
                                if(data.requested   ==  0 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentApproved btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Approve\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-check\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                                    output += '<a href=\"javascript:;\" class=\"assign_employee btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"modal\" data-target=\"#assign_shipmentEmployee\" data-placement=\"top\" title=\"{{\"Assign Employee\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-user\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentReceived btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Received\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-arrow-down\"></i></button>';
                                }
                            {% endif %}


                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentDeliveried btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"set as Deliveried\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-thumbs-o-up\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentPaid btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Paid\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-dollar\"></i></button>';
                                }
                            {% endif %}

                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Shipment\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != {{user.id}})){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    },
                }

        ]
    });
    \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
    \$('body').on('click','.delete_record',function(){
        var id      = \$(this).attr('rel');
        var type    = \$(this).attr('data-type');
        swal.fire({
            buttonsStyling: false,

            text: \"{{'Are you sure to delete this item ?'|__}}\",
            type: \"question\",

            confirmButtonText: \"{{'Yes, delete!'|__}}\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '{{\"No, cancel\"|__}}',
            cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
        }).then(function (result) {
            if (result.value) {
                \$.request('onDelete', {
                    data: {id: id, type: type},
                    success: function(data) {

                        swal.fire({
                            title: '{{\"Deleted!\"|__}}',
                            text: '{{\"Your selected record has been deleted! :(\"|__}}',
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
                    text: '{{\"You selected record has not been deleted! :)\"|__}}',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: '{{\"OK\"|__}}',
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                });
            }
        });
    });
}
</script>", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/listingwidget.htm", "");
    }
}
