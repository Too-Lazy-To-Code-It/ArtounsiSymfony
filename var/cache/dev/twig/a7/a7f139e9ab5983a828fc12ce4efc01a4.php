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

/* challenge/showback.html.twig */
class __TwigTemplate_1cd7f94c4b7b4bf09f50f8766882498e extends Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/showback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/showback.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "challenge/showback.html.twig", 1);
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

        echo "Challenge index";
        
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
        echo "    <main id=\"main\" class=\"main\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " <i class=\"bi bi-check\" style=\"width: 50;height: 50;color: #00ff00;\"></i>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <div class=\"pagetitle\">
        <h1>Mes Tutoriels</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>

                <li class=\"breadcrumb-item active\">Challenges</li>
                <li class=\"breadcrumb-item active\">Participations</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <style>
        .ligne {
            display: flex;
            justify-content: space-between;
            margin: 20px;

        }

        .bg-gradient-primary {
            background-color: #007bff;
            border-radius: 10px;
            color: #fff;
            padding: 20px;
        }

        .table td {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
        }

        .table th {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
            font-weight: bold;
            color: #555555;
        }

        button {
            color: white;
            border: none;
            background-color: white;
        }


    </style>
    <section class=\"section\">
    <div class=\"col-10\">
    <div class=\"card recent-sales overflow-auto\">

    <div class=\"filter\">
        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
            <li class=\"dropdown-header text-start\">
                <h6>Filter</h6>
            </li>

            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
        </ul>
    </div>

    <div class=\"card-body\">
        <h5 class=\"card-title\">Challenge | Participations <span>| List</span></h5>

        <table class=\"table table-borderless datatable\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 90, $this->source); })()), "participations", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 91
            echo "                <tr>
                    <th scope=\"row\"><a href=\"#\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 92), "html", null, true);
            echo "</a></th>
                    <td><img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getImgParticipation", [], "method", false, false, false, 93))), "html", null, true);
            echo "\" alt=\"\"
                             style=\"border-radius: 20px; width: 70px; height: 70px; \"></td>
                    <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>

                    <td class=\"align-middle text-center text-sm\"><a
                                href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_delete", ["id_participation" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 98)]), "html", null, true);
            echo "\"
                                class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </tbody>
        </table>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/showback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 104,  209 => 98,  203 => 95,  198 => 93,  194 => 92,  191 => 91,  187 => 90,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Challenge index{% endblock %}

{% block body %}
    <main id=\"main\" class=\"main\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }} <i class=\"bi bi-check\" style=\"width: 50;height: 50;color: #00ff00;\"></i>
        </div>
    {% endfor %}

    <div class=\"pagetitle\">
        <h1>Mes Tutoriels</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>

                <li class=\"breadcrumb-item active\">Challenges</li>
                <li class=\"breadcrumb-item active\">Participations</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <style>
        .ligne {
            display: flex;
            justify-content: space-between;
            margin: 20px;

        }

        .bg-gradient-primary {
            background-color: #007bff;
            border-radius: 10px;
            color: #fff;
            padding: 20px;
        }

        .table td {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
        }

        .table th {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
            font-weight: bold;
            color: #555555;
        }

        button {
            color: white;
            border: none;
            background-color: white;
        }


    </style>
    <section class=\"section\">
    <div class=\"col-10\">
    <div class=\"card recent-sales overflow-auto\">

    <div class=\"filter\">
        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
            <li class=\"dropdown-header text-start\">
                <h6>Filter</h6>
            </li>

            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
        </ul>
    </div>

    <div class=\"card-body\">
        <h5 class=\"card-title\">Challenge | Participations <span>| List</span></h5>

        <table class=\"table table-borderless datatable\">
            <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Image</th>
                <th scope=\"col\">Description</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody>
            {% for p in challenge.participations %}
                <tr>
                    <th scope=\"row\"><a href=\"#\">{{ p.getId() }}</a></th>
                    <td><img src=\"{{ asset('http://localhost/img/'~p.getImgParticipation()) }}\" alt=\"\"
                             style=\"border-radius: 20px; width: 70px; height: 70px; \"></td>
                    <td>{{ p.description }}</td>

                    <td class=\"align-middle text-center text-sm\"><a
                                href=\"{{ path('app_participation_delete', {'id_participation': p.getId()}) }}\"
                                class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                    </td>

                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>
{% endblock %}", "challenge/showback.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\challenge\\showback.html.twig");
    }
}
