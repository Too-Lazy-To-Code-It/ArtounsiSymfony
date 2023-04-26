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

/* offretravail/show.html.twig */
class __TwigTemplate_58a4ea46d51d62fe77cd298d4046471c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offretravail/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offretravail";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Offretravail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idoffre</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 12, $this->source); })()), "idoffre", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titreoffre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 16, $this->source); })()), "titreoffre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionoffre</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 20, $this->source); })()), "descriptionoffre", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorieoffre</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 24, $this->source); })()), "categorieoffre", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 28, $this->source); })()), "nickname", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateajoutoofre</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 32, $this->source); })()), "dateajoutoofre", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 32, $this->source); })()), "dateajoutoofre", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Typeoffre</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 36, $this->source); })()), "typeoffre", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisationoffre</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 40, $this->source); })()), "localisationoffre", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_edit", ["idoffre" => twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 47, $this->source); })()), "idoffre", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "offretravail/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offretravail/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  158 => 47,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offretravail{% endblock %}

{% block body %}
    <h1>Offretravail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idoffre</th>
                <td>{{ offretravail.idoffre }}</td>
            </tr>
            <tr>
                <th>Titreoffre</th>
                <td>{{ offretravail.titreoffre }}</td>
            </tr>
            <tr>
                <th>Descriptionoffre</th>
                <td>{{ offretravail.descriptionoffre }}</td>
            </tr>
            <tr>
                <th>Categorieoffre</th>
                <td>{{ offretravail.categorieoffre }}</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>{{ offretravail.nickname }}</td>
            </tr>
            <tr>
                <th>Dateajoutoofre</th>
                <td>{{ offretravail.dateajoutoofre ? offretravail.dateajoutoofre|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Typeoffre</th>
                <td>{{ offretravail.typeoffre }}</td>
            </tr>
            <tr>
                <th>Localisationoffre</th>
                <td>{{ offretravail.localisationoffre }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_offretravail_index') }}\">back to list</a>

    <a href=\"{{ path('app_offretravail_edit', {'idoffre': offretravail.idoffre}) }}\">edit</a>

    {{ include('offretravail/_delete_form.html.twig') }}
{% endblock %}
", "offretravail/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\offretravail\\show.html.twig");
    }
}
