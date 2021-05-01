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

/* F:\xampp\htdocs\ebilty-web/themes/spotlayer/partials/trackingwidget.htm */
class __TwigTemplate_5d48fbbd5e740606ba148bf3024ede56465414d2b88271225fe0146809246d3e extends \Twig\Template
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
        echo "<div class=\"kt-container \">
    <div class=\"kt-portlet\">
        <div class=\"kt-portlet__body\">
            <div class=\"kt-infobox\" id=\"tracking\">
                ";
        // line 5
        if (twig_test_empty(($context["search"] ?? null))) {
            // line 6
            echo "                <div class=\"kt-infobox__header kt-margin-b-0\">
                    <h4 class=\"kt-infobox__title\">";
            // line 7
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Type your full tracking number to get the tracking data"]);
            echo ".</h4>
                </div>
                ";
        }
        // line 10
        echo "                ";
        if (($context["order"] ?? null)) {
            // line 11
            echo "                    <div class=\"row\">
                        <div class=\"col-xl-9\">
                            <div class=\"kt-widget kt-widget--user-profile-3\">
                                <div class=\"kt-widget__top\">
                                    <div class=\"kt-widget__content\">
                                        <div class=\"kt-widget__head\">
                                            <a href=\"javascript:;\" class=\"kt-widget__username\">
                                                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 18), "prefix_order", [], "any", false, false, false, 18), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 18), "numbers_order", [], "any", false, false, false, 18), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 18), "html", null, true);
            echo "
                                            </a>
                                        </div>

                                        <div class=\"kt-widget__subhead\">
                                             ";
            // line 23
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 23), "type" => "CODABAR"]]);
            echo "

                                        </div>

                                        <div class=\"kt-widget__info\">
                                            <div class=\"example-preview\">
                                                <table class=\"table\">
                                                    <thead class=\"thead-dark\">
                                                        <tr>
                                                            <th scope=\"col\" colspan=\"2\">";
            // line 32
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SENDER / ORIGIN"]);
            echo "</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                        <path d=\"M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z\" id=\"Rectangle-161-Copy\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                        <path d=\"M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z\" id=\"Combined-Shape\" fill=\"#000000\"></path>
                                                                    </g>
                                                                </svg>
                                                                <b>";
            // line 45
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SENDER"]);
            echo ":</b> 
                                                                 ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_name", [], "any", false, false, false, 46)) {
                // line 47
                echo "                                                                    ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_name", [], "any", false, false, false, 47)), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 49
                echo "                                                                    ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49)), "html", null, true);
                echo "
                                                                ";
            }
            // line 51
            echo "                                                            </td>
                                                            <td>
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                        <path d=\"M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                        <polygon id=\"Combined-Shape-Copy\" fill=\"#000000\" points=\"14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912\"></polygon>
                                                                    </g>
                                                                </svg>
                                                                <b>";
            // line 60
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SHIPPING DATE"]);
            echo ":</b> 
                                                                ";
            // line 61
            if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
                // line 62
                echo "                                                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 62)), "html", null, true);
                echo "
                                                                ";
            } else {
                // line 64
                echo "                                                                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 64)), "html", null, true);
                echo "
                                                                ";
            }
            // line 66
            echo "                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class=\"example-preview\">
                                                <table class=\"table\">
                                                    <thead class=\"thead-dark\">
                                                        <tr>
                                                            <th scope=\"col\" colspan=\"2\">";
            // line 75
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["RECIPIENT / DESTINATION"]);
            echo "</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_name", [], "any", false, false, false, 81) || twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 81))) {
                // line 82
                echo "                                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                            <path d=\"M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z\" id=\"Rectangle-161-Copy\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                            <path d=\"M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z\" id=\"Combined-Shape\" fill=\"#000000\"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <b>";
                // line 89
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["RECIPIENT"]);
                echo ":</b> 
                                                                    ";
                // line 90
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_name", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "                                                                        ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_name", [], "any", false, false, false, 91)), "html", null, true);
                    echo "
                                                                    ";
                } else {
                    // line 93
                    echo "                                                                        ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93)), "html", null, true);
                    echo "
                                                                    ";
                }
                // line 95
                echo "                                                                ";
            }
            // line 96
            echo "                                                            </td>
                                                            <td>
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                        <path d=\"M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                        <polygon id=\"Combined-Shape-Copy\" fill=\"#000000\" points=\"14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912\"></polygon>
                                                                    </g>
                                                                </svg>
                                                                <b>";
            // line 105
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ESTIMATED DELIVERY DATE"]);
            echo ":</b> 
                                                                ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_date", [], "any", false, false, false, 106)) {
                // line 107
                echo "                                                                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_date", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 107)), "html", null, true);
                echo "
                                                                    ";
                // line 108
                if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "postponed", [], "any", false, false, false, 108) == 1) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 108), [0 => 1, 1 => 3, 2 => 5, 3 => 6, 4 => 7, 5 => 10, 6 => 11]))) {
                    echo " | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["POSTPONED"]);
                    echo "</span>";
                }
                // line 109
                echo "                                                                ";
            } else {
                // line 110
                echo "                                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "                                                                        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 111), (("+" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 111), "count", [], "any", false, false, false, 111)) . " hours")), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 111)), "html", null, true);
                    echo "
                                                                    ";
                }
                // line 113
                echo "                                                                ";
            }
            // line 114
            echo "                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-infobox__body col-xl-3\">
                            <div class=\"kt-timeline-v1 kt-timeline-v1--justified\">
                                <div class=\"kt-timeline-v1__items\">
                                    <div class=\"kt-timeline-v1__marker\"></div>

                                    ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activities", [], "any", false, false, false, 129));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 130
                echo "                                        <div class=\"kt-timeline-v1__item ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 130) == 1)) {
                    echo "kt-timeline-v1__item--first ";
                }
                echo "\">
                                            <div class=\"kt-timeline-v1__item-circle\">
                                                <div class=\"kt-bg-danger\"></div>
                                            </div>

                                            <span class=\"kt-timeline-v1__item-time kt-font-brand\">
                                                ";
                // line 136
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 136), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 136)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 136), "h:i"), "html", null, true);
                echo " <span>";
                if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 136)])) {
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 136), "a")]);
                }
                echo "</span>
                                            </span>

                                            <div class=\"kt-timeline-v1__item-content\">
                                                <div class=\"kt-timeline-v1__item-title\">
                                                    <strong class=\"kt-font-boldest\">";
                // line 141
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["User"]);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
                echo "
                                                </div>
                                                <div class=\"kt-timeline-v1__item-body\">
                                                    <p>
                                                        ";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["activity"], "other", [], "any", false, false, false, 145)) {
                    // line 146
                    echo "                                                            ";
                    $context["text"] = ("activity_" . twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 146));
                    // line 147
                    echo "                                                            ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["text"] ?? null)]);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "other", [], "any", false, false, false, 147), "html", null, true);
                    echo "
                                                        ";
                } else {
                    // line 149
                    echo "                                                            ";
                    $context["text"] = ("activity_" . twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 149));
                    // line 150
                    echo "                                                            ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["text"] ?? null)]);
                    echo "
                                                        ";
                }
                // line 152
                echo "                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } elseif (        // line 161
