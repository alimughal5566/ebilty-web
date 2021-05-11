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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/partials/listingwidget.htm */
class __TwigTemplate_4166c30a1e70ab6b8a989ed774970a59ee21c26145be99bf4de664e2fb405555 extends \Twig\Template
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
        // line 154
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 157
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
        // line 167
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        ";
        // line 171
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 171) != 12)) {
            // line 172
            echo "                        var output = '' +
                            '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
            // line 174
            echo url("dashboard/shipments");
            echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
            echo "\"><i class=\"la la-eye\"></i></button>';



                        ";
            // line 178
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 178) != 5)) {
                // line 179
                echo "                        if(data.requested   ==  0 ){
                            output += '<a href=\"javascript:;\" class=\"shipmentApproved btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
                // line 180
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approve"]);
                echo "\" id=\"'+data.id+'\" ><i class=\"la la-check\"></i></button>';
                        }
                        ";
            }
            // line 183
            echo "
                        ";
            // line 184
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 184) != 5)) {
                // line 185
                echo "                        if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                            output += '<a href=\"javascript:;\" class=\"assign_employee btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"modal\" data-target=\"#assign_shipmentEmployee\" data-placement=\"top\" title=\"";
                // line 186
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                echo "\" id=\"'+data.id+'\" ><i class=\"la la-user\"></i></button>';
                        }
                        ";
            }
            // line 189
            echo "
                        ";
            // line 190
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 190) != 5)) {
                // line 191
                echo "                        if(data.requested   ==  1 ){
                            output += '<a href=\"javascript:;\" class=\"shipmentReceived btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
                // line 192
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received"]);
                echo "\" id=\"'+data.id+'\" ><i class=\"la la-arrow-down\"></i></button>';
                        }
                        ";
            }
            // line 195
            echo "

                        ";
            // line 197
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 197) != 5)) {
                // line 198
                echo "                        if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                            output += '<a href=\"javascript:;\" class=\"shipmentDeliveried btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
                // line 199
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["set as Deliveried"]);
                echo "\" id=\"'+data.id+'\" ><i class=\"la la-thumbs-o-up\"></i></button>';
                        }
                        ";
            }
            // line 202
            echo "
                        ";
            // line 203
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 203) != 5)) {
                // line 204
                echo "                        if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                            output += '<a href=\"javascript:;\" class=\"shipmentPaid btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
                // line 205
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                echo "\" id=\"'+data.id+'\" ><i class=\"la la-dollar\"></i></button>';
                        }
                        ";
            }
            // line 208
            echo "
                        ";
            // line 209
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 209) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 209) != 5))) {
                // line 210
                echo "                        if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                            output += '<a href=\"";
                // line 211
                echo url("dashboard/shipments");
                echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
                echo "\"><i class=\"la la-edit\"></i></button>';
                        }
                        ";
            }
            // line 214
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 214) == 5)) {
                // line 215
                echo "                        if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 215), "html", null, true);
                echo "){
                            output += '<a href=\"";
                // line 216
                echo url("dashboard/shipments");
                echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
                echo "\"><i class=\"la la-edit\"></i></button>';
                        }
                        ";
            }
            // line 219
            echo "                        if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                            output += '<a href=\"";
            // line 220
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
            echo "\"><i class=\"la la-print\"></i></button>';
                        }
                        ";
            // line 222
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 222)) {
                // line 223
                echo "                        if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                            output += '<a href=\"";
                // line 224
                echo url("dashboard/shipments");
                echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
                echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                        }
                        ";
            }
            // line 227
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 227)) {
                // line 228
                echo "                        if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                            output += '<a href=\"";
                // line 229
                echo url("dashboard/shipments");
                echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
                echo "\"><i class=\"la la-street-view\"></i></button>';
                        }
                        ";
            }
            // line 232
            echo "                        //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                        ";
            // line 234
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 234)) {
                // line 235
                echo "                        if((data.requested   ==  1 || data.requested   ==  3)){
                            output += '<a href=\"";
                // line 236
                echo url("dashboard/shipments");
                echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
                echo "\"><i class=\"la la-smile-o\"></i></button>';
                        }
                        ";
            }
            // line 239
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 239) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 239) != 5))) {
                // line 240
                echo "                        if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                            output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                // line 241
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
                echo "\"><i class=\"la la-remove\"></i></a>';
                        }
                        ";
            }
            // line 244
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 244) == 5)) {
                // line 245
                echo "                        if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 245), "html", null, true);
                echo ")){
                            output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                // line 246
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
                echo "\"><i class=\"la la-remove\"></i></a>';
                        }
                        ";
            }
            // line 249
            echo "
                        ";
        } else {
            // line 251
            echo "                        var output = '' +
                            '<button  type=\"button\" data-id=\"'+data.id+'\" onclick=\"openBid(this)\" class=\" btn btn-brand btn-sm btn-icon bid\">bid</button>';
                        ";
        }
        // line 254
        echo "                        '</div>';

                        return output;
                    },
                }
            ]
        });



        \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
        // Bid Open
        \$('body').on('click','.bid' , function (){
            let order_id_value = \$(this).attr('data-id');
            \$.ajax({
                url: \"/api/get/bid\",
                type: \"POST\",
                data: {id: order_id_value},
                success: function (result){
                    console.log(result)
                    result = JSON.parse(result)
                    \$('#truck_type').val(result.title)
                    \$('#truck_id').val(result.truck_id)
                    \$('#route').val(result.receiver_addr)
                    \$('#customer_budget').val(result.price_kg)
                    \$('#order_id_placed').val(order_id_value)
                    \$('#showBidModal').modal('show')
                }
            })
        })
        // Bid Save
        \$('body').on('click','.bidsave' , function (){
            \$.ajax({
                url: \"/api/save/bid\",
                type: \"POST\",
                data: {'order_id': \$('#order_id_placed').val() ,'truck_id': \$('#truck_id').val() , 'truck_type': \$('#truck_type').val() , 'route': \$('#route').val(),
                    'customer_budget': \$('#customer_budget').val() , 'bid_price' : \$('#bid_price').val()
                },
                success: function (result){
                    \$('#showBidModal').modal('hide')
                }
            })
        })
        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 303
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"question\",

                confirmButtonText: \"";
        // line 306
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 310
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
        // line 319
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 320
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 323
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
        // line 333
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 334
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 337
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });
    }
    function openBid(elem){

    }
