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
class __TwigTemplate_69e01d3f79b19da92a2881ad6dd739b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        // line 2
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 92
        echo "
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo\">
                        <img src=";
        // line 100
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
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "type", [], "any", false, false, false, 115) == "Studio")) {
            // line 116
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
            echo "\">Offres</a></li>
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 117
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "type", [], "any", false, false, false, 117) == "Artist")) {
            // line 118
            echo "
                            <li><a href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
            echo "\">Demandes</a></li>
                        ";
        }
        // line 121
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "type", [], "any", false, false, false, 125) != "Observer")) {
            // line 126
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 128
        echo "                        ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "idUser", [], "any", false, false, false, 128))) {
            // line 129
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 131
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 133
        echo "                    </ul>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
";
        // line 140
        $this->displayBlock('title', $context, $blocks);
        // line 141
        $this->displayBlock('css', $context, $blocks);
        // line 343
        $this->displayBlock('body', $context, $blocks);
        // line 489
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "     ";
        // line 4
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

     ";
        // line 7
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

     ";
        // line 10
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

     ";
        // line 13
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

     ";
        // line 16
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

     ";
        // line 19
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

     ";
        // line 22
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

     <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filters.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 27
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
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

    // line 140
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

    // line 141
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 142
        echo "    ";
        // line 143
        echo "    <link data-require=\"fontawesome@*\" data-semver=\"4.5.0\" rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css\"/>
    <style>
        .rating {
            cursor: pointer;
        }

        .rating .rating-star {
            display: inline-block;
            position: relative;
            padding-right: 5px;
            margin-left: -5px;
            color: #7453FC;
        }

        .rating .selected:before {
            content: '\\f005';
        }

        .avg_flash {
          visibility: hidden;
        }
    </style>
";
        // line 281
        echo "
    ";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "


    <script>
        \$(document).ready(function () {
            if(";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldrating"]) || array_key_exists("oldrating", $context) ? $context["oldrating"] : (function () { throw new RuntimeError('Variable "oldrating" does not exist.', 287, $this->source); })()), "getRating", [], "method", false, false, false, 287), "html", null, true);
        echo ")
            {
              setRating(";
        // line 289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldrating"]) || array_key_exists("oldrating", $context) ? $context["oldrating"] : (function () { throw new RuntimeError('Variable "oldrating" does not exist.', 289, $this->source); })()), "getRating", [], "method", false, false, false, 289), "html", null, true);
        echo ");
            }

            function setRating(rating) {
                
                \$('#form_rating').val(rating);
                // fill all the stars assigning the '.selected' class
                \$('.rating-star').removeClass('fa-star-o').addClass('selected');
                // empty all the stars to the right of the mouse
                \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
            }

            \$('.rating-star')
                .on('mouseover', function (e) {
                    var rating = \$(e.target).data('rating');
                    // fill all the stars
                    \$('.rating-star').removeClass('fa-star-o').addClass('fa-star');
                    // empty all the stars to the right of the mouse
                    \$('.rating-star#rating-' + rating+ ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('mouseleave', function (e) {
                    // empty all the stars except those with class .selected
                    \$('.rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('click', function (e) {
                    var rating = \$(e.target).data('rating');
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/rating/tutoriel/new/'+\$(e.target).data('rating')+'/'+parseInt(document.querySelector('input').value),
                        success: function (response) {
                            // Handle the response from the controller
                          document.getElementById(\"avg_rating\").innerHTML = Math.round(response.avg.avg)+\" Stars\";
                          document.getElementById(\"avg_flash\").style.visibility = 'visible';
                          setTimeout(myGreeting, 3000);
                          function myGreeting() {
                                                  document.getElementById(\"avg_flash\").style.visibility = 'hidden'
                                                }
                        }
                    });
                    setRating(rating);
                })
                .on('keyup', function (e) {
                    // if spacebar is pressed while selecting a star
                    if (e.keyCode === 32) {
                        // set rating (same as clicking on the star)
                        var rating = \$(e.target).data('rating');
                        setRating(rating);
                    }
                });

        
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 343
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 344
        $context["show"] = false;
        // line 345
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
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 356, $this->source); })()), "pathimg", [], "any", false, false, false, 356))), "html", null, true);
        echo "\" alt=\"\" style=\"max-height: 500px; border-radius: 20px;\">
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>";
        // line 360
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 360, $this->source); })()), "title", [], "any", false, false, false, 360), "html", null, true);
        echo "</h4>
          <span class=\"author\">
            <img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/author-02.jpg"), "html", null, true);
        echo "\"\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 363, $this->source); })()), "getIdArtist", [], "method", false, false, false, 363), "getName", [], "method", false, false, false, 363), "html", null, true);
        echo "<br><a href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 363, $this->source); })()), "getIdArtist", [], "method", false, false, false, 363), "getEmail", [], "method", false, false, false, 363), "html", null, true);
        echo "</a></h6>
          </span>
          <p>";
        // line 365
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 365, $this->source); })()), "getDescription", [], "method", false, false, false, 365), "html", null, true);
        echo "</p>
            ";
        // line 366
        if ((isset($context["favori"]) || array_key_exists("favori", $context) ? $context["favori"] : (function () { throw new RuntimeError('Variable "favori" does not exist.', 366, $this->source); })())) {
            // line 367
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_turoial_delete", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 367, $this->source); })()), "getId", [], "method", false, false, false, 367)]), "html", null, true);
            echo "><i class=\"bi bi-heart-fill\"> remove from favoris</i></a>
            ";
        } else {
            // line 369
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_tutoriel_new", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 369, $this->source); })()), "getId", [], "method", false, false, false, 369)]), "html", null, true);
            echo "><i class=\"bi bi-heart\">add to favoris</i></a>
            ";
        }
        // line 371
        echo "

          <div class=\"row\">
              <div class=\"col-4\">
                <span class=\"bid\">
                  Current Rate<br><strong id=\"avg_rating\">";
        // line 376
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["avg"]) || array_key_exists("avg", $context) ? $context["avg"] : (function () { throw new RuntimeError('Variable "avg" does not exist.', 376, $this->source); })()), "avg", [], "any", false, false, false, 376), 1), "html", null, true);
        echo " Stars</strong><br>
                </span>
              </div>

              <div class=\"col-8\">
                <span class=\"bid\">
                  Rate us!
                  <br>
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

                      <div id=\"avg_flash\" class=\"avg_flash\">
                        Thanks for your rating <i class=\"bi bi-check\" style=\"width: 0;height: 100;color: #7453FC;\"></i>
                      </div>

                    <br>
                </span>
            </div>



          </div>
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

            ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 428, $this->source); })()), "videos", [], "any", false, false, false, 428));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 429
            echo "
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\" style=\"height:220px;\">
                  <div class=\"left-img\">
                    <img src=";
            // line 433
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["v"], "getPathimage", [], "method", false, false, false, 433))), "html", null, true);
            echo " alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4 id=\"avg-h4\">";
            // line 436
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 436), 0, 20), "html", null, true);
            echo "...</h4>
                    <a href=";
            // line 437
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_show", ["id_video" => twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 437)]), "html", null, true);
            echo ">Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Views: <em>";
            // line 439
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "Views", [], "any", false, false, false, 439)), "html", null, true);
            echo "</em></h6>
                    <span class=\"date\">";
            // line 440
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 440), "m:h d:m:Y"), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "            
            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <input type=\"number\" style=\"visibility: hidden;\" value=";
        // line 455
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 455, $this->source); })()), "getId", [], "method", false, false, false, 455), "html", null, true);
        echo ">

