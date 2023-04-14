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
class __TwigTemplate_a72fab944fe8e57d6eb3746887a24781 extends Template
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
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"login-wrap p-0\">
                    <h3 class=\"mb-4 text-center\">Have an account?</h3>
                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "signin-form"]]);
        echo "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Name"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Email", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Last_Name", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "bio", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control", "placeholder" => "BIO"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Birthday", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "nationality", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nationality"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                            </div>
                            <div class=\"form-group\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nickname", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nickname"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "avatar", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "background", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                        </div>
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\"
                                class=\"form-control btn btn-primary submit px-3\">";
        // line 75
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 75, $this->source); })()), "Sign In")) : ("Sign In")), "html", null, true);
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
                    </div>
                    ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
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
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
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
        return array (  213 => 103,  209 => 102,  205 => 101,  201 => 100,  186 => 88,  170 => 75,  160 => 68,  154 => 65,  148 => 62,  141 => 58,  135 => 55,  129 => 52,  121 => 47,  115 => 44,  109 => 41,  103 => 38,  97 => 35,  91 => 32,  84 => 28,  69 => 16,  63 => 13,  58 => 11,  52 => 8,  43 => 1,);
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
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <div class=\"login-wrap p-0\">
                    <h3 class=\"mb-4 text-center\">Have an account?</h3>
                    {{ form_start(form,{'attr':{'class':'signin-form'}}) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_row(form.password,{'attr':{'class':'form-control','placeholder':'Password'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.name,{'attr':{'class':'form-control','placeholder':'Name'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.Email,{'attr':{'class':'form-control','placeholder':'Email'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.Last_Name,{'attr':{'class':'form-control','placeholder':'Last Name'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.description,{'attr':{'class':'form-control','placeholder':'Description'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.bio,{'attr':{'class':'form-control','placeholder':'BIO'}}) }}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_row(form.Birthday,{'attr':{'class':'form-control'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.nationality,{'attr':{'class':'form-control','placeholder':'Nationality'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.type,{'attr':{'class':'form-control'}}) }}

                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.nickname,{'attr':{'class':'form-control','placeholder':'Nickname'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.avatar,{'attr':{'class':'form-control'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.background,{'attr':{'class':'form-control'}}) }}
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
                    </div>
                    {{ form_end(form) }}
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
