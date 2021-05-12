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

/* C:\wamp64\www\company\ebilty-web/themes/spotlayer/pages/dashboard/order-deliver.htm */
class __TwigTemplate_872dedea25f46fc6afc8b4bf4d257e9da0e1e0be568dd15e29bbdcec893904b9 extends \Twig\Template
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
        echo "<!-- begin:: Section -->
<div class=\"kt-sc-faq-3 kt-sc-feedback\">
    <div class=\"kt-sc__title\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver Shipment"]);
        echo ": <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 4), "prefix_order", [], "any", false, false, false, 4), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 4), "numbers_order", [], "any", false, false, false, 4), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 4), "html", null, true);
        echo "</b>
    </div>
    <div class=\"kt-sc__subtitle\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Complete the form to confirm the delivery of this shipment!"]);
        echo "
    </div>
    <div class=\"kt-sc__bg\">
        <svg id=\"ab82d996-d758-4a94-9ad9-9e4bd5f70489\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"949.57\" height=\"703.65\" viewBox=\"0 0 949.57 703.65\"><title>";
        // line 10
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver Shipment"]);
        echo "</title><path d=\"M808.53,515.61,816,511c.71-.45,1.41-.93,2.13-1.38a71.35,71.35,0,0,1-59.18-67,70.61,70.61,0,0,1,6.16-32.5,71.47,71.47,0,0,1,45.81-39.52l-.37,29.4,16.15-32a.64.64,0,0,1,.2,0,71.34,71.34,0,0,1,74.59,67.94c.06,1.36,0,2.7,0,4,5.62-6.41,10.72-13.28,14.1-20.81,6.84-15.25,7-32.52,6.43-53.51-1.08-41.6-2.87-83.51-5.21-125.3a71.3,71.3,0,0,1-63.35-67.49c-.1-2.19-.07-4.34,0-6.48,0-.53,0-1.07.08-1.6.14-2.07.33-4.12.65-6.14,0-.34.12-.66.18-1q.44-2.57,1.05-5.08c.16-.62.31-1.25.48-1.87.5-1.82,1-3.61,1.69-5.38.21-.59.46-1.16.68-1.74.51-1.3,1.06-2.58,1.64-3.85.31-.67.61-1.33.94-2,.08-.17.15-.34.24-.51l0,0a71.29,71.29,0,0,1,83.76-36.18l-.48,38.26,16-31.6a70.9,70.9,0,0,1,34,76.87h.08c-.11.51-.27,1-.39,1.5-.22.94-.46,1.87-.72,2.8-.34,1.19-.72,2.36-1.11,3.53-.3.87-.59,1.76-.92,2.62-.48,1.26-1,2.49-1.58,3.72-.32.72-.61,1.45-1,2.16q-1.37,2.76-3,5.4c-.37.61-.79,1.19-1.18,1.8-.76,1.18-1.53,2.35-2.36,3.49-.51.7-1.06,1.37-1.6,2.06-.78,1-1.58,2-2.41,2.91-.59.67-1.19,1.33-1.81,2-.87.92-1.77,1.81-2.7,2.69-.61.59-1.23,1.18-1.87,1.74-1.05.93-2.15,1.82-3.26,2.69-.56.44-1.1.9-1.68,1.32q-2.53,1.88-5.23,3.53c-.34.2-.7.37-1,.57-1.5.89-3,1.72-4.61,2.5-.67.33-1.37.62-2.06.93-1.29.58-2.59,1.14-3.92,1.65-.77.29-1.56.56-2.35.83-1.31.45-2.64.86-4,1.23-.8.22-1.59.44-2.4.63-1.46.35-2.95.64-4.45.89-.1,0-.19,0-.29.06q1.48,26.44,2.63,52.91a71.3,71.3,0,0,1,99-30.95l-12.61,34.55,25.94-24.91a71.14,71.14,0,0,1,23,49.26,69.82,69.82,0,0,1-1.81,19.65,71.31,71.31,0,0,1-131.17,19.43c0,1.79.13,3.59.18,5.38.47,18.52,1.06,41.56-8.17,62.14-6.25,13.95-16.32,25.28-26.27,35.43-6.47,6.61-13.18,13-20.06,19.19a71.34,71.34,0,0,1-25.76,21.42q-16.95,13.06-35.1,24.46L819,532.48c-6.79,4.21-13.75,8.53-20.58,13,1.2-.12,2.39-.25,3.61-.3a71.37,71.37,0,0,1,70.24,46.43L827.69,627.9l49-11.37a71.37,71.37,0,0,1-102.28,64.25c1.1,1.38,2.21,2.75,3.31,4.12,2.19,2.73,4.37,5.44,6.5,8.13,29,36.73,37.08,71.61,22.71,98.2l-17.46-9.44c14-25.88-7-59-20.83-76.46-2.09-2.64-4.23-5.3-6.39-8-18.53-23-39.53-49.12-39-81.13C724,568,770.89,538.93,808.53,515.61Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#f2f2f2\"/><ellipse cx=\"455.5\" cy=\"682.65\" rx=\"455.5\" ry=\"21\" fill=\"#3f3d56\"/><path d=\"M948.7,773c3-5.51-.4-12.26-4.28-17.18s-8.61-10-8.51-16.29c.14-9,9.69-14.31,17.33-19.08a84.8,84.8,0,0,0,15.55-12.51,22.79,22.79,0,0,0,4.79-6.4c1.57-3.52,1.53-7.52,1.43-11.38q-.5-19.26-1.9-38.48\" transform=\"translate(-125.21 -98.18)\" fill=\"none\" stroke=\"#3f3d56\" stroke-miterlimit=\"10\" stroke-width=\"4\"/><path d=\"M987.62,651a14.06,14.06,0,0,0-7-11.5l-3.14,6.22.09-7.52a14,14,0,0,0-18,14.12,14,14,0,0,0,28-1.32Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M962.59,746a14,14,0,1,1,.67-11.3l-8.76,7.13,9.64-2.24A14,14,0,0,1,962.59,746Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M955.66,718.71A14,14,0,0,1,941,705.34a13.8,13.8,0,0,1,1.21-6.39,14.06,14.06,0,0,1,9-7.78l-.07,5.79,3.18-6.3h0a14,14,0,0,1,1.31,28.05Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M989.73,696a14,14,0,0,1-1.32-28,13.9,13.9,0,0,1,7.52,1.78l-2.48,6.8,5.1-4.9a14,14,0,0,1,4.54,9.69,13.69,13.69,0,0,1-.36,3.86A14,14,0,0,1,989.73,696Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M985.73,654.7c-3.24.36-6.39,1.37-9.64,1.57s-6.82-.58-8.88-3.11c-1.11-1.36-1.66-3.08-2.6-4.56a10,10,0,0,0-3.53-3.33,14,14,0,1,0,26.24,9.32C986.78,654.61,986.25,654.65,985.73,654.7Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M989.73,696a14,14,0,0,1-13.35-20,10.4,10.4,0,0,1,2.82,2.83c1,1.51,1.6,3.25,2.78,4.64,2.18,2.57,5.92,3.41,9.31,3.25s6.65-1.11,10-1.42c.46,0,.94-.08,1.41-.09A14,14,0,0,1,989.73,696Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M955.66,718.71A14,14,0,0,1,941,705.34a13.8,13.8,0,0,1,1.21-6.39,11.52,11.52,0,0,1,3,2.85c1.09,1.54,1.77,3.31,3,4.73,2.37,2.64,6.35,3.57,9.94,3.48s6.82-.93,10.28-1.19A14.06,14.06,0,0,1,955.66,718.71Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M962.59,746A14,14,0,0,1,937,734.5a14.56,14.56,0,0,1,3.08,2.75c1.33,1.63,2.21,3.47,3.76,5,2.87,2.81,7.5,4,11.62,4.08A60.15,60.15,0,0,0,962.59,746Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M927.54,766.65s11.07-.34,14.41-2.72,17-5.22,17.87-1.4,16.65,19,4.14,19.06-29.06-2-32.39-4S927.54,766.65,927.54,766.65Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#656380\"/><path d=\"M964.18,780.26c-12.5.1-29.06-2-32.39-4-2.53-1.54-3.55-7.09-3.88-9.65l-.37,0s.7,8.93,4,11,19.88,4.08,32.39,4c3.61,0,4.86-1.32,4.79-3.22C968.25,779.52,966.87,780.24,964.18,780.26Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.2\"/><path d=\"M319.62,742.15c-7.26-13.44,1-29.9,10.44-41.88s21-24.44,20.75-39.71c-.36-21.94-23.64-34.89-42.24-46.52a206.29,206.29,0,0,1-37.93-30.49c-4.57-4.67-9-9.65-11.66-15.61-3.84-8.58-3.74-18.33-3.49-27.73q1.2-47,4.64-93.82\" transform=\"translate(-125.21 -98.18)\" fill=\"none\" stroke=\"#3f3d56\" stroke-miterlimit=\"10\" stroke-width=\"4\"/><path d=\"M224.76,444.68a34.21,34.21,0,0,1,17.08-28l7.66,15.15-.23-18.34a34.22,34.22,0,1,1-24.51,31.22Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M285.78,676.24a34.2,34.2,0,0,0,64.59-14,33.76,33.76,0,0,0-2.23-13.88,34.22,34.22,0,0,0-64,.37l21.37,17.38L282,660.64A33.83,33.83,0,0,0,285.78,676.24Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M302.67,609.82a34.22,34.22,0,0,0,10.85-67.12l.18,14.09L306,541.46h-.09a34.22,34.22,0,0,0-3.19,68.37Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M219.61,554.55a34.22,34.22,0,1,0-15.12-64l6,16.57L198.1,495.15A34.06,34.06,0,0,0,187,518.77a33.37,33.37,0,0,0,.87,9.42A34.21,34.21,0,0,0,219.61,554.55Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M229.36,453.8c7.9.87,15.58,3.32,23.5,3.81s16.63-1.4,21.64-7.56c2.7-3.32,4.05-7.52,6.33-11.14a24.28,24.28,0,0,1,8.62-8.11,34.22,34.22,0,1,1-64,22.71C226.78,453.57,228.08,453.66,229.36,453.8Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M219.61,554.55a34.24,34.24,0,0,0,32.55-48.8,25.31,25.31,0,0,0-6.88,6.88c-2.44,3.68-3.91,7.93-6.78,11.31-5.33,6.26-14.43,8.31-22.69,7.94s-16.23-2.73-24.45-3.48c-1.14-.1-2.3-.18-3.45-.21A34.21,34.21,0,0,0,219.61,554.55Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M302.67,609.82a34.21,34.21,0,0,0,32.82-48.17,27.67,27.67,0,0,0-7.23,7c-2.66,3.75-4.32,8.07-7.43,11.53-5.77,6.43-15.47,8.7-24.22,8.49-8.47-.18-16.63-2.26-25.05-2.91A34.24,34.24,0,0,0,302.67,609.82Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M285.78,676.24a34.2,34.2,0,0,0,64.59-14,33.76,33.76,0,0,0-2.23-13.88,34.26,34.26,0,0,0-7.5,6.69c-3.25,4-5.4,8.46-9.16,12.16-7,6.86-18.29,9.7-28.34,10A146.77,146.77,0,0,1,285.78,676.24Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><polygon points=\"431.22 663.95 299.22 690.95 296.22 690.65 180.22 678.95 180.22 531.95 322.22 507.95 425.22 519.95 425.25 520.6 425.26 520.92 431.22 663.95\" fill=\"#2568ef\"/><polygon points=\"431.22 663.95 299.22 690.95 296.22 690.65 296.22 539.95 425.25 520.6 431.22 663.95\" opacity=\"0.1\"/><polygon points=\"425.26 520.92 425.22 520.95 296.22 539.95 180.22 531.95 322.22 507.95 425.22 519.95 425.25 520.6 425.26 520.92\" opacity=\"0.05\"/><polygon points=\"576.22 669.95 444.22 696.95 441.22 696.65 325.22 684.95 325.22 537.95 467.22 513.95 570.22 525.95 570.25 526.6 570.26 526.92 576.22 669.95\" fill=\"#3f3d56\"/><polygon points=\"576.22 669.95 444.22 696.95 441.22 696.65 441.22 545.95 570.25 526.6 576.22 669.95\" opacity=\"0.1\"/><polygon points=\"570.26 526.92 570.22 526.95 441.22 545.95 325.22 537.95 467.22 513.95 570.22 525.95 570.25 526.6 570.26 526.92\" opacity=\"0.05\"/><polygon points=\"485.22 525.95 353.22 552.95 350.22 552.65 234.22 540.95 234.22 393.95 376.22 369.95 479.22 381.95 479.25 382.6 479.26 382.92 485.22 525.95\" fill=\"#3f3d56\"/><polygon points=\"485.22 525.95 353.22 552.95 350.22 552.65 350.22 401.95 479.25 382.6 485.22 525.95\" opacity=\"0.1\"/><polygon points=\"479.26 382.92 479.22 382.95 350.22 401.95 234.22 393.95 376.22 369.95 479.22 381.95 479.25 382.6 479.26 382.92\" opacity=\"0.05\"/><polygon points=\"560.22 532.11 491.33 546.21 489.76 546.05 429.22 539.94 429.22 463.22 503.33 450.69 557.09 456.96 557.11 457.3 557.11 457.46 560.22 532.11\" fill=\"#3f3d56\"/><polygon points=\"560.22 532.11 491.33 546.21 489.76 546.05 489.76 467.4 557.11 457.3 560.22 532.11\" opacity=\"0.1\"/><polygon points=\"557.11 457.46 557.09 457.48 489.76 467.4 429.22 463.22 503.33 450.69 557.09 456.96 557.11 457.3 557.11 457.46\" opacity=\"0.05\"/><polygon points=\"375.22 383.11 306.33 397.2 304.76 397.05 244.22 390.94 244.22 314.22 318.33 301.69 372.09 307.96 372.11 308.3 372.11 308.46 375.22 383.11\" fill=\"#3f3d56\"/><polygon points=\"375.22 383.11 306.33 397.2 304.76 397.05 304.76 318.4 372.11 308.3 375.22 383.11\" opacity=\"0.1\"/><polygon points=\"372.11 308.46 372.09 308.48 304.76 318.4 244.22 314.22 318.33 301.69 372.09 307.96 372.11 308.3 372.11 308.46\" opacity=\"0.05\"/><polygon points=\"496.22 380.11 427.33 394.2 425.76 394.05 365.22 387.94 365.22 311.22 439.33 298.69 493.09 304.96 493.11 305.3 493.11 305.46 496.22 380.11\" fill=\"#2568ef\"/><polygon points=\"496.22 380.11 427.33 394.2 425.76 394.05 425.76 315.4 493.11 305.3 496.22 380.11\" opacity=\"0.1\"/><polygon points=\"493.11 305.46 493.09 305.48 425.76 315.4 365.22 311.22 439.33 298.69 493.09 304.96 493.11 305.3 493.11 305.46\" opacity=\"0.05\"/><polygon points=\"532.22 303.11 463.33 317.2 461.76 317.05 401.22 310.94 401.22 234.22 475.33 221.69 529.09 227.96 529.11 228.3 529.11 228.46 532.22 303.11\" fill=\"#3f3d56\"/><polygon points=\"532.22 303.11 463.33 317.2 461.76 317.05 461.76 238.4 529.11 228.3 532.22 303.11\" opacity=\"0.1\"/><polygon points=\"529.11 228.46 529.09 228.48 461.76 238.4 401.22 234.22 475.33 221.69 529.09 227.96 529.11 228.3 529.11 228.46\" opacity=\"0.05\"/><path d=\"M704.35,244.45c-.73,6.5-5.69,11.74-7.53,18-2.76,9.45,2,19.6,8.56,27A59.77,59.77,0,0,0,747,309.19a17.91,17.91,0,0,0,6.88-.75,14.94,14.94,0,0,0,5.23-3.58c4.92-4.95,7.57-11.8,8.62-18.71s.65-13.94.24-20.91a11.83,11.83,0,0,0-.78-4.22,10.72,10.72,0,0,0-2.71-3.33,63,63,0,0,0-11.65-8.47c-1.8-1-3.73-2-4.88-3.73a12.21,12.21,0,0,1-1.51-4.47l-1.29-6.56a12.86,12.86,0,0,0-1.89-5.32c-2.27-3.06-6.62-3.48-10.43-3.63l-14-.55c-4.35-.17-10.07-1.42-14.32-.56-4,.79-2.65,4.45-1.93,7.77A56.18,56.18,0,0,1,704.35,244.45Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M704.35,244.45c-.73,6.5-5.69,11.74-7.53,18-2.76,9.45,2,19.6,8.56,27A59.77,59.77,0,0,0,747,309.19a17.91,17.91,0,0,0,6.88-.75,14.94,14.94,0,0,0,5.23-3.58c4.92-4.95,7.57-11.8,8.62-18.71s.65-13.94.24-20.91a11.83,11.83,0,0,0-.78-4.22,10.72,10.72,0,0,0-2.71-3.33,63,63,0,0,0-11.65-8.47c-1.8-1-3.73-2-4.88-3.73a12.21,12.21,0,0,1-1.51-4.47l-1.29-6.56a12.86,12.86,0,0,0-1.89-5.32c-2.27-3.06-6.62-3.48-10.43-3.63l-14-.55c-4.35-.17-10.07-1.42-14.32-.56-4,.79-2.65,4.45-1.93,7.77A56.18,56.18,0,0,1,704.35,244.45Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M793.26,537.21l-5.94,65.12c-1.55,17.08-3.13,34.23-6.17,51.09-1,5.81-2.28,11.59-3.74,17.32-4.06,15.91-9.95,31.46-11.85,47.77-.06.47-.11,1-.16,1.43-.39,3.6-.73,7.24-2,10.6-1,2.49-2.41,4.76-3.44,7.22-2,4.92-2.32,10.36-2.57,15.69a67.64,67.64,0,0,0-23.29-8c-4-.59-8.35-1-11-4-3-3.26-2.65-8.25-2.15-12.63q2.36-20.4,4.7-40.78a106.28,106.28,0,0,1,3-17.32c.54-1.89,1.19-3.75,1.85-5.61.91-2.56,1.83-5.12,2.52-7.75A93.33,93.33,0,0,0,735,644.53c1.61-13.68,3.55-27.33,5.25-41l.09-.72c2.55-20.72,4.49-41.54,3.93-62.41-.08-3.09-.21-6.18-.41-9.28-.28-4.49-.69-6.87,3-9.68,4.11-3.1,9.52-5.27,14.22-7.3,2.53-1.1,30.39-11,31-8.82a54.29,54.29,0,0,1,2,14.22A158.22,158.22,0,0,1,793.26,537.21Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#605d82\"/><path d=\"M781.15,653.42c-1,5.81-2.28,11.59-3.74,17.32-4.06,15.91-9.95,31.46-11.85,47.77-.06.47-.11,1-.16,1.43-12.42-17.74-22.88-36.82-35-54.75.91-2.56,1.83-5.12,2.52-7.75A93.33,93.33,0,0,0,735,644.53c1.61-13.68,3.55-27.33,5.25-41l.09-.72a42.47,42.47,0,0,0,3,8.41c8.14,16.54,27.48,24.9,36.94,40.73Q780.75,652.69,781.15,653.42Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M680.37,508c.41,13.26,2.53,26.41,4.65,39.51l4.37,27c2.39,14.8,4.89,29.89,11.89,43.14,5.24,9.92,12.78,18.38,19.61,27.27,16.78,21.86,29.39,46.63,45.3,69.13,4.63,6.54,11.24,13.62,19.13,12.25,5.18-.89,8.94-5.21,13-8.53,4.8-3.92,10.58-6.79,14.36-11.71s4.52-13.08-.6-16.58c-1.75-1.19-3.88-1.64-5.86-2.4-7.93-3-13.07-10.76-16.33-18.6s-5.25-16.25-9.6-23.54c-9.46-15.83-28.81-24.19-36.95-40.74-4.56-9.26-5-20-5.34-30.27l-.89-26.31c-.1-2.88-.17-5.87,1-8.5,3.11-7,12.51-7.66,20.13-8.55a68.75,68.75,0,0,0,24.67-7.78c4.39-2.37,8.67-5.39,11-9.79,2.14-4,2.43-8.71,2.68-13.25l2.64-47.69c.23-4.1.43-8.35-1-12.19-3.63-9.66-15.83-12.82-26.14-12.36-19.18.86-36.88,9.11-55,14.69-4.49,1.38-9,2.62-13.63,3.55-4,.81-9,.48-12.84,1.78-6.88,2.32-6.71,17.38-7.68,23.62A198.29,198.29,0,0,0,680.37,508Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#605d82\"/><path d=\"M782.72,728.32c1.69,1.71,2.24,4.21,2.68,6.57a224.15,224.15,0,0,1,3.8,39.71,6.58,6.58,0,0,0,.71,3.6,4.59,4.59,0,0,0,1.87,1.5c4.89,2.33,10.56-.92,14.64-4.49,7.55-6.61,13.94-15.49,14.37-25.52.11-2.58-.18-5.19.27-7.74.66-3.78,2.87-7.07,4.81-10.37a88.05,88.05,0,0,0,8-17.82c.74-2.34,1.24-5.28-.6-6.91a6.43,6.43,0,0,0-2.17-1.13L809,697.52c-1.92-.71-6.68,11.52-7.43,12.86-1.85,3.27-3.69,5.12-7.4,5.88s-8.29-.34-11.83,1.55C776.34,721,779.33,724.91,782.72,728.32Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#535070\"/><path d=\"M748.64,735.87a6.73,6.73,0,0,0-1.68-2.13,7.53,7.53,0,0,0-3.39-1.15c-4.2-.72-9.18-1.19-12.09,1.94-2.72,2.93-2.25,7.7-4.52,11-.72,1-1.7,1.9-2.32,3a11.26,11.26,0,0,0-1,5.38c-.12,5.09-.24,10.2.12,15.28.29,4.26,1,8.73,3.67,12.07,4.28,5.36,12,6.13,18.84,6.47l5.55.29a11,11,0,0,0,4.54-.42,7.45,7.45,0,0,0,3.92-4.31c2.89-7.18-1.68-14.91-4.5-22.11C752.53,752.89,753.11,743.7,748.64,735.87Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#535070\"/><path d=\"M702.75,207.8a4.53,4.53,0,0,1,.31-2.14c.81-1.43,2.93-1,4.53-.64,6.43,1.62,13.21.15,19.84.53s14.09,3.69,15.42,10.19a48.21,48.21,0,0,0,12.23-12.56c1.84-2.75,3.44-5.9,3.19-9.2-.36-4.76-4.35-8.32-8-11.34l-11-9a16.71,16.71,0,0,0-4.94-3.14c-2.54-.87-5.32-.45-8-.45-8,0-16.58-3.65-23.71,0-3,1.53-5.23,4.16-7.39,6.72l-9.83,11.64a6.21,6.21,0,0,0-1.58,2.67c-.28,1.42.45,2.82.71,4.25.46,2.6-.66,5.38.2,7.88,1.43,4.14,6.47,4.73,9.55,7.11,1.14.88,2.94,3.89,4.31,3.85C701,214.12,702.68,209.72,702.75,207.8Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><circle cx=\"594.22\" cy=\"112.45\" r=\"31.5\" fill=\"#ffc0c6\"/><path d=\"M726.81,279.56A15.26,15.26,0,0,0,712,269.34a4.45,4.45,0,0,1-2.74-.35,3.79,3.79,0,0,1-1.13-1.4,55.73,55.73,0,0,1-4.59-10.86c-.5-1.67-1.19-3.64-2.88-4.07-1.36-.35-2.75.53-3.66,1.6a35,35,0,0,1-2.62,3.29c-4,3.54-11,.31-15.19,3.56-.69.53-1.26,1.21-2,1.7a9.1,9.1,0,0,1-2.31,1A221.38,221.38,0,0,0,651,273.14c2.8,16.84,5.66,34,12.22,49.75,3.12,7.5,6.65,14.85,9.15,22.58,5.54,17.13,5.78,35.46,5.85,53.47,0,12.32,0,24.9-4,36.56-.9,2.64-2,5.26-2.25,8s.57,5.84,2.82,7.48a9.51,9.51,0,0,0,4.35,1.53c6.91,1,13.87-.82,20.67-2.4,18.23-4.22,36.83-6.64,55.38-9l31.1-4a18.19,18.19,0,0,0,6.44-1.67c5.69-3.11,6.23-11.67,2.69-17.11-1.69-2.61-4.08-4.75-5.51-7.51s-1.54-6.64.91-8.55c5-3.9,3.5-11.13,3.74-17.45q1-26.52-.27-53a103.72,103.72,0,0,1-.18-11c.35-6.22,1.89-12.31,3.43-18.36l9.45-37.2c-2.47-3.9-7.2-6.38-11.67-7.5s-9.14-1.45-13.55-2.82c-9-2.8-17.08-9.9-26.51-9.24a4.85,4.85,0,0,0-2.06.5c-2.12,1.21-1.79,4.27-1.92,6.71-.3,5.41-4.28,9.92-8.66,13.09s-9.4,5.47-13.43,9.08A6,6,0,0,0,726.81,279.56Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><path d=\"M602,314.85a37,37,0,0,1-6.62,3.41c-2.2.87-4.55,1.56-6.35,3.08a10.05,10.05,0,0,0-2.21,2.73A12.13,12.13,0,0,0,598,342.14c2.89-.15,5.62-1.32,8.27-2.47L628.49,330c3.76-1.63,7.82-3.53,9.6-7.23a1.74,1.74,0,0,0,.22-1.15,1.89,1.89,0,0,0-.92-1,49.77,49.77,0,0,1-12.93-12.2c-.91-1.24-2-4.16-3.32-4.91C616.44,300.9,605.77,312.41,602,314.85Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M839.52,307l8.19,9.36c1.76,2,3.52,4,5.12,6.16a71.67,71.67,0,0,1,9.38,17.67c1.78,4.67,3.26,9.65,2.64,14.61a36,36,0,0,1-2.05,7.43,91.86,91.86,0,0,1-5.57,13.4A76.26,76.26,0,0,1,851,385a219.1,219.1,0,0,1-20.77,23.75c-2.8,2.77-4,7.26-5.19,11-2.25,6.91-7.6,12.3-12.77,17.4a35.19,35.19,0,0,1-5.49,4.72,17.8,17.8,0,0,1-10,2.84,11,11,0,0,1-4.49-.93c-3.54-1.68-5.34-5.77-5.71-9.67a20.7,20.7,0,0,1,1.72-10.36c4.7-10.41,16.77-14.92,25.3-22.52,5-4.45,8.83-10.05,12.61-15.58a54.05,54.05,0,0,0,6.37-11.17c1.9-5.09,1.16-11.11,2.83-16.27.7-2.19,2-4.16,2.71-6.33s.95-4.74-.38-6.61a9.55,9.55,0,0,0-3.71-2.72c-5.45-2.76-11.55-6.32-12.59-12.35a13.22,13.22,0,0,1,2.44-9.43,39,39,0,0,1,6.87-7.2C833.12,311.43,837.13,309.06,839.52,307Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M596.74,327.91c-1.44-2.92-3.25-5.9-6.17-7.35a11.36,11.36,0,0,0-9,0,34.12,34.12,0,0,0-7.88,4.76l-7.06,5.21a17.37,17.37,0,0,0-4.19,3.87,16.11,16.11,0,0,0-2.18,6c-1,4.87-1.81,9.88-1.11,14.81,1.12,8,5.92,14.92,11.2,21,3.3,3.78,7.38,7.6,12.4,7.77,2.17.07,4.58-.79,5.48-2.76a6.83,6.83,0,0,0,.49-2.46c.54-8.88-2.64-17.55-6.34-25.64-1-2.2-2.08-4.48-2-6.89a1.86,1.86,0,0,1,.3-1.16,1.94,1.94,0,0,1,1.2-.59c5.07-1,13.81,2.94,17.36-2.69C601.54,338.07,598.38,331.22,596.74,327.91Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M701.09,197.89a4.66,4.66,0,0,1,.32-2.14c.81-1.44,2.93-1,4.53-.64,6.43,1.62,13.21.15,19.84.53s14.08,3.69,15.42,10.19a48.53,48.53,0,0,0,12.23-12.56c1.84-2.76,3.44-5.91,3.19-9.21-.36-4.76-4.36-8.32-8-11.33l-11-9a16.66,16.66,0,0,0-4.93-3.14c-2.55-.87-5.32-.45-8-.45-8,0-16.58-3.65-23.71,0-3,1.53-5.23,4.16-7.39,6.72l-9.84,11.64a6.23,6.23,0,0,0-1.57,2.67c-.28,1.42.45,2.82.71,4.25.46,2.6-.66,5.38.2,7.87,1.43,4.15,6.47,4.74,9.55,7.12,1.14.88,2.94,3.89,4.31,3.85C699.32,204.21,701,199.81,701.09,197.89Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><path d=\"M634.19,284.21a13.06,13.06,0,0,0-3.3,3.07c-1.15,1.75-1.39,4-2.38,5.8-2.12,3.94-7.09,5.35-10.18,8.58a3.19,3.19,0,0,0-1,1.68,3.71,3.71,0,0,0,.83,2.42l14.94,23.48c5,.44,9.74-2.68,14.72-2.26,1.85.15,3.76.79,5.54.24a16.1,16.1,0,0,0,3.55-2.17c3-1.88,6.92-2.1,9.41-4.57s2.7-6.1,2.67-9.47a37.37,37.37,0,0,0-.89-8.7c-2.2-9-9.09-15.94-13.41-23.92-2.11-3.89-3.25-6.16-7.7-3.49S638.4,281.13,634.19,284.21Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><path d=\"M815.6,272.34a35.07,35.07,0,0,1,7.52,6.58c2.27,2.93,3.56,6.53,5.75,9.53s5,5.16,7.4,7.84c3.65,4.06,6.12,9,8.54,13.91A208.6,208.6,0,0,1,825.49,332a6.19,6.19,0,0,1-2.94,1.92,4.71,4.71,0,0,1-4.14-1.69c-1.08-1.12-1.84-2.52-2.87-3.69a14.75,14.75,0,0,0-9.13-4.41,62.72,62.72,0,0,0-10.35-.15,4,4,0,0,1-2.21-.37,3.65,3.65,0,0,1-1.2-1.38c-4-6.88-2.75-15.52-1.32-23.38l3.27-18a40.44,40.44,0,0,1,2.73-10c1.24-2.65,4-7.15,7.42-6.35S812.71,270.26,815.6,272.34Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><polygon points=\"405.22 306.11 336.33 320.2 334.76 320.05 274.22 313.94 274.22 237.22 348.33 224.69 402.09 230.96 402.11 231.3 402.11 231.46 405.22 306.11\" fill=\"#2568ef\"/><polygon points=\"405.22 306.11 336.33 320.2 334.76 320.05 334.76 241.4 402.11 231.3 405.22 306.11\" opacity=\"0.1\"/><polygon points=\"402.11 231.46 402.09 231.48 334.76 241.4 274.22 237.22 348.33 224.69 402.09 230.96 402.11 231.3 402.11 231.46\" opacity=\"0.05\"/><polygon points=\"441.22 230.11 372.33 244.21 370.76 244.05 310.22 237.94 310.22 161.22 384.33 148.69 438.09 154.96 438.11 155.3 438.11 155.46 441.22 230.11\" fill=\"#3f3d56\"/><polygon points=\"441.22 230.11 372.33 244.21 370.76 244.05 370.76 165.4 438.11 155.3 441.22 230.11\" opacity=\"0.1\"/><polygon points=\"438.11 155.46 438.09 155.48 370.76 165.4 310.22 161.22 384.33 148.69 438.09 154.96 438.11 155.3 438.11 155.46\" opacity=\"0.05\"/></svg>
    </div>
