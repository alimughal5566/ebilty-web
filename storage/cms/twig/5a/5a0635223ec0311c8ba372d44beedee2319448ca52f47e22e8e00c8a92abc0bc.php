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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/reports.htm */
class __TwigTemplate_686bc42f5febb233fdfdf53f289bdb8794cc66621a7e3c71a55393121b9353bf extends \Twig\Template
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
        echo "<div class=\"kt-portlet\">
    <div class=\"kt-portlet__body kt-portlet__body--fit\">
        <div class=\"kt-portlet__body  list-controls\" id=\"filter_form\">
            <div class=\"form-group row kt-margin-b-0\">
                <div class=\"col-lg-4\">
                    <label>";
        // line 6
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date range"]);
        echo ":</label>
                    <div class='input-group pull-right' id='daterangepicker'>
                        <input type='text' class=\"form-control\" name=\"delivery_date\" id=\"delivery_date\" readonly placeholder=\"";
        // line 8
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select date range"]);
        echo "\"/>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\"><i class=\"la la-calendar-check-o\"></i></span>
                        </div>
                    </div>
                </div>
                ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) == "shipments")) {
            // line 15
            echo "                    <div class=\"col-lg-3\">
                        <label>";
            // line 16
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo ":</label>
                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" >
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"col-lg-3\">
                        <label>";
            // line 22
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo ":</label>
                        <select class=\"form-control m-bootstrap-select\" name=\"employee_id\" id=\"employee_id\" data-live-search=\"true\">
                             <option data-hidden=\"true\"></option>
                             ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 26
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</option>
                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                        </select>
                    </div>
                ";
        }
        // line 31
        echo "                <div class=\"col-lg-2 kt-padding-t-25\">
                    <button type=\"reset\" class=\"btn btn-secondary\" id=\"reset\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reset"]);
        echo "</button>
                </div>
            </div>
        </div>
        <div class=\"kt-portlet__body\">
            <div class=\"kt-datatable\"></div>
        </div>
    </div>
</div>


