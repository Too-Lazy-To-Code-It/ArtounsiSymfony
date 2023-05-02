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
class __TwigTemplate_2d6c934f059a3263cff5b9fae5a25041 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/show.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Demandetravail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdDemande</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 11, $this->source); })()), "idDemande", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 15, $this->source); })()), "nickname", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TitreDemande</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 19, $this->source); })()), "titreDemande", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescriptionDemande</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 23, $this->source); })()), "descriptionDemande", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pdf</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 27, $this->source); })()), "pdf", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateajoutdemande</th>
                <td>";
        // line 31
        ((twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 31, $this->source); })()), "dateajoutdemande", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 31, $this->source); })()), "dateajoutdemande", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Categoriedemande</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 35, $this->source); })()), "categoriedemande", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_edit", ["idDemande" => twig_get_attribute($this->env, $this->source, (isset($context["demandetravail"]) || array_key_exists("demandetravail", $context) ? $context["demandetravail"] : (function () { throw new RuntimeError('Variable "demandetravail" does not exist.', 42, $this->source); })()), "idDemande", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 44
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

    public function getDebugInfo()
    {
        return array (  160 => 44,  155 => 42,  150 => 40,  142 => 35,  135 => 31,  128 => 27,  121 => 23,  114 => 19,  107 => 15,  100 => 11,  92 => 5,  82 => 4,  63 => 2,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
", "demandetravail/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\demandetravail\\show.html.twig");
    }
}
