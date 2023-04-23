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

/* tutoriel/favoris.html.twig */
class __TwigTemplate_d52bbdf3c480a40678899bc46fd47be8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/favoris.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/favoris.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutoriel/favoris.html.twig", 1);
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
          <form id=\"search-form\" name=\"gs\" method=\"submit\" role=\"search\" action=\"#\">
            <div class=\"row\">
              <div class=\"col-lg-5\">
                <fieldset>
                    <input type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\" required>
                </fieldset>
              </div>
              <div class=\"col-lg-5\">
                <fieldset>
                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                        <option selected>All Categories</option>
                        <option type=\"checkbox\" name=\"option1\" value=\"Music\">Music</option>
                        <option value=\"Digital\">Digital</option>
                        <option value=\"Blockchain\">Blockchain</option>
                        <option value=\"Virtual\">Virtual</option>
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
        
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 45
            echo "        <div class=\"col-lg-3\">
          <div class=\"item\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <span class=\"author\">
                  ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdTutoriel", [], "method", false, false, false, 50), "getIdCategorie", [], "method", false, false, false, 50), "getNameCategory", [], "method", false, false, false, 50) == "2d")) {
                // line 51
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/2d.png"), "html", null, true);
                echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 53
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdTutoriel", [], "method", false, false, false, 53), "getIdCategorie", [], "method", false, false, false, 53), "getNameCategory", [], "method", false, false, false, 53) == "3d")) {
                // line 54
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/3d.png"), "html", null, true);
                echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 56
            echo "                </span>
                <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdTutoriel", [], "method", false, false, false, 57), "pathimg", [], "any", false, false, false, 57))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; max-width: 500px; height: 350px; \">
                <h4>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdTutoriel", [], "method", false, false, false, 58), "title", [], "any", false, false, false, 58), "html", null, true);
            echo "</h4>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"line-dec\"></div>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <span>Level: <br> <strong>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdTutoriel", [], "method", false, false, false, 64), "niveau", [], "any", false, false, false, 64), "html", null, true);
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
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdTutoriel", [], "method", false, false, false, 73), "getId", [], "method", false, false, false, 73)]), "html", null, true);
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
        // line 80
        echo "        
        </div>
      </div>
    </div>
  </div>


    ";
        // line 120
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 120,  197 => 80,  184 => 73,  172 => 64,  163 => 58,  159 => 57,  156 => 56,  150 => 54,  147 => 53,  141 => 51,  139 => 50,  132 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tutoriel index{% endblock %}

{% block body %}

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
          <form id=\"search-form\" name=\"gs\" method=\"submit\" role=\"search\" action=\"#\">
            <div class=\"row\">
              <div class=\"col-lg-5\">
                <fieldset>
                    <input type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\" required>
                </fieldset>
              </div>
              <div class=\"col-lg-5\">
                <fieldset>
                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                        <option selected>All Categories</option>
                        <option type=\"checkbox\" name=\"option1\" value=\"Music\">Music</option>
                        <option value=\"Digital\">Digital</option>
                        <option value=\"Blockchain\">Blockchain</option>
                        <option value=\"Virtual\">Virtual</option>
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
                  {% if(t.getIdTutoriel().getIdCategorie().getNameCategory()==\"2d\") %}
                  <img src=\"{{ asset('assets/images/2d.png') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                {% if(t.getIdTutoriel().getIdCategorie().getNameCategory()==\"3d\") %}
                  <img src=\"{{ asset('assets/images/3d.png') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                </span>
                <img src=\"{{ asset('http://localhost/img/'~t.getIdTutoriel().pathimg) }}\" alt=\"\" style=\"border-radius: 20px; max-width: 500px; height: 350px; \">
                <h4>{{t.getIdTutoriel().title}}</h4>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"line-dec\"></div>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <span>Level: <br> <strong>{{t.getIdTutoriel().niveau}}</strong></span>
                  </div>
                  <div class=\"col-6\">
                    <span>Last Update: <br> <strong>26th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"main-button\">
                <a href=\"{{ path('app_tutoriel_show', {'id_tutoriel': t.getIdTutoriel().getId()}) }}\">show</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {% endfor %}
        
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
", "tutoriel/favoris.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\tutoriel\\favoris.html.twig");
    }
}
