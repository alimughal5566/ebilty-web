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

/* C:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm */
class __TwigTemplate_6441717e46cf8efd8feb0c55b91bc64625845a707095bd97071b860d3b38acc2 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
 ";
        // line 2
        if ((($context["addShipmentForm"] ?? null) == "add_form_simple")) {
            // line 3
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 3) != 5)) {
                // line 4
                echo " <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        ";
                // line 10
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender information"]);
                echo "
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <input name=\"sender_id\" id=\"sender_id\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\" type=\"hidden\" class=\"snder_id\"/>
                        <label>";
                // line 18
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Name"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control name\" name=\"sender_name\" required />
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>";
                // line 22
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>";
                // line 28
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control city_id\" name=\"sender_city_id\"  required>
                            <option data-hidden=\"true\"></option>
                            ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                    // line 32
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 32), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 32), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                        </select>
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>";
                // line 37
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sector"]);
                echo "</label>
                        <select class=\"form-control area_id\"  name=\"sender_area_id\" >
                            <option data-hidden=\"true\"></option>
                            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 41
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 41), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 41), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                        </select>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
                // line 48
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
                echo "</label>
                        <input type=\"text\" class=\"form-control street_addr\" name=\"sender_addr\"   required/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
            }
            // line 58
            echo " <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        ";
            // line 64
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment information"]);
            echo "
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            ";
            // line 73
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <!-- <div class=\"form-group col-lg-4 kt-hide\">
                        <label>";
            // line 85
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 87), "prefix_order", [], "any", false, false, false, 87), "html", null, true);
            echo "</span></div>
                            <input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\" readonly=\"\" >
                        </div>
                    </div> -->

                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 93
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Product Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"kt-form__control\">
                            <input type=\"text\" class=\"form-control\" name=\"category_id\" value=\"\" required=\"\">
                        </div>
                        <!-- <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 100
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 100), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 100), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                        </select> -->
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 105
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"kt-form__control\">
                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"1\">
                        </div>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 111
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"kt-form__control\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
            // line 114
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
            echo "</span></div>
                                <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" value=\"5\" name=\"weight\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 122
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Type"]);
            echo "</label>
                        <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                            <option data-hidden=\"true\"></option>
                            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                // line 126
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 126) == "shipping")) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 126), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 131
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Product price"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group\">
                            ";
            // line 133
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 133) == 1)) {
                // line 134
                echo "                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        ";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 136), "html", null, true);
                echo "
                                    </span>
                                </div>
                            ";
            }
            // line 140
            echo "                            <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 140), "delivery_cost", [], "any", false, false, false, 140), "html", null, true);
            echo "\" required>
                            ";
            // line 141
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 141) == 0)) {
                // line 142
                echo "                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 144), "html", null, true);
                echo "
                                    </span>
                                </div>
                            ";
            }
            // line 148
            echo "                        </div>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 151
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Date"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 153)), "html", null, true);
            echo "\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <input name=\"sender_id\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 164), "html", null, true);
            echo "\" type=\"hidden\" />
                        <label>";
            // line 165
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control name\" name=\"name\" required />
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>";
            // line 169
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control mobile\" name=\"mobile\" required />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>";
            // line 175
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control city_id\" name=\"city_id\"  required>
                            <option data-hidden=\"true\"></option>
                            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 179
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 179), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 179), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                        </select>
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>";
            // line 184
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                        <select class=\"form-control area_id\"  name=\"area_id\" >
                            <option data-hidden=\"true\"></option>
                            ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 188
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 188), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 188), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                        </select>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>";
            // line 195
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
            echo "</label>
                        <input type=\"text\" class=\"form-control street_addr\" name=\"street_addr\"   required/>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"kt-form__group--inline\">
                            <div class=\"kt-form__label\">
                                <label class=\"kt-label m-label--single\">";
            // line 201
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Comment"]);
            echo ":</label>
                            </div>
                            <div class=\"kt-form__control\">
                                <input type=\"text\" class=\"form-control\" name=\"description\">
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 209
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 209)) {
                // line 210
                echo "                    <div class=\"form-group row kt-margin-t-20\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 211
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                echo " wq</label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                <option data-hidden=\"true\"></option>
                                <option value=\"\"></option>
                                ";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 217
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 217), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 217), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                            </select>
                        </div>
                    </div>
                ";
            }
            // line 223
            echo "            </div>
        </div>
    </div>
</div>

";
        } elseif ((        // line 228
($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 229
            echo "
";
            // line 230
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("normalShipmentAddForm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 231
            echo "
";
        } else {
            // line 233
            echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseOne\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">
                            ";
            // line 242
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment information"]);
            echo "
                            </h3>
                        </div>
                    </div>
                </div>
                <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                        <div class=\"kt-portlet__body\">
                            <div class=\"form-group form-group-last kt-hide\">
                                <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                                    <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                                    <div class=\"alert-text\">
                                        ";
            // line 254
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
                                    </div>
                                    <div class=\"alert-close\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 263
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 263), "enable_type", [], "any", false, false, false, 263) == 1)) {
                // line 264
                echo "                                <div class=\"kt-section\">
                                    <h3 class=\"kt-section__title kt-margin-b-20\">
                                    ";
                // line 266
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Book As"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                    </h3>
                                    <div class=\"kt-section__content\">
                                        <div class=\"form-group form-group-last\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <label class=\"kt-option\">
                                                        <span class=\"kt-option__control\">
                                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"1\" ";
                // line 275
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 275), "type", [], "any", false, false, false, 275) == 1)) {
                    echo "checked ";
                }
                echo " required>
                                                                <span></span>
                                                            </span>
                                                        </span>
                                                        <span class=\"kt-option__label\">
                                                            <span class=\"kt-option__head\">
                                                                <span class=\"kt-option__title\">
                                                                    ";
                // line 282
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                ";
                // line 287
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For sending a parcel"]);
                echo "
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label class=\"kt-option\">
                                                        <span class=\"kt-option__control\">
                                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"2\" ";
                // line 296
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 296), "type", [], "any", false, false, false, 296) == 2)) {
                    echo "checked ";
                }
                echo " required>
                                                                <span></span>
                                                            </span>
                                                        </span>
                                                        <span class=\"kt-option__label\">
                                                            <span class=\"kt-option__head\">
                                                                <span class=\"kt-option__title\">
                                                                    ";
                // line 303
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
                echo "
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                ";
                // line 308
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For receiving shipment"]);
                echo "
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-text text-muted\"><!--must use this helper element to display error message for the options--></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0\"></div>
                            ";
            }
            // line 320
            echo "                            <div class=\"row\">
                                ";
            // line 321
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 321), "enable_package_type", [], "any", false, false, false, 321) == 1)) {
                // line 322
                echo "                                    <div class=\"form-group ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 322), "enable_branch", [], "any", false, false, false, 322) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 322), "enable_shippingDate", [], "any", false, false, false, 322) == 1))) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                        <label>";
                // line 323
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Type"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
                // line 326
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["packaging"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                    // line 327
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 327), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 327), "packaging_id", [], "any", false, false, false, 327) == twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 327))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 327), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "                                        </select>
                                    </div>
                                ";
            }
            // line 332
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 332), "enable_branch", [], "any", false, false, false, 332) == 1)) {
                // line 333
                echo "                                    <div class=\"form-group ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 333), "enable_package_type", [], "any", false, false, false, 333) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 333), "enable_shippingDate", [], "any", false, false, false, 333) == 1))) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                        <label>";
                // line 334
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control\" name=\"office_id\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
                // line 337
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
                    // line 338
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 338), "html", null, true);
                    echo "\" ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "office", [], "any", false, false, false, 338) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 338)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 338), "office_id", [], "any", false, false, false, 338) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 338)))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 338), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "                                        </select>
                                    </div>
                                ";
            }
            // line 343
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 343), "enable_shippingDate", [], "any", false, false, false, 343) == 1)) {
                // line 344
                echo "                                    <div class=\"form-group ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 344), "enable_package_type", [], "any", false, false, false, 344) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 344), "enable_branch", [], "any", false, false, false, 344) == 1))) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                        <label>";
                // line 345
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Date"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <div class=\"input-group date\">
                                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
                // line 347
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 347)), "html", null, true);
                echo "\" required>
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"la la-calendar\"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <div class=\"form-group ";
                // line 355
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 355), "enable_package_type", [], "any", false, false, false, 355) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 355), "enable_branch", [], "any", false, false, false, 355) == 1))) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                        <label>";
                // line 356
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Time"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <div class=\"input-group \">
                                            <input type=\"time\" class=\"form-control ship_time\"  name=\"ship_time\" required>
