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

/* C:\xampp\htdocs\ebilty-web/themes/spotlayer/pages/dashboard/order-print.htm */
class __TwigTemplate_1f38d38eaaf658319a2aec4df56631085d73e24a9416c345bc5f509fe829521a extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1), "type", [], "any", false, false, false, 1) == "shipment")) {
            // line 2
            echo "    <div class=\"page-wrap\" style=\"page-break-after: always;\">
        <table width=\"100%\">
            <tr>
                <td style=\"border: 0;  text-align: left\" width=\"18%\">
        \t\t\t<div id=\"logo\" style=\"text-align:left\">
        \t\t\t\t<img src='";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 7)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 7), "path", [], "any", false, false, false, 7), "html", null, true);
            } else {
                echo "./admin/media/logos/logo.svg";
            }
            echo "' style=\"max-height:70px\">
                    </div>
                </td>
    \t\t\t<td style=\"border: 0;  text-align: center\" width=\"56%\">
    \t\t\t\t";
            // line 11
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11) != "")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11) != "-"))) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 11), "tax_number", [], "any", false, false, false, 11), "html", null, true);
                echo " </br>";
            }
            // line 12
            echo "    \t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "company_phone", [], "any", false, false, false, 12)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 12), "company_phone", [], "any", false, false, false, 12), "html", null, true);
                echo " </br>";
            }
            // line 13
            echo "    \t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 13), "primary_email", [], "any", false, false, false, 13)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 13), "primary_email", [], "any", false, false, false, 13), "html", null, true);
                echo " </br>";
            }
            // line 14
            echo "    \t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 14), "address", [], "any", false, false, false, 14)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 14), "address", [], "any", false, false, false, 14), "html", null, true);
            }
            // line 15
            echo "                </td>
                <td style=\"border: 0;  text-align: center\" width=\"48%\" id=\"barcodeHTML\">
                    </br>
                    ";
            // line 18
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 18), "type" => "CODABAR", "width" => "1"]]);
            echo "
                    <div class=\"clearfix\"></div>
                    <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 20), "prefix_order", [], "any", false, false, false, 20), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
    \t\t\t</td>
            </tr>
        </table>
        <hr>
        </br>
        <div id=\"customer\">

            <table id=\"meta\">
                <tr>
                    <td rowspan=\"5\" style=\"border: 1px solid white; border-";
            // line 30
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "left";
            } else {
                echo "right";
            }
            echo ": 1px solid black;text-align: ";
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "\" width=\"62%\">
                    <strong>";
            // line 31
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Bill to"]);
            echo "</strong> </br>
    \t\t\t\t<table id=\"items\">
              <b>
                ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 34)) {
                // line 35
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "
                ";
            } else {
                // line 37
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_name", [], "any", false, false, false, 37), "html", null, true);
                echo "
                ";
            }
            // line 39
            echo "              </b></br> </br>
              ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 40), "area", [], "any", false, false, false, 40)) {
                // line 41
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 41), "area", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
                echo " - 
              ";
            } else {
                // line 43
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_area", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                echo " -   
              ";
            }
            // line 45
            echo "
              ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 46), "zipcode", [], "any", false, false, false, 46)) {
                // line 47
                echo "                ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 47), "zipcode", [], "any", false, false, false, 47), "html", null, true);
                echo " </br>
              ";
            }
            // line 49
            echo "
              ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 50), "thecity", [], "any", false, false, false, 50)) {
                // line 51
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 51), "thecity", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                echo " | 
              ";
            } else {
                // line 53
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiverCity", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
                echo " |   
              ";
            }
            // line 55
            echo "
              ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 56), "thestate", [], "any", false, false, false, 56)) {
                // line 57
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 57), "thestate", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
                echo " | 
              ";
            }
            // line 59
            echo "
              ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 60), "thecountry", [], "any", false, false, false, 60)) {
                // line 61
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 61), "thecountry", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                echo " 
              ";
            }
            // line 62
            echo "</br>

              ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 64)) {
                // line 65
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 65), "mobile", [], "any", false, false, false, 65), "html", null, true);
                echo " </br>
              ";
            } else {
                // line 67
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_mobile", [], "any", false, false, false, 67), "html", null, true);
                echo " </br>
              ";
            }
            // line 69
            echo "              

              ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 71), "email", [], "any", false, false, false, 71), "html", null, true);
            echo "
            </table>
    \t\t\t\t</td>
                </tr>
                ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 75)) {
                // line 76
                echo "                    <tr>
        \t\t\t\t<td class=\"meta-head\"><p style=\"color:white;\">";
                // line 77
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                echo "</p></td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 81
            echo "                <tr>
                    <td class=\"meta-head\"><p style=\"color:white;\">";
            // line 82
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping date"]);
            echo "</p></td>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 83), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 83)), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 83), "h:i a"), "html", null, true);
            echo "</td>
                    <!-- ";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 84), "h:i a"), "html", null, true);
            echo " -->
                </tr>
                <tr>
                    <td class=\"meta-head\"><p style=\"color:white;\">";
            // line 87
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Invoice No"]);
            echo ".</p></td>
                    <td><b>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 88), "prefix_order", [], "any", false, false, false, 88), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 88), "numbers_order", [], "any", false, false, false, 88), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 88), "html", null, true);
            echo "</b></td>
                </tr>
            </table>
        </div>
        <table id=\"items\">
            <tr>
                <th align=\"center\"><p style=\"color:white;\">";
            // line 94
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo "</p></th>
                <th width=\"48%\"><p style=\"color:white;\">";
            // line 95
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
            echo "</p></th>
    \t\t\t<th align=\"center\"><p style=\"color:white;\">";
            // line 96
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
            echo "</p></th>
                <th ";
            // line 97
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo "><p style=\"color:white;\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
            echo "</p></th>
            </tr>
            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "                <tr>
                    <th align=\"center\" style=\"background:#fff\"><p>";
                // line 101
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101)), "html", null, true);
                echo "</p></th>
                    <th width=\"48%\" style=\"background:#fff\"><p>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 102), "html", null, true);
                echo "</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 103), "html", null, true);
                echo "</p></th>
                    <th ";
                // line 104
                if ((($context["currentLang"] ?? null) == "ar")) {
                    echo "align=\"left\"";
                } else {
                    echo "align=\"right\"";
                }
                echo " style=\"background:#fff\"><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 104), "html", null, true);
                echo "</p></th>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "
            ";
            // line 108
            $context["total"] = 0;
            // line 109
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 109) == 1)) {
                // line 110
                echo "                ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 110));
                // line 111
                echo "            ";
            }
            // line 112
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 112) == 1)) {
                // line 113
                echo "                ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 113));
                // line 114
                echo "            ";
            }
            // line 115
            echo "             ";
            $context["sub_total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 115));
            // line 116
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 116)) {
                echo " <!-- last it was order.payment_type == 1 -->
              ";
                // line 117
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 117), "type", [], "any", false, false, false, 117) == 1)) {
                    // line 118
                    echo "                ";
                    $context["total"] = (($context["total"] ?? null) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 118) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 118) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 118))) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 118) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 118))));
                    // line 119
                    echo "              ";
                } else {
                    // line 120
                    echo "                ";
                    $context["total"] = (($context["total"] ?? null) + (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 120) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_sgst", [], "any", false, false, false, 120) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 120))) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_cgst", [], "any", false, false, false, 120) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 120))) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 120) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 120))));
                    // line 121
                    echo "              ";
                }
                echo "  
            ";
            }
            // line 123
            echo "

           
    \t\t<tr>
    \t\t\t<td ";
            // line 127
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sub Total"]);
            echo "</td>
    \t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"><span class=\"price\"> ";
            // line 128
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["sub_total"] ?? null)]);
            echo " </span> </div></td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td  ";
            // line 131
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TAX"]);
            echo " +</td>
          ";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 132), "type", [], "any", false, false, false, 132) == 1)) {
                // line 133
                echo "    \t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> ";
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 133) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 133))]);
                echo "</div></td>
          ";
            } else {
                // line 135
                echo "          <td  align=\"right\" class=\"total-value\"><div id=\"total\"> ";
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [(((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_sgst", [], "any", false, false, false, 135) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 135)) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_cgst", [], "any", false, false, false, 135) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 135)))]);
                echo " </div></td>
          ";
            }
            // line 136
            echo "  
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td  ";
            // line 139
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
            echo " +</td>
    \t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> ";
            // line 140
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 140) / 100) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 140))]);
            echo " </div></td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td ";
            // line 143
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "align=\"left\"";
            } else {
                echo "align=\"right\"";
            }
            echo " colspan=\"3\" class=\"total-line balance\"><p style=\"color:white;\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Grand total"]);
            echo " </p></td>


    \t\t\t<td align=\"right\" class=\"total-value balance\"><div class=\"due\"> <p style=\"color:white;\"><b>";
            // line 146
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total"] ?? null)]);
            echo "</b></p></div></td>
    \t\t</tr>
        </table>

        <!--    end related transactions -->

            <div id=\"terms\">
                <h5>";
            // line 153
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TERMS"]);
            echo "</h5>
    \t\t\t <table id=\"related_transactions\" style=\"width: 100%\">
    \t\t\t\t<p align=\"justify\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 155), "terms", [], "any", false, false, false, 155), "html", null, true);
            echo "</p>
    \t\t\t</table>
    \t\t\t</br></br></br></br>
    \t\t\t<table id=\"signing\">
    \t\t\t\t<tr class=\"noBorder\">
    \t\t\t\t\t<td align=\"center\"><h4></h4></td>
    \t\t\t\t\t<td align=\"center\"><h4></h4></td>
    \t\t\t\t</tr>
    \t\t\t\t<tr class=\"noBorder\">
    \t\t\t\t\t<td align=\"center\">";
            // line 164
            if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 164), "signing_company", [], "any", false, false, false, 164))])) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 164), "signing_company", [], "any", false, false, false, 164))]);
            }
            echo "</td>
    \t\t\t\t\t<td align=\"center\">";
            // line 165
            if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 165), "signing_customer", [], "any", false, false, false, 165))])) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "invoice", [], "any", false, false, false, 165), "signing_customer", [], "any", false, false, false, 165))]);
            }
            echo "</td>
    \t\t\t\t</tr>
    \t\t\t</table>
            </div>
    </div>

    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 171
