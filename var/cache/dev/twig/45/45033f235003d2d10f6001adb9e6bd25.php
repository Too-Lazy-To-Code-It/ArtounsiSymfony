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
        echo "    
    <div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "      <div class=\"alert alert-warning\">
        ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</i>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "      <div class=\"alert alert-success\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "          <h6><span>";
        ((twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 21, $this->source); })()), "DateC", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 21, $this->source); })()), "DateC", [], "any", false, false, false, 21), "d M Y"), "html", null, true))) : (print ("")));
        echo "</span></h6>
          <h2>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 22, $this->source); })()), "Title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h2>
          <img src=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 23, $this->source); })()), "PathIMG", [], "any", false, false, false, 23))), "html", null, true);
        echo " alt=\"\" style=\"border-radius: 20px; max-width: 200px;\" height=200>
          <h6>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 24, $this->source); })()), "Description", [], "any", false, false, false, 24), "html", null, true);
        echo "</h6>
          <span>Level : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 25, $this->source); })()), "Niveau", [], "any", false, false, false, 25), "html", null, true);
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
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Description", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo ">Description</label>
                  <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\" type=\"title\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Description", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "html", null, true);
        echo "\" name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Description", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "full_name", [], "any", false, false, false, 55), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Description", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        echo " placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                  ";
        // line 56
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "Description", [], "any", false, false, false, 56), "setRendered", [], "any", false, false, false, 56);
        // line 57
        echo "                </fieldset>
              </div>

              <div class=\"col-lg-4\" style=\"margin-top:20px\">
                <fieldset>
                  <label style=\"color:white;\" for=";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Image", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo ">Your Image</label>
                  <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\" type=\"file\" id=";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Image", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        echo " name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Image", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "full_name", [], "any", false, false, false, 63), "html", null, true);
        echo " />
                  ";
        // line 64
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "Image", [], "any", false, false, false, 64), "setRendered", [], "any", false, false, false, 64);
        // line 65
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
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 96, $this->source); })()), "participations", [], "any", false, false, false, 96));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 97
            echo "
                    ";
            // line 98
            $context["k"] = 0;
            echo "      
                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 99, $this->source); })()), "ratings", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 100
                echo "                      ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getParticipatorId", [], "method", false, false, false, 100), "getid_user", [], "method", false, false, false, 100) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 100), "getid_user", [], "method", false, false, false, 100)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRaterId", [], "method", false, false, false, 100), "getid_user", [], "method", false, false, false, 100) == 1))) {
                    // line 101
                    echo "                        ";
                    $context["k"] = twig_get_attribute($this->env, $this->source, $context["r"], "getRating", [], "method", false, false, false, 101);
                    // line 102
                    echo "                      ";
                }
                // line 103
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\">
                  <div class=\"left-img\">
                    <img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 108))), "html", null, true);
            echo "\" alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h6>";
            // line 111
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 111), "getName", [], "method", false, false, false, 111)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 111), "getLastName", [], "method", false, false, false, 111)), "html", null, true);
            echo "</h6>
                    <a href=\"#\">@";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 112), "getEmail", [], "method", false, false, false, 112), "html", null, true);
            echo "</a>
                    <div class=\"line-dec\"></div>
                    <h6>Rating: <em>";
            // line 114
            echo twig_escape_filter($this->env, twig_round((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 114, $this->source); })())), "html", null, true);
            echo " Stars</em></h6>
                    <a class=\"border-button\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 115)]), "html", null, true);
            echo "\"> Show </a>
                  </div>
                </div>
              </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "          <p> no Participation Yet </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
        return array (  325 => 123,  318 => 121,  307 => 115,  303 => 114,  298 => 112,  292 => 111,  286 => 108,  280 => 104,  274 => 103,  271 => 102,  268 => 101,  265 => 100,  261 => 99,  257 => 98,  254 => 97,  249 => 96,  227 => 77,  213 => 65,  211 => 64,  205 => 63,  201 => 62,  194 => 57,  192 => 56,  184 => 55,  180 => 54,  162 => 39,  145 => 25,  141 => 24,  137 => 23,  133 => 22,  128 => 21,  119 => 18,  116 => 17,  111 => 16,  102 => 13,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    {%for message in app.flashes('warning')%}
      <div class=\"alert alert-warning\">
        {{ message }}</i>
      </div>
    {% endfor %}
    {%for message in app.flashes('success')%}
      <div class=\"alert alert-success\">
        {{ message }}
      </div>
    {% endfor %}
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
                    <h6>{{ p.getIdUser().getName()|capitalize }} {{ p.getIdUser().getLastName()|capitalize }}</h6>
                    <a href=\"#\">@{{ p.getIdUser().getEmail() }}</a>
                    <div class=\"line-dec\"></div>
                    <h6>Rating: <em>{{k|round}} Stars</em></h6>
                    <a class=\"border-button\" href=\"{{path('app_participation_show',{'id_participation': p.getId() })}}\"> Show </a>
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
