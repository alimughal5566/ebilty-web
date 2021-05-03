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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm */
class __TwigTemplate_d52297eafffa371bec4152cd08d1553c23ef917ce753ba1f8d7661a6886cdbf3 extends \Twig\Template
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
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        ";
            // line 240
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
            // line 249
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
            // line 258
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 258), "enable_type", [], "any", false, false, false, 258) == 1)) {
                // line 259
                echo "                <div class=\"kt-section\">
                    <h3 class=\"kt-section__title kt-margin-b-20\">
                        ";
                // line 261
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
                // line 270
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 270), "type", [], "any", false, false, false, 270) == 1)) {
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
                // line 277
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pickup"]);
                echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
                // line 282
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
                // line 291
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 291), "type", [], "any", false, false, false, 291) == 2)) {
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
                // line 298
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Drop off"]);
                echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
                // line 303
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
            // line 316
            echo "                <div class=\"row\">
                    ";
            // line 317
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 317), "enable_package_type", [], "any", false, false, false, 317) == 1)) {
                // line 318
                echo "                    <div class=\"form-group ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 318), "enable_branch", [], "any", false, false, false, 318) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 318), "enable_shippingDate", [], "any", false, false, false, 318) == 1))) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                        <label>";
                // line 319
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Type"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            ";
                // line 322
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["packaging"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                    // line 323
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 323), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 323), "packaging_id", [], "any", false, false, false, 323) == twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 323))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 323), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                echo "                        </select>
                    </div>
                    ";
            }
            // line 328
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 328), "enable_branch", [], "any", false, false, false, 328) == 1)) {
                // line 329
                echo "                    <div class=\"form-group ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 329), "enable_package_type", [], "any", false, false, false, 329) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 329), "enable_shippingDate", [], "any", false, false, false, 329) == 1))) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                        <label>";
                // line 330
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
                // line 333
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
                    // line 334
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 334), "html", null, true);
                    echo "\" ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "office", [], "any", false, false, false, 334) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 334)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 334), "office_id", [], "any", false, false, false, 334) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 334)))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 334), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                echo "                        </select>
                    </div>
                    ";
            }
            // line 339
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 339), "enable_shippingDate", [], "any", false, false, false, 339) == 1)) {
                // line 340
                echo "                    <div class=\"form-group ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 340), "enable_package_type", [], "any", false, false, false, 340) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 340), "enable_branch", [], "any", false, false, false, 340) == 1))) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                        <label>";
                // line 341
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Date"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
                // line 343
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 343)), "html", null, true);
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
            // line 352
            echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t";
            // line 361
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender information"]);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            ";
            // line 370
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
            // line 379
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 379) == 5)) {
                // line 380
                echo "                    <div class=\"form-group row\">
                        ";
                // line 381
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 381), "enable_anotherCustomer", [], "any", false, false, false, 381) == 1)) {
                    // line 382
                    echo "                        <div class=\"form-group  col-lg-6\">
                            <label class=\"col-form-label\">";
                    // line 383
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Another Sender"]);
                    echo "</label>
                            <div class=\"\">
                                <div class=\"kt-checkbox-single\">
                                    <label class=\"kt-checkbox\">
                                        <input type=\"checkbox\" id=\"enable_anotherSender\" name=\"enable_anotherSender\" ";
                    // line 387
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 387), "anotherCustomer", [], "any", false, false, false, 387) == 1)) {
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
                // line 394
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 394), "enable_customerPublic", [], "any", false, false, false, 394) == 1)) {
                    // line 395
                    echo "                       <!--  <div class=\"form-group col-lg-6\">
                            <label class=\"col-form-label\">";
                    // line 396
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Show Sender Data"]);
                    echo "</label>
                            <div class=\"\">
                                <div class=\"kt-checkbox-single\">
                                    <label class=\"kt-checkbox\">
                                        <input type=\"checkbox\" id=\"enable_showSender\" name=\"enable_showSender\" ";
                    // line 400
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 400), "customerPublic", [], "any", false, false, false, 400) == 1)) {
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
                // line 407
                echo "                    </div>

                    <div class=\"another_sender ";
                // line 409
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 409), "anotherCustomer", [], "any", false, false, false, 409) != 1)) {
                    echo "kt-hidden";
                }
                echo "\">
                        <div class=\" form-group row\">
                            <label>";
                // line 411
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control clients\" name=\"another_sender_id\" id=\"sender_id\" required>
                                    <option data-hidden=\"true\"></option>
                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 414
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                                </select>
                                <span class=\"text-muted\">";
                // line 416
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
                echo "</span>
                        </div>
                        <div class=\"form-group row\">
                            <label>";
                // line 419
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
                // line 420
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
                echo "\" required>
                                <option data-hidden=\"true\"></option><label>";
                // line 421
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo "/";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>

                                <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 423
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>

                            </select>
                        </div>
                    </div>

                ";
            }
            // line 430
            echo "                <div class=\"base_sender ";
            if (((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 430) == 5) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 430), "anotherCustomer", [], "any", false, false, false, 430) == 1))) {
                echo "kt-hidden";
            }
            echo "\">
                    <div class=\"form-group row\">
                        <label>";
            // line 432
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        ";
            // line 433
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 433) == 5)) {
                // line 434
                echo "                            <input name=\"sender_id\" id=\"sender_id\"  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 434), "html", null, true);
                echo "\" type=\"hidden\" />
                            <input value=\"";
                // line 435
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 435), "html", null, true);
                echo "\" type=\"text\" class=\"form-control\" disabled />
                        ";
            } else {
                // line 437
                echo "                            <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"new\" data-icon=\"flaticon2-add\">";
                // line 439
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                            </select>
                            <span class=\"text-muted\">";
                // line 441
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
                echo "</span>
                        ";
            }
            // line 443
            echo "                    </div>
                    ";
            // line 444
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 444) == 5)) {
                // line 445
                echo "                        ";
                if ((null === twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mobile", [], "any", false, false, false, 445))) {
                    // line 446
                    echo "                            <div class=\"form-group row\">
                                <label>";
                    // line 447
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <input type=\"text\" class=\"form-control mobile\" name=\"sender_mobile\" required />
                            </div>
                        ";
                }
                // line 451
                echo "                    ";
            }
            // line 452
            echo "                    <div class=\"form-group row\">
                        <label>";
            // line 453
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
            // line 454
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
            echo "\" required>
                            <option data-hidden=\"true\"></option><label>";
            // line 455
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            ";
            // line 456
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 456) == 5)) {
                // line 457
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 457));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 458
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 458), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 458) == 1)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 458), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 460
                echo "                                <option value=\"new\" data-icon=\"flaticon2-add\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                            ";
            }
            // line 462
            echo "                        </select>
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
            // line 474
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
            // line 480
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 480), "enable_gender", [], "any", false, false, false, 480) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                        <label>";
            // line 481
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                    </div>
                                    <div class=\"form-group ";
            // line 484
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 484), "enable_gender", [], "any", false, false, false, 484) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                        <label>";
            // line 485
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                    </div>
                                    ";
            // line 488
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 488), "enable_gender", [], "any", false, false, false, 488) == 1)) {
                // line 489
                echo "                                    <div class=\"form-group col-lg-3\">
                                        <label>";
                // line 490
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\" ";
                // line 493
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 493), "gender", [], "any", false, false, false, 493) == "male")) {
                    echo "checked";
                }
                echo " > ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\" ";
                // line 497
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 497), "gender", [], "any", false, false, false, 497) == "female")) {
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
            // line 503
            echo "                                </div>
                                <div class=\"location-sender\">
                                    <div class=\"row\">
                                        ";
            // line 506
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 506), "enable_mapAddress", [], "any", false, false, false, 506) == 1)) {
                // line 507
                echo "                                        <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 507), "enable_postalCode", [], "any", false, false, false, 507) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                            <label>";
                // line 508
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address \" name=\"sender[street_address_map]\"  rel=\"sender\" value=\"";
                // line 509
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 509), "street_address_map", [], "any", false, false, false, 509), "html", null, true);
                echo "\" />
                                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                        </div>
                                        ";
            }
            // line 515
            echo "                                        <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 515), "enable_mapAddress", [], "any", false, false, false, 515) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 515), "enable_postalCode", [], "any", false, false, false, 515) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                            <label>";
            // line 516
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 519
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 520
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 520), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 520), "name", [], "any", false, false, false, 520), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 520), "name", [], "any", false, false, false, 520), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "                                            </select>
                                        </div>
                                        ";
            // line 524
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 524), "enable_postalCode", [], "any", false, false, false, 524) == 1)) {
                // line 525
                echo "                                        <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 525), "enable_mapAddress", [], "any", false, false, false, 525) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                            <label>";
                // line 526
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" value=\"";
                // line 527
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 527), "postal_code", [], "any", false, false, false, 527), "html", null, true);
                echo "\">
                                        </div>
                                        ";
            }
            // line 530
            echo "
                                        ";
            // line 531
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 531), "enable_state", [], "any", false, false, false, 531) == 1)) {
                // line 532
                echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 533
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"";
                // line 534
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"sender[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 536
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 537
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 537), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 537), "name", [], "any", false, false, false, 537), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 537), "state", [], "any", false, false, false, 537) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 537))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 537), "name", [], "any", false, false, false, 537), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 539
                echo "                                            </select>
                                        </div>
                                        ";
            }
            // line 542
            echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
            // line 543
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"";
            // line 544
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 546
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 547
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 547), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 547), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 549
            echo "                                            </select>
                                        </div>

                                        ";
            // line 552
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 552), "enable_county", [], "any", false, false, false, 552) == 1)) {
                // line 553
                echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 554
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "</label>
                                            <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"";
                // line 555
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 557
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 558
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 558), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 558), "county", [], "any", false, false, false, 558) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 558))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 558), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 560
                echo "                                            </select>
                                        </div>
                                        ";
            }
            // line 563
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 563), "enable_streetAddress", [], "any", false, false, false, 563) == 1)) {
                // line 564
                echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
                // line 565
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street Address"]);
                echo "</label>
                                            <input type=\"text\" class=\"form-control street_addr\" name=\"sender[street_address]\" value=\"";
                // line 566
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 566), "street_address", [], "any", false, false, false, 566), "html", null, true);
                echo "\"  required/>
                                        </div>
                                        ";
            }
            // line 569
            echo "                                    </div>
                                    ";
            // line 570
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 570), "enable_mapAddress", [], "any", false, false, false, 570) == 1)) {
                // line 571
                echo "                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
                // line 573
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                            <span class=\"form-text text-muted\">";
                // line 575
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                        </div>
                                    </div>
                                    ";
            }
            // line 579
            echo "
                                    ";
            // line 580
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 580), "enable_createAccount", [], "any", false, false, false, 580) == 1)) {
                // line 581
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 581)) {
                    // line 582
                    echo "                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <div class=\"kt-checkbox-single\">
                                                        <label class=\"kt-checkbox\">
                                                            <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\" ";
                    // line 587
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 587), "connect", [], "any", false, false, false, 587) == 1)) {
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
                    // line 597
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
                    // line 608
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
                    // line 619
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
                // line 629
                echo "                                    ";
            }
            // line 630
            echo "                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 635
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 636
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
            // line 651
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
            // line 659
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control address street_addr\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                        <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                        <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                        <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 666
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 669
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 670
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 670), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 670), "name", [], "any", false, false, false, 670), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 670), "name", [], "any", false, false, false, 670), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 672
            echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
            // line 675
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                        <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 681
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"";
            // line 682
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"senderaddress[state]\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 684
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 685
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 685), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 685), "name", [], "any", false, false, false, 685), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 685), "name", [], "any", false, false, false, 685), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 687
            echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 690
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"";
            // line 691
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 693
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 694
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 694), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 694), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 696
            echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 699
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                        <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"";
            // line 700
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" >
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 702
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 703
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 703), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 703), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 705
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-12\">
                                        <label>";
            // line 710
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                        <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                        <span class=\"form-text text-muted\">";
            // line 712
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
            // line 720
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 721
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                ";
            // line 728
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 728), "enable_payment_type", [], "any", false, false, false, 728) == 1)) {
                // line 729
                echo "                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 730
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\" ";
                // line 734
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 734), "payment_type", [], "any", false, false, false, 734) == 1)) {
                    echo "selected";
                }
                echo ">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
                echo " </option>
                            <option value=\"2\" ";
                // line 735
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 735), "payment_type", [], "any", false, false, false, 735) == 2)) {
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
            // line 740
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 740), "enable_payment_method", [], "any", false, false, false, 740) == 1)) {
                // line 741
                echo "                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 742
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Method"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_method\" id=\"payment_method\" required>
                            <option data-hidden=\"true\"></option>
                            ";
                // line 746
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["enable_cash"] ?? null) : null) == 1)) {
                    // line 747
                    echo "                            <option value=\"cash\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 747), "payment_method", [], "any", false, false, false, 747) == "cash")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cash"]);
                    echo " </option>
                            ";
                }
                // line 749
                echo "                            ";
                if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["enable_transfer"] ?? null) : null) == 1)) {
                    // line 750
                    echo "                            <option value=\"transfer\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 750), "payment_method", [], "any", false, false, false, 750) == "transfer")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wire Transfer"]);
                    echo " </option>
                            ";
                }
                // line 752
                echo "                            ";
                if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["payment"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["enable_paystack"] ?? null) : null) == 1)) {
                    // line 753
                    echo "                            <option value=\"paystack\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 753), "payment_method", [], "any", false, false, false, 753) == "paystack")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack"]);
                    echo " </option>
                            ";
                }
                // line 755
                echo "                            ";
                if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["payment"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["enable_paypal"] ?? null) : null) == 1)) {
                    // line 756
                    echo "                            <option value=\"paypal\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 756), "payment_method", [], "any", false, false, false, 756) == "paypal")) {
                        echo "selected";
                    }
                    echo ">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paypal"]);
                    echo " </option>
                            ";
                }
                // line 758
                echo "                        </select>
                    </div>
                </div>
                ";
            }
            // line 762
            echo "                <div class=\"form-group row type_1\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 763
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Record receiver information ?"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-radio-inline\">
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" checked required> ";
            // line 767
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                <span></span>
                            </label>
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" required> ";
            // line 771
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"type_2 receiver_information\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"kt-portlet__head\">
    \t\t\t\t<div class=\"kt-portlet__head-label\">
    \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t\t\t";
            // line 784
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver information"]);
            echo "
    \t\t\t\t\t</h3>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-portlet__body\">
                    <div class=\"form-group row\">
                        <label>";
            // line 790
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                            <option data-hidden=\"true\"></option>
                            <option value=\"new\" data-icon=\"flaticon2-add\">";
            // line 793
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                        </select>
                        <span class=\"text-muted\">";
            // line 795
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will receive the package"]);
            echo "</span>
                    </div>
                    <div class=\"form-group row\">
                        <label>";
            // line 798
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
            // line 799
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
            // line 811
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
            // line 817
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 817), "enable_gender", [], "any", false, false, false, 817) == 1)) {
                echo "col-lg-5";
            } else {
                echo "col-lg-7";
            }
            echo "\">
                                        <label>";
            // line 818
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                    </div>
                                    <div class=\"form-group ";
            // line 821
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 821), "enable_gender", [], "any", false, false, false, 821) == 1)) {
                echo "col-lg-4";
            } else {
                echo "col-lg-5";
            }
            echo "\">
                                        <label>";
            // line 822
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                    </div>
                                    ";
            // line 825
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 825), "enable_gender", [], "any", false, false, false, 825) == 1)) {
                // line 826
                echo "                                    <div class=\"form-group col-lg-3\">
                                        <label>";
                // line 827
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" ";
                // line 830
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 830), "gender", [], "any", false, false, false, 830) == "male")) {
                    echo "checked";
                }
                echo "> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" ";
                // line 834
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 834), "gender", [], "any", false, false, false, 834) == "female")) {
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
            // line 840
            echo "                                </div>
                                <div class=\"location-receiver\">
                                    <div class=\"row\">
                                        ";
            // line 843
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 843), "enable_mapAddress", [], "any", false, false, false, 843) == 1)) {
                // line 844
                echo "                                        <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 844), "enable_postalCode", [], "any", false, false, false, 844) == 1)) {
                    echo "col-lg-5";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                            <label>";
                // line 845
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\"  name=\"receiver[street_address]\"  rel=\"receiver\" value=\"";
                // line 846
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 846), "street_address_map", [], "any", false, false, false, 846), "html", null, true);
                echo "\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                        </div>
                                        ";
            }
            // line 852
            echo "                                        <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 852), "enable_mapAddress", [], "any", false, false, false, 852) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 852), "enable_postalCode", [], "any", false, false, false, 852) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                            <label>";
            // line 853
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 856
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 857
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 857), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 857), "name", [], "any", false, false, false, 857), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 857), "name", [], "any", false, false, false, 857), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 859
            echo "                                            </select>
                                        </div>
                                        ";
            // line 861
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 861), "enable_postalCode", [], "any", false, false, false, 861) == 1)) {
                // line 862
                echo "                                        <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 862), "enable_mapAddress", [], "any", false, false, false, 862) == 1)) {
                    echo "col-lg-3";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                            <label>";
                // line 863
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"";
                // line 864
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 864), "postal_code", [], "any", false, false, false, 864), "html", null, true);
                echo "\">
                                        </div>
                                        ";
            }
            // line 867
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 867), "enable_state", [], "any", false, false, false, 867) == 1)) {
                // line 868
                echo "                                        <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 868), "enable_county", [], "any", false, false, false, 868) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                            <label>";
                // line 869
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
                // line 870
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"receiver[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 872
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 873
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 873), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 873), "name", [], "any", false, false, false, 873), "html", null, true);
                        echo "\"";
                    }
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 873), "state", [], "any", false, false, false, 873) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 873))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 873), "name", [], "any", false, false, false, 873), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 875
                echo "                                            </select>
                                        </div>
                                        ";
            }
            // line 878
            echo "                                        <div class=\"form-group ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 878), "enable_county", [], "any", false, false, false, 878) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 878), "enable_state", [], "any", false, false, false, 878) == 1))) {
                echo "col-lg-4";
            } else {
                echo "col-lg-6";
            }
            echo "\">
                                            <label>";
            // line 879
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
            // line 880
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 882
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 883
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 883), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 883), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 885
            echo "                                            </select>
                                        </div>
                                        ";
            // line 887
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 887), "enable_county", [], "any", false, false, false, 887) == 1)) {
                // line 888
                echo "                                        <div class=\"form-group ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 888), "enable_state", [], "any", false, false, false, 888) == 1)) {
                    echo "col-lg-4";
                } else {
                    echo "col-lg-6";
                }
                echo "\">
                                            <label>";
                // line 889
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
                // line 890
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 892
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 893
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 893), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 893), "county", [], "any", false, false, false, 893) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 893))) {
                        echo " selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 893), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 895
                echo "                                            </select>
                                        </div>
                                        ";
            }
            // line 898
            echo "                                    </div>
                                    ";
            // line 899
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 899), "enable_mapAddress", [], "any", false, false, false, 899) == 1)) {
                // line 900
                echo "                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
                // line 902
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                            <span class=\"form-text text-muted\">";
                // line 904
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                        </div>
                                    </div>
                                    ";
            }
            // line 908
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 908), "enable_createAccount", [], "any", false, false, false, 908) == 1)) {
                // line 909
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 909)) {
                    // line 910
                    echo "                                            <div class=\"form-group row\">
                                                <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                                <div class=\"col-lg-9 col-xl-6\">
                                                    <div class=\"kt-checkbox-single\">
                                                        <label class=\"kt-checkbox\">
                                                            <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" ";
                    // line 915
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 915), "connect", [], "any", false, false, false, 915) == 1)) {
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
                    // line 925
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
                    // line 936
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
                    // line 947
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
                // line 957
                echo "                                    ";
            }
            // line 958
            echo "                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 963
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 964
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
            // line 978
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
            // line 986
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 993
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 996
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 997
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 997), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 997), "name", [], "any", false, false, false, 997), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 997), "name", [], "any", false, false, false, 997), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 999
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 1002
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 1008
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
            // line 1009
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 1011
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 1012
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1012), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1012), "name", [], "any", false, false, false, 1012), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1012), "name", [], "any", false, false, false, 1012), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1014
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 1017
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
            // line 1018
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 1020
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 1021
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1021), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1021), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1023
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 1026
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Area"]);
            echo "</label>
                                            <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
            // line 1027
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 1029
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 1030
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1030), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1030), "name", [], "any", false, false, false, 1030), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 1030), "name", [], "any", false, false, false, 1030), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1032
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 1037
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 1039
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
            // line 1047
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 1048
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    ";
            // line 1054
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1054), "enable_return_package", [], "any", false, false, false, 1054) == 1)) {
                // line 1055
                echo "                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">
                        ";
                // line 1058
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        <br /><span class=\"text-muted\">";
                // line 1059
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes if you need to return money from the receiver to sender after delivery"]);
                echo "</span>
                        </label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
                // line 1064
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1064), "return_package", [], "any", false, false, false, 1064) == 1)) {
                    echo "checked";
                }
                echo " required> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
                // line 1068
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1068), "return_package", [], "any", false, false, false, 1068) == 2)) {
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
            // line 1075
            echo "                    <div class=\"form-group row kt-hidden package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1076
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                        <br /><span class=\"text-muted\">";
            // line 1077
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount that will be returned to the sender from the receiver"]);
            echo "</span>
                        </label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"input-group\">
                                ";
            // line 1081
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1081) == 1)) {
                // line 1082
                echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
                // line 1084
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1084), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 1088
            echo "                \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"package_fee\" required />
                                ";
            // line 1089
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1089) == 0)) {
                // line 1090
                echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
                // line 1092
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1092), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 1096
            echo "                            </div>
                        </div>
                    </div>
                    ";
            // line 1099
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1099) != 5)) {
                // line 1100
                echo "                        <div class=\"form-group row kt-hidden package_fee\">
                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 1101
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"input-group\">
                                    ";
                // line 1104
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1104) == 1)) {
                    // line 1105
                    echo "                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                ";
                    // line 1107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1107), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 1111
                echo "                    \t\t\t\t\t<input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1111), "delivery_cost_back_receiver", [], "any", false, false, false, 1111), "html", null, true);
                echo "\" required />
                                    ";
                // line 1112
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1112) == 0)) {
                    // line 1113
                    echo "                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">
                                                ";
                    // line 1115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1115), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 1119
                echo "                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 1123
            echo "                    <div class=\"form-group row kt-hidden package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 1124
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" checked required> ";
            // line 1128
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required> ";
            // line 1132
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
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t";
            // line 1149
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            ";
            // line 1158
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
            // line 1169
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Content"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"kt-section__content\">
                        <div class=\"form-group form-group-last row\" id=\"package_repeater\">
                            <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                <div data-repeater-item class=\"align-items-center\">
                                    <div class=\"form-group row\">
                                        <div class=\"";
            // line 1176
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1176), "enable_description", [], "any", false, false, false, 1176) == 1)) {
                echo "col-md-4";
            } else {
                echo "col-md-6";
            }
            echo "\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label>";
            // line 1179
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 1184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 1185
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1185), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1185), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1187
            echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 1191
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1191), "enable_description", [], "any", false, false, false, 1191) == 1)) {
                // line 1192
                echo "                                        <div class=\"col-md-8\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
                // line 1195
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
                echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
                // line 1198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1198), "description", [], "any", false, false, false, 1198), "html", null, true);
                echo "\">
                                                </div>
                                            </div>
                                        </div>
                                        ";
            }
            // line 1203
            echo "
                                        ";
            // line 1204
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1204), "enable_quantity", [], "any", false, false, false, 1204) == 1)) {
                // line 1205
                echo "                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
                // line 1208
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\"  value=\"";
                // line 1211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1211), "quantity", [], "any", false, false, false, 1211), "html", null, true);
                echo "\">
                                                </div>
                                            </div>
                                        </div>
                                        ";
            }
            // line 1216
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1216), "enable_weight", [], "any", false, false, false, 1216) == 1)) {
                // line 1217
                echo "                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
                // line 1220
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1224
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                        \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\" value=\"";
                // line 1225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1225), "weight", [], "any", false, false, false, 1225), "html", null, true);
                echo "\" >
                                \t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
            }
            // line 1231
            echo "
                                        ";
            // line 1232
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1232), "enable_dimensions", [], "any", false, false, false, 1232) == 1)) {
                // line 1233
                echo "                                        <div class=\"col-md-12\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
                // line 1236
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
                // line 1242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1242), "length", [], "any", false, false, false, 1242), "html", null, true);
                echo "\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1248), "width", [], "any", false, false, false, 1248), "html", null, true);
                echo "\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\" name=\"weight\" value=\"";
                // line 1254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1254), "height", [], "any", false, false, false, 1254), "html", null, true);
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
            // line 1263
            echo "                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-3\">
                                            <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                <i class=\"la la-trash-o\"></i>
                                                ";
            // line 1268
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
            // line 1277
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
            echo "
                                    </a>
                                </label>
                           </div>
                         </div>
                    </div>
                </div>
                ";
            // line 1284
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1284) == 5)) {
                // line 1285
                echo "                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"kt-section\">
                        <div class=\"kt-section__content\">
                            <div class=\"row\">
                                <div class=\"form-group readonly col-lg-6\">
                                    <label>";
                // line 1290
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        ";
                // line 1292
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1292) == 1)) {
                    // line 1293
                    echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                    // line 1295
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1295), "html", null, true);
                    echo "
                                                </span>
                                            </div>
                                        ";
                }
                // line 1299
                echo "                                        <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1299), "delivery_cost", [], "any", false, false, false, 1299), "html", null, true);
                echo "\" required readonly>
                                        ";
                // line 1300
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1300) == 0)) {
                    // line 1301
                    echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                    // line 1303
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1303), "html", null, true);
                    echo "
                                                </span>
                                            </div>
                                        ";
                }
                // line 1307
                echo "                                    </div>
                                </div>

                                <div class=\"form-group col-lg-6\">
                                    <label>";
                // line 1311
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1313
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
            // line 1321
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1321) != 5)) {
                // line 1322
                echo "                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"kt-section\">
    \t\t\t\t\t<div class=\"kt-section__content\">
                            <div class=\"row\">
                                <!-- <div class=\"form-group col-lg-4\">
                                    <label>";
                // line 1327
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1329
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1329), "prefix_order", [], "any", false, false, false, 1329), "html", null, true);
                echo "</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" aria-describedby=\"basic-addon1\">
                \t\t\t\t\t</div>
                                </div> -->
                                ";
                // line 1333
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1333), "enable_tax", [], "any", false, false, false, 1333) == 1)) {
                    // line 1334
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1334), "type", [], "any", false, false, false, 1334) == 1)) {
                        // line 1335
                        echo "                                    <div class=\"form-group col-lg-6\">
                                        <label>";
                        // line 1336
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                        echo " & ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Duty"]);
                        echo "</label>
                                        <div class=\"input-group\">
                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                    \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"";
                        // line 1339
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1339), "percent", [], "any", false, false, false, 1339), "html", null, true);
                        echo "\">
                    \t\t\t\t\t</div>
                                    </div>
                                    ";
                    } else {
                        // line 1343
                        echo "                                    <div class=\"form-group col-lg-3\">
                                        <label>";
                        // line 1344
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SGST"]);
                        echo "</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"sgst\" value=\"";
                        // line 1347
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1347), "SGST", [], "any", false, false, false, 1347), "html", null, true);
                        echo "\">
                                        </div>
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
                        // line 1351
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CGST"]);
                        echo "</label>
                                        <div class=\"input-group\">
                                            <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                            <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"cgst\" value=\"";
                        // line 1354
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1354), "CGST", [], "any", false, false, false, 1354), "html", null, true);
                        echo "\">
                                        </div>
                                    </div>
                                    ";
                    }
                    // line 1358
                    echo "                                ";
                }
                // line 1359
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1359), "enable_insurance", [], "any", false, false, false, 1359) == 1)) {
                    // line 1360
                    echo "                                <div class=\"form-group col-lg-6\">
                                    <label>";
                    // line 1361
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
                    echo "</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"";
                    // line 1364
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1364), "insurance", [], "any", false, false, false, 1364), "html", null, true);
                    echo "\">
                \t\t\t\t\t</div>
                                </div>
                                ";
                }
                // line 1368
                echo "                            </div>
                            <div class=\"row\">
                                ";
                // line 1370
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1370), "enable_shippingMode", [], "any", false, false, false, 1370) == 1)) {
                    // line 1371
                    echo "                                <div class=\"form-group col-lg-4\">
                                    <label>";
                    // line 1372
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
                    echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
                    // line 1375
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                        // line 1376
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1376), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1376), "mode_id", [], "any", false, false, false, 1376) == twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1376))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 1376), "html", null, true);
                        echo "</option>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1378
                    echo "                                    </select>
                                </div>
                                ";
                }
                // line 1381
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1381), "enable_customsValue", [], "any", false, false, false, 1381) == 1)) {
                    // line 1382
                    echo "                                <div class=\"form-group col-lg-4\">
                                    <label>";
                    // line 1383
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
                    echo "</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"";
                    // line 1384
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1384), "customsValue", [], "any", false, false, false, 1384), "html", null, true);
                    echo "\" aria-describedby=\"basic-addon1\">
                                </div>
                                ";
                }
                // line 1387
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1387), "enable_courierCompany", [], "any", false, false, false, 1387) == 1)) {
                    // line 1388
                    echo "                                <div class=\"form-group col-lg-4\">
                                    <label>";
                    // line 1389
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                    echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
                    // line 1392
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["courier"]) {
                        // line 1393
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1393), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1393), "courier_id", [], "any", false, false, false, 1393) == twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1393))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "name", [], "any", false, false, false, 1393), "html", null, true);
                        echo "</option>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courier'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1395
                    echo "                                    </select>
                                </div>
                                ";
                }
                // line 1398
                echo "                            </div>
                            <div class=\"row\">
                                ";
                // line 1400
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1400), "enable_deliveryTime", [], "any", false, false, false, 1400) == 1)) {
                    // line 1401
                    echo "                                <div class=\"form-group col-lg-6\">
                                    <label>";
                    // line 1402
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
                    // line 1405
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["deliverytime"]) {
                        // line 1406
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1406), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1406), "default_deliverytime", [], "any", false, false, false, 1406) == twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1406))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "name", [], "any", false, false, false, 1406), "html", null, true);
                        echo "</option>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deliverytime'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1408
                    echo "                                    </select>
                                </div>
                                ";
                }
                // line 1411
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1411), "enable_deliveryStatus", [], "any", false, false, false, 1411) == 1)) {
                    // line 1412
                    echo "                                <div class=\"form-group col-lg-6\">
                                    <label>";
                    // line 1413
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
                    echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
                    // line 1416
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                        // line 1417
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1417), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "equal", [], "any", false, false, false, 1417), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1417), "default_status", [], "any", false, false, false, 1417) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1417))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 1417), "html", null, true);
                        echo "</option>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1419
                    echo "                                    </select>
                                </div>
                                ";
                }
                // line 1422
                echo "                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-6\">
                                    <label>";
                // line 1425
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        ";
                // line 1427
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1427) == 1)) {
                    // line 1428
                    echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                    // line 1430
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1430), "html", null, true);
                    echo "
                                                </span>
                                            </div>
                                        ";
                }
                // line 1434
                echo "                                        <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"courier_fee\" id=\"delivery_cost\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 1434), "delivery_cost", [], "any", false, false, false, 1434), "html", null, true);
                echo "\" required>
                                        ";
                // line 1435
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1435) == 0)) {
                    // line 1436
                    echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                    // line 1438
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1438), "html", null, true);
                    echo "
                                                </span>
                                            </div>
                                        ";
                }
                // line 1442
                echo "                                    </div>
                                </div>

                                <div class=\"form-group col-lg-6\">
                                    <label>";
                // line 1446
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1448
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                        <input readonly=\"\" type=\"text\" class=\"form-control  total_weight\" name=\"total_weight\" value=\"0\">
                                    </div>
                                </div>

                            </div>
                            ";
                // line 1454
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1454), "enable_assignEmployee", [], "any", false, false, false, 1454) == 1)) {
                    // line 1455
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 1455)) {
                        // line 1456
                        echo "                                    <div class=\"form-group row kt-margin-t-20\">
                                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                        // line 1457
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                        echo "</label>
                                        <div class=\"col-lg-9 col-xl-6\">
                                            <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                                <option data-hidden=\"true\"></option>
                                                <option value=\"\"></option>
                                                ";
                        // line 1462
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                            // line 1463
                            echo "                                                    <option value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1463), "html", null, true);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1463), "assigned_id", [], "any", false, false, false, 1463) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1463))) {
                                echo " selected ";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1463), "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1465
                        echo "                                            </select>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 1469
                    echo "                            ";
                }
                // line 1470
                echo "                        </div>
                    </div>
                ";
            }
            // line 1473
            echo "            </div>
        </div>
    </div>
