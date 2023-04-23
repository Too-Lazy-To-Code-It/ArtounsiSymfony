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

/* tutoriel/indexback.html.twig */
class __TwigTemplate_f9097332103a00c0747d732884126d7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/indexback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/indexback.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "tutoriel/indexback.html.twig", 1);
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

        echo "Tutoriel index";
        
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
    <main id=\"main\" class=\"main\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "      <div class=\"alert alert-success\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " <i class=\"bi bi-check\" style=\"width: 50;height: 50;color: #00ff00;\"></i>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      <section class=\"section\">
        <div class=\"row\">

        <!-- Tpc -->
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Tutoriels <span>| Per Category</span></h5>
                    <!-- Pie Chart -->
                    <div id=\"pieChart\" style=\"min-height: 400px;\" class=\"echart\"></div>
      
                    <script>
                      document.addEventListener(\"DOMContentLoaded\", () => {
                        echarts.init(document.querySelector(\"#pieChart\")).setOption({
                          title: {
                            text: 'Tutoriels',
                            subtext: 'Per Category',
                            left: 'center'
                          },
                          tooltip: {
                            trigger: 'item'
                          },
                          legend: {
                            orient: 'vertical',
                            left: 'left'
                          },
                          series: [{
                            name: 'Access From',
                            type: 'pie',
                            radius: '50%',
                            data: [
                            {
                        value: ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutorielsPerCategory"]) || array_key_exists("tutorielsPerCategory", $context) ? $context["tutorielsPerCategory"] : (function () { throw new RuntimeError('Variable "tutorielsPerCategory" does not exist.', 45, $this->source); })()), 0, [], "array", false, false, false, 45), "aaa", [], "any", false, false, false, 45), "html", null, true);
        echo ",
                          name: '";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutorielsPerCategory"]) || array_key_exists("tutorielsPerCategory", $context) ? $context["tutorielsPerCategory"] : (function () { throw new RuntimeError('Variable "tutorielsPerCategory" does not exist.', 46, $this->source); })()), 0, [], "array", false, false, false, 46), "name_category", [], "any", false, false, false, 46), "html", null, true);
        echo "'
                        },

                            ],
                            emphasis: {
                              itemStyle: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                              }
                            }
                          }]
                        });
                      });
                    </script>
                    <!-- End Pie Chart -->
      
                  </div>
                </div>
              </div>
              

          <div class=\"col-lg-6\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title\">Most viewed tutoriels</h5>
  
                <!-- Bar Chart -->
                <div id=\"barChart\"></div>
  
                <script>
                  document.addEventListener(\"DOMContentLoaded\", () => {
                    new ApexCharts(document.querySelector(\"#barChart\"), {
                      series: [{
                        data: [";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutorielsPerView"]) || array_key_exists("tutorielsPerView", $context) ? $context["tutorielsPerView"] : (function () { throw new RuntimeError('Variable "tutorielsPerView" does not exist.', 80, $this->source); })()), 1, [], "array", false, false, false, 80), "views", [], "any", false, false, false, 80), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutorielsPerView"]) || array_key_exists("tutorielsPerView", $context) ? $context["tutorielsPerView"] : (function () { throw new RuntimeError('Variable "tutorielsPerView" does not exist.', 80, $this->source); })()), 0, [], "array", false, false, false, 80), "views", [], "any", false, false, false, 80), "html", null, true);
        echo "]
                      }],
                      chart: {
                        type: 'bar',
                        height: 350
                      },
                      plotOptions: {
                        bar: {
                          borderRadius: 4,
                          horizontal: true,
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      xaxis: {
                        categories: ['";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutorielsPerView"]) || array_key_exists("tutorielsPerView", $context) ? $context["tutorielsPerView"] : (function () { throw new RuntimeError('Variable "tutorielsPerView" does not exist.', 96, $this->source); })()), 1, [], "array", false, false, false, 96), "title", [], "any", false, false, false, 96), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutorielsPerView"]) || array_key_exists("tutorielsPerView", $context) ? $context["tutorielsPerView"] : (function () { throw new RuntimeError('Variable "tutorielsPerView" does not exist.', 96, $this->source); })()), 0, [], "array", false, false, false, 96), "title", [], "any", false, false, false, 96), "html", null, true);
        echo "'
                        ],
                      }
                    }).render();
                  });
                </script>
                <!-- End Bar Chart -->
  
              </div>
            </div>
          </div>

      </div>
    </section>

          
        <div class=\"pagetitle\">
            <h1>Mes Tutoriels</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                  
                    <li class=\"breadcrumb-item active\">Mes Tutoriels</li>
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
                                <h4 class=\"text-white text-capitalize ps-31\">Mes Tutoriels</h4>
                            </div>
                        </div>
                          
 <div class=\"ligne\">
  <div class=\"col-6\">
    <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_new");
        echo "\">
      <i class=\"fas fa-plus\"></i>
      Ajouter un tutoriel
    </a>
  </div>
