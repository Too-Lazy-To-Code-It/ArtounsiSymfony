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
class __TwigTemplate_fd7676b21cc9623d239206cd17edbaed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/show.html.twig"));

        // line 2
        echo "  ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 74
        echo "

";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


      <!-- Additional CSS Files -->
      <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
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

    // line 15
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 16
        echo "    ";
        // line 17
        echo "    <style>
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

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "
    <div class=\"page-heading normal-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 83
            echo "                        <div class=\"alert alert-warning\">
                            ";
            // line 84
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 89
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    <h6><span>";
        ((twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 92, $this->source); })()), "DateC", [], "any", false, false, false, 92)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 92, $this->source); })()), "DateC", [], "any", false, false, false, 92), "d M Y"), "html", null, true))) : (print ("")));
        echo "</span></h6>
                    <h2>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 93, $this->source); })()), "Title", [], "any", false, false, false, 93), "html", null, true);
        echo "</h2>
                    <img src=";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 94, $this->source); })()), "PathIMG", [], "any", false, false, false, 94))), "html", null, true);
        echo " alt=\"\" style=\"border-radius: 20px; max-width: 200px;\" height=200>
                    <h6>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 95, $this->source); })()), "Description", [], "any", false, false, false, 95), "html", null, true);
        echo "</h6>
                    <span>Level : ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 96, $this->source); })()), "Niveau", [], "any", false, false, false, 96), "html", null, true);
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
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "Description", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125), "html", null, true);
        echo ">Description</label>
                                <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\" type=\"title\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "Description", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "value", [], "any", false, false, false, 126), "html", null, true);
        echo "\" name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "Description", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "full_name", [], "any", false, false, false, 126), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "Description", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126), "html", null, true);
        echo " placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                                ";
        // line 127
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "Description", [], "any", false, false, false, 127), "setRendered", [], "any", false, false, false, 127);
        // line 128
        echo "                            </fieldset>
                        </div>

                        <div class=\"col-lg-4\" style=\"margin-top:20px\">
                            <fieldset>
                                <label style=\"color:white;\" for=";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "Image", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133), "html", null, true);
        echo ">Your Image</label>
                                <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\" type=\"file\" id=";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "Image", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134), "html", null, true);
        echo " name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "Image", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "full_name", [], "any", false, false, false, 134), "html", null, true);
        echo " />
                                ";
        // line 135
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "Image", [], "any", false, false, false, 135), "setRendered", [], "any", false, false, false, 135);
        // line 136
        echo "                            </fieldset>
                        </div>

                        <div class=\"col-lg-12\" style=\"margin-top:20px\">
                            <fieldset style=\"display:flex; justify-content:center;\">
                                <button type=\"submit\" id=\"form\" class=\"orange-button\">Submit Your Applying</button>
                            </fieldset>
                        </div>

                    </div>

                </div>
                ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), 'form_end');
        echo "

                ";
        // line 150
        if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 150, $this->source); })())) > 0)) {
            // line 151
            echo "
                    <h1 class=\"page-title\">Challenge Best</h1>
                    <div class=\"winner-container container\">
                        <div class=\"row justify-content-center\">

                            <div class=\"col-md-4\">
                                <div class=\"winner-card\">
                                    <a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 158, $this->source); })()), 0, [], "array", false, false, false, 158), "id_participation", [], "any", false, false, false, 158)]), "html", null, true);
            echo "\"><img class=\"winner-picture\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 158, $this->source); })()), 0, [], "array", false, false, false, 158), "img_participation", [], "any", false, false, false, 158))), "html", null, true);
            echo "\" alt=\"John Smith\"></a>
                                    <h3 class=\"winner-card-title\">First Place</h3>
                                    <p class=\"purple-text\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 160, $this->source); })()), 0, [], "array", false, false, false, 160), "name", [], "any", false, false, false, 160), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 160, $this->source); })()), 0, [], "array", false, false, false, 160), "Last_Name", [], "any", false, false, false, 160), "html", null, true);
            echo "</p>
                                    <p>Rating: <span class=\"rating\">";
            // line 161
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 161, $this->source); })()), 0, [], "array", false, false, false, 161), "average", [], "any", false, false, false, 161), 1), "html", null, true);
            echo "</span></p>
                                    ";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 162, $this->source); })()), 0, [], "array", false, false, false, 162), "numberRaters", [], "any", false, false, false, 162) != 0)) {
                // line 163
                echo "                                        <p>Raters: <span class=\"rating\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 163, $this->source); })()), 0, [], "array", false, false, false, 163), "numberRaters", [], "any", false, false, false, 163), "html", null, true);
                echo "</span></p>
                                    ";
            }
            // line 165
            echo "                                </div>
                            </div>
                            ";
            // line 167
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 167, $this->source); })())) > 1)) {
                // line 168
                echo "
                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 171, $this->source); })()), 1, [], "array", false, false, false, 171), "id_participation", [], "any", false, false, false, 171)]), "html", null, true);
                echo "\"><img class=\"winner-picture\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 171, $this->source); })()), 1, [], "array", false, false, false, 171), "img_participation", [], "any", false, false, false, 171))), "html", null, true);
                echo "\" alt=\"Jane Doe\"></a>
                                        <h3 class=\"winner-card-title\">Second Place</h3>
                                        <p class=\"purple-text\">";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 173, $this->source); })()), 1, [], "array", false, false, false, 173), "name", [], "any", false, false, false, 173), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 173, $this->source); })()), 1, [], "array", false, false, false, 173), "Last_Name", [], "any", false, false, false, 173), "html", null, true);
                echo "</p>
                                        <p>Rating: <span class=\"rating\">";
                // line 174
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 174, $this->source); })()), 1, [], "array", false, false, false, 174), "average", [], "any", false, false, false, 174), 1), "html", null, true);
                echo "</span></p>
                                        ";
                // line 175
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 175, $this->source); })()), 1, [], "array", false, false, false, 175), "numberRaters", [], "any", false, false, false, 175) != 0)) {
                    // line 176
                    echo "                                            <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 176, $this->source); })()), 1, [], "array", false, false, false, 176), "numberRaters", [], "any", false, false, false, 176), "html", null, true);
                    echo "</span></p>
                                        ";
                }
                // line 178
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 181
            echo "
                            ";
            // line 182
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 182, $this->source); })())) > 2)) {
                // line 183
                echo "                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 185, $this->source); })()), 2, [], "array", false, false, false, 185), "id_participation", [], "any", false, false, false, 185)]), "html", null, true);
                echo "\"><img class=\"winner-picture\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 185, $this->source); })()), 2, [], "array", false, false, false, 185), "img_participation", [], "any", false, false, false, 185))), "html", null, true);
                echo "\" alt=\"Bob Johnson\"></a>
                                        <h3 class=\"winner-card-title\">Third Place</h3>
                                        <p class=\"purple-text\">";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 187, $this->source); })()), 2, [], "array", false, false, false, 187), "name", [], "any", false, false, false, 187), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 187, $this->source); })()), 2, [], "array", false, false, false, 187), "Last_Name", [], "any", false, false, false, 187), "html", null, true);
                echo "</p>
                                        <p>Rating: <span class=\"rating\">";
                // line 188
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 188, $this->source); })()), 2, [], "array", false, false, false, 188), "average", [], "any", false, false, false, 188), 1), "html", null, true);
                echo "</span></p>
                                        ";
                // line 189
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 189, $this->source); })()), 2, [], "array", false, false, false, 189), "numberRaters", [], "any", false, false, false, 189) != 0)) {
                    // line 190
                    echo "                                            <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 190, $this->source); })()), 2, [], "array", false, false, false, 190), "numberRaters", [], "any", false, false, false, 190), "html", null, true);
                    echo "</span></p>
                                        ";
                }
                // line 192
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 195
            echo "                        </div>
                    </div>
                ";
        }
        // line 198
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
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 217, $this->source); })()), "participations", [], "any", false, false, false, 217));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 218
            echo "
                                ";
            // line 219
            $context["k"] = 0;
            // line 220
            echo "                                ";
            $context["n"] = 0;
            // line 221
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 221, $this->source); })()), "ratings", [], "any", false, false, false, 221));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 222
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getParticipatorId", [], "method", false, false, false, 222), "getid_user", [], "method", false, false, false, 222) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "any", false, false, false, 222), "getid_user", [], "method", false, false, false, 222))) {
                    // line 223
                    echo "
                                        ";
                    // line 224
                    $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 224, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "getRating", [], "method", false, false, false, 224));
                    // line 225
                    echo "                                        ";
                    $context["n"] = ((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 225, $this->source); })()) + 1);
                    // line 226
                    echo "                                    ";
                }
                // line 227
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "                                ";
            if (((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 229, $this->source); })()) != 0)) {
                // line 230
                echo "                                    ";
                $context["m"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 230, $this->source); })()) / (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 230, $this->source); })()));
                // line 231
                echo "                                ";
            } else {
                // line 232
                echo "                                    ";
                $context["m"] = 0;
                // line 233
                echo "                                ";
            }
            // line 234
            echo "
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"item\">
                                        <div class=\"left-img\">
                                            <img src=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 238))), "html", null, true);
            echo "\" alt=\"\">
                                        </div>
                                        <div class=\"right-content\">
                                            <h6>";
            // line 241
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 241), "getName", [], "method", false, false, false, 241)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 241), "getLastName", [], "method", false, false, false, 241)), "html", null, true);
            echo "</h6>
                                            <a href=\"#\">@";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 242), "getEmail", [], "method", false, false, false, 242), "html", null, true);
            echo "</a>
                                            <div class=\"line-dec\"></div>
                                            ";
            // line 244
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 244, $this->source); })()) != 0)) {
                // line 245
                echo "                                                <h6>Rating: <em>";
                echo twig_escape_filter($this->env, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 245, $this->source); })()), "html", null, true);
                echo " Stars</em></h6>
                                            ";
            } else {
                // line 247
                echo "                                                <h6><em>not rated</em> yet</h6>
                                            ";
            }
            // line 249
            echo "
                                            ";
            // line 250
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 250, $this->source); })()) != 0)) {
                // line 251
                echo "                                                <h6>Raters: <em> ";
                echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 251, $this->source); })()), "html", null, true);
                echo " </em></h6>
                                            ";
            }
            // line 253
            echo "
                                            <a class=\"border-button\" href=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 254)]), "html", null, true);
            echo "\"> Show </a>
                                        </div>
                                    </div>
                                </div>

                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 260
            echo "                                <p> no Participation Yet </p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                        </div>
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
        // line 275
        $this->displayBlock('javascripts', $context, $blocks);
        // line 297
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 275
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 276
        echo "        ";
        // line 277
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 280
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 283
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 286
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 289
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 292
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 295
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  705 => 295,  699 => 292,  693 => 289,  687 => 286,  681 => 283,  675 => 280,  669 => 277,  667 => 276,  657 => 275,  646 => 297,  644 => 275,  629 => 262,  622 => 260,  611 => 254,  608 => 253,  602 => 251,  600 => 250,  597 => 249,  593 => 247,  587 => 245,  585 => 244,  580 => 242,  574 => 241,  568 => 238,  562 => 234,  559 => 233,  556 => 232,  553 => 231,  550 => 230,  547 => 229,  540 => 227,  537 => 226,  534 => 225,  532 => 224,  529 => 223,  526 => 222,  521 => 221,  518 => 220,  516 => 219,  513 => 218,  508 => 217,  487 => 198,  482 => 195,  477 => 192,  471 => 190,  469 => 189,  465 => 188,  459 => 187,  452 => 185,  448 => 183,  446 => 182,  443 => 181,  438 => 178,  432 => 176,  430 => 175,  426 => 174,  420 => 173,  413 => 171,  408 => 168,  406 => 167,  402 => 165,  396 => 163,  394 => 162,  390 => 161,  384 => 160,  377 => 158,  368 => 151,  366 => 150,  361 => 148,  347 => 136,  345 => 135,  339 => 134,  335 => 133,  328 => 128,  326 => 127,  318 => 126,  314 => 125,  296 => 110,  279 => 96,  275 => 95,  271 => 94,  267 => 93,  262 => 92,  253 => 89,  250 => 88,  245 => 87,  236 => 84,  233 => 83,  229 => 82,  222 => 77,  212 => 76,  146 => 17,  144 => 16,  134 => 15,  115 => 13,  102 => 10,  98 => 9,  94 => 8,  90 => 7,  82 => 3,  72 => 2,  62 => 76,  58 => 74,  56 => 15,  53 => 14,  51 => 13,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#  {% extends 'base.html.twig' %}#}
  {% block stylesheet %}
      <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">


      <!-- Additional CSS Files -->
      <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
      <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
      <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
  {% endblock %}
{% block title %}Challenge{% endblock %}

{% block css %}
    {# {{ parent() }} #}
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
    {% block javascripts %}
        {# <script src=\"vendor/jquery/jquery.min.js\"></script> #}
        <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>

        {# <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script> #}
        <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

        {# <script src=\"assets/js/isotope.min.js\"></script> #}
        <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>

        {# <script src=\"assets/js/owl-carousel.js\"></script> #}
        <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>

        {# <script src=\"assets/js/tabs.js\"></script> #}
        <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>

        {# <script src=\"assets/js/popup.js\"></script> #}
        <script src=\"{{ asset('assets/js/popup.js') }}\"></script>

        {# <script src=\"assets/js/custom.js\"></script>  #}
        <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
    {% endblock %}

{% endblock %}", "challenge/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\challenge\\show.html.twig");
    }
}
