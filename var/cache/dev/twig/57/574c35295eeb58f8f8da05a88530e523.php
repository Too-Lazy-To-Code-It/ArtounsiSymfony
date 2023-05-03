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
class __TwigTemplate_be55ddd9026400ca8a4581c56ba890c5 extends Template
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
            echo "        <div class=\"alert alert-success\">
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
        echo "    <section class=\"section\">
        <div class=\"row\">

            <!-- Tpc -->
            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body pb-0\">
                        <h6 class=\"card-title\">Tutoriels <span>| Per Category</span></h6>
                        <!-- Pie Chart -->
                        <div id=\"pieChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                        <!--<script>
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
                                      ";
        // line 61
        echo "]
                                });
                            });
                        </script>-->
                        <!-- End Pie Chart -->

                    </div>
                </div>
            </div>


            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 style=\"margin-bottom: 22px;\" class=\"card-title\">Most viewed tutoriels</h5>
                        <!-- Bar Chart -->
                        <div id=\"barChart\"></div>

                        <!--    <script>
                            document.addEventListener(\"DOMContentLoaded\", () => {
                                new ApexCharts(document.querySelector(\"#barChart\"), {
                                    series: [{
                                       ";
        // line 84
        echo "],
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
                                      ";
        // line 102
        echo "                                }).render();
                            });
                        </script>-->
                        <!-- End Bar Chart -->

                    </div>
                </div>
            </div>

        </div>

        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Views per month</h5>

                    <!-- Line Chart -->
                    <div id=\"lineChart\"></div>
                    <!--  <script>
                        document.addEventListener(\"DOMContentLoaded\", () => {
                            new ApexCharts(document.querySelector(\"#lineChart\"), {
                                series: [{
                                    name: \"Views\",
                                ";
        // line 126
        echo "],
                                chart: {
                                    height: 350,
                                    type: 'line',
                                    zoom: {
                                        enabled: false
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    curve: 'straight'
                                },
                                grid: {
                                    row: {
                                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                        opacity: 0.5
                                    },
                                },
                                xaxis: {
                                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                }
                            }).render();
                        });
                    </script>-->
                    <!-- End Line Chart -->

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
        // line 220
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
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 244, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
            // line 245
            echo "
                                <tr>


                                    <td class=\"align-middle text-center text-sm\">
                                        ";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 250), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"align-middle text-center text-sm\">
                                        <img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["tutoriel"], "pathimg", [], "any", false, false, false, 254))), "html", null, true);
            echo "\" alt=\"\"
                                             style=\"border-radius: 20px; width: 70px; height: 70px; \">
                                    </td>
                                    <td class=\"align-middle text-center text-sm\">";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "title", [], "any", false, false, false, 257), "html", null, true);
            echo "</td>
                                    <td class=\"align-middle text-center text-sm\">
                                        ";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "description", [], "any", false, false, false, 259), "html", null, true);
            echo "
                                    </td>
                                    <td class=\"align-middle text-center text-sm\">
                                        ";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "niveau", [], "any", false, false, false, 262), "html", null, true);
            echo "
                                    </td>

                                    <td class=\"align-middle text-center text-sm\"><a class=\"btn btn-primary\"
                                                                                    href=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show_back", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 266)]), "html", null, true);
            echo "\">show
                                            (";
            // line 267
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getVideos", [], "method", false, false, false, 267)), "html", null, true);
            echo ")</a></td>
                                    <td class=\"align-middle text-center text-sm\"><a>
                                            ";
            // line 269
            if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 269, $this->source); })()), "id_user", [], "any", false, false, false, 269) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getIdArtist", [], "method", false, false, false, 269), "getid_user", [], "method", false, false, false, 269))) {
                // line 270
                echo "                                                href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_edit", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 270)]), "html", null, true);
                echo "\"
                                                class=\"text-primary\"><i class=\"bi bi-pencil\"></i> Modifier </a></td>
                                    <td class=\"align-middle text-center text-sm\"><a
                                                href=\"";
                // line 273
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_delete", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["tutoriel"], "getId", [], "method", false, false, false, 273)]), "html", null, true);
                echo "\"
                                                class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                                    ";
            }
            // line 276
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
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
        return array (  402 => 278,  395 => 276,  389 => 273,  382 => 270,  380 => 269,  375 => 267,  371 => 266,  364 => 262,  358 => 259,  353 => 257,  347 => 254,  340 => 250,  333 => 245,  329 => 244,  302 => 220,  206 => 126,  181 => 102,  164 => 84,  140 => 61,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Tutoriel index{% endblock %}

{% block body %}

    <main id=\"main\" class=\"main\">
    {% for message in app.flashes('success') %}
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
                        <h6 class=\"card-title\">Tutoriels <span>| Per Category</span></h6>
                        <!-- Pie Chart -->
                        <div id=\"pieChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

                        <!--<script>
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
                                      {#  data: [
                                            {
                                                value: {{ tutorielsPerCategory[0].aaa }},
                                                name: '{{ tutorielsPerCategory[0].name_category }}'
                                            },
                                            {
                                                value: {{ tutorielsPerCategory[1].aaa }},
                                                name: '{{ tutorielsPerCategory[1].name_category }}'
                                            }

                                        ],
                                        emphasis: {
                                            itemStyle: {
                                                shadowBlur: 10,
                                                shadowOffsetX: 0,
                                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                                            }
                                        }
                        #}]
                                });
                            });
                        </script>-->
                        <!-- End Pie Chart -->

                    </div>
                </div>
            </div>


            <div class=\"col-lg-6\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 style=\"margin-bottom: 22px;\" class=\"card-title\">Most viewed tutoriels</h5>
                        <!-- Bar Chart -->
                        <div id=\"barChart\"></div>

                        <!--    <script>
                            document.addEventListener(\"DOMContentLoaded\", () => {
                                new ApexCharts(document.querySelector(\"#barChart\"), {
                                    series: [{
                                       {# data: [{{ tutorielsPerView[1].views }}, {{ tutorielsPerView[0].views }}]
                        #}],
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
                                      {#  categories: ['{{ tutorielsPerView[1].title }}', '{{ tutorielsPerView[0].title }}'
                                        ],
                        #}
                                }).render();
                            });
                        </script>-->
                        <!-- End Bar Chart -->

                    </div>
                </div>
            </div>

        </div>

        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Views per month</h5>

                    <!-- Line Chart -->
                    <div id=\"lineChart\"></div>
                    <!--  <script>
                        document.addEventListener(\"DOMContentLoaded\", () => {
                            new ApexCharts(document.querySelector(\"#lineChart\"), {
                                series: [{
                                    name: \"Views\",
                                {#    data: [{{ vpm[1] }}, {{ vpm[2] }}, {{ vpm[3] }}, {{ vpm[4] }}, {{ vpm[5] }}, {{ vpm[6] }}, {{ vpm[7] }}, {{ vpm[8] }}, {{ vpm[9] }}, {{ vpm[10] }}, {{ vpm[11] }}, {{ vpm[12] }}]
                    #}],
                                chart: {
                                    height: 350,
                                    type: 'line',
                                    zoom: {
                                        enabled: false
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    curve: 'straight'
                                },
                                grid: {
                                    row: {
                                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                        opacity: 0.5
                                    },
                                },
                                xaxis: {
                                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                }
                            }).render();
                        });
                    </script>-->
                    <!-- End Line Chart -->

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
                                        {{ tutoriel.getId() }}
                                    </td>

                                    <td class=\"align-middle text-center text-sm\">
                                        <img src=\"{{ asset('http://localhost/img/'~tutoriel.pathimg) }}\" alt=\"\"
                                             style=\"border-radius: 20px; width: 70px; height: 70px; \">
                                    </td>
                                    <td class=\"align-middle text-center text-sm\">{{ tutoriel.title }}</td>
                                    <td class=\"align-middle text-center text-sm\">
                                        {{ tutoriel.description }}
                                    </td>
                                    <td class=\"align-middle text-center text-sm\">
                                        {{ tutoriel.niveau }}
                                    </td>

                                    <td class=\"align-middle text-center text-sm\"><a class=\"btn btn-primary\"
                                                                                    href=\"{{ path('app_tutoriel_show_back', {'id_tutoriel': tutoriel.getId()}) }}\">show
                                            ({{ tutoriel.getVideos()|length }})</a></td>
                                    <td class=\"align-middle text-center text-sm\"><a>
                                            {% if(user.id_user==tutoriel.getIdArtist().getid_user()) %}
                                                href=\"{{ path('app_tutoriel_edit', {'id_tutoriel': tutoriel.getId()}) }}\"
                                                class=\"text-primary\"><i class=\"bi bi-pencil\"></i> Modifier </a></td>
                                    <td class=\"align-middle text-center text-sm\"><a
                                                href=\"{{ path('app_tutoriel_delete', {'id_tutoriel': tutoriel.getId()}) }}\"
                                                class=\"text-primary\"><i class=\"bi bi-trash\"></i> Supprimer </a></td>
                                    {% endif %}
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}", "tutoriel/indexback.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\tutoriel\\indexback.html.twig");
    }
}
