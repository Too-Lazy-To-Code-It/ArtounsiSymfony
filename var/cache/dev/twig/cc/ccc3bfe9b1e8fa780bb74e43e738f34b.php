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

/* @MeteoConceptHCaptcha/hcaptcha_form.html.twig */
class __TwigTemplate_36305db6d50edfd6a05b365df696b80c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'hcaptcha_widget' => [$this, 'block_hcaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MeteoConceptHCaptcha/hcaptcha_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MeteoConceptHCaptcha/hcaptcha_form.html.twig"));

        // line 1
        $this->displayBlock('hcaptcha_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_hcaptcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hcaptcha_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hcaptcha_widget"));

        // line 2
        echo "<div class=\"form-group\">
  <div class=\"h-captcha\" data-sitekey=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["hcaptcha_site_key"]) || array_key_exists("hcaptcha_site_key", $context) ? $context["hcaptcha_site_key"] : (function () { throw new RuntimeError('Variable "hcaptcha_site_key" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
  </div>
  <script src=\"https://hcaptcha.com/1/api.js\" async defer></script>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@MeteoConceptHCaptcha/hcaptcha_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block hcaptcha_widget  %}
<div class=\"form-group\">
  <div class=\"h-captcha\" data-sitekey=\"{{ hcaptcha_site_key }}\">
  </div>
  <script src=\"https://hcaptcha.com/1/api.js\" async defer></script>
</div>
{% endblock %}
", "@MeteoConceptHCaptcha/hcaptcha_form.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\vendor\\meteo-concept\\hcaptcha-bundle\\Resources\\views\\hcaptcha_form.html.twig");
    }
}
