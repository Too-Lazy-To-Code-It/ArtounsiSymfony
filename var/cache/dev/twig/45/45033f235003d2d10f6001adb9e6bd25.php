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

/* challenge/show.html.twig */
class __TwigTemplate_827d795370527018f4fd8abcba134ec4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "challenge/show.html.twig", 1);
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

        echo "Challenge";
        
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
        echo "    <div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6><span>";
        // line 10
        ((twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 10, $this->source); })()), "DateC", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 10, $this->source); })()), "DateC", [], "any", false, false, false, 10), "d M Y"), "html", null, true))) : (print ("")));
        echo "</span></h6>
          <h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 11, $this->source); })()), "Title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
          <img src=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 12, $this->source); })()), "PathIMG", [], "any", false, false, false, 12))), "html", null, true);
        echo " alt=\"\" style=\"border-radius: 20px; max-width: 200px;\" height=200>
          <h6>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 13, $this->source); })()), "Description", [], "any", false, false, false, 13), "html", null, true);
        echo "</h6>
          <span>Level : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 14, $this->source); })()), "Niveau", [], "any", false, false, false, 14), "html", null, true);
        echo "</span>
          <div class=\"buttons\">
            <div class=\"main-button\">
              <a>Participate</a>
            </div>
            <div class=\"border-button\">
              <a href=\"create.html\">Show Participations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
  <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Apply For <em>Your Participation</em> Here.</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">

            <div class=\"row\" style=\"color:white; margin-top:20px\">
              <div class=\"col-lg-12\">
                <fieldset>
                  <label style=\"color:white;\" for=";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Description", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        echo ">Description</label>
                  <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\" type=\"title\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "Description", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "html", null, true);
        echo "\" name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "Description", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "full_name", [], "any", false, false, false, 44), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "Description", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        echo " placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                  ";
        // line 45
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Description", [], "any", false, false, false, 45), "setRendered", [], "any", false, false, false, 45);
        // line 46
        echo "                </fieldset>
              </div>

              <div class=\"col-lg-4\" style=\"margin-top:20px\">
                <fieldset>
                  <label style=\"color:white;\" for=";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Image", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        echo ">Your Image</label>
                  <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\" type=\"file\" id=";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Image", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        echo " name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Image", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "full_name", [], "any", false, false, false, 52), "html", null, true);
        echo " />
                  ";
        // line 53
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Image", [], "any", false, false, false, 53), "setRendered", [], "any", false, false, false, 53);
        // line 54
        echo "                </fieldset>
              </div>

              <div class=\"col-lg-12\" style=\"margin-top:20px\">
                <fieldset style=\"display:flex; justify-content:center;\">
                  <button type=\"submit\" id=\"form\" class=\"orange-button\">Submit Your Applying</button>
                </fieldset>
              </div>
              
            </div>

        </div>
        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "

         <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                  <h2>This Is The List Of <em>Participations</em></h2>  
                </div>              </div>
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
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 85, $this->source); })()), "participations", [], "any", false, false, false, 85));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 86
            echo "
                    ";
            // line 87
            $context["k"] = 0;
            echo "      
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 88, $this->source); })()), "ratings", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 89
                echo "                      ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getParticipatorId", [], "method", false, false, false, 89), "getid_user", [], "method", false, false, false, 89) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 89), "getid_user", [], "method", false, false, false, 89)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRaterId", [], "method", false, false, false, 89), "getid_user", [], "method", false, false, false, 89) == 1))) {
                    // line 90
                    echo "                        ";
                    $context["k"] = twig_get_attribute($this->env, $this->source, $context["r"], "getRating", [], "method", false, false, false, 90);
                    // line 91
                    echo "                      ";
                }
                // line 92
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\">
                  <div class=\"left-img\">
                    <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 97))), "html", null, true);
            echo "\" alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <a href=\"#\">@";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 100), "getName", [], "method", false, false, false, 100), "html", null, true);
            echo "</a>
                    <div class=\"line-dec\"></div>
                    <h6>Rating: <em>";
            // line 102
            echo twig_escape_filter($this->env, twig_round((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 102, $this->source); })())), "html", null, true);
            echo " Stars</em></h6>
                  </div>
                </div>
              </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "          <p> no Participation Yet </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      </div>
    </div>
  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 110,  273 => 108,  262 => 102,  257 => 100,  251 => 97,  245 => 93,  239 => 92,  236 => 91,  233 => 90,  230 => 89,  226 => 88,  222 => 87,  219 => 86,  214 => 85,  192 => 66,  178 => 54,  176 => 53,  170 => 52,  166 => 51,  159 => 46,  157 => 45,  149 => 44,  145 => 43,  127 => 28,  110 => 14,  106 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Challenge{% endblock %}

{% block body %}
    <div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6><span>{{ challenge.DateC ? challenge.DateC|date('d M Y') : '' }}</span></h6>
          <h2>{{ challenge.Title }}</h2>
          <img src={{ asset('http://localhost/img/'~challenge.PathIMG) }} alt=\"\" style=\"border-radius: 20px; max-width: 200px;\" height=200>
          <h6>{{ challenge.Description }}</h6>
          <span>Level : {{ challenge.Niveau }}</span>
          <div class=\"buttons\">
            <div class=\"main-button\">
              <a>Participate</a>
            </div>
            <div class=\"border-button\">
              <a href=\"create.html\">Show Participations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
  <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Apply For <em>Your Participation</em> Here.</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">

            <div class=\"row\" style=\"color:white; margin-top:20px\">
              <div class=\"col-lg-12\">
                <fieldset>
                  <label style=\"color:white;\" for={{form.Description.vars.id}}>Description</label>
                  <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\" type=\"title\" value=\"{{form.Description.vars.value}}\" name={{form.Description.vars.full_name}} id={{form.Description.vars.id}} placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                  {% do form.Description.setRendered %}
                </fieldset>
              </div>

              <div class=\"col-lg-4\" style=\"margin-top:20px\">
                <fieldset>
                  <label style=\"color:white;\" for={{form.Image.vars.id}}>Your Image</label>
                  <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\" type=\"file\" id={{form.Image.vars.id}} name={{form.Image.vars.full_name}} />
                  {% do form.Image.setRendered %}
                </fieldset>
              </div>

              <div class=\"col-lg-12\" style=\"margin-top:20px\">
                <fieldset style=\"display:flex; justify-content:center;\">
                  <button type=\"submit\" id=\"form\" class=\"orange-button\">Submit Your Applying</button>
                </fieldset>
              </div>
              
            </div>

        </div>
        {{ form_end(form) }}

         <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                  <h2>This Is The List Of <em>Participations</em></h2>  
                </div>              </div>
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
        {% for p in challenge.participations %}

                    {% set k = 0 %}      
                    {% for r in challenge.ratings %}
                      {% if r.getParticipatorId().getid_user() == p.getIdUser().getid_user() and r.getRaterId().getid_user() == 1 %}
                        {% set k = r.getRating() %}
                      {% endif %}
                    {% endfor %}

              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\">
                  <div class=\"left-img\">
                    <img src=\"{{ asset('http://localhost/img/'~p.getIMGParticipation()) }}\" alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <a href=\"#\">@{{ p.getIdUser().getName() }}</a>
                    <div class=\"line-dec\"></div>
                    <h6>Rating: <em>{{k|round}} Stars</em></h6>
                  </div>
                </div>
              </div>

        {%else%}
          <p> no Participation Yet </p>
        {%endfor%}
                          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      </div>
    </div>
  </div>

{% endblock %}
", "challenge/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\show.html.twig");
    }
}
