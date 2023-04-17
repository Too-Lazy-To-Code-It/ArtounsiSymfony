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

/* tutoriel/show.html.twig */
class __TwigTemplate_df5a2bde2a6b880018055ba8930bc90d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutoriel/show.html.twig", 1);
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

        echo "Tutoriel";
        
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
        echo "<div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Welcome To Our <em>Tutoriel</em></h2>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"left-image\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 17, $this->source); })()), "pathimg", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</h4>
          <span class=\"author\">
            <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 24, $this->source); })()), "getIdArtist", [], "method", false, false, false, 24), "getName", [], "method", false, false, false, 24), "html", null, true);
        echo "<br><a href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 24, $this->source); })()), "getIdArtist", [], "method", false, false, false, 24), "getEmail", [], "method", false, false, false, 24), "html", null, true);
        echo "</a></h6>
          </span>
          <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 26, $this->source); })()), "getDescription", [], "method", false, false, false, 26), "html", null, true);
        echo "</p>
            ";
        // line 27
        if ((isset($context["favori"]) || array_key_exists("favori", $context) ? $context["favori"] : (function () { throw new RuntimeError('Variable "favori" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_turoial_delete", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 28, $this->source); })()), "getId", [], "method", false, false, false, 28)]), "html", null, true);
            echo "><i class=\"bi bi-heart-fill\"> remove from favoris</i></a>
            ";
        } else {
            // line 30
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_tutoriel_new", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 30, $this->source); })()), "getId", [], "method", false, false, false, 30)]), "html", null, true);
            echo "><i class=\"bi bi-heart\">add to favoris</i></a>
            ";
        }
        // line 32
        echo "        </div>

        <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Videos</h4></div>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                  <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                      <option selected>Sort By: Latest</option>
                      <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                      <option value=\"low\">Sort By: Lowest</option>
                      <option value=\"high\">Sort By: Highest</option>
                  </select>
              </fieldset>
              </div>

            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 51, $this->source); })()), "videos", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 52
            echo "
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\" style=\"height:220px;\">
                  <div class=\"left-img\">
                    <img src=";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["v"], "getPathimage", [], "method", false, false, false, 56))), "html", null, true);
            echo " alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 59), "html", null, true);
            echo "</h4>
                    <a href=";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_show", ["id_video" => twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 60)]), "html", null, true);
            echo ">Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Views: <em>20</em></h6>
                    <span class=\"date\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 63), "m:h d:m:Y"), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    ";
        // line 105
        echo "
    <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_edit", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 108, $this->source); })()), "getId", [], "method", false, false, false, 108)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 110
        echo twig_include($this->env, $context, "tutoriel/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 110,  218 => 108,  213 => 106,  210 => 105,  198 => 69,  186 => 63,  180 => 60,  176 => 59,  170 => 56,  164 => 52,  160 => 51,  139 => 32,  133 => 30,  127 => 28,  125 => 27,  121 => 26,  114 => 24,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tutoriel{% endblock %}

{% block body %}
<div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Welcome To Our <em>Tutoriel</em></h2>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"left-image\">
            <img src=\"{{ asset('http://localhost/img/'~tutoriel.pathimg) }}\" alt=\"\" style=\"border-radius: 20px;\">
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>{{ tutoriel.title }}</h4>
          <span class=\"author\">
            <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>{{ tutoriel.getIdArtist().getName() }}<br><a href=\"#\">{{ tutoriel.getIdArtist().getEmail() }}</a></h6>
          </span>
          <p>{{ tutoriel.getDescription() }}</p>
            {% if(favori) %}
              <a href={{path('app_favoris_turoial_delete',{'id_tutoriel':tutoriel.getId()})}}><i class=\"bi bi-heart-fill\"> remove from favoris</i></a>
            {% else %}
              <a href={{path('app_favoris_tutoriel_new',{'id_tutoriel':tutoriel.getId()})}}><i class=\"bi bi-heart\">add to favoris</i></a>
            {% endif %}
        </div>

        <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Videos</h4></div>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                  <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                      <option selected>Sort By: Latest</option>
                      <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                      <option value=\"low\">Sort By: Lowest</option>
                      <option value=\"high\">Sort By: Highest</option>
                  </select>
              </fieldset>
              </div>

            {% for v in tutoriel.videos %}

              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\" style=\"height:220px;\">
                  <div class=\"left-img\">
                    <img src={{ asset('http://localhost/img/'~v.getPathimage()) }} alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4>{{v.title}}</h4>
                    <a href={{path(\"app_video_show\",{\"id_video\":v.getId()})}}>Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Views: <em>20</em></h6>
                    <span class=\"date\">{{v.getDateP()|date('m:h d:m:Y')}}</span>
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


    {#
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_tutoriel</th>
                <td>{{ tutoriel.getId() }}</td>
            </tr>
            <tr>
                <th>Pathimg</th>
                <td>{{ tutoriel.pathimg }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ tutoriel.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ tutoriel.description }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ tutoriel.niveau }}</td>
            </tr>
        </tbody>
    </table>
    #}

    <a href=\"{{ path('app_tutoriel_index') }}\">back to list</a>

    <a href=\"{{ path('app_tutoriel_edit', {'id_tutoriel': tutoriel.getId()}) }}\">edit</a>

    {{ include('tutoriel/_delete_form.html.twig') }}
{% endblock %}
", "tutoriel/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Adam\\templates\\tutoriel\\show.html.twig");
    }
}