<!--                                            <div class=\"input-group-append\">-->
<!--                                                <span class=\"input-group-text\">-->
<!--                                                    <i class=\"la la-clock-o\"></i>-->
<!--                                                </span>-->
<!--                                            </div>-->
                                        </div>
                                    </div>
                                ";
            }
            // line 367
            echo "
                                <div class=\"col-lg-4 offset-2\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1\">
                                        ";
            // line 370
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Type"]);
            echo "&nbsp;<span class=\"kt-badge  \"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"dilivery_typ\" class=\"dilivery_typ\" value=\"2\"  required checked>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
            // line 382
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Vehicle"]);
            echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
            // line 387
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [""]);
            echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-4\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1\">
                                        &nbsp;<span class=\"\"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"dilivery_typ\" class=\"dilivery_typ\" value=\"1\"  required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
            // line 406
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package"]);
            echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
            // line 411
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [""]);
            echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>


                                <div class=\"col-lg-4 offset-2\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1 \">
                                        ";
            // line 420
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wants to avail Insurance?"]);
            echo "&nbsp;<span class=\"kt-badge  \"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"is_insured\" class=\"is_insured\" value=\"1\"  required >
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
            // line 432
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
            // line 437
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [""]);
            echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-4\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1\">
                                        &nbsp;<span class=\"\"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"is_insured\" class=\"is_insured\" value=\"0\"  required checked>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
            // line 456
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
            // line 461
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [""]);
            echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        \t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t";
            // line 483
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender information"]);
            echo "
        \t\t\t\t\t</h3>
        \t\t\t\t</div>
        \t\t\t</div>
                </div>
                <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                    <div class=\"form-group form-group-last kt-hide\">
        \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
        \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
        \t\t\t\t  \t<div class=\"alert-text\">
                                ";
            // line 494
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"alert-close\">
        \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
        \t\t\t\t\t  \t</button>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</div>
                    ";
            // line 503
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 503) == 5)) {
                // line 504
                echo "                        <div class=\"form-group row\">
                            ";
                // line 505
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 505), "enable_anotherCustomer", [], "any", false, false, false, 505) == 1)) {
                    // line 506
                    echo "                            <div class=\"form-group  col-lg-6\">
                                <label class=\"col-form-label\">";
                    // line 507
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Another Sender"]);
                    echo "</label>
                                <div class=\"\">
                                    <div class=\"kt-checkbox-single\">
                                        <label class=\"kt-checkbox\">
                                            <input type=\"checkbox\" id=\"enable_anotherSender\" name=\"enable_anotherSender\" ";
                    // line 511
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 511), "anotherCustomer", [], "any", false, false, false, 511) == 1)) {
                        echo "checked";
                    }
                    echo "> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                    echo "
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            ";
                }
                // line 518
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 518), "enable_customerPublic", [], "any", false, false, false, 518) == 1)) {
                    // line 519
                    echo "                           <!--  <div class=\"form-group col-lg-6\">
                                <label class=\"col-form-label\">";
                    // line 520
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Show Sender Data"]);
                    echo "</label>
                                <div class=\"\">
                                    <div class=\"kt-checkbox-single\">
                                        <label class=\"kt-checkbox\">
                                            <input type=\"checkbox\" id=\"enable_showSender\" name=\"enable_showSender\" ";
                    // line 524
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 524), "customerPublic", [], "any", false, false, false, 524) == 1)) {
                        echo "checked";
                    }
                    echo "> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                    echo "
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            ";
                }
                // line 531
                echo "                        </div>

                        <div class=\"another_sender ";
                // line 533
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 533), "anotherCustomer", [], "any", false, false, false, 533) != 1)) {
                    echo "kt-hidden";
                }
                echo "\">
                            <div class=\" form-group row\">
                                <label>";
                // line 535
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control clients\" name=\"another_sender_id\" id=\"sender_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 538
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                                    </select>
                                    <span class=\"text-muted\">";
                // line 540
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
                echo "</span>
                            </div>
                            <div class=\"form-group row\">
                                <label>";
                // line 543
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
                // line 544
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
                echo "\" required>
                                    <option data-hidden=\"true\"></option><label>";
                // line 545
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>

                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 547
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>

                                </select>
                            </div>
                        </div>

                    ";
            }
            // line 554
            echo "                    <div class=\"base_sender ";
            if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 554) == 5) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 554), "anotherCustomer", [], "any", false, false, false, 554) == 1))) {
                echo "kt-hidden";
            }
            echo "\">
                        <div class=\"form-group row col-md-12 pl-0\">
                            <label>";
            // line 556
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                             <span class=\"dev1 col-12 p-0\">
                                <input name=\"sender_id\" id=\"sender_id\"  value=\"";
            // line 558
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 558), "html", null, true);
            echo "\" type=\"hidden\" />
                                <input value=\"";
            // line 559
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 559), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"  />
                            </span>
                            <div class=\"dev2 kt-hidden col-12\">
                                <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            // line 564
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                </select>
                                <span class=\"text-muted\">";
            // line 566
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
            echo "</span>
                            </div>
                        </div>
                        ";
            // line 569
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 569) == 5)) {
                // line 570
                echo "                            ";
                if ((null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 570))) {
                    // line 571
                    echo "                                <div class=\"form-group row\">
                                    <label>";
                    // line 572
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                                </div>
                            ";
                }
                // line 576
                echo "                        ";
            }
            // line 577
            echo "                        <div class=\"form-group row\">
                            <label>";
            // line 578
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
            // line 579
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender City"]);
            echo "\" required>
                                ";
            // line 580
            if (($context["spot_shipment_address"] ?? null)) {
                // line 581
                echo "                                      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["spot_shipment_address"] ?? null), "id", [], "any", false, false, false, 581), "html", null, true);
                echo "\" class=\"usr\" selected >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["spot_shipment_address"] ?? null), "name", [], "any", false, false, false, 581), "html", null, true);
                echo "</option>
                                ";
            }
            // line 583
            echo "                                <option value='' class='rem' disabled>Please Choose sender</option>
                                <option value=\"new\" data-icon=\"flaticon2-add\">";
            // line 584
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                            </select>
                        </div>
                    </div>

                        <div class=\"row kt-hidden\" id=\"addnewsender\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                \t\t\t\t<div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                    \t<span class=\"kt-portlet__head-icon\">
                                    \t\t<i class=\"flaticon2-user\"></i>
                                    \t</span>
                                    \t<h3 class=\"kt-portlet__head-title\">
                                    \t\t";
            // line 597
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
            echo " <small>";
            echo "Fill data and save it brefore you can continue";
            echo "</small>
                                    \t</h3>
                                    </div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group ";
            // line 603
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 603), "enable_gender", [], "any", false, false, false, 603) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                            <label>";
            // line 604
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                        </div>
                                        <div class=\"form-group ";
            // line 607
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 607), "enable_gender", [], "any", false, false, false, 607) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                            <label>";
            // line 608
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                        </div>
                                        ";
            // line 611
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 611), "enable_gender", [], "any", false, false, false, 611) == 1)) {
                // line 612
                echo "                                        <div class=\"form-group col-lg-3\">
                                            <label>";
                // line 613
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                            <div class=\"kt-radio-inline\">
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\" ";
                // line 616
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 616), "gender", [], "any", false, false, false, 616) == "male")) {
                    echo "checked";
                }
                echo " > ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                    \t\t\t\t\t\t\t\t<span></span>
                    \t\t\t\t\t\t\t</label>
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\" ";
                // line 620
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 620), "gender", [], "any", false, false, false, 620) == "female")) {
                    echo "checked";
                }
                echo " > ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
                echo "
                    \t\t\t\t\t\t\t\t<span></span>
                    \t\t\t\t\t\t\t</label>
                    \t\t\t\t\t\t</div>
                                        </div>
                                        ";
            }
            // line 626
            echo "                                    </div>
                                    <div class=\"location-sender\">
                                        <div class=\"row\">
                                            ";
            // line 629
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 629), "enable_mapAddress", [], "any", false, false, false, 629) == 1)) {
                // line 630
                echo "                                            <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 630), "enable_postalCode", [], "any", false, false, false, 630) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                <label>";
                // line 631
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address \" name=\"sender[street_address_map]\"  rel=\"sender\" value=\"";
                // line 632
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 632), "street_address_map", [], "any", false, false, false, 632), "html", null, true);
                echo "\" />
                                                <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                            </div>
                                            ";
            }
            // line 638
            echo "                                            <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 638), "enable_mapAddress", [], "any", false, false, false, 638) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 638), "enable_postalCode", [], "any", false, false, false, 638) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                <label>";
            // line 639
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 642
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 643
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 643), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 643), "name", [], "any", false, false, false, 643), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 643), "name", [], "any", false, false, false, 643), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 645
            echo "                                                </select>
                                            </div>
                                            ";
            // line 647
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 647), "enable_postalCode", [], "any", false, false, false, 647) == 1)) {
                // line 648
                echo "                                            <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 648), "enable_mapAddress", [], "any", false, false, false, 648) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                <label>";
                // line 649
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" value=\"";
                // line 650
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 650), "postal_code", [], "any", false, false, false, 650), "html", null, true);
                echo "\">
                                            </div>
                                            ";
            }
            // line 653
            echo "
                                            ";
            // line 654
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 654), "enable_state", [], "any", false, false, false, 654) == 1)) {
                // line 655
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 656
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"";
                // line 657
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"sender[state]\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
                // line 659
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 660
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 660), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 660), "name", [], "any", false, false, false, 660), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 660), "state", [], "any", false, false, false, 660) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 660))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 660), "name", [], "any", false, false, false, 660), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 662
                echo "                                                </select>
                                            </div>
                                            ";
            }
            // line 665
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 666
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"";
            // line 667
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 669
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 670
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 670), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 670), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 672
            echo "                                                </select>
                                            </div>

                                            ";
            // line 675
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 675), "enable_county", [], "any", false, false, false, 675) == 1)) {
                // line 676
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 677
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "</label>
                                                <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"";
                // line 678
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
                // line 680
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 681
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 681), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 681), "county", [], "any", false, false, false, 681) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 681))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 681), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 683
                echo "                                                </select>
                                            </div>
                                            ";
            }
            // line 686
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 686), "enable_streetAddress", [], "any", false, false, false, 686) == 1)) {
                // line 687
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 688
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
                echo "</label>
                                                <input type=\"text\" class=\"form-control street_addr\" name=\"sender[street_address]\" value=\"";
                // line 689
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 689), "street_address", [], "any", false, false, false, 689), "html", null, true);
                echo "\"  required/>
                                            </div>
                                            ";
            }
            // line 692
            echo "                                        </div>
                                        ";
            // line 693
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 693), "enable_mapAddress", [], "any", false, false, false, 693) == 1)) {
                // line 694
                echo "                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
                // line 696
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                                <span class=\"form-text text-muted\">";
                // line 698
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                            </div>
                                        </div>
                                        ";
            }
            // line 702
            echo "
                                        ";
            // line 703
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 703), "enable_createAccount", [], "any", false, false, false, 703) == 1)) {
                // line 704
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 704)) {
                    // line 705
                    echo "                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                        <div class=\"kt-checkbox-single\">
                                                            <label class=\"kt-checkbox\">
                                                                <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\" ";
                    // line 710
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 710), "connect", [], "any", false, false, false, 710) == 1)) {
                        echo "checked";
                    }
                    echo "> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connect client"]);
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["create an account for the client"]);
                    echo "
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row align-items-center kt-hidden\" id=\"connect_sender\">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group kt-form__group--inline\">
                                                            <div class=\"kt-form__label\">
                                                                <label class=\"col-form-label\">";
                    // line 720
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                    echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <input type=\"text\" class=\"form-control email\" name=\"sender[email]\" required/>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-md-none kt-margin-b-10\"></div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group kt-form__group--inline\">
                                                            <div class=\"kt-form__label\">
                                                                <label class=\"col-form-label\">";
                    // line 731
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
                    echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <input type=\"text\" class=\"form-control username\" name=\"sender[username]\" required>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-md-none kt-margin-b-10\"></div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group kt-form__group--inline\">
                                                            <div class=\"kt-form__label\">
                                                                <label class=\"col-form-label\">";
                    // line 742
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
                    echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <input type=\"password\" class=\"form-control password\" name=\"sender[password]\" required>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-md-none kt-margin-b-10\"></div>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 752
                echo "                                        ";
            }
            // line 753
            echo "                                    </div>
                \t\t\t\t</div>
                                <div class=\"kt-portlet__foot\">
                    \t\t\t\t<div class=\"row align-items-center\">
                    \t\t\t\t\t<div class=\"col-lg-12\">
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 758
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 759
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                    \t\t\t\t\t</div>
                    \t\t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>

                    <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <span class=\"kt-portlet__head-icon\">
                                        <i class=\"flaticon2-user\"></i>
                                    </span>
                                    <h3 class=\"kt-portlet__head-title\">
                                        ";
            // line 774
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
            echo " <small>";
            echo "Fill data and save it brefore you can continue";
            echo "</small>
                                    </h3>
                                </div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"location-senderaddress\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
            // line 782
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 789
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 792
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 793
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 793), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 793), "name", [], "any", false, false, false, 793), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 793), "name", [], "any", false, false, false, 793), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 795
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 798
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 804
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"";
            // line 805
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"senderaddress[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 807
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 808
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 808), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 808), "name", [], "any", false, false, false, 808), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 808), "name", [], "any", false, false, false, 808), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 810
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 813
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"";
            // line 814
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 816
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 817
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 817), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 817), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 819
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 822
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                            <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"";
            // line 823
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" >
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 825
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 826
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 826), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 826), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 828
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 833
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 835
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 843
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 844
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    ";
            // line 851
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 851), "enable_payment_type", [], "any", false, false, false, 851) == 1)) {
                // line 852
                echo "                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 853
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"1\" ";
                // line 857
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 857), "payment_type", [], "any", false, false, false, 857) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
                echo " </option>
                                <option value=\"2\" ";
                // line 858
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 858), "payment_type", [], "any", false, false, false, 858) == 2)) {
                    echo "selected";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Prepaid"]);
                echo " </option>
                            </select>
                        </div>
                    </div>
                    ";
            }
            // line 863
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 863), "enable_payment_method", [], "any", false, false, false, 863) == 1)) {
                // line 864
                echo "                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 865
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Method"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_method\" id=\"payment_method\" required>
                                <option data-hidden=\"true\"></option>
                                ";
                // line 869
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["enable_cash"] ?? null) : null) == 1)) {
                    // line 870
                    echo "                                <option value=\"cash\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 870), "payment_method", [], "any", false, false, false, 870) == "cash")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cash"]);
                    echo " </option>
                                ";
                }
                // line 872
                echo "                                ";
                if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["enable_transfer"] ?? null) : null) == 1)) {
                    // line 873
                    echo "                                <option value=\"transfer\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 873), "payment_method", [], "any", false, false, false, 873) == "transfer")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wire Transfer"]);
                    echo " </option>
                                ";
                }
                // line 875
                echo "                                ";
                if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["payment"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["enable_paystack"] ?? null) : null) == 1)) {
                    // line 876
                    echo "                                <option value=\"paystack\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 876), "payment_method", [], "any", false, false, false, 876) == "paystack")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack"]);
                    echo " </option>
                                ";
                }
                // line 878
                echo "                                ";
                if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["payment"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["enable_paypal"] ?? null) : null) == 1)) {
                    // line 879
                    echo "                                <option value=\"paypal\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 879), "payment_method", [], "any", false, false, false, 879) == "paypal")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paypal"]);
                    echo " </option>
                                ";
                }
                // line 881
                echo "                            </select>
                        </div>
                    </div>
                    ";
            }
            // line 885
            echo "                    <div class=\"form-group row type_1\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 886
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Record receiver information ?"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" checked required> ";
            // line 890
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" required> ";
            // line 894
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"type_2 receiver_information\">
                <div class=\"kt-portlet kt-portlet--mobile\">
                    <div class=\"panel panel-heading\">
                        <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseThree\">
            \t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t";
            // line 911
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver information"]);
            echo "
            \t\t\t\t\t</h3>
            \t\t\t\t</div>
            \t\t\t</div>
                    </div>
                    <div id=\"collapseThree\" class=\"panel-collapse collapse\">
                        <div class=\"kt-portlet__body\">
                            <div class=\"form-group row\">
                                <label>";
            // line 919
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <span class=\"dev21 col-12 kt-hidden \">
                                <input name=\"receiver_id\" id=\"receiver_id\"  value=\"";
            // line 921
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 921), "html", null, true);
            echo "\" type=\"hidden\" />
                                <input value=\"";
            // line 922
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 922), "html", null, true);
            echo "\" type=\"text\" class=\"form-control\"  />
                                 </span>

                                <div class=\"dev31 col-12 p-0\">
                                <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            // line 928
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                </select>
                                <span class=\"text-muted\">";
            // line 930
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will receive the package"]);
            echo "</span>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label>";
            // line 934
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
            // line 935
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 937
            if (($context["spot_shipment_address"] ?? null)) {
                // line 938
                echo "                                    <option class='usr1' value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["spot_shipment_address"] ?? null), "id", [], "any", false, false, false, 938), "html", null, true);
                echo "\" data-hidden=\"true\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["spot_shipment_address"] ?? null), "name", [], "any", false, false, false, 938), "html", null, true);
                echo "</option>
                                    ";
            }
            // line 940
            echo "                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                    <option class='rem1' selected disabled >Choose address</option>
                                </select>
                            </div>
                            <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                                <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                    \t\t\t\t<div class=\"kt-portlet__head\">
                                        <div class=\"kt-portlet__head-label\">
                                            <span class=\"kt-portlet__head-icon\">
                                                <i class=\"flaticon2-user\"></i>
                                            </span>
                                            <h3 class=\"kt-portlet__head-title\">
                                                ";
            // line 952
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
            echo " <small>";
            echo "Fill data and save it brefore you can continue";
            echo "</small>
                                            </h3>
                                        </div>
                    \t\t\t\t</div>
                    \t\t\t\t<div class=\"kt-portlet__body\">
                                        <div class=\"row\">
                                            <div class=\"form-group ";
            // line 958
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 958), "enable_gender", [], "any", false, false, false, 958) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                                <label>";
            // line 959
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                            </div>
                                            <div class=\"form-group ";
            // line 962
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 962), "enable_gender", [], "any", false, false, false, 962) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                                <label>";
            // line 963
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                            </div>
                                            ";
            // line 966
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 966), "enable_gender", [], "any", false, false, false, 966) == 1)) {
                // line 967
                echo "                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                // line 968
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                                <div class=\"kt-radio-inline\">
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" ";
                // line 971
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 971), "gender", [], "any", false, false, false, 971) == "male")) {
                    echo "checked";
                }
                echo "> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                        \t\t\t\t\t\t\t\t<span></span>
                        \t\t\t\t\t\t\t</label>
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" ";
                // line 975
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 975), "gender", [], "any", false, false, false, 975) == "female")) {
                    echo "checked";
                }
                echo "> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
                echo "
                        \t\t\t\t\t\t\t\t<span></span>
                        \t\t\t\t\t\t\t</label>
                        \t\t\t\t\t\t</div>
                                            </div>
                                            ";
            }
            // line 981
            echo "                                        </div>
                                        <div class=\"location-receiver\">
                                            <div class=\"row\">
                                                ";
            // line 984
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 984), "enable_mapAddress", [], "any", false, false, false, 984) == 1)) {
                // line 985
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 985), "enable_postalCode", [], "any", false, false, false, 985) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 986
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\"  name=\"receiver[street_address]\"  rel=\"receiver\" value=\"";
                // line 987
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 987), "street_address_map", [], "any", false, false, false, 987), "html", null, true);
                echo "\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                                </div>
                                                ";
            }
            // line 993
            echo "                                                <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 993), "enable_mapAddress", [], "any", false, false, false, 993) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 993), "enable_postalCode", [], "any", false, false, false, 993) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                    <label>";
            // line 994
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 997
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 998
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 998), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 998), "name", [], "any", false, false, false, 998), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 998), "name", [], "any", false, false, false, 998), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1000
            echo "                                                    </select>
                                                </div>
                                                ";
            // line 1002
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1002), "enable_postalCode", [], "any", false, false, false, 1002) == 1)) {
                // line 1003
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1003), "enable_mapAddress", [], "any", false, false, false, 1003) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 1004
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"";
                // line 1005
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1005), "postal_code", [], "any", false, false, false, 1005), "html", null, true);
                echo "\">
                                                </div>
                                                ";
            }
            // line 1008
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1008), "enable_state", [], "any", false, false, false, 1008) == 1)) {
                // line 1009
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1009), "enable_county", [], "any", false, false, false, 1009) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 1010
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
                // line 1011
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"receiver[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
                // line 1013
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 1014
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1014), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1014), "name", [], "any", false, false, false, 1014), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1014), "state", [], "any", false, false, false, 1014) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1014))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1014), "name", [], "any", false, false, false, 1014), "html", null, true);
                    echo "</option>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1016
                echo "                                                    </select>
                                                </div>
                                                ";
            }
            // line 1019
            echo "                                                <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1019), "enable_county", [], "any", false, false, false, 1019) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1019), "enable_state", [], "any", false, false, false, 1019) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                    <label>";
            // line 1020
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
            // line 1021
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1023
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 1024
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1024), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1024), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1026
            echo "                                                    </select>
                                                </div>
                                                ";
            // line 1028
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1028), "enable_county", [], "any", false, false, false, 1028) == 1)) {
                // line 1029
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1029), "enable_state", [], "any", false, false, false, 1029) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 1030
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
                // line 1031
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
                // line 1033
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 1034
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1034), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1034), "county", [], "any", false, false, false, 1034) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1034))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 1034), "html", null, true);
                    echo "</option>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1036
                echo "                                                    </select>
                                                </div>
                                                ";
            }
            // line 1039
            echo "                                            </div>
                                            ";
            // line 1040
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1040), "enable_mapAddress", [], "any", false, false, false, 1040) == 1)) {
                // line 1041
                echo "                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>";
                // line 1043
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                    <span class=\"form-text text-muted\">";
                // line 1045
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                                </div>
                                            </div>
                                            ";
            }
            // line 1049
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1049), "enable_createAccount", [], "any", false, false, false, 1049) == 1)) {
                // line 1050
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 1050)) {
                    // line 1051
                    echo "                                                    <div class=\"form-group row\">
                                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                        <div class=\"col-lg-9 col-xl-6\">
                                                            <div class=\"kt-checkbox-single\">
                                                                <label class=\"kt-checkbox\">
                                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" ";
                    // line 1056
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1056), "connect", [], "any", false, false, false, 1056) == 1)) {
                        echo "checked";
                    }
                    echo "> ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connect client"]);
                    echo ": ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["create an account for the client"]);
                    echo "
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                                        <div class=\"col-md-4\">
                                                            <div class=\"form-group kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"col-form-label\">";
                    // line 1066
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                    echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                                </div>
                                                            </div>
                                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <div class=\"form-group kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"col-form-label\">";
                    // line 1077
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
                    echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <div class=\"form-group kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"col-form-label\">";
                    // line 1088
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
                    echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"password\" class=\"form-control password\" name=\"receiver[password]\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 1098
                echo "                                            ";
            }
            // line 1099
            echo "                                        </div>
                    \t\t\t\t</div>
                                    <div class=\"kt-portlet__foot\">
                        \t\t\t\t<div class=\"row align-items-center\">
                        \t\t\t\t\t<div class=\"col-lg-12\">
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 1104
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 1105
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                        \t\t\t\t\t</div>
                        \t\t\t\t</div>
                        \t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
                            <div class=\"row kt-hidden\" id=\"addnewreceiveraddress\">
                                <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                    \t\t\t\t<div class=\"kt-portlet__head\">
                                        <div class=\"kt-portlet__head-label\">
                                            <span class=\"kt-portlet__head-icon\">
                                                <i class=\"flaticon2-user\"></i>
                                            </span>
                                            <h3 class=\"kt-portlet__head-title\">
                                                ";
            // line 1119
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
            echo " <small>";
            echo "Fill data and save it brefore you can continue";
            echo "</small>
                                            </h3>
                                        </div>
                    \t\t\t\t</div>
                    \t\t\t\t<div class=\"kt-portlet__body\">
                                        <div class=\"location-receiveraddress\">
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-5\">
                                                    <label>";
            // line 1127
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1134
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 1138
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 1138), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1138), "name", [], "any", false, false, false, 1138), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 1138), "name", [], "any", false, false, false, 1138), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1140
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-3\">
                                                    <label>";
            // line 1143
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1149
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
            // line 1150
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 1153
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1153), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1153), "name", [], "any", false, false, false, 1153), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1153), "name", [], "any", false, false, false, 1153), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1155
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1158
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
            // line 1159
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 1162
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1162), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1162), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1164
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1167
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                                    <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
            // line 1168
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 1171
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1171), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1171), "name", [], "any", false, false, false, 1171), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 1171), "name", [], "any", false, false, false, 1171), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1173
            echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>";
            // line 1178
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                    <span class=\"form-text text-muted\">";
            // line 1180
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                                </div>
                                            </div>
                                        </div>
                    \t\t\t\t</div>
                                    <div class=\"kt-portlet__foot\">
                        \t\t\t\t<div class=\"row align-items-center\">
                        \t\t\t\t\t<div class=\"col-lg-12\">
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 1188
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 1189
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                        \t\t\t\t\t</div>
                        \t\t\t\t</div>
                        \t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
                            ";
            // line 1195
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1195), "enable_return_package", [], "any", false, false, false, 1195) == 1)) {
                // line 1196
                echo "                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                ";
                // line 1199
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">";
                // line 1200
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes if you need to return money from the receiver to sender after delivery"]);
                echo "</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
                // line 1205
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1205), "return_package", [], "any", false, false, false, 1205) == 1)) {
                    echo "checked";
                }
                echo " required> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                echo "
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
                // line 1209
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1209), "return_package", [], "any", false, false, false, 1209) == 2)) {
                    echo "checked";
                }
                echo " required> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
                echo "
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 1216
            echo "                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1217
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">";
            // line 1218
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount that will be returned to the sender from the receiver"]);
            echo "</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"input-group\">
                                        ";
            // line 1222
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1222) == 1)) {
                // line 1223
                echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1225), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1229
            echo "                        \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"package_fee\" required />
                                        ";
            // line 1230
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1230) == 0)) {
                // line 1231
                echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1233), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1237
            echo "                                    </div>
                                </div>
                            </div>
                            ";
            // line 1240
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1240) != 5)) {
                // line 1241
                echo "                                <div class=\"form-group row kt-hidden package_fee\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 1242
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <div class=\"input-group\">
                                            ";
                // line 1245
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1245) == 1)) {
                    // line 1246
                    echo "                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\">
                                                        ";
                    // line 1248
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1248), "html", null, true);
                    echo "
                                                    </span>
                                                </div>
                                            ";
                }
                // line 1252
                echo "                            \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1252), "delivery_cost_back_receiver", [], "any", false, false, false, 1252), "html", null, true);
                echo "\" required />
                                            ";
                // line 1253
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1253) == 0)) {
                    // line 1254
                    echo "                                                <div class=\"input-group-append\">
                                                    <span class=\"input-group-text\">
                                                        ";
                    // line 1256
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1256), "html", null, true);
                    echo "
                                                    </span>
                                                </div>
                                            ";
                }
                // line 1260
                echo "                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 1264
            echo "                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1265
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" checked required> ";
            // line 1269
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required> ";
            // line 1273
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"kt-portlet\">
                <div class=\"panel panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseTFour\">
        \t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t";
            // line 1294
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
            echo "
        \t\t\t\t\t</h3>
        \t\t\t\t</div>
        \t\t\t</div>
                </div>
                <div id=\"collapseTFour\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                        <div class=\"form-group form-group-last kt-hide\">
            \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
            \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
            \t\t\t\t  \t<div class=\"alert-text\">
                                    ";
            // line 1305
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
            \t\t\t\t\t</div>
            \t\t\t\t\t<div class=\"alert-close\">
            \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
            \t\t\t\t\t  \t</button>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
                        <div class=\"kt-section\">
        \t\t\t\t\t<h3 class=\"kt-section__title kt-margin-b-20\">
        \t\t\t\t\t\t";
            // line 1316
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Content"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
        \t\t\t\t\t</h3>
        \t\t\t\t\t<div class=\"kt-section__content\">
                                <div class=\"form-group form-group-last row\" id=\"package_repeater\">
                                    <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                        <div data-repeater-item class=\"align-items-center\">
                                            <div class=\"form-group row\">
                                                <div class=\"";
            // line 1323
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1323), "enable_description", [], "any", false, false, false, 1323) == 1)) {
                echo "col-md-4";
            } else {
                echo "col-md-6";
            }
            echo "\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label>";
            // line 1326
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                                <option data-hidden=\"true\"></option>
                                                                ";
            // line 1331
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 1332
                echo "                                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1332), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1332), "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1334
            echo "                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            // line 1338
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1338), "enable_description", [], "any", false, false, false, 1338) == 1)) {
                // line 1339
                echo "                                                <div class=\"col-md-8\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1342
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
                // line 1345
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1345), "description", [], "any", false, false, false, 1345), "html", null, true);
                echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1350
            echo "
                                                ";
            // line 1351
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1351), "enable_quantity", [], "any", false, false, false, 1351) == 1)) {
                // line 1352
                echo "                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1355
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\"  value=\"";
                // line 1358
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1358), "quantity", [], "any", false, false, false, 1358), "html", null, true);
                echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1363
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1363), "enable_weight", [], "any", false, false, false, 1363) == 1)) {
                // line 1364
                echo "                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1367
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <div class=\"input-group\">
                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1371
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\" value=\"";
                // line 1372
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1372), "weight", [], "any", false, false, false, 1372), "html", null, true);
                echo "\" >
                                        \t\t\t\t\t</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1378
            echo "
                                                ";
            // line 1379
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1379), "enable_dimensions", [], "any", false, false, false, 1379) == 1)) {
                // line 1380
                echo "                                                <div class=\"col-md-12\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1383
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dimensions"]);
                echo "&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Length"]);
                echo "&nbsp;x&nbsp;";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Width"]);
                echo "&nbsp;x&nbsp;";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Height"]);
                echo "] (";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                echo "):</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <div class=\"input-group\">
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1389
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1389), "length", [], "any", false, false, false, 1389), "html", null, true);
                echo "\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1395
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1395), "width", [], "any", false, false, false, 1395), "html", null, true);
                echo "\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1401
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1401), "height", [], "any", false, false, false, 1401), "html", null, true);
                echo "\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t</div>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-md-none kt-margin-b-10\"></div>
                                                </div>
                                                ";
            }
            // line 1410
            echo "                                            </div>
                                            <div class=\"form-group row\">
                                                <div class=\"col-md-3\">
                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                        <i class=\"la la-trash-o\"></i>
                                                        ";
            // line 1415
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
            echo "
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group form-group-last row\">
                                        <label class=\"col-xl-12 col-form-label kt-align-right\">
                                            <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                <i class=\"la la-plus\"></i> ";
            // line 1424
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
            echo "
                                            </a>
                                        </label>
                                   </div>
                                 </div>
                            </div>
                        </div>
                        ";
            // line 1431
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1431) == 5)) {
                // line 1432
                echo "                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
                                <div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <div class=\"form-group readonly col-lg-6\">
                                            <label>";
                // line 1437
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                ";
                // line 1439
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1439) == 1)) {
                    // line 1440
                    echo "                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1442
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1442), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1446
                echo "                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1446), "delivery_cost", [], "any", false, false, false, 1446), "html", null, true);
                echo "\" required readonly>
                                                ";
                // line 1447
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1447) == 0)) {
                    // line 1448
                    echo "                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1450
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1450), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1454
                echo "                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1458
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1460
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                                <input  type=\"text\" class=\"form-control decimal total_weight\" name=\"total_weight\" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 1468
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1468) != 5)) {
                // line 1469
                echo "                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
            \t\t\t\t\t<div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <!-- <div class=\"form-group col-lg-4\">
                                            <label>";
                // line 1474
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1476
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1476), "prefix_order", [], "any", false, false, false, 1476), "html", null, true);
                echo "</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\">
                        \t\t\t\t\t</div>
                                        </div> -->
                                        ";
                // line 1480
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1480), "enable_tax", [], "any", false, false, false, 1480) == 1)) {
                    // line 1481
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1481), "type", [], "any", false, false, false, 1481) == 1)) {
                        // line 1482
                        echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                        // line 1483
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                        echo " & ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Duty"]);
                        echo "</label>
                                                <div class=\"input-group\">
                            \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                            \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"";
                        // line 1486
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1486), "percent", [], "any", false, false, false, 1486), "html", null, true);
                        echo "\">
                            \t\t\t\t\t</div>
                                            </div>
                                            ";
                    } else {
                        // line 1490
                        echo "                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                        // line 1491
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SGST"]);
                        echo "</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"sgst\" value=\"";
                        // line 1494
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1494), "SGST", [], "any", false, false, false, 1494), "html", null, true);
                        echo "\">
                                                </div>
                                            </div>
                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                        // line 1498
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CGST"]);
                        echo "</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"cgst\" value=\"";
                        // line 1501
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1501), "CGST", [], "any", false, false, false, 1501), "html", null, true);
                        echo "\">
                                                </div>
                                            </div>
                                            ";
                    }
                    // line 1505
                    echo "                                        ";
                }
                // line 1506
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1506), "enable_insurance", [], "any", false, false, false, 1506) == 1)) {
                    // line 1507
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1508
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
                    echo "</label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"";
                    // line 1511
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1511), "insurance", [], "any", false, false, false, 1511), "html", null, true);
                    echo "\">
                        \t\t\t\t\t</div>
                                        </div>
                                        ";
                }
                // line 1515
                echo "                                    </div>
                                    <div class=\"row\">
                                        ";
                // line 1517
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1517), "enable_shippingMode", [], "any", false, false, false, 1517) == 1)) {
                    // line 1518
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1519
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
                    echo "</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1522
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                        // line 1523
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1523), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1523), "mode_id", [], "any", false, false, false, 1523) == twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1523))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 1523), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1525
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1528
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1528), "enable_customsValue", [], "any", false, false, false, 1528) == 1)) {
                    // line 1529
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1530
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
                    echo "</label>
                                            <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"";
                    // line 1531
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1531), "customsValue", [], "any", false, false, false, 1531), "html", null, true);
                    echo "\" aria-describedby=\"basic-addon1\">
                                        </div>
                                        ";
                }
                // line 1534
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1534), "enable_courierCompany", [], "any", false, false, false, 1534) == 1)) {
                    // line 1535
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1536
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                    echo "</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1539
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["courier"]) {
                        // line 1540
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1540), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1540), "courier_id", [], "any", false, false, false, 1540) == twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1540))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "name", [], "any", false, false, false, 1540), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courier'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1542
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1545
                echo "                                    </div>
                                    <div class=\"row\">
                                        ";
                // line 1547
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1547), "enable_deliveryTime", [], "any", false, false, false, 1547) == 1)) {
                    // line 1548
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1549
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1552
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["deliverytime"]) {
                        // line 1553
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1553), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1553), "default_deliverytime", [], "any", false, false, false, 1553) == twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1553))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "name", [], "any", false, false, false, 1553), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deliverytime'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1555
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1558
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1558), "enable_deliveryStatus", [], "any", false, false, false, 1558) == 1)) {
                    // line 1559
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1560
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1563
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                        // line 1564
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1564), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "equal", [], "any", false, false, false, 1564), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1564), "default_status", [], "any", false, false, false, 1564) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1564))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 1564), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1566
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1569
                echo "                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1572
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                ";
                // line 1574
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1574) == 1)) {
                    // line 1575
                    echo "                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1577
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1577), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1581
                echo "                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1581), "delivery_cost", [], "any", false, false, false, 1581), "html", null, true);
                echo "\" required>
                                                ";
                // line 1582
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1582) == 0)) {
                    // line 1583
                    echo "                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1585
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1585), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1589
                echo "                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1593
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1595
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                                <input readonly=\"\" type=\"text\" class=\"form-control  total_weight\" name=\"total_weight\" value=\"0\">
                                            </div>
                                        </div>

                                    </div>
                                    ";
                // line 1601
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1601), "enable_assignEmployee", [], "any", false, false, false, 1601) == 1)) {
                    // line 1602
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 1602)) {
                        // line 1603
                        echo "                                            <div class=\"form-group row kt-margin-t-20\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                        // line 1604
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                        echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                                        <option data-hidden=\"true\"></option>
                                                        <option value=\"\"></option>
                                                        ";
                        // line 1609
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                            // line 1610
                            echo "                                                            <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1610), "html", null, true);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1610), "assigned_id", [], "any", false, false, false, 1610) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1610))) {
                                echo " selected ";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1610), "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1612
                        echo "                                                    </select>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 1616
                    echo "                                    ";
                }
                // line 1617
                echo "                                </div>
                            </div>
                        ";
            }
            // line 1620
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 1627
        echo "
