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

/* tutoriel/index.html.twig */
class __TwigTemplate_25de59832031a9086af638ac8b7c8e7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutoriel/index.html.twig", 1);
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
        echo "    <div class=\"page-heading\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Tutoriels</h6>
          <h2>Discover Best Tutoriels</h2>
          <span>Tutoriels > <a href=\"#\">Explore</a></span>
        </div>
      </div>
    </div>
    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_favoris");
        echo "\"><span>show favoris</span></a>
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["toptutoriels"]) || array_key_exists("toptutoriels", $context) ? $context["toptutoriels"] : (function () { throw new RuntimeError('Variable "toptutoriels" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 24
            echo "              <div class=\"item\">
                <div class=\"thumb\">
                  <img src=";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["t"], "pathimg", [], "any", false, false, false, 26))), "html", null, true);
            echo " alt=\"\" style=\"border-radius: 20px;height: 500px;\">
                  <div class=\"hover-effect\">
                    <div class=\"content\">
                      <h4>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</h4>
                      <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>made by ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdArtist", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "<br><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["t"], "getId", [], "method", false, false, false, 32)]), "html", null, true);
            echo "\">show</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"discover-items\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-5\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Discover Our <em>Tutoriels</em>.</h2>
          </div>
        </div>
        <div class=\"col-lg-7\">

          <form id=\"search-form\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
            <div class=\"row\">
              <div class=\"col-lg-5\">
                <fieldset>
                ";
        // line 62
        if (((isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 62, $this->source); })()) == "")) {
            // line 63
            echo "                    <input id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                ";
        } else {
            // line 65
            echo "                    <input value=";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 65, $this->source); })()), "html", null, true);
            echo " id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                ";
        }
        // line 67
        echo "                </fieldset>
              </div>
              <div class=\"col-lg-5\">
                <fieldset>
                    <select default=\$category name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                        ";
        // line 72
        if (((isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 72, $this->source); })()) == null)) {
            // line 73
            echo "                        <option value=null selected>All Categories</option>
                        ";
        } else {
            // line 75
            echo "                        <option value=null>All Categories</option>
                        ";
        }
        // line 77
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 78
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 78) == (isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 78, $this->source); })()))) {
                // line 79
                echo "                            <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 79), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 79), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 81
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 81), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 81), "html", null, true);
                echo "</option>
                            ";
            }
            // line 83
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    </select>
                </fieldset>
              </div>
              <div class=\"col-lg-2\">                        
                <fieldset>
                    <button class=\"main-button\">Search</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 97
            echo "        <div class=\"col-lg-3\">
          <div class=\"item\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <span class=\"author\">
                  ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdCategorie", [], "method", false, false, false, 102), "getNameCategory", [], "method", false, false, false, 102) == "2d")) {
                // line 103
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/2d.png"), "html", null, true);
                echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 105
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdCategorie", [], "method", false, false, false, 105), "getNameCategory", [], "method", false, false, false, 105) == "3d")) {
                // line 106
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/3d.png"), "html", null, true);
                echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 108
            echo "                </span>
                <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["t"], "pathimg", [], "any", false, false, false, 109))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; max-width: 500px; height: 350px; \">
                <h4>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 110), "html", null, true);
            echo "</h4>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"line-dec\"></div>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <span>Level: <br> <strong>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "niveau", [], "any", false, false, false, 116), "html", null, true);
            echo "</strong></span>
                  </div>
                  <div class=\"col-6\">
                    <span>Last Update: <br> <strong>26th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"main-button\">
                <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["t"], "getId", [], "method", false, false, false, 125)]), "html", null, true);
            echo "\">show</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "            ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 133
(isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 133, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 142
        echo "
        
        </div>
      </div>
    </div>
  </div>


    ";
        // line 183
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 183,  316 => 142,  314 => 133,  312 => 132,  299 => 125,  287 => 116,  278 => 110,  274 => 109,  271 => 108,  265 => 106,  262 => 105,  256 => 103,  254 => 102,  247 => 97,  243 => 96,  229 => 84,  223 => 83,  215 => 81,  207 => 79,  204 => 78,  199 => 77,  195 => 75,  191 => 73,  189 => 72,  182 => 67,  176 => 65,  172 => 63,  170 => 62,  145 => 39,  130 => 32,  124 => 29,  118 => 26,  114 => 24,  110 => 23,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tutoriel index{% endblock %}

{% block body %}
    <div class=\"page-heading\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Tutoriels</h6>
          <h2>Discover Best Tutoriels</h2>
          <span>Tutoriels > <a href=\"#\">Explore</a></span>
        </div>
      </div>
    </div>
    <a href=\"{{ path('app_tutoriel_favoris') }}\"><span>show favoris</span></a>
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">

            {% for t in toptutoriels %}
              <div class=\"item\">
                <div class=\"thumb\">
                  <img src={{ asset('http://localhost/img/'~t.pathimg) }} alt=\"\" style=\"border-radius: 20px;height: 500px;\">
                  <div class=\"hover-effect\">
                    <div class=\"content\">
                      <h4>{{ t.title }}</h4>
                      <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>made by {{t.getIdArtist.name}}<br><a href=\"{{ path('app_tutoriel_show', {'id_tutoriel': t.getId()}) }}\">show</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            {% endfor %}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"discover-items\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-5\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Discover Our <em>Tutoriels</em>.</h2>
          </div>
        </div>
        <div class=\"col-lg-7\">

          <form id=\"search-form\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
            <div class=\"row\">
              <div class=\"col-lg-5\">
                <fieldset>
                {% if(keyword==\"\")%}
                    <input id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                {% else %}
                    <input value={{keyword}} id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                {% endif %}
                </fieldset>
              </div>
              <div class=\"col-lg-5\">
                <fieldset>
                    <select default=\$category name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                        {% if(Categorie==null)%}
                        <option value=null selected>All Categories</option>
                        {% else %}
                        <option value=null>All Categories</option>
                        {% endif %}
                        {% for category in categories %}
                            {% if(category.getId_category()==Categorie)%}
                            <option selected value=\"{{category.getId_category()}}\">{{category.getNameCategory()}}</option>
                            {% else %}
                            <option value=\"{{category.getId_category()}}\">{{category.getNameCategory()}}</option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </fieldset>
              </div>
              <div class=\"col-lg-2\">                        
                <fieldset>
                    <button class=\"main-button\">Search</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        
        {% for t in tutoriels %}
        <div class=\"col-lg-3\">
          <div class=\"item\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <span class=\"author\">
                  {% if(t.getIdCategorie().getNameCategory()==\"2d\") %}
                  <img src=\"{{ asset('assets/images/2d.png') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                {% if(t.getIdCategorie().getNameCategory()==\"3d\") %}
                  <img src=\"{{ asset('assets/images/3d.png') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                </span>
                <img src=\"{{ asset('http://localhost/img/'~t.pathimg) }}\" alt=\"\" style=\"border-radius: 20px; max-width: 500px; height: 350px; \">
                <h4>{{t.title}}</h4>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"line-dec\"></div>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <span>Level: <br> <strong>{{t.niveau}}</strong></span>
                  </div>
                  <div class=\"col-6\">
                    <span>Last Update: <br> <strong>26th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"main-button\">
                <a href=\"{{ path('app_tutoriel_show', {'id_tutoriel': t.getId()}) }}\">show</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {% endfor %}
            {{ knp_pagination_render(
            tutoriels,
            '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',
            {
                'queryParam1': 'param1 value',
                'queryParam2': 'param2 value'
            },
            {
                'align': 'center',
            },
        ) }}
        
        </div>
      </div>
    </div>
  </div>


    {#<h1>Tutoriel index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id_tutoriel</th>
                <th>Pathimg</th>
                <th>Title</th>
                <th>Description</th>
                <th>Niveau</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for tutoriel in tutoriels %}
            <tr>
                <td>{{ tutoriel.idTutoriel }}</td>
                <td>{{ tutoriel.pathimg }}</td>
                <td>{{ tutoriel.title }}</td>
                <td>{{ tutoriel.description }}</td>
                <td>{{ tutoriel.niveau }}</td>
                <td>
                    <a href=\"{{ path('app_tutoriel_show', {'id_tutoriel': tutoriel.id_tutoriel}) }}\">show</a>
                    <a href=\"{{ path('app_tutoriel_edit', {'id_tutoriel': tutoriel.id_tutoriel}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>#}
    {% endblock %}
", "tutoriel/index.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\tutoriel\\index.html.twig");
    }
}
