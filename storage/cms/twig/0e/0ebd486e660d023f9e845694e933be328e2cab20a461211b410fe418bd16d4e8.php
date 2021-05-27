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

/* C:\xampp\htdocs\IVYLABS\ebilty-web/themes/spotlayer/pages/login.htm */
class __TwigTemplate_a6ad672f4248d0b2f59117b9c258386f1da3b3ac77619f4c428dd89efa66aaed extends \Twig\Template
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
        echo "<style>
    /*\$this['departments']=\\Spot\\Shipment\\Models\\UsersGroups::where('id','!=',1)->get();*/
    /*<!--dd(\$this['departments']);-->*/

    body{
        background-image: linear-gradient(to right, #EE8335, #FDC90E);
    }
    .divs , .vehicle_category {
        position: relative;
    }
    .option_min_add {
        position: absolute;
        right: -27px;
        top: -10px;
    }
    .option_min_add.sec_min {
        right: -22px;
    }
    .option_min_add .fa {
        cursor: pointer;
    }
</style>
<!-- begin:: Page -->
 <div class=\"kt-grid kt-grid--ver kt-grid--root kt-page custom-grid\">
     <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin\" id=\"kt_login\">
         <div class=\"kt-login__header mx-auto text-center d-block w-100\">
             <a class=\"kt-login__logo d-inline-block py-4\" href=\"";
        // line 27
        echo url("/");
        echo "\">
                 <img style=\"max-height:90px;max-width:80%;\"
                      class=\"h-auto w-auto\" alt=\"\"
                      src=\"";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 30)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "logo", [], "any", false, false, false, 30), "path", [], "any", false, false, false, 30), "html", null, true);
        } else {
            echo "./admin/media/logos/logo.svg";
        }
        echo "\">
             </a>
         </div>
         <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">
             <div class=\"kt-login__right\">
                 <div class=\"kt-login__wrapper\">
                     <div class=\"kt-login__signin\">
                         <div class=\"kt-login__head\">
                             <div class=\"kt-login__title mb-4\">
                                 <h3 class=\"kt-margin-t-30\"><span class=\"color-secondary\">Sign</span> <span
                                         class=\"text-white\">In</span></h3>
                             </div>
                             <div class=\"kt-login__subtitle text-white font-weight-bold\">Enter your credentials to log in </div>
                         </div>
                         <div class=\"kt-login__form mt-3\">
                             <form class=\"kt-form mb-3\" action=\"\">

                                 ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 47
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 48
                echo "                                    <div class=\"kt-alert kt-alert--outline alert alert-";
                if ((($context["type"] ?? null) == "error")) {
                    echo "danger";
                } else {
                    echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                }
                echo " alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
                // line 49
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
                echo "\"></button>
                                        <span>";
                // line 50
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</span>
                                    </div>
                                 ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 53
        echo "                                 <div class=\"form-group\">
                                     <label for=\"userSigninLogin\" class=\"sr-only\"></label>
                                     <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 55
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["loginAttributeLabel"] ?? null)]);
        echo "\" name=\"login\" id=\"userSigninLogin\" autocomplete=\"off\" required>
                                     <i class=\"fa fa-user field-icon\"></i>
                                 </div>
                                 <div class=\"form-group\">
                                     <label for=\"userSigninPassword\" class=\"sr-only\"></label>
                                     <input class=\"form-control form-control-last\" type=\"Password\" placeholder=\"";
        // line 60
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
        echo "\" id=\"userSigninPassword\" name=\"password\" required>
                                     <i class=\"fa fa-user field-icon\"></i>
                                 </div>
                                 <div class=\"row kt-login__extra\">
                                     ";
        // line 64
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 65
            echo "                                     <div class=\"col kt-align-left\">
                                         <label class=\"kt-checkbox color-secondary font-weight-bold\">
                                             <input name=\"remember\" type=\"checkbox\" value=\"1\"> ";
            // line 67
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Remember me"]);
            echo "
                                             <span></span>
                                         </label>
                                     </div>
                                     ";
        }
        // line 72
        echo "                                     <div class=\"col kt-align-right \">
                                         <button class=\"btn btn-gradient btn-gradient-blue btn-block w-100\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign In"]);
        echo "</button>
                                        <!--  <a href=\"javascript:;\" id=\"kt_login_forgot\" class=\"kt-link kt-hidden\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Forget Password ?"]);
        echo "</a> -->
                                     </div>
                                 </div>
                                  <a href=\"javascript:void(0);\" id=\"kt_login_forgot\" class=\"kt-link mt-3 ml-auto text-right d-block color-secondary font-weight-bold\">";
        // line 77
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Forget Password ?"]);
        echo "</a>
                                 <div class=\"kt-login__actions kt-margin-t-10 flex-column\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg d-block w-100 text-white font-weight-bold\">
                  \t\t\t\t\t\t";
        // line 80
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Don't have an account yet? No need to worry"]);
        echo "
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a href=\"javascript:void(0);\" id=\"kt_login_signup\" class=\"kt-login__account-link btn-gradient btn-gradient-orange btn-block w-100\">";
        // line 83
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up!"]);
        echo "</a>
                  \t\t\t\t</div>
                                 <div class=\"kt-login__actions my-4\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg text-white font-weight-bold\">
                  \t\t\t\t\t\t";
        // line 87
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You have tracking number ?"]);
        echo "
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a href=\"";
        // line 90
        echo url("tracking");
        echo "\"  class=\"kt-login__account-link color-secondary font-weight-bold\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Track shipment"]);
        echo "</a>
                  \t\t\t\t</div>
                             </form>
                         </div>
                         <div class=\"kt-login__actionsCustom\">
                             <div class=\"section_separator\">
                                 <span class=\"text-white font-weight-bold\">OR</span>
                             </div>
                             <div>
                                 <div class=\"text-center mx-auto d-block my-4\">
                                     <span class=\"text-center text-white font-weight-bold\">Login As</span>
                                 </div>

                                 <div class=\"login-item-type d-flex flex-wrap justify-content-between\">
                                     <a href=\"/login\" class=\"btn btn-gradient flex-column half\">
                                         <i class=\"fa fa-industry fa-2x\"></i>
                                         <span>VENDOR</span>
                                     </a>
                                     <a href=\"/login\" class=\"btn btn-gradient flex-column half\">
                                         <i class=\"fa fa-truck-loading fa-2x\"></i>
                                         <span>SERVICE PROVIDER</span>
                                     </a>
                                     <a href=\"/login/admin\" class=\"btn btn-gradient flex-column full\">
                                         <i class=\"fa fa-user-circle fa-2x\"></i>
                                         <span>ADMIN</span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
