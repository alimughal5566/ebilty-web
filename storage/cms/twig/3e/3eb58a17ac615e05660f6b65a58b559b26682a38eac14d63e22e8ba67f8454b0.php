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

/* F:\xampp\htdocs\ebilty-web/plugins/responsiv/uploader/components/imageuploader/image-single.htm */
class __TwigTemplate_01f05f5f4720c76a7af85b51f0bbe318f8a424d0dfdb1819384e31de32ffc9f1 extends \Twig\Template
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
        $context["file"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "singleFile", [], "any", false, false, false, 1);
        // line 2
        echo "
<div
    class=\"responsiv-uploader-fileupload style-image-single ";
        // line 4
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "isPopulated", [], "method", false, false, false, 4)) ? ("is-populated") : (""));
        echo "\"
    data-control=\"fileupload\"
    data-template=\"#uploaderTemplate";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\"
    data-unique-id=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\"
    data-upload-handler=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onUpload\"
    data-thumbnail-width=\"";
        // line 9
        ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageWidth", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageWidth", [], "any", false, false, false, 9), "html", null, true))) : (print ("0")));
        echo "\"
    data-thumbnail-height=\"";
        // line 10
        ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageHeight", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageHeight", [], "any", false, false, false, 10), "html", null, true))) : (print ("0")));
        echo "\"
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileTypes", [], "any", false, false, false, 11)) {
            echo "data-file-types=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileTypes", [], "any", false, false, false, 11), "html", null, true);
            echo "\"";
        }
        // line 12
        echo ">

    <!-- Field placeholder -->
    <input type=\"hidden\" name=\"_uploader[";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "attribute", [], "any", false, false, false, 15), "html", null, true);
        echo "]\" value=\"\" />

    <!-- Add New Image -->
    <a
        href=\"javascript:;\"
        style=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getCssBlockDimensions", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
        class=\"upload-button\">
        <span class=\"upload-button-icon\"></span>
    </a>

    <!-- Existing file -->
    <div class=\"upload-files-container\">
        ";
        // line 27
        if (($context["file"] ?? null)) {
            // line 28
            echo "            <div class=\"upload-object is-success\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" data-path=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "pathUrl", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
                <div class=\"icon-container image\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "thumbUrl", [], "any", false, false, false, 30), "html", null, true);
            echo "\" alt=\"\" />
                </div>
                <div class=\"info\">
                    <h4 class=\"filename\">
                        <span data-dz-name>";
            // line 34
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "title", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "title", [], "any", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "file_name", [], "any", false, false, false, 34))), "html", null, true);
            echo "</span>
                        <a
                            href=\"javascript:;\"
                            class=\"upload-remove-button\"
                            data-request=\"";
            // line 38
            echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::onRemoveAttachment"), "html", null, true);
            echo "\"
                            data-request-confirm=\"Are you sure?\"
                            data-request-data=\"file_id: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\"
                            >&times;</a>
                    </h4>
                    <p class=\"size\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "sizeToString", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                </div>
                <div class=\"meta\"></div>
            </div>
        ";
        }
        // line 48
        echo "    </div>

</div>

<!-- Template for new file -->
<script type=\"text/template\" id=\"uploaderTemplate";
        // line 53
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
    <div class=\"upload-object dz-preview dz-file-preview\">
        <div class=\"icon-container image\">
            <img data-dz-thumbnail style=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getCssDimensions", [], "any", false, false, false, 56), "html", null, true);
        echo "\" />
        </div>
        <div class=\"info\">
            <h4 class=\"filename\">
                <span data-dz-name></span>
                <a
                    href=\"javascript:;\"
                    class=\"upload-remove-button\"
                    data-request=\"";
        // line 64
        echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::onRemoveAttachment"), "html", null, true);
        echo "\"
                    data-request-confirm=\"Are you sure?\"
                    >&times;</a>
            </h4>
            <p class=\"size\" data-dz-size></p>
            <p class=\"error\"><span data-dz-errormessage></span></p>
        </div>
        <div class=\"meta\">
            <div class=\"progress-bar\"><span class=\"upload-progress\" data-dz-uploadprogress></span></div>
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\ebilty-web/plugins/responsiv/uploader/components/imageuploader/image-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 64,  153 => 56,  147 => 53,  140 => 48,  132 => 43,  126 => 40,  121 => 38,  114 => 34,  107 => 30,  99 => 28,  97 => 27,  87 => 20,  79 => 15,  74 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set file = __SELF__.singleFile %}

