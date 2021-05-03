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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/notifications.htm */
class __TwigTemplate_f6735eda642a61bc2a784cd14d02daa6d09bf3e11782d020fb30a775ab53d337 extends \Twig\Template
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
        echo "<div class=\"kt-portlet kt-portlet--mobile\">
    <div class=\"kt-portlet__body kt-portlet__body--fit\">
        <!--begin: Datatable -->
        <div class=\"kt-datatable\"></div>
        <!--end: Datatable -->
    </div>
</div>


";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 11
        echo "<script type=\"text/javascript\">
    var KTAppUserListDatatable = function () {

        // variables
        var datatable;

        // init
        var init = function () {
            // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
            datatable = \$('.kt-datatable').KTDatatable({
                translate: {
                    records: {
                        processing: '";
        // line 23
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                        noRecords: '";
        // line 24
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                    },
                    toolbar: {
                        pagination: {
                            items: {
                                default: {
                                    first: '";
        // line 30
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                    prev: '";
        // line 31
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                    next: '";
        // line 32
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                    last: '";
        // line 33
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                    more: '";
        // line 34
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                    input: '";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                    select: '";
        // line 36
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                                },
                                //info: '";
        // line 38
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Displaying"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["records"]);
        echo "'
                            }
                        }
                    }
                },
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '";
        // line 48
        echo url("api/notifications");
        echo "',
                            params: {
                              id: ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "
                            }

                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },

                // layout definition
                layout: {
                    scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                    footer: false, // display/hide footer
                },

                // column sorting
                sortable: true,

                pagination: true,

                search: {
                    input: \$('#generalSearch'),
                    delay: 400,
                },


                columns: [
                  {
                    field: 'sender',
                    title: '";
        // line 81
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo "',
                    sortable: false,
                    // sortable: 'asc', // default sort
                    filterable: true, // disable or enable filtering
                    width: 200
                  },
                  {
                    field: 'notification',
                    title: '";
        // line 89
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notification"]);
        echo "',
                    sortable: false,
                    // sortable: 'asc', // default sort
                    filterable: true, // disable or enable filtering
                    width: 350,
                    template: function(row) {
                        if(row.notification == 'new_shipments'){
                            return '<a href=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme_lang"] ?? null), "new_shipments", [], "any", false, false, false, 96), "html", null, true);
        echo "</span>';
                        }else if(row.notification == 'approved_shipment'){
                            return '<a href=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme_lang"] ?? null), "approved_shipment", [], "any", false, false, false, 98), "html", null, true);
        echo "</span>';
                        }else if(row.notification == 'refused_shipment'){
                            return '<a href=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme_lang"] ?? null), "refused_shipment", [], "any", false, false, false, 100), "html", null, true);
        echo "</span>';
                        }else if(row.notification == 'postponed_shipment'){
                            return '<a href=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme_lang"] ?? null), "postponed_shipment", [], "any", false, false, false, 102), "html", null, true);
        echo "</span>';
                        }else if(row.notification == 'transfered_shipment'){
                            return '<a href=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme_lang"] ?? null), "transfered_shipment", [], "any", false, false, false, 104), "html", null, true);
        echo "</span>';
                        }else{
                            return '<a href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/notifications");
        echo "/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">'+row.notification+'</span>';
                        }
                    },
                  },
                  {
                      field: 'status',
                      title: '";
        // line 112
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "',
                      responsive: {visible: 'lg'},
                      // callback function support for column rendering
                      template: function(row) {
          \t\t\t\t\tvar status = {
          \t\t\t\t\t\t'new': {
          \t\t\t\t\t\t\t'title': '";
        // line 118
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New"]);
        echo "',
          \t\t\t\t\t\t\t'class': ' btn-label-success'
          \t\t\t\t\t\t},
          \t\t\t\t\t\t'readed': {
          \t\t\t\t\t\t\t'title': '";
        // line 122
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Readed"]);
        echo "',
          \t\t\t\t\t\t\t'class': ' btn-label-dark'
          \t\t\t\t\t\t}
          \t\t\t\t\t};
          \t\t\t\t\treturn '<span class=\"btn btn-bold btn-sm btn-font-sm ' + status[row.status].class + '\">' + status[row.status].title + '</span>';
                      },
                  },
                 ]
            });
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
        // line 189
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                        type: \"info\",

                        confirmButtonText: \"";
        // line 192
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                        showCancelButton: true,
                        cancelButtonText: \"";
        // line 196
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                        cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                    }).then(function (result) {
                        if (result.value) {
                            swal.fire({
                                title: '";
        // line 201
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                                text: '";
        // line 202
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: \"";
        // line 205
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                            })
                            // result.dismiss can be 'cancel', 'overlay',
                            // 'close', and 'timer'
                        } else if (result.dismiss === 'cancel') {
                            swal.fire({
                                title: '";
        // line 212
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                                text: '";
        // line 213
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                                type: 'error',
                                buttonsStyling: false,
                                confirmButtonText: \"";
        // line 216
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
            \$('#check_all').on('click', function (e) {
                e.preventDefault();
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 233
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to mark all notifications as readed?"]);
        echo "\",
                    type: \"question\",

                    confirmButtonText: \"";
        // line 236
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 240
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onCheckall', {
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 247
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Readed!"]);
        echo "',
                                    text: '";
        // line 248
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All notifications has been marked as read!"]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 251
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    }
                });

            });
        }

        var updateTotal = function () {
            datatable.on('kt-datatable--on-layout-updated', function () {
                \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 265
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
            });
        };

        return {
            // public functions
            init: function () {
                init();
                search();
                selection();
                selectedStatusUpdate();
                selectedDelete();
                updateTotal();
            },
        };
    }();

    // On document ready
    KTUtil.ready(function () {
        KTAppUserListDatatable.init();
    });