</div>
<!-- end:: Section -->

<!-- begin:: Section -->
<div class=\"kt-portlet kt-margin-t-30\">
    <!--begin::Form-->
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
        <div class=\"kt-portlet__body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t<div class=\"col-xl-6\">
                    <div class=\"form-group\">
                        <label>";
        // line 24
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Person who receives"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control\" name=\"receiver\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "\" required>
\t\t\t\t\t</div>
                    ";
        // line 27
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 27), "status", [], "any", false, false, false, 27) == 8) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 27), "status", [], "any", false, false, false, 27) == 11))) {
            // line 28
            echo "                        <div class=\"form-group\">
                            <label>";
            // line 29
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Person who receives returned money"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control\" name=\"sender\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>";
            // line 33
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returned money"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"number\" class=\"form-control\" name=\"returned_money\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 34), "html", null, true);
            echo "\" required>
                        </div>
                    ";
        }
        // line 37
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 37) != twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 37))) {
            // line 38
            echo "    \t\t\t\t\t<div class=\"form-group\">
                            <label>";
            // line 39
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\" required>
                                <option data-hidden=\"true\"></option>
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 43
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 43) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 43))) {
                    echo "selected";
                } elseif ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 43) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 43))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </select>
                        </div>
                    ";
        } else {
            // line 48
            echo "                        <div class=\"form-group\">
                            <label>";
            // line 49
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "responsiable", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "\" disabled>
    \t\t\t\t\t</div>
                    ";
        }
        // line 53
        echo "                    <div class=\"form-group\">
                        <label>";
        // line 54
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver ID Copy"]);
        echo "</label>
                        <div class=\"kt-uppy\" id=\"kt_uppy_1\">
                            <div class=\"kt-uppy__dashboard\"></div>
                            <div class=\"kt-uppy__progress\"></div>
                        </div>
                        <span class=\"form-text text-muted\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Upload or capture the front of the Receiver ID copy for confirmation"]);
        echo "</span>
