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

/* ban/show.html.twig */
class __TwigTemplate_801969ead01d717ef33945ed16f3cc5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ban/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ban/show.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
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

        echo "Ban";
        
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
        echo "    <h1>Ban</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ban"]) || array_key_exists("ban", $context) ? $context["ban"] : (function () { throw new RuntimeError('Variable "ban" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reason</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ban"]) || array_key_exists("ban", $context) ? $context["ban"] : (function () { throw new RuntimeError('Variable "ban" does not exist.', 16, $this->source); })()), "Reason", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateB</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["ban"]) || array_key_exists("ban", $context) ? $context["ban"] : (function () { throw new RuntimeError('Variable "ban" does not exist.', 20, $this->source); })()), "DateB", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ban"]) || array_key_exists("ban", $context) ? $context["ban"] : (function () { throw new RuntimeError('Variable "ban" does not exist.', 20, $this->source); })()), "DateB", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ban"]) || array_key_exists("ban", $context) ? $context["ban"] : (function () { throw new RuntimeError('Variable "ban" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 29
        echo twig_include($this->env, $context, "ban/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ban/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 29,  128 => 27,  123 => 25,  115 => 20,  108 => 16,  101 => 12,  93 => 6,  83 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}Ban{% endblock %}

{% block body %}
    <h1>Ban</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ ban.id }}</td>
            </tr>
            <tr>
                <th>Reason</th>
                <td>{{ ban.Reason }}</td>
            </tr>
            <tr>
                <th>DateB</th>
                <td>{{ ban.DateB ? ban.DateB|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_ban_index') }}\">back to list</a>

    <a href=\"{{ path('app_ban_edit', {'id': ban.id}) }}\">edit</a>

    {{ include('ban/_delete_form.html.twig') }}
{% endblock %}
", "ban/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\ban\\show.html.twig");
    }
}
