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

/* allusers/new.html.twig */
class __TwigTemplate_ebab4efcd0412f3e30ff96fb00c8d24b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/new.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>Login 10</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"stylesheet\"
          href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styleL.css"), "html", null, true);
        echo "\">

</head>
<body class=\"img js-fullheight\" style=\"background-image: url(";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/banner-bg.jpg"), "html", null, true);
        echo ");\">
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center mb-5\">
                <h2 class=\"heading-section\">Login #10</h2>
            </div>
        </div>
<style>.color{color:red;}</style>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"login-wrap p-0\">
                    <h3 class=\"mb-4 text-center\">Have an account?</h3>
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "signin-form", "novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "password", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "
                                <div class=\"color\"> ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Name"]]);
        echo "
                                <div class=\"color\"> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Email", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                                <div class=\"color\">  ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Email", [], "any", false, false, false, 42), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Last_Name", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        echo "
                                <div class=\"color\">  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Last_Name", [], "any", false, false, false, 46), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        echo "
                                <div class=\"color\">  ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "bio", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "BIO"]]);
        echo "
                                <div class=\"color\">  ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "bio", [], "any", false, false, false, 54), 'errors');
        echo "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Birthday", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"color\">  ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Birthday", [], "any", false, false, false, 60), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "nationality", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nationality"]]);
        echo "
                                <div class=\"color\">  ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "nationality", [], "any", false, false, false, 64), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "type", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"color\">  ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "type", [], "any", false, false, false, 68), 'errors');
        echo "</div>

                            </div>
                            <div class=\"form-group\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nickname", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nickname"]]);
        echo "
                                <div class=\"color\">  ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "nickname", [], "any", false, false, false, 73), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "avatar", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"color\">  ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "avatar", [], "any", false, false, false, 77), 'errors');
        echo "</div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "background", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"color\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "background", [], "any", false, false, false, 81), 'errors');
        echo "</div>
                            </div>

                        </div>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\"
                                class=\"form-control btn btn-primary submit px-3\">";
        // line 88
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 88, $this->source); })()), "Sign In")) : ("Sign In")), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"form-group d-md-flex\">
                        <div class=\"w-50\">
                            <label class=\"checkbox-wrap checkbox-primary\">Remember Me
                                <input type=\"checkbox\" checked>
                                <span class=\"checkmark\"></span>
                            </label>
                        </div>
                        <div class=\"w-50 text-md-right\">
                            <a href=\"#\" style=\"color: #fff\">Forgot Password</a>
                        </div>
                        <div class=\"w-50 text-md-right\">
                            <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_new");
        echo "\" style=\"color: #fff\">Register</a>
                        </div>
                    </div>
                    ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <!-- <p class=\"w-100 text-center\">&mdash; Or Sign In With &mdash;</p>
                     <div class=\"social d-flex text-center\">
                         <a href=\"#\" class=\"px-2 py-2 mr-md-1 rounded\"><span class=\"ion-logo-facebook mr-2\"></span> Facebook</a>
                         <a href=\"#\" class=\"px-2 py-2 ml-md-1 rounded\"><span class=\"ion-logo-twitter mr-2\"></span> Twitter</a>
                     </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mainL.js"), "html", null, true);
        echo "\"></script>


</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "allusers/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 119,  264 => 118,  260 => 117,  256 => 116,  241 => 104,  235 => 101,  219 => 88,  209 => 81,  205 => 80,  199 => 77,  195 => 76,  189 => 73,  185 => 72,  178 => 68,  174 => 67,  168 => 64,  164 => 63,  158 => 60,  154 => 59,  146 => 54,  142 => 53,  136 => 50,  132 => 49,  126 => 46,  122 => 45,  116 => 42,  112 => 41,  106 => 38,  102 => 37,  96 => 34,  92 => 33,  85 => 29,  69 => 16,  63 => 13,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>Login 10</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap') }}\" rel=\"stylesheet\">

    <link rel=\"stylesheet\"
          href=\"{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/styleL.css') }}\">

