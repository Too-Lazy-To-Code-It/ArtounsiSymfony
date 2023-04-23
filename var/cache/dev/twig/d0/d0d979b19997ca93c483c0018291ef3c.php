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

/* challenge/_content.html.twig */
class __TwigTemplate_1b40739bf46961ceeb517065a5d73ed6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/_content.html.twig"));

        // line 1
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 2
            echo "        
        <div class=\"col-lg-3\">
          <div class=\"item\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <span class=\"author\">
                ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["challenge"], "getIdCategorie", [], "method", false, false, false, 8), "getNameCategory", [], "method", false, false, false, 8) == "2d")) {
                // line 9
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/2d.png"), "html", null, true);
                echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 11
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["challenge"], "getIdCategorie", [], "method", false, false, false, 11), "getNameCategory", [], "method", false, false, false, 11) == "3d")) {
                // line 12
                echo "                  <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/3d.png"), "html", null, true);
                echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 14
            echo "                </span>
                <img src=";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["challenge"], "PathIMG", [], "any", false, false, false, 15))), "html", null, true);
            echo " alt=\"\" style=\"border-radius: 20px; height: 250px;\">
                <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "Title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"line-dec\"></div>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <span>Level: <br> <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "Niveau", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong></span>
                  </div>
                  <div class=\"col-6\">
                    <span>Planified In: <br> <strong>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["challenge"], "DateC", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "DateC", [], "any", false, false, false, 25), "d M"), "html", null, true))) : (print ("")));
            echo "</strong></span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"main-button\">
                  <a href=";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_show", ["id" => twig_get_attribute($this->env, $this->source, $context["challenge"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo ">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "challenge/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  105 => 31,  96 => 25,  90 => 22,  81 => 16,  77 => 15,  74 => 14,  68 => 12,  65 => 11,  59 => 9,  57 => 8,  49 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        {% for challenge in challenges %}
        
        <div class=\"col-lg-3\">
          <div class=\"item\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <span class=\"author\">
                {% if(challenge.getIdCategorie().getNameCategory()==\"2d\") %}
                  <img src=\"{{ asset('assets/images/2d.png') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                {% if(challenge.getIdCategorie().getNameCategory()==\"3d\") %}
                  <img src=\"{{ asset('assets/images/3d.png') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                </span>
                <img src={{ asset('http://localhost/img/'~challenge.PathIMG) }} alt=\"\" style=\"border-radius: 20px; height: 250px;\">
                <h4>{{challenge.Title}}</h4>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"line-dec\"></div>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <span>Level: <br> <strong>{{challenge.Niveau}}</strong></span>
                  </div>
                  <div class=\"col-6\">
                    <span>Planified In: <br> <strong>{{ challenge.DateC ? challenge.DateC|date('d M') : '' }}</strong></span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"main-button\">
                  <a href={{ path('app_challenge_show', {'id': challenge.id}) }}>View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}", "challenge/_content.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\_content.html.twig");
    }
}
