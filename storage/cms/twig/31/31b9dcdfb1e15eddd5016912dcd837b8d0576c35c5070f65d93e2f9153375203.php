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

/* C:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/update-vehicle.htm */
class __TwigTemplate_651d8399a4d9ba0456c950e84ba115eba79d9c58b0a614be8d39a48fc50e2acc extends \Twig\Template
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
                                    <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "\"  required>
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
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">Vehicle Name&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group\">
                        <input type=\"text\" class=\"form-control \" name=\"vehicle_name\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "\"  required>
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
        // line 65
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                    <span class=\"kt-margin-left-10\">";
        // line 66
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo url("dashboard/settings");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "child_of_page", [], "any", false, false, false, 66), "html", null, true);
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
                </div>
            </div>
        </div>
        ";
        // line 70
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    </div>
</div>
";
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 74
        echo "<style>
    .accordion .card-icon{
        width: 15px;
        margin: 5px;
    }
</style>
";
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 82
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
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/update-vehicle.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 81,  168 => 82,  166 => 81,  164 => 73,  156 => 74,  154 => 73,  148 => 70,  135 => 66,  131 => 65,  117 => 54,  101 => 41,  94 => 37,  89 => 35,  72 => 21,  63 => 15,  58 => 12,  54 => 11,  46 => 5,  42 => 4,  37 => 1,);
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
                                    <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{{vehicle.name}}\"  required>
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
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">Vehicle Name&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6 input-group\">
                        <input type=\"text\" class=\"form-control \" name=\"vehicle_name\" value=\"{{vehicle.name}}\"  required>
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
{% endput %}", "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/update-vehicle.htm", "");
    }
}