</div>
";
        }
        // line 1478
        echo "
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        ";
        // line 1485
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your truck"]);
        echo "
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label for=\"vehicle_category\">";
        // line 1492
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle category"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    </div>
                    <div class=\"form-group col-lg-8\">
                        <select class=\"form-control vehicle_category\"  name=\"vehicle_category\" id=\"vehicle_category\" >
                            <option data-hidden=\"true\"></option>
                            <option value=\"Category A\">Category A</option>
                        </select>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label for=\"vehicle_type\">";
        // line 1503
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose your vehicle type"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    </div>
                    <div class=\"form-group col-lg-12\" id=\"vehicle_type\">
                        <div id=\"vehicleTypeCarousel\" class=\"vehicleTypeCarousel\">
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
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
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__foot\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 1561
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1561) == 5)) {
            // line 1562
            echo "                            <button type=\"button\" class=\"btn btn-info save_draft\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save as draft"]);
            echo "</button> <span class=\"kt-margin-left-10\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
            echo "
                        ";
        }
        // line 1564
        echo "                        <button type=\"submit\" class=\"btn btn-success save\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 1565
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1565), "child_of", [], "any", false, false, false, 1565));
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
        // line 1572
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

";
        // line 1574
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1575
        echo "    <style>
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
    </style>