</div>

  
 

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Image</th>
                                        <th scope=\"col\">Title</th>
                                        <th scope=\"col\">Description</th>
                                        <th scope=\"col\">Niveau</th>
                                        <th scope=\"col\">Videos</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                  ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 193, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
            // line 194
            echo "             
                                    <tr>
                                       
                                        
                                       
                                        
                                            <td class=\"align-middle text-center text-sm\">
                                               ";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 201), "html", null, true);
            echo "
                                            </td>
                                            
                                            <td class=\"align-middle text-center text-sm\">
                                               <img src=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["tutoriel"], "pathimg", [], "any", false, false, false, 205))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \">
                                            </td>
                                            <td class=\"align-middle text-center text-sm\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "title", [], "any", false, false, false, 207), "html", null, true);
            echo "</td>
                                             <td class=\"align-middle text-center text-sm\">
                                               ";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "description", [], "any", false, false, false, 209), "html", null, true);
            echo "
                                            </td>
                                             <td class=\"align-middle text-center text-sm\">
                                                ";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "niveau", [], "any", false, false, false, 212), "html", null, true);
            echo "
                                            </td>
                                           
                                                                                        <td class=\"align-middle text-center text-sm\"> <a class=\"btn btn-primary\" href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 215)]), "html", null, true);
            echo "\">show (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getVideos", [], "method", false, false, false, 215)), "html", null, true);
            echo ")</a></td>
                                                                                        <td class=\"align-middle text-center text-sm\"><a href=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_edit", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 216)]), "html", null, true);
            echo "\" class=\"text-primary\"><i class=\"bi bi-pencil\"></i> Modifier </a></td>
                                                                                        <td class=\"align-middle text-center text-sm\"><a href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_delete", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 217)]), "html", null, true);
            echo "\" class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                                    </tr>
                                    \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
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
        return "tutoriel/indexback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 220,  361 => 217,  357 => 216,  351 => 215,  345 => 212,  339 => 209,  334 => 207,  329 => 205,  322 => 201,  313 => 194,  309 => 193,  280 => 167,  204 => 96,  183 => 80,  146 => 46,  142 => 45,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Tutoriel index{% endblock %}