($context["this"] ?? null), "param", [], "any", false, false, false, 171), "type", [], "any", false, false, false, 171) == "label")) {
            // line 172
            echo "        ";
            if ((($context["printTemplate"] ?? null) == "print_template_advance")) {
                // line 173
                echo "
          ";
                // line 174
                if (($context["orders"] ?? null)) {
                    // line 175
                    echo "
            ";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                        // line 177
                        echo "              <table class=\"page-wrap\">
                <tr>
                  <table width=\"100%\">
                      <tr>
                          <td style=\"border: 0;  text-align: center;\" width=\"100%\">
                              <h2>";
                        // line 182
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Declaration"]);
                        echo "</h2>
                          </td>
                      </tr>
                  </table>
                </tr>
                <tr>
                  <div class=\"shipment\">
                      <div class=\"container l1\">
                          <div class=\"row\">
                              <div class=\"col-lg-4\" id=\"logo\">
                                      <img src='";
                        // line 192
                        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 192)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 192), "path", [], "any", false, false, false, 192), "html", null, true);
                        } else {
                            echo "./admin/media/logos/logo.svg";
                        }
                        echo "'      />
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"barcode col-sm-4 \">
                                  <p>";
                        // line 197
                        echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, $context["order"], "barcode", [], "any", false, false, false, 197), "type" => "CODABAR", "width" => 3]]);
                        echo "</p>
                              </div>
                              <div class=\"col-sm-offset-4 col-sm-4 crbt\">
                                  <span>#";
                        // line 200
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CRBT delivery"]);
                        echo "</span>
                              </div>
                          </div>
                      </div>
                      <div class=\"container l2\">
                          <div class=\"row\">
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">";
                        // line 207
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping"]);
                        echo "#: </span><span>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "number", [], "any", false, false, false, 207), "html", null, true);
                        echo "</span>
                              </div>
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">";
                        // line 210
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                        echo ": </span>
                                  <span>
                                      ";
                        // line 212
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "sender", [], "any", false, false, false, 212)) {
                            // line 213
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "sender", [], "any", false, false, false, 213), "name", [], "any", false, false, false, 213), "html", null, true);
                            echo "
                                      ";
                        } else {
                            // line 215
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "sender_name", [], "any", false, false, false, 215), "html", null, true);
                            echo "
                                      ";
                        }
                        // line 216
                        echo "  
                                    </span>
                              </div>
                              <div class=\"col-sm-4 td last\">
                                  <span class=\"spTitle\">";
                        // line 220
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Recipient"]);
                        echo ": </span>
                                  <span>
                                      ";
                        // line 222
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "receiver", [], "any", false, false, false, 222)) {
                            // line 223
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "receiver", [], "any", false, false, false, 223), "name", [], "any", false, false, false, 223), "html", null, true);
                            echo "
                                      ";
                        } else {
                            // line 225
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "receiver_name", [], "any", false, false, false, 225), "html", null, true);
                            echo "
                                      ";
                        }
                        // line 227
                        echo "                                        
                                    </span>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">";
                        // line 233
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
                        echo ": ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ship_date", [], "any", false, false, false, 233), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 233)), "html", null, true);
                        echo "  ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "ship_date", [], "any", false, false, false, 233), "h:i a"), "html", null, true);
                        echo "</span><span></span>
                              </div>
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">";
                        // line 236
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
                        echo ": </span>
                                  <span>
                                      ";
                        // line 238
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "sender", [], "any", false, false, false, 238)) {
                            // line 239
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "sender", [], "any", false, false, false, 239), "mobile", [], "any", false, false, false, 239), "html", null, true);
                            echo "
                                      ";
                        } else {
                            // line 241
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "sender_mobile", [], "any", false, false, false, 241), "html", null, true);
                            echo "
                                      ";
                        }
                        // line 243
                        echo "                                  </span>
                              </div>
                              <div class=\"col-sm-4 td last\">
                                  <span class=\"spTitle\">";
                        // line 246
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                        echo ": </span>
                                  <span>
                                    ";
                        // line 248
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "receiver_address", [], "any", false, false, false, 248)) {
                            // line 249
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "receiver_address", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 251
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "sender_addr", [], "any", false, false, false, 251), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 253
                        echo "                                    
                                  </span>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">";
                        // line 259
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["barcode"]);
                        echo "</span><span>";
                        echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, $context["order"], "barcode", [], "any", false, false, false, 259), "type" => "CODABAR"]]);
                        echo "</span>
                              </div>
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">";
                        // line 262
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                        echo ": </span>
                                  <span style=\"font-size:20px\">
                                    ";
                        // line 264
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "receiver", [], "any", false, false, false, 264)) {
                            // line 265
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "receiver", [], "any", false, false, false, 265), "email", [], "any", false, false, false, 265), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 267
                            echo "                                        ";
                            echo " - ";
                            echo "
                                    ";
                        }
                        // line 269
                        echo "                                    
                                  </span>
                              </div>
                              <div class=\"col-sm-4 td last\">
                                  <span class=\"spTitle\">";
                        // line 273
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                        echo ": </span>
                                  <span>
                                    ";
                        // line 275
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "receiver_address", [], "any", false, false, false, 275)) {
                            // line 276
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "receiver_address", [], "any", false, false, false, 276), "thecity", [], "any", false, false, false, 276), "name", [], "any", false, false, false, 276), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 278
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "receiverCity", [], "any", false, false, false, 278), "name", [], "any", false, false, false, 278), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 280
                        echo "                                    
                                  </span>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-offset-8 col-sm-4 last lastOne\">
                                  <span class=\"spTitle\">";
                        // line 286
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sector"]);
                        echo ": </span>
                                  <span>
                                    ";
                        // line 288
                        if (twig_get_attribute($this->env, $this->source, $context["order"], "receiver_address", [], "any", false, false, false, 288)) {
                            // line 289
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "receiver_address", [], "any", false, false, false, 289), "area", [], "any", false, false, false, 289), "name", [], "any", false, false, false, 289), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 291
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "receiver_area", [], "any", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 293
                        echo "                                  </span>
                              </div>
                          </div>

                      </div>

                      <div class=\"container l3\">
                          <div class=\"row\">
                              <h3>";
                        // line 301
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package content"]);
                        echo "</h3>
                          </div>
                          <hr style=\"color:#bbb;width:100%;margin-top:-20px;\" />
                      </div>

                      <div class=\"container l4\">
                          <table width=\"100%\">
                              <tr>
                                  <th align=\"center\"><p>";
                        // line 309
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Product"]);
                        echo "</p></th>
                                  <th align=\"center\"><p>";
                        // line 310
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount"]);
                        echo "</p></th>
                                  <th align=\"center\"><p>";
                        // line 311
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Bottom return"]);
                        echo "</p></th>
                                  <th align=\"center\"><p>";
                        // line 312
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CMD number"]);
                        echo "</p></th>
                                  <th align=\"center\"><p>";
                        // line 313
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                        echo "</p></th>
                                  <th align=\"center\"><p>";
                        // line 314
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Comment"]);
                        echo "</p></th>
                              </tr>
                              ";
                        // line 316
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "items", [], "any", false, false, false, 316));
                        $context['_iterated'] = false;
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 317
                            echo "                              <tr>
                                  <td style=\"border: 0;  text-align: left\" width=\"18%\" >";
                            // line 318
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 318), "name", [], "any", false, false, false, 318)), "html", null, true);
                            echo "</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"16%\" >";
                            // line 319
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 319), "html", null, true);
                            echo "</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"16%\" ></td>
                                  <td style=\"border: 0;  text-align: left\" width=\"14%\" >";
                            // line 321
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 321), "html", null, true);
                            echo "</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"14%\" >";
                            // line 322
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 322), "html", null, true);
                            echo "</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"18%\" >";
                            // line 323
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 323), "html", null, true);
                            echo "</td>
                              </tr>
                              ";
                            $context['_iterated'] = true;
                        }
                        if (!$context['_iterated']) {
                            // line 326
                            echo "                              <tr>
                                  <td colspan=\"6\" style=\"border: 0;  text-align: center\" width=\"100%\" >";
                            // line 327
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No content added"]);
                            echo "</td>
                              </tr>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 330
                        echo "                          </table>
                      </div>
                  </div>
                </tr>
              </table>

            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 337
                    echo "          ";
                } else {
                    // line 338
                    echo "              <div class=\"page-wrap\" style=\"page-break-after: always;\">
                <table width=\"100%\">
                    <tr>
                        <td style=\"border: 0;  text-align: center;\" width=\"100%\">
                            <h2>";
                    // line 342
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Declaration"]);
                    echo "</h2>
                        </td>
                    </tr>
                </table>
                <div class=\"shipment\">
                    <div class=\"container l1\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\" id=\"logo\">
                                    <img src='";
                    // line 350
                    if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 350)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 350), "path", [], "any", false, false, false, 350), "html", null, true);
                    } else {
                        echo "./admin/media/logos/logo.svg";
                    }
                    echo "'      />
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"barcode col-sm-4 \">
                                <p>";
                    // line 355
                    echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 355), "type" => "CODABAR", "width" => 3]]);
                    echo "</p>
                            </div>
                            <div class=\"col-sm-offset-4 col-sm-4 crbt\">
                                <span>#";
                    // line 358
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CRBT delivery"]);
                    echo "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"container l2\">
                        <div class=\"row\">
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">";
                    // line 365
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping"]);
                    echo "#: </span><span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 365), "html", null, true);
                    echo "</span>
                            </div>
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">";
                    // line 368
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                    echo ": </span>
                                <span>
                                      ";
                    // line 370
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 370)) {
                        // line 371
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 371), "name", [], "any", false, false, false, 371), "html", null, true);
                        echo "
                                      ";
                    } else {
                        // line 373
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_name", [], "any", false, false, false, 373), "html", null, true);
                        echo "
                                      ";
                    }
                    // line 374
                    echo "  
                                    </span>
                            </div>
                            <div class=\"col-sm-4 td last\">
                                <span class=\"spTitle\">";
                    // line 378
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Recipient"]);
                    echo ": </span>
                                <span>
                                      ";
                    // line 380
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 380)) {
                        // line 381
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 381), "name", [], "any", false, false, false, 381), "html", null, true);
                        echo "
                                      ";
                    } else {
                        // line 383
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_name", [], "any", false, false, false, 383), "html", null, true);
                        echo "
                                      ";
                    }
                    // line 385
                    echo "                                        
                                    </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">";
                    // line 391
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 391), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 391)), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 391), "h:i a"), "html", null, true);
                    echo "</span><span></span>
                            </div>
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">";
                    // line 394
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
                    echo ": </span>
                                <span>
                                      ";
                    // line 396
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 396)) {
                        // line 397
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 397), "mobile", [], "any", false, false, false, 397), "html", null, true);
                        echo "
                                      ";
                    } else {
                        // line 399
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_mobile", [], "any", false, false, false, 399), "html", null, true);
                        echo "
                                      ";
                    }
                    // line 401
                    echo "                                  </span>
                            </div>
                            <div class=\"col-sm-4 td last\">
                                <span class=\"spTitle\">";
                    // line 404
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                    echo ": </span>
                                <span>
                                    ";
                    // line 406
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 406)) {
                        // line 407
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 407), "name", [], "any", false, false, false, 407), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 409
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_addr", [], "any", false, false, false, 409), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 411
                    echo "                                    
                                  </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">";
                    // line 417
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["barcode"]);
                    echo "</span><span>";
                    echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 417), "type" => "CODABAR"]]);
                    echo "</span>
                            </div>
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">";
                    // line 420
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                    echo ": </span>
                                <span style=\"font-size:20px\">
                                    ";
                    // line 422
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 422)) {
                        // line 423
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 423), "email", [], "any", false, false, false, 423), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 425
                        echo "                                        ";
                        echo " - ";
                        echo "
                                    ";
                    }
                    // line 427
                    echo "                                    
                                  </span>
                            </div>
                            <div class=\"col-sm-4 td last\">
                                <span class=\"spTitle\">";
                    // line 431
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo ": </span>
                                <span>
                                    ";
                    // line 433
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 433)) {
                        // line 434
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 434), "thecity", [], "any", false, false, false, 434), "name", [], "any", false, false, false, 434), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 436
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiverCity", [], "any", false, false, false, 436), "name", [], "any", false, false, false, 436), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 438
                    echo "                                    
                                  </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-offset-8 col-sm-4 last lastOne\">
                                <span class=\"spTitle\">";
                    // line 444
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sector"]);
                    echo ": </span>
                                <span>
                                    ";
                    // line 446
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 446)) {
                        // line 447
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 447), "area", [], "any", false, false, false, 447), "name", [], "any", false, false, false, 447), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 449
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_area", [], "any", false, false, false, 449), "name", [], "any", false, false, false, 449), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 451
                    echo "                                  </span>
                            </div>
                        </div>

                    </div>

                    <div class=\"container l3\">
                        <div class=\"row\">
                            <h3>";
                    // line 459
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package content"]);
                    echo "</h3>
                        </div>
                        <hr style=\"color:#bbb;width:100%;margin-top:-20px;\" />
                    </div>

                    <div class=\"container l4\">
                        <table width=\"100%\">
                            <tr>
                                <th align=\"center\"><p>";
                    // line 467
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Product"]);
                    echo "</p></th>
                                <th align=\"center\"><p>";
                    // line 468
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Amount"]);
                    echo "</p></th>
                                <th align=\"center\"><p>";
                    // line 469
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Bottom return"]);
                    echo "</p></th>
                                <th align=\"center\"><p>";
                    // line 470
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CMD number"]);
                    echo "</p></th>
                                <th align=\"center\"><p>";
                    // line 471
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                    echo "</p></th>
                                <th align=\"center\"><p>";
                    // line 472
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Comment"]);
                    echo "</p></th>
                            </tr>
                            ";
                    // line 474
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 474));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 475
                        echo "                            <tr>
                                <td style=\"border: 0;  text-align: left\" width=\"18%\" >";
                        // line 476
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 476), "name", [], "any", false, false, false, 476)), "html", null, true);
                        echo "</td>
                                <td style=\"border: 0;  text-align: left\" width=\"16%\" >";
                        // line 477
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 477), "html", null, true);
                        echo "</td>
                                <td style=\"border: 0;  text-align: left\" width=\"16%\" ></td>
                                <td style=\"border: 0;  text-align: left\" width=\"14%\" >";
                        // line 479
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 479), "html", null, true);
                        echo "</td>
                                <td style=\"border: 0;  text-align: left\" width=\"14%\" >";
                        // line 480
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 480), "html", null, true);
                        echo "</td>
                                <td style=\"border: 0;  text-align: left\" width=\"18%\" >";
                        // line 481
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 481), "html", null, true);
                        echo "</td>
                            </tr>
                            ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 484
                        echo "                            <tr>
                                <td colspan=\"6\" style=\"border: 0;  text-align: center\" width=\"100%\" >";
                        // line 485
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No content added"]);
                        echo "</td>
                            </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 488
                    echo "                        </table>
                    </div>
                </div>
            </div>

          ";
                }
                // line 494
                echo "        ";
            } else {
                // line 495
                echo "            <div id=\"page-wrap\">
              <div class=\"print-block\">
                <div class=\"row\">
                    <!-- ";
                // line 498
                echo twig_escape_filter($this->env, ($context["order"] ?? null), "html", null, true);
                echo " -->
                  <div class=\"col-md-12 capitalize_text d-flex justify-content-between\">
                    <p> ";
                // line 500
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FROM"]);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 500), "name", [], "any", false, false, false, 500), "html", null, true);
                echo " </p>
                    <p> ";
                // line 501
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TO"]);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 501), "name", [], "any", false, false, false, 501), "html", null, true);
                echo "  </p>
                  </div>
                </div>

                <div class=\"print-break\"></div>

                <div class=\"print-loction\">

                        <!-- <table width=\"100%\">
                            <tr>
                                <td width=\"25%\">
                                    <h2 style=\"font-size:20px\">
                                        <!-- ";
                // line 513
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 513), "default_tracking_id", [], "any", false, false, false, 513) == 1)) {
                    // line 514
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 514), "thecountry", [], "any", false, false, false, 514), "id", [], "any", false, false, false, 514), "html", null, true);
                    echo "
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 515
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 515), "default_tracking_id", [], "any", false, false, false, 515) == 2)) {
                    // line 516
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 516), "thestate", [], "any", false, false, false, 516), "id", [], "any", false, false, false, 516), "html", null, true);
                    echo "
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 517
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 517), "default_tracking_id", [], "any", false, false, false, 517) == 3)) {
                    // line 518
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 518), "thecity", [], "any", false, false, false, 518), "id", [], "any", false, false, false, 518), "html", null, true);
                    echo "
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 519
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 519), "default_tracking_id", [], "any", false, false, false, 519) == 4)) {
                    // line 520
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 520), "area", [], "any", false, false, false, 520), "id", [], "any", false, false, false, 520), "html", null, true);
                    echo "
                                        ";
                }
                // line 521
                echo " -->
                                        <!-- <br /> -->
                                        <!-- <span style=\"font-size:14px;display:block\">";
                // line 523
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FROM"]);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 523), "name", [], "any", false, false, false, 523), "html", null, true);
                echo " </span>
                                    </h2>
                                </td> -->
                                <!-- <td width=\"80%\" style=\"text-align:center;\" class=\"barcode\">
                                    ";
                // line 527
                echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 527), "type" => "CODABAR", "width" => "4", "height" => "50"]]);
                echo "
                                    <p>";
                // line 528
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 528), "html", null, true);
                echo "</p>
                                </td> -->
                                <!-- <td width=\"10%\">
                                    <h2 style=\"padding-left: 20px;font-size:20px;text-align:right\"> -->
                                        <!-- ";
                // line 532
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 532)) {
                    // line 533
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 533), "default_tracking_id", [], "any", false, false, false, 533) == 1)) {
                        // line 534
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 534), "thecountry", [], "any", false, false, false, 534), "id", [], "any", false, false, false, 534), "html", null, true);
                        echo "
                                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 535
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 535), "default_tracking_id", [], "any", false, false, false, 535) == 2)) {
                        // line 536
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 536), "thestate", [], "any", false, false, false, 536), "id", [], "any", false, false, false, 536), "html", null, true);
                        echo "
                                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 537
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 537), "default_tracking_id", [], "any", false, false, false, 537) == 3)) {
                        // line 538
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 538), "thecity", [], "any", false, false, false, 538), "id", [], "any", false, false, false, 538), "html", null, true);
                        echo "
                                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 539
