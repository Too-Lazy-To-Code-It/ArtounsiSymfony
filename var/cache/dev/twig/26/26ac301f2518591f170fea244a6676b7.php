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

/* demandetravail/show.html.twig */
class __TwigTemplate_d186c9d495076f8273c15a3ca437da62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demandetravail/show.html.twig", 1);
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

        echo "Demandetravail";
        
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
        echo "    <h1>Demandetravail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdDemande</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 12, $this->source); })()), "idDemande", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 16, $this->source); })()), "nickname", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TitreDemande</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 20, $this->source); })()), "titreDemande", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescriptionDemande</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 24, $this->source); })()), "descriptionDemande", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pdf</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 28, $this->source); })()), "pdf", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateajoutdemande</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 32, $this->source); })()), "dateajoutdemande", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 32, $this->source); })()), "dateajoutdemande", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Categoriedemande</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 36, $this->source); })()), "categoriedemande", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_edit", ["idDemande" => twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 43, $this->source); })()), "idDemande", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "demandetravail/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "demandetravail/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Demandetravail{% endblock %}

{% block body %}
    <h1>Demandetravail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdDemande</th>
                <td>{{ demandetravail.idDemande }}</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>{{ demandetravail.nickname }}</td>
            </tr>
            <tr>
                <th>TitreDemande</th>
                <td>{{ demandetravail.titreDemande }}</td>
            </tr>
            <tr>
                <th>DescriptionDemande</th>
                <td>{{ demandetravail.descriptionDemande }}</td>
            </tr>
            <tr>
                <th>Pdf</th>
                <td>{{ demandetravail.pdf }}</td>
            </tr>
            <tr>
                <th>Dateajoutdemande</th>
                <td>{{ demandetravail.dateajoutdemande ? demandetravail.dateajoutdemande|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Categoriedemande</th>
                <td>{{ demandetravail.categoriedemande }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_demandetravail_index') }}\">back to list</a>

    <a href=\"{{ path('app_demandetravail_edit', {'idDemande': demandetravail.idDemande}) }}\">edit</a>

    {{ include('demandetravail/_delete_form.html.twig') }}
{% endblock %}
", "demandetravail/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Adam\\templates\\demandetravail\\show.html.twig");
    }
}
