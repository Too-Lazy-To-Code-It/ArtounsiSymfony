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

/* tutoriel/index.html.twig */
class __TwigTemplate_c1e0121857408f09968ff672f4ce255a extends Template
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
            'js' => [$this, 'block_js'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/index.html.twig"));

        // line 2
        echo "<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo\">
                        <img src=";
        // line 9
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
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24) == "Studio")) {
            // line 25
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
            echo "\">Offres</a></li>
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26) == "Artist")) {
            // line 27
            echo "
                            <li><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
            echo "\">Demandes</a></li>
                        ";
        }
        // line 30
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34) != "Observer")) {
            // line 35
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 37
        echo "                        ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "idUser", [], "any", false, false, false, 37))) {
            // line 38
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 40
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 42
        echo "                    </ul>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
";
        // line 49
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 115
        $this->displayBlock('title', $context, $blocks);
        // line 116
        $this->displayBlock('css', $context, $blocks);
        // line 147
        $this->displayBlock('body', $context, $blocks);
        // line 370
        echo "  ";
        $this->displayBlock('js', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 49
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 50
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


     <!-- Additional CSS Files -->
     <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 57
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

    // line 115
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tutoriel index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 117
        echo "   ";
        // line 118
        echo "    <style>

        ul {
            list-style: none;
            color: #684CDB;

        }

        .list {
            width: 100%;
            background-color: #25252F;
            border-radius: 5px 5px 5px 5px;
            margin-top: 5px;
            padding-bottom: 5px;
            margin-left: 10px;
            position: absolute;
            z-index: 2;
            width: 200px;
        }

        .list-items {
            padding: 15px 5px;
        }

        .list-items:hover {
            background-color: #494242;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 148
        echo "    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo\">
                            <img src=";
        // line 155
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
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                    <li><a href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                    <li><a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                    <li><a href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                </div>
                            </div>
                            ";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 170, $this->source); })()), "type", [], "any", false, false, false, 170) == "Studio")) {
            // line 171
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
            echo "\">Offres</a></li>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 172
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 172, $this->source); })()), "type", [], "any", false, false, false, 172) == "Artist")) {
            // line 173
            echo "
                                <li><a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
            echo "\">Demandes</a></li>
                            ";
        }
        // line 176
        echo "                            <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                            <li><a href=\"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                            <li><a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                            ";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 180, $this->source); })()), "type", [], "any", false, false, false, 180) != "Observer")) {
            // line 181
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                            ";
        }
        // line 183
        echo "                            ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 183, $this->source); })()), "idUser", [], "any", false, false, false, 183))) {
            // line 184
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                            ";
        } else {
            // line 186
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                            ";
        }
        // line 188
        echo "                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Tutoriels</h6>
                    <h2>Discover Best Tutoriels</h2>
                    <span>Tutoriels > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <a href=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_favoris");
        echo "\"><span>show favoris</span></a>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">

                            ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["toptutoriels"]) || array_key_exists("toptutoriels", $context) ? $context["toptutoriels"] : (function () { throw new RuntimeError('Variable "toptutoriels" does not exist.', 212, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 213
            echo "                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src=";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["t"], "pathimg", [], "any", false, false, false, 215))), "html", null, true);
            echo " alt=\"\"
                                             style=\"border-radius: 20px;height: 500px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 219), "html", null, true);
            echo "</h4>
                                                <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>made by ";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdArtist", [], "any", false, false, false, 223), "name", [], "any", false, false, false, 223), "html", null, true);
            echo "<br><a
                                    href=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["t"], "getId", [], "method", false, false, false, 224)]), "html", null, true);
            echo "\">show</a></h6>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Our <em>Tutoriels</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">

                    <form id=\"search-form\" autocomplete=\"off\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    ";
        // line 254
        if (((isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 254, $this->source); })()) == "")) {
            // line 255
            echo "                                        <div>
                                            <input id=\"searchtxt\" autocomplete=\"off\" type=\"text\" name=\"keyword\"
                                                   class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>

                                    ";
        } else {
            // line 262
            echo "                                        <div>
                                            <input value=";
            // line 263
            echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 263, $this->source); })()), "html", null, true);
            echo " id=\"searchtxt\" autocomplete=\"off\" type=\"text\"
                                                   name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>
                                    ";
        }
        // line 268
        echo "                                </fieldset>
                            </div>
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    <select default=\$category name=\"Category\" class=\"form-select\"
                                            aria-label=\"Default select example\" id=\"chooseCategory\"
                                            onchange=\"this.form.click()\">
                                        ";
        // line 275
        if (((isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 275, $this->source); })()) == null)) {
            // line 276
            echo "                                            <option value=null selected>All Categories</option>
                                        ";
        } else {
            // line 278
            echo "                                            <option value=null>All Categories</option>
                                        ";
        }
        // line 280
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 280, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 281
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 281) == (isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 281, $this->source); })()))) {
                // line 282
                echo "                                                <option selected
                                                        value=\"";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 283), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 283), "html", null, true);
                echo "</option>
                                            ";
            } else {
                // line 285
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 285), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 285), "html", null, true);
                echo "</option>
                                            ";
            }
            // line 287
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                    </select>
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
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 300, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 301
            echo "                    <div class=\"col-lg-3\">
                        <div class=\"item\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                <span class=\"author\">
                ";
            // line 306
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdCategorie", [], "method", false, false, false, 306), "getNameCategory", [], "method", false, false, false, 306) == "2d")) {
                // line 307
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/2d.png"), "html", null, true);
                echo "\" alt=\"\"
                         style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 310
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdCategorie", [], "method", false, false, false, 310), "getNameCategory", [], "method", false, false, false, 310) == "3d")) {
                // line 311
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/3d.png"), "html", null, true);
                echo "\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    ";
            }
            // line 314
            echo "                </span>
                                    <img src=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["t"], "pathimg", [], "any", false, false, false, 315))), "html", null, true);
            echo "\" alt=\"\"
                                         style=\"border-radius: 20px; max-width: 500px; height: 250px; \">
                                    <h4>";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 317), "html", null, true);
            echo "</h4>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"line-dec\"></div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <span>Level: <br> <strong>";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "niveau", [], "any", false, false, false, 323), "html", null, true);
            echo "</strong></span>
                                        </div>
                                        <div class=\"col-6\">
                                            ";
            // line 326
            $context["lastupdate"] = twig_date_converter($this->env, "01-01-1999");
            // line 327
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["t"], "videos", [], "any", false, false, false, 327));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 328
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 328) > (isset($context["lastupdate"]) || array_key_exists("lastupdate", $context) ? $context["lastupdate"] : (function () { throw new RuntimeError('Variable "lastupdate" does not exist.', 328, $this->source); })()))) {
                    // line 329
                    echo "                                                    ";
                    $context["lastupdate"] = twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 329);
                    // line 330
                    echo "                                                ";
                }
                // line 331
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "                                            ";
            if (((isset($context["lastupdate"]) || array_key_exists("lastupdate", $context) ? $context["lastupdate"] : (function () { throw new RuntimeError('Variable "lastupdate" does not exist.', 332, $this->source); })()) == twig_date_converter($this->env, "01-01-1999"))) {
                // line 333
                echo "                                                ";
                $context["lastupdate"] = twig_date_converter($this->env, "01-01-2023");
                // line 334
                echo "                                            ";
            }
            // line 335
            echo "                                            <span>Last Update: <br> <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["lastupdate"]) || array_key_exists("lastupdate", $context) ? $context["lastupdate"] : (function () { throw new RuntimeError('Variable "lastupdate" does not exist.', 335, $this->source); })()), "d M Y"), "html", null, true);
            echo " </strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"main-button\">
                                        <a href=\"";
            // line 341
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["t"], "getId", [], "method", false, false, false, 341)]), "html", null, true);
            echo "\">show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        echo "                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 349
(isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 349, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 358
        echo "

            </div>
        </div>
    </div>
    </div>
    ";
        // line 364
        $context["tab"] = [];
        // line 365
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 365, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 366
            echo "        ";
            $context["tab"] = twig_array_merge((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 366, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 366)]);
            // line 367
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 370
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 371
        echo "      ";
        // line 372
        echo "      <script>
          \$.ajax({
              type: 'GET',
              url: 'http://127.0.0.1:8000/tutoriel/show/names',
              success: function (response) {
                  // Handle the response from the controller
                  let names = response.names;

                  let sortedNames = names.sort();
                  let input = document.getElementById(\"searchtxt\");
                  tab = [];
                  input.addEventListener(\"keyup\", (e) => {
                      //loop through above array
                      removeElements();
                      sortedNames.forEach(i => {
                          //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                          if (
                              i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                              input.value != \"\"
                          ) {
                              let listItem = document.createElement(\"li\");
                              // One common class name
                              listItem.classList.add(\"list-items\");
                              listItem.style.cursor = \"pointer\";
                              listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                              //Display match part in bold
                              let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                              word += i.substr(input.value.length);
                              console.log(word);
                              //display the value in array
                              listItem.innerHTML = word;
                              document.querySelector(\".list\").appendChild(listItem);
                          }
                      });
                  });

                  function displayNames(value) {
                      input.value = value;
                      removeElements();
                  }

                  function removeElements() {
                      //clear all the item
                      let items = document.querySelectorAll(\".list-items\");
                      items.forEach((item) => {
                          console.log(\"1\");
                          item.remove();
                      });
                  }

              }

          });

          let names = ['swipi', 'monalisa', 'bb', 'kkd'];

          let sortedNames = names.sort();
          let input = document.getElementById(\"searchtxt\");
          tab = [];
          input.addEventListener(\"keyup\", (e) => {
              //loop through above array
              removeElements();
              sortedNames.forEach(i => {
                  //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                  if (
                      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                      input.value != \"\"
                  ) {
                      let listItem = document.createElement(\"li\");
                      // One common class name
                      listItem.classList.add(\"list-items\");
                      listItem.style.cursor = \"pointer\";
                      listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                      //Display match part in bold
                      let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                      word += i.substr(input.value.length);
                      console.log(word);
                      //display the value in array
                      listItem.innerHTML = word;
                      document.querySelector(\".list\").appendChild(listItem);
                  }
              });
          });

          function displayNames(value) {
              input.value = value;
              removeElements();
          }

          function removeElements() {
              //clear all the item
              let items = document.querySelectorAll(\".list-items\");
              items.forEach((item) => {
                  console.log(\"1\");
                  item.remove();
              });
          }
      </script>
      ";
        // line 470
        $this->loadTemplate("chat/index.html.twig", "tutoriel/index.html.twig", 470)->display($context);
        // line 471
        echo "      ";
        $this->displayBlock('footer', $context, $blocks);
        // line 485
        echo "
      <!-- Scripts -->
      <!-- Bootstrap core JavaScript -->
      ";
        // line 488
        $this->displayBlock('javascripts', $context, $blocks);
        // line 510
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 471
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 472
        echo "          <footer>
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-lg-12\">
                          <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                              &nbsp;&nbsp;
                              Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                             target=\"_blank\">TemplateMo</a></p>
                      </div>
                  </div>
              </div>
          </footer>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 488
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 489
        echo "          ";
        // line 490
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

          ";
        // line 493
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

          ";
        // line 496
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

          ";
        // line 499
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

          ";
        // line 502
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

          ";
        // line 505
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

          ";
        // line 508
        echo "          <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  994 => 508,  988 => 505,  982 => 502,  976 => 499,  970 => 496,  964 => 493,  958 => 490,  956 => 489,  946 => 488,  924 => 472,  914 => 471,  903 => 510,  901 => 488,  896 => 485,  893 => 471,  891 => 470,  791 => 372,  789 => 371,  779 => 370,  768 => 368,  762 => 367,  759 => 366,  754 => 365,  752 => 364,  744 => 358,  742 => 349,  740 => 348,  727 => 341,  717 => 335,  714 => 334,  711 => 333,  708 => 332,  702 => 331,  699 => 330,  696 => 329,  693 => 328,  688 => 327,  686 => 326,  680 => 323,  671 => 317,  666 => 315,  663 => 314,  656 => 311,  653 => 310,  646 => 307,  644 => 306,  637 => 301,  633 => 300,  619 => 288,  613 => 287,  605 => 285,  598 => 283,  595 => 282,  592 => 281,  587 => 280,  583 => 278,  579 => 276,  577 => 275,  568 => 268,  560 => 263,  557 => 262,  548 => 255,  546 => 254,  521 => 231,  508 => 224,  504 => 223,  497 => 219,  490 => 215,  486 => 213,  482 => 212,  472 => 205,  453 => 188,  447 => 186,  441 => 184,  438 => 183,  432 => 181,  430 => 180,  426 => 179,  422 => 178,  418 => 177,  413 => 176,  408 => 174,  405 => 173,  403 => 172,  398 => 171,  396 => 170,  389 => 166,  385 => 165,  381 => 164,  377 => 163,  366 => 155,  362 => 154,  354 => 148,  344 => 147,  306 => 118,  304 => 117,  294 => 116,  275 => 115,  207 => 57,  203 => 56,  199 => 55,  195 => 54,  187 => 50,  177 => 49,  166 => 370,  164 => 147,  162 => 116,  160 => 115,  158 => 49,  149 => 42,  143 => 40,  137 => 38,  134 => 37,  128 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  109 => 30,  104 => 28,  101 => 27,  99 => 26,  94 => 25,  92 => 24,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  62 => 9,  58 => 8,  50 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#  {% extends 'base.html.twig' %}#}
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
{% block title %}Tutoriel index{% endblock %}
{% block css %}
   {# {{ parent() }}#}
    <style>

        ul {
            list-style: none;
            color: #684CDB;

        }

        .list {
            width: 100%;
            background-color: #25252F;
            border-radius: 5px 5px 5px 5px;
            margin-top: 5px;
            padding-bottom: 5px;
            margin-left: 10px;
            position: absolute;
            z-index: 2;
            width: 200px;
        }

        .list-items {
            padding: 15px 5px;
        }

        .list-items:hover {
            background-color: #494242;
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
    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Tutoriels</h6>
                    <h2>Discover Best Tutoriels</h2>
                    <span>Tutoriels > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <a href=\"{{ path('app_tutoriel_favoris') }}\"><span>show favoris</span></a>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">

                            {% for t in toptutoriels %}
                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src={{ asset('http://localhost/img/'~t.pathimg) }} alt=\"\"
                                             style=\"border-radius: 20px;height: 500px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>{{ t.title }}</h4>
                                                <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>made by {{ t.getIdArtist.name }}<br><a
                                    href=\"{{ path('app_tutoriel_show', {'id_tutoriel': t.getId()}) }}\">show</a></h6>
                      </span>
                                            </div>
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

    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Our <em>Tutoriels</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">

                    <form id=\"search-form\" autocomplete=\"off\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    {% if(keyword==\"\") %}
                                        <div>
                                            <input id=\"searchtxt\" autocomplete=\"off\" type=\"text\" name=\"keyword\"
                                                   class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>

                                    {% else %}
                                        <div>
                                            <input value={{ keyword }} id=\"searchtxt\" autocomplete=\"off\" type=\"text\"
                                                   name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>
                                    {% endif %}
                                </fieldset>
                            </div>
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    <select default=\$category name=\"Category\" class=\"form-select\"
                                            aria-label=\"Default select example\" id=\"chooseCategory\"
                                            onchange=\"this.form.click()\">
                                        {% if(Categorie==null) %}
                                            <option value=null selected>All Categories</option>
                                        {% else %}
                                            <option value=null>All Categories</option>
                                        {% endif %}
                                        {% for category in categories %}
                                            {% if(category.getId_category()==Categorie) %}
                                                <option selected
                                                        value=\"{{ category.getId_category() }}\">{{ category.getNameCategory() }}</option>
                                            {% else %}
                                                <option value=\"{{ category.getId_category() }}\">{{ category.getNameCategory() }}</option>
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

                {% for t in tutoriels %}
                    <div class=\"col-lg-3\">
                        <div class=\"item\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                <span class=\"author\">
                {% if(t.getIdCategorie().getNameCategory()==\"2d\") %}
                    <img src=\"{{ asset('assets/images/2d.png') }}\" alt=\"\"
                         style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                    {% if(t.getIdCategorie().getNameCategory()==\"3d\") %}
                        <img src=\"{{ asset('assets/images/3d.png') }}\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    {% endif %}
                </span>
                                    <img src=\"{{ asset('http://localhost/img/'~t.pathimg) }}\" alt=\"\"
                                         style=\"border-radius: 20px; max-width: 500px; height: 250px; \">
                                    <h4>{{ t.title }}</h4>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"line-dec\"></div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <span>Level: <br> <strong>{{ t.niveau }}</strong></span>
                                        </div>
                                        <div class=\"col-6\">
                                            {% set lastupdate = date('01-01-1999') %}
                                            {% for v in t.videos %}
                                                {% if(v.getDateP()>lastupdate) %}
                                                    {% set lastupdate = v.getDateP() %}
                                                {% endif %}
                                            {% endfor %}
                                            {% if(lastupdate==date('01-01-1999')) %}
                                                {% set lastupdate = date('01-01-2023') %}
                                            {% endif %}
                                            <span>Last Update: <br> <strong>{{ lastupdate|date('d M Y') }} </strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"main-button\">
                                        <a href=\"{{ path('app_tutoriel_show', {'id_tutoriel': t.getId()}) }}\">show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                {{ knp_pagination_render(
                    tutoriels,
                    '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',
                    {
                        'queryParam1': 'param1 value',
                        'queryParam2': 'param2 value'
                    },
                    {
                        'align': 'center',
                    },
                ) }}

            </div>
        </div>
    </div>
    </div>
    {% set tab = [] %}
    {% for t in tutoriels %}
        {% set tab = tab|merge([t.title]) %}
    {% endfor %}

{% endblock %}
  {% block js %}
      {#{{ parent() }}#}
      <script>
          \$.ajax({
              type: 'GET',
              url: 'http://127.0.0.1:8000/tutoriel/show/names',
              success: function (response) {
                  // Handle the response from the controller
                  let names = response.names;

                  let sortedNames = names.sort();
                  let input = document.getElementById(\"searchtxt\");
                  tab = [];
                  input.addEventListener(\"keyup\", (e) => {
                      //loop through above array
                      removeElements();
                      sortedNames.forEach(i => {
                          //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                          if (
                              i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                              input.value != \"\"
                          ) {
                              let listItem = document.createElement(\"li\");
                              // One common class name
                              listItem.classList.add(\"list-items\");
                              listItem.style.cursor = \"pointer\";
                              listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                              //Display match part in bold
                              let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                              word += i.substr(input.value.length);
                              console.log(word);
                              //display the value in array
                              listItem.innerHTML = word;
                              document.querySelector(\".list\").appendChild(listItem);
                          }
                      });
                  });

                  function displayNames(value) {
                      input.value = value;
                      removeElements();
                  }

                  function removeElements() {
                      //clear all the item
                      let items = document.querySelectorAll(\".list-items\");
                      items.forEach((item) => {
                          console.log(\"1\");
                          item.remove();
                      });
                  }

              }

          });

          let names = ['swipi', 'monalisa', 'bb', 'kkd'];

          let sortedNames = names.sort();
          let input = document.getElementById(\"searchtxt\");
          tab = [];
          input.addEventListener(\"keyup\", (e) => {
              //loop through above array
              removeElements();
              sortedNames.forEach(i => {
                  //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                  if (
                      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                      input.value != \"\"
                  ) {
                      let listItem = document.createElement(\"li\");
                      // One common class name
                      listItem.classList.add(\"list-items\");
                      listItem.style.cursor = \"pointer\";
                      listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                      //Display match part in bold
                      let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                      word += i.substr(input.value.length);
                      console.log(word);
                      //display the value in array
                      listItem.innerHTML = word;
                      document.querySelector(\".list\").appendChild(listItem);
                  }
              });
          });

          function displayNames(value) {
              input.value = value;
              removeElements();
          }

          function removeElements() {
              //clear all the item
              let items = document.querySelectorAll(\".list-items\");
              items.forEach((item) => {
                  console.log(\"1\");
                  item.remove();
              });
          }
      </script>
      {% include \"chat/index.html.twig\" %}
      {% block footer %}
          <footer>
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-lg-12\">
                          <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                              &nbsp;&nbsp;
                              Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                             target=\"_blank\">TemplateMo</a></p>
                      </div>
                  </div>
              </div>
          </footer>
      {% endblock %}

      <!-- Scripts -->
      <!-- Bootstrap core JavaScript -->
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

  {% endblock %}
", "tutoriel/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\tutoriel\\index.html.twig");
    }
}