($context["settings"] ?? null), "tracking", [], "any", false, false, false, 539), "default_tracking_id", [], "any", false, false, false, 539) == 4)) {
                        // line 540
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 540), "area", [], "any", false, false, false, 540), "id", [], "any", false, false, false, 540), "html", null, true);
                        echo "
                                        ";
                    }
                    // line 542
                    echo "                                        ";
                } else {
                    // line 543
                    echo "                                            -
                                        ";
                }
                // line 544
                echo " -->
                                        <!-- <br /> -->
                                        <!-- <span style=\"font-size:14px;display:block\">";
                // line 546
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TO"]);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 546), "name", [], "any", false, false, false, 546), "html", null, true);
                echo " </span>
                                    </h2>
                                </td>
                            </tr>
                        </table>  -->

                </div>
                <div>
                        <table>
                            ";
                // line 555
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 555)) {
                    // line 556
                    echo "                            <tr>
                                <td width=\"35%\">Total Weight:&nbsp;</td>
                                <td>";
                    // line 558
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total_weight", [], "any", false, false, false, 558), "html", null, true);
                    echo "</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Payment Method:&nbsp;</td>
                                <td>";
                    // line 562
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 562), "html", null, true);
                    echo "</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Sender Address:&nbsp;</td>
                                <td>";
                    // line 566
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 566), "area", [], "any", false, false, false, 566), "name", [], "any", false, false, false, 566), "html", null, true);
                    echo "</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Ship Date:&nbsp;</td>
                                <td>";
                    // line 570
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 570), "html", null, true);
                    echo "</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Create At:&nbsp;</td>
                                <td>";
                    // line 574
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 574), "html", null, true);
                    echo "</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Receiver Address:&nbsp;</td>
                                <td>";
                    // line 578
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "area", [], "any", false, false, false, 578), "name", [], "any", false, false, false, 578), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "zipcode", [], "any", false, false, false, 578)) {
                        echo ", ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                        echo ":";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "zipcode", [], "any", false, false, false, 578), "html", null, true);
                    }
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "thecity", [], "any", false, false, false, 578)) {
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "thecity", [], "any", false, false, false, 578), "name", [], "any", false, false, false, 578), "html", null, true);
                    }
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "thestate", [], "any", false, false, false, 578)) {
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "thestate", [], "any", false, false, false, 578), "name", [], "any", false, false, false, 578), "html", null, true);
                    }
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "thecountry", [], "any", false, false, false, 578)) {
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 578), "thecountry", [], "any", false, false, false, 578), "name", [], "any", false, false, false, 578), "html", null, true);
                    }
                    echo "</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">";
                    // line 581
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Phone"]);
                    echo ":&nbsp;</td>
                                <td>";
                    // line 582
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 582), "mobile", [], "any", false, false, false, 582), "html", null, true);
                    echo "</td>
                            </tr>
                            ";
                }
                // line 585
                echo "                            <!-- <tr>
                                <td width=\"35%\">";
                // line 586
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
                echo ":&nbsp;</td>
                                <td>";
                // line 587
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 587), "name", [], "any", false, false, false, 587), "html", null, true);
                echo "</td>
                            </tr> -->
                        </table>
                </div>
              </div>
            </div>
        ";
            }
            // line 594
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 594), "type", [], "any", false, false, false, 594) == "label-v2")) {
            // line 595
            echo "        <div class=\"page-wrap\" style=\"page-break-after: always;\">
            <table class=\"table\" style=\" margin-left: auto; margin-right: auto; font-family:Arial, Helvetica, sans-serif;\" border=\"0\" width=\"100%\" >
                <tbody>
                    <tr>
                        <td>
                            <table style=\"text-align: center; table-layout:fixed;\"   cellspacing=\"2\" width=\"100%\">
                                <tbody>
                                    <tr>
                                        <td width=\"75%\">
                                            <p style=\"text-align: ";
            // line 604
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=6 face=\"arial\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 604), "title", [], "any", false, false, false, 604), "html", null, true);
            echo "</strong></font></p>
                                        </td>
                                        <td width=\"25%\">
                                            <p style=\"text-align: center;\"><img src='";
            // line 607
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 607)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 607), "path", [], "any", false, false, false, 607), "html", null, true);
            } else {
                echo "./admin/media/logos/logo-10.png";
            }
            echo "' border='0'></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            ";
            // line 612
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 612)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "h:i a"), "html", null, true);
            echo "
                            <hr />
                            <table  width=\"100%\" style=\"text-align: center; table-layout:fixed;\">
                                <tbody>
                                    <tr bgcolor=\"#d6eeff\">
                                        <td width=\"50%\">
                                            <p style=\"text-align: center;\"><strong><font size=\"5\">";
            // line 618
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FROM"]);
            echo "</font></strong></p>
                                        </td>
                                        <td width=\"50%\">
                                            <p style=\"text-align: center;\"><font size=\"5\" face=\"arial\"><strong>";
            // line 621
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SHIP TO"]);
            echo "</strong></font></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <font size=4><td align=\"center\"  style=\" border-top-color:#000000; border-right-color:#333; border-right-width:2px;border-right-style:solid;  border-collapse: collapse;\">
                                            <p style=\"text-align: ";
            // line 626
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=\"4\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 626), "name", [], "any", false, false, false, 626), "html", null, true);
            echo "</b></font></p>
                                            <p style=\"text-align: ";
            // line 627
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 627), "mobile", [], "any", false, false, false, 627), "html", null, true);
            echo "</p>
                                            <p style=\"text-align: ";
            // line 628
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 628), "area", [], "any", false, false, false, 628), "name", [], "any", false, false, false, 628), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 628), "zipcode", [], "any", false, false, false, 628)) {
                echo "- ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 628), "zipcode", [], "any", false, false, false, 628), "html", null, true);
            }
            echo "</strong></p>
                                            <p style=\"text-align: ";
            // line 629
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=5><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 629), "thecity", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 629), "thestate", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 629), "thecountry", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), "html", null, true);
            echo "</strong></font></p>
                                        </td>
                                        <td>
                                            <p style=\"text-align: ";
            // line 632
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=\"4\"><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 632), "name", [], "any", false, false, false, 632), "html", null, true);
            echo "</b></font></p>
                                            <p style=\"text-align: ";
            // line 633
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 633), "mobile", [], "any", false, false, false, 633), "html", null, true);
            echo "</p>
                                            <p style=\"text-align: ";
            // line 634
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "; \"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 634), "area", [], "any", false, false, false, 634), "name", [], "any", false, false, false, 634), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 634), "zipcode", [], "any", false, false, false, 634)) {
                echo "- ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ZIP"]);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 634), "zipcode", [], "any", false, false, false, 634), "html", null, true);
            }
            echo "</strong></p>
                                            <p style=\"text-align: ";
            // line 635
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ";\"><font size=5><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 635), "thecity", [], "any", false, false, false, 635), "name", [], "any", false, false, false, 635), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 635), "thestate", [], "any", false, false, false, 635), "name", [], "any", false, false, false, 635), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 635), "thecountry", [], "any", false, false, false, 635), "name", [], "any", false, false, false, 635), "html", null, true);
            echo "</strong></font></p>
                                        </td></font>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <table style=\"text-align: center;\" width=\"100%\">
                                <tbody>
                                    <tr>
                                        <td width=\"50%\">
                                            <p><strong>";
            // line 645
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["DELIVERY TIME"]);
            echo "</strong></p>
                                            <p><font size=4><b>";
            // line 646
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 646), "name", [], "any", false, false, false, 646), "html", null, true);
            echo "</b></font></p>
                                        </td>
                                        ";
            // line 648
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 648)) {
                // line 649
                echo "                                            <td width=\"50%\">
                                                <p><strong>";
                // line 650
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["COMPANY COURIER"]);
                echo "</strong></p>
                                                <p><font size=4><strong><b>";
                // line 651
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 651), "name", [], "any", false, false, false, 651), "html", null, true);
                echo "</b></strong></p>
                                            </td>
                                        ";
            }
            // line 654
            echo "                                    </tr>
                              </tbody>
                          </table>
                          <hr />
                          <table style=\"text-align: center;\" width=\"100%\">
                                <tbody>
                                    <tr>
                                        <td width=\"50%\">
                                            <p><strong>";
            // line 662
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["PIECES"]);
            echo " | ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["WEIGHT"]);
            echo "</strong></p>
                                        </td>
                                        <td width=\"50%\">
                                            <p><strong>";
            // line 665
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CONTENTS"]);
            echo "</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=\"50%\">
                                            <p><font size=4>";
            // line 670
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 670), "count", [], "any", false, false, false, 670), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 670), "sum", [0 => "weight"], "method", false, false, false, 670), "html", null, true);
            echo "</font></p>
                                        </td>
                                        <td width=\"50%\">
                                            <p>
                                                ";
            // line 674
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 674));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 675
                echo "                                                    <font size=4>";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 675), "name", [], "any", false, false, false, 675)), "html", null, true);
                echo "</font></br>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 677
            echo "                                        </p>
                                        </td>
                                    </tr>
                              </tbody>
                          </table>
                          <hr />
                          <center  width=\"100%\">
                            <div class=\"output\">
                              <p style='padding:5px; text-align:center; font-size:100px; font-weight:bold;font-family:Arial,Helvetica;'>
                                  ";
            // line 686
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 686), "area", [], "any", false, false, false, 686), "id", [], "any", false, false, false, 686), "html", null, true);
            echo "
                              </p>
                            </div>
                          </center>
                          <hr />
                          <center  width=\"100%\">
                            <div class=\"output\">
                              <p style='padding:5px; text-align:center; font-size:24px; font-family:Arial,Helvetica;'>";
            // line 693
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["TRACKING"]);
            echo " #</p>
                              <section class=\"output\">
                                  ";
            // line 695
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 695), "type" => "CODABAR", "width" => "4", "height" => "100"]]);
            echo "<br />
                                  <h2>";
            // line 696
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 696), "html", null, true);
            echo "</h2>
                              </section>
                            </div>
                          </center>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          ";
            // line 701
            echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 701), "type" => "QRCODE", "width" => "5", "height" => "5"]]);
            echo "
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    ";
        }
        // line 708
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 709
        echo "    <style>
        .capitalize_text p {
            text-transform: uppercase;
        }
    body { background: #fff;color: black}



    ";
        // line 717
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 717), "type", [], "any", false, false, false, 717) == "shipment")) {
            // line 718
            echo "        * { margin: 0; padding: 0; }
        body {
            font: 14px/1.4 Helvetica, Arial, sans-serif;
        }
        .page-wrap { width: 800px; margin: 0 auto;page-break-after: always; }

        textarea { border: 0; font: 14px Helvetica, Arial, sans-serif; overflow: hidden; resize: none; }
        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }
