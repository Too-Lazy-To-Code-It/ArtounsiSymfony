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
class __TwigTemplate_e90f6fa012320e12f8f6c56af21e28e1 extends Template
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
.ligne{ display: flex;
 justify-content: space-between;
 margin:20px;
  
}

.bg-gradient-primary {
  background-color: #007bff;
  border-radius: 10px;
  color: #fff;
  padding:20px;
}.table td {
  font-size: 14px;
  font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
}

.table th {
  font-size: 16px;
  font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
  font-weight: bold;
  color: #555555;
} button {
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 80, $this->source); })()), "participations", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 81
            echo "                      <tr>
                        <th scope=\"row\"><a href=\"#\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 82), "html", null, true);
            echo "</a></th>
                        <td><img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getImgParticipation", [], "method", false, false, false, 83))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \"></td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                        <td class=\"align-middle text-center text-sm\"><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_delete", ["id_participation" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                        </td>
                      </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                    </tbody>
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
        return array (  193 => 89,  183 => 85,  179 => 84,  175 => 83,  171 => 82,  168 => 81,  164 => 80,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Challenge index{% endblock %}

{% block body %}
    <main id=\"main\" class=\"main\">

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
.ligne{ display: flex;
 justify-content: space-between;
 margin:20px;
  
}

.bg-gradient-primary {
  background-color: #007bff;
  border-radius: 10px;
  color: #fff;
  padding:20px;
}.table td {
  font-size: 14px;
  font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
}

.table th {
  font-size: 16px;
  font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
  font-weight: bold;
  color: #555555;
} button {
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
                        <th scope=\"row\"><a href=\"#\">{{p.getId()}}</a></th>
                        <td><img src=\"{{ asset('http://localhost/img/'~p.getImgParticipation()) }}\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \"></td>
                        <td>{{ p.description }}</td>
                        <td class=\"align-middle text-center text-sm\"><a href=\"{{ path('app_participation_delete', {'id_participation': p.getId()}) }}\" class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                        </td>
                      </tr>
                      {% endfor %}
                    </tbody>
                  </table>

                </div>
{% endblock %}", "challenge/showback.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\showback.html.twig");
    }
}