<div class=\"row\">




    <div class=\"col-lg-12 sec5\">
        <div class=\"panel panel-default\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"panel panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseTFive\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">
                                ";
        // line 1640
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your truck"]);
        echo "
                            </h3>
                        </div>
                    </div>
                </div>
                <div id=\"collapseTFive\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                        <div class=\"row\">

                            <div class=\"form-group col-lg-6\">
                                <label>";
        // line 1650
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["package Value"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
        // line 1652
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["package Value"]);
        echo "</span></div>
                                    <input  type=\"number\" class=\"form-control budget_client\" name=\"budget_client\" min=\"1\" placeholder=\"package Value\" >
                                </div>
                            </div>



                            <div class=\"form-group col-lg-6\">
                                <label>";
        // line 1660
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["invioce Upload"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
        // line 1662
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Invioce Image"]);
        echo "</span></div>
                                    <input  type=\"file\" class=\"form-control budget_client\" name=\"budget_client\" min=\"1\" placeholder=\"package Value\" >
                                </div>
                            </div>


                            <div class=\"form-group col-lg-12\">
                                <label for=\"vehicle_category\">";
        // line 1669
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle category"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <div class=\"form-group col-lg-8\">
                                <select class=\"form-control vehicle_category\" onchange=\"getVehicles(this.value)\"  name=\"vehicle_category\" id=\"vehicle_category\" >
                                    <option data-hidden=\"true\"></option>
                                    ";
        // line 1674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_crud"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categories_cru"]) {
            // line 1675
            echo "                                         <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categories_cru"], "id", [], "any", false, false, false, 1675), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categories_cru"], "title", [], "any", false, false, false, 1675), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories_cru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1677
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label for=\"slectedTracks\">";
        // line 1682
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <input type='hidden' id='slectedTracks' name='truck_used' />
                            <div class=\"form-group col-lg-12\" id=\"\">
                                <div id=\"vehicleTypeCarousel\" class=\"vehicleTypeCarousel\">
<!--                                    <div>N/a</div>-->
<!--                                    ";
        // line 1688
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehcile_crud"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehcile_cru"]) {
            echo "-->
<!--                                    <div onclick=\"getvahicalid(";
            // line 1689
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "id", [], "any", false, false, false, 1689), "html", null, true);
            echo ")\" class=\"card border-0 card-body mx-3 px-0 selectedVahicals vahicalContainer";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "id", [], "any", false, false, false, 1689), "html", null, true);
            echo "\">-->
<!--                                        <input type=\"radio\" name=\"model\" class=\"make_radio_slide\">-->
<!--                                        <div class=\"content-inner mx-3 text-center d-block\">-->
<!--                                            <img alt=\"\" class=\"img-fluid mx-auto\" src=\"./admin/media/images/vehicle 2.jpg\">-->
<!--                                            <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">-->
<!--                                                <h4 class=\"font-weight-bold\">Name : ";
            // line 1694
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "name", [], "any", false, false, false, 1694), "html", null, true);
            echo "</h4>-->
<!--                                                <p class=\"mb-0\">";
            // line 1695
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "description", [], "any", false, false, false, 1695), "html", null, true);
            echo "</p>-->
<!--                                                <p class=\"mb-0\">Capacity : ";
            // line 1696
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "capacity", [], "any", false, false, false, 1696), "html", null, true);
            echo "</p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehcile_cru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1700
        echo "-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__foot\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 1716
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1716) == 5)) {
            // line 1717
            echo "                            <button type=\"button\" class=\"btn btn-info save_draft\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save as draft"]);
            echo "</button> <span class=\"kt-margin-left-10\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
            echo "
                        ";
        }
        // line 1719
        echo "                        <button type=\"submit\" class=\"btn btn-success save\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 1720
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1720), "child_of", [], "any", false, false, false, 1720));
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









";
        // line 1736
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

";
        // line 1738
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1739
        echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"
        integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.12.0/css/all.css\"
        integrity=\"sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M\" crossorigin=\"anonymous\">
    <style>
        .readonly .input-group-prepend span {
            background: none;
            border: 0;
            padding-right: 0;
        }
        .readonly .form-control[readonly] {
            border: 0px;
        }
        .table-bordered tr td:first-child {
            width: 200px;
            font-weight: bold;
        }
        .map_canvas {
          height: 350px;
        }
        .filter-option-inner br {
            display: none;
        }
        .select2 {
            width: 100% !important;
        }
\t\t.select2-selection {
\t\t\tmin-height: 36px !important;
\t\t}
        #addnewsender,#addnewsenderaddress,#addnewreceiver,#addnewreceiveraddress{
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
        }
        .kt-portlet .kt-portlet__head .kt-portlet__head-label .kt-portlet__head-title {
            font-weight: 700;
        }
        .panel-title {
          position: relative;
          cursor: pointer;
        }
          
        .panel-title::after {
          content: \"\\f107\";
          color: #48465b;
          top: 13px;
          font-size: 22px;
          right: 17px;
          position: absolute;
          font-family: \"FontAwesome\"
        }
        .panel-title[aria-expanded=\"true\"]::after {
          content: \"\\f106\";
        }
        .make_radio_slide {
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100%;
          opacity: 0;
        }
    </style>