\t\t             <div class=\"kt-login__signup\">
                         ";
        // line 121
        if (($context["canRegister"] ?? null)) {
            // line 122
            echo "                             <div class=\"kt-login__head mb-5\">
                                 <div class=\"kt-login__title\">
                                     <h3 class=\"kt-margin-t-30\"><span class=\"color-secondary\">Sign</span> <span
                                             class=\"text-white\">Up !</span></h3>
                                 </div>
                                 <div class=\"kt-login__subtitle text-white font-weight-bold\">";
            // line 127
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your details to create your account"]);
            echo "</div>
                             </div>
                            <form class=\"kt-form\" action=\"\"  enctype=\"multipart/form-data\">
        \t\t\t\t\t\t<div class=\"input-group\">
                                    <label for=\"registerName\" class=\"sr-only\"></label>
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"registerName\" placeholder=\"";
            // line 132
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Full Name"]);
            echo "\" name=\"name\" required>
                                    <i class=\"fa fa-user field-icon\"></i>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
                                    <label for=\"registerEmail\" class=\"sr-only\"></label>
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 137
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo "\" id=\"registerEmail\" name=\"email\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-envelope field-icon\"></i>
        \t\t\t\t\t\t</div>
<!--                                ";
            // line 140
            if ((($context["loginAttribute"] ?? null) == "username")) {
                echo "-->
<!--            \t\t\t\t\t\t<div class=\"input-group\">-->
<!--            \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"";
                // line 142
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your username"]);
                echo "\" id=\"registerUsername\" name=\"username\" autocomplete=\"off\" required>-->
<!--            \t\t\t\t\t\t</div>-->
<!--                                ";
            }
            // line 144
            echo "-->

                                <div class=\"input-group\">
                                    <label for=\"postal_code\" class=\"sr-only\"></label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 148
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Address"]);
            echo "\"  name=\"postal_code\" id=\"postal_code\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-home field-icon\"></i>
                                </div>
                                <div class=\"input-group\">
                                    <label for=\"mobile\" class=\"sr-only\"></label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 153
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile Number"]);
            echo "\"  name=\"mobile\" id=\"mobile\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-mobile-alt field-icon\"></i>
                                </div>
                                <div class=\"input-group upload-btn-wrapper\">
                                    <label for=\"cnic\" class=\"sr-only\"></label>
                                    <span class=\"upload-wrap px-3 w-100 d-flex align-items-center justify-content-between\">
                                        <span class=\"upload-txt ont-weight-bold\">CNIC</span>
                                        <a class=\"btn\">Upload Image</a>
                                    </span>
                                    <input class=\"\" type=\"file\" placeholder=\"";
            // line 162
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CNIC"]);
            echo "\"  name=\"cnic\" autocomplete=\"off\"  id=\"cnic\" required accept=\"image/*\">
                                    <input  type=\"hidden\"  name=\"cnic_image\" id=\"cnic_image\" >
                                </div>
                                <div class=\"input-group\">
                                    <label for=\"bussiness_type\" class=\"sr-only\"></label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 167
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Bussiness Type"]);
            echo "\"  name=\"bussiness_type\" id=\"bussiness_type\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-user-cog field-icon\"></i>
                                </div>
                                <div class=\"input-group\">
                                    <label for=\"user_role_id\" class=\"sr-only\"></label>
                                    <select name=\"user_role_id\" class=\"form-control selectpicker\" data-dropup-auto=\"false\" id=\"user_role_id\" autocomplete=\"off\" required>
                                        <option  value=\"\" selected disabled>Register As</option>
                                        <option  value=\"5\" class=\"individual\">Vendor</option>
                                        <option  value=\"12\" class=\"company\">Service Provider</option>
                                    </select>
                                </div>

                                <div class=\"input-group vehicle_category\" style=\"display:none\">
                                    <label for=\"vehicle_category\" class=\"sr-only\"></label>
                                    <select name=\"vehicle_category[]\" required class=\"form-control selectpicker\" data-dropup-auto=\"false\" id=\"vehicle_category\" autocomplete=\"off\">
                                        ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories_car"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 183
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 183), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 183), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                                        <option value=\"\" selected disabled>Vehicle category</option>
                                    </select>

                                    <div class=\"option_min_add sec_min\">
                                        <span class=\"fa fa-plus-circle plos text-dark pls pt-5 mt-2 pl-1\" id=\"first\"></span>
                                    </div>
                                </div>
                                <div class=\"input-group vehicle_type veh\" style=\"display:none\">
                                    <label for=\"vehicle_category\" class=\"sr-only\"></label>
                                    <select  name=\"truck_used[]\"  class=\"form-control\" data-dropup-auto=\"false\" id=\"truck_used\" autocomplete=\"off\" required>
                                    </select>
                                </div>

                                <div class=\"divs\">
                                </div>

        \t\t\t\t\t\t<div class=\"input-group\">
                                    <label for=\"registerPassword\" class=\"sr-only\"></label>
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 203
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
            echo "\" id=\"registerPassword\" name=\"password\" required>
                                    <i class=\"fa fa-lock field-icon\"></i>
        \t\t\t\t\t\t</div>
<!--        \t\t\t\t\t\t<div class=\"input-group\">-->
<!--        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"";
            // line 207
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Confirm Password"]);
            echo "\" name=\"rpassword\" id=\"rpassword\" required>-->
<!--        \t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t<div class=\"row kt-login__extra kt-hidden\">-->
<!--        \t\t\t\t\t\t\t<div class=\"col kt-align-left\">-->
<!--        \t\t\t\t\t\t\t\t<label class=\"kt-checkbox\">-->
<!--        \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" id=\"agreement\" checked required>";
            // line 212
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["I Agree the"]);
            echo " <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["terms and conditions"]);
            echo "</a>.-->
