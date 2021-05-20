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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm */
class __TwigTemplate_5033a1a3fa7f2b7246b202113a17beba31e078d541ab6468a7e13465917fe220 extends \Twig\Template
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
                echo "\" type=\"hidden\" />
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
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Type"]);
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
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pickup"]);
                echo "
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                ";
                // line 287
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For door to door delivery"]);
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
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Drop off"]);
                echo "
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                ";
                // line 308
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For delivery package from branch directly"]);
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
                                ";
            }
            // line 356
            echo "                            </div>
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
            // line 370
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
            // line 381
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
            // line 390
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 390) == 5)) {
                // line 391
                echo "                        <div class=\"form-group row\">
                            ";
                // line 392
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 392), "enable_anotherCustomer", [], "any", false, false, false, 392) == 1)) {
                    // line 393
                    echo "                            <div class=\"form-group  col-lg-6\">
                                <label class=\"col-form-label\">";
                    // line 394
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Another Sender"]);
                    echo "</label>
                                <div class=\"\">
                                    <div class=\"kt-checkbox-single\">
                                        <label class=\"kt-checkbox\">
                                            <input type=\"checkbox\" id=\"enable_anotherSender\" name=\"enable_anotherSender\" ";
                    // line 398
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 398), "anotherCustomer", [], "any", false, false, false, 398) == 1)) {
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
                // line 405
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 405), "enable_customerPublic", [], "any", false, false, false, 405) == 1)) {
                    // line 406
                    echo "                           <!--  <div class=\"form-group col-lg-6\">
                                <label class=\"col-form-label\">";
                    // line 407
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Show Sender Data"]);
                    echo "</label>
                                <div class=\"\">
                                    <div class=\"kt-checkbox-single\">
                                        <label class=\"kt-checkbox\">
                                            <input type=\"checkbox\" id=\"enable_showSender\" name=\"enable_showSender\" ";
                    // line 411
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 411), "customerPublic", [], "any", false, false, false, 411) == 1)) {
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
                // line 418
                echo "                        </div>

                        <div class=\"another_sender ";
                // line 420
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 420), "anotherCustomer", [], "any", false, false, false, 420) != 1)) {
                    echo "kt-hidden";
                }
                echo "\">
                            <div class=\" form-group row\">
                                <label>";
                // line 422
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control clients\" name=\"another_sender_id\" id=\"sender_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 425
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                                    </select>
                                    <span class=\"text-muted\">";
                // line 427
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
                echo "</span>
                            </div>
                            <div class=\"form-group row\">
                                <label>";
                // line 430
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
                // line 431
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
                echo "\" required>
                                    <option data-hidden=\"true\"></option><label>";
                // line 432
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>

                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 434
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>

                                </select>
                            </div>
                        </div>

                    ";
            }
            // line 441
            echo "                    <div class=\"base_sender ";
            if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 441) == 5) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 441), "anotherCustomer", [], "any", false, false, false, 441) == 1))) {
                echo "kt-hidden";
            }
            echo "\">
                        <div class=\"form-group row\">
                            <label>";
            // line 443
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            ";
            // line 444
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 444) == 5)) {
                // line 445
                echo "                                <input name=\"sender_id\" id=\"sender_id\"  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 445), "html", null, true);
                echo "\" type=\"hidden\" />
                                <input value=\"";
                // line 446
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 446), "html", null, true);
                echo "\" type=\"text\" class=\"form-control\" disabled />
                            ";
            } else {
                // line 448
                echo "                                <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 450
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                                </select>
                                <span class=\"text-muted\">";
                // line 452
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
                echo "</span>
                            ";
            }
            // line 454
            echo "                        </div>
                        ";
            // line 455
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 455) == 5)) {
                // line 456
                echo "                            ";
                if ((null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 456))) {
                    // line 457
                    echo "                                <div class=\"form-group row\">
                                    <label>";
                    // line 458
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                                </div>
                            ";
                }
                // line 462
                echo "                        ";
            }
            // line 463
            echo "                        <div class=\"form-group row\">
                            <label>";
            // line 464
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
            // line 465
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
            echo "\" required>
                                <option data-hidden=\"true\"></option><label>";
            // line 466
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                ";
            // line 467
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 467) == 5)) {
                // line 468
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 468));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 469
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 469), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 469) == 1)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 469), "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 471
                echo "                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                                ";
            }
            // line 473
            echo "                            </select>
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
            // line 485
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
            // line 491
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 491), "enable_gender", [], "any", false, false, false, 491) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                            <label>";
            // line 492
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                        </div>
                                        <div class=\"form-group ";
            // line 495
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 495), "enable_gender", [], "any", false, false, false, 495) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                            <label>";
            // line 496
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                        </div>
                                        ";
            // line 499
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 499), "enable_gender", [], "any", false, false, false, 499) == 1)) {
                // line 500
                echo "                                        <div class=\"form-group col-lg-3\">
                                            <label>";
                // line 501
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                            <div class=\"kt-radio-inline\">
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\" ";
                // line 504
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 504), "gender", [], "any", false, false, false, 504) == "male")) {
                    echo "checked";
                }
                echo " > ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                    \t\t\t\t\t\t\t\t<span></span>
                    \t\t\t\t\t\t\t</label>
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\" ";
                // line 508
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 508), "gender", [], "any", false, false, false, 508) == "female")) {
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
            // line 514
            echo "                                    </div>
                                    <div class=\"location-sender\">
                                        <div class=\"row\">
                                            ";
            // line 517
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 517), "enable_mapAddress", [], "any", false, false, false, 517) == 1)) {
                // line 518
                echo "                                            <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 518), "enable_postalCode", [], "any", false, false, false, 518) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                <label>";
                // line 519
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address \" name=\"sender[street_address_map]\"  rel=\"sender\" value=\"";
                // line 520
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 520), "street_address_map", [], "any", false, false, false, 520), "html", null, true);
                echo "\" />
                                                <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                            </div>
                                            ";
            }
            // line 526
            echo "                                            <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 526), "enable_mapAddress", [], "any", false, false, false, 526) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 526), "enable_postalCode", [], "any", false, false, false, 526) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                <label>";
            // line 527
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 530
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 531
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 531), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 531), "name", [], "any", false, false, false, 531), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 531), "name", [], "any", false, false, false, 531), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 533
            echo "                                                </select>
                                            </div>
                                            ";
            // line 535
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 535), "enable_postalCode", [], "any", false, false, false, 535) == 1)) {
                // line 536
                echo "                                            <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 536), "enable_mapAddress", [], "any", false, false, false, 536) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                <label>";
                // line 537
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" value=\"";
                // line 538
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 538), "postal_code", [], "any", false, false, false, 538), "html", null, true);
                echo "\">
                                            </div>
                                            ";
            }
            // line 541
            echo "
                                            ";
            // line 542
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 542), "enable_state", [], "any", false, false, false, 542) == 1)) {
                // line 543
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 544
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"";
                // line 545
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"sender[state]\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
                // line 547
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 548
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 548), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 548), "name", [], "any", false, false, false, 548), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 548), "state", [], "any", false, false, false, 548) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 548))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 548), "name", [], "any", false, false, false, 548), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 550
                echo "                                                </select>
                                            </div>
                                            ";
            }
            // line 553
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 554
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"";
            // line 555
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 557
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 558
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 558), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 558), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 560
            echo "                                                </select>
                                            </div>

                                            ";
            // line 563
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 563), "enable_county", [], "any", false, false, false, 563) == 1)) {
                // line 564
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 565
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "</label>
                                                <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"";
                // line 566
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
                // line 568
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 569
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 569), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 569), "county", [], "any", false, false, false, 569) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 569))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 569), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 571
                echo "                                                </select>
                                            </div>
                                            ";
            }
            // line 574
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 574), "enable_streetAddress", [], "any", false, false, false, 574) == 1)) {
                // line 575
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 576
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
                echo "</label>
                                                <input type=\"text\" class=\"form-control street_addr\" name=\"sender[street_address]\" value=\"";
                // line 577
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 577), "street_address", [], "any", false, false, false, 577), "html", null, true);
                echo "\"  required/>
                                            </div>
                                            ";
            }
            // line 580
            echo "                                        </div>
                                        ";
            // line 581
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 581), "enable_mapAddress", [], "any", false, false, false, 581) == 1)) {
                // line 582
                echo "                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
                // line 584
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                                <span class=\"form-text text-muted\">";
                // line 586
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                            </div>
                                        </div>
                                        ";
            }
            // line 590
            echo "
                                        ";
            // line 591
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 591), "enable_createAccount", [], "any", false, false, false, 591) == 1)) {
                // line 592
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 592)) {
                    // line 593
                    echo "                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                        <div class=\"kt-checkbox-single\">
                                                            <label class=\"kt-checkbox\">
                                                                <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\" ";
                    // line 598
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 598), "connect", [], "any", false, false, false, 598) == 1)) {
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
                    // line 608
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
                    // line 619
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
                    // line 630
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
                // line 640
                echo "                                        ";
            }
            // line 641
            echo "                                    </div>
                \t\t\t\t</div>
                                <div class=\"kt-portlet__foot\">
                    \t\t\t\t<div class=\"row align-items-center\">
                    \t\t\t\t\t<div class=\"col-lg-12\">
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 646
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 647
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
            // line 662
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
            // line 670
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 677
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 680
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 681
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 681), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 681), "name", [], "any", false, false, false, 681), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 681), "name", [], "any", false, false, false, 681), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 683
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 686
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 692
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"";
            // line 693
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"senderaddress[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 695
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 696
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 696), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 696), "name", [], "any", false, false, false, 696), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 696), "name", [], "any", false, false, false, 696), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 698
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 701
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"";
            // line 702
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 704
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 705
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 705), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 705), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 707
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 710
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                            <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"";
            // line 711
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" >
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 713
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 714
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 714), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 714), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 716
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 721
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 723
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
            // line 731
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 732
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    ";
            // line 739
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 739), "enable_payment_type", [], "any", false, false, false, 739) == 1)) {
                // line 740
                echo "                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 741
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"1\" ";
                // line 745
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 745), "payment_type", [], "any", false, false, false, 745) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
                echo " </option>
                                <option value=\"2\" ";
                // line 746
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 746), "payment_type", [], "any", false, false, false, 746) == 2)) {
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
            // line 751
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 751), "enable_payment_method", [], "any", false, false, false, 751) == 1)) {
                // line 752
                echo "                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 753
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Method"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_method\" id=\"payment_method\" required>
                                <option data-hidden=\"true\"></option>
                                ";
                // line 757
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["enable_cash"] ?? null) : null) == 1)) {
                    // line 758
                    echo "                                <option value=\"cash\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 758), "payment_method", [], "any", false, false, false, 758) == "cash")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cash"]);
                    echo " </option>
                                ";
                }
                // line 760
                echo "                                ";
                if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["enable_transfer"] ?? null) : null) == 1)) {
                    // line 761
                    echo "                                <option value=\"transfer\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 761), "payment_method", [], "any", false, false, false, 761) == "transfer")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wire Transfer"]);
                    echo " </option>
                                ";
                }
                // line 763
                echo "                                ";
                if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["payment"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["enable_paystack"] ?? null) : null) == 1)) {
                    // line 764
                    echo "                                <option value=\"paystack\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 764), "payment_method", [], "any", false, false, false, 764) == "paystack")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack"]);
                    echo " </option>
                                ";
                }
                // line 766
                echo "                                ";
                if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["payment"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["enable_paypal"] ?? null) : null) == 1)) {
                    // line 767
                    echo "                                <option value=\"paypal\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 767), "payment_method", [], "any", false, false, false, 767) == "paypal")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paypal"]);
                    echo " </option>
                                ";
                }
                // line 769
                echo "                            </select>
                        </div>
                    </div>
                    ";
            }
            // line 773
            echo "                    <div class=\"form-group row type_1\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 774
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Record receiver information ?"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" checked required> ";
            // line 778
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" required> ";
            // line 782
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
            // line 799
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
            // line 807
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            // line 810
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                </select>
                                <span class=\"text-muted\">";
            // line 812
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will receive the package"]);
            echo "</span>
                            </div>
                            <div class=\"form-group row\">
                                <label>";
            // line 815
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
            // line 816
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select receiver first"]);
            echo "\" required>
                                    <option data-hidden=\"true\"></option>
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
            // line 828
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
            // line 834
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 834), "enable_gender", [], "any", false, false, false, 834) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                                <label>";
            // line 835
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                            </div>
                                            <div class=\"form-group ";
            // line 838
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 838), "enable_gender", [], "any", false, false, false, 838) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                                <label>";
            // line 839
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                            </div>
                                            ";
            // line 842
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 842), "enable_gender", [], "any", false, false, false, 842) == 1)) {
                // line 843
                echo "                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                // line 844
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                                <div class=\"kt-radio-inline\">
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" ";
                // line 847
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 847), "gender", [], "any", false, false, false, 847) == "male")) {
                    echo "checked";
                }
                echo "> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                        \t\t\t\t\t\t\t\t<span></span>
                        \t\t\t\t\t\t\t</label>
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" ";
                // line 851
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 851), "gender", [], "any", false, false, false, 851) == "female")) {
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
            // line 857
            echo "                                        </div>
                                        <div class=\"location-receiver\">
                                            <div class=\"row\">
                                                ";
            // line 860
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 860), "enable_mapAddress", [], "any", false, false, false, 860) == 1)) {
                // line 861
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 861), "enable_postalCode", [], "any", false, false, false, 861) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 862
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\"  name=\"receiver[street_address]\"  rel=\"receiver\" value=\"";
                // line 863
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 863), "street_address_map", [], "any", false, false, false, 863), "html", null, true);
                echo "\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                                </div>
                                                ";
            }
            // line 869
            echo "                                                <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 869), "enable_mapAddress", [], "any", false, false, false, 869) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 869), "enable_postalCode", [], "any", false, false, false, 869) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                    <label>";
            // line 870
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 873
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 874
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 874), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 874), "name", [], "any", false, false, false, 874), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 874), "name", [], "any", false, false, false, 874), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 876
            echo "                                                    </select>
                                                </div>
                                                ";
            // line 878
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 878), "enable_postalCode", [], "any", false, false, false, 878) == 1)) {
                // line 879
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 879), "enable_mapAddress", [], "any", false, false, false, 879) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 880
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"";
                // line 881
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 881), "postal_code", [], "any", false, false, false, 881), "html", null, true);
                echo "\">
                                                </div>
                                                ";
            }
            // line 884
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 884), "enable_state", [], "any", false, false, false, 884) == 1)) {
                // line 885
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 885), "enable_county", [], "any", false, false, false, 885) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 886
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
                // line 887
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"receiver[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
                // line 889
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 890
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 890), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 890), "name", [], "any", false, false, false, 890), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 890), "state", [], "any", false, false, false, 890) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 890))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 890), "name", [], "any", false, false, false, 890), "html", null, true);
                    echo "</option>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 892
                echo "                                                    </select>
                                                </div>
                                                ";
            }
            // line 895
            echo "                                                <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 895), "enable_county", [], "any", false, false, false, 895) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 895), "enable_state", [], "any", false, false, false, 895) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                    <label>";
            // line 896
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
            // line 897
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 899
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 900
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 900), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 900), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 902
            echo "                                                    </select>
                                                </div>
                                                ";
            // line 904
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 904), "enable_county", [], "any", false, false, false, 904) == 1)) {
                // line 905
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 905), "enable_state", [], "any", false, false, false, 905) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 906
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
                // line 907
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
                // line 909
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 910
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 910), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 910), "county", [], "any", false, false, false, 910) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 910))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 910), "html", null, true);
                    echo "</option>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 912
                echo "                                                    </select>
                                                </div>
                                                ";
            }
            // line 915
            echo "                                            </div>
                                            ";
            // line 916
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 916), "enable_mapAddress", [], "any", false, false, false, 916) == 1)) {
                // line 917
                echo "                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>";
                // line 919
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                    <span class=\"form-text text-muted\">";
                // line 921
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                                </div>
                                            </div>
                                            ";
            }
            // line 925
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 925), "enable_createAccount", [], "any", false, false, false, 925) == 1)) {
                // line 926
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 926)) {
                    // line 927
                    echo "                                                    <div class=\"form-group row\">
                                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                        <div class=\"col-lg-9 col-xl-6\">
                                                            <div class=\"kt-checkbox-single\">
                                                                <label class=\"kt-checkbox\">
                                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" ";
                    // line 932
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 932), "connect", [], "any", false, false, false, 932) == 1)) {
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
                    // line 942
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
                    // line 953
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
                    // line 964
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
                // line 974
                echo "                                            ";
            }
            // line 975
            echo "                                        </div>
                    \t\t\t\t</div>
                                    <div class=\"kt-portlet__foot\">
                        \t\t\t\t<div class=\"row align-items-center\">
                        \t\t\t\t\t<div class=\"col-lg-12\">
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 980
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 981
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
            // line 995
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
            // line 1003
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1010
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1013
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 1014
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 1014), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1014), "name", [], "any", false, false, false, 1014), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 1014), "name", [], "any", false, false, false, 1014), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1016
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-3\">
                                                    <label>";
            // line 1019
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1025
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
            // line 1026
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1028
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 1029
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1029), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1029), "name", [], "any", false, false, false, 1029), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1029), "name", [], "any", false, false, false, 1029), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1031
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1034
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
            // line 1035
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1037
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 1038
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1038), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1038), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1040
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1043
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                                    <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
            // line 1044
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1046
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 1047
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1047), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1047), "name", [], "any", false, false, false, 1047), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 1047), "name", [], "any", false, false, false, 1047), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1049
            echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>";
            // line 1054
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                    <span class=\"form-text text-muted\">";
            // line 1056
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
            // line 1064
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 1065
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                        \t\t\t\t\t</div>
                        \t\t\t\t</div>
                        \t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
                            ";
            // line 1071
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1071), "enable_return_package", [], "any", false, false, false, 1071) == 1)) {
                // line 1072
                echo "                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                ";
                // line 1075
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">";
                // line 1076
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes if you need to return money from the receiver to sender after delivery"]);
                echo "</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
                // line 1081
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1081), "return_package", [], "any", false, false, false, 1081) == 1)) {
                    echo "checked";
                }
                echo " required> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                echo "
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
                // line 1085
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1085), "return_package", [], "any", false, false, false, 1085) == 2)) {
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
            // line 1092
            echo "                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1093
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">";
            // line 1094
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount that will be returned to the sender from the receiver"]);
            echo "</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"input-group\">
                                        ";
            // line 1098
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1098) == 1)) {
                // line 1099
                echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1101), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1105
            echo "                        \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"package_fee\" required />
                                        ";
            // line 1106
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1106) == 0)) {
                // line 1107
                echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1109), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1113
            echo "                                    </div>
                                </div>
                            </div>
                            ";
            // line 1116
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1116) != 5)) {
                // line 1117
                echo "                                <div class=\"form-group row kt-hidden package_fee\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 1118
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <div class=\"input-group\">
                                            ";
                // line 1121
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1121) == 1)) {
                    // line 1122
                    echo "                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\">
                                                        ";
                    // line 1124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1124), "html", null, true);
                    echo "
                                                    </span>
                                                </div>
                                            ";
                }
                // line 1128
                echo "                            \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1128), "delivery_cost_back_receiver", [], "any", false, false, false, 1128), "html", null, true);
                echo "\" required />
                                            ";
                // line 1129
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1129) == 0)) {
                    // line 1130
                    echo "                                                <div class=\"input-group-append\">
                                                    <span class=\"input-group-text\">
                                                        ";
                    // line 1132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1132), "html", null, true);
                    echo "
                                                    </span>
                                                </div>
                                            ";
                }
                // line 1136
                echo "                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 1140
            echo "                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1141
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" checked required> ";
            // line 1145
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required> ";
            // line 1149
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
            // line 1170
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
            // line 1181
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
            // line 1192
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Content"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
        \t\t\t\t\t</h3>
        \t\t\t\t\t<div class=\"kt-section__content\">
                                <div class=\"form-group form-group-last row\" id=\"package_repeater\">
                                    <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                        <div data-repeater-item class=\"align-items-center\">
                                            <div class=\"form-group row\">
                                                <div class=\"";
            // line 1199
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1199), "enable_description", [], "any", false, false, false, 1199) == 1)) {
                echo "col-md-4";
            } else {
                echo "col-md-6";
            }
            echo "\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label>";
            // line 1202
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                                <option data-hidden=\"true\"></option>
                                                                ";
            // line 1207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 1208
                echo "                                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1208), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1208), "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1210
            echo "                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            // line 1214
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1214), "enable_description", [], "any", false, false, false, 1214) == 1)) {
                // line 1215
                echo "                                                <div class=\"col-md-8\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1218
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
                // line 1221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1221), "description", [], "any", false, false, false, 1221), "html", null, true);
                echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1226
            echo "
                                                ";
            // line 1227
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1227), "enable_quantity", [], "any", false, false, false, 1227) == 1)) {
                // line 1228
                echo "                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1231
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\"  value=\"";
                // line 1234
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1234), "quantity", [], "any", false, false, false, 1234), "html", null, true);
                echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1239
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1239), "enable_weight", [], "any", false, false, false, 1239) == 1)) {
                // line 1240
                echo "                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1243
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <div class=\"input-group\">
                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1247
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\" value=\"";
                // line 1248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1248), "weight", [], "any", false, false, false, 1248), "html", null, true);
                echo "\" >
                                        \t\t\t\t\t</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1254
            echo "
                                                ";
            // line 1255
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1255), "enable_dimensions", [], "any", false, false, false, 1255) == 1)) {
                // line 1256
                echo "                                                <div class=\"col-md-12\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1259
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
                // line 1265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1265), "length", [], "any", false, false, false, 1265), "html", null, true);
                echo "\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1271), "width", [], "any", false, false, false, 1271), "html", null, true);
                echo "\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1277
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1277), "height", [], "any", false, false, false, 1277), "html", null, true);
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
            // line 1286
            echo "                                            </div>
                                            <div class=\"form-group row\">
                                                <div class=\"col-md-3\">
                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                        <i class=\"la la-trash-o\"></i>
                                                        ";
            // line 1291
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
            // line 1300
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
            echo "
                                            </a>
                                        </label>
                                   </div>
                                 </div>
                            </div>
                        </div>
                        ";
            // line 1307
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1307) == 5)) {
                // line 1308
                echo "                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
                                <div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <div class=\"form-group readonly col-lg-6\">
                                            <label>";
                // line 1313
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                ";
                // line 1315
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1315) == 1)) {
                    // line 1316
                    echo "                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1318
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1318), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1322
                echo "                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1322), "delivery_cost", [], "any", false, false, false, 1322), "html", null, true);
                echo "\" required readonly>
                                                ";
                // line 1323
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1323) == 0)) {
                    // line 1324
                    echo "                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1326
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1326), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1330
                echo "                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1334
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1336
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
            // line 1344
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1344) != 5)) {
                // line 1345
                echo "                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
            \t\t\t\t\t<div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <!-- <div class=\"form-group col-lg-4\">
                                            <label>";
                // line 1350
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1352
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1352), "prefix_order", [], "any", false, false, false, 1352), "html", null, true);
                echo "</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\">
                        \t\t\t\t\t</div>
                                        </div> -->
                                        ";
                // line 1356
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1356), "enable_tax", [], "any", false, false, false, 1356) == 1)) {
                    // line 1357
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1357), "type", [], "any", false, false, false, 1357) == 1)) {
                        // line 1358
                        echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                        // line 1359
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                        echo " & ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Duty"]);
                        echo "</label>
                                                <div class=\"input-group\">
                            \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                            \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"";
                        // line 1362
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1362), "percent", [], "any", false, false, false, 1362), "html", null, true);
                        echo "\">
                            \t\t\t\t\t</div>
                                            </div>
                                            ";
                    } else {
                        // line 1366
                        echo "                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                        // line 1367
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SGST"]);
                        echo "</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"sgst\" value=\"";
                        // line 1370
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1370), "SGST", [], "any", false, false, false, 1370), "html", null, true);
                        echo "\">
                                                </div>
                                            </div>
                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                        // line 1374
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CGST"]);
                        echo "</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"cgst\" value=\"";
                        // line 1377
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1377), "CGST", [], "any", false, false, false, 1377), "html", null, true);
                        echo "\">
                                                </div>
                                            </div>
                                            ";
                    }
                    // line 1381
                    echo "                                        ";
                }
                // line 1382
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1382), "enable_insurance", [], "any", false, false, false, 1382) == 1)) {
                    // line 1383
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1384
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
                    echo "</label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"";
                    // line 1387
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1387), "insurance", [], "any", false, false, false, 1387), "html", null, true);
                    echo "\">
                        \t\t\t\t\t</div>
                                        </div>
                                        ";
                }
                // line 1391
                echo "                                    </div>
                                    <div class=\"row\">
                                        ";
                // line 1393
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1393), "enable_shippingMode", [], "any", false, false, false, 1393) == 1)) {
                    // line 1394
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1395
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
                    echo "</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1398
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                        // line 1399
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1399), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1399), "mode_id", [], "any", false, false, false, 1399) == twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1399))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 1399), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1401
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1404
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1404), "enable_customsValue", [], "any", false, false, false, 1404) == 1)) {
                    // line 1405
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1406
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
                    echo "</label>
                                            <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"";
                    // line 1407
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1407), "customsValue", [], "any", false, false, false, 1407), "html", null, true);
                    echo "\" aria-describedby=\"basic-addon1\">
                                        </div>
                                        ";
                }
                // line 1410
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1410), "enable_courierCompany", [], "any", false, false, false, 1410) == 1)) {
                    // line 1411
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1412
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                    echo "</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1415
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["courier"]) {
                        // line 1416
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1416), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1416), "courier_id", [], "any", false, false, false, 1416) == twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1416))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "name", [], "any", false, false, false, 1416), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courier'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1418
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1421
                echo "                                    </div>
                                    <div class=\"row\">
                                        ";
                // line 1423
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1423), "enable_deliveryTime", [], "any", false, false, false, 1423) == 1)) {
                    // line 1424
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1425
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1428
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["deliverytime"]) {
                        // line 1429
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1429), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1429), "default_deliverytime", [], "any", false, false, false, 1429) == twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1429))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "name", [], "any", false, false, false, 1429), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deliverytime'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1431
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1434
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1434), "enable_deliveryStatus", [], "any", false, false, false, 1434) == 1)) {
                    // line 1435
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1436
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1439
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                        // line 1440
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1440), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "equal", [], "any", false, false, false, 1440), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1440), "default_status", [], "any", false, false, false, 1440) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1440))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 1440), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1442
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1445
                echo "                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1448
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                ";
                // line 1450
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1450) == 1)) {
                    // line 1451
                    echo "                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1453
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1453), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1457
                echo "                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1457), "delivery_cost", [], "any", false, false, false, 1457), "html", null, true);
                echo "\" required>
                                                ";
                // line 1458
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1458) == 0)) {
                    // line 1459
                    echo "                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1461
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1461), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1465
                echo "                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1469
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1471
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                                <input readonly=\"\" type=\"text\" class=\"form-control  total_weight\" name=\"total_weight\" value=\"0\">
                                            </div>
                                        </div>

                                    </div>
                                    ";
                // line 1477
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1477), "enable_assignEmployee", [], "any", false, false, false, 1477) == 1)) {
                    // line 1478
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 1478)) {
                        // line 1479
                        echo "                                            <div class=\"form-group row kt-margin-t-20\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                        // line 1480
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                        echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                                        <option data-hidden=\"true\"></option>
                                                        <option value=\"\"></option>
                                                        ";
                        // line 1485
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                            // line 1486
                            echo "                                                            <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1486), "html", null, true);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1486), "assigned_id", [], "any", false, false, false, 1486) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1486))) {
                                echo " selected ";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1486), "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1488
                        echo "                                                    </select>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 1492
                    echo "                                    ";
                }
                // line 1493
                echo "                                </div>
                            </div>
                        ";
            }
            // line 1496
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 1503
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"panel panel-heading\">
                    <div class=\"kt-portlet__head panel-title\" data-toggle=\"collapse\" data-target=\"#collapseTFive\">
                        <div class=\"kt-portlet__head-label\">
                            <h3 class=\"kt-portlet__head-title\">
                                ";
        // line 1512
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your truck"]);
        echo "
                            </h3>
                        </div>
                    </div>
                </div>
                <div id=\"collapseTFive\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                        <div class=\"row\">
                            <div class=\"form-group col-lg-4\">
                                <label for=\"vehicle_category\">";
        // line 1521
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle category"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <div class=\"form-group col-lg-8\">
                                <select class=\"form-control vehicle_category\"  name=\"vehicle_category\" id=\"vehicle_category\" >
                                    <option data-hidden=\"true\"></option>
                                    ";
        // line 1526
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_crud"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categories_cru"]) {
            // line 1527
            echo "                                    <option value=\"Category A\">sdasd</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories_cru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1529
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label for=\"vehicle_type\">";
        // line 1534
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <input type='hidden' id='slectedTracks' name='truck_used' />
                            <div class=\"form-group col-lg-12\" id=\"vehicle_type\">
                                <div id=\"vehicleTypeCarousel\" class=\"vehicleTypeCarousel\">
                                    ";
        // line 1539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehcile_crud"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehcile_cru"]) {
            // line 1540
            echo "                                    <div onclick=\"getvahicalid(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "id", [], "any", false, false, false, 1540), "html", null, true);
            echo ")\" class=\"card border-0 card-body mx-3 px-0 selectedVahicals vahicalContainer";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "id", [], "any", false, false, false, 1540), "html", null, true);
            echo "\" >
                                        <input type=\"radio\" name=\"\" class=\"make_radio_slide\">
                                        <div class=\"content-inner mx-3 text-center d-block\">
                                            <img alt=\"\" class=\"img-fluid mx-auto\" src=\"./admin/media/images/vehicle 2.jpg\">
                                            <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                                <h4 class=\"font-weight-bold\">Name : ";
            // line 1545
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "name", [], "any", false, false, false, 1545), "html", null, true);
            echo "</h4>
                                                <p class=\"mb-0\">";
            // line 1546
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "description", [], "any", false, false, false, 1546), "html", null, true);
            echo "</p>
                                                <p class=\"mb-0\">Capacity : ";
            // line 1547
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "capacity", [], "any", false, false, false, 1547), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehcile_cru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1552
        echo "                                </div>

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
        // line 1568
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1568) == 5)) {
            // line 1569
            echo "                            <button type=\"button\" class=\"btn btn-info save_draft\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save as draft"]);
            echo "</button> <span class=\"kt-margin-left-10\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
            echo "
                        ";
        }
        // line 1571
        echo "                        <button type=\"submit\" class=\"btn btn-success save\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 1572
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1572), "child_of", [], "any", false, false, false, 1572));
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
        // line 1579
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