";
        // line 1738
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1806
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1807
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 1808
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 1808), "map", [], "any", false, false, false, 1808), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(\".selectedVahicals\").addClass(\"border-0\")
    // \$(`.vahicalContainer\${params}`).removeClass(\"border-0\")
    // \$(`.vahicalContainer\${params}`).css({ \"border\":\" 2px solid #fed06f \"})
    function getvahicalid(params) {
        \$(\"#slectedTracks\").val(params)
        \$(\".selectedVahicals\").addClass(\"border-0\")
        \$(`.vahicalContainer\${params}`).removeClass(\"border-0\")
        // \$(`.vahicalContainer\${params}`).css({ \"border\":\" 2px solid #fed06f \"})
    }
var firstInit = false;
    function getVehicles(val) {
        \$('#vehicle_type').removeClass('d-none');
 let cars;
        \$.ajax({
            method: 'post',
            url: \"";
        // line 1825
        echo url("api/get-vehicles");
        echo "\",
            data: {id: val},
            success: function (response, status, xhr, \$form) {
                let imageurl = \"";
        // line 1828
        echo url("/");
        echo "\"
                console.log(response);
                // window.location.reload();
                // cars+=\"
                \$('.vehicleTypeCarousel').empty()
                let slidetoShow = (response.length > 2 ? 3 : 2)
                let centermode = (response.length > 2 ? true : false)
                // \$('.vehicleTypeCarousel').slick('unslick');
                \$.each( response, function( index, value ) {
                        \$('.vehicleTypeCarousel').append(`
                        <div onclick=\"getvahicalid(\${value.id})\" class=\"card border-0 card-body mx-3 px-0 selectedVahicals vahicalContainer";
        // line 1838
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehcile_cru"] ?? null), "id", [], "any", false, false, false, 1838), "html", null, true);
        echo "\" >
                                        <input type=\"radio\" name=\"\" class=\"make_radio_slide\">
                                        <div class=\"content-inner mx-3 text-center d-block\">
                                            <img alt=\"\" class=\"img-fluid mx-auto\" src=\"/storage/app/\${value.thumbnail}\">
                                            <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                                <h4 class=\"font-weight-bold\">Name : \${value.name}</h4>
                                                <p class=\"mb-0\">\${value.description}</p>
                                                <p class=\"mb-0\">Capacity : \${value.capacity}</p>
                                            </div>
                                        </div>
                         </div>`)
                        });
                if(response.length > 0) {
                        \$('.vehicleTypeCarousel').slick('unslick').slick('reinit');

                    \$('.vehicleTypeCarousel').slick({
                        centerMode: centermode,
                        arrows: true,
                        centerPadding: '60px',
                        prevArrow: \"<button type='button' class='slick-prev'><i class='fa fa-chevron-left fa-2x' aria-hidden='true'></i></button>\",
                        nextArrow: \"<button type='button' class='slick-next'><i class='fa fa-chevron-right fa-2x' aria-hidden='true'></i></button>\",
                        slidesToShow: slidetoShow,
                        slidesToScroll: 1,
                        autoplay: false,
                        infinite: true,
                        autoplaySpeed: 2000,
                        responsive: [
                            {
                                breakpoint: 768,
                                settings: {
                                    arrows: true,
                                    centerMode: true,
                                    centerPadding: '40px',
                                    slidesToShow: slidetoShow,
                                    slidesToScroll: 1,
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    arrows: true,
                                    centerMode: true,
                                    centerPadding: '30px',
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });
                }else{
                    \$('.vehicleTypeCarousel').html('No vehicle found')

                }
            }
        });

    }
KTUtil.ready(function () {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });

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


    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$('.show_receiver_info:checked').val();
        if(selected == 2){
            \$('.receiver_information').addClass('kt-hidden');
        }else{
            \$('.receiver_information').removeClass('kt-hidden');
        }
    });
    \$('body').on('change', '#enable_anotherSender', function(e){
        if(this.checked) {
            \$('.another_sender').removeClass('kt-hidden');
            \$('.base_sender').addClass('kt-hidden');
        }else{
            \$('.base_sender').removeClass('kt-hidden');
            \$('.another_sender').addClass('kt-hidden');
        }

    });


  

    \$('body').on('click', '.type', function(e){
        var selected = \$(this).val();
        if(selected == 2){

            \$('.dev2').removeClass('kt-hidden');
            \$('.dev1').addClass('kt-hidden');

            \$('.dev21').removeClass('kt-hidden');
            \$('.dev31').addClass('kt-hidden');

            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');

            \$('.usr').addClass('kt-hidden');
            \$('.rem').prop('selected', true);
            \$('.sender_address_id').change()

            \$('.usr1').prop('selected', true);
            \$('.usr1').prop('dat-hidden', false);
            \$('.receiver_address_id').change();


        }else{
            \$(\".rem\").hide();
            \$('.usr').prop('selected', true);
            \$('.rem').prop('selected', false);
            \$('.sender_address_id').change();



            \$('.rem1').prop('selected', true);
            \$('.receiver_address_id').change();




            \$('.dev1').removeClass('kt-hidden');
            \$('.usr').removeClass('kt-hidden');
            \$('.dev2').addClass('kt-hidden');
            \$('.dev31').removeClass('kt-hidden');
            \$('.dev21').addClass('kt-hidden');


            \$('.type_1').removeClass('kt-hidden');
            \$('.type_2').addClass('kt-hidden');
            var show_receiver_info = \$('.show_receiver_info:checked').val();
            if(show_receiver_info == 2){

                \$('.receiver_information').addClass('kt-hidden');
            }else{
                \$('.receiver_information').removeClass('kt-hidden');
            }
        }




        var show_receiver_info = \$('.show_receiver_info:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var total_weight = \$('.total_weight').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();

         if(selected != '' && selected != 'new'){

             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: selected, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });

    \$('body').on('change', '.total_weight', function(e){
        var total_weight = \$(this).val();
        ";
        // line 2024
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2024), "enable_type", [], "any", false, false, false, 2024) != 1)) {
            // line 2025
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2025), "type", [], "any", false, false, false, 2025), "html", null, true);
            echo ";
        ";
        } else {
            // line 2027
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2029
        echo "        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var sender_address_id = \$('#sender_address_id').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();

        \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
    });


    \$('body').on('click', '.return_package_fee', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        ";
        // line 2052
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2052), "enable_type", [], "any", false, false, false, 2052) != 1)) {
            // line 2053
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2053), "type", [], "any", false, false, false, 2053), "html", null, true);
            echo ";
        ";
        } else {
            // line 2055
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2057
        echo "         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        ";
        // line 2074
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2074), "enable_type", [], "any", false, false, false, 2074) != 1)) {
            // line 2075
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2075), "type", [], "any", false, false, false, 2075), "html", null, true);
            echo ";
        ";
        } else {
            // line 2077
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2079
        echo "         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){

        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsender').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewsender').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     ";
        // line 2108
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2109
            echo "                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     ";
        }
        // line 2124
        echo "                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     ";
        // line 2131
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2131), "enable_type", [], "any", false, false, false, 2131) != 1)) {
            // line 2132
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2132), "type", [], "any", false, false, false, 2132), "html", null, true);
            echo ";
                    ";
        } else {
            // line 2134
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 2136
        echo "                     var receiver_address_id = \$('#receiver_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '.save_draft', function(e){
        swal.fire({
            buttonsStyling: false,
            html: \"<div class='alert alert-warning' role='alert'><div class='alert-text'>";
        // line 2158
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once"]);
        echo "</div></div>\",
            type: \"warning\",

            confirmButtonText: \"";
        // line 2161
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Just save it as a draft"]);
        echo "!\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

            showCancelButton: true,
            cancelButtonText: \"";
        // line 2165
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
            cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
        }).then(function (result) {
            if (result.value) {
                \$('.kt_form').attr('data-request', 'onDraft');
                \$('.kt_form').submit();
            } else {
                \$('.kt_form').attr('data-request', 'onSave');
            }
        });
    });

    \$('body').on('click', '#addnewsender .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsender');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 2195
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 ";
        // line 2198
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2199
            echo "                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val(),budget_client: parent.find('.budget_client').val(),vehicle_category: parent.find('#vehicle_category').val(),vehicle_type: parent.find('.make_radio_slide').val(),ship_time: parent.find('.ship_time').val(),is_insured: parent.find('.is_insured').val()},
                 ";
        } else {
            // line 2201
            echo "                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val(),budget_client: parent.find('.budget_client').val(),vehicle_category: parent.find('#vehicle_category').val(),vehicle_type: parent.find('.make_radio_slide').val(),ship_time: parent.find('.ship_time').val(),is_insured: parent.find('.is_insured').val()},
                 ";
        }
        // line 2203
        echo "
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2206
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2210
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#sender_id').append(newOption).trigger('change');
                     \$('select.sender_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.sender_address_id').val(response.address_id).selectpicker('refresh');
                     ";
        // line 2220
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2221
            echo "                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     ";
        }
        // line 2236
        echo "                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsender').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#sender_id').append(newOption).trigger('change');
        \$('#addnewsender').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewsenderaddress').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsenderaddress').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });

    \$('body').on('changed.bs.select', '#packaging_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();

        ";
        // line 2268
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2268), "enable_type", [], "any", false, false, false, 2268) != 1)) {
            // line 2269
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2269), "type", [], "any", false, false, false, 2269), "html", null, true);
            echo ";
        ";
        } else {
            // line 2271
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2273
        echo "         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = selected;
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != ''){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsenderaddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 2308
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 ";
        // line 2311
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2312
            echo "                 data: {client_id: \$('#sender_id').val(),street_addr: parent.find('.street_addr').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        } else {
            // line 2314
            echo "                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        }
        // line 2316
        echo "                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2318
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2322
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');



                      var selected = response.default;
                      ";
        // line 2334
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2334), "enable_type", [], "any", false, false, false, 2334) != 1)) {
            // line 2335
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2335), "type", [], "any", false, false, false, 2335), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2337
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2339
        echo "                      var receiver_address_id = \$('#receiver_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }


                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsenderaddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .cancel', function(e){
        e.preventDefault();
        \$('select.sender_address_id').val('').selectpicker('refresh');
        \$('#addnewsenderaddress').addClass('kt-hidden');
    });
    \$('body').on('click', '.dilivery_typ', function(e){
        if(\$('.dilivery_typ:checked').val()==1){
            \$('.sec5').addClass('kt-hidden');
        }else{
            \$('.sec5').removeClass('kt-hidden');
        }

    });



    \$('body').on('change', '#receiver_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.receiver_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewreceiver').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiver').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewreceiver').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewreceiveraddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewreceiveraddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     ";
        // line 2404
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2404), "enable_type", [], "any", false, false, false, 2404) != 1)) {
            // line 2405
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2405), "type", [], "any", false, false, false, 2405), "html", null, true);
            echo ";
                    ";
        } else {
            // line 2407
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 2409
        echo "                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiver');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 2446
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2452
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2456
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#receiver_id').append(newOption).trigger('change');
                     \$('select.receiver_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.address_id).selectpicker('refresh');


                      var selected = response.address_id;
                      ";
        // line 2469
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2469), "enable_type", [], "any", false, false, false, 2469) != 1)) {
            // line 2470
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2470), "type", [], "any", false, false, false, 2470), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2472
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2474
        echo "                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiver').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#receiver_id').append(newOption).trigger('change');
        \$('#addnewreceiver').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewreceiveraddress').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiveraddress').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewreceiveraddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiveraddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });


        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 2538
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2544
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2548
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');




                       var selected = response.default;
                       ";
        // line 2561
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2561), "enable_type", [], "any", false, false, false, 2561) != 1)) {
            // line 2562
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2562), "type", [], "any", false, false, false, 2562), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2564
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2566
        echo "                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       var show_receiver_info = \$('.show_receiver_info:checked').val();
                       var total_weight = \$('.total_weight').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                                success: function(response, status, xhr, \$form) {
                                     \$('#delivery_cost').val(response.delivery_cost);
                                     \$('#return_courier_fee').val(response.return_courier_fee);
                                }
                           });
                      }



                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiveraddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .cancel', function(e){
        e.preventDefault();
        \$('select.receiver_address_id').val('').selectpicker('refresh');
        \$('#addnewreceiveraddress').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            ";
        // line 2605
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2606
            echo "            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
            // line 2609
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        } else {
            // line 2614
            echo "            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '";
            // line 2617
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        }
        // line 2622
        echo "       }
    });
    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
        // line 2631
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListareas', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.area_id').selectpicker({title: '";
        // line 2644
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });

    \$('body').on('change', '#sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        ";
        // line 2653
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2653), "enable_type", [], "any", false, false, false, 2653) != 1)) {
            // line 2654
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2654), "type", [], "any", false, false, false, 2654), "html", null, true);
            echo ";
        ";
        } else {
            // line 2656
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2658
        echo "        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var total_weight = \$('.total_weight').val();
        if(selected != '' && selected != 'new'){
            \$.request('onChangefees', {
                 data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                 success: function(response, status, xhr, \$form) {
                      \$('#delivery_cost').val(response.delivery_cost);
                      \$('#return_courier_fee').val(response.return_courier_fee);
                 }
            });
       }
    });

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         ";
        // line 2677
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2677), "enable_type", [], "any", false, false, false, 2677) != 1)) {
            // line 2678
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2678), "type", [], "any", false, false, false, 2678), "html", null, true);
            echo ";
        ";
        } else {
            // line 2680
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2682
        echo "         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });


    \$(\".clients\").select2({
        ";
        // line 2701
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 2702
            echo "            dir: \"rtl\",
        ";
        }
        // line 2704
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 2706
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 2709
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 2712
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 2715
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 2718
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 2721
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 2724
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 2727
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
    \$('#package_repeater').repeater({
        initEmpty: true,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '";
        // line 2758
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing selected"]);
        echo "',
            });
            \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
                verticalbuttons: true,
                verticalup: '<i class=\"la la-plus\"></i>',
                verticaldown: '<i class=\"la la-minus\"></i>',
                min: 0,
                max: 10000,
            });
            var repeater_item = \$(this);
            repeater_item.on('change', '.sub_weight', function(e, clickedIndex, newValue, oldValue){
                var all = \$('.sub_weight').map(function(){
                    return this.value;
                }).get();
                var total_weight =0;
                for(var i=0;i<all.length;i++){
                    total_weight =total_weight + parseInt(all[i]);
                }
                \$('.total_weight').val(total_weight);

                var sender_address_id = \$('#sender_address_id').val();
                 var receiver_address_id = \$('#receiver_address_id').val();
                 var packaging_id = \$('#packaging_id').val();
                 ";
        // line 2783
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2783), "enable_type", [], "any", false, false, false, 2783) != 1)) {
            // line 2784
            echo "                    var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2784), "type", [], "any", false, false, false, 2784), "html", null, true);
            echo ";
                ";
        } else {
            // line 2786
            echo "                    var type = \$('.type:checked').val();
                ";
        }
        // line 2788
        echo "                 var return_defray = \$('.return_defray:checked').val();
                 var return_package_fee = \$('.return_package_fee:checked').val();
                 var show_receiver_info = \$('.show_receiver_info:checked').val();
                 var total_weight = \$('.total_weight').val();
                 \$.request('onChangefees', {
                      data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                      success: function(response, status, xhr, \$form) {
                           \$('#delivery_cost').val(response.delivery_cost);
                           \$('#return_courier_fee').val(response.return_courier_fee);
                      }
                 });


                //alert(total_weight);
                //var sub_weight = repeater_item.find('.sub_weight').val();
                //alert(sub_weight);
            });
        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary',
        verticalbuttons: true,
        verticalup: '<i class=\"la la-plus\"></i>',
        verticaldown: '<i class=\"la la-minus\"></i>',
        min: 0,
        max: 10000,
    });




    \$('.address').each(function(){
        var address = \$(this);
        address.geocomplete({
            map: \".map_canvas.map_\"+address.attr('rel'),
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
            restoreValueAfterBlur: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

    \$('body').on('click', '.connect', function(){
        if(\$(this).is(\":checked\")){
            \$('#connect_'+\$(this).val()).removeClass('kt-hidden');
        }else{
            \$('#connect_'+\$(this).val()).addClass('kt-hidden');
        }
    });

    \$('body').on('change', '#label_other', function(){
        if(\$(this).val() == 'other')
            \$('#div_label_other').removeClass('kt-hidden');
        else
            \$('#div_label_other').addClass('kt-hidden');
    });

    \$('body').on('change', '.feeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#cost').removeClass('kt-hidden');
        else
            \$('#cost').addClass('kt-hidden');
    });

    \$('body').on('change', '.cfeeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#ccost').removeClass('kt-hidden');
        else
            \$('#ccost').addClass('kt-hidden');
    });

    \$('body').on('change', '.sub_weight', function(){
        alert(\$('.sub_weight').val());
        var sub_weight = Number ( \$(this).val() );
        var total_weight =  Number ( \$('.total_weight').val() );
        total_weight += sub_weight ;
        \$('.total_weight').val(total_weight);
        alert(\$('.total_weight').val());
    });

    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');
             var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             ";
        // line 2889
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2889), "enable_type", [], "any", false, false, false, 2889) != 1)) {
            // line 2890
            echo "                var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2890), "type", [], "any", false, false, false, 2890), "html", null, true);
            echo ";
            ";
        } else {
            // line 2892
            echo "                var type = \$('.type:checked').val();
            ";
        }
        // line 2894
        echo "             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             var show_receiver_info = \$('.show_receiver_info:checked').val();
             var total_weight = \$('.total_weight').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }else{
            \$('.package_fee').addClass('kt-hidden');
        }
    });

    \$(\".fees\").inputmask('999";
        // line 2910
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2910), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2910), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 2910), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 2910)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "9";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "', {
        numericInput: true
    });

    \$('.mask').val(('";
        // line 2914
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2914), "numbers_order", [], "any", false, false, false, 2914)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + ";
        echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
        echo ").slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2914), "numbers_order", [], "any", false, false, false, 2914), "html", null, true);
        echo "));

    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('";
        // line 2917
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2917), "numbers_order", [], "any", false, false, false, 2917)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + \$(this).val()).slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2917), "numbers_order", [], "any", false, false, false, 2917), "html", null, true);
        echo "));
    });
});