</script>
";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/notifications.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 10,  442 => 265,  425 => 251,  419 => 248,  415 => 247,  405 => 240,  398 => 236,  392 => 233,  372 => 216,  366 => 213,  362 => 212,  352 => 205,  346 => 202,  342 => 201,  334 => 196,  327 => 192,  319 => 189,  249 => 122,  242 => 118,  233 => 112,  224 => 106,  217 => 104,  210 => 102,  203 => 100,  196 => 98,  189 => 96,  179 => 89,  168 => 81,  134 => 50,  129 => 48,  106 => 38,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  68 => 24,  64 => 23,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-portlet kt-portlet--mobile\">
    <div class=\"kt-portlet__body kt-portlet__body--fit\">
        <!--begin: Datatable -->
        <div class=\"kt-datatable\"></div>
        <!--end: Datatable -->
    </div>
</div>


{% put scripts %}
<script type=\"text/javascript\">
    var KTAppUserListDatatable = function () {

        // variables
        var datatable;

        // init
        var init = function () {
            // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
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
                                //info: '{{\"Displaying\"|__}} {{start}} - {{end}} {{\"of\"|__}} {{total}} {{\"records\"|__}}'
                            }
                        }
                    }
                },
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url: '{{url(\"api/notifications\")}}',
                            params: {
                              id: {{user.id}}
                            }

                        },
                    },
                    pageSize: 10, // display 20 records per page
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },

                // layout definition
                layout: {
                    scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                    footer: false, // display/hide footer
                },

                // column sorting
                sortable: true,

                pagination: true,

                search: {
                    input: \$('#generalSearch'),
                    delay: 400,
                },


                columns: [
                  {
                    field: 'sender',
                    title: '{{\"Sender\"|__}}',
                    sortable: false,
                    // sortable: 'asc', // default sort
                    filterable: true, // disable or enable filtering
                    width: 200
                  },
                  {
                    field: 'notification',
                    title: '{{\"Notification\"|__}}',
                    sortable: false,
                    // sortable: 'asc', // default sort
                    filterable: true, // disable or enable filtering
                    width: 350,
                    template: function(row) {
                        if(row.notification == 'new_shipments'){
                            return '<a href=\"{{ 'dashboard/notifications'|page }}/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">{{theme_lang.new_shipments}}</span>';
                        }else if(row.notification == 'approved_shipment'){
                            return '<a href=\"{{ 'dashboard/notifications'|page }}/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">{{theme_lang.approved_shipment}}</span>';
                        }else if(row.notification == 'refused_shipment'){
                            return '<a href=\"{{ 'dashboard/notifications'|page }}/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">{{theme_lang.refused_shipment}}</span>';
                        }else if(row.notification == 'postponed_shipment'){
                            return '<a href=\"{{ 'dashboard/notifications'|page }}/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">{{theme_lang.postponed_shipment}}</span>';
                        }else if(row.notification == 'transfered_shipment'){
                            return '<a href=\"{{ 'dashboard/notifications'|page }}/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">{{theme_lang.transfered_shipment}}</span>';
                        }else{
                            return '<a href=\"{{ 'dashboard/notifications'|page }}/' + row.id + '\" class=\"btn btn-bold btn-sm btn-font-sm\">'+row.notification+'</span>';
                        }
                    },
                  },
                  {
                      field: 'status',
                      title: '{{\"Status\"|__}}',
                      responsive: {visible: 'lg'},
                      // callback function support for column rendering
                      template: function(row) {
          \t\t\t\t\tvar status = {
          \t\t\t\t\t\t'new': {
          \t\t\t\t\t\t\t'title': '{{\"New\"|__}}',
          \t\t\t\t\t\t\t'class': ' btn-label-success'
          \t\t\t\t\t\t},
          \t\t\t\t\t\t'readed': {
          \t\t\t\t\t\t\t'title': '{{\"Readed\"|__}}',
          \t\t\t\t\t\t\t'class': ' btn-label-dark'
          \t\t\t\t\t\t}
          \t\t\t\t\t};
          \t\t\t\t\treturn '<span class=\"btn btn-bold btn-sm btn-font-sm ' + status[row.status].class + '\">' + status[row.status].title + '</span>';
                      },
                  },
                 ]
            });
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
            \$('#check_all').on('click', function (e) {
                e.preventDefault();
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure to mark all notifications as readed?'|__}}\",
                    type: \"question\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onCheckall', {
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Readed!\"|__}}',
                                    text: '{{\"All notifications has been marked as read!\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    }
                });

            });
        }

        var updateTotal = function () {
            datatable.on('kt-datatable--on-layout-updated', function () {
                \$('#kt_subheader_total').html(datatable.getTotalRows() + ' {{\"Total\"|__}}');
            });
        };

        return {
            // public functions
            init: function () {
                init();
                search();
                selection();
                selectedStatusUpdate();
                selectedDelete();
                updateTotal();
            },
        };
    }();

    // On document ready
    KTUtil.ready(function () {
        KTAppUserListDatatable.init();
    });
</script>
{% endput %}", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/notifications.htm", "");
    }
}