";
        // line 1581
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1582
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
        // line 1581
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1649
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1650
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 1651
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 1651), "map", [], "any", false, false, false, 1651), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    function getvahicalid(params) {
        \$(\"#slectedTracks\").val(params)
        \$(\".selectedVahicals\").addClass(\"border-0\")
        \$(`.vahicalContainer\${params}`).removeClass(\"border-0\")
        \$(`.vahicalContainer\${params}`).css({ \"border\":\" 2px solid #fed06f \"})
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
            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');
        }else{
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
        // line 1753
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1753), "enable_type", [], "any", false, false, false, 1753) != 1)) {
            // line 1754
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1754), "type", [], "any", false, false, false, 1754), "html", null, true);
            echo ";
        ";
        } else {
            // line 1756
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1758
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
        // line 1781
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1781), "enable_type", [], "any", false, false, false, 1781) != 1)) {
            // line 1782
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1782), "type", [], "any", false, false, false, 1782), "html", null, true);
            echo ";
        ";
        } else {
            // line 1784
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1786
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
        // line 1803
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1803), "enable_type", [], "any", false, false, false, 1803) != 1)) {
            // line 1804
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1804), "type", [], "any", false, false, false, 1804), "html", null, true);
            echo ";
        ";
        } else {
            // line 1806
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1808
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
        // line 1836
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1837
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
        // line 1852
        echo "                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     ";
        // line 1859
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1859), "enable_type", [], "any", false, false, false, 1859) != 1)) {
            // line 1860
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1860), "type", [], "any", false, false, false, 1860), "html", null, true);
            echo ";
                    ";
        } else {
            // line 1862
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 1864
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
        // line 1886
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once"]);
        echo "</div></div>\",
            type: \"warning\",

            confirmButtonText: \"";
        // line 1889
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Just save it as a draft"]);
        echo "!\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

            showCancelButton: true,
            cancelButtonText: \"";
        // line 1893
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
        // line 1923
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 ";
        // line 1926
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1927
            echo "                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val()},
                 ";
        } else {
            // line 1929
            echo "                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 ";
        }
        // line 1931
        echo "                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1933
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1937
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
        // line 1947
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1948
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
        // line 1963
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
        // line 1995
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1995), "enable_type", [], "any", false, false, false, 1995) != 1)) {
            // line 1996
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1996), "type", [], "any", false, false, false, 1996), "html", null, true);
            echo ";
        ";
        } else {
            // line 1998
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2000
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
        // line 2035
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 ";
        // line 2038
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2039
            echo "                 data: {client_id: \$('#sender_id').val(),street_addr: parent.find('.street_addr').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        } else {
            // line 2041
            echo "                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        }
        // line 2043
        echo "                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2045
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2049
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
        // line 2061
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2061), "enable_type", [], "any", false, false, false, 2061) != 1)) {
            // line 2062
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2062), "type", [], "any", false, false, false, 2062), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2064
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2066
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
        // line 2125
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2125), "enable_type", [], "any", false, false, false, 2125) != 1)) {
            // line 2126
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2126), "type", [], "any", false, false, false, 2126), "html", null, true);
            echo ";
                    ";
        } else {
            // line 2128
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 2130
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
        // line 2167
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2173
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2177
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
        // line 2190
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2190), "enable_type", [], "any", false, false, false, 2190) != 1)) {
            // line 2191
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2191), "type", [], "any", false, false, false, 2191), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2193
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2195
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
        // line 2257
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2263
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2267
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
        // line 2280
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2280), "enable_type", [], "any", false, false, false, 2280) != 1)) {
            // line 2281
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2281), "type", [], "any", false, false, false, 2281), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2283
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2285
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
        // line 2324
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2325
            echo "            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
            // line 2328
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        } else {
            // line 2333
            echo "            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '";
            // line 2336
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        }
        // line 2341
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
        // line 2350
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
        // line 2363
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
        // line 2372
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2372), "enable_type", [], "any", false, false, false, 2372) != 1)) {
            // line 2373
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2373), "type", [], "any", false, false, false, 2373), "html", null, true);
            echo ";
        ";
        } else {
            // line 2375
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2377
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
        // line 2396
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2396), "enable_type", [], "any", false, false, false, 2396) != 1)) {
            // line 2397
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2397), "type", [], "any", false, false, false, 2397), "html", null, true);
            echo ";
        ";
        } else {
            // line 2399
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2401
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
        // line 2420
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 2421
            echo "            dir: \"rtl\",
        ";
        }
        // line 2423
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 2425
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 2428
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 2431
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 2434
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 2437
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 2440
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 2443
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 2446
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
        // line 2478
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
                for (var i=0;i<all.length;i++)
                {
                    total_weight =total_weight + parseInt(all[i]);
                }
                \$('.total_weight').val(total_weight);

                var sender_address_id = \$('#sender_address_id').val();
                 var receiver_address_id = \$('#receiver_address_id').val();
                 var packaging_id = \$('#packaging_id').val();
                 ";
        // line 2504
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2504), "enable_type", [], "any", false, false, false, 2504) != 1)) {
            // line 2505
            echo "                    var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2505), "type", [], "any", false, false, false, 2505), "html", null, true);
            echo ";
                ";
        } else {
            // line 2507
            echo "                    var type = \$('.type:checked').val();
                ";
        }
        // line 2509
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

    // \$('body').on('change', '.sub_weight', function(){
    //     alert(\$('.sub_weight').val());
    //     var sub_weight = Number ( \$(this).val() );
    //     var total_weight =  Number ( \$('.total_weight').val() );
    //     total_weight += sub_weight ;
    //     \$('.total_weight').val(total_weight);
    //     alert(\$('.total_weight').val());

    // });

    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');


             var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             ";
        // line 2610
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2610), "enable_type", [], "any", false, false, false, 2610) != 1)) {
            // line 2611
            echo "                var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2611), "type", [], "any", false, false, false, 2611), "html", null, true);
            echo ";
            ";
        } else {
            // line 2613
            echo "                var type = \$('.type:checked').val();
            ";
        }
        // line 2615
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
        // line 2631
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2631), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2631), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 2631), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 2631)));
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
        // line 2635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2635), "numbers_order", [], "any", false, false, false, 2635)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + ";
        echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
        echo ").slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2635), "numbers_order", [], "any", false, false, false, 2635), "html", null, true);
        echo "));

    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('";
        // line 2638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2638), "numbers_order", [], "any", false, false, false, 2638)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + \$(this).val()).slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2638), "numbers_order", [], "any", false, false, false, 2638), "html", null, true);
        echo "));
    });
});
</script>
";
        // line 1649
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4790 => 1649,  4774 => 2638,  4757 => 2635,  4738 => 2631,  4720 => 2615,  4716 => 2613,  4710 => 2611,  4708 => 2610,  4605 => 2509,  4601 => 2507,  4595 => 2505,  4593 => 2504,  4564 => 2478,  4529 => 2446,  4523 => 2443,  4517 => 2440,  4511 => 2437,  4505 => 2434,  4499 => 2431,  4493 => 2428,  4487 => 2425,  4483 => 2423,  4479 => 2421,  4477 => 2420,  4456 => 2401,  4452 => 2399,  4446 => 2397,  4444 => 2396,  4423 => 2377,  4419 => 2375,  4413 => 2373,  4411 => 2372,  4399 => 2363,  4383 => 2350,  4372 => 2341,  4364 => 2336,  4359 => 2333,  4351 => 2328,  4346 => 2325,  4344 => 2324,  4303 => 2285,  4299 => 2283,  4293 => 2281,  4291 => 2280,  4275 => 2267,  4268 => 2263,  4259 => 2257,  4195 => 2195,  4191 => 2193,  4185 => 2191,  4183 => 2190,  4167 => 2177,  4160 => 2173,  4151 => 2167,  4112 => 2130,  4108 => 2128,  4102 => 2126,  4100 => 2125,  4039 => 2066,  4035 => 2064,  4029 => 2062,  4027 => 2061,  4012 => 2049,  4005 => 2045,  4001 => 2043,  3997 => 2041,  3993 => 2039,  3991 => 2038,  3985 => 2035,  3948 => 2000,  3944 => 1998,  3938 => 1996,  3936 => 1995,  3902 => 1963,  3885 => 1948,  3883 => 1947,  3870 => 1937,  3863 => 1933,  3859 => 1931,  3855 => 1929,  3851 => 1927,  3849 => 1926,  3843 => 1923,  3810 => 1893,  3803 => 1889,  3797 => 1886,  3773 => 1864,  3769 => 1862,  3763 => 1860,  3761 => 1859,  3752 => 1852,  3735 => 1837,  3733 => 1836,  3703 => 1808,  3699 => 1806,  3693 => 1804,  3691 => 1803,  3672 => 1786,  3668 => 1784,  3662 => 1782,  3660 => 1781,  3635 => 1758,  3631 => 1756,  3625 => 1754,  3623 => 1753,  3518 => 1651,  3513 => 1650,  3511 => 1649,  3509 => 1581,  3441 => 1582,  3439 => 1581,  3434 => 1579,  3420 => 1572,  3415 => 1571,  3407 => 1569,  3405 => 1568,  3387 => 1552,  3376 => 1547,  3372 => 1546,  3368 => 1545,  3357 => 1540,  3353 => 1539,  3345 => 1534,  3338 => 1529,  3331 => 1527,  3327 => 1526,  3319 => 1521,  3307 => 1512,  3296 => 1503,  3287 => 1496,  3282 => 1493,  3279 => 1492,  3273 => 1488,  3258 => 1486,  3254 => 1485,  3246 => 1480,  3243 => 1479,  3240 => 1478,  3238 => 1477,  3229 => 1471,  3224 => 1469,  3218 => 1465,  3211 => 1461,  3207 => 1459,  3205 => 1458,  3200 => 1457,  3193 => 1453,  3189 => 1451,  3187 => 1450,  3182 => 1448,  3177 => 1445,  3172 => 1442,  3155 => 1440,  3151 => 1439,  3145 => 1436,  3142 => 1435,  3139 => 1434,  3134 => 1431,  3119 => 1429,  3115 => 1428,  3109 => 1425,  3106 => 1424,  3104 => 1423,  3100 => 1421,  3095 => 1418,  3080 => 1416,  3076 => 1415,  3070 => 1412,  3067 => 1411,  3064 => 1410,  3058 => 1407,  3054 => 1406,  3051 => 1405,  3048 => 1404,  3043 => 1401,  3028 => 1399,  3024 => 1398,  3018 => 1395,  3015 => 1394,  3013 => 1393,  3009 => 1391,  3002 => 1387,  2996 => 1384,  2993 => 1383,  2990 => 1382,  2987 => 1381,  2980 => 1377,  2974 => 1374,  2967 => 1370,  2961 => 1367,  2958 => 1366,  2951 => 1362,  2943 => 1359,  2940 => 1358,  2937 => 1357,  2935 => 1356,  2928 => 1352,  2923 => 1350,  2916 => 1345,  2913 => 1344,  2902 => 1336,  2897 => 1334,  2891 => 1330,  2884 => 1326,  2880 => 1324,  2878 => 1323,  2873 => 1322,  2866 => 1318,  2862 => 1316,  2860 => 1315,  2855 => 1313,  2848 => 1308,  2846 => 1307,  2836 => 1300,  2824 => 1291,  2817 => 1286,  2805 => 1277,  2796 => 1271,  2787 => 1265,  2770 => 1259,  2765 => 1256,  2763 => 1255,  2760 => 1254,  2751 => 1248,  2747 => 1247,  2740 => 1243,  2735 => 1240,  2732 => 1239,  2724 => 1234,  2718 => 1231,  2713 => 1228,  2711 => 1227,  2708 => 1226,  2700 => 1221,  2694 => 1218,  2689 => 1215,  2687 => 1214,  2681 => 1210,  2670 => 1208,  2666 => 1207,  2658 => 1202,  2648 => 1199,  2638 => 1192,  2624 => 1181,  2610 => 1170,  2586 => 1149,  2579 => 1145,  2572 => 1141,  2569 => 1140,  2563 => 1136,  2556 => 1132,  2552 => 1130,  2550 => 1129,  2545 => 1128,  2538 => 1124,  2534 => 1122,  2532 => 1121,  2526 => 1118,  2523 => 1117,  2521 => 1116,  2516 => 1113,  2509 => 1109,  2505 => 1107,  2503 => 1106,  2500 => 1105,  2493 => 1101,  2489 => 1099,  2487 => 1098,  2480 => 1094,  2476 => 1093,  2473 => 1092,  2459 => 1085,  2448 => 1081,  2440 => 1076,  2436 => 1075,  2431 => 1072,  2429 => 1071,  2420 => 1065,  2416 => 1064,  2405 => 1056,  2400 => 1054,  2393 => 1049,  2376 => 1047,  2372 => 1046,  2367 => 1044,  2363 => 1043,  2358 => 1040,  2347 => 1038,  2343 => 1037,  2338 => 1035,  2334 => 1034,  2329 => 1031,  2312 => 1029,  2308 => 1028,  2303 => 1026,  2299 => 1025,  2290 => 1019,  2285 => 1016,  2268 => 1014,  2264 => 1013,  2258 => 1010,  2248 => 1003,  2235 => 995,  2218 => 981,  2214 => 980,  2207 => 975,  2204 => 974,  2191 => 964,  2177 => 953,  2163 => 942,  2144 => 932,  2137 => 927,  2134 => 926,  2131 => 925,  2124 => 921,  2119 => 919,  2115 => 917,  2113 => 916,  2110 => 915,  2105 => 912,  2090 => 910,  2086 => 909,  2081 => 907,  2077 => 906,  2068 => 905,  2066 => 904,  2062 => 902,  2051 => 900,  2047 => 899,  2042 => 897,  2038 => 896,  2029 => 895,  2024 => 892,  2003 => 890,  1999 => 889,  1994 => 887,  1990 => 886,  1981 => 885,  1978 => 884,  1972 => 881,  1968 => 880,  1959 => 879,  1957 => 878,  1953 => 876,  1936 => 874,  1932 => 873,  1926 => 870,  1917 => 869,  1908 => 863,  1904 => 862,  1895 => 861,  1893 => 860,  1888 => 857,  1875 => 851,  1864 => 847,  1858 => 844,  1855 => 843,  1853 => 842,  1847 => 839,  1839 => 838,  1833 => 835,  1825 => 834,  1814 => 828,  1799 => 816,  1793 => 815,  1787 => 812,  1782 => 810,  1774 => 807,  1763 => 799,  1743 => 782,  1736 => 778,  1729 => 774,  1726 => 773,  1720 => 769,  1710 => 767,  1707 => 766,  1697 => 764,  1694 => 763,  1684 => 761,  1681 => 760,  1671 => 758,  1669 => 757,  1662 => 753,  1659 => 752,  1656 => 751,  1644 => 746,  1636 => 745,  1629 => 741,  1626 => 740,  1624 => 739,  1614 => 732,  1610 => 731,  1599 => 723,  1594 => 721,  1587 => 716,  1576 => 714,  1572 => 713,  1567 => 711,  1563 => 710,  1558 => 707,  1547 => 705,  1543 => 704,  1538 => 702,  1534 => 701,  1529 => 698,  1512 => 696,  1508 => 695,  1503 => 693,  1499 => 692,  1490 => 686,  1485 => 683,  1468 => 681,  1464 => 680,  1458 => 677,  1448 => 670,  1435 => 662,  1417 => 647,  1413 => 646,  1406 => 641,  1403 => 640,  1390 => 630,  1376 => 619,  1362 => 608,  1343 => 598,  1336 => 593,  1333 => 592,  1331 => 591,  1328 => 590,  1321 => 586,  1316 => 584,  1312 => 582,  1310 => 581,  1307 => 580,  1301 => 577,  1297 => 576,  1294 => 575,  1291 => 574,  1286 => 571,  1271 => 569,  1267 => 568,  1262 => 566,  1258 => 565,  1255 => 564,  1253 => 563,  1248 => 560,  1237 => 558,  1233 => 557,  1228 => 555,  1224 => 554,  1221 => 553,  1216 => 550,  1195 => 548,  1191 => 547,  1186 => 545,  1182 => 544,  1179 => 543,  1177 => 542,  1174 => 541,  1168 => 538,  1164 => 537,  1155 => 536,  1153 => 535,  1149 => 533,  1132 => 531,  1128 => 530,  1122 => 527,  1113 => 526,  1104 => 520,  1100 => 519,  1091 => 518,  1089 => 517,  1084 => 514,  1071 => 508,  1060 => 504,  1054 => 501,  1051 => 500,  1049 => 499,  1043 => 496,  1035 => 495,  1029 => 492,  1021 => 491,  1010 => 485,  996 => 473,  990 => 471,  975 => 469,  970 => 468,  968 => 467,  962 => 466,  958 => 465,  952 => 464,  949 => 463,  946 => 462,  939 => 458,  936 => 457,  933 => 456,  931 => 455,  928 => 454,  923 => 452,  918 => 450,  914 => 448,  909 => 446,  904 => 445,  902 => 444,  896 => 443,  888 => 441,  878 => 434,  871 => 432,  867 => 431,  861 => 430,  855 => 427,  850 => 425,  842 => 422,  835 => 420,  831 => 418,  817 => 411,  810 => 407,  807 => 406,  804 => 405,  790 => 398,  783 => 394,  780 => 393,  778 => 392,  775 => 391,  773 => 390,  761 => 381,  747 => 370,  731 => 356,  719 => 347,  714 => 345,  705 => 344,  702 => 343,  697 => 340,  682 => 338,  678 => 337,  672 => 334,  663 => 333,  660 => 332,  655 => 329,  640 => 327,  636 => 326,  630 => 323,  621 => 322,  619 => 321,  616 => 320,  601 => 308,  593 => 303,  581 => 296,  569 => 287,  561 => 282,  549 => 275,  537 => 266,  533 => 264,  531 => 263,  519 => 254,  504 => 242,  493 => 233,  489 => 231,  485 => 230,  482 => 229,  480 => 228,  473 => 223,  467 => 219,  456 => 217,  452 => 216,  444 => 211,  441 => 210,  439 => 209,  428 => 201,  419 => 195,  412 => 190,  401 => 188,  397 => 187,  391 => 184,  386 => 181,  375 => 179,  371 => 178,  365 => 175,  356 => 169,  349 => 165,  345 => 164,  331 => 153,  326 => 151,  321 => 148,  314 => 144,  310 => 142,  308 => 141,  303 => 140,  296 => 136,  292 => 134,  290 => 133,  285 => 131,  280 => 128,  265 => 126,  261 => 125,  255 => 122,  244 => 114,  238 => 111,  229 => 105,  224 => 102,  213 => 100,  209 => 99,  200 => 93,  191 => 87,  186 => 85,  171 => 73,  159 => 64,  151 => 58,  138 => 48,  131 => 43,  120 => 41,  116 => 40,  110 => 37,  105 => 34,  94 => 32,  90 => 31,  84 => 28,  75 => 22,  68 => 18,  64 => 17,  54 => 10,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
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
                        <input name=\"sender_id\" id=\"sender_id\" value=\"{{user.id}}\" type=\"hidden\" />
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
                                    {{'Shipment Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
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
                                                                    {{'Pickup'|__}}
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                {{'For door to door delivery'|__}}
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
                                                                    {{'Drop off'|__}}
                                                                </span>
                                                                <span class=\"kt-option__focus\"></span>
                                                            </span>
                                                            <span class=\"kt-option__body\">
                                                                {{'For delivery package from branch directly'|__}}
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
                                {% endif %}
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
                        <div class=\"form-group row\">
                            <label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            {% if user.role_id == 5 %}
                                <input name=\"sender_id\" id=\"sender_id\"  value=\"{{user.id}}\" type=\"hidden\" />
                                <input value=\"{{user.name}}\" type=\"text\" class=\"form-control\" disabled />
                            {% else %}
                                <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                </select>
                                <span class=\"text-muted\">{{'Choose or add a new client that will send the package'|__}}</span>
                            {% endif %}
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
                            <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"{{'Please select sender first'|__}}\" required>
                                <option data-hidden=\"true\"></option><label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                {% if user.role_id == 5 %}
                                    {% for address in user.addresses %}
                                        <option value=\"{{address.id}}\" {% if address.default == 1 %}selected{% endif %}>{{address.name}}</option>
                                    {% endfor %}
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                {% endif %}
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
                                <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                </select>
                                <span class=\"text-muted\">{{'Choose or add a new client that will receive the package'|__}}</span>
                            </div>
                            <div class=\"form-group row\">
                                <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Please select receiver first'|__}}\" required>
                                    <option data-hidden=\"true\"></option>
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
    <div class=\"col-lg-12\">
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
                            <div class=\"form-group col-lg-4\">
                                <label for=\"vehicle_category\">{{'Choose your vehicle category'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <div class=\"form-group col-lg-8\">
                                <select class=\"form-control vehicle_category\"  name=\"vehicle_category\" id=\"vehicle_category\" >
                                    <option data-hidden=\"true\"></option>
                                    {% for categories_cru in categories_crud %}
                                    <option value=\"Category A\">sdasd</option>
                                    {% endfor%}
                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label for=\"vehicle_type\">{{'Choose your vehicle type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <input type='hidden' id='slectedTracks' name='truck_used' />
                            <div class=\"form-group col-lg-12\" id=\"vehicle_type\">
                                <div id=\"vehicleTypeCarousel\" class=\"vehicleTypeCarousel\">
                                    {% for vehcile_cru in vehcile_crud %}
                                    <div onclick=\"getvahicalid({{vehcile_cru.id}})\" class=\"card border-0 card-body mx-3 px-0 selectedVahicals vahicalContainer{{vehcile_cru.id}}\" >
                                        <input type=\"radio\" name=\"\" class=\"make_radio_slide\">
                                        <div class=\"content-inner mx-3 text-center d-block\">
                                            <img alt=\"\" class=\"img-fluid mx-auto\" src=\"./admin/media/images/vehicle 2.jpg\">
                                            <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                                <h4 class=\"font-weight-bold\">Name : {{vehcile_cru.name}}</h4>
                                                <p class=\"mb-0\">{{vehcile_cru.description}}</p>
                                                <p class=\"mb-0\">Capacity : {{vehcile_cru.capacity}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor%}
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
    function getvahicalid(params) {
        \$(\"#slectedTracks\").val(params)
        \$(\".selectedVahicals\").addClass(\"border-0\")
        \$(`.vahicalContainer\${params}`).removeClass(\"border-0\")
        \$(`.vahicalContainer\${params}`).css({ \"border\":\" 2px solid #fed06f \"})
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
            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');
        }else{
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
                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val()},
                 {% else %}
                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
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
                for (var i=0;i<all.length;i++)
                {
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

    // \$('body').on('change', '.sub_weight', function(){
    //     alert(\$('.sub_weight').val());
    //     var sub_weight = Number ( \$(this).val() );
    //     var total_weight =  Number ( \$('.total_weight').val() );
    //     total_weight += sub_weight ;
    //     \$('.total_weight').val(total_weight);
    //     alert(\$('.total_weight').val());

    // });

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
{% endput %}", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm", "");
    }
}
