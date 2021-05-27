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
                        <div class=\"form-group row col-md-12\">
                            <label>";
            // line 556
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                             <span class=\"dev1 col-12\">
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
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
            echo "\" required>
                                <option data-hidden=\"true\"></option><label>";
            // line 580
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                ";
            // line 581
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 581) == 5)) {
                // line 582
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 582));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 583
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 583), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 583) == 1)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 583), "html", null, true);
                    echo "</option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 585
                echo "                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                                ";
            }
            // line 587
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
            // line 599
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
            // line 605
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 605), "enable_gender", [], "any", false, false, false, 605) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                            <label>";
            // line 606
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                        </div>
                                        <div class=\"form-group ";
            // line 609
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 609), "enable_gender", [], "any", false, false, false, 609) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                            <label>";
            // line 610
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                        </div>
                                        ";
            // line 613
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 613), "enable_gender", [], "any", false, false, false, 613) == 1)) {
                // line 614
                echo "                                        <div class=\"form-group col-lg-3\">
                                            <label>";
                // line 615
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                            <div class=\"kt-radio-inline\">
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\" ";
                // line 618
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 618), "gender", [], "any", false, false, false, 618) == "male")) {
                    echo "checked";
                }
                echo " > ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                    \t\t\t\t\t\t\t\t<span></span>
                    \t\t\t\t\t\t\t</label>
                    \t\t\t\t\t\t\t<label class=\"kt-radio\">
                    \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\" ";
                // line 622
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 622), "gender", [], "any", false, false, false, 622) == "female")) {
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
            // line 628
            echo "                                    </div>
                                    <div class=\"location-sender\">
                                        <div class=\"row\">
                                            ";
            // line 631
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 631), "enable_mapAddress", [], "any", false, false, false, 631) == 1)) {
                // line 632
                echo "                                            <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 632), "enable_postalCode", [], "any", false, false, false, 632) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                <label>";
                // line 633
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address \" name=\"sender[street_address_map]\"  rel=\"sender\" value=\"";
                // line 634
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 634), "street_address_map", [], "any", false, false, false, 634), "html", null, true);
                echo "\" />
                                                <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                            </div>
                                            ";
            }
            // line 640
            echo "                                            <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 640), "enable_mapAddress", [], "any", false, false, false, 640) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 640), "enable_postalCode", [], "any", false, false, false, 640) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                <label>";
            // line 641
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 644
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 645
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 645), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 645), "name", [], "any", false, false, false, 645), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 645), "name", [], "any", false, false, false, 645), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 647
            echo "                                                </select>
                                            </div>
                                            ";
            // line 649
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 649), "enable_postalCode", [], "any", false, false, false, 649) == 1)) {
                // line 650
                echo "                                            <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 650), "enable_mapAddress", [], "any", false, false, false, 650) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                <label>";
                // line 651
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" value=\"";
                // line 652
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 652), "postal_code", [], "any", false, false, false, 652), "html", null, true);
                echo "\">
                                            </div>
                                            ";
            }
            // line 655
            echo "
                                            ";
            // line 656
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 656), "enable_state", [], "any", false, false, false, 656) == 1)) {
                // line 657
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 658
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"";
                // line 659
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"sender[state]\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
                // line 661
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 662
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 662), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 662), "name", [], "any", false, false, false, 662), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 662), "state", [], "any", false, false, false, 662) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 662))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 662), "name", [], "any", false, false, false, 662), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 664
                echo "                                                </select>
                                            </div>
                                            ";
            }
            // line 667
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 668
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"";
            // line 669
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 671
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 672
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 672), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 672), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 674
            echo "                                                </select>
                                            </div>

                                            ";
            // line 677
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 677), "enable_county", [], "any", false, false, false, 677) == 1)) {
                // line 678
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 679
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "</label>
                                                <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"";
                // line 680
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
                // line 682
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 683
                    echo "                                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 683), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 683), "county", [], "any", false, false, false, 683) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 683))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 683), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 685
                echo "                                                </select>
                                            </div>
                                            ";
            }
            // line 688
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 688), "enable_streetAddress", [], "any", false, false, false, 688) == 1)) {
                // line 689
                echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                // line 690
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
                echo "</label>
                                                <input type=\"text\" class=\"form-control street_addr\" name=\"sender[street_address]\" value=\"";
                // line 691
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 691), "street_address", [], "any", false, false, false, 691), "html", null, true);
                echo "\"  required/>
                                            </div>
                                            ";
            }
            // line 694
            echo "                                        </div>
                                        ";
            // line 695
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 695), "enable_mapAddress", [], "any", false, false, false, 695) == 1)) {
                // line 696
                echo "                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
                // line 698
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                                <span class=\"form-text text-muted\">";
                // line 700
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                            </div>
                                        </div>
                                        ";
            }
            // line 704
            echo "
                                        ";
            // line 705
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 705), "enable_createAccount", [], "any", false, false, false, 705) == 1)) {
                // line 706
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 706)) {
                    // line 707
                    echo "                                                <div class=\"form-group row\">
                                                    <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                    <div class=\"col-lg-9 col-xl-6\">
                                                        <div class=\"kt-checkbox-single\">
                                                            <label class=\"kt-checkbox\">
                                                                <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\" ";
                    // line 712
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 712), "connect", [], "any", false, false, false, 712) == 1)) {
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
                    // line 722
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
                    // line 733
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
                    // line 744
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
                // line 754
                echo "                                        ";
            }
            // line 755
            echo "                                    </div>
                \t\t\t\t</div>
                                <div class=\"kt-portlet__foot\">
                    \t\t\t\t<div class=\"row align-items-center\">
                    \t\t\t\t\t<div class=\"col-lg-12\">
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 760
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                    \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 761
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
            // line 776
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
            // line 784
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 791
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 794
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 795
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 795), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 795), "name", [], "any", false, false, false, 795), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 795), "name", [], "any", false, false, false, 795), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 797
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 800
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 806
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"";
            // line 807
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"senderaddress[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 809
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 810
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 810), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 810), "name", [], "any", false, false, false, 810), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 810), "name", [], "any", false, false, false, 810), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 812
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 815
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"";
            // line 816
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 818
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 819
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 819), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 819), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 821
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 824
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                            <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"";
            // line 825
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" >
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 827
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 828
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 828), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 828), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 830
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 835
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 837
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
            // line 845
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 846
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    ";
            // line 853
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 853), "enable_payment_type", [], "any", false, false, false, 853) == 1)) {
                // line 854
                echo "                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 855
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"1\" ";
                // line 859
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 859), "payment_type", [], "any", false, false, false, 859) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
                echo " </option>
                                <option value=\"2\" ";
                // line 860
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 860), "payment_type", [], "any", false, false, false, 860) == 2)) {
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
            // line 865
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 865), "enable_payment_method", [], "any", false, false, false, 865) == 1)) {
                // line 866
                echo "                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 867
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Method"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <select class=\"form-control\" name=\"payment_method\" id=\"payment_method\" required>
                                <option data-hidden=\"true\"></option>
                                ";
                // line 871
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["enable_cash"] ?? null) : null) == 1)) {
                    // line 872
                    echo "                                <option value=\"cash\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 872), "payment_method", [], "any", false, false, false, 872) == "cash")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cash"]);
                    echo " </option>
                                ";
                }
                // line 874
                echo "                                ";
                if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["enable_transfer"] ?? null) : null) == 1)) {
                    // line 875
                    echo "                                <option value=\"transfer\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 875), "payment_method", [], "any", false, false, false, 875) == "transfer")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wire Transfer"]);
                    echo " </option>
                                ";
                }
                // line 877
                echo "                                ";
                if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["payment"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["enable_paystack"] ?? null) : null) == 1)) {
                    // line 878
                    echo "                                <option value=\"paystack\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 878), "payment_method", [], "any", false, false, false, 878) == "paystack")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack"]);
                    echo " </option>
                                ";
                }
                // line 880
                echo "                                ";
                if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["payment"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["enable_paypal"] ?? null) : null) == 1)) {
                    // line 881
                    echo "                                <option value=\"paypal\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 881), "payment_method", [], "any", false, false, false, 881) == "paypal")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paypal"]);
                    echo " </option>
                                ";
                }
                // line 883
                echo "                            </select>
                        </div>
                    </div>
                    ";
            }
            // line 887
            echo "                    <div class=\"form-group row type_1\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 888
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Record receiver information ?"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" checked required> ";
            // line 892
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" required> ";
            // line 896
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
            // line 913
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
            // line 921
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            // line 924
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                </select>
                                <span class=\"text-muted\">";
            // line 926
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will receive the package"]);
            echo "</span>
                            </div>
                            <div class=\"form-group row\">
                                <label>";
            // line 929
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
            // line 930
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
            // line 942
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
            // line 948
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 948), "enable_gender", [], "any", false, false, false, 948) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                                <label>";
            // line 949
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                            </div>
                                            <div class=\"form-group ";
            // line 952
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 952), "enable_gender", [], "any", false, false, false, 952) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                                <label>";
            // line 953
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                            </div>
                                            ";
            // line 956
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 956), "enable_gender", [], "any", false, false, false, 956) == 1)) {
                // line 957
                echo "                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                // line 958
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                                <div class=\"kt-radio-inline\">
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" ";
                // line 961
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 961), "gender", [], "any", false, false, false, 961) == "male")) {
                    echo "checked";
                }
                echo "> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                        \t\t\t\t\t\t\t\t<span></span>
                        \t\t\t\t\t\t\t</label>
                        \t\t\t\t\t\t\t<label class=\"kt-radio\">
                        \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" ";
                // line 965
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 965), "gender", [], "any", false, false, false, 965) == "female")) {
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
            // line 971
            echo "                                        </div>
                                        <div class=\"location-receiver\">
                                            <div class=\"row\">
                                                ";
            // line 974
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 974), "enable_mapAddress", [], "any", false, false, false, 974) == 1)) {
                // line 975
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 975), "enable_postalCode", [], "any", false, false, false, 975) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 976
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\"  name=\"receiver[street_address]\"  rel=\"receiver\" value=\"";
                // line 977
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 977), "street_address_map", [], "any", false, false, false, 977), "html", null, true);
                echo "\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                                </div>
                                                ";
            }
            // line 983
            echo "                                                <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 983), "enable_mapAddress", [], "any", false, false, false, 983) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 983), "enable_postalCode", [], "any", false, false, false, 983) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                    <label>";
            // line 984
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 987
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 988
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 988), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 988), "name", [], "any", false, false, false, 988), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 988), "name", [], "any", false, false, false, 988), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 990
            echo "                                                    </select>
                                                </div>
                                                ";
            // line 992
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 992), "enable_postalCode", [], "any", false, false, false, 992) == 1)) {
                // line 993
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 993), "enable_mapAddress", [], "any", false, false, false, 993) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 994
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"";
                // line 995
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 995), "postal_code", [], "any", false, false, false, 995), "html", null, true);
                echo "\">
                                                </div>
                                                ";
            }
            // line 998
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 998), "enable_state", [], "any", false, false, false, 998) == 1)) {
                // line 999
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 999), "enable_county", [], "any", false, false, false, 999) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 1000
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
                // line 1001
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"receiver[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
                // line 1003
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 1004
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1004), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1004), "name", [], "any", false, false, false, 1004), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1004), "state", [], "any", false, false, false, 1004) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1004))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1004), "name", [], "any", false, false, false, 1004), "html", null, true);
                    echo "</option>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1006
                echo "                                                    </select>
                                                </div>
                                                ";
            }
            // line 1009
            echo "                                                <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1009), "enable_county", [], "any", false, false, false, 1009) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1009), "enable_state", [], "any", false, false, false, 1009) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                                    <label>";
            // line 1010
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
            // line 1011
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1013
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 1014
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1014), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1014), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1016
            echo "                                                    </select>
                                                </div>
                                                ";
            // line 1018
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1018), "enable_county", [], "any", false, false, false, 1018) == 1)) {
                // line 1019
                echo "                                                <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1019), "enable_state", [], "any", false, false, false, 1019) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                                    <label>";
                // line 1020
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
                // line 1021
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
                // line 1023
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 1024
                    echo "                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1024), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1024), "county", [], "any", false, false, false, 1024) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1024))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 1024), "html", null, true);
                    echo "</option>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1026
                echo "                                                    </select>
                                                </div>
                                                ";
            }
            // line 1029
            echo "                                            </div>
                                            ";
            // line 1030
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1030), "enable_mapAddress", [], "any", false, false, false, 1030) == 1)) {
                // line 1031
                echo "                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>";
                // line 1033
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                    <span class=\"form-text text-muted\">";
                // line 1035
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                                </div>
                                            </div>
                                            ";
            }
            // line 1039
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1039), "enable_createAccount", [], "any", false, false, false, 1039) == 1)) {
                // line 1040
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 1040)) {
                    // line 1041
                    echo "                                                    <div class=\"form-group row\">
                                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                        <div class=\"col-lg-9 col-xl-6\">
                                                            <div class=\"kt-checkbox-single\">
                                                                <label class=\"kt-checkbox\">
                                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" ";
                    // line 1046
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1046), "connect", [], "any", false, false, false, 1046) == 1)) {
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
                    // line 1056
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
                    // line 1067
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
                    // line 1078
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
                // line 1088
                echo "                                            ";
            }
            // line 1089
            echo "                                        </div>
                    \t\t\t\t</div>
                                    <div class=\"kt-portlet__foot\">
                        \t\t\t\t<div class=\"row align-items-center\">
                        \t\t\t\t\t<div class=\"col-lg-12\">
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 1094
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 1095
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
            // line 1109
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
            // line 1117
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <input type=\"text\" class=\"form-control address street_addr\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                                    <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                    <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                    <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1124
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 1128
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 1128), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1128), "name", [], "any", false, false, false, 1128), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 1128), "name", [], "any", false, false, false, 1128), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1130
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-3\">
                                                    <label>";
            // line 1133
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                    <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1139
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
            // line 1140
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 1143
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1143), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1143), "name", [], "any", false, false, false, 1143), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1143), "name", [], "any", false, false, false, 1143), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1145
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1148
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
            // line 1149
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 1152
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1152), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1152), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1154
            echo "                                                    </select>
                                                </div>
                                                <div class=\"form-group col-lg-4\">
                                                    <label>";
            // line 1157
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                                    <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
            // line 1158
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 1161
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1161), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1161), "name", [], "any", false, false, false, 1161), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 1161), "name", [], "any", false, false, false, 1161), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1163
            echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"form-group col-lg-12\">
                                                    <label>";
            // line 1168
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                    <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                    <span class=\"form-text text-muted\">";
            // line 1170
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
            // line 1178
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                        \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 1179
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                        \t\t\t\t\t</div>
                        \t\t\t\t</div>
                        \t\t\t</div>
                    \t\t\t</div>
                \t\t\t</div>
                            ";
            // line 1185
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1185), "enable_return_package", [], "any", false, false, false, 1185) == 1)) {
                // line 1186
                echo "                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                ";
                // line 1189
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">";
                // line 1190
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes if you need to return money from the receiver to sender after delivery"]);
                echo "</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
                // line 1195
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1195), "return_package", [], "any", false, false, false, 1195) == 1)) {
                    echo "checked";
                }
                echo " required> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                echo "
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
                // line 1199
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1199), "return_package", [], "any", false, false, false, 1199) == 2)) {
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
            // line 1206
            echo "                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1207
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                                <br /><span class=\"text-muted\">";
            // line 1208
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount that will be returned to the sender from the receiver"]);
            echo "</span>
                                </label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"input-group\">
                                        ";
            // line 1212
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1212) == 1)) {
                // line 1213
                echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1215), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1219
            echo "                        \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"package_fee\" required />
                                        ";
            // line 1220
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1220) == 0)) {
                // line 1221
                echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                // line 1223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1223), "html", null, true);
                echo "
                                                </span>
                                            </div>
                                        ";
            }
            // line 1227
            echo "                                    </div>
                                </div>
                            </div>
                            ";
            // line 1230
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1230) != 5)) {
                // line 1231
                echo "                                <div class=\"form-group row kt-hidden package_fee\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 1232
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <div class=\"input-group\">
                                            ";
                // line 1235
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1235) == 1)) {
                    // line 1236
                    echo "                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\">
                                                        ";
                    // line 1238
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1238), "html", null, true);
                    echo "
                                                    </span>
                                                </div>
                                            ";
                }
                // line 1242
                echo "                            \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1242), "delivery_cost_back_receiver", [], "any", false, false, false, 1242), "html", null, true);
                echo "\" required />
                                            ";
                // line 1243
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1243) == 0)) {
                    // line 1244
                    echo "                                                <div class=\"input-group-append\">
                                                    <span class=\"input-group-text\">
                                                        ";
                    // line 1246
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1246), "html", null, true);
                    echo "
                                                    </span>
                                                </div>
                                            ";
                }
                // line 1250
                echo "                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 1254
            echo "                            <div class=\"form-group row kt-hidden package_fee\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1255
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <div class=\"kt-radio-inline\">
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" checked required> ";
            // line 1259
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "
                                            <span></span>
                                        </label>
                                        <label class=\"kt-radio\">
                                            <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required> ";
            // line 1263
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
            // line 1284
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
            // line 1295
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
            // line 1306
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Content"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
        \t\t\t\t\t</h3>
        \t\t\t\t\t<div class=\"kt-section__content\">
                                <div class=\"form-group form-group-last row\" id=\"package_repeater\">
                                    <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                        <div data-repeater-item class=\"align-items-center\">
                                            <div class=\"form-group row\">
                                                <div class=\"";
            // line 1313
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1313), "enable_description", [], "any", false, false, false, 1313) == 1)) {
                echo "col-md-4";
            } else {
                echo "col-md-6";
            }
            echo "\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label>";
            // line 1316
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                                <option data-hidden=\"true\"></option>
                                                                ";
            // line 1321
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 1322
                echo "                                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1322), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1322), "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1324
            echo "                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            // line 1328
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1328), "enable_description", [], "any", false, false, false, 1328) == 1)) {
                // line 1329
                echo "                                                <div class=\"col-md-8\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1332
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
                // line 1335
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1335), "description", [], "any", false, false, false, 1335), "html", null, true);
                echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1340
            echo "
                                                ";
            // line 1341
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1341), "enable_quantity", [], "any", false, false, false, 1341) == 1)) {
                // line 1342
                echo "                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1345
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\"  value=\"";
                // line 1348
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1348), "quantity", [], "any", false, false, false, 1348), "html", null, true);
                echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1353
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1353), "enable_weight", [], "any", false, false, false, 1353) == 1)) {
                // line 1354
                echo "                                                <div class=\"col-md-6\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1357
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo ":</label>
                                                        </div>
                                                        <div class=\"kt-form__control\">
                                                            <div class=\"input-group\">
                                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1361
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\" value=\"";
                // line 1362
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1362), "weight", [], "any", false, false, false, 1362), "html", null, true);
                echo "\" >
                                        \t\t\t\t\t</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            }
            // line 1368
            echo "
                                                ";
            // line 1369
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1369), "enable_dimensions", [], "any", false, false, false, 1369) == 1)) {
                // line 1370
                echo "                                                <div class=\"col-md-12\">
                                                    <div class=\"kt-form__group--inline\">
                                                        <div class=\"kt-form__label\">
                                                            <label class=\"kt-label m-label--single\">";
                // line 1373
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
                // line 1379
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1379), "length", [], "any", false, false, false, 1379), "html", null, true);
                echo "\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1385
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1385), "width", [], "any", false, false, false, 1385), "html", null, true);
                echo "\">
                                                                    </span>
                                                                </div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                    <span class=\"input-group-text\">
                                                                        <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1391
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1391), "height", [], "any", false, false, false, 1391), "html", null, true);
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
            // line 1400
            echo "                                            </div>
                                            <div class=\"form-group row\">
                                                <div class=\"col-md-3\">
                                                    <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                        <i class=\"la la-trash-o\"></i>
                                                        ";
            // line 1405
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
            // line 1414
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
            echo "
                                            </a>
                                        </label>
                                   </div>
                                 </div>
                            </div>
                        </div>
                        ";
            // line 1421
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1421) == 5)) {
                // line 1422
                echo "                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
                                <div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <div class=\"form-group readonly col-lg-6\">
                                            <label>";
                // line 1427
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                ";
                // line 1429
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1429) == 1)) {
                    // line 1430
                    echo "                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1432
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1432), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1436
                echo "                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1436), "delivery_cost", [], "any", false, false, false, 1436), "html", null, true);
                echo "\" required readonly>
                                                ";
                // line 1437
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1437) == 0)) {
                    // line 1438
                    echo "                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1440
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1440), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1444
                echo "                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1448
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1450
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
            // line 1458
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1458) != 5)) {
                // line 1459
                echo "                            <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                            <div class=\"kt-section\">
            \t\t\t\t\t<div class=\"kt-section__content\">
                                    <div class=\"row\">
                                        <!-- <div class=\"form-group col-lg-4\">
                                            <label>";
                // line 1464
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1466
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1466), "prefix_order", [], "any", false, false, false, 1466), "html", null, true);
                echo "</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\">
                        \t\t\t\t\t</div>
                                        </div> -->
                                        ";
                // line 1470
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1470), "enable_tax", [], "any", false, false, false, 1470) == 1)) {
                    // line 1471
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1471), "type", [], "any", false, false, false, 1471) == 1)) {
                        // line 1472
                        echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
                        // line 1473
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                        echo " & ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Duty"]);
                        echo "</label>
                                                <div class=\"input-group\">
                            \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                            \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"";
                        // line 1476
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1476), "percent", [], "any", false, false, false, 1476), "html", null, true);
                        echo "\">
                            \t\t\t\t\t</div>
                                            </div>
                                            ";
                    } else {
                        // line 1480
                        echo "                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                        // line 1481
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SGST"]);
                        echo "</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"sgst\" value=\"";
                        // line 1484
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1484), "SGST", [], "any", false, false, false, 1484), "html", null, true);
                        echo "\">
                                                </div>
                                            </div>
                                            <div class=\"form-group col-lg-3\">
                                                <label>";
                        // line 1488
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CGST"]);
                        echo "</label>
                                                <div class=\"input-group\">
                                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"cgst\" value=\"";
                        // line 1491
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1491), "CGST", [], "any", false, false, false, 1491), "html", null, true);
                        echo "\">
                                                </div>
                                            </div>
                                            ";
                    }
                    // line 1495
                    echo "                                        ";
                }
                // line 1496
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1496), "enable_insurance", [], "any", false, false, false, 1496) == 1)) {
                    // line 1497
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1498
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
                    echo "</label>
                                            <div class=\"input-group\">
                        \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                        \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"";
                    // line 1501
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1501), "insurance", [], "any", false, false, false, 1501), "html", null, true);
                    echo "\">
                        \t\t\t\t\t</div>
                                        </div>
                                        ";
                }
                // line 1505
                echo "                                    </div>
                                    <div class=\"row\">
                                        ";
                // line 1507
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1507), "enable_shippingMode", [], "any", false, false, false, 1507) == 1)) {
                    // line 1508
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1509
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
                    echo "</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1512
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                        // line 1513
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1513), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1513), "mode_id", [], "any", false, false, false, 1513) == twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1513))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 1513), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1515
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1518
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1518), "enable_customsValue", [], "any", false, false, false, 1518) == 1)) {
                    // line 1519
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1520
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
                    echo "</label>
                                            <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"";
                    // line 1521
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1521), "customsValue", [], "any", false, false, false, 1521), "html", null, true);
                    echo "\" aria-describedby=\"basic-addon1\">
                                        </div>
                                        ";
                }
                // line 1524
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1524), "enable_courierCompany", [], "any", false, false, false, 1524) == 1)) {
                    // line 1525
                    echo "                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                    // line 1526
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                    echo "</label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1529
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["courier"]) {
                        // line 1530
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1530), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1530), "courier_id", [], "any", false, false, false, 1530) == twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1530))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "name", [], "any", false, false, false, 1530), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courier'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1532
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1535
                echo "                                    </div>
                                    <div class=\"row\">
                                        ";
                // line 1537
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1537), "enable_deliveryTime", [], "any", false, false, false, 1537) == 1)) {
                    // line 1538
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1539
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1542
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["deliverytime"]) {
                        // line 1543
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1543), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1543), "default_deliverytime", [], "any", false, false, false, 1543) == twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1543))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "name", [], "any", false, false, false, 1543), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deliverytime'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1545
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1548
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1548), "enable_deliveryStatus", [], "any", false, false, false, 1548) == 1)) {
                    // line 1549
                    echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                    // line 1550
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                    // line 1553
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                        // line 1554
                        echo "                                                    <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1554), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "equal", [], "any", false, false, false, 1554), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1554), "default_status", [], "any", false, false, false, 1554) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1554))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 1554), "html", null, true);
                        echo "</option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1556
                    echo "                                            </select>
                                        </div>
                                        ";
                }
                // line 1559
                echo "                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1562
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                ";
                // line 1564
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1564) == 1)) {
                    // line 1565
                    echo "                                                    <div class=\"input-group-prepend\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1567
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1567), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1571
                echo "                                                <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1571), "delivery_cost", [], "any", false, false, false, 1571), "html", null, true);
                echo "\" required>
                                                ";
                // line 1572
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1572) == 0)) {
                    // line 1573
                    echo "                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">
                                                            ";
                    // line 1575
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1575), "html", null, true);
                    echo "
                                                        </span>
                                                    </div>
                                                ";
                }
                // line 1579
                echo "                                            </div>
                                        </div>

                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 1583
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1585
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                                <input readonly=\"\" type=\"text\" class=\"form-control  total_weight\" name=\"total_weight\" value=\"0\">
                                            </div>
                                        </div>

                                    </div>
                                    ";
                // line 1591
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1591), "enable_assignEmployee", [], "any", false, false, false, 1591) == 1)) {
                    // line 1592
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 1592)) {
                        // line 1593
                        echo "                                            <div class=\"form-group row kt-margin-t-20\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                        // line 1594
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                        echo "</label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                                        <option data-hidden=\"true\"></option>
                                                        <option value=\"\"></option>
                                                        ";
                        // line 1599
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                            // line 1600
                            echo "                                                            <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1600), "html", null, true);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1600), "assigned_id", [], "any", false, false, false, 1600) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1600))) {
                                echo " selected ";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1600), "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1602
                        echo "                                                    </select>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 1606
                    echo "                                    ";
                }
                // line 1607
                echo "                                </div>
                            </div>
                        ";
            }
            // line 1610
            echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 1617
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
        // line 1630
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your truck"]);
        echo "
                            </h3>
                        </div>
                    </div>
                </div>
                <div id=\"collapseTFive\" class=\"panel-collapse collapse\">
                    <div class=\"kt-portlet__body\">
                        <div class=\"row\">

                            <div class=\"form-group col-lg-8\">
                                <label>";
        // line 1640
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Budget"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
        // line 1642
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Budget"]);
        echo "</span></div>
                                    <input  type=\"number\" class=\"form-control budget_client\" name=\"budget_client\" min=\"1\" placeholder=\"Your budget\" >
                                </div>
                            </div>

                            <div class=\"form-group col-lg-12\">
                                <label for=\"vehicle_category\">";
        // line 1648
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle category"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <div class=\"form-group col-lg-8\">
                                <select class=\"form-control vehicle_category\" onchange=\"getVehicles(this.value)\"  name=\"vehicle_category\" id=\"vehicle_category\" >
                                    <option data-hidden=\"true\"></option>
                                    ";
        // line 1653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_crud"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categories_cru"]) {
            // line 1654
            echo "                                         <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categories_cru"], "id", [], "any", false, false, false, 1654), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categories_cru"], "title", [], "any", false, false, false, 1654), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories_cru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1656
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-lg-12\">
                                <label for=\"slectedTracks\">";
        // line 1661
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            </div>
                            <input type='hidden' id='slectedTracks' name='truck_used' />
                            <div class=\"form-group col-lg-12\" id=\"\">
                                <div id=\"vehicleTypeCarousel\" class=\"vehicleTypeCarousel\">