</script>
";
        // line 1806
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5133 => 1806,  5114 => 2917,  5097 => 2914,  5078 => 2910,  5060 => 2894,  5056 => 2892,  5050 => 2890,  5048 => 2889,  4945 => 2788,  4941 => 2786,  4935 => 2784,  4933 => 2783,  4905 => 2758,  4871 => 2727,  4865 => 2724,  4859 => 2721,  4853 => 2718,  4847 => 2715,  4841 => 2712,  4835 => 2709,  4829 => 2706,  4825 => 2704,  4821 => 2702,  4819 => 2701,  4798 => 2682,  4794 => 2680,  4788 => 2678,  4786 => 2677,  4765 => 2658,  4761 => 2656,  4755 => 2654,  4753 => 2653,  4741 => 2644,  4725 => 2631,  4714 => 2622,  4706 => 2617,  4701 => 2614,  4693 => 2609,  4688 => 2606,  4686 => 2605,  4645 => 2566,  4641 => 2564,  4635 => 2562,  4633 => 2561,  4617 => 2548,  4610 => 2544,  4601 => 2538,  4535 => 2474,  4531 => 2472,  4525 => 2470,  4523 => 2469,  4507 => 2456,  4500 => 2452,  4491 => 2446,  4452 => 2409,  4448 => 2407,  4442 => 2405,  4440 => 2404,  4373 => 2339,  4369 => 2337,  4363 => 2335,  4361 => 2334,  4346 => 2322,  4339 => 2318,  4335 => 2316,  4331 => 2314,  4327 => 2312,  4325 => 2311,  4319 => 2308,  4282 => 2273,  4278 => 2271,  4272 => 2269,  4270 => 2268,  4236 => 2236,  4219 => 2221,  4217 => 2220,  4204 => 2210,  4197 => 2206,  4192 => 2203,  4188 => 2201,  4184 => 2199,  4182 => 2198,  4176 => 2195,  4143 => 2165,  4136 => 2161,  4130 => 2158,  4106 => 2136,  4102 => 2134,  4096 => 2132,  4094 => 2131,  4085 => 2124,  4068 => 2109,  4066 => 2108,  4035 => 2079,  4031 => 2077,  4025 => 2075,  4023 => 2074,  4004 => 2057,  4000 => 2055,  3994 => 2053,  3992 => 2052,  3967 => 2029,  3963 => 2027,  3957 => 2025,  3955 => 2024,  3766 => 1838,  3753 => 1828,  3747 => 1825,  3727 => 1808,  3722 => 1807,  3720 => 1806,  3718 => 1738,  3650 => 1739,  3648 => 1738,  3643 => 1736,  3620 => 1720,  3615 => 1719,  3607 => 1717,  3605 => 1716,  3587 => 1700,  3576 => 1696,  3572 => 1695,  3568 => 1694,  3558 => 1689,  3552 => 1688,  3543 => 1682,  3536 => 1677,  3525 => 1675,  3521 => 1674,  3513 => 1669,  3503 => 1662,  3498 => 1660,  3487 => 1652,  3482 => 1650,  3469 => 1640,  3454 => 1627,  3445 => 1620,  3440 => 1617,  3437 => 1616,  3431 => 1612,  3416 => 1610,  3412 => 1609,  3404 => 1604,  3401 => 1603,  3398 => 1602,  3396 => 1601,  3387 => 1595,  3382 => 1593,  3376 => 1589,  3369 => 1585,  3365 => 1583,  3363 => 1582,  3358 => 1581,  3351 => 1577,  3347 => 1575,  3345 => 1574,  3340 => 1572,  3335 => 1569,  3330 => 1566,  3313 => 1564,  3309 => 1563,  3303 => 1560,  3300 => 1559,  3297 => 1558,  3292 => 1555,  3277 => 1553,  3273 => 1552,  3267 => 1549,  3264 => 1548,  3262 => 1547,  3258 => 1545,  3253 => 1542,  3238 => 1540,  3234 => 1539,  3228 => 1536,  3225 => 1535,  3222 => 1534,  3216 => 1531,  3212 => 1530,  3209 => 1529,  3206 => 1528,  3201 => 1525,  3186 => 1523,  3182 => 1522,  3176 => 1519,  3173 => 1518,  3171 => 1517,  3167 => 1515,  3160 => 1511,  3154 => 1508,  3151 => 1507,  3148 => 1506,  3145 => 1505,  3138 => 1501,  3132 => 1498,  3125 => 1494,  3119 => 1491,  3116 => 1490,  3109 => 1486,  3101 => 1483,  3098 => 1482,  3095 => 1481,  3093 => 1480,  3086 => 1476,  3081 => 1474,  3074 => 1469,  3071 => 1468,  3060 => 1460,  3055 => 1458,  3049 => 1454,  3042 => 1450,  3038 => 1448,  3036 => 1447,  3031 => 1446,  3024 => 1442,  3020 => 1440,  3018 => 1439,  3013 => 1437,  3006 => 1432,  3004 => 1431,  2994 => 1424,  2982 => 1415,  2975 => 1410,  2963 => 1401,  2954 => 1395,  2945 => 1389,  2928 => 1383,  2923 => 1380,  2921 => 1379,  2918 => 1378,  2909 => 1372,  2905 => 1371,  2898 => 1367,  2893 => 1364,  2890 => 1363,  2882 => 1358,  2876 => 1355,  2871 => 1352,  2869 => 1351,  2866 => 1350,  2858 => 1345,  2852 => 1342,  2847 => 1339,  2845 => 1338,  2839 => 1334,  2828 => 1332,  2824 => 1331,  2816 => 1326,  2806 => 1323,  2796 => 1316,  2782 => 1305,  2768 => 1294,  2744 => 1273,  2737 => 1269,  2730 => 1265,  2727 => 1264,  2721 => 1260,  2714 => 1256,  2710 => 1254,  2708 => 1253,  2703 => 1252,  2696 => 1248,  2692 => 1246,  2690 => 1245,  2684 => 1242,  2681 => 1241,  2679 => 1240,  2674 => 1237,  2667 => 1233,  2663 => 1231,  2661 => 1230,  2658 => 1229,  2651 => 1225,  2647 => 1223,  2645 => 1222,  2638 => 1218,  2634 => 1217,  2631 => 1216,  2617 => 1209,  2606 => 1205,  2598 => 1200,  2594 => 1199,  2589 => 1196,  2587 => 1195,  2578 => 1189,  2574 => 1188,  2563 => 1180,  2558 => 1178,  2551 => 1173,  2534 => 1171,  2530 => 1170,  2525 => 1168,  2521 => 1167,  2516 => 1164,  2505 => 1162,  2501 => 1161,  2496 => 1159,  2492 => 1158,  2487 => 1155,  2470 => 1153,  2466 => 1152,  2461 => 1150,  2457 => 1149,  2448 => 1143,  2443 => 1140,  2426 => 1138,  2422 => 1137,  2416 => 1134,  2406 => 1127,  2393 => 1119,  2376 => 1105,  2372 => 1104,  2365 => 1099,  2362 => 1098,  2349 => 1088,  2335 => 1077,  2321 => 1066,  2302 => 1056,  2295 => 1051,  2292 => 1050,  2289 => 1049,  2282 => 1045,  2277 => 1043,  2273 => 1041,  2271 => 1040,  2268 => 1039,  2263 => 1036,  2248 => 1034,  2244 => 1033,  2239 => 1031,  2235 => 1030,  2226 => 1029,  2224 => 1028,  2220 => 1026,  2209 => 1024,  2205 => 1023,  2200 => 1021,  2196 => 1020,  2187 => 1019,  2182 => 1016,  2161 => 1014,  2157 => 1013,  2152 => 1011,  2148 => 1010,  2139 => 1009,  2136 => 1008,  2130 => 1005,  2126 => 1004,  2117 => 1003,  2115 => 1002,  2111 => 1000,  2094 => 998,  2090 => 997,  2084 => 994,  2075 => 993,  2066 => 987,  2062 => 986,  2053 => 985,  2051 => 984,  2046 => 981,  2033 => 975,  2022 => 971,  2016 => 968,  2013 => 967,  2011 => 966,  2005 => 963,  1997 => 962,  1991 => 959,  1983 => 958,  1972 => 952,  1956 => 940,  1948 => 938,  1946 => 937,  1941 => 935,  1935 => 934,  1928 => 930,  1923 => 928,  1914 => 922,  1910 => 921,  1903 => 919,  1892 => 911,  1872 => 894,  1865 => 890,  1858 => 886,  1855 => 885,  1849 => 881,  1839 => 879,  1836 => 878,  1826 => 876,  1823 => 875,  1813 => 873,  1810 => 872,  1800 => 870,  1798 => 869,  1791 => 865,  1788 => 864,  1785 => 863,  1773 => 858,  1765 => 857,  1758 => 853,  1755 => 852,  1753 => 851,  1743 => 844,  1739 => 843,  1728 => 835,  1723 => 833,  1716 => 828,  1705 => 826,  1701 => 825,  1696 => 823,  1692 => 822,  1687 => 819,  1676 => 817,  1672 => 816,  1667 => 814,  1663 => 813,  1658 => 810,  1641 => 808,  1637 => 807,  1632 => 805,  1628 => 804,  1619 => 798,  1614 => 795,  1597 => 793,  1593 => 792,  1587 => 789,  1577 => 782,  1564 => 774,  1546 => 759,  1542 => 758,  1535 => 753,  1532 => 752,  1519 => 742,  1505 => 731,  1491 => 720,  1472 => 710,  1465 => 705,  1462 => 704,  1460 => 703,  1457 => 702,  1450 => 698,  1445 => 696,  1441 => 694,  1439 => 693,  1436 => 692,  1430 => 689,  1426 => 688,  1423 => 687,  1420 => 686,  1415 => 683,  1400 => 681,  1396 => 680,  1391 => 678,  1387 => 677,  1384 => 676,  1382 => 675,  1377 => 672,  1366 => 670,  1362 => 669,  1357 => 667,  1353 => 666,  1350 => 665,  1345 => 662,  1324 => 660,  1320 => 659,  1315 => 657,  1311 => 656,  1308 => 655,  1306 => 654,  1303 => 653,  1297 => 650,  1293 => 649,  1284 => 648,  1282 => 647,  1278 => 645,  1261 => 643,  1257 => 642,  1251 => 639,  1242 => 638,  1233 => 632,  1229 => 631,  1220 => 630,  1218 => 629,  1213 => 626,  1200 => 620,  1189 => 616,  1183 => 613,  1180 => 612,  1178 => 611,  1172 => 608,  1164 => 607,  1158 => 604,  1150 => 603,  1139 => 597,  1123 => 584,  1120 => 583,  1112 => 581,  1110 => 580,  1106 => 579,  1100 => 578,  1097 => 577,  1094 => 576,  1087 => 572,  1084 => 571,  1081 => 570,  1079 => 569,  1073 => 566,  1068 => 564,  1060 => 559,  1056 => 558,  1049 => 556,  1041 => 554,  1031 => 547,  1024 => 545,  1020 => 544,  1014 => 543,  1008 => 540,  1003 => 538,  995 => 535,  988 => 533,  984 => 531,  970 => 524,  963 => 520,  960 => 519,  957 => 518,  943 => 511,  936 => 507,  933 => 506,  931 => 505,  928 => 504,  926 => 503,  914 => 494,  900 => 483,  875 => 461,  867 => 456,  845 => 437,  837 => 432,  822 => 420,  810 => 411,  802 => 406,  780 => 387,  772 => 382,  757 => 370,  752 => 367,  738 => 356,  730 => 355,  719 => 347,  714 => 345,  705 => 344,  702 => 343,  697 => 340,  682 => 338,  678 => 337,  672 => 334,  663 => 333,  660 => 332,  655 => 329,  640 => 327,  636 => 326,  630 => 323,  621 => 322,  619 => 321,  616 => 320,  601 => 308,  593 => 303,  581 => 296,  569 => 287,  561 => 282,  549 => 275,  537 => 266,  533 => 264,  531 => 263,  519 => 254,  504 => 242,  493 => 233,  489 => 231,  485 => 230,  482 => 229,  480 => 228,  473 => 223,  467 => 219,  456 => 217,  452 => 216,  444 => 211,  441 => 210,  439 => 209,  428 => 201,  419 => 195,  412 => 190,  401 => 188,  397 => 187,  391 => 184,  386 => 181,  375 => 179,  371 => 178,  365 => 175,  356 => 169,  349 => 165,  345 => 164,  331 => 153,  326 => 151,  321 => 148,  314 => 144,  310 => 142,  308 => 141,  303 => 140,  296 => 136,  292 => 134,  290 => 133,  285 => 131,  280 => 128,  265 => 126,  261 => 125,  255 => 122,  244 => 114,  238 => 111,  229 => 105,  224 => 102,  213 => 100,  209 => 99,  200 => 93,  191 => 87,  186 => 85,  171 => 73,  159 => 64,  151 => 58,  138 => 48,  131 => 43,  120 => 41,  116 => 40,  110 => 37,  105 => 34,  94 => 32,  90 => 31,  84 => 28,  75 => 22,  68 => 18,  64 => 17,  54 => 10,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSave', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
 {% if addShipmentForm == \"add_form_simple\" %}
 {% if user.role_id != 5 %}
 <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        {{'Sender information'|__}}
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <input name=\"sender_id\" id=\"sender_id\" value=\"{{user.id}}\" type=\"hidden\" class=\"snder_id\"/>
                        <label>{{'Sender Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control name\" name=\"sender_name\" required />
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control city_id\" name=\"sender_city_id\"  required>
                            <option data-hidden=\"true\"></option>
                            {% for city in cities %}
                                <option value=\"{{city.id}}\">{{city.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>{{'Sector'|__}}</label>
                        <select class=\"form-control area_id\"  name=\"sender_area_id\" >
                            <option data-hidden=\"true\"></option>
                            {% for county in areas %}
                                <option value=\"{{county.id}}\">{{county.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'Street Address'|__}}</label>
                        <input type=\"text\" class=\"form-control street_addr\" name=\"sender_addr\"   required/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endif %}
 <div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        {{'Shipment information'|__}}
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <!-- <div class=\"form-group col-lg-4 kt-hide\">
                        <label>{{'Order Number'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{settings.tracking.prefix_order}}</span></div>
                            <input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\" readonly=\"\" >
                        </div>
                    </div> -->

                    <div class=\"form-group col-lg-4\">
                        <label>{{'Product Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"kt-form__control\">
                            <input type=\"text\" class=\"form-control\" name=\"category_id\" value=\"\" required=\"\">
                        </div>
                        <!-- <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for category in categories %}
                                <option value=\"{{category.id}}\">{{category.name}}</option>
                            {% endfor %}
                        </select> -->
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Quantity'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"kt-form__control\">
                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"1\">
                        </div>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Weight'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"kt-form__control\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                                <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" value=\"5\" name=\"weight\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Shipping Type'|__}}</label>
                        <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                            <option data-hidden=\"true\"></option>
                            {% for mode in modes %}
                                <option value=\"{{mode.id}}\" {% if mode.name == 'shipping' %}selected{% endif %}>{{mode.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Product price'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group\">
                            {% if primary_currency.place_symbol_before == 1 %}
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        {{primary_currency.currency_symbol}}
                                    </span>
                                </div>
                            {% endif %}
                            <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"{{settings.fees.delivery_cost}}\" required>
                            {% if primary_currency.place_symbol_before == 0 %}
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        {{primary_currency.currency_symbol}}
                                    </span>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Shipping Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date(settings.dateformat)}}\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <input name=\"sender_id\" value=\"{{user.id}}\" type=\"hidden\" />
                        <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control name\" name=\"name\" required />
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control mobile\" name=\"mobile\" required />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control city_id\" name=\"city_id\"  required>
                            <option data-hidden=\"true\"></option>
                            {% for city in cities %}
                                <option value=\"{{city.id}}\">{{city.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-6\">
                        <label>{{'Area'|__}}</label>
                        <select class=\"form-control area_id\"  name=\"area_id\" >
                            <option data-hidden=\"true\"></option>
                            {% for county in areas %}
                                <option value=\"{{county.id}}\">{{county.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-6\">
                        <label>{{'Street Address'|__}}</label>
                        <input type=\"text\" class=\"form-control street_addr\" name=\"street_addr\"   required/>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"kt-form__group--inline\">
                            <div class=\"kt-form__label\">
                                <label class=\"kt-label m-label--single\">{{'Comment'|__}}:</label>
                            </div>
                            <div class=\"kt-form__control\">
                                <input type=\"text\" class=\"form-control\" name=\"description\">
                            </div>
                        </div>
                    </div>
                </div>
                {% if (user.hasUserPermission('assign', 'c')) %}
                    <div class=\"form-group row kt-margin-t-20\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Assign Employee'|__}} wq</label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                <option data-hidden=\"true\"></option>
                                <option value=\"\"></option>
                                {% for employee in employees %}
                                    <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

{% elseif addShipmentForm == \"add_form_normal\" %}

{% partial 'normalShipmentAddForm' %}

{% else %}

<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseOne\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">
                            {{'Shipment information'|__}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div id=\"collapseOne\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                        <div class=\"kt-portlet__body\">
                            <div class=\"form-group form-group-last kt-hide\">
                                <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                                    <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                                    <div class=\"alert-text\">
                                        {{'Oh snap! Change a few things up and try submitting again'|__}}.
                                    </div>
                                    <div class=\"alert-close\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {% if settings.shipments.enable_type == 1 %}
                                <div class=\"kt-section\">
                                    <h3 class=\"kt-section__title kt-margin-b-20\">
                                    {{'Book As'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                    </h3>
                                    <div class=\"kt-section__content\">
                                        <div class=\"form-group form-group-last\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-6\">
                                                    <label class=\"kt-option\">
                                                        <span class=\"kt-option__control\">
                                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"1\" {% if settings.shipments.type == 1 %}checked {% endif %} required>
                                                                <span></span>
                                                            </span>
                                                        </span>
                                                        <span class=\"kt-option__label\">
                                                            <span class=\"kt-option__head\">
                                                                <span class=\"kt-option__title\">
                                                                    {{'Sender'|__}}
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                {{'For sending a parcel'|__}}
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class=\"col-lg-6\">
                                                    <label class=\"kt-option\">
                                                        <span class=\"kt-option__control\">
                                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                                <input type=\"radio\" name=\"type\" class=\"type\" value=\"2\" {% if settings.shipments.type == 2 %}checked {% endif %} required>
                                                                <span></span>
                                                            </span>
                                                        </span>
                                                        <span class=\"kt-option__label\">
                                                            <span class=\"kt-option__head\">
                                                                <span class=\"kt-option__title\">
                                                                    {{'Receiver'|__}}
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                {{'For receiving shipment'|__}}
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"form-text text-muted\"><!--must use this helper element to display error message for the options--></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0\"></div>
                            {% endif %}
                            <div class=\"row\">
                                {% if settings.shipments.enable_package_type == 1 %}
                                    <div class=\"form-group {%if settings.shipments.enable_branch == 1 and settings.shipments.enable_shippingDate == 1%}col-lg-4{%else%}col-lg-6{%endif%}\">
                                        <label>{{'Package Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            {% for package in packaging %}
                                                <option value=\"{{package.id}}\" {% if settings.shipments.packaging_id == package.id  %} selected {% endif %}>{{package.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                {% endif %}
                                {% if settings.shipments.enable_branch == 1 %}
                                    <div class=\"form-group {%if settings.shipments.enable_package_type == 1 and settings.shipments.enable_shippingDate == 1%}col-lg-4{%else%}col-lg-6{%endif%}\">
                                        <label>{{'Branch'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control\" name=\"office_id\" required>
                                            <option data-hidden=\"true\"></option>
                                            {% for office in offices %}
                                                <option value=\"{{office.id}}\" {% if user.office == office.id or settings.shipments.office_id == office.id %}selected{% endif %}>{{office.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                {% endif %}
                                {% if settings.shipments.enable_shippingDate == 1 %}
                                    <div class=\"form-group {%if settings.shipments.enable_package_type == 1 and settings.shipments.enable_branch == 1%}col-lg-4{%else%}col-lg-6{%endif%}\">
                                        <label>{{'Shipping Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <div class=\"input-group date\">
                                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date(settings.dateformat)}}\" required>
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"la la-calendar\"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <div class=\"form-group {%if settings.shipments.enable_package_type == 1 and settings.shipments.enable_branch == 1%}col-lg-4{%else%}col-lg-6{%endif%}\">
                                        <label>{{'Shipping Time'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <div class=\"input-group \">
                                            <input type=\"time\" class=\"form-control ship_time\"  name=\"ship_time\" required>
<!--                                            <div class=\"input-group-append\">-->
<!--                                                <span class=\"input-group-text\">-->
<!--                                                    <i class=\"la la-clock-o\"></i>-->
<!--                                                </span>-->
<!--                                            </div>-->
                                        </div>
                                    </div>
                                {% endif %}

                                <div class=\"col-lg-4 offset-2\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1\">
                                        {{'Delivery Type'|__}}&nbsp;<span class=\"kt-badge  \"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"dilivery_typ\" class=\"dilivery_typ\" value=\"2\"  required checked>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'Vehicle'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{''|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-4\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1\">
                                        &nbsp;<span class=\"\"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"dilivery_typ\" class=\"dilivery_typ\" value=\"1\"  required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'Package'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{''|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>


                                <div class=\"col-lg-4 offset-2\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1 \">
                                        {{'Wants to avail Insurance?'|__}}&nbsp;<span class=\"kt-badge  \"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"is_insured\" class=\"is_insured\" value=\"1\"  required >
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'Yes'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{''|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-4\">
                                    <h3 class=\"kt-section__title kt-margin-b-5 pt-1\">
                                        &nbsp;<span class=\"\"></span>
                                    </h3>
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"is_insured\" class=\"is_insured\" value=\"0\"  required checked>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'No'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{''|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseTwo\">
        \t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t{{'Sender information'|__}}
        \t\t\t\t\t</h3>
        \t\t\t\t</div>
        \t\t\t</div>
                </div>
                <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                    <div class=\"form-group form-group-last kt-hide\">
        \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
        \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
        \t\t\t\t  \t<div class=\"alert-text\">
                                {{'Oh snap! Change a few things up and try submitting again'|__}}.
        \t\t\t\t\t</div>
        \t\t\t\t\t<div class=\"alert-close\">
        \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
        \t\t\t\t\t  \t</button>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t</div>
                    {% if user.role_id == 5 %}
                        <div class=\"form-group row\">
                            {% if settings.customers.enable_anotherCustomer == 1 %}
                            <div class=\"form-group  col-lg-6\">
                                <label class=\"col-form-label\">{{'Another Sender'|__}}</label>
                                <div class=\"\">
                                    <div class=\"kt-checkbox-single\">
                                        <label class=\"kt-checkbox\">
                                            <input type=\"checkbox\" id=\"enable_anotherSender\" name=\"enable_anotherSender\" {% if settings.customers.anotherCustomer == 1 %}checked{% endif %}> {{'Yes'|__}}
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {% endif %}
                            {% if settings.customers.enable_customerPublic == 1 %}
                           <!--  <div class=\"form-group col-lg-6\">
                                <label class=\"col-form-label\">{{'Show Sender Data'|__}}</label>
                                <div class=\"\">
                                    <div class=\"kt-checkbox-single\">
                                        <label class=\"kt-checkbox\">
                                            <input type=\"checkbox\" id=\"enable_showSender\" name=\"enable_showSender\" {% if settings.customers.customerPublic == 1 %}checked{% endif %}> {{'Yes'|__}}
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            {% endif %}
                        </div>

                        <div class=\"another_sender {%if settings.customers.anotherCustomer != 1%}kt-hidden{%endif%}\">
                            <div class=\" form-group row\">
                                <label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control clients\" name=\"another_sender_id\" id=\"sender_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                    </select>
                                    <span class=\"text-muted\">{{'Choose or add a new client that will send the package'|__}}</span>
                            </div>
                            <div class=\"form-group row\">
                                <label>{{'Sender Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"{{'Please select sender first'|__}}\" required>
                                    <option data-hidden=\"true\"></option><label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>

                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>

                                </select>
                            </div>
                        </div>

                    {% endif %}
                    <div class=\"base_sender {%if user.role_id == 5 and settings.customers.anotherCustomer == 1%}kt-hidden{% endif %}\">
                        <div class=\"form-group row col-md-12 pl-0\">
                            <label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                             <span class=\"dev1 col-12 p-0\">
                                <input name=\"sender_id\" id=\"sender_id\"  value=\"{{user.id}}\" type=\"hidden\" />
                                <input value=\"{{user.name}}\" type=\"text\" class=\"form-control\"  />
                            </span>
                            <div class=\"dev2 kt-hidden col-12\">
                                <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                </select>
                                <span class=\"text-muted\">{{'Choose or add a new client that will send the package'|__}}</span>
                            </div>
                        </div>
                        {% if user.role_id == 5 %}
                            {% if user.mobile is null %}
                                <div class=\"form-group row\">
                                    <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                                </div>
                            {% endif %}
                        {% endif %}
                        <div class=\"form-group row\">
                            <label>{{'Sender Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"{{'Sender City'|__}}\" required>
                                {% if spot_shipment_address %}
                                      <option value=\"{{spot_shipment_address.id}}\" class=\"usr\" selected >{{spot_shipment_address.name}}</option>
                                {% endif %}
                                <option value='' class='rem' disabled>Please Choose sender</option>
                                <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                            </select>
                        </div>
                    </div>

                        <div class=\"row kt-hidden\" id=\"addnewsender\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                \t\t\t\t<div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                    \t<span class=\"kt-portlet__head-icon\">
                                    \t\t<i class=\"flaticon2-user\"></i>
                                    \t</span>
                                    \t<h3 class=\"kt-portlet__head-title\">
                                    \t\t{{'Add a new client'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                    \t</h3>
                                    </div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group {%if settings.customers.enable_gender == 1 %}col-lg-5{%else%}col-lg-7{%endif%}\">
                                            <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                        </div>
                                        <div class=\"form-group {%if settings.customers.enable_gender == 1 %}col-lg-4{%else%}col-lg-5{%endif%}\">
                                            <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                        </div>
                                        {% if settings.customers.enable_gender == 1 %}
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Gender'|__}}</label>
                                            <div class=\"kt-radio-inline\">
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\" {% if settings.customers.gender == 'male' %}checked{%endif%} > {{'Male'|__}}
                    \t\t\t\t\t\t\t\t<span></span>
                    \t\t\t\t\t\t\t</label>
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\" {% if settings.customers.gender == 'female' %}checked{%endif%} > {{'Female'|__}}
                    \t\t\t\t\t\t\t\t<span></span>
                    \t\t\t\t\t\t\t</label>
                    \t\t\t\t\t\t</div>
                                        </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"location-sender\">
                                        <div class=\"row\">
                                            {% if settings.customers.enable_mapAddress == 1 %}
                                            <div class=\"form-group {%if settings.customers.enable_postalCode == 1 %}col-lg-5{%else%}col-lg-6{%endif%}\">
                                                <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address \" name=\"sender[street_address_map]\"  rel=\"sender\" value=\"{{settings.customers.street_address_map}}\" />
                                                <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {%if settings.customers.enable_mapAddress == 1 and settings.customers.enable_postalCode == 1 %}col-lg-4{%else%}col-lg-6{%endif%}\">
                                                <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_postalCode == 1 %}
                                            <div class=\"form-group {%if settings.customers.enable_mapAddress == 1 %}col-lg-3{%else%}col-lg-6{%endif%}\">
                                                <label>{{'Postal Code'|__}}</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" value=\"{{settings.customers.postal_code}}\">
                                            </div>
                                            {% endif %}

                                            {% if settings.customers.enable_state == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"sender[state]\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    {% for state in states %}
                                                        <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %} {% if settings.customers.state == state.id  %} selected {% endif %}>{{state.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    {% for city in cities %}
                                                        <option value=\"{{city.id}}\">{{city.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>

                                            {% if settings.customers.enable_county == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Area'|__}}</label>
                                                <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for county in areas %}
                                                        <option value=\"{{county.id}}\" {% if settings.customers.county == county.id  %} selected {% endif %}>{{county.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                            {% if settings.customers.enable_streetAddress == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Street Address'|__}}</label>
                                                <input type=\"text\" class=\"form-control street_addr\" name=\"sender[street_address]\" value=\"{{settings.customers.street_address}}\"  required/>
                                            </div>
                                            {% endif %}
                                        </div>
                                        {% if settings.customers.enable_mapAddress == 1 %}
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Google Map'|__}}</label>
                                                <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                                <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                            </div>
                                        </div>
                                        {% endif %}

                                        {% if settings.customers.enable_createAccount == 1 %}
                                            {% if user.hasUserPermission('client', 'c') %}
                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                        <div class=\"kt-checkbox-single\">
                                                            <label class=\"kt-checkbox\">
                                                                <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\" {%if settings.customers.connect ==1 %}checked{% endif %}> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"row align-items-center kt-hidden\" id=\"connect_sender\">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group kt-form__group--inline\">
                                                            <div class=\"kt-form__label\">
                                                                <label class=\"col-form-label\">{{'Email'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <input type=\"text\" class=\"form-control email\" name=\"sender[email]\" required/>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-md-none kt-margin-b-10\"></div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group kt-form__group--inline\">
                                                            <div class=\"kt-form__label\">
                                                                <label class=\"col-form-label\">{{'Username'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <input type=\"text\" class=\"form-control username\" name=\"sender[username]\" required>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-md-none kt-margin-b-10\"></div>
                                                    </div>
                                                    <div class=\"col-md-4\">
                                                        <div class=\"form-group kt-form__group--inline\">
                                                            <div class=\"kt-form__label\">
                                                                <label class=\"col-form-label\">{{'Password'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <input type=\"password\" class=\"form-control password\" name=\"sender[password]\" required>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-md-none kt-margin-b-10\"></div>
                                                    </div>
                                                </div>
                                            {% endif %}
                                        {% endif %}
                                    </div>
                \t\t\t\t</div>
                                <div class=\"kt-portlet__foot\">
                    \t\t\t\t<div class=\"row align-items-center\">
                    \t\t\t\t\t<div class=\"col-lg-12\">
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                    \t\t\t\t\t</div>
                    \t\t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>

                    <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
                                <div class=\"kt-portlet__head-label\">
                                    <span class=\"kt-portlet__head-icon\">
                                        <i class=\"flaticon2-user\"></i>
                                    </span>
                                    <h3 class=\"kt-portlet__head-title\">
                                        {{'Add a new client address'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                    </h3>
                                </div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"location-senderaddress\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for country in countries %}
                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Postal Code'|__}}</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"senderaddress[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for state in states %}
                                                    <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for city in cities %}
                                                    <option value=\"{{city.id}}\">{{city.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Area'|__}}</label>
                                            <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" >
                                                <option data-hidden=\"true\"></option>
                                                {% for county in areas %}
                                                    <option value=\"{{county.id}}\">{{county.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Google Map'|__}}</label>
                                            <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    {% if settings.shipments.enable_payment_type == 1 %}
                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Payment Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"1\" {%if settings.shipments.payment_type == 1 %}selected{% endif %}>{{'Postpaid'|__}} </option>
                                <option value=\"2\" {%if settings.shipments.payment_type == 2 %}selected{% endif %}>{{'Prepaid'|__}} </option>
                            </select>
                        </div>
                    </div>
                    {% endif %}
                    {% if settings.shipments.enable_payment_method == 1 %}
                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Payment Method'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_method\" id=\"payment_method\" required>
                                <option data-hidden=\"true\"></option>
                                {% if payment['enable_cash'] == 1 %}
                                <option value=\"cash\" {%if settings.shipments.payment_method == 'cash' %}selected{% endif %}>{{'Cash'|__}} </option>
                                {% endif %}
                                {% if payment['enable_transfer'] == 1 %}
                                <option value=\"transfer\" {%if settings.shipments.payment_method == 'transfer' %}selected{% endif %}>{{'Wire Transfer'|__}} </option>
                                {% endif %}
                                {% if payment['enable_paystack'] == 1 %}
                                <option value=\"paystack\" {%if settings.shipments.payment_method == 'paystack' %}selected{% endif %}>{{'Paystack'|__}} </option>
                                {% endif %}
                                {% if payment['enable_paypal'] == 1 %}
                                <option value=\"paypal\" {%if settings.shipments.payment_method == 'paypal' %}selected{% endif %}>{{'Paypal'|__}} </option>
                                {% endif %}
                            </select>
                        </div>
                    </div>
                    {% endif %}
                    <div class=\"form-group row type_1\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Record receiver information ?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" checked required> {{'Yes'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" required> {{'No'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"type_2 receiver_information\">
                <div class=\"kt-portlet kt-portlet--mobile\">
                    <div class=\"panel panel-heading\">
                        <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseThree\">
            \t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t{{'Receiver information'|__}}
            \t\t\t\t\t</h3>
            \t\t\t\t</div>
            \t\t\t</div>
                    </div>
                    <div id=\"collapseThree\" class=\"panel-collapse collapse\">
                        <div class=\"kt-portlet__body\">
                            <div class=\"form-group row\">
                                <label>{{'Receiver'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <span class=\"dev21 col-12 kt-hidden \">
                                <input name=\"receiver_id\" id=\"receiver_id\"  value=\"{{user.id}}\" type=\"hidden\" />
                                <input value=\"{{user.name}}\" type=\"text\" class=\"form-control\"  />
                                 </span>

                                <div class=\"dev31 col-12 p-0\">
                                <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                </select>
                                <span class=\"text-muted\">{{'Choose or add a new client that will receive the package'|__}}</span>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Address'|__}}\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% if spot_shipment_address %}
                                    <option class='usr1' value=\"{{spot_shipment_address.id}}\" data-hidden=\"true\" >{{spot_shipment_address.name}}</option>
                                    {% endif %}
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                    <option class='rem1' selected disabled >Choose address</option>
                                </select>
                            </div>
                            <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                                <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                    \t\t\t\t<div class=\"kt-portlet__head\">
                                        <div class=\"kt-portlet__head-label\">
                                            <span class=\"kt-portlet__head-icon\">
                                                <i class=\"flaticon2-user\"></i>
                                            </span>
                                            <h3 class=\"kt-portlet__head-title\">
                                                {{'Add a new client'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                            </h3>
                                        </div>
                    \t\t\t\t</div>
                    \t\t\t\t<div class=\"kt-portlet__body\">
                                        <div class=\"row\">
                                            <div class=\"form-group {%if settings.customers.enable_gender == 1 %}col-lg-5{%else%}col-lg-7{%endif%}\">
                                                <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                            </div>
                                            <div class=\"form-group {%if settings.customers.enable_gender == 1 %}col-lg-4{%else%}col-lg-5{%endif%}\">
                                                <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                            </div>
                                            {% if settings.customers.enable_gender == 1 %}
                                            <div class=\"form-group col-lg-3\">
                                                <label>{{'Gender'|__}}</label>
                                                <div class=\"kt-radio-inline\">
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" {% if settings.customers.gender == 'male' %}checked{%endif%}> {{'Male'|__}}
                        \t\t\t\t\t\t\t\t<span></span>
                        \t\t\t\t\t\t\t</label>
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" {% if settings.customers.gender == 'female' %}checked{%endif%}> {{'Female'|__}}
                        \t\t\t\t\t\t\t\t<span></span>
                        \t\t\t\t\t\t\t</label>
                        \t\t\t\t\t\t</div>
                                            </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"location-receiver\">
                                            <div class=\"row\">
                                                {% if settings.customers.enable_mapAddress == 1 %}
                                                <div class=\"form-group {%if settings.customers.enable_postalCode == 1 %}col-lg-5{%else%}col-lg-6{%endif%}\">
                                                    <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\"  name=\"receiver[street_address]\"  rel=\"receiver\" value=\"{{settings.customers.street_address_map}}\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                                </div>
                                                {% endif %}
                                                <div class=\"form-group {%if settings.customers.enable_mapAddress == 1 and settings.customers.enable_postalCode == 1 %}col-lg-4{%else%}col-lg-6{%endif%}\">
                                                    <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for country in countries %}
                                                            <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                {% if settings.customers.enable_postalCode == 1 %}
                                                <div class=\"form-group {%if settings.customers.enable_mapAddress == 1 %}col-lg-3{%else%}col-lg-6{%endif%}\">
                                                    <label>{{'Postal Code'|__}}</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"{{settings.customers.postal_code}}\">
                                                </div>
                                                {% endif %}
                                                {% if settings.customers.enable_state == 1 %}
                                                <div class=\"form-group {%if settings.customers.enable_county == 1 %}col-lg-4{%else%}col-lg-6{%endif%}\">
                                                    <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiver[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for state in states %}
                                                            <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %} {% if settings.customers.state == state.id  %} selected {% endif %}>{{state.lang('en').name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                {% endif %}
                                                <div class=\"form-group {%if settings.customers.enable_county == 1 and settings.customers.enable_state == 1 %}col-lg-4{%else%}col-lg-6{%endif%}\">
                                                    <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for city in cities %}
                                                            <option value=\"{{city.id}}\">{{city.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                {% if settings.customers.enable_county == 1 %}
                                                <div class=\"form-group {%if settings.customers.enable_state == 1 %}col-lg-4{%else%}col-lg-6{%endif%}\">
                                                    <label>{{'Area'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        {% for county in areas %}
                                                            <option value=\"{{county.id}}\" {% if settings.customers.county == county.id  %} selected {% endif %}>{{county.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                {% endif %}
                                            </div>
                                            {% if settings.customers.enable_mapAddress == 1 %}
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>{{'Google Map'|__}}</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                    <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                </div>
                                            </div>
                                            {% endif %}
                                            {% if settings.customers.enable_createAccount == 1 %}
                                                {% if user.hasUserPermission('client', 'c') %}
                                                    <div class=\"form-group row\">
                                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                        <div class=\"col-lg-9 col-xl-6\">
                                                            <div class=\"kt-checkbox-single\">
                                                                <label class=\"kt-checkbox\">
                                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" {%if settings.customers.connect ==1 %}checked{% endif %}> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                                        <div class=\"col-md-4\">
                                                            <div class=\"form-group kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"col-form-label\">{{'Email'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                                </div>
                                                            </div>
                                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <div class=\"form-group kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"col-form-label\">{{'Username'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <div class=\"form-group kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"col-form-label\">{{'Password'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"password\" class=\"form-control password\" name=\"receiver[password]\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endif %}
                                        </div>
                    \t\t\t\t</div>
                                    <div class=\"kt-portlet__foot\">
                        \t\t\t\t<div class=\"row align-items-center\">
                        \t\t\t\t\t<div class=\"col-lg-12\">
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                        \t\t\t\t\t</div>
                        \t\t\t\t</div>
                        \t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
                            <div class=\"row kt-hidden\" id=\"addnewreceiveraddress\">
                                <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                    \t\t\t\t<div class=\"kt-portlet__head\">
                                        <div class=\"kt-portlet__head-label\">
                                            <span class=\"kt-portlet__head-icon\">
                                                <i class=\"flaticon2-user\"></i>
                                            </span>
                                            <h3 class=\"kt-portlet__head-title\">
                                                {{'Add a new client address'|__}} <small>{{'Fill data and save it brefore you can continue'}}</small>
                                            </h3>
                                        </div>
                    \t\t\t\t</div>
                    \t\t\t\t<div class=\"kt-portlet__body\">
                                        <div class=\"location-receiveraddress\">
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-5\">
                                                    <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for country in countries %}
                                                            <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-3\">
                                                    <label>{{'Postal Code'|__}}</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-4\">
                                                    <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiveraddress[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for state in states %}
                                                            <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for city in cities %}
                                                            <option value=\"{{city.id}}\">{{city.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>{{'Area'|__}}</label>
                                                    <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        {% for county in areas %}
                                                            <option value=\"{{county.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{county.lang(currentLang).name}}\"{% endif %}>{{county.lang('en').name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>{{'Google Map'|__}}</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                    <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                                </div>
                                            </div>
                                        </div>
                    \t\t\t\t</div>
                                    <div class=\"kt-portlet__foot\">
                        \t\t\t\t<div class=\"row align-items-center\">
                        \t\t\t\t\t<div class=\"col-lg-12\">
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                        \t\t\t\t\t</div>
                        \t\t\t\t</div>
                        \t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
                            {%if settings.shipments.enable_return_package == 1 %}
                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                {{'Return package cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">{{'Yes if you need to return money from the receiver to sender after delivery'|__}}</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" {% if settings.shipments.return_package == 1 %}checked{% endif %} required> {{'Yes'|__}}
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" {% if settings.shipments.return_package == 2 %}checked{% endif %} required> {{'No'|__}}
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {% endif %}
                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Package Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">{{'Amount that will be returned to the sender from the receiver'|__}}</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"input-group\">
                                        {% if primary_currency.place_symbol_before == 1 %}
                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    {{primary_currency.currency_symbol}}
                                                </span>
                                            </div>
                                        {% endif %}
                        \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"package_fee\" required />
                                        {% if primary_currency.place_symbol_before == 0 %}
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    {{primary_currency.currency_symbol}}
                                                </span>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            {% if user.role_id != 5 %}
                                <div class=\"form-group row kt-hidden package_fee\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return Shipment Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <div class=\"input-group\">
                                            {% if primary_currency.place_symbol_before == 1 %}
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\">
                                                        {{primary_currency.currency_symbol}}
                                                    </span>
                                                </div>
                                            {% endif %}
                            \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"{{settings.fees.delivery_cost_back_receiver}}\" required />
                                            {% if primary_currency.place_symbol_before == 0 %}
                                                <div class=\"input-group-append\">
                                                    <span class=\"input-group-text\">
                                                        {{primary_currency.currency_symbol}}
                                                    </span>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" checked required> {{'Receiver'|__}}
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required> {{'Sender'|__}}
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"kt-portlet\">
                <div class=\"panel panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseTFour\">
        \t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t{{'Shipment Details'|__}}
        \t\t\t\t\t</h3>
        \t\t\t\t</div>
        \t\t\t</div>
                </div>
                <div id=\"collapseTFour\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                        <div class=\"form-group form-group-last kt-hide\">
            \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
            \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
            \t\t\t\t  \t<div class=\"alert-text\">
                                    {{'Oh snap! Change a few things up and try submitting again'|__}}.
            \t\t\t\t\t</div>
            \t\t\t\t\t<div class=\"alert-close\">
            \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
            \t\t\t\t\t  \t</button>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
                        <div class=\"kt-section\">
        \t\t\t\t\t<h3 class=\"kt-section__title kt-margin-b-20\">
        \t\t\t\t\t\t{{'Package Content'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
        \t\t\t\t\t</h3>
        \t\t\t\t\t<div class=\"kt-section__content\">
                                <div class=\"form-group form-group-last row\" id=\"package_repeater\">
                                    <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                        <div data-repeater-item class=\"align-items-center\">
                                            <div class=\"form-group row\">
                                                <div class=\"{%if settings.shipments.enable_description == 1 %}col-md-4{%else%}col-md-6{%endif%}\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label>{{'Category'|__}}:</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                                <option data-hidden=\"true\"></option>
                                                                {% for category in categories %}
                                                                    <option value=\"{{category.id}}\">{{category.name}}</option>
                                                                {% endfor %}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                {%if settings.shipments.enable_description == 1 %}
                                                <div class=\"col-md-8\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">{{'Description'|__}}:</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control\" name=\"description\" value=\"{{ settings.shipments.description}}\">
                                                        </div>
                                                    </div>
                                                </div>
                                                {% endif %}

                                                {%if settings.shipments.enable_quantity == 1 %}
                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">{{'Quantity'|__}}:</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\"  value=\"{{ settings.shipments.quantity}}\">
                                                        </div>
                                                    </div>
                                                </div>
                                                {% endif %}
                                                {%if settings.shipments.enable_weight == 1 %}
                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">{{'Weight'|__}}:</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <div class=\"input-group\">
                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                                \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\" value=\"{{ settings.shipments.weight}}\" >
                                        \t\t\t\t\t</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {% endif %}

                                                {%if settings.shipments.enable_dimensions == 1 %}
                                                <div class=\"col-md-12\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">{{'Dimensions'|__}}&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[{{'Length'|__}}&nbsp;x&nbsp;{{'Width'|__}}&nbsp;x&nbsp;{{'Height'|__}}] ({{'cm'|__}}):</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <div class=\"input-group\">
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" style=\"max-width: 100px;\" name=\"weight\" value=\"{{ settings.shipments.length}}\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\" name=\"weight\" value=\"{{ settings.shipments.width}}\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\" name=\"weight\" value=\"{{ settings.shipments.height}}\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t</div>
                                                        </div>
                                                    </div>
                                                    <div class=\"d-md-none kt-margin-b-10\"></div>
                                                </div>
                                                {% endif %}
                                            </div>
                                            <div class=\"form-group row\">
                                                <div class=\"col-md-3\">
                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                        <i class=\"la la-trash-o\"></i>
                                                        {{'Delete'|__}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group form-group-last row\">
                                        <label class=\"col-xl-12 col-form-label kt-align-right\">
                                            <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                <i class=\"la la-plus\"></i> {{'Add Item'|__}}
                                            </a>
                                        </label>
                                   </div>
                                 </div>
                            </div>
                        </div>
                        {% if user.role_id == 5 %}
                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
                                <div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <div class=\"form-group readonly col-lg-6\">
                                            <label>{{'Shipping Fee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                {% if primary_currency.place_symbol_before == 1 %}
                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            {{primary_currency.currency_symbol}}
                                                        </span>
                                                    </div>
                                                {% endif %}
                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"{{settings.fees.delivery_cost}}\" required readonly>
                                                {% if primary_currency.place_symbol_before == 0 %}
                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            {{primary_currency.currency_symbol}}
                                                        </span>
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Total Weight'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                                                <input  type=\"text\" class=\"form-control decimal total_weight\" name=\"total_weight\" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        {% if user.role_id != 5 %}
                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
            \t\t\t\t\t<div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <!-- <div class=\"form-group col-lg-4\">
                                            <label>{{'Order Number'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{settings.tracking.prefix_order}}</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\">
                        \t\t\t\t\t</div>
                                        </div> -->
                                        {%if settings.shipments.enable_tax == 1 %}
                                            {% if settings.taxes.type == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Tax'|__}} & {{'Duty'|__}}</label>
                                                <div class=\"input-group\">
                            \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                            \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"{{settings.taxes.percent}}\">
                            \t\t\t\t\t</div>
                                            </div>
                                            {% else %}
                                            <div class=\"form-group col-lg-3\">
                                                <label>{{'SGST'|__}}</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"sgst\" value=\"{{settings.taxes.SGST}}\">
                                                </div>
                                            </div>
                                            <div class=\"form-group col-lg-3\">
                                                <label>{{'CGST'|__}}</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"cgst\" value=\"{{settings.taxes.CGST}}\">
                                                </div>
                                            </div>
                                            {% endif %}
                                        {% endif %}
                                        {%if settings.shipments.enable_insurance == 1 %}
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Insurance'|__}}</label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"{{settings.taxes.insurance}}\">
                        \t\t\t\t\t</div>
                                        </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"row\">
                                        {%if settings.shipments.enable_shippingMode == 1 %}
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Shipping Mode'|__}}</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                                <option data-hidden=\"true\"></option>
                                                {% for mode in modes %}
                                                    <option value=\"{{mode.id}}\" {% if settings.shipments.mode_id == mode.id  %} selected {% endif %}>{{mode.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        {% endif %}
                                        {%if settings.shipments.enable_customsValue == 1 %}
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Customs Value'|__}}</label>
                                            <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"{{settings.shipments.customsValue}}\" aria-describedby=\"basic-addon1\">
                                        </div>
                                        {% endif %}
                                        {%if settings.shipments.enable_courierCompany == 1 %}
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Courier Company'|__}}</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                                <option data-hidden=\"true\"></option>
                                                {% for courier in couriers %}
                                                    <option value=\"{{courier.id}}\" {% if settings.shipments.courier_id == courier.id  %} selected {% endif %}>{{courier.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"row\">
                                        {%if settings.shipments.enable_deliveryTime == 1 %}
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Delivery Time'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for deliverytime in deliverytimes %}
                                                    <option value=\"{{deliverytime.id}}\" {% if settings.tracking.default_deliverytime == deliverytime.id %}selected{% endif %}>{{deliverytime.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        {% endif %}
                                        {%if settings.shipments.enable_deliveryStatus == 1 %}
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Delivery Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for status in statuses %}
                                                    <option value=\"{{status.id}}_{{status.equal}}\" {% if settings.tracking.default_status == status.id %}selected{% endif %}>{{status.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Shipping Fee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                {% if primary_currency.place_symbol_before == 1 %}
                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            {{primary_currency.currency_symbol}}
                                                        </span>
                                                    </div>
                                                {% endif %}
                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"{{settings.fees.delivery_cost}}\" required>
                                                {% if primary_currency.place_symbol_before == 0 %}
                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            {{primary_currency.currency_symbol}}
                                                        </span>
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Total Weight'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                                                <input readonly=\"\" type=\"text\" class=\"form-control  total_weight\" name=\"total_weight\" value=\"0\">
                                            </div>
                                        </div>

                                    </div>
                                    {%if settings.shipments.enable_assignEmployee == 1 %}
                                        {% if (user.hasUserPermission('assign', 'c')) %}
                                            <div class=\"form-group row kt-margin-t-20\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Assign Employee'|__}}</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                                        <option data-hidden=\"true\"></option>
                                                        <option value=\"\"></option>
                                                        {% for employee in employees %}
                                                            <option value=\"{{employee.id}}\" {% if settings.shipments.assigned_id == employee.id  %} selected {% endif %}>{{employee.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endif %}

<div class=\"row\">




    <div class=\"col-lg-12 sec5\">
        <div class=\"panel panel-default\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"panel panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseTFive\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">
                                {{'Choose your truck'|__}}
                            </h3>
                        </div>
                    </div>
                </div>
                <div id=\"collapseTFive\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                        <div class=\"row\">

                            <div class=\"form-group col-lg-6\">
                                <label>{{'package Value'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'package Value'|__}}</span></div>
                                    <input  type=\"number\" class=\"form-control budget_client\" name=\"budget_client\" min=\"1\" placeholder=\"package Value\" >
                                </div>
                            </div>



                            <div class=\"form-group col-lg-6\">
                                <label>{{'invioce Upload'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Invioce Image'|__}}</span></div>
                                    <input  type=\"file\" class=\"form-control budget_client\" name=\"budget_client\" min=\"1\" placeholder=\"package Value\" >
                                </div>
                            </div>


                            <div class=\"form-group col-lg-12\">
                                <label for=\"vehicle_category\">{{'Choose your vehicle category'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <div class=\"form-group col-lg-8\">
                                <select class=\"form-control vehicle_category\" onchange=\"getVehicles(this.value)\"  name=\"vehicle_category\" id=\"vehicle_category\" >
                                    <option data-hidden=\"true\"></option>
                                    {% for categories_cru in categories_crud %}
                                         <option value=\"{{categories_cru.id}}\">{{categories_cru.title}}</option>
                                    {% endfor%}
                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label for=\"slectedTracks\">{{'Choose your vehicle type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <input type='hidden' id='slectedTracks' name='truck_used' />
                            <div class=\"form-group col-lg-12\" id=\"\">
                                <div id=\"vehicleTypeCarousel\" class=\"vehicleTypeCarousel\">
<!--                                    <div>N/a</div>-->
<!--                                    {% for vehcile_cru in vehcile_crud %}-->
<!--                                    <div onclick=\"getvahicalid({{vehcile_cru.id}})\" class=\"card border-0 card-body mx-3 px-0 selectedVahicals vahicalContainer{{vehcile_cru.id}}\">-->
<!--                                        <input type=\"radio\" name=\"model\" class=\"make_radio_slide\">-->
<!--                                        <div class=\"content-inner mx-3 text-center d-block\">-->
<!--                                            <img alt=\"\" class=\"img-fluid mx-auto\" src=\"./admin/media/images/vehicle 2.jpg\">-->
<!--                                            <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">-->
<!--                                                <h4 class=\"font-weight-bold\">Name : {{vehcile_cru.name}}</h4>-->
<!--                                                <p class=\"mb-0\">{{vehcile_cru.description}}</p>-->
<!--                                                <p class=\"mb-0\">Capacity : {{vehcile_cru.capacity}}</p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    {% endfor%}-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__foot\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        {% if user.role_id == 5 %}
                            <button type=\"button\" class=\"btn btn-info save_draft\">{{'Save as draft'|__}}</button> <span class=\"kt-margin-left-10\">{{'or'|__}}
                        {% endif %}
                        <button type=\"submit\" class=\"btn btn-success save\">{{'Send'|__}}</button>
                        <span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{this.page.child_of|page}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









{{ form_close() }}

{% put styles %}
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"
        integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.12.0/css/all.css\"
        integrity=\"sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M\" crossorigin=\"anonymous\">
    <style>
        .readonly .input-group-prepend span {
            background: none;
            border: 0;
            padding-right: 0;
        }
        .readonly .form-control[readonly] {
            border: 0px;
        }
        .table-bordered tr td:first-child {
            width: 200px;
            font-weight: bold;
        }
        .map_canvas {
          height: 350px;
        }
        .filter-option-inner br {
            display: none;
        }
        .select2 {
            width: 100% !important;
        }
\t\t.select2-selection {
\t\t\tmin-height: 36px !important;
\t\t}
        #addnewsender,#addnewsenderaddress,#addnewreceiver,#addnewreceiveraddress{
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
        }
        .kt-portlet .kt-portlet__head .kt-portlet__head-label .kt-portlet__head-title {
            font-weight: 700;
        }
        .panel-title {
          position: relative;
          cursor: pointer;
        }
          
        .panel-title::after {
          content: \"\\f107\";
          color: #48465b;
          top: 13px;
          font-size: 22px;
          right: 17px;
          position: absolute;
          font-family: \"FontAwesome\"
        }
        .panel-title[aria-expanded=\"true\"]::after {
          content: \"\\f106\";
        }
        .make_radio_slide {
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100%;
          opacity: 0;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map}}\"></script>
<script type=\"text/javascript\">
    \$(\".selectedVahicals\").addClass(\"border-0\")
    // \$(`.vahicalContainer\${params}`).removeClass(\"border-0\")
    // \$(`.vahicalContainer\${params}`).css({ \"border\":\" 2px solid #fed06f \"})
    function getvahicalid(params) {
        \$(\"#slectedTracks\").val(params)
        \$(\".selectedVahicals\").addClass(\"border-0\")
        \$(`.vahicalContainer\${params}`).removeClass(\"border-0\")
        // \$(`.vahicalContainer\${params}`).css({ \"border\":\" 2px solid #fed06f \"})
    }
var firstInit = false;
    function getVehicles(val) {
        \$('#vehicle_type').removeClass('d-none');
 let cars;
        \$.ajax({
            method: 'post',
            url: \"{{url('api/get-vehicles')}}\",
            data: {id: val},
            success: function (response, status, xhr, \$form) {
                let imageurl = \"{{url('/')}}\"
                console.log(response);
                // window.location.reload();
                // cars+=\"
                \$('.vehicleTypeCarousel').empty()
                let slidetoShow = (response.length > 2 ? 3 : 2)
                let centermode = (response.length > 2 ? true : false)
                // \$('.vehicleTypeCarousel').slick('unslick');
                \$.each( response, function( index, value ) {
                        \$('.vehicleTypeCarousel').append(`
                        <div onclick=\"getvahicalid(\${value.id})\" class=\"card border-0 card-body mx-3 px-0 selectedVahicals vahicalContainer{{vehcile_cru.id}}\" >
                                        <input type=\"radio\" name=\"\" class=\"make_radio_slide\">
                                        <div class=\"content-inner mx-3 text-center d-block\">
                                            <img alt=\"\" class=\"img-fluid mx-auto\" src=\"/storage/app/\${value.thumbnail}\">
                                            <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                                <h4 class=\"font-weight-bold\">Name : \${value.name}</h4>
                                                <p class=\"mb-0\">\${value.description}</p>
                                                <p class=\"mb-0\">Capacity : \${value.capacity}</p>
                                            </div>
                                        </div>
                         </div>`)
                        });
                if(response.length > 0) {
                        \$('.vehicleTypeCarousel').slick('unslick').slick('reinit');

                    \$('.vehicleTypeCarousel').slick({
                        centerMode: centermode,
                        arrows: true,
                        centerPadding: '60px',
                        prevArrow: \"<button type='button' class='slick-prev'><i class='fa fa-chevron-left fa-2x' aria-hidden='true'></i></button>\",
                        nextArrow: \"<button type='button' class='slick-next'><i class='fa fa-chevron-right fa-2x' aria-hidden='true'></i></button>\",
                        slidesToShow: slidetoShow,
                        slidesToScroll: 1,
                        autoplay: false,
                        infinite: true,
                        autoplaySpeed: 2000,
                        responsive: [
                            {
                                breakpoint: 768,
                                settings: {
                                    arrows: true,
                                    centerMode: true,
                                    centerPadding: '40px',
                                    slidesToShow: slidetoShow,
                                    slidesToScroll: 1,
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    arrows: true,
                                    centerMode: true,
                                    centerPadding: '30px',
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });
                }else{
                    \$('.vehicleTypeCarousel').html('No vehicle found')

                }
            }
        });

    }
KTUtil.ready(function () {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });

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


    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$('.show_receiver_info:checked').val();
        if(selected == 2){
            \$('.receiver_information').addClass('kt-hidden');
        }else{
            \$('.receiver_information').removeClass('kt-hidden');
        }
    });
    \$('body').on('change', '#enable_anotherSender', function(e){
        if(this.checked) {
            \$('.another_sender').removeClass('kt-hidden');
            \$('.base_sender').addClass('kt-hidden');
        }else{
            \$('.base_sender').removeClass('kt-hidden');
            \$('.another_sender').addClass('kt-hidden');
        }

    });


  

    \$('body').on('click', '.type', function(e){
        var selected = \$(this).val();
        if(selected == 2){

            \$('.dev2').removeClass('kt-hidden');
            \$('.dev1').addClass('kt-hidden');

            \$('.dev21').removeClass('kt-hidden');
            \$('.dev31').addClass('kt-hidden');

            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');

            \$('.usr').addClass('kt-hidden');
            \$('.rem').prop('selected', true);
            \$('.sender_address_id').change()

            \$('.usr1').prop('selected', true);
            \$('.usr1').prop('dat-hidden', false);
            \$('.receiver_address_id').change();


        }else{
            \$(\".rem\").hide();
            \$('.usr').prop('selected', true);
            \$('.rem').prop('selected', false);
            \$('.sender_address_id').change();



            \$('.rem1').prop('selected', true);
            \$('.receiver_address_id').change();




            \$('.dev1').removeClass('kt-hidden');
            \$('.usr').removeClass('kt-hidden');
            \$('.dev2').addClass('kt-hidden');
            \$('.dev31').removeClass('kt-hidden');
            \$('.dev21').addClass('kt-hidden');


            \$('.type_1').removeClass('kt-hidden');
            \$('.type_2').addClass('kt-hidden');
            var show_receiver_info = \$('.show_receiver_info:checked').val();
            if(show_receiver_info == 2){

                \$('.receiver_information').addClass('kt-hidden');
            }else{
                \$('.receiver_information').removeClass('kt-hidden');
            }
        }




        var show_receiver_info = \$('.show_receiver_info:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var total_weight = \$('.total_weight').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();

         if(selected != '' && selected != 'new'){

             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: selected, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });

    \$('body').on('change', '.total_weight', function(e){
        var total_weight = \$(this).val();
        {% if settings.shipments.enable_type != 1 %}
            var type = {{settings.shipments.type}};
        {% else %}
            var type = \$('.type:checked').val();
        {% endif %}
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var sender_address_id = \$('#sender_address_id').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();

        \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
    });


    \$('body').on('click', '.return_package_fee', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        {% if settings.shipments.enable_type != 1 %}
            var type = {{settings.shipments.type}};
        {% else %}
            var type = \$('.type:checked').val();
        {% endif %}
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        {% if settings.shipments.enable_type != 1 %}
            var type = {{settings.shipments.type}};
        {% else %}
            var type = \$('.type:checked').val();
        {% endif %}
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });
    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){

        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsender').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewsender').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     {% if addShipmentForm == \"add_form_normal\" %}
                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     {% endif %}
                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     {% if settings.shipments.enable_type != 1 %}
                        var type = {{settings.shipments.type}};
                    {% else %}
                        var type = \$('.type:checked').val();
                    {% endif %}
                     var receiver_address_id = \$('#receiver_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '.save_draft', function(e){
        swal.fire({
            buttonsStyling: false,
            html: \"<div class='alert alert-warning' role='alert'><div class='alert-text'>{{'This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once'|__}}</div></div>\",
            type: \"warning\",

            confirmButtonText: \"{{\"Yes, Just save it as a draft\"|__}}!\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

            showCancelButton: true,
            cancelButtonText: \"{{\"No, cancel\"|__}}\",
            cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
        }).then(function (result) {
            if (result.value) {
                \$('.kt_form').attr('data-request', 'onDraft');
                \$('.kt_form').submit();
            } else {
                \$('.kt_form').attr('data-request', 'onSave');
            }
        });
    });

    \$('body').on('click', '#addnewsender .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsender');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclient', {
                 {% if addShipmentForm == \"add_form_normal\" %}
                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val(),budget_client: parent.find('.budget_client').val(),vehicle_category: parent.find('#vehicle_category').val(),vehicle_type: parent.find('.make_radio_slide').val(),ship_time: parent.find('.ship_time').val(),is_insured: parent.find('.is_insured').val()},
                 {% else %}
                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val(),budget_client: parent.find('.budget_client').val(),vehicle_category: parent.find('#vehicle_category').val(),vehicle_type: parent.find('.make_radio_slide').val(),ship_time: parent.find('.ship_time').val(),is_insured: parent.find('.is_insured').val()},
                 {% endif %}

                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#sender_id').append(newOption).trigger('change');
                     \$('select.sender_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.sender_address_id').val(response.address_id).selectpicker('refresh');
                     {% if addShipmentForm == \"add_form_normal\" %}
                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     {% endif %}
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsender').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#sender_id').append(newOption).trigger('change');
        \$('#addnewsender').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewsenderaddress').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewsenderaddress').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });

    \$('body').on('changed.bs.select', '#packaging_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();

        {% if settings.shipments.enable_type != 1 %}
            var type = {{settings.shipments.type}};
        {% else %}
            var type = \$('.type:checked').val();
        {% endif %}
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = selected;
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != ''){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsenderaddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclientaddress', {
                 {% if addShipmentForm == \"add_form_normal\" %}
                 data: {client_id: \$('#sender_id').val(),street_addr: parent.find('.street_addr').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 {% else %}
                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 {% endif %}
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');



                      var selected = response.default;
                      {% if settings.shipments.enable_type != 1 %}
                            var type = {{settings.shipments.type}};
                        {% else %}
                            var type = \$('.type:checked').val();
                        {% endif %}
                      var receiver_address_id = \$('#receiver_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }


                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsenderaddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .cancel', function(e){
        e.preventDefault();
        \$('select.sender_address_id').val('').selectpicker('refresh');
        \$('#addnewsenderaddress').addClass('kt-hidden');
    });
    \$('body').on('click', '.dilivery_typ', function(e){
        if(\$('.dilivery_typ:checked').val()==1){
            \$('.sec5').addClass('kt-hidden');
        }else{
            \$('.sec5').removeClass('kt-hidden');
        }

    });



    \$('body').on('change', '#receiver_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.receiver_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewreceiver').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiver').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewreceiver').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewreceiveraddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewreceiveraddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     {% if settings.shipments.enable_type != 1 %}
                        var type = {{settings.shipments.type}};
                    {% else %}
                        var type = \$('.type:checked').val();
                    {% endif %}
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiver');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#receiver_id').append(newOption).trigger('change');
                     \$('select.receiver_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.address_id).selectpicker('refresh');


                      var selected = response.address_id;
                      {% if settings.shipments.enable_type != 1 %}
                            var type = {{settings.shipments.type}};
                        {% else %}
                            var type = \$('.type:checked').val();
                        {% endif %}
                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiver').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#receiver_id').append(newOption).trigger('change');
        \$('#addnewreceiver').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewreceiveraddress').removeClass('kt-hidden');
            \$('html, body').animate({
                scrollTop: eval(\$('#addnewreceiveraddress').offset().top - 140)
            }, 2000);
        }else if(selected != ''){
            \$('#addnewreceiveraddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiveraddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });


        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');




                       var selected = response.default;
                       {% if settings.shipments.enable_type != 1 %}
                            var type = {{settings.shipments.type}};
                        {% else %}
                            var type = \$('.type:checked').val();
                        {% endif %}
                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       var show_receiver_info = \$('.show_receiver_info:checked').val();
                       var total_weight = \$('.total_weight').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                                success: function(response, status, xhr, \$form) {
                                     \$('#delivery_cost').val(response.delivery_cost);
                                     \$('#return_courier_fee').val(response.return_courier_fee);
                                }
                           });
                      }



                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiveraddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .cancel', function(e){
        e.preventDefault();
        \$('select.receiver_address_id').val('').selectpicker('refresh');
        \$('#addnewreceiveraddress').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            {% if addShipmentForm == \"add_form_normal\" %}
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
            {% else %}
            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
            {% endif %}
       }
    });
    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListareas', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.area_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });

    \$('body').on('change', '#sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        {% if settings.shipments.enable_type != 1 %}
            var type = {{settings.shipments.type}};
        {% else %}
            var type = \$('.type:checked').val();
        {% endif %}
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var total_weight = \$('.total_weight').val();
        if(selected != '' && selected != 'new'){
            \$.request('onChangefees', {
                 data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                 success: function(response, status, xhr, \$form) {
                      \$('#delivery_cost').val(response.delivery_cost);
                      \$('#return_courier_fee').val(response.return_courier_fee);
                 }
            });
       }
    });

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         {% if settings.shipments.enable_type != 1 %}
            var type = {{settings.shipments.type}};
        {% else %}
            var type = \$('.type:checked').val();
        {% endif %}
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });


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
    \$('#package_repeater').repeater({
        initEmpty: true,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '{{\"Nothing selected\"|__}}',
            });
            \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
                verticalbuttons: true,
                verticalup: '<i class=\"la la-plus\"></i>',
                verticaldown: '<i class=\"la la-minus\"></i>',
                min: 0,
                max: 10000,
            });
            var repeater_item = \$(this);
            repeater_item.on('change', '.sub_weight', function(e, clickedIndex, newValue, oldValue){
                var all = \$('.sub_weight').map(function(){
                    return this.value;
                }).get();
                var total_weight =0;
                for(var i=0;i<all.length;i++){
                    total_weight =total_weight + parseInt(all[i]);
                }
                \$('.total_weight').val(total_weight);

                var sender_address_id = \$('#sender_address_id').val();
                 var receiver_address_id = \$('#receiver_address_id').val();
                 var packaging_id = \$('#packaging_id').val();
                 {% if settings.shipments.enable_type != 1 %}
                    var type = {{settings.shipments.type}};
                {% else %}
                    var type = \$('.type:checked').val();
                {% endif %}
                 var return_defray = \$('.return_defray:checked').val();
                 var return_package_fee = \$('.return_package_fee:checked').val();
                 var show_receiver_info = \$('.show_receiver_info:checked').val();
                 var total_weight = \$('.total_weight').val();
                 \$.request('onChangefees', {
                      data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                      success: function(response, status, xhr, \$form) {
                           \$('#delivery_cost').val(response.delivery_cost);
                           \$('#return_courier_fee').val(response.return_courier_fee);
                      }
                 });


                //alert(total_weight);
                //var sub_weight = repeater_item.find('.sub_weight').val();
                //alert(sub_weight);
            });
        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary',
        verticalbuttons: true,
        verticalup: '<i class=\"la la-plus\"></i>',
        verticaldown: '<i class=\"la la-minus\"></i>',
        min: 0,
        max: 10000,
    });




    \$('.address').each(function(){
        var address = \$(this);
        address.geocomplete({
            map: \".map_canvas.map_\"+address.attr('rel'),
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
            restoreValueAfterBlur: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

    \$('body').on('click', '.connect', function(){
        if(\$(this).is(\":checked\")){
            \$('#connect_'+\$(this).val()).removeClass('kt-hidden');
        }else{
            \$('#connect_'+\$(this).val()).addClass('kt-hidden');
        }
    });

    \$('body').on('change', '#label_other', function(){
        if(\$(this).val() == 'other')
            \$('#div_label_other').removeClass('kt-hidden');
        else
            \$('#div_label_other').addClass('kt-hidden');
    });

    \$('body').on('change', '.feeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#cost').removeClass('kt-hidden');
        else
            \$('#cost').addClass('kt-hidden');
    });

    \$('body').on('change', '.cfeeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#ccost').removeClass('kt-hidden');
        else
            \$('#ccost').addClass('kt-hidden');
    });

    \$('body').on('change', '.sub_weight', function(){
        alert(\$('.sub_weight').val());
        var sub_weight = Number ( \$(this).val() );
        var total_weight =  Number ( \$('.total_weight').val() );
        total_weight += sub_weight ;
        \$('.total_weight').val(total_weight);
        alert(\$('.total_weight').val());
    });

    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');
             var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             {% if settings.shipments.enable_type != 1 %}
                var type = {{settings.shipments.type}};
            {% else %}
                var type = \$('.type:checked').val();
            {% endif %}
             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             var show_receiver_info = \$('.show_receiver_info:checked').val();
             var total_weight = \$('.total_weight').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }else{
            \$('.package_fee').addClass('kt-hidden');
        }
    });

    \$(\".fees\").inputmask('999{{primary_currency.thousand_separator}}999{{primary_currency.thousand_separator}}999{{primary_currency.decimal_point}}{% for i in '1'..primary_currency.initbiz_money_fraction_digits %}9{% endfor %}', {
        numericInput: true
    });

    \$('.mask').val(('{% for i in '1'..settings.tracking.numbers_order %}0{% endfor %}' + {{max}}).slice(-{{settings.tracking.numbers_order}}));

    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('{% for i in '1'..settings.tracking.numbers_order %}0{% endfor %}' + \$(this).val()).slice(-{{settings.tracking.numbers_order}}));
    });
});



</script>
{% endput %}", "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm", "");
    }
}