";
        // line 457
        $this->displayBlock('js', $context, $blocks);
        // line 461
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 457
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 458
        echo "       ";
        // line 459
        echo "        <script data-require=\"jquery@*\" data-semver=\"2.2.0\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
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
        return array (  691 => 459,  689 => 458,  679 => 457,  668 => 461,  666 => 457,  661 => 455,  650 => 446,  638 => 440,  634 => 439,  629 => 437,  625 => 436,  619 => 433,  613 => 429,  609 => 428,  554 => 376,  547 => 371,  541 => 369,  535 => 367,  533 => 366,  529 => 365,  522 => 363,  518 => 362,  513 => 360,  506 => 356,  493 => 345,  491 => 344,  481 => 343,  417 => 289,  412 => 287,  404 => 282,  401 => 281,  376 => 143,  374 => 142,  364 => 141,  345 => 140,  277 => 34,  273 => 33,  269 => 32,  265 => 31,  257 => 27,  247 => 26,  235 => 24,  229 => 22,  223 => 19,  217 => 16,  211 => 13,  205 => 10,  199 => 7,  193 => 4,  191 => 3,  181 => 2,  169 => 489,  167 => 343,  165 => 141,  163 => 140,  154 => 133,  148 => 131,  142 => 129,  139 => 128,  133 => 126,  131 => 125,  127 => 124,  123 => 123,  119 => 122,  114 => 121,  109 => 119,  106 => 118,  104 => 117,  99 => 116,  97 => 115,  90 => 111,  86 => 110,  82 => 109,  78 => 108,  67 => 100,  63 => 99,  54 => 92,  52 => 26,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#  {% extends 'base.html.twig' %}#}
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

     <script src=\"{{ asset('assets/js/filters.js') }}\"></script>
 {% endblock %}
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
{% block title %}Tutoriel{% endblock %}
{% block css %}
    {# {{ parent() }} #}
    <link data-require=\"fontawesome@*\" data-semver=\"4.5.0\" rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css\"/>
    <style>
        .rating {
            cursor: pointer;
        }

        .rating .rating-star {
            display: inline-block;
            position: relative;
            padding-right: 5px;
            margin-left: -5px;
            color: #7453FC;
        }

        .rating .selected:before {
            content: '\\f005';
        }

        .avg_flash {
          visibility: hidden;
        }
    </style>
{#
    <script>
    {{ parent() }}
    {{ encore_entry_script_tags('app') }}
    {{ encore_entry_script_tags('jquery') }}
    <script src=\"{{ asset('js/ajax.js') }}\"></script>

            \$('#order-form').submit(function(event) {
                // Prevent the form from submitting normally
                event.preventDefault();

                var \$firstNameState =0;
                var \$lastNameState = 0;
                var \$numberState = 0;
                var \$addressState = 0;
                var \$codePostalState = 0;
                var \$emailState = 0;


                //extraction des texts fields
                var \$firstName = \$('#first-name').val();
                var \$lastName = \$('#last-name').val();
                var \$number = \$('#number').val();
                var \$address = \$('#address').val();
                var \$codePostal = \$('#code-postal').val();
                var \$email = \$('#email').val();

                //controle de saisie pour les string
                //firstname----------------------------------
                if(!/^[a-zA-Z]+\$/.test(\$firstName)){
                    \$('#first-name-error').text('Please enter a valid first name').show();
                }
                if(/^[a-zA-Z]+\$/.test(\$firstName)){
                    \$('#first-name-error').hide();
                    \$firstNameState =1;
                }

                //lastname------------------------------------
                if(!/^[a-zA-Z]+\$/.test(\$lastName)){
                    \$('#last-name-error').text('Please enter a valid last name').show();
                }
                if(/^[a-zA-Z]+\$/.test(\$lastName)){
                    \$('#last-name-error').hide();
                    \$lastNameState=1;
                }
                //address------------------------------------
                if(!/^[^!*@%]+\$/.test(\$address)){
                    \$('#address-error').text('Please enter a valid address').show();
                }
                if(/^[^!*@%]+\$/.test(\$address)){
                    \$('#address-error').hide();
                    \$addressState=1;
                }

                //number---------------------------------------
                if (!/^[0-9]+\$/.test(\$number) ){
                    \$('#number-error').text('Please enter a valid Phone number').show();
                }
                if (/^[0-9]+\$/.test(\$number) ){
                    \$('#number-error').hide();
                    \$numberState=1;
                }


                //codepostal------------------------------------
                if ( !/^[0-9]+\$/.test(\$codePostal) ){
                    \$('#codepostal-error').text('Please enter a valid code postal').show();
                }
                if ( /^[0-9]+\$/.test(\$codePostal) ){
                    \$('#codepostal-error').hide();
                    \$codePostalState=1;
                }

                //email------------------------------------------
                if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(\$email)) {
                    \$('#email-error').text('Please enter a valid email').show();
                }

                if (/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(\$email)) {
                    \$('#email-error').hide();
                    \$emailState=1;

                    //ken les fields kold format te3hom s7i7
                } if (\$addressState===1 && \$emailState===1 && \$firstNameState===1 && \$lastNameState===1 && \$codePostalState===1 && \$emailState===1 && \$numberState===1) {
                    // Get the form data
                    var formData = {
                        firstname: \$firstName,
                        lastname: \$lastName,
                        number: \$number,
                        address: \$address,
                        codePostal: \$codePostal,
                        email: \$email
                    };
                    // Send the form data to the controller
                    \$.ajax({
                        type: 'POST',
                        url: '{{ path('app_commande_new') }}',
                        data: formData,
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                            if (response.success) {

                                alert(\" you're order Has been Established successfully ! \");
                                window.location.href = '/payment';
                            } else {
                                alert(\" Don't Leave Empty Fields \");
                            }
                        }
                    });
                }
            });
        </script>
        #}

    {{ encore_entry_script_tags('app') }}


    <script>
        \$(document).ready(function () {
            if({{oldrating.getRating()}})
            {
              setRating({{oldrating.getRating()}});
            }

            function setRating(rating) {
                
                \$('#form_rating').val(rating);
                // fill all the stars assigning the '.selected' class
                \$('.rating-star').removeClass('fa-star-o').addClass('selected');
                // empty all the stars to the right of the mouse
                \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
            }

            \$('.rating-star')
                .on('mouseover', function (e) {
                    var rating = \$(e.target).data('rating');
                    // fill all the stars
                    \$('.rating-star').removeClass('fa-star-o').addClass('fa-star');
                    // empty all the stars to the right of the mouse
                    \$('.rating-star#rating-' + rating+ ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('mouseleave', function (e) {
                    // empty all the stars except those with class .selected
                    \$('.rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('click', function (e) {
                    var rating = \$(e.target).data('rating');
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/rating/tutoriel/new/'+\$(e.target).data('rating')+'/'+parseInt(document.querySelector('input').value),
                        success: function (response) {
                            // Handle the response from the controller
                          document.getElementById(\"avg_rating\").innerHTML = Math.round(response.avg.avg)+\" Stars\";
                          document.getElementById(\"avg_flash\").style.visibility = 'visible';
                          setTimeout(myGreeting, 3000);
                          function myGreeting() {
                                                  document.getElementById(\"avg_flash\").style.visibility = 'hidden'
                                                }
                        }
                    });
                    setRating(rating);
                })
                .on('keyup', function (e) {
                    // if spacebar is pressed while selecting a star
                    if (e.keyCode === 32) {
                        // set rating (same as clicking on the star)
                        var rating = \$(e.target).data('rating');
                        setRating(rating);
                    }
                });

        
        });
    </script>
{% endblock %}
{% block body %}
{% set show=false %}
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
            <img src=\"{{ asset('http://localhost/img/'~tutoriel.pathimg) }}\" alt=\"\" style=\"max-height: 500px; border-radius: 20px;\">
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>{{ tutoriel.title }}</h4>
          <span class=\"author\">
            <img src=\"{{ asset('/assets/images/author-02.jpg') }}\"\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>{{ tutoriel.getIdArtist().getName() }}<br><a href=\"#\">{{ tutoriel.getIdArtist().getEmail() }}</a></h6>
          </span>
          <p>{{ tutoriel.getDescription() }}</p>
            {% if(favori) %}
              <a href={{path('app_favoris_turoial_delete',{'id_tutoriel':tutoriel.getId()})}}><i class=\"bi bi-heart-fill\"> remove from favoris</i></a>
            {% else %}
              <a href={{path('app_favoris_tutoriel_new',{'id_tutoriel':tutoriel.getId()})}}><i class=\"bi bi-heart\">add to favoris</i></a>
            {% endif %}


          <div class=\"row\">
              <div class=\"col-4\">
                <span class=\"bid\">
                  Current Rate<br><strong id=\"avg_rating\">{{avg.avg|round(1)}} Stars</strong><br>
                </span>
              </div>

              <div class=\"col-8\">
                <span class=\"bid\">
                  Rate us!
                  <br>
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

                      <div id=\"avg_flash\" class=\"avg_flash\">
                        Thanks for your rating <i class=\"bi bi-check\" style=\"width: 0;height: 100;color: #7453FC;\"></i>
                      </div>

                    <br>
                </span>
            </div>



          </div>
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
                    <h4 id=\"avg-h4\">{{v.title|slice(0, 20)}}...</h4>
                    <a href={{path(\"app_video_show\",{\"id_video\":v.getId()})}}>Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Views: <em>{{v.Views|length}}</em></h6>
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
  <input type=\"number\" style=\"visibility: hidden;\" value={{tutoriel.getId()}}>

{% block js %}
       {#  {{ parent() }}#}
        <script data-require=\"jquery@*\" data-semver=\"2.2.0\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
        {% endblock %}

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
{% endblock %}


", "tutoriel/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\tutoriel\\show.html.twig");
    }
}