";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 44
        echo "<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {

        datatable = \$('.kt-datatable').KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 56
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 57
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 63
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 64
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 66
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 67
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 68
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 69
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            info: \"";
        // line 72
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
                        ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 97), "type", [], "any", false, false, false, 97) == "shipments")) {
            // line 98
            echo "                            url: '";
            echo url("api/shipments");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 98), "kind", [], "any", false, false, false, 98), "html", null, true);
            echo "',
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["this"] ?? null), "param", [], "any", false, false, false, 99), "type", [], "any", false, false, false, 99) == "transactions")) {
            // line 100
            echo "                            url: '";
            echo url("api/transactions");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 100), "kind", [], "any", false, false, false, 100), "html", null, true);
            echo "',
                        ";
        }
        // line 102
        echo "                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 110), "type", [], "any", false, false, false, 110) == "shipments")) {
            // line 111
            echo "                columns: [
                    {
                        field: \"number\",
                        title: \"";
            // line 114
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
            echo "\",
                        sortable: true,
                        width: 140,
                        template: function(row) {
                            return '<a href=\"";
            // line 118
            echo url("dashboard/shipments");
            echo "/'+row.id+'/view\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 118), "prefix_order", [], "any", false, false, false, 118), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 118), "numbers_order", [], "any", false, false, false, 118), "html", null, true);
            echo "'+row.shipping_number+'</a>';
                        }
                    },
                    {
                        field: \"details\",
                        title: \"";
            // line 123
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
            // line 131
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 131)) {
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
            // line 134
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
            echo ":</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                        <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                            <div class=\"kt-user-card-v2__details\">\\
                                                <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
            // line 140
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo ":</b> ' + data.sender_name + '</a>';
                              
                                  output      += '\\
                                                  <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
            // line 143
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
            echo ":</b> ' + data.sender_city.name + '</span>';
                          
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"";
            // line 148
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 148)) {
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
            // line 151
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
            echo ":</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                        <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                            <div class=\"kt-user-card-v2__details\">\\
                                                <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
            // line 157
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo ":</b> ' + data.receiver_name + '</a>';
                                
                                    output      += '\\
                                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
            // line 160
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
            echo ":</b> ' + data.receiver_city.name+ '</span>';
                            
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                        }
                    },
                    {
                        field: \"office\",
                        title: \"";
            // line 171
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
            echo "\",
                        sortable: false,
                        width: 100,
                        template: function(data, i) {
                            return '<a href=\"javascript:;\">'+data.office+'</a>';
                        }
                    },
                    {
                        field: \"status\",
                        title: \"";
            // line 180
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
            echo "\",
                        sortable: false,
                        width: 80,
                        template: function(row) {
                            if(row.status != null){
                                var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            } else {
                                var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                            }
                            if(row.delayed == 1){
                                output  += '<span class=\"btn btn-bold btn-sm btn-label-danger\">";
            // line 190
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
            echo "</span>';
                            }

                            return output;
                        }
                    },
                    {
                        field: \"delivery_date_date\",
                        title: \"";
            // line 198
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
            echo "\",
                        sortable: false,
                        width: 100,
                    }
                ]
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 203
($context["this"] ?? null), "param", [], "any", false, false, false, 203), "type", [], "any", false, false, false, 203) == "transactions")) {
            // line 204
            echo "                columns: [
                    {
                        field: \"id\",
                        title: \"";
            // line 207
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ID"]);
            echo "\",
                        sortable: false,
                        width: 50,
        \t\t\t\ttemplate: function(data, i) {
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"";
            // line 214
            echo url("dashboard/transactions");
            echo "/' + data.id+ '/view\" class=\"kt-user-card-v2__name\">' + data.id+ '</a>\\
                                     </div>\\
                                </div>';
        \t\t\t\t\treturn output;
        \t\t\t\t},
                    },
                    {
                        field: \"movement\",
                        title: \"";
            // line 222
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Movement Type"]);
            echo "\",
                        sortable: false,
                        width: 250,
                        template: function(row) {
                            //1 = withdrawl | 2 = deposit | 3 = Deduction from the wallet | 4 = add to wallet | 5 =  Deduction of commission balance | 6 = Add to the commission balance | 7 = Deduction from the balance of packages | 8 = Add  to the balance of packages
                            var status = {
                                1: {
                                    'title': '";
            // line 229
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Withdrawl"]);
            echo "',
                                    'class': 'info'
                                },
                                2: {
                                    'title': '";
            // line 233
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deposit"]);
            echo "',
                                    'class': 'info'
                                },
                                3: {
                                    'title': '";
            // line 237
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the wallet"]);
            echo "',
                                    'class': 'info'
                                },
                                4: {
                                    'title': '";
            // line 241
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to wallet"]);
            echo "',
                                    'class': 'info'
                                },
                                5: {
                                    'title': '";
            // line 245
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction of commission balance"]);
            echo "',
                                    'class': 'info'
                                },
                                6: {
                                    'title': '";
            // line 249
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add to the commission balance"]);
            echo "',
                                    'class': 'info'
                                },
                                7: {
                                    'title': '";
            // line 253
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deduction from the balance of packages"]);
            echo "',
                                    'class': 'info'
                                },
                                8: {
                                    'title': '";
            // line 257
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add  to the balance of packages"]);
            echo "',
                                    'class': 'info'
                                },
                            };
                            return '<span class=\"kt-badge kt-badge--' + status[row.movement].class + ' kt-badge--dot\"></span>&nbsp;<a href=\"";
            // line 261
            echo url("dashboard/transactions");
            echo "/' + row.id+ '/view\" class=\"kt-font-bold kt-font-' + status[row.movement].class + '\">' + status[row.movement].title + '</a>';
                        }
                    },
                    {
                        field: \"date\",
                        title: \"";
            // line 266
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
            echo "\",
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"amount\",
                        title: \"";
            // line 272
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount"]);
            echo "\",
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"delivery_date\",
                        title: \"";
            // line 278
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created On"]);
            echo "\",
                        sortable: false,
                        width: 100,
        \t\t\t\ttemplate: function(data, i) {
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\">' + data.delivery_date_date + '</a>\\
                                        <span class=\"kt-user-card-v2__email\">' + data.delivery_date_time + '</span>\\
                                    </div>\\
                                </div>';
        \t\t\t\t\treturn output;
        \t\t\t\t}
                    },
                    {
                        field: \"payment_with\",
                        title: \"";
            // line 294
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received by"]);
            echo "\",
                        sortable: false,
                        width: 100,
        \t\t\t\ttemplate: function(data, i) {
                            if(data.item_id){
            \t\t\t\t\tvar output = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                             <a href=\"";
            // line 302
            echo url("dashboard/employees");
            echo "/' + data.payment_with+ '/transactions\" class=\"kt-user-card-v2__name\">' + data.payment_with_employee+ '</a>\\
                                         </div>\\
                                    </div>';
            \t\t\t\t\treturn output;
                            }else{
            \t\t\t\t\treturn '-';
                            }
        \t\t\t\t},
                    },
                    {
                        field: \"description\",
                        title: \"";
            // line 313
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
            echo "\",
                        sortable: false,
                        width: 150,
        \t\t\t\ttemplate: function(data, i) {
                            if(data.description){
            \t\t\t\t\treturn data.description;
                            }else{
            \t\t\t\t\treturn '-';
                            }
        \t\t\t\t}
                    },
                    {
                        field: \"item_id\",
                        title: \"";
            // line 326
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment"]);
            echo "\",
                        sortable: false,
                        width: 50,
        \t\t\t\ttemplate: function(data, i) {
                            if(data.item_id){
            \t\t\t\t\tvar output = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                             <a href=\"";
            // line 334
            echo url("dashboard/shipments");
            echo "/' + data.item_id+ '/view\" class=\"kt-user-card-v2__name\">#' + data.item_id+ '</a>\\
                                         </div>\\
                                    </div>';
            \t\t\t\t\treturn output;
                            }else{
            \t\t\t\t\treturn '-';
                            }
        \t\t\t\t}
                    },
                ]
            ";
        }
        // line 345
        echo "
        });
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            \$('#filter_form select.clients,#filter_form select.users').each(function(){
                \$(this).val('').trigger('change');
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
        // line 409
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 412
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 416
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 421
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 422
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 425
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 432
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 433
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 436
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
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
        // line 461
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 464
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 468
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
        // line 476
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 477
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 480
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
        // line 490
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 491
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 494
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 509
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"danger\",

                confirmButtonText: \"";
        // line 512
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 516
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
        // line 525
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 526
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 529
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
        // line 539
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 540
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 543
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });


        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 565
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to create new manifest with"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 568
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 572
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 580
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 581
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 584
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            e.preventDefault();
            \$('#chooseEmployee').modal('toggle');
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            console.log(datatable.getTotalRows());
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 602
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
        });
    };

    var reload = function () {
        datatable.reload();
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
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        }
    };
}();

