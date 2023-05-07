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
        // line 68
        $this->displayBlock('title', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('css', $context, $blocks);
        // line 137
        echo "

";
        // line 139
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
      <style>
          .dropdown {
              position: relative;
              display: inline-block;
          }

          .dropbtn {

              padding: 12px;
              font-size: 16px;
              border: none;
              cursor: pointer;
          }

          .dropdown-content {
              display: none;
              position: absolute;
              z-index: 1;
          }

          .dropdown-submenu {
              position: relative;
          }

          .dropdown-submenu:hover .dropdown-submenu-content {
              display: block;
          }

          .dropdown-submenu-content {
              display: none;
              position: absolute;
              left: 100%;
              top: 0;
              margin-top: -1px;
          }

          .dropdown-content a {

              padding: 12px 16px;
              text-decoration: none;
              display: block;
          }

          .dropdown-content a:hover {

          }

          .dropdown:hover .dropdown-content {
              display: block;
          }

          .dropdown:hover .dropbtn {

          }
      </style>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
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

    // line 70
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 71
        echo "    ";
        // line 72
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

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 140
        echo "    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo\">
                            <img src=";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo " alt=\"\">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <div class=\"dropdown\">
                                <li><a>Art</a></li>
                                <div class=\"dropdown-content\">
                                    <li><a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                    <li><a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                    <li><a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                    <li><a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                </div>
                            </div>
                            ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "type", [], "any", false, false, false, 162) == "Studio")) {
            // line 163
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
            echo "\">Offres</a></li>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 164
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 164, $this->source); })()), "type", [], "any", false, false, false, 164) == "Artist")) {
            // line 165
            echo "
                                <li><a href=\"";
            // line 166
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
            echo "\">Demandes</a></li>
                            ";
        }
        // line 168
        echo "                            <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                            <li><a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                            <li><a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                            ";
        // line 172
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 172, $this->source); })()), "type", [], "any", false, false, false, 172) != "Observer")) {
            // line 173
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                            ";
        }
        // line 175
        echo "                            ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "idUser", [], "any", false, false, false, 175))) {
            // line 176
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                            ";
        } else {
            // line 178
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                            ";
        }
        // line 180
        echo "                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class=\"page-heading normal-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 191));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 192
            echo "                        <div class=\"alert alert-warning\">
                            ";
            // line 193
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 196));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 197
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 198
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                    <h6><span>";
        ((twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 201, $this->source); })()), "DateC", [], "any", false, false, false, 201)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 201, $this->source); })()), "DateC", [], "any", false, false, false, 201), "d M Y"), "html", null, true))) : (print ("")));
        echo "</span></h6>
                    <h2>";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 202, $this->source); })()), "Title", [], "any", false, false, false, 202), "html", null, true);
        echo "</h2>
                    <img src=";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 203, $this->source); })()), "PathIMG", [], "any", false, false, false, 203))), "html", null, true);
        echo " alt=\"\"
                         style=\"border-radius: 20px; max-width: 200px;\" height=200>
                    <h6>";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 205, $this->source); })()), "Description", [], "any", false, false, false, 205), "html", null, true);
        echo "</h6>
                    <span>Level : ";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 206, $this->source); })()), "Niveau", [], "any", false, false, false, 206), "html", null, true);
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
        // line 220
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "Description", [], "any", false, false, false, 235), "vars", [], "any", false, false, false, 235), "id", [], "any", false, false, false, 235), "html", null, true);
        echo ">Description</label>
                                <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\"
                                       type=\"title\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "Description", [], "any", false, false, false, 237), "vars", [], "any", false, false, false, 237), "value", [], "any", false, false, false, 237), "html", null, true);
        echo "\"
                                       name=";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "Description", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "full_name", [], "any", false, false, false, 238), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "Description", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "id", [], "any", false, false, false, 238), "html", null, true);
        echo "
                                       placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                                ";
        // line 240
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "Description", [], "any", false, false, false, 240), "setRendered", [], "any", false, false, false, 240);
        // line 241
        echo "                            </fieldset>
                        </div>

                        <div class=\"col-lg-4\" style=\"margin-top:20px\">
                            <fieldset>
                                <label style=\"color:white;\" for=";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "Image", [], "any", false, false, false, 246), "vars", [], "any", false, false, false, 246), "id", [], "any", false, false, false, 246), "html", null, true);
        echo ">Your Image</label>
                                <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\"
                                       type=\"file\" id=";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "Image", [], "any", false, false, false, 248), "vars", [], "any", false, false, false, 248), "id", [], "any", false, false, false, 248), "html", null, true);
        echo " name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "Image", [], "any", false, false, false, 248), "vars", [], "any", false, false, false, 248), "full_name", [], "any", false, false, false, 248), "html", null, true);
        echo " />
                                ";
        // line 249
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "Image", [], "any", false, false, false, 249), "setRendered", [], "any", false, false, false, 249);
        // line 250
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
        // line 262
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), 'form_end');
        echo "

                ";
        // line 264
        if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 264, $this->source); })())) > 0)) {
            // line 265
            echo "
                    <h1 class=\"page-title\">Challenge Best</h1>
                    <div class=\"winner-container container\">
                        <div class=\"row justify-content-center\">

                            <div class=\"col-md-4\">
                                <div class=\"winner-card\">
                                    <a href=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 272, $this->source); })()), 0, [], "array", false, false, false, 272), "id_participation", [], "any", false, false, false, 272)]), "html", null, true);
            echo "\"><img
                                                class=\"winner-picture\"
                                                src=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 274, $this->source); })()), 0, [], "array", false, false, false, 274), "img_participation", [], "any", false, false, false, 274))), "html", null, true);
            echo "\"
                                                alt=\"John Smith\"></a>
                                    <h3 class=\"winner-card-title\">First Place</h3>
                                    <p class=\"purple-text\">";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 277, $this->source); })()), 0, [], "array", false, false, false, 277), "name", [], "any", false, false, false, 277), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 277, $this->source); })()), 0, [], "array", false, false, false, 277), "Last_Name", [], "any", false, false, false, 277), "html", null, true);
            echo "</p>
                                    <p>Rating: <span class=\"rating\">";
            // line 278
            echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 278, $this->source); })()), 0, [], "array", false, false, false, 278), "average", [], "any", false, false, false, 278), 1), "html", null, true);
            echo "</span></p>
                                    ";
            // line 279
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 279, $this->source); })()), 0, [], "array", false, false, false, 279), "numberRaters", [], "any", false, false, false, 279) != 0)) {
                // line 280
                echo "                                        <p>Raters: <span class=\"rating\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 280, $this->source); })()), 0, [], "array", false, false, false, 280), "numberRaters", [], "any", false, false, false, 280), "html", null, true);
                echo "</span></p>
                                    ";
            }
            // line 282
            echo "                                </div>
                            </div>
                            ";
            // line 284
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 284, $this->source); })())) > 1)) {
                // line 285
                echo "
                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"";
                // line 288
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 288, $this->source); })()), 1, [], "array", false, false, false, 288), "id_participation", [], "any", false, false, false, 288)]), "html", null, true);
                echo "\"><img
                                                    class=\"winner-picture\"
                                                    src=\"";
                // line 290
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 290, $this->source); })()), 1, [], "array", false, false, false, 290), "img_participation", [], "any", false, false, false, 290))), "html", null, true);
                echo "\"
                                                    alt=\"Jane Doe\"></a>
                                        <h3 class=\"winner-card-title\">Second Place</h3>
                                        <p class=\"purple-text\">";
                // line 293
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 293, $this->source); })()), 1, [], "array", false, false, false, 293), "name", [], "any", false, false, false, 293), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 293, $this->source); })()), 1, [], "array", false, false, false, 293), "Last_Name", [], "any", false, false, false, 293), "html", null, true);
                echo "</p>
                                        <p>Rating: <span class=\"rating\">";
                // line 294
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 294, $this->source); })()), 1, [], "array", false, false, false, 294), "average", [], "any", false, false, false, 294), 1), "html", null, true);
                echo "</span></p>
                                        ";
                // line 295
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 295, $this->source); })()), 1, [], "array", false, false, false, 295), "numberRaters", [], "any", false, false, false, 295) != 0)) {
                    // line 296
                    echo "                                            <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 296, $this->source); })()), 1, [], "array", false, false, false, 296), "numberRaters", [], "any", false, false, false, 296), "html", null, true);
                    echo "</span></p>
                                        ";
                }
                // line 298
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 301
            echo "
                            ";
            // line 302
            if ((twig_length_filter($this->env, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 302, $this->source); })())) > 2)) {
                // line 303
                echo "                                <div class=\"col-md-4\">
                                    <div class=\"winner-card\">
                                        <a href=\"";
                // line 305
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 305, $this->source); })()), 2, [], "array", false, false, false, 305), "id_participation", [], "any", false, false, false, 305)]), "html", null, true);
                echo "\"><img
                                                    class=\"winner-picture\"
                                                    src=\"";
                // line 307
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 307, $this->source); })()), 2, [], "array", false, false, false, 307), "img_participation", [], "any", false, false, false, 307))), "html", null, true);
                echo "\"
                                                    alt=\"Bob Johnson\"></a>
                                        <h3 class=\"winner-card-title\">Third Place</h3>
                                        <p class=\"purple-text\">";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 310, $this->source); })()), 2, [], "array", false, false, false, 310), "name", [], "any", false, false, false, 310), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 310, $this->source); })()), 2, [], "array", false, false, false, 310), "Last_Name", [], "any", false, false, false, 310), "html", null, true);
                echo "</p>
                                        <p>Rating: <span class=\"rating\">";
                // line 311
                echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 311, $this->source); })()), 2, [], "array", false, false, false, 311), "average", [], "any", false, false, false, 311), 1), "html", null, true);
                echo "</span></p>
                                        ";
                // line 312
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 312, $this->source); })()), 2, [], "array", false, false, false, 312), "numberRaters", [], "any", false, false, false, 312) != 0)) {
                    // line 313
                    echo "                                            <p>Raters: <span class=\"rating\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["best"]) || array_key_exists("best", $context) ? $context["best"] : (function () { throw new RuntimeError('Variable "best" does not exist.', 313, $this->source); })()), 2, [], "array", false, false, false, 313), "numberRaters", [], "any", false, false, false, 313), "html", null, true);
                    echo "</span></p>
                                        ";
                }
                // line 315
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 318
            echo "                        </div>
                    </div>
                ";
        }
        // line 321
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
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 342, $this->source); })()), "participations", [], "any", false, false, false, 342));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 343
            echo "
                                ";
            // line 344
            $context["k"] = 0;
            // line 345
            echo "                                ";
            $context["n"] = 0;
            // line 346
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 346, $this->source); })()), "ratings", [], "any", false, false, false, 346));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 347
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getParticipatorId", [], "method", false, false, false, 347), "getid_user", [], "method", false, false, false, 347) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "any", false, false, false, 347), "getid_user", [], "method", false, false, false, 347))) {
                    // line 348
                    echo "
                                        ";
                    // line 349
                    $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 349, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["r"], "getRating", [], "method", false, false, false, 349));
                    // line 350
                    echo "                                        ";
                    $context["n"] = ((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 350, $this->source); })()) + 1);
                    // line 351
                    echo "                                    ";
                }
                // line 352
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "                                ";
            if (((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 354, $this->source); })()) != 0)) {
                // line 355
                echo "                                    ";
                $context["m"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 355, $this->source); })()) / (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 355, $this->source); })()));
                // line 356
                echo "                                ";
            } else {
                // line 357
                echo "                                    ";
                $context["m"] = 0;
                // line 358
                echo "                                ";
            }
            // line 359
            echo "
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"item\">
                                        <div class=\"left-img\">
                                            <img src=\"";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 363))), "html", null, true);
            echo "\"
                                                 alt=\"\">
                                        </div>
                                        <div class=\"right-content\">
                                            <h6>";
            // line 367
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 367), "getName", [], "method", false, false, false, 367)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 367), "getLastName", [], "method", false, false, false, 367)), "html", null, true);
            echo "</h6>
                                            <a href=\"#\">@";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 368), "getEmail", [], "method", false, false, false, 368), "html", null, true);
            echo "</a>
                                            <div class=\"line-dec\"></div>
                                            ";
            // line 370
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 370, $this->source); })()) != 0)) {
                // line 371
                echo "                                                <h6>Rating: <em>";
                echo twig_escape_filter($this->env, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 371, $this->source); })()), "html", null, true);
                echo " Stars</em></h6>
                                            ";
            } else {
                // line 373
                echo "                                                <h6><em>not rated</em> yet</h6>
                                            ";
            }
            // line 375
            echo "
                                            ";
            // line 376
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 376, $this->source); })()) != 0)) {
                // line 377
                echo "                                                <h6>Raters: <em> ";
                echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 377, $this->source); })()), "html", null, true);
                echo " </em></h6>
                                            ";
            }
            // line 379
            echo "
                                            <a class=\"border-button\"
                                               href=\"";
            // line 381
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id_participation" => twig_get_attribute($this->env, $this->source, $context["p"], "getId", [], "method", false, false, false, 381)]), "html", null, true);
            echo "\">
                                                Show </a>
                                        </div>
                                    </div>
                                </div>

                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 388
            echo "                                <p> no Participation Yet </p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
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
        // line 403
        $this->displayBlock('javascripts', $context, $blocks);
        // line 425
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 403
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 404
        echo "        ";
        // line 405
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 408
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 411
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 414
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 417
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 420
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 423
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
        return array (  896 => 423,  890 => 420,  884 => 417,  878 => 414,  872 => 411,  866 => 408,  860 => 405,  858 => 404,  848 => 403,  837 => 425,  835 => 403,  820 => 390,  813 => 388,  801 => 381,  797 => 379,  791 => 377,  789 => 376,  786 => 375,  782 => 373,  776 => 371,  774 => 370,  769 => 368,  763 => 367,  756 => 363,  750 => 359,  747 => 358,  744 => 357,  741 => 356,  738 => 355,  735 => 354,  728 => 352,  725 => 351,  722 => 350,  720 => 349,  717 => 348,  714 => 347,  709 => 346,  706 => 345,  704 => 344,  701 => 343,  696 => 342,  673 => 321,  668 => 318,  663 => 315,  657 => 313,  655 => 312,  651 => 311,  645 => 310,  639 => 307,  634 => 305,  630 => 303,  628 => 302,  625 => 301,  620 => 298,  614 => 296,  612 => 295,  608 => 294,  602 => 293,  596 => 290,  591 => 288,  586 => 285,  584 => 284,  580 => 282,  574 => 280,  572 => 279,  568 => 278,  562 => 277,  556 => 274,  551 => 272,  542 => 265,  540 => 264,  535 => 262,  521 => 250,  519 => 249,  513 => 248,  508 => 246,  501 => 241,  499 => 240,  492 => 238,  488 => 237,  483 => 235,  465 => 220,  448 => 206,  444 => 205,  439 => 203,  435 => 202,  430 => 201,  421 => 198,  418 => 197,  413 => 196,  404 => 193,  401 => 192,  397 => 191,  384 => 180,  378 => 178,  372 => 176,  369 => 175,  363 => 173,  361 => 172,  357 => 171,  353 => 170,  349 => 169,  344 => 168,  339 => 166,  336 => 165,  334 => 164,  329 => 163,  327 => 162,  320 => 158,  316 => 157,  312 => 156,  308 => 155,  297 => 147,  293 => 146,  285 => 140,  275 => 139,  201 => 72,  199 => 71,  189 => 70,  170 => 68,  102 => 10,  98 => 9,  94 => 8,  90 => 7,  82 => 3,  72 => 2,  62 => 139,  58 => 137,  56 => 70,  53 => 69,  51 => 68,  48 => 2,);
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
      <style>
          .dropdown {
              position: relative;
              display: inline-block;
          }

          .dropbtn {

              padding: 12px;
              font-size: 16px;
              border: none;
              cursor: pointer;
          }

          .dropdown-content {
              display: none;
              position: absolute;
              z-index: 1;
          }

          .dropdown-submenu {
              position: relative;
          }

          .dropdown-submenu:hover .dropdown-submenu-content {
              display: block;
          }

          .dropdown-submenu-content {
              display: none;
              position: absolute;
              left: 100%;
              top: 0;
              margin-top: -1px;
          }

          .dropdown-content a {

              padding: 12px 16px;
              text-decoration: none;
              display: block;
          }

          .dropdown-content a:hover {

          }

          .dropdown:hover .dropdown-content {
              display: block;
          }

          .dropdown:hover .dropbtn {

          }
      </style>
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
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"{{ path('app_home') }}\" class=\"logo\">
                            <img src={{ asset(\"assets/images/logo.png\") }} alt=\"\">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <div class=\"dropdown\">
                                <li><a>Art</a></li>
                                <div class=\"dropdown-content\">
                                    <li><a href=\"{{ path('app_explore') }}\">Explore</a></li>
                                    <li><a href=\"{{ path('app_blog') }}\">Blog</a></li>
                                    <li><a href=\"{{ path('app_map') }}\">Studios</a></li>
                                    <li><a href=\"{{ path('app_post_new') }}\">Create Yours</a></li>

                                </div>
                            </div>
                            {% if(user.type=='Studio') %}
                                <li><a href=\"{{ path('app_offretravail_index') }}\">Offres</a></li>
                            {% elseif(user.type=='Artist') %}

                                <li><a href=\"{{ path('app_demandetravail_index') }}\">Demandes</a></li>
                            {% endif %}
                            <li><a href=\"{{ path('app_produits_index') }}\">Shop</a></li>
                            <li><a href=\"{{ path('app_panier_show' , {'idpanier': '1'}) }}\">Panier</a></li>
                            <li><a href=\"{{ path('app_challenge_index') }}\">Challenges</a></li>
                            <li><a href=\"{{ path('app_tutoriel_index') }}\">Tutoriels</a></li>
                            {%if(user.type!='Observer') %}
                                <li><a href=\"{{ path('app_dashboard_studiodashboard') }}\">dashboard </a></li>
                            {% endif %}
                            {% if(user.idUser is null) %}
                                <li><a href=\"{{ path('app_allusers_login') }}\">Log In</a></li>
                            {% else %}
                                <li><a href=\"{{ path('app_allusers_logout') }}\">Logout</a></li>
                            {% endif %}
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
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