<!--                                    <div>N/a</div>-->
<!--                                    ";
        // line 1667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehcile_crud"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehcile_cru"]) {
            echo "-->
<!--                                    <div onclick=\"getvahicalid(";
            // line 1668
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "id", [], "any", false, false, false, 1668), "html", null, true);
            echo ")\" class=\"card border-0 card-body mx-3 px-0 selectedVahicals vahicalContainer";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "id", [], "any", false, false, false, 1668), "html", null, true);
            echo "\">-->
<!--                                        <input type=\"radio\" name=\"model\" class=\"make_radio_slide\">-->
<!--                                        <div class=\"content-inner mx-3 text-center d-block\">-->
<!--                                            <img alt=\"\" class=\"img-fluid mx-auto\" src=\"./admin/media/images/vehicle 2.jpg\">-->
<!--                                            <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">-->
<!--                                                <h4 class=\"font-weight-bold\">Name : ";
            // line 1673
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "name", [], "any", false, false, false, 1673), "html", null, true);
            echo "</h4>-->
<!--                                                <p class=\"mb-0\">";
            // line 1674
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "description", [], "any", false, false, false, 1674), "html", null, true);
            echo "</p>-->
<!--                                                <p class=\"mb-0\">Capacity : ";
            // line 1675
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehcile_cru"], "capacity", [], "any", false, false, false, 1675), "html", null, true);
            echo "</p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehcile_cru'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1679
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
        // line 1695
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1695) == 5)) {
            // line 1696
            echo "                            <button type=\"button\" class=\"btn btn-info save_draft\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save as draft"]);
            echo "</button> <span class=\"kt-margin-left-10\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
            echo "
                        ";
        }
        // line 1698
        echo "                        <button type=\"submit\" class=\"btn btn-success save\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 1699
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1699), "child_of", [], "any", false, false, false, 1699));
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
        // line 1715
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