{% block body %}

    <main id=\"main\" class=\"main\">
      {%for message in app.flashes('success')%}
      <div class=\"alert alert-success\">
        {{ message }} <i class=\"bi bi-check\" style=\"width: 50;height: 50;color: #00ff00;\"></i>
      </div>
    {% endfor %}
      <section class=\"section\">
        <div class=\"row\">

        <!-- Tpc -->
        <div class=\"col-lg-6\">
          <div class=\"card\">
            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Tutoriels <span>| Per Category</span></h5>
                    <!-- Pie Chart -->
                    <div id=\"pieChart\" style=\"min-height: 400px;\" class=\"echart\"></div>
      
                    <script>
                      document.addEventListener(\"DOMContentLoaded\", () => {
                        echarts.init(document.querySelector(\"#pieChart\")).setOption({
                          title: {
                            text: 'Tutoriels',
                            subtext: 'Per Category',
                            left: 'center'
                          },
                          tooltip: {
                            trigger: 'item'
                          },
                          legend: {
                            orient: 'vertical',
                            left: 'left'
                          },
                          series: [{
                            name: 'Access From',
                            type: 'pie',
                            radius: '50%',
                            data: [
                            {
                        value: {{tutorielsPerCategory[0].aaa}},
                          name: '{{tutorielsPerCategory[0].name_category}}'
                        },

                            ],
                            emphasis: {
                              itemStyle: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                              }
                            }
                          }]
                        });
                      });
                    </script>
                    <!-- End Pie Chart -->
      
                  </div>
                </div>
              </div>
              

          <div class=\"col-lg-6\">
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title\">Most viewed tutoriels</h5>
  
                <!-- Bar Chart -->
                <div id=\"barChart\"></div>
  
                <script>
                  document.addEventListener(\"DOMContentLoaded\", () => {
                    new ApexCharts(document.querySelector(\"#barChart\"), {
                      series: [{
                        data: [{{tutorielsPerView[1].views}}, {{tutorielsPerView[0].views}}]
                      }],
                      chart: {
                        type: 'bar',
                        height: 350
                      },
                      plotOptions: {
                        bar: {
                          borderRadius: 4,
                          horizontal: true,
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      xaxis: {
                        categories: ['{{tutorielsPerView[1].title}}', '{{tutorielsPerView[0].title}}'
                        ],
                      }
                    }).render();
                  });
                </script>
                <!-- End Bar Chart -->
  
              </div>
            </div>
          </div>

      </div>
    </section>

          
        <div class=\"pagetitle\">
            <h1>Mes Tutoriels</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                  
                    <li class=\"breadcrumb-item active\">Mes Tutoriels</li>
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
                                <h4 class=\"text-white text-capitalize ps-31\">Mes Tutoriels</h4>
                            </div>
                        </div>
                          
 <div class=\"ligne\">
  <div class=\"col-6\">
    <a href=\"{{ path('app_tutoriel_new') }}\">
      <i class=\"fas fa-plus\"></i>
      Ajouter un tutoriel
    </a>
  </div>
</div>

  
 

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Image</th>
                                        <th scope=\"col\">Title</th>
                                        <th scope=\"col\">Description</th>
                                        <th scope=\"col\">Niveau</th>
                                        <th scope=\"col\">Videos</th>
                                        <th scope=\"col\">Modifier</th>
                                        <th scope=\"col\">Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                  {% for tutoriel in tutoriels %}
             
                                    <tr>
                                       
                                        
                                       
                                        
                                            <td class=\"align-middle text-center text-sm\">
                                               {{tutoriel.getId()}}
                                            </td>
                                            
                                            <td class=\"align-middle text-center text-sm\">
                                               <img src=\"{{ asset('http://localhost/img/'~tutoriel.pathimg) }}\" alt=\"\" style=\"border-radius: 20px; width: 70px; height: 70px; \">
                                            </td>
                                            <td class=\"align-middle text-center text-sm\">{{ tutoriel.title }}</td>
                                             <td class=\"align-middle text-center text-sm\">
                                               {{ tutoriel.description }}
                                            </td>
                                             <td class=\"align-middle text-center text-sm\">
                                                {{ tutoriel.niveau }}
                                            </td>
                                           
                                                                                        <td class=\"align-middle text-center text-sm\"> <a class=\"btn btn-primary\" href=\"{{ path('app_tutoriel_show', {'id_tutoriel': tutoriel.getId()}) }}\">show ({{tutoriel.getVideos()|length}})</a></td>
                                                                                        <td class=\"align-middle text-center text-sm\"><a href=\"{{ path('app_tutoriel_edit', {'id_tutoriel': tutoriel.getId()}) }}\" class=\"text-primary\"><i class=\"bi bi-pencil\"></i> Modifier </a></td>
                                                                                        <td class=\"align-middle text-center text-sm\"><a href=\"{{ path('app_tutoriel_delete', {'id_tutoriel': tutoriel.getId()}) }}\" class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
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
{% endblock %}", "tutoriel/indexback.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\tutoriel\\indexback.html.twig");
    }
}