($context["search"] ?? null)) {
            // line 162
            echo "                <div class=\"kt-infobox__header kt-margin-b-0\">
                    <h4 class=\"kt-infobox__title\">";
            // line 163
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please check the tracking number again and type the full number with its prefix correctly and try again"]);
            echo ".</h4>
                </div>
                ";
        }
        // line 166
        echo "            </div>
        </div>
    </div>
</div>

";
        // line 171
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 172
        echo "<style>
.example-preview {
    border: 4px solid #f3f6f9;
    margin: 2rem 0;
    padding: 1.75rem 1.5rem;
    border-top-left-radius: .42rem;
    border-top-right-radius: .42rem;
    width: 100%;
    display: block;
}
.example-preview table tbody tr td b {
    font-family: tahoma;
}
</style>
";
        // line 171
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/trackingwidget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 171,  381 => 172,  379 => 171,  372 => 166,  366 => 163,  363 => 162,  361 => 161,  355 => 157,  337 => 152,  331 => 150,  328 => 149,  320 => 147,  317 => 146,  315 => 145,  306 => 141,  292 => 136,  280 => 130,  263 => 129,  246 => 114,  243 => 113,  237 => 111,  234 => 110,  231 => 109,  225 => 108,  220 => 107,  218 => 106,  214 => 105,  203 => 96,  200 => 95,  194 => 93,  188 => 91,  186 => 90,  182 => 89,  173 => 82,  171 => 81,  162 => 75,  151 => 66,  145 => 64,  139 => 62,  137 => 61,  133 => 60,  122 => 51,  116 => 49,  110 => 47,  108 => 46,  104 => 45,  88 => 32,  76 => 23,  66 => 18,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-container \">
    <div class=\"kt-portlet\">
        <div class=\"kt-portlet__body\">
            <div class=\"kt-infobox\" id=\"tracking\">
                {% if search is empty %}
                <div class=\"kt-infobox__header kt-margin-b-0\">
                    <h4 class=\"kt-infobox__title\">{{\"Type your full tracking number to get the tracking data\"|__}}.</h4>
                </div>
                {% endif %}
                {% if order %}
                    <div class=\"row\">
                        <div class=\"col-xl-9\">
                            <div class=\"kt-widget kt-widget--user-profile-3\">
                                <div class=\"kt-widget__top\">
                                    <div class=\"kt-widget__content\">
                                        <div class=\"kt-widget__head\">
                                            <a href=\"javascript:;\" class=\"kt-widget__username\">
                                                {{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}{{order.number}}
                                            </a>
                                        </div>

                                        <div class=\"kt-widget__subhead\">
                                             {{ barcodeHTML({data: order.barcode, type: 'CODABAR'}) }}

                                        </div>

                                        <div class=\"kt-widget__info\">
                                            <div class=\"example-preview\">
                                                <table class=\"table\">
                                                    <thead class=\"thead-dark\">
                                                        <tr>
                                                            <th scope=\"col\" colspan=\"2\">{{'SENDER / ORIGIN'|__}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                        <path d=\"M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z\" id=\"Rectangle-161-Copy\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                        <path d=\"M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z\" id=\"Combined-Shape\" fill=\"#000000\"></path>
                                                                    </g>
                                                                </svg>
                                                                <b>{{'SENDER'|__}}:</b> 
                                                                 {% if order.sender_name %}
                                                                    {{order.sender_name|capitalize}}
                                                                {% else%}
                                                                    {{order.sender.name|capitalize}}
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                        <path d=\"M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                        <polygon id=\"Combined-Shape-Copy\" fill=\"#000000\" points=\"14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912\"></polygon>
                                                                    </g>
                                                                </svg>
                                                                <b>{{'SHIPPING DATE'|__}}:</b> 
                                                                {% if addShipmentForm == \"add_form_normal\" %}
                                                                {{order.created_at|date(settings.dateformat)}}
                                                                {% else %}
                                                                {{order.ship_date|date(settings.dateformat)}}
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class=\"example-preview\">
                                                <table class=\"table\">
                                                    <thead class=\"thead-dark\">
                                                        <tr>
                                                            <th scope=\"col\" colspan=\"2\">{{'RECIPIENT / DESTINATION'|__}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                {% if order.receiver_name or order.receiver %}
                                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                            <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                            <path d=\"M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z\" id=\"Rectangle-161-Copy\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                            <path d=\"M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z\" id=\"Combined-Shape\" fill=\"#000000\"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <b>{{'RECIPIENT'|__}}:</b> 
                                                                    {% if order.receiver_name %}
                                                                        {{order.receiver_name|capitalize}}
                                                                    {% else%}
                                                                        {{order.receiver.name|capitalize}}
                                                                    {% endif %}
                                                                {% endif %}
                                                            </td>
                                                            <td>
                                                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon\">
                                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                                        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
                                                                        <path d=\"M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"></path>
                                                                        <polygon id=\"Combined-Shape-Copy\" fill=\"#000000\" points=\"14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912\"></polygon>
                                                                    </g>
                                                                </svg>
                                                                <b>{{'ESTIMATED DELIVERY DATE'|__}}:</b> 
                                                                {% if order.delivery_date %}
                                                                    {{order.delivery_date|date(settings.dateformat)}}
                                                                    {% if order.postponed == 1 and order.requested in [1,3,5,6,7,10,11] %} | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">{{'POSTPONED'|__}}</span>{% endif %}
                                                                {% else %}
                                                                    {%if order.deliverytime %}
                                                                        {{order.ship_date|date_modify(\"+\"~order.deliverytime.count~\" hours\")|date(settings.dateformat)}}
                                                                    {% endif %}
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-infobox__body col-xl-3\">
                            <div class=\"kt-timeline-v1 kt-timeline-v1--justified\">
                                <div class=\"kt-timeline-v1__items\">
                                    <div class=\"kt-timeline-v1__marker\"></div>

                                    {% for activity in order.activities %}
                                        <div class=\"kt-timeline-v1__item {% if loop.index == 1 %}kt-timeline-v1__item--first {% endif %}\">
                                            <div class=\"kt-timeline-v1__item-circle\">
                                                <div class=\"kt-bg-danger\"></div>
                                            </div>

                                            <span class=\"kt-timeline-v1__item-time kt-font-brand\">
                                                {{activity.created_at|date(settings.dateformat)}} {{activity.created_at|date('h:i')}} <span>{% if activity.created_at|__ %}{{activity.created_at|date('a')|__}}{% endif %}</span>
                                            </span>

                                            <div class=\"kt-timeline-v1__item-content\">
                                                <div class=\"kt-timeline-v1__item-title\">
                                                    <strong class=\"kt-font-boldest\">{{'User'|__}}:</strong> {{activity.user.name}}
                                                </div>
                                                <div class=\"kt-timeline-v1__item-body\">
                                                    <p>
                                                        {% if activity.other %}
                                                            {% set text = 'activity_'~activity.description %}
                                                            {{text|__}}: {{activity.other}}
                                                        {% else %}
                                                            {% set text = 'activity_'~activity.description %}
                                                            {{text|__}}
                                                        {% endif %}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% elseif search %}
                <div class=\"kt-infobox__header kt-margin-b-0\">
                    <h4 class=\"kt-infobox__title\">{{\"Please check the tracking number again and type the full number with its prefix correctly and try again\"|__}}.</h4>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

{% put styles %}
<style>
.example-preview {
    border: 4px solid #f3f6f9;
    margin: 2rem 0;
    padding: 1.75rem 1.5rem;
    border-top-left-radius: .42rem;
    border-top-right-radius: .42rem;
    width: 100%;
    display: block;
}
.example-preview table tbody tr td b {
    font-family: tahoma;
}
</style>
{% endput %}", "F:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/partials/trackingwidget.htm", "");
    }
}