KTUtil.ready(function () {
    KTAppUserListDatatable.init();

    function formatRepo(repo) {
        if (repo.loading) return repo.text;
        var markup = \"<div class='select2-result-repository clearfix'>\" +
                        \"<div class='select2-result-repository__meta'>\" +
                        \"<div class='select2-result-repository__title'>\" + repo.text + \"</div>\";
                        if (repo.mobile) {
                            markup += \"<div class='select2-result-repository__description'>\" + repo.mobile + \"</div>\";
                        }
                    markup += \"</div></div>\";
        return markup;
    }

    function formatRepoSelection(repo) {
        return repo.text || repo.id;
    }

    \$(\".clients\").select2({
        ";
        // line 663
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 664
            echo "            dir: \"rtl\",
        ";
        }
        // line 666
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 668
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 671
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 674
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 677
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 680
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 683
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 686
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 689
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search for client"]);
        echo "\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetclients', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });
    \$(\".users\").select2({
        ";
        // line 717
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 718
            echo "            dir: \"rtl\",
        ";
        }
        // line 720
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 722
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 725
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 728
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 731
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 734
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 737
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 740
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 743
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search for client"]);
        echo "\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetusers', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });

    moment.locale('";
        // line 771
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "');
    moment.updateLocale('";
        // line 772
        echo twig_escape_filter($this->env, ($context["currentLang"] ?? null), "html", null, true);
        echo "', {
        months : [
            \"";
        // line 774
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
            \"";
        // line 775
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\", \"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
        ]
    });
    var picker = \$('#daterangepicker');
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    function cb(start, end, label) {
        var title = '';
        var range = '';

        if ((end - start) < 100 || label == 'Today') {
            title = '";
        // line 787
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo ":';
            range = start.format(KTAppOptions.daterangeformat);
        } else if (label == '";
        // line 789
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "') {
            title = '";
        // line 790
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo ":';
            range = start.format(KTAppOptions.daterangeformat);
        } else {
            range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
        }

        \$(\"#daterangepicker .form-control\").val(range);
        \$(\"#daterangepicker .form-control\").trigger('change');
    }

   \$(\"#daterangepicker\").daterangepicker({
       direction: KTUtil.isRTL(),
       locale: {
           \"format\": \"MM/DD/YYYY\",
           \"separator\": \" - \",
           \"applyLabel\": \"";
        // line 805
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Apply"]);
        echo "\",
           \"cancelLabel\": \"";
        // line 806
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "\",
           \"fromLabel\": \"";
        // line 807
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo "\",
           \"toLabel\": \"";
        // line 808
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo "\",
           \"customRangeLabel\": \"";
        // line 809
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "\",
           \"daysOfWeek\": [
               \"";
        // line 811
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Su"]);
        echo "\",
               \"";
        // line 812
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mo"]);
        echo "\",
               \"";
        // line 813
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tu"]);
        echo "\",
               \"";
        // line 814
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We"]);
        echo "\",
               \"";
        // line 815
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Th"]);
        echo "\",
               \"";
        // line 816
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fr"]);
        echo "\",
               \"";
        // line 817
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sa"]);
        echo "\"
           ],
           \"monthNames\": [
               \"";
        // line 820
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
               \"";
        // line 821
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
               \"";
        // line 822
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
               \"";
        // line 823
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
               \"";
        // line 824
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
               \"";
        // line 825
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
               \"";
        // line 826
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
               \"";
        // line 827
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
               \"";
        // line 828
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
               \"";
        // line 829
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
               \"";
        // line 830
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
               \"";
        // line 831
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
           ],
           \"monthsShort\": [
               \"";
        // line 834
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["January"]);
        echo "\",
               \"";
        // line 835
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["February"]);
        echo "\",
               \"";
        // line 836
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["March"]);
        echo "\",
               \"";
        // line 837
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["April"]);
        echo "\",
               \"";
        // line 838
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["May"]);
        echo "\",
               \"";
        // line 839
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["June"]);
        echo "\",
               \"";
        // line 840
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["July"]);
        echo "\",
               \"";
        // line 841
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["August"]);
        echo "\",
               \"";
        // line 842
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["September"]);
        echo "\",
               \"";
        // line 843
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["October"]);
        echo "\",
               \"";
        // line 844
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["November"]);
        echo "\",
               \"";
        // line 845
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["December"]);
        echo "\"
           ],
           \"firstDay\": 1
       },
       startDate: start,
       endDate: end,
       opens: 'left',
       ranges: {
           '";
        // line 853
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Today"]);
        echo "': [moment(), moment()],
           '";
        // line 854
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yesterday"]);
        echo "': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           '";
        // line 855
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 7 Days"]);
        echo "': [moment().subtract(6, 'days'), moment()],
           '";
        // line 856
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last 30 Days"]);
        echo "': [moment().subtract(29, 'days'), moment()],
           '";
        // line 857
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last Month"]);
        echo "': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
       }
   }, cb);


   \$('#Print').on('click', function () {
       \$.request('onPrint', {
           ";
        // line 864
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 864), "type", [], "any", false, false, false, 864) == "shipments")) {
            // line 865
            echo "               data: {delivery_date: \$('#delivery_date').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 866
($context["this"] ?? null), "param", [], "any", false, false, false, 866), "type", [], "any", false, false, false, 866) == "transactions")) {
            // line 867
            echo "               data: {delivery_date: \$('#delivery_date').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           ";
        }
        // line 869
        echo "           success: function(res){
                if (res.X_OCTOBER_REDIRECT) {
                    var win = window.open(res.X_OCTOBER_REDIRECT, '_blank');
                    win.focus();
                }
            },
       });
   });
   \$('#Export').on('click', function () {
       \$.request('onExport', {
           ";
        // line 879
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 879), "type", [], "any", false, false, false, 879) == "shipments")) {
            // line 880
            echo "               data: {delivery_date: \$('#delivery_date').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 881
($context["this"] ?? null), "param", [], "any", false, false, false, 881), "type", [], "any", false, false, false, 881) == "transactions")) {
            // line 882
            echo "               data: {delivery_date: \$('#delivery_date').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           ";
        }
        // line 884
        echo "       });
   });
});
</script>
";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/reports.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1499 => 43,  1493 => 884,  1489 => 882,  1487 => 881,  1484 => 880,  1482 => 879,  1470 => 869,  1466 => 867,  1464 => 866,  1461 => 865,  1459 => 864,  1449 => 857,  1445 => 856,  1441 => 855,  1437 => 854,  1433 => 853,  1422 => 845,  1418 => 844,  1414 => 843,  1410 => 842,  1406 => 841,  1402 => 840,  1398 => 839,  1394 => 838,  1390 => 837,  1386 => 836,  1382 => 835,  1378 => 834,  1372 => 831,  1368 => 830,  1364 => 829,  1360 => 828,  1356 => 827,  1352 => 826,  1348 => 825,  1344 => 824,  1340 => 823,  1336 => 822,  1332 => 821,  1328 => 820,  1322 => 817,  1318 => 816,  1314 => 815,  1310 => 814,  1306 => 813,  1302 => 812,  1298 => 811,  1293 => 809,  1289 => 808,  1285 => 807,  1281 => 806,  1277 => 805,  1259 => 790,  1255 => 789,  1250 => 787,  1227 => 775,  1211 => 774,  1206 => 772,  1202 => 771,  1171 => 743,  1165 => 740,  1159 => 737,  1153 => 734,  1147 => 731,  1141 => 728,  1135 => 725,  1129 => 722,  1125 => 720,  1121 => 718,  1119 => 717,  1088 => 689,  1082 => 686,  1076 => 683,  1070 => 680,  1064 => 677,  1058 => 674,  1052 => 671,  1046 => 668,  1042 => 666,  1038 => 664,  1036 => 663,  972 => 602,  951 => 584,  945 => 581,  941 => 580,  930 => 572,  923 => 568,  915 => 565,  890 => 543,  884 => 540,  880 => 539,  867 => 529,  861 => 526,  857 => 525,  845 => 516,  838 => 512,  832 => 509,  814 => 494,  808 => 491,  804 => 490,  791 => 480,  785 => 477,  781 => 476,  770 => 468,  763 => 464,  755 => 461,  727 => 436,  721 => 433,  717 => 432,  707 => 425,  701 => 422,  697 => 421,  689 => 416,  682 => 412,  674 => 409,  608 => 345,  594 => 334,  583 => 326,  567 => 313,  553 => 302,  542 => 294,  523 => 278,  514 => 272,  505 => 266,  497 => 261,  490 => 257,  483 => 253,  476 => 249,  469 => 245,  462 => 241,  455 => 237,  448 => 233,  441 => 229,  431 => 222,  420 => 214,  410 => 207,  405 => 204,  403 => 203,  395 => 198,  384 => 190,  371 => 180,  359 => 171,  345 => 160,  339 => 157,  330 => 151,  317 => 148,  309 => 143,  303 => 140,  294 => 134,  281 => 131,  270 => 123,  259 => 118,  252 => 114,  247 => 111,  245 => 110,  235 => 102,  227 => 100,  225 => 99,  218 => 98,  216 => 97,  174 => 72,  168 => 69,  164 => 68,  160 => 67,  156 => 66,  152 => 65,  148 => 64,  144 => 63,  135 => 57,  131 => 56,  117 => 44,  115 => 43,  101 => 32,  98 => 31,  93 => 28,  82 => 26,  78 => 25,  72 => 22,  63 => 16,  60 => 15,  58 => 14,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-portlet\">
    <div class=\"kt-portlet__body kt-portlet__body--fit\">
        <div class=\"kt-portlet__body  list-controls\" id=\"filter_form\">
            <div class=\"form-group row kt-margin-b-0\">
                <div class=\"col-lg-4\">
                    <label>{{'Date range'|__}}:</label>
                    <div class='input-group pull-right' id='daterangepicker'>
                        <input type='text' class=\"form-control\" name=\"delivery_date\" id=\"delivery_date\" readonly placeholder=\"{{'Select date range'|__}}\"/>
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\"><i class=\"la la-calendar-check-o\"></i></span>
                        </div>
                    </div>
                </div>
                {% if this.param.type == 'shipments' %}
                    <div class=\"col-lg-3\">
                        <label>{{'Sender'|__}}:</label>
                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" >
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"col-lg-3\">
                        <label>{{'Employee'|__}}:</label>
                        <select class=\"form-control m-bootstrap-select\" name=\"employee_id\" id=\"employee_id\" data-live-search=\"true\">
                             <option data-hidden=\"true\"></option>
                             {% for employee in employees %}
                                <option value=\"{{employee.id}}\">{{employee.name}}</option>
                             {% endfor %}
                        </select>
                    </div>
                {% endif %}
                <div class=\"col-lg-2 kt-padding-t-25\">
                    <button type=\"reset\" class=\"btn btn-secondary\" id=\"reset\">{{'Reset'|__}}</button>
                </div>
            </div>
        </div>
        <div class=\"kt-portlet__body\">
            <div class=\"kt-datatable\"></div>
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

        datatable = \$('.kt-datatable').KTDatatable({
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
                        {% if this.param.type == 'shipments' %}
                            url: '{{url(\"api/shipments\")}}/{{this.param.kind}}',
                        {% elseif this.param.type == 'transactions' %}
                            url: '{{url(\"api/transactions\")}}/{{this.param.kind}}',
                        {% endif %}
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            {% if this.param.type == 'shipments' %}
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
                              
                                  output      += '\\
                                                  <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.sender_city.name + '</span>';
                          
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
                                
                                    output      += '\\
                                                    <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.receiver_city.name+ '</span>';
                            
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                        return output;
                        }
                    },
                    {
                        field: \"office\",
                        title: \"{{'Branch'|__}}\",
                        sortable: false,
                        width: 100,
                        template: function(data, i) {
                            return '<a href=\"javascript:;\">'+data.office+'</a>';
                        }
                    },
                    {
                        field: \"status\",
                        title: \"{{'Status'|__}}\",
                        sortable: false,
                        width: 80,
                        template: function(row) {
                            if(row.status != null){
                                var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            } else {
                                var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                            }
                            if(row.delayed == 1){
                                output  += '<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                            }

                            return output;
                        }
                    },
                    {
                        field: \"delivery_date_date\",
                        title: \"{{'Date'|__}}\",
                        sortable: false,
                        width: 100,
                    }
                ]
            {% elseif this.param.type == 'transactions' %}
                columns: [
                    {
                        field: \"id\",
                        title: \"{{'ID'|__}}\",
                        sortable: false,
                        width: 50,
        \t\t\t\ttemplate: function(data, i) {
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                         <a href=\"{{url(\"dashboard/transactions\")}}/' + data.id+ '/view\" class=\"kt-user-card-v2__name\">' + data.id+ '</a>\\
                                     </div>\\
                                </div>';
        \t\t\t\t\treturn output;
        \t\t\t\t},
                    },
                    {
                        field: \"movement\",
                        title: \"{{'Movement Type'|__}}\",
                        sortable: false,
                        width: 250,
                        template: function(row) {
                            //1 = withdrawl | 2 = deposit | 3 = Deduction from the wallet | 4 = add to wallet | 5 =  Deduction of commission balance | 6 = Add to the commission balance | 7 = Deduction from the balance of packages | 8 = Add  to the balance of packages
                            var status = {
                                1: {
                                    'title': '{{\"Withdrawl\"|__}}',
                                    'class': 'info'
                                },
                                2: {
                                    'title': '{{\"Deposit\"|__}}',
                                    'class': 'info'
                                },
                                3: {
                                    'title': '{{\"Deduction from the wallet\"|__}}',
                                    'class': 'info'
                                },
                                4: {
                                    'title': '{{\"Add to wallet\"|__}}',
                                    'class': 'info'
                                },
                                5: {
                                    'title': '{{\"Deduction of commission balance\"|__}}',
                                    'class': 'info'
                                },
                                6: {
                                    'title': '{{\"Add to the commission balance\"|__}}',
                                    'class': 'info'
                                },
                                7: {
                                    'title': '{{\"Deduction from the balance of packages\"|__}}',
                                    'class': 'info'
                                },
                                8: {
                                    'title': '{{\"Add  to the balance of packages\"|__}}',
                                    'class': 'info'
                                },
                            };
                            return '<span class=\"kt-badge kt-badge--' + status[row.movement].class + ' kt-badge--dot\"></span>&nbsp;<a href=\"{{url(\"dashboard/transactions\")}}/' + row.id+ '/view\" class=\"kt-font-bold kt-font-' + status[row.movement].class + '\">' + status[row.movement].title + '</a>';
                        }
                    },
                    {
                        field: \"date\",
                        title: \"{{'Date'|__}}\",
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"amount\",
                        title: \"{{'Amount'|__}}\",
                        sortable: false,
                        width: 100,
                    },
                    {
                        field: \"delivery_date\",
                        title: \"{{'Created On'|__}}\",
                        sortable: false,
                        width: 100,
        \t\t\t\ttemplate: function(data, i) {
        \t\t\t\t\tvar output = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\">' + data.delivery_date_date + '</a>\\
                                        <span class=\"kt-user-card-v2__email\">' + data.delivery_date_time + '</span>\\
                                    </div>\\
                                </div>';
        \t\t\t\t\treturn output;
        \t\t\t\t}
                    },
                    {
                        field: \"payment_with\",
                        title: \"{{'Received by'|__}}\",
                        sortable: false,
                        width: 100,
        \t\t\t\ttemplate: function(data, i) {
                            if(data.item_id){
            \t\t\t\t\tvar output = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                             <a href=\"{{url(\"dashboard/employees\")}}/' + data.payment_with+ '/transactions\" class=\"kt-user-card-v2__name\">' + data.payment_with_employee+ '</a>\\
                                         </div>\\
                                    </div>';
            \t\t\t\t\treturn output;
                            }else{
            \t\t\t\t\treturn '-';
                            }
        \t\t\t\t},
                    },
                    {
                        field: \"description\",
                        title: \"{{'Description'|__}}\",
                        sortable: false,
                        width: 150,
        \t\t\t\ttemplate: function(data, i) {
                            if(data.description){
            \t\t\t\t\treturn data.description;
                            }else{
            \t\t\t\t\treturn '-';
                            }
        \t\t\t\t}
                    },
                    {
                        field: \"item_id\",
                        title: \"{{'Shipment'|__}}\",
                        sortable: false,
                        width: 50,
        \t\t\t\ttemplate: function(data, i) {
                            if(data.item_id){
            \t\t\t\t\tvar output = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                             <a href=\"{{url(\"dashboard/shipments\")}}/' + data.item_id+ '/view\" class=\"kt-user-card-v2__name\">#' + data.item_id+ '</a>\\
                                         </div>\\
                                    </div>';
            \t\t\t\t\treturn output;
                            }else{
            \t\t\t\t\treturn '-';
                            }
        \t\t\t\t}
                    },
                ]
            {% endif %}

        });
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input,#daterangepicker .form-control').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            \$('#filter_form select.clients,#filter_form select.users').each(function(){
                \$(this).val('').trigger('change');
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
                    type: \"info\",

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


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to delete this item ?'|__}}\",
                type: \"danger\",

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


        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure you want to create new manifest with'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            e.preventDefault();
            \$('#chooseEmployee').modal('toggle');
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            console.log(datatable.getTotalRows());
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' {{\"Total\"|__}}');
        });
    };

    var reload = function () {
        datatable.reload();
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
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        }
    };
}();

