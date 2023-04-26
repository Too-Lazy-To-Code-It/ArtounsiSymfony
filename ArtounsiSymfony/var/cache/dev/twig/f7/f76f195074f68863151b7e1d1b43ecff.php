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
class __TwigTemplate_83ca2c1fd13853db60d8b3fc0806d243 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/show.html.twig"));

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

        echo "Offretravail";
        
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
        echo "    <h1>Offretravail</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idoffre</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 11, $this->source); })()), "idoffre", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titreoffre</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 15, $this->source); })()), "titreoffre", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionoffre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 19, $this->source); })()), "descriptionoffre", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorieoffre</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 23, $this->source); })()), "categorieoffre", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 27, $this->source); })()), "nickname", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateajoutoofre</th>
                <td>";
        // line 31
        ((twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 31, $this->source); })()), "dateajoutoofre", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 31, $this->source); })()), "dateajoutoofre", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Typeoffre</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 35, $this->source); })()), "typeoffre", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisationoffre</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 39, $this->source); })()), "localisationoffre", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_edit", ["idoffre" => twig_get_attribute($this->env, $this->source, (isset($context["offretravail"]) || array_key_exists("offretravail", $context) ? $context["offretravail"] : (function () { throw new RuntimeError('Variable "offretravail" does not exist.', 46, $this->source); })()), "idoffre", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 48
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

    public function getDebugInfo()
    {
        return array (  167 => 48,  162 => 46,  157 => 44,  149 => 39,  142 => 35,  135 => 31,  128 => 27,  121 => 23,  114 => 19,  107 => 15,  100 => 11,  92 => 5,  82 => 4,  63 => 2,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
", "offretravail/show.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\offretravail\\show.html.twig");
    }
}