\t\t\t\t\t</div>
                    <div class=\"form-group\">
                        <label><i class=\"fa fa-signature\"></i>&nbsp;";
        // line 62
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Draw receiver signature"]);
        echo "</label>
                        <br />
                        <div class=\"signature_container\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"undo\"><i class=\"la la-undo\"></i> ";
        // line 66
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Undo"]);
        echo "</button>
                                <button type=\"button\" class=\"btn btn-sm btn-warning\" id=\"clear\"><i class=\"la la-remove\"></i> ";
        // line 67
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Clear"]);
        echo "</button>
                            </div>
                            <canvas id=\"signaturePad\"></canvas>
                            <textarea id=\"signaturePadImg\" name=\"signaturePadImg\" class=\"kt-hide\"></textarea>
                        </div>
                        <span class=\"form-text text-muted\">";
        // line 72
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You can use your mouse to draw it, or if you using your mobile then you can use the touch screen to write it by your finger"]);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleTextarea\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notes"]);
        echo "</label>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"note\" rows=\"3\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t</div>
\t\t</div>

        <div class=\"kt-portlet__foot\">
            <div class=\"kt-form__actions\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t\t<div class=\"col-xl-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"save\">";
        // line 88
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Confirm Deliver"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/shipment", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89)]);
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t</div>
            </div>
        </div>
    ";
        // line 95
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    <!--end::Form-->
</div>
<!-- end:: Section -->