<!--        \t\t\t\t\t\t\t\t\t<span></span>-->
<!--        \t\t\t\t\t\t\t\t</label>-->
<!--        \t\t\t\t\t\t\t\t<span class=\"form-text text-muted\"></span>-->
<!--        \t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t</div>-->
        \t\t\t\t\t\t<div class=\"kt-login__actions d-flex align-items-center justify-content-between text-justify\">
                                    <button id=\"kt_login_signup_cancel\" class=\"btn btn-gradient btn-gradient-default kt-login__btn-secondary mx-0\">";
            // line 219
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                                    <button id=\"kt_login_signup_submit\" type=\"submit\" class=\"btn btn-gradient btn-gradient-blue kt-login__btn-primary mx-0\">";
            // line 220
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sign Up"]);
            echo "</button>
        \t\t\t\t\t\t</div>
                                <div class=\"kt-login__actions kt-margin-t-10 flex-column\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg d-block w-100 text-white font-weight-bold\">Already have an account? <a href=\"javascript:void(0);\" id=\"kt_login_signin\" class=\"kt-login__account-link \">";
            // line 223
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login"]);
            echo "</a> to your account</span>
                                </div>
        \t\t\t\t\t</form>
                        ";
        } else {
            // line 227
            echo "                            <!-- Registration is disabled. -->
                        ";
        }
        // line 229
        echo "    \t\t\t\t</div>
                     <div class=\"kt-login__forgot\">
                         <div class=\"kt-login__head\">
                             <h3 class=\"kt-login__title\">";
        // line 232
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Forgotten Password ?"]);
        echo "</h3>
                             <div class=\"kt-login__desc\">";
        // line 233
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter your email to reset your password"]);
        echo ":</div>
                         </div>
                         <div class=\"kt-login__form\">

                             <form class=\"kt-form\" data-request=\"";
        // line 237
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\" data-request-update=\"'";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
                                 <div class=\"form-group\">
                                     <input class=\"form-control\" type=\"email\" placeholder=\"";
        // line 239
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
        echo "\" name=\"email\" id=\"userRestoreEmail\" autocomplete=\"off\">
                                 </div>

                                 <div class=\"kt-login__actions\">
                                     <button id=\"kt_login_forgot_submit\" class=\"btn btn-brand btn-pill btn-elevate\">";
        // line 243
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Request"]);
        echo "</button>
                                     <button id=\"kt_login_forgot_cancel\" class=\"btn btn-outline-brand btn-pill\">";
        // line 244
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                 </div>
                             </form>

                         </div>
                     </div>


                      ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 252)) {
            // line 253
            echo "                      <!--begin::Divider-->
                      <div class=\"kt-login__divider\">
                          <div class=\"kt-divider\">
                              <span></span>
                              <span>";
            // line 257
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OR"]);
            echo "</span>
                              <span></span>
                          </div>
                      </div>
                      <!--end::Divider-->

                      <!--begin::Options-->
                       <div class=\"row\">
                          <div class=\"col-xl-12\">
                              <!--begin:: Widgets/Applications/User/Profile3-->
                              <div class=\"kt-portlet kt-portlet--height-fluid\">
                                  <div class=\"kt-portlet__body\">
                                      <div class=\"kt-widget kt-widget--user-profile-3\">
                                          <div class=\"kt-widget__bottom\">
                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-user-settings\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 276
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Admin"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"admin\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 277
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-businesswoman\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 286
            echo "Employee";
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"employee\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 287
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-truck\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 296
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Driver"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"driver\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 297
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-avatar\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">";
            // line 306
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "</span>
                                                      <a href=\"javascript:;\" id=\"client\" class=\"kt-widget__value kt-font-brand signin_as\">";
            // line 307
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Login as"]);
            echo "</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!--end:: Widgets/Applications/User/Profile3-->
                          </div>
                      </div>
                      <!--end::Options-->

                      ";
        }
        // line 320
        echo "
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal -->
 <div class=\"modal fade\" id=\"kt_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
         <div class=\"modal-content\">
             <div class=\"modal-header\">
                 <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
        // line 331
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Terms and conditions"]);
        echo "</h5>
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 </button>
             </div>
             <div class=\"modal-body\">
                 <div class=\"kt-scroll\" data-scroll=\"true\" data-height=\"200\">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 345
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Don't Agree"]);
        echo "</button>
                 <button type=\"button\" class=\"btn btn-primary\" id=\"agree\" data-dismiss=\"modal\">";
        // line 346
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Agree"]);
        echo "</button>
             </div>
         </div>
     </div>
 </div>
 ";
        // line 351
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 352
        echo "     <link href=\"./admin/css/demo10/pages/login/login-5.css\" rel=\"stylesheet\" type=\"text/css\" />
     <style>
         .kt-header__topbar-item--langs {
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             -webkit-box-flex: 1;
             -ms-flex: 1;
             flex: 1;
             width: 100%;
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             justify-content: center;
         }
         .kt-header__topbar-item--langs .kt-header__topbar-icon img {
             width: 25px;
         }
     </style>
 ";
        // line 351
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 374
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 375
        echo " <script type=\"text/javascript\">
     \"use strict\";

    // Class Definition
    var KTLoginGeneral = function() {

        var login = \$('#kt_login');

        var showErrorMsg = function(form, type, msg) {
            var alert = \$('<div class=\"kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible\" role=\"alert\">\\
    \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\\
    \t\t\t<span></span>\\
    \t\t</div>');

            form.find('.alert').remove();
            alert.prependTo(form);
            //alert.animateClass('fadeIn animated');
            KTUtil.animateClass(alert[0], 'fadeIn animated');
            alert.find('span').html(msg);
        }

        // Private Functions
        var displaySignUpForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signin');

            login.addClass('kt-login--signup');
            KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
        }

        var displaySignInForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--signin');
            KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
            //login.find('.kt-login__signin').animateClass('flipInX animated');
        }

        var displayForgotForm = function() {
            login.removeClass('kt-login--signin');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--forgot');
            //login.find('.kt-login--forgot').animateClass('flipInX animated');
            KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

        }

        var handleFormSwitch = function() {
            \$('#kt_login_forgot').click(function(e) {
                e.preventDefault();
                displayForgotForm();
            });

            \$('#kt_login_forgot_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });

            \$('#kt_login_signup').click(function(e) {
                e.preventDefault();
                displaySignUpForm();
            });

            \$('#kt_login_signup_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        \$(document).on('change', '#user_role_id', function(){
            var text=\$(\"#user_role_id option:selected\").text();
            if(text==\"Service Provider\"){
                \$('.vehicle_category').show('2000');
            }else{
                \$('.vehicle_category').hide('2000');
                \$('.vehicle_type').hide('2000');
            }
        });
        \$(document).on('change', '#vehicle_category', function(){
                \$('.veh').show('2000');
        });
        var counter=0;
        \$(document).on('click', '.plos', function(){
               var txt=`<div class=\"input-group div_\${counter}\" >
                                    <label for=\"vehicle_category_\${counter}\" class=\"sr-only\"></label>
                                    <select name=\"vehicle_category[]\" required class=\"form-control sbt\" data-dropup-auto=\"false\" id=\"vehicle_category_\${counter}\" data-id=\"\${counter}\" autocomplete=\"off\">
                                        ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_car"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 464
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 464), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 464), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        echo "                                        <option value=\"\" selected disabled>Vehicle category</option>
                                    </select>
                                    <div class=\"option_min_add\">
                                        <span class=\"fa fa-minus-circle minus text-dark pls pt-5 mt-2 pl-1 \" data-id=\"\${counter}\" ></span>&nbsp
                                       
                                    </div>
                                </div>
                                <div class=\"input-group vehicle_type\" style=\"display: none\"  id=\"type_\${counter}\">
                                    <label for=\"vehicle_category\" class=\"sr-only\"></label>
                                    <select  name=\"truck_used[]\" class=\"form-control\" data-dropup-auto=\"false\" id=\"truck_used_\${counter}\" autocomplete=\"off\" required >
                                    </select>
                                </div>
                                </div>`;
                             counter++;
            \$('.divs').append(txt);
            // \$('#first').hide('3000');
            // if (\$('.divs').counter === 0) {
                // console.log('popo');
                // code to run if it isn't there
            // }
        });

        \$(document).on('click', '.minus', function(){
            var id=\$(this).attr('data-id');
               \$('.div_'+id).hide('3000')
               \$('#type_'+id).hide('3000')

        });


        \$(document).on('change', '#vehicle_category', function(){
            \$.request('onChangefees1', {
                method:'post',
                data: {id:\$('#vehicle_category option:selected' ).val()},
                success: function(response, status, xhr, \$form) {
                    var html='';
                    \$.each(response,function (key,value) {
                        html += '<option value=\"'+value.id+'\">'+value.name+'</option>';
                        console.log(value);
                    });
                    html += \"<option value='' selected disabled>Choose type</option>\";
                    \$('#truck_used').empty().append(html);
                }
            });
        });

        \$(document).on('change', '.sbt', function(){
            var id=\$(this).attr('data-id');
            console.log(this)
           var val1= \$('#vehicle_category_'+id+' option:selected').val();
            // alert(id);
            // return;
            \$.request('onChangefees1', {
                method:'post',
                data: {id:val1},
                success: function(response, status, xhr, \$form) {
                    var html='';
                    \$.each(response,function (key,value) {
                        html += '<option value=\"'+value.id+'\">'+value.name+'</option>';
                        // \$(\"#truck_used\").append('<option value=1>My option</option>');
                        console.log(value);
                    });
                    html += \"<option value='' selected disabled>Choose type</option>\";
                    \$('#truck_used_'+id).empty().append(html);
                    \$('#type_'+id).show('3000');
                }
            });
        });

        var handleSignInFormSubmit = function() {
            \$('#kt_login_signin_submit').click(function(e) {
                e.preventDefault();
                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        login: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        \"login\": {
                            required: '";
        // line 552
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This field is required!"]);
        echo "',
                        },
                        \"password\": {
                            required: '";
        // line 555
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This field is required!"]);
        echo "',
                        },
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onSignin', {
                    data: {login: \$('#userSigninLogin').val(), password: \$('#userSigninPassword').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        console.log(e);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                           showErrorMsg(form, 'success', '";
        // line 581
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
        echo ".');
                           location.href = \"";
        // line 582
        echo url("dashboard");
        echo "\";
                        }, 2000);
                    }
                });
            });
        }

        var handleSignUpFormSubmit = function() {
            \$('#kt_login_signup_submit').click(function(e) {

                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        },
                        rpassword: {
                            required: true
                        },
                        agree: {
                            required: true
                        }
                    }
                });
                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                var arr=[];
                if(counter>0) {
                    for (var i = 0; i < counter; i++) {
                        var val = \$(\"#vehicle_category_\" + i + \" option:selected\").val();
                        var typ = \$(\"#type_\" + i + \" option:selected\").val();
                        if (val != '' && typ!='') {
                            var ar = {cat: val, type: typ};
                            arr.push(ar);
                        }
                    }
                }
                    var ar = {cat: \$('#vehicle_category option:selected' ).val(), type: \$('#truck_used option:selected').val()};
                    arr.push(ar);


// console.log(arr);
//  return ;

                \$.request('onRegister', {
                    ";
        // line 641
        if ((($context["loginAttribute"] ?? null) == "username")) {
            // line 642
            echo "
                        data: {
                        name: \$('#registerName').val(),
                                email: \$('#registerEmail').val(),
                                username: \$('#registerUsername').val(),
                                password: \$('#registerPassword').val(),
                                password_confirmation: \$('#rpassword').val(),
                                phone: \$('#mobile').val(),
                                postal_code: \$('#postal_code').val(),
                                cnic: \$('#cnic_image').val(),
                                bussiness_type: \$('#bussiness_type').val(),
                                user_role_id:\$('#user_role_id').val(),
                                vehicle_category:\$('#vehicle_category option:selected' ).val(),
                                truck_used:\$('#truck_used option:selected').val()
                                ,vehicles:arr
                        },

                    ";
        } else {
            // line 660
            echo "
                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), phone: \$('#mobile').val(), postal_code: \$('#postal_code').val(), cnic: \$('#cnic_image').val(), bussiness_type: \$('#bussiness_type').val(), user_role_id:\$('#user_role_id').val(),vehicle_category:\$('#vehicle_category option:selected' ).val(),truck_used:\$('#truck_used option:selected').val(),vehicles:arr},

                    ";
        }
        // line 664
        echo "
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                        //showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            ";
        // line 678
        if ((($context["requireActivation"] ?? null) && (null === ($context["automaticActivation"] ?? null)))) {
            // line 679
            echo "    \t                       showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you. To complete your registration please check your email"]);
            echo ".');
                            ";
        } else {
            // line 681
            echo "                               showErrorMsg(form, 'success', '";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct, you are being redirect"]);
            echo ".');
                               location.href = \"";
            // line 682
            echo url("dashboard");
            echo "\";
                           ";
        }
        // line 684
        echo "                        }, 2000);
                    }
                });
            });
        }

        var handleForgotFormSubmit = function() {
            \$('#kt_login_forgot_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRestorePassword', {
                    data: {email: \$('#userRestoreEmail').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        alert(e.responseText);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                        //showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
\t                           btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                               showErrorMsg(form, 'success', '";
        // line 728
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cool! Password recovery instruction has been sent to your email"]);
        echo ".');
                        }, 2000);
                    }
                });
            });
        }

        // Public Functions
        return {
            // public functions
            init: function() {
                handleFormSwitch();
                handleSignInFormSubmit();
                handleSignUpFormSubmit();
                handleForgotFormSubmit();
            }
        };
    }();

     // Class Initialization
     KTUtil.ready(function () {
         KTLoginGeneral.init();

         \$('body').on('click','#agree', function(e){
             \$( \"#agreement\" ).prop( \"checked\", true );
         });

         ";
        // line 755
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "demo_mode", [], "any", false, false, false, 755)) {
            // line 756
            echo "          \$('body').on('click','.signin_as', function(e){
              var type = \$(this).attr('id');
              if(type == 'admin'){
                  \$('#userSigninLogin').val('admin');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'employee'){
                  \$('#userSigninLogin').val('employee');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'driver'){
                  \$('#userSigninLogin').val('driver');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'client'){
                  \$('#userSigninLogin').val('client');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }
          });
          ";
        }
        // line 777
        echo "     });



     // // Select the image
     // \$(\"#cnic\").change(function() {
     // const fileInput = document.querySelector(\"#cnic\");
     // fileInput.addEventListener(\"change\", (e) => {
     //     // get a reference to the file
     //     const file = e.target.files[0];
     //     const reader = new FileReader();
     //     reader.onloadend = () => {
     //         \$('#cnic_image').val(reader.result);
     //         console.log(reader.result);
     //     };
     //     reader.readAsDataURL(file);
     //     // console.log(reader.readAsDataURL(file));
     // });
     // });

     // Select the image
     \$(\"#cnic\").change(function() {
         const file = document.querySelector('input[type=file]').files[0];
         const reader = new FileReader();
         reader.addEventListener(\"load\", function () {
             // convert image file to base64 string
             \$('#cnic_image').val(reader.result);
         }, false);
         if (file) {
             reader.readAsDataURL(file);
         }
     });





 </script>
 ";
        // line 374
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1114 => 374,  1074 => 777,  1051 => 756,  1049 => 755,  1019 => 728,  973 => 684,  968 => 682,  963 => 681,  957 => 679,  955 => 678,  939 => 664,  933 => 660,  913 => 642,  911 => 641,  849 => 582,  845 => 581,  816 => 555,  810 => 552,  722 => 466,  711 => 464,  707 => 463,  617 => 375,  614 => 374,  612 => 351,  589 => 352,  587 => 351,  579 => 346,  575 => 345,  558 => 331,  545 => 320,  529 => 307,  525 => 306,  513 => 297,  509 => 296,  497 => 287,  493 => 286,  481 => 277,  477 => 276,  455 => 257,  449 => 253,  447 => 252,  436 => 244,  432 => 243,  425 => 239,  418 => 237,  411 => 233,  407 => 232,  402 => 229,  398 => 227,  391 => 223,  385 => 220,  381 => 219,  369 => 212,  361 => 207,  354 => 203,  334 => 185,  323 => 183,  319 => 182,  301 => 167,  293 => 162,  281 => 153,  273 => 148,  267 => 144,  261 => 142,  256 => 140,  250 => 137,  242 => 132,  234 => 127,  227 => 122,  225 => 121,  189 => 90,  183 => 87,  176 => 83,  170 => 80,  164 => 77,  158 => 74,  154 => 73,  151 => 72,  143 => 67,  139 => 65,  137 => 64,  130 => 60,  122 => 55,  118 => 53,  111 => 50,  107 => 49,  98 => 48,  95 => 47,  71 => 30,  65 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    /*\$this['departments']=\\Spot\\Shipment\\Models\\UsersGroups::where('id','!=',1)->get();*/
    /*<!--dd(\$this['departments']);-->*/

    body{
        background-image: linear-gradient(to right, #EE8335, #FDC90E);
    }
    .divs , .vehicle_category {
        position: relative;
    }
    .option_min_add {
        position: absolute;
        right: -27px;
        top: -10px;
    }
    .option_min_add.sec_min {
        right: -22px;
    }
    .option_min_add .fa {
        cursor: pointer;
    }
</style>
<!-- begin:: Page -->
 <div class=\"kt-grid kt-grid--ver kt-grid--root kt-page custom-grid\">
     <div class=\"kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin\" id=\"kt_login\">
         <div class=\"kt-login__header mx-auto text-center d-block w-100\">
             <a class=\"kt-login__logo d-inline-block py-4\" href=\"{{url('/')}}\">
                 <img style=\"max-height:90px;max-width:80%;\"
                      class=\"h-auto w-auto\" alt=\"\"
                      src=\"{% if settings.logo %}{{ settings.logo.path }}{% else %}./admin/media/logos/logo.svg{% endif %}\">
             </a>
         </div>
         <div class=\"kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile\">
             <div class=\"kt-login__right\">
                 <div class=\"kt-login__wrapper\">
                     <div class=\"kt-login__signin\">
                         <div class=\"kt-login__head\">
                             <div class=\"kt-login__title mb-4\">
                                 <h3 class=\"kt-margin-t-30\"><span class=\"color-secondary\">Sign</span> <span
                                         class=\"text-white\">In</span></h3>
                             </div>
                             <div class=\"kt-login__subtitle text-white font-weight-bold\">Enter your credentials to log in </div>
                         </div>
                         <div class=\"kt-login__form mt-3\">
                             <form class=\"kt-form mb-3\" action=\"\">

                                 {% flash %}
                                    <div class=\"kt-alert kt-alert--outline alert alert-{% if type == 'error' %}danger{% else %}{{type}}{% endif %} alert-dismissible\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"{{'Close'|__}}\"></button>
                                        <span>{{ message }}</span>
                                    </div>
                                 {% endflash %}
                                 <div class=\"form-group\">
                                     <label for=\"userSigninLogin\" class=\"sr-only\"></label>
                                     <input class=\"form-control\" type=\"text\" placeholder=\"{{ loginAttributeLabel|__ }}\" name=\"login\" id=\"userSigninLogin\" autocomplete=\"off\" required>
                                     <i class=\"fa fa-user field-icon\"></i>
                                 </div>
                                 <div class=\"form-group\">
                                     <label for=\"userSigninPassword\" class=\"sr-only\"></label>
                                     <input class=\"form-control form-control-last\" type=\"Password\" placeholder=\"{{'Password'|__}}\" id=\"userSigninPassword\" name=\"password\" required>
                                     <i class=\"fa fa-user field-icon\"></i>
                                 </div>
                                 <div class=\"row kt-login__extra\">
                                     {% if rememberLoginMode == 'ask' %}
                                     <div class=\"col kt-align-left\">
                                         <label class=\"kt-checkbox color-secondary font-weight-bold\">
                                             <input name=\"remember\" type=\"checkbox\" value=\"1\"> {{'Remember me'|__}}
                                             <span></span>
                                         </label>
                                     </div>
                                     {% endif %}
                                     <div class=\"col kt-align-right \">
                                         <button class=\"btn btn-gradient btn-gradient-blue btn-block w-100\">{{'Sign In'|__}}</button>
                                        <!--  <a href=\"javascript:;\" id=\"kt_login_forgot\" class=\"kt-link kt-hidden\">{{'Forget Password ?'|__}}</a> -->
                                     </div>
                                 </div>
                                  <a href=\"javascript:void(0);\" id=\"kt_login_forgot\" class=\"kt-link mt-3 ml-auto text-right d-block color-secondary font-weight-bold\">{{'Forget Password ?'|__}}</a>
                                 <div class=\"kt-login__actions kt-margin-t-10 flex-column\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg d-block w-100 text-white font-weight-bold\">
                  \t\t\t\t\t\t{{\"Don't have an account yet? No need to worry\"|__}}
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a href=\"javascript:void(0);\" id=\"kt_login_signup\" class=\"kt-login__account-link btn-gradient btn-gradient-orange btn-block w-100\">{{\"Sign Up!\"|__}}</a>
                  \t\t\t\t</div>
                                 <div class=\"kt-login__actions my-4\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg text-white font-weight-bold\">
                  \t\t\t\t\t\t{{\"You have tracking number ?\"|__}}
                  \t\t\t\t\t</span>
                  \t\t\t\t\t&nbsp;&nbsp;
                  \t\t\t\t\t<a href=\"{{url('tracking')}}\"  class=\"kt-login__account-link color-secondary font-weight-bold\">{{\"Track shipment\"|__}}</a>
                  \t\t\t\t</div>
                             </form>
                         </div>
                         <div class=\"kt-login__actionsCustom\">
                             <div class=\"section_separator\">
                                 <span class=\"text-white font-weight-bold\">OR</span>
                             </div>
                             <div>
                                 <div class=\"text-center mx-auto d-block my-4\">
                                     <span class=\"text-center text-white font-weight-bold\">Login As</span>
                                 </div>

                                 <div class=\"login-item-type d-flex flex-wrap justify-content-between\">
                                     <a href=\"/login\" class=\"btn btn-gradient flex-column half\">
                                         <i class=\"fa fa-industry fa-2x\"></i>
                                         <span>VENDOR</span>
                                     </a>
                                     <a href=\"/login\" class=\"btn btn-gradient flex-column half\">
                                         <i class=\"fa fa-truck-loading fa-2x\"></i>
                                         <span>SERVICE PROVIDER</span>
                                     </a>
                                     <a href=\"/login/admin\" class=\"btn btn-gradient flex-column full\">
                                         <i class=\"fa fa-user-circle fa-2x\"></i>
                                         <span>ADMIN</span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
\t\t             <div class=\"kt-login__signup\">
                         {% if canRegister %}
                             <div class=\"kt-login__head mb-5\">
                                 <div class=\"kt-login__title\">
                                     <h3 class=\"kt-margin-t-30\"><span class=\"color-secondary\">Sign</span> <span
                                             class=\"text-white\">Up !</span></h3>
                                 </div>
                                 <div class=\"kt-login__subtitle text-white font-weight-bold\">{{'Enter your details to create your account'|__}}</div>
                             </div>
                            <form class=\"kt-form\" action=\"\"  enctype=\"multipart/form-data\">
        \t\t\t\t\t\t<div class=\"input-group\">
                                    <label for=\"registerName\" class=\"sr-only\"></label>
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"registerName\" placeholder=\"{{'Full Name'|__}}\" name=\"name\" required>
                                    <i class=\"fa fa-user field-icon\"></i>
        \t\t\t\t\t\t</div>
        \t\t\t\t\t\t<div class=\"input-group\">
                                    <label for=\"registerEmail\" class=\"sr-only\"></label>
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{'Email'|__}}\" id=\"registerEmail\" name=\"email\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-envelope field-icon\"></i>
        \t\t\t\t\t\t</div>
<!--                                {% if loginAttribute == \"username\" %}-->
<!--            \t\t\t\t\t\t<div class=\"input-group\">-->
<!--            \t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"{{'Enter your username'|__}}\" id=\"registerUsername\" name=\"username\" autocomplete=\"off\" required>-->
<!--            \t\t\t\t\t\t</div>-->
<!--                                {% endif %}-->

                                <div class=\"input-group\">
                                    <label for=\"postal_code\" class=\"sr-only\"></label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"{{'Postal Address'|__}}\"  name=\"postal_code\" id=\"postal_code\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-home field-icon\"></i>
                                </div>
                                <div class=\"input-group\">
                                    <label for=\"mobile\" class=\"sr-only\"></label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"{{'Mobile Number'|__}}\"  name=\"mobile\" id=\"mobile\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-mobile-alt field-icon\"></i>
                                </div>
                                <div class=\"input-group upload-btn-wrapper\">
                                    <label for=\"cnic\" class=\"sr-only\"></label>
                                    <span class=\"upload-wrap px-3 w-100 d-flex align-items-center justify-content-between\">
                                        <span class=\"upload-txt ont-weight-bold\">CNIC</span>
                                        <a class=\"btn\">Upload Image</a>
                                    </span>
                                    <input class=\"\" type=\"file\" placeholder=\"{{'CNIC'|__}}\"  name=\"cnic\" autocomplete=\"off\"  id=\"cnic\" required accept=\"image/*\">
                                    <input  type=\"hidden\"  name=\"cnic_image\" id=\"cnic_image\" >
                                </div>
                                <div class=\"input-group\">
                                    <label for=\"bussiness_type\" class=\"sr-only\"></label>
                                    <input class=\"form-control\" type=\"text\" placeholder=\"{{'Bussiness Type'|__}}\"  name=\"bussiness_type\" id=\"bussiness_type\" autocomplete=\"off\" required>
                                    <i class=\"fa fa-user-cog field-icon\"></i>
                                </div>
                                <div class=\"input-group\">
                                    <label for=\"user_role_id\" class=\"sr-only\"></label>
                                    <select name=\"user_role_id\" class=\"form-control selectpicker\" data-dropup-auto=\"false\" id=\"user_role_id\" autocomplete=\"off\" required>
                                        <option  value=\"\" selected disabled>Register As</option>
                                        <option  value=\"5\" class=\"individual\">Vendor</option>
                                        <option  value=\"12\" class=\"company\">Service Provider</option>
                                    </select>
                                </div>

                                <div class=\"input-group vehicle_category\" style=\"display:none\">
                                    <label for=\"vehicle_category\" class=\"sr-only\"></label>
                                    <select name=\"vehicle_category[]\" required class=\"form-control selectpicker\" data-dropup-auto=\"false\" id=\"vehicle_category\" autocomplete=\"off\">
                                        {% for category in categories_car %}
                                        <option value=\"{{category.id}}\">{{category.title}}</option>
                                        {% endfor %}
                                        <option value=\"\" selected disabled>Vehicle category</option>
                                    </select>

                                    <div class=\"option_min_add sec_min\">
                                        <span class=\"fa fa-plus-circle plos text-dark pls pt-5 mt-2 pl-1\" id=\"first\"></span>
                                    </div>
                                </div>
                                <div class=\"input-group vehicle_type veh\" style=\"display:none\">
                                    <label for=\"vehicle_category\" class=\"sr-only\"></label>
                                    <select  name=\"truck_used[]\"  class=\"form-control\" data-dropup-auto=\"false\" id=\"truck_used\" autocomplete=\"off\" required>
                                    </select>
                                </div>

                                <div class=\"divs\">
                                </div>

        \t\t\t\t\t\t<div class=\"input-group\">
                                    <label for=\"registerPassword\" class=\"sr-only\"></label>
        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"{{'Password'|__}}\" id=\"registerPassword\" name=\"password\" required>
                                    <i class=\"fa fa-lock field-icon\"></i>
        \t\t\t\t\t\t</div>
<!--        \t\t\t\t\t\t<div class=\"input-group\">-->
<!--        \t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" placeholder=\"{{'Confirm Password'|__}}\" name=\"rpassword\" id=\"rpassword\" required>-->
<!--        \t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t<div class=\"row kt-login__extra kt-hidden\">-->
<!--        \t\t\t\t\t\t\t<div class=\"col kt-align-left\">-->
<!--        \t\t\t\t\t\t\t\t<label class=\"kt-checkbox\">-->
<!--        \t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" id=\"agreement\" checked required>{{'I Agree the'|__}} <a href=\"#\" data-toggle=\"modal\" data-target=\"#kt_modal_6\" class=\"kt-link kt-login__link kt-font-bold\">{{'terms and conditions'|__}}</a>.-->
<!--        \t\t\t\t\t\t\t\t\t<span></span>-->
<!--        \t\t\t\t\t\t\t\t</label>-->
<!--        \t\t\t\t\t\t\t\t<span class=\"form-text text-muted\"></span>-->
<!--        \t\t\t\t\t\t\t</div>-->
<!--        \t\t\t\t\t\t</div>-->
        \t\t\t\t\t\t<div class=\"kt-login__actions d-flex align-items-center justify-content-between text-justify\">
                                    <button id=\"kt_login_signup_cancel\" class=\"btn btn-gradient btn-gradient-default kt-login__btn-secondary mx-0\">{{'Cancel'|__}}</button>
                                    <button id=\"kt_login_signup_submit\" type=\"submit\" class=\"btn btn-gradient btn-gradient-blue kt-login__btn-primary mx-0\">{{'Sign Up'|__}}</button>
        \t\t\t\t\t\t</div>
                                <div class=\"kt-login__actions kt-margin-t-10 flex-column\">
                  \t\t\t\t\t<span class=\"kt-login__account-msg d-block w-100 text-white font-weight-bold\">Already have an account? <a href=\"javascript:void(0);\" id=\"kt_login_signin\" class=\"kt-login__account-link \">{{\"Login\"|__}}</a> to your account</span>
                                </div>
        \t\t\t\t\t</form>
                        {% else %}
                            <!-- Registration is disabled. -->
                        {% endif %}
    \t\t\t\t</div>
                     <div class=\"kt-login__forgot\">
                         <div class=\"kt-login__head\">
                             <h3 class=\"kt-login__title\">{{'Forgotten Password ?'|__}}</h3>
                             <div class=\"kt-login__desc\">{{'Enter your email to reset your password'|__}}:</div>
                         </div>
                         <div class=\"kt-login__form\">

                             <form class=\"kt-form\" data-request=\"{{ __SELF__ }}::onRestorePassword\" data-request-update=\"'{{ __SELF__ }}::reset': '#partialUserResetForm'\">
                                 <div class=\"form-group\">
                                     <input class=\"form-control\" type=\"email\" placeholder=\"{{'Email'|__}}\" name=\"email\" id=\"userRestoreEmail\" autocomplete=\"off\">
                                 </div>

                                 <div class=\"kt-login__actions\">
                                     <button id=\"kt_login_forgot_submit\" class=\"btn btn-brand btn-pill btn-elevate\">{{'Request'|__}}</button>
                                     <button id=\"kt_login_forgot_cancel\" class=\"btn btn-outline-brand btn-pill\">{{'Cancel'|__}}</button>
                                 </div>
                             </form>

                         </div>
                     </div>


                      {% if settings.demo_mode %}
                      <!--begin::Divider-->
                      <div class=\"kt-login__divider\">
                          <div class=\"kt-divider\">
                              <span></span>
                              <span>{{\"OR\"|__}}</span>
                              <span></span>
                          </div>
                      </div>
                      <!--end::Divider-->

                      <!--begin::Options-->
                       <div class=\"row\">
                          <div class=\"col-xl-12\">
                              <!--begin:: Widgets/Applications/User/Profile3-->
                              <div class=\"kt-portlet kt-portlet--height-fluid\">
                                  <div class=\"kt-portlet__body\">
                                      <div class=\"kt-widget kt-widget--user-profile-3\">
                                          <div class=\"kt-widget__bottom\">
                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-user-settings\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Admin'|__}}</span>
                                                      <a href=\"javascript:;\" id=\"admin\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-businesswoman\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Employee'}}</span>
                                                      <a href=\"javascript:;\" id=\"employee\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-truck\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Driver'|__}}</span>
                                                      <a href=\"javascript:;\" id=\"driver\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>

                                              <div class=\"kt-widget__item\">
                                                  <div class=\"kt-widget__icon\">
                                                      <i class=\"flaticon-avatar\"></i>
                                                  </div>
                                                  <div class=\"kt-widget__details\">
                                                      <span class=\"kt-widget__title\">{{'Client'|__}}</span>
                                                      <a href=\"javascript:;\" id=\"client\" class=\"kt-widget__value kt-font-brand signin_as\">{{'Login as'|__}}</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!--end:: Widgets/Applications/User/Profile3-->
                          </div>
                      </div>
                      <!--end::Options-->

                      {% endif %}

                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal -->
 <div class=\"modal fade\" id=\"kt_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
     <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
         <div class=\"modal-content\">
             <div class=\"modal-header\">
                 <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">{{'Terms and conditions'|__}}</h5>
                 <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                 </button>
             </div>
             <div class=\"modal-body\">
                 <div class=\"kt-scroll\" data-scroll=\"true\" data-height=\"200\">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 </div>
             </div>
             <div class=\"modal-footer\">
                 <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{\"Don't Agree\"|__}}</button>
                 <button type=\"button\" class=\"btn btn-primary\" id=\"agree\" data-dismiss=\"modal\">{{'Agree'|__}}</button>
             </div>
         </div>
     </div>
 </div>
 {% put styles %}
     <link href=\"./admin/css/demo10/pages/login/login-5.css\" rel=\"stylesheet\" type=\"text/css\" />
     <style>
         .kt-header__topbar-item--langs {
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             -webkit-box-flex: 1;
             -ms-flex: 1;
             flex: 1;
             width: 100%;
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             justify-content: center;
         }
         .kt-header__topbar-item--langs .kt-header__topbar-icon img {
             width: 25px;
         }
     </style>
 {% endput %}
 {% put scripts %}
 <script type=\"text/javascript\">
     \"use strict\";

    // Class Definition
    var KTLoginGeneral = function() {

        var login = \$('#kt_login');

        var showErrorMsg = function(form, type, msg) {
            var alert = \$('<div class=\"kt-alert kt-alert--outline alert alert-' + type + ' alert-dismissible\" role=\"alert\">\\
    \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\\
    \t\t\t<span></span>\\
    \t\t</div>');

            form.find('.alert').remove();
            alert.prependTo(form);
            //alert.animateClass('fadeIn animated');
            KTUtil.animateClass(alert[0], 'fadeIn animated');
            alert.find('span').html(msg);
        }

        // Private Functions
        var displaySignUpForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signin');

            login.addClass('kt-login--signup');
            KTUtil.animateClass(login.find('.kt-login__signup')[0], 'flipInX animated');
        }

        var displaySignInForm = function() {
            login.removeClass('kt-login--forgot');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--signin');
            KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
            //login.find('.kt-login__signin').animateClass('flipInX animated');
        }

        var displayForgotForm = function() {
            login.removeClass('kt-login--signin');
            login.removeClass('kt-login--signup');

            login.addClass('kt-login--forgot');
            //login.find('.kt-login--forgot').animateClass('flipInX animated');
            KTUtil.animateClass(login.find('.kt-login__forgot')[0], 'flipInX animated');

        }

        var handleFormSwitch = function() {
            \$('#kt_login_forgot').click(function(e) {
                e.preventDefault();
                displayForgotForm();
            });

            \$('#kt_login_forgot_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });

            \$('#kt_login_signup').click(function(e) {
                e.preventDefault();
                displaySignUpForm();
            });

            \$('#kt_login_signup_cancel').click(function(e) {
                e.preventDefault();
                displaySignInForm();
            });
        }

        \$(document).on('change', '#user_role_id', function(){
            var text=\$(\"#user_role_id option:selected\").text();
            if(text==\"Service Provider\"){
                \$('.vehicle_category').show('2000');
            }else{
                \$('.vehicle_category').hide('2000');
                \$('.vehicle_type').hide('2000');
            }
        });
        \$(document).on('change', '#vehicle_category', function(){
                \$('.veh').show('2000');
        });
        var counter=0;
        \$(document).on('click', '.plos', function(){
               var txt=`<div class=\"input-group div_\${counter}\" >
                                    <label for=\"vehicle_category_\${counter}\" class=\"sr-only\"></label>
                                    <select name=\"vehicle_category[]\" required class=\"form-control sbt\" data-dropup-auto=\"false\" id=\"vehicle_category_\${counter}\" data-id=\"\${counter}\" autocomplete=\"off\">
                                        {% for category in categories_car %}
                                        <option value=\"{{category.id}}\">{{category.title}}</option>
                                        {% endfor %}
                                        <option value=\"\" selected disabled>Vehicle category</option>
                                    </select>
                                    <div class=\"option_min_add\">
                                        <span class=\"fa fa-minus-circle minus text-dark pls pt-5 mt-2 pl-1 \" data-id=\"\${counter}\" ></span>&nbsp
                                       
                                    </div>
                                </div>
                                <div class=\"input-group vehicle_type\" style=\"display: none\"  id=\"type_\${counter}\">
                                    <label for=\"vehicle_category\" class=\"sr-only\"></label>
                                    <select  name=\"truck_used[]\" class=\"form-control\" data-dropup-auto=\"false\" id=\"truck_used_\${counter}\" autocomplete=\"off\" required >
                                    </select>
                                </div>
                                </div>`;
                             counter++;
            \$('.divs').append(txt);
            // \$('#first').hide('3000');
            // if (\$('.divs').counter === 0) {
                // console.log('popo');
                // code to run if it isn't there
            // }
        });

        \$(document).on('click', '.minus', function(){
            var id=\$(this).attr('data-id');
               \$('.div_'+id).hide('3000')
               \$('#type_'+id).hide('3000')

        });


        \$(document).on('change', '#vehicle_category', function(){
            \$.request('onChangefees1', {
                method:'post',
                data: {id:\$('#vehicle_category option:selected' ).val()},
                success: function(response, status, xhr, \$form) {
                    var html='';
                    \$.each(response,function (key,value) {
                        html += '<option value=\"'+value.id+'\">'+value.name+'</option>';
                        console.log(value);
                    });
                    html += \"<option value='' selected disabled>Choose type</option>\";
                    \$('#truck_used').empty().append(html);
                }
            });
        });

        \$(document).on('change', '.sbt', function(){
            var id=\$(this).attr('data-id');
            console.log(this)
           var val1= \$('#vehicle_category_'+id+' option:selected').val();
            // alert(id);
            // return;
            \$.request('onChangefees1', {
                method:'post',
                data: {id:val1},
                success: function(response, status, xhr, \$form) {
                    var html='';
                    \$.each(response,function (key,value) {
                        html += '<option value=\"'+value.id+'\">'+value.name+'</option>';
                        // \$(\"#truck_used\").append('<option value=1>My option</option>');
                        console.log(value);
                    });
                    html += \"<option value='' selected disabled>Choose type</option>\";
                    \$('#truck_used_'+id).empty().append(html);
                    \$('#type_'+id).show('3000');
                }
            });
        });

        var handleSignInFormSubmit = function() {
            \$('#kt_login_signin_submit').click(function(e) {
                e.preventDefault();
                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        login: {
                            required: true
                        },
                        password: {
                            required: true
                        }
                    },
                    messages: {
                        \"login\": {
                            required: '{{\"This field is required!\"|__}}',
                        },
                        \"password\": {
                            required: '{{\"This field is required!\"|__}}',
                        },
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onSignin', {
                    data: {login: \$('#userSigninLogin').val(), password: \$('#userSigninPassword').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        console.log(e);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                           showErrorMsg(form, 'success', '{{\"Correct, you are being redirect\"|__}}.');
                           location.href = \"{{url('dashboard')}}\";
                        }, 2000);
                    }
                });
            });
        }

        var handleSignUpFormSubmit = function() {
            \$('#kt_login_signup_submit').click(function(e) {

                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true
                        },
                        rpassword: {
                            required: true
                        },
                        agree: {
                            required: true
                        }
                    }
                });
                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);
                var arr=[];
                if(counter>0) {
                    for (var i = 0; i < counter; i++) {
                        var val = \$(\"#vehicle_category_\" + i + \" option:selected\").val();
                        var typ = \$(\"#type_\" + i + \" option:selected\").val();
                        if (val != '' && typ!='') {
                            var ar = {cat: val, type: typ};
                            arr.push(ar);
                        }
                    }
                }
                    var ar = {cat: \$('#vehicle_category option:selected' ).val(), type: \$('#truck_used option:selected').val()};
                    arr.push(ar);


// console.log(arr);
//  return ;

                \$.request('onRegister', {
                    {% if loginAttribute == \"username\" %}

                        data: {
                        name: \$('#registerName').val(),
                                email: \$('#registerEmail').val(),
                                username: \$('#registerUsername').val(),
                                password: \$('#registerPassword').val(),
                                password_confirmation: \$('#rpassword').val(),
                                phone: \$('#mobile').val(),
                                postal_code: \$('#postal_code').val(),
                                cnic: \$('#cnic_image').val(),
                                bussiness_type: \$('#bussiness_type').val(),
                                user_role_id:\$('#user_role_id').val(),
                                vehicle_category:\$('#vehicle_category option:selected' ).val(),
                                truck_used:\$('#truck_used option:selected').val()
                                ,vehicles:arr
                        },

                    {% else %}

                        data: {name: \$('#registerName').val(), email: \$('#registerEmail').val(), password: \$('#registerPassword').val(), phone: \$('#mobile').val(), postal_code: \$('#postal_code').val(), cnic: \$('#cnic_image').val(), bussiness_type: \$('#bussiness_type').val(), user_role_id:\$('#user_role_id').val(),vehicle_category:\$('#vehicle_category option:selected' ).val(),truck_used:\$('#truck_used option:selected').val(),vehicles:arr},

                    {% endif %}

                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                        //showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
    \t                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                            {% if (requireActivation and automaticActivation is null) %}
    \t                       showErrorMsg(form, 'success', '{{\"Thank you. To complete your registration please check your email\"|__}}.');
                            {% else %}
                               showErrorMsg(form, 'success', '{{\"Correct, you are being redirect\"|__}}.');
                               location.href = \"{{url('dashboard')}}\";
                           {% endif %}
                        }, 2000);
                    }
                });
            });
        }

        var handleForgotFormSubmit = function() {
            \$('#kt_login_forgot_submit').click(function(e) {
                e.preventDefault();

                var btn = \$(this);
                var form = \$(this).closest('form');

                form.validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    }
                });

                if (!form.valid()) {
                    return;
                }

                btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

                \$.request('onRestorePassword', {
                    data: {email: \$('#userRestoreEmail').val()},
                    error: function(e,response) {
                        btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                        alert(e.responseText);
                        if(typeof e.responseJSON !== 'undefined'){
                            showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                        }else{
                            showErrorMsg(form, 'danger', e.responseText);
                        }
                        //showErrorMsg(form, 'danger', e.responseJSON.X_OCTOBER_ERROR_MESSAGE);
                    },
                    success: function(response, status, xhr, \$form) {
                    \t// similate 2s delay
                    \tsetTimeout(function() {
\t                           btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
                               showErrorMsg(form, 'success', '{{\"Cool! Password recovery instruction has been sent to your email\"|__}}.');
                        }, 2000);
                    }
                });
            });
        }

        // Public Functions
        return {
            // public functions
            init: function() {
                handleFormSwitch();
                handleSignInFormSubmit();
                handleSignUpFormSubmit();
                handleForgotFormSubmit();
            }
        };
    }();

     // Class Initialization
     KTUtil.ready(function () {
         KTLoginGeneral.init();

         \$('body').on('click','#agree', function(e){
             \$( \"#agreement\" ).prop( \"checked\", true );
         });

         {% if settings.demo_mode %}
          \$('body').on('click','.signin_as', function(e){
              var type = \$(this).attr('id');
              if(type == 'admin'){
                  \$('#userSigninLogin').val('admin');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'employee'){
                  \$('#userSigninLogin').val('employee');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'driver'){
                  \$('#userSigninLogin').val('driver');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }else if(type == 'client'){
                  \$('#userSigninLogin').val('client');
                  \$('#userSigninPassword').val('123456');
                  \$('#kt_login_signin_submit').trigger('click');
              }
          });
          {% endif %}
     });



     // // Select the image
     // \$(\"#cnic\").change(function() {
     // const fileInput = document.querySelector(\"#cnic\");
     // fileInput.addEventListener(\"change\", (e) => {
     //     // get a reference to the file
     //     const file = e.target.files[0];
     //     const reader = new FileReader();
     //     reader.onloadend = () => {
     //         \$('#cnic_image').val(reader.result);
     //         console.log(reader.result);
     //     };
     //     reader.readAsDataURL(file);
     //     // console.log(reader.readAsDataURL(file));
     // });
     // });

     // Select the image
     \$(\"#cnic\").change(function() {
         const file = document.querySelector('input[type=file]').files[0];
         const reader = new FileReader();
         reader.addEventListener(\"load\", function () {
             // convert image file to base64 string
             \$('#cnic_image').val(reader.result);
         }, false);
         if (file) {
             reader.readAsDataURL(file);
         }
     });





 </script>
 {% endput %}", "C:\\xampp\\htdocs\\IVYLABS\\ebilty-web/themes/spotlayer/pages/login.htm", "");
    }
}
