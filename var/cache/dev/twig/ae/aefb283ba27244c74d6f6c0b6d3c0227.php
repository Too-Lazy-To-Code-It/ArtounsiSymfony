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

/* challenge/indexback.html.twig */
class __TwigTemplate_7d54cceac3bb6bc7e783490961dbe1f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/indexback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/indexback.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "challenge/indexback.html.twig", 1);
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
        echo "
<!-- Recent Sales -->
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
      <h1>Challenges</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Challenges</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-12\">
          <div class=\"row\">

            <div class=\"col-12\">
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
                  <h5 class=\"card-title\">Challenges <span>| List</span></h5>

                  
                <div class=\"ligne\">
                  <div class=\"col-6\">
                    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_new");
        echo "\">
                      <i class=\"fas fa-plus\"></i>
                      Ajouter un challenge
                    </a>
                  </div>
                </div>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Title</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Niveau</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Participations</th>
                        <th scope=\"col\">actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 70
            echo "                      <tr>
                        <th scope=\"row\"><a href=\"#\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "getId", [], "method", false, false, false, 71), "html", null, true);
            echo "</a></th>
                        <td><img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["challenge"], "PathIMG", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \"></td>
                        <td><a href=\"#\" class=\"text-primary\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "Title", [], "any", false, false, false, 73), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "Description", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "Niveau", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            ((twig_get_attribute($this->env, $this->source, $context["challenge"], "DateC", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "DateC", [], "any", false, false, false, 76), "d M"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                        <a class=\"btn btn-primary\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_show_back", ["id" => twig_get_attribute($this->env, $this->source, $context["challenge"], "getId", [], "method", false, false, false, 78)]), "html", null, true);
            echo "\">show (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "participations", [], "any", false, false, false, 78)), "html", null, true);
            echo ")</a>
                        </td>
                        <td style=\"\">
                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["challenge"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square\"></i></a>
                        <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_delete", ["id_challenge" => twig_get_attribute($this->env, $this->source, $context["challenge"], "getId", [], "method", false, false, false, 82)]), "html", null, true);
            echo "\"><i class=\"bi bi-dash-circle\"></i></a>
                        </td>
                        
            </a>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/indexback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 88,  200 => 82,  196 => 81,  188 => 78,  183 => 76,  179 => 75,  175 => 74,  171 => 73,  167 => 72,  163 => 71,  160 => 70,  156 => 69,  132 => 48,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Challenge index{% endblock %}

{% block body %}

<!-- Recent Sales -->
<main id=\"main\" class=\"main\">
    <div class=\"pagetitle\">
      <h1>Challenges</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Challenges</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-12\">
          <div class=\"row\">

            <div class=\"col-12\">
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
                  <h5 class=\"card-title\">Challenges <span>| List</span></h5>

                  
                <div class=\"ligne\">
                  <div class=\"col-6\">
                    <a href=\"{{ path('app_challenge_new') }}\">
                      <i class=\"fas fa-plus\"></i>
                      Ajouter un challenge
                    </a>
                  </div>
                </div>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Title</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Niveau</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Participations</th>
                        <th scope=\"col\">actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for challenge in challenges %}
                      <tr>
                        <th scope=\"row\"><a href=\"#\">{{challenge.getId()}}</a></th>
                        <td><img src=\"{{ asset('http://localhost/img/'~challenge.PathIMG) }}\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \"></td>
                        <td><a href=\"#\" class=\"text-primary\">{{challenge.Title}}</a></td>
                        <td>{{ challenge.Description }}</td>
                        <td>{{ challenge.Niveau }}</td>
                        <td>{{ challenge.DateC ? challenge.DateC|date('d M') : '' }}</td>
                        <td>
                        <a class=\"btn btn-primary\" href=\"{{ path('app_challenge_show_back', {'id': challenge.getId()}) }}\">show ({{challenge.participations|length}})</a>
                        </td>
                        <td style=\"\">
                        <a href=\"{{ path('app_challenge_edit', {'id': challenge.id}) }}\"><i class=\"bi bi-pencil-square\"></i></a>
                        <a href=\"{{ path('app_challenge_delete', {'id_challenge': challenge.getId()}) }}\"><i class=\"bi bi-dash-circle\"></i></a>
                        </td>
                        
            </a>
                      </tr>
                    {% endfor %}
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

{% endblock %}", "challenge/indexback.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\indexback.html.twig");
    }
}
