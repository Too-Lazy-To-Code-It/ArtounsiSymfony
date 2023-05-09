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
            'css' => [$this, 'block_css'],
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
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<style>
    html {
        scroll-behavior: smooth;
    }
      .winner-card {
        margin-bottom: 30px;
        padding: 20px;
        text-align: center;
        background-color: #7453FC;
        color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        display: inline-block;
        min-width: 250px;
      }
      .winner-card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }
      .winner-card-title {
        margin-bottom: 20px;
        font-size: 2rem;
        font-weight: bold;
      }
      .item-details-page p{
        margin-bottom: 5px;
      }
      .winner-picture {
        max-width: 200px;
        max-height: 200px;
        height: auto;
        margin-bottom: 20px;
        border-radius: 50%;
        border: 5px solid #FFFFFF;
      }
      .purple-text {
        color: #b6a9e6;
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 5px;
      }
      .rating {
        font-size: 1.5rem;
        color: #F5B041;
        font-weight: bold;
      }
      .page-title {
        text-align: center;
        font-size: 3rem;
        font-weight: bold;
        color: #7453FC;
        margin-top: 50px;
        margin-bottom: 50px;
        margin-top: 150px;
      } 
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "    
    <div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 73
            echo "      <div class=\"alert alert-warning\">
        ";
            // line 74
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</i>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 78
            echo "      <div class=\"alert alert-success\">
        ";
            // line 79
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "          <h6><span>";
        ((twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 82, $this->source); })()), "DateC", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 82, $this->source); })()), "DateC", [], "any", false, false, false, 82), "d M Y"), "html", null, true))) : (print ("")));
        echo "</span></h6>
          <h2>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 83, $this->source); })()), "Title", [], "any", false, false, false, 83), "html", null, true);
        echo "</h2>
          <img src=";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 84, $this->source); })()), "PathIMG", [], "any", false, false, false, 84))), "html", null, true);
        echo " alt=\"\" style=\"border-radius: 20px; max-width: 200px;\" height=200>
          <h6>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 85, $this->source); })()), "Description", [], "any", false, false, false, 85), "html", null, true);
        echo "</h6>
          <span>Level : ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 86, $this->source); })()), "Niveau", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
          <div class=\"buttons\">
            <div class=\"main-button\">
              <a href=\"#section1\">Participer</a>
            </div>
            <div class=\"border-button\">
              <a href=\"#section2\">Show Participations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
  <div class=\"item-details-page\" id=\"section1\">
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
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "Description", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        echo ">Description</label>
                  <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\" type=\"title\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Description", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
        echo "\" name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Description", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "full_name", [], "any", false, false, false, 116), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Description", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
        echo " placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                  ";
        // line 117
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "Description", [], "any", false, false, false, 117), "setRendered", [], "any", false, false, false, 117);
        // line 118
        echo "                </fieldset>
              </div>

              <div class=\"col-lg-4\" style=\"margin-top:20px\">
                <fieldset>
                  <label style=\"color:white;\" for=";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "Image", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123), "html", null, true);
        echo ">Your Image</label>
                  <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\" type=\"file\" id=";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "Image", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
        echo " name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "Image", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "full_name", [], "any", false, false, false, 124), "html", null, true);
        echo " />
                  ";
        // line 125
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "Image", [], "any", false, false, false, 125), "setRendered", [], "any", false, false, false, 125);
        // line 126
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
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_end');
        echo "

        ";
        // line 140
        if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 140, $this->source); })())) > 0)) {
            // line 141
            echo "        
        <h1 class=\"page-title\">Challenge Best</h1>
        <div class=\"winner-container container\">
          <div class=\"row justify-content-center\">
            
            <div class=\"col-md-4\">
              <div class=\"winner-card\">
                <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 148, $this->source); })()), 0, [], "array", false, false, false, 148), "id_participation", [], "any", false, false, false, 148)]), "html", null, true);
            echo "\"><img class=\"winner-picture\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 148, $this->source); })()), 0, [], "array", false, false, false, 148), "img_participation", [], "any", false, false, false, 148))), "html", null, true);
            echo "\" alt=\"John Smith\"></a>
                <h3 class=\"winner-card-title\">First Place</h3>
                <p class=\"purple-text\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 150, $this->source); })()), 0, [], "array", false, false, false, 150), "name", [], "any", false, false, false, 150), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 150, $this->source); })()), 0, [], "array", false, false, false, 150), "Last_Name", [], "any", false, false, false, 150), "html", null, true);
            echo "</p>
                <p>Rating: <span class=\"rating\">";
            // line 151
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 151, $this->source); })()), 0, [], "array", false, false, false, 151), "average", [], "any", false, false, false, 151), 1), "html", null, true);
            echo "</span></p>
                ";
            // line 152
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 152, $this->source); })()), 0, [], "array", false, false, false, 152), "numberRaters", [], "any", false, false, false, 152) != 0)) {
                // line 153
                echo "                <p>Raters: <span class=\"rating\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 153, $this->source); })()), 0, [], "array", false, false, false, 153), "numberRaters", [], "any", false, false, false, 153), "html", null, true);
                echo "</span></p>
                ";
            }
            // line 155
            echo "              </div>
            </div>
            ";
            // line 157
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 157, $this->source); })())) > 1)) {
                // line 158
                echo "
            <div class=\"col-md-4\">
              <div class=\"winner-card\">
                <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 161, $this->source); })()), 1, [], "array", false, false, false, 161), "id_participation", [], "any", false, false, false, 161)]), "html", null, true);
                echo "\"><img class=\"winner-picture\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 161, $this->source); })()), 1, [], "array", false, false, false, 161), "img_participation", [], "any", false, false, false, 161))), "html", null, true);
                echo "\" alt=\"Jane Doe\"></a>
                <h3 class=\"winner-card-title\">Second Place</h3>
                <p class=\"purple-text\">";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 163, $this->source); })()), 1, [], "array", false, false, false, 163), "name", [], "any", false, false, false, 163), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 163, $this->source); })()), 1, [], "array", false, false, false, 163), "Last_Name", [], "any", false, false, false, 163), "html", null, true);
                echo "</p>
                <p>Rating: <span class=\"rating\">";
                // line 164
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 164, $this->source); })()), 1, [], "array", false, false, false, 164), "average", [], "any", false, false, false, 164), 1), "html", null, true);
                echo "</span></p>
                ";
                // line 165
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 165, $this->source); })()), 1, [], "array", false, false, false, 165), "numberRaters", [], "any", false, false, false, 165) != 0)) {
                    // line 166
                    echo "                <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 166, $this->source); })()), 1, [], "array", false, false, false, 166), "numberRaters", [], "any", false, false, false, 166), "html", null, true);
                    echo "</span></p>
                ";
                }
                // line 168
                echo "              </div>
            </div>
            ";
            }
            // line 171
            echo "
        ";
            // line 172
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 172, $this->source); })())) > 2)) {
                // line 173
                echo "            <div class=\"col-md-4\">
              <div class=\"winner-card\">
                <a href=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 175, $this->source); })()), 2, [], "array", false, false, false, 175), "id_participation", [], "any", false, false, false, 175)]), "html", null, true);
                echo "\"><img class=\"winner-picture\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 175, $this->source); })()), 2, [], "array", false, false, false, 175), "img_participation", [], "any", false, false, false, 175))), "html", null, true);
                echo "\" alt=\"Bob Johnson\"></a>
                <h3 class=\"winner-card-title\">Third Place</h3>
                <p class=\"purple-text\">";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 177, $this->source); })()), 2, [], "array", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 177, $this->source); })()), 2, [], "array", false, false, false, 177), "Last_Name", [], "any", false, false, false, 177), "html", null, true);
                echo "</p>
                <p>Rating: <span class=\"rating\">";
                // line 178
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 178, $this->source); })()), 2, [], "array", false, false, false, 178), "average", [], "any", false, false, false, 178), 1), "html", null, true);
                echo "</span></p>
                ";
                // line 179
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 179, $this->source); })()), 2, [], "array", false, false, false, 179), "numberRaters", [], "any", false, false, false, 179) != 0)) {
                    // line 180
                    echo "                <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 180, $this->source); })()), 2, [], "array", false, false, false, 180), "numberRaters", [], "any", false, false, false, 180), "html", null, true);
                    echo "</span></p>
                ";
                }
                // line 182
                echo "              </div>
            </div>
            ";
            }
            // line 185
            echo "          </div>
        </div>
        ";
        }
        // line 188
        echo "
         <div class=\"col-lg-12\" id=\"section2\">
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
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 207, $this->source); })()), "participations", [], "any", false, false, false, 207));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 208
            echo "
                    ";
            // line 209
            $context["k"] = 0;
            // line 210
            echo "                    ";
            $context["n"] = 0;
            echo "     
                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 211, $this->source); })()), "ratings", [], "any", false, false, false, 211));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 212
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getParticipatorId", [], "method", false, false, false, 212), "getid_user", [], "method", false, false, false, 212) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "any", false, false, false, 212), "getid_user", [], "method", false, false, false, 212))) {
                    // line 213
                    echo "                      
                        ";
                    // line 214
                    $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 214, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "getRating", [], "method", false, false, false, 214));
                    // line 215
                    echo "                        ";
                    $context["n"] = ((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 215, $this->source); })()) + 1);
                    // line 216
                    echo "                      ";
                }
                // line 217
                echo "                      
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                    ";
            if (((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 219, $this->source); })()) != 0)) {
                // line 220
                echo "                      ";
                $context["m"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 220, $this->source); })()) / (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 220, $this->source); })()));
                // line 221
                echo "                    ";
            } else {
                // line 222
                echo "                      ";
                $context["m"] = 0;
                // line 223
                echo "                    ";
            }
            // line 224
            echo "
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\">
                  <div class=\"left-img\">
                    <img src=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 228))), "html", null, true);
            echo "\" alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h6>";
            // line 231
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 231), "getName", [], "method", false, false, false, 231)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 231), "getLastName", [], "method", false, false, false, 231)), "html", null, true);
            echo "</h6>
                    <a href=\"#\">@";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 232), "getEmail", [], "method", false, false, false, 232), "html", null, true);
            echo "</a>
                    <div class=\"line-dec\"></div>
                    ";
            // line 234
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 234, $this->source); })()) != 0)) {
                // line 235
                echo "                      <h6>Rating: <em>";
                echo twig_escape_filter($this->env, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 235, $this->source); })()), "html", null, true);
                echo " Stars</em></h6>
                    ";
            } else {
                // line 237
                echo "                      <h6><em>not rated</em> yet</h6>
                    ";
            }
            // line 239
            echo "
                    ";
            // line 240
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 240, $this->source); })()) != 0)) {
                // line 241
                echo "                      <h6>Raters: <em> ";
                echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 241, $this->source); })()), "html", null, true);
                echo " </em></h6>
                    ";
            }
            // line 243
            echo "
                    <a class=\"border-button\" href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 244)]), "html", null, true);
            echo "\"> Show </a>
                  </div>
                </div>
              </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 250
            echo "          <p> no Participation Yet </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
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
        return array (  575 => 252,  568 => 250,  557 => 244,  554 => 243,  548 => 241,  546 => 240,  543 => 239,  539 => 237,  533 => 235,  531 => 234,  526 => 232,  520 => 231,  514 => 228,  508 => 224,  505 => 223,  502 => 222,  499 => 221,  496 => 220,  493 => 219,  486 => 217,  483 => 216,  480 => 215,  478 => 214,  475 => 213,  472 => 212,  468 => 211,  463 => 210,  461 => 209,  458 => 208,  453 => 207,  432 => 188,  427 => 185,  422 => 182,  416 => 180,  414 => 179,  410 => 178,  404 => 177,  397 => 175,  393 => 173,  391 => 172,  388 => 171,  383 => 168,  377 => 166,  375 => 165,  371 => 164,  365 => 163,  358 => 161,  353 => 158,  351 => 157,  347 => 155,  341 => 153,  339 => 152,  335 => 151,  329 => 150,  322 => 148,  313 => 141,  311 => 140,  306 => 138,  292 => 126,  290 => 125,  284 => 124,  280 => 123,  273 => 118,  271 => 117,  263 => 116,  259 => 115,  241 => 100,  224 => 86,  220 => 85,  216 => 84,  212 => 83,  207 => 82,  198 => 79,  195 => 78,  190 => 77,  181 => 74,  178 => 73,  174 => 72,  167 => 67,  157 => 66,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Challenge{% endblock %}

{% block css %}
{{ parent() }}
<style>
    html {
        scroll-behavior: smooth;
    }
      .winner-card {
        margin-bottom: 30px;
        padding: 20px;
        text-align: center;
        background-color: #7453FC;
        color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        display: inline-block;
        min-width: 250px;
      }
      .winner-card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }
      .winner-card-title {
        margin-bottom: 20px;
        font-size: 2rem;
        font-weight: bold;
      }
      .item-details-page p{
        margin-bottom: 5px;
      }
      .winner-picture {
        max-width: 200px;
        max-height: 200px;
        height: auto;
        margin-bottom: 20px;
        border-radius: 50%;
        border: 5px solid #FFFFFF;
      }
      .purple-text {
        color: #b6a9e6;
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 5px;
      }
      .rating {
        font-size: 1.5rem;
        color: #F5B041;
        font-weight: bold;
      }
      .page-title {
        text-align: center;
        font-size: 3rem;
        font-weight: bold;
        color: #7453FC;
        margin-top: 50px;
        margin-bottom: 50px;
        margin-top: 150px;
      } 
