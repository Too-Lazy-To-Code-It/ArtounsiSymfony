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

/* allusers/verify.html.twig */
class __TwigTemplate_ecadf8cda9b9fbac7a3986c208cafd0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/verify.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/verify.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>Artounsi</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\"
          href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "signin-form", "novalidate" => "novalidate"]]);
        echo "
                        <div class=\"form-group\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "verificationCode", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nickname"]]);
        echo "

                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"form-control btn btn-primary submit px-3\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Verify")) : ("Verify")), "html", null, true);
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
                                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_new");
        echo "\" style=\"color: #fff\">Register</a>
                            </div>
                        </div>
                    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                </div>
            </div>
        </div>
    </div>
</section>

<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
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
        return "allusers/verify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 58,  128 => 57,  124 => 56,  120 => 55,  110 => 48,  104 => 45,  91 => 35,  84 => 31,  79 => 29,  64 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>Artounsi</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\"
          href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

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
                    {{ form_start(form,{'attr':{'class':'signin-form','novalidate': 'novalidate'}}) }}
                        <div class=\"form-group\">
                            {{ form_row(form.verificationCode,{'attr':{'class':'form-control','placeholder':'Nickname'}}) }}

                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"form-control btn btn-primary submit px-3\">{{ button_label|default('Verify') }}</button>
                        </div>
                        <div class=\"form-group d-md-flex\">
                            <div class=\"w-50\">
                                <label class=\"checkbox-wrap checkbox-primary\">Remember Me
                                    <input type=\"checkbox\" checked>
                                    <span class=\"checkmark\"></span>
                                </label>
                            </div>
                            <div class=\"w-50 text-md-right\">
                                <a href=\"{{ path('app_allusers_new') }}\" style=\"color: #fff\">Register</a>
                            </div>
                        </div>
                    {{ form_end(form, {'attr': {'novalidate': 'novalidate'}}) }}
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

", "allusers/verify.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\verify.html.twig");
    }
}
