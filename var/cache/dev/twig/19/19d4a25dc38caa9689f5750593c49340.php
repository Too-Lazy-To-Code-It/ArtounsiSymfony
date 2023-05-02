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

/* offretravailarchive/_recuperer_form.html.twig */
class __TwigTemplate_c31efa7f3e625a8352d209d01295d53f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravailarchive/_recuperer_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravailarchive/_recuperer_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravailarchive_recuperer", ["idoffre" => twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 1, $this->source); })()), "idoffre", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Vous etes sur de recuperer l'offre?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 2, $this->source); })()), "idoffre", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
  
     <button class=\"text-danger\"><i class=\"bi bi-trash\"></i> Récuperer</button>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offretravailarchive/_recuperer_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_offretravailarchive_recuperer', {'idoffre': offretravail.idoffre}) }}\" onsubmit=\"return confirm('Vous etes sur de recuperer l'offre?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ offretravail.idoffre) }}\">
  
     <button class=\"text-danger\"><i class=\"bi bi-trash\"></i> Récuperer</button>
</form>
", "offretravailarchive/_recuperer_form.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\offretravailarchive\\_recuperer_form.html.twig");
    }
}