</style>
{% endblock %}


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
              <a href=\"#section1\">Participer</a>
            </div>
            <div class=\"border-button\">
              <a href=\"#section2\">Show Participations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
  <div class=\"item-details-page\" id=\"section1\">
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

        {% if(best|length>0) %}
        
        <h1 class=\"page-title\">Challenge Best</h1>
        <div class=\"winner-container container\">
          <div class=\"row justify-content-center\">
            
            <div class=\"col-md-4\">
              <div class=\"winner-card\">
                <a href=\"{{path('app_participation_show',{'id_participation': best[0].id_participation })}}\"><img class=\"winner-picture\" src=\"{{ asset('http://localhost/img/'~best[0].img_participation) }}\" alt=\"John Smith\"></a>
                <h3 class=\"winner-card-title\">First Place</h3>
                <p class=\"purple-text\">{{ best[0].name }} {{ best[0].Last_Name }}</p>
                <p>Rating: <span class=\"rating\">{{best[0].average|round(1)}}</span></p>
                {% if best[0].numberRaters!=0 %}
                <p>Raters: <span class=\"rating\">{{best[0].numberRaters}}</span></p>
                {% endif %}
              </div>
            </div>
            {% if(best|length>1) %}

            <div class=\"col-md-4\">
              <div class=\"winner-card\">
                <a href=\"{{path('app_participation_show',{'id_participation': best[1].id_participation })}}\"><img class=\"winner-picture\" src=\"{{ asset('http://localhost/img/'~best[1].img_participation) }}\" alt=\"Jane Doe\"></a>
                <h3 class=\"winner-card-title\">Second Place</h3>
                <p class=\"purple-text\">{{ best[1].name }} {{ best[1].Last_Name }}</p>
                <p>Rating: <span class=\"rating\">{{best[1].average|round(1)}}</span></p>
                {% if best[1].numberRaters!=0 %}
                <p>Raters: <span class=\"rating\">{{best[1].numberRaters}}</span></p>
                {% endif %}
              </div>
            </div>
            {% endif %}

        {% if(best|length>2) %}
            <div class=\"col-md-4\">
              <div class=\"winner-card\">
                <a href=\"{{path('app_participation_show',{'id_participation': best[2].id_participation })}}\"><img class=\"winner-picture\" src=\"{{ asset('http://localhost/img/'~best[2].img_participation) }}\" alt=\"Bob Johnson\"></a>
                <h3 class=\"winner-card-title\">Third Place</h3>
                <p class=\"purple-text\">{{ best[2].name }} {{ best[2].Last_Name }}</p>
                <p>Rating: <span class=\"rating\">{{best[2].average|round(1)}}</span></p>
                {% if best[2].numberRaters!=0 %}
                <p>Raters: <span class=\"rating\">{{best[2].numberRaters}}</span></p>
                {% endif %}
              </div>
            </div>
            {% endif %}
          </div>
        </div>
        {% endif %}

         <div class=\"col-lg-12\" id=\"section2\">
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
                    {% set n = 0 %}     
                    {% for r in challenge.ratings %}
                      {% if(r.getParticipatorId().getid_user() == p.getIdUser.getid_user() ) %}
                      
                        {% set k = k + r.getRating() %}
                        {% set n = n+1 %}
                      {% endif %}
                      
                    {% endfor %}
                    {% if n!=0 %}
                      {% set m = k/n %}
                    {% else %}
                      {% set m = 0 %}
                    {% endif %}

              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\">
                  <div class=\"left-img\">
                    <img src=\"{{ asset('http://localhost/img/'~p.getIMGParticipation()) }}\" alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h6>{{ p.getIdUser().getName()|capitalize }} {{ p.getIdUser().getLastName()|capitalize }}</h6>
                    <a href=\"#\">@{{ p.getIdUser().getEmail() }}</a>
                    <div class=\"line-dec\"></div>
                    {% if k!=0 %}
                      <h6>Rating: <em>{{m}} Stars</em></h6>
                    {% else %}
                      <h6><em>not rated</em> yet</h6>
                    {% endif %}

                    {% if k!=0 %}
                      <h6>Raters: <em> {{n}} </em></h6>
                    {% endif %}

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