KTUtil.ready(function () {
    KTAppUserListDatatable.init();

    function formatRepo(repo) {
        if (repo.loading) return repo.text;
        var markup = \"<div class='select2-result-repository clearfix'>\" +
                        \"<div class='select2-result-repository__meta'>\" +
                        \"<div class='select2-result-repository__title'>\" + repo.text + \"</div>\";
                        if (repo.mobile) {
                            markup += \"<div class='select2-result-repository__description'>\" + repo.mobile + \"</div>\";
                        }
                    markup += \"</div></div>\";
        return markup;
    }

    function formatRepoSelection(repo) {
        return repo.text || repo.id;
    }

    \$(\".clients\").select2({
        {% if currentLang == 'ar'%}
            dir: \"rtl\",
        {% endif %}
        language: {
            errorLoading: function () {
                return \"{{'There is an error while searching'|__}}...\";
            },
            inputTooLong: function (args) {
                return \"{{'You must enter less characters'|__}}...\";
            },
            inputTooShort: function (args) {
                return \"{{'You must enter more characters'|__}}...\";
            },
            loadingMore: function () {
                return \"{{'Loading More'|__}}...\";
            },
            maximumSelected: function (args) {
                return \"{{'Maximum element has been selected'|__}}...\";
            },
            noResults: function () {
                return \"{{'No result found'|__}}...\";
            },
            searching: function () {
                return \"{{'Searching'|__}}...\";
            }
        },
        placeholder: \"{{'Search for client'|__}}\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetclients', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });
    \$(\".users\").select2({
        {% if currentLang == 'ar'%}
            dir: \"rtl\",
        {% endif %}
        language: {
            errorLoading: function () {
                return \"{{'There is an error while searching'|__}}...\";
            },
            inputTooLong: function (args) {
                return \"{{'You must enter less characters'|__}}...\";
            },
            inputTooShort: function (args) {
                return \"{{'You must enter more characters'|__}}...\";
            },
            loadingMore: function () {
                return \"{{'Loading More'|__}}...\";
            },
            maximumSelected: function (args) {
                return \"{{'Maximum element has been selected'|__}}...\";
            },
            noResults: function () {
                return \"{{'No result found'|__}}...\";
            },
            searching: function () {
                return \"{{'Searching'|__}}...\";
            }
        },
        placeholder: \"{{'Search for client'|__}}\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetusers', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });

    moment.locale('{{currentLang}}');
    moment.updateLocale('{{currentLang}}', {
        months : [
            \"{{'January'|__}}\", \"{{'February'|__}}\", \"{{'March'|__}}\", \"{{'April'|__}}\", \"{{'May'|__}}\", \"{{'June'|__}}\", \"{{'July'|__}}\",
            \"{{'August'|__}}\", \"{{'September'|__}}\", \"{{'October'|__}}\", \"{{'November'|__}}\", \"{{'December'|__}}\"
        ]
    });
    var picker = \$('#daterangepicker');
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    function cb(start, end, label) {
        var title = '';
        var range = '';

        if ((end - start) < 100 || label == 'Today') {
            title = '{{\"Today\"|__}}:';
            range = start.format(KTAppOptions.daterangeformat);
        } else if (label == '{{\"Yesterday\"|__}}') {
            title = '{{\"Yesterday\"|__}}:';
            range = start.format(KTAppOptions.daterangeformat);
        } else {
            range = start.format(KTAppOptions.daterangeformat) + ' - ' + end.format(KTAppOptions.daterangeformat);
        }

        \$(\"#daterangepicker .form-control\").val(range);
        \$(\"#daterangepicker .form-control\").trigger('change');
    }

   \$(\"#daterangepicker\").daterangepicker({
       direction: KTUtil.isRTL(),
       locale: {
           \"format\": \"MM/DD/YYYY\",
           \"separator\": \" - \",
           \"applyLabel\": \"{{'Apply'|__}}\",
           \"cancelLabel\": \"{{'Cancel'|__}}\",
           \"fromLabel\": \"{{'From'|__}}\",
           \"toLabel\": \"{{'To'|__}}\",
           \"customRangeLabel\": \"{{'Custom'|__}}\",
           \"daysOfWeek\": [
               \"{{'Su'|__}}\",
               \"{{'Mo'|__}}\",
               \"{{'Tu'|__}}\",
               \"{{'We'|__}}\",
               \"{{'Th'|__}}\",
               \"{{'Fr'|__}}\",
               \"{{'Sa'|__}}\"
           ],
           \"monthNames\": [
               \"{{'January'|__}}\",
               \"{{'February'|__}}\",
               \"{{'March'|__}}\",
               \"{{'April'|__}}\",
               \"{{'May'|__}}\",
               \"{{'June'|__}}\",
               \"{{'July'|__}}\",
               \"{{'August'|__}}\",
               \"{{'September'|__}}\",
               \"{{'October'|__}}\",
               \"{{'November'|__}}\",
               \"{{'December'|__}}\"
           ],
           \"monthsShort\": [
               \"{{'January'|__}}\",
               \"{{'February'|__}}\",
               \"{{'March'|__}}\",
               \"{{'April'|__}}\",
               \"{{'May'|__}}\",
               \"{{'June'|__}}\",
               \"{{'July'|__}}\",
               \"{{'August'|__}}\",
               \"{{'September'|__}}\",
               \"{{'October'|__}}\",
               \"{{'November'|__}}\",
               \"{{'December'|__}}\"
           ],
           \"firstDay\": 1
       },
       startDate: start,
       endDate: end,
       opens: 'left',
       ranges: {
           '{{\"Today\"|__}}': [moment(), moment()],
           '{{\"Yesterday\"|__}}': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           '{{\"Last 7 Days\"|__}}': [moment().subtract(6, 'days'), moment()],
           '{{\"Last 30 Days\"|__}}': [moment().subtract(29, 'days'), moment()],
           '{{\"Last Month\"|__}}': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
       }
   }, cb);


   \$('#Print').on('click', function () {
       \$.request('onPrint', {
           {% if this.param.type == 'shipments' %}
               data: {delivery_date: \$('#delivery_date').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           {% elseif this.param.type == 'transactions' %}
               data: {delivery_date: \$('#delivery_date').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           {% endif %}
           success: function(res){
                if (res.X_OCTOBER_REDIRECT) {
                    var win = window.open(res.X_OCTOBER_REDIRECT, '_blank');
                    win.focus();
                }
            },
       });
   });
   \$('#Export').on('click', function () {
       \$.request('onExport', {
           {% if this.param.type == 'shipments' %}
               data: {delivery_date: \$('#delivery_date').val(), sender_id: \$('#sender_id').val(), employee_id: \$('#employee_id').val()},
           {% elseif this.param.type == 'transactions' %}
               data: {delivery_date: \$('#delivery_date').val(), for_id: \$('#for_id').val(), status_id: \$('#status_id').val()},
           {% endif %}
       });
   });
});
</script>
{% endput %}", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/reports.htm", "");
    }
}