\t\ttr.noBorder td {
\t\t  border: 0;
\t\t}

\t\ttd.Border td {
\t\t  border: 1px;
\t\t}
        ";
            // line 734
            if ((($context["currentLang"] ?? null) == "ar")) {
                // line 735
                echo "            p,b, strong{
                font-family: Cairo;
                font-weight: bold;
            }
        ";
            }
            // line 740
            echo "
        #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

        #address { width: 250px; height: 150px; float: left; }
        #customer { overflow: hidden; }
        #barcodeHTML  { text-align: center;}
        #barcodeHTML > div { margin:auto}
        #customer-title { font-size: 20px; font-weight: bold; float: left; }

        #meta { margin-top: 1px; width: 100%; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #6c757d; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

\t\t#signing { margin-top: 0px; width: 100%; float: center; }
        #signing td { text-align: center;  }
        #signing td.signing-head { text-align: center; background: #eee; }
        #signing td textarea { width: 100%; height: 20px; text-align: center; }

        #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
        #items th { background: #6c757d; }
        #items textarea { width: 80px; height: 50px; }
        #items tr.item-row td {  vertical-align: top; }
        #items td.description { width: 300px; }
        #items td.item-name { width: 175px; }
        #items td.description textarea, #items td.item-name textarea { width: 100%; }
        #items td.total-line { border-right: 0; text-align: ";
            // line 766
            if ((($context["currentLang"] ?? null) == "ar")) {
                echo "left";
            } else {
                echo "right";
            }
            echo "; }
        #items td.total-value { border-left: 0; padding: 10px; }
        #items td.total-value textarea { height: 20px; background: none; }
        #items td.balance { background: #6c757d; }
        #items td.blank { border: 0; }

        #terms { text-align: center; margin: 20px 0 0 0; }
        #terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
        #terms textarea { width: 100%; text-align: center;}



        .delete-wpr { position: relative; }
        .delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

        /* Extra CSS for Print Button*/
        .button {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            overflow: hidden;
            margin-top: 20px;
            padding: 12px 12px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: all 60ms ease-in-out;
            transition: all 60ms ease-in-out;
            text-align: center;
            white-space: nowrap;
            text-decoration: none !important;

            color: #fff;
            border: 0 none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.3;
            -webkit-appearance: none;
            -moz-appearance: none;

            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 160px;
            -ms-flex: 0 0 160px;
            flex: 0 0 160px;
        }
        .button:hover {
            -webkit-transition: all 60ms ease;
            transition: all 60ms ease;
            opacity: .85;
        }
        .button:active {
            -webkit-transition: all 60ms ease;
            transition: all 60ms ease;
            opacity: .75;
        }
        .button:focus {
            outline: 1px dotted #959595;
            outline-offset: -4px;
        }

        .button.-regular {
            color: #202129;
            background-color: #edeeee;
        }
        .button.-regular:hover {
            color: #202129;
            background-color: #e1e2e2;
            opacity: 1;
        }
        .button.-regular:active {
            background-color: #d5d6d6;
            opacity: 1;
        }

        .button.-dark {
            color: #FFFFFF;
            background: #333030;
        }
        .button.-dark:focus {
            outline: 1px dotted white;
            outline-offset: -4px;
        }

        @media print
        {
        .page-wrap { page-break-after: always; }
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
\t\th4 {
\t\t\tborder-bottom: 1px solid black;
\t\t}

    ";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 873
($context["this"] ?? null), "param", [], "any", false, false, false, 873), "type", [], "any", false, false, false, 873) == "label") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 873), "type", [], "any", false, false, false, 873) == "label-1"))) {
            // line 874
            echo "        ";
            if ((($context["printTemplate"] ?? null) == "print_template_advance")) {
                // line 875
                echo "            body {
                font: 14px/1.4 Helvetica, Arial, sans-serif;

            }
            .page-wrap { width: 90%; page-break-after: always;float: none;position: relative;display: block;}
            .shipment{margin-top:20px;margin-bottom:20px;font-size:30px   }
            table{margin-top:10px;margin-bottom:10px }
            table tr{margin-bottom:15px; }
            table tr td h2{margin-top: 30px;font-size:35px;font-weight:bold;  }
            .row{margin-bottom:20px }
            #logo img{width:250px;height:120px  }
            .crbt{float: right;font-weight: bold;margin-top:20px;margin-left:30%; }
            .l2{margin-top:20px;margin-bottom:20px;  }
            .l2 div.row{margin-bottom:0 }
            .l2 div.row div.td{width:30%;border-right:solid 1px #bbb;padding:5px 10px 5px 30px   }
            .l2 div.row div.last{border: none;}
            .lastOne{margin-left:69%  }
            .l2 .spTitle{font-weight:bold;  }
            .l4 table tr{border-bottom:#bbb solid 1px }
            @media print
            {
            .page-wrap { page-break-after: always;float: none;position: relative;display: block;     height: 100mm;
    max-height: 100mm;
    min-height: 100mm;}
                .no-print, .no-print *
                {
                    display: none !important;
                }
            }
        ";
            } else {
                // line 905
                echo "            #page-wrap {
              width: 100%;
              /* min-height: 4in; */
            }
            .table th, .table td {
                border-top: 0 !important;
            }
            hr {
              height: 1px;
              background-color: black;
            }

            .print-loction .barcode > div {
                margin: auto !important;
            }

            .delete-wpr { position: relative; }
            \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

            \t/* Extra CSS for Print Button*/
            \t.button {
            \t\tdisplay: -webkit-box;
            \t\tdisplay: -webkit-flex;
            \t\tdisplay: -ms-flexbox;
            \t\tdisplay: flex;
            \t\toverflow: hidden;
            \t\tmargin-top: 20px;
            \t\tpadding: 12px 12px;
            \t\tcursor: pointer;
            \t\t-webkit-user-select: none;
            \t\t-moz-user-select: none;
            \t\t-ms-user-select: none;
            \t\tuser-select: none;
            \t\t-webkit-transition: all 60ms ease-in-out;
            \t\ttransition: all 60ms ease-in-out;
            \t\ttext-align: center;
            \t\twhite-space: nowrap;
            \t\ttext-decoration: none !important;

            \t\tcolor: #fff;
            \t\tborder: 0 none;
            \t\tborder-radius: 4px;
            \t\tfont-size: 14px;
            \t\tfont-weight: 500;
            \t\tline-height: 1.3;
            \t\t-webkit-appearance: none;
            \t\t-moz-appearance: none;

            \t\t-webkit-box-pack: center;
            \t\t-webkit-justify-content: center;
            \t\t-ms-flex-pack: center;
            \t\tjustify-content: center;
            \t\t-webkit-box-align: center;
            \t\t-webkit-align-items: center;
            \t\t-ms-flex-align: center;
            \t\talign-items: center;
            \t\t-webkit-box-flex: 0;
            \t\t-webkit-flex: 0 0 160px;
            \t\t-ms-flex: 0 0 160px;
            \t\tflex: 0 0 160px;
            \t}
            \t.button:hover {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .85;
            \t}
            \t.button:active {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .75;
            \t}
            \t.button:focus {
            \t\toutline: 1px dotted #959595;
            \t\toutline-offset: -4px;
            \t}

            \t.button.-regular {
            \t\tcolor: #202129;
            \t\tbackground-color: #edeeee;
            \t}
            \t.button.-regular:hover {
            \t\tcolor: #202129;
            \t\tbackground-color: #e1e2e2;
            \t\topacity: 1;
            \t}
            \t.button.-regular:active {
            \t\tbackground-color: #d5d6d6;
            \t\topacity: 1;
            \t}

            \t.button.-dark {
            \t\tcolor: #FFFFFF;
            \t\tbackground: #333030;
            \t}
            \t.button.-dark:focus {
            \t\toutline: 1px dotted white;
            \t\toutline-offset: -4px;
            \t}

            \t@media print
            \t{
            \t\t.no-print, .no-print *
            \t\t{
            \t\t\tdisplay: none !important;
            \t\t}
            \t}

                .print-block {
                    border: 1px solid black;
                    padding: 10px;
                    -webkit-border-radius: 2px;
                    -moz-border-radius: 2px;
                    border-radius: 15px;
                    width: 98%;
                    margin-bottom: 120px;
                    /* height: 275px; */
                    background-color: #ffffff !important;
                    color: black;
                    margin: 10px auto;
                }
            \t.print-block{
                    font-size: 19px;
                    font-weight: bold;
            \t}

            \t.print-break{
            \t\tborder: 1px solid black;
            \t    margin-bottom: 5px;
            \t    margin-top: -10px;
            \t}
            \t.print-loction h2{
            \t\tcolor: black;
            \t}
                @media  print {
                    .print-block {
                        background-color: #ffffff !important;
                        -webkit-print-color-adjust: exact;
                    }
                    #kt_header{
                    \tdisplay: none;
                    }
                    div#kt_content{
                    \tpadding-top: 0px;
                    }
                    div#kt_header, div#kt_aside, button#kt_aside_close_btn, div#kt_header_mobile{
                    \tdisplay: none !important;
                    }
                }
            ";
            }
            // line 1054
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1054), "type", [], "any", false, false, false, 1054) == "label-v2")) {
            // line 1055
            echo "            .page-wrap { width: 800px; margin: 0 auto;page-break-after: always;  }
            .table th, .table td {
                border-top: 0 !important;
            }
            hr {
              height: 1px;
              background-color: black;
            }

            .delete-wpr { position: relative; }
            \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

            \t/* Extra CSS for Print Button*/
            \t.button {
            \t\tdisplay: -webkit-box;
            \t\tdisplay: -webkit-flex;
            \t\tdisplay: -ms-flexbox;
            \t\tdisplay: flex;
            \t\toverflow: hidden;
            \t\tmargin-top: 20px;
            \t\tpadding: 12px 12px;
            \t\tcursor: pointer;
            \t\t-webkit-user-select: none;
            \t\t-moz-user-select: none;
            \t\t-ms-user-select: none;
            \t\tuser-select: none;
            \t\t-webkit-transition: all 60ms ease-in-out;
            \t\ttransition: all 60ms ease-in-out;
            \t\ttext-align: center;
            \t\twhite-space: nowrap;
            \t\ttext-decoration: none !important;

            \t\tcolor: #fff;
            \t\tborder: 0 none;
            \t\tborder-radius: 4px;
            \t\tfont-size: 14px;
            \t\tfont-weight: 500;
            \t\tline-height: 1.3;
            \t\t-webkit-appearance: none;
            \t\t-moz-appearance: none;

            \t\t-webkit-box-pack: center;
            \t\t-webkit-justify-content: center;
            \t\t-ms-flex-pack: center;
            \t\tjustify-content: center;
            \t\t-webkit-box-align: center;
            \t\t-webkit-align-items: center;
            \t\t-ms-flex-align: center;
            \t\talign-items: center;
            \t\t-webkit-box-flex: 0;
            \t\t-webkit-flex: 0 0 160px;
            \t\t-ms-flex: 0 0 160px;
            \t\tflex: 0 0 160px;
            \t}
            \t.button:hover {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .85;
            \t}
            \t.button:active {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .75;
            \t}
            \t.button:focus {
            \t\toutline: 1px dotted #959595;
            \t\toutline-offset: -4px;
            \t}

            \t.button.-regular {
            \t\tcolor: #202129;
            \t\tbackground-color: #edeeee;
            \t}
            \t.button.-regular:hover {
            \t\tcolor: #202129;
            \t\tbackground-color: #e1e2e2;
            \t\topacity: 1;
            \t}
            \t.button.-regular:active {
            \t\tbackground-color: #d5d6d6;
            \t\topacity: 1;
            \t}

            \t.button.-dark {
            \t\tcolor: #FFFFFF;
            \t\tbackground: #333030;
            \t}
            \t.button.-dark:focus {
            \t\toutline: 1px dotted white;
            \t\toutline-offset: -4px;
            \t}

            \t@media print
            \t{
              .page-wrap { page-break-after: always; }
            \t\t.no-print, .no-print *
            \t\t{
            \t\t\tdisplay: none !important;
            \t\t}
            \t}
            ";
        }
        // line 1156
        echo "            @page {
              size: A4;
              margin: 0;
            }
            @media print {
              .page-wrap {
                page-break-after: always;
                position: relative;
                float: none;
              }
              /* ... the rest of the rules ... */
            }
    </style>
