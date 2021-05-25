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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/pages/dashboard/create-vehcile.htm */
class __TwigTemplate_43cdf246945f2ea7f4fb5c8753a4c77471b0836fa353722f4e5f8c487971b9f7 extends \Twig\Template
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
        echo "<div class=\"kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-inbox\" id=\"kt_inbox\">

    <!-- begin:: Aside -->
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("settingsmenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    <!-- end:: Aside -->
    <!--Begin:: Inbox List-->
    <div class=\"kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown\" id=\"kt_inbox_list\">
        <div class=\"kt-portlet__head\">
            <div class=\"kt-portlet__head-label\">
                <h3 class=\"kt-portlet__head-title\">
                    ";
        // line 11
        if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11)])) {
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11)]);
        }
        // line 12
        echo "                </h3>
            </div>
        </div>
        ";
        // line 15
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["id" => "kt_form", "flash" => true, "class" => "kt_form"]]);
        echo "
        <div class=\"kt-portlet__body kt-portlet__body--fit-x kt-padding-t-0 kt-padding-b-0\">
            <div class=\"form-group form-group-last kt-hide\">
                <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                    <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                    <div class=\"alert-text\">
                        ";
        // line 21
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
            <div class=\"accordion  accordion-toggle-arrow kt-margin-b-40\" id=\"accordion\">
                <div class=\"card\">
                    <div class=\"collapse \" aria-labelledby=\"headingOne\" data-parent=\"\">
                        <div class=\"card-body\">
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"col-lg-9 col-xl-6 input-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"name\"  required>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
        echo "</label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <textarea class=\"form-control\" name=\"description\"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"kt-padding-l-20 kt-padding-r-20\">
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group\">
                        <input type=\"text\" class=\"form-control\" name=\"name\"  required>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
        echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <textarea class=\"form-control\" name=\"description\"></textarea>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Capacity"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group\">
                        <input type=\"text\" class=\"form-control \" name=\"capacity\"  required>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thumbnail"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group \">
                        <input type=\"file\" class=\"form-control btn btn-warning\" id=\"thumbnail\" name=\"thumbnail\"  required>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
        // line 77
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" data-live-search=\"true\" name=\"categories_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
            // line 82
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "title", [], "any", false, false, false, 82), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"kt-portlet__foot\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                </div>
                <div class=\"col-lg-4\">
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                    <span class=\"kt-margin-left-10\">";
        // line 95
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo url("dashboard/settings");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 95), "child_of_page", [], "any", false, false, false, 95), "html", null, true);
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
                </div>
            </div>
        </div>
        ";
        // line 99
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>
</div>
";
        // line 102
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 103
        echo "<style>
    .accordion .card-icon{
        width: 15px;
        margin: 5px;
    }
</style>
";
        // line 102
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 110
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 111
        echo "<script type=\"text/javascript\">
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        // define validation rules
        /*
        rules: {
            digits: {
                required: true,
                digits: true,
                creditcard: true,
                phoneUS: true,
                required: true,
                minlength: 10,
                maxlength: 100
            },
        },
        */

        //display error alert on form submit
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        },

        submitHandler: function (form) {
            form[0].submit(); // submit the form
        }
    });
</script>
";
        // line 110
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/dashboard/create-vehcile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 110,  220 => 111,  218 => 110,  216 => 102,  208 => 103,  206 => 102,  200 => 99,  187 => 95,  183 => 94,  171 => 84,  160 => 82,  156 => 81,  149 => 77,  140 => 71,  131 => 65,  122 => 59,  113 => 53,  98 => 41,  89 => 35,  72 => 21,  63 => 15,  58 => 12,  54 => 11,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-inbox\" id=\"kt_inbox\">

    <!-- begin:: Aside -->
    {% partial 'settingsmenu' %}
    <!-- end:: Aside -->
    <!--Begin:: Inbox List-->
    <div class=\"kt-grid__item kt-grid__item--fluid    kt-portlet    kt-inbox__list kt-inbox__list--shown\" id=\"kt_inbox_list\">
        <div class=\"kt-portlet__head\">
            <div class=\"kt-portlet__head-label\">
                <h3 class=\"kt-portlet__head-title\">
                    {% if this.page.title|__ %}{{this.page.title|__}}{% endif %}
                </h3>
            </div>
        </div>
        {{ form_ajax('onSave', { id: 'kt_form', flash: true, class:'kt_form' }) }}
        <div class=\"kt-portlet__body kt-portlet__body--fit-x kt-padding-t-0 kt-padding-b-0\">
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
            <div class=\"accordion  accordion-toggle-arrow kt-margin-b-40\" id=\"accordion\">
                <div class=\"card\">
                    <div class=\"collapse \" aria-labelledby=\"headingOne\" data-parent=\"\">
                        <div class=\"card-body\">
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"col-lg-9 col-xl-6 input-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"name\"  required>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Description'|__}}</label>
                                <div class=\"col-lg-9 col-xl-6\">
                                    <textarea class=\"form-control\" name=\"description\"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=\"kt-padding-l-20 kt-padding-r-20\">
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group\">
                        <input type=\"text\" class=\"form-control\" name=\"name\"  required>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Description'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <textarea class=\"form-control\" name=\"description\"></textarea>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Capacity'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group\">
                        <input type=\"text\" class=\"form-control \" name=\"capacity\"  required>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Thumbnail'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group \">
                        <input type=\"file\" class=\"form-control btn btn-warning\" id=\"thumbnail\" name=\"thumbnail\"  required>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Category'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" data-live-search=\"true\" name=\"categories_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for mode in modes %}
                            <option value=\"{{mode.id}}\">{{mode.title}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"kt-portlet__foot\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                </div>
                <div class=\"col-lg-4\">
                    <button type=\"submit\" class=\"btn btn-primary\">{{'Save'|__}}</button>
                    <span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{url('dashboard/settings')}}/{{this.page.child_of_page}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
                </div>
            </div>
        </div>
        {{ form_close() }}
    </div>
</div>
{% put styles %}
<style>
    .accordion .card-icon{
        width: 15px;
        margin: 5px;
    }
</style>
{% endput %}
{% put scripts %}
<script type=\"text/javascript\">
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        // define validation rules
        /*
        rules: {
            digits: {
                required: true,
                digits: true,
                creditcard: true,
                phoneUS: true,
                required: true,
                minlength: 10,
                maxlength: 100
            },
        },
        */

        //display error alert on form submit
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        },

        submitHandler: function (form) {
            form[0].submit(); // submit the form
        }
    });
</script>
{% endput %}", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/dashboard/create-vehcile.htm", "");
    }
}
