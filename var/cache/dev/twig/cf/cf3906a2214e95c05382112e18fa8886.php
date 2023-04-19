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
class __TwigTemplate_415e746c50b408b719376ce5cefc6a12 extends Template
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
                  <p/>
                  <button type=\"submit\" id=\"form\" class=\"orange-button\">Submit Your Applying</button>
                </fieldset>
              </div>
              
            </div>

        </div>
        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "

        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>This Is The List Of <em>Participations</em></h2>  
          </div>
        </div>

        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 76, $this->source); })()), "participations", [], "any", false, false, false, 76));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 77
            echo "          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src=";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 79))), "html", null, true);
            echo " alt=\"\" style=\"border-radius: 20px; max-height:70%; padding-top:20px;\">
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
          </div>          
          <div class=\"col-lg-5 align-self-center\">
            <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6> ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 85), "getName", [], "method", false, false, false, 85), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 85), "getLastName", [], "method", false, false, false, 85), "html", null, true);
            echo " <br><a href=\"/\"> @";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 85), "getNickname", [], "method", false, false, false, 85), "html", null, true);
            echo "</a></h6>
            </span>
            <p>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getDescription", [], "method", false, false, false, 87), "html", null, true);
            echo "</p>
            <div class=\"row\">
              <div class=\"col-4\">
                <span class=\"bid\">
                  Current Rate<br><strong>4 Stars</strong><br>
                </span>
              </div>
              <div class=\"col-8\">
                <span class=\"bid\">
                  
                ";
            // line 97
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formrating"]) || array_key_exists("formrating", $context) ? $context["formrating"] : (function () { throw new RuntimeError('Variable "formrating" does not exist.', 97, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
                    <div class=\"rating\" role=\"optgroup\">
                        <!-- in Rails just use 1.upto(5) -->
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-1\" data-rating=\"1\" tabindex=\"0\"
                          aria-label=\"Rate as one out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-2\" data-rating=\"2\" tabindex=\"0\"
                          aria-label=\"Rate as two out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-3\" data-rating=\"3\" tabindex=\"0\"
                          aria-label=\"Rate as three out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-4\" data-rating=\"4\" tabindex=\"0\"
                          aria-label=\"Rate as four out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-5\" data-rating=\"5\" tabindex=\"0\"
                          aria-label=\"Rate as five out of 5 stars\" role=\"radio\"></i>
                    </div>
                    <button type=\"submit\" class=\"btn btn-md btn-brand\">Rate</button>
                ";
            // line 112
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formrating"]) || array_key_exists("formrating", $context) ? $context["formrating"] : (function () { throw new RuntimeError('Variable "formrating" does not exist.', 112, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
              </div>
            </div>
          </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 117
            echo "          <p> no Participation Yet </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
      </div>
    </div>
  </div>

    <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126)]), "html", null, true);
        echo "\">edit</a>

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
        return array (  292 => 126,  287 => 124,  280 => 119,  273 => 117,  263 => 112,  245 => 97,  232 => 87,  223 => 85,  214 => 79,  210 => 77,  205 => 76,  193 => 67,  178 => 54,  176 => 53,  170 => 52,  166 => 51,  159 => 46,  157 => 45,  149 => 44,  145 => 43,  127 => 28,  110 => 14,  106 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                  <p/>
                  <button type=\"submit\" id=\"form\" class=\"orange-button\">Submit Your Applying</button>
                </fieldset>
              </div>
              
            </div>

        </div>
        {{ form_end(form) }}

        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>This Is The List Of <em>Participations</em></h2>  
          </div>
        </div>

        {% for p in challenge.participations %}
          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src={{ asset('http://localhost/img/'~p.getIMGParticipation()) }} alt=\"\" style=\"border-radius: 20px; max-height:70%; padding-top:20px;\">
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
          </div>          
          <div class=\"col-lg-5 align-self-center\">
            <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6> {{ p.getIdUser().getName() }} {{ p.getIdUser().getLastName() }} <br><a href=\"/\"> @{{ p.getIdUser().getNickname()}}</a></h6>
            </span>
            <p>{{ p.getDescription() }}</p>
            <div class=\"row\">
              <div class=\"col-4\">
                <span class=\"bid\">
                  Current Rate<br><strong>4 Stars</strong><br>
                </span>
              </div>
              <div class=\"col-8\">
                <span class=\"bid\">
                  
                {{ form_start(formrating,{ 'attr' : {'novalidate': 'novalidate'}} ) }}
                    <div class=\"rating\" role=\"optgroup\">
                        <!-- in Rails just use 1.upto(5) -->
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-1\" data-rating=\"1\" tabindex=\"0\"
                          aria-label=\"Rate as one out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-2\" data-rating=\"2\" tabindex=\"0\"
                          aria-label=\"Rate as two out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-3\" data-rating=\"3\" tabindex=\"0\"
                          aria-label=\"Rate as three out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-4\" data-rating=\"4\" tabindex=\"0\"
                          aria-label=\"Rate as four out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-5\" data-rating=\"5\" tabindex=\"0\"
                          aria-label=\"Rate as five out of 5 stars\" role=\"radio\"></i>
                    </div>
                    <button type=\"submit\" class=\"btn btn-md btn-brand\">Rate</button>
                {{ form_end(formrating, {'render_rest' : false}) }}
              </div>
            </div>
          </div>
        {%else%}
          <p> no Participation Yet </p>
        {%endfor%}

      </div>
    </div>
  </div>

    <a href=\"{{ path('app_challenge_index') }}\">back to list</a>

    <a href=\"{{ path('app_challenge_edit', {'id': challenge.id}) }}\">edit</a>

{% endblock %}
", "challenge/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\show.html.twig");
    }
}