";
        // line 708
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1170
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1171
        echo "<script type=\"text/javascript\">
KTUtil.ready(function () {
    window.print(\".shipment\");
    //setTimeout(function(){window.close();},10);
});
</script>
";
        // line 1170
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/order-print.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2273 => 1170,  2265 => 1171,  2263 => 1170,  2261 => 708,  2246 => 1156,  2143 => 1055,  2140 => 1054,  1989 => 905,  1957 => 875,  1954 => 874,  1952 => 873,  1838 => 766,  1810 => 740,  1803 => 735,  1801 => 734,  1783 => 718,  1781 => 717,  1771 => 709,  1769 => 708,  1759 => 701,  1751 => 696,  1747 => 695,  1742 => 693,  1732 => 686,  1721 => 677,  1712 => 675,  1708 => 674,  1699 => 670,  1691 => 665,  1683 => 662,  1673 => 654,  1667 => 651,  1663 => 650,  1660 => 649,  1658 => 648,  1653 => 646,  1649 => 645,  1626 => 635,  1609 => 634,  1599 => 633,  1589 => 632,  1573 => 629,  1556 => 628,  1546 => 627,  1536 => 626,  1528 => 621,  1522 => 618,  1511 => 612,  1499 => 607,  1487 => 604,  1476 => 595,  1473 => 594,  1463 => 587,  1459 => 586,  1456 => 585,  1450 => 582,  1446 => 581,  1422 => 578,  1415 => 574,  1408 => 570,  1401 => 566,  1394 => 562,  1387 => 558,  1383 => 556,  1381 => 555,  1367 => 546,  1363 => 544,  1359 => 543,  1356 => 542,  1350 => 540,  1348 => 539,  1343 => 538,  1341 => 537,  1336 => 536,  1334 => 535,  1329 => 534,  1326 => 533,  1324 => 532,  1317 => 528,  1313 => 527,  1304 => 523,  1300 => 521,  1294 => 520,  1292 => 519,  1287 => 518,  1285 => 517,  1280 => 516,  1278 => 515,  1273 => 514,  1271 => 513,  1254 => 501,  1248 => 500,  1243 => 498,  1238 => 495,  1235 => 494,  1227 => 488,  1218 => 485,  1215 => 484,  1207 => 481,  1203 => 480,  1199 => 479,  1194 => 477,  1190 => 476,  1187 => 475,  1182 => 474,  1177 => 472,  1173 => 471,  1169 => 470,  1165 => 469,  1161 => 468,  1157 => 467,  1146 => 459,  1136 => 451,  1130 => 449,  1124 => 447,  1122 => 446,  1117 => 444,  1109 => 438,  1103 => 436,  1097 => 434,  1095 => 433,  1090 => 431,  1084 => 427,  1078 => 425,  1072 => 423,  1070 => 422,  1065 => 420,  1057 => 417,  1049 => 411,  1043 => 409,  1037 => 407,  1035 => 406,  1030 => 404,  1025 => 401,  1019 => 399,  1013 => 397,  1011 => 396,  1006 => 394,  996 => 391,  988 => 385,  982 => 383,  976 => 381,  974 => 380,  969 => 378,  963 => 374,  957 => 373,  951 => 371,  949 => 370,  944 => 368,  936 => 365,  926 => 358,  920 => 355,  908 => 350,  897 => 342,  891 => 338,  888 => 337,  876 => 330,  867 => 327,  864 => 326,  856 => 323,  852 => 322,  848 => 321,  843 => 319,  839 => 318,  836 => 317,  831 => 316,  826 => 314,  822 => 313,  818 => 312,  814 => 311,  810 => 310,  806 => 309,  795 => 301,  785 => 293,  779 => 291,  773 => 289,  771 => 288,  766 => 286,  758 => 280,  752 => 278,  746 => 276,  744 => 275,  739 => 273,  733 => 269,  727 => 267,  721 => 265,  719 => 264,  714 => 262,  706 => 259,  698 => 253,  692 => 251,  686 => 249,  684 => 248,  679 => 246,  674 => 243,  668 => 241,  662 => 239,  660 => 238,  655 => 236,  645 => 233,  637 => 227,  631 => 225,  625 => 223,  623 => 222,  618 => 220,  612 => 216,  606 => 215,  600 => 213,  598 => 212,  593 => 210,  585 => 207,  575 => 200,  569 => 197,  557 => 192,  544 => 182,  537 => 177,  533 => 176,  530 => 175,  528 => 174,  525 => 173,  522 => 172,  520 => 171,  509 => 165,  503 => 164,  491 => 155,  486 => 153,  476 => 146,  464 => 143,  458 => 140,  448 => 139,  443 => 136,  437 => 135,  431 => 133,  429 => 132,  419 => 131,  413 => 128,  403 => 127,  397 => 123,  391 => 121,  388 => 120,  385 => 119,  382 => 118,  380 => 117,  375 => 116,  372 => 115,  369 => 114,  366 => 113,  363 => 112,  360 => 111,  357 => 110,  354 => 109,  352 => 108,  349 => 107,  334 => 104,  330 => 103,  326 => 102,  322 => 101,  319 => 100,  315 => 99,  304 => 97,  300 => 96,  296 => 95,  292 => 94,  281 => 88,  277 => 87,  271 => 84,  265 => 83,  261 => 82,  258 => 81,  252 => 78,  248 => 77,  245 => 76,  243 => 75,  236 => 71,  232 => 69,  226 => 67,  220 => 65,  218 => 64,  214 => 62,  208 => 61,  206 => 60,  203 => 59,  197 => 57,  195 => 56,  192 => 55,  186 => 53,  180 => 51,  178 => 50,  175 => 49,  167 => 47,  165 => 46,  162 => 45,  156 => 43,  150 => 41,  148 => 40,  145 => 39,  139 => 37,  133 => 35,  131 => 34,  125 => 31,  111 => 30,  97 => 20,  92 => 18,  87 => 15,  80 => 14,  72 => 13,  64 => 12,  57 => 11,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.param.type == 'shipment' %}
    <div class=\"page-wrap\" style=\"page-break-after: always;\">
        <table width=\"100%\">
            <tr>
                <td style=\"border: 0;  text-align: left\" width=\"18%\">
        \t\t\t<div id=\"logo\" style=\"text-align:left\">
        \t\t\t\t<img src='{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}' style=\"max-height:70px\">
                    </div>
                </td>
    \t\t\t<td style=\"border: 0;  text-align: center\" width=\"56%\">
    \t\t\t\t{% if settings.company.tax_number and settings.company.tax_number != '' and settings.company.tax_number != '-' %}{{'Tax'|__}}: {{ settings.company.tax_number }} </br>{% endif %}
    \t\t\t\t{% if settings.company.company_phone %}{{'Phone'|__}}: {{ settings.company.company_phone }} </br>{% endif %}
    \t\t\t\t{% if settings.company.primary_email %}{{'Email'|__}}: {{ settings.company.primary_email }} </br>{% endif %}
    \t\t\t\t{% if settings.company.address %}{{'Street'|__}}: {{ settings.company.address }}{% endif %}
                </td>
                <td style=\"border: 0;  text-align: center\" width=\"48%\" id=\"barcodeHTML\">
                    </br>
                    {{ barcodeHTML({data: order.barcode, type: 'CODABAR', width: '1'}) }}
                    <div class=\"clearfix\"></div>
                    <p>{{settings.tracking.prefix_order}}{{order.barcode}}</p>
    \t\t\t</td>
            </tr>
        </table>
        <hr>
        </br>
        <div id=\"customer\">

            <table id=\"meta\">
                <tr>
                    <td rowspan=\"5\" style=\"border: 1px solid white; border-{% if currentLang == 'ar' %}left{% else %}right{% endif %}: 1px solid black;text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}\" width=\"62%\">
                    <strong>{{'Bill to'|__}}</strong> </br>
    \t\t\t\t<table id=\"items\">
              <b>
                {%if order.receiver %}
                  {{order.receiver.name}}
                {% else %}
                  {{order.receiver_name}}
                {% endif %}
              </b></br> </br>
              {% if order.receiver_address.area %}
                {{order.receiver_address.area.name}} - 
              {% else %}
                {{order.receiver_area.name}} -   
              {% endif %}

              {% if order.receiver_address.zipcode %}
                {{'ZIP'|__}}:{{order.receiver_address.zipcode}} </br>
              {% endif %}

              {% if order.receiver_address.thecity %}
                {{order.receiver_address.thecity.name}} | 
              {% else %}
                {{order.receiverCity.name}} |   
              {% endif %}

              {% if order.receiver_address.thestate %}
                {{order.receiver_address.thestate.name}} | 
              {% endif %}

              {% if order.receiver_address.thecountry %}
                {{order.receiver_address.thecountry.name}} 
              {% endif %}</br>

              {% if order.receiver %}
                {{order.receiver.mobile}} </br>
              {% else %}
                {{order.receiver_mobile}} </br>
              {% endif %}
              

              {{order.receiver.email}}
            </table>
    \t\t\t\t</td>
                </tr>
                {% if order.courier_id %}
                    <tr>
        \t\t\t\t<td class=\"meta-head\"><p style=\"color:white;\">{{'Courier Company'|__}}</p></td>
                        <td>{{order.courier.name}}</td>
                    </tr>
                {% endif %}
                <tr>
                    <td class=\"meta-head\"><p style=\"color:white;\">{{'Shipping date'|__}}</p></td>
                    <td>{{order.ship_date|date(settings.dateformat)}}  {{order.ship_date|date('h:i a')}}</td>
                    <!-- {{order.ship_date|date('h:i a')}} -->
                </tr>
                <tr>
                    <td class=\"meta-head\"><p style=\"color:white;\">{{'Invoice No'|__}}.</p></td>
                    <td><b>{{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}{{order.number}}</b></td>
                </tr>
            </table>
        </div>
        <table id=\"items\">
            <tr>
                <th align=\"center\"><p style=\"color:white;\">{{'Category'|__}}</p></th>
                <th width=\"48%\"><p style=\"color:white;\">{{'Description'|__}}</p></th>
    \t\t\t<th align=\"center\"><p style=\"color:white;\">{{'Quantity'|__}}</p></th>
                <th {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %}><p style=\"color:white;\">{{'Weight'|__}}</p></th>
            </tr>
            {% for item in order.items %}
                <tr>
                    <th align=\"center\" style=\"background:#fff\"><p>{{item.category.name|capitalize}}</p></th>
                    <th width=\"48%\" style=\"background:#fff\"><p>{{item.description}}</p></th>
        \t\t\t<th align=\"center\" style=\"background:#fff\"><p>{{item.quantity}}</p></th>
                    <th {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} style=\"background:#fff\"><p>{{item.weight}}</p></th>
                </tr>
            {% endfor %}

            {% set total = 0 %}
            {% if order.return_defray == 1 %}
                {% set total = total + order.package_fee %}
            {% endif %}
            {% if order.return_package_fee == 1 %}
                {% set total = total + order.return_courier_fee %}
            {% endif %}
             {% set sub_total = total + (order.courier_fee) %}
            {% if order.payment_type  %} <!-- last it was order.payment_type == 1 -->
              {% if settings.taxes.type == 1 %}
                {% set total = total + (order.courier_fee+(order.tax/100*order.courier_fee)+(order.insurance/100*order.courier_fee)) %}
              {% else %}
                {% set total = total + (order.courier_fee+(order.tax_sgst/100*order.courier_fee)+(order.tax_cgst/100*order.courier_fee)+(order.insurance/100*order.courier_fee)) %}
              {% endif %}  
            {% endif %}


           
    \t\t<tr>
    \t\t\t<td {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line\">{{'Sub Total'|__}}</td>
    \t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"><span class=\"price\"> {{sub_total|currency}} </span> </div></td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td  {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line\">{{'TAX'|__}} +</td>
          {% if settings.taxes.type == 1 %}
    \t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> {{(order.tax/100*order.courier_fee)|currency}}</div></td>
          {% else %}
          <td  align=\"right\" class=\"total-value\"><div id=\"total\"> {{((order.tax_sgst/100*order.courier_fee)+(order.tax_cgst/100*order.courier_fee))|currency}} </div></td>
          {% endif %}  
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td  {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line\">{{'Insurance'|__}} +</td>
    \t\t\t<td  align=\"right\" class=\"total-value\"><div id=\"total\"> {{(order.insurance/100*order.courier_fee)|currency}} </div></td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td {% if currentLang == 'ar' %}align=\"left\"{% else %}align=\"right\"{% endif %} colspan=\"3\" class=\"total-line balance\"><p style=\"color:white;\">{{'Grand total'|__}} </p></td>


    \t\t\t<td align=\"right\" class=\"total-value balance\"><div class=\"due\"> <p style=\"color:white;\"><b>{{total|currency}}</b></p></div></td>
    \t\t</tr>
        </table>

        <!--    end related transactions -->

            <div id=\"terms\">
                <h5>{{'TERMS'|__}}</h5>
    \t\t\t <table id=\"related_transactions\" style=\"width: 100%\">
    \t\t\t\t<p align=\"justify\">{{settings.invoice.terms}}</p>
    \t\t\t</table>
    \t\t\t</br></br></br></br>
    \t\t\t<table id=\"signing\">
    \t\t\t\t<tr class=\"noBorder\">
    \t\t\t\t\t<td align=\"center\"><h4></h4></td>
    \t\t\t\t\t<td align=\"center\"><h4></h4></td>
    \t\t\t\t</tr>
    \t\t\t\t<tr class=\"noBorder\">
    \t\t\t\t\t<td align=\"center\">{% if settings.invoice.signing_company|capitalize|__ %}{{settings.invoice.signing_company|capitalize|__}}{% endif %}</td>
    \t\t\t\t\t<td align=\"center\">{% if settings.invoice.signing_customer|capitalize|__ %}{{settings.invoice.signing_customer|capitalize|__}}{% endif %}</td>
    \t\t\t\t</tr>
    \t\t\t</table>
            </div>
    </div>

    {% elseif this.param.type == 'label' %}
        {% if printTemplate == \"print_template_advance\" %}

          {% if orders  %}

            {% for order in orders %}
              <table class=\"page-wrap\">
                <tr>
                  <table width=\"100%\">
                      <tr>
                          <td style=\"border: 0;  text-align: center;\" width=\"100%\">
                              <h2>{{'Shipping Declaration'|__}}</h2>
                          </td>
                      </tr>
                  </table>
                </tr>
                <tr>
                  <div class=\"shipment\">
                      <div class=\"container l1\">
                          <div class=\"row\">
                              <div class=\"col-lg-4\" id=\"logo\">
                                      <img src='{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}'      />
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"barcode col-sm-4 \">
                                  <p>{{ barcodeHTML({data: order.barcode, type: 'CODABAR',width:3}) }}</p>
                              </div>
                              <div class=\"col-sm-offset-4 col-sm-4 crbt\">
                                  <span>#{{'CRBT delivery'|__}}</span>
                              </div>
                          </div>
                      </div>
                      <div class=\"container l2\">
                          <div class=\"row\">
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">{{'Shipping'|__}}#: </span><span>{{order.number}}</span>
                              </div>
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">{{'Sender'|__}}: </span>
                                  <span>
                                      {%if order.sender %}
                                        {{order.sender.name}}
                                      {% else %}
                                        {{order.sender_name}}
                                      {% endif %}  
                                    </span>
                              </div>
                              <div class=\"col-sm-4 td last\">
                                  <span class=\"spTitle\">{{'Recipient'|__}}: </span>
                                  <span>
                                      {%if order.receiver %}
                                        {{order.receiver.name}}
                                      {% else %}
                                        {{order.receiver_name}}
                                      {% endif %}
                                        
                                    </span>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">{{'Date'|__}}: {{order.ship_date|date(settings.dateformat)}}  {{order.ship_date|date('h:i a')}}</span><span></span>
                              </div>
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">{{'Phone'|__}}: </span>
                                  <span>
                                      {%if order.sender %}
                                        {{order.sender.mobile}}
                                      {% else %}
                                        {{order.sender_mobile}}
                                      {% endif %}
                                  </span>
                              </div>
                              <div class=\"col-sm-4 td last\">
                                  <span class=\"spTitle\">{{'Address'|__}}: </span>
                                  <span>
                                    {%if order.receiver_address %}
                                        {{order.receiver_address.name}}
                                    {% else %}
                                        {{order.sender_addr}}
                                    {% endif %}
                                    
                                  </span>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">{{'barcode'|__}}</span><span>{{ barcodeHTML({data: order.barcode, type: 'CODABAR'}) }}</span>
                              </div>
                              <div class=\"col-sm-4 td\">
                                  <span class=\"spTitle\">{{'Email'|__}}: </span>
                                  <span style=\"font-size:20px\">
                                    {%if order.receiver %}
                                        {{order.receiver.email}}
                                    {% else %}
                                        {{' - '}}
                                    {% endif %}
                                    
                                  </span>
                              </div>
                              <div class=\"col-sm-4 td last\">
                                  <span class=\"spTitle\">{{'City'|__}}: </span>
                                  <span>
                                    {%if order.receiver_address %}
                                        {{order.receiver_address.thecity.name}}
                                    {% else %}
                                        {{order.receiverCity.name}}
                                    {% endif %}
                                    
                                  </span>
                              </div>
                          </div>
                          <div class=\"row\">
                              <div class=\"col-sm-offset-8 col-sm-4 last lastOne\">
                                  <span class=\"spTitle\">{{'Sector'|__}}: </span>
                                  <span>
                                    {% if order.receiver_address %}
                                        {{order.receiver_address.area.name}}
                                    {% else %}
                                        {{order.receiver_area.name}}
                                    {% endif %}
                                  </span>
                              </div>
                          </div>

                      </div>

                      <div class=\"container l3\">
                          <div class=\"row\">
                              <h3>{{'Package content'|__}}</h3>
                          </div>
                          <hr style=\"color:#bbb;width:100%;margin-top:-20px;\" />
                      </div>

                      <div class=\"container l4\">
                          <table width=\"100%\">
                              <tr>
                                  <th align=\"center\"><p>{{'Product'|__}}</p></th>
                                  <th align=\"center\"><p>{{'Amount'|__}}</p></th>
                                  <th align=\"center\"><p>{{'Bottom return'|__}}</p></th>
                                  <th align=\"center\"><p>{{'CMD number'|__}}</p></th>
                                  <th align=\"center\"><p>{{'Weight'|__}}</p></th>
                                  <th align=\"center\"><p>{{'Comment'|__}}</p></th>
                              </tr>
                              {% for item in order.items %}
                              <tr>
                                  <td style=\"border: 0;  text-align: left\" width=\"18%\" >{{item.category.name|capitalize}}</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"16%\" >{{item.quantity}}</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"16%\" ></td>
                                  <td style=\"border: 0;  text-align: left\" width=\"14%\" >{{item.id}}</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"14%\" >{{item.weight}}</td>
                                  <td style=\"border: 0;  text-align: left\" width=\"18%\" >{{item.description}}</td>
                              </tr>
                              {% else %}
                              <tr>
                                  <td colspan=\"6\" style=\"border: 0;  text-align: center\" width=\"100%\" >{{'No content added'|__}}</td>
                              </tr>
                              {% endfor %}
                          </table>
                      </div>
                  </div>
                </tr>
              </table>

            {% endfor %}
          {% else %}
              <div class=\"page-wrap\" style=\"page-break-after: always;\">
                <table width=\"100%\">
                    <tr>
                        <td style=\"border: 0;  text-align: center;\" width=\"100%\">
                            <h2>{{'Shipping Declaration'|__}}</h2>
                        </td>
                    </tr>
                </table>
                <div class=\"shipment\">
                    <div class=\"container l1\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\" id=\"logo\">
                                    <img src='{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}'      />
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"barcode col-sm-4 \">
                                <p>{{ barcodeHTML({data: order.barcode, type: 'CODABAR',width:3}) }}</p>
                            </div>
                            <div class=\"col-sm-offset-4 col-sm-4 crbt\">
                                <span>#{{'CRBT delivery'|__}}</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"container l2\">
                        <div class=\"row\">
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">{{'Shipping'|__}}#: </span><span>{{order.number}}</span>
                            </div>
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">{{'Sender'|__}}: </span>
                                <span>
                                      {%if order.sender %}
                                        {{order.sender.name}}
                                      {% else %}
                                        {{order.sender_name}}
                                      {% endif %}  
                                    </span>
                            </div>
                            <div class=\"col-sm-4 td last\">
                                <span class=\"spTitle\">{{'Recipient'|__}}: </span>
                                <span>
                                      {%if order.receiver %}
                                        {{order.receiver.name}}
                                      {% else %}
                                        {{order.receiver_name}}
                                      {% endif %}
                                        
                                    </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">{{'Date'|__}}: {{order.ship_date|date(settings.dateformat)}}  {{order.ship_date|date('h:i a')}}</span><span></span>
                            </div>
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">{{'Phone'|__}}: </span>
                                <span>
                                      {%if order.sender %}
                                        {{order.sender.mobile}}
                                      {% else %}
                                        {{order.sender_mobile}}
                                      {% endif %}
                                  </span>
                            </div>
                            <div class=\"col-sm-4 td last\">
                                <span class=\"spTitle\">{{'Address'|__}}: </span>
                                <span>
                                    {%if order.receiver_address %}
                                        {{order.receiver_address.name}}
                                    {% else %}
                                        {{order.sender_addr}}
                                    {% endif %}
                                    
                                  </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">{{'barcode'|__}}</span><span>{{ barcodeHTML({data: order.barcode, type: 'CODABAR'}) }}</span>
                            </div>
                            <div class=\"col-sm-4 td\">
                                <span class=\"spTitle\">{{'Email'|__}}: </span>
                                <span style=\"font-size:20px\">
                                    {%if order.receiver %}
                                        {{order.receiver.email}}
                                    {% else %}
                                        {{' - '}}
                                    {% endif %}
                                    
                                  </span>
                            </div>
                            <div class=\"col-sm-4 td last\">
                                <span class=\"spTitle\">{{'City'|__}}: </span>
                                <span>
                                    {%if order.receiver_address %}
                                        {{order.receiver_address.thecity.name}}
                                    {% else %}
                                        {{order.receiverCity.name}}
                                    {% endif %}
                                    
                                  </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-offset-8 col-sm-4 last lastOne\">
                                <span class=\"spTitle\">{{'Sector'|__}}: </span>
                                <span>
                                    {% if order.receiver_address %}
                                        {{order.receiver_address.area.name}}
                                    {% else %}
                                        {{order.receiver_area.name}}
                                    {% endif %}
                                  </span>
                            </div>
                        </div>

                    </div>

                    <div class=\"container l3\">
                        <div class=\"row\">
                            <h3>{{'Package content'|__}}</h3>
                        </div>
                        <hr style=\"color:#bbb;width:100%;margin-top:-20px;\" />
                    </div>

                    <div class=\"container l4\">
                        <table width=\"100%\">
                            <tr>
                                <th align=\"center\"><p>{{'Product'|__}}</p></th>
                                <th align=\"center\"><p>{{'Amount'|__}}</p></th>
                                <th align=\"center\"><p>{{'Bottom return'|__}}</p></th>
                                <th align=\"center\"><p>{{'CMD number'|__}}</p></th>
                                <th align=\"center\"><p>{{'Weight'|__}}</p></th>
                                <th align=\"center\"><p>{{'Comment'|__}}</p></th>
                            </tr>
                            {% for item in order.items %}
                            <tr>
                                <td style=\"border: 0;  text-align: left\" width=\"18%\" >{{item.category.name|capitalize}}</td>
                                <td style=\"border: 0;  text-align: left\" width=\"16%\" >{{item.quantity}}</td>
                                <td style=\"border: 0;  text-align: left\" width=\"16%\" ></td>
                                <td style=\"border: 0;  text-align: left\" width=\"14%\" >{{item.id}}</td>
                                <td style=\"border: 0;  text-align: left\" width=\"14%\" >{{item.weight}}</td>
                                <td style=\"border: 0;  text-align: left\" width=\"18%\" >{{item.description}}</td>
                            </tr>
                            {% else %}
                            <tr>
                                <td colspan=\"6\" style=\"border: 0;  text-align: center\" width=\"100%\" >{{'No content added'|__}}</td>
                            </tr>
                            {% endfor %}
                        </table>
                    </div>
                </div>
            </div>

          {% endif %}
        {% else %}
            <div id=\"page-wrap\">
              <div class=\"print-block\">
                <div class=\"row\">
                    <!-- {{order}} -->
                  <div class=\"col-md-12 capitalize_text d-flex justify-content-between\">
                    <p> {{'FROM'|__}} : {{order.sender.name}} </p>
                    <p> {{'TO'|__}} : {{order.receiver.name}}  </p>
                  </div>
                </div>

                <div class=\"print-break\"></div>

                <div class=\"print-loction\">

                        <!-- <table width=\"100%\">
                            <tr>
                                <td width=\"25%\">
                                    <h2 style=\"font-size:20px\">
                                        <!-- {% if settings.tracking.default_tracking_id == 1 %}
                                            {{order.sender_address.thecountry.id}}
                                        {% elseif settings.tracking.default_tracking_id == 2 %}
                                            {{order.sender_address.thestate.id}}
                                        {% elseif settings.tracking.default_tracking_id == 3 %}
                                            {{order.sender_address.thecity.id}}
                                        {% elseif settings.tracking.default_tracking_id == 4 %}
                                            {{order.sender_address.area.id}}
                                        {% endif %} -->
                                        <!-- <br /> -->
                                        <!-- <span style=\"font-size:14px;display:block\">{{'FROM'|__}} : {{order.sender.name}} </span>
                                    </h2>
                                </td> -->
                                <!-- <td width=\"80%\" style=\"text-align:center;\" class=\"barcode\">
                                    {{ barcodeHTML({data: order.barcode, type: 'CODABAR', width: '4', height: '50'}) }}
                                    <p>{{order.barcode}}</p>
                                </td> -->
                                <!-- <td width=\"10%\">
                                    <h2 style=\"padding-left: 20px;font-size:20px;text-align:right\"> -->
                                        <!-- {% if order.receiver_address %}
                                        {% if settings.tracking.default_tracking_id == 1 %}
                                            {{order.receiver_address.thecountry.id}}
                                        {% elseif settings.tracking.default_tracking_id == 2 %}
                                            {{order.receiver_address.thestate.id}}
                                        {% elseif settings.tracking.default_tracking_id == 3 %}
                                            {{order.receiver_address.thecity.id}}
                                        {% elseif settings.tracking.default_tracking_id == 4 %}
                                            {{order.receiver_address.area.id}}
                                        {% endif %}
                                        {% else %}
                                            -
                                        {% endif %} -->
                                        <!-- <br /> -->
                                        <!-- <span style=\"font-size:14px;display:block\">{{'TO'|__}} : {{order.receiver.name}} </span>
                                    </h2>
                                </td>
                            </tr>
                        </table>  -->

                </div>
                <div>
                        <table>
                            {% if order.receiver_address %}
                            <tr>
                                <td width=\"35%\">Total Weight:&nbsp;</td>
                                <td>{{order.total_weight}}</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Payment Method:&nbsp;</td>
                                <td>{{order.payment_method}}</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Sender Address:&nbsp;</td>
                                <td>{{order.sender_address.area.name}}</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Ship Date:&nbsp;</td>
                                <td>{{order.ship_date}}</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Create At:&nbsp;</td>
                                <td>{{order.created_at}}</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">Receiver Address:&nbsp;</td>
                                <td>{{order.receiver_address.area.name}}{% if order.receiver_address.zipcode %}, {{'ZIP'|__}}:{{order.receiver_address.zipcode}}{% endif %}{% if order.receiver_address.thecity %}, {{order.receiver_address.thecity.name}}{% endif %}{% if order.receiver_address.thestate %}, {{order.receiver_address.thestate.name}}{% endif %}{% if order.receiver_address.thecountry %}, {{order.receiver_address.thecountry.name}}{% endif %}</td>
                            </tr>
                            <tr>
                                <td width=\"35%\">{{'Phone'|__}}:&nbsp;</td>
                                <td>{{order.receiver.mobile}}</td>
                            </tr>
                            {% endif %}
                            <!-- <tr>
                                <td width=\"35%\">{{'Sender'|__}}:&nbsp;</td>
                                <td>{{order.sender.name}}</td>
                            </tr> -->
                        </table>
                </div>
              </div>
            </div>
        {% endif %}
    {% elseif this.param.type == 'label-v2' %}
        <div class=\"page-wrap\" style=\"page-break-after: always;\">
            <table class=\"table\" style=\" margin-left: auto; margin-right: auto; font-family:Arial, Helvetica, sans-serif;\" border=\"0\" width=\"100%\" >
                <tbody>
                    <tr>
                        <td>
                            <table style=\"text-align: center; table-layout:fixed;\"   cellspacing=\"2\" width=\"100%\">
                                <tbody>
                                    <tr>
                                        <td width=\"75%\">
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=6 face=\"arial\"><strong>{{ settings.company.title }}</strong></font></p>
                                        </td>
                                        <td width=\"25%\">
                                            <p style=\"text-align: center;\"><img src='{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo-10.png{% endif %}' border='0'></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{'now'|date(settings.dateformat)}} {{'now'|date('h:i a')}}
                            <hr />
                            <table  width=\"100%\" style=\"text-align: center; table-layout:fixed;\">
                                <tbody>
                                    <tr bgcolor=\"#d6eeff\">
                                        <td width=\"50%\">
                                            <p style=\"text-align: center;\"><strong><font size=\"5\">{{'FROM'|__}}</font></strong></p>
                                        </td>
                                        <td width=\"50%\">
                                            <p style=\"text-align: center;\"><font size=\"5\" face=\"arial\"><strong>{{'SHIP TO'|__}}</strong></font></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <font size=4><td align=\"center\"  style=\" border-top-color:#000000; border-right-color:#333; border-right-width:2px;border-right-style:solid;  border-collapse: collapse;\">
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=\"4\"><b>{{order.sender.name}}</b></font></p>
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \">{{order.sender.mobile}}</p>
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \"><strong>{{order.sender_address.area.name}} {% if order.sender_address.zipcode %}- {{'ZIP'|__}}:{{order.sender_address.zipcode}}{% endif %}</strong></p>
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=5><strong>{{order.sender_address.thecity.name}} | {{order.sender_address.thestate.name}} | {{order.sender_address.thecountry.name}}</strong></font></p>
                                        </td>
                                        <td>
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=\"4\"><b>{{order.receiver.name}}</b></font></p>
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \">{{order.receiver.mobile}}</p>
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %}; \"><strong>{{order.receiver_address.area.name}} {% if order.receiver_address.zipcode %}- {{'ZIP'|__}}:{{order.receiver_address.zipcode}}{% endif %}</strong></p>
                                            <p style=\"text-align: {% if currentLang == 'ar' %}right{% else %}left{% endif %};\"><font size=5><strong>{{order.receiver_address.thecity.name}} | {{order.receiver_address.thestate.name}} | {{order.receiver_address.thecountry.name}}</strong></font></p>
                                        </td></font>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <table style=\"text-align: center;\" width=\"100%\">
                                <tbody>
                                    <tr>
                                        <td width=\"50%\">
                                            <p><strong>{{'DELIVERY TIME'|__}}</strong></p>
                                            <p><font size=4><b>{{order.deliverytime.name}}</b></font></p>
                                        </td>
                                        {% if order.courier %}
                                            <td width=\"50%\">
                                                <p><strong>{{'COMPANY COURIER'|__}}</strong></p>
                                                <p><font size=4><strong><b>{{order.courier.name}}</b></strong></p>
                                            </td>
                                        {% endif %}
                                    </tr>
                              </tbody>
                          </table>
                          <hr />
                          <table style=\"text-align: center;\" width=\"100%\">
                                <tbody>
                                    <tr>
                                        <td width=\"50%\">
                                            <p><strong>{{'PIECES'|__}} | {{'WEIGHT'|__}}</strong></p>
                                        </td>
                                        <td width=\"50%\">
                                            <p><strong>{{'CONTENTS'|__}}</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=\"50%\">
                                            <p><font size=4>{{order.items.count}} | {{order.items.sum('weight')}}</font></p>
                                        </td>
                                        <td width=\"50%\">
                                            <p>
                                                {% for item in order.items %}
                                                    <font size=4>{{item.category.name|capitalize}}</font></br>
                                                {% endfor %}
                                        </p>
                                        </td>
                                    </tr>
                              </tbody>
                          </table>
                          <hr />
                          <center  width=\"100%\">
                            <div class=\"output\">
                              <p style='padding:5px; text-align:center; font-size:100px; font-weight:bold;font-family:Arial,Helvetica;'>
                                  {{order.receiver_address.area.id}}
                              </p>
                            </div>
                          </center>
                          <hr />
                          <center  width=\"100%\">
                            <div class=\"output\">
                              <p style='padding:5px; text-align:center; font-size:24px; font-family:Arial,Helvetica;'>{{'TRACKING'|__}} #</p>
                              <section class=\"output\">
                                  {{ barcodeHTML({data: order.barcode, type: 'CODABAR', width: '4', height: '100'}) }}<br />
                                  <h2>{{order.barcode}}</h2>
                              </section>
                            </div>
                          </center>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          {{ barcodeHTML({data: order.barcode, type: 'QRCODE', width: '5', height: '5'}) }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    {% endif %}
{% put styles %}
    <style>
        .capitalize_text p {
            text-transform: uppercase;
        }
    body { background: #fff;color: black}



    {% if this.param.type == 'shipment' %}
        * { margin: 0; padding: 0; }
        body {
            font: 14px/1.4 Helvetica, Arial, sans-serif;
        }
        .page-wrap { width: 800px; margin: 0 auto;page-break-after: always; }

        textarea { border: 0; font: 14px Helvetica, Arial, sans-serif; overflow: hidden; resize: none; }
        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }
\t\ttr.noBorder td {
\t\t  border: 0;
\t\t}

\t\ttd.Border td {
\t\t  border: 1px;
\t\t}
        {% if currentLang == 'ar' %}
            p,b, strong{
                font-family: Cairo;
                font-weight: bold;
            }
        {% endif %}

        #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

        #address { width: 250px; height: 150px; float: left; }
        #customer { overflow: hidden; }
        #barcodeHTML  { text-align: center;}
        #barcodeHTML > div { margin:auto}
        #customer-title { font-size: 20px; font-weight: bold; float: left; }

        #meta { margin-top: 1px; width: 100%; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #6c757d; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

\t\t#signing { margin-top: 0px; width: 100%; float: center; }
        #signing td { text-align: center;  }
        #signing td.signing-head { text-align: center; background: #eee; }
        #signing td textarea { width: 100%; height: 20px; text-align: center; }

        #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
        #items th { background: #6c757d; }
        #items textarea { width: 80px; height: 50px; }
        #items tr.item-row td {  vertical-align: top; }
        #items td.description { width: 300px; }
        #items td.item-name { width: 175px; }
        #items td.description textarea, #items td.item-name textarea { width: 100%; }
        #items td.total-line { border-right: 0; text-align: {% if currentLang == 'ar' %}left{% else %}right{% endif %}; }
        #items td.total-value { border-left: 0; padding: 10px; }
        #items td.total-value textarea { height: 20px; background: none; }
        #items td.balance { background: #6c757d; }
        #items td.blank { border: 0; }

        #terms { text-align: center; margin: 20px 0 0 0; }
        #terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
        #terms textarea { width: 100%; text-align: center;}



        .delete-wpr { position: relative; }
        .delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

        /* Extra CSS for Print Button*/
        .button {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            overflow: hidden;
            margin-top: 20px;
            padding: 12px 12px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: all 60ms ease-in-out;
            transition: all 60ms ease-in-out;
            text-align: center;
            white-space: nowrap;
            text-decoration: none !important;

            color: #fff;
            border: 0 none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.3;
            -webkit-appearance: none;
            -moz-appearance: none;

            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 160px;
            -ms-flex: 0 0 160px;
            flex: 0 0 160px;
        }
        .button:hover {
            -webkit-transition: all 60ms ease;
            transition: all 60ms ease;
            opacity: .85;
        }
        .button:active {
            -webkit-transition: all 60ms ease;
            transition: all 60ms ease;
            opacity: .75;
        }
        .button:focus {
            outline: 1px dotted #959595;
            outline-offset: -4px;
        }

        .button.-regular {
            color: #202129;
            background-color: #edeeee;
        }
        .button.-regular:hover {
            color: #202129;
            background-color: #e1e2e2;
            opacity: 1;
        }
        .button.-regular:active {
            background-color: #d5d6d6;
            opacity: 1;
        }

        .button.-dark {
            color: #FFFFFF;
            background: #333030;
        }
        .button.-dark:focus {
            outline: 1px dotted white;
            outline-offset: -4px;
        }

        @media print
        {
        .page-wrap { page-break-after: always; }
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
\t\th4 {
\t\t\tborder-bottom: 1px solid black;
\t\t}

    {% elseif this.param.type == 'label' or this.param.type == 'label-1' %}
        {% if printTemplate == \"print_template_advance\"   %}
            body {
                font: 14px/1.4 Helvetica, Arial, sans-serif;

            }
            .page-wrap { width: 90%; page-break-after: always;float: none;position: relative;display: block;}
            .shipment{margin-top:20px;margin-bottom:20px;font-size:30px   }
            table{margin-top:10px;margin-bottom:10px }
            table tr{margin-bottom:15px; }
            table tr td h2{margin-top: 30px;font-size:35px;font-weight:bold;  }
            .row{margin-bottom:20px }
            #logo img{width:250px;height:120px  }
            .crbt{float: right;font-weight: bold;margin-top:20px;margin-left:30%; }
            .l2{margin-top:20px;margin-bottom:20px;  }
            .l2 div.row{margin-bottom:0 }
            .l2 div.row div.td{width:30%;border-right:solid 1px #bbb;padding:5px 10px 5px 30px   }
            .l2 div.row div.last{border: none;}
            .lastOne{margin-left:69%  }
            .l2 .spTitle{font-weight:bold;  }
            .l4 table tr{border-bottom:#bbb solid 1px }
            @media print
            {
            .page-wrap { page-break-after: always;float: none;position: relative;display: block;     height: 100mm;
    max-height: 100mm;
    min-height: 100mm;}
                .no-print, .no-print *
                {
                    display: none !important;
                }
            }
        {% else %}
            #page-wrap {
              width: 100%;
              /* min-height: 4in; */
            }
            .table th, .table td {
                border-top: 0 !important;
            }
            hr {
              height: 1px;
              background-color: black;
            }

            .print-loction .barcode > div {
                margin: auto !important;
            }

            .delete-wpr { position: relative; }
            \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

            \t/* Extra CSS for Print Button*/
            \t.button {
            \t\tdisplay: -webkit-box;
            \t\tdisplay: -webkit-flex;
            \t\tdisplay: -ms-flexbox;
            \t\tdisplay: flex;
            \t\toverflow: hidden;
            \t\tmargin-top: 20px;
            \t\tpadding: 12px 12px;
            \t\tcursor: pointer;
            \t\t-webkit-user-select: none;
            \t\t-moz-user-select: none;
            \t\t-ms-user-select: none;
            \t\tuser-select: none;
            \t\t-webkit-transition: all 60ms ease-in-out;
            \t\ttransition: all 60ms ease-in-out;
            \t\ttext-align: center;
            \t\twhite-space: nowrap;
            \t\ttext-decoration: none !important;

            \t\tcolor: #fff;
            \t\tborder: 0 none;
            \t\tborder-radius: 4px;
            \t\tfont-size: 14px;
            \t\tfont-weight: 500;
            \t\tline-height: 1.3;
            \t\t-webkit-appearance: none;
            \t\t-moz-appearance: none;

            \t\t-webkit-box-pack: center;
            \t\t-webkit-justify-content: center;
            \t\t-ms-flex-pack: center;
            \t\tjustify-content: center;
            \t\t-webkit-box-align: center;
            \t\t-webkit-align-items: center;
            \t\t-ms-flex-align: center;
            \t\talign-items: center;
            \t\t-webkit-box-flex: 0;
            \t\t-webkit-flex: 0 0 160px;
            \t\t-ms-flex: 0 0 160px;
            \t\tflex: 0 0 160px;
            \t}
            \t.button:hover {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .85;
            \t}
            \t.button:active {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .75;
            \t}
            \t.button:focus {
            \t\toutline: 1px dotted #959595;
            \t\toutline-offset: -4px;
            \t}

            \t.button.-regular {
            \t\tcolor: #202129;
            \t\tbackground-color: #edeeee;
            \t}
            \t.button.-regular:hover {
            \t\tcolor: #202129;
            \t\tbackground-color: #e1e2e2;
            \t\topacity: 1;
            \t}
            \t.button.-regular:active {
            \t\tbackground-color: #d5d6d6;
            \t\topacity: 1;
            \t}

            \t.button.-dark {
            \t\tcolor: #FFFFFF;
            \t\tbackground: #333030;
            \t}
            \t.button.-dark:focus {
            \t\toutline: 1px dotted white;
            \t\toutline-offset: -4px;
            \t}

            \t@media print
            \t{
            \t\t.no-print, .no-print *
            \t\t{
            \t\t\tdisplay: none !important;
            \t\t}
            \t}

                .print-block {
                    border: 1px solid black;
                    padding: 10px;
                    -webkit-border-radius: 2px;
                    -moz-border-radius: 2px;
                    border-radius: 15px;
                    width: 98%;
                    margin-bottom: 120px;
                    /* height: 275px; */
                    background-color: #ffffff !important;
                    color: black;
                    margin: 10px auto;
                }
            \t.print-block{
                    font-size: 19px;
                    font-weight: bold;
            \t}

            \t.print-break{
            \t\tborder: 1px solid black;
            \t    margin-bottom: 5px;
            \t    margin-top: -10px;
            \t}
            \t.print-loction h2{
            \t\tcolor: black;
            \t}
                @media  print {
                    .print-block {
                        background-color: #ffffff !important;
                        -webkit-print-color-adjust: exact;
                    }
                    #kt_header{
                    \tdisplay: none;
                    }
                    div#kt_content{
                    \tpadding-top: 0px;
                    }
                    div#kt_header, div#kt_aside, button#kt_aside_close_btn, div#kt_header_mobile{
                    \tdisplay: none !important;
                    }
                }
            {% endif %}
        {% elseif this.param.type == 'label-v2' %}
            .page-wrap { width: 800px; margin: 0 auto;page-break-after: always;  }
            .table th, .table td {
                border-top: 0 !important;
            }
            hr {
              height: 1px;
              background-color: black;
            }

            .delete-wpr { position: relative; }
            \t.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

            \t/* Extra CSS for Print Button*/
            \t.button {
            \t\tdisplay: -webkit-box;
            \t\tdisplay: -webkit-flex;
            \t\tdisplay: -ms-flexbox;
            \t\tdisplay: flex;
            \t\toverflow: hidden;
            \t\tmargin-top: 20px;
            \t\tpadding: 12px 12px;
            \t\tcursor: pointer;
            \t\t-webkit-user-select: none;
            \t\t-moz-user-select: none;
            \t\t-ms-user-select: none;
            \t\tuser-select: none;
            \t\t-webkit-transition: all 60ms ease-in-out;
            \t\ttransition: all 60ms ease-in-out;
            \t\ttext-align: center;
            \t\twhite-space: nowrap;
            \t\ttext-decoration: none !important;

            \t\tcolor: #fff;
            \t\tborder: 0 none;
            \t\tborder-radius: 4px;
            \t\tfont-size: 14px;
            \t\tfont-weight: 500;
            \t\tline-height: 1.3;
            \t\t-webkit-appearance: none;
            \t\t-moz-appearance: none;

            \t\t-webkit-box-pack: center;
            \t\t-webkit-justify-content: center;
            \t\t-ms-flex-pack: center;
            \t\tjustify-content: center;
            \t\t-webkit-box-align: center;
            \t\t-webkit-align-items: center;
            \t\t-ms-flex-align: center;
            \t\talign-items: center;
            \t\t-webkit-box-flex: 0;
            \t\t-webkit-flex: 0 0 160px;
            \t\t-ms-flex: 0 0 160px;
            \t\tflex: 0 0 160px;
            \t}
            \t.button:hover {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .85;
            \t}
            \t.button:active {
            \t\t-webkit-transition: all 60ms ease;
            \t\ttransition: all 60ms ease;
            \t\topacity: .75;
            \t}
            \t.button:focus {
            \t\toutline: 1px dotted #959595;
            \t\toutline-offset: -4px;
            \t}

            \t.button.-regular {
            \t\tcolor: #202129;
            \t\tbackground-color: #edeeee;
            \t}
            \t.button.-regular:hover {
            \t\tcolor: #202129;
            \t\tbackground-color: #e1e2e2;
            \t\topacity: 1;
            \t}
            \t.button.-regular:active {
            \t\tbackground-color: #d5d6d6;
            \t\topacity: 1;
            \t}

            \t.button.-dark {
            \t\tcolor: #FFFFFF;
            \t\tbackground: #333030;
            \t}
            \t.button.-dark:focus {
            \t\toutline: 1px dotted white;
            \t\toutline-offset: -4px;
            \t}

            \t@media print
            \t{
              .page-wrap { page-break-after: always; }
            \t\t.no-print, .no-print *
            \t\t{
            \t\t\tdisplay: none !important;
            \t\t}
            \t}
            {% endif %}
            @page {
              size: A4;
              margin: 0;
            }
            @media print {
              .page-wrap {
                page-break-after: always;
                position: relative;
                float: none;
              }
              /* ... the rest of the rules ... */
            }
    </style>
{% endput %}
{% put scripts %}
<script type=\"text/javascript\">
KTUtil.ready(function () {
    window.print(\".shipment\");
    //setTimeout(function(){window.close();},10);
});
</script>
{% endput %}", "C:\\xampp\\htdocs\\ebilty-web/themes/spotlayer/pages/dashboard/order-print.htm", "");
    }
}