";
        // line 1717
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1718
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
        // line 1717
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1785
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1786
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 1787
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 1787), "map", [], "any", false, false, false, 1787), "html", null, true);
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
        // line 1804
        echo url("api/get-vehicles");
        echo "\",
            data: {id: val},
            success: function (response, status, xhr, \$form) {
                let imageurl = \"";
        // line 1807
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
        // line 1817
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehcile_cru"] ?? null), "id", [], "any", false, false, false, 1817), "html", null, true);
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
        alert(selected)
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
        // line 1978
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1978), "enable_type", [], "any", false, false, false, 1978) != 1)) {
            // line 1979
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1979), "type", [], "any", false, false, false, 1979), "html", null, true);
            echo ";
        ";
        } else {
            // line 1981
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1983
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
        // line 2006
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2006), "enable_type", [], "any", false, false, false, 2006) != 1)) {
            // line 2007
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2007), "type", [], "any", false, false, false, 2007), "html", null, true);
            echo ";
        ";
        } else {
            // line 2009
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2011
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
        // line 2028
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2028), "enable_type", [], "any", false, false, false, 2028) != 1)) {
            // line 2029
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2029), "type", [], "any", false, false, false, 2029), "html", null, true);
            echo ";
        ";
        } else {
            // line 2031
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2033
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
        // line 2062
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2063
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
        // line 2078
        echo "                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     ";
        // line 2085
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2085), "enable_type", [], "any", false, false, false, 2085) != 1)) {
            // line 2086
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2086), "type", [], "any", false, false, false, 2086), "html", null, true);
            echo ";
                    ";
        } else {
            // line 2088
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 2090
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
        // line 2112
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once"]);
        echo "</div></div>\",
            type: \"warning\",

            confirmButtonText: \"";
        // line 2115
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Just save it as a draft"]);
        echo "!\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

            showCancelButton: true,
            cancelButtonText: \"";
        // line 2119
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
        // line 2149
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 ";
        // line 2152
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2153
            echo "                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val(),budget_client: parent.find('.budget_client').val(),vehicle_category: parent.find('#vehicle_category').val(),vehicle_type: parent.find('.make_radio_slide').val(),ship_time: parent.find('.ship_time').val(),is_insured: parent.find('.is_insured').val()},
                 ";
        } else {
            // line 2155
            echo "                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val(),budget_client: parent.find('.budget_client').val(),vehicle_category: parent.find('#vehicle_category').val(),vehicle_type: parent.find('.make_radio_slide').val(),ship_time: parent.find('.ship_time').val(),is_insured: parent.find('.is_insured').val()},
                 ";
        }
        // line 2157
        echo "
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2160
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2164
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
        // line 2174
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2175
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
        // line 2190
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
        // line 2222
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2222), "enable_type", [], "any", false, false, false, 2222) != 1)) {
            // line 2223
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2223), "type", [], "any", false, false, false, 2223), "html", null, true);
            echo ";
        ";
        } else {
            // line 2225
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2227
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
        // line 2262
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 ";
        // line 2265
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2266
            echo "                 data: {client_id: \$('#sender_id').val(),street_addr: parent.find('.street_addr').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        } else {
            // line 2268
            echo "                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        }
        // line 2270
        echo "                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2272
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2276
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
        // line 2288
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2288), "enable_type", [], "any", false, false, false, 2288) != 1)) {
            // line 2289
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2289), "type", [], "any", false, false, false, 2289), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2291
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2293
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
        // line 2358
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2358), "enable_type", [], "any", false, false, false, 2358) != 1)) {
            // line 2359
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2359), "type", [], "any", false, false, false, 2359), "html", null, true);
            echo ";
                    ";
        } else {
            // line 2361
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 2363
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
        // line 2400
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2406
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2410
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
        // line 2423
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2423), "enable_type", [], "any", false, false, false, 2423) != 1)) {
            // line 2424
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2424), "type", [], "any", false, false, false, 2424), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2426
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2428
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
        // line 2492
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2498
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2502
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
        // line 2515
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2515), "enable_type", [], "any", false, false, false, 2515) != 1)) {
            // line 2516
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2516), "type", [], "any", false, false, false, 2516), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2518
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2520
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
        // line 2559
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2560
            echo "            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
            // line 2563
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        } else {
            // line 2568
            echo "            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '";
            // line 2571
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        }
        // line 2576
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
        // line 2585
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
        // line 2598
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
        // line 2607
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2607), "enable_type", [], "any", false, false, false, 2607) != 1)) {
            // line 2608
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2608), "type", [], "any", false, false, false, 2608), "html", null, true);
            echo ";
        ";
        } else {
            // line 2610
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2612
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
        // line 2631
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2631), "enable_type", [], "any", false, false, false, 2631) != 1)) {
            // line 2632
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2632), "type", [], "any", false, false, false, 2632), "html", null, true);
            echo ";
        ";
        } else {
            // line 2634
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2636
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
        // line 2655
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 2656
            echo "            dir: \"rtl\",
        ";
        }
        // line 2658
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 2660
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 2663
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 2666
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 2669
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 2672
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 2675
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 2678
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 2681
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
        // line 2712
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
        // line 2737
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2737), "enable_type", [], "any", false, false, false, 2737) != 1)) {
            // line 2738
            echo "                    var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2738), "type", [], "any", false, false, false, 2738), "html", null, true);
            echo ";
                ";
        } else {
            // line 2740
            echo "                    var type = \$('.type:checked').val();
                ";
        }
        // line 2742
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
        // line 2843
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2843), "enable_type", [], "any", false, false, false, 2843) != 1)) {
            // line 2844
            echo "                var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2844), "type", [], "any", false, false, false, 2844), "html", null, true);
            echo ";
            ";
        } else {
            // line 2846
            echo "                var type = \$('.type:checked').val();
            ";
        }
        // line 2848
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
        // line 2864
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2864), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2864), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 2864), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 2864)));
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
        // line 2868
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2868), "numbers_order", [], "any", false, false, false, 2868)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + ";
        echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
        echo ").slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2868), "numbers_order", [], "any", false, false, false, 2868), "html", null, true);
        echo "));

    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('";
        // line 2871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2871), "numbers_order", [], "any", false, false, false, 2871)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + \$(this).val()).slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2871), "numbers_order", [], "any", false, false, false, 2871), "html", null, true);
        echo "));
    });
});