<!-- begin:: Section -->
<div class=\"row\">
\t<div class=\"col-lg-6\">
\t\t<div class=\"kt-portlet kt-callout kt-callout--brand kt-callout--diagonal-bg\">
\t\t\t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-callout__body\">
\t\t\t\t\t<div class=\"kt-callout__content\">
\t\t\t\t\t\t<h3 class=\"kt-callout__title\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reach The Sender By Mobile"]);
        echo "</h3>
\t\t\t\t\t\t<p class=\"kt-callout__desc\">
\t\t\t\t\t\t\t";
        // line 109
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For more quick decisions you can call the sender mobile number from here"]);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-callout__action\">
\t\t\t\t\t\t<a href=\"tel:";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 113), "mobile", [], "any", false, false, false, 113), "html", null, true);
        echo "\" class=\"btn btn-custom btn-bold btn-upper btn-font-sm  btn-brand\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Make Call"]);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"col-lg-6\">
\t\t<div class=\"kt-portlet kt-callout kt-callout--success kt-callout--diagonal-bg\">
\t\t\t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-callout__body\">
\t\t\t\t\t<div class=\"kt-callout__content\">
\t\t\t\t\t\t<h3 class=\"kt-callout__title\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reach The Receiver By Mobile"]);
        echo "</h3>
\t\t\t\t\t\t<p class=\"kt-callout__desc\">
\t\t\t\t\t\t\t";
        // line 126
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For more quick decisions you can call the receiver mobile number from here"]);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-callout__action\">
\t\t\t\t\t\t<a href=\"tel:";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 130), "mobile", [], "any", false, false, false, 130), "html", null, true);
        echo "\" class=\"btn btn-custom btn-bold btn-upper btn-font-sm  btn-brand\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Make Call"]);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
</div>

";
        // line 138
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 139
        echo "    ";
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 140
            echo "        <link href=\"./admin/vendors/custom/uppy/uppy.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/faq-3.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        } else {
            // line 144
            echo "        <link href=\"./admin/vendors/custom/uppy/uppy.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/faq-3.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.css\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        }
        // line 148
        echo "    <style>
        .signature_container {
            position: relative;
        }
        .signature_container .btn-group {
            position: absolute;
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

        canvas#signaturePad {
            background-color: #f7f8fa;
            border: 1px solid #ebedf2;
            max-width: 100%;
            display: block;
            border-radius: 5px;
            color: #000;
        }
    </style>
";
        // line 138
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 188
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 189
        echo "<script src=\"./admin/vendors/custom/uppy/uppy.bundle.js\" type=\"text/javascript\"></script>

<script src=\"//cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js\"></script>
<script type='text/javascript' src=\"//github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js\"></script>

