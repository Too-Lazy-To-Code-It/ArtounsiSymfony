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

/* allusers/Login.html.twig */
class __TwigTemplate_e5ed90ebcb276dae08ecf85187085d43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/Login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/Login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>Artounsi</title>
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
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/banner-bg.jpg"), "html", null, true);
        echo ");\">
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center mb-5\">
                <h2 class=\"heading-section\">Artounsi</h2>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"login-wrap p-0\">
                    <h3 class=\"mb-4 text-center\">Have an account?</h3>
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "signin-form"]]);
        echo "
                        <div class=\"form-group\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "Email", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nickname"]]);
        echo "

                        </div>
                        <div class=\"form-group\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "

                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"form-control btn btn-primary submit px-3\">";
        // line 39
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 39, $this->source); })()), "Log in")) : ("Log in")), "html", null, true);
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
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</section>

<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
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
        return "allusers/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 62,  138 => 61,  134 => 60,  130 => 59,  120 => 52,  104 => 39,  97 => 35,  90 => 31,  85 => 29,  70 => 17,  63 => 13,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>Artounsi</title>
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
                <h2 class=\"heading-section\">Artounsi</h2>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 col-lg-4\">
                <div class=\"login-wrap p-0\">
                    <h3 class=\"mb-4 text-center\">Have an account?</h3>
                    {{ form_start(form,{'attr':{'class':'signin-form'}}) }}
                        <div class=\"form-group\">
                            {{ form_row(form.Email,{'attr':{'class':'form-control','placeholder':'Nickname'}}) }}

                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.password,{'attr':{'class':'form-control','placeholder':'Password'}}) }}

                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"form-control btn btn-primary submit px-3\">{{ button_label|default('Log in') }}</button>
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

", "allusers/Login.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\Login.html.twig");
    }
}