</script>
";
        // line 1785
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
        return array (  5081 => 1785,  5062 => 2871,  5045 => 2868,  5026 => 2864,  5008 => 2848,  5004 => 2846,  4998 => 2844,  4996 => 2843,  4893 => 2742,  4889 => 2740,  4883 => 2738,  4881 => 2737,  4853 => 2712,  4819 => 2681,  4813 => 2678,  4807 => 2675,  4801 => 2672,  4795 => 2669,  4789 => 2666,  4783 => 2663,  4777 => 2660,  4773 => 2658,  4769 => 2656,  4767 => 2655,  4746 => 2636,  4742 => 2634,  4736 => 2632,  4734 => 2631,  4713 => 2612,  4709 => 2610,  4703 => 2608,  4701 => 2607,  4689 => 2598,  4673 => 2585,  4662 => 2576,  4654 => 2571,  4649 => 2568,  4641 => 2563,  4636 => 2560,  4634 => 2559,  4593 => 2520,  4589 => 2518,  4583 => 2516,  4581 => 2515,  4565 => 2502,  4558 => 2498,  4549 => 2492,  4483 => 2428,  4479 => 2426,  4473 => 2424,  4471 => 2423,  4455 => 2410,  4448 => 2406,  4439 => 2400,  4400 => 2363,  4396 => 2361,  4390 => 2359,  4388 => 2358,  4321 => 2293,  4317 => 2291,  4311 => 2289,  4309 => 2288,  4294 => 2276,  4287 => 2272,  4283 => 2270,  4279 => 2268,  4275 => 2266,  4273 => 2265,  4267 => 2262,  4230 => 2227,  4226 => 2225,  4220 => 2223,  4218 => 2222,  4184 => 2190,  4167 => 2175,  4165 => 2174,  4152 => 2164,  4145 => 2160,  4140 => 2157,  4136 => 2155,  4132 => 2153,  4130 => 2152,  4124 => 2149,  4091 => 2119,  4084 => 2115,  4078 => 2112,  4054 => 2090,  4050 => 2088,  4044 => 2086,  4042 => 2085,  4033 => 2078,  4016 => 2063,  4014 => 2062,  3983 => 2033,  3979 => 2031,  3973 => 2029,  3971 => 2028,  3952 => 2011,  3948 => 2009,  3942 => 2007,  3940 => 2006,  3915 => 1983,  3911 => 1981,  3905 => 1979,  3903 => 1978,  3739 => 1817,  3726 => 1807,  3720 => 1804,  3700 => 1787,  3695 => 1786,  3693 => 1785,  3691 => 1717,  3623 => 1718,  3621 => 1717,  3616 => 1715,  3593 => 1699,  3588 => 1698,  3580 => 1696,  3578 => 1695,  3560 => 1679,  3549 => 1675,  3545 => 1674,  3541 => 1673,  3531 => 1668,  3525 => 1667,  3516 => 1661,  3509 => 1656,  3498 => 1654,  3494 => 1653,  3486 => 1648,  3477 => 1642,  3472 => 1640,  3459 => 1630,  3444 => 1617,  3435 => 1610,  3430 => 1607,  3427 => 1606,  3421 => 1602,  3406 => 1600,  3402 => 1599,  3394 => 1594,  3391 => 1593,  3388 => 1592,  3386 => 1591,  3377 => 1585,  3372 => 1583,  3366 => 1579,  3359 => 1575,  3355 => 1573,  3353 => 1572,  3348 => 1571,  3341 => 1567,  3337 => 1565,  3335 => 1564,  3330 => 1562,  3325 => 1559,  3320 => 1556,  3303 => 1554,  3299 => 1553,  3293 => 1550,  3290 => 1549,  3287 => 1548,  3282 => 1545,  3267 => 1543,  3263 => 1542,  3257 => 1539,  3254 => 1538,  3252 => 1537,  3248 => 1535,  3243 => 1532,  3228 => 1530,  3224 => 1529,  3218 => 1526,  3215 => 1525,  3212 => 1524,  3206 => 1521,  3202 => 1520,  3199 => 1519,  3196 => 1518,  3191 => 1515,  3176 => 1513,  3172 => 1512,  3166 => 1509,  3163 => 1508,  3161 => 1507,  3157 => 1505,  3150 => 1501,  3144 => 1498,  3141 => 1497,  3138 => 1496,  3135 => 1495,  3128 => 1491,  3122 => 1488,  3115 => 1484,  3109 => 1481,  3106 => 1480,  3099 => 1476,  3091 => 1473,  3088 => 1472,  3085 => 1471,  3083 => 1470,  3076 => 1466,  3071 => 1464,  3064 => 1459,  3061 => 1458,  3050 => 1450,  3045 => 1448,  3039 => 1444,  3032 => 1440,  3028 => 1438,  3026 => 1437,  3021 => 1436,  3014 => 1432,  3010 => 1430,  3008 => 1429,  3003 => 1427,  2996 => 1422,  2994 => 1421,  2984 => 1414,  2972 => 1405,  2965 => 1400,  2953 => 1391,  2944 => 1385,  2935 => 1379,  2918 => 1373,  2913 => 1370,  2911 => 1369,  2908 => 1368,  2899 => 1362,  2895 => 1361,  2888 => 1357,  2883 => 1354,  2880 => 1353,  2872 => 1348,  2866 => 1345,  2861 => 1342,  2859 => 1341,  2856 => 1340,  2848 => 1335,  2842 => 1332,  2837 => 1329,  2835 => 1328,  2829 => 1324,  2818 => 1322,  2814 => 1321,  2806 => 1316,  2796 => 1313,  2786 => 1306,  2772 => 1295,  2758 => 1284,  2734 => 1263,  2727 => 1259,  2720 => 1255,  2717 => 1254,  2711 => 1250,  2704 => 1246,  2700 => 1244,  2698 => 1243,  2693 => 1242,  2686 => 1238,  2682 => 1236,  2680 => 1235,  2674 => 1232,  2671 => 1231,  2669 => 1230,  2664 => 1227,  2657 => 1223,  2653 => 1221,  2651 => 1220,  2648 => 1219,  2641 => 1215,  2637 => 1213,  2635 => 1212,  2628 => 1208,  2624 => 1207,  2621 => 1206,  2607 => 1199,  2596 => 1195,  2588 => 1190,  2584 => 1189,  2579 => 1186,  2577 => 1185,  2568 => 1179,  2564 => 1178,  2553 => 1170,  2548 => 1168,  2541 => 1163,  2524 => 1161,  2520 => 1160,  2515 => 1158,  2511 => 1157,  2506 => 1154,  2495 => 1152,  2491 => 1151,  2486 => 1149,  2482 => 1148,  2477 => 1145,  2460 => 1143,  2456 => 1142,  2451 => 1140,  2447 => 1139,  2438 => 1133,  2433 => 1130,  2416 => 1128,  2412 => 1127,  2406 => 1124,  2396 => 1117,  2383 => 1109,  2366 => 1095,  2362 => 1094,  2355 => 1089,  2352 => 1088,  2339 => 1078,  2325 => 1067,  2311 => 1056,  2292 => 1046,  2285 => 1041,  2282 => 1040,  2279 => 1039,  2272 => 1035,  2267 => 1033,  2263 => 1031,  2261 => 1030,  2258 => 1029,  2253 => 1026,  2238 => 1024,  2234 => 1023,  2229 => 1021,  2225 => 1020,  2216 => 1019,  2214 => 1018,  2210 => 1016,  2199 => 1014,  2195 => 1013,  2190 => 1011,  2186 => 1010,  2177 => 1009,  2172 => 1006,  2151 => 1004,  2147 => 1003,  2142 => 1001,  2138 => 1000,  2129 => 999,  2126 => 998,  2120 => 995,  2116 => 994,  2107 => 993,  2105 => 992,  2101 => 990,  2084 => 988,  2080 => 987,  2074 => 984,  2065 => 983,  2056 => 977,  2052 => 976,  2043 => 975,  2041 => 974,  2036 => 971,  2023 => 965,  2012 => 961,  2006 => 958,  2003 => 957,  2001 => 956,  1995 => 953,  1987 => 952,  1981 => 949,  1973 => 948,  1962 => 942,  1947 => 930,  1941 => 929,  1935 => 926,  1930 => 924,  1922 => 921,  1911 => 913,  1891 => 896,  1884 => 892,  1877 => 888,  1874 => 887,  1868 => 883,  1858 => 881,  1855 => 880,  1845 => 878,  1842 => 877,  1832 => 875,  1829 => 874,  1819 => 872,  1817 => 871,  1810 => 867,  1807 => 866,  1804 => 865,  1792 => 860,  1784 => 859,  1777 => 855,  1774 => 854,  1772 => 853,  1762 => 846,  1758 => 845,  1747 => 837,  1742 => 835,  1735 => 830,  1724 => 828,  1720 => 827,  1715 => 825,  1711 => 824,  1706 => 821,  1695 => 819,  1691 => 818,  1686 => 816,  1682 => 815,  1677 => 812,  1660 => 810,  1656 => 809,  1651 => 807,  1647 => 806,  1638 => 800,  1633 => 797,  1616 => 795,  1612 => 794,  1606 => 791,  1596 => 784,  1583 => 776,  1565 => 761,  1561 => 760,  1554 => 755,  1551 => 754,  1538 => 744,  1524 => 733,  1510 => 722,  1491 => 712,  1484 => 707,  1481 => 706,  1479 => 705,  1476 => 704,  1469 => 700,  1464 => 698,  1460 => 696,  1458 => 695,  1455 => 694,  1449 => 691,  1445 => 690,  1442 => 689,  1439 => 688,  1434 => 685,  1419 => 683,  1415 => 682,  1410 => 680,  1406 => 679,  1403 => 678,  1401 => 677,  1396 => 674,  1385 => 672,  1381 => 671,  1376 => 669,  1372 => 668,  1369 => 667,  1364 => 664,  1343 => 662,  1339 => 661,  1334 => 659,  1330 => 658,  1327 => 657,  1325 => 656,  1322 => 655,  1316 => 652,  1312 => 651,  1303 => 650,  1301 => 649,  1297 => 647,  1280 => 645,  1276 => 644,  1270 => 641,  1261 => 640,  1252 => 634,  1248 => 633,  1239 => 632,  1237 => 631,  1232 => 628,  1219 => 622,  1208 => 618,  1202 => 615,  1199 => 614,  1197 => 613,  1191 => 610,  1183 => 609,  1177 => 606,  1169 => 605,  1158 => 599,  1144 => 587,  1138 => 585,  1123 => 583,  1118 => 582,  1116 => 581,  1110 => 580,  1106 => 579,  1100 => 578,  1097 => 577,  1094 => 576,  1087 => 572,  1084 => 571,  1081 => 570,  1079 => 569,  1073 => 566,  1068 => 564,  1060 => 559,  1056 => 558,  1049 => 556,  1041 => 554,  1031 => 547,  1024 => 545,  1020 => 544,  1014 => 543,  1008 => 540,  1003 => 538,  995 => 535,  988 => 533,  984 => 531,  970 => 524,  963 => 520,  960 => 519,  957 => 518,  943 => 511,  936 => 507,  933 => 506,  931 => 505,  928 => 504,  926 => 503,  914 => 494,  900 => 483,  875 => 461,  867 => 456,  845 => 437,  837 => 432,  822 => 420,  810 => 411,  802 => 406,  780 => 387,  772 => 382,  757 => 370,  752 => 367,  738 => 356,  730 => 355,  719 => 347,  714 => 345,  705 => 344,  702 => 343,  697 => 340,  682 => 338,  678 => 337,  672 => 334,  663 => 333,  660 => 332,  655 => 329,  640 => 327,  636 => 326,  630 => 323,  621 => 322,  619 => 321,  616 => 320,  601 => 308,  593 => 303,  581 => 296,  569 => 287,  561 => 282,  549 => 275,  537 => 266,  533 => 264,  531 => 263,  519 => 254,  504 => 242,  493 => 233,  489 => 231,  485 => 230,  482 => 229,  480 => 228,  473 => 223,  467 => 219,  456 => 217,  452 => 216,  444 => 211,  441 => 210,  439 => 209,  428 => 201,  419 => 195,  412 => 190,  401 => 188,  397 => 187,  391 => 184,  386 => 181,  375 => 179,  371 => 178,  365 => 175,  356 => 169,  349 => 165,  345 => 164,  331 => 153,  326 => 151,  321 => 148,  314 => 144,  310 => 142,  308 => 141,  303 => 140,  296 => 136,  292 => 134,  290 => 133,  285 => 131,  280 => 128,  265 => 126,  261 => 125,  255 => 122,  244 => 114,  238 => 111,  229 => 105,  224 => 102,  213 => 100,  209 => 99,  200 => 93,  191 => 87,  186 => 85,  171 => 73,  159 => 64,  151 => 58,  138 => 48,  131 => 43,  120 => 41,  116 => 40,  110 => 37,  105 => 34,  94 => 32,  90 => 31,  84 => 28,  75 => 22,  68 => 18,  64 => 17,  54 => 10,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
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
                        <div class=\"form-group row col-md-12\">
                            <label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                             <span class=\"dev1 col-12\">
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
                                <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" required>
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

                            <div class=\"form-group col-lg-8\">
                                <label>{{'Budget'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Budget'|__}}</span></div>
                                    <input  type=\"number\" class=\"form-control budget_client\" name=\"budget_client\" min=\"1\" placeholder=\"Your budget\" >
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
        alert(selected)
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
{% endput %}", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm", "");
    }
}