</script>
<div class=\"modal fade\" id=\"showBidModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">place a bid</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>bid your truct</p>
                <div class=\"row col-md-12\">
                    <lable for=\"truck_type\">truck Type</lable>
                    <input type=\"text\" id=\"truck_type\" name=\"truck_type\" class=\"form-control\">
                </div>
                <div>
                    <lable for=\"route\">Route
                        <input type=\"text\" id=\"route\" name=\"route\" class=\"form-control\">
                    </lable>
                </div>
                <div>
                    <lable for=\"customer_budget\">Customer's Total Budget
                        <input type=\"text\" id=\"customer_budget\" name=\"customer_budget\" class=\"form-control\">
                    </lable>
                </div>
                <input type=\"hidden\" id=\"order_id_placed\" >
                <input type=\"hidden\" id=\"truck_id\" >
                <div>
                    <lable for=\"bid_price\">What Is You Total Amount You'd Like To Bid For This Job
                        <input type=\"text\" id=\"bid_price\" name=\"bid_price\" class=\"form-control\">
                    </lable>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary bidsave\">Place a Bid</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/partials/listingwidget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 337,  643 => 334,  639 => 333,  626 => 323,  620 => 320,  616 => 319,  604 => 310,  597 => 306,  591 => 303,  540 => 254,  535 => 251,  531 => 249,  525 => 246,  520 => 245,  517 => 244,  511 => 241,  508 => 240,  505 => 239,  497 => 236,  494 => 235,  492 => 234,  488 => 232,  480 => 229,  477 => 228,  474 => 227,  466 => 224,  463 => 223,  461 => 222,  454 => 220,  451 => 219,  443 => 216,  438 => 215,  435 => 214,  427 => 211,  424 => 210,  422 => 209,  419 => 208,  413 => 205,  410 => 204,  408 => 203,  405 => 202,  399 => 199,  396 => 198,  394 => 197,  390 => 195,  384 => 192,  381 => 191,  379 => 190,  376 => 189,  370 => 186,  367 => 185,  365 => 184,  362 => 183,  356 => 180,  353 => 179,  351 => 178,  342 => 174,  338 => 172,  336 => 171,  329 => 167,  316 => 157,  310 => 154,  303 => 150,  292 => 142,  284 => 137,  273 => 129,  264 => 123,  250 => 112,  244 => 109,  235 => 103,  222 => 100,  214 => 95,  208 => 92,  199 => 86,  186 => 83,  175 => 75,  164 => 70,  156 => 65,  140 => 52,  136 => 51,  131 => 49,  89 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  50 => 9,  46 => 8,  37 => 1,);
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
                        {% if user.role_id != 12 %}
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

                        {% else %}
                        var output = '' +
                            '<button  type=\"button\" data-id=\"'+data.id+'\" onclick=\"openBid(this)\" class=\" btn btn-brand btn-sm btn-icon bid\">bid</button>';
                        {% endif %}
                        '</div>';

                        return output;
                    },
                }
            ]
        });



        \$('body').tooltip({selector: '[data-toggle=\"kt-tooltip\"]'});
        // Bid Open
        \$('body').on('click','.bid' , function (){
            let order_id_value = \$(this).attr('data-id');
            \$.ajax({
                url: \"/api/get/bid\",
                type: \"POST\",
                data: {id: order_id_value},
                success: function (result){
                    console.log(result)
                    result = JSON.parse(result)
                    \$('#truck_type').val(result.title)
                    \$('#truck_id').val(result.truck_id)
                    \$('#route').val(result.receiver_addr)
                    \$('#customer_budget').val(result.price_kg)
                    \$('#order_id_placed').val(order_id_value)
                    \$('#showBidModal').modal('show')
                }
            })
        })
        // Bid Save
        \$('body').on('click','.bidsave' , function (){
            \$.ajax({
                url: \"/api/save/bid\",
                type: \"POST\",
                data: {'order_id': \$('#order_id_placed').val() ,'truck_id': \$('#truck_id').val() , 'truck_type': \$('#truck_type').val() , 'route': \$('#route').val(),
                    'customer_budget': \$('#customer_budget').val() , 'bid_price' : \$('#bid_price').val()
                },
                success: function (result){
                    \$('#showBidModal').modal('hide')
                }
            })
        })
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
    function openBid(elem){

    }
</script>
<div class=\"modal fade\" id=\"showBidModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">place a bid</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>bid your truct</p>
                <div class=\"row col-md-12\">
                    <lable for=\"truck_type\">truck Type</lable>
                    <input type=\"text\" id=\"truck_type\" name=\"truck_type\" class=\"form-control\">
                </div>
                <div>
                    <lable for=\"route\">Route
                        <input type=\"text\" id=\"route\" name=\"route\" class=\"form-control\">
                    </lable>
                </div>
                <div>
                    <lable for=\"customer_budget\">Customer's Total Budget
                        <input type=\"text\" id=\"customer_budget\" name=\"customer_budget\" class=\"form-control\">
                    </lable>
                </div>
                <input type=\"hidden\" id=\"order_id_placed\" >
                <input type=\"hidden\" id=\"truck_id\" >
                <div>
                    <lable for=\"bid_price\">What Is You Total Amount You'd Like To Bid For This Job
                        <input type=\"text\" id=\"bid_price\" name=\"bid_price\" class=\"form-control\">
                    </lable>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary bidsave\">Place a Bid</button>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/partials/listingwidget.htm", "");
    }
}