";
        // line 1574
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1608
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1609
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 1610
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 1610), "map", [], "any", false, false, false, 1610), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
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
        // line 1700
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1700), "enable_type", [], "any", false, false, false, 1700) != 1)) {
            // line 1701
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1701), "type", [], "any", false, false, false, 1701), "html", null, true);
            echo ";
        ";
        } else {
            // line 1703
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1705
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
        // line 1728
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1728), "enable_type", [], "any", false, false, false, 1728) != 1)) {
            // line 1729
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1729), "type", [], "any", false, false, false, 1729), "html", null, true);
            echo ";
        ";
        } else {
            // line 1731
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1733
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
        // line 1750
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1750), "enable_type", [], "any", false, false, false, 1750) != 1)) {
            // line 1751
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1751), "type", [], "any", false, false, false, 1751), "html", null, true);
            echo ";
        ";
        } else {
            // line 1753
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1755
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
        // line 1783
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1784
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
        // line 1799
        echo "                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     ";
        // line 1806
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1806), "enable_type", [], "any", false, false, false, 1806) != 1)) {
            // line 1807
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1807), "type", [], "any", false, false, false, 1807), "html", null, true);
            echo ";
                    ";
        } else {
            // line 1809
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 1811
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
        // line 1833
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once"]);
        echo "</div></div>\",
            type: \"warning\",

            confirmButtonText: \"";
        // line 1836
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Just save it as a draft"]);
        echo "!\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

            showCancelButton: true,
            cancelButtonText: \"";
        // line 1840
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
        // line 1870
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 ";
        // line 1873
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1874
            echo "                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val()},
                 ";
        } else {
            // line 1876
            echo "                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 ";
        }
        // line 1878
        echo "                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1880
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1884
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
        // line 1894
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1895
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
        // line 1910
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
        // line 1942
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1942), "enable_type", [], "any", false, false, false, 1942) != 1)) {
            // line 1943
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 1943), "type", [], "any", false, false, false, 1943), "html", null, true);
            echo ";
        ";
        } else {
            // line 1945
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 1947
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
        // line 1982
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 ";
        // line 1985
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1986
            echo "                 data: {client_id: \$('#sender_id').val(),street_addr: parent.find('.street_addr').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        } else {
            // line 1988
            echo "                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        }
        // line 1990
        echo "                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1992
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1996
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
        // line 2008
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2008), "enable_type", [], "any", false, false, false, 2008) != 1)) {
            // line 2009
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2009), "type", [], "any", false, false, false, 2009), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2011
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2013
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
        // line 2072
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2072), "enable_type", [], "any", false, false, false, 2072) != 1)) {
            // line 2073
            echo "                        var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2073), "type", [], "any", false, false, false, 2073), "html", null, true);
            echo ";
                    ";
        } else {
            // line 2075
            echo "                        var type = \$('.type:checked').val();
                    ";
        }
        // line 2077
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
        // line 2114
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2120
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2124
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
        // line 2137
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2137), "enable_type", [], "any", false, false, false, 2137) != 1)) {
            // line 2138
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2138), "type", [], "any", false, false, false, 2138), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2140
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2142
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
        // line 2204
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 2210
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 2214
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
        // line 2227
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2227), "enable_type", [], "any", false, false, false, 2227) != 1)) {
            // line 2228
            echo "                            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2228), "type", [], "any", false, false, false, 2228), "html", null, true);
            echo ";
                        ";
        } else {
            // line 2230
            echo "                            var type = \$('.type:checked').val();
                        ";
        }
        // line 2232
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
        // line 2271
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 2272
            echo "            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
            // line 2275
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        } else {
            // line 2280
            echo "            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '";
            // line 2283
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        }
        // line 2288
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
        // line 2297
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
        // line 2310
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
        // line 2319
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2319), "enable_type", [], "any", false, false, false, 2319) != 1)) {
            // line 2320
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2320), "type", [], "any", false, false, false, 2320), "html", null, true);
            echo ";
        ";
        } else {
            // line 2322
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2324
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
        // line 2343
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2343), "enable_type", [], "any", false, false, false, 2343) != 1)) {
            // line 2344
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2344), "type", [], "any", false, false, false, 2344), "html", null, true);
            echo ";
        ";
        } else {
            // line 2346
            echo "            var type = \$('.type:checked').val();
        ";
        }
        // line 2348
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
        // line 2367
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 2368
            echo "            dir: \"rtl\",
        ";
        }
        // line 2370
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 2372
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 2375
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 2378
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 2381
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 2384
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 2387
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 2390
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 2393
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
        // line 2425
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
        // line 2451
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2451), "enable_type", [], "any", false, false, false, 2451) != 1)) {
            // line 2452
            echo "                    var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2452), "type", [], "any", false, false, false, 2452), "html", null, true);
            echo ";
                ";
        } else {
            // line 2454
            echo "                    var type = \$('.type:checked').val();
                ";
        }
        // line 2456
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
        // line 2557
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2557), "enable_type", [], "any", false, false, false, 2557) != 1)) {
            // line 2558
            echo "                var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2558), "type", [], "any", false, false, false, 2558), "html", null, true);
            echo ";
            ";
        } else {
            // line 2560
            echo "                var type = \$('.type:checked').val();
            ";
        }
        // line 2562
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
        // line 2578
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2578), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2578), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 2578), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 2578)));
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
        // line 2582
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2582), "numbers_order", [], "any", false, false, false, 2582)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + ";
        echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
        echo ").slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2582), "numbers_order", [], "any", false, false, false, 2582), "html", null, true);
        echo "));

    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('";
        // line 2585
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2585), "numbers_order", [], "any", false, false, false, 2585)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + \$(this).val()).slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2585), "numbers_order", [], "any", false, false, false, 2585), "html", null, true);
        echo "));
    });
});
</script>
";
        // line 1608
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4704 => 1608,  4688 => 2585,  4671 => 2582,  4652 => 2578,  4634 => 2562,  4630 => 2560,  4624 => 2558,  4622 => 2557,  4519 => 2456,  4515 => 2454,  4509 => 2452,  4507 => 2451,  4478 => 2425,  4443 => 2393,  4437 => 2390,  4431 => 2387,  4425 => 2384,  4419 => 2381,  4413 => 2378,  4407 => 2375,  4401 => 2372,  4397 => 2370,  4393 => 2368,  4391 => 2367,  4370 => 2348,  4366 => 2346,  4360 => 2344,  4358 => 2343,  4337 => 2324,  4333 => 2322,  4327 => 2320,  4325 => 2319,  4313 => 2310,  4297 => 2297,  4286 => 2288,  4278 => 2283,  4273 => 2280,  4265 => 2275,  4260 => 2272,  4258 => 2271,  4217 => 2232,  4213 => 2230,  4207 => 2228,  4205 => 2227,  4189 => 2214,  4182 => 2210,  4173 => 2204,  4109 => 2142,  4105 => 2140,  4099 => 2138,  4097 => 2137,  4081 => 2124,  4074 => 2120,  4065 => 2114,  4026 => 2077,  4022 => 2075,  4016 => 2073,  4014 => 2072,  3953 => 2013,  3949 => 2011,  3943 => 2009,  3941 => 2008,  3926 => 1996,  3919 => 1992,  3915 => 1990,  3911 => 1988,  3907 => 1986,  3905 => 1985,  3899 => 1982,  3862 => 1947,  3858 => 1945,  3852 => 1943,  3850 => 1942,  3816 => 1910,  3799 => 1895,  3797 => 1894,  3784 => 1884,  3777 => 1880,  3773 => 1878,  3769 => 1876,  3765 => 1874,  3763 => 1873,  3757 => 1870,  3724 => 1840,  3717 => 1836,  3711 => 1833,  3687 => 1811,  3683 => 1809,  3677 => 1807,  3675 => 1806,  3666 => 1799,  3649 => 1784,  3647 => 1783,  3617 => 1755,  3613 => 1753,  3607 => 1751,  3605 => 1750,  3586 => 1733,  3582 => 1731,  3576 => 1729,  3574 => 1728,  3549 => 1705,  3545 => 1703,  3539 => 1701,  3537 => 1700,  3444 => 1610,  3439 => 1609,  3437 => 1608,  3435 => 1574,  3401 => 1575,  3399 => 1574,  3394 => 1572,  3380 => 1565,  3375 => 1564,  3367 => 1562,  3365 => 1561,  3304 => 1503,  3290 => 1492,  3280 => 1485,  3271 => 1478,  3264 => 1473,  3259 => 1470,  3256 => 1469,  3250 => 1465,  3235 => 1463,  3231 => 1462,  3223 => 1457,  3220 => 1456,  3217 => 1455,  3215 => 1454,  3206 => 1448,  3201 => 1446,  3195 => 1442,  3188 => 1438,  3184 => 1436,  3182 => 1435,  3177 => 1434,  3170 => 1430,  3166 => 1428,  3164 => 1427,  3159 => 1425,  3154 => 1422,  3149 => 1419,  3132 => 1417,  3128 => 1416,  3122 => 1413,  3119 => 1412,  3116 => 1411,  3111 => 1408,  3096 => 1406,  3092 => 1405,  3086 => 1402,  3083 => 1401,  3081 => 1400,  3077 => 1398,  3072 => 1395,  3057 => 1393,  3053 => 1392,  3047 => 1389,  3044 => 1388,  3041 => 1387,  3035 => 1384,  3031 => 1383,  3028 => 1382,  3025 => 1381,  3020 => 1378,  3005 => 1376,  3001 => 1375,  2995 => 1372,  2992 => 1371,  2990 => 1370,  2986 => 1368,  2979 => 1364,  2973 => 1361,  2970 => 1360,  2967 => 1359,  2964 => 1358,  2957 => 1354,  2951 => 1351,  2944 => 1347,  2938 => 1344,  2935 => 1343,  2928 => 1339,  2920 => 1336,  2917 => 1335,  2914 => 1334,  2912 => 1333,  2905 => 1329,  2900 => 1327,  2893 => 1322,  2890 => 1321,  2879 => 1313,  2874 => 1311,  2868 => 1307,  2861 => 1303,  2857 => 1301,  2855 => 1300,  2850 => 1299,  2843 => 1295,  2839 => 1293,  2837 => 1292,  2832 => 1290,  2825 => 1285,  2823 => 1284,  2813 => 1277,  2801 => 1268,  2794 => 1263,  2782 => 1254,  2773 => 1248,  2764 => 1242,  2747 => 1236,  2742 => 1233,  2740 => 1232,  2737 => 1231,  2728 => 1225,  2724 => 1224,  2717 => 1220,  2712 => 1217,  2709 => 1216,  2701 => 1211,  2695 => 1208,  2690 => 1205,  2688 => 1204,  2685 => 1203,  2677 => 1198,  2671 => 1195,  2666 => 1192,  2664 => 1191,  2658 => 1187,  2647 => 1185,  2643 => 1184,  2635 => 1179,  2625 => 1176,  2615 => 1169,  2601 => 1158,  2589 => 1149,  2569 => 1132,  2562 => 1128,  2555 => 1124,  2552 => 1123,  2546 => 1119,  2539 => 1115,  2535 => 1113,  2533 => 1112,  2528 => 1111,  2521 => 1107,  2517 => 1105,  2515 => 1104,  2509 => 1101,  2506 => 1100,  2504 => 1099,  2499 => 1096,  2492 => 1092,  2488 => 1090,  2486 => 1089,  2483 => 1088,  2476 => 1084,  2472 => 1082,  2470 => 1081,  2463 => 1077,  2459 => 1076,  2456 => 1075,  2442 => 1068,  2431 => 1064,  2423 => 1059,  2419 => 1058,  2414 => 1055,  2412 => 1054,  2403 => 1048,  2399 => 1047,  2388 => 1039,  2383 => 1037,  2376 => 1032,  2359 => 1030,  2355 => 1029,  2350 => 1027,  2346 => 1026,  2341 => 1023,  2330 => 1021,  2326 => 1020,  2321 => 1018,  2317 => 1017,  2312 => 1014,  2295 => 1012,  2291 => 1011,  2286 => 1009,  2282 => 1008,  2273 => 1002,  2268 => 999,  2251 => 997,  2247 => 996,  2241 => 993,  2231 => 986,  2218 => 978,  2201 => 964,  2197 => 963,  2190 => 958,  2187 => 957,  2174 => 947,  2160 => 936,  2146 => 925,  2127 => 915,  2120 => 910,  2117 => 909,  2114 => 908,  2107 => 904,  2102 => 902,  2098 => 900,  2096 => 899,  2093 => 898,  2088 => 895,  2073 => 893,  2069 => 892,  2064 => 890,  2060 => 889,  2051 => 888,  2049 => 887,  2045 => 885,  2034 => 883,  2030 => 882,  2025 => 880,  2021 => 879,  2012 => 878,  2007 => 875,  1986 => 873,  1982 => 872,  1977 => 870,  1973 => 869,  1964 => 868,  1961 => 867,  1955 => 864,  1951 => 863,  1942 => 862,  1940 => 861,  1936 => 859,  1919 => 857,  1915 => 856,  1909 => 853,  1900 => 852,  1891 => 846,  1887 => 845,  1878 => 844,  1876 => 843,  1871 => 840,  1858 => 834,  1847 => 830,  1841 => 827,  1838 => 826,  1836 => 825,  1830 => 822,  1822 => 821,  1816 => 818,  1808 => 817,  1797 => 811,  1782 => 799,  1776 => 798,  1770 => 795,  1765 => 793,  1757 => 790,  1748 => 784,  1732 => 771,  1725 => 767,  1718 => 763,  1715 => 762,  1709 => 758,  1699 => 756,  1696 => 755,  1686 => 753,  1683 => 752,  1673 => 750,  1670 => 749,  1660 => 747,  1658 => 746,  1651 => 742,  1648 => 741,  1645 => 740,  1633 => 735,  1625 => 734,  1618 => 730,  1615 => 729,  1613 => 728,  1603 => 721,  1599 => 720,  1588 => 712,  1583 => 710,  1576 => 705,  1565 => 703,  1561 => 702,  1556 => 700,  1552 => 699,  1547 => 696,  1536 => 694,  1532 => 693,  1527 => 691,  1523 => 690,  1518 => 687,  1501 => 685,  1497 => 684,  1492 => 682,  1488 => 681,  1479 => 675,  1474 => 672,  1457 => 670,  1453 => 669,  1447 => 666,  1437 => 659,  1424 => 651,  1406 => 636,  1402 => 635,  1395 => 630,  1392 => 629,  1379 => 619,  1365 => 608,  1351 => 597,  1332 => 587,  1325 => 582,  1322 => 581,  1320 => 580,  1317 => 579,  1310 => 575,  1305 => 573,  1301 => 571,  1299 => 570,  1296 => 569,  1290 => 566,  1286 => 565,  1283 => 564,  1280 => 563,  1275 => 560,  1260 => 558,  1256 => 557,  1251 => 555,  1247 => 554,  1244 => 553,  1242 => 552,  1237 => 549,  1226 => 547,  1222 => 546,  1217 => 544,  1213 => 543,  1210 => 542,  1205 => 539,  1184 => 537,  1180 => 536,  1175 => 534,  1171 => 533,  1168 => 532,  1166 => 531,  1163 => 530,  1157 => 527,  1153 => 526,  1144 => 525,  1142 => 524,  1138 => 522,  1121 => 520,  1117 => 519,  1111 => 516,  1102 => 515,  1093 => 509,  1089 => 508,  1080 => 507,  1078 => 506,  1073 => 503,  1060 => 497,  1049 => 493,  1043 => 490,  1040 => 489,  1038 => 488,  1032 => 485,  1024 => 484,  1018 => 481,  1010 => 480,  999 => 474,  985 => 462,  979 => 460,  964 => 458,  959 => 457,  957 => 456,  951 => 455,  947 => 454,  941 => 453,  938 => 452,  935 => 451,  928 => 447,  925 => 446,  922 => 445,  920 => 444,  917 => 443,  912 => 441,  907 => 439,  903 => 437,  898 => 435,  893 => 434,  891 => 433,  885 => 432,  877 => 430,  867 => 423,  860 => 421,  856 => 420,  850 => 419,  844 => 416,  839 => 414,  831 => 411,  824 => 409,  820 => 407,  806 => 400,  799 => 396,  796 => 395,  793 => 394,  779 => 387,  772 => 383,  769 => 382,  767 => 381,  764 => 380,  762 => 379,  750 => 370,  738 => 361,  727 => 352,  715 => 343,  710 => 341,  701 => 340,  698 => 339,  693 => 336,  678 => 334,  674 => 333,  668 => 330,  659 => 329,  656 => 328,  651 => 325,  636 => 323,  632 => 322,  626 => 319,  617 => 318,  615 => 317,  612 => 316,  596 => 303,  588 => 298,  576 => 291,  564 => 282,  556 => 277,  544 => 270,  532 => 261,  528 => 259,  526 => 258,  514 => 249,  502 => 240,  493 => 233,  489 => 231,  485 => 230,  482 => 229,  480 => 228,  473 => 223,  467 => 219,  456 => 217,  452 => 216,  444 => 211,  441 => 210,  439 => 209,  428 => 201,  419 => 195,  412 => 190,  401 => 188,  397 => 187,  391 => 184,  386 => 181,  375 => 179,  371 => 178,  365 => 175,  356 => 169,  349 => 165,  345 => 164,  331 => 153,  326 => 151,  321 => 148,  314 => 144,  310 => 142,  308 => 141,  303 => 140,  296 => 136,  292 => 134,  290 => 133,  285 => 131,  280 => 128,  265 => 126,  261 => 125,  255 => 122,  244 => 114,  238 => 111,  229 => 105,  224 => 102,  213 => 100,  209 => 99,  200 => 93,  191 => 87,  186 => 85,  171 => 73,  159 => 64,  151 => 58,  138 => 48,  131 => 43,  120 => 41,  116 => 40,  110 => 37,  105 => 34,  94 => 32,  90 => 31,  84 => 28,  75 => 22,  68 => 18,  64 => 17,  54 => 10,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
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
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t{{'Sender information'|__}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
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
        <div class=\"type_2 receiver_information\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"kt-portlet__head\">
    \t\t\t\t<div class=\"kt-portlet__head-label\">
    \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t\t\t{{'Receiver information'|__}}
    \t\t\t\t\t</h3>
    \t\t\t\t</div>
    \t\t\t</div>
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
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t{{'Shipment Details'|__}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
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
{% endif %}

<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        {{'Choose your truck'|__}}
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label for=\"vehicle_category\">{{'Choose your vehicle category'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    </div>
                    <div class=\"form-group col-lg-8\">
                        <select class=\"form-control vehicle_category\"  name=\"vehicle_category\" id=\"vehicle_category\" >
                            <option data-hidden=\"true\"></option>
                            <option value=\"Category A\">Category A</option>
                        </select>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label for=\"vehicle_type\">{{'Choose your vehicle type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    </div>
                    <div class=\"form-group col-lg-12\" id=\"vehicle_type\">
                        <div id=\"vehicleTypeCarousel\" class=\"vehicleTypeCarousel\">
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-body mx-3 px-0 border-0\">
                                <div class=\"content-inner mx-3 text-center d-block\">
                                    <img alt=\"\" class=\"img-fluid mx-auto\" src=\"http://placehold.it/300?text=1\">
                                    <div class=\"vehicle-detail text-center mx-2 mx-lg-4 mt-4\">
                                        <h4 class=\"font-weight-bold\">Flat Bed</h4>
                                        <p class=\"mb-0\">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum
                                            Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
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
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map}}\"></script>
<script type=\"text/javascript\">
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
{% endput %}", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/order-create.htm", "");
    }
}
