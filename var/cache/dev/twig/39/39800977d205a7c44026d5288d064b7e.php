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

/* challenge/index.html.twig */
class __TwigTemplate_4e1296b044f6af57bac42e877b86e71a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "challenge/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"discover-items\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"buttons\">
            <div class=\"border-button\">
              <a href=";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_new");
        echo ">Create Your Challenge</a>
            </div>
          </div>
        <div class=\"col-lg-5\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Discover Some Of Our <em>Challenges</em>.</h2>
          </div>
        </div>
        <div class=\"col-lg-7\">
          
          <form id=\"search-form\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
            <div class=\"row\">
              <div class=\"col-lg-5\">
                <fieldset>
                ";
        // line 25
        if (((isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 25, $this->source); })()) == "")) {
            // line 26
            echo "                    <input id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                ";
        } else {
            // line 28
            echo "                    <input value=";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 28, $this->source); })()), "html", null, true);
            echo " id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                ";
        }
        // line 30
        echo "                </fieldset>
              </div>
              <div class=\"col-lg-5\">
                <fieldset>
                    <select default=\$category name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                        ";
        // line 35
        if (((isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 35, $this->source); })()) == null)) {
            // line 36
            echo "                        <option value=null selected>All Categories</option>
                        ";
        } else {
            // line 38
            echo "                        <option value=null>All Categories</option>
                        ";
        }
        // line 40
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 41) == (isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 41, $this->source); })()))) {
                // line 42
                echo "                            <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 42), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 44
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 44), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 44), "html", null, true);
                echo "</option>
                            ";
            }
            // line 46
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        // line 67
        echo "        ";
        $this->loadTemplate("challenge/_content.html.twig", "challenge/index.html.twig", 67)->display($context);
        // line 68
        echo "
    
    </div></div></div></div>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filters.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  169 => 68,  166 => 67,  153 => 47,  147 => 46,  139 => 44,  131 => 42,  128 => 41,  123 => 40,  119 => 38,  115 => 36,  113 => 35,  106 => 30,  100 => 28,  96 => 26,  94 => 25,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"discover-items\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"buttons\">
            <div class=\"border-button\">
              <a href={{ path('app_challenge_new') }}>Create Your Challenge</a>
            </div>
          </div>
        <div class=\"col-lg-5\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Discover Some Of Our <em>Challenges</em>.</h2>
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
        {#
        <form id=\"filters\">
        {{dump(Categorie)}}
          {% for c in categories %}
            <p><input type=\"checkbox\" name=\"Categorie[]\" id=\"cat{{c.id}}\" value=\"{{c.id}}\" >
               <label for=\"cat{{c.id}}\">{{c.getNameCategory()}}</label></p>
          {% endfor %}
        </form>
        #}
        {% include \"challenge/_content.html.twig\" %}

    
    </div></div></div></div>
    <script src=\"{{asset('assets/js/filters.js')}}\"></script>
    {% endblock %}


", "challenge/index.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\index.html.twig");
    }
}
