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

/* tutoriel/showback.html.twig */
class __TwigTemplate_da33a2ccf63633b3c944734b1c7ec865 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/showback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/showback.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "tutoriel/showback.html.twig", 1);
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

        echo "Mes Videos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Mes Videos</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item active\">Mes Tutoriels</li>
                    <li class=\"breadcrumb-item active\">Mes Videos</li>
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
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                                <h4 class=\"text-white text-capitalize ps-31\">Mes Videos</h4>
                            </div>
                        </div>
                          
 <div class=\"ligne\">
  <div class=\"col-6\">
    <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_new", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 122, $this->source); })()), "getId", [], "method", false, false, false, 122)]), "html", null, true);
        echo "\">
      <i class=\"fas fa-plus\"></i>
      Ajouter un video
    </a>
  </div>
</div>

  
 

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Image</th>
                                        <th scope=\"col\">Video</th>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Description</th>
                                        <th scope=\"col\">Date d'ajout</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                  ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 148, $this->source); })()), "videos", [], "any", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 149
            echo "             
                                    <tr>
                                       
                                        
                                       
                                        
                                            <td class=\"align-middle text-center text-sm\">
                                               ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 156), "html", null, true);
            echo "
                                            </td>
                                            
                                            <td class=\"align-middle text-center text-sm\">
                                               <img src=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["v"], "pathimage", [], "any", false, false, false, 160))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \">
                                            </td>
                                            <td class=\"align-middle text-center text-sm\"><video width=\"70\" height=\"70\" controls>
                                                <source src=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/videos/" . twig_get_attribute($this->env, $this->source, $context["v"], "pathvideo", [], "any", false, false, false, 163))), "html", null, true);
            echo "\" type=\"video/mp4\">
                                                Your browser does not support the video tag.
                                                </video></td>
                                             <td class=\"align-middle text-center text-sm\">
                                               ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 167), "html", null, true);
            echo "
                                            </td>
                                            <td class=\"align-middle text-center text-sm\">
                                               ";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "description", [], "any", false, false, false, 170), "html", null, true);
            echo "
                                            </td>
                                             <td class=\"align-middle text-center text-sm\">
                                                ";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 173), "d:m:Y"), "html", null, true);
            echo "
                                            </td>
                                                <td class=\"align-middle text-center text-sm\"><a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_edit", ["id_video" => twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 175)]), "html", null, true);
            echo "\" class=\"text-primary\"><i class=\"bi bi-pencil\"></i> Modifier </a></td>
                                                <td class=\"align-middle text-center text-sm\"><a href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_delete", ["id_video" => twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 176)]), "html", null, true);
            echo "\" class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                                    </tr>
                                    \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                   
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/showback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 179,  232 => 176,  228 => 175,  223 => 173,  217 => 170,  211 => 167,  204 => 163,  198 => 160,  191 => 156,  182 => 149,  178 => 148,  149 => 122,  88 => 63,  78 => 62,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Mes Videos{% endblock %}
{#
{% block body %}
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
                  <h5 class=\"card-title\">Tutoriel | Videos <span>| List</span></h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Video</th>
                        <th scope=\"col\">Titre</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Date d'ajout</th>
                        <th scope=\"col\">actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for v in tutoriel.videos %}
                      <tr>
                        <th scope=\"row\"><a href=\"#\">{{v.getId()}}</a></th>
                        <td><img src=\"{{ asset('http://localhost/img/'~v.pathimage) }}\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \"></td>
                        <td><video width=\"70\" height=\"70\" controls>
                            <source src=\"{{ asset('http://localhost/videos/'~v.pathvideo) }}\" type=\"video/mp4\">
                            Your browser does not support the video tag.
                            </video></td>
                        <td><a href=\"#\" class=\"text-primary\">{{v.title}}</a></td>
                        <td>{{ v.description }}</td>
                        <td>{{ v.getDateP()|date(\"d:m:Y\") }}</td>
                        <td style=\"\">
                        <a href=\"{{ path('app_video_edit', {'id_video': v.getId()}) }}\"><i class=\"bi bi-pencil-square\"></i></a>
                        <a href=\"{{ path('app_tutoriel_delete', {'id_tutoriel': tutoriel.getId()}) }}\"><i class=\"bi bi-dash-circle\"></i></a>
                        </td>
                      </tr>
                      {% endfor %}
                    </tbody>
                  </table>

                </div>
{% endblock %}
#}

{% block body %}


    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Mes Videos</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item active\">Mes Tutoriels</li>
                    <li class=\"breadcrumb-item active\">Mes Videos</li>
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
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                                <h4 class=\"text-white text-capitalize ps-31\">Mes Videos</h4>
                            </div>
                        </div>
                          
 <div class=\"ligne\">
  <div class=\"col-6\">
    <a href=\"{{ path('app_video_new',{'id_tutoriel':tutoriel.getId()}) }}\">
      <i class=\"fas fa-plus\"></i>
      Ajouter un video
    </a>
  </div>
</div>

  
 

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Image</th>
                                        <th scope=\"col\">Video</th>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Description</th>
                                        <th scope=\"col\">Date d'ajout</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                  {% for v in tutoriel.videos %}
             
                                    <tr>
                                       
                                        
                                       
                                        
                                            <td class=\"align-middle text-center text-sm\">
                                               {{v.getId()}}
                                            </td>
                                            
                                            <td class=\"align-middle text-center text-sm\">
                                               <img src=\"{{ asset('http://localhost/img/'~v.pathimage) }}\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \">
                                            </td>
                                            <td class=\"align-middle text-center text-sm\"><video width=\"70\" height=\"70\" controls>
                                                <source src=\"{{ asset('http://localhost/videos/'~v.pathvideo) }}\" type=\"video/mp4\">
                                                Your browser does not support the video tag.
                                                </video></td>
                                             <td class=\"align-middle text-center text-sm\">
                                               {{v.title}}
                                            </td>
                                            <td class=\"align-middle text-center text-sm\">
                                               {{ v.description }}
                                            </td>
                                             <td class=\"align-middle text-center text-sm\">
                                                {{ v.getDateP()|date(\"d:m:Y\") }}
                                            </td>
                                                <td class=\"align-middle text-center text-sm\"><a href=\"{{ path('app_video_edit', {'id_video': v.getId()}) }}\" class=\"text-primary\"><i class=\"bi bi-pencil\"></i> Modifier </a></td>
                                                <td class=\"align-middle text-center text-sm\"><a href=\"{{ path('app_video_delete', {'id_video': v.getId()}) }}\" class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                                    </tr>
                                    \t {% endfor %}
                                   
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
{% endblock %}", "tutoriel/showback.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\tutoriel\\showback.html.twig");
    }
}