</head>
<body class=\"img js-fullheight\" style=\"background-image: url({{ asset('assets/images/banner-bg.jpg') }});\">
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center mb-5\">
                <h2 class=\"heading-section\">Login #10</h2>
            </div>
        </div>
<style>.color{color:red;}</style>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"login-wrap p-0\">
                    <h3 class=\"mb-4 text-center\">Have an account?</h3>
                    {{ form_start(form,{'attr':{'class':'signin-form','novalidate': 'novalidate'}}) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.password,{'attr':{'class':'form-control','placeholder':'Password'}}) }}
                                <div class=\"color\"> {{ form_errors(form.password) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.name,{'attr':{'class':'form-control','placeholder':'Name'}}) }}
                                <div class=\"color\"> {{ form_errors(form.name) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.Email,{'attr':{'class':'form-control','placeholder':'Email'}}) }}
                                <div class=\"color\">  {{ form_errors(form.Email) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.Last_Name,{'attr':{'class':'form-control','placeholder':'Last Name'}}) }}
                                <div class=\"color\">  {{ form_errors(form.Last_Name) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.description,{'attr':{'class':'form-control','placeholder':'Description'}}) }}
                                <div class=\"color\">  {{ form_errors(form.description) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.bio,{'attr':{'class':'form-control','placeholder':'BIO'}}) }}
                                <div class=\"color\">  {{ form_errors(form.bio) }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_widget(form.Birthday,{'attr':{'class':'form-control'}}) }}
                                <div class=\"color\">  {{ form_errors(form.Birthday) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.nationality,{'attr':{'class':'form-control','placeholder':'Nationality'}}) }}
                                <div class=\"color\">  {{ form_errors(form.nationality) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.type,{'attr':{'class':'form-control'}}) }}
                                <div class=\"color\">  {{ form_errors(form.type) }}</div>

                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.nickname,{'attr':{'class':'form-control','placeholder':'Nickname'}}) }}
                                <div class=\"color\">  {{ form_errors(form.nickname) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.avatar,{'attr':{'class':'form-control'}}) }}
                                <div class=\"color\">  {{ form_errors(form.avatar) }}</div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.background,{'attr':{'class':'form-control'}}) }}
                                <div class=\"color\">{{ form_errors(form.background) }}</div>
                            </div>

                        </div>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\"
                                class=\"form-control btn btn-primary submit px-3\">{{ button_label|default('Sign In') }}</button>
                    </div>
                    <div class=\"form-group d-md-flex\">
                        <div class=\"w-50\">
                            <label class=\"checkbox-wrap checkbox-primary\">Remember Me
                                <input type=\"checkbox\" checked>
                                <span class=\"checkmark\"></span>
                            </label>
                        </div>
                        <div class=\"w-50 text-md-right\">
                            <a href=\"#\" style=\"color: #fff\">Forgot Password</a>
                        </div>
                        <div class=\"w-50 text-md-right\">
                            <a href=\"{{ path('app_allusers_new') }}\" style=\"color: #fff\">Register</a>
                        </div>
                    </div>
                    {{ form_end(form, {'attr': {'novalidate': 'novalidate'}}) }}
                    <!-- <p class=\"w-100 text-center\">&mdash; Or Sign In With &mdash;</p>
                     <div class=\"social d-flex text-center\">
                         <a href=\"#\" class=\"px-2 py-2 mr-md-1 rounded\"><span class=\"ion-logo-facebook mr-2\"></span> Facebook</a>
                         <a href=\"#\" class=\"px-2 py-2 ml-md-1 rounded\"><span class=\"ion-logo-twitter mr-2\"></span> Twitter</a>
                     </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/popper.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/mainL.js') }}\"></script>


</body>
</html>

", "allusers/new.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\new.html.twig");
    }
}
