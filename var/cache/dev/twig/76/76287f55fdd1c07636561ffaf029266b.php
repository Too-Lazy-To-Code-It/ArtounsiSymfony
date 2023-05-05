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
        // line 82
        echo "

";
        // line 84
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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            display: inline-block;
            min-width: 250px;
        }

        .winner-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .winner-card-title {
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: bold;
        }

        .item-details-page p {
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

    // line 84
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "
    <div class=\"page-heading normal-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            echo "                        <div class=\"alert alert-warning\">
                            ";
            // line 92
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 96
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 97
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    <h6><span>";
        ((twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 100, $this->source); })()), "DateC", [], "any", false, false, false, 100)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 100, $this->source); })()), "DateC", [], "any", false, false, false, 100), "d M Y"), "html", null, true))) : (print ("")));
        echo "</span></h6>
                    <h2>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 101, $this->source); })()), "Title", [], "any", false, false, false, 101), "html", null, true);
        echo "</h2>
                    <img src=";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 102, $this->source); })()), "PathIMG", [], "any", false, false, false, 102))), "html", null, true);
        echo " alt=\"\"
                         style=\"border-radius: 20px; max-width: 200px;\" height=200>
                    <h6>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 104, $this->source); })()), "Description", [], "any", false, false, false, 104), "html", null, true);
        echo "</h6>
                    <span>Level : ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 105, $this->source); })()), "Niveau", [], "any", false, false, false, 105), "html", null, true);
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
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "Description", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134), "html", null, true);
        echo ">Description</label>
                                <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\"
                                       type=\"title\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "Description", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "value", [], "any", false, false, false, 136), "html", null, true);
        echo "\"
                                       name=";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "Description", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "full_name", [], "any", false, false, false, 137), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "Description", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137), "html", null, true);
        echo "
                                       placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                                ";
        // line 139
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "Description", [], "any", false, false, false, 139), "setRendered", [], "any", false, false, false, 139);
        // line 140
        echo "                            </fieldset>
                        </div>

                        <div class=\"col-lg-4\" style=\"margin-top:20px\">
                            <fieldset>
                                <label style=\"color:white;\" for=";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "Image", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "id", [], "any", false, false, false, 145), "html", null, true);
        echo ">Your Image</label>
                                <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\"
                                       type=\"file\" id=";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "Image", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "html", null, true);
        echo " name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "Image", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "full_name", [], "any", false, false, false, 147), "html", null, true);
        echo " />
                                ";
        // line 148
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "Image", [], "any", false, false, false, 148), "setRendered", [], "any", false, false, false, 148);
        // line 149
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
        // line 161
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), 'form_end');
        echo "

                ";
        // line 163
        if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 163, $this->source); })())) > 0)) {
            // line 164
            echo "
                    <h1 class=\"page-title\">Challenge Best</h1>
                    <div class=\"winner-container container\">
                        <div class=\"row justify-content-center\">

                            <div class=\"col-md-4\">
                                <div class=\"winner-card\">
                                    <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 171, $this->source); })()), 0, [], "array", false, false, false, 171), "id_participation", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\"><img
                                                class=\"winner-picture\"
                                                src=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 173, $this->source); })()), 0, [], "array", false, false, false, 173), "img_participation", [], "any", false, false, false, 173))), "html", null, true);
            echo "\"
                                                alt=\"John Smith\"></a>
                                    <h3 class=\"winner-card-title\">First Place</h3>
                                    <p class=\"purple-text\">";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 176, $this->source); })()), 0, [], "array", false, false, false, 176), "name", [], "any", false, false, false, 176), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 176, $this->source); })()), 0, [], "array", false, false, false, 176), "Last_Name", [], "any", false, false, false, 176), "html", null, true);
            echo "</p>
                                    <p>Rating: <span class=\"rating\">";
            // line 177
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 177, $this->source); })()), 0, [], "array", false, false, false, 177), "average", [], "any", false, false, false, 177), 1), "html", null, true);
            echo "</span></p>
                                    ";
            // line 178
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 178, $this->source); })()), 0, [], "array", false, false, false, 178), "numberRaters", [], "any", false, false, false, 178) != 0)) {
                // line 179
                echo "                                        <p>Raters: <span class=\"rating\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 179, $this->source); })()), 0, [], "array", false, false, false, 179), "numberRaters", [], "any", false, false, false, 179), "html", null, true);
                echo "</span></p>
                                    ";
            }
            // line 181
            echo "                                </div>
                            </div>
                            ";
            // line 183
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 183, $this->source); })())) > 1)) {
                // line 184
                echo "
                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 187, $this->source); })()), 1, [], "array", false, false, false, 187), "id_participation", [], "any", false, false, false, 187)]), "html", null, true);
                echo "\"><img
                                                    class=\"winner-picture\"
                                                    src=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 189, $this->source); })()), 1, [], "array", false, false, false, 189), "img_participation", [], "any", false, false, false, 189))), "html", null, true);
                echo "\"
                                                    alt=\"Jane Doe\"></a>
                                        <h3 class=\"winner-card-title\">Second Place</h3>
                                        <p class=\"purple-text\">";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 192, $this->source); })()), 1, [], "array", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 192, $this->source); })()), 1, [], "array", false, false, false, 192), "Last_Name", [], "any", false, false, false, 192), "html", null, true);
                echo "</p>
                                        <p>Rating: <span class=\"rating\">";
                // line 193
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 193, $this->source); })()), 1, [], "array", false, false, false, 193), "average", [], "any", false, false, false, 193), 1), "html", null, true);
                echo "</span></p>
                                        ";
                // line 194
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 194, $this->source); })()), 1, [], "array", false, false, false, 194), "numberRaters", [], "any", false, false, false, 194) != 0)) {
                    // line 195
                    echo "                                            <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 195, $this->source); })()), 1, [], "array", false, false, false, 195), "numberRaters", [], "any", false, false, false, 195), "html", null, true);
                    echo "</span></p>
                                        ";
                }
                // line 197
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 200
            echo "
                            ";
            // line 201
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 201, $this->source); })())) > 2)) {
                // line 202
                echo "                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 204, $this->source); })()), 2, [], "array", false, false, false, 204), "id_participation", [], "any", false, false, false, 204)]), "html", null, true);
                echo "\"><img
                                                    class=\"winner-picture\"
                                                    src=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 206, $this->source); })()), 2, [], "array", false, false, false, 206), "img_participation", [], "any", false, false, false, 206))), "html", null, true);
                echo "\"
                                                    alt=\"Bob Johnson\"></a>
                                        <h3 class=\"winner-card-title\">Third Place</h3>
                                        <p class=\"purple-text\">";
                // line 209
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 209, $this->source); })()), 2, [], "array", false, false, false, 209), "name", [], "any", false, false, false, 209), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 209, $this->source); })()), 2, [], "array", false, false, false, 209), "Last_Name", [], "any", false, false, false, 209), "html", null, true);
                echo "</p>
                                        <p>Rating: <span class=\"rating\">";
                // line 210
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 210, $this->source); })()), 2, [], "array", false, false, false, 210), "average", [], "any", false, false, false, 210), 1), "html", null, true);
                echo "</span></p>
                                        ";
                // line 211
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 211, $this->source); })()), 2, [], "array", false, false, false, 211), "numberRaters", [], "any", false, false, false, 211) != 0)) {
                    // line 212
                    echo "                                            <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 212, $this->source); })()), 2, [], "array", false, false, false, 212), "numberRaters", [], "any", false, false, false, 212), "html", null, true);
                    echo "</span></p>
                                        ";
                }
                // line 214
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 217
            echo "                        </div>
                    </div>
                ";
        }
        // line 220
        echo "
                <div class=\"col-lg-12\" id=\"section2\">
                    <div class=\"current-bid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"section-heading\">
                                    <h2>This Is The List Of <em>Participations</em></h2>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\" onchange=\"this.form.click()\">
                                        <option selected>Sort By: Latest</option>
                                        <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                                        <option value=\"low\">Sort By: Lowest</option>
                                        <option value=\"high\">Sort By: Highest</option>
                                    </select>
                                </fieldset>
                            </div>

                            ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 241, $this->source); })()), "participations", [], "any", false, false, false, 241));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 242
            echo "
                                ";
            // line 243
            $context["k"] = 0;
            // line 244
            echo "                                ";
            $context["n"] = 0;
            // line 245
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 245, $this->source); })()), "ratings", [], "any", false, false, false, 245));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 246
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getParticipatorId", [], "method", false, false, false, 246), "getid_user", [], "method", false, false, false, 246) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "any", false, false, false, 246), "getid_user", [], "method", false, false, false, 246))) {
                    // line 247
                    echo "
                                        ";
                    // line 248
                    $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 248, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "getRating", [], "method", false, false, false, 248));
                    // line 249
                    echo "                                        ";
                    $context["n"] = ((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 249, $this->source); })()) + 1);
                    // line 250
                    echo "                                    ";
                }
                // line 251
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                                ";
            if (((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 253, $this->source); })()) != 0)) {
                // line 254
                echo "                                    ";
                $context["m"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 254, $this->source); })()) / (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 254, $this->source); })()));
                // line 255
                echo "                                ";
            } else {
                // line 256
                echo "                                    ";
                $context["m"] = 0;
                // line 257
                echo "                                ";
            }
            // line 258
            echo "
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"item\">
                                        <div class=\"left-img\">
                                            <img src=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 262))), "html", null, true);
            echo "\"
                                                 alt=\"\">
                                        </div>
                                        <div class=\"right-content\">
                                            <h6>";
            // line 266
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 266), "getName", [], "method", false, false, false, 266)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 266), "getLastName", [], "method", false, false, false, 266)), "html", null, true);
            echo "</h6>
                                            <a href=\"#\">@";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 267), "getEmail", [], "method", false, false, false, 267), "html", null, true);
            echo "</a>
                                            <div class=\"line-dec\"></div>
                                            ";
            // line 269
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 269, $this->source); })()) != 0)) {
                // line 270
                echo "                                                <h6>Rating: <em>";
                echo twig_escape_filter($this->env, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 270, $this->source); })()), "html", null, true);
                echo " Stars</em></h6>
                                            ";
            } else {
                // line 272
                echo "                                                <h6><em>not rated</em> yet</h6>
                                            ";
            }
            // line 274
            echo "
                                            ";
            // line 275
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 275, $this->source); })()) != 0)) {
                // line 276
                echo "                                                <h6>Raters: <em> ";
                echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 276, $this->source); })()), "html", null, true);
                echo " </em></h6>
                                            ";
            }
            // line 278
            echo "
                                            <a class=\"border-button\"
                                               href=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 280)]), "html", null, true);
            echo "\">
                                                Show </a>
                                        </div>
                                    </div>
                                </div>

                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 287
            echo "                                <p> no Participation Yet </p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
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
        // line 302
        $this->displayBlock('javascripts', $context, $blocks);
        // line 324
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 302
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 303
        echo "        ";
        // line 304
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 307
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 310
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 313
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 316
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 319
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 322
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
        return array (  736 => 322,  730 => 319,  724 => 316,  718 => 313,  712 => 310,  706 => 307,  700 => 304,  698 => 303,  688 => 302,  677 => 324,  675 => 302,  660 => 289,  653 => 287,  641 => 280,  637 => 278,  631 => 276,  629 => 275,  626 => 274,  622 => 272,  616 => 270,  614 => 269,  609 => 267,  603 => 266,  596 => 262,  590 => 258,  587 => 257,  584 => 256,  581 => 255,  578 => 254,  575 => 253,  568 => 251,  565 => 250,  562 => 249,  560 => 248,  557 => 247,  554 => 246,  549 => 245,  546 => 244,  544 => 243,  541 => 242,  536 => 241,  513 => 220,  508 => 217,  503 => 214,  497 => 212,  495 => 211,  491 => 210,  485 => 209,  479 => 206,  474 => 204,  470 => 202,  468 => 201,  465 => 200,  460 => 197,  454 => 195,  452 => 194,  448 => 193,  442 => 192,  436 => 189,  431 => 187,  426 => 184,  424 => 183,  420 => 181,  414 => 179,  412 => 178,  408 => 177,  402 => 176,  396 => 173,  391 => 171,  382 => 164,  380 => 163,  375 => 161,  361 => 149,  359 => 148,  353 => 147,  348 => 145,  341 => 140,  339 => 139,  332 => 137,  328 => 136,  323 => 134,  305 => 119,  288 => 105,  284 => 104,  279 => 102,  275 => 101,  270 => 100,  261 => 97,  258 => 96,  253 => 95,  244 => 92,  241 => 91,  237 => 90,  230 => 85,  220 => 84,  146 => 17,  144 => 16,  134 => 15,  115 => 13,  102 => 10,  98 => 9,  94 => 8,  90 => 7,  82 => 3,  72 => 2,  62 => 84,  58 => 82,  56 => 15,  53 => 14,  51 => 13,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#  {% extends 'base.html.twig' %} #}
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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            display: inline-block;
            min-width: 250px;
        }

        .winner-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .winner-card-title {
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: bold;
        }

        .item-details-page p {
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
                    {% for message in app.flashes('warning') %}
                        <div class=\"alert alert-warning\">
                            {{ message }}</i>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    <h6><span>{{ challenge.DateC ? challenge.DateC|date('d M Y') : '' }}</span></h6>
                    <h2>{{ challenge.Title }}</h2>
                    <img src={{ asset('http://localhost/img/'~challenge.PathIMG) }} alt=\"\"
                         style=\"border-radius: 20px; max-width: 200px;\" height=200>
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
                                <label style=\"color:white;\" for={{ form.Description.vars.id }}>Description</label>
                                <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\"
                                       type=\"title\" value=\"{{ form.Description.vars.value }}\"
                                       name={{ form.Description.vars.full_name }} id={{ form.Description.vars.id }}
                                       placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                                {% do form.Description.setRendered %}
                            </fieldset>
                        </div>

                        <div class=\"col-lg-4\" style=\"margin-top:20px\">
                            <fieldset>
                                <label style=\"color:white;\" for={{ form.Image.vars.id }}>Your Image</label>
                                <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\"
                                       type=\"file\" id={{ form.Image.vars.id }} name={{ form.Image.vars.full_name }} />
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
                                    <a href=\"{{ path('app_participation_show',{'id_participation': best[0].id_participation }) }}\"><img
                                                class=\"winner-picture\"
                                                src=\"{{ asset('http://localhost/img/'~best[0].img_participation) }}\"
                                                alt=\"John Smith\"></a>
                                    <h3 class=\"winner-card-title\">First Place</h3>
                                    <p class=\"purple-text\">{{ best[0].name }} {{ best[0].Last_Name }}</p>
                                    <p>Rating: <span class=\"rating\">{{ best[0].average|round(1) }}</span></p>
                                    {% if best[0].numberRaters!=0 %}
                                        <p>Raters: <span class=\"rating\">{{ best[0].numberRaters }}</span></p>
                                    {% endif %}
                                </div>
                            </div>
                            {% if(best|length>1) %}

                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"{{ path('app_participation_show',{'id_participation': best[1].id_participation }) }}\"><img
                                                    class=\"winner-picture\"
                                                    src=\"{{ asset('http://localhost/img/'~best[1].img_participation) }}\"
                                                    alt=\"Jane Doe\"></a>
                                        <h3 class=\"winner-card-title\">Second Place</h3>
                                        <p class=\"purple-text\">{{ best[1].name }} {{ best[1].Last_Name }}</p>
                                        <p>Rating: <span class=\"rating\">{{ best[1].average|round(1) }}</span></p>
                                        {% if best[1].numberRaters!=0 %}
                                            <p>Raters: <span class=\"rating\">{{ best[1].numberRaters }}</span></p>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}

                            {% if(best|length>2) %}
                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"{{ path('app_participation_show',{'id_participation': best[2].id_participation }) }}\"><img
                                                    class=\"winner-picture\"
                                                    src=\"{{ asset('http://localhost/img/'~best[2].img_participation) }}\"
                                                    alt=\"Bob Johnson\"></a>
                                        <h3 class=\"winner-card-title\">Third Place</h3>
                                        <p class=\"purple-text\">{{ best[2].name }} {{ best[2].Last_Name }}</p>
                                        <p>Rating: <span class=\"rating\">{{ best[2].average|round(1) }}</span></p>
                                        {% if best[2].numberRaters!=0 %}
                                            <p>Raters: <span class=\"rating\">{{ best[2].numberRaters }}</span></p>
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
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\" onchange=\"this.form.click()\">
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
                                            <img src=\"{{ asset('http://localhost/img/'~p.getIMGParticipation()) }}\"
                                                 alt=\"\">
                                        </div>
                                        <div class=\"right-content\">
                                            <h6>{{ p.getIdUser().getName()|capitalize }} {{ p.getIdUser().getLastName()|capitalize }}</h6>
                                            <a href=\"#\">@{{ p.getIdUser().getEmail() }}</a>
                                            <div class=\"line-dec\"></div>
                                            {% if k!=0 %}
                                                <h6>Rating: <em>{{ m }} Stars</em></h6>
                                            {% else %}
                                                <h6><em>not rated</em> yet</h6>
                                            {% endif %}

                                            {% if k!=0 %}
                                                <h6>Raters: <em> {{ n }} </em></h6>
                                            {% endif %}

                                            <a class=\"border-button\"
                                               href=\"{{ path('app_participation_show',{'id_participation': p.getId() }) }}\">
                                                Show </a>
                                        </div>
                                    </div>
                                </div>

                            {% else %}
                                <p> no Participation Yet </p>
                            {% endfor %}
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