<div
    class=\"responsiv-uploader-fileupload style-image-single {{ __SELF__.isPopulated() ? 'is-populated' }}\"
    data-control=\"fileupload\"
    data-template=\"#uploaderTemplate{{ __SELF__ }}\"
    data-unique-id=\"{{ __SELF__ }}\"
    data-upload-handler=\"{{ __SELF__ }}::onUpload\"
    data-thumbnail-width=\"{{ __SELF__.imageWidth ?: '0' }}\"
    data-thumbnail-height=\"{{ __SELF__.imageHeight ?: '0' }}\"
    {% if __SELF__.fileTypes %}data-file-types=\"{{ __SELF__.fileTypes }}\"{% endif %}
>

    <!-- Field placeholder -->
    <input type=\"hidden\" name=\"_uploader[{{ __SELF__.attribute }}]\" value=\"\" />

    <!-- Add New Image -->
    <a
        href=\"javascript:;\"
        style=\"{{ __SELF__.getCssBlockDimensions }}\"
        class=\"upload-button\">
        <span class=\"upload-button-icon\"></span>
    </a>

    <!-- Existing file -->
    <div class=\"upload-files-container\">
        {% if file %}
            <div class=\"upload-object is-success\" data-id=\"{{ file.id }}\" data-path=\"{{ file.pathUrl }}\">
                <div class=\"icon-container image\">
                    <img src=\"{{ file.thumbUrl }}\" alt=\"\" />
                </div>
                <div class=\"info\">
                    <h4 class=\"filename\">
                        <span data-dz-name>{{ file.title ?: file.file_name }}</span>
                        <a
                            href=\"javascript:;\"
                            class=\"upload-remove-button\"
                            data-request=\"{{ __SELF__ ~ '::onRemoveAttachment' }}\"
                            data-request-confirm=\"Are you sure?\"
                            data-request-data=\"file_id: {{ file.id }}\"
                            >&times;</a>
                    </h4>
                    <p class=\"size\">{{ file.sizeToString }}</p>
                </div>
                <div class=\"meta\"></div>
            </div>
        {% endif %}
    </div>

</div>

<!-- Template for new file -->
<script type=\"text/template\" id=\"uploaderTemplate{{ __SELF__ }}\">
    <div class=\"upload-object dz-preview dz-file-preview\">
        <div class=\"icon-container image\">
            <img data-dz-thumbnail style=\"{{ __SELF__.getCssDimensions }}\" />
        </div>
        <div class=\"info\">
            <h4 class=\"filename\">
                <span data-dz-name></span>
                <a
                    href=\"javascript:;\"
                    class=\"upload-remove-button\"
                    data-request=\"{{ __SELF__ ~ '::onRemoveAttachment' }}\"
                    data-request-confirm=\"Are you sure?\"
                    >&times;</a>
            </h4>
            <p class=\"size\" data-dz-size></p>
            <p class=\"error\"><span data-dz-errormessage></span></p>
        </div>
        <div class=\"meta\">
            <div class=\"progress-bar\"><span class=\"upload-progress\" data-dz-uploadprogress></span></div>
        </div>
    </div>
</script>
", "F:\\xampp\\htdocs\\ebilty-web/plugins/responsiv/uploader/components/imageuploader/image-single.htm", "");
    }
}