<script>
    if (\$('#signaturePadImg').length > 0){
        var canvas = document.querySelector(\"canvas\");
        var signaturePad = new SignaturePad(canvas);

        document.getElementById('clear').addEventListener('click', function () {
              signaturePad.clear();
        });

        document.getElementById('undo').addEventListener('click', function () {
        \tvar data = signaturePad.toData();
              if (data) {
                data.pop(); // remove the last dot or line
                signaturePad.fromData(data);
              }
        });
    }
</script>
<script type=\"text/javascript\">
\"use strict\";

// Class definition
var KTUppy = function () {
\tconst Tus = Uppy.Tus;
    //const XHRUpload = require('@uppy/xhr-upload')
    const XHRUpload = Uppy.XHRUpload;


\tconst ProgressBar = Uppy.ProgressBar;
\tconst StatusBar = Uppy.StatusBar;
\tconst FileInput = Uppy.FileInput;
\tconst Informer = Uppy.Informer;

\t// to get uppy companions working, please refer to the official documentation here: //uppy.io/docs/companion/
\tconst Dashboard = Uppy.Dashboard;
\tconst Webcam = Uppy.Webcam;

\t// Private functions
\tvar initUppy1 = function(){
\t\tvar id = '#kt_uppy_1';

\t\tvar options = {
\t\t\tproudlyDisplayPoweredByUppy: false,
\t\t\ttarget: id,
\t\t\tinline: true,
\t\t\treplaceTargetContent: true,
\t\t\tshowProgressDetails: true,
\t\t\tnote: '";
        // line 241
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Press Upload after selecting or capture the copy"]);
        echo ".',
\t\t\theight: 470,
\t\t\tmetaFields: [
\t\t\t\t{ id: 'name', name: '";
        // line 244
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
        echo "', placeholder: '";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["file name"]);
        echo "' },
\t\t\t\t{ id: 'caption', name: '";
        // line 245
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Caption"]);
        echo "', placeholder: '";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["describe what the image is about"]);
        echo "' }
\t\t\t],
\t\t\tbrowserBackButtonClose: true
\t\t}

\t\tvar uppyDashboard = Uppy.Core({
\t\t\tautoProceed: true,
\t\t\trestrictions: {
\t\t\t\tmaxFileSize: 10000000, // 1mb
\t\t\t\tmaxNumberOfFiles: 1,
\t\t\t\tminNumberOfFiles: 1
\t\t\t}
\t\t});

\t\tuppyDashboard.use(Dashboard, options);
\t\tuppyDashboard.use(Webcam, { target: Dashboard });
        uppyDashboard.use(XHRUpload, { endpoint: '";
        // line 261
        echo url("api/uploadcopy");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 261), "html", null, true);
        echo "',fieldName: 'copy' })
        .on('complete', (result) => {
            console.log('Upload result:', result)
        })
\t}

\treturn {
\t\t// public functions
\t\tinit: function() {
\t\t\tinitUppy1();
\t\t}
\t};
}();

KTUtil.ready(function() {
\tKTUppy.init();
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });


    \$('body').on('click', '#save', function(e, clickedIndex, newValue, oldValue){
        e.preventDefault();
          swal.fire({
              buttonsStyling: false,

              html: \"<strong>";
        // line 292
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure?"]);
        echo "</strong><br />";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This action will make the responsible for the delivery is you for administration review"]);
        echo "\",
              type: \"warning\",

              confirmButtonText: \"";
        // line 295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, confirm!"]);
        echo "\",
              confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

              showCancelButton: true,
              cancelButtonText: '";
        // line 299
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "',
              cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
          }).then(function (result) {
              if (result.value) {
                    var dataURL = canvas.toDataURL();
                    var teet = signaturePad.toDataURL(\"data:image/png;base64,signature\");
                    \$('#signaturePadImg').val(dataURL);
                    \$('.kt_form').submit();
              } else {
                  swal.fire({
                      title: '";
        // line 309
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                      text: '";
        // line 310
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing updated! :)"]);
        echo "',
                      type: 'error',
                      buttonsStyling: false,
                      confirmButtonText: '";
        // line 313
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                      confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                  });
              }
          });
    });

});
</script>
";
        // line 188
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/dashboard/order-deliver.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 188,  529 => 313,  523 => 310,  519 => 309,  506 => 299,  499 => 295,  491 => 292,  455 => 261,  434 => 245,  428 => 244,  422 => 241,  368 => 189,  366 => 188,  364 => 138,  323 => 148,  317 => 144,  311 => 140,  308 => 139,  306 => 138,  293 => 130,  286 => 126,  281 => 124,  265 => 113,  258 => 109,  253 => 107,  238 => 95,  225 => 89,  221 => 88,  205 => 75,  199 => 72,  191 => 67,  187 => 66,  180 => 62,  174 => 59,  166 => 54,  163 => 53,  157 => 50,  153 => 49,  150 => 48,  145 => 45,  128 => 43,  124 => 42,  118 => 39,  115 => 38,  112 => 37,  106 => 34,  102 => 33,  96 => 30,  92 => 29,  89 => 28,  87 => 27,  82 => 25,  78 => 24,  69 => 18,  58 => 10,  52 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- begin:: Section -->
<div class=\"kt-sc-faq-3 kt-sc-feedback\">
    <div class=\"kt-sc__title\">
        {{'Deliver Shipment'|__}}: <b>{{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}{{order.number}}</b>
    </div>
    <div class=\"kt-sc__subtitle\">
        {{'Complete the form to confirm the delivery of this shipment!'|__}}
    </div>
    <div class=\"kt-sc__bg\">
        <svg id=\"ab82d996-d758-4a94-9ad9-9e4bd5f70489\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"949.57\" height=\"703.65\" viewBox=\"0 0 949.57 703.65\"><title>{{'Deliver Shipment'|__}}</title><path d=\"M808.53,515.61,816,511c.71-.45,1.41-.93,2.13-1.38a71.35,71.35,0,0,1-59.18-67,70.61,70.61,0,0,1,6.16-32.5,71.47,71.47,0,0,1,45.81-39.52l-.37,29.4,16.15-32a.64.64,0,0,1,.2,0,71.34,71.34,0,0,1,74.59,67.94c.06,1.36,0,2.7,0,4,5.62-6.41,10.72-13.28,14.1-20.81,6.84-15.25,7-32.52,6.43-53.51-1.08-41.6-2.87-83.51-5.21-125.3a71.3,71.3,0,0,1-63.35-67.49c-.1-2.19-.07-4.34,0-6.48,0-.53,0-1.07.08-1.6.14-2.07.33-4.12.65-6.14,0-.34.12-.66.18-1q.44-2.57,1.05-5.08c.16-.62.31-1.25.48-1.87.5-1.82,1-3.61,1.69-5.38.21-.59.46-1.16.68-1.74.51-1.3,1.06-2.58,1.64-3.85.31-.67.61-1.33.94-2,.08-.17.15-.34.24-.51l0,0a71.29,71.29,0,0,1,83.76-36.18l-.48,38.26,16-31.6a70.9,70.9,0,0,1,34,76.87h.08c-.11.51-.27,1-.39,1.5-.22.94-.46,1.87-.72,2.8-.34,1.19-.72,2.36-1.11,3.53-.3.87-.59,1.76-.92,2.62-.48,1.26-1,2.49-1.58,3.72-.32.72-.61,1.45-1,2.16q-1.37,2.76-3,5.4c-.37.61-.79,1.19-1.18,1.8-.76,1.18-1.53,2.35-2.36,3.49-.51.7-1.06,1.37-1.6,2.06-.78,1-1.58,2-2.41,2.91-.59.67-1.19,1.33-1.81,2-.87.92-1.77,1.81-2.7,2.69-.61.59-1.23,1.18-1.87,1.74-1.05.93-2.15,1.82-3.26,2.69-.56.44-1.1.9-1.68,1.32q-2.53,1.88-5.23,3.53c-.34.2-.7.37-1,.57-1.5.89-3,1.72-4.61,2.5-.67.33-1.37.62-2.06.93-1.29.58-2.59,1.14-3.92,1.65-.77.29-1.56.56-2.35.83-1.31.45-2.64.86-4,1.23-.8.22-1.59.44-2.4.63-1.46.35-2.95.64-4.45.89-.1,0-.19,0-.29.06q1.48,26.44,2.63,52.91a71.3,71.3,0,0,1,99-30.95l-12.61,34.55,25.94-24.91a71.14,71.14,0,0,1,23,49.26,69.82,69.82,0,0,1-1.81,19.65,71.31,71.31,0,0,1-131.17,19.43c0,1.79.13,3.59.18,5.38.47,18.52,1.06,41.56-8.17,62.14-6.25,13.95-16.32,25.28-26.27,35.43-6.47,6.61-13.18,13-20.06,19.19a71.34,71.34,0,0,1-25.76,21.42q-16.95,13.06-35.1,24.46L819,532.48c-6.79,4.21-13.75,8.53-20.58,13,1.2-.12,2.39-.25,3.61-.3a71.37,71.37,0,0,1,70.24,46.43L827.69,627.9l49-11.37a71.37,71.37,0,0,1-102.28,64.25c1.1,1.38,2.21,2.75,3.31,4.12,2.19,2.73,4.37,5.44,6.5,8.13,29,36.73,37.08,71.61,22.71,98.2l-17.46-9.44c14-25.88-7-59-20.83-76.46-2.09-2.64-4.23-5.3-6.39-8-18.53-23-39.53-49.12-39-81.13C724,568,770.89,538.93,808.53,515.61Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#f2f2f2\"/><ellipse cx=\"455.5\" cy=\"682.65\" rx=\"455.5\" ry=\"21\" fill=\"#3f3d56\"/><path d=\"M948.7,773c3-5.51-.4-12.26-4.28-17.18s-8.61-10-8.51-16.29c.14-9,9.69-14.31,17.33-19.08a84.8,84.8,0,0,0,15.55-12.51,22.79,22.79,0,0,0,4.79-6.4c1.57-3.52,1.53-7.52,1.43-11.38q-.5-19.26-1.9-38.48\" transform=\"translate(-125.21 -98.18)\" fill=\"none\" stroke=\"#3f3d56\" stroke-miterlimit=\"10\" stroke-width=\"4\"/><path d=\"M987.62,651a14.06,14.06,0,0,0-7-11.5l-3.14,6.22.09-7.52a14,14,0,0,0-18,14.12,14,14,0,0,0,28-1.32Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M962.59,746a14,14,0,1,1,.67-11.3l-8.76,7.13,9.64-2.24A14,14,0,0,1,962.59,746Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M955.66,718.71A14,14,0,0,1,941,705.34a13.8,13.8,0,0,1,1.21-6.39,14.06,14.06,0,0,1,9-7.78l-.07,5.79,3.18-6.3h0a14,14,0,0,1,1.31,28.05Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M989.73,696a14,14,0,0,1-1.32-28,13.9,13.9,0,0,1,7.52,1.78l-2.48,6.8,5.1-4.9a14,14,0,0,1,4.54,9.69,13.69,13.69,0,0,1-.36,3.86A14,14,0,0,1,989.73,696Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M985.73,654.7c-3.24.36-6.39,1.37-9.64,1.57s-6.82-.58-8.88-3.11c-1.11-1.36-1.66-3.08-2.6-4.56a10,10,0,0,0-3.53-3.33,14,14,0,1,0,26.24,9.32C986.78,654.61,986.25,654.65,985.73,654.7Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M989.73,696a14,14,0,0,1-13.35-20,10.4,10.4,0,0,1,2.82,2.83c1,1.51,1.6,3.25,2.78,4.64,2.18,2.57,5.92,3.41,9.31,3.25s6.65-1.11,10-1.42c.46,0,.94-.08,1.41-.09A14,14,0,0,1,989.73,696Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M955.66,718.71A14,14,0,0,1,941,705.34a13.8,13.8,0,0,1,1.21-6.39,11.52,11.52,0,0,1,3,2.85c1.09,1.54,1.77,3.31,3,4.73,2.37,2.64,6.35,3.57,9.94,3.48s6.82-.93,10.28-1.19A14.06,14.06,0,0,1,955.66,718.71Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M962.59,746A14,14,0,0,1,937,734.5a14.56,14.56,0,0,1,3.08,2.75c1.33,1.63,2.21,3.47,3.76,5,2.87,2.81,7.5,4,11.62,4.08A60.15,60.15,0,0,0,962.59,746Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M927.54,766.65s11.07-.34,14.41-2.72,17-5.22,17.87-1.4,16.65,19,4.14,19.06-29.06-2-32.39-4S927.54,766.65,927.54,766.65Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#656380\"/><path d=\"M964.18,780.26c-12.5.1-29.06-2-32.39-4-2.53-1.54-3.55-7.09-3.88-9.65l-.37,0s.7,8.93,4,11,19.88,4.08,32.39,4c3.61,0,4.86-1.32,4.79-3.22C968.25,779.52,966.87,780.24,964.18,780.26Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.2\"/><path d=\"M319.62,742.15c-7.26-13.44,1-29.9,10.44-41.88s21-24.44,20.75-39.71c-.36-21.94-23.64-34.89-42.24-46.52a206.29,206.29,0,0,1-37.93-30.49c-4.57-4.67-9-9.65-11.66-15.61-3.84-8.58-3.74-18.33-3.49-27.73q1.2-47,4.64-93.82\" transform=\"translate(-125.21 -98.18)\" fill=\"none\" stroke=\"#3f3d56\" stroke-miterlimit=\"10\" stroke-width=\"4\"/><path d=\"M224.76,444.68a34.21,34.21,0,0,1,17.08-28l7.66,15.15-.23-18.34a34.22,34.22,0,1,1-24.51,31.22Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M285.78,676.24a34.2,34.2,0,0,0,64.59-14,33.76,33.76,0,0,0-2.23-13.88,34.22,34.22,0,0,0-64,.37l21.37,17.38L282,660.64A33.83,33.83,0,0,0,285.78,676.24Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M302.67,609.82a34.22,34.22,0,0,0,10.85-67.12l.18,14.09L306,541.46h-.09a34.22,34.22,0,0,0-3.19,68.37Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M219.61,554.55a34.22,34.22,0,1,0-15.12-64l6,16.57L198.1,495.15A34.06,34.06,0,0,0,187,518.77a33.37,33.37,0,0,0,.87,9.42A34.21,34.21,0,0,0,219.61,554.55Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#57b793\"/><path d=\"M229.36,453.8c7.9.87,15.58,3.32,23.5,3.81s16.63-1.4,21.64-7.56c2.7-3.32,4.05-7.52,6.33-11.14a24.28,24.28,0,0,1,8.62-8.11,34.22,34.22,0,1,1-64,22.71C226.78,453.57,228.08,453.66,229.36,453.8Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M219.61,554.55a34.24,34.24,0,0,0,32.55-48.8,25.31,25.31,0,0,0-6.88,6.88c-2.44,3.68-3.91,7.93-6.78,11.31-5.33,6.26-14.43,8.31-22.69,7.94s-16.23-2.73-24.45-3.48c-1.14-.1-2.3-.18-3.45-.21A34.21,34.21,0,0,0,219.61,554.55Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M302.67,609.82a34.21,34.21,0,0,0,32.82-48.17,27.67,27.67,0,0,0-7.23,7c-2.66,3.75-4.32,8.07-7.43,11.53-5.77,6.43-15.47,8.7-24.22,8.49-8.47-.18-16.63-2.26-25.05-2.91A34.24,34.24,0,0,0,302.67,609.82Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M285.78,676.24a34.2,34.2,0,0,0,64.59-14,33.76,33.76,0,0,0-2.23-13.88,34.26,34.26,0,0,0-7.5,6.69c-3.25,4-5.4,8.46-9.16,12.16-7,6.86-18.29,9.7-28.34,10A146.77,146.77,0,0,1,285.78,676.24Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><polygon points=\"431.22 663.95 299.22 690.95 296.22 690.65 180.22 678.95 180.22 531.95 322.22 507.95 425.22 519.95 425.25 520.6 425.26 520.92 431.22 663.95\" fill=\"#2568ef\"/><polygon points=\"431.22 663.95 299.22 690.95 296.22 690.65 296.22 539.95 425.25 520.6 431.22 663.95\" opacity=\"0.1\"/><polygon points=\"425.26 520.92 425.22 520.95 296.22 539.95 180.22 531.95 322.22 507.95 425.22 519.95 425.25 520.6 425.26 520.92\" opacity=\"0.05\"/><polygon points=\"576.22 669.95 444.22 696.95 441.22 696.65 325.22 684.95 325.22 537.95 467.22 513.95 570.22 525.95 570.25 526.6 570.26 526.92 576.22 669.95\" fill=\"#3f3d56\"/><polygon points=\"576.22 669.95 444.22 696.95 441.22 696.65 441.22 545.95 570.25 526.6 576.22 669.95\" opacity=\"0.1\"/><polygon points=\"570.26 526.92 570.22 526.95 441.22 545.95 325.22 537.95 467.22 513.95 570.22 525.95 570.25 526.6 570.26 526.92\" opacity=\"0.05\"/><polygon points=\"485.22 525.95 353.22 552.95 350.22 552.65 234.22 540.95 234.22 393.95 376.22 369.95 479.22 381.95 479.25 382.6 479.26 382.92 485.22 525.95\" fill=\"#3f3d56\"/><polygon points=\"485.22 525.95 353.22 552.95 350.22 552.65 350.22 401.95 479.25 382.6 485.22 525.95\" opacity=\"0.1\"/><polygon points=\"479.26 382.92 479.22 382.95 350.22 401.95 234.22 393.95 376.22 369.95 479.22 381.95 479.25 382.6 479.26 382.92\" opacity=\"0.05\"/><polygon points=\"560.22 532.11 491.33 546.21 489.76 546.05 429.22 539.94 429.22 463.22 503.33 450.69 557.09 456.96 557.11 457.3 557.11 457.46 560.22 532.11\" fill=\"#3f3d56\"/><polygon points=\"560.22 532.11 491.33 546.21 489.76 546.05 489.76 467.4 557.11 457.3 560.22 532.11\" opacity=\"0.1\"/><polygon points=\"557.11 457.46 557.09 457.48 489.76 467.4 429.22 463.22 503.33 450.69 557.09 456.96 557.11 457.3 557.11 457.46\" opacity=\"0.05\"/><polygon points=\"375.22 383.11 306.33 397.2 304.76 397.05 244.22 390.94 244.22 314.22 318.33 301.69 372.09 307.96 372.11 308.3 372.11 308.46 375.22 383.11\" fill=\"#3f3d56\"/><polygon points=\"375.22 383.11 306.33 397.2 304.76 397.05 304.76 318.4 372.11 308.3 375.22 383.11\" opacity=\"0.1\"/><polygon points=\"372.11 308.46 372.09 308.48 304.76 318.4 244.22 314.22 318.33 301.69 372.09 307.96 372.11 308.3 372.11 308.46\" opacity=\"0.05\"/><polygon points=\"496.22 380.11 427.33 394.2 425.76 394.05 365.22 387.94 365.22 311.22 439.33 298.69 493.09 304.96 493.11 305.3 493.11 305.46 496.22 380.11\" fill=\"#2568ef\"/><polygon points=\"496.22 380.11 427.33 394.2 425.76 394.05 425.76 315.4 493.11 305.3 496.22 380.11\" opacity=\"0.1\"/><polygon points=\"493.11 305.46 493.09 305.48 425.76 315.4 365.22 311.22 439.33 298.69 493.09 304.96 493.11 305.3 493.11 305.46\" opacity=\"0.05\"/><polygon points=\"532.22 303.11 463.33 317.2 461.76 317.05 401.22 310.94 401.22 234.22 475.33 221.69 529.09 227.96 529.11 228.3 529.11 228.46 532.22 303.11\" fill=\"#3f3d56\"/><polygon points=\"532.22 303.11 463.33 317.2 461.76 317.05 461.76 238.4 529.11 228.3 532.22 303.11\" opacity=\"0.1\"/><polygon points=\"529.11 228.46 529.09 228.48 461.76 238.4 401.22 234.22 475.33 221.69 529.09 227.96 529.11 228.3 529.11 228.46\" opacity=\"0.05\"/><path d=\"M704.35,244.45c-.73,6.5-5.69,11.74-7.53,18-2.76,9.45,2,19.6,8.56,27A59.77,59.77,0,0,0,747,309.19a17.91,17.91,0,0,0,6.88-.75,14.94,14.94,0,0,0,5.23-3.58c4.92-4.95,7.57-11.8,8.62-18.71s.65-13.94.24-20.91a11.83,11.83,0,0,0-.78-4.22,10.72,10.72,0,0,0-2.71-3.33,63,63,0,0,0-11.65-8.47c-1.8-1-3.73-2-4.88-3.73a12.21,12.21,0,0,1-1.51-4.47l-1.29-6.56a12.86,12.86,0,0,0-1.89-5.32c-2.27-3.06-6.62-3.48-10.43-3.63l-14-.55c-4.35-.17-10.07-1.42-14.32-.56-4,.79-2.65,4.45-1.93,7.77A56.18,56.18,0,0,1,704.35,244.45Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M704.35,244.45c-.73,6.5-5.69,11.74-7.53,18-2.76,9.45,2,19.6,8.56,27A59.77,59.77,0,0,0,747,309.19a17.91,17.91,0,0,0,6.88-.75,14.94,14.94,0,0,0,5.23-3.58c4.92-4.95,7.57-11.8,8.62-18.71s.65-13.94.24-20.91a11.83,11.83,0,0,0-.78-4.22,10.72,10.72,0,0,0-2.71-3.33,63,63,0,0,0-11.65-8.47c-1.8-1-3.73-2-4.88-3.73a12.21,12.21,0,0,1-1.51-4.47l-1.29-6.56a12.86,12.86,0,0,0-1.89-5.32c-2.27-3.06-6.62-3.48-10.43-3.63l-14-.55c-4.35-.17-10.07-1.42-14.32-.56-4,.79-2.65,4.45-1.93,7.77A56.18,56.18,0,0,1,704.35,244.45Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M793.26,537.21l-5.94,65.12c-1.55,17.08-3.13,34.23-6.17,51.09-1,5.81-2.28,11.59-3.74,17.32-4.06,15.91-9.95,31.46-11.85,47.77-.06.47-.11,1-.16,1.43-.39,3.6-.73,7.24-2,10.6-1,2.49-2.41,4.76-3.44,7.22-2,4.92-2.32,10.36-2.57,15.69a67.64,67.64,0,0,0-23.29-8c-4-.59-8.35-1-11-4-3-3.26-2.65-8.25-2.15-12.63q2.36-20.4,4.7-40.78a106.28,106.28,0,0,1,3-17.32c.54-1.89,1.19-3.75,1.85-5.61.91-2.56,1.83-5.12,2.52-7.75A93.33,93.33,0,0,0,735,644.53c1.61-13.68,3.55-27.33,5.25-41l.09-.72c2.55-20.72,4.49-41.54,3.93-62.41-.08-3.09-.21-6.18-.41-9.28-.28-4.49-.69-6.87,3-9.68,4.11-3.1,9.52-5.27,14.22-7.3,2.53-1.1,30.39-11,31-8.82a54.29,54.29,0,0,1,2,14.22A158.22,158.22,0,0,1,793.26,537.21Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#605d82\"/><path d=\"M781.15,653.42c-1,5.81-2.28,11.59-3.74,17.32-4.06,15.91-9.95,31.46-11.85,47.77-.06.47-.11,1-.16,1.43-12.42-17.74-22.88-36.82-35-54.75.91-2.56,1.83-5.12,2.52-7.75A93.33,93.33,0,0,0,735,644.53c1.61-13.68,3.55-27.33,5.25-41l.09-.72a42.47,42.47,0,0,0,3,8.41c8.14,16.54,27.48,24.9,36.94,40.73Q780.75,652.69,781.15,653.42Z\" transform=\"translate(-125.21 -98.18)\" opacity=\"0.1\"/><path d=\"M680.37,508c.41,13.26,2.53,26.41,4.65,39.51l4.37,27c2.39,14.8,4.89,29.89,11.89,43.14,5.24,9.92,12.78,18.38,19.61,27.27,16.78,21.86,29.39,46.63,45.3,69.13,4.63,6.54,11.24,13.62,19.13,12.25,5.18-.89,8.94-5.21,13-8.53,4.8-3.92,10.58-6.79,14.36-11.71s4.52-13.08-.6-16.58c-1.75-1.19-3.88-1.64-5.86-2.4-7.93-3-13.07-10.76-16.33-18.6s-5.25-16.25-9.6-23.54c-9.46-15.83-28.81-24.19-36.95-40.74-4.56-9.26-5-20-5.34-30.27l-.89-26.31c-.1-2.88-.17-5.87,1-8.5,3.11-7,12.51-7.66,20.13-8.55a68.75,68.75,0,0,0,24.67-7.78c4.39-2.37,8.67-5.39,11-9.79,2.14-4,2.43-8.71,2.68-13.25l2.64-47.69c.23-4.1.43-8.35-1-12.19-3.63-9.66-15.83-12.82-26.14-12.36-19.18.86-36.88,9.11-55,14.69-4.49,1.38-9,2.62-13.63,3.55-4,.81-9,.48-12.84,1.78-6.88,2.32-6.71,17.38-7.68,23.62A198.29,198.29,0,0,0,680.37,508Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#605d82\"/><path d=\"M782.72,728.32c1.69,1.71,2.24,4.21,2.68,6.57a224.15,224.15,0,0,1,3.8,39.71,6.58,6.58,0,0,0,.71,3.6,4.59,4.59,0,0,0,1.87,1.5c4.89,2.33,10.56-.92,14.64-4.49,7.55-6.61,13.94-15.49,14.37-25.52.11-2.58-.18-5.19.27-7.74.66-3.78,2.87-7.07,4.81-10.37a88.05,88.05,0,0,0,8-17.82c.74-2.34,1.24-5.28-.6-6.91a6.43,6.43,0,0,0-2.17-1.13L809,697.52c-1.92-.71-6.68,11.52-7.43,12.86-1.85,3.27-3.69,5.12-7.4,5.88s-8.29-.34-11.83,1.55C776.34,721,779.33,724.91,782.72,728.32Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#535070\"/><path d=\"M748.64,735.87a6.73,6.73,0,0,0-1.68-2.13,7.53,7.53,0,0,0-3.39-1.15c-4.2-.72-9.18-1.19-12.09,1.94-2.72,2.93-2.25,7.7-4.52,11-.72,1-1.7,1.9-2.32,3a11.26,11.26,0,0,0-1,5.38c-.12,5.09-.24,10.2.12,15.28.29,4.26,1,8.73,3.67,12.07,4.28,5.36,12,6.13,18.84,6.47l5.55.29a11,11,0,0,0,4.54-.42,7.45,7.45,0,0,0,3.92-4.31c2.89-7.18-1.68-14.91-4.5-22.11C752.53,752.89,753.11,743.7,748.64,735.87Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#535070\"/><path d=\"M702.75,207.8a4.53,4.53,0,0,1,.31-2.14c.81-1.43,2.93-1,4.53-.64,6.43,1.62,13.21.15,19.84.53s14.09,3.69,15.42,10.19a48.21,48.21,0,0,0,12.23-12.56c1.84-2.75,3.44-5.9,3.19-9.2-.36-4.76-4.35-8.32-8-11.34l-11-9a16.71,16.71,0,0,0-4.94-3.14c-2.54-.87-5.32-.45-8-.45-8,0-16.58-3.65-23.71,0-3,1.53-5.23,4.16-7.39,6.72l-9.83,11.64a6.21,6.21,0,0,0-1.58,2.67c-.28,1.42.45,2.82.71,4.25.46,2.6-.66,5.38.2,7.88,1.43,4.14,6.47,4.73,9.55,7.11,1.14.88,2.94,3.89,4.31,3.85C701,214.12,702.68,209.72,702.75,207.8Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><circle cx=\"594.22\" cy=\"112.45\" r=\"31.5\" fill=\"#ffc0c6\"/><path d=\"M726.81,279.56A15.26,15.26,0,0,0,712,269.34a4.45,4.45,0,0,1-2.74-.35,3.79,3.79,0,0,1-1.13-1.4,55.73,55.73,0,0,1-4.59-10.86c-.5-1.67-1.19-3.64-2.88-4.07-1.36-.35-2.75.53-3.66,1.6a35,35,0,0,1-2.62,3.29c-4,3.54-11,.31-15.19,3.56-.69.53-1.26,1.21-2,1.7a9.1,9.1,0,0,1-2.31,1A221.38,221.38,0,0,0,651,273.14c2.8,16.84,5.66,34,12.22,49.75,3.12,7.5,6.65,14.85,9.15,22.58,5.54,17.13,5.78,35.46,5.85,53.47,0,12.32,0,24.9-4,36.56-.9,2.64-2,5.26-2.25,8s.57,5.84,2.82,7.48a9.51,9.51,0,0,0,4.35,1.53c6.91,1,13.87-.82,20.67-2.4,18.23-4.22,36.83-6.64,55.38-9l31.1-4a18.19,18.19,0,0,0,6.44-1.67c5.69-3.11,6.23-11.67,2.69-17.11-1.69-2.61-4.08-4.75-5.51-7.51s-1.54-6.64.91-8.55c5-3.9,3.5-11.13,3.74-17.45q1-26.52-.27-53a103.72,103.72,0,0,1-.18-11c.35-6.22,1.89-12.31,3.43-18.36l9.45-37.2c-2.47-3.9-7.2-6.38-11.67-7.5s-9.14-1.45-13.55-2.82c-9-2.8-17.08-9.9-26.51-9.24a4.85,4.85,0,0,0-2.06.5c-2.12,1.21-1.79,4.27-1.92,6.71-.3,5.41-4.28,9.92-8.66,13.09s-9.4,5.47-13.43,9.08A6,6,0,0,0,726.81,279.56Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><path d=\"M602,314.85a37,37,0,0,1-6.62,3.41c-2.2.87-4.55,1.56-6.35,3.08a10.05,10.05,0,0,0-2.21,2.73A12.13,12.13,0,0,0,598,342.14c2.89-.15,5.62-1.32,8.27-2.47L628.49,330c3.76-1.63,7.82-3.53,9.6-7.23a1.74,1.74,0,0,0,.22-1.15,1.89,1.89,0,0,0-.92-1,49.77,49.77,0,0,1-12.93-12.2c-.91-1.24-2-4.16-3.32-4.91C616.44,300.9,605.77,312.41,602,314.85Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M839.52,307l8.19,9.36c1.76,2,3.52,4,5.12,6.16a71.67,71.67,0,0,1,9.38,17.67c1.78,4.67,3.26,9.65,2.64,14.61a36,36,0,0,1-2.05,7.43,91.86,91.86,0,0,1-5.57,13.4A76.26,76.26,0,0,1,851,385a219.1,219.1,0,0,1-20.77,23.75c-2.8,2.77-4,7.26-5.19,11-2.25,6.91-7.6,12.3-12.77,17.4a35.19,35.19,0,0,1-5.49,4.72,17.8,17.8,0,0,1-10,2.84,11,11,0,0,1-4.49-.93c-3.54-1.68-5.34-5.77-5.71-9.67a20.7,20.7,0,0,1,1.72-10.36c4.7-10.41,16.77-14.92,25.3-22.52,5-4.45,8.83-10.05,12.61-15.58a54.05,54.05,0,0,0,6.37-11.17c1.9-5.09,1.16-11.11,2.83-16.27.7-2.19,2-4.16,2.71-6.33s.95-4.74-.38-6.61a9.55,9.55,0,0,0-3.71-2.72c-5.45-2.76-11.55-6.32-12.59-12.35a13.22,13.22,0,0,1,2.44-9.43,39,39,0,0,1,6.87-7.2C833.12,311.43,837.13,309.06,839.52,307Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M596.74,327.91c-1.44-2.92-3.25-5.9-6.17-7.35a11.36,11.36,0,0,0-9,0,34.12,34.12,0,0,0-7.88,4.76l-7.06,5.21a17.37,17.37,0,0,0-4.19,3.87,16.11,16.11,0,0,0-2.18,6c-1,4.87-1.81,9.88-1.11,14.81,1.12,8,5.92,14.92,11.2,21,3.3,3.78,7.38,7.6,12.4,7.77,2.17.07,4.58-.79,5.48-2.76a6.83,6.83,0,0,0,.49-2.46c.54-8.88-2.64-17.55-6.34-25.64-1-2.2-2.08-4.48-2-6.89a1.86,1.86,0,0,1,.3-1.16,1.94,1.94,0,0,1,1.2-.59c5.07-1,13.81,2.94,17.36-2.69C601.54,338.07,598.38,331.22,596.74,327.91Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#ffc0c6\"/><path d=\"M701.09,197.89a4.66,4.66,0,0,1,.32-2.14c.81-1.44,2.93-1,4.53-.64,6.43,1.62,13.21.15,19.84.53s14.08,3.69,15.42,10.19a48.53,48.53,0,0,0,12.23-12.56c1.84-2.76,3.44-5.91,3.19-9.21-.36-4.76-4.36-8.32-8-11.33l-11-9a16.66,16.66,0,0,0-4.93-3.14c-2.55-.87-5.32-.45-8-.45-8,0-16.58-3.65-23.71,0-3,1.53-5.23,4.16-7.39,6.72l-9.84,11.64a6.23,6.23,0,0,0-1.57,2.67c-.28,1.42.45,2.82.71,4.25.46,2.6-.66,5.38.2,7.87,1.43,4.15,6.47,4.74,9.55,7.12,1.14.88,2.94,3.89,4.31,3.85C699.32,204.21,701,199.81,701.09,197.89Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><path d=\"M634.19,284.21a13.06,13.06,0,0,0-3.3,3.07c-1.15,1.75-1.39,4-2.38,5.8-2.12,3.94-7.09,5.35-10.18,8.58a3.19,3.19,0,0,0-1,1.68,3.71,3.71,0,0,0,.83,2.42l14.94,23.48c5,.44,9.74-2.68,14.72-2.26,1.85.15,3.76.79,5.54.24a16.1,16.1,0,0,0,3.55-2.17c3-1.88,6.92-2.1,9.41-4.57s2.7-6.1,2.67-9.47a37.37,37.37,0,0,0-.89-8.7c-2.2-9-9.09-15.94-13.41-23.92-2.11-3.89-3.25-6.16-7.7-3.49S638.4,281.13,634.19,284.21Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><path d=\"M815.6,272.34a35.07,35.07,0,0,1,7.52,6.58c2.27,2.93,3.56,6.53,5.75,9.53s5,5.16,7.4,7.84c3.65,4.06,6.12,9,8.54,13.91A208.6,208.6,0,0,1,825.49,332a6.19,6.19,0,0,1-2.94,1.92,4.71,4.71,0,0,1-4.14-1.69c-1.08-1.12-1.84-2.52-2.87-3.69a14.75,14.75,0,0,0-9.13-4.41,62.72,62.72,0,0,0-10.35-.15,4,4,0,0,1-2.21-.37,3.65,3.65,0,0,1-1.2-1.38c-4-6.88-2.75-15.52-1.32-23.38l3.27-18a40.44,40.44,0,0,1,2.73-10c1.24-2.65,4-7.15,7.42-6.35S812.71,270.26,815.6,272.34Z\" transform=\"translate(-125.21 -98.18)\" fill=\"#3f3d56\"/><polygon points=\"405.22 306.11 336.33 320.2 334.76 320.05 274.22 313.94 274.22 237.22 348.33 224.69 402.09 230.96 402.11 231.3 402.11 231.46 405.22 306.11\" fill=\"#2568ef\"/><polygon points=\"405.22 306.11 336.33 320.2 334.76 320.05 334.76 241.4 402.11 231.3 405.22 306.11\" opacity=\"0.1\"/><polygon points=\"402.11 231.46 402.09 231.48 334.76 241.4 274.22 237.22 348.33 224.69 402.09 230.96 402.11 231.3 402.11 231.46\" opacity=\"0.05\"/><polygon points=\"441.22 230.11 372.33 244.21 370.76 244.05 310.22 237.94 310.22 161.22 384.33 148.69 438.09 154.96 438.11 155.3 438.11 155.46 441.22 230.11\" fill=\"#3f3d56\"/><polygon points=\"441.22 230.11 372.33 244.21 370.76 244.05 370.76 165.4 438.11 155.3 441.22 230.11\" opacity=\"0.1\"/><polygon points=\"438.11 155.46 438.09 155.48 370.76 165.4 310.22 161.22 384.33 148.69 438.09 154.96 438.11 155.3 438.11 155.46\" opacity=\"0.05\"/></svg>
    </div>
</div>
<!-- end:: Section -->

<!-- begin:: Section -->
<div class=\"kt-portlet kt-margin-t-30\">
    <!--begin::Form-->
    {{ form_ajax('onSave', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
        <div class=\"kt-portlet__body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t<div class=\"col-xl-6\">
                    <div class=\"form-group\">
                        <label>{{'Person who receives'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <input type=\"text\" class=\"form-control\" name=\"receiver\" value=\"{{order.receiver.name}}\" required>
\t\t\t\t\t</div>
                    {% if this.param.status == 8 or this.param.status == 11 %}
                        <div class=\"form-group\">
                            <label>{{'Person who receives returned money'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control\" name=\"sender\" value=\"{{order.sender.name}}\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>{{'Returned money'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"number\" class=\"form-control\" name=\"returned_money\" value=\"{{order.package_fee}}\" required>
                        </div>
                    {% endif %}
                    {% if user.id != order.assigned_id %}
    \t\t\t\t\t<div class=\"form-group\">
                            <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\" required>
                                <option data-hidden=\"true\"></option>
                                {% for employee in employees %}
                                    <option value=\"{{employee.id}}\" {% if order.assigned_id == employee.id %}selected{% elseif user.id == employee.id %}selected{% endif %}>{{employee.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    {% else %}
                        <div class=\"form-group\">
                            <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control\" value=\"{{order.responsiable.name}}\" disabled>
    \t\t\t\t\t</div>
                    {% endif %}
                    <div class=\"form-group\">
                        <label>{{'Receiver ID Copy'|__}}</label>
                        <div class=\"kt-uppy\" id=\"kt_uppy_1\">
                            <div class=\"kt-uppy__dashboard\"></div>
                            <div class=\"kt-uppy__progress\"></div>
                        </div>
                        <span class=\"form-text text-muted\">{{'Upload or capture the front of the Receiver ID copy for confirmation'|__}}</span>
\t\t\t\t\t</div>
                    <div class=\"form-group\">
                        <label><i class=\"fa fa-signature\"></i>&nbsp;{{'Draw receiver signature'|__}}</label>
                        <br />
                        <div class=\"signature_container\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"First group\">
                                <button type=\"button\" class=\"btn btn-sm btn-primary\" id=\"undo\"><i class=\"la la-undo\"></i> {{'Undo'|__}}</button>
                                <button type=\"button\" class=\"btn btn-sm btn-warning\" id=\"clear\"><i class=\"la la-remove\"></i> {{'Clear'|__}}</button>
                            </div>
                            <canvas id=\"signaturePad\"></canvas>
                            <textarea id=\"signaturePadImg\" name=\"signaturePadImg\" class=\"kt-hide\"></textarea>
                        </div>
                        <span class=\"form-text text-muted\">{{'You can use your mouse to draw it, or if you using your mobile then you can use the touch screen to write it by your finger'|__}}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleTextarea\">{{'Notes'|__}}</label>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"note\" rows=\"3\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t</div>
\t\t</div>

        <div class=\"kt-portlet__foot\">
            <div class=\"kt-form__actions\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t\t<div class=\"col-xl-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"save\">{{'Confirm Deliver'|__}}</button>
                        <span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{'dashboard/shipment'|page({'id':this.param.id})}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t</div>
            </div>
        </div>
    {{ form_close() }}
    <!--end::Form-->
</div>
<!-- end:: Section -->

<!-- begin:: Section -->
<div class=\"row\">
\t<div class=\"col-lg-6\">
\t\t<div class=\"kt-portlet kt-callout kt-callout--brand kt-callout--diagonal-bg\">
\t\t\t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-callout__body\">
\t\t\t\t\t<div class=\"kt-callout__content\">
\t\t\t\t\t\t<h3 class=\"kt-callout__title\">{{'Reach The Sender By Mobile'|__}}</h3>
\t\t\t\t\t\t<p class=\"kt-callout__desc\">
\t\t\t\t\t\t\t{{'For more quick decisions you can call the sender mobile number from here'|__}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-callout__action\">
\t\t\t\t\t\t<a href=\"tel:{{ order.sender.mobile }}\" class=\"btn btn-custom btn-bold btn-upper btn-font-sm  btn-brand\">{{'Make Call'|__}}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"col-lg-6\">
\t\t<div class=\"kt-portlet kt-callout kt-callout--success kt-callout--diagonal-bg\">
\t\t\t<div class=\"kt-portlet__body\">
\t\t\t\t<div class=\"kt-callout__body\">
\t\t\t\t\t<div class=\"kt-callout__content\">
\t\t\t\t\t\t<h3 class=\"kt-callout__title\">{{'Reach The Receiver By Mobile'|__}}</h3>
\t\t\t\t\t\t<p class=\"kt-callout__desc\">
\t\t\t\t\t\t\t{{'For more quick decisions you can call the receiver mobile number from here'|__}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-callout__action\">
\t\t\t\t\t\t<a href=\"tel:{{ order.receiver.mobile }}\" class=\"btn btn-custom btn-bold btn-upper btn-font-sm  btn-brand\">{{'Make Call'|__}}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
</div>

{% put styles %}
    {% if currentLang == 'ar'%}
        <link href=\"./admin/vendors/custom/uppy/uppy.bundle.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/faq-3.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    {% else %}
        <link href=\"./admin/vendors/custom/uppy/uppy.bundle.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/faq-3.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.css\" rel=\"stylesheet\" type=\"text/css\" />
    {% endif %}
    <style>
        .signature_container {
            position: relative;
        }
        .signature_container .btn-group {
            position: absolute;
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

        canvas#signaturePad {
            background-color: #f7f8fa;
            border: 1px solid #ebedf2;
            max-width: 100%;
            display: block;
            border-radius: 5px;
            color: #000;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"./admin/vendors/custom/uppy/uppy.bundle.js\" type=\"text/javascript\"></script>

<script src=\"//cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js\"></script>
<script type='text/javascript' src=\"//github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js\"></script>

<script>
    if (\$('#signaturePadImg').length > 0){
        var canvas = document.querySelector(\"canvas\");
        var signaturePad = new SignaturePad(canvas);

        document.getElementById('clear').addEventListener('click', function () {
              signaturePad.clear();
        });

        document.getElementById('undo').addEventListener('click', function () {
        \tvar data = signaturePad.toData();
              if (data) {
                data.pop(); // remove the last dot or line
                signaturePad.fromData(data);
              }
        });
    }
</script>
<script type=\"text/javascript\">
\"use strict\";

// Class definition
var KTUppy = function () {
\tconst Tus = Uppy.Tus;
    //const XHRUpload = require('@uppy/xhr-upload')
    const XHRUpload = Uppy.XHRUpload;


\tconst ProgressBar = Uppy.ProgressBar;
\tconst StatusBar = Uppy.StatusBar;
\tconst FileInput = Uppy.FileInput;
\tconst Informer = Uppy.Informer;

\t// to get uppy companions working, please refer to the official documentation here: //uppy.io/docs/companion/
\tconst Dashboard = Uppy.Dashboard;
\tconst Webcam = Uppy.Webcam;

\t// Private functions
\tvar initUppy1 = function(){
\t\tvar id = '#kt_uppy_1';

\t\tvar options = {
\t\t\tproudlyDisplayPoweredByUppy: false,
\t\t\ttarget: id,
\t\t\tinline: true,
\t\t\treplaceTargetContent: true,
\t\t\tshowProgressDetails: true,
\t\t\tnote: '{{\"Press Upload after selecting or capture the copy\"|__}}.',
\t\t\theight: 470,
\t\t\tmetaFields: [
\t\t\t\t{ id: 'name', name: '{{\"Name\"|__}}', placeholder: '{{\"file name\"|__}}' },
\t\t\t\t{ id: 'caption', name: '{{\"Caption\"|__}}', placeholder: '{{\"describe what the image is about\"|__}}' }
\t\t\t],
\t\t\tbrowserBackButtonClose: true
\t\t}

\t\tvar uppyDashboard = Uppy.Core({
\t\t\tautoProceed: true,
\t\t\trestrictions: {
\t\t\t\tmaxFileSize: 10000000, // 1mb
\t\t\t\tmaxNumberOfFiles: 1,
\t\t\t\tminNumberOfFiles: 1
\t\t\t}
\t\t});

\t\tuppyDashboard.use(Dashboard, options);
\t\tuppyDashboard.use(Webcam, { target: Dashboard });
        uppyDashboard.use(XHRUpload, { endpoint: '{{url(\"api/uploadcopy\")}}/{{order.id}}',fieldName: 'copy' })
        .on('complete', (result) => {
            console.log('Upload result:', result)
        })
\t}

\treturn {
\t\t// public functions
\t\tinit: function() {
\t\t\tinitUppy1();
\t\t}
\t};
}();

KTUtil.ready(function() {
\tKTUppy.init();
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });


    \$('body').on('click', '#save', function(e, clickedIndex, newValue, oldValue){
        e.preventDefault();
          swal.fire({
              buttonsStyling: false,

              html: \"<strong>{{'Are you sure?'|__}}</strong><br />{{'This action will make the responsible for the delivery is you for administration review'|__}}\",
              type: \"warning\",

              confirmButtonText: \"{{'Yes, confirm!'|__}}\",
              confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

              showCancelButton: true,
              cancelButtonText: '{{\"No\"|__}}',
              cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
          }).then(function (result) {
              if (result.value) {
                    var dataURL = canvas.toDataURL();
                    var teet = signaturePad.toDataURL(\"data:image/png;base64,signature\");
                    \$('#signaturePadImg').val(dataURL);
                    \$('.kt_form').submit();
              } else {
                  swal.fire({
                      title: '{{\"Cancelled\"|__}}',
                      text: '{{\"Nothing updated! :)\"|__}}',
                      type: 'error',
                      buttonsStyling: false,
                      confirmButtonText: '{{\"OK\"|__}}',
                      confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                  });
              }
          });
    });

});
</script>
{% endput %}", "C:\\wamp64\\www\\company\\ebilty-web/themes/spotlayer/pages/dashboard/order-deliver.htm", "");
    }
}
